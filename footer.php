<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of .container div opened in header.php
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
</div><!-- Closing .container opened in header.php -->
<footer id="pageFooter">
	<div class="container">
		<div class="row">
				<div class="col-md-4">
					<?php
					$menuleft = array(
					  'theme_location' => 'footer-menu-left',
					  'container' => false,
					  'depth' => 3,
					  'menu_class' => 'nav nav-pills nav-stacked',
					  'fallback_cb' => '',
					  // Empty fallback here, so nothing is displayed if user does not set up any widgets in this footer area.
					);
					wp_nav_menu( $menuleft ); ?>
					<?php get_sidebar( 'footer-left' ); ?>
				</div>
				<div class="col-md-4">
					<?php
					$menumiddle = array(
					  'theme_location' => 'footer-menu-middle',
					  'container' => false,
					  'depth' => 3,
					  'menu_class' => 'nav nav-pills nav-stacked',
					  'fallback_cb' => '',
					  // Empty fallback here, so nothing is displayed if user does not set up any widgets in this footer area.
					);
					wp_nav_menu( $menumiddle ); ?>
					<?php get_sidebar( 'footer-middle' ); ?>
				</div>
				<div class="col-md-4">
					<?php
					$menuright = array(
					  'theme_location' => 'footer-menu-right',
					  'container' => false,
					  'depth' => 3,
					  'menu_class' => 'nav nav-pills nav-stacked',
					  'fallback_cb' => '',
					  // Empty fallback here, so nothing is displayed if user does not set up any widgets in this footer area.
					);
					wp_nav_menu( $menuright ); ?>
					<?php get_sidebar( 'footer-right' ); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center credits">
                    <a href="mailto:frank@gmail.com">2016 © FREEMAN TRAVEL </a>
				</div>
			</div>
		</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
