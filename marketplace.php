<?php
/*
Template Name: Marketplace
*/
?>

<?php get_header(); ?>

    <div id="toc_left">
        <div id="toc_left_content">
        
        <a name="toc"></a>

        <h2>Table of Contents</h2>   
        
        <ul>
            <li>
            <a href="#workspaces">Images:</a>
                <ul>
                    <li><a href="#hellocloud">Hello Cloud</a></li>
                    <li><a href="#globus002">Globus 002</a></li>
                    <li><a href="#base-cluster-01">Base Cluster cc12</a></li>
                    <li><a href="#osg-cluster-1.0.0">OSG Cluster 1.0.0</a></li>
                    <li><a href="#hadoop-cluster-01">Hadoop Cluster 01</a></li>
                    <li><a href="#blast-cluster-02">BLAST Cluster 02</a></li>
                    <li><a href="#test-vm">Workspace test VM</a></li>
                    <li><a href="#cernvm">CernVM</a></li>
                </ul>
            </li>
            <li><a href="#resources">Resources</a>
                <ul>
                    <li>
                        <a href="http://workspace.globus.org/vm/marketplace-notes.html">Extended notes page</a>
                    </li>
                    <li>
                        <a href="http://workspace.globus.org/vm/TP2.2/doc/metadata-quickstart.html">Metadata Quickstart</a>
                    </li>
                    <li>
                        <a href="http://workspace.globus.org/vm/offline-editing.html">Offline Editing Guide</a>
                    </li>
                    <li>
                        <a href="http://workspace.globus.org/vm/module-copying.html">Module Copying Guide</a>
                    </li>
                </ul>
            </li>
            <li><a href="#other">Other VMs online</a>
            </li>
        </ul>
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
