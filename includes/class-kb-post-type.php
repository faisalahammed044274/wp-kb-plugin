<?php
class WP_KB_Post_Type {
    public static function register() {
        register_post_type('kb_article', [
            'labels' => [
                'name' => __('Knowledge Articles', 'wp-kb'),
                'singular_name' => __('Knowledge Article', 'wp-kb'),
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'knowledge'],
            'supports' => ['title', 'editor', 'author', 'revisions'],
            'menu_icon' => 'dashicons-welcome-learn-more',
        ]);
    }
}
