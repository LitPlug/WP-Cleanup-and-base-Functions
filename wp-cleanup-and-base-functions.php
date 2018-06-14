<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.linkedin.com/in/azizul-ameir-redzuan/
 * @since             1.0.0
 * @package           Wp_Cleanup_And_Base_Functions
 *
 * @wordpress-plugin
 * Plugin Name:       WP Cleanup and base Functions
 * Plugin URI:        https://github.com/LitPlug/WP-Cleanup-and-base-Functions.git
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Azizul Ameir
 * Author URI:        https://www.linkedin.com/in/azizul-ameir-redzuan/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-cleanup-and-base-functions
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-cleanup-and-base-functions-activator.php
 */
function activate_wp_cleanup_and_base_functions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cleanup-and-base-functions-activator.php';
	Wp_Cleanup_And_Base_Functions_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-cleanup-and-base-functions-deactivator.php
 */
function deactivate_wp_cleanup_and_base_functions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cleanup-and-base-functions-deactivator.php';
	Wp_Cleanup_And_Base_Functions_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_cleanup_and_base_functions' );
register_deactivation_hook( __FILE__, 'deactivate_wp_cleanup_and_base_functions' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-cleanup-and-base-functions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_cleanup_and_base_functions() {

	$plugin = new Wp_Cleanup_And_Base_Functions();
	$plugin->run();

}
run_wp_cleanup_and_base_functions();
