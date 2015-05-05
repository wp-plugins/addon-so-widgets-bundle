<?php

/*
Widget Name: Blog Style One
Description: Blog style One.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/

class Blog_Style_One extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'blog-style-one',
			__('Blog Style One', 'blog-style-one-text-domain'),
			array(
				'description' => __('Blog style One.', 'addon-so-widgets-bundle'),
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
		return 'blog-style-one-template';
	}

	function get_style_name($instance) {
		return 'blog-style-one-style';
	}

}

require_once( '/tpl/blog-style-one-options.php' );


siteorigin_widget_register('blog-style-one', __FILE__, 'Blog_Style_One');