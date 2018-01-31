<?php
/**
 * Template Name: Portfolio page
 *
 * @package Tyson_Hood_2.0
 */

$port_section_title			= get_field( 'portfolio_section_title' );
$port_section_body			= get_field( 'portfolio_section_body' );
$js_section_title				= get_field( 'js_section_title' );
$js_section_body				= get_field( 'js_section_body' );

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

	<!-- PORTFOLIO Section
	=============================================================================== -->
	<section class="portfolio" id="primary">
		<div class="container">
			<h2><?php echo $port_section_title ?></h2>
			<p><?php echo $port_section_body ?></p>
			<div class="gallery">
				<div class="row">

					<?php $loop = new WP_Query( array( 'post_type' => 'portfolio_item', 'orderby' => 'post_id', 'order' => 'ASC' ) ); 

					while( $loop->have_posts() ) : $loop->the_post(); 

						$live_site_link	=	get_field( 'live_site_link' );
						$about_project	=	get_field( 'about_project' );

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						// get_template_part( 'template-parts/content', 'portfolio-single' );
					?>

					<div class="col-sm-4">
						<h3><?php the_title() ?></h3>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h5><a href="<?php echo $live_site_link ?>">Visit Site</a></h5>
					</div> <!-- end col -->

					<?php endwhile; wp_reset_query(); ?>

				</div> <!-- .row -->
			</div> <!-- .gallery -->


			<!-- === Cool project section
			============================================================= -->
			<h2><?php echo $js_section_title ?></h2>
			<p><?php echo $js_section_body ?></p>
			<div class="gallery">
				<div class="row">

					<?php $loop = new WP_Query( array( 'post_type' => 'cool_projects', 'orderby' => 'post_id', 'order' => 'ASC' ) ); 

					while( $loop->have_posts() ) : $loop->the_post();  
						$cool_site_link	=	get_field( 'cool_site_link' );

					?>

						<div class="col-sm-4">
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<h5><a href="<?php echo $cool_site_link ?>">Visit Site</a></h5>
						</div> <!-- end col -->


					<?php endwhile; wp_reset_query() ?>

				</div> <!-- .row -->
			</div> <!-- .gallery -->
		</div> <!-- .container -->
	</section> <!-- #portfolio -->



<?php get_footer() ?>