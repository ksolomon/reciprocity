			<div id="right">
				<?php if (!is_page()) { ?>
					<div class="navigation">
						<h3>Arch<span class="blue">ives</span></h3>
						<?php if (is_single()) { ?>
							<div class="navleft"><?php previous_post_link('%link', 'Previous post', FALSE); ?></div>
							<div class="navright"><?php next_post_link('%link', 'Next post', FALSE);  ?></div>
						<?php } else { ?>
							<div class="navleft"><?php next_posts_link('Older Posts'); ?></div>
							<div class="navright"><?php previous_posts_link('Newer Posts'); ?></div>
						<?php } ?>
					</div>

					<div class="clear"></div>
				<?php } ?>

				<h3>Sea<span class="blue">rch</span></h3>
				<?php if ($info[browser]=='MSIE') { ?>
					<div id="search">
						<form method="get" id="sform" action="<?php bloginfo('home'); ?>/">
 							<div class="searchimg"></div>
							<input type="text" id="q" value="<?php echo wp_specialchars($s, 1); ?>" name="s" size="15" />
						</form>
					</div>
				<?php } else { ?>
					<div id="lsearch">
						<div class="searchimg"></div>
						<?php include(TEMPLATEPATH . '/searchform.php') ?>
					</div>
				<?php } ?>

				<?php if (is_single()) { ?>
					<div class="clear"></div>

					<div id="infomenu">
						<h3>Entry<span class="blue">Details</span></h3>
						<dl>
							<dt>Title:</dt>
							<dd>&ldquo;<?php the_title(); ?>&rdquo;</dd>
						</dl>
						<dl>
							<dt>Category:</dt>
							<dd><?php the_category(', '); ?></dd>
						</dl>
						<dl>
							<dt>Published:</dt>
							<dd><?php the_time('D, M dS, Y');?> <?php the_time('g:i a') ?></dd>
						</dl>
						<dl>
							<dt>Comments:</dt>
							<dd><?php comments_number(__('No comments yet'), __('1 comment so far'), __('% comments so far')); ?> </dd>
						</dl>
					</div>
					<br />
				<?php } ?>

				<div class="clear"></div>

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
					<?php if(function_exists('get_flickrrss')) { ?>
						<h3>Flick<span class="blue">r</span></h3>
						<div class="rbox">
							<?php get_flickrrss(); ?>
						</div>

						<div class="clear"></div>
					<?php } ?>

					<h3>Categ<span class="blue">ories</span></h3>
					<div class="rbox">
						<ul class="linkslist">
							<?php wp_list_cats(''); ?>
						</ul>
					</div>

					<h3>Last<span class="blue">Ten</span></h3>
					<div class="rbox">
						<ul class="linkslist">
							<?php wp_get_archives('type=postbypost&limit=10'); ?>
						</ul>
					</div>

					<h3>Cool<span class="blue">Sites</span></h3>
					<div class="rbox">
						<ul class="linkslist">
							<?php get_links(-1, '<li>', '</li>', ' ', TRUE, 'rand', FALSE, FALSE, 10, FALSE); ?>
						</ul>
					</div>

					<h3>Other<span class="blue">Stuff</span></h3>
					<div class="rbox">
						<p>You can add links, ads, or whatever you like in this box... </p>
						
					</div>
				<?php endif; ?>
			</div>
