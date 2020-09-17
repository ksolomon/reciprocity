<?php get_header(); ?>

			<div id="main">
				<?php 
					if (have_posts()) : 
						$sep = 1;
				?>
					<?php while (have_posts()) : the_post(); ?>
						<?php
							$oldDate = time() - (60 * 60 * 24 * 4);
							$postDate = get_the_time('U');
							if ($postDate < $oldDate) {
						?>
								<a class="read" href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a>
						<?php
							} else {
						?>
								<div class="new"><a class="read" href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></div>
						<?php } ?>
	
						<div class="posted">
							Filed under <?php the_category(', ') ?> &#8212; <?php the_time('l, F jS, Y') ?> &#8212; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><br />
							<?php the_tags(); ?>
						</div>
	
						<div class="cont">
							<?php the_content('Read More...'); ?>
						</div>

						<?php
							global $posts; 

							$numPosts = count($posts);
							if ($sep < $numPosts) {
						?>
								<div class="split"></div>
						<?php } ?>
						
					<?php $sep++; endwhile; else: ?>
						<h3 class="read"><?php _e('Sorry, no posts matched your criteria.'); ?></h3>
					<?php endif; ?>
				</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>