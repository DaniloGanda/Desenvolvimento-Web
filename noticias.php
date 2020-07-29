<?php 
include 'topo.php';
?>

<div class="welcome-wrap margin-topo">
        <div class="container">
            <div class="row alinhamento">
                <div class="col-12 col-lg-12 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title cortitulo">Notícias</h2>
                        </header><!-- .entry-header -->


                        <div class="col-12 col-lg-12">
                        	<?php
							$noticias = "https://g1.globo.com/rss/g1/educacao/";
						    $xml = simplexml_load_file($noticias)->channel; 
						     
						    foreach($xml->item as $item){
						    ?>
		                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
		                        <div class="cause-content-wrap">
		                            <header class="entry-header d-flex flex-wrap align-items-center">
		                                <h6 class="w-100 m-0"><a href="javascript: void(0);"><?php echo $item->title; ?></a></h6>
		                                <!--<div class="entry-content">
			                                <p class="m-0"><?php //echo $item->description; ?></p>
			                            </div>-->

		                                <div class="posted-date">
		                                    <a href="javascript: void(0);"><?php echo $item->pubDate; ?></a>
		                                </div><!-- .posted-date -->

		                                <div class="cats-links">
		                                    <a href="<?php echo $item->link; ?>" target="_blank">Visualizar notícia completa</a>
		                                </div><!-- .cats-links -->
		                            </header><!-- .entry-header -->

		                        </div><!-- .cause-content-wrap -->

		                       
		                    </div><!-- .cause-wrap -->
		                    <?php
			                }
			                ?>

		                </div>
		                <br><br>

                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

<?php
include 'rodape.php'; 
?>