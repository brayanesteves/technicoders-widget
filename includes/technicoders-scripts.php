<?php
    // Add Scripts
    function tchncdrs_add_scripts() {
        // Add Main CSS
        wp_enqueue_style('tchncdrs-main-style', plugins_url() . '/technicoders/assets/css/style.css');
        // Add Main JS
        wp_enqueue_script('tchncdrs-main-script', plugins_url() . '/technicoders/assets/js/main.js');
    }
    add_action('wp_enqueue_scripts', 'tchncdrs_add_scripts');
?>