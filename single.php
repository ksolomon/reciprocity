<?php get_header(); ?>

<div id="main">
	<?php
		if (have_posts()) : 
			while (have_posts()) : the_post();
	?>
	<a class="read" href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>">
	<?php the_title(); ?></a>

	<div class="cont">
		<?php the_content(); ?>
   		<?php the_tags('<p class="tags">Tags: ', ', ', '</p>'); ?>
		<br />
		<?php comments_template(); ?>
	</div>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>