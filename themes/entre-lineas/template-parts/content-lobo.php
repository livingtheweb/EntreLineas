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



					<!-- Notas LOBO
					----------------------  -->

					<div class="mixed-news">

						<div class="row">



							<!-- Row 1 / Fila 1 

							********************** -->



							<?php
								$do_not_duplicate = array(); 
								$reg = array(
									'category__and' => array( 7),
									'posts_per_page' => 1,
									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>


							<?php   $do_not_duplicate[] = $post->ID; ?>
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


							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



							<?php    							
								$reg = array(
									'category__and' => array( 7),
									'posts_per_page' => 1,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'
								);



								$filter_posts = new WP_Query($reg);


								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
							?>


							<?php $do_not_duplicate[] = $post->ID; ?>
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

							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



						</div><!--/row-->

					</div><!--/mixed-news-->

						
					<!-- Lobo noticia destacada
					---------------------- -->
					

	        	<div class="mixed-news highlighted-news bg_lobo-black p-5 my-5">
	            <div class="row flex-column justify-content-between flex-md-row">
		            

							<?php   

								$reg = array(

									'category__and' => array( 7, 159),

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



						<!-- Notas Lobo luego de destacadas 
						----------------------------------- -->




							<?php   

								$reg = array(

									'category__and' => array( 7),
									'posts_per_page' => 2,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
							?>


							<?php  $do_not_duplicate[] = $post->ID; ?>
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



							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



							<?php   

								$reg = array(

									'category__and' => array(7),
									'posts_per_page' => 2,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
							?>


							<?php  $do_not_duplicate[] = $post->ID; ?>
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



							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



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

		<div class="my-5">		

			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-large LOBO')) : ?>

			<?php endif; ?> 

		</div>		

	</div>



<!-- STATICS (contenido suprimido)-->



<!-- NOTICIAS LOBO LUEGO DEL BANNER 
================================================================ -->

	<section id="mixed-content" class="mixed-content">

		<div class="container">

			<div class="row">

				<div class="col col-sm-10 mx-sm-auto col-md-12 mx-md-0 col-lg-12">
					

					<div class="mixed-news mb-5">

						<div class="row">



							<!-- Fila 1
							-------------------- -->



							<?php

								$reg = array(

									'category__and' => array( 7),
									'posts_per_page' => 1,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'
								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
							?>


							<?php  $do_not_duplicate[] = $post->ID; ?>
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



							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



							<?php    

								$reg = array(

									'category__and' => array(7),
									'posts_per_page' => 1,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>


							<?php $do_not_duplicate[] = $post->ID; ?>
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



							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



						</div><!--/row-->

					</div><!--/mixed-news-->



					<div class="mixed-news">

						<div class="row">



							<!-- Row 2 / Fila 2

							********************** -->



							<?php   

								$reg = array(

									'category__and' => array( 7),
									'posts_per_page' => 1,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'

								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>


							<?php $do_not_duplicate[] = $post->ID; ?>
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



							
							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



							<?php   

								$reg = array(

									'category__and' => array( 7),
									'posts_per_page' => 1,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'
								);



								$filter_posts = new WP_Query($reg);



								if ($filter_posts -> have_posts()): 

									while ($filter_posts -> have_posts()): 

										$filter_posts -> the_post() 

							?>


							<?php $do_not_duplicate[] = $post->ID; ?>
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



							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>



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