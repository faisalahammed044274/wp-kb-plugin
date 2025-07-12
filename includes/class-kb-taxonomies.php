<?php
class WP_KB_Taxonomies {
    public static function register() {
        register_taxonomy('kb_category', 'kb_article', [
            'label' => __('Categories', 'wp-kb'),
            'hierarchical' => true,
        ]);

        register_taxonomy('kb_tag', 'kb_article', [
            'label' => __('Tags', 'wp-kb'),
            'hierarchical' => false,
        ]);
    }
}
