<?php
namespace WRDSB\SchoolHandbooks;

use WRDSB\OptionsFramework as OptionsFramework;

use \WRDSB\SchoolHandbooks\Modules\UI\BackEnd as UI_BackEnd;
use \WRDSB\SchoolHandbooks\Modules\UI\FrontEnd as UI_FrontEnd;

use \WRDSB\SchoolHandbooks\Modules\Codex\Views\BackEnd as Codex_BackEnd;
use \WRDSB\SchoolHandbooks\Modules\Codex\Views\FrontEnd as Codex_FrontEnd;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link    https://github.com/wrdsb
 * @since   1.0.0
 * @package WRDSB_SchoolHandbooks
 *
 * @wordpress-plugin
 * Plugin Name:       WRDSB School Handbooks Features
 * Plugin URI:        https://github.com/wrdsb/wordpress-plugin-staff-features
 * Description:       An omnibus plugin to provide features unique to School Handbooks in the Staff Intranet.
 * Version:           1.0.0
 * Author:            WRDSB
 * Author URI:        https://github.com/wrdsb
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wrdsb-school-handbooks
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

require_once 'vendor/autoload.php';

/**
 * Instantiate the container.
 */
$container = Plugin::getContainer();

/**
 * Current plugin name.
 * Change this to your plugin's slug.
 */
$container['plugin_name'] = 'wrdsb-school-handbooks';

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
$container['version'] = '1.0.0';

/**
 * Instantiate main plugin class.
 * Pass plugin name and version from container to constructor.
 */
$container['plugin'] = function ($c) {
    return new Plugin($c['plugin_name'], $c['version']);
};

$container['ui_back_end'] = function ($c) {
    return new UI_BackEnd($c['plugin']);
};

$container['ui_front_end'] = function ($c) {
    return new UI_FrontEnd($c['plugin']);
};

$container['class_lists_back_end'] = function ($c) {
    return new Codex_BackEnd($c['plugin']);
};

$container['class_lists_front_end'] = function ($c) {
    return new Codex_FrontEnd($c['plugin']);
};

register_activation_hook(__FILE__, array( __NAMESPACE__ . '\\Activator', 'activate' ));
register_deactivation_hook(__FILE__, array( __NAMESPACE__ . '\\Deactivator', 'deactivate' ));

/**
 * Bootstrap the plugin.
 */
$plugin = $container['plugin'];

$ui_back_end  = $container['ui_back_end'];
$ui_front_end = $container['ui_front_end'];

$class_lists_back_end = $container['class_lists_back_end'];
$class_lists_front_end = $container['class_lists_front_end'];

$plugin->registerHooks();
