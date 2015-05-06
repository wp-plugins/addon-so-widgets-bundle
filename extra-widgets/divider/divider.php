<?php

/*
Widget Name: Divider
Description: Divider.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/

class Divider extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'divider',
			__('Divider', 'addon-so-widgets-bundle'),
			array(
				'description' => __('Divider .', 'addon-so-widgets-bundle'),
                'panels_groups' => array('addonso')
			),
			array(

			),
			array(
                'widget_title' => array(
                    'type' => 'text',
                    'label' => __('Widget Title.', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),

                'divider_style' => array(
                    'type' => 'select',
                    'label' => __( 'Style', 'addon-so-widgets-bundle' ),
                    'default' => 'solid',
                    'options' => array(
                        'solid' => __( 'Solid', 'addon-so-widgets-bundle' ),
                        'double' => __( 'Double', 'addon-so-widgets-bundle' ),
                        'dashed' => __( 'Dashed', 'addon-so-widgets-bundle' ),
                        'dotted' => __( 'Dotted', 'addon-so-widgets-bundle' ),
                    )
                ),

                'border_width' => array(
                    'type' => 'number',
                    'label' => __( 'Border Width', 'addon-so-widgets-bundle' ),
                    'default' => '5'
                ),

                'divider_color' => array(
                    'type' => 'color',
                    'label' => __( 'Divder color', 'addon-so-widgets-bundle' ),
                    'default' => '#ccc'
                ),

                'margin_top' => array(
                    'type' => 'number',
                    'label' => __( 'Top Margin', 'addon-so-widgets-bundle' ),
                    'default' => ''
                ),

                'margin_bottom' => array(
                    'type' => 'number',
                    'label' => __( 'Bottom Margin', 'addon-so-widgets-bundle' ),
                    'default' => ''
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
		return 'divider-template';
	}

	function get_style_name($instance) {
		return 'divider-style';
	}

}

siteorigin_widget_register('divider', __FILE__, 'Divider');