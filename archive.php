<?php 
/* 
Template Name: Archives
*/
?>

<?php get_header(); ?>
<?php is_tag(); ?>

<div id="main">
	<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="read" >Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category</h2>

		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="read">Archive for <?php the_time('F jS, Y'); ?></h2>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="read">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="read">Archive for <?php the_time('Y'); ?></h2>

		<?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="read">Search Results</h2>

		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="read">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="read">Blog Archives</h2>
	<?php } ?>

	<?php while (have_posts()) : the_post(); ?>
		<a class="read" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
		<div class="posted">Filed under: <?php the_category(', ') ?> <?php the_time('l, F jS, Y') ?> &#8212; <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?></div>

		<div class="cont">
			<?php the_content() ?>
			<?php edit_post_link('Edit This Post', '<span class="edit">', '</span>'); ?>
			<br /><br />
		</div>

		<div class="clear"></div>
	<?php endwhile; ?>

<?php else : ?>

	<h2 class="read">Not Found</h2>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>