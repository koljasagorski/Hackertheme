<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php if ( is_single() ) { ?><?php wp_title(""); ?> :: <?php } ?><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>
	<body>
		<?php if (is_home()) : ?>
		<!--[if lt IE 8]>
			<p style="background: #f00; color: #fff; margin-bottom: 60px; font-weight: bold;">You are using an outdated browser. Upgrade and you can <a href="http://browsehappy.com/" style="color: #00f">Browse Happy</a>.</p>
		<![endif]-->
		<?php endif; ?>
		<div id="header">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php if (is_home()||is_search()||is_404()) : ?>
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<div><label class="screen-reader-text" for="s">Search here:</label>
				<input type="text" value="" name="s" id="s">
				<input type="submit" id="searchsubmit" value="Submit">
				</div>
			</form>
			<?php endif; ?>
		</div> <!-- end header -->
