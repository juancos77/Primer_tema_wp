<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name') ?> | <?php bloginfo('description') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i|Ubuntu:300,300i,700,700i" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>

	<header id="main-header">
		<h1><?php bloginfo('name') ?></h1>	
	</header><!-- #main-header -->
	
	<nav id="main-navbar">
		<?php wp_nav_menu(array('theme_location' => 'principal')); ?>
	</nav><!-- #main-navbar -->
	
	<div id="main-container">