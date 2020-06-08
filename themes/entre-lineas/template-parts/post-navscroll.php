<!-- Nav scroll (utility navbar that comes out when the user is scrolling) / 
	 Nav scroll (navbar utilitario que aparece cuando el usuario hace scroll)
	================================================================================ -->
		<nav id="nav-scroll" class="nav-scroll bg_dark-blue">
			<div class="d-flex justify-content-between px-3 px-sm-5">
			
				<!-- Brand / Marca 
				********************* -->
				<div class="scroll-brand">  
	                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	                    <img class="brand-img" src="<?php echo site_url() ?>/wp-content/uploads/2019/03/brand-monogram.png" alt="">
	                </a>
            	</div>

			 	<!-- Menu (external navigation) / Menú (navegación fuera de la página) 
				************************************************************************* -->
				<nav class="scroll-teams align-self-end d-none d-sm-block">
					<ul class="nav-menu d-flex p-0 mb-1">
				  		<li class="nav-item"> 
				  			<a class="nav-link text-light" href="<?php echo get_permalink(199); ?>">Tomba</a> 
				  		</li>
				  		<li class="nav-item"> 
				  			<a class="nav-link text-light" href="<?php echo get_permalink(202); ?>">Lepra</a> 
				  		</li>
				  		<li class="nav-item"> 
				  			<a class="nav-link text-light" href="<?php echo get_permalink(204); ?>">Lobo</a> 
				  		</li>
				  	</ul>
				</nav>

				<!-- Menu (social media links) / Menú (enlaces a redes sociales) 
				******************************************************************* -->
				<nav class="scroll-social align-self-end mb-3">
					<div class="social-icons d-flex justify-content-end">
						<a class="icon-link mx-2" href="https://www.instagram.com/p/BAC8ycSkQZG" target="_blank">
							<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-instagram.svg" alt="">
						</a>
						<a class="icon-link mx-4 mx-md-3 mx-xl-2" href="https://twitter.com/entrelineas_mza" target="_blank">
							<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-twitter.svg" alt="">
						</a>
						<a class="icon-link mx-4 mx-md-3 mx-xl-2" href="https://www.facebook.com/entrelineasmza" target="_blank">
							<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-facebook.svg" alt="">
						</a>
						<a class="icon-link mx-4 mx-md-3 mx-xl-2" href="https://www.youtube.com/channel/UC8snr4_uNuxCT09MH0Qxxjg" target="_blank">
							<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-youtube.svg" alt="">
						</a>
					</div>	
				</nav> 

			</div>
		</nav><!--/nav-scroll-->  