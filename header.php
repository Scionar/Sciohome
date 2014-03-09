<!DOCTYPE html>
<html>
	<head>
	
		<title>Scionar.com - <?php bloginfo('name'); ?></title>
		<meta charset="utf-8" />
		
		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/logoFive.css" />
		
		<!-- Scripts -->
		<?php 
			wp_enqueue_script(
				'logoAnimation',
				get_template_directory_uri() . '/js/logoAnimation.js',
				array( 'jquery' )
			);
		?>

		<?php wp_head(); ?>
	
	</head>
	<body>
	
		<div id="content">
			<div id="logo">
				<div id="logo-five">
					<div id="logo-five-top"></div>
					<div id="logo-five-left"></div>
					<div id="logo-five-top-tooth"></div>
					<div id="logo-five-middle"></div>
					<div id="logo-five-bottom-tooth"></div>
					<div id="logo-five-right"></div>
					<div id="logo-five-bottom"></div>
					<div id="logo-five-eye"></div>
				</div>
			</div>
			
			<nav>
				<?php wp_nav_menu(array( 'menu' => 'Simple', 'container' => '' )); ?>
			</nav>
			
