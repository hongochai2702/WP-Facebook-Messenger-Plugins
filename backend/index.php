<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/* 
 * Facebook Messenger Backend
 * Author Haihn
 * Sinle 1.0 
 * */

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class CHILIFacebookMessengerBackend {
	private $_menuSlug = 'facebook_messenger_options_page';
	private $_settingOptions;
        
	
	public function __construct() {
		$this->_settingOptions = get_option( 'facebook_messenger_options',  array() );
		add_action('admin_print_styles', array( $this, 'facebook_messenger_admin_style') );
		add_action( 'admin_enqueue_scripts', array( $this, 'facebook_messenger_admin_enqueue_scripts' ) );
		add_action('admin_init', array( $this, 'facebook_messenger_save_form' ) );
		add_action('admin_menu', array( $this, 'facebook_messenger_menu_options' ) );
	}
	
	/*  
	 * Facebook Messenger Form Setting
	 * */
	public function facebook_messenger_save_form(){
		register_setting('wap_form_messenger', 'facebook_messenger_options', array( $this, 'facebook_messenger_validate_setting' ));
			
	}
	
	//===============================================
	//Kiem tra cac dieu kien truoc khi luu du lieu vao database
	//===============================================
	public function facebook_messenger_validate_setting( $data ) {
		if (is_array($data)) {
			foreach ($data as & $val) {
				$val = sanitize_text_field($val);
			}
			unset($val );
		} else {
			$data = sanitize_text_field($val);
		}
		return $data;
	}
	
	/*
	 * Add Upload style and script
	 */
	
	public function facebook_messenger_admin_enqueue_scripts(){
		$page = @$_GET["page"];
		if ( $page == "facebook_messenger_options_page" ) {
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script('media-upload');
			wp_register_script('facebook-messenger-settings', FACEBOOK_MESSENGER_PLUGIN_URL . 'backend/js/settings.js',array( 'jquery', 'wp-color-picker' ),'',true);
			wp_localize_script( 'facebook-messenger-settings', 'object_name', array("url"=>FACEBOOK_MESSENGER_PLUGIN_URL."frontend/images/facebook-messenger.svg") );
			wp_enqueue_script('facebook-messenger-settings');
		}
	}
	
	public function facebook_messenger_admin_style() {
		wp_enqueue_media();
		wp_enqueue_style('thickbox');
		wp_enqueue_style( 'facebook-messenger-style', FACEBOOK_MESSENGER_PLUGIN_URL."backend/css/style.css" );       
	}
	
	/* 
	 * Facebook Messenger Admin Menu
	 *  */
	public function facebook_messenger_menu_options(){
		add_options_page(  __('Facebook Messenger', 'fb_messenger')  ,
						__('Facebook Messenger', 'fb_messenger') ,
						'manage_options',
						$this->_menuSlug, array( $this, 'facebook_messenger_option_pages' ) );
	}
	
	/*
	 * Add form options
	 */
	
	public function facebook_messenger_option_pages(){
		require_once FACEBOOK_MESSENGER_PLUGIN_DIR_VIEWS . '/fbmessenger-setting-options.php';
	} /* end facebook_messenger_options_page */
} // End class
 /* Load Class */
new CHILIFacebookMessengerBackend();