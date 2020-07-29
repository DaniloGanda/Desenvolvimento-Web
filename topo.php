<!DOCTYPE html>
<html lang="en">
<head>
    <title>Janus Educare Assessoria para a pós-graduação stricto sensu</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109123446-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-109123446-1');
	</script>
</head>
<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <!--<div class="header-bar-email">
                            E-MAIL: <a href="#">clemilson.marques@januseducare.com.br</a>
                        </div><!-- .header-bar-email -->

                        <!--<div class="header-bar-text">
                            <p>CELULAR: <span>(61) 3637-4771  /  (61) 99308-1255</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->
					
		<div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/janus-logo.png" alt="logo" style="height: 52px;"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
								<?php 
									switch ($_GET['a']) {
										case "quemsomos":
											echo '
											<li><a href="index.php">Home</a></li>
											<li class="current-menu-item"><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "servicos":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li class="current-menu-item"><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "workshop":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li class="current-menu-item"><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "noticias":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li class="current-menu-item"><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "faleconosco":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li class="current-menu-item"><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>';
											break;
										default:
											echo '
											<li class="current-menu-item"><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
									}
								?>

                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->

                    <div class="col-12 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center centralizar">
                        <!--<div class="donate-btn">
                            <a href="https://sistemaathena.com.br" title="">Sistema  <img src="https://sistemaathena.com.br/img/logo-athena2.png" style="height: 51px; margin-top: -9px;"></a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->
		 
		 <!--<div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo-janus.png" alt="logo" style="height: 72px;"></a>
                        </div><!-- .site-branding 

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
								<?php 
									switch ($_GET['a']) {
										case "quemsomos":
											echo '
											<li><a href="index.php">Home</a></li>
											<li class="current-menu-item"><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "servicos":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li class="current-menu-item"><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "workshop":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li class="current-menu-item"><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "noticias":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li class="current-menu-item"><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
											break;
										case "faleconosco":
											echo '
											<li><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li class="current-menu-item"><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>';
											break;
										default:
											echo '
											<li class="current-menu-item"><a href="index.php">Home</a></li>
											<li><a href="quem-somos.php?a=quemsomos">Quem Somos</a></li>
											<li><a href="index.php#servicos">Serviços</a></li>
											<li><a href="index.php#capacitacao">Workshop</a></li>
											<li><a href="noticias.php?a=noticias">Notícias</a></li>
											<li><a href="fale-conosco.php?a=faleconosco">Fale Conosco</a></li>
											';
									}
								?>

                            </ul>
                        </nav><!-- .site-navigation -->
						
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                  </div>  <!-- .col -->
               </div><!-- .row -->
            <!--</div><!-- .container -->
        <!--</div><!-- .nav-bar -->
    </header><!-- .site-header -->