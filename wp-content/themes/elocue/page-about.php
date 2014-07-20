<?php
/**
 * Template Name: About
 * For the about page
 *
 * @package Elocue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="about-intro">
					<section class="container">
						<h1 class="title"><?php the_field('about-intro-header'); ?></h1>
						<p><?php the_field('about-intro-text'); ?></p>
					</section>
				</section>

				<section class="about-trustus">
					<section class="container">
						<h1 class="title"><?php the_field('trustus-header'); ?></h1>
						<p><?php the_field('trustus-text'); ?></p>
					</section>
				</section>

				<section class="about-meet">
					<section class="container">
						<h1 class="title"><?php the_field('meet-header'); ?></h1>
					</section>
				</section>

				<section class="signup">
					<section class="container">
						<div class="mail-img"></div>
						<h2 class="title"><?php the_field('contact-header'); ?></h1>
						<p class="text"><?php the_field('contact-text'); ?></p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>sign-up">
							<div class="link-btn">Sign Up</div>
						</a>
					</section>
				</section>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
