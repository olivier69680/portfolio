<?php

add_action( 'wp_enqueue_scripts', 'oportfolio_enqueue_scripts' );

function oportfolio_enqueue_scripts() {
    wp_enqueue_style(
        'oportfolio-style',
        get_theme_file_uri( 'public/css/style.css' ),
        
        [],
        false
    );

    wp_enqueue_script(
        'oportfolio-script',
        get_theme_file_uri( '/public/js/app.js' ),
        [],
        false,
        true // In footer
    );
}