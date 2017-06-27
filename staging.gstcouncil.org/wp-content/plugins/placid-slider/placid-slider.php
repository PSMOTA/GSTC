<?php /******************************************************************************************************
Plugin Name: Placid Slider
Plugin URI: http://slidervilla.com/placid/
Description: Placid Slider adds a smoothly scrolling horizontal slideshow to any location of your blog.
Version: 3.1.9
Author: Tejaswini Deshpande
Author URI: http://tejaswinideshpande.com/
Wordpress version supported: 3.5 and above
*-----------------------------------------*
* Copyright 2010-2017  SliderVilla  (email : support@slidervilla.com)
* Upgrade: Using new file.
******************************************************************************************************/
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
//defined global variables and constants here
global $slidervillaSliders;
define('PLACID_SLIDER_TABLE','placid_slider'); //Slider TABLE NAME
define('PLACID_SLIDER_META','placid_slider_meta'); //Meta TABLE NAME
define('PLACID_SLIDER_POST_META','placid_slider_postmeta'); //Meta TABLE NAME
define("PLACID_SLIDER_VER", '3.1.9',false);//Current Version of Placid Slider
if ( ! defined( 'PLACID_SLIDER_PLUGIN_BASENAME' ) )
	define( 'PLACID_SLIDER_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
if ( ! defined( 'PLACID_SLIDER_CSS_DIR' ) ){
	define( 'PLACID_SLIDER_CSS_DIR', WP_PLUGIN_DIR.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'/css/skins/' );
}
// 3.0
if ( ! defined( 'PLACID_SLIDER_CSS_OUTER' ) ){
	define( 'PLACID_SLIDER_CSS_OUTER', WP_PLUGIN_DIR.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'/css/' );
}
if ( ! defined( 'PLACID_SLIDER_INC_DIR' ) ) {
	define( 'PLACID_SLIDER_INC_DIR', WP_PLUGIN_DIR.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'/includes/' );
}
$slidervillaSliders['placid-slider']= PLACID_SLIDER_VER;
// Create Text Domain For Translations
load_plugin_textdomain('placid-slider', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/');

require_once (dirname (__FILE__) . '/includes/placid-slider-functions.php');

function install_placid_slider() {
	global $wpdb, $table_prefix;
	$installed_ver = get_option( "placid_db_version" );
	if( $installed_ver != PLACID_SLIDER_VER ) {
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
		$sql = "CREATE TABLE $table_name (
			id int(5) NOT NULL AUTO_INCREMENT,
			post_id int(11) NOT NULL,
			date datetime NOT NULL,
			slider_id int(5) NOT NULL DEFAULT '1',
			slide_order int(5) NOT NULL DEFAULT '0',
			UNIQUE KEY id(id)
		);";
		$rs = $wpdb->query($sql);
	}
	//3.0.2
	if($wpdb->get_var("SHOW COLUMNS FROM $table_name LIKE 'expiry'") != 'expiry') {
		$sql = "ALTER TABLE $table_name
		ADD COLUMN expiry DATE DEFAULT NULL";
		$rs1 = $wpdb->query($sql);
	}

   	$meta_table_name = $table_prefix.PLACID_SLIDER_META;
	if($wpdb->get_var("show tables like '$meta_table_name'") != $meta_table_name) {
		$sql = "CREATE TABLE $meta_table_name (
			slider_id int(5) NOT NULL AUTO_INCREMENT,
			slider_name varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL default '',
			UNIQUE KEY slider_id(slider_id)
		);";
		$rs2 = $wpdb->query($sql);
	
		$sql = "INSERT INTO $meta_table_name (slider_id,slider_name) VALUES('1','Placid Slider');";
		$rs3 = $wpdb->query($sql);
	}
	else{
			if($installed_ver<'3.1.3'){
				$sql = "ALTER TABLE $meta_table_name CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci";
				$rs3 = $wpdb->query($sql);
			}
		}
	if($wpdb->get_var("SHOW COLUMNS FROM $meta_table_name LIKE 'type'") != 'type') {
		// Add Columns 
		$sql = "ALTER TABLE $meta_table_name
			ADD COLUMN type INT(4) NOT NULL,
			ADD COLUMN setid INT(4) NOT NULL default '1',
			ADD COLUMN param varchar(500)";
		$rs5 = $wpdb->query($sql);
	}
	
	$slider_postmeta = $table_prefix.PLACID_SLIDER_POST_META;
	if($wpdb->get_var("show tables like '$slider_postmeta'") != $slider_postmeta) {
		$sql = "CREATE TABLE $slider_postmeta (
					post_id int(11) NOT NULL,
					slider_id int(5) NOT NULL default '1',
					UNIQUE KEY post_id(post_id)
				);";
		$rs4 = $wpdb->query($sql);
	}
   // Placid Slider Settings and Options
   	$default_slider = array();
	$default_placid_slider_global_settings = get_placid_slider_global_default_settings();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$default_slider = $default_placid_slider_settings;
	$glb_slider = $default_placid_slider_global_settings;
	$default_scounter='1';
	   $scounter=get_option('placid_slider_scounter');
	   if(!isset($scounter) or $scounter=='' or empty($scounter)){
	      update_option('placid_slider_scounter',$default_scounter);
		  $scounter=$default_scounter;
	   }
	    $fontgarr = array('ptitle_fontg','content_fontg','title_fontg');
	   for($i=1;$i<=$scounter;$i++){
	       if ($i==1){
		    $placid_slider_options='placid_slider_options';
		   }
		   else{
		    $placid_slider_options='placid_slider_options'.$i;
		   }
		   $placid_slider_curr=get_option($placid_slider_options);
	   				 
		   if(!$placid_slider_curr and $i==1) {
			 $placid_slider_curr = array();
		   }
		   
	     	   if($placid_slider_curr or $i==1) {
			  
		 	   foreach($default_slider as $key=>$value) {
					  if(!isset($placid_slider_curr[$key])) {
						 $placid_slider_curr[$key] = $value;
					  }
					if(in_array($key,$fontgarr) && !empty($placid_slider_curr["$key"]) ){
						$fname = str_replace( ' ', '+', $placid_slider_curr["$key"] );
						$placid_slider_curr[$key]=$fname;
					  }
					  if( $key=='pt_font' && !empty($placid_slider_curr['ptitle_fontg']) ) {
						$placid_slider_curr[$key]='google';
					  }
					  if( $key=='pc_font' && !empty($placid_slider_curr['content_fontg']) ) {
						$placid_slider_curr[$key]='google';
					  }
					  if( $key=='t_font' && !empty($placid_slider_curr['title_fontg']) ) {
						$placid_slider_curr[$key]='google';
					  }
					  if( $key=='crop' && $placid_slider_curr['crop'] == 0 ) {
						$placid_slider_curr[$key]='full';
					  }
					  if( $key=='crop' && $placid_slider_curr['crop'] == 1 ) {
						$placid_slider_curr[$key]='large';
					  }
					  if( $key=='crop' && $placid_slider_curr['crop'] == 2 ) {
						$placid_slider_curr[$key]='medium';
					  }
					  if( $key=='crop' && $placid_slider_curr['crop'] == 3 ) {
						$placid_slider_curr[$key]='thumbnail';
					  }
				   }
		   update_option($placid_slider_options,$placid_slider_curr);
		   update_option( "placid_db_version", PLACID_SLIDER_VER );
	   	}
	   } //end for loop
	   
	   /* Global settings - start */
		$placid_slider_curr=get_option($placid_slider_options);
		$garr = array();
			if($placid_slider_curr) {
				foreach($placid_slider_curr as $key=>$value) {
					if($key=='user_level' || $key=='noscript' || $key=='multiple_sliders' || $key=='enque_scripts' || $key=='custom_post' || $key=='remove_metabox' || $key=='css' || $key=='support' || $key == 'cpost_slug') {
						$garr[$key] = $value;
					}
			
				}
			}
			$placid_slider_gcurr=get_option('placid_slider_global_options');
		   	if(!$placid_slider_gcurr) {
				$placid_slider_gcurr = array();
			}
			foreach($glb_slider as $key=>$value) {
				if(!isset($placid_slider_gcurr[$key])) {
					$placid_slider_gcurr[$key] = $value;
				}
			}
			if( count($garr) > 0 ) {
				$msliders=0;
				foreach($garr as $key=>$value) {
					$placid_slider_gcurr[$key] = $value;
					if($key=='multiple_sliders') {
						$placid_slider_gcurr[$key]=1;
					}
					if($key=='custom_post') {
						$placid_slider_gcurr[$key]=1;
					}
				}
			}
			update_option('placid_slider_global_options',$placid_slider_gcurr);
			/* Global settings - end */
	}//end of if db version chnage
}
register_activation_hook( __FILE__, 'install_placid_slider' );
/* Added for auto update - start */
function placid_update_db_check() {
    if (get_option('placid_db_version') != PLACID_SLIDER_VER ) {
        install_placid_slider();
    }
    /* Check whether Placid Slider Options are created (if not) add options */
	if(get_option('placid_slider_options') == false) {
		$default_placid_slider_settings=get_placid_slider_default_settings();
		add_option('placid_slider_options',$default_placid_slider_settings);
	}
	if(get_option('placid_slider_global_options') == false) {
		$default_placid_slider_global_settings = get_placid_slider_global_default_settings();
		add_option('placid_slider_global_options',$default_placid_slider_global_settings);
	}
}
add_action('plugins_loaded', 'placid_update_db_check');
/* Added for auto update - end */

