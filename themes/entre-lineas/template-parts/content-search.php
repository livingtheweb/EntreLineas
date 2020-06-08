<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Entre_Líneas
 */

?>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<section class="cover">
				<article id="post-<?php the_ID(); ?>" class="cover-main col px-4 px-sm-0">
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="main-head mt-3 mb-0"><a href="%s" class="co_bright-orange" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

						<!-- <?php if ( 'post' === get_post_type() ) : ?> -->
						
						<div class="entry-meta">
							<h4 class="main-subhead mt-2 mb-3 mb-sm-0 mb-md-4">
								<span>Publicado el 	<?php echo get_the_date(); ?> por <?php the_author(); ?></span>
							</h4>
						</div><!-- .entry-meta -->
						<!-- <?php endif; ?> -->
					</header><!-- .entry-header -->

						<?php entre_lineas_post_thumbnail(); ?>

						<div class="entry-summary h3">
							<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->

						<footer class="entry-footer">
							<hr>
						</footer><!-- .entry-footer -->
				</article><!-- #post-<?php the_ID(); ?> -->
			</section>
		</div>
	</div>
</div>

