<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div class="main">

<div class="pagetitle">
<h2>About</h2>
</div>

<?php 
     query_posts('pagename=about');
?>

	<?php if (have_posts()) : ?>
  
  <?php while (have_posts()) : the_post(); ?>

	<?php the_content(); ?><br/>
  
	<?php endwhile; ?>
  
	<?php endif; ?>
  

</div>



<?php get_footer(); ?>

