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
		<footer id="footer" class="footer"> 
			<div class="footer-content bg_dark-blue">

				<div class="row flex-column flex-lg-row">

					<!-- Footer nav / Navegación del pie de página 
					================================================ -->	
					<div class="footer-nav col mb-5 col-lg-6 mb-lg-0">

						<!-- Brand / Marca 
						********************* -->
						<nav class="nav-brand d-flex justify-content-center mt-5">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo site_url() ?>/wp-content/uploads/2019/03/brand-gray.png" alt="">
							</a>
						</nav>

						<!-- Teams/ Equipos 
						********************** -->
						<nav class="nav-teams d-flex justify-content-center">
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
					  	</nav>

					  	<!-- Menu / Menú 
					  	******************* -->
					  	<nav class="nav-menu px-0 mb-5">
							<ul class="d-flex justify-content-center pl-0 ml-0">
						  		<li class="nav-item active mx-2"> 
						  			<a class="nav-link text-light text-uppercase px-1" href="#/" data-toggle="modal" data-target="#aboutUs">Quiénes somos</a> 
						  		</li>
						  		<li class="nav-item mx-2"> 
						  			<a class="nav-link text-light text-uppercase px-1" href="#/" data-toggle="modal" data-target="#adv">Publicitá con nosotros</a> 
						  		</li>
						  	</ul>
						</nav> 

						<!-- Social links / Enlaces a redes sociales  
						*********************************************** --> 	
					  	<nav class="nav-social d-flex justify-content-center">
							<div class="social-claim text-light mr-3">¡Seguinos!</div>
							<div class="social-icons d-flex">
								<a class="icon-link mx-2" href="https://www.instagram.com/p/BAC8ycSkQZG" target="_blank">
									<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-instagram-gray.svg" alt="">
								</a>
								<a class="icon-link mx-2" href="https://twitter.com/entrelineas_mza" target="_blank">
									<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-twitter-gray.svg" alt="">
								</a>
								<a class="icon-link mx-2" href="#/" target="_blank">
									<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-facebook-gray.svg" alt="">
								</a>
								<a class="icon-link mx-2" href="https://www.youtube.com/channel/UC8snr4_uNuxCT09MH0Qxxjg" target="_blank">
									<img class="icon-img img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/icon-youtube-gray.svg" alt="">
								</a>
							</div>	
						</nav> 

						<!-- Button up / Botón para volver al inicio 
						*********************************************** -->
						<div class="button-up d-flex flex-column align-items-center">
							<img class="up-img d-block mb-2" src="<?php echo get_template_directory_uri()?>/assets/images/trophy.svg" alt="">
							<a class="up-link up" href="#body"><span class="text-light">Volver arriba</span></a>
						</div>

					</div>

					<!-- Footer form / Formulario del pie de página 
					================================================= -->
					<div id="contact" class="footer-form bg_light-gray col p-5 col-md-9 align-self-md-center col-lg-6 mb-lg-0 ">
						<h3 class="form-head text-uppercase mb-4">Contactanos</h3>
						<form>
							<div class="form-group mb-4">
								<label class="form-label m-0" for="name">Nombre</label>
								<input class="form-control bg_light-gray co_dark-blue bo_dark-blue border-top-0 border-right-0 border-left-0 p-0" type="text" id="name" placeholder="Nombre completo" required>
							</div>
							<div class="form-group mb-4">
								<label class="form-label m-0" for="email">Email</label>
								<input class="form-control bg_light-gray co_dark-blue bo_dark-blue border-top-0 border-right-0 border-left-0 p-0" type="email" id="email" placeholder="ejemplo@email.com" required>
							</div>
							<div class="form-group mb-4">
								<label class="form-label m-0" for="subject">Asunto</label>
								<input class="form-control bg_light-gray co_dark-blue bo_dark-blue border-top-0 border-right-0 border-left-0 p-0" type="text" id="subject" placeholder="Motivo del mensaje">
							</div>
							<div class="form-group mb-4">
								<label class="form-label pb-2 m-0" for="message">Mensaje</label>
								<textarea class="form-control bg_light-gray bo_dark-blue co_dark-blue p-2" id="message" rows="8"></textarea>
							</div>
							<button class="btn-send bg_dark-blue co_light-gray rounded px-3" type="submit">Enviar</button>
						</form>
					</div>

				</div><!--/row-->	

			</div><!--/footer-content-->

		</footer>
		
	</div><!-- #page -->
	<div class="footer-developer" style="float: left;width: 100%;padding: 8px 0; font-family:consolas;font-size:14px;background-color: rgba(28,28,28,.9)">
			<div class="container">
				<a href="<?php echo esc_url( __( 'http://www.livingthewebla.com/', 'entre-lineas' ) ); ?>" class="badge text-info float-right" target="_blank">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Diseño y desarrollo web WP by Livingtheweb!', 'entre-lineas' ), 'Livingtheweb!' );
					?>
				</a>
				<!-- <span class="sep"> | </span> -->
				<!-- 	<?php					
					printf( esc_html__( 'Theme personalizado: %1$s %2$s.', 'entre-lineas' ),'entre-lineas', '');
					?> -->
			</div>
		</div><!-- .site-info -->

<?php wp_footer(); ?>

</body>
</html>
