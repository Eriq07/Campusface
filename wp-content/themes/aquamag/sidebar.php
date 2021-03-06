<?php
// Return early if no widget found.
if ( ! is_active_sidebar( 'primary' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area uk-width-1-1 uk-width-large-3-10 site-content-right clearfix" role="complementary">
	<div class="uk-grid">
		<div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-1 clearfix">
			<?php dynamic_sidebar( 'primary' ); ?>
		</div>
	</div>
</div><!-- #secondary -->