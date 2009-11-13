<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

  <head>

  <title><?php if (is_single()) : ?><?php the_title(); ?> - *.org<?php else : ?><?php bloginfo('name'); ?> - *.org<?php endif; ?></title>

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
      <a href="http://*.org/"><?php bloginfo('name'); ?></a>
      </h1>
      
      <h2><?php bloginfo('description'); ?></h2>
    </td>
    

  </tr>
</table>

</div>

<div id="navigation">

    <?php $curtaken = 0 ?>
  
    <span class="navuhli"<?php 
      if (is_page('Top')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/virtualization/"> Home </a>
    </span>
      
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
      <a href="/virtualization/articles/" title="Articles"> Articles </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Case Studies')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/virtualization/case-studies/" title="Case Studies"> Case Studies </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Images')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/virtualization/images/" title="Images"> Images </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Security')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/virtualization/security/" title="Security"> security </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Networking')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/virtualization/networking/" title="Networking"> Networking </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Performance')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/virtualization/performance/" title="Performance"> Performance </a>
    </span>
    
    <span class="navuhli"<?php 
      if (is_page('Middleware and Tools')) 
      { 
      echo " id=\"current\">";
      $curtaken = 1
      ?>
      <?php 
      } else {
        echo ">";
      }
      ?>
      <a href="/virtualization/middleware-and-tools/" title="Middleware and Tools"> Software </a>
    </span>
  
  
    <?php if (is_page('General')) : ?>
    
    <span class="navuhli" id="current">
    
    <?php else : ?>
    
    <span class="navuhli">
    
	  <?php endif; ?>
    
    <a href="/virtualization/general/" title="General">General</a>
    </span>
</div>


