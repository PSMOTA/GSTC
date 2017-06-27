<?php // Hook for adding admin menus
if ( is_admin() ){ // admin actions
  add_action('admin_menu', 'placid_slider_settings'); 
}
// function for adding settings page to wp-admin
function placid_slider_settings() {
    // Add a new submenu under Options:
	add_menu_page( 'placid Slider', 'Placid Slider', 'manage_options','placid-slider-admin', 'placid_slider_create_new_slider');
	add_submenu_page('placid-slider-admin', 'Placid Sliders', 'Create New', 'manage_options', 'placid-slider-admin', 'placid_slider_create_new_slider');
	 $firstPage = add_submenu_page('placid-slider-admin', 'Manage Sliders', 'Manage Sliders', 'manage_options', 'manage-placid-slider', 'placid_slider_create_multiple_sliders');
	add_submenu_page('placid-slider-admin', 'Placid Slider Settings', 'Global Settings', 'manage_options', 'placid-slider-global-settings', 'placid_slider_gbl_settings');
	add_submenu_page('placid-slider-admin', 'Placid Slider Settings', 'Setting Sets', 'manage_options', 'placid-slider-settings', 'placid_slider_settings_page');
	add_submenu_page('placid-slider-admin', 'Placid Slider License Key', 'License', 'manage_options', 'placid-slider-license-key', 'placid_slider_license');
	add_submenu_page($firstPage, 'Placid Slider Easy Builder', 'Placid Slider Easy Builder', 'manage_options', 'placid-slider-easy-builder', 'placid_slider_easybuilder_page');
}
require_once (dirname (__FILE__) . '/global_settings.php');
require_once (dirname (__FILE__) . '/create-new.php');
require_once (dirname (__FILE__) . '/sliders.php');
require_once (dirname (__FILE__) . '/license.php');
require_once (PLACID_SLIDER_INC_DIR.'fonts.php');

//Create Set & Export Settings
function placid_process_set_requests(){
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$scounter=get_option('placid_slider_scounter');
	$cntr='';
	if(isset($_GET['scounter'])) $cntr = $_GET['scounter'];
	
	if(isset($_POST['create_set'])){
		if ($_POST['create_set']=='Create New Settings Set') {
		  $scounter++;
		  update_option('placid_slider_scounter',$scounter);
		  $options='placid_slider_options'.$scounter;
		  update_option($options,$default_placid_slider_settings);
		  $current_url = admin_url('admin.php?page=placid-slider-settings');
		  $current_url = add_query_arg('scounter',$scounter,$current_url);
		  wp_redirect( $current_url );
		  exit;
		}
	}
	//Export Settings
	if(isset($_POST['export'])){
		if ($_POST['export']=='Export') {
			@ob_end_clean();
			
			// required for IE, otherwise Content-Disposition may be ignored
			if(ini_get('zlib.output_compression'))
			ini_set('zlib.output_compression', 'Off');
			
			header('Content-Type: ' . "text/x-csv");
			header('Content-Disposition: attachment; filename="placid-settings-set-'.$cntr.'.csv"');
			header("Content-Transfer-Encoding: binary");
			header('Accept-Ranges: bytes');

			/* The three lines below basically make the
			download non-cacheable */
			header("Cache-control: private");
			header('Pragma: private');
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

			$exportTXT='';$i=0;
			$slider_options='placid_slider_options'.$cntr;
			$slider_curr=get_option($slider_options);
			foreach($slider_curr as $key=>$value){
			if($key != 'active_tab' ) {
				if($i>0) $exportTXT.="\n";
				if(!is_array($value)){
					$exportTXT.=$key.",".$value;
				}
				else {
					$exportTXT.=$key.',';
					$j=0;
					if($value) {
						foreach($value as $v){
							if($j>0) $exportTXT.="|";
							$exportTXT.=$v;
							$j++;
						}
					}
				}
				$i++;
			}
		}
			$exportTXT.="\n";
			$exportTXT.="slider_name,placid";
			print($exportTXT); 
			exit();
		}
	}	
}
add_action('load-placid-slider_page_placid-slider-settings','placid_process_set_requests');

