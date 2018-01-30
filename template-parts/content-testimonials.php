<?php
/**
 * Template part for displaying testimonial content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tyson_Hood_2.0
 */

?>

<!-- TESTIMONIALS
=============================================================================== -->
<section id="testimonials">
	<div class="container">
		<h2 class="title">Testimonials</h2>

				<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-sm-6">

						<?php 
							if ( has_post_thumbnail() ) { // Check for feature image
								the_post_thumbnail( array (220, 220 ) );
							}
						?>

						<blockquote>
							<?php the_content() ?>
							<cite>&mdash; <?php the_title(); ?></cite>
						</blockquote>
					</div> <!-- end col -->

				<?php endwhile; wp_reset_query(); // End loop, Reset query ?>

	</div> <!-- .container -->
</section> <!-- #testimonials -->