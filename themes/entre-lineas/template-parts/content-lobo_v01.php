<!-- MIXED CONTENT -->

	<section id="mixed-content" class="mixed-content teams-content">

		<div class="container-fluid">

			<div class="row">

				<div class="col col-sm-10 mx-sm-auto col-md-12 mx-md-0 col-lg-8">



					<!-- Next opponent / Próximo rival

					===================================== -->



					<div class="next-opponent px-0 mb-5">

						<div class="opponent-box bg_lobo-black d-flex flex-column p-5">



							<!-- Title / Título 

							********************** -->

							<header>

								<h2 class="box-head co_light-gray text-uppercase text-center pb-3">

									Próximo Rival

								</h2>

							</header>



							<!-- Opponent / Rival 

							************************ -->



							<?php 

								$reg = array(

									'category__and' => array( 7, 49 ), 

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<div class="box-main mb-5 py-3 py-md-5">

								<div class="row">

									<figure class="main-img img-fluid m-0 col-12 col-md-3" style="background-image: url('<?php the_field('escudo'); ?>'); background-size: contain; background-repeat: no-repeat; background-position: center"></figure>

									<article class="main-info text-center text-md-left col-12 col-md-8">

										<h4 class="info-title text-light mb-3"><?php the_field('equipo'); ?></h4>

										<div class="info-text text-light"><?php the_field('texto'); ?></div>

									</article>

								</div>		

							</div>



							<?php endwhile; ?>

					        <?php else: ?>

					        <?php endif; ?>

					        <?php wp_reset_postdata(); ?>





					        <!-- Opponent news / Noticias sobre el rival 

							*********************************************** -->



					        <?php 

								$reg = array(

									'category__and' => array( 3, 7, 67 ), 

									'posts_per_page' => 3,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<div class="card border-0 mx-auto mb-3 w-75">

								<div class="row no-gutters">

									<div class="col-md-4">

										<a href="<?php the_permalink(); ?>">

											<figure class="card-img img-fluid m-0 h-100" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

										</a>

									</div>

									<div class="col-md-8">

										<div class="card-body">

											<h3 class="card-title">

												<a class="title-lobo co_lobo-black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

											</h3>

											<h5 class="card-text"><?php the_excerpt(); ?></h5>

											<p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>

										</div>

									</div>

								</div>

							</div>	



							<?php endwhile; ?>

					        <?php else: ?>

					        <?php endif; ?>

					        <?php wp_reset_postdata(); ?>



						</div>				

					</div>



					<!-- Mixed news (upper half) / Noticias mixtas (mitad superior) 

					================================================================ -->

					<div class="mixed-news">

						<div class="row">



							<!-- Row 1 / Fila 1 

							********************** -->



							<?php

								$reg = array(

									'category__and' => array( 7, 8, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-4 d-md-flex flex-md-column justify-content-md-between pr-md-4">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid d-none d-md-block" src="img/500x500.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>    

								<h3 class="news-head bo_bottom bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



							<?php    

								$reg = array(

									'category__and' => array( 7, 22, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-8 d-md-flex flex-md-column-reverse justify-content-md-between">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid img-row-1 m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid img-row-1 d-none d-md-block" src="img/800x400.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>

								<h3 class="news-head bo_top bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left pt-md-4 mt-md-0">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



						</div><!--/row-->

					</div><!--/mixed-news-->



	          		<div class="mixed-news highlighted-news bg_lobo-black p-5 my-5">

	            		<div class="row flex-column justify-content-between flex-md-row">



		            		<!-- Row 2 (highlighted news) / Fila 2 (noticias destacadas) 

				            *************************************************************** -->

		            

							<?php   

								$reg = array(

									'category__and' => array( 7, 9, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col col-md-4">

								<h6 class="news-lead text-light mb-3">

									<!-- Código para que devuelva el Tag como texto plano y no como link -->

									<?php $tags = get_the_tags(); 

										if ($tags) {                 

											foreach( $tags as $tag ) {

												echo $tag->name;

												}            

										}

									?>

								</h6>

								<h3 class="news-head border-bottom-0 mb-5">

									<a class="text-light" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

								<h4 class="news-subhead text-light mb-5 mb-md-0"><?php the_excerpt(); ?></h4>

							</article>



							<div class="news col m-0 col-md-7 d-md-flex flex-md-column">

								<a class="news-link d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid img-row-2 highlighted m-0" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid img-row-2 highlighted" src="img/500x500.jpg" alt=""> -->

								</a>

							</div>



				            <?php endwhile; ?>

				            <?php else: ?>

				            <?php endif; ?>

				            <?php wp_reset_postdata(); ?>



						</div><!--/row-->

	          		</div><!--/mixed-news-->



					<div class="mixed-news">

						<div class="row">



							<!-- Row 3 / Fila 3

							********************** -->



							<?php   

								$reg = array(

									'category__and' => array( 7, 23, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-6 d-md-flex flex-md-column justify-content-md-between pr-md-4">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid img-row-3 m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid img-row-3 d-none d-md-block" src="img/500x500.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>  

								<h3 class="news-head bo_bottom bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



							<?php   

								$reg = array(

									'category__and' => array( 24, 7 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-6 d-md-flex flex-md-column-reverse justify-content-md-between">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid img-row-3 m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid img-row-3 d-none d-md-block" src="img/500x500.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>  

								<h3 class="news-head bo_top bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left pt-md-4 mt-md-0">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



						</div><!--/row-->

					</div><!--/mixed-news-->



				</div>	



				<!-- Sidebar / Barra lateral 

				=============================== -->

				<aside class="sidebar d-none d-lg-block col-lg-4">

					<div class="sidebar-box bg_dark-blue p-5">



						<!-- Twitter 

						*************** -->



						<!-- Club Last official tweets / Últimos tweets oficiales del club -->

						<div class="twitter bg-light mb-5">

							<a class="twitter-timeline" data-height="850" href="https://twitter.com/GimnasiaMendoza?ref_src=twsrc%5Etfw">Tweets by GimnasiaMendoza</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

						</div>				



						<!-- BANNER (widget) -->

						<div class="container-fluid px-0">

							<div class="row no-gutters">



								<div class="banner w-100 mt-5 mb-5">

									<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-small-top LOBO')) : ?>

									<?php endif; ?> 

								</div>



							</div>	

						</div>



						<!-- Editorial article / Artículo de opinión 

						*********************************************** -->



						<?php

							$reg = array(

								'category__and' => array( 7, 11, 63 ),

								'posts_per_page' => 1,

								'order' => 'DESC'

							);



							$filter_posts = new WP_Query($reg);



							if ($filter_posts -> have_posts()): 

								while ($filter_posts -> have_posts()): 

									$filter_posts -> the_post() 

						?>



						<article class="box-article article__lobo article__1 bg_light-gray d-flex flex-column justify-content-between p-5">

							<header>

								<h3 class="article-head text-uppercase text-center pb-3">Tiro al blanco</h3>

								<h2 class="article-title text-uppercase text-center mt-5">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h2>

							</header>

							<footer class="d-flex justify-content-center align-items-center justify-content-xl-between">

								<figure class="article-img img__1 bg-light img-fluid rounded-circle m-0" style="background-image: url('<?php the_field('foto_autor'); ?>'); background-size: cover; background-repeat: no-repeat; background-position:center"></figure>  

								<!-- <img class="article-img bg-light img-fluid rounded-circle" src="img/160x160.png" alt=""> -->

								<h4 class="article-author text-uppercase text-right d-none d-xl-block">Por <?php the_author(); ?></h4>

							</footer>

						</article>



						<?php endwhile; ?>

						<?php else: ?>

						<?php endif; ?>

						<?php wp_reset_postdata(); ?>



						<!-- BANNER (widget) -->

						<div class="container-fluid px-0">

							<div class="row no-gutters">



								<div class="banner w-100 mt-2 my-5">

									<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-small-bottom LOBO')) : ?>

									<?php endif; ?> 

								</div>



							</div>	

						</div>

						<!---->





						<!-- Editorial article / Artículo de opinión 

						*********************************************** -->



						<?php

							$reg = array(

								'category__and' => array( 7, 11, 64 ),

								'posts_per_page' => 1,

								'order' => 'DESC'

							);



							$filter_posts = new WP_Query($reg);



							if ($filter_posts -> have_posts()): 

								while ($filter_posts -> have_posts()): 

									$filter_posts -> the_post() 

						?>



						<article class="box-article article__lobo article__2 bg_light-gray d-flex flex-column justify-content-between p-5">

							<header>

								<h3 class="article-head text-uppercase text-center pb-3">Tiro al blanco</h3>

								<h2 class="article-title text-uppercase text-center mt-5">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h2>

							</header>

							<footer class="d-flex justify-content-center align-items-center justify-content-xl-between">

								<figure class="article-img img__2 bg-light img-fluid rounded-circle m-0" style="background-image: url('<?php the_field('foto_autor'); ?>'); background-size: cover; background-repeat: no-repeat; background-position:center"></figure>  

								<!-- <img class="article-img bg-light img-fluid rounded-circle" src="img/160x160.png" alt=""> -->

								<h4 class="article-author text-uppercase text-right d-none d-xl-block">Por <?php the_author(); ?></h4>

							</footer>

						</article>



						<?php endwhile; ?>

						<?php else: ?>

						<?php endif; ?>

						<?php wp_reset_postdata(); ?>



					</div>

				</aside><!--/sidebar-->	



			</div><!--/row-->

		</div><!--/container-fluid-->			

	</section><!--/mixed-content-->	



	<!-- BANNER (widget) -->

	<div class="container-fluid">

		<div class="mt-5">		

			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-large LOBO')) : ?>

			<?php endif; ?> 

		</div>		

	</div>



<!-- STATICS -->

	<section id="teams-statics" class="teams-statics">

		<div class="container-fluid">

			<div class="row justify-content-around bg_lobo-black p-5 flex-md-column flex-lg-row">



				<!-- Campaign / Campaña

				=========================== -->

				<div class="campaign col col-lg-5 mb-md-5 mb-lg-0">

					<h3 class="box-head text-light">Campaña</h3>

					<div class="campaign-box bg-light p-3">



						<div class="box-table box-table__6cols">



							<!-- Table header / Encabezado de la tabla

							********************************************* -->

							<div style="order:1; flex: 1 1 14%;" class="box-table-cell box-table-cell__dark text-center">

								<h5>Fecha</h5>

							</div>

							<div style="order:1; flex: 1 1 30%;" class="box-table-cell box-table-cell__dark text-center">

								<h5>Rival</h5>

							</div>

							<div style="order:1; flex: 1 1 12%;" class="box-table-cell box-table-cell__dark text-center">

								<h5>G</h5>

							</div>

							<div style="order:1; flex: 1 1 12%;" class="box-table-cell box-table-cell__dark text-center">

								<h5>P</h5>

							</div>

							<div style="order:1; flex: 1 1 12%;" class="box-table-cell box-table-cell__dark text-center">

								<h5>E</h5>

							</div>

							<div style="order:1; flex: 1 1 20%;" class="box-table-cell box-table-cell__dark text-center">

								<h5>Cond.</h5>

							</div>



							<!-- Table data / Datos de la tabla

							************************************* -->



							<?php

								$reg = array(

									'category__and' => array( 7, 73 ),

									'posts_per_page' => 25,

									'order' => 'ASC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<div style="order:2; flex: 1 1 14%;" class="box-table-cell text-center text">

								<span class="d-flex justify-content-center align-items-center h-100">

									<?php the_field('fecha'); ?> 

								</span>

							</div>

							<div style="order:2; flex: 1 1 30%;" class="box-table-cell text-center text">

								<div class="d-flex justify-content-center align-items-center h-100">

									<span class="truncate" data-toggle="tooltip" data-placement="top" title="<?php the_field('rival'); ?>"><?php the_field('rival'); ?> 

									</span>

								</div>

							</div>

							<div style="order:2; flex: 1 1 12%;" class="box-table-cell text-center text">

								<span class="d-flex justify-content-center align-items-center h-100">

									<?php the_field('ganado'); ?> 

								</span>

							</div>

							<div style="order:2; flex: 1 1 12%;" class="box-table-cell text-center text">

								<span class="d-flex justify-content-center align-items-center h-100">

									<?php the_field('perdido'); ?>

								</span>

							</div>

							<div style="order:2; flex: 1 1 12%;" class="box-table-cell text-center text">

								<span class="d-flex justify-content-center align-items-center h-100">

									<?php the_field('empatado'); ?>

								</span>

							</div>

							<div style="order:2; flex: 1 1 20%;" class="box-table-cell text-center text">

								<span class="d-flex justify-content-center align-items-center h-100">

									<?php the_field('condicion'); ?>

								</span>

							</div>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



						</div>

						

					</div>				

				</div><!--/campaign-->



				<!-- Team / Plantel

				===================== -->

				<div class="squad d-none d-md-block col-lg-6">

					<h3 class="box-head text-light">Plantel</h3>

					<div class="squad-box bg-light p-3">

						<nav class="box-nav">

							<div class="nav nav-tabs" id="nav-tab-teams" role="tablist">

								<a class="nav-item nav-link active" id="nav-goalkeepers-tab" data-toggle="tab" href="#nav-goalkeepers" role="tab" aria-controls="nav-goalkeepers" aria-selected="true">

									Arqueros

								</a>

								<a class="nav-item nav-link" id="nav-backwards-tab" data-toggle="tab" href="#nav-backwards" role="tab" aria-controls="nav-backwards" aria-selected="false">

									Defensores

								</a>

								<a class="nav-item nav-link" id="nav-midfielders-tab" data-toggle="tab" href="#nav-midfielders" role="tab" aria-controls="nav-midfielders" aria-selected="false">

									Mediocampistas

								</a>

								<a class="nav-item nav-link" id="nav-forwards-tab" data-toggle="tab" href="#nav-forwards" role="tab" aria-controls="nav-forwards" aria-selected="false">

									Delanteros

								</a>

								<a class="nav-item nav-link" id="nav-coachers-tab" data-toggle="tab" href="#nav-coachers" role="tab" aria-controls="nav-coachers" aria-selected="false">

									Cuerpo Técnico

								</a>

							</div>

						</nav>

						<div class="box-content tab-content p-3 mt-3" id="nav-tabContent">



							<!-- Goalkeepers / Arqueros 

							****************************** -->

							<div class="tab-pane fade show active" id="nav-goalkeepers" role="tabpanel" aria-labelledby="nav-goalkeepers-tab">

								

								<?php 

									$reg = array(

										'category__and' => array( 7, 53, 54 ), 

										'posts_per_page' => 5,

										'order' => 'DESC'

									);



									$filter_posts = new WP_Query($reg);



									if ($filter_posts -> have_posts()): 

										while ($filter_posts -> have_posts()): 

											$filter_posts -> the_post() 

								?>



								<div class="d-flex flex-wrap justify-content-center">

									<div class="card m-3">

										<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

										<div class="card-body">

											<h4 class="card-title mb-0"><?php the_field('nombre'); ?></h4>	

											<a class="card-link d-block float-right" data-toggle="modal" data-target="#player<?php echo get_the_id(); ?>">

                                            	<img src="<?php echo get_template_directory_uri( ); ?>/assets/images/add-file-button.svg" alt="">

                                        	</a>

										</div>

									</div>

								</div>



								<?php endwhile; ?>

						        <?php else: ?>

						        <?php endif; ?>

						        <?php wp_reset_postdata(); ?>



							</div><!--/goalkeepers-->	



							<!-- Backwards / Defensores 

							****************************** -->

							<div class="tab-pane fade" id="nav-backwards" role="tabpanel" aria-labelledby="nav-backwards-tab">



								<?php 

									$reg = array(

										'category__and' => array( 7, 53, 55 ), 

										'posts_per_page' => 15,

										'order' => 'DESC'

									);



									$filter_posts = new WP_Query($reg);



									if ($filter_posts -> have_posts()): 

										while ($filter_posts -> have_posts()): 

											$filter_posts -> the_post() 

								?>



								<div class="d-flex flex-wrap justify-content-center">

									<div class="card m-3">

										<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

										<div class="card-body">

											<h4 class="card-title mb-0"><?php the_field('nombre'); ?></h4>	

											<a class="card-link d-block float-right" data-toggle="modal" data-target="#player<?php echo get_the_id(); ?>">

                                            	<img src="<?php echo get_template_directory_uri( ); ?>/assets/images/add-file-button.svg" alt="">

                                        	</a>

										</div>

									</div>

								</div>



								<?php endwhile; ?>

						        <?php else: ?>

						        <?php endif; ?>

						        <?php wp_reset_postdata(); ?>



							</div><!--/backwards-->	



							<!-- Midfilders / Mediocampistas 

							*********************************** -->

							<div class="tab-pane fade" id="nav-midfielders" role="tabpanel" aria-labelledby="nav-midfielders-tab">



								<?php 

									$reg = array(

										'category__and' => array( 7, 53, 56 ), 

										'posts_per_page' => 15,

										'order' => 'DESC'

									);



									$filter_posts = new WP_Query($reg);



									if ($filter_posts -> have_posts()): 

										while ($filter_posts -> have_posts()): 

											$filter_posts -> the_post() 

								?>



								<div class="d-flex flex-wrap justify-content-center">

									<div class="card m-3">

										<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

										<div class="card-body">

											<h4 class="card-title mb-0"><?php the_field('nombre'); ?></h4>	

											<a class="card-link d-block float-right" data-toggle="modal" data-target="#player<?php echo get_the_id(); ?>">

                                            	<img src="<?php echo get_template_directory_uri( ); ?>/assets/images/add-file-button.svg" alt="">

                                        	</a>

										</div>

									</div>

								</div>



								<?php endwhile; ?>

						        <?php else: ?>

						        <?php endif; ?>

						        <?php wp_reset_postdata(); ?>



							</div><!--/midfilders-->		



							<!-- Forwards / Delanteros 

							***************************** -->	

							<div class="tab-pane fade" id="nav-forwards" role="tabpanel" aria-labelledby="nav-forwards-tab">



								<?php 

									$reg = array(

										'category__and' => array( 7, 53, 57 ), 

										'posts_per_page' => 15,

										'order' => 'DESC'

									);



									$filter_posts = new WP_Query($reg);



									if ($filter_posts -> have_posts()): 

										while ($filter_posts -> have_posts()): 

											$filter_posts -> the_post() 

								?>



								<div class="d-flex flex-wrap justify-content-center">

									<div class="card m-3">

										<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

										<div class="card-body">

											<h4 class="card-title mb-0"><?php the_field('nombre'); ?></h4>	

											<a class="card-link d-block float-right" data-toggle="modal" data-target="#player<?php echo get_the_id(); ?>">

                                            	<img src="<?php echo get_template_directory_uri( ); ?>/assets/images/add-file-button.svg" alt="">

                                        	</a>

										</div>

									</div>

								</div>



								<?php endwhile; ?>

						        <?php else: ?>

						        <?php endif; ?>

						        <?php wp_reset_postdata(); ?>



							</div><!--/forwards-->	

							

							<!-- Coachers / Cuerpo técnico 

							********************************* -->

							<div class="tab-pane fade" id="nav-coachers" role="tabpanel" aria-labelledby="nav-coachers-tab">



								<?php 

									$reg = array(

										'category__and' => array( 7, 53, 58 ), 

										'posts_per_page' => 15,

										'order' => 'DESC'

									);



									$filter_posts = new WP_Query($reg);



									if ($filter_posts -> have_posts()): 

										while ($filter_posts -> have_posts()): 

											$filter_posts -> the_post() 

								?>



								<div class="d-flex flex-wrap justify-content-center">

									<div class="card m-3">

										<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

										<div class="card-body">

											<h4 class="card-title mb-0"><?php the_field('nombre'); ?></h4>

											<small class="mt-3"><?php the_field('funcion'); ?></small>	

										</div>

									</div>

								</div>



								<?php endwhile; ?>

						        <?php else: ?>

						        <?php endif; ?>

						        <?php wp_reset_postdata(); ?>



							</div><!--/coachers-->	



						</div><!--/box-content-->

					</div><!--/squad-box-->	

				</div><!--/squad-->	



			</div><!--/row-->	

		</div><!--/container-fluid-->	

	</section><!--/teams-statics-->		





<!-- MIXED CONTENT -->

	<section id="mixed-content" class="mixed-content">

		<div class="container">

			<div class="row">

				<div class="col col-sm-10 mx-sm-auto col-md-12 mx-md-0 col-lg-12">



					<!-- Mixed news (lower half) / Noticias mixtas (mitad inferior) 

					================================================================ -->

					<div class="mixed-news mb-5">

						<div class="row">



							<!-- Row 1 / Fila 1 

							********************** -->



							<?php

								$reg = array(

									'category__and' => array( 7, 32, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-4 d-md-flex flex-md-column justify-content-md-between pr-md-4">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid d-none d-md-block" src="img/500x500.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>    

								<h3 class="news-head bo_bottom bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



							<?php    

								$reg = array(

									'category__and' => array( 7, 33, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-8 d-md-flex flex-md-column-reverse justify-content-md-between">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid img-row-1 m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid img-row-1 d-none d-md-block" src="img/800x400.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>

								<h3 class="news-head bo_top bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left pt-md-4 mt-md-0">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



						</div><!--/row-->

					</div><!--/mixed-news-->



					<div class="mixed-news">

						<div class="row">



							<!-- Row 2 / Fila 2

							********************** -->



							<?php   

								$reg = array(

									'category__and' => array( 7, 34, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-6 d-md-flex flex-md-column justify-content-md-between pr-md-4">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid img-row-3 m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid img-row-3 d-none d-md-block" src="img/500x500.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>  

								<h3 class="news-head bo_bottom bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



							<?php   

								$reg = array(

									'category__and' => array( 7, 45, 70 ),

									'posts_per_page' => 1,

									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>



							<article class="news col-md-6 d-md-flex flex-md-column-reverse justify-content-md-between">

								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">

									<figure class="link-img img-fluid img-row-3 m-0 d-none d-md-block" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<figure class="link-img img-fluid img-xs m-0 d-md-none" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

									<!-- <img class="link-img img-fluid img-row-3 d-none d-md-block" src="img/500x500.jpg" alt="">

									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->

									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">

										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>

									</div>

								</a>  

								<h3 class="news-head bo_top bo_light-gray text-center pb-4 mt-4 mb-0 text-md-left pt-md-4 mt-md-0">

									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h3>

							</article>



							<?php endwhile; ?>

							<?php else: ?>

							<?php endif; ?>

							<?php wp_reset_postdata(); ?>



						</div><!--/row-->

					</div><!--/mixed-news-->



				</div>



			</div><!--/row-->

		</div><!--/container-fluid-->

	</section><!--/mixed-content-->	



	<?php           

		$reg = array(

		    'category__and' => array( 7, 46 ),

		    'posts_per_page' => 1,

		    'order' => 'DESC'

		);



		$filter_posts = new WP_Query($reg);



		if ($filter_posts -> have_posts()): 

		    while ($filter_posts -> have_posts()): 

		        $filter_posts -> the_post() 

	?>



	<?php get_template_part( 'template-parts/multimedia', '' ); ?>



	<?php endwhile; ?>

    <?php else: ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>