<?php

/*
Widget Name: Service Box
Description: This widget displays a 'Service Box!'.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/

class Service_Box extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'service-box',
			__('Service Box', 'addon-so-widgets-bundle'),
			array(
				'description' => __('Service Box.', 'addon-so-widgets-bundle'),
                'panels_groups' => array('addonso')
			),
			array(

			),
			array(
				'widget_title' => array(
					'type' => 'text',
					'label' => __('Service world! goes here.', 'addon-so-widgets-bundle'),
					'default' => ''
				),
                'selection' => array(
                    'type' => 'radio',
                    'label' => __( 'Choose any One Icon Or Image', 'addon-so-widgets-bundle' ),
                    'default' => 'icon',
                    'options' => array(
                        'icon' => __( 'Display a Icon', 'addon-so-widgets-bundle' ),
                        'icon_image' => __( 'Display a Image', 'addon-so-widgets-bundle' ),
                    )
                ),


                'icon_selection' => array(
                    'type' => 'radio',
                    'label' => __( 'Choose an Icon Style', 'addon-so-widgets-bundle' ),
                    'default' => 'top',
                    'options' => array(
                        'top' => __( 'Icon Top', 'addon-so-widgets-bundle' ),
                        'left' => __( 'Icon Left', 'addon-so-widgets-bundle' ),
                    )
                ),


                'icon_size' => array(
                    'type' => 'slider',
                    'label' => __( 'Set icon size', 'addon-so-widgets-bundle' ),
                    'default' => 3,
                    'min' => 2,
                    'max' => 100,
                    'integer' => true
                ),

                'icon' => array(
                    'type' => 'icon',
                    'label' => __('Select an icon', 'addon-so-widgets-bundle'),
                ),


                'icon_img_width' => array(
                    'type' => 'slider',
                    'label' => __( 'Set Image Width', 'addon-so-widgets-bundle' ),
                    'default' => 3,
                    'min' => 2,
                    'max' => 100,
                    'integer' => true
                ),

                'icon_image' => array(
                    'type' => 'media',
                    'label' => __( 'Choose Image', 'addon-so-widgets-bundle' ),
                    'choose' => __( 'Choose image', 'addon-so-widgets-bundle' ),
                    'update' => __( 'Set image', 'addon-so-widgets-bundle' ),
                    'library' => 'image'
                ),





                'title' => array(
                    'type' => 'text',
                    'label' => __('Title', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),

                'content' => array(
                    'type' => 'textarea',
                    'label' => __( 'Content', 'addon-so-widgets-bundle' ),
                    'default' => '',
                    'allow_html_formatting' => true,
                    'rows' => 10
                ),

                'btn_text' => array(
                    'type' => 'text',
                    'label' => __('Button Text', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),


                'btn_url' => array(
                    'type' => 'text',
                    'label' => __('Button Url', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),


            ),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'service-box-template';
	}

	function get_style_name($instance) {
		return 'service-box-style';
	}

}


require_once( 'tpl/service-options.php' );

siteorigin_widget_register('service-box', __FILE__, 'Service_Box');