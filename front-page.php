<?php
/**
 * The template for displaying the frontpage
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php get_header(); ?>
		<section id="slider">
			<?php get_template_part( 'part' , 'slider' ); ?>
		</section>
<!--<div class="main-title">

    <h1>Servicios</h1>
</div>-->
<div class="row">
    <div class="col-xs-12">
       <h1><span class="glyphicon glyphicon-globe">Servicios</span></h1>
        <hr class="style-three">
    </div>
</div>


		<section id="masonryContainer" class="content">


			<?php get_template_part( 'servicios' , 'content' ); ?>
		</section>
<?php get_footer(); ?>
