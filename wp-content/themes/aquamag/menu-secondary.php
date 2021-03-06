<div class="uk-navbar main-nav">
	<div class="uk-container uk-container-center">
		<div class="uk-grid" data-uk-grid-match>

			<div class="uk-width-1-1 uk-width-large-7-10 main-nav-left clearfix">
				<div class="uk-grid">

					<div class="uk-width-1-2 uk-width-medium-1-4 brand">
						<?php aquamag_site_branding(); ?>
					</div>

					<nav class="uk-width-1-2 uk-width-medium-3-4 main-menu mega-menu" role="navigation">
						<a href="#" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas="{target:'#offcanvas-2'}"><span><?php _e( 'Category', 'aquamag' ); ?></span></a>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'secondary',
								'container'       => '',
								'menu_id'         => 'menu-secondary-items',
								'menu_class'      => 'uk-navbar-nav uk-visible-large',
								'fallback_cb'     => '',
								'walker'          => new Aquamag_Megamenu_Walker_Nav
							)
						); ?>
					</nav>

				</div>
			</div>

			<div class="uk-width-large-3-10 uk-visible-large main-nav-right">
				<?php get_search_form(); ?>
			</div><!-- main-nav-right -->

		</div>
	</div>

	<div id="offcanvas-2" class="uk-offcanvas">
		<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

			<?php wp_nav_menu(
				array(
					'theme_location'  => 'secondary',
					'container'       => '',
					'menu_id'         => 'mobile-menu-secondary',
					'menu_class'      => 'uk-nav uk-nav-offcanvas uk-nav-parent-icon',
					'items_wrap'      => '<ul id="%1$s" class="%2$s" data-uk-nav>%3$s</ul>',
					'fallback_cb'     => '',
					'walker'          => new Aquamag_Mobile_Walker_Nav
				)
			); ?>

		</div>
	</div><!--  uk-offcanvas  -->

</div>