// This function displays the page content for the Placid Slider Options submenu
function placid_slider_settings_page() {
$gplacid_slider = get_option('placid_slider_global_options');
$default_placid_slider_settings=get_placid_slider_default_settings();
$scounter=get_option('placid_slider_scounter');
if (isset($_GET['scounter']))$cntr = $_GET['scounter'];
else $cntr = '';
$new_settings_msg='';
/* Include settings file of each skin - strat */
$directory = PLACID_SLIDER_CSS_DIR;
if ($handle = opendir($directory)) {
    while (false !== ($file = readdir($handle))) { 
     if($file != '.' and $file != '..') { 
     	if($file!='sample')
		require_once ( dirname( dirname(__FILE__) ) . '/css/skins/'.$file.'/settings.php');
   } }
    closedir($handle);
}
/* Include settings file of each skin- end */
//Reset Settings
if (isset ($_POST['placid_reset_settings_submit'])) {
	if ( $_POST['placid_reset_settings']!='n' ) {
	  $placid_reset_settings=$_POST['placid_reset_settings'];
	  $options='placid_slider_options'.$cntr;
	  $optionsvalue=get_option($options);
	  if( $placid_reset_settings == 'g' ){
		$new_settings_value=$default_placid_slider_settings;
		$new_settings_value['setname']=isset($optionsvalue['setname'])?$optionsvalue['setname']:'Set';
		update_option($options,$new_settings_value);
	  }
	  elseif(!is_numeric($placid_reset_settings)){
		$skin=$placid_reset_settings;
		$new_settings_value=$default_placid_slider_settings;
		$skin_defaults_str='default_settings_'.$skin;
		global ${$skin_defaults_str};
		if(count(${$skin_defaults_str})>0){
			foreach(${$skin_defaults_str} as $key=>$value){
				$new_settings_value[$key]=$value;	
			}
			$new_settings_value['stylesheet']=$skin;
		}
		if(!isset($optionsvalue['setname']) or $optionsvalue['setname'] == '')
			$optionsvalue['setname']=$default_placid_slider_settings['setname'];
		$new_settings_value['setname']=$optionsvalue['setname'];		
		update_option($options,$new_settings_value);
	  }
	  else{
		if( $placid_reset_settings == '1' ){
			$new_settings_value=get_option('placid_slider_options');
			$new_settings_value['setname']=$optionsvalue['setname'];
			update_option($options,	$new_settings_value );
		}
		else {
			$new_option_name='placid_slider_options'.$placid_reset_settings;
			$new_settings_value=get_option($new_option_name);
			$new_settings_value['setname']=$optionsvalue['setname'];
			update_option($options,	$new_settings_value );
		}
	  }
	}
}

//Import Settings
if (isset ($_POST['import'])) {
	if ($_POST['import']=='Import') {
		global $wpdb;
		$imported_settings_message='';
		$csv_mimetypes = array('text/csv','text/x-csv','text/plain','application/csv','text/comma-separated-values','application/excel','application/vnd.ms-excel','application/vnd.msexcel','text/anytext','application/octet-stream','application/txt');
		if ($_FILES['settings_file']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['settings_file']['tmp_name']) && in_array($_FILES['settings_file']['type'], $csv_mimetypes) ) { 
			$imported_settings=file_get_contents($_FILES['settings_file']['tmp_name']); 
			$settings_arr=explode("\n",$imported_settings);
			$slider_settings=array();
			foreach($settings_arr as $settings_field){
				$s=explode(',',$settings_field);
				$inner=explode('|',$s[1]);
				if(strpos($s[0],'fontgsubset') !== false && empty($s[1]) ) {
					$slider_settings[$s[0]]=array();
				} elseif(strpos($s[0],'fontgsubset') !== false && count($inner) == 1 ) {
					$slider_settings[$s[0]]=array($s[1]);
				} else {
					if(count($inner)>1) $slider_settings[$s[0]]=$inner;
					else $slider_settings[$s[0]]=$s[1];
				}
			}
			$slider_settings['active_tab']=array('active_tabidx'=>'0','closed_sections'=>'');
			$options='placid_slider_options'.$cntr;

			if( $slider_settings['slider_name'] == 'placid' ) {
				update_option($options,$slider_settings);
				$new_settings_msg='<div id="message" class="updated fade" style="clear:left;"><h3>'.__('Settings imported successfully ','placid-slider').'</h3></div>';
				$imported_settings_message='<div style="clear:left;color:#006E2E;"><h3>'.__('Settings imported successfully ','placid-slider').'</h3></div>';
			}
			else {
				$new_settings_msg=$imported_settings_message='<div id="message" class="error fade" style="clear:left;"><h3>'.__('Settings imported do not match to Placid Slider Settings. Please check the file.','placid-slider').'</h3></div>';
				$imported_settings_message='<div style="clear:left;color:#ff0000;"><h3>'.__('Settings imported do not match to Placid Slider Settings. Please check the file.','placid-slider').'</h3></div>';
			}
		}
		else{
			$new_settings_msg=$imported_settings_message='<div id="message" class="error fade" style="clear:left;"><h3>'.__('Error in File, Settings not imported. Please check the file being imported. ','placid-slider').'</h3></div>';
			$imported_settings_message='<div style="clear:left;color:#ff0000;"><h3>'.__('Error in File, Settings not imported. Please check the file being imported. ','placid-slider').'</h3></div>';
		}
	}
}

//Delete Set
if (isset ($_POST['delete_set'])) {
	if ($_POST['delete_set']=='Delete this Set' and isset($cntr) and !empty($cntr)) {
	  $options='placid_slider_options'.$cntr;
	  delete_option($options);
	  $cntr='';
	}
}

$group='placid-slider-group'.$cntr;
$placid_slider_options='placid_slider_options'.$cntr;
$placid_slider_curr=get_option($placid_slider_options);
if(!isset($cntr) or empty($cntr)){$curr = 'Default';}
else{$curr = $cntr;}
$placid_slider_curr= populate_placid_current($placid_slider_curr);

