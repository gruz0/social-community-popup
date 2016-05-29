<?php defined( 'ABSPATH' ) or exit; ?>
<?php
$tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'general';
?>

<div class="wrap social-community-popup-settings">
	<h1><?php _e( 'Social Community Popup Options', L10N_SCP_PREFIX ); ?></h1>
	<?php echo scp_settings_tabs(); ?>
	<form method="post" action="options.php">
		<?php wp_nonce_field( 'scp-update-options' ); ?>
		<?php settings_fields( 'social_community_popup-group-' . $tab ); ?>
		<?php do_settings_fields( 'social_community_popup-group-' . $tab, 'social_community_popup-group-' . $tab ); ?>
		<?php do_settings_sections( 'social_community_popup-group-' . $tab ); ?>
		<?php submit_button(); ?>
	</form>
	<?php require( sprintf( "%s/copyright.php", dirname( __FILE__ ) ) ); ?>
</div>

<?php
function scp_settings_tabs() {
	$current_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'general';

	$tabs                = array();
	$tabs['general']     = __( 'General', L10N_SCP_PREFIX );
	$tabs['view']        = __( 'View (Desktop)', L10N_SCP_PREFIX );
	$tabs['view-mobile'] = __( 'View (Mobile Devices)', L10N_SCP_PREFIX );
	$tabs['events']      = __( 'Events', L10N_SCP_PREFIX );
	$tabs['management']  = __( 'Management', L10N_SCP_PREFIX );

	echo '<h2 class="nav-tab-wrapper">';
	foreach ( $tabs as $tab_key => $tab_caption ) {
		$active = $current_tab == $tab_key ? 'nav-tab-active' : '';
		echo '<a class="nav-tab ' . $active . '" href="?page=social_community_popup&tab=' . $tab_key . '">' . $tab_caption . '</a>';
	}
	echo '</h2>';
}
