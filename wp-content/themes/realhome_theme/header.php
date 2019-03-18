<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<header>
    <div class="menu_header">
        <div class="img-h">
	        <img class="logo" src="<?php echo bloginfo('template_url'); ?>/images/images-home/logo-1"  alt="logo">
        </div>
        <div class="menu-nav">
            <?php  wp_nav_menu(array( 'theme_location' => 'menu-principal')); ?>
        </div>
    <div class="menu_socialnetwork">
        <?php  wp_nav_menu(array( 'theme_location' => 'menu-secondaire')); ?>
    </div>
    </div>



</header>