/* Save Placid Slider Settings */
if(isset($_POST['save_settings']) && !empty($_POST['save_settings']) ) {
	if($_POST['option_page'] == $group && strpos($_POST['_wp_http_referer'],'placid-slider-settings') !== false && $_POST['action'] == 'update' ) {
		$options='placid_slider_options'.$cntr;
		foreach($placid_slider_curr as $key=>$value) {
			if(isset($_POST['placid_slider_options'.$cntr][$key])) {
				$post_value=$_POST['placid_slider_options'.$cntr][$key];
				if(is_string($_POST['placid_slider_options'.$cntr][$key])) $post_value = stripslashes($_POST['placid_slider_options'.$cntr][$key]);
				$new_settings_value[$key]=$post_value;
			} else {
				$new_settings_value[$key]=$value;
			}
		}
		if(isset($_POST['placid_slider_options'.$cntr]['stylesheet']) && $placid_slider_curr['stylesheet'] != $_POST['placid_slider_options'.$cntr]['stylesheet'] ) { 
			/* Poulate skin specific settings */	
			$skin = $_POST['placid_slider_options'.$cntr]['stylesheet'];
			$skin_defaults_str='default_settings_'.$skin;
			global ${$skin_defaults_str};
			if(count(${$skin_defaults_str})>0){
				foreach(${$skin_defaults_str} as $key=>$value){
					$new_settings_value[$key]=$value;	
				} 
			}
			/* END - Poulate skin specific settings */ 
		}
		update_option($options,$new_settings_value);
		/* Undo - Save previous Settings */
		set_transient( 'placid_undo_set', $placid_slider_curr);
		/* END Undo previous Settings */
		$placid_slider_curr=$new_settings_value;
	}
}
if(isset($_POST['undo_settings']) && get_transient( 'placid_undo_set' ) != false ) { 
	$options='placid_slider_options'.$cntr;
	$new_settings_value = get_transient( 'placid_undo_set' ); 
	update_option($options,$new_settings_value);
	/* Undo - Save previous Settings */
	delete_transient( 'placid_undo_set' );
	/* END Undo previous Settings */
	$placid_slider_curr=$new_settings_value;
}
?>
<div class="wrap" style="clear:both;">
<form style="float:right;margin:10px 20px" action="" method="post">
<?php if(isset($cntr) and !empty($cntr)){ ?>
<input type="submit" class="button-primary" value="Delete this Set" name="delete_set"  onclick="return confirmSettingsDelete()" />
<?php } ?>
</form>
<h2 class="top_heading"><?php _e('Placid Slider Settings: ','placid-slider'); echo '<span>'.$curr.'</span>'; ?> </h2>
<div class="svilla_cl"></div>
<?php echo $new_settings_msg;?>
<?php 
if ($placid_slider_curr['disable_preview'] != '1'){
?>
<div id="settings_preview"><h2 class="heading"><?php _e('Preview','placid-slider'); ?></h2> 
<?php 

if(isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != '') 
	$offset = $placid_slider_curr['offset']; 
else $offset = '0';
if(empty($cntr))$setCntr='1';
else $setCntr=$cntr;

if ($placid_slider_curr['preview'] == "0")
	get_placid_slider($placid_slider_curr['slider_id'],$setCntr);
elseif($placid_slider_curr['preview'] == "1")
	get_placid_slider_category($placid_slider_curr['catg_slug'],$setCntr);
elseif($placid_slider_curr['preview'] == "2")
	get_placid_slider_recent($setCntr,$offset);
elseif($placid_slider_curr['preview'] == "3") {
	$args['offset'] = $offset;
	if(isset($placid_slider_curr['product_woocatg_slug'])) {
		$args['term'] = isset($placid_slider_curr['product_woocatg_slug'])?$placid_slider_curr['product_woocatg_slug']:'';
		$args['taxonomy'] = 'product_cat';
	}
	$args['type'] = isset($placid_slider_curr['woo_type'])?$placid_slider_curr['woo_type']:'';
	$args['post_type']='product';
	$args['product_id']= isset($placid_slider_curr['product_id'])?$placid_slider_curr['product_id']:''; ;
	$args['set']=$setCntr;
	get_placid_slider_woocommerce($args);
}
elseif($placid_slider_curr['preview'] == "4") {
	$args['offset'] = $offset;
	if(isset($placid_slider_curr['ecom_type']) && $placid_slider_curr['ecom_type'] == '1' && isset($placid_slider_curr['product_ecomcatg_slug']) ) {
			$args['term'] = $placid_slider_curr['product_ecomcatg_slug'];
			$args['taxonomy'] = 'wpsc_product_category';
	}
	$args['post_type']='wpsc-product';
	$args['set']=$setCntr;
	$args['data']['type'] = 'ecom';
	get_placid_slider_taxonomy($args);
}
elseif($placid_slider_curr['preview'] == "5") {
	$args['offset'] = $offset;
	if(isset($placid_slider_curr['events_mancatg_slug']) && $placid_slider_curr['events_mancatg_slug'] != '' )
		$args['term'] = $placid_slider_curr['events_mancatg_slug'];
	if(isset($placid_slider_curr['events_mantag_slug']) && $placid_slider_curr['events_mantag_slug'] != '' ) 
		$args['tags'] = $placid_slider_curr['events_mantag_slug'];
	$args['scope'] = isset($placid_slider_curr['event_type'])?$placid_slider_curr['event_type']:'';
	$args['post_type']='event';
	$args['set']=$setCntr;
	get_placid_slider_event($args);
}
elseif($placid_slider_curr['preview'] == "6") {
	$args['offset'] = $offset;
	if(isset($placid_slider_curr['events_calcatg_slug']) && $placid_slider_curr['events_calcatg_slug'] != '' ) {
		$args['term'] = $placid_slider_curr['events_calcatg_slug'];
		$args['taxonomy'] = 'tribe_events_cat';
	}
	if(isset($placid_slider_curr['events_caltag_slug']) && $placid_slider_curr['events_caltag_slug'] != '' ) 
		$args['tags'] = $placid_slider_curr['events_caltag_slug'];
	$args['type'] = isset($placid_slider_curr['eventcal_type'])?$placid_slider_curr['eventcal_type']:'';
	$args['post_type']='tribe_events';
	$args['set']=$setCntr;
	get_placid_slider_event_calendar($args);
}
elseif($placid_slider_curr['preview'] == "7") {
	$args=array(
		'post_type'=>$placid_slider_curr['taxonomy_posttype'],
		'taxonomy'=>$placid_slider_curr['taxonomy'],
		'term'=>$placid_slider_curr['taxonomy_term'],
		'set'=>$setCntr,
		'offset'=>$offset,
		'show'=>$placid_slider_curr['taxonomy_show'],
		'operator'=>$placid_slider_curr['taxonomy_operator'],
		'author'=>$placid_slider_curr['taxonomy_author']
	);
	get_placid_slider_taxonomy($args);
}
elseif($placid_slider_curr['preview'] == "8") {
	$args=array(
		'set'=>$setCntr,
		'offset'=>$offset,
		'feedurl'=>$placid_slider_curr['rssfeed_feedurl'],
		'default_image'=>$placid_slider_curr['rssfeed_default_image'],
		'title'=>'',
		'id'=>$placid_slider_curr['rssfeed_id'],
		'feed'=>$placid_slider_curr['rssfeed_feed'],
		'order'=>$placid_slider_curr['rssfeed_order'],
		'content'=>$placid_slider_curr['rssfeed_content'],  
		'media'=>$placid_slider_curr['rssfeed_media'],
		'src'=>$placid_slider_curr['rssfeed_src'],
		'size'=>$placid_slider_curr['rssfeed_size'],
		'image_class'=>$placid_slider_curr['rssfeed_image_class']
	);
	get_placid_slider_feed($args);
}
elseif($placid_slider_curr['preview'] == "9") {
	$args=array(
		'set'=>$setCntr,
		'offset'=>$offset,
		'id'=>$placid_slider_curr['postattch_id']
	);
	get_placid_slider_attachments($args);
}
elseif($placid_slider_curr['preview'] == "10") {
	$args=array(
		'gallery_id'=>$placid_slider_curr['nextgen_gallery_id'],
		'set'=>$setCntr,
		'offset'=>$offset,
		'anchor'=>$placid_slider_curr['nextgen_anchor']
	);
	get_placid_slider_ngg($args);
}
?></div>
<?php } ?>

