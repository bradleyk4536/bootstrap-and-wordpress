<?php /* Template Name: Full-width Template*/ ?>

<!--FEATURE IMAGE -->
	<?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>

<?php ?>

<?php get_header(); ?>
<!--	FEATURE IMAGE WITH A FALLBACK IMAGE-->
<?php if(has_post_thumbnail()) : ?>
<!--main image-->
	<section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url ?>') no repeat; background-size:cover;" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title(); ?></h1>
	</section>
<?php else: ?>
<!--fallback image -->
	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title(); ?></h1>
	</section>
<?php endif; ?>
<!--		CONTACT FORM-->
<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			<section class="main-content">
<!--			USE WHILE LOOP TO GET THE POST INFORMATION-->
				<?php while( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>
