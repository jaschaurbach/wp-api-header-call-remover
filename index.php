<?php

/**
 * @link              https://jascha.wtf
 * @since             1.0
 * @package           Api_Header_Call_Remover
 *
 * @wordpress-plugin
 * Plugin Name:       Remove api.w.org header call
 * Plugin URI:        https://jascha.wtf/api-header-call-remover
 * Description:       Removes the header call to api.w.org
 * Version:           1.0.0
 * Author:            Jascha Ezra Urbach
 * Author URI:        https://jascha.wtf
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'API_HEADER_CALL_REMOVER_VERSION', '1.0.0' );

function remove_api_header_call () {
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
    }

add_action( 'after_setup_theme', 'remove_api_header_call' );
?>
