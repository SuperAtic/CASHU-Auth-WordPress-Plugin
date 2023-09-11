<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Include the CASHU-TS library (assuming it's available as a Composer package)
require_once plugin_dir_path(__FILE__) . '../vendor/autoload.php';

// Initialize global variables or settings for the plugin
// For example, you can set API keys, endpoints, or other configurations here

define('CASHU_API_KEY', 'your_api_key_here');
define('CASHU_ENDPOINT', 'https://api.cashu.com');

// Any other setup or initialization logic specific to the CASHU-TS library can be added here

?>
