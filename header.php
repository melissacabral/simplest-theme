<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="path/to/css/reset.css" media="screen" />

	<?php wp_head(); //hook. required for plugins to work ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />

<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="home">
	<header>
		<h1><a href="path/to/index.php"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		
		<?php get_search_form(); ?>

		<?php 
		//show the login form if the user is NOT logged in
		if( !is_user_logged_in() ):
			wp_login_form();
		endif; ?>
		
		<nav>
			<ul class="nav">
				<?php wp_list_pages( array(
					'depth' => 1,
					'title_li' => '',
				) ); ?>
			</ul>
		</nav>
	</header>