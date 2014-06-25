<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' );?></title>
    <!--[if IE]>
    <link href="css/ie.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="js/ie.js"></script>
    <![endif]-->
    <?php if(defined('LIVE_RELOAD')): ?>

        <script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
    <header id="header">
        <div class="holder">
            <div class="header-top">
                <div class="login-area">
                    <em class="tel"><?php the_field( 'phone_number', 'option' ); ?></em>
                    <?php
                    $menu = array (
                        'theme_location' => 'top-right-menu',
                        'container' => null,
                    );
                    wp_nav_menu( $menu )
                    ?>
                </div>
                <?php include('includes/inc-weather.php'); ?>
            </div>
            <div class="logo-area">
                <strong class="logo"><a href="/">AMIDO</a></strong>
            </div>
            <nav class="nav popup-holder">
                <a href="#" class="open">Menu</a>
                <div class="popup">
                    <?php
                    $nav_menu = array (
                        'theme_location' => 'primary-menu',
                        'container' => null,
                        'menu_id' => 'nav'
                    );
                    wp_nav_menu( $nav_menu )
                    ?>
                    <?php
                    $nav_menu = array (
                        'theme_location' => 'primary-menu-mobile',
                        'container' => null,
                        'menu_class' => 'nav-mobile',
                    );
                    wp_nav_menu( $nav_menu )
                    ?>
                </div>
            </nav>
        </div>
    </header>