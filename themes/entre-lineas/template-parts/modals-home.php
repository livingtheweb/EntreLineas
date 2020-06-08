<!-- MODALS HOME -->

	<!-- Match Highlights / Resumen del partido 
	============================================= -->

	<!-- Godoy Cruz -->

	<?php           
		$reg = array(
		    'category__and' => array( 5, 47 ),
		    'posts_per_page' => 1,
		    'order' => 'DESC'
		);

		$filter_posts = new WP_Query($reg);

		if ($filter_posts -> have_posts()): 
		    while ($filter_posts -> have_posts()): 
		        $filter_posts -> the_post() 
	?>

	<div class="modal match-highlights fade" id="matchHighlights_1" tabindex="-1" role="dialog" aria-labelledby="matchHighlightsTitle_1" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="matchHighlightsTitle_1"><?php the_title(); ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php the_field('partido'); ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <a class="btn btn-danger" href="<?php the_field('enlace_youtube'); ?>" target="_blank">Ver en YouTube</a>
	      </div>
	    </div>
	  </div>
	</div>

	<?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


    <!-- Independiente -->

	<?php           
		$reg = array(
		    'category__and' => array( 6, 47 ),
		    'posts_per_page' => 1,
		    'order' => 'DESC'
		);

		$filter_posts = new WP_Query($reg);

		if ($filter_posts -> have_posts()): 
		    while ($filter_posts -> have_posts()): 
		        $filter_posts -> the_post() 
	?>

	<div class="modal match-highlights fade" id="matchHighlights_2" tabindex="-1" role="dialog" aria-labelledby="matchHighlightsTitle_2" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="matchHighlightsTitle_2"><?php the_title(); ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php the_field('partido'); ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <a class="btn btn-danger" href="<?php the_field('enlace_youtube'); ?>" target="_blank">Ver en YouTube</a>
	      </div>
	    </div>
	  </div>
	</div>

	<?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


    <!-- Gimnasia y Esgrima -->

	<?php           
		$reg = array(
		    'category__and' => array( 7, 47 ),
		    'posts_per_page' => 1,
		    'order' => 'DESC'
		);

		$filter_posts = new WP_Query($reg);

		if ($filter_posts -> have_posts()): 
		    while ($filter_posts -> have_posts()): 
		        $filter_posts -> the_post() 
	?>

	<div class="modal match-highlights fade" id="matchHighlights_3" tabindex="-1" role="dialog" aria-labelledby="matchHighlightsTitle_3" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="matchHighlightsTitle_3"><?php the_title(); ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php the_field('partido'); ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <a class="btn btn-danger" href="<?php the_field('enlace_youtube'); ?>" target="_blank">Ver en YouTube</a>
	      </div>
	    </div>
	  </div>
	</div>

	<?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


	
	<!-- About us / Sobre nosotros 
	================================= -->

	<div class="modal who-we-are fade" id="aboutUs" tabindex="-1" role="dialog" aria-labelledby="aboutUsTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">

				<?php           
					$reg = array(
					    'cat' => 71,
					    'posts_per_page' => 1,
					    'order' => 'DESC'
					);

					$filter_posts = new WP_Query($reg);

					if ($filter_posts -> have_posts()): 
					    while ($filter_posts -> have_posts()): 
					        $filter_posts -> the_post() 
				?>

				<div class="modal-header">
					<h5 class="modal-title" id="aboutUsTitle"><?php the_title(); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php the_post_thumbnail('large', array('class' => 'img-fluid w-100 mb-3')); ?>
					<div class="text">
						<?php the_content(); ?>
					</div>
				</div>

				<?php endwhile; ?>
			    <?php else: ?>
			    <?php endif; ?>
			    <?php wp_reset_postdata(); ?>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary">Save</button> -->
				</div>
			</div>
		</div>
	</div>

	<!-- Advertising / Publicidad 
	================================ -->

	<div class="modal advertising fade" id="adv" tabindex="-1" role="dialog" aria-labelledby="advTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="advTitle">Publicidad</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4 class="my-3">Subtítulo</h4>
					<p class="text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus rem, sequi, qui repudiandae earum porro voluptas debitis nisi vero, ducimus similique perferendis consequuntur. Optio distinctio, cumque perferendis, eveniet sunt veniam.
					</p>

					<h4 class="mt-5 mb-3">Subtítulo</h4>
					<p class="text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus rem, sequi, qui repudiandae earum porro voluptas debitis nisi vero, ducimus similique perferendis consequuntur. Optio distinctio, cumque perferendis, eveniet sunt veniam.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary">Save</button> -->
				</div>
			</div>
		</div>
	</div>