<?php
/**
 * The template for displaying the about page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<section class="services">
	<div class="site-content">
		<div class="main-services">
				<h4>Our Services</h4>
				<p>We take pride in our clients and the content we create for them.</p>
				<p>Here's a brief overview of our offered services.</p>

				<?php while ( have_posts() ) : the_post();
					$service_1 = get_field("service_1");
					$description_1 = get_field("description_1");
					$image_1 = get_field("image_1");
					$service_2 = get_field("service_2");
					$description_2 = get_field("description_2");
					$image_2 = get_field("image_2");
					$service_3 = get_field("service_3");
					$description_3 = get_field("description_3");
					$image_3 = get_field("image_3");
					$service_4 = get_field("service_4");
					$description_4 = get_field("description_4");
					$image_4 = get_field("image_4");
					$size = "thumbnail";
				?>
			
				<?php endwhile; ?>
		
		</div><!-- .main-services" -->
		
				 
	<article class="about-services">
		<div class="individual-service">
			<div class="about-image-a">
				<?php if($image_1) { ?>
					<?php echo wp_get_attachment_image($image_1, $size); ?>
				<?php } ?>
			</div>
			<div class="service-layout-a">
				<h2><?php echo $service_1; ?></h2>
				<p><?php echo $description_1; ?><p>
			</div>
		</div>
		<div class="individual-service">
			<div class="service-layout-b">
				<h2><?php echo $service_2; ?></h2>
				<p><?php echo $description_2; ?><p>
			</div>
			<div class="about-image-b">
				<?php if($image_2) { ?>
					<?php echo wp_get_attachment_image($image_2, $size); ?>
				<?php } ?>
			</div>
		</div>
		<div class="individual-service">
			<div class="about-image-a">
				<?php if($image_3) { ?>
					<?php echo wp_get_attachment_image($image_3, $size); ?>
				<?php } ?>
			</div>	
			<div class="service-layout-a">
				<h2><?php echo $service_3; ?></h2>
				<p><?php echo $description_3; ?><p>
			</div>
		</div>
		<div class="individual-service">
			<div class="service-layout-b">
				<h2><?php echo $service_4; ?></h2>
				<p><?php echo $description_4; ?></p>
			</div>
			<div class="about-image-b">
				<?php if($image_4) { ?>
					<?php echo wp_get_attachment_image($image_4, $size); ?>
				<?php } ?>
			</div>
		</div>
	</article>

		
		<div class ="services-contact-us">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
	</div><!-- .site-content -->

</section>
		

<?php get_footer(); ?>
