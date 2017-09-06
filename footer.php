<?php
/* Footer template */
 ?>

    <div class="bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <br>
                </br>
                <h3>Get to know us</h3>
                <ul class="nav nav-pills nav-stacked social social-menu">
                  <li><p><a href="https://twitter.com/ContactParallel"><span class="dashicons dashicons-twitter"></span></a>
                         <a href="https://www.facebook.com/mindfulcomputing/"><span class="dashicons dashicons-facebook"></span></a>
                         <a href=""><span class="dashicons dashicons-rss"></span></a>
                         <a href=""><span class="dashicons dashicons-googleplus"></span></a></p>
                </ul>
                <br>
                </br>
            </div>
            <div class="col-md-4">

              <br>
              <br>
              <h3>Menu</h3>
                  <?php wp_nav_menu( $args = array(
                    'container' => 'ul',
                    'menu_class'=> 'nav nav-pills nav-stacked',
                    'theme_location' => 'footer'
                  )); ?>
                  <br>
                  </br>
            </div>
            <div class="col-md-4">
              <br>
              </br>
              <h3>Contact us</h3>
              <ul class="nav nav-pills nav-stacked social">
                <li><p><a href="mailto:contact@paralleldesign.net?Subject=Parallel%Design%Contact:%Hello!" target="_top"><span class="dashicons dashicons-email-alt"></span></a></p></li>
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

  </div><!--end gradient_container-->
  <?php wp_footer(); ?>
</body>
</html>
