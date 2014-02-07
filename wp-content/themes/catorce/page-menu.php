

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					<div class="large-12 columns">
						<h1>Menu</h1>
					
						<p>Today's specials</p>
					</div>
					
					<div class="large-4 columns">
						<h2>Breakfast</h2>
						<ul class="large-block-grid-1 medium-block-gird-4 small-block-grid-2">
						<?php $breakfast_query = new WP_Query('post_type=menu&meal=breakfast&meta_key=special&meta_value=1'); // exclude category 9
						while($breakfast_query->have_posts()) : $breakfast_query->the_post(); ?>

						<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php 
							if ( has_post_thumbnail() ) { 								// check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('medium');
							} 
						?>
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
							<p><?php the_field('price'); ?>
						</li>
					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
						</ul>
					</div>
					
					<div class="large-4 columns">
						<h2>Lunch</h2>
																	<ul class="large-block-grid-1 medium-block-gird-4 small-block-grid-2">
						<?php $lunch_query = new WP_Query('post_type=menu&meal=lunch&meta_key=special&meta_value=1'); // exclude category 9
						while($lunch_query->have_posts()) : $lunch_query->the_post(); ?>

						<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php 
							if ( has_post_thumbnail() ) { 								// check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('medium');
							} 
						?>
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
							<p><?php the_field('price'); ?>
						</li>
					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
						</ul>
					</div>
					
					<div class="large-4 columns">
						<h2>Dinner</h2>
																	<ul class="large-block-grid-1 medium-block-gird-4 small-block-grid-2">
						<?php $dinner_query = new WP_Query('post_type=menu&meal=dinner&meta_key=special&meta_value=1'); // exclude category 9
						while($dinner_query->have_posts()) : $dinner_query->the_post(); ?>

						<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php 
							if ( has_post_thumbnail() ) { 								// check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('medium');
							} 
						?>
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
							<p><?php the_field('price'); ?>
						</li>
					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
						</ul>
					</div>
					
					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
