<?php get_header(); ?><div class="main"><?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>	<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> - <?php the_time('M jS, Y') ?>	<?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;(edit)','<span class="editlink">','</span>'); ?>  </h4>    <div class="postcontent">	<?php the_content('<br/>Read the rest of this entry &raquo;'); ?>			<div class="entrymeta">		<span>Categories: <?php the_category(' &bull; ') ?></span>    <span>&nbsp;</span>    </div>      </div>    <br />  <br />  <br />  <br />  	<?php comments_template(); ?>	<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>	<?php endwhile; ?>	<?php else : ?>	<h4 class="center">Not Found!</h4>	<p class="center">Sorry, but you are looking for something that isn't here.</p>	<?php endif; ?></div><?php get_footer(); ?>