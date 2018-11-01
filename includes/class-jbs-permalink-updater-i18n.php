<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/simmbiote
 * @since      1.0.0
 *
 * @package    Jbs_Permalink_Updater
 * @subpackage Jbs_Permalink_Updater/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Jbs_Permalink_Updater
 * @subpackage Jbs_Permalink_Updater/includes
 * @author     Simmbiote <john@jbsimms.co.za>
 */
class Jbs_Permalink_Updater_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'jbs-permalink-updater',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
