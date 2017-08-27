<?php
/*
    Custom Functions
*/
// function wpb_adding_scripts() {
//     wp_register_script('app.js', get_template_directory_uri() . '/js/app.js', true);
//     wp_register_script('main-ctrl.js', get_template_directory_uri() . '/js/ctrls/main-ctrl.js', true);
//     wp_register_script('service.js', get_template_directory_uri() . '/js/service.js', true);
//     wp_enqueue_script('app.js');
//     wp_enqueue_script('main-ctrl.js');
//     wp_enqueue_script('service.js');
//     }
     
//     add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  


function test_ajax() {
    header( "Content-Type: application/json" );
    $posts_array = get_posts();
    echo json_encode($posts_array);
    die();
}
add_action("wp_ajax_nopriv_test_ajax", "test_ajax");
add_action("wp_ajax_test_ajax", "test_ajax");