<?php 

// Template name: Resume

get_header(); ?>

<div id="hero">

</div>

	<div class="wrapper">

	<main id="primary" class="main-site">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'widget-area-1' ); ?>
</aside><!-- #secondary -->

</div><!--end wrapper-->

<?php get_footer(); ?>
