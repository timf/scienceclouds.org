<?php
/*
Template Name: Marketplace
*/
?>

<?php get_header(); ?>

    <div id="toc_left">
        <div id="toc_left_content">
        
            hello ONE
        </div>
    </div>

    <div id="toc_right">
    <div id="toc_right_content">

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) { ?>
		
		<?php while (have_posts()) { the_post(); ?>
		<div class="post-page" id="post-<?php the_ID(); ?>">
		
		
		<?php if (is_front_page()) { echo ' '; } else { ?>
		    <h2 class="page_title"><?php the_title();?></h2>
		<?php } ?>
		
			<div class="entry entry_page">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php edit_post_link('Edit this entry.', '<br /><p>', '</p>'); ?>
			</div>
		</div>
		<?php } ?>
		<?php }  ?>
	</div>
	
    </div>
    </div>
    

<?php get_footer(); ?>
