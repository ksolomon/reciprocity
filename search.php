<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>

<div id="main">
	<?php if (have_posts()) : ?>
		<h2 class="read">Search Results</h2>
		<?php while (have_posts()) : the_post(); ?>
			<a class="read" href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a>
			<div class="posted">Filed under: <?php the_category(', ') ?> &#8212; <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?></div>

		<div class="cont">
			<?php the_excerpt(); ?>
			<br />
		</div>

		<?php endwhile; else: ?>
			<p><?php _e('<h2 class="read">Sorry, no posts matched your criteria.  Change your search terms and try again</h2>'); ?></p>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>