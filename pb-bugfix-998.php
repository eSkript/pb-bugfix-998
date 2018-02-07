<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/lukaiser
 * @since             1.0.0
 * @package           Pb_Bugfix_998
 *
 * @wordpress-plugin
 * Plugin Name:       Pressbooks Bug Fix 998
 * Plugin URI:        https://github.com/lukaiser/pb-bugfix-998
 * Description:       This plugin fixes bug #998 of Pressbooks for older Pressbooks versions https://github.com/pressbooks/pressbooks/pull/998
 * Version:           1.0.0
 * Author:            Lukas Kaiser
 * Author URI:        https://github.com/lukaiser
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pb-bugfix-998
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
 * This action is documented in includes/class-pb-bugfix-998-activator.php
 */
function activate_pb_bugfix_998() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pb-bugfix-998-activator.php';
	Pb_Bugfix_998_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pb-bugfix-998-deactivator.php
 */
function deactivate_pb_bugfix_998() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pb-bugfix-998-deactivator.php';
	Pb_Bugfix_998_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pb_bugfix_998' );
register_deactivation_hook( __FILE__, 'deactivate_pb_bugfix_998' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pb-bugfix-998.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pb_bugfix_998() {

	$plugin = new Pb_Bugfix_998();
	$plugin->run();

}
run_pb_bugfix_998();
