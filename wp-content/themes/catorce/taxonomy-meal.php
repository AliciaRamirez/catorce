<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns first clearfix" role="main">
				
					    <h1 class="archive-title h2"><?php single_cat_title(); ?> Menu</h1>
						
					    <ul class="large-block-grid-4 medium-block-gird-3 small-block-grid-1">
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php 
							if ( has_post_thumbnail() ) { 								// check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('medium');
							} 
						?>
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
							<p><?php the_field('price'); ?></p>
						</li>
					
					
					    <?php endwhile; ?>
					    
					    </ul>
					
					        <?php if (function_exists('joints_page_navi')) { ?>
					            <?php joints_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>
					        
					    <?php else : ?>
					
        					<?php get_template_part( 'partials/missing', 'content' ); ?>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php //get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
