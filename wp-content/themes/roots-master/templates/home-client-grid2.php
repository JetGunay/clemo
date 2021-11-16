<div class="grid-title" >client say's</div>
<div class="col-sm-12 fifth-carousel">

	<!-- Begin Carousel-->		

<?php
	$args = array(
		'post_type'     => 'post', // or 'post', 'page'
      	'order' 	      => 'ASC', // or 'DESC'
      	'cat'			  => 9,
	);

$the_query = new WP_Query ( $args );
?>

	<ul id="bxslider">
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  			<li class="col-sm-12 slider-content">
  				<div class="col-sm-6 client-left">
  					<div class="client-name"><?php the_title(); ?></div>
  					<div class="line-bottom"></div>
  					<div class="client-extra"><?php echo do_shortcode( '[acf field="client-extra"]' ) ?></div>
  				</div>
  				<div class="col-sm-6 client-right"><?php the_content(); ?></div>
  			</li>
  		<?php endwhile; endif; ?>
	</ul>

	<!-- The main images -->
	<div class="thumb-container">
		<ul id="bxslider-pager" class="thumb-list">
			<?php $number = 0; if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li class="thumb-img" data-slideIndex="<?php echo $number; ?>">
    				<a href=""><?php the_post_thumbnail('small');?></a>
    				<?php $number++; ?>
  				</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
	<!--End Image Carousel-->
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/bootstrap/jquery.bxslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>