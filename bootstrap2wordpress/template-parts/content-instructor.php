<?php
	$instructor_title 	= get_field('instructor_title');
	$instructor_name 		= get_field('instructor_name');
	$bio_excerpt 			= get_field('bio_excerpt');
	$full_bio 				= get_field('full_bio');
	$twitter_username 	= get_field('twitter_username');
	$facebook_username	= get_field('facebook_username');
	$google_username  	= get_field('google_username');
	$num_students  		= get_field('num_students');
	$num_views  			= get_field('num_views');
	$num_courses  			= get_field('num_courses');
?>
<section id="instructor">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6">
				<div class="row">
					<div class="col-lg-8">
						<h2><?php echo $instructor_title; ?> <small><?php echo $instructor_name; ?></small></h2>
					</div>
					<div class="col-lg-4">
					<?php if(!empty($twitter_username)) : ?>
						<a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
					<?php endif; ?>
					<?php if(!empty($facebook_username)) : ?>
						<a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
					<?php endif; ?>
					<?php if(!empty($google_username)) : ?>
						<a href="https://plus.google.com/<?php echo $google_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
					<?php endif; ?>
					</div>
				</div>
				<p class="lead"><?php echo $bio_excerpt; ?></p>
				<p><?php echo $full_bio; ?></p>
				<hr>
				<h3>The numbers <small>they don't lie.</small></h3>
				<div class="row">
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_students; ?>+ <span>students</span>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_views; ?>+ <span>reviews</span>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_courses; ?> <span>courses</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