<?php echo $new_settings_msg;?>

<div id="placid_settings" style="float:left;width:70%;">
<form method="post" id="placid_slider_form" class="placid-settings-form">
<?php settings_fields($group); ?>

<?php
if(!isset($cntr) or empty($cntr)){}
else{?>
	<table class="form-table">
		<tr valign="top">
		<th scope="row"><h3><?php _e('Setting Set Name','placid-slider'); ?></h3></th>
		<td><h3><input type="text" name="<?php echo $placid_slider_options;?>[setname]" id="placid_slider_setname" class="regular-text" value="<?php echo $placid_slider_curr['setname']; ?>" /></h3></td>
		</tr>
	</table>
<?php }
?>

<div class="slider_tabs">
       	<div class="honeyflower settings-tab tab-active"><a href="#content" id="content"><?php _e('Slider Preview','placid-slider'); ?></a></div>

	<div class="green settings-tab"><a href="#basic" id="basic"><?php _e('Basic Settings','placid-slider'); ?></a></div>

	<div class="blue settings-tab"><a href="#slides" id="slides"><?php _e('Slide Settings','placid-slider'); ?></a></div>

	<div class="orange settings-tab"><a href="#navarrow" id="navarrow"><?php _e('Navigation Panel','placid-slider'); ?></a></div>

	<div class="gray settings-tab" id="placidwoo"><a href="#woo" id="woo"><?php _e('eCommerce','placid-slider'); ?></a></div>
	
	<div class="jelly settings-tab" id="event_manager"><a href="#events" id="events"><?php _e('Event Settings','placid-slider'); ?></a></div>

	<div class="plum settings-tab"><a href="#miscellaneous" id="miscellaneous"><?php _e('Miscellaneous','placid-slider'); ?></a></div>
</div>
       	<div class="placid-tabs-content"></div>
	<div style="clear: left;"></div>
	<p class="submit">
		<input type="submit" class="button-primary" name="save_settings" value="<?php _e('Save Changes') ?>" />
	</p>
	<input type="hidden" name="<?php echo $placid_slider_options;?>[active_tab][active_tabidx]" id="placid_activetab" value="<?php echo $placid_slider_curr['active_tab']['active_tabidx']; ?>" />
	<input type="hidden" name="<?php echo $placid_slider_options;?>[active_tab][closed_sections]" id="placid_closedsections" value="<?php echo $placid_slider_curr['active_tab']['closed_sections']; ?>" />
	<input type="hidden" name="<?php echo $placid_slider_options;?>[active_accordion]" id="placid_active_accordion" value="<?php echo $placid_slider_curr['active_accordion']; ?>" />
	<input type="hidden" name="<?php echo $placid_slider_options;?>[new]" id="placid_new_set" value="0" />
	<input type="hidden" name="hidden_urlpage" class="placid_urlpage" value="<?php echo $_GET['page'];?>" />
	<input type="hidden" name="<?php echo $placid_slider_options;?>[popup]" id="placidpopup" value="<?php echo $placid_slider_curr['popup']; ?>" />
	<input type="hidden" name="placid-hiddencntr" class="placid-hiddencntr" value="<?php echo $cntr; ?>" />
	<input type="hidden" name="oldnew" id="oldnew" value="<?php echo $placid_slider_curr['new']; ?>" />
	<input type="hidden" name="hidden_preview" id="hidden_preview" value="<?php echo $placid_slider_curr['preview']; ?>" />
	<input type="hidden" name="hidden_category" id="hidden_category" value="<?php echo $placid_slider_curr['catg_slug']; ?>" />
	<input type="hidden" name="hidden_sliderid" id="hidden_sliderid" value="<?php echo $placid_slider_curr['slider_id']; ?>" />
	<input type="hidden" name="placid-settings-nonce" id="placid-settings-nonce" value="<?php echo wp_create_nonce( 'placid-settings-nonce' ); ?>" />
	<input type="hidden" name="placid-slider-nonce" id="placid-slider-nonce" value="<?php echo wp_create_nonce( 'placid-slider-nonce' ); ?>" />
	<input type="hidden" name="placid-google-nonce" id="placid-google-nonce" value="<?php echo wp_create_nonce( 'placid-google-nonce' ); ?>" />
	<input type="hidden" id="placid_pluginurl" value="<?php echo placid_slider_plugin_url(); ?>" />
</form>

<!--Form to reset Settings set-->
<form style="float:left;" action="" method="post">
<table class="form-table">
<tr valign="top">
<th scope="row"><?php _e('Reset Settings to','placid-slider'); ?></th>
<td><select name="placid_reset_settings" id="placid_slider_reset_settings" >
<option value="n" selected ><?php _e('None','placid-slider'); ?></option>
<option value="g" ><?php _e('Global Default','placid-slider'); ?></option>
<?php 
$directory = PLACID_SLIDER_CSS_DIR;
if ($handle = opendir($directory)) {
    while (false !== ($file = readdir($handle))) { 
     if($file != '.' and $file != '..') { 
	if($file!="default" and $file!="sample")     
	{ ?>
      <option value="<?php echo $file;?>"><?php echo "'".$file."' skin";?></option>
 <?php  } } }
    closedir($handle);
}
?>
<?php 
for($i=1;$i<=$scounter;$i++){
	if ($i==1){
	  echo '<option value="'.$i.'" >'.__('Default Settings Set','placid-slider').'</option>';
	}
	else {
	  if($settings_set=get_option('placid_slider_options'.$i)){
		echo '<option value="'.$i.'" >'. (isset($settings_set['setname'])? ($settings_set['setname']) : '' ) .' (ID '.$i.')</option>';
	  }
	}
}
?>
</select>
</td>
</tr>
</table>

