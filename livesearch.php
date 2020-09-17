<?php $posts_per_page = 10; global $table_prefix; require('../../../wp-blog-header.php'); ?>
<div class="LSRes"><?php if ($posts) { foreach ($posts as $post) { start_wp(); ?>
<div class="LSRow"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
</div><?php } } else { ?>No Results<?php } ?>
<div>
<div class="LSRes"><a href="/index.php?s=<?php echo wp_specialchars($s); ?>">More Results...</a></div>