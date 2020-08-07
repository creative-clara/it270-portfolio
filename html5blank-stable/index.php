<?php get_header(); ?>
<!-- WRAPPER -->
<div class="wrapper">


	<main role="main" class="main-site">
		<!-- section -->
		<section>

			<h2 class="blog"><?php _e( 'Clara\'s Latest Posts', 'html5blank' ); ?></h2>

			<?php get_template_part('loop'); ?>
	<br>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
	

	<aside id="secondary" class="widget-area">
		<div class="sidebar-widget">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</aside><!-- #secondary -->

<?php get_footer(); ?>
