<!-- BANNER (widget) -->
<div class="container-fluid">
	<div class="mb-5">		
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-large HOME')) : ?>
		<?php endif; ?> 
	</div>		
</div>	

<!-- MIXED CONTENT -->
	<section id="mixed-content" class="mixed-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col col-sm-10 mx-sm-auto col-md-12 mx-md-0 col-lg-8">
					
					<div class="mixed-news">
						<div class="row">

							<!-- NOTICIAS HOME 01 
							------------------------ -->
							<?php
								$counter = 1;
								$reg = array(
									'category__and' => array( 8, 3), 
									'posts_per_page' => 2,
									'order' => 'DESC'
								);

								$filter_posts = new WP_Query($reg);

								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
							?>

							<?php if($counter == 1) { ?>

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
								<h3 class="news-head bo_bottom bo_bright-orange text-center pb-4 mt-4 mb-0 text-md-left">
									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
							</article>

							<?php } else { ?>

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
								<h3 class="news-head bo_top bo_bright-orange text-center pb-4 mt-4 mb-0 text-md-left pt-md-4 mt-md-0">
									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
							</article>

								<?php
									}
									$counter++;
									endwhile;
									endif; 
									wp_reset_postdata(); 
								?>

						</div><!--/row-->
					</div><!--/mixed-news-->

					<!-- NOTICIA DESTACADA
					---------------------- -->
					<div class="mixed-news highlighted-news bg_bright-orange p-5 my-5">
						<div class="row flex-column justify-content-between flex-md-row">

							<?php   
								$reg = array(
									'category__and' => array( 9, 3), 
									'posts_per_page' => 1,
									'order' => 'DESC'
								);

								$filter_posts = new WP_Query($reg);

								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
							?>

							<article class="news col col-md-4">
								<h6 class="news-lead mb-3">
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
									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<h4 class="news-subhead mb-5 mb-md-0"><?php the_excerpt(); ?></h4>
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

						<!-- NOTICIAS HOME 02 -->

							<?php   
							
								$reg = array(
									'category__and' => array( 23, 3), 
									'posts_per_page' => 6,
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
								<h3 class="news-head bo_bottom bo_bright-orange text-center pb-4 mt-4 mb-0 text-md-left">
									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
							</article>							

							<?php endwhile; ?>
							<?php else: ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>

						</div><!--/row-->
					</div><!--/mixed-news-->

				

          <!-- BANNER (widget) -->
					<div class="container-fluid mt-5 px-0">
						<div class="mb-5">		
							<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-medium HOME')) : ?>
							<?php endif; ?> 
						</div>		
					</div>	

	        <div class="row flex-column flex-md-row">

						<!-- Noticias home 03 / colummna 1
						---------------------------------- -->
		        <div class="mixed-news col-md-6 d-md-flex flex-md-column">

						
								<?php   
								$do_not_duplicate = array(); 
								$reg = array(
									'category__and' => array( 32, 3 ), 
									'posts_per_page' => 2,
									'order' => 'DESC'
								);

								$filter_posts = new WP_Query($reg);

								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
							?>

							<?php   $do_not_duplicate[] = $post->ID; ?>

							<article class="news">
								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">
									<figure class="link-img img-fluid img-col-1 m-0" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;"></figure>
									<!-- <img class="link-img img-fluid img-col-1" src="img/500x300.jpg" alt=""> -->
									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">
										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>
									</div>
								</a>
								<h3 class="news-head bo_bottom bo_bright-orange text-center pb-4 mt-4 mb-0 text-md-left">
									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
							</article>					
							
							<div class="news-separator bg_bright-orange d-flex justify-content-center align-items-center my-5">
								<figure class="separator-img m-0" style="background-image: url('<?php echo get_template_directory_uri( );?>/assets/images/soccer-ball.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;"></figure>								
							</div>
							

							<?php														
								endwhile;
								endif; 
								wp_reset_postdata(); 
							?>	
			      </div><!--/mixed-news-->


						<!-- Noticias home 03 / colummna 2
						---------------------------------- -->
						<div class="mixed-news col-md-6 d-md-flex flex-md-column">
							<div class="news-separator bg_bright-orange d-flex justify-content-center align-items-center mb-5 mt-md-0 mb-md-5">
								<figure class="separator-img m-0" style="background-image: url('<?php echo get_template_directory_uri( );?>/assets/images/medal.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;"></figure>
								<!-- <img class="separator-img" src="img/medal.svg" alt=""> -->
							</div>

							<?php
								$reg = array(
									'category__and' => array( 32, 3), 
									'posts_per_page' => 1,
									'post__not_in' => $do_not_duplicate,
									'order' => 'DESC'
								);

								$filter_posts = new WP_Query($reg);

								if ($filter_posts -> have_posts()): 
									while ($filter_posts -> have_posts()): 
										$filter_posts -> the_post() 
										
							?>
							<?php   $do_not_duplicate[] = $post->ID; ?>
							<article class="news">
								<a class="news-link position-relative d-block flex-md-grow-1" href="<?php the_permalink(); ?>">
									<figure class="link-img img-fluid img-col-2 m-0" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;"></figure>
									<!-- <img class="link-img img-fluid img-col-2 d-none d-md-block" src="img/500x500.jpg" alt=""> 
									<img class="link-img img-fluid img-xs d-md-none" src="img/500x300.jpg" alt=""> -->
									<div class="link-overlay position-absolute p-5 w-100 d-none d-sm-block">
										<span class="news-subhead text-light"><?php the_excerpt(); ?></span>
									</div>
								</a>
								<h3 class="news-head bo_bottom bo_bright-orange text-center pb-4 mt-4 mb-0 text-md-left">
									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
							</article>

							<?php
														
													endwhile;
													endif; 
													wp_reset_postdata(); 
												?>

							<div class="news-separator bg_bright-orange d-flex justify-content-center align-items-center py-3 my-5 mt-md-5 mb-md-0">
								<figure class="separator-img m-0" style="background-image: url('<?php echo get_template_directory_uri( );?>/assets/images/soccer-shoes.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;"></figure>
								<!-- <img class="separator-img" src="images/soccer-shoes.svg" alt=""> -->
							</div>
						</div><!--/mixed-news--> 

					</div><!--/row-->	
				</div><!--/col--> 
			  

				<!-- Sidebar / Barra lateral 
				============================== -->
				<aside class="sidebar d-none d-lg-block col-lg-4">
					<div class="sidebar-box bg_dark-blue p-5">

						<!-- Positions / Tabla de posiciones 
						*************************************** -->
		            	<h3 class="box-head text-light">Posiciones</h3>
		            	<div class="box-statics positions bg-light">
		              		<!-- Tabs / Pestañas -->
							<nav>
								<div class="nav nav-tabs" id="tabs-positions" role="tablist">
									<a class="nav-item nav-link active" id="nav-positionsA-tab" data-toggle="tab" href="#nav-positionsA" role="tab" aria-controls="nav-positionsA" aria-selected="true">Superliga</a>
									<a class="nav-item nav-link" id="nav-positionsB-tab" data-toggle="tab" href="#nav-positionsB" role="tab" aria-controls="nav-positionsB" aria-selected="false">B Nacional</a>
								</div>
							</nav>
		              		<!-- Tabs content / Contenido de cada pestañas -->
		              		<div class="tab-content p-3" id="tabContent-positions">
		                		<div class="tab-pane fade show active" id="nav-positionsA" role="tabpanel" aria-labelledby="nav-positionsA-tab">
		                  			<iframe src="http://widgets.datafactory.la/es/primeraa/posiciones.html#championship=primeraa&appIdTrack=15749&show-descentTable=1&team=132&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=0&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=0&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=350&css-backgroundColor=%23FFFFFF&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23D1D3D4&css-desEquipoBgColor=%23F1F2F2&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23ff8737&css-navColorSel=%23FFFFFF&css-navBgColor=%236F7072&css-navColor=%23FFFFFF&css-titleFontFamily=%22Exo%22%2C%20sans-serif&css-titlePoints=15&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=Arial%2CHelvetica%2Csans-serif&css-tabsPoints=11&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Arial%2CHelvetica%2Csans-serif&css-mainPoints=11&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926" frameborder="0" width="400" height="700"></iframe> 
		                		</div>
				                <div class="tab-pane fade" id="nav-positionsB" role="tabpanel" aria-labelledby="nav-positionsB-tab">
				                	<iframe src="http://widgets.datafactory.la/es/nacionalb/posiciones.html#championship=nacionalb&appIdTrack=13001&show-descentTable=1&team=664&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=0&show-AgainstGoals=0&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=0&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=340&css-backgroundColor=%23FFFFFF&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23D1D3D4&css-desEquipoBgColor=%23F1F2F2&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23ff8737&css-navColorSel=%23FFFFFF&css-navBgColor=%236F7072&css-navColor=%23FFFFFF&css-titleFontFamily=%22Exo%22%2C%20sans-serif&css-titlePoints=15&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=Arial%2CHelvetica%2Csans-serif&css-tabsPoints=11&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Arial%2CHelvetica%2Csans-serif&css-mainPoints=11&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926" frameborder="0" width="400" height="700"></iframe> 
				                </div>
				            </div>  
				        </div>  

			            <!-- BANNER (widget) -->
						<div class="container-fluid px-0">
							<div class="my-5">		
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-small-top HOME')) : ?>
								<?php endif; ?> 
							</div>		
						</div>	

						<!-- Editorial article / Artículo de opinión 
						*********************************************** -->

						<?php
							$reg = array(
								'category__and' => array( 11, 38, 63 ), 
								'posts_per_page' => 1,
								'order' => 'DESC'
							);

							$filter_posts = new WP_Query($reg);

							if ($filter_posts -> have_posts()): 
								while ($filter_posts -> have_posts()): 
									$filter_posts -> the_post() 
						?>

						<article class="box-article article__home article__1 bg_light-orange d-flex flex-column justify-content-between p-5 mb-5">
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


						<!-- Editorial article / Artículo de opinión 
						*********************************************** -->

						<?php
							$reg = array(
								'category__and' => array( 11, 38, 64 ), 
								'posts_per_page' => 1,
								'order' => 'DESC'
							);

							$filter_posts = new WP_Query($reg);

							if ($filter_posts -> have_posts()): 
								while ($filter_posts -> have_posts()): 
									$filter_posts -> the_post() 
						?>

						<article class="box-article article__home article__2 bg_light-orange d-flex flex-column justify-content-between p-5 mb-5">
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
						
						<!-- BANNER (widget) -->
						<div class="container-fluid px-0">
							<div class="my-5">		
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner-small-top HOME')) : ?>
								<?php endif; ?> 
							</div>		
						</div>	
		            
			            <!-- Scorers / Tabla de goleadores 
			            ************************************* --> 
		            	<h3 class="box-head text-light">Goleadores</h3>
		            	<div class="box-statics scorers bg-light mb-5">
		              		<!-- Tabs / Pestañas -->
							<nav>
								<div class="nav nav-tabs" id="tabs-scorers" role="tablist">
									<a class="nav-item nav-link active" id="nav-scorersA-tab" data-toggle="tab" href="#nav-scorersA" role="tab" aria-controls="nav-scorersA" aria-selected="true">Superliga</a>
									<a class="nav-item nav-link" id="nav-scorersB-tab" data-toggle="tab" href="#nav-scorersB" role="tab" aria-controls="nav-scorersB" aria-selected="false">B Nacional</a>
								</div>
							</nav>
							<!-- Tabs content / Contenido de cada pestañas -->
							<div class="tab-content p-3" id="tabContent-scorers">
								<div class="tab-pane fade show active" id="nav-scorersA" role="tabpanel" aria-labelledby="nav-scorersA-tab">
									<iframe src="http://widgets.datafactory.la/es/primeraa/goleadores.html#championship=primeraa&show-descentTable=0&team=132&lang=es&show-positionsTable=0&show-PlayedGames=0&show-Goals=0&show-AgainstGoals=0&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=0&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=0&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=340&css-backgroundColor=%23FFFFFF&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23D1D3D4&css-desEquipoBgColor=%23F1F2F2&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23ff8737&css-navColorSel=%23FFFFFF&css-navBgColor=%236F7072&css-navColor=%23FFFFFF&css-titleFontFamily=%22Exo%22%2C%20sans-serif&css-titlePoints=15&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=Arial%2CHelvetica%2Csans-serif&css-tabsPoints=11&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Arial%2CHelvetica%2Csans-serif&css-mainPoints=11&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926" frameborder="0" width="400" height="700"></iframe> 
								</div>
								<div class="tab-pane fade" id="nav-scorersB" role="tabpanel" aria-labelledby="nav-scorersB-tab">
									<iframe src="http://widgets.datafactory.la/es/nacionalb/goleadores.html#championship=nacionalb&show-descentTable=0&team=664&lang=es&show-positionsTable=0&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=0&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=0&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=320&css-backgroundColor=%23FFFFFF&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23D1D3D4&css-desEquipoBgColor=%23F1F2F2&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23ff8737&css-navColorSel=%23FFFFFF&css-navBgColor=%236F7072&css-navColor=%23FFFFFF&css-titleFontFamily=Verdana%2CGeneva%2Csans-serif&css-titlePoints=15&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=Arial%2CHelvetica%2Csans-serif&css-tabsPoints=11&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Arial%2CHelvetica%2Csans-serif&css-mainPoints=11&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926" frameborder="0" width="400" height="700"></iframe>
								</div>
							</div>  
		            	</div>

						<!-- Editorial article / Artículo de opinión 
						*********************************************** -->

						<?php
							$reg = array(
								'category__and' => array( 11, 38, 66 ), 
								'posts_per_page' => 1,
								'order' => 'DESC'
							);

							$filter_posts = new WP_Query($reg);

							if ($filter_posts -> have_posts()): 
								while ($filter_posts -> have_posts()): 
									$filter_posts -> the_post() 
						?>

						<article class="box-article article__home article__3 bg_light-orange d-flex flex-column justify-content-between p-5 mb-5">
							<header>
								<h3 class="article-head text-uppercase text-center pb-3">Tiro al blanco</h3>
								<h2 class="article-title text-uppercase text-center mt-5">
									<a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
							</header>
							<footer class="d-flex justify-content-center align-items-center justify-content-xl-between">
								<figure class="article-img img__3 bg-light img-fluid rounded-circle m-0" style="background-image: url('<?php the_field('foto_autor'); ?>'); background-size: cover; background-repeat: no-repeat; background-position:center"></figure>  
								<!-- <img class="article-img bg-light img-fluid rounded-circle" src="img/160x160.png" alt=""> -->
								<h4 class="article-author text-uppercase text-right d-none d-xl-block">Por <?php the_author(); ?></h4>
							</footer>
						</article>

						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>

					</div><!--/sidebar-box-->
				</aside><!--/sidebar-->

			</div><!--/row-->
		</div><!--/container-fluid-->     
	</section><!--/mixed-content--> 

	<?php           
		$reg = array(
		    'category__and' => array( 38, 46 ),
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