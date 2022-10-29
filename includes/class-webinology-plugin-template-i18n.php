<?php
declare(strict_types=1);
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://kenn.kitchen
 * @since      1.0.0
 *
 * @package    Webinology_Plugin_Template
 * @subpackage Webinology_Plugin_Template/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Webinology_Plugin_Template
 * @subpackage Webinology_Plugin_Template/includes
 * @author     Kenn Kitchem <me@kenneth.kitchen>
 */
class Webinology_Plugin_Template_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'webinology-plugin-template',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
