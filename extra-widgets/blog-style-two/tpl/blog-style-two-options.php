<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'uso_blog_style_two_options' );

/**
 * Initialize Titan & options here
 */
function uso_blog_style_two_options() {

	$titan = TitanFramework::getInstance( 'uso_blog_style_two_options' );

	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	

// Customizer options

    $uso_blog_style_two = $titan->createThemeCustomizerSection( array(
        'name' => 'Blog Style Two Options',
        'panel' => 'Blog Style Two',
    ) );

    $uso_blog_style_two->createOption( array(
        'name' => 'Title Color',
        'id' => 'blog_two_title_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-blog-style-two .content h4  { color: value !important; }'
    ) );

    $uso_blog_style_two->createOption( array(
        'name' => 'Content Color',
        'id' => 'blog_two_content_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-blog-style-two .content  { color: value !important; }'
    ) );

    $uso_blog_style_two->createOption( array(
        'name' => 'Meta Color',
        'id' => 'blog_two_meta_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-blog-style-two .meta  { color: value !important; }'
    ) );






}