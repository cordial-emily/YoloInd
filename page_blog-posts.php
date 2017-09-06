<?php
/*  Template Name: Show Blog Posts & Sidebar (right) */

  get_header();
 ?>

   <div class="bs-docs-featurette main-content-width-wrapper">
    <div class="container">
      <!--<h2 class="bs-docs-featurette-title"><?php echo get_the_title(); ?></h2>-->

      <div class="row">
        <div class="col-sm-9 main-content">
          <img style="display: block; margin: 0 auto;" src="<?php bloginfo('template_url') ?>/images/icons/Blog.1.png" alt="Parallel Design Blog" width="150px" >

          <?php wp_reset_query(); ?>
<?php

  $loop = new WP_Query(
      array(
          'post_type'      => 'post',
          'order_by'       => 'post_id',
          'order'          => 'DESC',
          'post_status'    => 'publish',
          'posts_per_page' => 100
      )
  );

?>

<?php while ($loop -> have_posts()): $loop -> the_post(); ?>
<div class="jumbotron">
  <h1><?php the_title(); ?></h1>
  <small class="text-muted"><span class="dashicons dashicons-clock"></span>&nbsp;<?php echo get_the_date( 'Y-m-d' ); ?></small>
  <hr>
  <p><?php the_content(); ?></p>
</div>

<?php endwhile; ?>

        </div>
        <div class="col-sm-3">

            <?php get_sidebar("main-sidebar"); ?>

        </div>
      </div>
    </div>
    <?php get_sidebar("main-sidebar"); ?>
  </div>

<?php get_footer(); ?>
