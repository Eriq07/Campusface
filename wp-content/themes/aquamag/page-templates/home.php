<?php
/**
 * Template Name: Home template
 */
get_header(); ?>

	<div id="primary" class="content-area uk-width-1-1 uk-width-large-7-10 site-content-left clearfix">
		<main id="main" class="site-main main-content" role="main">

			<?php aquamag_featured_posts(); // Get posts with 'featured' tag. ?>
			
			<?php if ( of_get_option( 'aquamag_home_ads' ) ) { ?>
				<div class="add-section uk-clearfix"><?php echo stripslashes( of_get_option( 'aquamag_home_ads' ) ); ?></div>
			<?php } ?>

			<div class="recent-post border-style uk-clearfix">
				<ul class="uk-subnav uk-subnav-pill recent-post-tab uk-clearfix" data-uk-switcher="{connect:'#latest-post-content'}">
					<li class="uk-active"><a href="#"><?php _e( 'Latest', 'aquamag' ); ?></a></li>
					<li class=""><a href="#"><?php _e( 'Popular', 'aquamag' ); ?></a></li>
				</ul>

				<div id="latest-post-content" class="uk-switcher">
					<div class="uk-active uk-grid uk-clearfix"><?php aquamag_latest_posts_home(); ?></div>
					<div class="uk-grid uk-clearfix"><?php aquamag_popular_posts_home(); ?></div>
				</div>
			</div><!-- .recent-post -->

			<?php aquamag_first_cat_posts(); ?>

			<?php aquamag_second_cat_posts(); ?>

			<?php if ( of_get_option( 'aquamag_home_ads_2' ) ) { ?>
				<div class="add-section uk-clearfix"><?php echo stripslashes( of_get_option( 'aquamag_home_ads_2' ) ); ?></div>
			<?php } ?>

			<?php aquamag_third_cat_posts(); ?>

			<?php aquamag_fourth_cat_posts(); ?>

			<?php if ( of_get_option( 'aquamag_home_ads_3' ) ) { ?>
				<div class="add-section uk-clearfix"><?php echo stripslashes( of_get_option( 'aquamag_home_ads_3' ) ); ?></div>
			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>