			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="row clearfix">

					<div class="large-4 medium-12 columns">

						<?php dynamic_sidebar('footer'); ?>

					</div>

					<div class="large-8 medium-12 columns">
						
						<?php 
						// the query
						$the_query = new WP_Query( 'post_type=testimonials&posts_per_page=1&orderby=rand' ); ?>
						
						<?php if ( $the_query->have_posts() ) : ?>
						
							<!-- pagination here -->
						      
							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<blockquote><?php the_content(); ?></blockquote>
							<p><?php the_field('client'); ?></p>
							<p><a href="<?php echo home_url('testimonials'); ?>">More Testimonials</a></p>
							<?php endwhile; ?>
							<!-- end of the loop -->
						      
							<!-- pagination here -->
						      
							<?php wp_reset_postdata(); ?>
						
						<?php else:  ?>
						  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

					</div>
				
					<div class="large-12 medium-12 columns">
						<nav role="navigation">
    						<?php joints_footer_links(); ?>
    					</nav>
    				</div>
	               
	                <div class="large-12 medium-12 columns">		
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					</div>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		</div>
		</div>
				
		<!-- all js scripts are loaded in library/joints.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->