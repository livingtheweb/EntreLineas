<!-- MODALS SECTION -->



<!-- Player Statics 

====================== -->


				<?php 

					$reg = array(

					    'cat' =>  53,

					    'posts_per_page' => 100 

					);



					$filter_posts = new WP_Query($reg);



					if ($filter_posts -> have_posts()): 

					    while ($filter_posts -> have_posts()): 

					        $filter_posts -> the_post() 

				?>

	
<div class="modal player-statics fade"  data-toggle="modal" id="player<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">

	<div class="modal-dialog modal-dialog-scrollable" role="document">

		<div class="modal-content">

				<div class="modal-header">

					<h4 class="modal-title" id="playerStaticsTitle">

						<?php the_field('nombre'); ?> -

						Estadísticas <?php the_field('temporada'); ?> 

					</h4>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">

					<span aria-hidden="true">&times;</span>

					</button>

				</div>

				<div class="modal-body">

					<div class="row no-gutters">

						 <figure class="col-5 img-fluid m-0" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

						<ul class="text col-6 mt-3">



							<h6 class="co_light-gray text-uppercase m-0">Nacionalidad</h6>

							<li class="pb-1 mb-2">

								<span class="mr-2"><?php the_field('pais'); ?></span>

								<img src="<?php the_field('bandera'); ?>" alt="">

							</li>



							<h6 class="co_light-gray text-uppercase m-0">Edad</h6>

							<li class="pb-1 mb-2"><?php the_field('edad'); ?> años</li>



							<h6 class="co_light-gray text-uppercase m-0">Altura</h6>

							<li class="pb-1 mb-2"><?php the_field('altura'); ?> cm</li>



							<h6 class="co_light-gray text-uppercase m-0">Peso</h6>

							<li class="pb-1 mb-2"><?php the_field('peso'); ?> kg</li>



							<h6 class="co_light-gray text-uppercase m-0">Posición</h6>

							<li class="pb-1 mb-2"><?php the_field('funcion'); ?></li>



							<h6 class="co_light-gray text-uppercase m-0">Partidos</h6>

							<li class="pb-1 mb-2"><?php the_field('partidos'); ?></li>



							<h6 class="co_light-gray text-uppercase m-0">Minutos</h6>

							<li class="pb-1 mb-2"><?php the_field('minutos'); ?></li>



							<h6 class="co_light-gray text-uppercase m-0">Goles</h6>

							<li class="pb-1 mb-2"><?php the_field('goles'); ?></li>



							<h6 class="co_light-gray text-uppercase m-0">Asistencias</h6>

							<li class="pb-1 mb-2"><?php the_field('asistencias'); ?></li>



							<h6 class="co_light-gray text-uppercase m-0">Amarillas</h6>

							<li class="pb-1 mb-2"><?php the_field('amarillas'); ?></li>



							<h6 class="co_light-gray text-uppercase m-0">Rojas</h6>

							<li><?php the_field('rojas'); ?></li>

						</ul>

					</div>	

				</div>



			



				<div class="modal-footer">

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>

</div>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>