<?php
class WP_KB_Localization {
    public static function load_textdomain() {
        load_plugin_textdomain('wp-kb', false, dirname(plugin_basename(__FILE__)) . '/../languages/');
    }
}
