<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Entre_Líneas
 */

?>

<!-- HEADER -->
	<header id="header" class="header">
		
		<?php get_template_part( 'template-parts/post', 'navpages' ); ?>
		<?php get_template_part( 'template-parts/post', 'navscroll' ); ?>

		<!-- Cover / Portada 
		====================== -->
		<section id="post-<?php the_ID(); ?>" class="cover mb-0">
			<div class="container">
				<div class="row flex-column align-items-center mt-5">

					<!-- News header / Cabecera de la noticia 
					******************************************** -->
					<article class="cover-main col-10 px-0">
						<h6 class="main-lead co_bright-orange">
						<!-- Código para que devuelva el Tag como texto plano y no como link -->
		                <?php $tags = get_the_tags(); 
		                    if ($tags) {                 
		                      foreach( $tags as $tag ) {
		                        echo $tag->name;
		                      }            
		                    }
		                ?>
						</h6>
						<h1 class="main-head mt-3 mb-0"><?php the_title(); ?></h1>
						<h4 class="main-subhead mt-2 mb-3 mb-sm-0 mb-md-4"><?php the_excerpt(); ?></h4>
						<div class="photo-owner text-right"><?php the_field('creditos'); ?></div>
						<figure class="main-image news-image img-fluid m-0" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>
						<!-- <img class="main-image news-image img-fluid w-100" src="img/1000x600.jpg" alt=""> -->
					</article>

					<footer class="cover-footer col-10 px-0 pb-3 mt-4 mb-5">
						<div class="text-center">
							<?php echo do_shortcode( '[addtoany buttons="facebook,twitter,whatsapp"]' ); ?>
						</div>
					</footer>	

				</div><!--/row-->
			</div><!--/container-fluid-->
		</section><!--/cover-->
			
	</header>


<!-- NEWS CONTENT -->
	<section id="opened-news" class="opened">
		<div class="container">
			<div class="row flex-column align-items-center">

				<!-- News text / Texto de la noticia
				*************************************** -->
				<div class="news-text col-10 px-0">
					<p class="text-uppercase font-weight-bold"><span class="text-muted">Por </span><?php the_author(); ?></p>
				
					<?php						
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'entre-lineas' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'entre-lineas' ),
							'after'  => '</div>',
						) );
					?>
					
				</div>

			</div><!--row-->
		</div><!--/container-fluid-->
	</section><!--/opened-news-->



