<?php

/**
 * Plugin Name:       Web Application Core
 * Plugin URI:        https://github.com/devuri/wpenv-core
 * Description:       Web Application Core provides `web_app_config` action and bootstrap file.
 * Version:           0.2.1
 * Requires at least: 5.3.0
 * Requires PHP:      7.3.5
 * Author:            uriel
 * Author URI:        https://github.com/devuri
 * Text Domain:       wpenv-core
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Network: true
 */

if ( ! \defined( 'ABSPATH' ) ) {
    exit;
}

if (defined('WP_INSTALLING') && WP_INSTALLING) {
    return;
}

/**
 * Must-use plugins are loaded before normal plugins.
 *
 * Must-use plugins are typically used for critical functionality or site-wide customizations
 * that should always be active which makes this hook a good place to add critical functionality
 */
do_action( 'web_app_config', get_http_env() );

/**
 * Start and load core plugin.
 */
if ( function_exists( 'wpc_app_config_core' ) ) {
    wpc_app_config_core();
}
