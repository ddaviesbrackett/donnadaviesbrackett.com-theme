<?php
/*
Template Name: Blog
*/


remove_action('genesis_post_title', 'genesis_do_post_title');
add_action('genesis_post_content', 'genesis_do_post_title');




genesis();