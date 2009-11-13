<?php
/*
Template Name: Top
*/
?>

<?php get_header(); ?>

<div class="main">

<?php 
     query_posts('pagename=top');
?>

	<?php if (have_posts()) : ?>
  
  <?php while (have_posts()) : the_post(); ?>

	<?php the_content(); ?><br/>
  
	<?php endwhile; ?>
  
	<?php endif; ?>
  

</div>

<?php get_footer(); ?>

