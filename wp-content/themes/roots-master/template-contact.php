<?php
/*
Template Name: Contact Template
*/
?>

<div class="col-sm-12 contact-grid">

	<div class="line-page"></div>
	<div class="page-title">
		<?php the_title();?>
	</div>

	<div class="col-sm-12 sub-footer">
		<div class="col-sm-6 contact-details">
			<div class="col-sm-12 details-pad">
				<div class="col-sm-1 details-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pin2.png">
				</div>
				<div class="col-sm-11 details">
					<?php echo get_field( "address", 345); ?>
				</div>
			</div>
			<div class="col-sm-12 details-pad">
				<div class="col-sm-1 details-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone2.png">
				</div>
				<div class="col-sm-11 details">
					<?php echo get_field( "number", 345); ?>
				</div>
			</div>
			<div class="col-sm-12 details-pad">
				<div class="col-sm-1 details-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/envelop2.png">
				</div>
				<div class="col-sm-11 details">
					<?php echo get_field( "website", 345); ?>
				</div>
			</div>
			<div class="social">
				<div class="social-btn">
					<a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook2.png"></a>
					<a href="https://www.twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter2.png"></a>
					<a href="https://www.google.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/google2.png"></a>
					<a href="https://www.pinterest.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pinterest2.png"></a>
					<a href="https://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta2.png"></a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="99" title="Contact form 1"]' ) ?>
		</div>
		<div class="contact-map">
			<?php echo get_field( "map", 345); ?>
		</div>
	</div>
</div>