<p class="submit">
<input name="placid_reset_settings_submit" type="submit" class="button-primary" value="<?php _e('Reset Settings') ?>" />
</p>
</form>
<input type="hidden" name="placid-loader" value="<?php echo admin_url('images/loading.gif');?>" />
<div class="svilla_cl"></div>

<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:0;" id="import">
<?php if (isset ($imported_settings_message))echo $imported_settings_message;?>
<h3><?php _e('Import Settings Set by uploading a Settings File','placid-slider'); ?></h3>
<form style="margin-right:10px;font-size:14px;" action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
<input type="file" name="settings_file" id="settings_file" style="font-size:13px;width:50%;padding:0 5px;" />
<input type="submit" value="Import" name="import"  onclick="return confirmSettingsImport()" title="<?php _e('Import Settings from a file','placid-slider'); ?>" class="button-primary" />
<input type="hidden" name="cntr" value="<?php echo $cntr; ?>" />
</form>
</div>

</div> <!--end of float left -->

<div id="poststuff" class="metabox-holder has-right-sidebar" style="float: left;max-width: 270px;">
<div class="postbox" id="sliderscode" style="margin:0 0 10px 0;"> 
<h3 class="hndle"><span></span><?php _e('Quick Embed Shortcode','placid-slider'); ?></h3> 
	<div class="inside" id="shortcodeview">
	<?php if($cntr=='') $set=' set="1"'; else $set=' set="'.$cntr.'"';
$offset = '';
if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$offset = ' offset="'.$placid_slider_curr['offset'].'"';
if ($placid_slider_curr['preview'] == "0")
	$preview = '[placidslider id="'.$placid_slider_curr['slider_id'].'"'.$set.$offset.']';
elseif($placid_slider_curr['preview'] == "1")
	$preview = '[placidcategory catg_slug="'.$placid_slider_curr['catg_slug'].'"'.$set.$offset.']';
elseif($placid_slider_curr['preview'] == "3" ) {
	$woocat = $product_id = '';
	if(isset($placid_slider_curr['product_woocatg_slug']) && !empty($placid_slider_curr['product_woocatg_slug']) )
		$woocat = ' term="'.$placid_slider_curr['product_woocatg_slug'].'"';
	if(isset($placid_slider_curr['product_id']) && !empty($placid_slider_curr['product_id']) )
		$product_id = ' product_id="'.$placid_slider_curr['product_id'].'"';
	$preview = '[placidwoocommerce type="'.$placid_slider_curr['woo_type'].'"'.$set.$offset.$product_id.$woocat.']';
}
elseif($placid_slider_curr['preview'] == "4" && $placid_slider_curr['ecom_type'] == "0")
	$preview = '[placidtaxonomy post_type="wpsc-product"'.$set.$offset.']';
elseif($placid_slider_curr['preview'] == "4" && $placid_slider_curr['ecom_type'] == "1")
	$preview = '[placidtaxonomy post_type="wpsc-product" taxonomy="wpsc_product_category" term="'.$placid_slider_curr['product_ecomcatg_slug'].'" '.$set.$offset.']';
