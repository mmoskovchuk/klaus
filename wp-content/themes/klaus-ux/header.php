<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <?php if (is_front_page()) : ?>
        <link rel="alternate" hreflang="x-default" href="//ies.nau.edu.ua"/>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<?php
$url = explode('?', $_SERVER['REQUEST_URI']);
$url_rm_slash = substr($url[0], strripos($url[0], '/') + 1);
$current_page = $url_rm_slash ? $url_rm_slash : 'home';
$additional_body_class = 'page-' . $current_page;
?>

<body <?php body_class($additional_body_class); ?>>

<div id="wptime-plugin-preloader"></div>

<!--HEADER-->
<header class="header" id="header">
    <div class="container">



            <div class="col-lg-7 col-md-2 col-sm-1 col-xs-2 header__left-block">
                <div class="mobile_nav" id="mobile-nav"></div>
                <nav class="header__menu" id="nav">
                    <?php
                    $nav_args = array(
                        'theme_location' => 'nav',
                        'container' => '',
                        'depth' => 2
                    );
                    wp_nav_menu($nav_args);
                    ?>
                </nav>
            </div>

            <div class="col-lg-5 col-md-10 col-sm-11 col-xs-10 header__right-block">

                <div class="header__search">
                    <?php get_search_form(); ?>
                    <ul class="ajax-search"></ul>
                </div>
                <div class="header__social-icon">
                    <a rel="nofollow" href="//www.facebook.com/groups/ies.nau.edu.ua/" target="_blank">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <a rel="nofollow" href="//m.me/162316441371731" target="_blank">
                        <i class="fab fa-facebook-messenger fa-2x"></i>
                    </a>
                    <a rel="nofollow" href="//www.instagram.com/ies_nau/" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </div>

            </div>

    </div>
</header>

<!--MAIN-->
<div id="main" class="main">
