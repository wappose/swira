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

# filter_hook function to react on start_in argument
function swira_wp_nav_menu_objects_start_in( $sorted_menu_items, $args ) {
    if(isset($args->start_in)) {
        $menu_item_parents = array();
        foreach( $sorted_menu_items as $key => $item ) {
            // init menu_item_parents
            if( $item->object_id == (int)$args->start_in ) $menu_item_parents[] = $item->ID;

            if( in_array($item->menu_item_parent, $menu_item_parents) ) {
                // part of sub-tree: keep!
                $menu_item_parents[] = $item->ID;
            } else {
                // not part of sub-tree: away with it!
                unset($sorted_menu_items[$key]);
            }
        }
        return $sorted_menu_items;
    } else {
        return $sorted_menu_items;
    }
}

add_filter("wp_nav_menu_objects",'swira_wp_nav_menu_objects_start_in',10,2);

/*
wp_nav_menu( array(
    'theme_location' => '<name of your menu>',
    'start_in' => $ID_of_page,
    'container' => false,
    'items_wrap' => '%3$s'
) );
*/
