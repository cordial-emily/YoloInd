<?php
/* Footer template */
 ?>

    <div class="bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-5 container-w-space">
              <?php get_template_part( 'logo'); ?>
            </div>
            <div class="col-sm-4">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <br>
                </br>
                <h3>Get to know us</h3>
                <ul class="nav nav-pills nav-stacked social social-menu">
                  <li><p><a href="https://twitter.com/indivisibleyolo"><span class="dashicons dashicons-twitter"></span></a>
                         <a href="https://www.facebook.com/indivisibleyolo/"><span class="dashicons dashicons-facebook"></span></a>
                         <!--<a href=""><span class="dashicons dashicons-rss"></span></a>
                         <a href=""><span class="dashicons dashicons-googleplus"></span></a></p>-->
                </ul>
                <br>
                </br>
            </div>
            <div class="col-md-4">

              <br>
              <br>
              <h3>Menu</h3>
                  <?php wp_nav_menu( $args = array(
                    'depth' => 2,
                    'container' => 'ul',
                    'menu_class'=> 'nav nav-pills nav-stacked',
                    'theme_location' => 'footer',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                  )); ?>
                  <br>
                  </br>
            </div>
            <div class="col-md-4">
              <br>
              </br>
              <h3>Contact us</h3>
              <ul class="nav nav-pills nav-stacked social">
                <li><p><a href="mailto:indivisibleyolo@gmail.com?Subject=Indivisible%Yolo%Contact:%Hello!" target="_top"><span class="dashicons dashicons-email-alt"></span></a></p></li>
                <li><p><a href="https://twitter.com/ContactParallel"></a></p></li>
              </ul>
              <br>
              </br>
            </div>
          </div>
        </div>
    </div>
  </div> <!-- #wrap -->
<footer id="footer">
  <div class="row">
    <div class="col-lg-12">
      <h4 class="text-center f-blog-name">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></li></h4>
    </div>
 </div>

</footer>


  <?php wp_footer(); ?>
</body>
</html>
