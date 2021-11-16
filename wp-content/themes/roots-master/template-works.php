<?php
/*
Template Name: Works Template
*/
?>
<div class="col-sm-12 works-content">
	<div class="line-page"></div>
	<div class="page-title">
		<?php the_title();?>
	</div>
	<!-- Works grid-->
		<div class="col-sm-12 works-masonry">
			<?php get_template_part('templates/tab-works-all', 'page'); ?>
		</div>
	<!-- End of Works grid -->
	<div class="line-page"></div>
</div>