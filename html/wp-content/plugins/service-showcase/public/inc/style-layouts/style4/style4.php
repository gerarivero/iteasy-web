<?php
defined( 'ABSPATH' ) || die();
require_once WLSBP_PLUGIN_DIR_PATH . 'includes/sr_helper.php';

wp_enqueue_style( 'style4', WLSBP_PLUGIN_URL . 'public/inc/style-layouts/style4/css/style-layout4.css', array(), true, 'all' );

wp_register_script( 'style4', '' );
wp_enqueue_script( 'style4' );

$style4_service_settings = get_post_meta( $id, 'wlsbp_style4_service_setting', true );

if ( is_array( $style4_service_settings ) ) {
	if ( isset( $style4_service_settings['custom_css'] ) && ! empty( $style4_service_settings['custom_css'] ) ) {
		$s2_service_custom_css = $style4_service_settings['custom_css'];
	}
	if ( isset( $style4_service_settings['service_icon_color'] ) ) {
		$s4_service_icon_color = $style4_service_settings['service_icon_color'];
	}
	if ( isset( $style4_service_settings['service_icon_color_bg_color'] ) ) {
		$s4_service_icon_color_bg_color = $style4_service_settings['service_icon_color_bg_color'];
	}
	if ( isset( $style4_service_settings['service_title_color'] ) ) {
		$s4_service_title_color = $style4_service_settings['service_title_color'];
	}
	if ( isset( $style4_service_settings['service_desc_color'] ) ) {
		$s4_service_desc_color = $style4_service_settings['service_desc_color'];
	}
	if ( isset( $style4_service_settings['service_readmore_text_color'] ) ) {
		$s4_service_readmore_text_color = $style4_service_settings['service_readmore_text_color'];
	}
	if ( isset( $style4_service_settings['service_readmore_bg_color'] ) ) {
		$s4_service_readmore_bg_color = $style4_service_settings['service_readmore_bg_color'];
	}
	if ( isset( $style4_service_settings['display_service_icon'] ) ) {
		$s4_display_service_icon = (bool) $style4_service_settings['display_service_icon'];
	}
	if ( isset( $style4_service_settings['display_service_rmlink'] ) ) {
		$s4_display_service_rmlink = (bool) $style4_service_settings['display_service_rmlink'];
	}
	if ( isset( $style4_service_settings['service_bg_color'] ) ) {
		$s4_service_bg_color = $style4_service_settings['service_bg_color'];
	}
	if ( isset( $style4_service_settings['service_title_fontsize'] ) ) {
		$s4_service_title_fontsize = $style4_service_settings['service_title_fontsize'];
	}
	if ( isset( $style4_service_settings['service_desc_fontsize'] ) ) {
		$s4_service_desc_fontsize = $style4_service_settings['service_desc_fontsize'];
	}
	if ( isset( $style4_service_settings['service_rmlink_fontsize'] ) ) {
		$s4_service_rmlink_fontsize = $style4_service_settings['service_rmlink_fontsize'];
	}
	if ( isset( $style4_service_settings['service_font_family'] ) ) {
		$s4_service_font_family = $style4_service_settings['service_font_family'];
	}
	if ( isset( $style4_service_settings['service_grid_layout'] ) ) {
		$s4_service_grid_layout = $style4_service_settings['service_grid_layout'];
	}

	if ( $blue !== $s4_service_icon_color ) {
		$css                   = '.wlsbp-style4-service-icon-' . esc_attr( $id ) . '{ color: ' . sanitize_hex_color( $s4_service_icon_color ) . '!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( $blue !== $s4_service_icon_color_bg_color ) {
		$css                   = '.ServiceShowcase .wlsbp-style4-service-icon' . '{ background-color: ' . sanitize_hex_color( $s4_service_icon_color_bg_color ) . '!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( $gray5 !== $s4_service_title_color ) {
		$css                   = '.wlsbp-style4-service-title-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s4_service_title_color ) . '!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( $gray6 !== $s4_service_desc_color ) {
		$css                   = '.wlsbp-style4-service-desc-' . esc_attr( $id ) . ' { color: ' . sanitize_hex_color( $s4_service_desc_color ) . '!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( $gray5 !== $s4_service_readmore_text_color ) {
		$css                   = '.wlsbp-style4-service-readmore-' . esc_attr( $id ) . ' span { color: ' . sanitize_hex_color( $s4_service_readmore_text_color ) . '!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( $blue !== $s4_service_readmore_bg_color ) {
		$css                   = '.wlsbp-style4-service-readmore-' . esc_attr( $id ) . ' { background-color: ' . sanitize_hex_color( $s4_service_readmore_bg_color ) . '!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( $white !== $s4_service_bg_color ) {
		$css                   = '.wlsbp-style4-service-bg-color-' . esc_attr( $id ) . ' { background-color: ' . sanitize_hex_color( $s4_service_bg_color ) . '!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( 16 !== $s4_service_title_fontsize ) {
		$css                   = '.wlsbp-style4-service-title-' . esc_attr( $id ) . ' { font-size: ' . abs( $s4_service_title_fontsize ) . 'px!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( 14 !== $s4_service_desc_fontsize ) {
		$css                   = '.wlsbp-style4-service-desc-' . esc_attr( $id ) . ' { font-size: ' . abs( $s4_service_desc_fontsize ) . 'px!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}
	if ( 16 !== $s4_service_rmlink_fontsize ) {
		$css                   = '.wlsbp-style4-service-readmore-' . esc_attr( $id ) . ' { font-size: ' . abs( $s4_service_rmlink_fontsize ) . 'px!important; } ';
		$s4_service_custom_css = $css . $s4_service_custom_css;
	}

	if ( ! empty( $s4_service_custom_css ) ) {
		wp_register_style( 'wlsbp-style4', '' );
		wp_enqueue_style( 'wlsbp-style4' );
		wp_add_inline_style( 'wlsbp-style4', $s4_service_custom_css );
	}
	if ( '' !== $s4_service_font_family ) {
		wp_enqueue_style( 'google-font-' . esc_attr( $s4_service_font_family ), esc_url( "https://fonts.googleapis.com/css?family=$s4_service_font_family" ), false );
	}

	$js = '
    (function(jQuery) {
        "use strict";
        jQuery(document).ready(function() {

            var font = "' . esc_attr( $s4_service_font_family ) . '";
            if("" !== font) {
                font = font.replace(/\+/g, " ");
                font = font.split(":");
                jQuery(".wlsbp-service-' . esc_attr( $id ) . '").css("font-family", font[0]);
            }
        });
    })(jQuery);';
	wp_add_inline_script( 'style4', $js );
}
?>
<div class="container service_style4 wlsbp-service-<?php echo esc_attr( $id ); ?>">
	<?php if ( $display_service_title ) { ?>
	<h2 class="wlsbp-ServiceShowcase-title"><?php echo esc_html( get_the_title( $id ) ); ?></h2>
	<?php } ?>
   <div class="row">
		<?php
			$i = 1;
		if ( is_array( $services ) && count( $services ) ) {
			foreach ( $services as $key => $service ) {
				?>
		<div class="wlsbp <?php echo esc_attr( $s4_service_grid_layout ); ?> col-sm-6 sbp_grid">
			<div class="ServiceShowcase wlsbp-style4-service-bg-color-<?php echo esc_attr( $id ); ?>">
				<?php if ( $s4_display_service_icon ) { ?>
				<i class="wlsbp-style4-service-icon wlsbp-style4-service-icon-<?php echo esc_attr( $id ); ?> <?php echo esc_html( $service['icon'] ); ?>"></i>
				<?php } ?>
				<?php if ( ! empty( $service['title'] ) ) { ?>
					<h4 class="wlsbp-style4-service-title wlsbp-style4-service-title-<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $service['title'] ); ?></h4>
				<?php } ?>
				<?php if ( ! empty( $service['desc'] ) ) { ?>
					<p class="wlsbp-style4-service-desc wlsbp-style4-service-desc-<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $service['desc'] ); ?></p>
				<?php } ?>
				<?php if ( $s4_display_service_rmlink ) { ?>
				<a target="_blank" href="<?php echo esc_url( $service['link'] ); ?>" class="wlsbp-style4-service-readmore wlsbp-style4-service-readmore-<?php echo esc_attr( $id ); ?>"><span>Read More</span></a>
				<?php } ?>
			</div>
		</div>
				<?php
			}
			$i++;
		}
		?>
	</div>
</div>