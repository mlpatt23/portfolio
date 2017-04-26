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






	


<?php get_footer(); ?>