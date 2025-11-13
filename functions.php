<?php

/**
 * Funzione di setup del tema.
 *
 * Questa funzione viene eseguita sull'hook 'after_setup_theme'.
 * È il posto corretto per aggiungere supporti al tema come 'title-tag',
 * 'post-thumbnails', menu di navigazione, ecc.
 */
if ( ! function_exists( 'theme_setup' ) ) {
    function theme_setup() {
        /*
         * Esempi di setup del tema:
         * add_theme_support( 'title-tag' );
         * add_theme_support( 'post-thumbnails' );
         * register_nav_menus( array(
         * 'primary' => __( 'Primary Menu', 'nome-del-tuo-tema' ),
         * ) );
         */
    }
}
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Carica script e stili del tema.
 *
 * Unisce la logica di 'main_styles' e 'main_scripts' in un'unica
 * funzione collegata all'hook corretto 'wp_enqueue_scripts'.
 */
function theme_assets() {
    // Carica lo stile principale
    wp_enqueue_style(
        'theme-style', // È buona prassi usare un handle più specifico di 'style'
        get_template_directory_uri() . '/style.css'
    );

    // Registra lo stile di Slick
    wp_register_style(
        'slick',
        get_stylesheet_directory_uri() . '/assets/packages/slick-1.8.1/slick/slick.css',
        array(),
        '1.8.1'
    );

    // Registra lo script di Slick
    wp_register_script(
        'slick',
        get_stylesheet_directory_uri() . '/assets/packages/slick-1.8.1/slick/slick.min.js',
        array( 'jquery' ), // Dipendenza corretta
        '1.8.1',
        true // Carica nel footer
    );

    // Registra lo script del carosello
    // NOTA: 'main' non era registrato. Forse intendevi 'jquery' e 'slick'?
    // Ho messo 'slick' come dipendenza. Se 'main' è un altro tuo script,
    // assicurati di registrarlo prima (come fatto per 'slick').
    wp_register_script(
        'carosello-hero-img',
        get_stylesheet_directory_uri() . '/blocks/carosello-hero-img/carosello-hero-img.js',
        array( 'jquery', 'slick' ), // Dipende da jQuery e Slick
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );


/**
 * Registra i blocchi ACF personalizzati.
 *
 * Questa parte era quasi corretta, ma va tenuta separata
 * dalla logica di setup del tema.
 */
if ( class_exists( 'acf' ) ) {
    function register_acf_blocks() {
        register_block_type( __DIR__ . '/blocks/carosello-hero-img' );
    }
    add_action( 'init', 'register_acf_blocks' );
}