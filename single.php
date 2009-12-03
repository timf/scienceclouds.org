<?php get_header(); ?>

    <div id="body_left">
    <div id="body_left_content">

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
						<h3>
							Posted by <span><?php the_author() ?></span>  |  Posted in <span><?php the_category(', ') ?></span>  |  <?php the_time('d-m-Y') ?>
							|  <?php comments_number('No responses','One response','% responses'); ?>
						</h3>
						<h3>
							<span class="post_cats"><?php the_tags(); ?></span>
						</h3>
                    </div>
                </div>

				<div class="entry">
					<?php the_content('',FALSE,''); ?>
				</div>
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

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
