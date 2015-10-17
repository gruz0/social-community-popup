<?php defined( 'ABSPATH' ) or exit; ?>
<?php
$tab_index = 1;

if ( $cookie_popup_views == $visit_n_pages ) :
	if ( $use_facebook || $use_vkontakte || $use_odnoklassniki || $use_googleplus || $use_twitter || $use_pinterest ) :
?>
	<div id="social-community-popup">

	<?php
		$parent_popup_styles                  = '';
		$parent_popup_css                     = array();
		$parent_popup_css['background-color'] = $overlay_color;
		$parent_popup_css['opacity']          = '0.' . intval( $overlay_opacity ) / 10.0;

		foreach ( $parent_popup_css as $selector => $value ) {
			$parent_popup_styles .= "${selector}: ${value}; ";
		}
	?>
		<div class="parent_popup" style="<?php echo esc_attr( $parent_popup_styles ); ?>"></div>

		<?php
			$border_radius_css    = $border_radius > 0 ? "border-radius:{$border_radius}px !important;" : "";
			$background_image_css = empty( $background_image ) ? '' : "background:#fff url('{$background_image}') center center no-repeat;";

			$popup_css = '';
			$popup_css .= 'width:' . ( $container_width + 40 ) . 'px !important;height:' . ( $container_height + 10 ) . 'px !important;';
			$popup_css .= $border_radius_css;
			$popup_css .= $background_image_css;
		?>
		<div id="popup" style="<?php echo esc_attr( $popup_css ); ?>">

			<?php if ( $show_close_button_in === 'outside' ) { ?>
			<a href="#" class="close close-outside" title="<?php _e( 'Close Modal Dialog', L10N_SCP_PREFIX ); ?>">&times;</a>
			<?php } ?>

			<div class="section" style="width:<?php echo esc_attr( $container_width ); ?>px !important;height:<?php echo esc_attr( $container_height ); ?>px !important;">
		<?php
			$scp_plugin_title     = trim( get_scp_option( 'setting_plugin_title' ) );
			$scp_plugin_title_css = preg_replace( "/\r|\n/", "", trim(get_scp_option( 'setting_plugin_title_css' ) ) );
			$show_plugin_title    = mb_strlen( $scp_plugin_title ) > 0;

			if ( $show_plugin_title ) { ?>
				<div class="plugin-title">
					<?php if ( $show_close_button_in === 'inside' ) { ?>
					<span class="close" title="<?php _e( 'Close Modal Dialog', L10N_SCP_PREFIX ); ?>">&times;</span>
					<?php } ?>
					<?php echo esc_attr( $scp_plugin_title ); ?>
				</div>
			<?php }
		?>

		<?php
			$selected_widgets_count = 0;
			for ( $idx = 0; $idx < count( $tabs_order ); $idx++ ) {
				switch ( $tabs_order[ $idx ] ) {
					case 'facebook':      if ( $use_facebook )      $selected_widgets_count++; break;
					case 'vkontakte':     if ( $use_vkontakte )     $selected_widgets_count++; break;
					case 'odnoklassniki': if ( $use_odnoklassniki ) $selected_widgets_count++; break;
					case 'googleplus':    if ( $use_googleplus )    $selected_widgets_count++; break;
					case 'twitter':       if ( $use_twitter )       $selected_widgets_count++; break;
					case 'pinterest':     if ( $use_pinterest )     $selected_widgets_count++; break;
				}
			}
		?>

			<?php if ( $selected_widgets_count == 1 && get_scp_option( 'setting_hide_tabs_if_one_widget_is_active' ) == 1 ) : ?>

			<?php else: ?>
				<ul class="tabs"<?php if ( $align_tabs_to_center ) echo 'style="text-align:center;"'; ?>>

				<?php
					for ( $idx = 0; $idx < count( $tabs_order ); $idx++ ) {
						switch ( $tabs_order[ $idx ] ) {
							case 'facebook':
								if ( $use_facebook )
									scp_tab_caption( 'setting_facebook_tab_caption' );
								break;

							case 'vkontakte':
								if ( $use_vkontakte )
									scp_tab_caption( 'setting_vkontakte_tab_caption', 'vk-tab' );
								break;

							case 'odnoklassniki':
								if ( $use_odnoklassniki )
									scp_tab_caption( 'setting_odnoklassniki_tab_caption' );
								break;

							case 'googleplus':
								if ( $use_googleplus )
									scp_tab_caption( 'setting_googleplus_tab_caption', 'google-plus-tab' );
								break;

							case 'twitter':
								if ( $use_twitter )
									scp_tab_caption( 'setting_twitter_tab_caption' );
								break;

							case 'pinterest':
								if ( $use_pinterest)
									scp_tab_caption( 'setting_pinterest_tab_caption', 'pinterest-tab' );
								break;
						}
					}
				?>
				<?php if ( ! $show_plugin_title && $show_close_button_in === 'inside' ) : ?>
					<li class="last-item"><span class="close" title="<?php _e( 'Close Modal Dialog', L10N_SCP_PREFIX ); ?>">&times;</span></li>
				<?php endif; ?>
				</ul>
			<?php endif; ?>

				<?php
					for ( $idx = 0; $idx < count( $tabs_order ); $idx++ ) {
						switch ( $tabs_order[ $idx ] ) {
							case 'facebook':
								if ( $use_facebook )
									scp_facebook_container();
								break;

							case 'vkontakte':
								if ( $use_vkontakte )
									scp_vkontakte_container();
								break;

							case 'odnoklassniki':
								if ( $use_odnoklassniki )
									scp_odnoklassniki_container();
								break;

							case 'googleplus':
								if ( $use_googleplus )
									scp_googleplus_container();
								break;

							case 'twitter':
								if ( $use_twitter )
									scp_twitter_container();
								break;

							case 'pinterest':
								if ( $use_pinterest )
									scp_pinterest_container();
								break;
						}
					}
				?>
			</div>

			<?php
				if ( get_scp_option( 'setting_show_button_to_close_widget' ) == '1' ):
					$button_to_close_widget_style = get_scp_option( 'setting_button_to_close_widget_style' );
					$button_to_close_widget_class = $button_to_close_widget_style == 'link' ? '' : 'scp-' . $button_to_close_widget_style . '-button';
				?>
					<div class="dont-show-widget scp-button <?php echo esc_attr( $button_to_close_widget_class ); ?>">
						<a href="#" class="close"><?php echo esc_attr( get_scp_option( 'setting_button_to_close_widget_title' ) ); ?></a>
					</div>
				<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
