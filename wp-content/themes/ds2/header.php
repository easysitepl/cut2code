<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/holder.js"></script>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="mainheader">
	
		<section class="left">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
		</section><!--/left-->
		
		<section class="right">
		
			<div class="icons">
				<a href="#" class="circle">
					<div class="ico-facebook"></div>
				</a><!--/circle-->
				<a href="#" class="circle">
					<div class="ico-tweeter"></div>
				</a><!--/circle-->
				<a href="#" class="circle">
					<div class="ico-rss"></div>
				</a><!--/circle-->
				<a href="#" class="circle">
					<div class="ico-mail"></div>
				</a><!--/circle-->				
			</div><!--/icons-->
			
			<div class="clr"></div>
			
			<p>call now: 000 111 222 333</p>
			
		</section><!--right-->
		
		<div class="clr"></div>
		
	</header><!--/mainheader-->
	
	<nav id="mainmenu">
	
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		
		<div class="clr"></div>
		
	</nav><!--/mainmenu-->