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

       <!--Twitter bootstrap Photo carrousel-->



<div id="myCarousel" class="carousel slide center-block" data-ride="carousel" >

     <!-- Indicators -->
     <ol class="carousel-indicators">
       <?php
         $loop = new WP_Query( array( 'post_type' => 'slides', 'posts_per_page' => 5 ) );
       ?>

       <?php $slide_data = 0;
       while ( $loop->have_posts() ) : $loop->the_post(); ?>

         <li id="c1" data-target="#myCarousel" data-slide-to="<?php echo $slide_data; ?>" class="li"><?php echo the_title(); ?></li>
         <?php $slide_data++; ?>
       <?php endwhile; wp_reset_query(); ?>

     </ol>
 <!-- Wrapper for slides -->
 <div class="carousel-inner" role="listbox">
 <?php $index=0; ?>
 <?php while( $slides->have_posts() ) : $slides->the_post(); $index++ ?>

       <?php if ( $index == 1 ): ?>
         <div class="item active">
       <?php else: ?>
         <div class="item">
       <?php endif; ?>
       <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
             <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
             <div class="carousel-caption">
               <h4 class="webtitle"><?php the_title();?></h4>
               <p><?php the_content();?></p>
             </div>
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

   </div> <!-- carrousel-inner ends here -->
</div><!-- id="myCarousel" -->
