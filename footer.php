<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gannett-native
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">


			<p>&copy; Gannett Co., Inc. 2020. All Rights Reserved.</p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">

jQuery(document).ready(function(){
	jQuery('.menu-item a').attr('target', '_blank');
	jQuery('a[rel="tag"]').removeAttr('href');
});

</script>

<?php wp_footer(); ?>

</body>
</html>
