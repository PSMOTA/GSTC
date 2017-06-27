<?php
function placid_eb_process_requests() {
	// Image Slider save slides
	if ( isset($_POST['addSave']) and ($_POST['addSave']=='Save') ) { 
		$images=(isset($_POST['imgID']))?$_POST['imgID']:array();
		$slider_id=isset($_POST['current_slider_id'])?$_POST['current_slider_id']:1;
		$slider_id=(int) $slider_id;
		$ids=array_reverse($images);
		print_r($ids);
		global $wpdb,$table_prefix;
		foreach($ids as $id){
			$title=(isset($_POST['title'][$id]))?$_POST['title'][$id]:'';
			$desc=(isset($_POST['desc'][$id]))?$_POST['desc'][$id]:'';
			$link=(isset($_POST['link'][$id]))?$_POST['link'][$id]:'';
			$nolink=(isset($_POST['nolink'][$id]))?$_POST['nolink'][$id]:'';
			$attachment = array(
				'ID'           => $id,
				'post_title'   => $title,
				'post_content' => $desc
			);
			wp_update_post( $attachment );
			update_post_meta($id, '_placid_slide_redirect_url', $link);
			update_post_meta($id, '_placid_sslider_nolink', $nolink);
			if(!placid_slider($id,$slider_id)) {
					$dt = date('Y-m-d H:i:s');
					$sql = "INSERT INTO ".$table_prefix.PLACID_SLIDER_TABLE." (post_id, date, slider_id) VALUES ('$id', '$dt', '$slider_id')";
					$wpdb->query($sql);
			}
		}
	}
	// Attach Setting 
	if( (isset($_POST['attach_setting']) && $_POST['attach_setting'] == 'Update') || (isset($_POST['placid_setting_id']))) { 
		$current_url = admin_url('admin.php?page=placid-slider-easy-builder');
		global $wpdb,$table_prefix;
		$slider_meta = $table_prefix.PLACID_SLIDER_META;
		
		if(isset($_GET['id']) ) { 
			$where = "slider_id =".$_GET['id'];	
			$sql = "SELECT * FROM $slider_meta WHERE $where";
			$result = $wpdb->get_row($sql);
			$slidertype = $result->type;
			$sliderset = $result->setid;
			$param_array = unserialize($result->param);
		}

		$scounter = isset($sliderset)?$sliderset:'';
		if( isset($_POST['placid_setting_id']) ) 
			$setid = $_POST['placid_setting_id'];
		else $setid = $scounter;
		
		if(isset($_GET['id']) && $_GET['id'] != '') {
			$where = "slider_id =".$_GET['id'];	
		}
		if(isset($_POST['attach_setting']))
			$attachset = $_POST['attach_setting'];
		else
			$attachset ="";
		
		if($scounter != $setid && $attachset != 'Update' ) {
			$sql = "UPDATE ".$slider_meta." SET setid='".$setid."' WHERE $where";
			$wpdb->query($sql);
		} else {
			$slider_type = $_POST['slider_type'];
			$parm = $param = '';
			$param_array = array();	
			if($_POST['offset'] != '0' && $_POST['offset'] != '') {
					$param_array['offset']=$_POST['offset'];
			}
			if( $slider_type == '1') {
				if($_POST['catg_slug'] != '0' && $_POST['catg_slug'] != '') {
					$param_array['catg_slug']=$_POST['catg_slug'];
				}
			}
			if($slider_type == '3') {
				if(isset($_POST['woo_slider_type']) && $_POST['woo_slider_type'] != '') {
					$param_array['woo_slider_type'] = $_POST['woo_slider_type'];
				}
				if(isset($_POST['product_id']) && $_POST['product_id'] != '') {
					$param_array['product_id']=$_POST['product_id'];
				}
				if(isset($_POST['woo-catg']) && $_POST['woo-catg'] != '') {
					$param_array['woo-catg']=implode(",",$_POST['woo-catg']);
				}
			}
			if($slider_type == '4') {
				if($_POST['ecom-catg'] != '0' && $_POST['ecom-catg'] != '') {
					$param_array['ecom-catg']=$_POST['ecom-catg'];
				}
				if(isset($_POST['ecom_slider_type']) && $_POST['ecom_slider_type'] != '') {
					$param_array['ecom_slider_type']=$_POST['ecom_slider_type'];
				}
			}
			if($slider_type == '5') {
				if(isset($_POST['eventm_slider_scope']) && $_POST['eventm_slider_scope'] != '') {
					$param_array['eventm_slider_scope'] = $_POST['eventm_slider_scope'];
				}
				if($_POST['eman-catg'] != '0' && $_POST['eman-catg'] != '') {
					$param_array['eman-catg']=implode(",",$_POST['eman-catg']);
				}
				if(isset($_POST['eman-tags']) && $_POST['eman-tags'] != '') {
					$param_array['eman-tags']=implode(",",$_POST['eman-tags']);
				}
			}
			if($slider_type == '6') {
				if(isset($_POST['eventcal_slider_type']) && $_POST['eventcal_slider_type'] != '') {
					$param_array['eventcal_slider_type'] = $_POST['eventcal_slider_type'];
				}
				if($_POST['ecal-catg'] != '0' && $_POST['ecal-catg'] != '') {
					$param_array['ecal-catg']=implode(",",$_POST['ecal-catg']);
				}
				if(isset($_POST['ecal-tags']) && $_POST['ecal-tags'] != '') {
					$param_array['ecal-tags']=implode(",",$_POST['ecal-tags']);
				}
			}	
			if($slider_type == '7') {
				if( isset($_POST['taxo_posttype']) && $_POST['taxo_posttype'] != '') {
					$param_array['post_type']=$_POST['taxo_posttype'];
				}
				if( isset($_POST['taxonomy_name']) && $_POST['taxonomy_name'] != '') {
					$param_array['taxonomy_name'] = $_POST['taxonomy_name'];
				}
				if( isset($_POST['taxonomy_term']) && $_POST['taxonomy_term'] != '') {
					$param_array['taxonomy_term']=implode(",",$_POST['taxonomy_term']);
				}
				if( isset($_POST['taxonomy_show']) && $_POST['taxonomy_show'] != '') {
					$param_array['taxonomy_show']=$_POST['taxonomy_show'];
				}
				if( isset($_POST['taxonomy_operator']) && $_POST['taxonomy_operator'] != '') {
					$param_array['taxonomy_operator']=$_POST['taxonomy_operator']; 
				}
				if( isset($_POST['taxonomy_author']) && $_POST['taxonomy_author'] != '') {
					$param_array['taxonomy_author']=implode(",",$_POST['taxonomy_author']);
				}
			}
			if($slider_type == '8') {
				if( isset($_POST['rssfeedid']) && $_POST['rssfeedid'] != '') {
					$param_array['feed_id']=$_POST['rssfeedid'];
				}
				if( isset($_POST['rssfeedurl']) && $_POST['rssfeedurl'] != '') {
					$param_array['feed_url']=$_POST['rssfeedurl'];
				}
				if( isset($_POST['rssfeedimg']) && $_POST['rssfeedimg'] != '') {
					$param_array['feed_img']=$_POST['rssfeedimg'];
				}	
				if( isset($_POST['feed']) && $_POST['feed'] != '') {
					$param_array['feed']=$_POST['feed'];
				}
				if( isset($_POST['rssfeed-order']) && $_POST['rssfeed-order'] != '') {
					$param_array['feed_order']=$_POST['rssfeed-order'];
				}
				if( isset($_POST['rss-content']) && $_POST['rss-content'] != '') {
					$param_array['feed_content']=$_POST['rss-content'];
				}
				if( isset($_POST['rssfeed-media']) && $_POST['rssfeed-media'] != '') {
					$param_array['feed_media']=$_POST['rssfeed-media'];
				}
				if( isset($_POST['rssfeed-src']) && $_POST['rssfeed-src'] != '') {
					$param_array['feed_src']=$_POST['rssfeed-src'];
				}	
				if( isset($_POST['rss-size']) && $_POST['rss-size'] != '') {
					$param_array['feed_size']=$_POST['rss-size'];
				}
				if( isset($_POST['rss-img-class']) && $_POST['rss-img-class'] != '') {
					$param_array['feed_imgclass']=$_POST['rss-img-class'];
				}	
			}
			if($slider_type == '9') {
				if(isset($_POST['postattch-id']) && $_POST['postattch-id'] != '') {
					$param_array['postattch-id']=$_POST['postattch-id'];
				}
			}	
			if($slider_type == '10') {
				if(isset($_POST['nextgen-id']) && $_POST['nextgen-id'] != '') {
					$param_array['nextgen-id']=$_POST['nextgen-id'];
				}
				if(isset($_POST['nextgen-anchor']) && $_POST['nextgen-anchor'] != '') {
					$param_array['nextgen-anchor']=$_POST['nextgen-anchor'];
				}		
			}
			if($slider_type == '11') {
				if(isset($_POST['yt-playlist-id']) && $_POST['yt-playlist-id'] != '') {
					$param_array['yt-playlist-id']=$_POST['yt-playlist-id'];
				}
			}
			if($slider_type == '12') {
				if(isset($_POST['yt-search-term']) && $_POST['yt-search-term'] != '') {
					$param_array['yt-search-term']=$_POST['yt-search-term'];
				}
			}
			if($slider_type == '13') {
				if(isset($_POST['vimeo-type']) && $_POST['vimeo-type'] != '') {
					$param_array['vimeo-type']=$_POST['vimeo-type'];
				}
				if(isset($_POST['vimeo-val']) && $_POST['vimeo-val'] != '') {
					$param_array['vimeo-val']=$_POST['vimeo-val'];
				}
			}
			if($slider_type == '14') {
				if(isset($_POST['fb-pg-url']) && $_POST['fb-pg-url'] != '') {
					$param_array['fb-pg-url']=$_POST['fb-pg-url'];
				}
				if(isset($_POST['fb-album']) && $_POST['fb-album'] != '') {
					$param_array['fb-album']=$_POST['fb-album'];
				}
			}
			if($slider_type == '15') {
				if(isset($_POST['user-name']) && $_POST['user-name'] != '') {
					$param_array['user-name']=$_POST['user-name'];
				}
			}
			if($slider_type == '16') {
				if(isset($_POST['flickr-type']) && $_POST['flickr-type'] != '') {
					$param_array['flickr-type']=$_POST['flickr-type'];
				}
				if(isset($_POST['fl-id']) && $_POST['fl-id'] != '') {
					$param_array['fl-id']=$_POST['fl-id'];
				}
			}
			if($slider_type == '18') {
				if(isset($_POST['feature']) && $_POST['feature'] != '') {
					$param_array['feature']=$_POST['feature'];
				}
				if(isset($_POST['pxuser']) && $_POST['pxuser'] != '') {
					$param_array['pxuser']=$_POST['pxuser'];
				}
			}
			$sparam = serialize($param_array);
			$param = $sparam;
			$parm = ",param = '$param'";
			$slider_name = $_POST["new_slider_name"];
			$sql = "UPDATE ".$slider_meta." SET slider_name='".$slider_name."' $parm WHERE $where";
			$wpdb->query($sql);
		}
		/* Redirect */
		$id= $_GET['id'];
		$urlarg['id'] = $id;
		$current_url = add_query_arg( $urlarg ,$current_url);
		wp_redirect( $current_url );	
	}
}
add_action('load-admin_page_placid-slider-easy-builder','placid_eb_process_requests');  

