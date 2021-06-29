<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gannett-native
 */

get_header();
?>

	<div id="primary" class="content-area post">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();


			get_template_part( 'template-parts/content', get_post_type() ); 
			?>
			<div class="pdf-button">
				Download as PDF
			</div>
			<?php
			the_post_navigation();

			?>

			<script type="text/javascript">
				var prev = jQuery('.nav-previous').html();
				var next = jQuery('.nav-next').html();
				console.log(prev + next);
				jQuery(document).ready(function() {
				jQuery('.nav-previous').html('<div class="prev-arrow"></div>'+prev);
				jQuery('.nav-next').html('<div class="next-arrow"></div>'+next);
				});

				jQuery('.pdf-button').on('click', function() {
					window.print();
				});


				var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;

				if (supportsTouch == true) {
					jQuery('.pdf-button').remove();
				}
				</script>

			<?php



		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_sidebar();
get_footer();
