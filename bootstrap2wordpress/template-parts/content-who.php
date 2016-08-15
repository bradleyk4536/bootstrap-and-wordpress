<?php
$who_image 		= get_field('who_image');
$who_title 		= get_field('who_title');
$who_body	 	= get_field('who_body');
?>
<section id="who-benefits">
	<div class="container">
		<div class="section-header">
		<?php if(!empty('who_image')) : ?>
			<img src="<?php echo $who_image['url']; ?>" alt="<?php echo $who_image['alt']; ?>">
		<?php endif; ?>
			<h2><?php echo $who_title; ?></h2>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2"> <?php echo $who_body; ?> </div>
		</div>
	</div>
</section>
