<!-- 
Template name: Tomba
-->

<?php get_header(); ?>
<?php get_template_part( 'template-parts/preloader', 'tomba' ); ?>
<?php get_template_part( 'template-parts/header', 'tomba' ); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'tomba' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer('small'); ?>

<?php get_template_part( 'template-parts/modals', 'section' ); ?>