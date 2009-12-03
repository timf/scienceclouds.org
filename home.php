<?php
/*
Template Name: HomePage
*/
?>

<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) { ?>
		
		<?php while (have_posts()) { the_post(); ?>
		<div class="post-page" id="post-<?php the_ID(); ?>">
		
		<?php if (is_front_page()) { echo '&nbsp;'; } else { ?>
		    <h2 class="page_title"><?php the_title();?></h2>
		    <p class="p-author">By: <?php the_author() ?></p>
            <p class="p-cat">Filed in: <?php the_category('|') ?></p>
            <small class="p-time">
            <strong class="month"><?php the_time('M') ?></strong>
            <strong class="day"><?php the_time('j') ?></strong>
            <strong class="year"><?php the_time('Y') ?></strong>
            </small>
		<?php } ?>
		
			<div class="entry entry_page">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php edit_post_link('Edit this entry.', '<br /><p>', '</p>'); ?>
				
				<?php if (is_front_page()) { echo '&nbsp;'; } else { ?>
				
				<div class="p-det">
                 <ul>
                   <li class="p-det-com"><?php comments_popup_link('No responses', 'One response', '(%) responses'); ?></li>
                  <?php if (function_exists('the_tags')) { ?> <?php the_tags('<li class="p-det-tag">Tags: ', ', ', '</li>'); ?> <?php } ?>
                </ul>
                </div>
                <?php } ?>
				
			</div>
		</div>
		<?php } ?>
		<?php }  ?>
	</div>
	
	            
    </div>
    </div>
    
    <?php if (is_front_page()) { echo '&nbsp;'; } else { ?>
		    
        
        <div id="body_right">
          <div id="body_right_content">
                
                <div id="sidebars">
                    <?php get_sidebar(); ?>
                </div>
                
            </div>
        </div>
        
        
    <?php } ?>
    
    

<?php get_footer(); ?>
