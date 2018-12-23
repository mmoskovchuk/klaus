<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <?php if (is_front_page()) : ?>
        <link rel="alternate" hreflang="x-default" href="//klaus.in.ua"/>
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

<!--PRELOADER-->
<div id="wptime-plugin-preloader"></div>
<!--HEADER-->
<header class="header" id="header">
    <div class="grid-container">


        <div class="header__grid-block">
            <div class="header__logo" id="header-logo">
                <a href="<?php echo get_home_url(); ?>">
                   KLAUS.IN.UA
                </a>
            </div>

            <div class="header__tel"><a href="tel:+380672970487">(067) 297-04-87</a></div>

            <div class="header__mail">
                <a href="mailto:sto@klaus.in.ua">sto@klaus.in.ua</a>
            </div>

            <div class="header__social-icon">
                <a rel="nofollow" href="//www.facebook.com/stoklaus/" target="_blank" title="facebook">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </a>
                <a rel="nofollow" href="//m.me/stoklaus" target="_blank" title="messenger">
                    <i class="fab fa-facebook-messenger fa-2x"></i>
                </a>
                <a rel="nofollow" href="//www.instagram.com/sto_klaus/" target="_blank" title="instagram">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </div>

            <div class="header__menu" id="nav-block">
                <input type="checkbox" id="hmt" class="hidden-menu-ticker">
                <label class="btn-menu" for="hmt">
                    <span class="first"></span>
                    <span class="second"></span>
                    <span class="third"></span>
                </label>
                <ul class="hidden-menu">
                    <nav id="nav">
                        <?php
                        $nav_args = array(
                            'theme_location' => 'nav',
                            'container' => '',
                            'depth' => 2
                        );
                        wp_nav_menu($nav_args);
                        ?>
                    </nav>
                </ul>
            </div>

        </div>
    </div>
</header>


<!--MAIN-->
<div id="main" class="main">
