<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tyson_Hood_2.0
 */

get_header(); ?>
		

		<?php get_template_part( 'template-parts/content', 'header-alt' ); ?>


	<!-- FEATURE IMAGE
	================================================================================ -->

		<section class="feature-image feature-image-default" data-type="background" data-speed="2">
			<div class="page-title">
				<h1>Lost?</h1>
			</div>
		</section>

</header> <!-- .site-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="container">
						<div class="col-sm-12">
							<h1 class="page-title"><?php esc_html_e( 'Unless looking for Lost Lake...', 'tysonhood2' ); ?></h1>
						</div>
					</div>
				</header><!-- .page-header -->

				<div class="container">
					<div class="col-sm-6 col-sm-offset-3">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lostlake.png">		
						<h4>... I think you may have taken a wrong turn somewhere. </h4>
					</div>
				</div>





				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
