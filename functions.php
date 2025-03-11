<?php
// Enqueue styles
function ad_creatives_theme_scripts() {
    wp_enqueue_style('ad-creatives-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ad_creatives_theme_scripts');
?>
