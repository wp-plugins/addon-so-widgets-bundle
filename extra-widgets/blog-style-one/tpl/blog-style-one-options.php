<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'uso_blog_style_one_options' );

/**
 * Initialize Titan & options here
 */
function uso_blog_style_one_options() {

	$titan = TitanFramework::getInstance( 'uso_blog_style_one_options' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	



// Customizer options

    $uso_blog_style_one = $titan->createThemeCustomizerSection( array(
        'name' => 'Blog Style One Options',
        'panel' => 'Blog Style One',
    ) );

    $uso_blog_style_one->createOption( array(
        'name' => 'Title Color',
        'id' => 'blog_one_title_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-blog-style-one .content h4  { color: value !important; }'
    ) );

    $uso_blog_style_one->createOption( array(
        'name' => 'Content Color',
        'id' => 'blog_one_content_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-blog-style-one .content  { color: value !important; }'
    ) );

    $uso_blog_style_one->createOption( array(
        'name' => 'Meta Color',
        'id' => 'blog_one_meta_color',
        'type' => 'color',
        'desc' => 'Pick a color',
        'default' => '#000000',
        'css' => '.so-widget-blog-style-one .meta  { color: value !important; }'
    ) );






}