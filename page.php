<?php get_header(); ?>

<div id="main">
	<?php
		if (have_posts()) : 
			while (have_posts()) : the_post();
	?>
	<h2 class="read">
	<?php the_title(); ?></h2>
	
	<div class="cont">
		<?php the_content(); ?>
	</div>

	<?php endwhile; else: ?>
		<h2 class="read"><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>