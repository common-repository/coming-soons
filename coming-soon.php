<?php
/*
	 Plugin Name: Rich Coming Soon - Maintenance Mode & Under Construction
	 Plugin URI: https://rich-web.org/wp-coming-soon
	 Version: 1.2.0	 
	 Description: Coming Soon WP plugin is Modern and responsive, manage your website while under construction or maintenance mode.
	 Author: richteam
	 Author URI: https://rich-web.org/
	 License: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	define( 'RW_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

	register_activation_hook( __FILE__, 'Rich_Web_CS_wp_activate' );
function Rich_Web_CS_wp_activate() {
	include 'functions/RW_CS_Install.php';
}
	add_action( 'admin_menu', 'Rich_Web_CS_Admin_Menu' );

function Rich_Web_CS_Admin_Menu() {
	 $rw_menu = add_menu_page( 'Rich-Web CS Admin', 'Coming Soon', 'manage_options', 'Rich-Web CS Admin', 'Manage_Rich_Web_CS_Admin', plugins_url( '/backend/Images/admin.png', __FILE__ ) );
	add_action( 'admin_print_styles-' . $rw_menu, 'rw_cs_script' );
	add_submenu_page( 'Rich-Web CS Admin', 'Rich-Web Coming Soon Products', 'Our Products', 'manage_options', 'Rich-Web Coming Soon Products', 'Manage_Rich_Web_Coming_Soon_Products' );
}
function Manage_Rich_Web_CS_Admin() {
	require_once 'backend/Rich-Web-CS-Admin.php';
}
	require_once 'functions/script.php';
	require_once 'theme/Rich-Web-CS-Ajax.php';
function Manage_Rich_Web_Coming_Soon_Products() {
	require_once 'backend/Rich-Web-Products.php';
}
function rw_cs_dir() {
	$rw_cs_mode   = maybe_unserialize( get_option( 'rw_cs_mode' ) );
	$rw_cs_background = maybe_unserialize(get_option('rw_cs_background'));
	$rw_cs_countdown = maybe_unserialize(get_option('rw_cs_countdown'));
	$rw_cs_yes_no = $rw_cs_mode['rw_cs_plugin_mode'];

	wp_register_script( 'rw_cs_particles', RW_PLUGIN_URL . 'theme/js/particles.js',array("jquery") );
	wp_register_script( 'app', RW_PLUGIN_URL . 'theme/js/app.js',array("jquery") );
	wp_register_script( 'bubble', RW_PLUGIN_URL . 'theme/js/bubble.js',array("jquery") );
	wp_register_script( 'constellation', RW_PLUGIN_URL . 'theme/js/constellation.js',array("jquery") );
	wp_register_script( 'constallationLib', RW_PLUGIN_URL . 'theme/js/constallationLib.js',array("jquery") );
	wp_register_script( 'constallationStats', RW_PLUGIN_URL . 'theme/js/constallationStats.js',array("jquery") );
	wp_register_script( 'Constindex', RW_PLUGIN_URL . 'theme/js/Constindex.js',array("jquery"),'', true );
	wp_register_script( 'plugins', RW_PLUGIN_URL . 'theme/js/plugins.js',array("jquery") );
	wp_register_script( 'main', RW_PLUGIN_URL . 'theme/js/main.js',array("jquery") );
	wp_register_script( 'hover', RW_PLUGIN_URL . 'theme/js/hover.js',array("jquery") );

	wp_register_script( 'youtube', RW_PLUGIN_URL . 'theme/js/youtube.js',array("jquery") );
	wp_register_script( 'script', RW_PLUGIN_URL . 'theme/js/script.js',array("jquery") );
	wp_register_script( 'scriptvsl', RW_PLUGIN_URL . 'theme/js/scriptvsl.js',array("jquery") );

	wp_register_script( 'global', RW_PLUGIN_URL . 'theme/js/global.js',array("jquery") );
	wp_register_script( 'countdown', RW_PLUGIN_URL . 'theme/js/jquery.countdown.js',array("jquery") );

	wp_register_script( 'knob', RW_PLUGIN_URL . 'theme/js/jquery.knob.js',array("jquery") );
	wp_register_script( 'throttle', RW_PLUGIN_URL . 'theme/js/jquery.throttle.js',array("jquery") );
	wp_register_script( 'classycountdown', RW_PLUGIN_URL . 'theme/js/jquery.classycountdown.js',array("jquery") );

	wp_register_script( 'intlTelInput', RW_PLUGIN_URL . 'theme/js/intlTelInput.min.js',array("jquery") );
	wp_register_script( 'countrySelect', RW_PLUGIN_URL . 'theme/js/countrySelect.min.js',array("jquery") );
	wp_register_script( 'contact_form', RW_PLUGIN_URL . 'theme/js/contact_form.js',array("jquery") );
	wp_register_script( 'datepicker', esc_url(includes_url('/js/jquery/ui/datepicker.min.js')),array("jquery") );
	$register_arr=array('jquery','intlTelInput', 'countrySelect','contact_form', 'datepicker' );
	if($rw_cs_background['rw_cs_bg_anim']=='Show') { 
		if($rw_cs_background['rw_cs_bg_anim_type']=='Particle') { 
			array_push($register_arr, 'rw_cs_particles');
			array_push($register_arr, 'app');
		 }else if($rw_cs_background['rw_cs_bg_anim_type']=='Bubble') { 
			array_push($register_arr, 'bubble');
		 }else if($rw_cs_background['rw_cs_bg_anim_type']=='Constellationel') { 
			array_push($register_arr,  'constellation', 'constallationLib','constallationStats', 'Constindex');
		}else if($rw_cs_background['rw_cs_bg_anim_type']=='Snowland') { 
			array_push($register_arr,  'plugins', 'main');
		}else if($rw_cs_background['rw_cs_bg_anim_type']=='Hover') { 
			array_push($register_arr,   'hover');
		} 
    } 
    if($rw_cs_background['rw_cs_bg_type']=='Video'){ 
		array_push($register_arr, 'youtube', 'script');
     }else if($rw_cs_background['rw_cs_bg_type']=='Video Slieshow'){ 
		array_push($register_arr, 'youtube','scriptvsl');
     } 

	 if($rw_cs_countdown['rw_cs_cout_show']=="show"){ 
		if($rw_cs_countdown['rw_cs_count_anim']=="Yes"){ 
			if($rw_cs_countdown['rw_cs_count_type']=="Type 1"){
				array_push($register_arr, 'global', 'countdown');
			 }else{
				array_push($register_arr,'knob', 'throttle','classycountdown');
			}
		}else{
			if($rw_cs_countdown['rw_cs_count_type']=="Type 1"){
				array_push($register_arr, 'global', 'countdown');
			}else{
				array_push($register_arr,'knob', 'throttle','classycountdown');
			}
		}
	}
	
	 wp_register_script( 'rw_cs_public_js', RW_PLUGIN_URL . 'theme/js/init.js', $register_arr);
	 wp_enqueue_script( 'rw_cs_public_js' );

	if ( $rw_cs_yes_no == '1' ) {
		// Exit if a custom login page
		if ( preg_match( '/login|admin|dashboard|account/i', $_SERVER['REQUEST_URI'] ) > 0 ) {
			return false;
		}
		// Check if user is logged in.
		if ( ! is_user_logged_in() ) {

			$file = plugin_dir_path( __FILE__ ) . 'theme/index.php';
			include $file;
			exit();
		} else {
			$wp_get_current_user = wp_get_current_user();
			$LoggedInUserID      = $wp_get_current_user->ID;
			$UserData            = get_userdata( $LoggedInUserID );

			if ( $UserData->roles[0] != 'administrator' ) {
				$file = plugin_dir_path( __FILE__ ) . 'theme/index.php';
				include $file;
				exit();
			}else{
				if ( ( isset( $_GET['rw_cs_preview'] ) && $_GET['rw_cs_preview'] == 'true' ) ) {
					$file = plugin_dir_path( __FILE__ ) . 'theme/index.php';
					include $file;
					exit();
				}
			}
		}
	}
}
	add_action( 'template_redirect', 'rw_cs_dir' );



	add_action( 'admin_bar_menu', 'rw_cs_admin_bar_button', 1000 );
function rw_cs_admin_bar_button() {
	 global $wp_admin_bar;
	// $msg = __('Coming Soon Mode Active','');
	// Add Parent Menu
	$argsParent = array(
		'id'     => 'myCustomMenu',
		// 'title' => $msg,
		'parent' => 'top-secondary',
		'href'   => '?page=rw_coming_soon_wp',
		'meta'   => array( 'class' => 'rw_cs_admin_bar_button_cs' ),
	);
	$wp_admin_bar->add_menu( $argsParent );

}

function Rich_Web_CS_Color() {
	wp_enqueue_script(
		'alpha-color-picker-cs',
		plugins_url( '/backend/js/alpha-color-picker-cs.js', __FILE__ ),
		array( 'jquery', 'wp-color-picker' ), // You must include these here.
		null,
		true
	);
	wp_enqueue_style(
		'alpha-color-picker-cs',
		plugins_url( '/backend/css/alpha-color-picker-cs.css', __FILE__ ),
		array( 'wp-color-picker' ) // You must include these here.
	);
}
	add_action( 'admin_enqueue_scripts', 'Rich_Web_CS_Color' );

	add_action( 'wp_enqueue_scripts', 'Rich_Web_CS_Style' );

function Rich_Web_CS_Style() {
	wp_register_style( 'richwebicons', RW_PLUGIN_URL . '/backend/css/richwebicons.css' );
	wp_register_style( 'classycountdown', RW_PLUGIN_URL . 'theme/css/jquery.classycountdown.css' );
	wp_register_style( 'jquery_ui', RW_PLUGIN_URL . 'theme/css/jquery-ui.css' );
	wp_register_style( 'countrySelect', RW_PLUGIN_URL . 'theme/css/countrySelect.min.css' );
	wp_register_style( 'intlTelInput', RW_PLUGIN_URL . 'theme/css/intlTelInput.css' );
	wp_register_style( 'styles', RW_PLUGIN_URL . 'theme/css/styles.css' );

	wp_register_style( 'Rich_Web_comming_soon', RW_PLUGIN_URL . 'theme/css/style.css', array( 'richwebicons', 'classycountdown', 'jquery_ui', 'countrySelect', 'intlTelInput' , 'styles' ) );
	wp_enqueue_style( 'Rich_Web_comming_soon' );

	
}


