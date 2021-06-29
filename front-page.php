<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ghguides
 */

get_header();
	?>
	<div class="homepage" id="primary">
		<h3>Search native ad content</h3>
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

		<div class="categories-list">
			<h3>or choose a category</h3>
			<div class="categories-fp-links">
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
		</div>
	</div><!-- homepage -->
<?php
get_footer();
