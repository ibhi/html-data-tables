<?php
/*
 * Plugin Name: HTML Data Table
 * Version: 1.0
 * Plugin URI: http://www.noobish.in/
 * Description: This is a wordpress plugin which can be used to apply jquery datatables to any HTML table you are already having on your theme, posts, custom post types or pages
 * Author: ibhi
 * Author URI: http://www.noobish.in/
 * Requires at least: 3.8
 * Tested up to: 3.8.1
 *
 * @package WordPress
 * @author ibhi
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include plugin class files
require_once( 'includes/class-html-data-table.php' );
require_once( 'includes/class-html-data-table-settings.php' );

/**
 * Returns the main instance of HTML_Data_Table to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object HTML_Data_Table
 */
function HTML_Data_Table () {
	$instance = HTML_Data_Table::instance( __FILE__, '1.0.0' );
	if( is_null( $instance->settings ) ) {
		$instance->settings = HTML_Data_Table_Settings::instance( $instance );
	}
	return $instance;
}

HTML_Data_Table();