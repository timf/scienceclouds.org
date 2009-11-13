<?php get_header(); ?>



<div class="main">



	<?php if (have_posts()) : ?>



		<h3>Search Results</h3>

		

		<?php while (have_posts()) : the_post(); ?>

				

		<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>

		<small><?php the_time('j F Y') ?> <!-- by <?php the_author() ?> --></small>

		<p><?php the_excerpt() ?></p>

	

		<?php endwhile; ?>



<p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>

	

	<?php else : ?>



		<h5>No posts found. Try a different search?</h5>

	<?php endif; ?>

		

	</div>



<?php get_footer(); ?>