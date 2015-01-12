<?php
/**
 * Plugin Name: uWebDesign Color Scheme
 * Plugin URI: https://github.com/websanya/uwd-color-scheme
 * Description: A micro-plugin to add uWebDesign color scheme to WordPress.
 * Version: 1.0.1
 * Author: Alexander Goncharov
 * Author URI: http://websanya.ru
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: websanya/uwd-color-scheme
 * GitHub Branch: master
 */
 
//* Define PATH constant
define( 'PATH', plugins_url( '', __FILE__ ) );

//* Adding color scheme to WordPress admin
function add_custom_admin_themes() {
	wp_admin_css_color(
    'uwd-scheme',
    __( 'uWebDesign' ),
    PATH . "/css/uwd-scheme.css",
    array( '#2a3333', '#f6f6f6', '#c46858' )
	);
}
add_action( 'admin_init', 'add_custom_admin_themes' );