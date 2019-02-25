<?php
/**
 * The template for displaying the 404 page.
 *
 * This is the template that displays the 404 page.
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
			<div class="error-page">
				<h2>404</h2>
				<h4> Slow your roll... </h4>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404-slow-your-roll.jpg" alt="Slow Your Roll"/>
				<h4><span>that page cannot be found.</span></h4>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
