<?php

/*
Widget Name: Blog Style Two
Description: Blog style Two.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/

class Blog_Style_Two extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'blog-style-two',
			__('Blog Style two', 'addon-so-widgets-bundle'),
			array(
				'description' => __('Blog style two.', 'addon-so-widgets-bundle'),
                'panels_groups' => array('addonso')
			),
			array(

			),

			array(
				'widget_title' => array(
					'type' => 'text',
					'label' => __('Widget Title', 'addon-so-widgets-bundle'),
					'default' => ''
				),


                'posts' => array(
                    'type' => 'posts',
                    'label' => __('Select Posts', 'addon-so-widgets-bundle'),
                ),


                'layout' => array(
                    'type' => 'radio',
                    'label' => __( 'Choose a Layout', 'addon-so-widgets-bundle' ),
                    'default' => 'col-md-6',
                    'options' => array(
                        'col-md-6' => __( '2 Column Layout', 'widget-form-fields-text-domain' ),
                        'col-md-4' => __( '3 Column Layout', 'widget-form-fields-text-domain' ),
                        'col-md-3' => __( '4 Column Layout', 'widget-form-fields-text-domain' ),
                    )
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

	function get_template_name($instance) {
		return 'blog-style-two-template';
	}

	function get_style_name($instance) {
		return 'blog-style-two-style';
	}

}



siteorigin_widget_register('blog-style-two', __FILE__, 'Blog_Style_Two');