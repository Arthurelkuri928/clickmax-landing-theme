<?php
function astro_vault_enqueue_scripts() {
    wp_enqueue_style('astro-style', get_template_directory_uri() . '/dist/style.css');
    wp_enqueue_script('astro-script', get_template_directory_uri() . '/dist/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'astro_vault_enqueue_scripts');
