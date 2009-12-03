<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!-- The scienceclouds.org wordpress theme is an alteration of the original "Redtime" design by WebDesignLessons.com: http://www.webdesignlessons.com/redtime-wordpress-theme/ -->

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE ]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie.css" type="text/css" media="screen" />
<script type="text/javascript">
	var png_trans = "<?=bloginfo('template_url')?>/images/transparent.gif";
</script>
<![endif]-->
<!-- Main Menu -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.1.2.6.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jqueryslidemenu/jqueryslidemenu.js"></script>
	<!-- /Main Menu -->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body>
<div id="page">
<div id="nonFooter">
<div id="menu">
    <!-- rss beaker image courtesy: http://www.freesocialicons.com/free-lab-experiment-social-icon-set/ -->
	<div id="top_rss"><a href="<?php bloginfo('rss2_url'); ?>" title="Rss"><img src="<?php bloginfo('template_url')?>/images/rss-science.jpg" alt="<?php bloginfo('name'); ?> Rss" /></a></div>
	<div id="mainmenu">
		<ul>
			<?php $exclude = obwp_get_meta(SHORTNAME.'_exclude_page'); wp_list_pages2('title_li=&sort_column=menu_order&depth=0&exclude='.$exclude) ?>
		</ul>
	</div>
</div>

<div id="header">
	<div id="header_title">
        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<!-- <span><?php bloginfo('description'); ?></span> -->
    </div>
	<div id="header_right">
		
    </div>
</div>

<div id="body">

	<div id="body_left">
    	<div id="body_left_content">
    	