function placid_slider_easybuilder_page() {
	global $wpdb,$table_prefix;
	$gplacid_slider = get_option('placid_slider_global_options');
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$scounter=get_option('placid_slider_scounter');
	
	$slider_meta = $table_prefix.PLACID_SLIDER_META;
	if(isset($_GET['id']) ) { 
		$where = "slider_id =".$_GET['id'];	
		$sql = "SELECT * FROM $slider_meta WHERE $where";
		$result = $wpdb->get_row($sql);
		if(count($result) > 0) {
			$slidertype = $result->type;
			$sliderset = $result->setid;
			$param_array = unserialize($result->param);
		}
	}
	if(isset($sliderset) && $sliderset != '1' ) $cntr = $sliderset; else $cntr = '';
	$group='placid-slider-group'.$cntr;
	$placid_slider_options='placid_slider_options'.$cntr;
	$directory = PLACID_SLIDER_CSS_DIR;
	if ($handle = opendir($directory)) {
		while (false !== ($file = readdir($handle))) { 
		 if($file != '.' and $file != '..' and file_exists(dirname( dirname(__FILE__) ).'/css/skins/'.$file.'/settings.php') ) { 
		 //if ($file=='sample') $file='default';
		 require_once ( dirname( dirname(__FILE__) ) . '/css/skins/'.$file.'/settings.php'); 
		} }
		closedir($handle);
	}
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	/*--------------------------------------------------------------------------
	* Save Placid Slider Settings 
	-------------------------------------------------------------------------- */
	if(isset($_POST['save_eb_settings']) && !empty($_POST['save_eb_settings']) ) {
		if($_POST['option_page'] == $group && strpos($_POST['_wp_http_referer'],'placid-slider-easy-builder') !== false && $_POST['action'] == 'update' ) {
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
			set_transient( 'placid_eb_undo_set', $placid_slider_curr);
			/* END Undo previous Settings */
			$placid_slider_curr=$new_settings_value;
		}
	}
	/* END - Save Placid Slider Settings */
	
	if(isset($_POST['undo_settings']) && get_transient( 'placid_eb_undo_set' ) != false ) {
		$options='placid_slider_options'.$cntr;
		$new_settings_value = get_transient( 'placid_eb_undo_set' );
		update_option($options,$new_settings_value);
		/* Undo - Save previous Settings */
		delete_transient( 'placid_eb_undo_set' );
		/* END Undo previous Settings */
		$placid_slider_curr=$new_settings_value;
	}
	// Update the Slides
	if (isset ($_POST['update_slides'])) {
		// Reorder Slides
		if (isset ($_POST['reorder_posts_slider'])) {
			$i=1;
			global $wpdb, $table_prefix;
			$table_name = $table_prefix.PLACID_SLIDER_TABLE;
			$slider_id=$_POST['current_slider_id'];
			foreach ($_POST['order'] as $slide_order) {
				$slide_order = intval($slide_order);
				$sql = 'UPDATE '.$table_name.' SET slide_order='.$i.' WHERE post_id='.$slide_order.' and slider_id='.$slider_id;
				$wpdb->query($sql);
				$i++;
			}
		}
		$slider_id=$_POST['current_slider_id'];
		$ids=$_POST['order'];
		global $wpdb,$table_prefix;
		foreach($ids as $id) {
			$post_type = get_post_type( $id );
			if( $post_type == 'slidervilla') {
				$title=(isset($_POST["title$id"]))?$_POST["title$id"]:'';
				$desc=(isset($_POST["desc$id"]))?$_POST["desc$id"]:'';
				$link=(isset($_POST["link$id"]))?$_POST["link$id"]:'';
				$nolink=(isset($_POST["nolink$id"]))?$_POST["nolink$id"]:'';
				$attachment = array(
					'ID'           => $id,
					'post_title'   => $title,
					'post_content' => $desc
				);
			wp_update_post( $attachment );
			update_post_meta($id, '_placid_slide_redirect_url', $link);
			update_post_meta($id, '_placid_sslider_nolink', $nolink);
			}
		}
	}
	// Remove Selected Slide
	if(isset($_POST['remove_selected']) && $_POST['remove_selected'] == 'Remove Selected' ) {
		if ( isset($_POST['slider_posts'] ) ) { 
			global $wpdb, $table_prefix;
			$table_name = $table_prefix.PLACID_SLIDER_TABLE;
			$current_slider = $_POST['current_slider_id'];
			$slider_posts = explode(",",$_POST['slider_posts']);
				foreach ( $slider_posts as $post_id ) {
				   $sql = "DELETE FROM $table_name WHERE post_id = '$post_id' AND slider_id = '$current_slider' LIMIT 1"; 
				   $wpdb->query($sql);
				}
			}
	}
	// Remove All Slides
	if (isset ($_POST['remove_all'])) {
	   if ($_POST['remove_all'] == __('Remove All at Once','placid-slider')) {
		   global $wpdb, $table_prefix;
		   $table_name = $table_prefix.PLACID_SLIDER_TABLE;
		   $current_slider = $_POST['current_slider_id'];
		   if(is_placid_slider_on_slider_table($current_slider)) {
			   $sql = "DELETE FROM $table_name WHERE slider_id = '$current_slider';";
			   $wpdb->query($sql);
		   }
	 }
	   	
   }
// Add Multiple slides to slider
	if (isset($_POST['add_to_slider']) && $_POST['add_to_slider'] == __('Add To Slider','placid-slider')) {
		global $wpdb, $table_prefix;
		$table_name = $table_prefix.PLACID_SLIDER_TABLE;
		$slider_id = $_POST['current_slider_id'];
		$dt = date('Y-m-d H:i:s');
		$count = count($_POST['post_id[]']);
		$values = '';
		for($i = 0; $i < $count; $i++ ) {
			$id = $_POST['post_id[]'][$i];
			if(!placid_slider($id,$slider_id)) {
				if($i == $count-1)
					$values .= "('$id', '$dt', '$slider_id')";
				else
					$values .= "('$id', '$dt', '$slider_id'),";
			}
		}
		$sql = "INSERT INTO $table_name (post_id, date, slider_id) VALUES $values";
		$wpdb->query($sql);
	}		
/* END - Add Slides */

if(isset($_GET['act']) and $_GET['act']=='create') { 
	$cus_style='style="display:none;"';
}
else {
	$cus_style='';
}   ?>

<a class="placid-sliders-lnk" href="<?php echo placid_sslider_admin_url( array( 'page' => 'manage-placid-slider' ) );?>"><i class="fa fa-th-list" title="Go to Manage Slider"></i><span> <?php _e('Go to Sliders Panel','placid-slider'); ?></span></a>
<div class="placid_accordion_outer" <?php echo $cus_style; ?> >

<div style="margin: 10px 0;">
	<form name="change_setting" id="change_setting" method="post">
	<label for="placid_setting_id" style="font-weight: bold;margin-left: 20px;"><?php _e('Setting Set','placid-slider'); ?></label>
	<select name="placid_setting_id" id="placid_setting_id">
	<?php
	$scounter=get_option('placid_slider_scounter');	
	$urlset = isset($sliderset)?$sliderset:'1';
	for($i=1;$i<=$scounter;$i++){
		if($i == $urlset)
			$selected = 'selected';
		else $selected = '';
		if ($i==1){
		  echo '<option value="'.$i.'" '.$selected.'>'.__('Default Settings Set','placid-slider').'</option>';
		}
		else {
		  if($settings_set=get_option('placid_slider_options'.$i)){
			echo '<option value="'.$i.'" '.$selected.'>'.$settings_set['setname'].' (ID '.$i.')</option>';
		  }
		}
	}
	?>
	</select>
	</form>
	<a href="" class="rename_set" style="margin-left: 50%;font-size: 11px;" ><?php _e('Rename Setting Set','placid-slider'); ?></a>
</div>

<form name="easybuilder_settings" method="post" style="margin-bottom: 120px;" class="placid-settings-form">
	<?php settings_fields($group); ?>
	<div class="rename_set_wrap" style="display:none;margin-left: 20px;margin-bottom: 10px;">
		<input type="text" name="<?php echo $placid_slider_options;?>[setname]" id="placid_slider_setname" value="<?php echo $placid_slider_curr['setname'];?>" /> 
		<input type="submit" name="Save" value="<?php _e('Rename','placid-slider'); ?>" class="button-primary" />
	</div>
<div class="ps-right-accordion" id="basic"> <?php _e('Basic Settings','placid-slider'); ?> <span></span></div>
	<div class="container">
		<div class="content placid-eb-basic"></div>
	</div>
	<div class="ps-right-accordion" id="miscellaneous"><?php _e('Miscellaneous','placid-slider'); ?><span></span></div>
	<div class="container eb-miscellaneous">
		<div class="content placid-eb-miscellaneous"></div>
	</div>
	<div class="ps-right-accordion" id="image"><?php _e('Image Controls','placid-slider'); ?><span></span></div>
	<div class="container eb-imgcontrols">
		<div class="content placid-eb-image"></div>
	</div>
	<div class="ps-right-accordion" id="text"><?php _e('Text Controls','placid-slider'); ?><span></span></div>
	<div class="container eb-textcontrols">
		<div class="content placid-eb-text"></div>
	</div>
	<div class="ps-right-accordion" id="nav"><?php _e('Navigation Panel','placid-slider'); ?><span></span></div>
		<div class="container eb-navpanel">
		<div class="content placid-eb-nav"></div>
	</div>
	<?php if(isset($slidertype) && ($slidertype == '5' || $slidertype == '6') ) { ?>
	<div class="ps-right-accordion" id="events"><?php _e('Events','placid-slider'); ?><span></span></div>
	<div class="container eb-eventspanel">
		<div class="content placid-eb-events"></div>
	</div>
	<?php } if(isset($slidertype) && ($slidertype == '3' || $slidertype == '4') ) { ?>
	<div class="ps-right-accordion" id="eshop"><?php _e('E-Shop','placid-slider'); ?><span></span></div>
	<div class="container eb-eventshop">
		<div class="content placid-eb-eshop"></div>
	</div>
	<?php } ?>
<input type="hidden" name="placidskin" id="placidskin" value="<?php echo $placid_slider_curr['stylesheet']; ?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[active_tab][active_tabidx]" id="placid_activetab" value="<?php echo isset($placid_slider_curr['active_tab']['active_tabidx'])? $placid_slider_curr['active_tab']['active_tabidx']:'0'; ?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[active_tab][closed_sections]" id="placid_closedsections" value="<?php echo isset($placid_slider_curr['active_tab']['closed_sections'])?$placid_slider_curr['active_tab']['closed_sections']:''; ?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[active_accordion]" id="placid_active_accordion" value="<?php echo $placid_slider_curr['active_accordion']; ?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[new]" id="placid_new_set" value="0" />
<input type="hidden" name="placid-hiddencntr" class="placid-hiddencntr" value="<?php echo $cntr; ?>" />

<input type="hidden" name="hidden_urlpage" class="placid_urlpage" value="<?php echo $_GET['page'];?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[popup]" id="placidpopup" value="<?php echo $placid_slider_curr['popup']; ?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[gencss]" id="placid_slider_gencsscode" value="<?php echo $placid_slider_curr['gencss']; ?>" />
<input type="hidden" name="oldnew" id="oldnew" value="<?php echo $placid_slider_curr['new']; ?>" />
<input type="hidden" name="hidden_preview" id="hidden_preview" value="<?php echo $placid_slider_curr['preview']; ?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[catg_slug]" id="placid_slider_catslug" value="<?php echo $placid_slider_curr['catg_slug']; ?>" />
<input type="hidden" id="placid_slider_id" name="<?php echo $placid_slider_options;?>[slider_id]" value="<?php echo $placid_slider_curr['slider_id']; ?>" />
<input name="<?php echo $placid_slider_options;?>[disable_preview]" type="hidden" id="placid_slider_disable_preview" value="<?php echo $placid_slider_curr['disable_preview']; ?>" />
<input type="hidden" name="<?php echo $placid_slider_options;?>[preview]" id="" value="<?php echo $placid_slider_curr['preview'];?>" />
<input type="hidden" name="placid-eb-settings-nonce" id="placid-eb-settings-nonce" value="<?php echo wp_create_nonce( 'placid-eb-settings-nonce' ); ?>" />
<input type="hidden" name="placid-preview-nonce" id="placid-preview-nonce" value="<?php echo wp_create_nonce( 'placid-preview-nonce' ); ?>" />
<input type="hidden" name="placid-slider-nonce" id="placid-slider-nonce" value="<?php echo wp_create_nonce( 'placid-slider-nonce' ); ?>" />
<input type="hidden" name="placid-google-nonce" id="placid-google-nonce" value="<?php echo wp_create_nonce( 'placid-google-nonce' ); ?>" />
	</form>
</div>

<!-- ******************************************************** RIGHT PANEL ************************************************* -->
<?php
if(isset($_GET['act']) and $_GET['act']=='create') { 
	$cus_style='style="margin-left: 120px;"';
}
else {
	$cus_style='';
} 
?>

<div class="ps_center_panel" <?php echo $cus_style ?> >
	<div class="easy-builder-title" style="width: 760px;float: left;"><i class="fa fa-picture-o eb-icon"></i> 
	<?php _e('Easy Builder','placid-slider');?>
	
	</div>
	<div class="ps_preview">
		<div class="eb-preview-title"><?php _e('Live Preview','placid-slider');?></div>
	<?php
	$offset = isset($param_array['offset'])?$param_array['offset']:'0';
	$scounter = isset($result->setid)?$result->setid :'';
	if($scounter == 1 ) $scounter = '';
	get_placid_slider($slider_id=$_GET['id'],$set=$scounter,$offset=$offset);
	?>
	</div>
	<input type="hidden" name="placid-loader" value="<?php echo admin_url('images/loading.gif');?>" />
	<input type="hidden" name="placid-sliderid" value="<?php echo isset( $_GET['id'] )? $_GET['id']:''?>" />
	<div style="clear:left;"></div>
<?php
	if(isset($_GET['id']) ) { 
	$sldr_id=isset($result->slider_id)?$result->slider_id:'1';
	?>
	<div class="ps-embed-option">
		<div class="tbl-embed">
			<div class="head"><?php _e('Shortcode','placid-slider');?></div>
			<div class="tbl-content"><?php echo "[placidslider id='".$result->slider_id."']"; ?></div>
		</div>
		<div class="tbl-embed border">
			<div class="head"><?php _e('Template Tag','placid-slider');?></div>
			<div class="tbl-content">
				<?php echo '&lt;?php if ( function_exists( "get_placid_slider" ) ) { get_placid_slider($slider_id="'.$result->slider_id.'"); } ?&gt;'; ?>
			</div>
		</div>
		<div style="clear:left;"></div>
	</div>		
	<?php }
// 3.0 woo categories
		if( is_plugin_active('woocommerce/woocommerce.php') ) {
			$wooterms = get_terms('product_cat');
			$catgs = isset($param_array['woo-catg'])?$param_array['woo-catg']:'';
			$catgs_a = explode(",",$catgs);
			if($catgs == '' ) $selc = 'selected'; else $selc = '';
			$woocat_html='<option value="" '.$selc.' >All Category</option>';
			foreach( $wooterms as $woocategory) {
				if($catgs != '' && in_array($woocategory->slug, $catgs_a)){$selected = 'selected';} else{$selected='';}
				$woocat_html =$woocat_html.'<option value="'.$woocategory->slug.'" '.$selected.'>'. $woocategory->name .'</option>';
			}
		}
		// 3.0 eCom categories
		if( is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) {
			$ecomterms = get_terms('wpsc_product_category');
			$ecomcat_html='<option value="" selected >Select the Category</option>';
			foreach( $ecomterms as $ecomcategory) {
				if( isset($param_array['ecom-catg']) && $ecomcategory->slug==$param_array['ecom-catg']){$selected = 'selected';} else{$selected='';}
				$ecomcat_html =$ecomcat_html.'<option value="'.$ecomcategory->slug.'" '.$selected.'>'.$ecomcategory->name.'</option>';
			}
		}
// 3.0 event categories
		if( is_plugin_active('events-manager/events-manager.php') ) {
			$eventterms = get_terms('event-categories');
			$catgs = isset($param_array['eman-catg'])?$param_array['eman-catg']:'';
			$catgs_a = explode(",",$catgs);
			if($catgs == '' ) $selc = 'selected'; else $selc = '';
			$eventcat_html='<option value="" '.$selc.' >All Categories</option>';
			foreach( $eventterms as $eventcategory) {
				if($catgs != '' && in_array($eventcategory->slug, $catgs_a)){$selected = 'selected';} else {$selected='';}
				$eventcat_html =$eventcat_html.'<option value="'.$eventcategory->slug.'" '.$selected.'>'.$eventcategory->name.'</option>';
			}
			$evtags = get_terms("event-tags");
			$tags = isset($param_array['eman-tags'])?$param_array['eman-tags']:'';
			$tags_a = explode(",",$tags);
			if($tags == '') $sel = 'selected'; else $sel = '';
			$evtag_html='<option value="" '.$sel.' >All Tags</option>';
			foreach( $evtags as $tags) {
				if($tags != '' && in_array($tags->slug, $tags_a)){$selected = 'selected';} else {$selected='';}
				$evtag_html = $evtag_html.'<option value="'.$tags->slug.'" '.$selected.'>'.$tags->name.'</option>';
			}  
		}

// 3.0 event calendar
		if( is_plugin_active('the-events-calendar/the-events-calendar.php') ) { 
			$eventcalterms = get_terms('tribe_events_cat');
			$catgs = isset($param_array['ecal-catg'])?$param_array['ecal-catg']:'';
			$catgs_a = explode(",",$catgs);
			if($catgs == '') $csel = 'selected'; else $csel = '';
			$eventcal_html='<option value="" '.$csel.' >All Category</option>';
			foreach( $eventcalterms as $eventcalcat) {
				if($catgs != '' && in_array($eventcalcat->slug, $catgs_a)){$selected = 'selected';} else {$selected='';}
				$eventcal_html =$eventcal_html.'<option value="'.$eventcalcat->slug.'" '.$selected.'>'.$eventcalcat->name.'</option>';
			}
			$evcaltags = get_terms("post_tag");
			$tags = isset($param_array['ecal-tags'])?$param_array['ecal-tags']:'';
			$tags_a = explode(",",$tags);
			if($tags == '') $sel = 'selected'; else $sel = '';
			$evcaltag_html='<option value="" '.$sel.' >All Tags</option>';
			foreach( $evcaltags as $tags) {
				if($tags != '' && in_array($tags->slug, $tags_a)){ $selected = 'selected';} else {$selected='';}
				$evcaltag_html = $evcaltag_html.'<option value="'.$tags->slug.'" '.$selected.'>'.$tags->name.'</option>';
			}
		}
//category slug Select Option
		$categories = get_categories();
		$scat_html='<option value="" selected >Select the Category</option>';
		foreach ($categories as $category) { 
			if( isset($param_array['catg_slug']) && $category->slug==$param_array['catg_slug']){$selected = 'selected';} else{$selected='';}
			 $scat_html =$scat_html.'<option value="'.$category->slug.'" '.$selected.'>'.$category->name.'</option>';
		}

if( (isset($_GET['id']) && $_GET['id'] != '') ) { ?>
	<div class="ps-params">
	<form name="" method="post" class="ps-validate" >
	<div class="ps_preview_options" id="Placid-preview">
		<div class="ps-col-row">
			<a href="#TB_inline?width=800&height=550&inlineId=popup-all-types" title="All Slider Types" class="thickbox show-all-types"><?php _e('Change Slider Type','placid-slider'); ?></a>
		</div>
		<?php if( isset($slidertype) && $slidertype == '0' ) { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="0" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Custom Slider','placid-slider'); ?></span>
			</div>	
			<input type="hidden" name="slider_id" value="<?php echo $_GET['id'];?>" >
		<?php	$type=0; 
		}
		else if( isset($slidertype) && $slidertype == '2') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="2" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Recent Slider','placid-slider'); ?></span>
			</div>
		<?php $type=2; 
		} 
		else if( isset($slidertype) && $slidertype == '1') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="1" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Category Slider','placid-slider'); ?></span>
			</div>
		<?php	$type=1; 
		}
		else if( isset($slidertype) && $slidertype == '3') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="3" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Woo Commerce Slider','placid-slider'); ?></span>
			</div>
		<?php $type=3; 
		} 
		else if( isset($slidertype) && $slidertype == '4') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="4" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Ecommerce Slider','placid-slider'); ?></span>
			</div>
		<?php $type=4; 
		} 
		else if( isset($slidertype) && $slidertype == '5') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="5" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Event Manger Slider','placid-slider'); ?></span>
			</div>
		<?php $type=5; 
		}
		else if( isset($slidertype) && $slidertype == '6') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="6" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Event Calendar Slider','placid-slider'); ?></span>
			</div>
		<?php $type=6; 
		} 
		else if( isset($slidertype) && $slidertype == '7') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="7" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Taxonomy Slider','placid-slider'); ?></span>
			</div>
		<?php $type=7; 
		} 
		else if( isset($slidertype) && $slidertype == '8') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="8" checked <i class="fa fa-rss-square"></i><span class="ps-icon-title"><?php _e('Rss Feed Slider','placid-slider'); ?></span>
			</div>
		<?php $type=8; 
		}
		else if( isset($slidertype) && $slidertype == '9') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="9" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Post Attachment Slider','placid-slider'); ?></span>
			</div>
		<?php $type=9; 
		} 
		else if( isset($slidertype) && $slidertype == '10') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="10" checked ><i class="fa fa-picture-o"></i><span class="ps-icon-title"><?php _e('NextGen Gallery Slider','placid-slider'); ?></span>
			</div>
		<?php $type=10; 
		} else if( isset($slidertype) && $slidertype == '11') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="11" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Youtube Playlist Slider','placid-slider'); ?></span>
			</div>
		<?php $type=11; 
		} else if( isset($slidertype) && $slidertype == '12') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="12" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('YouTube Search Slider','placid-slider'); ?></span>
			</div>
		<?php $type=12; 
		} else if( isset($slidertype) && $slidertype == '13') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="13" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Vimeo Slider','placid-slider'); ?></span>
			</div>
		<?php $type=13; 
		} else if( isset($slidertype) && $slidertype == '14') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="14" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Facebook Album Slider','placid-slider'); ?></span>
			</div>
		<?php $type=14; 
		} else if( isset($slidertype) && $slidertype == '15') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="15" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Instagram Slider','placid-slider'); ?></span>
			</div>
		<?php $type=15; 
		} else if( isset($slidertype) && $slidertype == '16') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="16" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Flickr Slider','placid-slider'); ?></span>
			</div>
		<?php $type=16; 
		} else if( isset($slidertype) && $slidertype == '17') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="17" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Image Slider','placid-slider'); ?></span>
			</div>
		<?php $type=17; 
		} else if( isset($slidertype) && $slidertype == '18') { ?>
			<div class="ps-col-row">
				<input type="radio" name="slider-type" value="18" checked ><img src="<?php echo placid_slider_plugin_url( 'images/500px.png' ); ?>" width="13" height="14" /><span class="ps-icon-title"><?php _e('500px Slider','placid-slider'); ?></span>
			</div>
		<?php $type=18; 
		}
		?>
		<input type="hidden" name="slider_type" value="<?php echo $type;?>" > 
		<table class="form-table">
		<?php $slider_name = isset($result->slider_name)?$result->slider_name:'';
		?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Slider Name','placid-slider'); ?></th>
			<td style="position: relative;">
				<div class="edit-slider-name" ><input type="text" name="new_slider_name" id="new_slider_name" value="<?php echo $slider_name;?>" readonly /><i class="fa fa-edit" ></i></div></td>
		</tr>
		<?php


	if( isset($slidertype) && ( $slidertype =='1') ) { ?>
		<tr class="ps-row">
			<th scope="row"><?php _e('Category','placid-slider'); ?> </th>
			<td><select name="catg_slug" id="placid_slider_catslug" class="placid_catslug"><?php echo $scat_html;?></select></td>
		</tr>
	<?php }
	elseif( isset($slidertype) && ( $slidertype =='3') ) {  
		$pstyle = "display:none;";
		if(isset($param_array['woo_slider_type'])) {
			if($param_array['woo_slider_type'] == '2') { $woor = 'selected'; } else $woor = '';
			if($param_array['woo_slider_type'] == 'upsells') { $woou = 'selected'; $pstyle = "display:table-row;";} else $woou = '';
			if($param_array['woo_slider_type'] == 'crosssells') { $wooc = 'selected'; $pstyle = "display:table-row;"; } else $wooc = '';
			if($param_array['woo_slider_type'] == 'external') { $wooe = 'selected'; } else $wooe = '';
			if($param_array['woo_slider_type'] == 'grouped') { $woog = 'selected'; $pstyle = "display:table-row;"; } else $woog = '';	
		} 
		$product = '';
		$product_id = isset($param_array['product_id'])?$param_array['product_id']:''; 
		if($product_id != '') $product = get_the_title($product_id);
		?>
		<tr class="ps-row">
			<th scope="row"><?php _e('Select Slider Type','placid-slider'); ?> </th>
			<td><select name="woo_slider_type" id="eb-woo-slider" class="ps-form-input" >
				<option value="recent" <?php echo $woor; ?>><?php _e('Recent Product Slider','placid-slider'); ?></option>
				<option value="upsells" <?php echo $woou; ?>><?php _e('Upsells Product Slider','placid-slider'); ?></option>
				<option value="crosssells" <?php echo $wooc; ?>><?php _e('Crosssells Product Slider','placid-slider'); ?></option>
				<option value="external" <?php echo $wooe; ?>><?php _e('External Product Slider','placid-slider'); ?></option>
				<option value="grouped" <?php echo $woog; ?>><?php _e('Grouped Product Slider','placid-slider'); ?></option>
			</select></td>
		</tr>
		<tr class="ps-row woo-product" style="<?php echo $pstyle; ?>">
			<th scope="row"><?php _e('Product','placid-slider'); ?> </th>
			<td><input id="products" value="<?php echo $product; ?>" >
				<input id="product_id" name="product_id" value="<?php echo $product_id; ?>" type="hidden" >
			</td>
		</tr>
		<tr class="ps-row">
			<th scope="row"><?php _e('Woo Category','placid-slider'); ?> </th>
			<td><select name="woo-catg[]" multiple id="placid_slider_woocat" ><?php echo $woocat_html;?></select></td>
		</tr>
	<?php }
	elseif( isset($slidertype) && ( $slidertype =='4') ) { 
		$ecstyle="display:none;";
		if(isset($param_array['ecom_slider_type'])) {
			if($param_array['ecom_slider_type'] == '0') { $ecomr = 'selected'; } else $ecomr = '';	
			if($param_array['ecom_slider_type'] == '1') { $ecomc = 'selected'; $ecstyle="display:table-row;"; } else $ecomc = '';
		} ?>
		<tr class="ps-row">
			<th scope="row"><?php _e('Select Slider Type','placid-slider'); ?> </th>
			<td><select name="ecom_slider_type" id="ecom_slider_preview" onchange="catgtype(this.value);"  class="ps-form-input" >
				<option value="0" <?php echo $ecomr; ?>><?php _e('eCom Recent Product Slider','placid-slider'); ?></option>
				<option value="1" <?php echo $ecomc; ?>><?php _e('eCom Product Category Slider','placid-slider'); ?></option>
			</select></td>
		</tr>
		<tr class="ps-row placid_catg" style="<?php echo $ecstyle;?>">
			<th scope="row"><?php _e('ecom Category','placid-slider'); ?> </th>
			<td><select name="ecom-catg" id="placid_slider_ecomcat" ><?php echo $ecomcat_html;?></select></td>
		</tr>
	<?php }
	elseif( isset($slidertype) && ( $slidertype =='5') ) {
		$eventmf = $eventmp = $eventmr = ''; 
		if(isset($param_array['eventm_slider_scope'])) {
			if($param_array['eventm_slider_scope'] == 'future') { $eventmf = 'selected'; } 
			if($param_array['eventm_slider_scope'] == 'past') { $eventmp = 'selected'; } 
			if($param_array['eventm_slider_scope'] == 'all') { $eventmr = 'selected'; } 	
		}?>

        <tr class="ps-row">
		<th scope="row"><?php _e('Select Slider Type','placid-slider'); ?> </th>
		<td><select name="eventm_slider_scope" id="eventm_slider_preview" class="ps-form-input" >
			<option value="future" <?php echo $eventmf; ?>><?php _e('Future Events','placid-slider'); ?></option>
			<option value="past" <?php echo $eventmp; ?>><?php _e('Past Events','placid-slider'); ?></option>
			<option value="all" <?php echo $eventmr; ?>><?php _e('Recent Events','placid-slider'); ?></option>
		</select></td>
	</tr>
	<tr class="ps-row">
		<th scope="row"><?php _e('Events Category','placid-slider'); ?> </th>
		<td><select name="eman-catg[]" id="placid_slider_emancat" multiple><?php echo $eventcat_html;?></select></td>
	</tr>
	<tr class="ps-row">
		<th scope="row"><?php _e('Events Tags','placid-slider'); ?> </th>
		<td><select id="placid_slider_event_tags" name="eman-tags[]" multiple class="ps-form-input" ><?php echo $evtag_html;?></select></td>
	</tr>
	<?php }
	elseif( isset($slidertype) && ( $slidertype =='6') ) {
		$ecalu = $ecalp = $ecala = '';
		if(isset($param_array['eventcal_slider_type'])) {
			if($param_array['eventcal_slider_type'] == 'list') { $ecalu = 'selected'; } 	
			if($param_array['eventcal_slider_type'] == 'past') { $ecalp = 'selected'; } 
			if($param_array['eventcal_slider_type'] == 'all') { $ecala = 'selected'; }
		} ?>
		<tr class="ps-row">
			<th scope="row"><?php _e('Select Slider Type','placid-slider'); ?></th>
			<td><select name="eventcal_slider_type" id="eventcal_slider_preview" class="ps-form-input" >
				<option value="list" <?php echo $ecalu; ?> ><?php _e('Future Events','placid-slider'); ?></option>
				<option value="past" <?php echo $ecalp; ?> ><?php _e('Past Events','placid-slider'); ?></option>
				<option value="all" <?php echo $ecala; ?> ><?php _e('Recent Events','placid-slider'); ?></option>
			</select></td>
		</tr>
		<tr class="ps-row">
			<th scope="row"><?php _e('Events Calendar Category','placid-slider'); ?></th>
			<td><select name="ecal-catg[]" id="placid_slider_ecalcat" multiple class="placid_catslug"><?php echo $eventcal_html;?></select></td>
		</tr>
		<tr class="ps-row">
			<th scope="row"><?php _e('Events Calendar Tags','placid-slider'); ?></th>
			<td><select id="placid_slider_eventcal_tags" name="ecal-tags[]" multiple class="ps-form-input" ><?php echo $evcaltag_html;?></select></td>
		</tr>
	<?php }
	elseif( isset($slidertype) && ( $slidertype =='7') ) { 
		$post_types = get_post_types(); 
		// Taxonomy Slider Params  
		?>
		<tr class="ps-row">
			<th scope="row"><?php _e('Post Type','placid-slider'); ?></th>
			<td>
				<select name="taxo_posttype" id="placid_taxonomy_posttype" class="taxo-update">
					<?php $post_type = isset($param_array['post_type'])?$param_array['post_type']:'post';
					$taxonomy_names = get_object_taxonomies( $post_type );
					foreach ( $post_types as $cpost_type ) {
						$ptselected =''; 
						if($post_type == $cpost_type) $ptselected="selected";
						echo '<option value="'.$cpost_type.'" '.$ptselected.' >' . $cpost_type . '</option>';
					} ?>
				</select>
			</td>
		</tr>
		
		<tr class="ps-row sh-taxo">
			<th  scope="row"><?php _e('Taxonomy','placid-slider'); ?></th>
			<td>
				<select name="taxonomy_name" id="placid_taxonomy" class="taxo-update" >
					<option value="" >Select Taxonomy </option>
					<?php $taxo = isset($param_array['taxonomy_name'])?$param_array['taxonomy_name']:'';
					foreach ( $taxonomy_names as $taxonomy_name ) { 
						$taxoselected = '';
						if( $taxo == $taxonomy_name ) $taxoselected = 'selected';
						echo '<option value="'.$taxonomy_name.'" '.$taxoselected.' >' . $taxonomy_name . '</option>';
					} ?>
				</select>
			</td>
		</tr>

		<tr class="ps-row sh-term">
			<th scope="row"><?php _e('Term','placid-slider'); ?></th>
			<td>
				<select name="taxonomy_term[]" id="placid_taxonomy_term" multiple >
					<?php 
					$terms = get_terms( $taxo );
					$taxoterm = isset($param_array['taxonomy_term'])?$param_array['taxonomy_term']:'';
					$taxoterm = explode(",",$taxoterm);
					foreach ( $terms as $term ) { 
						$termselected = '';
						if(in_array($term->slug, $taxoterm)) $termselected = 'selected';
						echo '<option value="'.$term->slug.'" '.$termselected.' >' . $term->name . '</option>';
					}  ?>
				</select>
			</td>			
		</tr>

		<tr class="ps-row">
			<th scope="row"><?php _e('Show','placid-slider'); ?></th>
			<td>
				<?php
					$show = isset($param_array['taxonomy_show'])?$param_array['taxonomy_show']:'';
					if($show == '') $dsel = 'selected'; else $dsel = '';
					if($show == 'per_tax') $psel = 'selected'; else $psel = '';
				?>
				<select name="taxonomy_show" id="placid_taxonomy_show" class="ps-form-input" >
					<option value="" <?php echo $dsel;?> ><?php _e('Default','placid-slider'); ?></option>
					<option value="per_tax" <?php echo $psel;?> ><?php _e('One Per Tax','placid-slider'); ?></option>
				</select>
			</td>
		</tr>		

		<tr class="ps-row">
			<th scope="row"><?php _e('Operator','placid-slider'); ?></th>
			<td>
			<?php 
				$operator = isset($param_array['taxonomy_operator'])?$param_array['taxonomy_operator']:'';
				if($operator == 'IN' || $operator == '') $isel = 'selected'; else $isel = '';
				if($operator == 'NOT IN') $nsel = 'selected'; else $nsel = '';
				if($operator == 'AND') $asel = 'selected'; else $asel = '';
			?>
			<select name="taxonomy_operator" id="placid_taxonomy_operator" >
				<option value="IN" <?php echo $isel;?> ><?php _e('IN','placid-slider'); ?></option>
				<option value="NOT IN" <?php echo $nsel;?> ><?php _e('NOT IN','placid-slider'); ?></option>
				<option value="AND" <?php echo $asel;?> ><?php _e('AND','placid-slider'); ?></option>
			</select>
		</td>
		</tr>

		<tr class="ps-row">
			<th scope="row"><?php _e('Author','placid-slider'); ?></th>
			<td>
				<select name="taxonomy_author[]" id="placid_taxonomy_author" class="ps-form-input" multiple >
					<?php 
					$auth = isset($param_array['taxonomy_author'])?$param_array['taxonomy_author']:'';			
					$auth = explode(",",$auth);		
					$blogusers = get_users();	
					// Array of WP_User objects.
					foreach ( $blogusers as $user ) {
						 $aselected = '';
						if(in_array($user->ID, $auth)) $aselected = 'selected';
						echo '<option value="'.$user->ID.'" '.$aselected.' >' . $user->user_nicename . '</option>';
					}
					?>
				</select>
			</td>
		<tr>
	<?php }
	elseif( isset($slidertype) && ( $slidertype =='8') ) { ?>
				<tr class="ps-row">
			<th scope="row"><?php _e('Feedurl','placid-slider'); ?></th>
			<td><input type="text" name="rssfeedurl" id="placid_rssfeed_feedurl" value="<?php echo isset($param_array['feed_url'])?$param_array['feed_url']:''; ?>" class="regular-text code" placeholder="http://mashable.com/feed/" /></td>
		</tr>
		
		<tr class="ps-row">
			<th scope="row"><?php _e('RSS Slider Id','placid-slider'); ?></th>
			<td><input type="number" name="rssfeedid" id="placid_rssfeed_id" value="<?php echo isset($param_array['feed_id'])?$param_array['feed_id']:''; ?>" class="regular-text code small" /> </td>
		</tr>
	
		<tr class="ps-row">
			<th scope="row"><?php _e('Default image','placid-slider'); ?></th>
			<td><input type="text" name="rssfeedimg" id="placid_rssfeed_defimage" value="<?php echo isset($param_array['feed_img'])?$param_array['feed_img']:''; ?>" class="regular-text code" placeholder="<?php echo placid_slider_plugin_url('/images/default_image.png');?>" /></td>
		</tr>
		
		<tr class="ps-row">
			<th scope="row"><?php _e('Image Class','placid-slider'); ?></th>
			<td><input type="text" name="rss-image-class" id="placid_rssfeed_image_class" value="<?php echo isset($param_array['feed_imgclass'])?$param_array['feed_imgclass']:''; ?>" class="regular-text code" /></td>
		</tr>

		<tr class="ps-row">
			<th scope="row"><?php _e('Source','placid-slider'); ?></th>
			<td>
			<?php $source = isset($param_array['feed_src'])?$param_array['feed_src']:'';
			$size_style=$feed_style="display:none;";
			if($source == "smugmug" ) $size_style="display:table-row;";
			else  $feed_style="display:table-row;";
			 ?>
			<select name="rssfeed-src" id="placid_rssfeed_src" class="rss-source">
				<option value="" <?php selected($source,"");?>><?php _e('Other','placid-slider');?></option>
				<option value="smugmug" <?php selected($source,"smugmug");?>><?php _e('Smugmug','placid-slider');?></option>
			</select>
			</td>
		</tr>

		<tr class="ps-row rss-feed" style="<?php echo $feed_style; ?>">
			<th scope="row"><?php _e('Feed','placid-slider'); ?></th>
			<td>
			<?php $feed = isset($param_array['feed'])?$param_array['feed']:''; ?>
			<select  name="feed" id="placid_rssfeed_feed" class="ps-form-input">
				<option value="" <?php selected($feed,""); ?>><?php _e('Other','placid-slider');?></option>
				<option value="atom" <?php selected($feed,"atom"); ?>><?php _e('Atom','placid-slider');?></option>
			</select>
			</td>
		</tr>

		<tr class="ps-row rss-size" style="<?php echo $size_style; ?>">
			<th scope="row"><?php _e('Size','placid-slider'); ?></th>
			<td>
			<?php $size = isset($param_array['feed_size'])?$param_array['feed_size']:''; ?>
			<select name="rss-size" id="placid_rssfeed_size" class="ps-form-input">
				<option value="Ti" <?php selected($size, "Ti");?>><?php _e('Tiny thumbnails','placid-slider');?></option>
				<option value="Th" <?php selected($size, "Ti");?>><?php _e('Large thumbnails','placid-slider');?></option>
				<option value="S" <?php selected($size, "S");?>><?php _e('Small','placid-slider');?></option>
				<option value="M" <?php selected($size, "M");?>><?php _e('Medium','placid-slider');?></option>
				<option value="L" <?php selected($size, "L");?>><?php _e('Other','placid-slider');?></option>
				<option value="XL" <?php selected($size, "XL");?>><?php _e('Large','placid-slider');?></option>
				<option value="X2" <?php selected($size, "X2");?>><?php _e('X2Large','placid-slider');?></option>
				<option value="X3" <?php selected($size, "X3");?>><?php _e('X3Large','placid-slider');?></option>
				<option value="O" <?php selected($size, "O");?>><?php _e('Original','placid-slider');?></option>
			</select>
			</td>
		</tr>

		<tr class="ps-row">
			<th scope="row"><?php _e('Scan child node content for images','placid-slider'); ?></th>
			<td>
			<?php $rsscontent = isset($param_array['feed_content'])?$param_array['feed_content']:''; ?>
			<input type="checkbox" name="rss-content" id="placid_rssfeed_content" value="1" <?php checked("1",$rsscontent);?>/>
			</td>
		</tr>
	<?php }
	elseif(isset($slidertype) && ( $slidertype =='9') ) { ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Post Id','placid-slider'); ?></th>
			<td><input type="text" name="postattch-id" value="<?php echo isset($param_array['postattch-id'])?$param_array['postattch-id']:''; ?>" id="placid_postattch_id" />
		</tr>
	<?php }
	elseif(isset($slidertype) && ( $slidertype =='10') ) {  
		$gid=isset($param_array['nextgen-id'])?$param_array['nextgen-id']:'';
		$galleriesOptions = get_placid_nextgen_galleries($gid); 		
	 ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Select Gallery','placid-slider'); ?></th>
			<td>
			<select name="nextgen-id" id="placid_nextgen_galleryid" class="ps-form-input">
				<?php echo $galleriesOptions; ?>
			</select>
			</td>
		</tr>
		<?php $link = isset($param_array['nextgen-anchor'])?$param_array['nextgen-anchor']:''; ?>
		<tr class="ps-row">
			<th scope="row"><?php _e('Link','placid-slider'); ?></th>
			<td><input type="checkbox" name="nextgen-anchor" id="placid_nextgen_anchor" value="1" class="ps-form-input" <?php checked('1', $link); ?> /></td>			
		</tr>
	<?php } elseif(isset($slidertype) && ( $slidertype =='11') ) { ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Playlist id','placid-slider'); ?></th>
			<td><input type="text" name="yt-playlist-id" value="<?php echo isset($param_array['yt-playlist-id'])?$param_array['yt-playlist-id']:''; ?>" id="yt-playlist-id" class="regular-text code" /></td>
		</tr>
	<?php } elseif(isset($slidertype) && ( $slidertype =='12') ) { ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Term','placid-slider'); ?></th>
			<td><input type="text" name="yt-search-term" value="<?php echo isset($param_array['yt-search-term'])?$param_array['yt-search-term']:''; ?>" id="yt-search-term" class="regular-text code" /></td>
		</tr>
	<?php } elseif(isset($slidertype) && ( $slidertype =='13') ) { ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Select type','placid-slider'); ?></th>
			<?php 
			$vimeotype = isset($param_array['vimeo-type'])?$param_array['vimeo-type']:'';
			$usel = $asel = '';
			if($vimeotype == "channel") $csel = "selected";
			if($vimeotype == "album") $asel = "selected";
			 ?>
			<td><select name="vimeo-type" class="vimeo-type ps-form-input" >
				<option value="channel" <?php echo $csel;?> ><?php _e('Channel','placid-slider'); ?></option>
				<option value="album" <?php echo $asel;?> ><?php _e('Album','placid-slider'); ?></option>
			</select></td>
		</tr>
		<tr class="ps-row"> 
			<th scope="row"><label id="vimeo-lb"><?php _e('Name','placid-slider'); ?></label></th>
			<?php 
			$vimeoval = isset($param_array['vimeo-val'])?$param_array['vimeo-val']:'';
			?>
			<td><input type="text" name="vimeo-val" id="vimeo-val" class="ps-form-input" value="<?php echo $vimeoval;?>" /></td>
		</tr>
	<?php } elseif(isset($slidertype) && ( $slidertype =='14') ) { 
		$gplacid_slider = get_option('placid_slider_global_options');
		// Facebook Slider Key
		$fbkey = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
		$secret = isset($gplacid_slider['fb_secret'])?$gplacid_slider['fb_secret']:'';
		if( !empty( $secret ) ) {
			$fbkey.='|'.$secret;
		}
	?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Page Url','placid-slider'); ?></th>
			<?php 
			$pageurl = isset($param_array['fb-pg-url'])?$param_array['fb-pg-url']:'';
			$fbalbum = isset($param_array['fb-album'])?$param_array['fb-album']:'';
			?>
			<td><input type="text" name="fb-pg-url" id="fb-pg-url" value="<?php echo $pageurl;?>" class="ps-form-input regular-text" />
			<input type='submit' name='cfb_connect' value="<?php _e('Connect','placid-slider');?>" class="btn_save cfb_connect eb" /></td>
		</tr>
		<tr class="ps-row fb-albums"> 
			<th scope="row"><?php _e('Album','placid-slider'); ?></th>
			<?php $html= '';
				if($pageurl != '') {
				$page_url_data = "https://graph.facebook.com/v2.4/?id=".$pageurl."&field=id&access_token=$fbkey";
				$json_source = file_get_contents($page_url_data);
				$fb_page = json_decode($json_source);
				$fb_page_id = $fb_page->id;
				//fetch list of albums
				$fb_album_data = "https://graph.facebook.com/v2.4/?id=".$fb_page_id."&fields=albums.limit(8)&access_token=$fbkey";
				$json_source_album = file_get_contents($fb_album_data);
				$fb_page_album = json_decode($json_source_album);
				// fetches album id's & names	
				$html = '<label class="ps-form-label">'. __('Albums','placid-slider').'</label>';
				if($fbalbum != '' ) $fb_album_id = $fbalbum; else $fb_album_id = $fb_page_album->albums->data[0]->id;
				$html = '<select name="fb-album" class="fb_albums" >';
				$count = count($fb_page_album->albums->data);
				if($count > 8 ) $count = 8;
		 		for($j=0;$j<$count;$j++) {
					$selected = '';
					$fbalbum_id = $fb_page_album->albums->data[$j]->id;
					if($fbalbum==$fbalbum_id) $selected='selected';
					$fb_album_name = $fb_page_album->albums->data[$j]->name;
					$html .= '<option value="'.$fbalbum_id.'" '.$selected.' >'.$fb_album_name.'</option>';
				}
				$html .= '</select>';
			}
			?>
			<td><?php echo $html;?></td>
		</tr>
	<?php } elseif(isset($slidertype) && ( $slidertype =='15') ) { ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('User Name','placid-slider'); ?></th>
			<td><input type="text" name="user-name" value="<?php echo isset($param_array['user-name'])?$param_array['user-name']:''; ?>" id="user-name" class="regular-text code" /></td>
		</tr>
	<?php } elseif(isset($slidertype) && ( $slidertype =='16') ) { ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Select type','placid-slider'); ?></th>
			<?php 
			$flickrtype = isset($param_array['flickr-type'])?$param_array['flickr-type']:'';
			$usel = $asel = '';
			if($flickrtype == "user") $usel = "selected";
			if($flickrtype == "album") $asel = "selected";
			 ?>
			<td><select name="flickr-type" class="ps-form-input" >
				<option value="user" <?php echo $usel;?> ><?php _e('User','placid-slider'); ?></option>
				<option value="album" <?php echo $asel;?> ><?php _e('Album','placid-slider'); ?></option>
			</select></td>
		</tr>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('ID','placid-slider'); ?></th>
			<?php 
			$flickrid = isset($param_array['fl-id'])?$param_array['fl-id']:'';
			?>
			<td><input type="text" name="fl-id" id="fl-user-id" class="ps-form-input" value="<?php echo $flickrid;?>" /></td>
		</tr>
	<?php } elseif(isset($slidertype) && ( $slidertype =='18') ) { ?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Select type','placid-slider'); ?></th>
			<?php 
			$feature = isset($param_array['feature'])?$param_array['feature']:'';
			if($feature == "popular") $psle = "selected"; else $psle = "";
			if($feature == "highest_rated") $hsle = "selected"; else $hsle = "";
			if($feature == "upcoming") $usle = "selected"; else $usle = "";
			if($feature == "editors") $esle = "selected"; else $esle = "";
			if($feature == "fresh_today") $ftsle = "selected"; else $ftsle = "";
			if($feature == "fresh_yesterday") $fysle = "selected"; else $fysle = "";
			if($feature == "fresh_week") $fwsle = "selected"; else $fwsle = "";	
			if($feature == "user") $usersle = "selected"; else $usersle = "";	
			if($feature == "user_favorites") $userfvsle = "selected"; else $userfvsle = "";	
			if($feature == "user" || $feature == "user_favorites") $style="display:table-row;"; else $style="display:none;"
			 ?>
			<td>
				<select name="feature" class="feature">
					<option value="popular" <?php echo $psle; ?> ><?php _e('Popular','placid-slider');?></option>
					<option value="highest_rated" <?php echo $hsle; ?> ><?php _e('Highest Rated','placid-slider');?></option>
					<option value="upcoming" <?php echo $usle; ?> ><?php _e('Upcoming','placid-slider');?></option>
					<option value="editors" <?php echo $esle; ?> ><?php _e('Editors','placid-slider');?></option>
					<option value="fresh_today" <?php echo $ftsle; ?> ><?php _e('Fresh Today','placid-slider');?></option>
					<option value="fresh_yesterday" <?php echo $fysle; ?> ><?php _e('Fresh Yesterday','placid-slider');?></option>
					<option value="fresh_week" <?php echo $fwsle; ?> ><?php _e('Fresh Week','placid-slider');?></option>
					<option value="user" <?php echo $usersle; ?> ><?php _e('User','placid-slider');?></option>
					<option value="user_favorites" <?php echo $userfvsle; ?> ><?php _e('User favorites','placid-slider');?></option>
				</select>
			</td>
		</tr>
		<tr class="ps-row pxuser" style="<?php echo $style; ?>"> 
			<th scope="row"><?php _e('Name','placid-slider'); ?></th>
			<?php 
			$pxuser = isset($param_array['pxuser'])?$param_array['pxuser']:'';
			?>
			<td><input type="text" name="pxuser" id="pxuser" class="ps-form-input" value="<?php echo $pxuser;?>" /></td>
		</tr>
	<?php }
		if(isset($param_array['offset']) && $param_array['offset'] != '' ) $offset =  $param_array['offset'];
		else $offset = 0; 
		?>
		<tr class="ps-row"> 
			<th scope="row"><?php _e('Offset','placid-slider'); ?></th>
			<td><input type="number" name="offset" value="<?php echo $offset;?>" style="width: 50px;" /></td>
		</tr>
		
		<tr>
		<td><input type="submit" class="btn_save" name="attach_setting" value="<?php _e('Update','placid-slider');?>" /></td>
		<td> </td>
		</tr>
	</table>
	
	</div>
	</form>
	<?php add_thickbox(); ?>
		<div id="popup-all-types" style="display:none;">
			<div class="placid-change-type" ></div>
		</div>
	</div>
	<div style="clear:left;"></div>
	<?php } 
	// slider names Select Option
	$gplacid_slider = get_option('placid_slider_global_options');
		if( isset($_GET['id']) && $_GET['id'] != '') $slider_id = $_GET['id'];
		else $slider_id = $placid_slider_curr['slider_id'];	
		  $sliders = placid_ss_get_sliders();	
		  foreach ($sliders as $slider) { 
			 if($slider['slider_id']==$slider_id && $slider['slider_id']!='0') {
			 		$sname_html =$slider['slider_name'];		
				 }
		  }
	$slider_id = isset($_GET['id'])?$_GET['id']:'';
	$type = isset($slidertype)?$slidertype:'';
	if($type == '17' || $type == '0') { 
		wp_enqueue_script( 'media-uploader', placid_slider_plugin_url( 'js/media-uploader.js' ),array( 'jquery' ), PLACID_SLIDER_VER, false);
	}
	if( $type == '0' && $slider_id != '') {
	//echo "ABCD".$_POST['remove_all'];
	?>
	<div class="eb-custom-slider">
		<div class="eb-cs-add-slides"><i class="fa fa-plus-circle"></i> <a href="#TB_inline?width=800&height=550&inlineId=popup-add-slides&class=placidmodal" title="Add Slides" class="thickbox add-slides"><?php _e('Add Slides','placid-slider');?></a></div>
		<form action="" method="post">
		<div class="remove-wrap" >
			<input type="submit" name="remove_selected" class="button-primary btn-remove" value="<?php _e( 'Remove Selected', 'placid-slider' ); ?>" onclick="return confirmRemove()" /> &nbsp; <input type="submit" name="remove_all" class="button-primary btn-remove" value="<?php _e( 'Remove All at Once', 'placid-slider' );?>" onclick="return confirmRemoveAll()" />
		</div>
		<div style="clear: left;"></div>
		<input type="hidden" name="reorder_posts_slider" value="1" />
		<input type="hidden" name="current_slider_id" value="<?php echo $slider_id;?>" />
		<div id="sslider_sortable_<?php echo $_GET['id'];?>" style="color:#326078;overflow: auto;padding-top: 20px;" class="placid-thumbs" >    
	   	<?php  
	   				
		
		echo '</div></form>';
		?>
	</div>
	<?php add_thickbox(); 
	// Facebook Slider Key Check
	$fbkey = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
	if($fbkey != "" ) { $fbclass = "eb-cs-fb"; } else { $fbclass = ""; }
	// Instagram Slider Key Check
	$igkey = isset($gplacid_slider['insta_client_id'])?$gplacid_slider['insta_client_id']:'';
	if($igkey != "" ) { $igclass = "eb-cs-it"; } else { $igclass = ""; }
	// Flickr Slider Key Check
	$flkey = isset($gplacid_slider['flickr_app_key'])?$gplacid_slider['flickr_app_key']:'';
	if($flkey != "" ) { $flclass = "eb-cs-fl"; } else { $flclass = ""; }
	// 500 PX 
	$pxkey = isset($gplacid_slider['px_ckey'])?$gplacid_slider['px_ckey']:'';
	if($pxkey != "" ) { $pxclass = "eb-cs-px"; } else { $pxclass = ""; }
	// YouTube Slider Key Check
	$youtube_key = isset($gplacid_slider['youtube_app_id'])?$gplacid_slider['youtube_app_id']:'';
	if($youtube_key != "" ) { $ytclass = "eb-cs-video"; } else { $ytclass = ""; }
	?>
		<div id="popup-add-slides" style="display:none;">
			<div class="eb-cs-left">
			
			     	<div class="eb-cs-tab eb-cs-blank active"> <i class="fa fa-file-o"></i> <?php _e('Blank','placid-slider');?></div>
				<div class="eb-cs-tab eb-cs-post" id="post" ><i class="fa fa-file-word-o"></i> <?php _e('Posts','placid-slider');?></div>
				<div class="eb-cs-tab eb-cs-post" id="page" > <i class="fa fa-file-word-o"></i> <?php _e('Pages','placid-slider');?></div>
				<div class="eb-cs-tab eb-cs-media" id="attachment"><i class="fa fa-file-word-o"></i> <?php _e('Media','placid-slider');?></div>
				<div class="eb-cs-tab eb-cs-pt"><i class="fa fa-file-word-o"></i> <?php _e('Post Type','placid-slider');?></div>
				<div class="eb-cs-tab <?php echo $fbclass; ?>"> 
					<i class="fa fa-facebook-square"></i> <?php _e('Facebook','placid-slider');?>
					<?php if($fbkey == '') { ?> &nbsp;<i class="fa fa-lock" title="Please Add Facebook App ID and Secret in Global Settings"></i> <?php } ?>
				</div>
				<div class="eb-cs-tab <?php echo $flclass; ?>"> 
					<i class="fa fa-flickr"></i> <?php _e('Flickr','placid-slider');?>
					<?php if($flkey == '') { ?> &nbsp;<i class="fa fa-lock" title="Please Add Flickr API Key in Global Settings"></i> <?php } ?>
				</div>
				<div class="eb-cs-tab <?php echo $igclass; ?>"> 
					<i class="fa fa-instagram"></i> <?php _e('Instagram','placid-slider');?>
					<?php if($igkey == '') { ?> &nbsp;<i class="fa fa-lock" title="Please Add Instagram Access Token in Global Settings"></i> <?php } ?>
				</div>
			<?php	if($placid_slider_curr['stylesheet']!='logo') { ?>
				<div class="eb-cs-tab <?php echo $ytclass;?>" id="youtube" > 
					<i class="fa fa-youtube"></i> <?php _e('Youtube','placid-slider');?>
					<?php if($youtube_key == '') { ?> &nbsp;<i class="fa fa-lock" title="Please Add YouTube API Key in Global Settings"></i> <?php } ?>
				</div>
				<div class="eb-cs-tab eb-cs-video" id="vimeo" > <i class="fa fa-vimeo-square"></i></span> <?php _e('Vimeo','placid-slider');?></div>
			<?php } ?>	
				<div class="eb-cs-tab <?php echo $pxclass; ?>"> 
					<span class="dashicons dashicons-media-default"></span> <?php _e('500PX','placid-slider');?>
					<?php if($pxkey == '') { ?> &nbsp;<i class="fa fa-lock" title="Please Add 500px Consumer Key in Global Settings"></i> <?php } ?>
				</div>
			</div>
			<div class="eb-cs-right"></div>
			<input type="hidden" name="placid-add-slides-nonce" id="placid-add-slides-nonce" value="<?php echo wp_create_nonce( 'placid-add-slides-nonce' ); ?>" />
		</div>
	<?php 
	} 
	$slider_id = isset($_GET['id'])?$_GET['id']:'';
	$type = isset($slidertype)?$slidertype:'';
	if($type == '17') { ?>
		<!-- image Slider start-->
			<h3 class="sub-heading" style="margin-left:0px;"><?php _e('Add Images to','placid-slider'); ?> <?php echo $slider_name;?> (Slider ID = <?php echo $slider_id;?>)</h3>
			<div class="uploaded-images">
				<form method="post" class="addImgForm">
					<div style="clear:left;margin-top:10px;" class="image-uploader">
						<input type="submit" class="upload-button slider_images_upload" name="slider_images_upload" value="Upload" />
					</div>
					<input type="hidden" name="current_slider_id" value="<?php echo $slider_id;?>" />
				</form>
			</div>
		<!-- image Slider end-->
		<form action="" method="post">
		<input type="hidden" name="reorder_posts_slider" value="1" />
		<input type="hidden" name="slider_posts" />
		
		<div id="sslider_sortable_<?php echo $_GET['id'];?>" style="color:#326078;overflow: auto;" class="placid-img-thumbs">    
	   	<?php  
	    	$slider_id = $_GET['id'];
		$slider_posts=placid_get_slider_posts_in_order($slider_id);?>
		<input type="hidden" name="current_slider_id" value="<?php echo $slider_id;?>" />
        
		<?php
		$count = 0;	
		if(isset($sliderset) && $sliderset != '1' ) $cntr = $sliderset; else $cntr = '';
		$placid_slider_options='placid_slider_options'.$cntr;
		$placid_slider_curr=get_option($placid_slider_options);
		foreach($slider_posts as $slider_post) {
			$slider_arr[] = $slider_post->post_id;
			$post = get_post($slider_post->post_id);	  
			if(isset($post) and isset($slider_arr)){
				if ( in_array($post->ID, $slider_arr) ) {
					$img = $isimage = '';
					$count++;
					/* ---------- Image Fetch Start --------- */
					$post_id = $post->ID;
					$isimage = wp_get_attachment_url( $post->ID , false );
					$img =  '<img src="'. wp_get_attachment_url( $post->ID , false ).'" width="80" />';
					if($isimage == '') $img = '<img src="'. placid_slider_plugin_url( 'images/default_image.png' ).'" width="80" />';
					/* ------------ Image Fetch End ----------- */
					$sslider_author = get_userdata($post->post_author);
					$sslider_author_dname = $sslider_author->display_name;
					$desc = $post->post_content;
					
				 	echo '<div id="'.$post->ID.'" class="ps-reorder"><input type="hidden" name="order[]" value="'.$post->ID.'" /><div>'.$img.'<a href="'. get_edit_post_link( $post->ID ).'" target="_blank"><span class="editcore"></span></a><a href="" onclick="return confirmDelete()" ><span class="delImgSlide" id="'.$post_id.'"></span></a></div><strong> ' . $post->post_title . '</strong></div>'; 
				}
			}
		}
		    
		if ($count == 0) {
		    echo '<div>'.__( 'No posts/pages have been added to the Slider - You can add respective post/page to slider on the Edit screen for that Post/Page', 'placid-slider' ).'</div>';
		}
			
		echo '</div><div class="submit">';
		if ($count) { echo '<input type="submit" name="remove_selected" class="button-primary" value="'.__( 'Remove Selected', 'placid-slider' ).'" onclick="return confirmRemove()" /> <input type="submit" name="remove_all" class="button-primary" value="'.__( 'Remove All at Once', 'placid-slider' ).'" onclick="return confirmRemoveAll()" /><input type="submit" name="update_slides" class="btn_save" value="'. __( 'Save', 'placid-slider' ).'"  />';}
		echo '</div></form>';
		?>
	<?php }
