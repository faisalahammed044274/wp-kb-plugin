<?php
class WP_KB_Shortcodes {
    public static function register() {
        add_shortcode('kb_articles', [self::class, 'render_kb_list']);
    }

    public static function render_kb_list($atts) {
        $query = new WP_Query([
            'post_type' => 'kb_article',
            'posts_per_page' => 10,
        ]);

        $output = '<ul class="kb-articles">';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        wp_reset_postdata();

        return $output . '</ul>';
    }
}
