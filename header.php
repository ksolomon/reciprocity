<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"	/>

		<title>
			<?php wp_title(' '); ?>
			<?php if(wp_title(' ', false)) { echo '|'; } ?>
			<?php bloginfo('name'); ?>
		</title>

		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

		<style type="text/css" media="screen">
			@import url( <?php bloginfo('stylesheet_url'); ?> );
		</style>

		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_get_archives('type=monthly&format=link'); ?>

		<?php if (is_single() || is_page() and ('open' == $post-> comment_status) or ('comment' == $post-> comment_type) ) { ?>
        	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prototype.js.php"></script>
        	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/effects.js.php"></script>
        	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ajax_comments.js"></script>
		<?php } ?>

		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/livesearch.js.php"></script>

		<!--[if IE]>
			<style type="text/css">
				#LSResult {
					position: relative;
				}
			</style>
		<![endif]-->

		<?php wp_head(); ?>
	</head>	

	<body onload="liveSearchInit()">
		<?php include('detectbrowser.php') ?> 
		<div id="all">
			<?php if(function_exists('wp_admin_bar')) wp_admin_bar(); ?>
			<div id="head">
				<h1><?php bloginfo('name'); ?></h1>
				<div id="motto"><strong><?php bloginfo('description'); ?></strong></div>
				<div id="hlinks">
					<ul>
						<li><a href="<?php bloginfo('url'); ?>">home</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about">about</a></li>
						<li><a href="<?php bloginfo('url') ?>/contact">contact</a></li>
						<li><?php wp_loginout(); ?></li>
						<li><?php global $user_ID; if ($user_ID) echo '<a href="' . get_bloginfo('wpurl') . '/wp-admin/">admin</a>' . ""; ?></li>
						<li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to my feed" rel="alternate" type="application/rss+xml">Subscribe <img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="Subscribe" style="border:0" /></a></li>
					</ul>
				</div>
			</div>
