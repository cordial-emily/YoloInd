<?php
/* Template for Bootstrap's carousel */
 ?>


 <?php
  $args = array(
  'post_type'      => 'slides',
  'oderby'         => 'menu_order',
  'posts_per_page' => -1
  );

 $slides = new WP_Query( $args );

 if( $slides->have_posts() ): ?>
 <div class="row">
   <div class="col-xs-12">
       <!--Twitter bootstrap Photo carrousel-->
   <div id="myCarousel" class="carousel slide center-block"     data-ride="carousel" >
     <!-- Indicators -->
     <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
         <li data-target="#myCarousel" data-slide-to="4"></li>
     </ol>
 <!-- Wrapper for slides -->
 <div class="carousel-inner" role="listbox">
     <?php while( $slides->have_posts() ) : $slides->the_post(); $index++ ?>

       <?php if ( $index == 1 ): ?>
         <div class="item active">
       <?php else: ?>
         <div class="item">
       <?php endif; ?>
       <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
             <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
         </div>
   <?php endwhile; ?>
 <?php endif; ?>
       <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
     </a>
   </div>
 </div><!-- carrousel ends here -->
