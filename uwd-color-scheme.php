<?php
/**
 * Plugin Name: uWebDesign Color Scheme
 * Plugin URI: https://github.com/websanya/uwd-color-scheme
 * Description: Микро-плагин для WordPress, который добавляет брендовую цветовую схему uWebDesign в админку.
 * Version: 2.0.0
 * Author: Alexander Goncharov
 * Author URI: https://websanya.ru
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
    array( '#2e2315', '#ede1d3', '#35827f', '#955152' )
	);
}
add_action( 'admin_init', 'add_custom_admin_themes' );