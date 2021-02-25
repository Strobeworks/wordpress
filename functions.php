<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.

	function vedway_menu(){
		$location=array(
			'primery'=>"primery Menu",
			'footer'=>"footer Menu"
		);
		register_nav_menus( $location );
	}

	add_action( 'init','vedway_menu' );

	function vedway_themesupport(){
		add_theme_support( 'title-tag');
		//add_theme_support( 'custom-logo');
	}
	add_action('after_setup_theme','vedway_themesupport');	


	function vedway_dir_imgs(){
		return get_template_directory_uri()."/assets/images/";
	}

	function vedway_register_styles(){
		$version=wp_get_theme()->get('Version');
		wp_enqueue_style( 'vedway-style', get_template_directory_uri().'/style.css',array(),$version,'all' );
		wp_enqueue_style( 'vedway-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',array(),'5.15.2','all' );
	}
	
	add_action( 'wp_enqueue_scripts','vedway_register_styles' );

	



	function vedway_register_scripts(){
		wp_enqueue_script('vedway-scripts',get_template_directory_uri().'/assets/js/vedway.js',array(),'1.0',true);
	}
	
	add_action( 'wp_enqueue_scripts','vedway_register_scripts' );

	

?>