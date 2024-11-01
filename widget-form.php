<?php
function simple_widget_display_conditions_lite_form( $widget, $return, $instance ){

	$swdcl_cat_id = isset( $instance['swdcl_cat_id'] ) ? $instance['swdcl_cat_id'] : '';
	$swdcl_cat_in = isset( $instance['swdcl_cat_in'] ) ? $instance['swdcl_cat_in'] : '';
	$swdcl_pp_id = isset( $instance['swdcl_pp_id'] ) ? $instance['swdcl_pp_id'] : '';
	$swdcl_pp_in = isset( $instance['swdcl_pp_in'] ) ? $instance['swdcl_pp_in'] : '';
	$swdcl_toppage = isset( $instance['swdcl_toppage'] ) ? $instance['swdcl_toppage'] : '';
	$swdcl_single = isset( $instance['swdcl_single'] ) ? $instance['swdcl_single'] : '';
	$swdcl_page = isset( $instance['swdcl_page'] ) ? $instance['swdcl_page'] : '';
	$swdcl_category = isset( $instance['swdcl_category'] ) ? $instance['swdcl_category'] : '';
	$swdcl_tag = isset( $instance['swdcl_tag'] ) ? $instance['swdcl_tag'] : '';
	$swdcl_author = isset( $instance['swdcl_author'] ) ? $instance['swdcl_author'] : '';
	$swdcl_archive = isset( $instance['swdcl_archive'] ) ? $instance['swdcl_archive'] : '';
	$swdcl_search = isset( $instance['swdcl_search'] ) ? $instance['swdcl_search'] : '';
	$swdcl_404 = isset( $instance['swdcl_404'] ) ? $instance['swdcl_404'] : '';
	$swdcl_login = isset( $instance['swdcl_login'] ) ? $instance['swdcl_login'] : '';
	$swdcl_notlogin = isset( $instance['swdcl_notlogin'] ) ? $instance['swdcl_notlogin'] : '';

	?>
	<div class="swdcl_div">
	<input class="swdcl_none" type="checkbox" id="<?php echo esc_attr($widget->get_field_id( 'swdcl_cat_id' )) . '_s'; ?>" />
	<label class="swdcl_title" for="<?php echo esc_attr($widget->get_field_id( 'swdcl_cat_id' )) . '_s'; ?>"><?php esc_html_e( 'Display condition', 'simple-widget-display-conditions-lite' ); ?></label>


	<div class="swdcl_content">

		<div class="swdcl_w_div swdcl_w_div100 swdcl_bg_red"><div class="swdcl_w_div_label"><span><?php esc_html_e( 'Specify hidden pages:', 'simple-widget-display-conditions-lite' ); ?></span></div>
			<?php
			$i = 0;
			$options = array(__( 'Top Page', 'simple-widget-display-conditions-lite' ),__( 'Single', 'simple-widget-display-conditions-lite' ),__( 'Page', 'simple-widget-display-conditions-lite' ),__( 'Category', 'simple-widget-display-conditions-lite' ),__( 'Tag', 'simple-widget-display-conditions-lite' ),__( 'Author', 'simple-widget-display-conditions-lite' ),__( 'Archive', 'simple-widget-display-conditions-lite' ),__( 'Search', 'simple-widget-display-conditions-lite' ),__( '404', 'simple-widget-display-conditions-lite' ),__( 'logined', 'simple-widget-display-conditions-lite' ),__( 'Not login', 'simple-widget-display-conditions-lite' ));
			$opkey = array('swdcl_toppage','swdcl_single','swdcl_page','swdcl_category','swdcl_tag','swdcl_author','swdcl_archive','swdcl_search','swdcl_404','swdcl_login','swdcl_notlogin');
			$opname = array($swdcl_toppage,$swdcl_single,$swdcl_page,$swdcl_category,$swdcl_tag,$swdcl_author,$swdcl_archive,$swdcl_search,$swdcl_404,$swdcl_login,$swdcl_notlogin);
			foreach ($options as $option) {
			?>
			<div class="swdcl_w_tate swdcl_w_list"><input type="checkbox" id="<?php echo esc_attr($widget->get_field_name( $opkey[$i])); ?>_<?php echo absint( $i ); ?>" name="<?php echo esc_attr($widget->get_field_name( $opkey[$i])); ?>" value="<?php echo esc_attr( $option );?>"<?php if ( $opname[$i] ) echo ' checked="checked"';?>><label for="<?php echo esc_attr($widget->get_field_name( $opkey[$i])); ?>_<?php echo absint( $i ); ?>"><?php echo esc_attr( $option );?></label>

			</div>
		<?php ++$i; } ?></div>


		<div class="swdcl_w_div swdcl_w_sp swdcl_bg_blue"><div class="swdcl_w_div_label"><span><?php esc_html_e( 'Cat_ID specification:', 'simple-widget-display-conditions-lite' ); ?></span></div>

			<p class="swdcl"><label for="<?php echo esc_attr($widget->get_field_id( 'swdcl_cat_id' )); ?>"><?php esc_html_e( 'ID:', 'simple-widget-display-conditions-lite' ); ?></label><input id="<?php echo esc_attr($widget->get_field_id( 'swdcl_cat_id' )); ?>" name="<?php echo esc_attr($widget->get_field_name( 'swdcl_cat_id' )); ?>" type="text" value="<?php echo esc_attr($swdcl_cat_id); ?>" placeholder="<?php esc_html_e( 'Ex: 3,20,567', 'simple-widget-display-conditions-lite' ); ?>" /></p>
		
			<p><select class="widefat" id="<?php echo esc_attr($widget->get_field_id( 'swdcl_cat_in' )); ?>" name="<?php echo esc_attr($widget->get_field_name( 'swdcl_cat_in' )); ?>">
			<?php
				$options = array(__( 'Display other than above', 'simple-widget-display-conditions-lite' ),__( 'Display only the above', 'simple-widget-display-conditions-lite' ));
				foreach ($options as $option) {
			?>
			<option value="<?php echo esc_attr( $option );?>"<?php if ( $swdcl_cat_in == $option ) echo ' selected="selected"';?>><?php echo esc_attr( $option );?></option>
			<?php } ?>
			</select></p>

		</div>

		<div class="swdcl_w_div swdcl_bg_green"><div class="swdcl_w_div_label"><span><?php esc_html_e( 'Post_ID specification:', 'simple-widget-display-conditions-lite' ); ?></span></div>

			<p class="swdcl"><label for="<?php echo esc_attr($widget->get_field_id( 'swdcl_pp_id' )); ?>"><?php esc_html_e( 'ID:', 'simple-widget-display-conditions-lite' ); ?></label><input id="<?php echo esc_attr($widget->get_field_id( 'swdcl_pp_id' )); ?>" name="<?php echo esc_attr($widget->get_field_name( 'swdcl_pp_id' )); ?>" type="text" value="<?php echo esc_attr($swdcl_pp_id); ?>" placeholder="<?php esc_html_e( 'Ex: 3,20,567', 'simple-widget-display-conditions-lite' ); ?>" /></p>
		
			<p><select class="widefat" id="<?php echo esc_attr($widget->get_field_id( 'swdcl_pp_in' )); ?>" name="<?php echo esc_attr($widget->get_field_name( 'swdcl_pp_in' )); ?>">
			<?php
				$options = array(__( 'Display other than above', 'simple-widget-display-conditions-lite' ),__( 'Display only the above', 'simple-widget-display-conditions-lite' ));
				foreach ($options as $option) {
			?>
			<option value="<?php echo esc_attr( $option );?>"<?php if ( $swdcl_pp_in == $option ) echo ' selected="selected"';?>><?php echo esc_attr( $option );?></option>
			<?php } ?>
			</select></p>

		</div>

		<div class="clear"></div>
	</div>
	</div>

<?php }
add_filter( 'in_widget_form', 'simple_widget_display_conditions_lite_form', 10, 3 );

