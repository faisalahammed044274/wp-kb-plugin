<?php
/**
 * Plugin Name: WP Knowledge Base
 * Description: A lightweight OOP knowledge base plugin.
 * Version: 1.0
 * Author: Faisal Ahammed 044274
 * Author URI: https://github.com/faisalahammed044274
 * License: GPL2
 */

if (!defined('ABSPATH')) exit;

define('WPKB_PATH', plugin_dir_path(__FILE__));
define('WPKB_URL', plugin_dir_url(__FILE__));

require_once WPKB_PATH . 'includes/class-kb-init.php';

add_action('plugins_loaded', ['WP_KB_Init', 'init']);
