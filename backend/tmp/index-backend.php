<?php
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
/*
 * Add menu admin options
 */
add_action( 'admin_menu', 'facebook_messenger_menu_options' );
function facebook_messenger_menu_options(){
	add_submenu_page( 'options-general.php', __('Facebook Messenger', 'fb_messenger') , __('Facebook Messenger', 'fb_messenger'), 'manage_options', 'facebook_messenger_options_page', 'facebook_messenger_options_page' );
}
/*
 * Add Upload style and script
 */
add_action( 'admin_enqueue_scripts', 'facebook_messenger_admin_enqueue_scripts' );
function facebook_messenger_admin_enqueue_scripts(){
	$page = @$_GET["page"];
	if ( $page == "facebook_messenger_options_page" ) {
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script('media-upload');
		wp_register_script('facebook-messenger-settings', FACEBOOK_MESSENGER_PLUGIN_URL . 'backend/js/settings.js',array( 'jquery', 'wp-color-picker' ),'',true);
		wp_localize_script( 'facebook-messenger-settings', 'object_name', array("url"=>FACEBOOK_MESSENGER_PLUGIN_URL."frontend/images/facebook-messenger.svg") );
		wp_enqueue_script('facebook-messenger-settings');
	}
}
function facebook_messenger_admin_style() {
	wp_enqueue_media();
	wp_enqueue_style('thickbox');
	wp_enqueue_style( 'facebook-messenger-style', FACEBOOK_MESSENGER_PLUGIN_URL."backend/css/style.css" );
}
add_action('admin_print_styles', 'facebook_messenger_admin_style');
/*
 * Add form options
 */

function facebook_messenger_options_page(){
	require_once FACEBOOK_MESSENGER_PLUGIN_DIR_VIEWS . '/fbmessenger-setting-options.php';
} /* end facebook_messenger_options_page */

/*
 * Validate options
 */

/*
 * Save options
 */
add_action("admin_init","facebook_messenger_save_form");
function facebook_messenger_save_form(){
	register_setting("wap_form_messenger","facebook_messenger_type");
	register_setting("wap_form_messenger","facebook_messenger_app");
	register_setting("wap_form_messenger","facebook_messenger_chat_facebook_display");
	register_setting("wap_form_messenger","facebook_messenger_app_text");
	register_setting("wap_form_messenger","facebook_messenger_display");
	register_setting("wap_form_messenger","facebook_messenger_postion");
	register_setting("wap_form_messenger","facebook_messenger_lang");
	register_setting("wap_form_messenger","facebook_messenger_backgroud");
	register_setting("wap_form_messenger","facebook_messenger_user");
	register_setting("wap_form_messenger","facebook_messenger_hide_display");
	register_setting("wap_form_messenger","facebook_messenger_hide_page");
	register_setting("wap_form_messenger","facebook_messenger_show_page");
	register_setting("wap_form_messenger","facebook_messenger_text_img");
	register_setting("wap_form_messenger","facebook_messenger_text_botton");
}