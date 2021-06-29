<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="primary" class="site-content">
<div id="content" role="main" class="category-page">

<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="category-header">
<h3 class="category-title"><?php echo single_cat_title( '', false ); ?></h3>
</header>

<?php

// The Loop
while ( have_posts() ) : the_post(); ?>

<div class="content-box">
  <a href="<?php the_permalink(); ?>?site=<?php echo $wp_query->query_vars['site']; ?>" class="content-link">
  <h1 class="fp-headline"><?php the_title() ?></h1></a>
  <div class="fp-date"><?php echo gannett_native_posted_on(); ?></div>
  <div class="fp-category"><?php
    echo the_tags('', ', ', '');
    echo the_category();
  ?></div>
  <img class="fp-image" src="<?php the_post_thumbnail_url(); ?>">

  <div class="fp-excerpt"><?php the_excerpt()?></div>


</div>
<!--
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

<div class="entry">
<?php the_excerpt(); ?>

 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>-->



<?php endwhile;

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>
</div>
</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
