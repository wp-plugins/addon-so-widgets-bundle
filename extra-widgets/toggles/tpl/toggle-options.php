<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'uso_toggle_options' );

/**
 * Initialize Titan & options here
 */
function uso_toggle_options() {

	$titan = TitanFramework::getInstance( 'uso_toggle_options' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	



// Customizer options

    $uso_toggle = $titan->createThemeCustomizerSection( array(
        'name' => 'Toggle Options',
        'panel' => 'Toggle',
    ) );

    $uso_toggle->createOption( array(
        'name' => 'Title Color',
        'id' => 'toggle_bg_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-toggles .accordion a{ color: value !important; }'
    ) );

    $uso_toggle->createOption( array(
        'name' => 'Content Color',
        'id' => 'toggle_content_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-toggles .accordion p{ color: value !important; }'
    ) );






}