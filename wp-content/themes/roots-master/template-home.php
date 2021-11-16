<?php
/*
Template Name: Home Template
*/
?>

<!-- Home Slider -->
<div class="home-slider">
	<?php putRevSlider("main-slider"); ?> 
</div>
<!-- End of Home Slider-->

<!-- What We Do grid-->
<div class="col-sm-12 grid-pad second-grid">
	<div class="grid-title">what we do?</div>
	<?php get_template_part('templates/home-services-grid', 'page'); ?>
</div>
<!-- End of What We Do grid -->

<!-- Works grid-->
<div class="col-sm-12 grid-pad third-grid">
	<div class="grid-title" >our best work</div>
		<?php echo do_shortcode( '[ess_grid alias="all works home"]' );?>
	<?php/* get_template_part('templates/home-works-grid', 'page'); */?>
	<center><a href="works"><div class="button">learn more</div></a></center>
</div>
<!-- End of Works grid -->

 
<!-- Team grid-->
<div class="col-sm-12 grid-pad fourth-grid">
	<?php get_template_part('templates/home-team-grid', 'page'); ?>
</div>
<!-- End of Team grid -->


<!-- Client grid-->
<div class="col-sm-12 grid-pad fifth-grid">
	<?php get_template_part('templates/home-client-grid', 'page'); ?>
</div>
<!-- End of Client grid -->


<!-- Get in touch grid-->
<div class="col-sm-12 grid-pad sixth-grid-pad">
	<?php get_template_part('templates/home-contact-grid', 'page'); ?>
</div>
<!-- End of Get in touch grid -->
