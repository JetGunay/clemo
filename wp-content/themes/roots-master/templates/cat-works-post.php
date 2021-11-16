<div class="col-sm-12 post-second">
  <div class="line-page"></div>
    <div class="page-title">
      <?php the_title();?>
    </div>
    <div class="content-slider">
      <?php 
        echo get_field( "slider");
      ?>
    </div>
    <div class="col-sm-12 about" style="padding-top: 50px;">
    <div class="col-sm-6 about-left">
      <div class="line-bottom" style="padding-top: 20px;"></div>
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
      <div class="social">
        <a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook2.png"></a>
        <a href="https://www.twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter2.png"></a>
        <a href="https://www.google.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/google2.png"></a>
        <a href="https://www.pinterest.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pinterest2.png"></a>
        <a href="https://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta2.png"></a>
        </div>
    </div>
  </div>
  <div class="post-slider">
    <?php get_template_part('templates/related-works', 'page'); ?>
  </div>
</div>