elseif($placid_slider_curr['preview'] == "5") {
	$ecat = $etag = $scope = '';
	if(isset($placid_slider_curr['events_mancatg_slug']) && !empty($placid_slider_curr['events_mancatg_slug']) )
		$ecat = ' term="'.$placid_slider_curr['events_mancatg_slug'].'"';
	if(isset($placid_slider_curr['events_mantag_slug']) && !empty($placid_slider_curr['events_mantag_slug']) )
		$etag = ' tags="'.$placid_slider_curr['events_mantag_slug'].'"';
	if(isset($placid_slider_curr['event_type']) && !empty($placid_slider_curr['event_type']) )
		$scope = ' scope="'.$placid_slider_curr['event_type'].'"';
	$preview = '[placidevent'.$scope.$set.$offset.$ecat.$etag.']';
}
elseif($placid_slider_curr['preview'] == "6") {
	$ecat = $etag = $scope = '';
	if(isset($placid_slider_curr['events_calcatg_slug']) && !empty($placid_slider_curr['events_calcatg_slug']) )
		$ecat = ' term="'.$placid_slider_curr['events_calcatg_slug'].'"';
	if(isset($placid_slider_curr['events_caltag_slug']) && !empty($placid_slider_curr['events_caltag_slug']) )
		$etag = ' tags="'.$placid_slider_curr['events_caltag_slug'].'"';
	if(isset($placid_slider_curr['eventcal_type']) && !empty($placid_slider_curr['eventcal_type']) )
		$scope = ' type="'.$placid_slider_curr['eventcal_type'].'"';
	$preview = '[placidcalendar'.$scope.$set.$offset.$ecat.$etag.']';
}
elseif($placid_slider_curr['preview'] == "7") {
	$postype=$taxonomy=$term=$operator=$author=$show='';
	if(isset($placid_slider_curr['taxonomy_posttype']) && $placid_slider_curr['taxonomy_posttype'] != '' ) {
		$postype = ' post_type="'.$placid_slider_curr['taxonomy_posttype'].'"';	
	}
	if(($placid_slider_curr['taxonomy']) && $placid_slider_curr['taxonomy'] != '' ) {
		$taxonomy = ' taxonomy="'.$placid_slider_curr['taxonomy'].'"';
	}
	if(isset($placid_slider_curr['taxonomy_term']) && $placid_slider_curr['taxonomy_term'] != '' ) {
		$term = ' term="'.$placid_slider_curr['taxonomy_term'].'"';
	}
	if(isset($placid_slider_curr['taxonomy_operator']) && $placid_slider_curr['taxonomy_operator'] != '' ) {
		$operator = ' operator="'.$placid_slider_curr['taxonomy_operator'].'"';
	}
	if(isset($placid_slider_curr['taxonomy_author']) && $placid_slider_curr['taxonomy_author'] != '' ) {
		$author = ' author="'.$placid_slider_curr['taxonomy_author'].'"';
	}
	if(isset($placid_slider_curr['taxonomy_show']) && $placid_slider_curr['taxonomy_show'] != '' ) {
		$show = ' show="'.$placid_slider_curr['taxonomy_show'].'"';
	}		
	$preview = '[placidtaxonomy'.$postype.$set.$offset.$taxonomy.$term.$operator.$author.$show.']';
}
elseif($placid_slider_curr['preview'] == "8") {
	$id=$feed=$feedurl=$default_image=$src=$order=$media=$content=$image_class=$size='';
	if(isset($placid_slider_curr['rssfeed_id']) && $placid_slider_curr['rssfeed_id'] != '' ) {
		$id = ' id="'.$placid_slider_curr['rssfeed_id'].'"';
	}
	if(isset($placid_slider_curr['rssfeed_feed']) && $placid_slider_curr['rssfeed_feed'] != '' ) {
		$feed = ' feed="'.$placid_slider_curr['rssfeed_feed'].'"';	

	}
	if(isset($placid_slider_curr['rssfeed_feedurl']) && $placid_slider_curr['rssfeed_feedurl'] != '' ) {
		$feedurl = ' feedurl="'.$placid_slider_curr['rssfeed_feedurl'].'"';	
	}
	if(isset($placid_slider_curr['rssfeed_default_image']) && $placid_slider_curr['rssfeed_default_image'] != '' ) {
		$default_image = ' default_image="'.$placid_slider_curr['rssfeed_default_image'].'"';	
	}
	if(isset($placid_slider_curr['rssfeed_src']) && $placid_slider_curr['rssfeed_src'] != '' ) {
		$src = ' src="'.$placid_slider_curr['rssfeed_src'].'"';	
	}
	if(isset($placid_slider_curr['rssfeed_order']) && $placid_slider_curr['rssfeed_order'] != '' ) {
		$order = ' order="'.$placid_slider_curr['rssfeed_order'].'"';	
	}
	if(isset($placid_slider_curr['rssfeed_media']) && $placid_slider_curr['rssfeed_media'] != '' ) {
		$media = ' media="'.$placid_slider_curr['rssfeed_media'].'"';
	}
	if(isset($placid_slider_curr['rssfeed_content']) && $placid_slider_curr['rssfeed_content'] != '' ) {
		$content = ' content="'.$placid_slider_curr['rssfeed_content'].'"';
	}
	if(isset($placid_slider_curr['rssfeed_image_class']) && $placid_slider_curr['rssfeed_image_class'] != '' ) {
		$image_class = ' image_class="'.$placid_slider_curr['rssfeed_image_class'].'"';
	}
	if(isset($placid_slider_curr['rssfeed_size']) && $placid_slider_curr['rssfeed_size'] != '' ) {
		$size = ' size="'.$placid_slider_curr['rssfeed_size'].'"';
	}
	$preview = '[placidfeed'.$id.$feed.$feedurl.$set.$offset.$default_image.$src.$order.$media.$content.$image_class.$size.']';
}
elseif($placid_slider_curr['preview'] == "9") {
	$id='';
	if(isset($placid_slider_curr['postattch_id'])  && $placid_slider_curr['postattch_id'] != '' ) {
		$id = ' id="'.$placid_slider_curr['postattch_id'].'"';
	}
	$preview = '[placidattachments'.$id.$set.$offset.']';
}
elseif($placid_slider_curr['preview'] == "10") {
	$gallery_id=$anchor='';
	if(isset($placid_slider_curr['nextgen_gallery_id'])) {
		$gallery_id = ' gallery_id="'.$placid_slider_curr['nextgen_gallery_id'].'"';	
	}
	if(isset($placid_slider_curr['nextgen_anchor']) && !empty($placid_slider_curr['nextgen_anchor']) ) {
		$anchor = ' anchor="'.$placid_slider_curr['nextgen_anchor'].'"';
	}	
	$preview = '[placidngg'.$gallery_id.$set.$offset.$anchor.']';
}
else $preview = '[placidrecent'.$set.$offset.']';
echo $preview;
?>
</div>
</div>

<div class="postbox" style="margin:10px 0;"> 
	<h3 class="hndle"><span></span><?php _e('Quick Embed Template Tag','placid-slider'); ?></h3> 
	<div class="inside" id="templateview">
	<?php 
 if($cntr=='') $tset=' $set="1"'; else $tset=' $set="'.$cntr.'"';
$toffset = '';
if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$toffset = ',$offset="'.$placid_slider_curr['offset'].'"';
if ($placid_slider_curr['preview'] == "0")
	echo '<code>&lt;?php if(function_exists("get_placid_slider")){get_placid_slider($slider_id="'.$placid_slider_curr['slider_id'].'",'.$tset.$toffset.');}?&gt;</code>';
elseif($placid_slider_curr['preview'] == "1")
	echo '<code>&lt;?php if(function_exists("get_placid_slider_category")){get_placid_slider_category($catg_slug="'.$placid_slider_curr['catg_slug'].'",'.$tset.$toffset.');}?&gt;</code>';
elseif($placid_slider_curr['preview'] == "3" ) {
	$args = '';
	if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
	$args .= '&type='. $placid_slider_curr['woo_type'];
	if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$args .= '&offset='.$placid_slider_curr['offset'];
	if(isset($placid_slider_curr['product_woocatg_slug']) && !empty($placid_slider_curr['product_woocatg_slug']) )
		$args .= '&term='.$placid_slider_curr['product_woocatg_slug'];
	if(isset($placid_slider_curr['product_id']) && !empty($placid_slider_curr['product_id']) )
		$args .= '&product_id='.$placid_slider_curr['product_id'];
	echo '<code>&lt;?php if(function_exists("get_placid_slider_woocommerce")){get_placid_slider_woocommerce( "'.$args.'" );}?&gt;</code>';
}
elseif($placid_slider_curr['preview'] == "4" && $placid_slider_curr['ecom_type'] == "0")
	$preview = '[placidtaxonomy post_type="wpsc-product"'.$set.$offset.']';
elseif($placid_slider_curr['preview'] == "4" && $placid_slider_curr['ecom_type'] == "1")
	$preview = '[placidtaxonomy post_type="wpsc-product" taxonomy="wpsc_product_category" term="'.$placid_slider_curr['product_ecomcatg_slug'].'" '.$set.$offset.']';
