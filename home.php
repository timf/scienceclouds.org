<?php
/*
Template Name: HomePage
*/
?>

<?php get_header(); ?>

    <div id="body_left">
    <div id="body_left_content">

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) { ?>
		
		<?php while (have_posts()) { the_post(); ?>
		<div class="post-page" id="post-<?php the_ID(); ?>">
		
		<?php if (is_front_page()) { echo ' '; } else { ?>
		    <h2 class="page_title">
		    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a>
		    </h2>
		    <h3>
                By <span><?php the_author() ?></span>  |  Posted in <span><?php the_category(', ') ?></span>  |  <?php the_time('m-d-Y') ?>
                |  <?php comments_number('No responses','One response','% responses'); ?>
            </h3>
            <h3>
                <span class="post_cats"><?php the_tags(); ?></span>
            </h3>
		<?php } ?>
		
			<div class="entry entry_page">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php edit_post_link('Edit this entry.', '<br /><p>', '</p>'); ?>
				
				<?php if (is_front_page()) { echo ' '; } else { ?>
				
				<div class="p-det">
                 <ul>
                   <li class="p-det-com"><?php comments_popup_link('Write a response', 'Write a response', 'Write a response'); ?></li>
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
    
    <div id="body_right">
    <div id="body_right_content">

        <?php if (is_front_page()) { ?>
            
            <div id="sidebarposts">
                <h2><a href="/blog/">Recent Posts</a></h2>
                <br>
                
                <?php $recent = new WP_Query("showposts=2"); while($recent->have_posts()) : $recent->the_post();?>
                
                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title_limited(70); ?></a></h3>
                <br>
                By <span><?php the_author() ?></span>
                <br>
                <br>
                <p><?php the_content_limit(300); ?></p>
                <br>
                <p class="sidereadmore"><a href="<?php the_permalink() ?>">Read more</a>...</p>
                <br>
                <?php endwhile; ?>
            </div>
    
        <?php } else { ?>
            
            <div id="sidebars">
                <?php get_sidebar(); ?>
            </div>
    
        <?php } ?>
             
    </div>
    </div>   
    

<?php get_footer(); ?>
