<?php
function placid_process_create_new_requests() {
		// Create new Image slider
	if ( isset($_POST['addSave']) and ($_POST['addSave']=='Save') ) { 
		$images=(isset($_POST['imgID']))?$_POST['imgID']:array();
		$slider_id=$_POST['current_slider_id'];
		$ids=array_reverse($images);
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
		$urlarg = array();
		$current_url = admin_url('admin.php?page=placid-slider-easy-builder');
		$urlarg['id'] = $slider_id;
		$query_arg = add_query_arg( $urlarg ,$current_url);
		$current_url = $query_arg;
		wp_redirect( $current_url );
		exit;
	}
	if(isset ($_POST['step4-next']) || isset($_POST['step3-create']) ) { 
		global $wpdb,$table_prefix;
		$default_placid_slider_settings=get_placid_slider_default_settings();
		$slider_meta = $table_prefix.PLACID_SLIDER_META;
		$type = $_POST["slider-type"];
		$slider_name = $_POST["new_slider_name"];
		$offset = $_POST["offset"];
		$param_array = array();
		if(isset ($_POST['step3-create'])) {
			$scounter = $_POST["set"];
		}
		if(isset ($_POST['step4-next'])) {
			$skin = isset($_POST['skin'])?$_POST['skin'] : "default";
			if($skin == "" ){
				$skin="default";
			}
			$layout = $_POST["ps-layout"];
			// Create New Setting Set
			require_once ( dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/settings.php'); 
			$skin_str = 'default_settings_'.$skin;
			global ${$skin_str};
			$ps_curr_setting = $default_placid_slider_settings;
			foreach(${$skin_str} as $key=>$value)
			{
				$ps_curr_setting[$key]= $value;
			}
			foreach($ps_curr_setting as $key=>$value)
			{
				if($key == "stylesheet") {
					$ps_curr_setting[$key] = $skin;
				} 
				elseif($layout == "ver_slide") { 
					if($key == "orientation") {
						$ps_curr_setting[$key] = 1;
					} 
				}
				elseif($layout == "with_nav") { 
					if($key == "enable_arrow") {
						$ps_curr_setting[$key] = 1;
					}
				}
				elseif($layout == "reverse-dir") { 
					if($key == "direction") {
						$ps_curr_setting[$key] = 1;
					} 
				}
				elseif($layout == "grayscale_effect") { 
					if($key == "coloronhover") {
						$ps_curr_setting[$key] = 1;
					} 
				}
				elseif($layout == "pure_image") { 
					if($key == "image_only") {
						$ps_curr_setting[$key] = 1;
					} 
				}
				if($type == 11 ||$type == 12 ||$type == 13){
					if($key == "image_only") {
						$ps_curr_setting[$key] = 1;
					} 
				}
			}
			$scounter=get_option('placid_slider_scounter');
			$scounter++;
			update_option('placid_slider_scounter',$scounter);
			$options='placid_slider_options'.$scounter;
			update_option($options,$ps_curr_setting);
		}
		if($_POST['offset'] != '0' && $_POST['offset'] != '') {
			$param_array['offset']=$_POST['offset'];
		}
		if($type == '1' ) {
			if($_POST['catg_slug'] != '0' && $_POST['catg_slug'] != '') {
				$param_array['catg_slug']=$_POST['catg_slug'];
			}
		} elseif($type == '3' ) {
			if(isset($_POST['woo_slider_type']) && $_POST['woo_slider_type'] != '') {
				$param_array['woo_slider_type']=$_POST['woo_slider_type'];
			}
			if(isset($_POST['product_id']) && $_POST['product_id'] != '') {
				$param_array['product_id']=$_POST['product_id'];
			}
			if(isset($_POST['woo-catg']) && $_POST['woo-catg'] != '') {
				$param_array['woo-catg']=$_POST['woo-catg'];
			}
			$param_array['post_type']='product';
		} elseif($type == '4' ) {
			if(isset($_POST['ecom-catg']) && $_POST['ecom-catg'] != '') {
				$param_array['ecom-catg']=$_POST['ecom-catg'];
			}
			if(isset($_POST['ecom_slider_type']) && $_POST['ecom_slider_type'] != '') {
				$param_array['ecom_slider_type']=$_POST['ecom_slider_type'];
			}
			$param_array['post_type']='wpsc-product';
			
		} elseif($type == '5' ) {
			if(isset($_POST['eventm_slider_scope']) && $_POST['eventm_slider_scope'] != '') {
				$param_array['eventm_slider_scope']=$_POST['eventm_slider_scope'];
			}
			if(isset($_POST['eman-catg']) && $_POST['eman-catg'] != '') {
				$param_array['eman-catg']=$_POST['eman-catg'];
			}
			if(isset($_POST['eman-tags']) && $_POST['eman-tags'] != '') {
				$param_array['eman-tags']=$_POST['eman-tags'];
			}
			$param_array['post_type']='event';
		} elseif($type == '6' ) {
			if(isset($_POST['eventcal_slider_type']) && $_POST['eventcal_slider_type'] != '') {
				$param_array['eventcal_slider_type']=$_POST['eventcal_slider_type'];
			}
			if(isset($_POST['ecal-catg']) && $_POST['ecal-catg'] != '') {
				$param_array['ecal-catg']=$_POST['ecal-catg'];
			}
			if(isset($_POST['ecal-tags']) && $_POST['ecal-tags'] != '') {
				$param_array['ecal-tags']=$_POST['ecal-tags'];
			}
			$param_array['post_type']='tribe_events';
		} elseif($type == '7' ) {
			// Taxonomy Slider
			if(isset($_POST['taxo_posttype']) && $_POST['taxo_posttype'] != '') {
				$param_array['post_type']=$_POST['taxo_posttype'];
			}
			if(isset($_POST['taxonomy_name']) && $_POST['taxonomy_name'] != '') {
				$param_array['taxonomy_name']=$_POST['taxonomy_name'];
			}
			if(isset($_POST['taxonomy_term']) && $_POST['taxonomy_term'] != '') {
				$param_array['taxonomy_term']=$_POST['taxonomy_term'];
			}	
			if(isset($_POST['taxonomy_operator']) && $_POST['taxonomy_operator'] != '') {
				$param_array['taxonomy_operator']=$_POST['taxonomy_operator'];
			}
			if(isset($_POST['taxonomy_author']) && $_POST['taxonomy_author'] != '') {
				$param_array['taxonomy_author']=$_POST['taxonomy_author'];
			}
			if(isset($_POST['taxonomy_show']) && $_POST['taxonomy_show'] != '') {
				$param_array['taxonomy_show']=$_POST['taxonomy_show'];
			}		
		} elseif($type == '8' ) {
			if(isset($_POST['rssfeedid']) && $_POST['rssfeedid'] != '') {
				$param_array['feed_id']=$_POST['rssfeedid'];
			}
			if(isset($_POST['rssfeedurl']) && $_POST['rssfeedurl'] != '') {
				$param_array['feed_url']=$_POST['rssfeedurl'];
			}
			if(isset($_POST['rssfeedimg']) && $_POST['rssfeedimg'] != '') {
				$param_array['feed_img']=$_POST['rssfeedimg'];
			}	
			if(isset($_POST['feed']) && $_POST['feed'] != '') {
				$param_array['feed']=$_POST['feed'];
			}
			if(isset($_POST['rss-content']) && $_POST['rss-content'] != '') {
				$param_array['feed_content']=$_POST['rss-content'];
			}
			if(isset($_POST['rssfeed-src']) && $_POST['rssfeed-src'] != '') {
				$param_array['feed_src']=$_POST['rssfeed-src'];
			}	
			if(isset($_POST['rss-size']) && $_POST['rss-size'] != '') {
				$param_array['feed_size']=$_POST['rss-size'];
			}
			if(isset($_POST['rss-img-class']) && $_POST['rss-img-class'] != '') {
				$param_array['feed_imgclass']=$_POST['rss-img-class'];
			}	
		} elseif($type == '9' ) {
			if(isset($_POST['postattch-id']) && $_POST['postattch-id'] != '') {
				$param_array['postattch-id']=$_POST['postattch-id'];
			}
		} elseif($type == '10' ) {
			if(isset($_POST['nextgen-id']) && $_POST['nextgen-id'] != '') {
				$param_array['nextgen-id']=$_POST['nextgen-id'];
			}
			if(isset($_POST['nextgen-anchor']) && $_POST['nextgen-anchor'] != '') {
				$param_array['nextgen-anchor']=$_POST['nextgen-anchor'];
			}		
		} elseif($type == '11' ) {
			if(isset($_POST['yt-playlist-id']) && $_POST['yt-playlist-id'] != '') {
				$param_array['yt-playlist-id']=$_POST['yt-playlist-id'];
			}
		} elseif($type == '12' ) {
			if(isset($_POST['yt-search-term']) && $_POST['yt-search-term'] != '') {
				$param_array['yt-search-term']=$_POST['yt-search-term'];
			}
		} elseif($type == '13' ) {
			if(isset($_POST['vimeo-type']) && $_POST['vimeo-type'] != '') {
				$param_array['vimeo-type']=$_POST['vimeo-type'];
			}
			if(isset($_POST['vimeo-val']) && $_POST['vimeo-val'] != '') {
				$param_array['vimeo-val']=$_POST['vimeo-val'];
			}
		} elseif($type == '14' ) {
			if(isset($_POST['fb-pg-url']) && $_POST['fb-pg-url'] != '') {
				$param_array['fb-pg-url']=$_POST['fb-pg-url'];
			}
			if(isset($_POST['fb-album']) && $_POST['fb-album'] != '') {
				$param_array['fb-album']=$_POST['fb-album'];
			}
		} elseif($type == '15' ) {
			if(isset($_POST['user-name']) && $_POST['user-name'] != '') {
				$param_array['user-name']=$_POST['user-name'];
			}
		} elseif($type == '16' ) {
			if(isset($_POST['flickr-type']) && $_POST['flickr-type'] != '') {
				$param_array['flickr-type']=$_POST['flickr-type'];
			}
			if(isset($_POST['fl-id']) && $_POST['fl-id'] != '') {
				$param_array['fl-id']=$_POST['fl-id'];
			}
		} elseif($type == '18' ) {
			if(isset($_POST['feature']) && $_POST['feature'] != '') {
				$param_array['feature']=$_POST['feature'];
			}
			if(isset($_POST['pxuser']) && $_POST['pxuser'] != '') {
				$param_array['pxuser']=$_POST['pxuser'];
			}
		}
		$sparam = serialize($param_array);
		$param = $sparam;

		$sql = "INSERT INTO $slider_meta (slider_name,type,setid,param) VALUES('$slider_name',$type,$scounter,'$param');";
		$result = $wpdb->query($sql);
		$id = $wpdb->insert_id;
		$urlarg = array();
		if($type == '17') {
			$current_url = admin_url('admin.php?page=placid-slider-admin');
		}
		else {
			$current_url = admin_url('admin.php?page=placid-slider-easy-builder');
		}
		$urlarg['id'] = $id;
		$query_arg = add_query_arg( $urlarg ,$current_url);
		$current_url = $query_arg;
		wp_redirect( $current_url );
		exit;
	}
}
add_action('load-toplevel_page_placid-slider-admin','placid_process_create_new_requests');
function placid_slider_create_new_slider() {
	if (isset ($_POST['slider_type'])) {
		$slider_type = $_POST['slider_type'];
		?>
		<div class="ps-step2">
			<a href="<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-admin' ) );?>" class="ps-show-all"> 
			<?php _e('Show All Types','placid-slider'); ?> </a>
			<input type="hidden" name="placid-loader" value="<?php echo admin_url('images/loading.gif');?>" />
			<form method="post" name="ps-create-new-step2" id="ps-create-new-step2" class="ps-step2-form ps-validate" >
			<?php
			if($slider_type == 2) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="2" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Recent Posts Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 1) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="1" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Category Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 0) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="0" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Custom Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 3) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="3" checked ><i class="fa fa-shopping-cart"></i></span><span class="ps-icon-title"><?php _e('WooCommerce Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 4) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="4" checked ><i class="fa fa-shopping-cart"></i></span><span class="ps-icon-title"><?php _e('ECommerce Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 5) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="5" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Event Manager Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 6) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="6" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Event Calendar Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 7) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="7" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Taxonomy Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 17) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="17" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Image Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 8) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="8" checked ><i class="fa fa-rss-square"></i><span class="ps-icon-title"><?php _e('RSS Feed Slider','placid-slider'); ?></span>
				</div>
			<?php
			}  elseif($slider_type == 9) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="9" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Post Attachment Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 10) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="10" checked ><i class="fa fa-picture-o"></i><span class="ps-icon-title"><?php _e('NextGen Gallery Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 11) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="11" checked ><i class="fa fa-youtube"></i><span class="ps-icon-title"><?php _e('Youtube Playlist Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 12) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="12" checked ><i class="fa fa-youtube"></i><span class="ps-icon-title"><?php _e('YouTube Search Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 13) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="13" checked ><i class="fa fa-vimeo-square"></i><span class="ps-icon-title"><?php _e('Vimeo Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 14) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="14" checked ><i class="fa fa-facebook-square"></i><span class="ps-icon-title"><?php _e('Facebook Album Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 15) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="15" checked ><i class="fa fa-instagram"></i><span class="ps-icon-title"><?php _e('Instagram Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 16) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="16" checked ><i class="fa fa-flickr"></i><span class="ps-icon-title"><?php _e('Flickr Slider','placid-slider'); ?></span>
				</div>
			<?php
			} elseif($slider_type == 18) { ?>
				<div class="ps-col-row">
					<input type="radio" name="slider-type" value="18" checked ><img src="<?php echo placid_slider_plugin_url( 'images/500px.png' ); ?>" width="13" height="14" /><span class="ps-icon-title"><?php _e('500px Slider','placid-slider'); ?></span>
				</div>
			<?php
			}			
			?>
			<div class="ps-form-row"> 	
				<label><?php _e('Slider Name','placid-slider'); ?></label>			
				 <input type="text" name="new_slider_name" id="new_slider_name" class="ps-form-input" /> 
			</div>
			<div class="ps-form-row">
				<label><?php _e('Offset','placid-slider'); ?></label>
				<input type="number" name="offset" value="0" class="ps-form-input small" />
			</div>
			<?php if($slider_type == 1) { 
				//category Slider Param
				$categories = get_categories();
				$scat_html='<option value="" selected >Select the Category</option>';
				foreach ($categories as $category) { 
					 if( isset($param_array['catg_slug']) && $category->slug==$param_array['catg_slug']){$selected = 'selected';} else{$selected='';}
					 $scat_html =$scat_html.'<option value="'.$category->slug.'" '.$selected.'>'.$category->name.'</option>';
				}
			?>
				<div class="ps-form-row">
					<label><?php _e('Category','placid-slider'); ?></label>
					<select name="catg_slug" id="placid_slider_catslug" class="ps-form-input" ><?php echo $scat_html;?></select>
				</div>
			<?php } elseif($slider_type == 3 ) { 
				if( is_plugin_active('woocommerce/woocommerce.php') ) {
					$wooterms = get_terms('product_cat');
					$woocat_html='<option value="" selected >Select the Category</option>';
					foreach( $wooterms as $woocategory) {
						if( isset($param_array['woo-catg']) && $woocategory->slug==$param_array['woo-catg'] ){$selected = 'selected';} else{$selected='';}
						$woocat_html =$woocat_html.'<option value="'.$woocategory->slug.'" '.$selected.'>'. $woocategory->name .'</option>';
					}
				} 
			?>
			<div class="ps-form-row">
				<label><?php _e('Select Slider Type','placid-slider'); ?></label>
				<select name="woo_slider_type" id="woo-slider-type" class="ps-form-input" >
					<option value="recent" ><?php _e('Recent Product Slider','placid-slider'); ?></option>
					<option value="upsells" ><?php _e('Upsells Product Slider','placid-slider'); ?></option>
					<option value="crosssells" ><?php _e('Crosssells Product Slider','placid-slider'); ?></option>
					<option value="external" ><?php _e('External Product Slider','placid-slider'); ?></option>
					<option value="grouped" ><?php _e('Grouped Product Slider','placid-slider'); ?></option>
				</select>
			</div>
			<div class="ps-form-row woo-product" style="display:none;">
				<label><?php _e('Enter Product','placid-slider'); ?></label>
				<input id="products" class="ps-form-input" >
				<input id="product_id" name="product_id" value="" type="hidden" >
			</div>
			<div class="ps-form-row">
				<label><?php _e('Select Category','placid-slider'); ?></label>
				<select id="placid_slider_woo_catslug" name="woo-catg[]" multiple class="ps-form-input" ><?php echo $woocat_html;?></select>
			</div>
			<?php } elseif($slider_type == 4 ) { 
				if( is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) {
					$ecomterms = get_terms('wpsc_product_category');
					$ecomcat_html='<option value="" selected >Select the Category</option>';
					foreach( $ecomterms as $ecomcategory) {
						if( isset($param_array['ecom-catg']) && $ecomcategory->slug==$param_array['ecom-catg']){$selected = 'selected';} else{$selected='';}
						$ecomcat_html =$ecomcat_html.'<option value="'.$ecomcategory->slug.'" '.$selected.'>'.$ecomcategory->name.'</option>';
					}
				}
			?>
				<div class="ps-form-row">
					<label><?php _e('Select Slider Type','placid-slider'); ?></label>
					<select name="ecom_slider_type" id="ecom_slider_preview" onchange="catgtype(this.value);"  class="ps-form-input" >
						<option value="0" ><?php _e('eCom Recent Product Slider','placid-slider'); ?></option>
						<option value="1" ><?php _e('eCom Product Category Slider','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row placid_catg" style="display:none;">
					<label><?php _e('Select Category','placid-slider'); ?></label>
					<select id="placid_slider_ecom_catslug" name="ecom-catg" class="ps-form-input" ><?php echo $ecomcat_html;?></select>
				</div>
				
			<?php } elseif($slider_type == 5 ) { 
				if( is_plugin_active('events-manager/events-manager.php') ) {
					$eventterms = get_terms('event-categories');
					$eventcat_html='<option value="" selected >All Category</option>';
					foreach( $eventterms as $eventcategory) {
						$eventcat_html =$eventcat_html.'<option value="'.$eventcategory->slug.'" >'.$eventcategory->name.'</option>';
					} 
					$evtags = get_terms("event-tags");
					$evtag_html='<option value="" selected >All Tags</option>';
					foreach( $evtags as $tags) {
						$evtag_html = $evtag_html.'<option value="'.$tags->slug.'">'.$tags->name.'</option>';
					} 
				}
			?>
				<div class="ps-form-row">
					<label><?php _e('Select Slider Scope','placid-slider'); ?></label>
					<select name="eventm_slider_scope" id="eventm_slider_preview" class="ps-form-input" >
						<option value="future" ><?php _e('Future Events','placid-slider'); ?></option>
						<option value="past" ><?php _e('Past Events','placid-slider'); ?></option>
						<option value="all" ><?php _e('Recent Events','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row">
					<label><?php _e('Select Category','placid-slider'); ?></label>
					<select id="placid_slider_event_catslug" name="eman-catg[]" multiple class="ps-form-input" ><?php echo $eventcat_html;?></select>
				</div>
				<div class="ps-form-row">
					<label><?php _e('Select Tags','placid-slider'); ?></label>
					<select id="placid_slider_event_tags" name="eman-tags[]" multiple class="ps-form-input" ><?php echo $evtag_html;?></select>
				</div>
				
			<?php }  elseif($slider_type == 6 ) { 
				if( is_plugin_active('the-events-calendar/the-events-calendar.php') ) { 
					$eventcalterms = get_terms('tribe_events_cat');
					$eventcal_html='<option value="" selected >All Category</option>';
					foreach( $eventcalterms as $eventcalcat) {
						if( isset($param_array['ecal-catg']) && $ecalcategory->slug==$param_array['ecal-catg']){$selected = 'selected';} else{$selected='';}
						$eventcal_html =$eventcal_html.'<option value="'.$eventcalcat->slug.'" '.$selected.'>'.$eventcalcat->name.'</option>';
					}
					$evcaltags = get_terms("post_tag");
					$evcaltag_html='<option value="" selected >All Tags</option>';
					foreach( $evcaltags as $tags) {
						$evcaltag_html = $evcaltag_html.'<option value="'.$tags->slug.'">'.$tags->name.'</option>';
					} 
				}
			?>
				<div class="ps-form-row">
					<label><?php _e('Select Slider Type','placid-slider'); ?></label>
					<select name="eventcal_slider_type" id="eventcal_slider_preview" class="ps-form-input" >
						<option value="upcoming" ><?php _e('Future Events','placid-slider'); ?></option>
						<option value="past" ><?php _e('Past Events','placid-slider'); ?></option>
						<option value="all" ><?php _e('Recent Events','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row">
					<label><?php _e('Select Category','placid-slider'); ?></label>
					<select id="placid_slider_eventcal_catslug" name="ecal-catg[]" multiple class="ps-form-input" ><?php echo $eventcal_html;?></select>
				</div>
				<div class="ps-form-row">
					<label><?php _e('Select Tags','placid-slider'); ?></label>
					<select id="placid_slider_eventcal_tags" name="ecal-tags[]" multiple class="ps-form-input" ><?php echo $evcaltag_html;?></select>
				</div>
				
			<?php } elseif($slider_type == 7) { 
				$post_types = get_post_types(); 
				$taxonomy_names = get_object_taxonomies( 'post' );
				// Taxonomy Slider Params  
			?>
				<div class="ps-form-row">
					<label><?php _e('Post Type','placid-slider'); ?></label>
					<select name="taxo_posttype" id="placid_taxonomy_posttype" class="ps-form-input" >
					<?php foreach ( $post_types as $cpost_type ) { 
						echo '<option value="'.$cpost_type.'" >' . $cpost_type . '</option>';
					} ?>
					</select>
				</div>
				<div class="ps-form-row  sh-taxo">
					<label><?php _e('Taxonomy','placid-slider'); ?></label>
					<select name="taxonomy_name" id="placid_taxonomy" class="ps-form-input" >
						<option value="" >Select Taxonomy </option>
					<?php foreach ( $taxonomy_names as $taxonomy_name ) { 
						echo '<option value="'.$taxonomy_name.'" >' . $taxonomy_name . '</option>';
					} ?>
					</select>
				</div>
				<div class="ps-form-row sh-term" style="display:none;">
				</div>
				<div class="ps-form-row">
					<label><?php _e('Show','placid-slider'); ?></label>
					<select name="taxonomy_show" id="placid_taxonomy_show" class="ps-form-input" >
						<option value="" ><?php _e('Default','placid-slider'); ?></option>
						<option value="per_tax" ><?php _e('One Per Tax','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row">
					<label><?php _e('Operator','placid-slider'); ?></label>
					<select name="taxonomy_operator" id="placid_taxonomy_operator" class="ps-form-input" >
						<option value="IN" ><?php _e('IN','placid-slider'); ?></option>
						<option value="NOT IN" ><?php _e('NOT IN','placid-slider'); ?></option>
						<option value="AND" ><?php _e('AND','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row">
					<label><?php _e('Author','placid-slider'); ?></label>
					<select name="taxonomy_author[]" id="placid_taxonomy_author" class="ps-form-input" multiple >
					<?php 
						$blogusers = get_users();						
						// Array of WP_User objects.
						foreach ( $blogusers as $user ) {
							echo '<option value="'.$user->ID.'" >' . $user->user_nicename . '</option>';
						}
					?>
					</select>
				</div>
			<?php } elseif($slider_type == 8) { ?>
				<div class="ps-form-row">
					<label><?php _e('Feedurl','placid-slider'); ?></label>
					<input type="text" name="rssfeedurl" id="placid_rssfeed_feedurl" placeholder="http://mashable.com/feed/" class="ps-form-input large" /> 
				</div>
	
				<div class="ps-form-row">
					<label><?php _e('RSS Slider Id','placid-slider'); ?></label>
					<input type="number" name="rssfeedid" id="placid_rssfeed_id" class="ps-form-input small" /> 
				</div>

				<div class="ps-form-row">
					<label><?php _e('Default image','placid-slider'); ?></label>
					<input type="text" name="rssfeedimg" id="placid_rssfeed_defimage" placeholder="<?php echo placid_slider_plugin_url('/images/default_image.png');?>" class="ps-form-input large" /> 
				</div>

				<div class="ps-form-row">
					<label><?php _e('Image Class','placid-slider'); ?></label>
					<input type="text" name="rss-image-class" id="placid_rssfeed_image_class" class="ps-form-input" /> 
				</div>

				<div class="ps-form-row">
					<label><?php _e('Source','placid-slider'); ?></label>
					<select name="rssfeed-src" id="placid_rssfeed_src" class="ps-form-input rss-source">
						<option value=""><?php _e('Other','placid-slider');?></option>
						<option value="smugmug"><?php _e('Smugmug','placid-slider');?></option>
					</select>
				</div>

				<div class="ps-form-row rss-feed">
					<label><?php _e('Feed','placid-slider'); ?></label>
					<select name="feed" id="placid_rssfeed_feed" class="ps-form-input">
						<option value=""><?php _e('Other','placid-slider');?></option>
						<option value="atom"><?php _e('Atom','placid-slider');?></option>
					</select>
				</div>

				<div class="ps-form-row rss-size" style="display:none;">
					<label><?php _e('Size','placid-slider'); ?></label>
					<select name="rss-size" id="placid_rssfeed_size" class="ps-form-input">
						<option value="Ti"><?php _e('Tiny thumbnails','placid-slider');?></option>
						<option value="Th"><?php _e('Large thumbnails','placid-slider');?></option>
						<option value="S"><?php _e('Small','placid-slider');?></option>
						<option value="M"><?php _e('Medium','placid-slider');?></option>
						<option value="L"><?php _e('Other','placid-slider');?></option>
						<option value="XL"><?php _e('Large','placid-slider');?></option>
						<option value="X2"><?php _e('X2Large','placid-slider');?></option>
						<option value="X3"><?php _e('X3Large','placid-slider');?></option>
						<option value="O"><?php _e('Original','placid-slider');?></option>
					</select>
				</div>
				
				<div class="ps-form-row">
					<label><?php _e('Scan child node content for images','placid-slider'); ?></label>
					<input type="checkbox" name="rss-content" id="placid_rssfeed_content" class="ps-form-input" />
				</div>

			<?php } elseif($slider_type == 9) { ?>
				<div class="ps-form-row">
					<label><?php _e('Post Id','placid-slider'); ?></label>
					<input type="text" name="postattch-id" id="placid_postattch_id" class="ps-form-input" /> 
				</div>
			<?php } elseif($slider_type == 10) { 
				$galleriesOptions = get_placid_nextgen_galleries(); 	
			?>
				<div class="ps-form-row">
					<label><?php _e('Select Gallery','placid-slider'); ?></label>
					<select name="nextgen-id" id="placid_nextgen_galleryid" class="ps-form-input">
						<?php echo $galleriesOptions; ?>
					</select>
				</div>
				<div class="ps-form-row">
					<label><?php _e('Link','placid-slider'); ?></label>
					<input type="checkbox" name="nextgen-anchor" id="placid_nextgen_anchor" value="1" class="ps-form-input" />
				</div>
			<?php } elseif($slider_type == 11) { ?>
				<div class="ps-form-row">
					<label><?php _e('Playlist id','placid-slider'); ?></label>
					<input type="text" name="yt-playlist-id" id="yt-playlist-id" class="ps-form-input" />
				</div>
			<?php
			} elseif($slider_type == 12) { ?>
				<div class="ps-form-row">
					<label><?php _e('Term','placid-slider'); ?></label>
					<input type="text" name="yt-search-term" id="yt-search-term" class="ps-form-input" />
				</div>
			<?php
			} elseif($slider_type == 13) { ?>
				<div class="ps-form-row">
					<label><?php _e('Select type','placid-slider'); ?></label>
					<select name="vimeo-type" class="vimeo-type ps-form-input" >
						<option value="channel"><?php _e('Channel','placid-slider'); ?></option>
						<option value="album"><?php _e('Album','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row">
					<label id="vimeo-lb"><?php _e('Channel Name','placid-slider'); ?></label>
					<input type="text" name="vimeo-val" id="vimeo-val" class="ps-form-input" />
				</div>
			<?php
			} elseif($slider_type == 14) { ?>
				<div class="ps-form-row">
					<label><?php _e('Page Url','placid-slider'); ?></label>
					<input type="text" name="fb-pg-url" id="fb-pg-url" class="ps-form-input" />
					<input type='submit' name='cfb_connect' value="<?php _e('Connect','placid-slider'); ?>" class="btn_save cfb_connect" />
				</div>
				<div class="ps-form-row fb-albums">
			
				</div>
			<?php
			} elseif($slider_type == 15) { ?>
				<div class="ps-form-row">
					<label><?php _e('User Name','placid-slider'); ?></label>
					<input type="text" name="user-name" id="user-name" class="ps-form-input" />
				</div>
			<?php
			} elseif($slider_type == 16) { ?>
				<div class="ps-form-row">
					<label><?php _e('Select type','placid-slider'); ?></label>
					<select name="flickr-type" class="flickr-type ps-form-input" >
						<option value="user"><?php _e('User','placid-slider'); ?></option>
						<option value="album"><?php _e('Album','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row">
					<label id="flickr-lb"><?php _e('User ID','placid-slider'); ?></label>
					<input type="text" name="fl-id" id="fl-user-id" class="ps-form-input" />
				</div>
			<?php
			} elseif($slider_type == 18) { ?>
				<div class="ps-form-row">
					<label><?php _e('Select type','placid-slider'); ?></label>
					<select name="feature" class="feature ps-form-input" >
						<option value="popular"><?php _e('Popular','placid-slider'); ?></option>
						<option value="highest_rated" ><?php _e('Highest Rated','placid-slider'); ?></option>
						<option value="upcoming" ><?php _e('Upcoming','placid-slider'); ?></option>
						<option value="editors" ><?php _e('Editors','placid-slider'); ?></option>';
						<option value="fresh_today" ><?php _e('Fresh Today','placid-slider'); ?></option>
						<option value="fresh_yesterday" ><?php _e('Fresh Yesterday','placid-slider'); ?></option>
						<option value="fresh_week" ><?php _e('Fresh Week','placid-slider'); ?></option>
						<option value="user" ><?php _e('User','placid-slider'); ?></option>
						<option value="user_favorites"><?php _e('User favorites','placid-slider'); ?></option>
					</select>
				</div>
				<div class="ps-form-row pxuser" style="display:none;">
					<label class="ps-form-label"><?php _e('User Name','placid-slider'); ?></label>
					<input type='text' name='pxuser' value="" class="ps-form-input" />
				</div>
			<?php
			} ?>
			<input type="hidden" name="placid-slider-nonce" id="placid-slider-nonce" value="<?php echo wp_create_nonce( 'placid-slider-nonce' ); ?>" />
			<input type="button" name="step2-prev" value="<?php _e('Back','placid-slider'); ?>" class="ps-btn-back" >
			<input type="submit" name="step2-next" value="<?php _e('Next','placid-slider'); ?>" class="ps-btn-next" >
			<div style="clear:left;"></div>
			</form>
		</div>
	<?php
	} elseif(isset ($_POST['step2-next'])) {
		$slider_type = $_POST["slider-type"];
		$slider_name = $_POST["new_slider_name"];
		$offset = $_POST["offset"];
	?>
	<div class="ps-steps">
		<div class="ps-head">
			<span class="ps-step" ><?php _e('Step 3','placid-slider'); ?></span> <i class="fa fa-long-arrow-right"></i> <span class="ps-step-title"><?php _e('Select Skin','placid-slider'); ?></span>
		</div>
		<form method="post" name="ps-create-new-step3" id="ps-create-new-step3" class="ps-step3-form" >
			<div class="ps-col-row">
				<!-- <input type="radio" name="setting-type" value="old-set" > -->
				<a class="ps-old-set"><?php _e('Choose from already created setting sets','placid-slider'); ?></a>
				<div class="ps-old-settings" style="display:none;">
				<?php
				$scounter=get_option('placid_slider_scounter');
				for($i=1;$i<=$scounter;$i++){
					if ($i==1) { ?>
						<div class="ps-col-row" style="z-index:99;">
							<input type="radio" name="set" value="<?php echo $i; ?>" checked ><?php _e('Default Settings Set','placid-slider'); ?>
						</div>
				<?php }	else {
					  if($settings_set=get_option('placid_slider_options'.$i)){ ?>
						<div class="ps-col-row"  style="z-index:99;">
							<input type="radio" name="set" value="<?php echo $i; ?>" ><?php _e($settings_set['setname'].' (ID '.$i.')','placid-slider'); ?>
						</div>
						<?php
						}
					}
				}
				?>
				</div>
			</div>
		<div class="ps-col-row">
				<input type="radio" name="setting-type" value="new-set" checked ><?php _e('Create new setting set','placid-slider'); ?>
			</div>
			<div class="ps-select-skin">
				<?php 
				$logoslidertype = array('0','9','10','14','15','16','17','18');
				$slider_type = $_POST["slider-type"];
				$i = 0;
				$directory = PLACID_SLIDER_CSS_DIR;
				if ($handle = opendir($directory)) {
				 	while (false !== ($file = readdir($handle))) { 
						$sel = "";
				     		if($file != '.' and $file != '..' and $file!='sample') {
						$i++;
						if($i%2 == 0) $class=" margin"; else $class="";
						if ('default' == $file) $sel = "checked";
						if( $file=='default' || ($file=='logo' && in_array($slider_type,$logoslidertype))) {
						?>
					      		<div class="ps-skin-box<?php echo $class;?>">
								<img src="<?php echo placid_slider_plugin_url( 'images/'.$file.'.png' ); ?>" width="300" />
								<div class="ps-skin-content">
									<div class="ps-skin-title"><?php _e($file,'placid-slider'); ?></div>
									<div class="switch">
									    <input id="<?php echo $file;?>" class="cmn-toggle cmn-toggle-round" type="checkbox" value="<?php echo $file;?>" <?php echo $sel; ?> >
									    <label for="<?php echo $file;?>"></label>
									</div>
								</div>
							</div>
				 <?php 			}
				 		} 
					}
				    	closedir($handle);
				}
				?>
				<input type="hidden" name="skin" value="" class="skin" />
			</div>
			<input type="hidden" name="slider-type" value="<?php echo $slider_type;?>" /> 
			<input type="hidden" name="new_slider_name" value="<?php echo $slider_name;?>" /> 
			<input type="hidden" name="offset" value="<?php echo $offset;?>" />
			<?php if($slider_type == 1) { 
				$catg_slug = $_POST['catg_slug'];
			?>
				<input type="hidden" name="catg_slug" value="<?php echo $catg_slug;?>" /> 
			<?php } elseif($slider_type == 3) { 
				$woo_slider_type = $_POST['woo_slider_type'];
				$woocatgslug = isset($_POST['woo-catg'])?implode(",",$_POST['woo-catg']):'';
				if($woo_slider_type != 'recent' && $woo_slider_type != 'external') {
					$pid = isset($_POST['product_id'])?$_POST['product_id']:'';
			?>
					<input type="hidden" name="product_id" value="<?php echo $pid;?>" /> 
				<?php } ?>
				<input type="hidden" name="woo-catg" value="<?php echo $woocatgslug;?>" /> 
				<input type="hidden" name="woo_slider_type" value="<?php echo $woo_slider_type;?>" /> 
			<?php } elseif($slider_type == 4 ) { 
				$ecom_slider_type = $_POST['ecom_slider_type'];
				if($ecom_slider_type == 1) { $ecomcatg = $_POST['ecom-catg'];
			?>
				<input type="hidden" name="ecom-catg" value="<?php echo $ecomcatg;?>" /> 
			<?php 	} ?>
				<input type="hidden" name="ecom_slider_type" value="<?php echo $ecom_slider_type;?>" /> 
			<?php } elseif($slider_type == 5 ) { 
				$eventm_slider_scope = $_POST['eventm_slider_scope'];
				$eventmancatg = isset($_POST['eman-catg'])?implode(",",$_POST['eman-catg']):'';
				$eventmantag = isset($_POST['eman-tags'])?implode(",",$_POST['eman-tags']):'';
			?>
				<input type="hidden" name="eman-catg" value="<?php echo $eventmancatg;?>" /> 
				<input type="hidden" name="eman-tags" value="<?php echo $eventmantag;?>" /> 
				<input type="hidden" name="eventm_slider_scope" value="<?php echo $eventm_slider_scope;?>" /> 
			<?php }  elseif($slider_type == 6 ) { 
				$eventcal_slider_type = $_POST['eventcal_slider_type'];
				$calcatgslug =  isset($_POST['ecal-catg'])?implode(",",$_POST['ecal-catg']):'';
				$ecaltag = isset($_POST['ecal-tags'])?implode(",",$_POST['ecal-tags']):'';
			?>
				<input type="hidden" name="ecal-catg" value="<?php echo $calcatgslug;?>" /> 
				<input type="hidden" name="ecal-tags" value="<?php echo $ecaltag;?>" /> 
				<input type="hidden" name="eventcal_slider_type" value="<?php echo $eventcal_slider_type;?>" /> 
			<?php } elseif($slider_type == 7) { 
				$taxo_posttype = $_POST['taxo_posttype'];
				$taxonomy_name = $_POST['taxonomy_name'];
				$taxonomy_term = isset($_POST['taxonomy_term'])?implode(",",$_POST['taxonomy_term']):'';
				$taxonomy_operator = $_POST['taxonomy_operator'];
				$taxonomy_author = isset($_POST['taxonomy_author'])?implode(",",$_POST['taxonomy_author']):'';
				$taxonomy_show = $_POST['taxonomy_show'];
			?>
				<input type="hidden" name="taxo_posttype" value="<?php echo $taxo_posttype;?>" /> 
				<input type="hidden" name="taxonomy_name" value="<?php echo $taxonomy_name;?>" /> 
				<input type="hidden" name="taxonomy_term" value="<?php echo $taxonomy_term;?>" /> 
				<input type="hidden" name="taxonomy_operator" value="<?php echo $taxonomy_operator;?>" /> 
				<input type="hidden" name="taxonomy_author" value="<?php echo $taxonomy_author;?>" /> 
				<input type="hidden" name="taxonomy_show" value="<?php echo $taxonomy_show;?>" /> 
			<?php } elseif($slider_type == 8) { 
				$rssfeedid = isset($_POST['rssfeedid'])?$_POST['rssfeedid']:'';
				$rssfeedurl = isset($_POST['rssfeedurl'])?$_POST['rssfeedurl']:'';
				$rssfeedimg = isset($_POST['rssfeedimg'])?$_POST['rssfeedimg']:'';
				$feed = isset($_POST['feed'])?$_POST['feed']:'';
				$rsscontent = isset($_POST['rss-content'])?$_POST['rss-content']:'';
				$rssfeedsrc = isset($_POST['rssfeed-src'])?$_POST['rssfeed-src']:'';
				$rsssize = isset($_POST['rss-size'])?$_POST['rss-size']:'';
				$rssimageclass = isset($_POST['rss-image-class'])?$_POST['rss-image-class']:'';
			?>
				<input type="hidden" name="rssfeedid" value="<?php echo $rssfeedid;?>" /> 
				<input type="hidden" name="rssfeedurl" value="<?php echo $rssfeedurl;?>" /> 
				<input type="hidden" name="rssfeedimg" value="<?php echo $rssfeedimg;?>" /> 
				<input type="hidden" name="feed" value="<?php echo $feed;?>" /> 
				<input type="hidden" name="rss-content" value="<?php echo $rsscontent;?>" /> 
				<input type="hidden" name="rssfeed-src" value="<?php echo $rssfeedsrc;?>" /> 
				<input type="hidden" name="rss-size" value="<?php echo $rsssize;?>" /> 
				<input type="hidden" name="rss-image-class" value="<?php echo $rssimageclass;?>" /> 
			<?php } elseif($slider_type == 9) { 
				$postattchid = $_POST['postattch-id'];
			?>
				<input type="hidden" name="postattch-id" value="<?php echo $postattchid;?>" /> 
			<?php } elseif($slider_type == 10) { 
				$nextgenid = $_POST['nextgen-id'];
				$nextgenanchor = isset($_POST['nextgen-anchor'])?$_POST['nextgen-anchor']:'';
			?>
				<input type="hidden" name="nextgen-id" value="<?php echo $nextgenid;?>" /> 
				<input type="hidden" name="nextgen-anchor" value="<?php echo $nextgenanchor;?>" /> 
			<?php } elseif($slider_type == 11) { 
				$playlistid = $_POST['yt-playlist-id'];
			?>
				<input type="hidden" name="yt-playlist-id" value="<?php echo $playlistid;?>" /> 
			<?php } elseif($slider_type == 12) { 
				$searchterm = $_POST['yt-search-term'];
			?>
				<input type="hidden" name="yt-search-term" value="<?php echo $searchterm;?>" /> 
			<?php } elseif($slider_type == 13) { 
				$vimeotype = $_POST['vimeo-type'];
				$vimeoval = $_POST['vimeo-val'];
			?>
				<input type="hidden" name="vimeo-type" value="<?php echo $vimeotype;?>" /> 
				<input type="hidden" name="vimeo-val" value="<?php echo $vimeoval;?>" /> 
			<?php } elseif($slider_type == 14) { 
				$fbpage = $_POST['fb-pg-url'];
				$fbalbum = $_POST['fb-album'];
			?>
				<input type="hidden" name="fb-pg-url" value="<?php echo $fbpage;?>" /> 
				<input type="hidden" name="fb-album" value="<?php echo $fbalbum;?>" /> 
			<?php } elseif($slider_type == 15) { 
				$username = $_POST['user-name'];
			?>
				<input type="hidden" name="user-name" value="<?php echo $username;?>" /> 
			<?php } elseif($slider_type == 16) { 
				$flickrtype = $_POST['flickr-type'];
				$flickrid = $_POST['fl-id'];
			?>
				<input type="hidden" name="flickr-type" value="<?php echo $flickrtype;?>" /> 
				<input type="hidden" name="fl-id" value="<?php echo $flickrid;?>" /> 
			<?php } elseif($slider_type == 18) { 
				$feature = $_POST['feature'];
				if( $feature == "user" ||  $feature == "user_favorites" ) {
					$pxuser = $_POST['pxuser'];
			?>
					<input type="hidden" name="pxuser" value="<?php echo $pxuser;?>" /> 		
				<?php } ?>
				<input type="hidden" name="feature" value="<?php echo $feature;?>" /> 
			<?php } ?>
			<input type="button" name="step2-prev" value="<?php _e('Back','placid-slider'); ?>" class="ps-btn-back no-margin" >
			<input type="submit" name="step3-create" value="<?php _e('Next','placid-slider'); ?>" class="ps-btn-next" style="display: none;">
			<input type="submit" name="step3-next" value="<?php _e('Next','placid-slider'); ?>" class="ps-btn-next">
			<div style="clear:left;"></div>
		</form>	
	</div>
	<?php 
	} elseif(isset ($_POST['step3-next'])) { 
		$skin = $_POST['skin'];
		$slider_type = $_POST["slider-type"];
		$slider_name = $_POST["new_slider_name"];
		$offset = $_POST["offset"];
		$settype = $_POST['setting-type'];
		?>
	<div class="ps-steps">
		<div class="ps-head">
			<span class="ps-step" ><?php _e('Step 4','placid-slider'); ?></span> <i class="fa fa-long-arrow-right"></i> <span class="ps-step-title"><?php _e('Choose Layout','placid-slider'); ?></span>
		</div>
		<form method="post" name="ps-create-new-step4" id="ps-create-new-step4" class="ps-step4-form" >
			<div class="ps-col-selected">
				<input type="radio" name="skin" value="<?php echo $skin;?>" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e($skin,'placid-slider'); ?></span>
			</div>
			<div class="ps-select-layout">
			
			<?php if($skin=='default') { ?>
				<div class="ps-layout-box">
					<input type="radio" name="ps-layout" class="ps-layout-radio" value="right_nav" checked ><img src="<?php echo placid_slider_plugin_url( 'images/def_layout.png' ); ?>" width="300" class="ps-layout-img" />
					<div class="ps-layout-content">
						<div class="ps-layout-title"><?php _e('Default','placid-slider'); ?></div>
					</div>
				</div>
				
			<?php } ?>
			
			<?php if($skin=='logo') { ?>
				<div class="ps-layout-box">
					<input type="radio" name="ps-layout" class="ps-layout-radio" value="right_nav" checked ><img src="<?php echo placid_slider_plugin_url( 'images/logo_layout.png' ); ?>" width="300" class="ps-layout-img" />
					<div class="ps-layout-content">
						<div class="ps-layout-title"><?php _e('Default','placid-slider'); ?></div>
					</div>
				</div>
			<?php } ?>
			
				<div class="ps-layout-box margin">
					<input type="radio" name="ps-layout" value="with_nav" class="ps-layout-radio" ><img src="<?php echo placid_slider_plugin_url( 'images/with_nav.png' ); ?>" width="300" class="ps-layout-img" />
					<div class="ps-layout-content">
						<div class="ps-layout-title"><?php _e('With Navigation','placid-slider'); ?></div>
					</div>
				</div>
				<div class="ps-layout-box">
					<input type="radio" name="ps-layout" class="ps-layout-radio" value="ver_slide" ><img src="<?php echo placid_slider_plugin_url( 'images/vetical_slide.png' ); ?>" width="300" class="ps-layout-img" />
					<div class="ps-layout-content">
						<div class="ps-layout-title"><?php _e('Vertical Slide','placid-slider'); ?></div>
					</div>
				</div>
				<div class="ps-layout-box margin">
					<input type="radio" name="ps-layout" class="ps-layout-radio" value="reverse-dir" ><img src="<?php echo placid_slider_plugin_url( 'images/reverse_direction.png' ); ?>" width="300" class="ps-layout-img" />
					<div class="ps-layout-content">
						<div class="ps-layout-title"><?php _e('Reverse Direction','placid-slider'); ?></div>
					</div>
				</div>
				<div class="ps-layout-box">
					<input type="radio" name="ps-layout" class="ps-layout-radio" value="grayscale_effect" ><img src="<?php echo placid_slider_plugin_url( 'images/grayscale.png' ); ?>" width="300" class="ps-layout-img" />
					<div class="ps-layout-content">
						<div class="ps-layout-title"><?php _e('Grayscale','placid-slider'); ?></div>
					</div>
				</div>
			<?php if($skin=='default') { ?>
				<div class="ps-layout-box margin">
					<input type="radio" name="ps-layout" class="ps-layout-radio" value="pure_image" ><img src="<?php echo placid_slider_plugin_url( 'images/img_only.png' ); ?>" width="300" class="ps-layout-img" />
					<div class="ps-layout-content">
						<div class="ps-layout-title"><?php _e('Pure Image Slider','placid-slider'); ?></div>
					</div>
				</div>
			<?php } ?>
			</div>
			<input type="hidden" name="slider-type" value="<?php echo $slider_type;?>" /> 
			<input type="hidden" name="new_slider_name" id="new_slider_name" value="<?php echo $slider_name;?>" /> 
			<input type="hidden" name="offset" value="<?php echo $offset;?>" />
			<?php if($slider_type == 1) { 
				$catg_slug = $_POST['catg_slug'];
			?>
				<input type="hidden" name="catg_slug" value="<?php echo $catg_slug;?>" /> 
			<?php } elseif($slider_type == 3) { 
				$woo_slider_type = $_POST['woo_slider_type'];
				$woocatgslug = $_POST['woo-catg'];
				if($woo_slider_type != 'recent' && $woo_slider_type != 'external') {
					$pid = isset($_POST['product_id'])?$_POST['product_id']:'';
				?>
					<input type="hidden" name="product_id" value="<?php echo $pid;?>" /> 
				<?php } ?>
				<input type="hidden" name="woo-catg" value="<?php echo $woocatgslug;?>" /> 
				<input type="hidden" name="woo_slider_type" value="<?php echo $woo_slider_type;?>" />
			<?php } elseif($slider_type == 4 ) { 
				$ecom_slider_type = $_POST['ecom_slider_type'];
				if($ecom_slider_type == 1) { $ecomcatg = $_POST['ecom-catg'];
			?>
				<input type="hidden" name="ecom-catg" value="<?php echo $ecomcatg;?>" /> 
			<?php 	} ?>
				<input type="hidden" name="ecom_slider_type" value="<?php echo $ecom_slider_type;?>" /> 
			<?php } elseif($slider_type == 5 ) { 
				$eventm_slider_scope = $_POST['eventm_slider_scope'];
				$eventmancatg = isset($_POST['eman-catg'])?$_POST['eman-catg']:'';
				$eventmantag = isset($_POST['eman-tags'])?$_POST['eman-tags']:'';
			?>
				<input type="hidden" name="eman-catg" value="<?php echo $eventmancatg;?>" /> 
				<input type="hidden" name="eman-tags" value="<?php echo $eventmantag;?>" /> 
				<input type="hidden" name="eventm_slider_scope" value="<?php echo $eventm_slider_scope;?>" /> 
			<?php } elseif($slider_type == 6 ) { 
				$eventcal_slider_type = $_POST['eventcal_slider_type'];
				$calcatgslug =  isset($_POST['ecal-catg'])?$_POST['ecal-catg']:'';
				$ecaltag = isset($_POST['ecal-tags'])?$_POST['ecal-tags']:'';
			?>
				<input type="hidden" name="ecal-catg" value="<?php echo $calcatgslug;?>" /> 
				<input type="hidden" name="ecal-tags" value="<?php echo $ecaltag;?>" /> 
				<input type="hidden" name="eventcal_slider_type" value="<?php echo $eventcal_slider_type;?>" /> 
			<?php } elseif($slider_type == 7) { 
				$taxo_posttype = $_POST['taxo_posttype'];
				$taxonomy_name = $_POST['taxonomy_name'];
				$taxonomy_term = $_POST['taxonomy_term'];
				$taxonomy_operator = $_POST['taxonomy_operator'];
				$taxonomy_author = $_POST['taxonomy_author'];
				$taxonomy_show = $_POST['taxonomy_show'];
			?>
				<input type="hidden" name="taxo_posttype" value="<?php echo $taxo_posttype;?>" /> 
				<input type="hidden" name="taxonomy_name" value="<?php echo $taxonomy_name;?>" /> 
				<input type="hidden" name="taxonomy_term" value="<?php echo $taxonomy_term;?>" /> 
				<input type="hidden" name="taxonomy_operator" value="<?php echo $taxonomy_operator;?>" /> 
				<input type="hidden" name="taxonomy_author" value="<?php echo $taxonomy_author;?>" /> 
				<input type="hidden" name="taxonomy_show" value="<?php echo $taxonomy_show;?>" /> 
			<?php }  elseif($slider_type == 8) { 
				$rssfeedid = isset($_POST['rssfeedid'])?$_POST['rssfeedid']:'';
				$rssfeedurl = isset($_POST['rssfeedurl'])?$_POST['rssfeedurl']:'';
				$rssfeedimg = isset($_POST['rssfeedimg'])?$_POST['rssfeedimg']:'';
				$feed = isset($_POST['feed'])?$_POST['feed']:'';
				$rsscontent = isset($_POST['rss-content'])?$_POST['rss-content']:'';
				$rssfeedsrc = isset($_POST['rssfeed-src'])?$_POST['rssfeed-src']:'';
				$rsssize = isset($_POST['rss-size'])?$_POST['rss-size']:'';
				$rssimageclass = isset($_POST['rss-image-class'])?$_POST['rss-image-class']:'';
			?>
				<input type="hidden" name="rssfeedid" value="<?php echo $rssfeedid;?>" /> 
				<input type="hidden" name="rssfeedurl" value="<?php echo $rssfeedurl;?>" /> 
				<input type="hidden" name="rssfeedimg" value="<?php echo $rssfeedimg;?>" /> 
				<input type="hidden" name="feed" value="<?php echo $feed;?>" /> 
				<input type="hidden" name="rss-content" value="<?php echo $rsscontent;?>" /> 
				<input type="hidden" name="rssfeed-src" value="<?php echo $rssfeedsrc;?>" /> 
				<input type="hidden" name="rss-size" value="<?php echo $rsssize;?>" /> 
				<input type="hidden" name="rss-image-class" value="<?php echo $rssimageclass;?>" /> 
			<?php } elseif($slider_type == 9) { 
				$postattchid = $_POST['postattch-id'];
			?>
				<input type="hidden" name="postattch-id" value="<?php echo $postattchid;?>" /> 
			<?php }  elseif($slider_type == 10) { 
				$nextgenid = $_POST['nextgen-id'];
				$nextgenanchor = isset($_POST['nextgen-anchor'])?$_POST['nextgen-anchor']:'';
			?>
				<input type="hidden" name="nextgen-id" value="<?php echo $nextgenid;?>" /> 
				<input type="hidden" name="nextgen-anchor" value="<?php echo $nextgenanchor;?>" /> 
			<?php } elseif($slider_type == 11) { 
				$playlistid = $_POST['yt-playlist-id'];
			?>
				<input type="hidden" name="yt-playlist-id" value="<?php echo $playlistid;?>" /> 
			<?php } elseif($slider_type == 12) { 
				$searchterm = $_POST['yt-search-term'];
			?>
				<input type="hidden" name="yt-search-term" value="<?php echo $searchterm;?>" /> 
			<?php } elseif($slider_type == 13) { 
				$vimeotype = $_POST['vimeo-type'];
				$vimeoval = $_POST['vimeo-val'];
			?>
				<input type="hidden" name="vimeo-type" value="<?php echo $vimeotype;?>" /> 
				<input type="hidden" name="vimeo-val" value="<?php echo $vimeoval;?>" /> 
			<?php } elseif($slider_type == 14) { 
				$fbpage = $_POST['fb-pg-url'];
				$fbalbum = $_POST['fb-album'];
			?>
				<input type="hidden" name="fb-pg-url" value="<?php echo $fbpage;?>" /> 
				<input type="hidden" name="fb-album" value="<?php echo $fbalbum;?>" />
			<?php } elseif($slider_type == 15) { 
				$username = $_POST['user-name'];
			?>
				<input type="hidden" name="user-name" value="<?php echo $username;?>" /> 
			<?php } elseif($slider_type == 16) { 
				$flickrtype = $_POST['flickr-type'];
				$flickrid = $_POST['fl-id'];
			?>
				<input type="hidden" name="flickr-type" value="<?php echo $flickrtype;?>" /> 
				<input type="hidden" name="fl-id" value="<?php echo $flickrid;?>" /> 
			<?php } elseif($slider_type == 18) { 
				$feature = $_POST['feature'];
				if( $feature == "user" ||  $feature == "user_favorites" ) {
					$pxuser = $_POST['pxuser'];
			?>
					<input type="hidden" name="pxuser" value="<?php echo $pxuser;?>" /> 		
				<?php } ?>
				<input type="hidden" name="feature" value="<?php echo $feature;?>" /> 
			<?php } ?>
			<input type="button" name="step2-prev" value="<?php _e('Back','placid-slider'); ?>" class="ps-btn-back no-margin" >
			<input type="submit" name="step4-next" value="<?php _e('Next','placid-slider'); ?>" class="ps-btn-next" >
			<div style="clear:left;"></div>
		</form>
	</div>
	<?php } elseif(isset($_GET['id']) && $_GET['id'] != '') {
		wp_enqueue_script( 'media-uploader', placid_slider_plugin_url( 'js/media-uploader.js' ),array( 'jquery' ), PLACID_SLIDER_VER, false);
		$slider_id = $_GET['id'];
	 ?>
	<div class="ps-steps">
		<div class="ps-head">
			<span class="ps-step" ><?php _e('Step 5','placid-slider'); ?></span> <i class="fa fa-long-arrow-right"></i> <span class="ps-step-title"><?php _e('Upload Images','placid-slider'); ?></span>
		</div>
		<!-- image Slider start-->
			<div class="uploaded-images">
				<form method="post" class="addImgForm">
					<div style="clear:left;text-align: center;" class="image-uploader">
						<input type="submit" class="upload-button slider_images_upload ps-upload" name="slider_images_upload" value="Upload" />
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
		   // echo '<div>'.__( 'No posts/pages have been added to the Slider - You can add respective post/page to slider on the Edit screen for that Post/Page', 'placid-slider' ).'</div>';
		}
			
		echo '</div><div class="submit">';
		if ($count) { echo '<input type="submit" name="remove_selected" class="button-primary" value="'. __( 'Remove Selected', 'placid-slider' ).'" onclick="return confirmRemove()" /> <input type="submit" name="remove_all" class="button-primary" value="'. __( 'Remove All at Once', 'placid-slider' ).'" onclick="return confirmRemoveAll()" /><input type="submit" name="update_slides" class="btn_save" value="'. __( 'Save', 'placid-slider' ).'"  />';}
		echo '</div></form>';
	echo '</div>';
	
	} else {
	$gplacid_slider = get_option('placid_slider_global_options');
	// YouTube Slider Key Check
	$youtube_key = isset($gplacid_slider['youtube_app_id'])?$gplacid_slider['youtube_app_id']:'';
	// Facebook Slider Key Check
	$fbkey = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
	// Instagram Slider Key Check
	$igkey = isset($gplacid_slider['insta_client_id'])?$gplacid_slider['insta_client_id']:'';
	// Flickr Slider Key Check
	$flkey = isset($gplacid_slider['flickr_app_key'])?$gplacid_slider['flickr_app_key']:'';
	// 500px Slider Key Check
	$pxkey = isset($gplacid_slider['px_ckey'])?$gplacid_slider['px_ckey']:'';
?>
	<div class="ps-cn-wrap">
	<form method="post" name="ps-create-new" id="ps-create-new" >
		<div class="ps-head">
			<span class="ps-step" ><?php _e('Step 1','placid-slider'); ?></span> <i class="fa fa-long-arrow-right"></i> <span class="ps-step-title"><?php _e('Select Slider Type','placid-slider'); ?></span>
		</div>
		<div class="ps-col ps-vert-line">
			<div class="ps-col-head"><?php _e('WordPress Core','placid-slider'); ?></div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="2" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Recent Posts Slider','placid-slider'); ?></span>
			</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="1" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Category Slider','placid-slider'); ?></span>
			</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="0" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Custom Slider','placid-slider'); ?></span>
			</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="7" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Taxonomy Slider','placid-slider'); ?></span>
			</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="17" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Image Slider','placid-slider'); ?></span>
			</div>
			<div class="ps-col-head second"><?php _e('Social Network','placid-slider'); ?></div>
			<div class="ps-col-row">
				<?php if($fbkey == '') { $fbclass="class='no_key'"; } else { $fbclass=""; } ?>
				<input type="radio" name="slider_type" value="14" <?php echo $fbclass; ?> ><i class="fa fa-facebook-square"></i><span class="ps-icon-title"><?php _e('Facebook Album Slider','placid-slider'); ?></span>
				<?php if($fbkey == '') { ?> <i class="fa fa-lock" title="Please Add Facebook App ID and Secret in Global Settings"></i> <?php } ?>
			</div>
			<div class="ps-col-row">
				<?php if($igkey == '') { $igclass="class='no_key'"; } else { $igclass=""; } ?>
				<input type="radio" name="slider_type" value="15" <?php echo $igclass; ?> ><i class="fa fa-instagram"></i><span class="ps-icon-title"><?php _e('Instagram Slider','placid-slider'); ?></span>
				<?php if($igkey == '') { ?> <i class="fa fa-lock" title="Please Add Instagram Access Token in Global Settings"></i> <?php } ?>
			</div>
			<div class="ps-col-row">
				<?php if($flkey == '') { $flclass="class='no_key'"; } else { $flclass=""; } ?>
				<input type="radio" name="slider_type" value="16" <?php echo $flclass; ?> ><i class="fa fa-flickr"></i><span class="ps-icon-title"><?php _e('Flickr Slider','placid-slider'); ?></span>
				<?php if($flkey == '') { ?> <i class="fa fa-lock" title="Please Add Flickr API Key in Global Settings"></i> <?php } ?>
			</div>
			<div class="ps-col-row">
				<?php if($pxkey == '') { $pxclass="class='no_key'"; } else { $pxclass=""; } ?>
				<input type="radio" name="slider_type" value="18" <?php echo $pxclass; ?> ><img src="<?php echo placid_slider_plugin_url( 'images/500px.png' ); ?>" width="13" height="14" /><span class="ps-icon-title"><?php _e('500px Slider','placid-slider'); ?></span>
				<?php if($pxkey == '') { ?> <i class="fa fa-lock" title="Please Add 500px Consumer Key in Global Settings"></i> <?php } ?>
			</div>
			<div class="ps-col-head second"><?php _e('Videos','placid-slider'); ?></div>
			<div class="ps-col-row">
				<?php if($youtube_key == '') { $youtubeclass="class='no_key'"; } else { $youtubeclass=""; } ?>
				<input type="radio" name="slider_type" value="11" <?php echo $youtubeclass; ?> ><i class="fa fa-youtube"></i><span class="ps-icon-title"><?php _e('YouTube Playlist Slider','placid-slider'); ?> </span>
				<?php if($youtube_key == '') { ?> <i class="fa fa-lock" title="Please Add Youtube API Key in Global Settings"></i> <?php } ?>
			</div>
			<div class="ps-col-row">
				<?php if($youtube_key == '') { $youtubeclass="class='no_key'"; } else { $youtubeclass=""; } ?>
				<input type="radio" name="slider_type" value="12" <?php echo $youtubeclass; ?> ><i class="fa fa-youtube"></i><span class="ps-icon-title"><?php _e('YouTube Search Slider','placid-slider'); ?></span>
				<?php if($youtube_key == '') { ?> <i class="fa fa-lock" title="Please Add Youtube API Key in Global Settings"></i> <?php } ?>
			</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="13" ><i class="fa fa-vimeo-square"></i></span><span class="ps-icon-title"><?php _e('Vimeo Slider','placid-slider'); ?></span>
			</div>
	
		</div>
		<div class="ps-col">
			<?php if(is_plugin_active('nextgen-gallery/nggallery.php')) { 
			?>
			<div class="ps-col-head"><?php _e('Gallary Integration','placid-slider'); ?></div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="10" ><i class="fa fa-picture-o"></i><span class="ps-icon-title"><?php _e('NextGen Gallery Slider','placid-slider'); ?></span>
			</div>
			<?php } if(is_plugin_active('woocommerce/woocommerce.php') || is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) { ?>
			<div class="ps-col-head second"><?php _e('Ecommerce','placid-slider'); ?></div>
			
			<?php if(is_plugin_active('woocommerce/woocommerce.php') ) { 
			?>
				<div class="ps-col-row">
					<input type="radio" name="slider_type" value="3" ><i class="fa fa-shopping-cart"></i><span class="ps-icon-title"><?php _e('WooCommerce Slider','placid-slider'); ?></span>
				</div>
			
			<?php } if(is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) { 
				?>
				<div class="ps-col-row">
					<input type="radio" name="slider_type" value="4" ><i class="fa fa-shopping-cart"></i><span class="ps-icon-title"><?php _e('WP Ecommerce Slider','placid-slider'); ?></span>
				</div>
			<?php }
			} if(is_plugin_active('events-manager/events-manager.php') || is_plugin_active('the-events-calendar/the-events-calendar.php') ) { ?>
				<div class="ps-col-head second"><?php _e('Events','placid-slider'); ?></div>
			
				<?php if(is_plugin_active('events-manager/events-manager.php') ) { 
				?>
				<div class="ps-col-row">
					<input type="radio" name="slider_type" value="5" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Event Manager','placid-slider'); ?></span>
				</div>
			
				<?php } if(is_plugin_active('the-events-calendar/the-events-calendar.php') ) { 
				?>
				<div class="ps-col-row">
					<input type="radio" name="slider_type" value="6" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Event Calendar','placid-slider'); ?></span>
				</div>
			<?php }
			} ?>
			<div class="ps-col-head second"><?php _e('Miscellaneous','placid-slider'); ?></div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="9" ><i class="fa fa-align-justify"></i><span class="ps-icon-title"><?php _e('Post Attachments Slider','placid-slider'); ?></span>
			</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" value="8" ><i class="fa fa-rss-square"></i><span class="ps-icon-title"><?php _e('RSS feed Slider','placid-slider'); ?></span>
			</div>
		</div>
	</form>
	<div style="clear:left;"></div>
	</div>
<?php
	}
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("input[name='setting-type']").click(function() {
			if(jQuery(this).val() == "new-set") {
				jQuery(".ps-select-skin").css({"display":"block"});
				jQuery("input[name='step3-create']").css({"display":"none"});
				jQuery("input[name='step3-next']").css({"display":"block"});
				jQuery(".ps-old-settings").slideUp("slow");
			}
			else {
				jQuery(".ps-select-skin").css({"display":"none"});
			}
		});
		jQuery(".cmn-toggle-round").click(function() {
			jQuery(".cmn-toggle-round").not(jQuery(this)).prop("checked",false);
			if(jQuery(this).prop("checked") == true ) {
				var skin = jQuery(this).val();
				jQuery("#ps-create-new-step3").find(".skin").val(skin);
			}
		});
		jQuery(".ps-old-set").click(function() {
			jQuery("input[name='setting-type']").prop("checked",false);
			jQuery(".ps-select-skin").css({"display":"none"});
			jQuery(".ps-old-settings").slideDown("slow");
			jQuery("input[name='step3-create']").css({"display":"block"});
			jQuery("input[name='step3-next']").css({"display":"none"});
		});
		if(jQuery(".cmn-toggle-round").prop("checked") == true ) {
			var skin = jQuery(".cmn-toggle-round").val();
			jQuery("#ps-create-new-step3").find(".skin").val(skin);
		}
		jQuery(".ps-btn-back").click(function() {
			history.go(-1);
		});
		/*jQuery(".cfb_connect").click(function() {
			var limg = "<?php echo admin_url('images/loading.gif');?>"; 
			jQuery(".fb-albums").append('<div class="ps-loader" style="background: url('+limg+') 50% 50% ;background-repeat: no-repeat;width: 100px;height: 20px;margin: 15px auto;"></div>');
			var data = {};
			data['page_url'] = jQuery("#fb-pg-url").val();
			data['action'] = 'placid_shfb_album'; // function on easy builder
			data['page'] = 'create_new';
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".fb-albums").find(".ps-loader").remove();
				jQuery(".fb-albums").html(response);
			});
			return false;
		});*/
		jQuery(".feature").change(function() {
			if(jQuery(this).val() == 'user' || jQuery(this).val() == 'user_favorites' ) {
				jQuery(".pxuser").slideDown();
			} else {
				jQuery(".pxuser").slideUp( "slow" );
			}
		});
		/* To uncheck the radio on load */
		jQuery("#ps-create-new").find("input[type='radio']").prop("checked",false);
	});
	</script>
<?php
}
?>
