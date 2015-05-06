<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'uso_faqs_options' );

/**
 * Initialize Titan & options here
 */
function uso_faqs_options() {

	$titan = TitanFramework::getInstance( 'uso_faqs_options' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	



// Customizer options

    $uso_faqs = $titan->createThemeCustomizerSection( array(
        'name' => 'FAQs Options',
        'panel' => 'FAQs',
    ) );

    $uso_faqs->createOption( array(
        'name' => 'Title Color',
        'id' => 'faqs_bg_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-faqs .accordion a{ color: value !important; }'
    ) );

    $uso_faqs->createOption( array(
        'name' => 'Content Color',
        'id' => 'faqs_content_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-faqs .accordion p{ color: value !important; }'
    ) );






}