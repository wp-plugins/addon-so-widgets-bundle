<?php

/*
Widget Name: Toggles
Description: This widget Display Toggle.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/

class Toggles extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'toggles',
			__('Toggle', 'addon-so-widgets-bundle'),
			array(
				'description' => __('Toggle Component.', 'addon-so-widgets-bundle'),
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


                'toggle_repeater' => array(
                    'type' => 'repeater',
                    'label' => __( 'Toggles' , 'addon-so-widgets-bundle' ),
                    'item_name'  => __( 'Toggle', 'addon-so-widgets-bundle' ),
                    'item_label' => array(
                        'selector'     => "[id*='repeat_text']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(

                        'toggle_title' => array(
                            'type' => 'text',
                            'label' => __('Toggle Title', 'addon-so-widgets-bundle'),
                            'default' => ''
                        ),


                        'toggle_content' => array(
                            'type' => 'textarea',
                            'label' => __( 'Toggle Content', 'addon-so-widgets-bundle' ),
                            'default' => '',
                            'allow_html_formatting' => true,
                            'rows' => 10
                        ),


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
		return 'toggles-template';
	}

	function get_style_name($instance) {
		return 'toggles-style';
	}

}

require_once( 'tpl/toggle-options.php' );

siteorigin_widget_register('toggles', __FILE__, 'Toggles');