require_once (dirname (__FILE__) . '/includes/sslider-get-the-image-functions.php');
//require_once (dirname (__FILE__) . '/includes/placid-slider-meta-functions.php');
require_once (PLACID_SLIDER_INC_DIR.'help.php');

//This adds the post to the slider
function placid_add_to_slider($post_id) {
$gplacid_slider = get_option('placid_slider_global_options');
$placid_slider = get_option('placid_slider_options');
 if(isset($_POST['placid-sldr-verify']) and current_user_can( $gplacid_slider['user_level'] ) ) {
	global $wpdb, $table_prefix, $post;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	
	if( !isset($_POST['placid-slider']) and  is_post_on_any_placid_slider($post_id) ){
		$sql = "DELETE FROM $table_name where post_id = '$post_id'";
		 $wpdb->query($sql);
	}
	
	if(isset($_POST['placid-slider']) and !isset($_POST['placid_slider_name'])) {
	  $slider_id = '1';
	  if(is_post_on_any_placid_slider($post_id)){
	     $sql = "DELETE FROM $table_name where post_id = '$post_id'";
		 $wpdb->query($sql);
	  }
	  
	  if(isset($_POST['placid-slider']) and $_POST['placid-slider'] == "placid-slider" and !placid_slider($post_id,$slider_id)) {
		$dt = date('Y-m-d H:i:s');
		$sql = "INSERT INTO $table_name (post_id, date, slider_id) VALUES ('$post_id', '$dt', '$slider_id')";
		$wpdb->query($sql);
	  }
	}
	
	if(isset($_POST['placid_expiry_actual']) ) {
		$expiry=sanitize_text_field($_POST['placid_expiry_actual']);
		if(!empty($expiry)){
			$date = $expiry;
			$dt = date("Y-m-d",strtotime($date));
			$wpdb->update($table_name, array('expiry' => $dt), array('post_id' => $post_id)); 
		}
		else{
			$wpdb->update($table_name, array('expiry' => NULL), array('post_id' => $post_id)); 
		}
	}
	
	if(isset($_POST['placid-slider']) and $_POST['placid-slider'] == "placid-slider" and isset($_POST['placid_slider_name'])){
	  $slider_id_arr = $_POST['placid_slider_name'];
	  $post_sliders_data = placid_ss_get_post_sliders($post_id);
	  
	  foreach($post_sliders_data as $post_slider_data){
		if(!in_array($post_slider_data['slider_id'],$slider_id_arr)) {
		  $sql = "DELETE FROM $table_name where post_id = '$post_id'";
		  $wpdb->query($sql);
		}
	  }

		foreach($slider_id_arr as $slider_id) {
			if(!placid_slider($post_id,$slider_id)) {
				$dt = date('Y-m-d H:i:s');
				$sql = "INSERT INTO $table_name (post_id, date, slider_id) VALUES ('$post_id', '$dt', '$slider_id')";
				$wpdb->query($sql);
			}
		}
	}
	
	$table_name = $table_prefix.PLACID_SLIDER_POST_META;
	if(isset($_POST['placid_display_slider']) and !isset($_POST['placid_display_slider_name'])) {
	  $slider_id = '1';
	}
	if(isset($_POST['placid_display_slider']) and isset($_POST['placid_display_slider_name'])){
	  $slider_id = $_POST['placid_display_slider_name'];
	}
  	if(isset($_POST['placid_display_slider'])){	
		  if(!placid_ss_post_on_slider($post_id,$slider_id)) {
		    $sql = "DELETE FROM $table_name where post_id = '$post_id'";
		    $wpdb->query($sql);
			$sql = "INSERT INTO $table_name (post_id, slider_id) VALUES ('$post_id', '$slider_id')";
			$wpdb->query($sql);
		  }
	}
	$thumbnail_key = (isset($placid_slider['img_pick'][1]) ? $placid_slider['img_pick'][1] : 'placid_slider_thumbnail');
	$placid_sslider_thumbnail = get_post_meta($post_id,$thumbnail_key,true);
	$post_slider_thumbnail=isset($_POST['placid_sslider_thumbnail'])?$_POST['placid_sslider_thumbnail']:"";
	if($placid_sslider_thumbnail != $post_slider_thumbnail) {
	  update_post_meta($post_id, $thumbnail_key, $post_slider_thumbnail);	
	}
	
	$placid_link_attr = get_post_meta($post_id,'_placid_link_attr',true);
	$link_attr=isset($_POST['placid_link_attr'])?html_entity_decode($_POST['placid_link_attr'],ENT_QUOTES):"";
	if($placid_link_attr != $link_attr) {
	  update_post_meta($post_id, '_placid_link_attr', $link_attr);	
	}
	
	$placid_sslider_link = get_post_meta($post_id,'_placid_slide_redirect_url',true);
	$link=isset($_POST['placid_sslider_link'])?$_POST['placid_sslider_link']:"";
	if($placid_sslider_link != $link) {
	  update_post_meta($post_id, '_placid_slide_redirect_url', $link);	
	}
	
	$slide_expiry = get_post_meta($post_id,'_placid_slide_expiry',true);
	$post_slide_expiry = isset($_POST['placid_expiry_actual'])?sanitize_text_field($_POST['placid_expiry_actual']):'';
	if($slide_expiry != $post_slide_expiry) {
	  update_post_meta($post_id, '_placid_slide_expiry', $post_slide_expiry);	
	}	
	
	$placid_sslider_nolink = get_post_meta($post_id,'_placid_sslider_nolink',true);
	$post_placid_sslider_nolink = isset($_POST['placid_sslider_nolink'])?$_POST['placid_sslider_nolink']:"";
	if($placid_sslider_nolink != $post_placid_sslider_nolink) {
	  update_post_meta($post_id, '_placid_sslider_nolink', $_POST['placid_sslider_nolink']);	
	}
 
 	/* Added For Slide Transitions  */
	$placid_slide_transition = get_post_meta($post_id,'_placid_slide_transition',true);
	$slide_transition= isset($_POST['placid_slide_transition'])?$_POST['placid_slide_transition']:'';
	if($placid_slide_transition != $slide_transition) {
		update_post_meta($post_id, '_placid_slide_transition', $slide_transition);	
	}
	$placid_slide_duration = get_post_meta($post_id,'_placid_slide_duration',true);
	$slide_duration= isset($_POST['placid_slide_duration'])?$_POST['placid_slide_duration']:'';
	if($placid_slide_duration != $slide_duration) {
		update_post_meta($post_id, '_placid_slide_duration', $slide_duration);	
	}
	$placid_slide_delay = get_post_meta($post_id,'_placid_slide_delay',true);
	$slide_delay= isset($_POST['placid_slide_delay'])?$_POST['placid_slide_delay']:'';
	if($placid_slide_delay != $slide_delay) {
		update_post_meta($post_id, '_placid_slide_delay', $slide_delay);	
	}
 
	/* Added for embed shortcode - start */
	$placid_disable_image = get_post_meta($post_id,'_placid_disable_image',true);
	$post_placid_disable_image = isset($_POST['placid_disable_image'])?$_POST['placid_disable_image']:"";
	if($placid_disable_image != $post_placid_disable_image) {
	  update_post_meta($post_id, '_placid_disable_image', $post_placid_disable_image);	
	}
	$placid_sslider_eshortcode = get_post_meta($post_id,'_placid_embed_shortcode',true);
	$post_placid_sslider_eshortcode = isset($_POST['placid_sslider_eshortcode'])?$_POST['placid_sslider_eshortcode']:"";
	if($placid_sslider_eshortcode != $post_placid_sslider_eshortcode) {
	  update_post_meta($post_id, '_placid_embed_shortcode', $post_placid_sslider_eshortcode);	
	}
	/* Added for embed shortcode -end */
	$placid_select_set = get_post_meta($post_id,'_placid_select_set',true);
	$post_placid_select_set = isset($_POST['placid_select_set'])?$_POST['placid_select_set']:"";
	if($placid_select_set != $post_placid_select_set and $post_placid_select_set!='0') {
	  update_post_meta($post_id, '_placid_select_set', $post_placid_select_set);	
	}
	
  } //placid-sldr-verify
}

