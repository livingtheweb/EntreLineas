<!-- MULTIMEDIA -->
	<section id="multimedia" class="multimedia">
		<div class="container">
			<div class="row">

				<!-- Multimedia content / Contenido multimedia 
				================================================ -->	
				<div class="multimedia-box bg_light-blue p-5 mb-5">
					<header class="box-head mb-5">
						<h2 class="text-center">Multimedia</h2>
					</header>	

					<!-- Videos 
					************** -->	
					<article class="box-videos bo_light-orange">
						<div class="row flex-wrap justify-content-between align-items-start">
							
							<div class="col-12 mt-3 mb-5 col-md-6 mt-md-0">
								<?php the_field('video_1'); ?>
							</div>

							<div class="col-12 mt-3 mb-5 col-md-6 mt-md-0">
								<?php the_field('video_2'); ?>
							</div>

							<div class="col-12 mt-3 mb-5 col-md-6 mt-md-0">
								<?php the_field('video_3'); ?>
							</div>

							<div class="col-12 mt-3 mb-5 col-md-6 mt-md-0">
								<?php the_field('video_4'); ?>
							</div>

							
						</div>	
					</article>

					<!-- Youtube link / Enlace a YouTube 
					*************************************** -->	
					<footer class="box-social text-light text-center pt-3">
						<h4>Busca más videos en nuestro canal de YouTube</h4>
						<div class="d-flex justify-content-center align-items-center">
							<svg class="animated flash infinite" width="12" height="11">
							    <circle cx="6" cy="5.5" r="2.75" fill="#ff8837"/>
							</svg>
							<a class="social-link co_bright-orange pl-2" href="https://www.youtube.com/channel/UC8snr4_uNuxCT09MH0Qxxjg" target="_blank"><span class="bo_bright-orange">Entrelíneas Mza</span></a>
						</div>
					</footer>
				</div>

			</div><!--/.row-->	
		</div><!--/.container-->	
	</section><!--/.multimedia-->	