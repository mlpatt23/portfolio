<?php 
/*
* The template for displaying single projects
*/

get_header(); ?>

	<section class="single-project">
		<div class="full-width">
			
			<?php if ( have_posts() ) : 
				while(have_posts()) : the_post();


					$image = get_field('image');
					$size = "full";
					$post_id = get_field('post_id'); ?>
			
			
					<div class="half-width">
						<a href="" target="_blank"><?php echo wp_get_attachment_image($image, $size); ?></a>
					</div> <!-- half-width -->
			
					<div class="half-width">
						<h2><?php the_title(); ?></h2>
				
						<?php the_content(); ?>
					</div> <!-- half-width -->
			
			
				<?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
			
		</div> <!-- full-width -->
	</section> <!-- single-project -->

<?php get_footer(); ?>