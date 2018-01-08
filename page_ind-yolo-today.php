<?php
/*  Template Name: Indivisible Yolo Today */

  get_header();
 ?>

   <div class="bs-docs-featurette main-content-width-wrapper">
    <div class="container">

      <div class="row">
        <div class="col-sm-9 main-content">

          <h1 style="padding: 48px 60px 0px;"><?php echo get_the_title(); ?></h1>


          <?php $catquery = new WP_Query( 'cat=3,4&posts_per_page=50' ); ?>

          <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

            <div class="post" >
            <h2 class="post-title"><a class="red" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <small class="text-muted"><span class="dashicons dashicons-clock"></span>&nbsp;<?php echo get_the_date( 'Y-m-d' ); ?></small>
            <p><?php the_content(); ?></p>
            </div>
            <hr class="half-rule">
          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>
        </div>
        <div class="col-sm-3">

            <?php get_sidebar("main-sidebar"); ?>

        </div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>
