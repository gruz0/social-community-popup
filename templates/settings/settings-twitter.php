<?php
/**
 * Twitter Settings
 *
 * @package Social_Media_Popup
 * @author  Alexander Kadyrov
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link    https://github.com/gruz0/social-media-popup
 */

defined( 'ABSPATH' ) or exit;

$available_tabs = array( 'general', 'follow-button', 'timeline', 'tracking' );
$slug           = ! empty( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : '';
$tab            = smp_validate_and_sanitize_tab( $slug, $available_tabs );
?>

<div class="wrap social-media-popup-settings">
	<h2><?php esc_html_e( 'Twitter', 'social-media-popup' ); ?></h2>

	<?php smp_twitter_settings_tabs( $tab ); ?>

	<form method="post" action="options.php">
		<?php wp_nonce_field( 'smp-update-twitter-options' ); ?>
		<?php settings_fields( SMP_PREFIX . '-group-twitter-' . $tab ); ?>
		<?php do_settings_fields( SMP_PREFIX . '-group-twitter-' . $tab, SMP_PREFIX . '-group-twitter-' . $tab ); ?>
		<?php do_settings_sections( SMP_PREFIX . '-group-twitter-' . $tab ); ?>
		<?php submit_button(); ?>
	</form>
	<?php require( sprintf( '%s/../copyright.php', dirname( __FILE__ ) ) ); ?>
</div>

<?php
/**
 * Render settings tabs
 *
 * @param string $current_tab Current tab slug
 */
function smp_twitter_settings_tabs( $current_tab ) {
	$tabs                  = array();
	$tabs['general']       = __( 'General', 'social-media-popup' );
	$tabs['follow-button'] = __( 'Follow Button Widget', 'social-media-popup' );
	$tabs['timeline']      = __( 'Timeline Widget', 'social-media-popup' );
	$tabs['tracking']      = __( 'Tracking', 'social-media-popup' );

	smp_render_settings_tabs( $tabs, $current_tab, '_twitter_options' );
}
