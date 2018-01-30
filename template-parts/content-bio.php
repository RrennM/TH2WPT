<?php
/**
 * Template part for displaying bio content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tyson_Hood_2.0
 */

// ACF Variables
// Bio
$bio_image = get_field( 'bio_image' );
$bio_title = get_field( 'bio_title' );
$bio_content_top = get_field( 'bio_content_top' );
$bio_content_bottom = get_field( 'bio_content_bottom' );

?>

<!-- ABOUT
=============================================================================== -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-12" id="about-img-cont">
				<img src="<?php echo $bio_image['url'] ?>">
			</div>
			<div class="col-sm-6 col-sm-12">
				<h2><?php echo $bio_title ?></h2>
				<p><?php echo $bio_content_top ?></p>
				<p><?php echo $bio_content_bottom ?></p>


				<?php $loop = new WP_Query( array( 'post_type' => 'social_badge', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<a href="<?php the_title(); ?>" target="_blank" class="social twitter"><i class="<?php the_field( 'social_badge_icon' ); ?>"></i></a>

				<?php endwhile; wp_reset_query(); ?>

			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- #about -->