elseif($placid_slider_curr['preview'] == "5") {
	$args = '';
	if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
	if(isset($placid_slider_curr['event_type']) && !empty($placid_slider_curr['event_type']) )
		$args .= '&scope='.$placid_slider_curr['event_type'];
	if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$args .= '&offset='.$placid_slider_curr['offset'];
	if(isset($placid_slider_curr['events_mancatg_slug']) && !empty($placid_slider_curr['events_mancatg_slug']) )
		$args .= '&term='.$placid_slider_curr['events_mancatg_slug'];
	if(isset($placid_slider_curr['events_mantag_slug']) && !empty($placid_slider_curr['events_mantag_slug']) )
		$args .= '&tags='.$placid_slider_curr['events_mantag_slug'];
	echo '<code>&lt;?php if(function_exists("get_placid_slider_event")){get_placid_slider_event( "'.$args.'" );}?&gt;</code>';
}
elseif($placid_slider_curr['preview'] == "6") {
	$args = '';
	if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
	if(isset($placid_slider_curr['eventcal_type']) && !empty($placid_slider_curr['eventcal_type']) )
		$args .= '&type='.$placid_slider_curr['eventcal_type'];
	if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$args .= '&offset='.$placid_slider_curr['offset'];
	if(isset($placid_slider_curr['events_calcatg_slug']) && !empty($placid_slider_curr['events_calcatg_slug']) )
		$args .= '&term='.$placid_slider_curr['events_calcatg_slug'];
	if(isset($placid_slider_curr['events_caltag_slug']) && !empty($placid_slider_curr['events_caltag_slug']) )
		$args .= '&tags='.$placid_slider_curr['events_caltag_slug'];
	
	echo '<code>&lt;?php if(function_exists("get_placid_slider_event_calendar")){get_placid_slider_event_calendar( "'.$args.'" );}?&gt;</code>';
}
elseif($placid_slider_curr['preview'] == "7") {
	$args = '';
	if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
	if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$args .= '&offset='.$placid_slider_curr['offset'];
	if(isset($placid_slider_curr['taxonomy_posttype']) && $placid_slider_curr['taxonomy_posttype'] != '' ) {
		$args .= '&post_type='.$placid_slider_curr['taxonomy_posttype'];	
	}
	if(($placid_slider_curr['taxonomy']) && $placid_slider_curr['taxonomy'] != '' ) {
		$args .= '&taxonomy='.$placid_slider_curr['taxonomy'];
	}
	if(isset($placid_slider_curr['taxonomy_term']) && $placid_slider_curr['taxonomy_term'] != '' ) {
		$args .= '&term='.$placid_slider_curr['taxonomy_term'];
	}
	if(isset($placid_slider_curr['taxonomy_operator']) && $placid_slider_curr['taxonomy_operator'] != '' ) {
		$args .= '&operator='.$placid_slider_curr['taxonomy_operator'];
	}
	if(isset($placid_slider_curr['taxonomy_author']) && $placid_slider_curr['taxonomy_author'] != '' ) {
		$args .= '&author='.$placid_slider_curr['taxonomy_author'];
	}
	if(isset($placid_slider_curr['taxonomy_show']) && $placid_slider_curr['taxonomy_show'] != '' ) {
		$args .= '&show='.$placid_slider_curr['taxonomy_show'];
	}		
	echo '<code>&lt;?php if(function_exists("get_placid_slider_taxonomy")){get_placid_slider_taxonomy( "'.$args.'" );}?&gt;</code>';
}
elseif($placid_slider_curr['preview'] == "8") {
	$args = '';
	if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
	if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$args .= '&offset='.$placid_slider_curr['offset'];
	if(isset($placid_slider_curr['rssfeed_id']) && $placid_slider_curr['rssfeed_id'] != '' ) {
		$args .= '&id='.$placid_slider_curr['rssfeed_id'];
	}
	if(isset($placid_slider_curr['rssfeed_feed']) && $placid_slider_curr['rssfeed_feed'] != '' ) {
		$args .= '&feed='.$placid_slider_curr['rssfeed_feed'];	
	}
	if(isset($placid_slider_curr['rssfeed_feedurl']) && $placid_slider_curr['rssfeed_feedurl'] != '' ) {
		$args .= '&feedurl='.$placid_slider_curr['rssfeed_feedurl'];	
	}
	if(isset($placid_slider_curr['rssfeed_default_image']) && $placid_slider_curr['rssfeed_default_image'] != '' ) {
		$args .= '&default_image='.$placid_slider_curr['rssfeed_default_image'];	
	}
	if(isset($placid_slider_curr['rssfeed_src']) && $placid_slider_curr['rssfeed_src'] != '' ) {
		$args .= '&src='.$placid_slider_curr['rssfeed_src'];	
	}
	if(isset($placid_slider_curr['rssfeed_order']) && $placid_slider_curr['rssfeed_order'] != '' ) {
		$args .= '&order='.$placid_slider_curr['rssfeed_order'];	
	}
	if(isset($placid_slider_curr['rssfeed_media']) && $placid_slider_curr['rssfeed_media'] != '' ) {
		$args .= '&media='.$placid_slider_curr['rssfeed_media'];
	}
	if(isset($placid_slider_curr['rssfeed_content']) && $placid_slider_curr['rssfeed_content'] != '' ) {
		$args .= '&content='.$placid_slider_curr['rssfeed_content'];
	}
	if(isset($placid_slider_curr['rssfeed_image_class']) && $placid_slider_curr['rssfeed_image_class'] != '' ) {
		$args .= '&image_class='.$placid_slider_curr['rssfeed_image_class'];
	}
	if(isset($placid_slider_curr['rssfeed_size']) && $placid_slider_curr['rssfeed_size'] != '' ) {
		$args .= '&size='.$placid_slider_curr['rssfeed_size'];
	}
	echo '<code>&lt;?php if(function_exists("get_placid_slider_feed")){get_placid_slider_feed( "'.$args.'" );}?&gt;</code>';
	
}
elseif($placid_slider_curr['preview'] == "9") {
	$args = '';
	if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
	if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$args .= '&offset='.$placid_slider_curr['offset'];
	if(isset($placid_slider_curr['postattch_id'])  && $placid_slider_curr['postattch_id'] != '' ) {
		$args .= '&id='.$placid_slider_curr['postattch_id'];
	}
	echo '<code>&lt;?php if(function_exists("get_placid_slider_attachments")){get_placid_slider_attachments( "'.$args.'" );}?&gt;</code>';
}
elseif($placid_slider_curr['preview'] == "10") {
	$args = '';
	if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
	if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
	$args .= '&offset='.$placid_slider_curr['offset'];
	if(isset($placid_slider_curr['nextgen_gallery_id'])) {
		$args .= '&gallery_id='.$placid_slider_curr['nextgen_gallery_id'];	
	}
	if(isset($placid_slider_curr['nextgen_anchor']) && !empty($placid_slider_curr['nextgen_anchor']) ) {
		$args .= '&anchor='.$placid_slider_curr['nextgen_anchor'];
	}
	echo '<code>&lt;?php if(function_exists("get_placid_slider_ngg")){get_placid_slider_ngg( "'.$args.'" );}?&gt;</code>';	
} else
	echo '<code>&lt;?php if(function_exists("get_placid_slider_recent")){get_placid_slider_recent('.$tset.$toffset.');}?&gt;</code>';
