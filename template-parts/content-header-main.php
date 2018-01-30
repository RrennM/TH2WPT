<?php
/**
 * Template part for displaying main nav content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tyson_Hood_2.0
 */

?>


	<body <?php body_class(); ?> >
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tysonhood2' ); ?></a>
		<!--  HEADER
		=============================================================================== -->
	<header class="site-header" role="banner">

		<!--  NAV
		=============================================================================== -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse stationary" id="navbar" role="navigation">
				<div class="container">
					<div class=" navbar-header col-sm-2">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> <!-- navbar-toggle -->
						<a class="navbar-brand" href="http://localhost/tysonhood2wp/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/TysonHood2W.png" alt="Tyson Hood Logo" id="brand-logo"></a>
					</div> <!-- .navbar-header -->

					<!-- if the menu (WP admin area) is not set, then the "menu-class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-men_class-usage_bug?replies=4 -->

					<?php  
						wp_nav_menu( array(

							'theme_location' 		=> 'menu-1',
							'container' 				=> 'nav',
							'container_class'		=> 'navbar-collapse collapse',
							'menu_class'				=> 'nav navbar-nav navbar-right',
							'menu_id'						=> 'nav-links'

						));
					?>

				</div> <!-- .container -->
			</div> <!-- .navbar -->	
	  </div> <!-- .container -->


		<!-- Motto
		=============================================================================== -->
		<section id="hero" data-type="background" data-speed="4">
			<div class="container clearfix">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-6" id="motto">
						<p>Designing a better world, <br/>
						<span>one website at a time...</span></p>
					</div> <!-- #motto -->
				</div> <!-- .row -->
			</div> <!-- .container -->
		</section>

	</header> <!-- .site-header -->