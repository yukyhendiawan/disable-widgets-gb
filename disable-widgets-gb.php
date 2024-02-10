<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://yukyhendiawan.com
 * @since             1.0.0
 * @package           Disable_Widgets_Gb
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Widgets Block
 * Plugin URI:        https://yukyhendiawan.com
 * Description:       Disable Widgets Block is a plugin that allows you to effortlessly deactivate and replace Gutenberg blocks with the classic widget experience.
 * Version:           1.0.0
 * Author:            Yuky Hendiawan
 * Author URI:        https://yukyhendiawan.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       disable-widgets-gb
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
define( 'DISABLE_WIDGETS_GB_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-disable-widgets-gb-activator.php
 */
function disable_widgets_gb_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-disable-widgets-gb-activator.php';
	Disable_Widgets_Gb_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-disable-widgets-gb-deactivator.php
 */
function disable_widgets_gb_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-disable-widgets-gb-deactivator.php';
	Disable_Widgets_Gb_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'disable_widgets_gb_activate' );
register_deactivation_hook( __FILE__, 'disable_widgets_gb_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-disable-widgets-gb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function disable_widgets_gb() {

	$plugin = new Disable_Widgets_Gb();
	$plugin->run();

}
disable_widgets_gb();
