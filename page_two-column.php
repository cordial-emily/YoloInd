<?php
/*  Template Name: Two-Column Sidebar (right) */

  get_header();
 ?>

   <div class="bs-docs-featurette main-content-width-wrapper">
    <div class="container">
      <h2 class="bs-docs-featurette-title" style="padding: 48px 60px 0px 0px;"><?php echo get_the_title(); ?></h2>

      <hr class="half-rule">

      <div class="row">
        <div class="col-sm-9 main-content">

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
        <div class="col-sm-3">

            <?php get_sidebar("main-sidebar"); ?>

        </div>
      </div>
      <div class="row">
        <hr class="half-rule">

        <?php get_template_part( 'carousel', 'test' ); ?>

        <hr class="half-rule">
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
