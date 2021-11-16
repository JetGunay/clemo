<?php
/*
Template Name: Blog Template
*/
?>
<div class="col-sm-12 blog-grid">
	<div class="line-page"></div>
	<div class="page-title" ><?php the_title();?></div>
			<?php echo do_shortcode('[ess_grid alias="blog"]' );?>
	<div class="line-page"></div>
</div>