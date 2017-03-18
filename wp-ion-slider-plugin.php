<?php
/**
 * Ion Slider jquery plugin for Wordpress
 *
 * @package   Ion Slider jQuery plugin for Wordpress
 * @author    Fausto Ruiz Madrid <fausto@faus.to>
 * @license   GPL-2.0+
 * @link      https://github.com/Faustorm/
 * @copyright 2017 Fausto Ruiz Madrid
 *
 * @wordpress-plugin
 * Plugin Name:       Ion Slider jQuery plugin for Wordpress
 * Plugin URI:        
 * Description:       Instala el plugin Ion.RangeSlider 2.1.6, Dependencias: jQuery 1.8.x+, Ion.RangeSlider 2.1.6
 * Version:           1.0.0
 * Author:            Fausto Ruiz Madrid
 * Author URI:        https://github.com/Faustorm
 * Text Domain:       wp-ion-slider-plugin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: 
 * GitHub Branch:     master
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
//Cargamos los CSS
function wp_ion_slider_plugin_css() {
	//normalize (es opcional pero lo cargamos)
	wp_register_style( 'wp-ion-slider-plugin-css-normalize', plugins_url( '/css/normalize.css', __FILE__ ), array(), false, 'all' );
	//el principal
	wp_register_style( 'wp-ion-slider-plugin-css-main', plugins_url( '/css/ion.rangeSlider.css', __FILE__ ), array(), false, 'all' );
	//skin html5
	wp_register_style( 'wp-ion-slider-plugin-css-skin-html5', plugins_url( '/css/ion.rangeSlider.skinHTML5.css', __FILE__ ), array(), false, 'all' );
	//los encolamos
	wp_enqueue_style( 'wp-ion-slider-plugin-css-normalize' );
	wp_enqueue_style( 'wp-ion-slider-plugin-css-main' );
	wp_enqueue_style( 'wp-ion-slider-plugin-css-skin-html5' );
}
add_action( 'wp_enqueue_scripts', 'wp_ion_slider_plugin_css' );
//Cargamos los JS
function wp_ion_slider_plugin_js() {
	//Fuera el jquery que venga y cargamos uno compatible, la 3.10.0
    wp_deregister_script( 'jquery' );
     
    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), null, false );
    //cargamos el plugin, por fin!
	wp_register_script( 'wp-ion-slider-plugin-js-script', plugins_url( '/js/ion-rangeSlider/ion.rangeSlider.min.js', __FILE__ ) );
	wp_enqueue_script( 'wp-ion-slider-plugin-js-script' , array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'wp_ion_slider_plugin_js' );