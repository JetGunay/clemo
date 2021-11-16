<?php
/*
Template Name: About Us Template
*/
?>

<div class="col-sm-12 about">

	<div class="line-page"></div>
	<div class="page-title">
		<?php the_title();?>
	</div>

	<div class="col-sm-6 about-left">
	  <div class="about-img">
	  	<?php the_post_thumbnail();?>
	  </div>
	  <div class="line-bottom"></div>
	  <div class="sub-content">
	  	<?php 
			echo get_field( "sub-content", 2 );
		?>
	  </div>
	</div>
	<div class="col-sm-6 about-right">
	  <div class="about-content">
	  	<div class="line-bottom"></div>
	  	<?php while ( have_posts() ) : the_post(); ?>
        	<div class="content">
        	    <?php the_content(); ?>
        	</div>
		<?php endwhile; wp_reset_query(); ?>
		<div class="grid-btn"><a href="../contact"><div class="button">get in touch</div></a></div>
	  </div> 
	</div>
</div>
<div class="col-sm-12 extra">
	<div class="line-page"></div>
	<?php get_template_part('templates/about-extra', 'page'); ?>
</div>

<!-- Team grid-->
<div class="col-sm-12 grid-pad fourth-grid">
	<?php get_template_part('templates/home-team-grid', 'page'); ?>
</div>
<!-- End of Team grid -->

<div class="col-sm-12 insta">
	<div class="grid-title" >instagram</div>
	<?php echo do_shortcode( '[instagram-feed]' ) ?>
	<a href="https:www.instagram.com/jetzkie21"><div class="grid-btn"><div class="button">follow</div></div></a>
</div>

<!-- Get in touch grid-->
<div class="col-sm-12 grid-pad sixth-grid-pad">
	<?php get_template_part('templates/home-contact-grid', 'page'); ?>
</div>
<!-- End of Get in touch grid -->