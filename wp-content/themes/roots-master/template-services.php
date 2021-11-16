<?php
/*
Template Name: Services Template
*/
?>
<div class="col-sm-12 services-content">
	<div class="line-page"></div>
	<div class="page-title">
		<?php the_title();?>
	</div>
	<div class="col-sm-12 grid-pad second-grid">
		<?php get_template_part('templates/home-services-grid', 'page'); ?>
	</div>
	<div class="line-page"></div>
</div>