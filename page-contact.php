<?php  

/* Template Name: Contact Template */

$contact_body_title 	= get_field( 'contact_body_title' );
$contact_body_desc 		= get_field( 'contact_body_desc' );
$contact_phone				=	get_field( 'contact_phone' );
$contact_email				= get_field( 'contact_email' );
$contact_form_title				= get_field( 'contact_form_title' );

get_header() ?>

	<?php get_template_part( 'template-parts/content', 'header-alt' ); ?>


	<!-- FEATURE IMAGE
	==================0============================================================= -->
	<?php if( has_post_thumbnail() ) { // Check for feature image ?> 

		<section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
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

	<!-- CONTACT
	=============================================================================== -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<h2><?php echo $contact_body_title ?></h2>
				<p><?php echo $contact_body_desc ?></p>
			</div> <!-- .row -->
			<div class="row contact-info">
				<div class="col-sm-4">
					<h4><small>Phone: </small><?php echo $contact_phone ?></h4>
				</div> <!-- .col -->
				<div class="col-sm-4">
					<h4><small>eMail: </small><?php echo $contact_email ?></h4>
				</div> <!-- .col -->
				<div class="col-sm-4">

					<?php $loop = new WP_Query( array( 'post_type' => 'social_badge', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<a href="<?php the_title(); ?>" target="_blank" class="social twitter"><i class="<?php the_field( 'social_badge_icon' ); ?>"></i></a>

					<?php endwhile; wp_reset_query(); ?>

				</div> <!-- .col -->
			</div> <!-- .col -->
			<hr>
			<div class="row contact-form">
				<form role="form" class="clearfix">
					<div class="row">
						<h3><?php echo $contact_form_title ?></h3>

						<?php while( have_posts() ) : the_post(); ?>

							<?php the_content() ?>

						<?php endwhile; //end of loop ?>

					</div> <!-- .row -->
				</form> <!-- form -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- #contact -->




<?php get_footer() ?>