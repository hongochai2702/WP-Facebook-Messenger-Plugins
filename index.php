<?php
/*
Plugin Name: CHILI Facebook Messenger
Plugin URI: https://chili.vn/appps/facebook-messenger-for-comp/
Description: Giúp khách hàng có thể dễ dàng liên hệ qua ứng dụng của Facebook.
Author: CHILI Team
Version: 1.1
Author URI: https://chili.vn/
*/
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}
define( 'FACEBOOK_MESSENGER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

define( 'FACEBOOK_MESSENGER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'FACEBOOK_MESSENGER_PLUGIN_DIR_BACKEND', FACEBOOK_MESSENGER_PLUGIN_DIR . 'backend' );
define( 'FACEBOOK_MESSENGER_PLUGIN_DIR_FRONTEND', FACEBOOK_MESSENGER_PLUGIN_DIR . 'frontend' );
define( 'FACEBOOK_MESSENGER_PLUGIN_DIR_VIEWS', FACEBOOK_MESSENGER_PLUGIN_DIR_BACKEND . '/views' );

add_action('plugins_loaded', 'chili_facebook_messenger_lang');
function chili_facebook_messenger_lang() {
	$plugin_dir = dirname(plugin_basename(__FILE__)).'/languages/';
	load_plugin_textdomain( 'fb_messenger', false, $plugin_dir );
}

/*
* Add default options active plugin
*/
function chili_facebook_messenger_chat_on_plugin_activation() {
  
   $default = array(
   		'facebook_messenger_user' => 'https://www.facebook.com/chili.com.vn',
   		'facebook_messenger_backgroud' => '#0075FF',
   		'facebook_messenger_lang' => 'vi_VN',
   		'facebook_messenger_chat_facebook_display' => '1',
   		'facebook_messenger_display' => '1',
   		'facebook_messenger_text_botton' => 'Chat Messenger',
   		'facebook_messenger_app' => '1',
                'facebook_messenger_chili_position' => '0',
                'facebook_messenger_postion' => '0',
                'facebook_messenger_type' => '0',
                'facebook_messenger_hide_display' => '0',
   		'facebook_messenger_app_text' => 'Gửi tin nhắn cho tôi.',
   		'facebook_messenger_text_img' => FACEBOOK_MESSENGER_PLUGIN_URL."frontend/images/facebook-messenger.svg"
   );
   
   add_option( 'facebook_messenger_options' , $default, '', 'yes');
}
register_activation_hook( __FILE__, 'chili_facebook_messenger_chat_on_plugin_activation' );
/*
* Include Back-end
*/
include FACEBOOK_MESSENGER_PLUGIN_DIR."backend/index.php";
/*
* Include Font-end
*/
include FACEBOOK_MESSENGER_PLUGIN_DIR."frontend/index.php";

function plugin_messenger_row_meta( $links, $file ) {
		if ( $file == "chili-facebook-messager-box/index.php" ) {
			$row_meta = array(
				'docs'    => '<a href="https://chili.vn/apps/facebook-messenger-for-comp/" title="Documentation">' . __( 'Docs', 'fb_messenger' ) . '</a>',
                'support'    => '<a href="https://wiki.chili.vn/faq/" title="CHILI Wiki Support">' . __( 'Wiki CHILI', 'fb_messenger' ) . '</a>',
                'view'    => '',
			);

			return array_merge( $links, $row_meta );
		}

		return (array) $links;
}

add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'messenger_add_plugin_page_settings_link');
function messenger_add_plugin_page_settings_link( $links ) {
    $links[] = '<a href="' .
        admin_url( 'options-general.php?page=facebook_messenger_options_page' ) .
        '">' . __('Settings') . '</a>';
    return $links;
}