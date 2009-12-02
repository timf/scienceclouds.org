
            
        </div>
    </div>

	<div id="body_right">
    	<div id="body_right_content">
            
            <div id="sidebars">
                <?php get_sidebar(); ?>
            </div>
            
        </div>
    </div>

</div>

<div id="footer">
	<div id="footer_title">
        <h2>
            <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
        </h2>
    </div>
	<div id="footer_text">
    	<p>&copy; All Rights Reserved. <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> | Powered by : <a href="http://wordpress.org/">WordPress</a></p>
		<p>Alteration of an original design by WebDesignLessons.com</p>
    </div>

</div>


		<?php wp_footer(); ?>


</div>

</body>
</html>
