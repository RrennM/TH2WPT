<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tyson_Hood_2.0
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<time class="entry-time"><?php echo the_date(); ?></time>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="post-details">
				<i class="fa fa-folder"></i> Posted in <?php the_category( ', ' ); ?>
				<i class="fa fa-tags"></i> Tagged: <?php the_tags('', ', ', ''); ?>
			</div> <!-- .post-details -->

		<?php
		endif; ?>
		<?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i> ', '</div>' ); ?>
	</header><!-- .entry-header -->

	<?php if(has_post_thumbnail() ) { // Check for post thumbnail ?>
		<div class="post-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div> <!-- post-image -->

	<?php } ?>

		<div class="post-excerpt">
			<p><?php the_excerpt(); ?></p>
			<h4>Written by <?php the_author(); ?>
					|
					<a href="<?php comments_link(); ?>"><?php comments_number( 'No Comments', '1 Comment', '% comments' ); ?></a></h4>
		</div> <!-- post-excerpt -->

</article><!-- #post-<?php the_ID(); ?> -->
