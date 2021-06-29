<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gannett-native
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script type='text/javascript' src='https://1rntu844lwdp3cxp81l9i121-wpengine.netdna-ssl.com/despacetest/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
	<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gannett-native' ); ?></a>-->

	<header id="masthead" class="site-header desktop-tablet">
		<div class="site-branding">

				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="brand">Gannett</span> Native Ads</a></p>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">

			<div class="menu-items">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			</div>

			<div class="category-toggle desktop">Categories</div>

			<div class="categories-hold desktop off">
				<div class="close desktop off">&times;</div>
			<?php
				$categories = get_categories();
				foreach($categories as $category) {
					if ($category->name != 'Uncategorized') {
						?>
						<a href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name; ?></a><?php
					}
				}
			?>
			</div>

			<script>
				jQuery('.category-toggle.desktop').on('click', function() {
					console.log('!!!');
				//	jQuery('.category-toggle').toggleClass('hide');
					jQuery('.categories-hold.desktop').toggleClass('off');
					jQuery('.close.desktop').toggleClass('off');
				});

				jQuery('.categories-hold.desktop .close.desktop').on('click', function() {
			//		jQuery('.category-toggle').toggleClass('hide');
					jQuery('.categories-hold.desktop').toggleClass('off');
					jQuery('.close.desktop').toggleClass('off');
				});

			</script>

			<div class="search-module">

				<div class="searcher">
			<?php get_search_form(); ?>
			<script type="text/javascript">
				jQuery('input[type="search"]').attr('autocomplete', 'off');
				jQuery('input[type="search"]').attr('placeholder', 'Search content');
				jQuery('.search-toggle').on('click', function() {
					jQuery('.search-module').toggleClass('hide');


				});
			</script>
		</div>
			</div>

			<!--<div class="search-toggle"><span>Search</span></div>-->

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<header id="masthead" class="site-header mobile">
		<div class="site-branding">

				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="brand">Gannett</span> Native Ads</a></p>

		</div><!-- .site-branding -->

		<div class="hamburger">
			<div class="burger-top"></div>
			<div class="burger-middle"></div>
			<div class="burger-bottom"></div>
		</div>




	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation mobile mobile-hide">

		<div class="menu-items">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
		</div>

		<div class="category-toggle mobile">Categories</div>

		<div class="categories-hold mobile off">
			<div class="close mobile off">&times;</div>
		<?php
			$categories = get_categories();
			foreach($categories as $category) {
				if ($category->name != 'Uncategorized') {
					?>
					<a href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name; ?></a><?php
				}
			}
		?>
		</div>

		<script>
			jQuery('.category-toggle.mobile').on('click', function() {
			//	jQuery('.category-toggle').toggleClass('hide');
				jQuery('.categories-hold.mobile').toggleClass('off');
				jQuery('.close.mobile').toggleClass('off');
			});

			jQuery('.categories-hold.mobile .close.mobile').on('click', function() {
		//		jQuery('.category-toggle').toggleClass('hide');
				jQuery('.categories-hold.mobile').toggleClass('off');
				jQuery('.close.mobile').toggleClass('off');
			});

		</script>

		<div class="search-module">

			<div class="searcher">
		<?php get_search_form(); ?>
		<script type="text/javascript">
			jQuery('input[type="search"]').attr('autocomplete', 'off');
			jQuery('input[type="search"]').attr('placeholder', 'Search content');
			jQuery('.search-toggle').on('click', function() {
				jQuery('.search-module').toggleClass('hide');


			});
		</script>

		<script type="text/javascript">

			jQuery('.hamburger').on('click', function() {
				console.log('!!!');
				jQuery('#site-navigation.mobile').toggleClass('mobile-hide');
				jQuery('#site-navigation.mobile').toggleClass('mobile-show');
				jQuery('.hamburger').toggleClass('tapped');
			})

		</script>
	</div>
		</div>

		<!--<div class="search-toggle"><span>Search</span></div>-->

	</nav><!-- #site-navigation -->



	<div id="content" class="site-content">
