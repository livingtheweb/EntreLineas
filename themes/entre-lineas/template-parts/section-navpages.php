<!-- Nav pages (general navigation displayed in site pages) / 

	 Nav páginas (navegación general que se muestra en las páginas del sitio)

	============================================================================ -->

		<nav id="nav-pages" class="nav-pages bg_dark-blue">

			<div class="content d-flex flex-column justify-content-between align-items-center h-100 px-3 py-3 flex-sm-row px-sm-5 py-sm-4 flex-sm-wrap">

			

				<!-- Brand / Marca 

				********************* -->

				<div class="pages-brand mb-2 flex-shrink-0 mb-sm-0 align-self-md-end">  

	                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

	                    <img class="brand-img" src="<?php echo site_url() ?>/wp-content/uploads/2019/03/cropped-brand.png" alt="">

	                </a>

            	</div>



			 	<!-- Menu (external navigation) / Menú (navegación fuera de la página) 

				************************************************************************* -->

				<nav class="pages-teams d-flex justify-content-center mb-2 mb-md-0 align-items-lg-center">

	                <a href="<?php echo get_permalink(199); ?>" class="teams-link rounded-circle d-block position-relative mx-3">

	                    <div class="link-overlay link-overlay__tomba rounded-circle text-uppercase text-center position-absolute">Tomba</div>

	                    <img class="link-img rounded-circle img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/badge-tomba.svg" alt="">  

	                </a>

	                <a href="<?php echo get_permalink(202); ?>" class="teams-link rounded-circle d-block position-relative mx-3">  

	                    <div class="link-overlay link-overlay__lepra rounded-circle text-uppercase text-center position-absolute">Lepra</div>

	                    <img class="link-img rounded-circle img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/badge-lepra.png" alt="">

	                </a>  

	                <a href="<?php echo get_permalink(204); ?>" class="teams-link rounded-circle d-block position-relative mx-3">

	                    <div class="link-overlay link-overlay__lobo rounded-circle text-uppercase text-center position-absolute">Lobo</div>

	                    <img class="link-img rounded-circle img-fluid" src="<?php echo site_url() ?>/wp-content/uploads/2019/03/badge-lobo.png" alt="">

	                </a>  

	            </nav>

				

				<div class="nav-wrapper d-none d-sm-flex justify-content-sm-between align-self-sm-end mt-sm-4 flex-md-column mt-md-3">



		            <!-- Menu (social media links) / Menú (enlaces a redes sociales) 

					******************************************************************* -->

					<nav class="pages-social mb-3">

						<div class="social-icons d-flex justify-content-center justify-content-md-end">

							<a class="icon-link mx-2" href="https://www.instagram.com/p/BAC8ycSkQZG" target="_blank">

								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-instagram.svg" alt="">

							</a>

							<a class="icon-link mx-2" href="https://twitter.com/entrelineas_mza" target="_blank">

								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-twitter.svg" alt="">

							</a>

							<a class="icon-link mx-2" href="https://www.facebook.com/entrelineasmza" target="_blank">

								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-facebook.svg" alt="">

							</a>

							<a class="icon-link mx-2" href="https://www.youtube.com/channel/UC8snr4_uNuxCT09MH0Qxxjg" target="_blank">

								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-youtube.svg" alt="">

							</a>

						</div>	

					</nav> 



					<!-- Menu (internal navigation) / Menú (navegación en el interior de la página) 

					********************************************************************************** -->

					<nav id="pages-menu" class="pages-menu">

						<ul class="nav-menu d-flex justify-content-end p-0 mb-0">

					  		<!-- <li class="nav-item item__statics mx-2"> 

					  			<a class="nav-link link__scroll marked text-light text-uppercase px-0" href="#teams-statics">Estadísticas</a> 

					  		</li> -->

					  		<li class="nav-item item__multimedia mx-2"> 

					  			<a class="nav-link link__scroll text-light text-uppercase px-0" href="#multimedia">Multimedia</a> 

					  		</li>

					  	</ul>

					</nav>  



				</div>

					

			</div>

		</nav><!--/nav-pages-->  