//Removes the post from the slider, if you uncheck the checkbox from the edit post screen
function placid_remove_from_slider($post_id) {
	if(isset($_POST['placid-sldr-verify'])) {
		global $wpdb, $table_prefix;
		$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	
	// authorization
	if (!current_user_can('edit_post', $post_id))
		return $post_id;
	// origination and intention
	if (!wp_verify_nonce($_POST['placid-sldr-verify'], 'PlacidSlider'))
		return $post_id;
	
    	if(empty($_POST['placid-slider']) and is_post_on_any_placid_slider($post_id)) {
		$sql = "DELETE FROM $table_name where post_id = '$post_id'";
		$wpdb->query($sql);
	}
	//3.0 : Debug error
	$display_slider = isset( $_POST['placid_display_slider'] ) ? $_POST['placid_display_slider'] : '';
	$table_name = $table_prefix.PLACID_SLIDER_POST_META;
	if(empty($display_slider) and placid_ss_slider_on_this_post($post_id)){
	  $sql = "DELETE FROM $table_name where post_id = '$post_id'";
		    $wpdb->query($sql);
	}
    } 
} 
function placid_delete_from_slider_table($post_id){
    global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
    if(is_post_on_any_placid_slider($post_id)) {
		$sql = "DELETE FROM $table_name where post_id = '$post_id'";
		$wpdb->query($sql);
	}
	$table_name = $table_prefix.PLACID_SLIDER_POST_META;
    if(placid_ss_slider_on_this_post($post_id)) {
		$sql = "DELETE FROM $table_name where post_id = '$post_id'";
		$wpdb->query($sql);
	}
}

