<?php
/* Template Name: Front */
     get_header();
 ?>
 <!-- Site banner -->
    <div class="banner">
        <div class="container subcontainer">

          <div class="floating_title jumbotron container-fluid">
            <h1>RESISTING THE TRUMP AGENDA</h1>
            <p>Concerned citizens of Yolo County care about national issues and we are getting active. Get involved today.</p>
            <div class="col-xs-12 text-center">
              <h4 class="text-center">Sign up for our:</h4>
              <a class="text-center" href="http://facebook.us14.list-manage2.com/subscribe?u=c0cc03e7f31bbe923efd397fa&id=f4243dace0"><button id="singlebutton" name="singlebutton" class="btn btn-default btn-lg" type="button">
               Newsletter
              </button></a>
            </div>
          </div><!--end floating_title-->
        </div>
    </div>

<!-- Middle content section -->
  <div class="gradient_container">
    <div class="middle">
        <div class="container">
            <div class="row">
              <div class="col-xs-12 jumbotron">

                <h2 class="text-center red">This Week's Actions</h2>
                <p class="text-center">Every part of the progressive ecosystem is under threat by this President and Congress. The only way to win is by standing together, indivisible. These are the issues we think we can have the most impact on right now:</p>

              </div>
            </div>
        </div><!--container-->

        <div class="container">
          <div class="row">
            <?php get_template_part( 'carousel', 'test' ); ?>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-xs-12 jumbotron">
              <h4 class="red text-center">These actions are updated throughout the month.
Learn more about how we make decisions about which issues to prioritize here.</h4>
            </div>
          </div>
        </div>

        <div class="container blue-bg local-info">
          <div class="row">
            <div class="col-sm-6 jumbotron">
              <h1>OUR GROUP <small>IS</small> ONE <small>OF</small> THOUSANDS</h1>
              <p>Yolo Indivisible is located in Yolo county in Northern California. It's time for us to make our voice heard.</p>
            </div>
            <div class="col-sm-6">
              <img class="img-fluid" src="<?php bloginfo('template_url') ?>/images/icons/yolo-county.png" alt="location of Yolo County">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 jumbotron">
              <?php
    query_posts( array('posts_per_page'=>5, 'category_name'=>'Front Page') );
    while ( have_posts() ) : the_post();
?>
    <h2><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <?php if ( has_post_thumbnail() ): // check for the featured image ?>
    <a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>" class="opacity"><?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?></a> <hr> <!--echo the featured image-->
<?php
    endif;
    the_excerpt(); // echo the excerpt
    endwhile;
    wp_reset_query(); // resets main query
?>

            </div>
          </div>
        </div>

      </div><!--"middle"-->
    </div>

<?php get_footer(); ?>