<?php endif; ?>

<?php
// Окно SCP выводим только после создания его в DOM-дереве
?>
<script>
	<?php if ( $use_facebook ) : ?>
	function scp_prependFacebook($) {
		<?php
			// Заменяем Application ID на наш из настроек
			$prepend_facebook = sprintf(
				file_get_contents( dirname( __FILE__ ) . '/partials/facebook_prepend.php' ),
				get_scp_option( 'setting_facebook_locale' ),
				get_scp_option( 'setting_facebook_application_id' )
			);

			// Удаляем переносы строк, иначе jQuery ниже не отработает
			$prepend_facebook = str_replace("\n", '', $prepend_facebook);

			// Переводим код в сущности
			$prepend_facebook = htmlspecialchars( $prepend_facebook, ENT_QUOTES );
		?>

		if ($("#fb-root").length == 0) {
			$("body").prepend($("<div/>").html("<?php echo esc_attr( $prepend_facebook ); ?>").text());
		}
	}
	<?php endif; ?>

	<?php $calculated_delay = ( $delay_after_n_seconds > 0 ? $delay_after_n_seconds * 1000 : 1000 ); ?>

	function scp_destroyPlugin($) {
		var date = new Date( new Date().getTime() + <?php echo 1000 * 60 * 60 * 24 * esc_attr( $after_n_days ); ?>);
		scp_setCookie("social-community-popup", "true", { "expires": date, "path": "/" } );
		scp_deleteCookie("social-community-popup-views");
		$("#social-community-popup").remove();
	}

	jQuery(document).ready(function($) {
		scp_setCookie("social-community-popup-views", <?php echo esc_attr( $cookie_popup_views ) + 1; ?>, { "path": "/" } );

		<?php if ( $cookie_popup_views === $visit_n_pages ) : ?>
			setTimeout(function() {

				<?php if ( $use_facebook ) echo "scp_prependFacebook(\$);"; ?>
				<?php if ( $use_vkontakte ) echo "scp_prependVK(\$);"; ?>
				<?php if ( $use_googleplus ) echo "scp_prependGooglePlus(\$);"; ?>
				<?php if ( $use_pinterest ) echo "scp_prependPinterest(\$);"; ?>

				$('#social-community-popup').show();

			<?php if ( $delay_before_show_bottom_button > 0 ) { ?>
				setTimeout(function() { $('.dont-show-widget').show(); }, <?php echo esc_attr( $delay_before_show_bottom_button ) * 1000; ?>);
			<?php } else { ?>
				$('.dont-show-widget').show();
			<?php } ?>

			}, <?php echo esc_attr( $calculated_delay ); ?>);

			scp_deleteCookie("social-community-popup-views");

			<?php if ( $close_by_clicking_anywhere ) : ?>
			$("#social-community-popup .parent_popup, #social-community-popup .close").click(function() {
			<?php else: ?>
			$("#social-community-popup .close").click(function() {
			<?php endif;  ?>
				scp_destroyPlugin($);
			});
		<?php endif; ?>

		<?php if ( $close_when_esc_pressed ) : ?>
		$(document).keydown(function(e) {
			if ( e.keyCode == 27 ) {
				scp_destroyPlugin($);
			}
		});
		<?php endif; ?>
    });
</script>

<?php
function scp_tab_caption( $option, $css_class = '' ) {
	global $tab_index;
	$css_class = esc_attr( $css_class );
	printf( '<li data-index="' . $tab_index++ . '"' . ( empty( $css_class ) ? '' : " class='{$css_class}'" ) . '><span>%s</span></li>', esc_attr( get_scp_option( $option ) ) );
}

function scp_facebook_container() {
?>
	<div class="box">
		<?php if ( get_scp_option( 'setting_facebook_show_description' ) === '1' ) : ?>
			<p class="widget-description"><?php echo get_scp_option( 'setting_facebook_description' ); ?></p>
		<?php endif; ?>

		<?php
			// Заменяем Application ID на наш из настроек
			$facebook_container = sprintf( 
				file_get_contents( dirname( __FILE__ ) . '/partials/facebook_container.php' ),
				esc_attr( get_scp_option( 'setting_facebook_page_url' ) ),
				esc_attr( get_scp_option( 'setting_facebook_width' ) ),
				esc_attr( get_scp_option( 'setting_facebook_width' ) ),
				esc_attr( get_scp_option( 'setting_facebook_height' ) ),
				esc_attr( get_scp_option( 'setting_facebook_height' ) ),
				esc_attr( scp_to_bool( get_scp_option( 'setting_facebook_hide_cover' ) ) ),
				esc_attr( scp_to_bool( get_scp_option( 'setting_facebook_show_facepile' ) ) ),
				esc_attr( scp_to_bool( get_scp_option( 'setting_facebook_show_posts' ) ) )
			);
			echo $facebook_container;
		?>
	</div>
<?php
}

function scp_vkontakte_container() {
	$default_vk_group_id = 1;
?>
	<div class="box">
		<?php if ( get_scp_option( 'setting_vkontakte_show_description' ) === '1' ) : ?>
			<p class="widget-description"><b><?php echo get_scp_option( 'setting_vkontakte_description' ); ?></b></p>
		<?php endif; ?>

		<?php
			$page_or_group_id = esc_attr( get_scp_option( 'setting_vkontakte_page_or_group_id' ) );
			if ( empty( $page_or_group_id ) ) $page_or_group_id = $default_vk_group_id;

			$delay_before_render = esc_attr( get_scp_option( 'setting_vkontakte_delay_before_render' ) );
			if ( empty( $delay_before_render ) ) $delay_before_render = 0;

			// Заменяем Application ID на наш из настроек
			$vkontakte_container = sprintf( 
				file_get_contents( dirname( __FILE__ ) . '/partials/vkontakte_container.php' ),
				esc_attr( get_scp_option( 'setting_vkontakte_layout' ) ),
				esc_attr( get_scp_option( 'setting_vkontakte_width' ) ),
				esc_attr( get_scp_option( 'setting_vkontakte_height' ) ),
				esc_attr( get_scp_option( 'setting_vkontakte_color_background' ) ),
				esc_attr( get_scp_option( 'setting_vkontakte_color_text' ) ),
				esc_attr( get_scp_option( 'setting_vkontakte_color_button' ) ),
				$page_or_group_id,
				$delay_before_render
			);
			echo $vkontakte_container;
		?>
	</div>
<?php
}

function scp_odnoklassniki_container() {
?>
	<div class="box">
		<?php if ( get_scp_option( 'setting_odnoklassniki_show_description' ) === '1' ) : ?>
			<p class="widget-description"><b><?php echo get_scp_option( 'setting_odnoklassniki_description' ); ?></b></p>
		<?php endif; ?>

		<?php
			$odnoklassniki_container = sprintf( 
				file_get_contents( dirname( __FILE__ ) . '/partials/odnoklassniki_container.php' ),
				esc_attr( get_scp_option( 'setting_odnoklassniki_group_id' ) ),
				esc_attr( get_scp_option( 'setting_odnoklassniki_width' ) ),
				esc_attr( get_scp_option( 'setting_odnoklassniki_height' ) )
			);
			echo $odnoklassniki_container;
		?>
	</div>
<?php
}

function scp_googleplus_container() {
?>
	<div class="box">
		<?php if ( get_scp_option( 'setting_googleplus_show_description' ) === '1' ) : ?>
			<p class="widget-description"><b><?php echo get_scp_option( 'setting_googleplus_description' ); ?></b></p>
		<?php endif; ?>

		<?php
			$googleplus_container = sprintf( 
				file_get_contents( dirname( __FILE__ ) . '/partials/googleplus_container.php' ),
				esc_attr( get_scp_option( 'setting_googleplus_page_type' ) ),
				esc_attr( get_scp_option( 'setting_googleplus_size' ) ),
				esc_attr( get_scp_option( 'setting_googleplus_page_url' ) ),
				esc_attr( get_scp_option( 'setting_googleplus_theme' ) ),
				esc_attr( get_scp_option( 'setting_googleplus_show_tagline' ) ),
				esc_attr( get_scp_option( 'setting_googleplus_show_cover_photo' ) ),
				esc_attr( google_plus_relation_from_page_type() )
			);
			echo $googleplus_container;
		?>
	</div>
<?php
}

function google_plus_relation_from_page_type() {
	switch ( get_scp_option( 'setting_googleplus_page_type' ) ) {
		case 'page':
			return 'publisher';
		case 'person':
			return 'person';
		default:
			return '';
	}
}

function scp_twitter_container() {
	// Для нормального отображения/скрытия полос прокрутки нужно задавать свойство overflow
	$twitter_chrome = get_scp_option( 'setting_twitter_chrome' );
	$twitter_chrome = $twitter_chrome == '' ? array() : array_keys( (array) $twitter_chrome );
	$noscrollbars   = in_array( 'noscrollbars', $twitter_chrome );
	$overflow_css   = $noscrollbars ? 'hidden' : 'auto';

	$widget_height  = get_scp_option( 'setting_twitter_height' );
?>
	<div class="box" style="overflow:<?php echo esc_attr( $overflow_css ); ?>;height:<?php echo esc_attr( ( $widget_height - 20 ) ); ?>px;">
		<?php if ( get_scp_option( 'setting_twitter_show_description' ) === '1' ) : ?>
			<p class="widget-description"><b><?php echo get_scp_option( 'setting_twitter_description' ); ?></b></p>
		<?php endif; ?>

		<?php
			$twitter_container = sprintf( 
				file_get_contents( dirname( __FILE__ ) . '/partials/twitter_container.php' ),
				esc_attr( get_scp_option( 'setting_twitter_username' ) ),
				esc_attr( get_scp_option( 'setting_twitter_widget_id' ) ),
				esc_attr( get_scp_option( 'setting_twitter_theme' ) ),
				esc_attr( get_scp_option( 'setting_twitter_link_color' ) ),
				esc_attr( join( " ", $twitter_chrome ) ),
				esc_attr( get_scp_option( 'setting_twitter_tweet_limit' ) ),
				esc_attr( get_scp_option( 'setting_twitter_show_replies' ) ),
				esc_attr( get_scp_option( 'setting_twitter_width' ) ),
				esc_attr( $widget_height ),
				esc_attr( get_scp_option( 'setting_twitter_username' ) )
			);
			echo $twitter_container;
		?>
	</div>
<?php
}

function scp_pinterest_container() {
?>
	<div class="box">
		<?php if ( get_scp_option( 'setting_pinterest_show_description' ) === '1' ) : ?>
			<p class="widget-description"><b><?php echo get_scp_option( 'setting_pinterest_description' ); ?></b></p>
		<?php endif; ?>

		<?php
			$pinterest_container = sprintf(
				file_get_contents( dirname( __FILE__ ) . '/partials/pinterest_container.php' ),
				esc_attr( get_scp_option( 'setting_pinterest_profile_url' ) ),
				esc_attr( get_scp_option( 'setting_pinterest_image_width' ) ),
				esc_attr( get_scp_option( 'setting_pinterest_width' ) ),
				esc_attr( get_scp_option( 'setting_pinterest_height' ) )
			);
			echo $pinterest_container;
		?>
	</div>
<?php
}

