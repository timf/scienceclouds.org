<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

    <div id="body_left">
    <div id="body_left_content">
    
    <div class="page_archives_div">
    
    <div class="ar_panel">
        <h2><span>Archives By Category:</span></h2>
        <ul>
             <?php wp_list_categories('title_li='); ?>
        </ul>
    </div>
    
    <div class="ar_panel ar_panel2">
        <h2><span>Archives By Month:</span></h2>
        <ul class="dark">
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>
    
    </div>
    
    </div>
    </div>
    <div id="body_right">
      <div id="body_right_content">
            
            <div id="sidebars">
                <?php get_sidebar(); ?>
            </div>
            
        </div>
    </div>

<?php get_footer(); ?>