<?php
/**
 * Template Name: Homepage
 * For the homepage
 *
 * @package Elocue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="splash">
					<section class="container">
						<h1 class="logo-img"><?php bloginfo( 'name' ); ?></h1>
						<h1 class="title"><?php the_field('splash-header'); ?></h1>
						<p><?php the_field('splash-text'); ?></p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>sign-up">
							<div class="link-btn white">Sign Up</div>
						</a>
					</section>
				</section>

				<section class="about">
					<section class="container">
						<h1 class="title"><?php the_field('about-header'); ?></h1>
						<p><?php the_field('about-text'); ?></p>
						<div class="row">
							<div class="col-md-3 about-box">
								<div class="box-title"><?php the_field('about-box1-title') ?></div>
								<span class="box-text"><?php the_field('about-box1-text') ?></span>
							</div>
							<div class="col-md-3 about-box">
								<div class="box-title"><?php the_field('about-box2-title') ?></div>
								<span class="box-text"><?php the_field('about-box2-text') ?></span>
							</div>
							<div class="col-md-3 about-box">
								<div class="box-title"><?php the_field('about-box3-title') ?></div>
								<span class="box-text"><?php the_field('about-box3-text') ?></span>
							</div>
							<div class="col-md-3 about-box">
								<div class="box-title"><?php the_field('about-box4-title') ?></div>
								<span class="box-text"><?php the_field('about-box4-text') ?></span>
							</div>
							<div class="col-md-3 about-box">
								<div class="box-title"><?php the_field('about-box5-title') ?></div>
								<span class="box-text"><?php the_field('about-box5-text') ?></span>
							</div>
						</div>
					</section>
				</section>

				<section class="preview">
					<section class="container">
						<div class="row" style="margin-bottom: 100px">
							<div class="col-md-7">
								<div class="features-img"></div>
							</div>
							<div class="col-md-8">
								<h2 class="title"><?php the_field('features-title'); ?></h2>
								<p class="text"><?php the_field('features-text'); ?></p>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>features">
									<div class="link-btn black">Features</div>
								</a>
							</div>
						</div>

						<div class="row" style="margin-bottom: 100px">
							<div class="col-md-8">
								<h2 class="title"><?php the_field('trust-us-title'); ?></h2>
								<p class="text"><?php the_field('trust-us-text'); ?></p>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>trust-us">
									<div class="link-btn black">Trust Us</div>
								</a>
							</div>
							<div class="col-md-7">
								<div class="trust-us-img"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-7">
								<div class="trust-us-img"></div>
							</div>
							<div class="col-md-8">
								<h2 class="title"><?php the_field('meet-us-title'); ?></h2>
								<p class="text"><?php the_field('meet-us-text'); ?></p>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>meet-us">
									<div class="link-btn black">Meet Us</div>
								</a>
							</div>
						</div>
					</section>
				</section>

				<section class="signup">
					<section class="container">
						<div class="meet-us-img"></div>
						<h2 class="title"><?php the_field('meet-us-title'); ?></h2>
						<p class="text"><?php the_field('meet-us-text'); ?></p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>sign-up">
							<div class="link-btn">Sign Up</div>
						</a>
					</section>
				</section>

				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
