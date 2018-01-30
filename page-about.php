<?php
/**
 * Template Name: About page
 *
 * @package Tyson_Hood_2.0
 */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

$header_one = get_field( 'header_one' );
$lead_one = get_field( 'lead_one' );
$desc_one = get_field( 'desc_one' );

$header_two = get_field( 'header_two' );
$lead_two = get_field( 'lead_two' );
$desc_two = get_field( 'desc_two' );

$header_three = get_field( 'header_three' );
$lead_three = get_field( 'lead_three' );
$desc_three = get_field( 'desc_three' );

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

		<section class="feature-image feature-image-default" data-type="background" data-speed="2">
			<div class="page-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

	<?php } ?>

</header> <!-- .site-header -->

<!-- FULL ABOUT
=============================================================================== -->
<section id="my-story">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h2><?php echo $header_one ?></h2>
				<p class="lead"><?php echo $lead_one ?></p>
				<P><?php echo $desc_one ?></p>
				<hr>
				<h2><?php echo $header_two ?></h2>
				<p class="lead"><?php echo $lead_two ?></p>
				<p><?php echo $desc_two ?></p>
				<hr>
				<h2><?php echo $header_three ?></h2>
				<p class="lead"><?php echo $lead_three ?></p>
				<p><?php echo $desc_three ?></p>
				<h3>Thank you much!</h3>
				<h3>&mdash; <span class="signature">Tyson Hood</span> &mdash;</h3>
			</div> <!-- end col -->
			<div class="col-sm-5">

				<?php $loop = new WP_Query( array( 'post_type' => 'about_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="story-image">
						<?php the_post_thumbnail(); ?>
						<p class="story-image-caption"><?php the_title(); ?></p>
					</div>

				<?php endwhile; wp_reset_query(); ?>
			</div> <!-- end col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- #my-story -->

<?php
get_footer(); ?>