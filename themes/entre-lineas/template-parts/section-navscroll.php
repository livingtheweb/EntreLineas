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

				<!-- Menu (internal navigation) / Menú (navegación en el interior de la página) 
				********************************************************************************** -->
				<nav id="scroll-menu" class="scroll-menu align-self-end">
					<ul class="nav-menu d-flex p-0 mb-2">
				  		<!-- <li class="nav-item item__statics mx-2"> 
				  			<a class="nav-link link__scroll marked text-light text-uppercase px-0" href="#teams-statics">Estadísticas</a> 
				  		</li> -->
				  		<li class="nav-item item__multimedia mx-2"> 
				  			<a class="nav-link link__scroll text-light text-uppercase px-0" href="#multimedia">Multimedia</a> 
				  		</li>
				  	</ul>
				</nav>  
					
			</div>
		</nav><!--/nav-scroll-->  


