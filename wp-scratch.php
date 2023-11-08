<?php
/**
 * Plugin Name:          WP Scratch (asmthry)
 * Plugin URI:           https://github.com/asmthry/wp-scratch.git
 * Description:          This plugin will help you reduce your coding effort.
 * Version:              0.0.1
 * Requires at least:    6.3
 * Requires PHP:         8.0
 * Author:               ASMTHRY
 * License:              MIT
 * License URI:          https://opensource.org/license/mit/
 *
 * @package WP Scratch
 */

defined( 'ABSPATH' ) || die( 'What are you doing here? No direct access allowed.' );

/**
 * Define Constants For WP Scratch Plugin
 */
define( 'WP_SCRATCH_VERSION', '0.0.1' );
define( 'WP_SCRATCH_DIR', plugin_dir_path( __FILE__ ) . '/' );

/** Including Files For WP Scratch Plugin Support */

/**Plugin Activate */
require_once WP_SCRATCH_DIR . 'class-asmthry-activate.php';
register_activation_hook( __FILE__, array( 'Asmthry_Activate', 'activate' ) );

/**Plugin Deactivate */
require_once WP_SCRATCH_DIR . 'class-asmthry-deactivate.php';
register_deactivation_hook( __FILE__, array( 'Asmthry_Deactivate', 'deactivate' ) );