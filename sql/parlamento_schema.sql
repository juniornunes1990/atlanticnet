-- Esquema inicial para sistema de votação parlamentar
-- Compatível com MySQL 8+

CREATE TABLE IF NOT EXISTS parl_roles (
    idrole INT AUTO_INCREMENT PRIMARY KEY,
    role_code VARCHAR(30) NOT NULL UNIQUE,
    role_name VARCHAR(60) NOT NULL
);

INSERT INTO parl_roles (role_code, role_name) VALUES
('PRESIDENTE', 'Presidente'),
('VICE_PRESIDENTE', 'Vice-presidente'),
('SECRETARIO_1', '1º Secretário'),
('SECRETARIO_2', '2º Secretário'),
('VEREADOR', 'Vereador')
ON DUPLICATE KEY UPDATE role_name = VALUES(role_name);

CREATE TABLE IF NOT EXISTS parl_users (
    iduser INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(120) NOT NULL,
    login VARCHAR(60) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(120) NULL,
    active TINYINT(1) NOT NULL DEFAULT 1,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NULL ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS parl_mandates (
    idmandate INT AUTO_INCREMENT PRIMARY KEY,
    iduser INT NOT NULL,
    idrole INT NOT NULL,
    term_start DATE NOT NULL,
    term_end DATE NULL,
    active TINYINT(1) NOT NULL DEFAULT 1,
    CONSTRAINT fk_parl_mandates_user FOREIGN KEY (iduser) REFERENCES parl_users(iduser),
    CONSTRAINT fk_parl_mandates_role FOREIGN KEY (idrole) REFERENCES parl_roles(idrole)
);

CREATE TABLE IF NOT EXISTS parl_sessions (
    idsession INT AUTO_INCREMENT PRIMARY KEY,
    session_date DATE NOT NULL,
    title VARCHAR(200) NOT NULL,
    status ENUM('DRAFT', 'OPEN', 'CLOSED') NOT NULL DEFAULT 'DRAFT',
    created_by INT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_parl_sessions_created_by FOREIGN KEY (created_by) REFERENCES parl_users(iduser)
);

CREATE TABLE IF NOT EXISTS parl_session_minutes (
    idminute INT AUTO_INCREMENT PRIMARY KEY,
    idsession INT NOT NULL,
    minute_text LONGTEXT NOT NULL,
    status ENUM('DRAFT', 'FINAL') NOT NULL DEFAULT 'DRAFT',
    signed_by INT NULL,
    signed_at DATETIME NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NULL ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_parl_minutes_session FOREIGN KEY (idsession) REFERENCES parl_sessions(idsession),
    CONSTRAINT fk_parl_minutes_signed_by FOREIGN KEY (signed_by) REFERENCES parl_users(iduser)
);

CREATE TABLE IF NOT EXISTS parl_bills (
    idbill INT AUTO_INCREMENT PRIMARY KEY,
    bill_number VARCHAR(40) NOT NULL,
    bill_type ENUM('PROJETO_LEI', 'LEI_ORCAMENTARIA', 'REQUERIMENTO', 'OUTROS') NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NULL,
    author_user_id INT NOT NULL,
    status ENUM('EM_PAUTA', 'EM_VOTACAO', 'APROVADO', 'REJEITADO', 'ARQUIVADO') NOT NULL DEFAULT 'EM_PAUTA',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_bill_number (bill_number),
    CONSTRAINT fk_parl_bills_author FOREIGN KEY (author_user_id) REFERENCES parl_users(iduser)
);

CREATE TABLE IF NOT EXISTS parl_session_agenda_items (
    idagenda INT AUTO_INCREMENT PRIMARY KEY,
    idsession INT NOT NULL,
    idbill INT NOT NULL,
    item_order INT NOT NULL,
    notes VARCHAR(255) NULL,
    UNIQUE KEY uq_session_bill (idsession, idbill),
    UNIQUE KEY uq_session_order (idsession, item_order),
    CONSTRAINT fk_parl_agenda_session FOREIGN KEY (idsession) REFERENCES parl_sessions(idsession),
    CONSTRAINT fk_parl_agenda_bill FOREIGN KEY (idbill) REFERENCES parl_bills(idbill)
);

CREATE TABLE IF NOT EXISTS parl_votes (
    idvote INT AUTO_INCREMENT PRIMARY KEY,
    idagenda INT NOT NULL,
    status ENUM('DRAFT', 'OPEN', 'CLOSED', 'HOMOLOGATED') NOT NULL DEFAULT 'DRAFT',
    opened_by INT NULL,
    opened_at DATETIME NULL,
    closed_by INT NULL,
    closed_at DATETIME NULL,
    homologated_by INT NULL,
    homologated_at DATETIME NULL,
    yes_total INT NOT NULL DEFAULT 0,
    no_total INT NOT NULL DEFAULT 0,
    abstention_total INT NOT NULL DEFAULT 0,
    CONSTRAINT fk_parl_votes_agenda FOREIGN KEY (idagenda) REFERENCES parl_session_agenda_items(idagenda),
    CONSTRAINT fk_parl_votes_opened_by FOREIGN KEY (opened_by) REFERENCES parl_users(iduser),
    CONSTRAINT fk_parl_votes_closed_by FOREIGN KEY (closed_by) REFERENCES parl_users(iduser),
    CONSTRAINT fk_parl_votes_homologated_by FOREIGN KEY (homologated_by) REFERENCES parl_users(iduser)
);

CREATE TABLE IF NOT EXISTS parl_vote_ballots (
    idballot INT AUTO_INCREMENT PRIMARY KEY,
    idvote INT NOT NULL,
    voter_user_id INT NOT NULL,
    ballot ENUM('SIM', 'NAO', 'ABSTENCAO') NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_vote_voter (idvote, voter_user_id),
    CONSTRAINT fk_parl_ballots_vote FOREIGN KEY (idvote) REFERENCES parl_votes(idvote),
    CONSTRAINT fk_parl_ballots_voter FOREIGN KEY (voter_user_id) REFERENCES parl_users(iduser)
);

CREATE TABLE IF NOT EXISTS parl_audit_logs (
    idaudit BIGINT AUTO_INCREMENT PRIMARY KEY,
    iduser INT NULL,
    action VARCHAR(100) NOT NULL,
    entity VARCHAR(60) NOT NULL,
    entity_id INT NULL,
    payload JSON NULL,
    ip_address VARCHAR(45) NULL,
    user_agent VARCHAR(255) NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_parl_audit_user FOREIGN KEY (iduser) REFERENCES parl_users(iduser)
);

-- View para identificar presidência ativa
CREATE OR REPLACE VIEW vw_parl_active_presidents AS
SELECT m.idmandate, m.iduser
FROM parl_mandates m
JOIN parl_roles r ON r.idrole = m.idrole
WHERE m.active = 1
  AND r.role_code = 'PRESIDENTE'
  AND (m.term_end IS NULL OR m.term_end >= CURDATE())
  AND m.term_start <= CURDATE();

DELIMITER $$

-- Procedure para abrir votação com validação de cargo Presidente
CREATE PROCEDURE sp_parl_open_vote(IN p_idvote INT, IN p_user_id INT)
BEGIN
    DECLARE v_is_president INT DEFAULT 0;

    SELECT COUNT(1)
      INTO v_is_president
      FROM vw_parl_active_presidents
     WHERE iduser = p_user_id;

    IF v_is_president = 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Apenas o Presidente pode abrir votacao';
    END IF;

    UPDATE parl_votes
       SET status = 'OPEN',
           opened_by = p_user_id,
           opened_at = NOW()
     WHERE idvote = p_idvote
       AND status IN ('DRAFT', 'CLOSED');
END $$

-- Procedure para fechar votação com validação de cargo Presidente
CREATE PROCEDURE sp_parl_close_vote(IN p_idvote INT, IN p_user_id INT)
BEGIN
    DECLARE v_is_president INT DEFAULT 0;

    SELECT COUNT(1)
      INTO v_is_president
      FROM vw_parl_active_presidents
     WHERE iduser = p_user_id;

    IF v_is_president = 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Apenas o Presidente pode fechar votacao';
    END IF;

    UPDATE parl_votes
       SET status = 'CLOSED',
           closed_by = p_user_id,
           closed_at = NOW(),
           yes_total = (SELECT COUNT(*) FROM parl_vote_ballots WHERE idvote = p_idvote AND ballot = 'SIM'),
           no_total = (SELECT COUNT(*) FROM parl_vote_ballots WHERE idvote = p_idvote AND ballot = 'NAO'),
           abstention_total = (SELECT COUNT(*) FROM parl_vote_ballots WHERE idvote = p_idvote AND ballot = 'ABSTENCAO')
     WHERE idvote = p_idvote
       AND status = 'OPEN';
END $$

DELIMITER ;
