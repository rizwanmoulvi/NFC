<?php
	if(defined('IRECA_URL') 	== false) 	define('IRECA_URL', get_template_directory());
	if(defined('IRECA_URI') 	== false) 	define('IRECA_URI', get_template_directory_uri());

	load_theme_textdomain( 'ireca', IRECA_URL . '/languages' );
	
	// require libraries, function
	require( IRECA_URL.'/framework/init.php' );

	// Add js, css
	require( IRECA_URL.'/extend/add_js_css.php' );

	// register menu, widget
	require( IRECA_URL.'/extend/register_menu_widget.php' );

	require( IRECA_URL.'/templates/open_layout.php' );
	require( IRECA_URL.'/templates/close_layout.php' );

	require( IRECA_URL.'/templates/woo_open_layout.php' );
	require( IRECA_URL.'/templates/woo_close_layout.php' );
	

	// require menu
	require_once (IRECA_URL.'/extend/ova_walker_nav_menu.php');

	// require content
	require_once (IRECA_URL.'/content/define_blocks_content.php');
	
	// require breadcrumbs
	require( IRECA_URL.'/extend/breadcrumbs.php' );

	require( IRECA_URL.'/wpml/hooks.php' );	

	
	
	// Require customize
	if( is_user_logged_in() ){
		require( IRECA_URL.'/framework/customize_google_font/customizer_google_font.php' );
		require( IRECA_URL.'/extend/customizer.php' );
	}

	// Require metabox
	if( is_admin() ){
		require( IRECA_URL.'/extend/custom_metabox/add_custom_metabox.php' );
		require( IRECA_URL.'/extend/metabox.php' );
		// Require TGM
		require_once ( IRECA_URL.'/extend/active_plugins.php' );		
	}


	function ireca_wp_body_classes( $classes ){
		$lang = get_theme_mod( 'calendar_layout', 'en' ); 
		$calendar_dis_weekend = get_theme_mod( 'calendar_dis_weekend', '0,6' );
		$cal_time = get_theme_mod( 'calendar_time', '07:00, 07:30, 08:00, 08:30, 09:00, 09:30, 10:00, 10:30, 11:00, 11:30, 12:00, 12:30, 13:00, 13:30, 14:00, 14:30, 15:00, 15:30, 16:00, 16:30, 17:00, 17:30, 18:00' );
		
		$classes[] = '" data-lang="'.$lang.'';
		$classes[] = '" data-time="'.$cal_time.'';
		$classes[] = '" data-disweek="'.$calendar_dis_weekend.'';

	    return $classes;
	}
	add_filter( 'body_class','ireca_wp_body_classes', 9999 );



	// Active Request Booking Form
	

	if( get_theme_mod( 'rd_active_request_booking', 'false' ) == 'true' ){
		add_filter( 'body_class','ireca_ctive_request_booking', 9998 );
	}

	function ireca_ctive_request_booking( $classes ){
		$classes[] = 'active_request_booking';
	    return $classes;
	}


