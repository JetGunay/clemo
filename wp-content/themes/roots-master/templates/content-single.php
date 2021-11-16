<?php
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

if ($category_id == 10) {
  get_template_part('templates/cat-services-post', 'page'); ?>
<?php } else if ($category_id == 3 || $category_id == 4 || $category_id == 5) {
  get_template_part('templates/cat-works-post', 'page'); ?>
<?php } else if ($category_id == 6 || $category_id == 33 || $category_id == 34 || $category_id == 35 || $category_id == 36 || $category_id == 37) {?>
<div class="col-sm-12 blog-grid">
  <div class="line-page"></div>
  <div class="page-title">
    <?php the_title();?>
  </div>
  <div class="blog-date"><?php echo get_the_date();?></div>
  <div class="blog-img">
    <?php 
      $image = get_field('banner-img');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
  </div>
  <div class="line-bottom"></div>
  <div class="blog-body">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="content">
          <?php the_content(); ?>
      </div>
      <?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="blog-sub-title">
    <?php echo get_field( "blog-sub1-title"); ?>
  </div>
  <div class="blog-sub">
    <?php echo get_field( "blog-sub1"); ?>
  </div>
  <div class="line-bottom" style="margin-left: 0px;"></div>
  <div class="sub-content">
    <?php echo get_field( "sub-content"); ?>
  </div>
  <div class="blog-sub-title">
    <?php echo get_field( "blog-sub2-title"); ?>
  </div>
  <div class="blog-sub">
    <?php echo get_field( "blog-sub2"); ?>
  </div>
  <div class="social">
    <a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook2.png"></a>
        <a href="https://www.twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter2.png"></a>
        <a href="https://www.google.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/google2.png"></a>
        <a href="https://www.pinterest.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pinterest2.png"></a>
        <a href="https://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta2.png"></a>
  </div>
  <div class="post-slider">
    <?php get_template_part('templates/related-posts', 'page'); ?>
  </div>
</div>
<?php } ?>
<?php/* while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; */?>
