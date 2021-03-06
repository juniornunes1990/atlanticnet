<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!-- start html tag -->
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="nuhost responsive HTML & WHMCS hosting template">
    <meta name="author" content="coodiv.net (nedjai mohamed)">
    <link rel="icon" href="/res/site/img/header/favicon.ico">

    <title>Atlantic Net</title>

    <!-- Bootstrap core CSS -->
    <link href="/res/site/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!-- flaticon styles -->
    <link href="/res/site/icons/flaticon.css" rel="stylesheet">

    <!-- flaticon styles -->
    <link href="/res/site/icons-t/flaticon.css" rel="stylesheet">

    <!-- main template styles -->
    <link href="/res/site/css/main.css" rel="stylesheet">

    <!-- bootstrap offcanvas styles -->
    <link href="/res/site/css/bootstrap.offcanvas.min.css" rel="stylesheet">

    <!-- fontawesome styles -->
    <link href="/res/site/css/fontawesome-all.min.css" rel="stylesheet">

    <!-- animate styles -->
    <link href="/res/site/css/animate.css" rel="stylesheet">

    <!-- responsive template styles -->
    <link href="/res/site/css/responsive.css" rel="stylesheet">	
	
	
	<!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet"><!-- Nunito font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet"><!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700" rel="stylesheet"><!-- Heebo font -->
	
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


    <!-- flickity Stylesheets -->
    <link rel="stylesheet" href="/res/site/css/flickity.min.css">

	<!-- video modal -->
	<link rel="stylesheet" href="/res/site/css/modal-video.min.css">
		
		
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="/res/site/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/res/site/owlcarousel/assets/owl.theme.default.min.css">

	<!-- technology icon Stylesheets -->
    <link rel="stylesheet" href="/res/site/technology-icon/flaticon.css">
	
