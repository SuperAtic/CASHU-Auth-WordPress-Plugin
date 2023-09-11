<?php

/**
* Plugin Name: CASHU Login Plugin
* Plugin URI: https://github.com/SuperAtic/CASHU-Auth-WordPress-Plugin
 * Description: A WordPress plugin to allow users to login/signup using CASHU tokens.
 * Version: 0.1.0
 * Author: CASHU Team
 * Author URI: https://Cashu.Space
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/cashu-functions.php';
require_once plugin_dir_path(__FILE__) . 'includes/cashu-init.php';

// Add actions and filters
add_action('login_form', 'display_cashu_login_button');

function display_cashu_login_button() {
    include plugin_dir_path(__FILE__) . 'templates/login-button.php';
}

?>