?>
	</div>
</div>


<?php $url = placid_sslider_admin_url( array( 'page' => 'placid-slider-admin' ) );?>
<form style="margin-right:10px;font-size:14px;width:100%;" action="" method="post">
<a href="<?php echo $url; ?>" title="<?php _e('Go to Sliders page where you can re-order the slide posts, delete the slides from the slider etc.','placid-slider'); ?>" class="svilla_button svilla_gray_button"><?php _e('Go to Sliders Admin','placid-slider'); ?></a>
<input type="submit" class="svilla_button" value="Create New Settings Set" name="create_set"  onclick="return confirmSettingsCreate()" /> <br />
<input type="submit" value="Export" name="export" title="<?php _e('Export this Settings Set to a file','placid-slider'); ?>" class="svilla_button" />
<a href="#import" title="<?php _e('Go to Import Settings Form','placid-slider'); ?>" class="svilla_button">Import</a>
<div class="svilla_cl"></div>
</form>
<div class="svilla_cl"></div>

<div class="postbox" style="margin:10px 0;"> 
			  <h3 class="hndle"><span></span><?php _e('Available Settings Sets','placid-slider'); ?></h3> 
			  <div class="inside">
<?php 
for($i=1;$i<=$scounter;$i++){
   if ($i==1){
      echo '<h4><a href="'.placid_sslider_admin_url( array( 'page' => 'placid-slider-settings' ) ).'" title="(Settings Set ID '.$i.')">Default Settings (ID '.$i.')</a></h4>';
   }
   else {
      if($settings_set=get_option('placid_slider_options'.$i)){
		echo '<h4><a href="'.placid_sslider_admin_url( array( 'page' => 'placid-slider-settings' ) ).'&scounter='.$i.'" title="(Settings Set ID '.$i.')">'. (isset($settings_set['setname'])? ($settings_set['setname']) : '' ) .' (ID '.$i.')</a></h4>';
	  }
   }
}
?>
</div></div>

<?php if ($gplacid_slider['support'] == "1"){ ?>
	<div class="postbox"> 
		<div style="background:#eee;line-height:200%"><a style="text-decoration:none;font-weight:bold;font-size:100%;color:#990000" href="http://guides.slidervilla.com/placid-slider/" title="Click here to read how to use the plugin and frequently asked questions about the plugin" target="_blank"> ==> Usage Guide and General FAQs</a></div>
	</div>
          
	<div class="postbox"> 
	  <h3 class="hndle"><span><?php _e('About this Plugin:','placid-slider'); ?></span></h3> 
	  <div class="inside">
		<ul>
		<li><a href="http://slidervilla.com/placid/" title="<?php _e('Placid Slider Homepage','placid-slider'); ?>
" ><?php _e('Plugin Homepage','placid-slider'); ?></a></li>
		<li><a href="http://support.slidervilla.com/" title="<?php _e('Support Forum','placid-slider'); ?>
" ><?php _e('Support Forum','placid-slider'); ?></a></li>
		<li><a href="http://guides.slidervilla.com/placid-slider/" title="<?php _e('Usage Guide','placid-slider'); ?>
" ><?php _e('Usage Guide','placid-slider'); ?></a></li>
		<li><strong>Current Version: <?php echo PLACID_SLIDER_VER;?></strong></li>
		</ul> 
	  </div> 
	</div> 
<?php } ?>
                 
</div> <!--end of poststuff --> 

<div style="clear:left;"></div>
<div style="clear:right;"></div>

</div> <!--end of float wrap -->
<?php	
}
//WPML intigration
function placid_update_options_function($option, $oldval, $newval){
	if( function_exists('icl_plugin_action_links') && function_exists('icl_register_string') ) {
		global $wpdb;
		$matches = $wpdb->get_results( "SELECT option_name, option_value FROM {$wpdb->options} WHERE option_name LIKE 'placid_slider_options%'" );
		$opnamearr = array();
		foreach( $matches as $match ) {
			$opnamearr[] = $match->option_name;
		}
		if( in_array($option,$opnamearr) ) { //check if options are of placid slider
			if( isset($newval["woo_sale_text"]) && !empty($newval["woo_sale_text"]) ) {
				icl_register_string( $context = 'placid-slider-settings', $name = '['.$option.']woo_sale_text', $value = $newval["woo_sale_text"] );
			}
			if( isset($newval["title_text"]) && !empty($newval["title_text"]) ) {
				icl_register_string( $context = 'placid-slider-settings', $name = '['.$option.']title_text', $value = $newval["title_text"] );
			}
		}
	}
}
add_action("update_option", "placid_update_options_function", 10, 3);
?>
