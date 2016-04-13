<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">	
	
	<script src="<?php echo bloginfo('template_url') . '/js' . '/jquery-latest.min.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_url') . '/js' . '/jquery.slides.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_url') . '/js' . '/main.js'; ?>"></script>


	<title><?php wp_title('-', true, 'right'); bloginfo(); ?></title>
</head>
<body class="container">
	
	<div class="page-header">
		<ul class="lista">
			<li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<?php wp_list_pages('title_li=&sort_column=post_title&sort_order=desc;include=5'); ?>
		</ul>
	</div>


	<div class="row">
		<div class="col-md-4">
			<img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Elite Fortaleza">
		</div>
		<div class="col-md-8">
			<div id="slides">
				<img src="<?php bloginfo('template_url'); ?>/img/baner.jpg">
				<img src="<?php bloginfo('template_url'); ?>/img/baner1.jpg">
				<img src="<?php bloginfo('template_url'); ?>/img/baner2.jpg">
				<img src="<?php bloginfo('template_url'); ?>/img/baner3.jpg">
			</div>
		</div>
	</div>

	


