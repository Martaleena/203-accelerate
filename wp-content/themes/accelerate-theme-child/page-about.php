<?php
/**
 * About Page Template
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->
	<section class="about-services">
		<div class="about-services-content">
			<h4> Our Services </h4>
			<p> We take pride in our clients and the content we create for them.</br> Here's a brief overview of our offered services. </p>
			
				<ul class="about-page-services">
				<?php query_posts('posts_per_page=4&post_type=services'); ?>
					<?php while ( have_posts() ) : the_post();
					$image_1 = get_field("image_1");
					$size = "medium";
					$service_desc = get_field("service_desc") ;
					?>
					
					<li class="service-offering">
						<div class="about-img">
							<figure>
								<?php echo wp_get_attachment_image($image_1, $size); ?>
							</figure>
						</div>
						<div class="about-text">
							<h3> <?php the_title(); ?></h3>
							<p> <?php echo $service_desc; ?> </p>
						</div>
					</li>
					
					<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
				</ul>
		</div>
	</section>
	<nav id="navigation" class="container">
	<div class="center"><span>Interested in working with us?</span><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
	</nav>
<?php get_footer(); ?>