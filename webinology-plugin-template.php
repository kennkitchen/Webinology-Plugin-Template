<?php
declare(strict_types=1);
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://kenn.kitchen
 * @since             1.0.0
 * @package           Webinology_Plugin_Template
 *
 * @wordpress-plugin
 * Plugin Name:       Webinology Plugin Template
 * Plugin URI:        https://webinology.io
 * Description:       A copy of the WordPress plugin boilerplate with specific customizations for use as a starting point for other plugins.
 * Version:           1.0.0
 * Author:            Kenn Kitchem
 * Author URI:        https://kenn.kitchen
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       webinology-plugin-template
 * Domain Path:       /languages
 */

require_once 'vendor/autoload.php';

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WEBINOLOGY_PLUGIN_TEMPLATE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-webinology-plugin-template-activator.php
 */
function activate_webinology_plugin_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webinology-plugin-template-activator.php';
	Webinology_Plugin_Template_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-webinology-plugin-template-deactivator.php
 */
function deactivate_webinology_plugin_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webinology-plugin-template-deactivator.php';
	Webinology_Plugin_Template_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_webinology_plugin_template' );
register_deactivation_hook( __FILE__, 'deactivate_webinology_plugin_template' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-webinology-plugin-template.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_webinology_plugin_template() {

	$plugin = new Webinology_Plugin_Template();
	$plugin->run();

}
run_webinology_plugin_template();
