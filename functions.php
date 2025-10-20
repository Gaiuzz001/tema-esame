<?php
if ( ! function_exists( 'theme_setup' ) ) {
    function theme_setup() {
        function main_styles() {
            wp_enqueue_style(
                'style',
                get_template_directory_uri() . '/style.css'
            );
        }
        add_action( 'wp_enqueue_scripts', 'main_styles' );
         }
        add_action( 'after_setup_theme', 'theme_setup' );
}
