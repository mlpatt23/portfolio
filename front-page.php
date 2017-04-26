<?php get_header(); ?>

	<section class="jumbotron" id="home" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/mill-ave-bridge.jpg)"> <!-- ID set for Scrollspy/Fragment IDs-->
		<div class="full-width">
			<div class="third-width">
				<div class="box" id="intro-box">
					<h3>I am a Web Designer and Developer, living where beauty meets functionality.</h3>
					<h3>I love dreaming up designs and turning those dreams into reality.</h3>
					<a href="#contact" class="button">Get in touch</a>
				</div>
			</div>
		</div>
	</section>
	
	
	<section class="about">
		<div class="full-width">
			
			<?php
				$args = array(
					'post_type' => 'about'
				);
				
				query_posts($args);
				
				if ( have_posts() ) : while(have_posts()) : the_post();
				
					$image_1 = get_field('image_1');
					$tagline = get_field('tagline'); 
					$size = "medium"; ?>
			
					<?php echo $tagline; ?>
			
					<div class="third-width">
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</div> <!-- third-width -->
			
					<div class="two-thirds-width">
						<?php the_content(); ?>
					</div>	<!-- two-thirds -->
		
				<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
		</div> <!-- full-width -->
	</section> <!-- about -->

	<main id="portfolio"> <!-- ID set for Scrollspy/Fragment IDs-->
		<section class="projects">
			<h2>Recent Projects</h2>
			
			<div class="full-width">
			
				<?php
					$args = array(
						'post_type' => 'projects',
						'posts_per_page' => 3,
						'order' => 'ASC'
					);
				
					query_posts($args);
					
					$firstPosts = array();
				
					if ( have_posts() ) : while(have_posts()) : the_post();
					
						$firstPosts[] = $post->ID;
				
						$image = get_field('image');
						$size = "medium"; 
						$post_id = get_field('post_id'); ?>
				
			
						<div class="third-width">
							<div class="individual-project">
								<a href="<?php echo get_permalink($post_id); ?>"><?php echo wp_get_attachment_image($image, $size); ?></a>
					
								<div class="overlay">
					
									<h3><?php the_title(); ?></h3>
									<div>
										<a href="<?php echo get_permalink($post_id); ?>" class="description">View Description</a>
										<a href="" class="site  coming-soon">Visit Site</a>
										<p>Coming Soon!</p>
									</div>
						
								</div> <!-- overlay -->
							</div> <!-- individual-project -->
						</div> <!-- third-width -->
				
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
				
			</div> <!-- full-width -->
			
			
			
			<div class="full-width">
			
				<?php
					$args = array(
						'post_type' => 'projects',
						'post__not_in' => $firstPosts,
						'posts_per_page' => 3,
						'order' => 'ASC'
					);
				
					query_posts($args);
					
					$firstPosts = array();
				
					if ( have_posts() ) : while(have_posts()) : the_post();
					
						$firstPosts[] = $post->ID;
				
						$image = get_field('image');
						$size = 'medium'; 
						$post_id = get_field('post_id'); ?>
				
			
						<div class="third-width">
							<div class="individual-project">
								<a href="<?php echo get_permalink($post_id); ?>"><?php echo wp_get_attachment_image($image, $size); ?></a>
					
								<div class="overlay">
					
									<h3><?php the_title(); ?></h3>
									<div>
										<a href="<?php echo get_permalink($post_id); ?>" class="description">View Description</a>
										<a href="" class="site">Visit Site</a>
								
									</div>
						
								</div> <!-- overlay -->
							</div> <!-- individual-project -->
						</div> <!-- third-width -->
				
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
				
			</div> <!-- full-width -->		
		</section> <!-- projects -->
	</main>


	<section class="skills">
		<div class="full-width">
			<h2>Skills</h2>
			
			<div class="half-width">
				
				<?php
					$args = array(
						'post_type' => 'skills',
						'posts_per_page' => 2,
						'order' => 'ASC'
					);
				
					query_posts($args);
					
					$firstPosts = array();
				
					if ( have_posts() ) : while(have_posts()) : the_post();
					
						$firstPosts[] = $post->ID;
				
						$image = get_field('image_1');
						$size = "medium"; ?>
				
				
						<div class="fourth-width">
							
							<?php echo wp_get_attachment_image($image, $size); ?>
							
							<?php the_content(); ?>
							
						</div> <!-- fourth-width -->
						
				
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
	
			</div> <!-- half-width -->
			
			
			
			<div class="half-width">
				
				<?php
					$args = array(
						'post_type' => 'skills',
						'post__not_in' => $firstPosts,
						'posts_per_page' => 2,
						'order' => 'ASC'
					);
				
					query_posts($args);
					
					$firstPosts = array();
				
					if ( have_posts() ) : while(have_posts()) : the_post();
					
						$firstPosts[] = $post->ID;
				
						$image = get_field('image_1');
						$size = "medium"; ?>
				
						<div class="fourth-width">
							
							<?php echo wp_get_attachment_image($image, $size); ?>
							
							<?php the_content(); ?>
					
						</div> <!-- fourth-width -->
						
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>	
					
			</div> <!-- half-width -->
		</div> <!-- full-width -->
	</section> <!-- skills -->



	<section class="contact" id="contact" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/workspace.jpg)"> <!-- ID set for Scrollspy/Fragment IDs-->
		<div class="full-width">
			<div class="third-width">
				<div class="box" id="contact-box">
					<h3>Think we should work together?<br>I do too!</h3>
					
					<?php
						$args = array(
							'pagename' => 'home'
						);
				
						query_posts($args);
				
						if ( have_posts() ) : while(have_posts()) : the_post(); ?>
		
							<p><?php the_content(); ?></p>
		
						<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>	
				</div> <!-- box -->
			</div> <!-- third-width -->
		</div> <!-- full-width -->
	</section> <!-- contact -->
	


<?php get_footer(); ?>