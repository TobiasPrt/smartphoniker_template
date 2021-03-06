<?php
/**
 * After Theme Setup.
 * 
 * @package Smartphoniker
 * @since 1.0.0
 */
add_action( 'after_setup_theme', 'smartphoniker_setup' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 * 
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. It is generally used to perform basic setup, 
 * registration, and init actions for a theme.
 * @link https://developer.wordpress.org/reference/hooks/after_setup_theme/
 *
 * @since 1.0.0
 */
function smartphoniker_setup() {
    /*
     * This theme uses wp_nav_menu() for the primary navigation 
     * as well as for two secondary navigations in the footer.
     */
    register_nav_menus( 
        array(
            'primary'      => 'Main Navigation',
            'footer_links' => 'Footer Hilfreiche Links',
            'footer_legal' => 'Footer Informationen',
        )
    );

    /**
     * Add support for custom styles for Gutenberg editor.
     */
    add_theme_support( 'editor-styles' );
    add_theme_support( 'title-tag' );
    add_editor_style( 'editor-styles.css' );
}