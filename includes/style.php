<?php

namespace BrInFoFo\Style;

function enqueue_style() {
    wp_register_style( 'brinfofo_style', plugins_url( '../css/brinfofo.css', __FILE__ ) );
    wp_enqueue_style( 'brinfofo_style' );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style' );
