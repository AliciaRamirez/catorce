<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">				
					
					<?php 
					// the query
					$the_query = new WP_Query( 'post_type=menu&meta_key=featured&meta_value=1' ); ?>
					
					<?php if ( $the_query->have_posts() ) : ?>
					
					  <!-- pagination here -->
					   <ul class="example-orbit" data-orbit>
					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    	<li>
							<?php $image = get_field('slidshow_image'); ?>
							<img src="<?php echo $image['url'];?>" alt="<?php the_title(); ?>" />
							<div class="orbit-caption">
								<strong><?php the_title(); ?></strong>
								<?php the_excerpt(); ?>
								Price: <?php the_field('price'); ?>
							</div>
						</li>
					    
					  <?php endwhile; ?>
					  <!-- end of the loop -->
					   </ul>
					  <!-- pagination here -->
					
					  <?php wp_reset_postdata(); ?>
					
					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					
					
					<section class="large-4 medium-4 columns">
						<h3>Location &amp; Hours</h3>
						    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
							<?php the_content(); ?>
											
						    <?php endwhile; else : ?>
						
								<?php get_template_part( 'partials/missing', 'content' ); ?>
	
						    <?php endif; ?>
					    
					</section>
					<section class="large-4 medium-4 columns">
						<h3>Latest Blog Post</h3>
						<?php 
						// the query
						$blog_query = new WP_Query( 'post_type=post&posts_per_page=1' ); ?>
						
						<?php if ( $blog_query->have_posts() ) : ?>
						
						  <!-- pagination here -->
						
						  <!-- the loop -->
						  <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
						    <h4><?php the_title(); ?></h4>
						    <?php the_excerpt(); ?>
						    <p><a href="<?php the_permalink();?>">Read More</a><p>
						    <p><a href="<?php echo home_url('blog'); ?>">Visit the Blog</a></p>
						  <?php endwhile; ?>
						  <!-- end of the loop -->
						
						  <!-- pagination here -->
						
						  <?php wp_reset_postdata(); ?>
						
						<?php else:  ?>
						  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</section>
					<section class="large-4 medium-4 columns">
						<h3>Today's Special</h3>
						<?php 
						// the query
						$specials_query = new WP_Query( 'post_type=menu&posts_per_page=1&meta_key=special&meta_value=1&orderby=rand' ); ?>
						
						<?php if ( $specials_query->have_posts() ) : ?>
						
						  <!-- pagination here -->
						
						  <!-- the loop -->
						  <?php while ( $specials_query->have_posts() ) : $specials_query->the_post(); ?>
						    <?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  the_post_thumbnail('medium');
							} 
							?>
						    <h4><?php the_title(); ?></h4>
						    <?php the_excerpt(); ?>
						    Price: <?php the_field('price'); ?>
						  <?php endwhile; ?>
						  <!-- end of the loop -->
						
						  <!-- pagination here -->
						
						  <?php wp_reset_postdata(); ?>
						
						<?php else:  ?>
						  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</section>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
