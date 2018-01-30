<?php
    require('wp-blog-header.php');//link to your blog-header.php using relative path
/**
 * Template Name: Home page
 *
 * @package Tyson_Hood_2.0
 */



get_header(); ?>
		

		<?php get_template_part( 'template-parts/content', 'header-main' ); ?>

		<?php get_template_part( 'template-parts/content', 'bio' ); ?>

		<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>


		

		<!-- LATEST BLOG POST
		=============================================================================== -->
		<section id="latest-post">
			<div class="container">
  			<div class="row">
					<h2 class="title">Latest Post</h2>
				</div>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<?php
						$args = array( 'numberposts' => 1, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date", 'order' => "DESC");
						$postslist = get_posts( $args ); ?>
						<ul id="latest_posts">
					  	<?php foreach ($postslist as $post) :  setup_postdata($post); ?>
								<li>
								<h4><?php the_date(); ?></h4>
								<a href="<?php the_permalink(); ?>" id="title"><h2><?php the_title();?></h2></a>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ) ?></a>
								<p><?php the_excerpt();?></p>
								<a href="http://localhost/tysonhood2wp/blog/" class="btn btn-success btn-md">View All Posts</a>
		            </li>
		    			<?php endforeach; ?>
            </ul>

					</div>
				</div>
			</div>
		</section>
	</main>


<?php
get_footer(); ?>
