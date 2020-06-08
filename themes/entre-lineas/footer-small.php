<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Entre_Líneas
 */

?>

		</div><!-- #content -->

	<!-- FOOTER -->
		<footer id="footer" class="footer footer-small h-100"> 
			<div class="footer-content bg_dark-blue px-md-0 h-100">

				<!-- Footer nav / Navegación del pie de página 
				================================================ -->	
				<div class="footer-nav d-flex flex-column h-100 flex-md-row justify-content-md-around align-items-md-center">

					<!-- Brand / Marca 
					********************* -->
					<div class="nav-brand d-flex justify-content-center my-5 my-md-0">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2019/03/brand-gray.png" alt="">
						</a>
					</div>

					<!-- Teams/ Equipos 
					********************** -->
					<div class="nav-teams d-flex justify-content-center my-5 my-md-0">
				 		<a href="<?php echo get_permalink(199); ?>" class="teams-link rounded-circle d-block position-relative mx-3">
				 			<div class="link-overlay link-overlay__tomba rounded-circle text-uppercase text-center position-absolute">Tomba</div>
				  			<img class="link-img rounded-circle img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/badge-tomba.svg" alt="">	
				  		</a>
				  		<a href="<?php echo get_permalink(202); ?>" class="teams-link rounded-circle d-block position-relative mx-3">	
				  			<div class="link-overlay link-overlay__lepra rounded-circle text-uppercase text-center position-absolute">Lepra</div>
				  			<img class="link-img rounded-circle img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/badge-lepra.svg" alt="">
				  		</a>	
				  		<a href="<?php echo get_permalink(204); ?>" class="teams-link rounded-circle d-block position-relative mx-3">
				  			<div class="link-overlay link-overlay__lobo rounded-circle text-uppercase text-center position-absolute">Lobo</div>
				  			<img class="link-img rounded-circle img-fluid" src="<?php echo site_url() ?>/wp-content/uploads/2019/03/badge-lobo.png" alt="">
				  		</a>	
				  	</div>

					<!-- Social links / Enlaces a redes sociales  
					*********************************************** --> 	
				  	<div class="nav-social d-flex justify-content-center my-5 my-md-0 flex-md-column flex-lg-row">
						<div class="social-claim text-light mr-3 mb-md-2 mb-lg-0">¡Seguinos!</div>
						<nav class="social-icons d-flex">
							<a class="icon-link mx-2" href="https://www.instagram.com/p/BAC8ycSkQZG" target="_blank">
								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-instagram-gray.svg" alt="">
							</a>
							<a class="icon-link mx-2" href="https://twitter.com/entrelineas_mza" target="_blank">
								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-twitter-gray.svg" alt="">
							</a>
							<a class="icon-link mx-2" href="#/" target="_blank">
								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-facebook-gray.svg" alt="Facebook">
							</a>
							<a class="icon-link mx-2" href="https://www.youtube.com/channel/UC8snr4_uNuxCT09MH0Qxxjg" target="_blank">
								<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-youtube-gray.svg" alt="">
							</a>
						</nav>	
					</div> 
		
					<!-- Button up / Botón para volver al inicio 
					*********************************************** -->
					<div class="button-up d-flex flex-column align-items-center mt-3 mb-5 m-md-0">
						<img class="up-img d-block mb-2" src="<?php echo get_template_directory_uri()?>/assets/images/trophy.svg" alt="">
						<a class="up-link up" href="#body"><span class="text-light">Volver arriba</span></a>
					</div>

				</div>

			</div><!--/footer-content-->

		</footer>
		
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
