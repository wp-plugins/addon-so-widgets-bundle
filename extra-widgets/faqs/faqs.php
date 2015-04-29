<?php

/*
Widget Name: FAQs
Description: This widget Display Faq.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/

class Faqs extends SiteOrigin_Widget
{
    function __construct()
    {

        parent::__construct(
            'faqs',
            __('Faqs', 'addon-so-widgets-bundle'),
            array(
                'description' => __('FAQs Component', 'addon-so-widgets-bundle'),
                'panels_groups' => array('addonso')
            ),
            array(),
            array(
                'widget_title' => array(
                    'type' => 'text',
                    'label' => __('Widget Title.', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),

                'posts' => array(
                    'type' => 'posts',
                    'label' => __('Select FAQs', 'addon-so-widgets-bundle'),
                ),

                'custom_class' => array(
                    'type' => 'text',
                    'label' => __('Custom Class', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),



            ),
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance)
    {
        return 'faqs-template';
    }

    function get_style_name($instance)
    {
        return 'faqs-style';
    }

}


function faq() {
    $labels = array(
        'name'               => _x( 'Faq', 'post type general name' ),
        'singular_name'      => _x( 'Faq', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Faq' ),
        'add_new_item'       => __( 'Add New Faq' ),
        'edit_item'          => __( 'Edit Faq' ),
        'new_item'           => __( 'New Faq' ),
        'all_items'          => __( 'All Faqs' ),
        'view_item'          => __( 'View Faq' ),
        'search_items'       => __( 'Search Faq' ),
        'not_found'          => __( 'No Faq found' ),
        'not_found_in_trash' => __( 'No Faq found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Faq'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our products and product specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'faq', $args );
}
add_action( 'init', 'faq' );





siteorigin_widget_register('faqs', __FILE__, 'Faqs');