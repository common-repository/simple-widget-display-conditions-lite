<?php
function simple_widget_display_conditions_lite_wid( $widget_id ){

	if ( preg_match( '/^(.+)-(\d+)$/', $widget_id, $m ) )	{

		$widget_class = $m[1];
		$widget_i = $m[2];

		$info = get_option( 'widget_'.$widget_class );
		if ( empty( $info[ $widget_i ] ) ) return '';
		$info = $info[ $widget_i ];
	}

	return $info;

}

function simple_widget_display_conditions_lite_display( $sidebars_widgets ) {

$swdcl_bwcss = '';

	foreach($sidebars_widgets as $widget_area => $widget_list)  {

	if ($widget_area == 'wp_inactive_widgets' || empty($widget_list)) continue;


		foreach($widget_list as $pos => $widget_id) {

			$instance = simple_widget_display_conditions_lite_wid( $widget_id );
			$exclude = __( 'Display other than above', 'simple-widget-display-conditions-lite' );
			$swdcl_cat_id = isset( $instance['swdcl_cat_id'] ) ? $instance['swdcl_cat_id'] : '';
			$swdcl_cat_in = isset( $instance['swdcl_cat_in'] ) ? $instance['swdcl_cat_in'] : $exclude;
			$swdcl_pp_id = isset( $instance['swdcl_pp_id'] ) ? $instance['swdcl_pp_id'] : '';
			$swdcl_pp_in = isset( $instance['swdcl_pp_in'] ) ? $instance['swdcl_pp_in'] : $exclude;
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

			if( strstr($swdcl_cat_id,',') ) {
				$swdcl_cat_id_array = explode(',',$swdcl_cat_id);			
			}else{
				$swdcl_cat_id_array = $swdcl_cat_id;
			}
			if( strstr($swdcl_pp_id,',') ) {
				$swdcl_pp_id_array = explode(',',$swdcl_pp_id);
			}else{
				$swdcl_pp_id_array = $swdcl_pp_id;
			}

			if( $swdcl_toppage ) if( is_home() || is_front_page() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_single ) if( is_single() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_page ) if( is_page() || is_page_template() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_category ) if( is_category() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_tag ) if( is_tag() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_author ) if( is_author() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_archive ) if( is_date() || is_post_type_archive() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_search ) if( is_search() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_404 ) if( is_404() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_login ) if( is_user_logged_in() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_notlogin ) if( !is_user_logged_in() ) unset($sidebars_widgets[$widget_area][$pos]);
			if( $swdcl_toppage || $swdcl_login || $swdcl_single || $swdcl_category || $swdcl_tag || $swdcl_author || $swdcl_archive || $swdcl_search || $swdcl_404 || $swdcl_login || !is_user_logged_in() ) if( is_attachment() ) unset($sidebars_widgets[$widget_area][$pos]);

			if( $swdcl_cat_id && $swdcl_pp_id ) {

				if( $swdcl_cat_in == $exclude && $swdcl_pp_in == $exclude ) {
					if( is_single() ){
						if( in_category($swdcl_cat_id_array)|| is_single($swdcl_pp_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					}else{
						if( is_category($swdcl_cat_id_array)|| is_page($swdcl_pp_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					}
					
				}elseif( $swdcl_cat_in != $exclude && $swdcl_pp_in == $exclude ) {
					
					if( is_single( $swdcl_pp_id_array ) ) {
						unset($sidebars_widgets[$widget_area][$pos]);
					}elseif( is_single() ){
						if( !in_category($swdcl_cat_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					}
					if( is_page( $swdcl_pp_id_array ) ) unset($sidebars_widgets[$widget_area][$pos]);
					if( is_category() ) if( !is_category($swdcl_cat_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					if( !is_single() && !is_page() && !is_category() ) unset($sidebars_widgets[$widget_area][$pos]);

				}elseif( $swdcl_pp_in != $exclude ) {

					if( !is_single($swdcl_pp_id_array) && !is_page($swdcl_pp_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);

				}

			}elseif( $swdcl_cat_id ) {

				if( $swdcl_cat_in == $exclude ) {
					if( is_single() ){
						if(  in_category($swdcl_cat_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					}elseif( !is_home() && !is_front_page() ) {
						if( is_category($swdcl_cat_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					}
				}elseif( $swdcl_cat_in != $exclude ) {
					if( is_single() || is_page() ) if( !in_category($swdcl_cat_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					if( is_category() ) if( !is_category($swdcl_cat_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					if( !is_single() && !is_page() && !is_category() ) unset($sidebars_widgets[$widget_area][$pos]);
				}

			}elseif( $swdcl_pp_id ) {

				if( $swdcl_pp_in == $exclude ) {			
					if( is_single($swdcl_pp_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
					if( is_page($swdcl_pp_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
				}elseif( $swdcl_pp_in != $exclude ) {
					if( !is_page($swdcl_pp_id_array) && !is_single($swdcl_pp_id_array) ) unset($sidebars_widgets[$widget_area][$pos]);
				}

			}

		}
	}

	return $sidebars_widgets;
}
add_filter( 'sidebars_widgets', 'simple_widget_display_conditions_lite_display' );