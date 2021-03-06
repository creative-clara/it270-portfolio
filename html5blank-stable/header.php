<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
				<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class( ! is_front_page() ? "inner-page": ""); ?>>

		<!-- wrapper -->


			<!-- header -->
<header class="header clear" role="banner">

<div class="top-row">

	<div class="inner">
<?php get_template_part('searchform'); ?>
	</div>
</div>

	<!-- <div class="inner"> -->
					<!-- logo -->
					<!-- <div class="logo"> -->
						<!-- <a href="<?php echo home_url(); ?>"> -->
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" class="logo-img"> -->
						<!-- </a> -->
					<!-- </div> -->
					<!-- /logo -->

					<!-- nav -->
					<div class="inner">
					<nav class="nav" role="navigation">
					<button class="nav-button">Toggle Navigation</button>
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
</div><!--end inner-->

			</header>
			<!-- /header -->