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
      <?php echo get_field( "sub-content"); ?>
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
    </div> 
  </div>
</div>
<div class="line-page"></div>
<div class="col-sm-12 extra">
  <?php get_template_part('templates/about-extra', 'page'); ?>
</div>

<!-- Client grid-->
<div class="col-sm-12 event-grid">
  <?php get_template_part('templates/event-sub', 'page'); ?>
</div>
<!-- End of Client grid -->

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