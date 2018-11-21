<?php
/**
 * Functions
 *
 * @package  Social_Media_Popup
 * @author   Alexander Kadyrov
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/gruz0/social-media-popup
 */

defined( 'ABSPATH' ) or exit;

define( 'L10N_SCP_PREFIX', 'social-community-popup' ); // textdomain

/**
 * Преобразуем строку в массив для событий при наступлении которых появится окно
 *
 * @param string $value String to split
 * @return array
 */
function split_string_by_comma( $value ) {
	return preg_split( '/,/', $value );
}

/**
 * Проверяем наличие нужного нам события в массиве активных событий появления окна
 *
 * @param string $haystack Haystack
 * @param string $needle Needle
 * @return boolean
 */
function when_should_the_popup_appear_has_event( $haystack, $needle ) {
	return ( array_search( $needle, $haystack, true ) !== false );
}

/**
 * Проверяем наличие нужного нам события в массиве активных событий кому показывать окно
 *
 * @param string $haystack Haystack
 * @param string $needle Needle
 * @return boolean
 */
function who_should_see_the_popup_has_event( $haystack, $needle ) {
	return ( array_search( $needle, $haystack, true ) !== false );
}

/**
 * Checks is cookie present
 *
 * @return boolean
 */
function is_scp_cookie_present() {
	return ( ! empty( $_COOKIE['social-community-popup'] ) && 'true' === $_COOKIE['social-community-popup'] );
}

/**
 * Checks if current tab in the array of available tabs
 *
 * @param array $available_tabs Available tabs
 *
 * @return string
 */
function smp_validate_and_sanitize_tab( $available_tabs = array() ) {
	$tab = 'general';

	if ( ! empty( $_GET['tab'] ) && in_array( wp_unslash( $_GET['tab'] ), $available_tabs, true ) ) {
		$tab = sanitize_text_field( wp_unslash( $_GET['tab'] ) );
	}

	return $tab;
}

