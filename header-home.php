<?php
/**
 * Template-Part: Header-Home
 * 
 * This header is only used on the landing page.
 *
 * @package Smartphoniker
 * @since 1.0.0
 */
?>

<!-- Document Head -->
<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta charset="<?php echo bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f58225">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Roboto+Condensed:wght@700&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">

    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">

<!-- Header -->
<?php if ( carbon_get_theme_option('banner_is_enabled') ): ?>
    <header id="header" class="header">
<?php else: ?>
    <header id="header" class="header header--bannerIsHidden">
<?php endif; ?>


        <nav class="header__nav nav">


            <!-- Banner -->
            <?php
            if (carbon_get_theme_option('banner_is_enabled') == true) {
                get_template_part(
                    "template-parts/component",
                    "banner",
                    array(
                        'type' => carbon_get_theme_option('banner_type'),
                        'color' => carbon_get_theme_option('banner_color') ?? null,
                        'content' => carbon_get_theme_option('banner_text') ?? null
                    )
                );
            }
            ?>


            <!-- Logo -->
            <div class="nav__wrapper">
                <a class="nav__item logo"
                    href="<?php echo get_home_url() ?>">
                    <img class="logo__img"
                        src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo_blackorange.svg"
                        alt="Smartphoniker Logo" />
                </a>




                <!-- Navigation -->
                <?php
                $banner_is_hidden_class = carbon_get_theme_option('banner_is_enabled') ? '' : 'nav__list--bannerIsHidden'  ;
                wp_nav_menu(
                    array(
                        "menu" => "primary",
                        "container" => "",
                        "theme_location" => "primary",
                        "items_wrap" => '<ul id="nav" class="nav__list '.$banner_is_hidden_class.'">%3$s</ul>',
                    )
                );
                ?>


                <!-- Telefon-Icon -->
                <a class="nav__phone"
                    href="tel:+<?php echo carbon_get_theme_option('phone_number') ?>">
                    <img class="nav__img"
                        src="<?php echo get_template_directory_uri() ?>/assets/images/icons/phone_orangewhite.svg"
                        alt="Smartphoniker anrufen" />
                </a>


                <!-- Hamburger Menu Icon -->
                <button class="nav__menuicon menuicon" id="menuicon" aria-label="toggle_navigation">
                    <span class="menuicon__line menuicon__line--1"></span>
                    <span class="menuicon__line menuicon__line--2"></span>
                    <span class="menuicon__line menuicon__line--3"></span>
                </button>
            </div>
        </nav>
    </header>
    <main class="content">