// Slider checkbox on the admin page

function placid_slider_edit_custom_box(){
   placid_add_to_slider_checkbox();
}

function placid_slider_add_custom_box() {
$gplacid_slider = get_option('placid_slider_global_options');
 if (current_user_can( $gplacid_slider['user_level'] )) {
	if( function_exists( 'add_meta_box' ) ) {
	    $post_types=get_post_types(); 
		$remove_post_type_arr=( isset($gplacid_slider['remove_metabox']) ? $gplacid_slider['remove_metabox'] : '' );
		if(!isset($remove_post_type_arr) or !is_array($remove_post_type_arr) ) $remove_post_type_arr=array();
		foreach($post_types as $post_type) {
			if(!in_array($post_type,$remove_post_type_arr)){
				add_meta_box( 'placid_slider_box', __( 'Placid Slider' , 'placid-slider'), 'placid_slider_edit_custom_box', $post_type, 'advanced' );
			}
		}
		//add_meta_box( $id,   $title,     $callback,   $page, $context, $priority ); 
	} 
 }
}
/* Use the admin_menu action to define the custom boxes */
add_action('admin_menu', 'placid_slider_add_custom_box');

function placid_add_to_slider_checkbox() {
global $post;
	$placid_slider = get_option('placid_slider_options');
	$gplacid_slider = get_option('placid_slider_global_options');

	//for WPML start
	if( function_exists('icl_plugin_action_links') ) {
		if( isset($_GET['source_lang']) && isset($_GET['trid']) ) {
			global $wpdb, $table_prefix;
			$id = $wpdb->get_var( "SELECT element_id FROM {$wpdb->prefix}icl_translations WHERE trid=".$_GET['trid']." AND language_code='".$_GET['source_lang']."'" );			
			$table_name = $table_prefix.PLACID_SLIDER_TABLE;
			$q = "select * from $table_name where post_id=".$id;
			$res = $wpdb->get_results($q);
			if( count($res) > 0 ) {
				$sarr=array();
				foreach($res as $re) {
					$sarr[] = $re->slider_id;
				}
				echo "<script>";
				echo "jQuery(document).ready(function($) {";
					echo "jQuery('.placid-psldr-post').prop('checked','true');";
					$sliders = placid_ss_get_sliders();
					foreach ($sliders as $slider) { 
						if(in_array($slider['slider_id'],$sarr)) {
							echo "jQuery('#placid_slider_name".$slider['slider_id']."').prop('checked','true');";
						}
					}
				echo "});";
				echo "</script>";
			}
		}
	}
	//for WPML end

	if (current_user_can( $gplacid_slider['user_level'] )) {
		$extra = "";
		
		$post_id = $post->ID;
		
		if(isset($post->ID)) {
			$post_id = $post->ID;
			if(is_post_on_any_placid_slider($post_id)) { $extra = 'checked="checked"'; }
		} 
		
		$post_slider_arr = array();
		
		$post_sliders = placid_ss_get_post_sliders($post_id);
		if($post_sliders) {
			foreach($post_sliders as $post_slider){
			   $post_slider_arr[] = $post_slider['slider_id'];
			}
		}
		
		$sliders = placid_ss_get_sliders();
		$thumbnail_key = (isset($placid_slider['img_pick'][1]) ? $placid_slider['img_pick'][1] : 'placid_slider_thumbnail');
                $placid_sslider_thumbnail= get_post_meta($post_id, $thumbnail_key, true); 
		$placid_sslider_link= get_post_meta($post_id, '_placid_slide_redirect_url', true);  
		$placid_sslider_nolink=get_post_meta($post_id, '_placid_sslider_nolink', true);
		$placid_link_attr=get_post_meta($post_id, '_placid_link_attr', true);
		
		/* Transitions */
		$placid_slide_transition=get_post_meta($post_id, '_placid_slide_transition', true);
		$placid_slide_duration=get_post_meta($post_id, '_placid_slide_duration', true);
		$placid_slide_delay=get_post_meta($post_id, '_placid_slide_delay', true);
		/* END Transitions */
		
		$placid_disable_image=get_post_meta($post_id, '_placid_disable_image', true);
		$placid_embed_shortcode=get_post_meta($post_id, '_placid_embed_shortcode', true);
		$placid_select_set=get_post_meta($post_id, '_placid_select_set', true);
		/* Post Meta Box Style */
		wp_enqueue_style( 'placid-meta-box', placid_slider_plugin_url( 'css/css/placid-meta-box.css' ), false, PLACID_SLIDER_VER, 'all');
		//Date Picker
		wp_enqueue_script( 'jquery-ui-datepicker', false,array('jquery','jQuery-ui-core'),PLACID_SLIDER_VER, true); 
		wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
		
		$expirydt=get_post_meta($post_id, '_placid_slide_expiry', true);
		$wpDateFormat = get_option('date_format');
		$dtpicker = placid_dateformat_PHP_to_jQueryUI($wpDateFormat);
?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('#placid_ExpiryDate').datepicker({
				dateFormat : "<?php echo $dtpicker ?>"
			});
			jQuery("#placid_ExpiryDate").on("change", function(e){
				var expDt=jQuery(this).val();
				jQuery("#placid_expiry_actual").val(expDt);
				if(expDt.length>0){
					jQuery("#placid_none").show();
				}
				else{
					jQuery("#placid_none").hide();
				}
			});
			jQuery("#placid_none").on("click", function(e){
				jQuery("#placid_ExpiryDate").val("");
				jQuery("#placid_ExpiryDate").triggerHandler("change");
				e.preventDefault();
				return false;
			});
			
			jQuery("#placid_basic").css({"height":"auto","color":"#444","background":"#FFFFFF"});
			jQuery(".placid-tab").click(function() {
				var idex = jQuery(this).index();
				jQuery(".placid-tab-content").fadeOut("fast");
				jQuery(".placid-tab").css({"height":"17px","color":"#0074a2","background": "#F5F5F5"});
				jQuery(".placid-tab-content:eq("+idex+")").fadeIn("fast");
				jQuery(this).css({"height":"auto","color":"#444","background":"#FFFFFF"});
			});
			 jQuery(".show-all").click(function() {
				jQuery(this).fadeOut("fast");
				jQuery(".slider-name").fadeIn("slow");
				return false;
			});
			jQuery('a.placid-help').click(function(e) {
				e.preventDefault(); jQuery('#contextual-help-link').click();
				jQuery('#tab-link-placid-edtposthelp a').click();
			});
			jQuery(".placid-add-to-slider").click(function() {
				var added = 0;
				jQuery(".placid-add-to-slider").each(function() {
					if(jQuery(this).prop("checked") == true) { added = added + 1; }
				});
				if( added >= 1 ) {
					jQuery(".placid-psldr-post").prop("checked", true );
				} else { 
					jQuery(".placid-psldr-post").prop("checked", false );
				}
			});
		}); 
		</script>
		<div class="placid-tabs">
			<div id="placid_basic" class="placid-tab"><?php _e('Basic','placid-slider'); ?></div>
			<div id="placid_transitions" class="placid-tab"><?php _e('Transitions','placid-slider'); ?></div>
			<div id="placid_advanced" class="placid-tab last"><?php _e('Advanced','placid-slider'); ?></div>
		</div>
		<div id="placid_basic_tab" class="placid-tab-content" style="padding: 0 10px;background: #ffffff;">
		<div class="slider_checkbox">
		<table class="form-table" style="margin: 0;">
			<tr valign="top">
			<a class="placid-help" herf="#"><?php _e('Help ?','placid-slider'); ?></a>
			</tr>
			<tr valign="top">
			<td scope="row">
				<input id="placid-slider" name="placid-slider" class="placid-psldr-post" type="checkbox" value="placid-slider" <?php echo $extra;?> >
				<label><?php _e('Add this post/page to','placid-slider'); ?></label>
			</td>
			<td>
        		<?php $i = 0;
			foreach ($sliders as $slider) { 
				if($i < 3) $display="display:block;"; else $display="display:none;"; ?>
				<div style="margin-bottom: 16px;float: left;width: 100%;<?php echo $display;?>" class="slider-name">
				<span class="placid-slider-name"><?php echo $slider['slider_name'];?></span>
				<input id="placid_slider_name<?php echo $slider['slider_id'];?>" name="placid_slider_name[]" class="placid-meta-toggle placid-meta-toggle-round placid-add-to-slider" type="checkbox" value="<?php echo $slider['slider_id'];?>" <?php if(in_array($slider['slider_id'],$post_slider_arr)){echo 'checked';} ?> >
				<label for="placid_slider_name<?php echo $slider['slider_id'];?>"></label>
				</div>
        		<?php $i++;
			} if($i > 3) { ?>
				<a href="" class='show-all'><?php _e('Show All','placid-slider'); ?></a>
			<?php } ?>
       				<input type="hidden" name="placid-sldr-verify" id="placid-sldr-verify" value="<?php echo wp_create_nonce('PlacidSlider');?>" />
			</td>
			</tr>
			<tr valign="top">
        <td scope="row"><label for="placid_sslider_link"><?php _e('Slide Link URL ','placid-slider'); ?></label></td>
        <td><input type="text" name="placid_sslider_link" class="placid_sslider_link" value="<?php echo $placid_sslider_link;?>" size="50" /><br /><small><?php _e('If left empty, it will be by default linked to the permalink.','placid-slider'); ?></small> </td>
			</tr>

			<tr valign="top">
			<td scope="row"><label for="placid_sslider_nolink"><?php _e('Disable Slide Link','placid-slider'); ?> </label></td>
        		<td><input id="placid_sslider_nolink" name="placid_sslider_nolink" class="placid-meta-toggle placid-meta-toggle-round" type="checkbox" value="1" <?php if($placid_sslider_nolink=='1'){echo "checked";}?> >
			<label for="placid_sslider_nolink"></label> </td>
			</tr>
		</table>
		</div>
		</div>
		<div id="placid_transition_tab" class="placid-tab-content" style="display:none;background: #ffffff;">
		<div style="background: #F5F5F5;margin: 0 10px;">
		<table class="form-table">
			<tr valign="top">
                		<th scope="row" colspan="2" class="tab-title" >
					<label for="placid-slider"><?php _e('Slide Transition','placid-slider'); ?> </label>
				</th>
			</tr>
			<tr valign="top">
                		<td scope="row"><label for="placid_slide_transition"><?php _e('Transition','placid-slider'); ?></label></td>
               			<td> <?php echo get_placid_transitions('placid_slide_transition',$placid_slide_transition); ?> </td>
			</tr>
			<tr valign="top">
				<td scope="row"><label for="placid_slide_duration"><?php _e('Duration (seconds)','placid-slider'); ?> </label></td>
               			<td><input type="number" name="placid_slide_duration" value="<?php echo $placid_slide_duration;?>" style="width:60px"  /></td>
			</tr>
			<tr valign="top">
				<td scope="row"><label for="placid_slide_delay"><?php _e('Delay (seconds)','placid-slider'); ?> </label></td>
               			<td><input type="number" name="placid_slide_delay" value="<?php echo $placid_slide_delay;?>" style="width:60px" /></td>
			</tr>
		</table>
		</div>
	</div>
        <div id="placid_advanced_tab" class="placid-tab-content" style="display:none;background: #ffffff;padding: 0 10px;">
	  <?php
		$scounter=get_option('placid_slider_scounter');
		$settingset_html='<option value="0" selected >Select the Settings</option>';
		for($i=1;$i<=$scounter;$i++) { 
			 if($i==$placid_select_set){$selected = 'selected';} else{$selected='';}
			   if($i==1){
			     $settings='Default Settings';
				 $settingset_html =$settingset_html.'<option value="1" '.$selected.'>'.$settings.'</option>';
			   }
			   else{
				  if($settings_set=get_option('placid_slider_options'.$i))
					$settingset_html =$settingset_html.'<option value="'.$i.'" '.$selected.'>'.$settings_set['setname'].' (ID '.$i.')</option>';
			   }
		} ?>
	<div class="slider_checkbox">
	<table class="form-table" style="margin:0;">
		<tr valign="top">
			<td scope="row"><label for="placid_sslider_thumbnail"><?php _e('Custom Image url','placid-slider'); ?></label></td>
        		<td><input type="text" name="placid_sslider_thumbnail" class="placid_sslider_thumbnail" value="<?php echo $placid_sslider_thumbnail;?>" size="50" /></td>
		</tr>
		<!-- Added for disable thumbnail image - Start -->
		<tr valign="top">
			<td scope="row">
				<span style="float: left;margin-right: 20px;min-width: 100px;"><?php _e('Hide Image','placid-slider'); ?> </span>
			</td>
			<td>
				<input id="placid_disable_image" name="placid_disable_image" class="placid-meta-toggle placid-meta-toggle-round" type="checkbox" value="1" <?php if($placid_disable_image=='1'){echo "checked";}?> >
				<label for="placid_disable_image"></label>
			</td>
		</tr>
		<!-- Added for disable thumbnail image - end -->
		<tr valign="top">
                	<td scope="row">
				<label for="placid_link_attr"><?php _e('Slide Link (anchor) attributes ','placid-slider'); ?></label>
			</td>
                	<td>
				<input type="text" name="placid_link_attr" class="placid_link_attr" value="<?php echo htmlentities($placid_link_attr,ENT_QUOTES);?>" size="50" /><br /><small><?php _e('e.g. target="_blank" rel="external nofollow"','placid-slider'); ?></small>
			</td>
		</tr>	 
	</table>
	<!-- Added for embed shortcode - Start -->
	<div>
		<label for="embed_shortcode" style="font-size: 14px;margin-left: 10px;"><?php _e('Shortcode to Replace Image','placid-slider'); ?> </label>
		<div style="font-size: 10px;color: #222222;margin-left: 20px;">e.g YouTube video shortcode to replace slide image.</div>
	
		<textarea rows="4" cols="50" name="placid_sslider_eshortcode" style="margin-left: 264px;"><?php echo htmlentities( $placid_embed_shortcode, ENT_QUOTES);?></textarea>
	</div>
	<!-- Added for video for embed shortcode - end -->
	<table class="form-table" style="width:520px;">
		<tr valign="top">
			<td scope="row">
				<label for="placid_sslider_expiry"><?php _e('Expiry Date','placid-slider'); ?></label>
			</td>
			<td>
				<input type="text" name="placid_sslider_expiry" id="placid_ExpiryDate" class="placid_sslider_expiry" value="<?php echo ((!empty($expirydt))?date_i18n($wpDateFormat, strtotime($expirydt)):'');?>" size="30" /> <input type="hidden" name="placid_expiry_actual" id="placid_expiry_actual" value="<?php echo $expirydt;?>" /><button name="placid_none" id="placid_none"><?php esc_html_e( 'None','placid-slider' );?>
			</td>
		</tr>	
			
		<tr valign="top">
			<td scope="row">	
				<input id="placid_display_slider" name="placid_display_slider" class="placid-meta-toggle placid-meta-toggle-round" type="checkbox"  value="1" <?php if(placid_ss_slider_on_this_post($post_id)){echo "checked";}?> >
				<label for="placid_display_slider"></label>		
				<span><?php _e('Force Display Slider','placid-slider'); ?></span>
			</td>
			<td>
				<select name="placid_display_slider_name">
					<?php foreach ($sliders as $slider) { ?>
					  <option value="<?php echo $slider['slider_id'];?>" <?php if(placid_ss_post_on_slider($post_id,$slider['slider_id'])){echo 'selected';} ?>><?php echo $slider['slider_name'];?></option>
					<?php } ?>
				</select> 
			</td>
		</tr>
         	<tr valign="top">
		       	<td scope="row">
				<label for="placid_setting_set"><?php _e('Force Apply Setting','placid-slider'); ?></label>
			</td>
			<td>
				<select id="placid_select_set" name="placid_select_set"><?php echo $settingset_html;?></select>
			</td>
		</tr>
        </table>
	</div>		
        </div>
