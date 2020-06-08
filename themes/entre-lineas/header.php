<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until #page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Entre_Líneas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Matías Ferrer | Mariano Pistone | Livingtheweb!">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/manifest.json">
	
	<style>
		/* Estilos formulario de búsqueda */
		.searchBar.open {
			top: 0;
		}
		.searchBar {
			background-color: #ffffff;
			box-shadow: 0 10px 20px rgba(0,0,0,0.08), 0 6px 6px rgba(0,0,0,0.14);
			position: fixed;
			top: -100px;
			left: 0;
			z-index: 9999999;
			width: 100%;
			-moz-transition: 0.25s;
			-o-transition: 0.25s;
			-webkit-transition: 0.25s;
			transition: 0.25s;
			padding: .6em;
			text-align: center;
		}
		.searchBar .searchClose {
			-moz-transition: 0.25s;
			-o-transition: 0.25s;
			-webkit-transition: 0.25s;
			transition: 0.25s;
			position: absolute;
			cursor: pointer;
			font-size: 30px;
			top: 0;
			right: 10px;
			padding: .15em .4em;
			line-height: 38px;
		}
	</style>

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77228807-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-77228807-1');
	</script>
</head>

<body <?php body_class(); ?> id="body" data-spy="scroll" data-target="#scroll-menu" data-offset="100">
	<!-- Formulario de búsqueda -->
	<div class="searchBar">
		<?php get_search_form(); ?>
		<div class="searchClose js-searchClose">
			<span class="dashicons dashicons-no-alt"></span>
		</div>
	</div>
	<div id="page" class="site">
  		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'entre-lineas' ); ?></a> -->	