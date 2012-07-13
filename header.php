<?php load_theme_textdomain('benevolence');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<link rel="shortcut icon" href="http://www.ecfmg.org/images/ecfmg.favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="http://www.ecfmg.org/images/ecfmg.favicon.ico" type="image/vnd.microsoft.icon">
	<style type="text/css" media="screen">
		@import url(http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/ecfmg.tooltips.css);
	</style>
        <style type="text/css" media="print">
		@import url(http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/ecfmg.print.css);
	</style>
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
      	<!--[if IE 8]>
	<style type="text/css" media="screen">
		@import url(http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/wordpress-fix-ie8.css);
	</style>
	<![endif]-->
	<!--[if IE 7]>
	<style type="text/css" media="screen">
		@import url(http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/wordpress-fix-ie7.css);
	</style>
	<![endif]-->
	<!--[if IE 6 ]><link rel="stylesheet" href="css/ecfmg.fix.ie6.css" type="text/css" />
	<style type="text/css" media="screen">
		@import url(http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/wordpress-fix-ie6-tooltips.css);
	</style>
	<style type="text/css" media="screen">
		@import url(http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/wordpress-fix-ie6.css);
	</style>
	<![endif]-->
	<script src="http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/scripts/jquery.min.js"></script>
      	<script src="http://www.ecfmg.org/news/wp-content/themes/ecfmgtheme/scripts/jquery.tools.min.js"></script>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_head();
	?>

</head>

<body>
<?php include ("tooltips.php"); ?>
<div id="wrapper">
	<!--<div id="masthead" onclick="document.location='<?php bloginfo('url'); ?>';" style="cursor: pointer;">
	<h1 id="blogTitle">
	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
	</h1>
	</div>-->
	<div id="insideWrapper">
	<?php if ($_SERVER['REQUEST_URI']==="/news/") { ?>
	<div style='margin-bottom:10px;'><a href="/">Home</a> > News</div>
	<?php } else { ?>
	<div style='margin-bottom:10px;'><a href="/">Home</a> > <a href="/news/">News</a> > <?php the_title(); ?></div>
	<?php } ?>
