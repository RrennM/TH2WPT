<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tyson_Hood_2.0
 */

?>



<?php wp_footer(); ?>

	<!-- MORE INFO
	=============================================================================== -->
	<section id="moreinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Like what you see and want more info?</h2>
					<p>Click below to get on the mailing list.</p>
					<p><a class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModal">Yes, send me some info!</a></p>
				</div> <!-- end col -->
		</div> <!-- .container -->
	</section> <!-- #contact -->

	<!-- FOOTER
	=============================================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/TysonHood2W.png"></a></p>
			</div> <!-- end col -->
			<div class="col-sm-6">

				<!-- if the menu (WP admin area) is not set, then the "menu-class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-men_class-usage_bug?replies=4 -->

				<?php  
					wp_nav_menu( array(

						'theme_location' 		=> 'menu-2',
						'container' 				=> 'nav',
						'menu_class'				=> 'list-unstyled list-inline'

					));
				?>
			</div> <!-- end col -->
			<div class="col-sm-3">
				&copy; <?php echo date( 'Y' ); ?> <?php the_author(); ?>
			</div> <!-- end col -->
		</div> <!-- .container -->
	</footer>
				

	<!-- MODAL
	=============================================================================== -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;<span class="sr-only">Close</span></span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"> Subscribe to My Mailing List</i></h4>
				</div> <!-- modal header -->

				<div class="modal-body">
					<p>Simply enter your name and email. As a thank you for joining me, I'm going to give you a <em>discount</em> on your first site!</p>

					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div> <!-- form group -->

						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div> <!-- form group -->

						<input type="submit" class="btn btn-success" value="Subscribe!">
					</form>

					<hr>

					<p><small>By providing your email, you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. I respect your privacy &amp; you may unsubscribe at any time. Thank you much.</small></p>
				</div> <!-- modal body -->

			</div> <!-- modal-content -->
		</div> <!-- modal-dialog -->
	</div> <!-- modal -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script
	  src="http://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/main.js"></script>

</body>
</html>
