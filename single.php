<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tyson_Hood_2.0
 */

get_header(); ?>
		

	<?php get_template_part( 'template-parts/content', 'header-alt' ); ?>


	<!-- FEATURE IMAGE
	==================0============================================================= -->

	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	</section>

</header> <!-- .site-header -->

<!-- POST
=============================================================================== -->
<section id="post">
	<div class="container" id="primary">

		<!-- POSTS
		=============================================================================== -->
		<main class="col-sm-8">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

		<!-- SIDEBAR
		=============================================================================== -->
		<aside class="col-sm-4">
			<?php get_sidebar() ?>
		</aside>
	</div><!-- #primary -->
</section> <!-- #post -->

<?php
get_footer(); ?>
