<?php 
require_once 'topo.php';
require_once 'dao/conexao/conexao.php';
require_once 'dto/planosDTO.php';
require_once 'dao/planosDAO.php';
$planosDAO = new PlanosDAO();

?>

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="images/banner site2.png" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-12 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header margin-ajustar">
                                    <!--<h1>Donate</h1>-->
                                    <h4>Sistema Athena</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Aplicativo desenvolvido para apoiar os Pró-Reitores e Coordenadores de Programas de Pós-Graduação Stricto Sensu no acompanhamento dos projetos e das produções científicas desenvolvidas pelos docentes e discentes da instituição.</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="https://www.sistemaathena.com.br/" class="btn gradient-bg mr-2">Saiba mais</a>
                                    <!--<a href="#" class="btn orange-border">Read More</a>-->
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <!--<div class="swiper-slide hero-content-wrap">
                <img src="images/hero.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Donate</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header 

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content 

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer 
                           <!-- </div> .col -->
                        <!-- </div>.row -->
                  <!--  </div> .container -->
                <!-- </div>.hero-content-overlay -->
           <!-- </div> .hero-content-wrap -->

           <!-- <div class="swiper-slide hero-content-wrap">
                <img src="images/hero.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Donate</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header 

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content 

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer
                            </div><!-- .col -->
                       <!-- </div><!-- .row -->
                   <!-- </div><!-- .container -->
              <!--  </div><!-- .hero-content-overlay -->
           <!-- </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <!--<div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
      <!--  </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <div id="servicos" class="icon-box alturacaixinha"> 
                        <figure class="d-flex justify-content-center">
                            <img src="images/hands-gray.png" alt="">
                            <img src="images/hands-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <a href="#assesoria"><h3 class="entry-title">Assessoria e Consultoria</h3></a>
                        </header>

                        <div class="entry-content">
                            <p>Criação de novos Mestrados e Doutorados, Reestruturação e Progressão de Programas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <div id="curso" class="icon-box alturacaixinha">
                        <figure class="d-flex justify-content-center">
                            <img src="images/jornalista.png" alt="">
                            <img src="images/jornalista.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <a href="#capacitacao"><h3 class="entry-title">Cursos de Capacitação</h3></a>
                        </header>

                        <div class="entry-content">
                            <p>Workshops sobre o Currículo Lattes e Plataforma Sucupira - Módulos Coleta e APCN.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <div id="curriculo" class="icon-box alturacaixinha">
                        <figure class="d-flex justify-content-center">
                            <img src="images/charity-gray.png" alt="">
                            <img src="images/charity-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <a href="#lattes"><h3 class="entry-title">Currículo Lattes, Orcid e Google Acadêmico</h3></a>
                        </header>

                        <div class="entry-content">
                            <p> Criação, Atualização e Manutenção.</p>
                        </div>
                    </div>
                </div>
				<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <div id="sistema" class="icon-box alturacaixinha">
                        <figure class="d-flex justify-content-center">
                            <img src="images/logo-athena2.png" alt="" style="height: 72px;">
                            <img src="images/logo-athena2.png" alt="" style="height: 72px;">
                        </figure>

                        <header class="entry-header">
                            <a href="#athena"><h3 class="entry-title">Sistema Athena</h3></a>
                        </header>

                        <div class="entry-content">
                            <p>Sistema de Gestão da Produção Científica da IES e apoio a elaboração do relatório Sucupira da CAPES.</p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
	
	<?php /*<div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12 col-lg-12">
                    <div id="lattes" class="section-heading">
                        <h5 class="entry-title">Currículo Lattes – Criação, Atualização e Manutenção</h5>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->
				
            <div class="row">
                <div class="col-12 col-lg-12">
                
					
							<div class="event-content-wrap">
									<div class="entry-content">
								
                                    <p class="m-0">Conheça o nosso serviço de atualização do Currículo Lattes que inclui: acesso ao Sistema Athena e permite acompanhar seu desempenho perante a avaliação da CAPES. Os planos contemplam diversas manutenções de bases de dados, como: ORCID, Google Acadêmico e Researchid. Fazemos, também, uma revisão completa de todas as informações anteriormente inseridas.</p>
									
                                </div><!-- .entry-content -->
								
															
							</div><!-- .event-content-wrap -->
                    <!-- Add Arrows -->
                    <!--<div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>-->
                </div><!-- .col -->
				
				<div class="home-page-icon-boxes">
					<div class="container">
						<div class="row">
						<?php 
						if($instituicaoesnovo!="negado"){
							$mostrarOculto = 'sim';
						}else{
							$mostrarOculto = '';
						}
						$planos   = $planosDAO->TodosOsPlanos('','',$mostrarOculto);
							foreach ($planos as $linha){ 
							
							if($linha['titulo'] !="FREE" and $linha['titulo'] !="superior"){ ?>
							<!--<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
								<div id="servicoss" class="icon-box alturacaixinha widget-color-blue"> 
									<!--<figure class="d-flex justify-content-center">
										<img src="images/hands-gray.png" alt="">
										<img src="images/hands-white.png" alt="">
									</figure>
									<header class="entry-header">
										<a href="https://www.sistemaathena.com.br/planos-forma-pgto.php?id=<?php echo $linha['id'];?>" class="cor"><h3 class="entry-title cor"><?php echo $linha['titulo']?></h3></a>
									</header>

									<div class="entry-content" style="text-align: start;">
										<ul class="list-unstyled spaced2">
											<?php
											$planosOpcoes   = $planosDAO->TodosOsPlOpcoes();
											foreach ($planosOpcoes as $linhaOpcoes){
												
												$tipoMarcacao = "times red";
												$linhaItem['id_plano'] = '';
												$planosItem   = $planosDAO->TodosOsPlItens(''," WHERE id_plano='".$linha['id']."' AND id_plano_opcoes='".$linhaOpcoes['id']."'");
												foreach ($planosItem as $linhaItem);
												if($linhaItem['id_plano']!=""){
													$tipoMarcacao = "check green";
												
											?>
											<li>
												<i class="ace-icon fa fa-<?php echo $tipoMarcacao; ?>" style="color:#44ea44 !important;"></i>
												<?php echo $linhaOpcoes['descricao']; ?>
											</li>
											<?php
											}else { ?>
											
											<li>
												<i class="ace-icon fa fa-<?php echo $tipoMarcacao; ?>" style="color: #e41313 !important; "></i>
												<?php echo $linhaOpcoes['descricao']; ?>
											</li>
											<?php
											}
											}
											?>
										</ul>
										<div class="price" style="font-size: 19px;">
											<?php 
											if($linha['valor_total']!="FREE"){
												echo $linha['parcelas'].' parcelas de R$ '.number_format(($linha['valor_total'] / $linha['parcelas']), 2, ',', '.');
											}else{
												echo "FREE";
											}
											?>
										</div>
										<div>
											<a href="https://www.sistemaathena.com.br/planos-forma-pgto.php?id=<?php echo $linha['id'];?>"><h5 class="entry-title cor"><i class="ace-icon fa fa-shopping-cart bigger-110" style="color: white !important;"></i>&nbsp;Contrate agora</h5></a>
										</div>
									</div>
								</div>
							</div>-->
							<?php } } ?>
							<!--<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
								<div id="curso" class="icon-box alturacaixinha">
									<!--<figure class="d-flex justify-content-center">
										<img src="images/maleta-cinza.png" alt="">
										<img src="images/maleta-preta.png" alt="">
									</figure>

									<header class="entry-header">
										<h3 class="entry-title"><a href="">Superior</a></h3>
									</header>

									<div class="entry-content">
										<p>Workshop sobre o currículo Lattes, Plataforma Sucupira - Módulo Coleta e APCN.</p>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
								<div id="curriculo" class="icon-box alturacaixinha">
									<!--<figure class="d-flex justify-content-center">
										<img src="images/charity-gray.png" alt="">
										<img src="images/charity-white.png" alt="">
									</figure>-

									<header class="entry-header">
										<h3 class="entry-title"><a href="">intermediário</a></h3>
									</header>

									<div class="entry-content">
										<p>Serviços de atualização, Revisão e manutenção do Currículo Lattes, Orcid e Google Acadêmico.</p>
									</div>
								</div>
							</div>
							<!--<div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
								<div id="sistema" class="icon-box alturacaixinha">
									<figure class="d-flex justify-content-center">
										<img src="images/charity-gray.png" alt="">
										<img src="images/charity-white.png" alt="">
									</figure>

									<header class="entry-header">
										<h3 class="entry-title"><a href="#athena">Sistema Athena</a></h3>
									</header>

									<div class="entry-content">
										<p>Sistema de Gestão da Produção Científica da IES e apoio a elaboração do relatório Sucupira da CAPES.</p>
									</div>
								</div>
							</div>-->
							
							
						</div><!-- .row -->
					</div><!-- .container -->
					
				</div><!-- .home-page-icon-boxes -->
            </div><!-- .row -->
        </div><!-- .container -->
		<div class="entry-footer mt-5"><center>
                            <a href="fale-conosco.php?a=faleconosco" id="teste" onclick="document.getElementById('teste').innerHTML = 'Aguarde...'" class="btn gradient-bg mr-2">Solicite sua visita</a>
                        </center></div><!-- .entry-footer -->
    </div><!-- .our-causes --> 
	<?php */?>

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 order-2 order-lg-1">
                    <div id="assesoria" class="welcome-content">
                        <header class="entry-header">
                            <h1 class="entry-title">Assessoria e Consultoria</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
						<header class="entry-header">
                            <h5 class="entry-title diminuirtitle">Criação de novos Mestrados e Doutorados</h5>
                        </header><!-- .entry-header -->
						
                            <p>A tarefa de elaborar uma proposta de mestrado e doutorado certamente não é algo trivial, pois demanda a preexistência de conhecimentos técnicos específicos sobre os critérios e procedimentos de avaliação da CAPES.

							A equipe da JANUS EDUCARE possui mais de 15 anos de experiência atuando na concepção de novas propostas de Mestrado e Doutorado e com o uso do sistema APCN.</p>
							
						<header class="entry-header">
                            <h5 class="entry-title diminuirtitle">Reestruturação de programas</h5>
                        </header><!-- .entry-header -->
							<p>Se você vem enfrentando dificuldades para avançar nos conceitos de avaliação da CAPES, conte conosco para auxiliar na reestruturação do seu Programa. Possuímos longa experiência sobre o funcionamento interno dos Programas, e também dos critérios e procedimentos de avaliação da CAPES. Além da nossa experiência, também poderão contar com o auxílio do Sistema Athena, que foi desenvolvido para auxiliar na gestão dos Programas.
							
							</p>
						
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5"><center>
                            <a href="fale-conosco.php?a=faleconosco" id="teste" onclick="document.getElementById('teste').innerHTML = 'Aguarde...'" class="btn gradient-bg mr-2">Solicite sua visita</a>
                        </center></div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <!--<div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="images/welcome.jpg" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="upcoming-events">
                        <div id="capacitacao" class="section-heading">
                            <h2 class="entry-title">Cursos de capacitação</h2>
                        </div><!-- .section-heading -->
						<br>
						
								<div class="event-content-wrap">
									<div class="section-heading">
										<h2 class="entry-title diminuirtitle">Workshop Plataforma Sucupira – Módulo APCN</h2>
									</div><!-- .section-heading -->
									
									<div class="entry-content">
								
                                    <p class="m-0">Objetivo do curso: 
									O Workshop sobre a Plataforma Sucupira – Módulo APCN tem por objetivo a capacitação de Coordenadores de Propostas de Cursos Novos bem como Pró-Reitores e seus Assessores quantos aos critérios de Avaliação da CAPES e de todas as etapas que compõem o processo de criação de uma proposta de novo curso de mestrado ou doutorado e ainda sobre como efetuar o preenchimento dos conteúdos de cada ficha do Sistema APCN.</p>
                                </div><!-- .entry-content -->
								
								<div class="entry-footer mt-5"><center>
									<a href="https://www.sistemaathena.com.br/workshop-sp-modulo-apcn.php" id="avaliacao" onclick="document.getElementById('avaliacao').innerHTML = 'Aguarde...'" class="btn gradient-bg mr-2">Saiba mais</a>
								</center></div><!-- .entry-footer -->
								<br>
								
								<div class="section-heading">
										<h2 class="entry-title diminuirtitle">Workshop Plataforma Sucupira – Módulo Coleta</h2>
									</div><!-- .section-heading -->
									
									<div class="entry-content">
								
                                    <p class="m-0">Objetivo do curso: 
									O Workshop sobre a Plataforma Sucupira – Módulo Coleta é um curso de nível avançado, dirigido especialmente aos Coordenadores e Secretarias dos Programa de Pós-Graduação Stricto Sensu, além de Pró-Reitores e seus assessores. Tem por objetivo capacitar quanto ao preenchimento da Plataforma Sucupira e sobre como dar maior visibilidade às suas atividades desenvolvidas pelo corpo docente e discente, considerando os critérios de avaliação da CAPES.</p>
                                </div><!-- .entry-content -->
								
								<div class="entry-footer mt-5"><center>
									<a href="https://www.sistemaathena.com.br/workshop-sp-modulo-coleta.php" id="avaliacao" onclick="document.getElementById('avaliacao').innerHTML = 'Aguarde...'" class="btn gradient-bg mr-2">Saiba mais</a>
								</center></div><!-- .entry-footer -->
								<br>
								
								<div class="section-heading">
										<h2 class="entry-title diminuirtitle">Currículo Lattes e Avaliação CAPES</h2>
									</div><!-- .section-heading -->
									
									<div class="entry-content">
								
                                    <p class="m-0">Objetivo do curso: 
									O Workshop sobre o Currículo Lattes é um curso de nível avançado e dirigido especialmente ao público dos Programa de Pós-Graduação Stricto Sensu (docentes, discentes e secretárias). Tem por objetivo principal capacitar docentes e discentes sobre como dar maior visibilidade às suas atividades desenvolvidas, considerando os critérios de avaliação da CAPES.</p>
                                </div><!-- .entry-content -->
								
								<div class="entry-footer mt-5"><center>
									<a href="https://www.sistemaathena.com.br/workshop-sp-curriculo-lattes.php" id="avaliacao" onclick="document.getElementById('avaliacao').innerHTML = 'Aguarde...'" class="btn gradient-bg mr-2">Saiba mais</a>
								</center></div><!-- .entry-footer -->

                               </div><!-- .event-content-wrap -->
								
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

    <div class="home-page-limestone" style="background-color: #edf1f1;">
        <div class="container">
            <div class="row align-items-end">
                <div class="coL-12 col-lg-12">
                    <div id="athena" class="section-heading">
                        <h2 class="entry-title">Sistema Athena</h2>

                        <p class="mt-5">Foi desenvolvido pela empresa JANUS EDUCARE para auxiliar os Coordenadores e Secretária dos Programas de Pós-Graduação Stricto Sensu na Elaboração do Relatório Sucupira – Módulo Coleta da CAPES.

						O sistema mapeia, a partir do currículo dos docentes e discentes, toda produção intelectual cruzando estes dados com o Qualis da CAPES e Permite fazer filtros e gerar relatórios. Para os coordenadores e Pró-Reitores o sistema oferece uma planilha de produtividade com a qualificação de cada trabalho e o resultado do conceito que cada docente obteve até o momento, ou seja, se já alcançou a pontuação necessária aos conceitos: 3, 4, ou 5.
						</p>
                    </div><!-- .section-heading -->
					<div class="entry-footer mt-5"><center>
							<a href="fale-conosco.php?a=faleconosco" id="lattes" onclick="document.getElementById('lattes').innerHTML = 'Aguarde...'" class="btn gradient-bg mr-2">Fale conosco</a>
						</center></div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

  <?php 
	require_once 'rodape.php';
  ?>