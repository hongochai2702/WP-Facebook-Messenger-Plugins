<div class="wrap">
		<div class="ninja-support" style="display: block">
			<ul>
				<li class="document button"><a href="http://wiki.chili.vn/huong-dan/app-shop-huong-dan-cai-dat-facebook-chat/" target="_blank"><?php _e("Documenttation","fb_messenger") ?></a></li>
                <li class="suport button"> <a href="http://wiki.chili.vn/" target="_blank"><?php _e("Support","fb_messenger") ?></a></li>
                <li class="viewmore button button-primary"><a href="https://chili.vn/ung-dung/" target="_blank"><?php _e("View more apps.","fb_messenger") ?></a></li>
            </ul>
        </div>
        <h2><?php _e("Facebook Messenger Settings","fb_messenger") ?></h2>
        <!-- Setup Tab -->
        
        <h2 class="nav-tab-wrapper">
        	<a href="#tab-chatbox" class="nav-tab nav-tab-active" data-tab="tab-chatbox" ><?php _e('Chatbox Options', 'fb_messenger'); ?></a>
        	<a href="#tab-messenger" class="nav-tab" data-tab="tab-messenger"><?php _e('Messenger Options', 'fb_messenger'); ?></a>
        </h2>
        <form action="options.php" method="post" id="nj-fb-class">
        <?php settings_fields("wap_form_messenger") ?>
        	<div class="tab-content" id="chili-tab-messenger" >
        	<!-- Messenger Tab -->
        	<h2 class="title"><?php _e('Messenger Options', 'fb_messenger'); ?></h2>
        	<p><?php _e("Configuration page for the chatbox.", "fb_messenger")?></p>
        	<table class="form-table">
        		<tr valign="top">
                    <th scope="row"><label for="facebook_messenger_app"><?php echo __("Open Messenger ChatFacebook","fb_messenger") ?></label></th>
                    <td>
                    	<select name="facebook_messenger_options[facebook_messenger_chat_facebook_display]">
                            <option value="0"><?php _e("Hide","fb_messenger")?></option>
                            <option value="1" <?php if ( $this->_settingOptions['facebook_messenger_chat_facebook_display'] == 1 ){ echo 'selected="selected"'; } ?> ><?php _e("Open","fb_messenger") ?></option>
                            <option value="2" <?php if ( $this->_settingOptions['facebook_messenger_chat_facebook_display'] == 2 ){ echo 'selected="selected"'; } ?> ><?php _e("Only Mobile","fb_messenger") ?></option>
                       	</select>
                        <p class="description" ><?php echo __("Use this feature if you want user click to open Messenger app.","fb_messenger") ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_text_botton"><?php echo __("Custom text for button","fb_messenger") ?></label></th>
                    <td>
                        <input name="facebook_messenger_options[facebook_messenger_text_botton]" type="text" value="<?php echo $this->_settingOptions['facebook_messenger_text_botton']; ?>"  class="regular-text"  />
                        <p class="description" ><?php echo __("Custom text for the button on messager page.","fb_messenger") ?></p>
                    </td>
                </tr>
                
                <th scope="row"><label for="facebook_messenger_chili_position"><?php echo __("Messenger icon position","fb_messenger") ?></label></th>
                <td>
                    <select name="facebook_messenger_options[facebook_messenger_chili_position]">
                            <option value="0"><?php _e("Left","fb_messenger") ?></option>
                            <option value="1" <?php if ( $this->_settingOptions['facebook_messenger_chili_position'] == 1 ){ echo 'selected="selected"'; } ?> ><?php _e("Right","fb_messenger") ?></option>
                    </select>
                    <p class="description" ><?php echo __("Position messenger button.","fb_messenger") ?></p>
                </td>
        	</table>
        	
        	</div> <!-- Messenger Tab -->
        	 
        	<div class="tab-content content-tab-active" id="chili-tab-chatbox" >
        	<!-- Chatbox Options -->
        	<h2 class="title"><?php _e('Chatbox Options', 'fb_messenger'); ?></h2>
        	<p><?php _e("Configuration page for the messenger.",'fb_messenger'); ?></p>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_user"><?php echo __("Your Facebook Fan Page URL","fb_messenger") ?></label></th>
                    <td>
                        <input name="facebook_messenger_options[facebook_messenger_user]" id="facebook_messenger_user" type="text" value="<?php echo $this->_settingOptions['facebook_messenger_user']; ?>" class="regular-text" />
                         <p class="description" ><?php echo __("Enter your fan page url. Example: https://www.facebook.com/chili.com.vn","fb_messenger") ?></p>
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_display"><?php echo __("Display header cover","fb_messenger") ?></label></th>
                    <td>
                        <select name="facebook_messenger_options[facebook_messenger_display]">
                            <option value="0"><?php _e("Hide","fb_messenger")?></option>
                            <option value="1" <?php if ( $this->_settingOptions['facebook_messenger_display'] == 1 ){ echo 'selected="selected"'; } ?> ><?php _e("Small header","fb_messenger") ?></option>
                           	<option value="2" <?php if ( $this->_settingOptions['facebook_messenger_display'] == 2 ){ echo 'selected="selected"'; } ?> ><?php _e("Large header","fb_messenger") ?></option>
                       </select>
                       <p class="description" ><?php echo __("Select Facebook header cover type on Messenger popup","fb_messenger") ?></p>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_postion"><?php echo __("Messenger icon position","fb_messenger") ?></label></th>
                    <td>
                       <select name="facebook_messenger_options[facebook_messenger_postion]">
                            <option value="0"><?php _e("Right","fb_messenger")?></option>
                            <option value="1" <?php if ( $this->settingOptions['facebook_messenger_postion'] == 1 ){ echo 'selected="selected"'; } ?> ><?php _e("Left","fb_messenger") ?></option>
                       </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_type"><?php echo __("Icon type","fb_messenger") ?></label></th>
                    <td>
                        <select name="facebook_messenger_options[facebook_messenger_type]">
                            <option value="0"><?php _e("Icon","fb_messenger"); ?></option>
                            <option <?php if( $this->settingOptions['facebook_messenger_type'] == 1){ echo 'selected="selected"';} ?> value="1"><?php _e("Image","fb_messenger"); ?></option>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_text_img"><?php echo __("Upload icon or image","fb_messenger") ?></label></th>
                    <td>
                        <input name="facebook_messenger_options[facebook_messenger_text_img]" id="facebook_messenger_text_img"  type="text" value="<?php echo $this->_settingOptions['facebook_messenger_text_img'] ?>"  class="regular-text"  />
                        <button class="button" id="fecebook-messenger-upload"><?php _e("Upload","fb_messenger") ?></button>
                        <button class="button <?php if( preg_match("#facebook-messenger#", $this->_settingOptions['facebook_messenger_text_img'] ) ) {echo "hidden";} ?>" id="fecebook-messenger-default-icon"><?php _e("Use default icon","fb_messenger") ?></button>
                        <p class="description" ><?php echo __("Upload your icon or image, please make sure you select correct type above","fb_messenger") ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_backgroud"><?php echo __("Main Color","fb_messenger") ?></label></th>
                    <td>
                        <input name="facebook_messenger_options[facebook_messenger_backgroud]"  class="color" id="facebook_messenger_backgroud" type="text" value="<?php echo $this->_settingOptions['facebook_messenger_backgroud']; ?>" class="regular-text" />
                        <p class="description" ><?php echo __("Main color for Messenger icon and button","fb_messenger") ?></p>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_app"><?php echo __("Open Messenger app button","fb_messenger") ?></label></th>
                    <td>
                        <input <?php if( $this->_settingOptions['facebook_messenger_app'] == 1) {echo 'checked="checked"';} ?> name="facebook_messenger_options[facebook_messenger_app]" type="checkbox" value="1" />
                        <p class="description" ><?php echo __("Use this feature if you want user click to open Messenger app on smartphone (will display a button on Messenger popup)","fb_messenger") ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_app_text"><?php echo __("Custom text for open Messenger app button","fb_messenger") ?></label></th>
                    <td>
                        <input name="facebook_messenger_options[facebook_messenger_app_text]" type="text" value="<?php echo $this->_settingOptions['facebook_messenger_app_text']; ?>"  class="regular-text"  />
                        <p class="description" ><?php echo __("Custom text for button open Messenger app","fb_messenger") ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="facebook_messenger_lang"><?php echo __("Language","fb_messenger") ?></label></th>
                    <td>
                        <?php $config = array(
                            // Afrikaans
                            'af_ZA' => 'Afrikaans',
                            // Arabic
                            'ar_AR' => 'Arabic',
                            // Azerbaijani
                            'az_AZ' => 'Azerbaijani',
                            // Belarusian
                            'be_BY' => 'Belarusian',
                            // Bulgarian
                            'bg_BG' => 'Bulgarian',
                            // Bengali
                            'bn_IN' => 'Bengali',
                            // Bosnian
                            'bs_BA' => 'Bosnian',
                            // Catalan
                            'ca_ES' => 'Catalan',
                            // Czech
                            'cs_CZ' => 'Czech',
                            // Welsh
                            'cy_GB' => 'Welsh',
                            // Danish
                            'da_DK' => 'Danish',
                            // German
                            'de_DE' => 'German',
                            // Greek
                            'el_GR' => 'Greek',
                            // English (UK)
                            'en_GB' => 'English (UK)',
                            // English (Pirate)
                            'en_PI' => 'English (Pirate)',
                            // English (Upside Down)
                            'en_UD' => 'English (Upside Down)',
                            // English (US)
                            'en_US' => 'English (US)',
                            // Esperanto
                            'eo_EO' => 'Esperanto',
                            // Spanish (Spain)
                            'es_ES' => 'Spanish (Spain)',
                            // Spanish
                            'es_LA' => 'Spanish',
                            // Estonian
                            'et_EE' => 'Estonian',
                            // Basque
                            'eu_ES' => 'Basque',
                            // Persian
                            'fa_IR' => 'Persian',
                            // Leet Speak
                            'fb_LT' => 'Leet Speak',
                            // Finnish
                            'fi_FI' => 'Finnish',
                            // Faroese
                            'fo_FO' => 'Faroese',
                            // French (Canada)
                            'fr_CA' => 'French (Canada)',
                            // French (France)
                            'fr_FR' => 'French (France)',
                            // Frisian
                            'fy_NL' => 'Frisian',
                            // Irish
                            'ga_IE' => 'Irish',
                            // Galician
                            'gl_ES' => 'Galician',
                            // Hebrew
                            'he_IL' => 'Hebrew',
                            // Hindi
                            'hi_IN' => 'Hindi',
                            // Croatian
                            'hr_HR' => 'Croatian',
                            // Hungarian
                            'hu_HU' => 'Hungarian',
                            // Armenian
                            'hy_AM' => 'Armenian',
                            // Indonesian
                            'id_ID' => 'Indonesian',
                            // Icelandic
                            'is_IS' => 'Icelandic',
                            // Italian
                            'it_IT' => 'Italian',
                            // Japanese
                            'ja_JP' => 'Japanese',
                            // Georgian
                            'ka_GE' => 'Georgian',
                            // Khmer
                            'km_KH' => 'Khmer',
                            // Korean
                            'ko_KR' => 'Korean',
                            // Kurdish
                            'ku_TR' => 'Kurdish',
                            // Latin
                            'la_VA' => 'Latin',
                            // Lithuanian
                            'lt_LT' => 'Lithuanian',
                            // Latvian
                            'lv_LV' => 'Latvian',
                            // Macedonian
                            'mk_MK' => 'Macedonian',
                            // Malayalam
                            'ml_IN' => 'Malayalam',
                            // Malay
                            'ms_MY' => 'Malay',
                            // Norwegian (bokmal)
                            'nb_NO' => 'Norwegian (bokmal)',
                            // Nepali
                            'ne_NP' => 'Nepali',
                            // Dutch
                            'nl_NL' => 'Dutch',
                            // Norwegian (nynorsk)
                            'nn_NO' => 'Norwegian (nynorsk)',
                            // Punjabi
                            'pa_IN' => 'Punjabi',
                            // Polish
                            'pl_PL' => 'Polish',
                            // Pashto
                            'ps_AF' => 'Pashto',
                            // Portuguese (Brazil)
                            'pt_BR' => 'Portuguese (Brazil)',
                            // Portuguese (Portugal)
                            'pt_PT' => 'Portuguese (Portugal)',
                            // Romanian
                            'ro_RO' => 'Romanian',
                            // Russian
                            'ru_RU' => 'Russian',
                            // Slovak
                            'sk_SK' => 'Slovak',
                            // Slovenian
                            'sl_SI' => 'Slovenian',
                            // Albanian
                            'sq_AL' => 'Albanian',
                            // Serbian
                            'sr_RS' => 'Serbian',
                            // Swedish
                            'sv_SE' => 'Swedish',
                            // Swahili
                            'sw_KE' => 'Swahili',
                            // Tamil
                            'ta_IN' => 'Tamil',
                            // Telugu
                            'te_IN' => 'Telugu',
                            // Thai
                            'th_TH' => 'Thai',
                            // Filipino
                            'tl_PH' => 'Filipino',
                            // Turkish
                            'tr_TR' => 'Turkish',
                            //
                            'uk_UA' => 'Ukrainian',
                            // Vietnamese
                            'vi_VN' => 'Vietnamese',
                            //
                            'zh_CN' => 'Simplified Chinese (China)',
                            //
                            'zh_HK' => 'Traditional Chinese (Hong Kong)',
                            //
                            'zh_TW' => 'Traditional Chinese (Taiwan)',
                        );
                        $lang = $this->_settingOptions['facebook_messenger_lang'];
                        if ( !$lang ) {
                            $lang = "en_US";
                        }
                         ?>
                         <select name="facebook_messenger_options[facebook_messenger_lang]">
                             <?php foreach ( $config as $k => $v ) {
                             ?>
                             <option <?php if ( $lang == $k) {echo 'selected="selected"';} ?>  value="<?php echo $k ?>"><?php echo $v ?></option>
                             <?php
                             } ?>
                         </select>
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row"><label><?php echo __("Display","fb_messenger") ?></label></th>
                    <td>
                        <?php $display = $this->_settingOptions['facebook_messenger_hide_display']; ?>
                        <select name="facebook_messenger_options[facebook_messenger_hide_display]" id="ninja-display-messenger">
                            <option <?php if ( $display != 1) {echo 'selected="selected"';} ?> value="0"><?php echo __("Display all pages but except","fb_messenger") ?></option>
                            <option <?php if ( $display == 1) {echo 'selected="selected"';} ?> value="1"><?php echo __("Display for pages...","fb_messenger") ?></option>
                        </select>
                        <p class="description" ><?php echo __("Select type you want to display Messenger (If it don't display in WooCommerce pages, please make sure you selected 'Display all pages but except' option)","fb_messenger") ?></p>
                    </td>
                </tr>
                <tr valign="top" id="facebook-messenger-tr-hide"  class="<?php if ( $display == 1) {echo 'hidden';} ?>">
                    <th scope="row"><label for="facebook_messenger_hide_page"><?php echo __("Display all pages but except","fb_messenger") ?></label></th>
                    <td>
                        <input type="checkbox" id="facebook-messenger-checkall" /> <label for="facebook-messenger-checkall">All</label>
                        <ul id="facebook_messenger_hide_page" class="facebook_messenger_hide_page">
                        <?php $new = new WP_Query(array("posts_per_page"=>-1,"post_type"=>"page"));
                            $array_hide = get_option( "facebook_messenger_hide_page");
                            if ( !$array_hide ){
                                $array_hide = array();
                            }
                            while ( $new->have_posts() ) : $new->the_post() ;
                            ?>
                            <li><input <?php
                                if ( in_array(get_the_ID(), $array_hide ) ) { echo 'checked="checked"'; }
                             ?> name="facebook_messenger_hide_page[]" class="facebook_messenger_hide_page" type="checkbox" value="<?php the_ID() ?>" id="facebook_messenger_hide_page_<?php the_ID() ?>" /> <label for="facebook_messenger_hide_page_<?php the_ID() ?>"><?php the_title() ?></label></li>
                            <?php
                            endwhile;wp_reset_postdata();
                         ?>
                         </ul>
                         <p class="description"><?php _e("Select where you want to display Facebook Messenger","fb_messenger") ?></p>
                    </td>
                </tr>
                 <tr valign="top" id="facebook-messenger-tr-show" class="<?php if ( $display != 1) {echo 'hidden';} ?>">
                    <th scope="row"><label for="facebook_messenger_show_page"><?php echo __("Where you want to display","fb_messenger") ?></label></th>
                    <td>
                        <input type="checkbox" id="facebook-messenger-checkall-1" /> <label for="facebook-messenger-checkall-1">All</label>
                        <ul id="facebook_messenger_show_page" class="facebook_messenger_show_page">
                        <?php $new = new WP_Query(array("posts_per_page"=>-1,"post_type"=>"page"));
                            $array_show = $this->_settingOptions['facebook_messenger_show_page'];
                            if ( !$this->_settingOptions['facebook_messenger_show_page'] ) {
                               $array_show = array();
                            }
                            while ( $new->have_posts() ) : $new->the_post() ;
                            ?>
                            <li><input <?php
                                if ( in_array(get_the_ID(), $array_show ) ) { echo 'checked="checked"'; }
                            ?> name="facebook_messenger_show_page[]" class="facebook_messenger_show_page" type="checkbox" value="<?php the_ID() ?>" id="facebook_messenger_show_page_<?php the_ID() ?>" /> <label for="facebook_messenger_show_page_<?php the_ID() ?>"><?php the_title() ?></label></li>
                            <?php
                            endwhile;wp_reset_postdata();
                         ?>
                         </ul>
                         <p class="description"><?php _e("Select where you want to display Facebook Messenger","fb_messenger"); ?></p>
                    </td>
                </tr>
             </table>
            
            </div> <!-- tab Chatbox -->
            
            <?php submit_button(__("Save Options", 'fb_messenger')) ?>
          </form>
      </div> <!-- /.wrap -->