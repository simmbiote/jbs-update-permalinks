<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/simmbiote
 * @since             1.0.0
 * @package           Jbs_Permalink_Updater
 *
 * @wordpress-plugin
 * Plugin Name:       Post Permalink Updater
 * Plugin URI:        https://github.com/simmbiote
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Simmbiote
 * Author URI:        https://github.com/simmbiote
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jbs-permalink-updater
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
 * This action is documented in includes/class-jbs-permalink-updater-activator.php
 */
function activate_jbs_permalink_updater() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jbs-permalink-updater-activator.php';
	Jbs_Permalink_Updater_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jbs-permalink-updater-deactivator.php
 */
function deactivate_jbs_permalink_updater() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jbs-permalink-updater-deactivator.php';
	Jbs_Permalink_Updater_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jbs_permalink_updater' );
register_deactivation_hook( __FILE__, 'deactivate_jbs_permalink_updater' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jbs-permalink-updater.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jbs_permalink_updater() {

	$plugin = new Jbs_Permalink_Updater();
	$plugin->run();

}
run_jbs_permalink_updater();
