<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package portalplanet
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
</div>
<div class="col-sm-3 col-sm-offset-1 sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
