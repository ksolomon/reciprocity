<?php 
/* 
Template Name: Page With Comments
*/
?>

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
		<?php edit_post_link('Edit This Post', '<span class="edit">', '</span>'); ?>
		<br />
		<?php comments_template(); ?>
	</div>

	<?php endwhile; else: ?>
		<h2 class="read"><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>