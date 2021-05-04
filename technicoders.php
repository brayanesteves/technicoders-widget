<?php
    /**
     * Plugin Name: Technicoders
     * Plugin URI: http://technicoders.com
     * Description: Display Tecnicoders Plugins Example
     * Version: 0.0.1
     * Author: Brayan Esteves [Venezuela]
     * Author URI: http://tecnicoders.com
     */
    //echo 123;
    // Exit if accessed directly
    if(!defined('ABSPATH')) {
        exit;
    }
    
    //echo 123;
    // Load Scripts
    require_once(plugin_dir_path(__FILE__) . '/includes/technicoders-scripts.php');

    // Load Class
    require_once(plugin_dir_path(__FILE__) . '/includes/technicoders-class.php');

    // Register Widget
    function register_technicoders() {
        register_widget('Technicoders_Subs_Widget');
    }

    // Hook in function
    add_action('widgets_init', 'register_technicoders');
?>