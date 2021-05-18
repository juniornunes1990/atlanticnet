<?php if(!class_exists('Rain\Tpl')){exit;}?><body><!-- start body tag -->

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
                        <a class="navbar-brand" href="index.html">
                        <img class="black-bg-logo" src="/res/site/img/header/logo.png" alt="" />
                        <!-- black background logo -->
                        <img class="white-bg-logo" src="/res/site/img/header/logo-b.png" alt="" />
                        <!-- white background logo -->
                        <span>Soluções inteligentes</span>
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
                                <a class="nav-link" href="#">Inicio</a>                                
                            </li>
							
							<li class="nav-item">
                                <a class="nav-link" href="#">A empresa</a>
                            </li>
							
							<li class="nav-item">
                                <a class="nav-link" href="#">Cobertura</a>
                            </li>
							
							<li class="nav-item mega-dropdown">
                                <a class="nav-link dropdown" href="#" id="megadrop-services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="megadrop-services">
								<div class="our-services-mega-menu-header">
								<div class="row justify-content-center our-services-mega-menu-header-items">
								<a class="col-md-2" href="domain-search.html">
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
								<span>Instalações</span>
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
                                    <a class="dropdown-item" href="#">Assistencia Técnica</a>
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

                                    <div class="form-group">
                                        <input type="email" name="username" placeholder="E-mail" class="form-control" required>
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

        <main class="inner cover header-heeadline-title mb-auto"><!-- start main header slider -->

            <div class="owl-carousel owl-theme main-header-slider">
                <div class="item">
                    <h5><span class="blok-on-phon">escolha a melhor em<br></span> <span id="typed"></span></h5>
                    <p>Garantimos a melhor assistência e qualidade em sua internet</p>
                    <a class="header-order-button-slid" href="#">Ver todos planos</a>
                </div>
                <!-- <div class="item">
                <h4 class="second-item-slider-title">we are good at <span>some of thease stuff under</span></h4>
				
				<div class="row justify-content-center">
				
				<div class="box-slider-serveis">
				<img src="img/svgs/servers-g.svg" alt=""/>
				<h6>web hosting services</h6>
				</div>
				
				<div class="box-slider-serveis">
				<img src="img/svgs/database.svg" alt=""/>
				<h6>web hosting services</h6>
				</div>
				
				<div class="box-slider-serveis">
				<img src="img/svgs/globe.svg" alt=""/>
				<h6>web hosting services</h6>
				</div>
				
				</div>
				
				
				</div> -->
            </div>
        </main><!-- end main header slider -->
        <div class="mt-auto"></div>
    </div><!-- end header -->	
	
    <section class="second-items-home"><!-- start second hosting plans -->
        <div class="container"><!-- start container -->
            <div class="tittle-simple-one"><h5>Escolha o plano que se encaixa com você<span>Sem Fidelidade, Preço Fixo.</span></h5></div><!-- title -->

            <div class="mr-tp-70 mr-bt-50">
                <div class="row">
                    <div id="monthly-yearly-chenge" class="col align-self-start">
                        <!-- start plan price changer -->
                        <a class="active monthly-price">Planos Urbano</a>
                        <a class="yearli-price">Planos Rural</a>
                    </div>
                    <!-- end plan price changer -->

                    <div class="col align-self-end plan-contact-support-button text-right">
                        <!-- start plan support -->
                        <a href="#"><i class="far fa-phone">Ligue:</i> 62 9 9800-3919</a>
                    </div>
                    <!-- start plan support -->
                </div>

                <div class="row justify-content-left">
                    <!--------------------------------------------- Plano 2mb --------------------------------------------->
                    <div class="col-md-4">
                        <!-- tree steps hosting plan -->
                        <div class="tree-steps-hosting-plans first">
                            <div class="tree-steps-hosting-plans-header">
                                <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
								<h5 class="tree-steps-hosting-plans-title monthly">Plano 4mb <small>Plano rural 2mb</small></h5>
                                <!-- steps hosting plan title -->
								<span class="tree-steps-hosting-plans-price monthly"><!-- steps hosting plan price -->								
	                            <b class="monthly">R$ 40<small>/mês</small></b>
                            	<b class="yearly">R$ 70<small>/mês</small></b>
                            	</span>
                                <!-- steps hosting plan price -->
                            </div>

                            <div id="first-plan-hosting-steps-content" class="tree-steps-hosting-plans-body first-plan-hosting-steps">
                                <!-- steps hosting plan body -->
                                <div class="loader-tree-steps-hosting-plans-body">
                                    <!-- steps hosting plan loader -->
                                    <i class="fas fa-circle-notch rotate360icon"></i>
                                </div>
                                <!-- end steps hosting plan loader -->
                                <ul class="tree-steps-hosting-plans-list">
                                    <!-- steps hosting plan features list -->
                                    <li class="checked">5mb Download</li>
                                    <li class="checked">1mb Upload</li>
                                    <li class="checked">Ilimitado</li>
                                    <li class="checked">Assitência Técnica</li>
                                    <li class="checked">Atendimento</li>
                                    <li class="checked">Valor Fixo</li>
                                </ul>
                                <!-- end steps hosting plan features list -->

                                <div class="tree-steps-hosting-plans-payment">
                                    <!-- steps hosting plan login form -->

                                    <!-- back to previous steps button -->
                                    <span id="first-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">	
                                 	<span class="first-stright"></span>
                                    <span class="second-stright"></span>
                                    </span>
                                    <!-- end back to previous steps button -->

                                    <h5 class="tree-steps-hosting-plans-payment-title">Ops... <small>sistema em desenvolvimento  </small></h5>

                                    <div class="tree-steps-hosting-plans-error">
                                        <i class="far fa-times-circle"></i>
                                        <p>desculpe, em breve estaremos resolvendo esse problema </p>
                                    </div>

                                </div>
                                <!-- end steps hosting plan login form -->

                            </div>
                            <!-- end steps hosting plan body -->

                            <div class="tree-steps-hosting-plans-footer text-center">
                                <!-- start steps hosting plan footer -->
                                <a id="first-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                                    <!-- go to previous next step button -->
                                    <span class="first-step-hosting-text">
	                                <small>Contratar</small>
	                                <i class="fas fa-angle-right"></i>
	                                </span>
                                    <!-- end go to previous next step button -->

                                    <!-- login button -->
                                    <span class="second-step-hosting-text">
                            	    Contate-nos
                            	    </span>
                                    <!-- end login button -->
                                </a>

                            </div>
                            <!-- end steps hosting plan footer -->

                        </div>
                    </div>

                    <!--------------------------------------------- Plano 4mb --------------------------------------------->
                    <div class="col-md-4">
                        <!-- tree steps hosting plan -->
                        <div class="tree-steps-hosting-plans second">
                            <span class="tree-steps-hosting-plans-best">Melhor Plano</span>
                            <div class="tree-steps-hosting-plans-header">
                                <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
								<h5 class="tree-steps-hosting-plans-title monthly">Plano 10mb <small>Plano Rural 4mb</small></h5>
                                <!-- steps hosting plan title -->
								<span class="tree-steps-hosting-plans-price monthly"><!-- steps hosting plan price -->								
	                            <b class="monthly">R$ 70<small>/mês</small></b>
                            	<b class="yearly">R$ 100<small>/mês</small></b>
                            	</span>
                                <!-- steps hosting plan price -->
                            </div>

                            <div id="second-plan-hosting-steps-content" class="tree-steps-hosting-plans-body">
                                <!-- steps hosting plan body -->
                                <div class="loader-tree-steps-hosting-plans-body">
                                    <!-- steps hosting plan loader -->
                                    <i class="fas fa-circle-notch rotate360icon"></i>
                                </div>
                                 <!-- end steps hosting plan loader -->
                                <ul class="tree-steps-hosting-plans-list">
                                    <!-- steps hosting plan features list -->
                                    <li class="checked">10mb Download</li>
                                    <li class="checked">5mb Upload</li>
                                    <li class="checked">Ilimitado</li>
                                    <li class="checked">Assitência Técnica</li>
                                    <li class="checked">Atendimento</li>
                                    <li class="checked">Valor Fixo</li>
                                </ul>
                                <!-- end steps hosting plan features list -->

                                <div class="tree-steps-hosting-plans-payment">
                                    <!-- steps hosting plan login form -->

                                    <!-- back to previous steps button -->
                                    <span id="second-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">	
                                 	<span class="first-stright"></span>
                                    <span class="second-stright"></span>
                                    </span>
                                    <!-- end back to previous steps button -->

                                    <h5 class="tree-steps-hosting-plans-payment-title">Ops... <small>sistema em desenvolvimento </small></h5>

                                    <div class="tree-steps-hosting-plans-error">
                                        <i class="far fa-times-circle"></i>
                                        <p>desculpe, em breve estaremos resolvendo esse problema </p>
                                    </div>

                                </div>
                                <!-- end steps hosting plan login form -->

                            </div>
                            <!-- end steps hosting plan body -->

                            <div class="tree-steps-hosting-plans-footer text-center">
                                <!-- start steps hosting plan footer -->

                                <a id="second-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                                    <!-- go to previous next step button -->
                                    <span class="first-step-hosting-text">
	                            <small>Contratar</small>
                            	<i class="fas fa-angle-right"></i>
                            	</span>
                                    <!-- end go to previous next step button -->

                                    <!-- login button -->
                                    <span class="second-step-hosting-text">
	                                Contate-nos
	                                </span>
                                    <!-- end login button -->
                                </a>

                            </div>
                            <!-- end steps hosting plan footer -->

                        </div>
                    </div>

                    <!--------------------------------------------- Plano 15mb --------------------------------------------->
                    <div class="col-md-4">
                        <!-- tree steps hosting plan -->
                        <div class="tree-steps-hosting-plans">
                            <div class="tree-steps-hosting-plans-header">
                                <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
								<h5 class="tree-steps-hosting-plans-title monthly">Plano 15mb <small>Plano Rural 10mb</small></h5>
                                <!-- steps hosting plan title -->
								<span class="tree-steps-hosting-plans-price monthly"><!-- steps hosting plan price -->								
	                            <b class="monthly">R$ 120<small>/mês</small></b>
                            	<b class="yearly">R$ 150<small>/mês</small></b>
                            	</span>
                                <!-- steps hosting plan price -->
                            </div>

                            <div id="third-plan-hosting-steps-content" class="tree-steps-hosting-plans-body">
                                <!-- steps hosting plan body -->
                                <div class="loader-tree-steps-hosting-plans-body">
                                    <!-- steps hosting plan loader -->
                                    <i class="fas fa-circle-notch rotate360icon"></i>
                                </div>
                                <!-- end steps hosting plan loader -->
                                 <ul class="tree-steps-hosting-plans-list">
                                    <!-- steps hosting plan features list -->
                                    <li class="checked">15mb Download</li>
                                    <li class="checked">5mb Upload</li>
                                    <li class="checked">Ilimitado</li>
                                    <li class="checked">Assitência Técnica</li>
                                    <li class="checked">Atendimento</li>
                                    <li class="checked">Valor Fixo</li>
                                </ul>
                                <!-- end steps hosting plan features list -->

                                <div class="tree-steps-hosting-plans-payment">
                                    <!-- steps hosting plan login form -->

                                    <!-- back to previous steps button -->
                                    <span id="third-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">	
	                                <span class="first-stright"></span>
                                    <span class="second-stright"></span>
                                    </span>
                                    <!-- end back to previous steps button -->

                                    <h5 class="tree-steps-hosting-plans-payment-title">Ops... <small>sistema em desenvolvimento </small></h5>

                                    <div class="tree-steps-hosting-plans-error">
                                        <i class="far fa-times-circle"></i>
                                        <p>desculpe, em breve estaremos resolvendo esse problema </p>
                                    </div>

                                </div>
                                <!-- end steps hosting plan login form -->

                            </div>
                            <!-- end steps hosting plan body -->

                            <div class="tree-steps-hosting-plans-footer text-center">
                                <!-- start steps hosting plan footer -->

                                <a id="third-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                                    <!-- go to previous next step button -->
                                    <span class="first-step-hosting-text">
                                 	<small>Contratar</small>
                                	<i class="fas fa-angle-right"></i>
                                  	</span>
                                    <!-- end go to previous next step button -->

                                    <!-- login button -->
                                    <span class="second-step-hosting-text">
                                	contate-nos
                                	</span>
                                    <!-- end login button -->
                                </a>

                            </div>
                            <!-- end steps hosting plan footer -->

                        </div>
                    </div>

                </div>
            </div>
        </div><!-- end container -->
    </section><!-- end second hosting plans -->

    <section class="our-pertners"><!-- starts our pertners section -->
        <div class="container"><!-- CONTAINER -->
		<h2 class="d-none">Parceiros</h2>
            <div class="owl-carousel pertners-carousel owl-theme"><!-- start owl carousel -->
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo1.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo2.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo3.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo4.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo5.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo1.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo2.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo3.png" alt="" /> </a>
                </div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo4.png" alt="" /> </a>
				</div><!-- end item -->
				
                <div class="item"><!-- start item -->
				<a href="#"> <img src="img/pertners/logo5.png" alt="" /> </a>
                </div><!-- end item -->
				
            </div><!-- end owl carousel -->

        </div><!-- end CONTAINER -->
    </section><!-- end our pertners section -->
	
    <section class="server-place-section"><!-- start our servers place section -->
        <div class="container zindextow"><!-- start container -->
            <div class="row justify-content-center"><!-- start row -->
                <div class="col-md-5 row justify-content-center text-reve-map-place">
                    <div class="col-md-6">
                        <h5>Cobertura </h5><!-- title -->
                        <p><span>Urbano</span> Colinas do Sul/GO</p><!-- address -->
                        <p><span>Rural</span> Tocantins</p><!-- address -->
						<p>Mato Verde Lago Serra da Mesa</p><!-- address -->
                        <p>Assent. Palmeiras</p><!-- address -->
                        <p>Assent. Corrego do Bonito</p><!-- address -->
                        <p>Condominio Veredas</p><!-- address -->
                            <p><span>email</span>(62) 9 9800-3919</p><!-- phones -->
                    </div>
                </div>

                <div class="col-md-7"><!-- col -->
                    <div class="map-gene-server-place"><!-- start map place -->
                        <img src="img/map/map-world.png" alt="" /><!-- map -->
                        <span data-toggle="tooltip" data-placement="top" title="Colinas do Sul" style="top: 60%;left: 30%;" class="place"></span>
                        <span data-toggle="tooltip" data-placement="top" title="Lago Serra da Mesa Mato Verde" style="top: 68%;left: 33%;" class="place"></span>
                        <span data-toggle="tooltip" data-placement="top" title="Tocantins" style="top: 30%;left: 40%;" class="place"></span>
                        <span data-toggle="tooltip" data-placement="top" title="Assentamento Palmeiras" style="top: 30%;left: 40%;" class="place"></span>
                        <span data-toggle="tooltip" data-placement="top" title="Assentamento Corrego do Bonito" style="top: 25%;left: 49%;" class="place"></span>
                        <span data-toggle="tooltip" data-placement="top" title="Condominio Veredas" style="top: 35%;left: 25%;" class="place"></span>
                    </div><!-- end map place -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </Section><!-- end our servers place section -->

	
	
    <section class="blog-home-section"><!-- start blog section -->
        <div class="container"><!-- start container -->
		
            <div class="tittle-simple-one"><h5>Últimas novidades<span>do mundo da tecnologia <br> e sua evolução constante.</span></h5></div><!-- title -->

            <div class="row justify-content-center blog-items-home"><!-- start row -->
			
              <p>Nenhuma Novidade no momento</p>

            </div><!-- end row -->

        </div><!-- end container -->
    </section><!-- end blog section -->

	
	
	
	
    <section class="form-contact-home-section"><!-- start contact us section -->
        <div class="container"><!-- start container -->
            <div class="row justify-content-center"><!-- start row -->
                <form class="col-md-8 row justify-content-center form-contain-home" id="ajax-contact" method="post" action="mailer.php"><!-- start form -->
                    <h5>Dê sua Opinião e nos ajude a melhorar<span>Ou apenas diga Olá :)</span></h5><!-- title -->
					
					<div id="form-messages"></div><!-- form message -->
					
                    <div class="col-md-6"><!-- start col -->
                        <div class="field input-field">
                            <input class="form-contain-home-input" type="text" id="name" name="name" required><!-- input -->
                            <span class="input-group-prepend">Digite seu nome</span><!-- label -->
                        </div>
                    </div><!-- end col -->
					
                    <div class="col-md-6"><!-- start col -->
                        <div class="field input-field">
                            <input class="form-contain-home-input" type="email" id="email" name="email" required><!-- input -->
                            <span class="input-group-prepend">Digite seu e-mail</span><!-- label -->
                        </div>
                    </div><!-- end col -->
					
                    <div class="col-md-12"><!-- start col -->
                        <div class="field input-field">
                            <textarea class="form-contain-home-input" id="message" name="message" required></textarea><!-- textarea -->
                            <span class="input-group-prepend">Digite sua mensagem</span><!-- label -->
                        </div>
                    </div><!-- end col -->
					
                    <div class="btn-holder-contect">
                        <button type="submit">Enviar</button><!-- submit button -->
					</div>

                </form><!-- end form -->

               

            </div><!-- end container -->
		</div><!-- end container -->
    </section><!-- end contact us section -->