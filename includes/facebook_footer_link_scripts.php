<?php

function add_scripts_and_styles(){
    wp_enqueue_style('facebook_footer_main_style', plugins_url() . '/learning_plugin_development/css/style.css');
    wp_enqueue_script('facebook_footer_main_style', plugins_url() . '/learning_plugin_development/js/app.js');
}

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');