<?php }
}
add_action('publish_post', 'placid_add_to_slider');
add_action('publish_page', 'placid_add_to_slider');
add_action('edit_post', 'placid_add_to_slider');
add_action('publish_post', 'placid_remove_from_slider');
add_action('edit_post', 'placid_remove_from_slider');
add_action('deleted_post','placid_delete_from_slider_table');
add_action('edit_attachment', 'placid_add_to_slider');
add_action('delete_attachment','placid_delete_from_slider_table');

function placid_slider_plugin_url( $path = '' ) {
	return plugins_url( $path, __FILE__ );
}

add_filter( 'plugin_action_links', 'placid_sslider_plugin_action_links', 10, 2 );

function placid_sslider_plugin_action_links( $links, $file ) {
	if ( $file != PLACID_SLIDER_PLUGIN_BASENAME )
		return $links;

	$url = placid_sslider_admin_url( array( 'page' => 'placid-slider-settings' ) );

	$settings_link = '<a href="' . esc_attr( $url ) . '">'
		. esc_html( __( 'Settings') ) . '</a>';

	array_unshift( $links, $settings_link );

	return $links;
}

//New Custom Post Type
$gplacid_slider = get_option('placid_slider_global_options');
if( $gplacid_slider['custom_post'] == '1' and !post_type_exists('slidervilla') ){
	add_action( 'init', 'placid_post_type', 11 );
	function placid_post_type() {
			$gplacid_slider = get_option('placid_slider_global_options');
			$labels = array(
			'name' => _x('SliderVilla Slides', 'post type general name'),
			'singular_name' => _x('SliderVilla Slide', 'post type singular name'),
			'add_new' => _x('Add New', 'placid'),
			'add_new_item' => __('Add New SliderVilla Slide'),
			'edit_item' => __('Edit SliderVilla Slide'),
			'new_item' => __('New SliderVilla Slide'),
			'all_items' => __('All SliderVilla Slides'),
			'view_item' => __('View SliderVilla Slide'),
			'search_items' => __('Search SliderVilla Slides'),
			'not_found' =>  __('No SliderVilla slides found'),
			'not_found_in_trash' => __('No SliderVilla slides found in Trash'), 
			'parent_item_colon' => '',
			'menu_name' => 'SliderVilla Slides'
			);
			$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true, 
			'query_var' => true,
			'rewrite' => array('slug' => $gplacid_slider['cpost_slug'],'with_front' => false),
			'capability_type' => 'post',
			'has_archive' => true, 
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail','excerpt','custom-fields')
			); 
			register_post_type('slidervilla',$args);
	}

	//add filter to ensure the text SliderVilla, or slidervilla, is displayed when user updates a slidervilla 
	add_filter('post_updated_messages', 'placid_updated_messages');
	function placid_updated_messages( $messages ) {
	  global $post, $post_ID;

	  $messages['placid'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('SliderVilla Slide updated. <a href="%s">View SliderVilla slide</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('Custom field updated.'),
		3 => __('Custom field deleted.'),
		4 => __('SliderVilla Slide updated.'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('SliderVilla Slide restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('SliderVilla Slide published. <a href="%s">View SliderVilla slide</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('Placid saved.'),
		8 => sprintf( __('SliderVilla Slide submitted. <a target="_blank" href="%s">Preview SliderVilla slide</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('SliderVilla Slides scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview SliderVilla slide</a>'),
		  // translators: Publish box date format, see http://php.net/date
		  date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('SliderVilla Slide draft updated. <a target="_blank" href="%s">Preview SliderVilla slide</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	  );

	  return $messages;
	}
} //if custom_post is true

require_once (dirname (__FILE__) . '/slider_versions/placid_1.php');
require_once (dirname (__FILE__) . '/settings/settings.php');
require_once (dirname (__FILE__) . '/settings/easy_builder.php');
require_once (dirname (__FILE__) . '/settings/admin-ajax.php');

// Added SliderVilla Quicktag
function placid_quicktag_select(){
	echo '<option value="placid-slider" >Placid Slider</option>';
}
function placid_quicktag_js(){
	echo '<script language="javascript" type="text/javascript" src="'.placid_slider_plugin_url('includes/tinymce/tinymce.js').'"></script>';
}
function placid_plugins_loaded(){
	if( !class_exists( 'add_slidervilla_button' ) ) {
		include_once (dirname (__FILE__) . '/includes/tinymce/tinymce.php');
	}
	add_action( 'svquicktag_select', 'placid_quicktag_select' );
	add_action( 'svquicktag_js', 'placid_quicktag_js' );
}
add_action( 'plugins_loaded', 'placid_plugins_loaded' );

// Load the update-notification class
add_action('init', 'placid_update_notification');
function placid_update_notification()
{
    require_once (dirname (__FILE__) . '/includes/upgrade.php');
    $placid_upgrade_remote_path = 'http://support.slidervilla.com/sv-updates/placid.php';
    new placid_update_class ( PLACID_SLIDER_VER, $placid_upgrade_remote_path, PLACID_SLIDER_PLUGIN_BASENAME );
}
?>
