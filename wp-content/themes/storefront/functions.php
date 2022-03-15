<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version'    => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
	$storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

	require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';
	require 'inc/nux/class-storefront-nux-starter-content.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

add_action('wp_footer','dcms_add_footer_whatsapp');

function dcms_add_footer_whatsapp(){
	$tel = "+573204582978";
	$ms = urlencode("Bienvenido a Ela's Frau, comunicate con nosotros para obtener asesoria personalizada, la belleza esta a un click de distancia. ");

	$url = "https://wa.me/${tel}?text=${ms}";
	$img = get_stylesheet_directory_uri().'/img/whatsapp-contorno.svg';
	echo "<div id='float-whatsapp' style='position:fixed;bottom:120px;right:10px;'>";
	echo " <a href=${url} target='_blank'>";
	echo " <img src='${img}' width=100 height=100 />";
	echo " </a>";
	echo "</div>";
}

add_action('wp_footer','dcms_add_footer_instagram');

function dcms_add_footer_instagram (){

	$url = "https://www.instagram.com/elas.frau/";
	$img = get_stylesheet_directory_uri().'/img/instagram-contorno.svg';
	echo "<div id='float-whatsapp' style='position:fixed;bottom:50px;right:1px;'>";
	echo " <a href=${url} target='_blank'>";
	echo " <img src='${img}' width=120 height=120 />";
	echo " </a>";
	echo "</div>";
}