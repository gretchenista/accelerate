<?php
/**
 * The template for displaying all pages
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

<link href="https://fonts.googleapis.com/css?family=Londrina+Solid:400,900" rel="stylesheet">

<div id="primary" class="site-content">
	<section class="error-page">
		<h1>404: Hey, buddy! Where is your mind?</h1>
		<img src="http://localhost:8888/accelerate/wp-content/uploads/2018/02/my-mind.jpg" alt="Where is my mind?" />
		<p>This page either moved or never existed. Check the website address and try again!</p>
		<p>Hope your mind comes back soon!</p>
	</section>
</div>

<?php get_footer(); ?>