<!-- Cover / Portada 
====================== -->
<section id="cover" class="cover teams-cover">
	<div class="container">
		<div class="row">

			<!-- Main news / Noticia principal 
			************************************* -->
			<article class="cover-main col px-4 px-sm-0">
				<h6 class="main-lead co_dark-blue">
					<!-- Código para que devuelva el Tag como texto plano y no como link -->
	                <?php $tags = get_the_tags(); 
	                    if ($tags) {                 
	                      foreach( $tags as $tag ) {
	                        echo $tag->name;
	                      }            
	                    }
	                ?>
				</h6>
				<h2 class="main-head mt-3 mb-0">
					<a class="co_bright-orange" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<h4 class="main-subhead mt-2 mb-3 mb-sm-0 mb-md-4"><?php the_excerpt(); ?></h4>
				<div class="photo-owner text-right"><?php the_field('creditos'); ?></div>
				<a class="main-link d-block" href="<?php the_permalink(); ?>">
					<figure class="main-image section-image img-fluid m-0" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>
					<!-- <img class="main-image section-image img-fluid" src="img/1000x600.jpg" alt=""> -->
				</a>	
			</article>

		</div><!--/.row-->	
	</div><!--/.container-->
</section><!--/.cover-->		