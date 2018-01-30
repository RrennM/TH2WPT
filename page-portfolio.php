<?php
/**
 * Template Name: Portfolio page
 *
 * @package Tyson_Hood_2.0
 */

get_header(); ?>
		

		<?php get_template_part( 'template-parts/content', 'header-alt' ); ?>


	<!-- FEATURE IMAGE
	==================0============================================================= -->
	<?php if( has_post_thumbnail() ) { // Check for feature image?> 

		<section class="feature-image" style="background: url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
			<div class="page-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

	<?php } else { // Fallback image ?>

		<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
			<div class="page-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

	<?php } ?>

</header> <!-- .site-header -->


<?php get_footer() ?>