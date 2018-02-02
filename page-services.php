<?php
/**
 * Template Name: Services page
 *
 * @package Tyson_Hood_2.0
 */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

// Body information
$body_title 				= get_field( 'body_title' );
$body_desc 					= get_field( 'body_desc' );
$body_button_text 	= get_field( 'body_button_text' );

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

<!-- SERVICES
=============================================================================== -->
<section id="services">
	<div class="container">
		<div class="row description">
			<div class="col-sm-12">
				<h2><?php echo $body_title ?></h2>
				<p><?php echo $body_desc ?></p>
				<div class="button-wrap">
					<a href="//localhost/tysonhood2wp/contact/" class="btn btn-lg btn-success"><?php echo $body_button_text ?></a>
				</div>
			</div> <!-- end col -->
		</div> <!-- .row -->
		<div class="row categories" style="text-align: center;">
			<hr>

			<?php $loop = new WP_Query( array( 'post_type' => 'service_plaque', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php 
					// Service Plaque information
					$highlight_1 	= get_field( 'highlight_1' );
					$highlight_2 	= get_field( 'highlight_2' );
					$highlight_3 	= get_field( 'highlight_3' );
					$highlight_4 	= get_field( 'highlight_4' );
					$highlight_5 	= get_field( 'highlight_5' );
					$highlight_6 	= get_field( 'highlight_6' );
					$highlight_7 	= get_field( 'highlight_7' );
					$service_cost	= get_field( 'service_cost' );
				?>

				<div class="col-md-4">
					<div class="service-wrap-wrap">
						<div class="service-wrap" style="width: 60%; margin: 0 auto;">
							<h3><?php the_title(); ?></h3>
							<ul style="list-style: none; padding: 0;">
								<li><?php echo $highlight_1 ?></li>
								<li><?php echo $highlight_2 ?></li>
								<li><?php echo $highlight_3 ?></li>
								<li><?php echo $highlight_4 ?></li>
								<li><?php echo $highlight_5 ?></li>
								<li><?php echo $highlight_6 ?></li>
								<li><?php echo $highlight_7 ?></li>
							</ul>
							<h4><?php echo $service_cost ?></h4>
						</div> <!-- .service-wrap -->
					</div> <!-- .service-wrap-wrap -->
				</div> <!-- end col -->

			<?php endwhile; wp_reset_query(); ?>

		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- #services -->

<?php
get_footer(); ?>