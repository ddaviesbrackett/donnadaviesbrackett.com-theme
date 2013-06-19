<?php
/*
Template Name: Home
*/
remove_action('genesis_after_content','genesis_get_sidebar');
add_action('genesis_after_content','get_homepage_sidebar');
function get_homepage_sidebar() {
    get_sidebar('home');
}
add_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
genesis();
