<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'widgets_options' );

/**
 * Initialize Titan & options here
 */
function widgets_options() {

	$titan = TitanFramework::getInstance( 'widgets_options' );
	



// Customizer options

    $uwidgets_options = $titan->createThemeCustomizerSection( array(
        'name' => 'General Settings',
        'panel' => 'Ultimate Addon For SO Settings ',
    ) );

    $uwidgets_options->createOption( array(
        'name' => 'Widgets Background Color',
        'id' => 'widgets_bg_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#ffffff',
        'css' => '.panel-grid .widget { background-color: value !important; }'
    ) );

    $uwidgets_options->createOption( array(
        'name' => 'Widgets Padding',
        'id' => 'widgets_padding',
        'type' => 'number',
        'desc' => 'Adjust padding around widgets',
        'default' => '',
        'min' => '1',
        'max' => '100',
        'css' => '.panel-grid .widget { padding: valuepx !important; }'
    ) );





}