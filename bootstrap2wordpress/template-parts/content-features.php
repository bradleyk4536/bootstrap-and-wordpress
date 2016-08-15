<?php
$feature_image  = get_field('feature_image');
$features_title = get_field('features_title');
$feature_body   = get_field('feature_body');
?>
<section id="course-features">
	<div class="container">
		<div class="section-header">
		<?php if(!empty($feature_image)) : ?>
			<img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>">
		<?php endif; ?>
			<h2><?php echo $features_title; ?></h2>
		</div>
		<?php if(!empty($feature_body)) : ?>
			<p class="lead"><?php echo $feature_body; ?></p>
		<?php endif; ?>
		<div class="row">

		<?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
		<?php while( $loop ->have_posts() ) : $loop->the_post(); ?>
			<div class="col-sm-2">
				<i class="<?php the_field('course_feature_icon') ?>"></i>
				<h4><?php the_title(); ?></h4>
			</div>

		<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</section>
