<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function swira_widgets_init() {

    register_sidebar( array(
        'name' => 'Footer 1st column',
        'id' => 'footer_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer 2nd column',
        'id' => 'footer_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer 3rdst column',
        'id' => 'footer_3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'swira_widgets_init' );


function vc_remove_frontend_links() {
    vc_disable_frontend(); // this will disable frontend editor
}
add_action( 'vc_after_init', 'vc_remove_frontend_links' );

