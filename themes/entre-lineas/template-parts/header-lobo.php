<!-- HEADER -->
	<header id="header" class="header">
		
		<?php get_template_part( 'template-parts/section', 'navpages' ); ?>
		<?php get_template_part( 'template-parts/section', 'navscroll' ); ?>

		<!-- Team header / Encabezado equipo 
		======================================== -->
		<section id="teams-header" class="teams-header" style="background-image: url('<?php echo site_url() ?>/wp-content/uploads/2019/04/header-lobo.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center">
			<div class="container-fluid h-100">
				<div class="row no-gutters align-items-center justify-content-between position-relative h-100">
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="stripes stripes__lobo bg_lobo-black col-1 h-100"></div>
					<div class="header-title text-light text-uppercase text-center bg_lobo-black py-3">
						Lobo
					</div>
					<img class="header-badge rounded-circle bg-light img-fluid d-block" src="<?php echo site_url() ?>/wp-content/uploads/2019/03/badge-lobo.png" alt="">
				</div>
			</div>
		</section>

		<?php 
			$reg = array(
				'category__and' => array( 7, 158 ), 
				'posts_per_page' => 1
			);

			$filter_posts = new WP_Query($reg);

			if ($filter_posts -> have_posts()): 
				while ($filter_posts -> have_posts()): 
					$filter_posts -> the_post() 
		?>

		<?php get_template_part( 'template-parts/section', 'cover' ); ?>

		<?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
			
	</header>