function simple_widget_display_conditions_lite_id( $id ){
	$id = mb_convert_kana( $id,'n','utf-8' );
	$id = preg_replace('/[^0-9,]/', '', $id);
	return $id;
}

function simple_widget_display_conditions_lite_update( $instance, $new_instance, $old_instance ){

	$instance['swdcl_cat_id'] = sanitize_text_field( simple_widget_display_conditions_lite_id( $new_instance['swdcl_cat_id'] ) );
	$instance['swdcl_cat_in'] = stripslashes($new_instance['swdcl_cat_in']);
	$instance['swdcl_pp_id'] = sanitize_text_field( simple_widget_display_conditions_lite_id( $new_instance['swdcl_pp_id'] ) );
	$instance['swdcl_pp_in'] = stripslashes($new_instance['swdcl_pp_in']);
	$instance['swdcl_toppage'] = isset( $new_instance['swdcl_toppage'] ) ? (bool) $new_instance['swdcl_toppage'] : false;
	$instance['swdcl_single'] = isset( $new_instance['swdcl_single'] ) ? (bool) $new_instance['swdcl_single'] : false;
	$instance['swdcl_page'] = isset( $new_instance['swdcl_page'] ) ? (bool) $new_instance['swdcl_page'] : false;
	$instance['swdcl_category'] = isset( $new_instance['swdcl_category'] ) ? (bool) $new_instance['swdcl_category'] : false;
	$instance['swdcl_tag'] = isset( $new_instance['swdcl_tag'] ) ? (bool) $new_instance['swdcl_tag'] : false;
	$instance['swdcl_author'] = isset( $new_instance['swdcl_author'] ) ? (bool) $new_instance['swdcl_author'] : false;
	$instance['swdcl_archive'] = isset( $new_instance['swdcl_archive'] ) ? (bool) $new_instance['swdcl_archive'] : false;
	$instance['swdcl_search'] = isset( $new_instance['swdcl_search'] ) ? (bool) $new_instance['swdcl_search'] : false;
	$instance['swdcl_404'] = isset( $new_instance['swdcl_404'] ) ? (bool) $new_instance['swdcl_404'] : false;
	$instance['swdcl_login'] = isset( $new_instance['swdcl_login'] ) ? (bool) $new_instance['swdcl_login'] : false;
	$instance['swdcl_notlogin'] = isset( $new_instance['swdcl_notlogin'] ) ? (bool) $new_instance['swdcl_notlogin'] : false;

	return $instance;
}
add_filter( 'widget_update_callback', 'simple_widget_display_conditions_lite_update', 10, 3 );
