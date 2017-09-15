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

      </div><!--"middle"-->
    </div>

<?php get_footer(); ?>
