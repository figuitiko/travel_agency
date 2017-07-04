 <?php
 /**
  * Include WordPress Loop
  *
  * @package WordPress
  * @subpackage IAMSocial 1.0.8
  * @since IAMSocial 1.0.0
  */
 ?>
 <?php
 $title=get_the_title();
 if ( get_query_var('paged') ) {
     $paged = get_query_var('paged');
 } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
     $paged = get_query_var('page');
 } else {
     $paged = 1;
 }

 $args=array(
     "post_type"=>"autos",
     "post_status"=>"publish",
     "posts_per_page"=> 6,
     "paged"=>$paged,
     "order"=>"DESC",
     "orderby"=>"date"

 );
 $autos=new WP_Query($args);

 if($autos): ?>
     <div class="row">
         <?php
         $i=0;
         while ($autos->have_posts()):$autos->the_post(); $i++;?>

             <div class="col-xs-4">
                 <div class=" col-xs-12 masonry-layout__panel">
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                         <h2>
                             <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                 <?php the_title(); ?>
                             </a>
                         </h2>

                         <figure>
                             <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                 <?php echo the_post_thumbnail( 'large' );  ?>
                             </a>
                         </figure>
                         <?php the_excerpt()?>
                         <small class="clearfix readmore"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Leer más</a></small>
                         <span class="screen-reader-text"><?php the_title(); ?></span>


                         <div class="alignright"><a href="#<?php echo $title ?>"><button class="btn-primary">reserva aqui</button></a></div>

                     </article>
                 </div>
             </div>

             <?php

             if ($i%3==0 ){

                 ?>
                 <div  class="clearfix"></div>
                 <div class="col-xs-12"><hr class="style-three"></div>

                 <?php
             }



         endwhile;?>

         <?php if ($autos->max_num_pages > 1) : // custom pagination  ?>
         <?php
         $orig_query = $wp_query; // fix for pagination to work
         $wp_query = $autos;
             $prev_link = get_previous_posts_link( '&laquo; '.__( 'Older Entries', 'iamsocial' ) );
             $next_link = get_next_posts_link( __( 'Newer Entries', 'iamsocial' ).' &raquo;',$autos->max_num_pages  );

         if ( $prev_link || $next_link ) {?>
             <article id="frontpage">
                 <nav class="row">

                     <small class="nav-next col-xs-6 "><?php previous_posts_link( ' <i class="fa fa-chevron-left"></i>'.__( 'Anterior', 'iamsocial' ) ); ?></small>
                     <small class="nav-next col-xs-6 text-right"><?php next_posts_link( __( 'siguiente', 'iamsocial' ).'<i class="fa fa-chevron-right"></i> ' ); ?></small>


                 </nav>
             </article>
         <?php } ?>

         <?php
         $wp_query = $orig_query; // fix for pagination to work
         ?>
         <?php endif;
         $query=$origquery;
         wp_reset_postdata();?>


         <div class="col-xs-12">




             <h2>Formulario de Reservación</h2>
             <?php do_shortcode('[my-booking-form-cart]') ?>

         </div>
     </div>
 <?php

 endif ?>

