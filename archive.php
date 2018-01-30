<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tyson_Hood_2.0
 */

get_header(); ?>
		
		<?php get_template_part( 'template-parts/content', 'header-alt' ); ?>

		<?php
		if ( have_posts() ) : ?>

			<!-- TITLE
			=============================================================================== -->
			<section class="feature-image feature-image-default" data-type="background" data-speed="2">
				<div class="page-title">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<small class="archive-description">', '</small>' );
					?>
				</div>
			</section>

		</header> <!-- .site-header -->

		<div class="container">
			<div id="primary" class="row">
				
				<main id="content" class="col-sm-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
								
				</main> <!-- #content -->

				<!-- SIDEBAR
				=============================================================================== -->
				<aside class="col-sm-4">
					<?php get_sidebar(); ?>
				</aside>
			</div> <!-- #primary -->
		</div> <!-- .container -->



<?php
get_footer();