<?php get_header(); ?>

    <div id="body_left">
    <div id="body_left_content">
        
	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-page" id="post-<?php the_ID(); ?>">
		
		<h2 class="page_title"><?php the_title(); ?></h2>
			<div class="entry entry_page">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php edit_post_link('Edit this entry.', '<br /><p>', '</p>'); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
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