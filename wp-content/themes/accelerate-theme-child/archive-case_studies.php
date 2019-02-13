<?php
/**
 * The template for displaying the archive page for case studies.
 *
 * This is the template that displays the archive page for case studies.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			$services = get_field('services');
			$image_1 = get_field('image_1');
			$size = "full";
	
			?>
			
		<article class="case-study-archive">
			<aside class="case-study-archive-sidebar">
				<h2><a href="<?php get_permalink(); ?>"><?php the_title(); ?></a> </h2>
				<h4> <?php echo $services; ?> </h4>
				<?php the_excerpt(); ?>
				
				<p class="read-more-link"><strong><a href="<?php get_permalink(); ?>"> View Project > </a></strong></p>	
			</aside>
				
			<div class="case-study-images">
				<a href="<?php get_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size );?></a>
			</div>
		</article>

			<?php endwhile; // end of the loop. ?>
		
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>