<?php
/**
 * MU News Manager
 *
 * MU News Manager is the plugin that allows extra information to be included with Posts for University Communications
 *
 * @package MU News Manager
 *
 * Plugin Name: MU News Manager
 * Plugin URI: https://www.marshall.edu
 * Description: MU News Manager is the plugin that allows extra information to be included with Posts for University Communications
 * Version: 1.0
 * Author: Christopher McComas
 */

if ( ! class_exists( 'ACF' ) ) {
	return new WP_Error( 'broke', __( 'Advanced Custom Fields is required for this plugin.', 'mu-news-manager' ) );
}

require plugin_dir_path( __FILE__ ) . '/acf-fields.php';

/**
 * Flush rewrites whenever the plugin is activated.
 */
function mu_news_manager_activate() {
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'mu_news_manager_activate' );

/**
 * Flush rewrites whenever the plugin is deactivated.
 */
function mu_news_manager_deactivate() {
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'mu_news_manager_deactivate' );
