# Sistema de Votação Parlamentar (Câmara Municipal)

## Objetivo
Implementar um sistema para gestão de:
- **Sessões do dia**;
- **Atas**;
- **Projetos de lei**;
- **Leis orçamentárias**;
- **Votações nominais por vereador**.

Com regras de acesso por cargo:
- Presidente;
- Vice-presidente;
- 1º Secretário;
- 2º Secretário;
- Vereador.

## Regras de Negócio Principais

1. Cada vereador/servidor terá login e senha individual.
2. Apenas usuários com cargo **Presidente** podem:
   - Abrir votação;
   - Encerrar votação;
   - Homologar resultado.
3. O voto de cada vereador é único por votação e deve ficar auditável.
4. Só pode votar quem estiver com mandato ativo.
5. A ata do dia deve consolidar as matérias, votação e resultado.
6. Projetos e leis orçamentárias podem tramitar por status (ex.: Em pauta, Em votação, Aprovado, Rejeitado).

## Papéis e Permissões

### Presidente
- Gerencia sessão;
- Habilita/desabilita votação;
- Fecha resultado e assina digitalmente ata.

### Vice-presidente
- Acesso de leitura ampla;
- Pode substituir presidente (regra futura por delegação).

### 1º e 2º Secretários
- Lançamento de pauta;
- Redação de ata;
- Gestão de presença.

### Vereador
- Visualiza matérias em pauta;
- Registra voto quando votação estiver aberta.

## Fluxo de Sessão

1. Secretaria cria a sessão do dia.
2. Secretaria anexa projetos/leis orçamentárias na pauta.
3. Presidente abre votação de uma matéria específica.
4. Vereadores autenticados registram voto (`SIM`, `NÃO`, `ABSTENÇÃO`).
5. Presidente encerra votação.
6. Sistema apura automaticamente resultado.
7. Ata da sessão é consolidada.

## Modelo de Dados (resumo)

- `parl_roles`: cargos institucionais.
- `parl_users`: usuários autenticáveis.
- `parl_mandates`: vínculo do usuário com mandato ativo.
- `parl_sessions`: sessões plenárias.
- `parl_session_minutes`: atas.
- `parl_bills`: projetos e leis orçamentárias.
- `parl_session_agenda_items`: itens da pauta por sessão.
- `parl_votes`: eventos de votação (aberta/encerrada).
- `parl_vote_ballots`: votos nominais por vereador.

## Endpoints sugeridos (API)

### Autenticação
- `POST /api/auth/login`
- `POST /api/auth/logout`

### Sessões
- `POST /api/sessions`
- `GET /api/sessions/:idsession`
- `POST /api/sessions/:idsession/publish`

### Matérias
- `POST /api/bills`
- `GET /api/bills/:idbill`
- `POST /api/sessions/:idsession/agenda`

### Votação
- `POST /api/votes/:idvote/open` (**somente Presidente**)
- `POST /api/votes/:idvote/close` (**somente Presidente**)
- `POST /api/votes/:idvote/ballots` (vereador vota)
- `GET /api/votes/:idvote/result`

### Ata
- `POST /api/sessions/:idsession/minutes`
- `POST /api/sessions/:idsession/minutes/finalize`

## Segurança

- Senha com hash forte (`password_hash` do PHP);
- Sessão expirada automaticamente por inatividade;
- Registro de auditoria (IP, user agent, data/hora, ação);
- Trilha de alterações em matérias e atas.

## Próximos Passos de Implementação

1. Criar esquema SQL inicial (arquivo `sql/parlamento_schema.sql`).
2. Implementar autenticação e autorização por cargo.
3. Implementar ciclo de votação com travas de concorrência.
4. Implementar tela de painel por perfil.
5. Gerar relatório oficial de ata em PDF.
