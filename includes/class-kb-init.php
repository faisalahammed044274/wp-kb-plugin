<?php
class WP_KB_Init {
    public static function init() {
        // Load classes
        require_once WPKB_PATH . 'includes/class-kb-post-type.php';
        require_once WPKB_PATH . 'includes/class-kb-taxonomies.php';
        require_once WPKB_PATH . 'includes/class-kb-shortcodes.php';
        require_once WPKB_PATH . 'includes/class-kb-localization.php';

        // Delay CPT and tax registration to avoid rewrite error
        add_action('init', ['WP_KB_Post_Type', 'register']);
        add_action('init', ['WP_KB_Taxonomies', 'register']);
        add_action('init', ['WP_KB_Shortcodes', 'register']);

        // Localization can still load early
        WP_KB_Localization::load_textdomain();
    }
}
