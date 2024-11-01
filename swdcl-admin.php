<?php
function swdcl_admin_menu() {

	$allowed_html = array( 'span' => array( 'class' => array () ) );
    add_submenu_page('options-general.php', 'Simple widget display conditions Lite', 'Simple widget display conditions Lite', 'manage_options', 'simple-widget-display-conditions-lite', 'swdcl_admin' );
}
add_action( 'admin_menu', 'swdcl_admin_menu' );


function swdcl_admin() {
settings_errors();
?>

<h1 class="swdcl_admin_title">Simple widget display conditions Lite</h1>

	<div class="swdcl_admin">

		<input type="radio" id="swdcl_m1" name="swdcl_info_menu" checked>
		<label for="swdcl_m1" class="swdcl_admin_menu_list_1"><?php esc_html_e( 'How to use', 'simple-widget-display-conditions-lite' ); ?></label>
		<div class="swdcl_admin_content_1">
			<br />
			<h2><?php esc_html_e( 'Getting started', 'simple-widget-display-conditions-lite' ); ?></h2>
			<p><?php esc_html_e( 'Set the widget from the widget page or theme customizer.', 'simple-widget-display-conditions-lite' ); ?></p>
			<p><a class="button button-primary button-large" href="<?php echo esc_url( admin_url( 'widgets.php' )); ?>"><?php esc_html_e( 'Go to widget page', 'simple-widget-display-conditions-lite' );?></a></p>
			<p><a class="button button-primary button-large" href="<?php echo esc_url( admin_url( 'customize.php' )); ?>"><?php esc_html_e( 'Go to customizer', 'simple-widget-display-conditions-lite' );?></a></p>
			<br />
			<h2><?php esc_html_e( 'Explanation', 'simple-widget-display-conditions-lite' ); ?></h2>
			<p><?php esc_html_e( 'See the following article:', 'simple-widget-display-conditions-lite' ); ?></p>
			<p><span class="dashicons dashicons-media-document"></span><a target="_blank" rel="noopener" href="<?php if( get_locale( ) != 'ja' ){ echo 'https://yws.tokyo/swdclite-howto-en/'; }else{ echo 'https://yws.tokyo/swdclite-howto/'; }?>" /><?php if( get_locale( ) != 'ja' ){ echo 'https://yws.tokyo/swdclite-howto-en/'; }else{ echo 'https://yws.tokyo/swdclite-howto/'; }?></a></p>
			<p><?php esc_html_e( 'Please ask questions from the comments.', 'simple-widget-display-conditions-lite' ); ?></p>
			<p><?php esc_html_e( 'If you find any strange behavior, please report it as it will be corrected.', 'simple-widget-display-conditions-lite' ); ?></p>
		</div>

		<input type="radio" id="swdcl_m2" name="swdcl_info_menu">
		<label for="swdcl_m2" class="swdcl_admin_menu_list_2"><?php esc_html_e( 'Screenshot', 'simple-widget-display-conditions-lite' ); ?></label>
		<div class="swdcl_admin_content_2">
			<br />
			<h2><?php esc_html_e( 'Step1', 'simple-widget-display-conditions-lite' ); ?></h2>
			<p><?php esc_html_e( 'Click‘display conditions\'.', 'simple-widget-display-conditions-lite' ); ?></p>
			<div class="swdcl_img"><img src="<?php if( get_locale( ) != 'ja' ){ echo esc_url( plugins_url( 'images/swdc_img1.png', __FILE__ )); }else{ echo esc_url( plugins_url( 'images/swdc_ja_img1.png', __FILE__ )); }?>" /></div>

			<br />
			<h2><?php esc_html_e( 'Step2', 'simple-widget-display-conditions-lite' ); ?></h2>
			<p><?php esc_html_e( 'Please set.', 'simple-widget-display-conditions-lite' ); ?></p>
			<div class="swdcl_img"><img src="<?php if( get_locale( ) != 'ja' ){ echo esc_url( plugins_url( 'images/swdcl.png', __FILE__ )); }else{ echo esc_url( plugins_url( 'images/swdcl_ja.png', __FILE__ )); }?>" /></div>
		</div>

		<input type="radio" id="swdcl_m3" name="swdcl_info_menu">
		<label for="swdcl_m3" class="swdcl_admin_menu_list_3"><?php esc_html_e( 'More functional', 'simple-widget-display-conditions-lite' ); ?></label>
		<div class="swdcl_admin_content_3">
			<br />
			<h2><?php esc_html_e( 'Introduction of "Simple widget display conditions" with added functions', 'simple-widget-display-conditions-lite' ); ?></h2>
			<p><?php esc_html_e( 'The following functions have been added compared to the Lite version.', 'simple-widget-display-conditions-lite' ); ?></p>
			<ul class="swdcl_ul">
				<li><?php esc_html_e( '- Tag ID specification', 'simple-widget-display-conditions-lite' ); ?>
				<li><?php esc_html_e( '- Specify browser width', 'simple-widget-display-conditions-lite' ); ?>
				<li><?php esc_html_e( '- Word specification included in URL', 'simple-widget-display-conditions-lite' ); ?>
			</ul>
			<br />
			<p><a target="_blank" rel="noopener" class="button button-primary button-large" href="<?php if( get_locale( ) != 'ja' ){ echo 'https://yws.tokyo/swdc-function-introduction-en/'; }else{ echo 'https://yws.tokyo/swdc-function-introduction/'; }?>"><?php esc_html_e( 'Click here for details', 'simple-widget-display-conditions-lite' );?></a></p>
		</div>

	</div>

<?php
}
