<?php get_header(); ?>

	<section id="primary" class="content-area uk-width-1-1 uk-width-large-7-10 site-content-left clearfix">
		<main id="main" class="site-main main-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php aquamag_featured_cat_posts(); // Get posts with 'featured' tag. ?>

			<?php
				$class  = $html = '';
				$layout = of_get_option( 'aquamag_posts_layout', 'list' );

				if ( $layout === 'list' ) {
					$class = 'author-list';
				} else {
					$class = 'author-grid';
				}
			?>
			
			<div class="<?php echo $class; ?> border-style recent-post">

				<h2>
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'aquamag' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'aquamag' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'aquamag' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'aquamag' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'aquamag' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'aquamag' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'aquamag' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'aquamag');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'aquamag');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'aquamag' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'aquamag' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'aquamag' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'aquamag' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'aquamag' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'aquamag' );

						else :
							_e( 'Archives', 'aquamag' );

						endif;
					?>
				</h2>

				<div class="uk-clearfix"></div>
			
				<?php if ( $layout === 'list' ) { ?>
					<div class="list-view">
				<?php } else { ?>
					<div class="uk-grid grid-view uk-clearfix"  data-uk-grid-match>
				<?php } ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ( $layout === 'grid' ) { ?>
							<div class="uk-width-1-1 uk-width-medium-1-3">
						<?php } ?>

							<?php get_template_part( 'content', get_post_format() ); ?>

						<?php if ( $layout === 'grid' ) { ?>
							</div>
						<?php } ?>

					<?php endwhile; ?>

				<?php if ( $layout === 'list' ) { ?>
					</div>
				<?php } else { ?>
					</div>
				<?php } ?>

			</div>

			<?php get_template_part( 'loop', 'nav' ); // Loads the loop-nav.php template ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>