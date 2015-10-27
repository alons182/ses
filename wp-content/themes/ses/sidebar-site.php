<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ses
 */

if ( ! is_active_sidebar( 'sidebar-site' ) ) {
	return;
}
?>

<div id="siderbar-site" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-site' ); ?>
</div><!-- #secondary -->