// 3.0 : for settings set
if ($gplacid_slider['support'] == "1"){ ?>
<strong><a href="http://slidervilla.com/placid/" title="<?php _e('Placid Slider','placid-slider'); ?>" ><?php _e('Placid Slider','placid-slider'); ?></a> Current Version:<?php echo PLACID_SLIDER_VER;?></strong>
<?php } ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".updated").width("68%");
	var placidActive = jQuery("#placid_active_accordion").val();
	jQuery('.ps-right-accordion').accordion({defaultOpen: placidActive, cssOpen: "ps-right-open", cssClose: "ps-right-close"});
		
	/* Keep open placid Menu */
	jQuery(".toplevel_page_placid-slider-admin").addClass("wp-has-current-submenu wp-menu-open");
	var ul = jQuery(".toplevel_page_placid-slider-admin").find(".wp-submenu li:eq(2)");
	ul.addClass("current");
	/* End */
	
	/*
	AddedNew: For Image Slider
	*/
	/* Image Slider Delete Slide */
	jQuery(".delImgSlide").click(function() {
		var agree=confirm("This will remove selected slide from Slider.");
		if (agree) {
			var placidSliderId = parseInt(jQuery("input[name='placid-sliderid']").val());
			var postId= parseInt(jQuery(this).attr('id'));
			var preview_html = jQuery("#placid-preview-nonce").val();
			var data = {};
			data['slider_id'] = placidSliderId;
			data['post_id'] = postId;
			data['action'] = 'placid_delete_slide';
			data['preview_html']=preview_html;
			jQuery.post(ajaxurl, data, function(response) { 
				window.location.href = response;
			});
		} 
		return false;
	});
	jQuery(".editSlide").click(function(){
		jQuery(this).parents(".ps-reorder").addClass("ps-open");
		jQuery(this).parents(".ps-reorder").find(".editSlide,.delImgSlide").css({"left":"6%"});
		jQuery(this).parents(".ps-reorder").animate({"width":"96%"},"slow");
		jQuery(this).siblings(".placid_slideDetails").show();
	
	});
	jQuery(".ps-reorder").hover(function(){
		jQuery(this).find('img').css('opacity','0.6');jQuery(this).find('.editSlide,.delImgSlide,.editcore').fadeIn(500);},
		function(){jQuery(this).find('img').css('opacity','1');jQuery(this).find('.editSlide,.delImgSlide,.editcore').fadeOut('fast');}
	);
	var postArr = Array();
	jQuery(".ps-reorder").click(function(){
		jQuery(this).toggleClass("ps-slide-selected");
		if(jQuery(this).hasClass("ps-slide-selected")) {
			var id = jQuery(this).attr("ID"); 
			postArr.push(id);
			jQuery("input[name='slider_posts']").val(postArr);
		}
		else {
			var id = jQuery(this).attr("ID"); 
			var index = postArr.indexOf(id);
			postArr.splice(index, 1);
			jQuery("input[name='slider_posts']").val(postArr);
		
		}
	});
	jQuery(".show-settings").click(function() { 
		var top = jQuery(".placid_accordion_outer").css('top');
		if(top == '80px' ) {
			setTimeout(function() {
				var helpHeight = jQuery(".metabox-prefs").height() + 80;
				jQuery(".placid_accordion_outer").css({"top":helpHeight});	
			} , 195 );  
		} else {
			jQuery(".placid_accordion_outer").css({"top":"80px"});
		}
	});
});
</script>
<?php
}
?>
