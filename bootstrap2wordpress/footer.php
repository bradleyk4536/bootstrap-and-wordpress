<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>



<?php wp_footer(); ?>
<!--SIGNUP SECTION-->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take you coding skills to the <strong>next level</strong>?</h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success">Sign me up</a></p>
			</div>
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt="Bootstrap to WordPress"></a></p>
		</div>
		<div class="col-sm-6">
			<?php
		/*  if the menu (WP admin area) is not set then the menu_class is applied to container
				  in other words, it overwrites the container_class. Ref http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4
		*/
			  wp_nav_menu( array(
				 'theme_location' 	=> 'footer',
				 'container' 			=> 'nav',
				 'menu_class' 			=> 'list-unstyled list-inline'
			  ));
			  ?>
		</div>
		<div class="col-sm-3">
			<p class="pull-right">&copy; <?php echo date('Y') . ' '; the_author_meta('user_url'); ?></p>
		</div>
	</div>
</footer>
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button"  class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Subscribe to our mailing list</h4>
			</div>
			<div class="modal-body">
				<p>Simply enter you name and email. As a thank you for joining, we are going to give you one of our best selling courses. <em>FREE</em></p>
				<form class="form-inline" role="form">
					<div class="form-group">
						<label for="subscribe-name" class="sr-only">First Name</label>
						<input type="text" class="form-control" id="subscribe-email" placeholder="Enter first name">
					</div>
					<div class="form-group">
						<label for="subscribe-email" class="sr-only">Email</label>
						<input type="email" class="form-control" id="subscribe-email" placeholder="Enter email">
					</div>
					<input type="submit" class="btn btn-danger" value="Subscribe">
				</form>
				<hr>
				<p><small>By providing you email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect you privacy &amp; you may unscribe at any time. </small></p>
			</div>
		</div>
	</div>
</div>
<!--Core javascript files for bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


</body>
</html>
