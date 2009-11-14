<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<? $theTitle=wp_title(" - ", false); if($theTitle != "") { ?><title><?php echo wp_title("",false); ?> - <?php bloginfo('name'); ?></title>
<? } else { ?><title><?php bloginfo('name'); ?></title><? } ?>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/imghover.js"> </script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/tabs.js"> </script>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/javascript/tabs.js"></script>

<?php wp_head(); ?>

</head>
<body>

<!-- Start BG -->
<div id="bg"><div id="bg-all">

<div class="menu">
   <ul>
     <li class="current_page_item"><a href="http://www.scienceclouds.org"><span>Home</span></a></li>
    <li class="page_item page-item-2"><a href="http://www.scienceclouds.org/about/" title="About"><span>About</span></a></li>
    <li class="page_item page-item-24"><a href="http://www.scienceclouds.org/marketplace/" title="Marketplace"><span>Marketplace</span></a></li>
    <li class="page_item page-item-26"><a href="http://www.scienceclouds.org/quickstart/" title="Quickstart"><span>Quickstart</span></a></li>
    <li class="page_item page-item-28"><a href="http://www.scienceclouds.org/clusters/" title="Clusters"><span>Clusters</span></a></li>
    <li class="page_item page-item-30"><a href="http://www.scienceclouds.org/cluster-guide/" title="Cluster Guide"><span>Cluster Guide</span></a></li>
    <li class="page_item page-item-32"><a href="http://www.scienceclouds.org/multi-cloud/" title="Multi-Cloud"><span>Multi-Cloud</span></a></li>
    <li class="page_item page-item-34"><a href="http://www.scienceclouds.org/appendix/" title="Appendix"><span>Appendix</span></a></li>
  </ul>
</div>
 


 

<!-- Start Container -->
<div class="container">

<!-- Start Header -->
<div class="logo">
 <?php
	if ( get_option('evidens_header') == 'logo' ) 
	{ include (TEMPLATEPATH . "/logo-img.php");	}
	else
	{ include (TEMPLATEPATH . "/logo-txt.php"); }
  ?>
</div>
<!-- END Header -->

<div class="SL">