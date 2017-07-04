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
 $args=array(
         "post_type"=>"servicios",
          "post_status"=>"publish",
           "posts_per_page"=> -1,
           "order"=>"ASC"

   );
 $servicios=get_posts($args);
 if($servicios): ?>
     <div class="row">


     <?php
     $i=0;
      foreach ($servicios as $post):setup_postdata($post); $i++;?>
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
         <?php   if((get_the_ID()==56)||(get_the_ID()==74)||(get_the_ID()==82)||(get_the_ID()==66)){ ?>

             <div class="alignright"><a href="<?php the_permalink()?>#<?php the_title()?>"><button class="btn-primary">reserva aqui</button></a></div>
         <?php } elseif ((get_the_ID()==83)||(get_the_ID()==77)||(get_the_ID()==72)){?>
             <div class="alignright"><button id="<?php echo get_the_ID()?>" class="btn-primary" >Llamenos</button></div>
             <script>
                 jQuery(document).ready(function () {
                     jQuery('#<?php echo get_the_ID()?>').on('click',function () {
                        jQuery(this).after(
                             '<div id="alert<?php echo get_the_ID()?>" class="alert alert-info"><strong>Info!</strong>llamenos ya al 786-715-6405.</div>');
                             setTimeout(function () {
                                 jQuery('#alert<?php echo get_the_ID()?>').remove()
                             }, 4000);}
                             )

                 });
             </script>
              <?php }?>


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
     endforeach;
     wp_reset_postdata();?>
     </div>
     <?php endif ?>

