<?php  

// PÁGINA BLOG
if (get_page_by_title('Blog') === NULL) {
    $post = array(
        'post_name' => 'blog',
        'post_status' => 'publish',
        'post_title' => 'Blog',
        'post_type' => 'page',
        'post_slug' => 'blog'
    );
    //insert page and save the id
    $newvalue = wp_insert_post($post, false);
    //save the id in the database
    update_option('movpage', $newvalue);
}
// PÁGINA BLOG
if (get_page_by_title('Blogs') === NULL) {
    $post = array(
        'post_name' => 'blogs',
        'post_status' => 'publish',
        'post_title' => 'Blogs',
        'post_type' => 'page',
        'post_slug' => 'blogs'
    );
    //insert page and save the id
    $newvalue = wp_insert_post($post, false);
    //save the id in the database
    update_option('movpage', $newvalue);
}
// PÁGINA LADING PAGE
if (get_page_by_title('Landing Page') === NULL) {
    $post = array(
        'post_name' => 'landing-page',
        'post_status' => 'publish',
        'post_title' => 'Landing Page',
        'post_type' => 'page',
        'post_slug' => 'landing-page'
    );
    //insert page and save the id
    $newvalue = wp_insert_post($post, false);
    //save the id in the database
    update_option('movpage', $newvalue);
}
// PÁGINA WEBSITE
if (get_page_by_title('Website') === NULL) {
    $post = array(
        'post_name' => 'website',
        'post_status' => 'publish',
        'post_title' => 'Website',
        'post_type' => 'page',
        'post_slug' => 'website'
    );
    //insert page and save the id
    $newvalue = wp_insert_post($post, false);
    //save the id in the database
    update_option('movpage', $newvalue);
}


// UPLOAD MAX
@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'max_execution_time', '300' );

// Supports
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 398, 325 );

?>