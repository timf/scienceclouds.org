<div class="SR">

<!-- Start Search -->
<div class="search">
  <form method="get" action="<?php bloginfo('url'); ?>/">
   <fieldset>
   <input type="text" value="<?php the_search_query(); ?>" name="s" /><button type="submit">Search</button>
   </fieldset>
  </form>
<div class="syn">
 <ul>
  <li><a href="<?php bloginfo('rss2_url'); ?>">Entries</a> (RSS)</li>
  <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a> (RSS)</li>
 </ul>
</div>
</div>
<!-- End Search -->

<!-- Start About This Blog -->
<div class="about">
<h3>About</h3>
<p><b>A community driven website devoted to on demand infrastructure for scientific communities. New? <span id="starthere"><a href="/about/">Start here!</a></span></b>
</p>
</div>
<!-- End About This Blog -->


<div class="categs">
  <div> 
	<h3>Categories</h3> 
	 <ul> 
		<?php wp_list_categories('show_count=1&title_li='); ?> 
	</ul> 
	</div>
	<div style="margin-left: 10px;">
	 <h3>Archives</h3>
	  <ul>
	   <?php wp_get_archives('type=monthly'); ?>
	  </ul>
	</div>
</div>

<!-- Start Recent Comments/Articles -->

<!-- timf: check back on this part when there are comments -->

<!-- End Recent Comments/Articles -->




<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
<?php endif; ?>
</div>
<!-- End SideBar1 -->
