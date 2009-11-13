<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="main">

  <div class="pagetitle">
    <h2>Archives</h2>
  </div>
  
  <table border="0" width="80%">
  <tr>
  <td align="left">
  <ul>
    <li><a href="#allcats">All Categories</a></li>
    <li><a href="#monthly">Monthly Archive</a></li>
    <li><a href="#allentries">All Entries</a></li>
  </ul>
  </td>
  <td align="right">
  <form class="qs" id="searchform" method="get" action="/index.php">
    <p>
      <input class="textfield" id="s" name="s" value="" size="35" maxlength="255" type="text">
      <input id="searchsubmit" value="Search" type="submit">
      &nbsp;
    </p>
  </form>
  </td>
  </tr>
  </table>
  
  <br/>

  <div class="pagetitle">
    <a name="allcats"></a>
    <h2>All Categories</h2>
  </div>
  <div class="marginit"><p>Every entry is filed under at least one of these categories:</p></div>
  <div class="indent">
  <ul>
    <?php wp_list_cats('sort_column=name&optioncount=1&child_of=2&hide_empty=0'); ?>
    <?php wp_list_cats('sort_column=name&optioncount=1&child_of=3&hide_empty=0'); ?>
    <?php wp_list_cats('sort_column=name&optioncount=1&child_of=1&hide_empty=0'); ?>
  </ul>
  </div>
  <div class="smallline"></div>
  <div class="marginit"><p>And zero or more of these categories:</p></div>
  <div class="indent">
  <ul>
    <?php wp_list_cats('sort_column=name&optioncount=1&exclude=1,2,3'); ?>
  </ul>
  </div>
  <br/>
  
  <div class="pagetitle">
    <a name="monthly"></a>
    <h2>Monthly Archive</h2>
  </div>
    
  <div class="indent">
  <ul>
    <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
  </ul>
  </div>

  <br/>
  
  <div class="pagetitle">
    <a name="allentries"></a>
    <h2>All Entries</h2>
  </div>

  <div class="indent">
  <ul>
    <?php wp_get_archives('type=postbypost'); ?>
  </ul>
  </div>
  
</div>


<?php get_footer(); ?>