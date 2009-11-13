<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

  <head>

  <title><?php if (is_single()) : ?>Science Clouds: <?php the_title(); ?><?php else : ?><?php bloginfo('name'); ?>: on demand infrastructure for scientific communities<?php endif; ?></title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="EN" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="/favicon.png" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?> 
</head>

<body>

<div id="header">

<table border="0" width="100%">
  <tr>
    <td align="left">
    
      <h1>
      <a id="top"></a>
      <a href="http://scienceclouds.org/"><?php bloginfo('name'); ?></a>
      </h1>
      
      <h2><?php bloginfo('description'); ?></h2>
    </td>
    

  </tr>
</table>

</div>

<div id="navigation">

    <?php $curtaken = 0 ?>
    
    <span class="navuhli"<?php 
      if (is_home() || is_single()) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/" title="Home"> Home </a>
    </span>
  
    <span class="navuhli"<?php 
      if (is_page('About')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/about/" title="About"> About </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Marketplace')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/marketplace/" title="Marketplace"> Marketplace </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Quickstart')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/quickstart/" title="Quickstart"> Quickstart </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Clusters')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/clusters/" title="Clusters"> Clusters </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Cluster Guide')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/cluster/" title="Cluster Guide"> Cluster Guide </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Multi Cloud')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/multicloud/" title="Multi Cloud"> Multi Cloud </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Appendix')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/appendix/" title="Appendix"> Appendix </a>
    </span>
  
</div>


