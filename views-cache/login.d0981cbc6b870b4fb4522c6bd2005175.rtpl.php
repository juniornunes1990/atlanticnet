<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
  <head>
    <title>Acesso Administrativo</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="Idioma do Layout" name="keywords">
    <meta content="Atlantic Tecnologia" name="author">
    <meta content="Pagina de acesso do sistema" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="/res/admin/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="/res/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/res/admin/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="/res/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/res/admin/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/res/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/res/admin/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/res/admin/css/main.css?version=4.4.0" rel="stylesheet">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="/res/admin/img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">
          Acesso Administrativo
        </h4>
        <form action="">
          <div class="form-group">
            <label for="">Usuário</label><input class="form-control" placeholder="Digite seu usuário" type="text">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Senha</label><input class="form-control" placeholder="Digite sua senha" type="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
            <button class="btn btn-primary">Entrar</button>
            <div class="form-check-inline">
              <label class="form-check-label"><input class="form-check-input" type="checkbox">Lembrar - me</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
