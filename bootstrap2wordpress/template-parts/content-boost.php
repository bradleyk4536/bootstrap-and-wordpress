
<?php
$income_feature_image  			= get_field('income_feature_image');
$income_section_title  			= get_field('income_section_title');
$income_section_desc			  	= get_field('income_section_description');
$reason1_title  					= get_field('reason_1_title');
$reason1_desc			  			= get_field('reason_1_description');
$reason2_title  					= get_field('reason_2_title');
$reason2_desc			  			= get_field('reason_2_description');
?>
<section id="boost-income">
	<div class="container">
		<div class="section-header">
			<?php if(!empty($income_feature_image)): ?>
				<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
			<?php endif; ?>

			<h2><?php echo $income_section_title; ?></h2>
		</div>
		<p class="lead"><?php echo $income_section_desc; ?></p>
		<div class="row">
			<div class="col-sm-6">
				<h3><?php echo $reason1_title; ?></h3>
				<p><?php echo $reason1_desc; ?></p>
			</div>
			<div class="col-sm-6">
				<h3><?php echo $reason2_title; ?></h3>
				<p><?php echo $reason2_desc; ?></p>
			</div>
		</div>
	</div>
</section>
