<?php get_header(); ?>

<div class="main">

	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

	<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'"><?php the_title(); ?></a>
	<?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;(edit)','<span class="editlink">','</span>'); ?>
  </h4>
  
  <div class="postcontent">
	<?php the_content('<br/>Read the rest of this entry &raquo;'); ?>
  </div>
  
	<?php endwhile; endif; ?>
	
</div>

<?php get_footer(); ?>
