<?php
/**
 * Plugin Name: Simple widget display conditions Lite
 * Plugin URI: https://yws.tokyo/simple-widget-display-conditions-lite/
 * Description: This is a plugin that specifies the display conditions for the widget.プラグインに表示条件を設定できるようにするプラグインです。
 * Author: Yossy's web service
 * Author URI: https://yws.tokyo
 * Text Domain: simple-widget-display-conditions-lite
 * Domain Path: /languages
 * Version: 1.0.0
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( !is_plugin_active( 'simple-widget-display-conditions/simple-widget-display-conditions.php' ) ){
	function simple_widget_display_conditions_lite_languages() {
		load_plugin_textdomain( 'simple-widget-display-conditions-lite', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}
	add_action( 'plugins_loaded', 'simple_widget_display_conditions_lite_languages' );
	
	require_once 'widget-form.php';
	require_once 'conditions-filter.php';
	require_once 'swdcl-admin.php';
	
	function simple_widget_display_conditions_lite_admin_style(){
		wp_enqueue_style( 'simple_widget_display_conditions_lite_widget_style', plugins_url( '/css/widget.css', __FILE__ ) );
		wp_enqueue_style( 'simple_widget_display_conditions_lite_admin_style', plugins_url( '/css/admin.css', __FILE__ ) );
	}
	add_action( 'admin_enqueue_scripts', 'simple_widget_display_conditions_lite_admin_style' );
}
?>
