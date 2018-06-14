<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/azizul-ameir-redzuan/
 * @since      1.0.0
 *
 * @package    Wp_Cleanup_And_Base_Functions
 * @subpackage Wp_Cleanup_And_Base_Functions/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Cleanup_And_Base_Functions
 * @subpackage Wp_Cleanup_And_Base_Functions/includes
 * @author     Azizul Ameir <azizul.ameir@gmail.com>
 */
class Wp_Cleanup_And_Base_Functions_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-cleanup-and-base-functions',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
