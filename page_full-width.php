<?php
/*  Template Name: Full-Width  */

  get_header();
 ?>

   <div class="bs-docs-featurette main-content-width-wrapper">
    <div class="container">
      <h2 class="bs-docs-featurette-title text-center"><?php echo get_the_title(); ?></h2>

      <hr class="half-rule">

      <div class="row">
        <div class="col-sm-12 main-content">

            <?php
            // Start the loop
                if (have_posts())  :
                    while (have_posts()):
                      the_post();
                          the_content();
                    endwhile;
                endif;
            ?>

        </div>
      </div>
      <hr class="half-rule">



      <?php get_template_part( 'carousel', 'test' ); ?>
  </div>
</div>

<?php get_footer(); ?>
