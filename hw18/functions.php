<?php

//Style file
function myWordPress_resources() {
    wp_enqueue_style(
        'main',
        get_template_directory_uri() . '/css/main.css'
    );
}
add_action('wp_enqueue_scripts', 'myWordPress_resources');

//don't show admin-bar
show_admin_bar(false);


//Class for next, prev page
add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="next-post"';
}
function posts_link_attributes_2() {
    return 'class="prev-post"';
}


//Theme setup
function wordPress_setup() {

    //Navigation Menus
    register_nav_menus(array(
        'primary'=> __('Primary Menu'),
        'footer'=> __('Footer Menu'),
    ));

    //featured image
    add_theme_support('post-thumbnails');
}

add_action ('after_setup_theme','wordPress_setup');
