<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'uso_service_options' );

/**
 * Initialize Titan & options here
 */
function uso_service_options() {

	$titan = TitanFramework::getInstance( 'uso_service_options' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	



// Customizer options

    $uso_service = $titan->createThemeCustomizerSection( array(
        'name' => 'Service Box Options',
        'panel' => 'Service Box',
    ) );

    $uso_service->createOption( array(
        'name' => 'Background Color',
        'id' => 'service_bg_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#f7f7f7',
        'css' => '.so-widget-service-box .service_top ,.so-widget-service-box .service_left  { background-color: value !important; }'
    ) );

    $uso_service->createOption( array(
        'name' => 'Icon Color',
        'id' => 'icon_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#FF0000',
        'css' => '.so-widget-service-box .service_top .icon,.so-widget-service-box .service_left .icon { color: value !important; }'
    ) );

    $uso_service->createOption( array(
        'name' => 'Title Color',
        'id' => 'service_title_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#444444',
        'css' => '.so-widget-service-box .content h3 {color: value !important; }'
    ) );

    $uso_service->createOption( array(
        'name' => 'Content Color',
        'id' => 'service_content_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#444444',
        'css' => '.so-widget-service-box .service_top .content, .so-widget-service-box .service_left .content {color: value !important; }'
    ) );

    $uso_service->createOption( array(
        'name' => 'Service Box Padding',
        'id' => 'service_box_padding',
        'type' => 'number',
        'desc' => '',
        'default' => '0',
        'max' => '100',
        'css' => '.so-widget-service-box .service_top ,.so-widget-service-box .service_left {padding: valuepx !important; }'
    ) );


    $uso_service->createOption( array(
        'name' => 'Border Styled',
        'id' => 'service_box_border_style',
        'type' => 'select',
        'desc' => 'Select a Border Style',
        'options' => array(
            'solid' => 'Solid',
            'dashed' => 'Dashed',
            'dotted' => 'Dotted',
        ),
        'default' => 'solid',
        'css' => '.so-widget-service-box .service_top ,.so-widget-service-box .service_left {border-style: value !important; }'
    ) );


    $uso_service->createOption( array(
        'name' => 'Service Box Border Width',
        'id' => 'service_box_border_width',
        'type' => 'number',
        'desc' => '',
        'default' => '0',
        'max' => '100',
        'css' => '.so-widget-service-box .service_top ,.so-widget-service-box .service_left {border-width: valuepx !important; }'
    ) );


    $uso_service->createOption( array(
        'name' => 'Border Color',
        'id' => 'border_color',
        'type' => 'color',
        'desc' => 'Pick a Border color',
        'default' => '#e4e4e4',
        'css' => '.so-widget-service-box .service_top ,.so-widget-service-box .service_left { border-color: value !important; }'
    ) );







}