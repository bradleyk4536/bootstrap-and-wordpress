<?php
$subscribe_button    = get_post_meta( 7, 'subscribe_button', true);
$subscribe_text    	= get_post_meta( 7, 'subscribe_text', true);
?>
<section id="optin">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<p class="lead"><?php echo $subscribe_text; ?></p>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $subscribe_button; ?></button>
			</div>
		</div>
	</div>
</section>
