<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'uso_tabs_options' );

/**
 * Initialize Titan & options here
 */
function uso_tabs_options() {

	$titan = TitanFramework::getInstance( 'uso_tabs_options' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	



// Customizer options

    $uso_tabs = $titan->createThemeCustomizerSection( array(
        'name' => 'Tabs Options',
        'panel' => 'Tabs',
    ) );

    $uso_tabs->createOption( array(
        'name' => 'Background Color',
        'id' => 'tabs_bg_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#eee',
        'css' => '.so-widget-tabs .vertical,.so-widget-tabs .tab  { background-color: value !important; }'
    ) );


    $uso_tabs->createOption( array(
        'name' => 'Inactive Tab Color',
        'id' => 'inactive_tab_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#888',
        'css' => '.so-widget-tabs .tabs a{color: value !important; }'
    ) );

    $uso_tabs->createOption( array(
        'name' => 'Active Tab Color',
        'id' => 'active_tab_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#888',
        'css' => '.so-widget-tabs .current a{color: value !important; }'
    ) );

    $uso_tabs->createOption( array(
        'name' => 'Tab Content Color',
        'id' => 'tab_content_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#888',
        'css' => '.so-widget-tabs .tab_content .tabs_item {color: value !important; }'
    ) );





}