</head>
<body><!-- start body tag -->

    <!-- start modal video -->
    <div class="modal fade" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="videomodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>  
         
          <!-- 16:9 aspect ratio -->
         <div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item" id="video"></iframe>
         </div>
        </div>
      </div>
    </div>
    </div> 
    <!-- end modal video -->
  
      <!-- start preloader -->
      <div class="preloader">
          <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
              <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
          </svg>
      </div>
      <!-- end preloader -->
  
      <!-- start header -->
      <div id="header" class="homepagetwostyle d-flex mx-auto flex-column">
          <!-- start search block -->
          <div class="search-header-block">
  
              <form id="pitursrach-header" name="formsearch" method="get" action="404.html">
                  <input name="s" id="search" type="text" class="text" value="" placeholder="START TYPING AND PRESS ENTER TO SEARCH">
                  <button type="submit" class="submit"><span class="fa fa-search"></span></button>
                  <a class="closesrch-her-block np-dsp-block">
                      <span class="first-stright"></span>
                      <span class="second-stright"></span>
                  </a>
              </form>
  
          </div>
          <!-- end search block -->
          
          <!-- start header animations -->
          <div class="header-animation">
              <div id="particles-bg"></div>
              
              <!-- start video background -->
              <div class="video-bg-nuhost-header">
              <div id="video_cover"></div>
              <video autoplay muted loop><source src="/res/site/media/coodiv-vid.mp4" type="video/mp4"></video>
              <span class="video-bg-nuhost-header-bg"></span>
              </div>
              <!-- end video background -->
              <span class="courve-gb-hdr-top"></span>
              <!------- header support ring ------->
              <a class="support-header-ring" href="#"><img src="/res/site/img/svgs/support.svg" alt="" /> <span>support team</span></a>
              <!------- end header support ring ------->
          </div>
          <!-- end header animations -->
  
          <!-- start main header section -->
          <div class="top-header-nav-home mb-auto">
              <div class="container">
                  <nav class="navbar navbar-expand-md navbar-light header-nav-algo-coodiv header-nav-algo-coodiv-v2">
                          <!-- start logo place -->
                          <a class="navbar-brand" href="/">
                          <img class="black-bg-logo" src="/res/site/img/header/logo.png" width="150px" alt="" />
                          <!-- black background logo -->
                          <img class="white-bg-logo" src="/res/site/img/header/logo-b.png" width="150px" alt="" />
                          <!-- white background logo -->
                          </a>
                          <!-- end logo place -->
                      <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas" data-target="#offcanvas-menu-home">
                          <span></span>
                          <span></span>
                          <span></span>
                      </button>
                      <!-- start collapse navbar -->
                      <div class="collapse navbar-collapse navbar-offcanvas" id="offcanvas-menu-home">
                      <!-- start navbar -->
                          <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                                  <a class="nav-link" href="/">Inicio</a>                                
                              </li>
                              
                              <li class="nav-item">
                                  <a class="nav-link" href="#">A empresa</a>
                              </li>
                              
                              <li class="nav-item">
                                  <a class="nav-link" href="#">Cobertura</a>
                              </li>
                              
                              <li class="nav-item mega-dropdown">
                                  <a class="nav-link dropdown" href="#" id="megadrop-services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servi??os <span class="caret"></span></a>
                                  <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="megadrop-services">
                                  <div class="our-services-mega-menu-header">
                                  <div class="row justify-content-center our-services-mega-menu-header-items">
                                  <a class="col-md-2" href="#">
                                  <i class="flaticon-internet"></i>
                                  <span>Internet</span>
                                  <b>Urbado e Rural</b>
                                  </a>
                                  
                                  <a class="col-md-2" href="#">
                                  <i class="flaticon-database-14"></i>
                                  <span>Assistencia</span>
                                  <b>Em horario de funcionamento</b>
                                  </a>
                                  
                                  <a class="col-md-2" href="#">
                                  <i class="flaticon-database-24"></i>
                                  <span>Instala????es</span>
                                  <b>Rede e Computadores</b>
                                  </a>
                                  
                                  <a class="col-md-2" href="#">
                                  <i class="flaticon-shield"></i>
                                  <span>Desenvolvimento</span>
                                  <b>Sistemas Web</b>
                                  </a>
                                  
                                  <a class="col-md-2" href="#">
                                  <i class="flaticon-laptop"></i>
                                  <span>Reparo</span>
                                  <b>Celular e Computador</b>
                                  </a>
                                  
                                  <a class="col-md-2" href="#">
                                  <i class="flaticon-server-3"></i>
                                  <span>Loja Fixa</span>
                                  <b>Venda de produtos de informatica</b>
                                  </a>
                                  
                                  
                                  </div>
                                  </div>
                                  </div>
                              </li>
  
                               <li class="nav-item dropdown">
                                  <a class="nav-link dropdown" href="#" id="helpdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajuda <span class="caret"></span></a>
                                  <div class="dropdown-menu" aria-labelledby="helpdropdown">
                                      <a class="dropdown-item" href="#">Assistencia T??cnica</a>
                                      <a class="dropdown-item" href="#">Perguntas Frequentes</a>
                                      <a class="dropdown-item" href="#">Novidades</a>
                                  </div>
                              </li>
                              
                              <li class="nav-item">
                                  <a class="nav-link" href="#">Contato</a>
                              </li>
                              
  
                          </ul>
                          <!-- end navbar -->
  
                      </div>
                      <!-- end collapse navbar -->
  
                      <!-- start header account  -->
                      <ul class="account-place-header-nav">
                          <li class="nav-item dropdown">
                              <a data-toggle="dropdown" aria-haspopup="true" id="customarea" aria-expanded="false" class="accouting-h dropdown-toggle" href="#"><img src="/res/site/img/svgs/avatar.svg" alt="" /></a>
                              <div class="dropdown-menu login-drop-down-header" aria-labelledby="customarea">
  
                                  <form action="#" data-form="validate">
                                    <h5><img src="/res/site/img/svgs/avatar.svg" width="32px" alt="Area do Cliente" /> Area do Cliente</h5><br>
                                      <div class="form-group">
                                          <input type="email" name="username" placeholder="Usu??rio" class="form-control" required>
                                      </div>
  
                                      <div class="form-group">
                                          <input type="password" name="password" placeholder="Senha" class="form-control" required>
                                      </div>
  
                                      <p class="help-block"><a href="#">Esqueceu sua senha?</a> <a href="#">Registre-se</a></p>
                                      <button type="submit" class="btn btn-block btn-default text-uppercase">Entrar</button>
  
                                  </form>
  
                              </div>
                          </li>
                      </ul>
                      <!-- end header account  -->
  
                  </nav>
              </div><!-- end container -->
          </div><!-- end main header section -->