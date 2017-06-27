<?php
if ( is_admin() ) {
	/*
	* ----------------------------------------------------------------------
	*	Easy Builder Functions for Custom Slider and update slider type
	* ----------------------------------------------------------------------
	*/
	add_action( 'wp_ajax_placid_add_form', 'placid_add_form' );
	add_action( 'wp_ajax_placid_show_posts', 'placid_show_posts' );
	add_action( 'wp_ajax_placid_add_video','placid_add_video' );
	add_action( 'wp_ajax_placid_show_px','placid_show_px' );
	add_action( 'wp_ajax_placid_show_fb','placid_show_fb' );
	add_action( 'wp_ajax_placid_show_flickr','placid_show_flickr' );
	add_action( 'wp_ajax_placid_show_it','placid_show_it' );
	add_action( 'wp_ajax_placid_fip_insert','placid_fip_insert' );
	add_action( 'wp_ajax_placid_insert_video','placid_insert_video' );
	add_action( 'wp_ajax_placid_show_post_type','placid_show_post_type');
	add_action( 'wp_ajax_placid_insert_posts', 'placid_insert_posts' );
	add_action( 'wp_ajax_placid_insert_slide', 'placid_insert_slide' );
	add_action( 'wp_ajax_placid_shfb_album','placid_shfb_album' );
	add_action( 'wp_ajax_placid_slider_preview','placid_slider_preview' );
	add_action( 'wp_ajax_placid_insert_media','placid_insert_media' );
	add_action( 'wp_ajax_placid_delete_slide','placid_delete_slide' );
	// update slider type
	add_action( 'wp_ajax_placid_update_slider_type', 'placid_updt_sldr_type');
	add_action( 'wp_ajax_placid_change_type', 'placid_change_type');
	add_action( 'wp_ajax_placid_show_params', 'placid_show_params');
	//Easy Bulder Settings 
	add_action( 'wp_ajax_placid_eb_settings', 'placid_eb_settings');
	/*
	* -----------------------------------------------------------------
	*	Create new slider Functions 
	* -----------------------------------------------------------------
	*/
	add_action( 'wp_ajax_placid_show_taxonomy','placid_show_taxonomy' );
	add_action( 'wp_ajax_placid_show_term','placid_show_term' );
	add_action( 'wp_ajax_placid_woo_product','placid_woo_product');
	/*
	* -----------------------------------------------------------------
	*	Google fonts Functions 
	* -----------------------------------------------------------------
	*/
	add_action('wp_ajax_placid_disp_gfweight','placid_google_font_weight');
	add_action('wp_ajax_placid_load_fontsdiv','placid_load_fontsdiv_callback');
	/*
	* -----------------------------------------------------------------
	*	Settings Set preview Params
	* -----------------------------------------------------------------
	*/
	add_action( 'wp_ajax_placid_preview_params','placid_preview_params' );
	add_action( 'wp_ajax_placid_tab_contents','placid_tab_contents' );
}
/*
* -----------------------------------------------------------------
*	Easy Builder Functions for Custom Slider
* -----------------------------------------------------------------
*/
function placid_insert_media() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
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
		update_post_meta($id, '_placid_slide_type', '1');
		if(!placid_slider($id,$slider_id)) {
				$dt = date('Y-m-d H:i:s');
				$sql = "INSERT INTO ".$table_prefix.PLACID_SLIDER_TABLE." (post_id, date, slider_id) VALUES ('$id', '$dt', '$slider_id')";
				$wpdb->query($sql);
		}
	}
	die();
}
function placid_slider_preview() {
	check_ajax_referer( 'placid-preview-nonce', 'preview_html' );
	global $wpdb,$table_prefix;
	$slider_meta = $table_prefix.PLACID_SLIDER_META;
	if(isset($_POST['slider_id']) ) { 
		$slider_id = $_POST['slider_id'];
		$sql = "SELECT * FROM $slider_meta WHERE slider_id=$slider_id";
		$result = $wpdb->get_row($sql);
		$param_array = unserialize($result->param);
		$sliderset = $result->setid;
	}
	$html = '<div class="eb-preview-title">'.__('Live Preview','placid-slider').'</div>';
	$offset = isset($param_array['offset'])?$param_array['offset']:'0';
	$scounter = isset($result->setid)?$result->setid :'';
	if($scounter == 1 ) $scounter = '';
	if( isset($_POST['slider_id']) && $_POST['slider_id'] != "" && $_POST['slider_id']!='0') {
		$html .= return_placid_slider($_POST['slider_id'],$scounter,$offset);
	}
	$html .='placidSplit';
	/* Thumbs Code */
	$slider_id = isset($_POST['slider_id'])?$_POST['slider_id']:'';
	$slider_posts=placid_get_slider_posts_in_order($slider_id);
	$count = 0;
	if(isset($sliderset) && $sliderset != '1' ) $cntr = $sliderset; else $cntr = '';
	$placid_slider_options='placid_slider_options'.$cntr;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	foreach($slider_posts as $slider_post) {
		$icon = '';
		$slider_arr[] = $slider_post->post_id;
		$post = get_post($slider_post->post_id);	  
		if(isset($post) and isset($slider_arr)){
			if ( in_array($post->ID, $slider_arr) ) {
				$count++;
				/*---------- Image Fetch Start ---------*/
				 $post_id = $post->ID;
				$placid_media = get_post_meta($post_id,'placid_media',true);
				if($placid_slider_curr['img_pick'][0] == '1'){
				 $custom_key = array($placid_slider_curr['img_pick'][1]);
				}
				else {
				 $custom_key = '';
				}
		
				if($placid_slider_curr['img_pick'][2] == '1'){
				 $the_post_thumbnail = true;
				}
				else {
				 $the_post_thumbnail = false;
				}
		
				if($placid_slider_curr['img_pick'][3] == '1'){
				 $attachment = true;
				 $order_of_image = $placid_slider_curr['img_pick'][4];
				}
				else{
				 $attachment = false;
				 $order_of_image = '1';
				}
		
				if($placid_slider_curr['img_pick'][5] == '1'){
					 $image_scan = true;
				}
				else {
					 $image_scan = false;
				}

				$extract_size = 'thumbnail';
				 
				$default_image=(isset($placid_slider_curr['default_image']))?($placid_slider_curr['default_image']):('false');
				$image_title_text=(isset($placid_slider_curr['image_title_text']))?($placid_slider_curr['image_title_text']):('0');
				$img_args = array(
					'custom_key' => $custom_key,
					'post_id' => $post_id,
					'attachment' => $attachment,
					'size' => $extract_size,
					'the_post_thumbnail' => $the_post_thumbnail,
					'default_image' => $default_image,
					'order_of_image' => $order_of_image,
					'link_to_post' => false,
					'image_class' => 'placid_slider_thumbnail',
					'image_scan' => $image_scan,
					'width' => '100',
					'height' => '90',
					'echo' => false,
					'permalink' => '',
					'a_attr'=> ''	,
					'a_attr_lbox'=> '',
					'image_title_text'=>$image_title_text
				);
				$navigation_image=placid_sslider_get_the_image($img_args);
				/*------------ Image Fetch End -----------*/
				$sslider_author = get_userdata($post->post_author);
				$sslider_author_dname = $sslider_author->display_name;
				$desc = $post->post_content;
				//$delurl = admin_url("admin.php?page=placid-slider-easy-builder&id=$slider_id&del=$post->ID");
				$placid_sslider_link = get_post_meta($post_id,'_placid_slide_redirect_url',true);
				$stype = get_post_meta($post_id,'_placid_slide_type',true);
				if($stype == 1 ) { $icon = '<div class="cs-icon"><i class="fa fa-file-word-o"></i></div>'; }
				if($stype == 5 ) { $icon = '<div class="cs-icon"><i class="fa fa-facebook"></i></div>'; }
				if($stype == 6 ) { $icon = '<div class="cs-icon"><i class="fa fa-flickr"></i></div>'; }
				if($stype == 7 ) { $icon = '<div class="cs-icon"><i class="fa fa-instagram"></i></div>'; }
				if($stype == 8 ) { $icon = '<div class="cs-icon"><i class="fa fa-youtube"></i></div>'; }
				if($stype == 9 ) { $icon = '<div class="cs-icon"><i class="fa fa-vimeo-square"></i></div>'; }
				if($stype == 10 ) { $icon = '<div class="cs-icon"><img src="'.placid_slider_plugin_url( 'images/500px.png' ).'" width="13" height="14" style="vertical-align: middle;" /></div>'; }
			 	//$html .= '<div id="'.$post->ID.'" class="ps-reorder"><input type="hidden" name="order[]" value="'.$post->ID.'" />'.$icon.'<div style="margin: 0 auto;">'.$navigation_image;
			 	
			 	$html .= '<div id="'.$post->ID.'" class="ps-reorder">
			 	<div class="cs-ptitle"><strong class="cs-post-title"> ' . $post->post_title . '</strong></div>
			 	<input type="hidden" name="order[]" value="'.$post->ID.'" />'.$icon.'<div>'.$navigation_image;
			 	
				if($post->post_type == "slidervilla")
					$html .= '<span class="editSlide"></span>';
				else 
					$html .= '<a href="'. get_edit_post_link( $post->ID ).'" target="_blank"><span class="editcore"></span></a>';
					$html .= '<a href="" onclick="return confirmDelete()" >
					<span class="delSlide" id="'.$post_id.'" ></span></a>';
				if($post->post_type == "slidervilla") {
					$edtlink = get_edit_post_link($post->ID);
					$html .= '<div class="placid_slideDetails" style="display: none;">
						<div class="fL">
							<span class="imgTitle">
								<input placeholder="Title" title="Enter Image Title" type="text" name="title'.$post_id.'" value="'.$post->post_title.'" />
							</span>
							<span class="imgDesc">
								<textarea placeholder="Description" title="Enter Image Description" rows=3 name="desc'.$post_id.'">'.$desc.'</textarea>
							</span>
						</div>
						<div class="fR">
							<span class="imgLink">
								<input type="text" placeholder="Link to" value="'.$placid_sslider_link.'" name="link'.$post_id.'" />
							</span>
							<a href="'.esc_attr($edtlink).'" target="_blank">'.__('Open Edit Window','placid-slider').'</a>
						</div> 
					</div>';
				}
				$wpDateFormat = get_option('date_format');
				$publish_dt = date($wpDateFormat, strtotime($post->post_date));
				$html .= '</div>
					<div class="cs-ptitle-closed" ><strong class="cs-post-title"> ' . $post->post_title . '</strong></div>
					<div class="cs-pdt">'.$publish_dt.'</div>
				</div>'; 
				
			}
		}
	}
	    
	if ($count == 0) {
	    $html .= '<div>'.__( 'No posts/pages have been added to the Slider - You can add respective post/page to slider on the Edit screen for that Post/Page', 'placid-slider' ).'</div>';
	}
	$html .= '<input type="hidden" name="slider_posts" />';
	if ($count) { $html .= '<input type="submit" name="update_slides" class="btn_save nt-img" value="Save" style="clear: left;" />';}
	echo $html;
	die();
}
function placid_shfb_album(){
	check_ajax_referer( 'placid-slider-nonce', 'placid_slider_pg' );
	$page_url = isset($_POST['page_url']) ? $_POST['page_url'] : '';
	$page = isset($_POST['page']) ? $_POST['page'] : '';
	$html = '';
	if($page_url != '') { 
		$gplacid_slider = get_option('placid_slider_global_options');
		// Facebook Slider Key
		$fbkey = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
		$secret = isset($gplacid_slider['fb_secret'])?$gplacid_slider['fb_secret']:'';
		if( !empty( $secret ) ) {
			$fbkey.='|'.$secret;
		}
		$page_url_data = "https://graph.facebook.com/v2.4/?id=".$page_url."&field=id&access_token=$fbkey";
		$json_source = @file_get_contents($page_url_data);
		$fb_page = json_decode($json_source);
		if(isset($fb_page->id)) {
			$fb_page_id = $fb_page->id;
			//fetch list of albums
			if(preg_match("/https/",$fb_page_id) == 0 || preg_match("/http/",$fb_page_id) == 0) {
				$fb_album_data = "https://graph.facebook.com/v2.4/?id=".$fb_page_id."&fields=albums.limit(8)&access_token=$fbkey";
				$json_source_album = @file_get_contents($fb_album_data);
				$fb_page_album = json_decode($json_source_album);
				if(isset($fb_page_album->albums->data[0])) {
					// fetches album id's & names
					if($page == "create_new") $html .= '<label class="ps-form-label">'.__('Albums','placid-slider').'</label>';
					elseif($page == "quicktag") $html .= '<td scope="row"><label for="album">'.__('Albums','svslider').'</label></td>';
					else $html .= '<th scope="row">'.__('Albums','placid-slider').'</th>';
					$fb_album_id = $fb_page_album->albums->data[0]->id;
					if($page != "create_new") $html .= '<td>';
					if($page == "quicktag") $html .= '<div class="styled-select"><select name="album" >';
					else $html .= '<select name="fb-album" class="ps-form-input" >';
					$count = count($fb_page_album->albums->data);
					if($count > 8 ) $count = 8;
			 		for($j=0;$j<$count;$j++) {
						$selected = '';
						$fbalbum_id = $fb_page_album->albums->data[$j]->id;
						if($fb_album_id==$fbalbum_id) $selected='selected';
						$fb_album_name = isset($fb_page_album->albums->data[$j]->name)?$fb_page_album->albums->data[$j]->name:'';
						$html .= '<option value="'.$fbalbum_id.'" '.$selected.' >'.$fb_album_name.'</option>';
					}
					$html .= '</select>';
				} else {
					$html .= __('Please Enter correct url','placid-slider');
				}
			} else {
				$html .= __('Please Enter correct url','placid-slider');
			}
			if($page == "quicktag") $html .= '</div>';
			if($page != "create_new") $html .= '</td>';
		}
	}
	echo $html;
	die();
}
function placid_add_form() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	global $wpdb; // this is how you get access to the database
	$slider_id = intval( $_POST['slider_id'] );
	$html = '<form method="post" name="add_new_slide" id="add_new_slide" class="add-new-slide" >';
	$html .= '	<div class="ps-slide">';
	$html .= '	<div class="ps-slide-content">';
	$html .= '	<div class="ps-form-row">';
	$html .= '		<label class="ps-form-label">'. __('Title','placid-slider').'</label>';
	$html .= '		<input type="text" name="slide_title" class="ps-form-input slide_title" />';
	$html .= '	</div>';
	$html .= '	<div class="ps-form-row">';
	$html .= '		<label class="ps-form-label">'. __('Image','placid-slider').'</label>';
	$html .= '		<input type="text" name="slide_image" class="ps-form-input slide_image" value="" /> &nbsp; <input  class="placid_upload_button" type="button" value="'. __('Upload','placid-slider').'" />';
	$html .= '	</div>';
	$html .= '	<div class="ps-form-row">';
	$html .= '		<label class="ps-form-label">'. __('Slide Url','placid-slider').'</label>';
	$html .= '		<input type="text" name="slide_url" class="ps-form-input slide_url" />';
	$html .= '	</div>';
	$html .= '	<div class="ps-form-lrow">';
	$html .= '		<label class="ps-form-label">'. __('Description','placid-slider').'</label>';
	$html .= '		<textarea name="slide_desc" class="ps-form-input txtarea slide_desc" /> </textarea>';
	$html .= '	</div>';
	$html .= '	</div>';
	$html .= '	</div>';
	$html .= '	<div class="ps-form-row">';
	$gplacid_slider = get_option('placid_slider_global_options');
	$custom_post = isset($gplacid_slider['custom_post'])?$gplacid_slider['custom_post']:'0';
	if($custom_post == 0 ) $custom_post = post_type_exists('slidervilla');
	$html .= "<input type='hidden' name='custom_post' value='".$custom_post."' />";
	
	$html .= '		<input type="hidden" name="sliderid" value="'. $slider_id.'">';
	$html .= '		<input type="button" name="add_more" class="add_more" value="'. __('Add More','placid-slider').'" /> ';
	$html .= '		<input type="submit" class="btn_save btn-insert" name="insert" value="'. __('Insert','placid-slider').'" />';
	$html .= '<div id="ps-error-msg" class="ps-error-msg"></div>';
	$html .= '	</div>';
	$html .= '</form>';
	echo $html;
	die(); // this is required to terminate immediately and return a proper response
}
function placid_show_posts() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	global $paged,$wpdb,$post; 
	$pages = '';
	$paged = isset($_POST['paged'])?$_POST['paged']:'';
	$post_type = isset($_POST['post_type'])?$_POST['post_type']:'';
	$sliderid = isset($_POST['sliderid'])?$_POST['sliderid']:'';
	$custom = isset($_POST['custom']) ? $_POST['custom'] : '';
	$range = 10;
	$html = '';
	if($custom == true) {
		$args = array(
			'_builtin' => false
		);
		$post_types = get_post_types( $args, 'names' ); 
		$html .= '	<div class="ps-form-row">';
		$html .= '		<label class="ps-form-label">'. __('Post Type','placid-slider').'</label>';
		$html .= '<select name="post_type" class="ps-form-input sel_post_type" >';
		$html .= '<option value="0">'. __('Select Post Type','placid-slider').'</option>';
		foreach ( $post_types as $cpost_type ) {
			if($cpost_type == $post_type) $selected = 'selected'; else $selected = '';
		   $html .= '<option value="'.$cpost_type.'" '.$selected.'>' . $cpost_type . '</option>';
		}
		$html .= '</select>';
		$html .= '</div>';
	}
	$showitems = ($range * 2)+1; 
	if(empty($paged)) $paged = 1;
	if($post_type == 'attachment' ) {
		$args = array(
			//'post_parent' => $post->ID, // Get data from the current post
			'post_type' => 'attachment', // Only bring back attachments
			'post_status' => 'inherit',
			'posts_per_page'=>8,	
		        'post_mime_type' => 'image',
			'paged'=>$paged   
		);
	} else {
		$args = array(
			'post_type' => $post_type,
			'posts_per_page'=>10,	
			'post_status'   => 'publish',
			'paged'=>$paged
		);
	}
	$the_query = new WP_Query( $args );
	$i=0;
	// The Loop
	if ( $the_query->have_posts() ) {
		$html .= '<div style="margin-left: 20px;" >';
		$html .= '<form name="eb-wp-posts" id="eb-wp-posts" method="post" >';
		$html .= '<table class="wp-list-table widefat sliders" >';
		if($post_type == 'attachment' ) {
			$html .= '<col width="20%">
			<col width="40%">
			<col width="40%">
			<thead>
			<tr>
				<th class="sliderid-column">ID</th>
				<th class="slidername-column">Name</th>
				<th class="slidername-column">Attachment</th>
			</tr>
			</thead>';
		} else {
			$html .= '<col width="20%">
				<col width="80%">
				<thead>
				<tr>
					<th class="sliderid-column">'.__('ID','placid-slider').'</th>
					<th class="slidername-column">'.__('Name','placid-slider').'</th>
				</tr>
				</thead>';
		}
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$i++;
			
			$slider_posts=placid_get_slider_posts_in_order($sliderid);
			$slider_arr[] = $slider_posts;
			$postarr[] = "";
			foreach($slider_posts as $slider_post) {
				$icon = '';
				$slider_arr[] = $slider_post->post_id;
				if(isset($post) and isset($slider_arr)){
					if ( in_array($post->ID, $slider_arr) ) {
						$postarr[] = $post->ID;
					}
				}
			}
	
			if ( !in_array($post->ID, $postarr) ) {
				$html .= '<tr>';
				$html .= '<td><input type="checkbox" name="post_id[]" value="'.get_the_ID().'"></td>';
				$html .= '<td>' . get_the_title() . '</td>';
				if($post_type == 'attachment' ) {
					$html .= '<td> <img src="'. wp_get_attachment_url(  ).'" width="50" height="30" /> </td>';
				}
				$html .= '</tr>';
			}else{
				$html .= '<tr>';
				$html .= '<td><input type="checkbox" name="post_id[]" value="'.get_the_ID().'" disabled></td>';
				$html .= '<td>' . get_the_title() . ' <span style="color:#ccc;"> ( Added )</span></td>';
				if($post_type == 'attachment' ) {
					$html .= '<td> <img src="'. wp_get_attachment_url(  ).'" width="50" height="30" /> </td>';
				}
				$html .= '</tr>';
			
			}
		}
		$html .= '</table>';
		if($pages == '') {
			$pages = $the_query->max_num_pages;
			if(!$pages) {
				$pages = 1;
			}
		}  

		if(1 != $pages)
		{
			if($paged > 1 ) $prev = ($paged - 1); else $prev = 1;
			$html .= "<div class=\"eb-cs-pagination\"><span>".__('Page','placid-slider')." ".$paged." ".__('of','placid-slider')." ".$pages."</span>";
			$html .= "<a id='1' class='pageclk' >&laquo; ".__('First','placid-slider')."</a>";
			$html .= "<a id='".$prev."' class='pageclk' >&lsaquo; ".__('Previous','placid-slider')."</a>";

			for ($i=1; $i <= $pages; $i++) {
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					$html .= ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a id=\"$i\" class=\"inactive pageclk\">".$i."</a>";
				}
			}
			
			if($pages >= ($paged + 1)){
			$html .= "<a id=\"".($paged + 1) ."\" class='pageclk' >".__('Next','placid-slider')." &rsaquo;</a>"; 
			$html .= "<a id='".$pages."' class='pageclk' >".__('Last','placid-slider')." &raquo;</a>";
			}else{
			$html .= "<div class='pageclk_disabled' >".__('Next','placid-slider')." &rsaquo;</div>"; 
			$html .= "<div class='pageclk_disabled' >".__('Last','placid-slider')." &raquo;</div>";
			}
			
			
			
			$html .= "</div>\n";
		}
		$html .= "<input type='submit' name='add_posts' value='".__('Insert','placid-slider')."' class='btn_save add_posts' />\n";
		$html .= '<input type="hidden" name="sliderid" value="'. $sliderid.'">';
		$html .= '<input type="hidden" name="post_type" class="post_type" value="'. $post_type.'">';
		$html .= '</form>';
		$html .= "</div>\n";
		echo $html;
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		echo "no posts found";
	}
	die();
}
function placid_show_post_type() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	$html = '';
	$args = array(
		'_builtin' => false
	);
	$post_types = get_post_types( $args, 'names' ); 
	$html .= '	<div class="ps-form-row">';
	$html .= '		<label class="ps-form-label">'. __('Post Type','placid-slider').'</label>';
	$html .= '<select name="post_type" class="ps-form-input sel_post_type" >';
	$html .= '<option value="0">'. __('Select Post Type','placid-slider').'</option>';
	foreach ( $post_types as $post_type ) {

	   $html .= '<option value="'.$post_type.'">' . $post_type . '</option>';
	}
	$html .= '</select>';
	$html .= '</div>';
	echo $html;
	die();
}
function placid_add_video() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	$cntr = isset($_POST['cntr'])?$_POST['cntr']:'';

	$placid_slider_options='placid_slider_options'.$cntr;
	$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($cntr) or empty($cntr)){$curr = 'Default';}
	else{$curr = $cntr;}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$sliderid = $_POST['sliderid'];	
	$type = $_POST['type'];
	$html = '';
	
	if($placid_slider_curr['stylesheet']!='logo') {
	$html .= "<form name='' method='post' id='placid_insert_video'>";
	$html .= '<div class="ps-video-wrap">';
	$html .= '<div class="ps-video-slide">';
	$html .= '<div class="ps-form-row">';
	$html .= '	<label class="ps-form-label">'. __('Title','placid-slider').'</label>';
	$html .= '	<input type="text" name="video_title" id="video_title" class="ps-form-input" value="" />';
	$html .= '</div>';
	$html .= '<div class="ps-form-row">';
	$html .= '	<label class="ps-form-label">'. __('Video Url','placid-slider').'</label>';
	$html .= '	<input type="text" name="video_url" id="video_url" class="ps-form-input" value="" />';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '<div class="ps-form-row">';
	$gplacid_slider = get_option('placid_slider_global_options');
	$custom_post = isset($gplacid_slider['custom_post'])?$gplacid_slider['custom_post']:'0';
	if($custom_post == 0 ) $custom_post = post_type_exists('slidervilla');
	$html .= "<input type='hidden' name='custom_post' value='".$custom_post."' />";
	$html .= "<input type='button' name='add_video' value='".__('Add More','placid-slider')."' class='add_video'  />\n";
	$html .= "<input type='submit' name='add_posts' value='".__('Insert','placid-slider')."' class='btn_save placid_insert_video' />\n";
	$html .= '<div id="ps-error-msg" class="ps-error-msg"></div>';
	$html .= '<input type="hidden" name="sliderid" value="'.$sliderid.'">';
	$html .= '<input type="hidden" name="type" value="'. $type.'">';
	$html .= '</div>';
	$html .= "</form>";
	}
	echo $html;
	die();
}
function placid_show_px() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	$gplacid_slider = get_option('placid_slider_global_options');
	$pxkey = isset($gplacid_slider['px_ckey'])?$gplacid_slider['px_ckey']:'';
	$sliderid = $_POST['sliderid'];
	$feature = isset($_POST['feature']) ? $_POST['feature'] : 'popular';
	$pxuser = isset($_POST['pxuser']) ? $_POST['pxuser'] : '';
	if($feature == "popular") $psle = "selected"; else $psle = "";
	if($feature == "highest_rated") $hsle = "selected"; else $hsle = "";
	if($feature == "upcoming") $usle = "selected"; else $usle = "";
	if($feature == "editors") $esle = "selected"; else $esle = "";
	if($feature == "fresh_today") $ftsle = "selected"; else $ftsle = "";
	if($feature == "fresh_yesterday") $fysle = "selected"; else $fysle = "";
	if($feature == "fresh_week") $fwsle = "selected"; else $fwsle = "";	
	if($feature == "user") $usersle = "selected"; else $usersle = "";	
	if($feature == "user_favorites") $userfvsle = "selected"; else $userfvsle = "";	
	$html = '';
	$html .= "<form name='' method='post' id='px_connect'>";
	$html .= '<div class="ps-form-row">';
	$html .= '	<label class="ps-form-label">'. __('Type','placid-slider').'</label>';
	$html .= '	<select name="feature" class="feature">';
	$html .= '		<option value="popular" '.$psle.'>'. __('Popular','placid-slider').'</option>';
	$html .= '		<option value="highest_rated" '.$hsle.'>'. __('Highest Rated','placid-slider').'</option>';
	$html .= '		<option value="upcoming" '.$usle.'>'. __('Upcoming','placid-slider').'</option>';
	$html .= '		<option value="editors" '.$esle.'>'. __('Editors','placid-slider').'</option>';
	$html .= '		<option value="fresh_today" '.$ftsle.'>'. __('Fresh Today','placid-slider').'</option>';
	$html .= '		<option value="fresh_yesterday" '.$fysle.'>'. __('Fresh Yesterday','placid-slider').'</option>';
	$html .= '		<option value="fresh_week" '.$fwsle.'>'. __('Fresh Week','placid-slider').'</option>';
	$html .= '		<option value="user" '.$usersle.'>'. __('User','placid-slider').'</option>';
	$html .= '		<option value="user_favorites" '.$userfvsle.'>'. __('User favorites','placid-slider').'</option>';
	$html .= '	</select>';
	$html .= "<input type='submit' name='px_connect' value='".__('Connect','placid-slider')."' class='btn_save px_connect' />\n";
	$html .= '</div>';
	if($feature == "user" || $feature == "user_favorites") $style = "display:block;"; else $style = "display:none;";
	$html .= '<div class="ps-form-row pxuser" style="'.$style.'">';
	$html .= '	<label class="ps-form-label">'. __('Name','placid-slider').'</label>';
	$html .= "	<input type='text' name='pxuser' value='".$pxuser."'  />\n";
	$html .= '</div>';
	if($feature != '') { 
		if($feature == "user" || $feature == "user_favorites") {
			$pxurl = "https://api.500px.com/v1/photos?feature=".$feature."&username=".$pxuser."&consumer_key=$pxkey&image_size=4";
		} else {
			$pxurl = "https://api.500px.com/v1/photos?feature=".$feature."&consumer_key=$pxkey&image_size=4";
		}
		$pxjson = @file_get_contents($pxurl);
		if($pxjson == true) {
			$px = json_decode($pxjson);
			if(isset($px->photos)) {
				for($i = 0; $i < count($px->photos); $i++) {
					$limg = isset($px->photos[$i]->image_url)?$px->photos[$i]->image_url:'';
					$html .= '<div class="ps-img-box"><img src="'.$limg.'" /><div class="nav_thumb" id="'.$limg.'" ></div></div>';
				}
			}
		} else {
			$html .= __('Please enter the correct information','placid-slider');
		}
	}
	$html .= '<div style="clear:left;"></div>';
	$html .= '<div class="ps-insert-btn">';
	if($feature != '') { 
		$custom_post = isset($gplacid_slider['custom_post'])?$gplacid_slider['custom_post']:'0';
		if($custom_post == 0 ) $custom_post = post_type_exists('slidervilla');
		$html .= "<input type='hidden' name='custom_post' value='".$custom_post."' /><input type='submit' name='px_insert' value='".__('Insert','placid-slider')."' class='btn_save placid_fip_insert' />\n";
		$html .= '<div id="ps-error-msg" class="ps-error-msg"></div>';
	} 
	$html .= '<input type="hidden" name="sliderid" value="'. $sliderid.'">';
	$html .= '</div>';
	$html .= "</form>";
	echo $html;
	die();
}
function placid_show_fb() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	$sliderid = $_POST['sliderid'];	
	$page_url = isset($_POST['page_url']) ? $_POST['page_url'] : '';
	$albumid = isset($_POST['fb_album']) ? $_POST['fb_album'] : '';
	$html = '';
	$html .= "<form name='' method='post' id='fb_connect'>";
	$html .= '<div class="ps-form-row">';
	$html .= '	<label class="ps-form-label">'.__('Page Url','placid-slider').'</label>';
	$html .= '	<input type="text" name="page_url" id="page_url" class="ps-form-input regular-text" value="'.$page_url.'" />';
	$html .= "<input type='submit' name='fb_connect' value='".__('Connect','placid-slider')."' class='btn_save fb_connect' />\n";
	$html .= '</div>';
	if($page_url != '') { 
		$gplacid_slider = get_option('placid_slider_global_options');
		// Facebook Slider Key
				$fbkey = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
		$secret = isset($gplacid_slider['fb_secret'])?$gplacid_slider['fb_secret']:'';
		if( !empty( $secret ) ) {
			$fbkey.='|'.$secret;
		}
		$page_url_data = "https://graph.facebook.com/v2.4/?id=".$page_url."&field=id&access_token=$fbkey";
		$json_source = @file_get_contents($page_url_data);
		$fb_page = json_decode($json_source);
		if(isset($fb_page->id)) {
			$fb_page_id = $fb_page->id;
			//fetch list of albums
			$fb_album_data = "https://graph.facebook.com/v2.4/?id=".$fb_page_id."&fields=albums.limit(8)&access_token=$fbkey";
			$json_source_album = @file_get_contents($fb_album_data);
			$fb_page_album = json_decode($json_source_album);
			if(isset($fb_page_album->albums->data[0])) {
				// fetches album id's & names	
				$html .= '<div class="ps-form-row">';
				$html .= '	<label class="ps-form-label">'.__('Albums','placid-slider').'</label>';
				if($albumid != '' ) $fb_album_id = $albumid; else $fb_album_id = $fb_page_album->albums->data[0]->id;
				$html .= '<select name="fb_album" class="fb_albums" >';
				$count = count($fb_page_album->albums->data);
				if($count > 8 ) $count = 8;
		 		for($j=0;$j<$count;$j++) {
					$selected = '';
					$fbalbum_id = $fb_page_album->albums->data[$j]->id;
					if($fb_album_id==$fbalbum_id) $selected='selected';
					$fb_album_name = $fb_page_album->albums->data[$j]->name;
					$html .= '<option value="'.$fbalbum_id.'" '.$selected.' >'.$fb_album_name.'</option>';
				}
				$html .= '</select>';
				$html .= '</div>';
				$fb_url = "https://graph.facebook.com/v2.4/?id=".$fb_album_id."&fields=id,name,photos.limit(20){images,created_time,from{name,id,category},name,id,picture,link}&access_token=$fbkey";
				$json_source = @file_get_contents($fb_url);
				$fb = json_decode($json_source);
				$countr = count($fb->photos->data);
				$html .= '<div class="fb-img-wrap">';
				for($i=0;$i<$countr;$i++) {
					$fb_img_src = $fb->photos->data[$i]->images[1]->source;
					$nav_img_src = $fb->photos->data[$i]->picture;
					$html .= '<div class="ps-img-box"><img src="'.$fb_img_src.'" /><div class="nav_thumb" id="'.$nav_img_src.'" ></div></div>';
				}
				$html .= '</div>';
			} else {
				$html .= __('Please enter correct url','placid-slider');
			}
		} else {
			$html .= __('Please enter correct url','placid-slider');
		}
	}
	$html .= '<div style="clear:left;"></div>';
	$html .= '<div class="ps-insert-btn">';
	if($page_url != '') { 
		$custom_post = isset($gplacid_slider['custom_post'])?$gplacid_slider['custom_post']:'0';
		if($custom_post == 0 ) $custom_post = post_type_exists('slidervilla');
		$html .= "<input type='hidden' name='custom_post' value='".$custom_post."' />";
		$html .= "<input type='submit' name='placid_fip_insert' value='".__('Insert','placid-slider')."' class='btn_save placid_fip_insert' />\n";
		$html .= '<div id="ps-error-msg" class="ps-error-msg"></div>';
	} 
	$html .= '<input type="hidden" name="sliderid" value="'. $sliderid.'">';
	$html .= '</div>';
	$html .= "</form>";
	echo $html;
	die();
}
function placid_show_flickr() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	$sliderid = $_POST['sliderid'];
	$method = isset($_POST['method']) ? $_POST['method'] : 'public_photo';
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$asle = $psle = '';
	if($method == "public_photo") $psle = "selected";
	if($method == "album") $asle = "selected";
	$html = '';
	$html .= "<form name='' method='post' id='flickr_connect'>";
	$html .= '<div class="ps-form-row">';
	$html .= '	<label class="ps-form-label">'.__('Type','placid-slider').'</label>';
	$html .= '	<select name="method" class="method">';
	$html .= '		<option value="public_photo" '.$psle.'>'.__('User','placid-slider').'</option>';
	$html .= '		<option value="album" '.$asle.'>'.__('Album','placid-slider').'</option>';
	$html .= '	</select>';
	$html .= "<input type='submit' name='flickr_connect' value='".__('Connect','placid-slider')."' class='btn_save flickr_connect' />\n";
	$html .= '</div>';
	$html .= '<div class="ps-form-row id" >';
	$html .= '	<label class="ps-form-label">'.__('ID','placid-slider').'</label>';
	$html .= "	<input type='text' name='id' value='".$id."'  />\n";
	$html .= '</div>';
	if($id != "") {
		$gplacid_slider = get_option('placid_slider_global_options');
		// Flickr Slider Key
		$flkey = isset($gplacid_slider['flickr_app_key'])?$gplacid_slider['flickr_app_key']:'';
		if($method == 'public_photo') { 
			$flicker_url = "https://api.flickr.com/services/rest/?&method=flickr.people.getPublicPhotos&api_key=$flkey&user_id=".$id."&format=json&nojsoncallback=1";
			$json_source = @file_get_contents($flicker_url);
			$fx = json_decode($json_source);
			if(isset($fx->photos)) {
				$count = count($fx->photos->photo);
				for($i=0;$i<$count;$i++) {
					$id = $fx->photos->photo[$i]->id;
					$owner = $fx->photos->photo[$i]->owner;
					$secret = $fx->photos->photo[$i]->secret;
					$server = $fx->photos->photo[$i]->server;
					$farm = $fx->photos->photo[$i]->farm;
					$html .= '<div class="ps-img-box"><img src="https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$id.'_'.$secret.'_z.jpg" /><div class="nav_thumb" id="https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$id.'_'.$secret.'_t.jpg" ></div></div>';
				}
			} else {
				_e('Please enter the correct user','placid-slider');
			}
		} elseif($method == 'album') { 
			$flicker_seturl = "https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=$flkey&photoset_id=".$id."&format=json&nojsoncallback=1";
			$json_setsource = @file_get_contents($flicker_seturl);
			$setfx = json_decode($json_setsource);
			if(isset($setfx->photoset)) {
				$count = count($setfx->photoset->photo);
				for($i=0;$i<$count;$i++) {
					$id = $setfx->photoset->photo[$i]->id;
					$owner = isset($setfx->photoset->photo[$i]->owner)?$setfx->photoset->photo[$i]->owner:'';
					//$owner = $setfx->photoset->photo[$i]->owner;
					$secret = $setfx->photoset->photo[$i]->secret;
					$server = $setfx->photoset->photo[$i]->server;
					$farm = $setfx->photoset->photo[$i]->farm;
					$html .= '<div class="ps-img-box"><img src="https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$id.'_'.$secret.'_z.jpg" /><div class="nav_thumb" id="https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$id.'_'.$secret.'_t.jpg" ></div></div>';
				}
			} else {
				_e('Please enter the correct album','placid-slider');
			}
		}
	}
	$html .= '<div style="clear:left;"></div>';
	$html .= '<div class="ps-insert-btn">';
	if($id != '') { 
		$custom_post = isset($gplacid_slider['custom_post'])?$gplacid_slider['custom_post']:'0';
		if($custom_post == 0 ) $custom_post = post_type_exists('slidervilla');
		$html .= "<input type='hidden' name='custom_post' value='".$custom_post."' />";
		$html .= "<input type='submit' name='px_insert' value='".__('Insert','placid-slider')."' class='btn_save placid_fip_insert' />\n";
		$html .= '<div id="ps-error-msg" class="ps-error-msg"></div>';
	} 
	$html .= '<input type="hidden" name="sliderid" value="'. $sliderid.'">';
	$html .= '</div>';
	$html .= "</form>";
	echo $html;
	die();
}
function placid_show_it() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	$sliderid = $_POST['sliderid'];
	$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
	$html = '';
	$html .= "<form name='' method='post' id='it_connect'>";
	$html .= '<div class="ps-form-row" >';
	$html .= '	<label class="ps-form-label">'.__('User Name','placid-slider').'</label>';
	$html .= "	<input type='text' name='uname' value='".$uname."'  />\n";
	$html .= "<input type='submit' name='it_connect' value='".__('Connect','placid-slider')."' class='btn_save it_connect' />\n";
	$html .= '</div>';
	
	if($uname != "") {
		$gplacid_slider = get_option('placid_slider_global_options');
		// Instagram Slider Key
		$igkey = isset($gplacid_slider['insta_client_id'])?$gplacid_slider['insta_client_id']:'';
		$insta_id_url = "https://api.instagram.com/v1/users/search?q=".$uname."&access_token=$igkey";
		$json_source_id = @file_get_contents($insta_id_url);
		$insta_id_data = json_decode($json_source_id);
		if(isset($insta_id_data->data[0])) {
			$insta_id = $insta_id_data->data[0]->id;
			$insta_media_url="https://api.instagram.com/v1/users/".$insta_id."/media/recent/?access_token=$igkey";
			$json_source = @file_get_contents($insta_media_url);
			$insta_media_data = json_decode($json_source);
			if(isset($insta_media_data->data))
				$count = count($insta_media_data->data);
			else {
				$count = 0;
			}
			for($i=0;$i<$count;$i++) {
				$img_src = isset($insta_media_data->data[$i]->images->standard_resolution->url)?$insta_media_data->data[$i]->images->standard_resolution->url:'';
				$thumb_src = isset($insta_media_data->data[$i]->images->thumbnail->url)?$insta_media_data->data[$i]->images->thumbnail->url:'';
				$html .= '<div class="ps-img-box"><img src="'.$img_src.'" /><div class="nav_thumb" id="'.$thumb_src.'" ></div></div>';	
			}
		} else {
			$html .= __('Please enter the correct information','placid-slider');
		}
	}
	$html .= '<div style="clear:left;"></div>';
	$html .= '<div class="ps-insert-btn">';
	if($uname != '') { 
		$custom_post = isset($gplacid_slider['custom_post'])?$gplacid_slider['custom_post']:'0';
		if($custom_post == 0 ) $custom_post = post_type_exists('slidervilla');
		$html .= "<input type='hidden' name='custom_post' value='".$custom_post."' />";
		$html .= "<input type='submit' name='px_insert' value='".__('Insert','placid-slider')."' class='btn_save placid_fip_insert' />\n";
		$html .= '<div id="ps-error-msg" class="ps-error-msg"></div>';
	} 
	$html .= '<input type="hidden" name="sliderid" value="'. $sliderid.'">';
	$html .= '</div>';
	$html .= "</form>";
	echo $html;
	die();
}
function placid_fip_insert() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	global $wpdb, $table_prefix, $post;
	$placid_slider = get_option('placid_slider_options');
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$slider_id = $_POST['sliderid'];
	$img_url = $_POST['img_url'];
	$thumb_url = $_POST['thumb_url'];
	$type = $_POST['type'];
	if($type == "fb_connect") { $ftitle = 'Facebook Image'; $stype ='5'; }
	elseif($type == "px_connect") { $ftitle = '500px Image'; $stype ='10'; }
	elseif($type == "flickr_connect") { $ftitle = 'Flickr Image'; $stype ='6'; }
	elseif($type == "it_connect") { $ftitle = 'Instagram Image'; $stype ='7'; }
	else $ftitle = 'Default Image';
	for($i = 0; $i < count($img_url); $i++) {
		$slide_desc = '';
		$title = $ftitle.$i;
		$url = $img_url[$i];
		$thumbnail = $thumb_url[$i];
		$cptpost_args = array(
			'post_title'    => $title,
			'post_content'  => $slide_desc,
			'post_status'   => 'publish',
			'post_type' => 'slidervilla'
		);
		// insert the post into the database
		$cpt_id = @wp_insert_post($cptpost_args);
		$dt = date('Y-m-d H:i:s');
		$sql = "INSERT INTO $table_name (post_id, date, slider_id) VALUES ('$cpt_id', '$dt', '$slider_id')";
		$wpdb->query($sql);
		if($url != '') {
			$thumbnail_key = $placid_slider['img_pick'][1];
			update_post_meta($cpt_id,$thumbnail_key,$url);
			update_post_meta($cpt_id,'_placid_slide_type',$stype);
		}
	}
	die();
}

function placid_insert_video() {
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	global $wpdb, $table_prefix, $post;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$type = $_POST['type'];
	$slider_id = $_POST['sliderid'];
	$video_url = $_POST['video_url'];
	$video_title = (isset($_POST['video_title']) && $_POST['video_title'] != '') ? $_POST['video_title'] : '';
	for($i = 0; $i < count($video_url); $i++) {
		$slide_desc = '';
		$title = $video_title[$i];
		$url = $video_url[$i];
		$cptpost_args = array(
			'post_title'    => $title,
			'post_content'  => $slide_desc,
			'post_status'   => 'publish',
			'post_type' => 'slidervilla'
		);
		// insert the post into the database
		$cpt_id = @wp_insert_post($cptpost_args);
		$dt = date('Y-m-d H:i:s');
		$sql = "INSERT INTO $table_name (post_id, date, slider_id) VALUES ('$cpt_id', '$dt', '$slider_id')";
		$wpdb->query($sql);
		if($url != '') {
			if($type == 'vimeo') {
				$size = 'thumbnail_small';
				$pieces = explode("/", $url);
				$video_id = end($pieces);
				if(get_transient('vimeo_' . $size . '_' . $video_id)) {
					$thumbnail = get_transient('vimeo_' . $size . '_' . $video_id);
				} else {
					$json = json_decode(@file_get_contents( "http://vimeo.com/api/v2/video/" . $video_id . ".json" ));
					$thumbnail = $json[0]->$size;
					set_transient('vimeo_' . $size . '_' . $id, $thumbnail, 2629743);
				}
				$video_shortcode = '<iframe src="http://player.vimeo.com/video/'.$video_id.'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
				$stype = '9';
			} else {
				$video_id = substr($url, strpos($url, "v=") + 2);
				$thumbnail = "http://img.youtube.com/vi/".$video_id."/default.jpg";
				$video_shortcode = "[video src='".$url."']";
				$stype = '8';
			}
			$placid_slider = get_option('placid_slider_options');
			$thumbnail_key = $placid_slider['img_pick'][1];
			update_post_meta($cpt_id,'_placid_embed_shortcode',$video_shortcode);
			update_post_meta($cpt_id,$thumbnail_key,$thumbnail);
			update_post_meta($cpt_id, '_placid_disable_image', 1 );
			update_post_meta($cpt_id, '_placid_slide_type', $stype);
		}
	}
}
function placid_insert_slide() { 
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	$placid_slider = get_option('placid_slider_options');
	global $wpdb, $table_prefix, $post;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$slider_id = $_POST['sliderid'];
	$aimage_url = $_POST['slide_image'];
	$aslide_url = $_POST['slide_url'];
	$aslide_title = (isset($_POST['slide_title']) && $_POST['slide_title'] != '') ? $_POST['slide_title'] : '';
	$aslide_desc = (isset($_POST['slide_desc']) && $_POST['slide_desc'] != '') ? $_POST['slide_desc'] : '';
	for($i =0; $i < count($aslide_title); $i++) {
		$slide_title = $aslide_title[$i];
		$slide_desc = $aslide_desc[$i];
		$slide_url = $aslide_url[$i];
		$image_url = $aimage_url[$i];
		$cptpost_args = array(
		'post_title'    => $slide_title,
		'post_content'  => $slide_desc,
		'post_status'   => 'publish',
		'post_type' => 'slidervilla'
		);
		$stype = '1';
		// insert the post into the database
		$cpt_id = @wp_insert_post($cptpost_args);
		update_post_meta($cpt_id, '_placid_slide_redirect_url', $slide_url);
		update_post_meta($cpt_id, '_placid_slide_type', $stype);
		$thumbnail_key = $placid_slider['img_pick'][1];
		update_post_meta($cpt_id, $thumbnail_key, $image_url);
		$dt = date('Y-m-d H:i:s');
		$sql = "INSERT INTO $table_name (post_id, date, slider_id) VALUES ('$cpt_id', '$dt', '$slider_id')";
		$wpdb->query($sql);	
	}
	die();
}
function placid_insert_posts() { 
	check_ajax_referer( 'placid-add-slides-nonce', 'add_slides' );
	global $wpdb, $table_prefix, $post;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$slider_id = $_POST['sliderid'];
	$dt = date('Y-m-d H:i:s');
	$count = count($_POST['post_id']);
	$values = '';
	for($i = 0; $i < $count; $i++ ) {
		$id = $_POST['post_id'][$i];
		if(!placid_slider($id,$slider_id)) {
			if($i == $count-1)
				$values .= "('$id', '$dt', '$slider_id')";
			else
				$values .= "('$id', '$dt', '$slider_id'),";
		}
		update_post_meta($id, '_placid_slide_type', '1');
	}
	$sql = "INSERT INTO $table_name (post_id, date, slider_id) VALUES $values";
	$wpdb->query($sql);
	die();
}
function placid_change_type() {
	check_ajax_referer('placid-eb-settings-nonce','eb_settings_nonce');
	$id = isset($_POST['slider_id']) ? $_POST['slider_id'] : '';
	$sname = isset($_POST['sname']) ? $_POST['sname'] : '';
	$cntr = isset($_POST['cntr'])?$_POST['cntr']:'';
	$placid_slider_options='placid_slider_options'.$cntr;
	$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($cntr) or empty($cntr)){$curr = 'Default';}
	else{$curr = $cntr;}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);

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
	$html = ''; 
	$html .= '<form method="post" name="placid-update-type" id="placid-update-type" >
			<div class="ps-head">
				<span class="ps-step-title">Select Slider Type</span>
			</div>';
	$html .= '<div class="ps-col ps-vert-line">
			<div class="ps-col-head">'. __('WordPress Core','placid-slider').'</div>';
			if($placid_slider_curr['stylesheet']!='logo') {
		$html.='<div class="ps-col-row">
					<input type="radio" name="slider_type" class="updt-sldr-type"  value="2" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'. __('Recent Posts Slider','placid-slider').'</span>
			</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type"  value="1" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'. __('Category Slider','placid-slider').'</span>
			</div>';
			}
		$html.='<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type"  value="0" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'. __('Custom Slider','placid-slider').'</span>
			</div>';
			if($placid_slider_curr['stylesheet']!='logo') {
		$html.='<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type"  value="7" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'. __('Taxonomy Slider','placid-slider').'</span>
			</div>';
			}
		$html.='<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type"  value="17" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'. __('Image Slider','placid-slider').'</span>
			</div>
			<div class="ps-col-head second">'. __('Social Network','placid-slider').'</div>
			<div class="ps-col-row">';
				if($fbkey == '') { $fbclass="no_key"; } else { $fbclass=""; } 
	$html .= '			<input type="radio" name="slider_type" class="updt-sldr-type '.$fbclass.'"  value="14" ><i class="fa fa-facebook-square"></i><span class="ps-icon-title">'. __('Facebook Album Slider','placid-slider').'</span>';
				if($fbkey == '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Add Facebook App Key on Global Settings','placid-slider').'"></i>'; 
				}
	$html .= '		</div>
			<div class="ps-col-row">';
				if($igkey == '') { $igclass="no_key"; } else { $igclass=""; } 
	$html .= '			<input type="radio" name="slider_type" class="updt-sldr-type '.$igclass.'"  value="15" ><i class="fa fa-instagram"></i><span class="ps-icon-title">'. __('Instagram Slider','placid-slider').'</span>';
				if($igkey == '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Add Instagram Access Token on Global Settings','placid-slider').'"></i>';
				}
	$html .= '		</div>
			<div class="ps-col-row">';
				if($flkey == '') { $flclass="no_key"; } else { $flclass=""; }
	$html .= '			<input type="radio" name="slider_type" class="updt-sldr-type '.$flclass.'"  value="16" ><i class="fa fa-flickr"></i><span class="ps-icon-title">'.__('Flickr Slider','placid-slider').'</span>';
				if($flkey == '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Add Flickr API Key on Global Settings','placid-slider').'"></i>';
				}
	$html .= '		</div>
			<div class="ps-col-row">';
				if($pxkey == '') { $pxclass="no_key"; } else { $pxclass=""; } 
	$html .= '			<input type="radio" name="slider_type" class="updt-sldr-type '.$pxclass.'"  value="18" ><img src="'. placid_slider_plugin_url( 'images/500px.png' ).'" width="13" height="14" /><span class="ps-icon-title">'.__('500px Slider','placid-slider').'</span>';
				if($pxkey == '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Add 500px Consumer Key on Global Settings','placid-slider').'"></i>';
				} 
	$html .= '		</div>';
			if($placid_slider_curr['stylesheet']!='logo') {
			$html.=' <div class="ps-col-head second">'.__('Videos','placid-slider').'</div>
			<div class="ps-col-row">';
				if($youtube_key == '') { $youtubeclass="no_key"; } else { $youtubeclass=""; } 
	$html .= '			<input type="radio" name="slider_type" class="updt-sldr-type '.$youtubeclass.'"  value="11" ><i class="fa fa-youtube"></i><span class="ps-icon-title">'. __('YouTube Playlist Slider','placid-slider').' </span>';
				if($youtube_key == '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Add Youtube API Key on Global Settings','placid-slider').'"></i>';
				} 
	$html .= '		</div>
			<div class="ps-col-row">';
				if($youtube_key == '') { $youtubeclass="no_key"; } else { $youtubeclass=""; } 
	$html .= '			<input type="radio" name="slider_type" class="updt-sldr-type '.$youtubeclass.'"  value="12" ><i class="fa fa-youtube"></i><span class="ps-icon-title">'.__('YouTube Search Slider','placid-slider').'</span>';
				if($youtube_key == '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Add Youtube API Key on Global Settings','placid-slider').'"></i>';
				} 
	$html .= '	</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type"  value="13" ><i class="fa fa-vimeo-square"></i></span><span class="ps-icon-title">'.__('Vimeo Slider','placid-slider').'</span>
			</div>';
			}
		$html .='</div>
		<div class="ps-col">';
			if(!is_plugin_active('nextgen-gallery/nggallery.php')) { 
				$nggclass="no_key"; 
			} else { $nggclass = ""; } 
	$html .= '	<div class="ps-col-head">'.__('Gallary Integration','placid-slider').'</div>
			<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type '.$nggclass.'"  value="10" ><i class="fa fa-picture-o"></i><span class="ps-icon-title">'.__('NextGen Gallery Slider','placid-slider').'</span>';
				if($nggclass != '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Install NextGen Gallery Plugin to use it','placid-slider').'"></i>';
				}
	$html .= '	</div>';
		if($placid_slider_curr['stylesheet']!='logo') {
		$html .= '<div class="ps-col-head second">'.__('Ecommerce','placid-slider').'</div>';
			if(!is_plugin_active('woocommerce/woocommerce.php') ) { 
				$wooclass = "no_key" ;
				} else {
					$wooclass = "";
				} 
	$html .= '		<div class="ps-col-row">
					<input type="radio" name="slider_type" class="updt-sldr-type '.$wooclass.'"  value="3" ><i class="fa fa-shopping-cart"></i><span class="ps-icon-title">'.__('WooCommerce Slider','placid-slider').'</span>';
				if($wooclass != '') { 
	$html .= '			 <i class="fa fa-lock" title="'.__('Install WooCommerce Plugin to use it','placid-slider').'"></i>'; 
				}
	$html .= '			</div>';
			 if(!is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) { 
					$ecomclass = "no_key" ;
				} else {
					$ecomclass = "";
				} 
	$html .= '			<div class="ps-col-row">
					<input type="radio" name="slider_type" class="updt-sldr-type '.$ecomclass.'"  value="4" ><i class="fa fa-shopping-cart"></i><span class="ps-icon-title">'.__('WP Ecommerce Slider','placid-slider').'</span>';
				if($ecomclass != '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Install WP Ecommerce Plugin to use it','placid-slider').'"></i>'; 
				}
	$html .= '			</div>
				<div class="ps-col-head second">'.__('Events','placid-slider').'</div>';
				if(!is_plugin_active('events-manager/events-manager.php') ) { 
					$emanclass = "no_key" ;
				} else {
					$emanclass = "";
				}
	$html .= '			<div class="ps-col-row">
					<input type="radio" name="slider_type" class="updt-sldr-type '.$emanclass.'"  value="5" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Event Manager','placid-slider').'</span>';
				if($emanclass != '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Install Event Manager Plugin to use it','placid-slider').'"></i>';
				}
	$html .= '			</div>';
				if(!is_plugin_active('the-events-calendar/the-events-calendar.php') ) { 
					$ecalclass = "no_key" ;
				} else {
					$ecalclass = "";
				}
	$html .= '		<div class="ps-col-row">
					<input type="radio" name="slider_type" class="updt-sldr-type '.$ecalclass.'"  value="6" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Event Calendar','placid-slider').'</span>';
				if($ecalclass != '') { 
	$html .= '			<i class="fa fa-lock" title="'.__('Install Event Calendar Plugin to use it','placid-slider').'"></i>'; 
				} 
	$html .= '			</div>';
			}
			$html.= '<div class="ps-col-head second">'.__('Miscellaneous','placid-slider').'</div>
				<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type"  value="9" ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Post Attachments Slider','placid-slider').'</span>
			</div>';
			if($placid_slider_curr['stylesheet']!='logo') {
			$html .='<div class="ps-col-row">
				<input type="radio" name="slider_type" class="updt-sldr-type"  value="8" ><i class="fa fa-rss-square"></i><span class="ps-icon-title">'.__('RSS feed Slider','placid-slider').'</span>
			</div>';
			}
		$html .='</div>
		<div class="ps-col-row">
			<input type="hidden" name="id" value="'.$id.'"  /> <input type="hidden" name="sname" value="'.$sname.'"  />
		</div>
	</form>';
	echo $html;
	die();
}

function placid_show_params() {
	check_ajax_referer('placid-eb-settings-nonce','eb_settings_nonce');
	if (isset ($_POST['slider_type'])) {
		$slider_type = isset($_POST['slider_type'])?$_POST['slider_type']:'2';
		$id = isset($_POST['id'])?$_POST['id']:'0';
		$html = '';
		$html .= '<div class="ps-step2">
			<form method="post" name="ps-create-new-step2" id="ps-update-step2" class="ps-step2-form ps-validate" >';
			if($slider_type == 2) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="2" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Recent Posts Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 1) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="1" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Category Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 0) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="0" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Custom Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 3) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="3" checked ><i class="fa fa-shopping-cart"></i></span><span class="ps-icon-title">'.__('WooCommerce Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 4) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="4" checked ><i class="fa fa-shopping-cart"></i></span><span class="ps-icon-title">'.__('ECommerce Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 5) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="5" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Event Manager Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 6) {
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="6" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Event Calendar Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 7) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="7" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Taxonomy Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 17) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="17" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Image Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 8) { 
		$html .= '		<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="8" checked ><i class="fa fa-rss-square"></i><span class="ps-icon-title">'.__('RSS Feed Slider','placid-slider').'</span>
				</div>';
			}  elseif($slider_type == 9) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="9" checked ><i class="fa fa-align-justify"></i><span class="ps-icon-title">'.__('Post Attachment Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 10) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="10" checked ><i class="fa fa-picture-o"></i><span class="ps-icon-title">'.__('NextGen Gallery Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 11) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="11" checked ><i class="fa fa-youtube"></i><span class="ps-icon-title">'.__('Youtube Playlist Slider','placid-slider').'</span>
				</div>';
			} elseif($slider_type == 12) {
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="12" checked ><i class="fa fa-youtube"></i><span class="ps-icon-title">'.__('YouTube Search Slider','placid-slider').'</span>
				</div>';
		} elseif($slider_type == 13) { 
		$html .= '		<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="13" checked ><i class="fa fa-vimeo-square"></i><span class="ps-icon-title">'.__('Vimeo Slider','placid-slider').'</span>
				</div>';
		} elseif($slider_type == 14) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="14" checked ><i class="fa fa-facebook-square"></i><span class="ps-icon-title">'.__('Facebook Album Slider','placid-slider').'</span>
				</div>';
		} elseif($slider_type == 15) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="15" checked ><i class="fa fa-instagram"></i><span class="ps-icon-title">'.__('Instagram Slider','placid-slider').'</span>
				</div>';
		} elseif($slider_type == 16) { 
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="16" checked ><i class="fa fa-flickr"></i><span class="ps-icon-title">'.__('Flickr Slider','placid-slider').'</span>
				</div>';
		} elseif($slider_type == 18) {
		$html .= '	<div class="ps-col-row">
					<input type="radio" name="update-slider-type" value="18" checked ><img src="'. placid_slider_plugin_url( 'images/500px.png' ).'" width="13" height="14" /><span class="ps-icon-title">'.__('500px Slider','placid-slider').'</span>
				</div>';
		}
		$sname = isset($_POST['sname'])?$_POST['sname']:'';
		$html .= '<div class="ps-form-row"> 	
				<label>'. __('Slider Name','placid-slider').'</label>			
				 <input type="text" name="new_slider_name" id="update_slider_name" value="'.$sname.'" class="ps-form-input" /> 
			</div>
			<div class="ps-form-row">
				<label>'.__('Offset','placid-slider').'</label>
				<input type="number" name="offset" value="0" class="ps-form-input small" />
			</div>';
			if($slider_type == 1) { 
				//category Slider Param
				$categories = get_categories();
				$scat_html='<option value="" selected >Select the Category</option>';
				foreach ($categories as $category) { 
					 if( isset($param_array['catg_slug']) && $category->slug==$param_array['catg_slug']){$selected = 'selected';} else{$selected='';}
					 $scat_html =$scat_html.'<option value="'.$category->slug.'" '.$selected.'>'.$category->name.'</option>';
				}
		$html .= '	<div class="ps-form-row">
					<label>'.__('Category','placid-slider').'</label>
					<select name="catg_slug" id="placid_slider_catslug" class="ps-form-input" >'.$scat_html.'</select>
				</div>';
			} elseif($slider_type == 3 ) { 
				if( is_plugin_active('woocommerce/woocommerce.php') ) {
					$wooterms = get_terms('product_cat');
					$woocat_html='<option value="" selected >Select the Category</option>';
					foreach( $wooterms as $woocategory) {
						if( isset($param_array['woo-catg']) && $woocategory->slug==$param_array['woo-catg'] ){$selected = 'selected';} else{$selected='';}
						$woocat_html =$woocat_html.'<option value="'.$woocategory->slug.'" '.$selected.'>'. $woocategory->name .'</option>';
					}
				} 
		$html .= '	<div class="ps-form-row">
				<label>'.__('Select Slider Type','placid-slider').'</label>
				<select name="woo_slider_type" id="woo-slider-type" class="ps-form-input placid_woo_type" >
					<option value="recent" >'.__('Recent Product Slider','placid-slider').'</option>
					<option value="upsells" >'.__('Upsells Product Slider','placid-slider').'</option>
					<option value="crosssells" >'.__('Crosssells Product Slider','placid-slider').'</option>
					<option value="external" >'.__('External Product Slider','placid-slider').'</option>
					<option value="grouped" >'.__('Grouped Product Slider','placid-slider').'</option>
				</select>
			</div>
			<div class="ps-form-row woo-product" style="display:none;">
				<label>'.__('Enter Product','placid-slider').'</label>
				<input id="products" class="ps-form-input" >
				<input id="product_id" name="product_id" value="" type="hidden" >
			</div>
			<div class="ps-form-row">
				<label>'.__('Select Category','placid-slider').'</label>
				<select id="placid_slider_woo_catslug" multiple class="placid-multiselect ps-form-input" >'. $woocat_html.'</select>
				<input type="hidden" name="woo-catg"  />
			</div>';
			} elseif($slider_type == 4 ) { 
				if( is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) {
					$ecomterms = get_terms('wpsc_product_category');
					$ecomcat_html='<option value="" selected >Select the Category</option>';
					foreach( $ecomterms as $ecomcategory) {
						if( isset($param_array['ecom-catg']) && $ecomcategory->slug==$param_array['ecom-catg']){$selected = 'selected';} else{$selected='';}
						$ecomcat_html =$ecomcat_html.'<option value="'.$ecomcategory->slug.'" '.$selected.'>'.$ecomcategory->name.'</option>';
					}
				}
			
			$html .= '<div class="ps-form-row">
					<label>'.__('Select Slider Type','placid-slider').'</label>
					<select name="ecom_slider_type" id="ecom_slider_preview" onchange="catgtype(this.value);"  class="ps-form-input" >
						<option value="0" >'.__('eCom Recent Product Slider','placid-slider').'</option>
						<option value="1" >'.__('eCom Product Category Slider','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row placid_catg" style="display:none;">
					<label>'.__('Select Category','placid-slider').'</label>
					<select id="placid_slider_ecom_catslug" name="ecom-catg" class="ps-form-input" >'. $ecomcat_html.'</select>
				</div>';
			} elseif($slider_type == 5 ) { 
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
			$html .= '<div class="ps-form-row">
					<label>'.__('Select Slider Scope','placid-slider').'</label>
					<select name="eventm_slider_scope" id="eventm_slider_preview" class="ps-form-input" >
						<option value="future" >'.__('Future Events','placid-slider').'</option>
						<option value="past" >'.__('Past Events','placid-slider').'</option>
						<option value="all" >'.__('Recent Events','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row">
					<label>'.__('Select Category','placid-slider').'</label>
					<select id="placid_slider_event_catslug" multiple class="placid-multiselect ps-form-input" >'.$eventcat_html.'</select>
					<input type="hidden" name="eman-catg"  />
				</div>
				<div class="ps-form-row">
					<label>'.__('Select Tags','placid-slider').'</label>
					<select id="placid_slider_event_tags" multiple class="placid-multiselect ps-form-input" >'.$evtag_html.'</select>
					<input type="hidden" name="eman-tags"  />
				</div>';
			} elseif($slider_type == 6 ) { 
				if( is_plugin_active('the-events-calendar/the-events-calendar.php') ) { 
					$eventcalterms = get_terms('tribe_events_cat');
					$eventcal_html='<option value="" selected >All Category</option>';
					foreach( $eventcalterms as $eventcalcat) {
						if( isset($param_array['ecal-catg']) && $ecomcategory->slug==$param_array['ecal-catg']){$selected = 'selected';} else{$selected='';}
						$eventcal_html =$eventcal_html.'<option value="'.$eventcalcat->slug.'" '.$selected.' >'.$eventcalcat->name.'</option>';
					}
					$evcaltags = get_terms("post_tag");
					$evcaltag_html='<option value="" selected >All Tags</option>';
					foreach( $evcaltags as $tags) {
						$evcaltag_html = $evcaltag_html.'<option value="'.$tags->slug.'">'.$tags->name.'</option>';
					} 
				}
			$html .= '<div class="ps-form-row">
					<label>'.__('Select Slider Type','placid-slider').'</label>
					<select name="eventcal_slider_type" id="eventcal_slider_preview" class="ps-form-input" >
						<option value="list" >'.__('Future Events','placid-slider').'</option>
						<option value="past" >'.__('Past Events','placid-slider').'</option>
						<option value="all" >'.__('Recent Events','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row">
					<label>'.__('Select Category','placid-slider').'</label>
					<select id="placid_slider_eventcal_catslug" multiple class="placid-multiselect ps-form-input" >'.$eventcal_html.'</select>
					<input type="hidden" name="ecal-catg"  />
			</div>
				<div class="ps-form-row">
					<label>'.__('Select Tags','placid-slider').'</label>
					<select id="placid_slider_eventcal_tags" multiple class="placid-multiselect ps-form-input" >'.$evcaltag_html.'</select>
					<input type="hidden" name="ecal-tags"  />
				</div>';
			} elseif($slider_type == 7) { 
				$post_types = get_post_types(); 
				$taxonomy_names = get_object_taxonomies( 'post' );
				// Taxonomy Slider Params  
			$html .= '
				<div class="ps-form-row">
					<label>'.__('Post Type','placid-slider').'</label>
					<select name="taxo_posttype" id="placid_taxonomy_posttype" class="ps-form-input" >';
					foreach ( $post_types as $cpost_type ) { 
						$html .= '<option value="'.$cpost_type.'" >' . $cpost_type . '</option>';
					} 
			$html .= '	</select>
				</div>
				<div class="ps-form-row sh-taxo">
					<label>'.__('Taxonomy','placid-slider').'</label>
					<select name="taxonomy_name" id="placid_taxonomy" class="ps-form-input" >
						<option value="" >Select Taxonomy </option>';
					foreach ( $taxonomy_names as $taxonomy_name ) { 
			$html .= '		<option value="'.$taxonomy_name.'" >' . $taxonomy_name . '</option>';
					}
			$html .= '	</select>
				</div>
				<div class="ps-form-row sh-term" style="display:none;">
					
				</div>
				<div class="ps-form-row">
					<label>'.__('Show','placid-slider').'</label>
					<select name="taxonomy_show" id="placid_taxonomy_show" class="ps-form-input" >
						<option value="" >'.__('Default','placid-slider').'</option>
						<option value="per_tax" >'.__('One Per Tax','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row">
					<label>'.__('Operator','placid-slider').'</label>
					<select name="taxonomy_operator" id="placid_taxonomy_operator" class="ps-form-input" >
						<option value="IN" >'.__('IN','placid-slider').'</option>
						<option value="NOT IN" >'.__('NOT IN','placid-slider').'</option>
						<option value="AND" >'.__('AND','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row">
					<label>'.__('Author','placid-slider').'</label>
					<select id="placid_taxonomy_author" class="placid-multiselect ps-form-input" multiple >';
						$blogusers = get_users();						
						// Array of WP_User objects.
						foreach ( $blogusers as $user ) {
				$html .= '		<option value="'.$user->ID.'" >' . $user->user_nicename . '</option>';
						}
				$html .= '</select>
						<input type="hidden" name="taxonomy_author"  />
				</div>';
			} elseif($slider_type == 8) {
		$html .= '
				<div class="ps-form-row">
					<label>'.__('Feedurl','placid-slider').'</label>
					<input type="text" name="rssfeedurl" id="placid_rssfeed_feedurl" class="ps-form-input large" placeholder="http://mashable.com/feed/" /> 
				</div>

				<div class="ps-form-row">
					<label>'.__('RSS Slider Id','placid-slider').'</label>
					<input type="text" name="rssfeedid" id="placid_rssfeed_id" class="ps-form-input" /> 
				</div>

				<div class="ps-form-row">
					<label>'.__('Default image','placid-slider').'</label>
					<input type="text" name="rssfeedimg" id="placid_rssfeed_defimage" class="ps-form-input large" placeholder="'.placid_slider_plugin_url('/images/default_image.png').'" /> 
				</div>
				
				<div class="ps-form-row">
					<label>'.__('Image Class','placid-slider').'</label>
					<input type="text" name="rss-image-class" id="placid_rssfeed_image_class" class="ps-form-input" /> 
				</div>

				<div class="ps-form-row">
					<label>'.__('Source','placid-slider').'</label>
					<select name="rssfeed-src" id="placid_rssfeed_src" class="ps-form-input rss-source">
						<option value="">'.__('Other','placid-slider').'</option>
						<option value="smugmug">'.__('Smugmug','placid-slider').'</option>
					</select>
				</div>
		
				<div class="ps-form-row rss-feed">
					<label>'.__('Feed','placid-slider').'</label>
					<select name="feed" name="feed" id="placid_rssfeed_feed" class="ps-form-input">
						<option value="">'.__('Other','placid-slider').'</option>
						<option value="atom">'.__('Atom','placid-slider').'</option>
					</select>
				</div>			
	
				<div class="ps-form-row rss-size" style="display:none;">
					<label>'.__('Size','placid-slider').'</label>
					<select name="rss-size" name="rss-size" id="placid_rssfeed_size" class="ps-form-input">
						<option value="Ti">'.__('Tiny thumbnails','placid-slider').'</option>
						<option value="Th">'.__('Large thumbnails','placid-slider').'</option>
						<option value="S">'.__('Small','placid-slider').'</option>
						<option value="M">'.__('Medium','placid-slider').'</option>
						<option value="L">'.__('Other','placid-slider').'</option>
						<option value="XL">'.__('Large','placid-slider').'</option>
						<option value="X2">'.__('X2Large','placid-slider').'</option>
						<option value="X3">'.__('X3Large','placid-slider').'</option>
						<option value="O">'.__('Original','placid-slider').'</option>
					</select> 
				</div>

				<div class="ps-form-row">
					<label>'.__('Scan child node content for images','placid-slider').'</label>
					<input type="checkbox" name="rss-content" id="placid_rssfeed_content" class="ps-form-input" />
				</div>';
			} elseif($slider_type == 9) { 
			$html .= '<div class="ps-form-row">
					<label>'.__('Post Id','placid-slider').'</label>
					<input type="text" name="postattch-id" id="placid_postattch_id" class="ps-form-input" /> 
				</div>';
			} elseif($slider_type == 10) { 
			$galleriesOptions = get_placid_nextgen_galleries(); 
			$html .='<div class="ps-form-row">
					<label>'.__('Select Gallery','placid-slider').'</label>
					<select name="nextgen-id" id="placid_nextgen_galleryid" class="ps-form-input">
						'.$galleriesOptions.'
					</select>
				  </div>
				<div class="ps-form-row">
					<label>'.__('Link','placid-slider').'</label>
					<input type="checkbox" name="nextgen-anchor" id="placid_nextgen_anchor" value="1" class="ps-form-input" />
				</div>';
			} elseif($slider_type == 11) { 
			$html .= '<div class="ps-form-row">
					<label>'.__('Playlist id','placid-slider').'</label>
					<input type="text" name="yt-playlist-id" id="yt-playlist-id" class="ps-form-input" />
				</div>';
			} elseif($slider_type == 12) { 
			$html .= '<div class="ps-form-row">
					<label>'.__('Term','placid-slider').'</label>
					<input type="text" name="yt-search-term" id="yt-search-term" class="ps-form-input" />
				</div>';
			} elseif($slider_type == 13) { 
			$html .= '<div class="ps-form-row">
					<label>'.__('Select type','placid-slider').'</label>
					<select name="vimeo-type" class="vimeo-type ps-form-input" >
						<option value="channel">'.__('Channel','placid-slider').'</option>
						<option value="album">'.__('Album','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row">
					<label id="vimeo-lb">'.__('Channel Name','placid-slider').'</label>
					<input type="text" name="vimeo-val" id="vimeo-val" class="ps-form-input" />
				</div>';
			} elseif($slider_type == 14) {
			$html .= '<div class="ps-form-row">
					<label>'.__('Page Url','placid-slider').'</label>
					<input type="text" name="fb-pg-url" id="fb-pg-url" class="ps-form-input regular-text" />
					<input type="submit" name="cfb_connect" value="'.__('Connect','placid-slider').'" class="btn_save cfb_connect" />
				</div>
				<div class="ps-form-row fb-albums">
			
				</div>';
			} elseif($slider_type == 15) { 
			$html .= '<div class="ps-form-row">
					<label>'.__('User Name','placid-slider').'</label>
					<input type="text" name="user-name" id="user-name" class="ps-form-input" />
				</div>';
			} elseif($slider_type == 16) {
			$html .= '<div class="ps-form-row">
					<label>'.__('Select type','placid-slider').'</label>
					<select name="flickr-type" class="flickr-type ps-form-input" >
						<option value="user">'.__('User','placid-slider').'</option>
						<option value="album">'.__('Album','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row">
					<label id="flickr-lb">'.__('User ID','placid-slider').'</label>
					<input type="text" name="fl-id" id="fl-user-id" class="ps-form-input" />
				</div>';
			} elseif($slider_type == 18) {
			$html .= '<div class="ps-form-row">
					<label>'.__('Select type','placid-slider').'</label>
					<select name="feature" class="feature ps-form-input" >
						<option value="popular">'.__('Popular','placid-slider').'</option>
						<option value="highest_rated" >'.__('Highest Rated','placid-slider').'</option>
						<option value="upcoming" >'.__('Upcoming','placid-slider').'</option>
						<option value="editors" >'.__('Editors','placid-slider').'</option>
						<option value="fresh_today" >'.__('Fresh Today','placid-slider').'</option>
						<option value="fresh_yesterday" >'.__('Fresh Yesterday','placid-slider').'</option>
						<option value="fresh_week" >'.__('Fresh Week','placid-slider').'</option>
						<option value="user" >'.__('User','placid-slider').'</option>
						<option value="user_favorites">'.__('User favorites','placid-slider').'</option>
					</select>
				</div>
				<div class="ps-form-row pxuser" style="display:none;">
					<label class="ps-form-label">'.__('User Name','placid-slider').'</label>
					<input type="text" name="pxuser" value="" class="ps-form-input" />
				</div>';
			}
			$html .= '<input type="hidden" name="id" value="'.$id.'" / > <input type="hidden" name="sname" value="'.$sname.'"  />
			<input type="submit" name="update-type" class="btn_save update-type" value="'.__('Update','placid-slider').'" />
			<input type="button" name="step2-prev" value="'.__('Back','placid-slider').'" class="ps-updt-btn-back" >
			<div style="clear:left;"></div>
			</form>
		</div>';
		echo $html;
	}
	die();
}
function placid_updt_sldr_type() {
	check_ajax_referer('placid-eb-settings-nonce','eb_settings_nonce');
	global $wpdb,$table_prefix;
	$slider_id = $_POST['id'];
	$slider_type = $_POST['update-slider-type'];
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
			$param_array['woo-catg']=$_POST['woo-catg'];
		}
	}
	if($slider_type == '4') {
		if(isset($_POST['ecom-catg']) && $_POST['ecom-catg'] != '') {
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
		if(isset($_POST['eman-catg']) && $_POST['eman-catg'] != '0' && $_POST['eman-catg'] != '') {
			$param_array['eman-catg']=$_POST['eman-catg'];
		}
		if(isset($_POST['eman-tags']) && $_POST['eman-tags'] != '') {
			$param_array['eman-tags']=$_POST['eman-tags'];
		}
	}
	if($slider_type == '6') {
		if(isset($_POST['eventcal_slider_type']) && $_POST['eventcal_slider_type'] != '') {
			$param_array['eventcal_slider_type'] = $_POST['eventcal_slider_type'];
		}
		if(isset($_POST['ecal-catg']) && $_POST['ecal-catg'] != '0' && $_POST['ecal-catg'] != '') {
			$param_array['ecal-catg']=$_POST['ecal-catg'];
		}
		if(isset($_POST['ecal-tags']) && $_POST['ecal-tags'] != '') {
			$param_array['ecal-tags']=$_POST['ecal-tags'];
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
			$param_array['taxonomy_term']=$_POST['taxonomy_term'];
		}
		if( isset($_POST['taxonomy_show']) && $_POST['taxonomy_show'] != '') {
			$param_array['taxonomy_show']=$_POST['taxonomy_show'];
		}
		if( isset($_POST['taxonomy_operator']) && $_POST['taxonomy_operator'] != '') {
			$param_array['taxonomy_operator']=$_POST['taxonomy_operator']; 
		}
		if( isset($_POST['taxonomy_author']) && $_POST['taxonomy_author'] != '') {
			$param_array['taxonomy_author']=$_POST['taxonomy_author'];
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
	$slider_name = isset($_POST["new_slider_name"])?$_POST["new_slider_name"]:'';
	$slider_meta = $table_prefix.PLACID_SLIDER_META;
	$sql = "UPDATE ".$slider_meta." SET type='".$slider_type."', slider_name='".$slider_name."' $parm WHERE slider_id=$slider_id";
	$wpdb->query($sql);	
	$current_url = admin_url('admin.php?page=placid-slider-easy-builder');
	$urlarg = array();
	$urlarg['id'] = $slider_id;
	$query_arg = add_query_arg( $urlarg ,$current_url);
	echo $current_url = $query_arg;
	die();
}

function placid_eb_settings() {
	check_ajax_referer('placid-eb-settings-nonce','eb_settings_nonce');
	$tab = isset($_POST['tab'])?$_POST['tab']:'';	
	$cntr = isset($_POST['cntr'])?$_POST['cntr']:'';
	$placid_slider_options='placid_slider_options'.$cntr;
	$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($cntr) or empty($cntr)){$curr = 'Default';}
	else{$curr = $cntr;}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$html = '';
	
	if(get_transient( 'placid_eb_undo_set' ) != false) { 
		$undo_style="display:inline-block;";	
	} else $undo_style="display:none;";
	if($tab == 'basic') {
			$orientation = $placid_slider_curr['orientation'];
			$html .='<div class="ebs-row">
				<label>'.__('Skin','placid-slider').'</label> 
				<select class="eb-selnone" name="'.$placid_slider_options.'[stylesheet]" id="placid_slider_stylesheet" >';
				$directory = PLACID_SLIDER_CSS_DIR;
				if ($handle = opendir($directory)) {
				    while (false !== ($file = readdir($handle))) { 
				     if($file != '.' and $file != '..') { 
					$html .='<option value="'.$file.'" '.selected($file,$placid_slider_curr['stylesheet'],false).'>'.$file.'</option>';
				} }
				    closedir($handle);
				}
			$html .='</select>
			</div>

			<div class="ebs-row">
				<label>'.__('Speed','placid-slider').'</label>
				<input type="number" name="'.$placid_slider_options.'[speed]" id="placid_slider_speed" class="small-text" value="'.$placid_slider_curr['speed'].'" min="1"/>ms
			</div>
			
			<div class="ebs-row">
				<label>'.__('Frame Rate','placid-slider').'</label>
				<input type="number" name="'.$placid_slider_options.'[frate]" id="placid_slider_frate" class="small-text" value="'.$placid_slider_curr['frate'].'" min="1"/>
			</div>
			
			<div class="ebs-row">
				<label>'.__('No. of Posts','placid-slider').'</label>
				<input type="number" name="'.$placid_slider_options.'[no_posts]" id="placid_slider_no_posts" class="small-text" value="'.$placid_slider_curr['no_posts'].'" min="1" />
			</div>
			
			<div class="ebs-row">
				<label>'.__('Orientation','placid-slider').'</label>		
				<select class="eb-selnone" name="'.$placid_slider_options.'[orientation]" id="placid_slider_orientation">
					<option value="0" '.selected("0",$orientation,false).' >'.__('Horizontal','placid-slider').'</option>
					<option value="1" '.selected("1",$orientation,false).' >'.__('Vertical','placid-slider').'</option>
				</select>
			</div>
			
			<div class="ebs-row">
				<label class="eb-llabel">'.__('Reverse Direction','placid-slider').'</label>
				<div class="eb-switch eb-switchnone">
					<input type="hidden" id="placid_slider_direction" name="'.$placid_slider_options.'[direction]" class="hidden_check" value="'.$placid_slider_curr['direction'].'">
					<input id="placid_directionsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['direction'],false).' >
					<label for="placid_directionsett"></label>
				</div>
			</div>';
			
			if($placid_slider_curr['orientation']!='1'){
			$html.= '<div class="ebs-row show horz">
				<label class="eb-llabel">'.__('Width','placid-slider').'</label>
				<input type="number" min="0" name="'.$placid_slider_options.'[width]" id="placid_slider_width" class="small-text" value="'.$placid_slider_curr['width'].'" />&nbsp;'.__('px','placid-slider').'
			</div>
			
			<div class="ebs-row hide vert">
				<label class="eb-llabel">'.__('Height','placid-slider').'</label>
				<input type="number" min="0" name="'.$placid_slider_options.'[tot_height]" id="placid_slider_tot_height" class="small-text" value="'.$placid_slider_curr['tot_height'].'" />&nbsp;'.__('px','placid-slider').'
			</div>';
			} else {
			$html.='<div class="ebs-row hide horz">
				<label class="eb-llabel">'.__('Width','placid-slider').'</label>
				<input type="number" min="0" name="'.$placid_slider_options.'[width]" id="placid_slider_width" class="small-text" value="'.$placid_slider_curr['width'].'" />&nbsp;'.__('px','placid-slider').'
			</div>
			
			<div class="ebs-row show vert">
				<label class="eb-llabel">'.__('Height','placid-slider').'</label>
				<input type="number" min="0" name="'.$placid_slider_options.'[tot_height]" id="placid_slider_tot_height" class="small-text" value="'.$placid_slider_curr['tot_height'].'" />&nbsp;'.__('px','placid-slider').'
			</div>';
			}
			$html.='<div class="ebs-row">
				<label class="eb-llabel">'.__('Slide Width','placid-slider').'</label>
				<input type="number" min="0" name="'.$placid_slider_options.'[iwidth]" id="placid_slider_iwidth" class="small-text havemoreinfo" value="'.$placid_slider_curr['iwidth'].'" />&nbsp;'.__('px','placid-slider').'
			</div>

			<div class="ebs-row">
				<label class="eb-llabel">'.__('Slide Height','placid-slider').'</label>
				<input type="number" min="1" name="'.$placid_slider_options.'[height]" id="placid_slider_height" class="small-text" value="'.$placid_slider_curr['height'].'" />&nbsp;'.__('px','placid-slider').'
			</div>
			
			<div class="ebs-row">
				<label style="width:30%">'.__('Background','placid-slider').'</label>
				<input type="text" name="'.$placid_slider_options.'[bg_color]" id="placid_slider_bg_color" value="'.$placid_slider_curr['bg_color'].'" class="wp-color-picker-field" data-default-color="#ffffff" />
			</div>
			<div class="ebs-row">
				<div class="eb-switch eb-switchnone">
					<input type="hidden" name="'.$placid_slider_options.'[bg]" id="placid_slider_bg" class="hidden_check" value="'.$placid_slider_curr['bg'].'">
					<input id="placid_bgsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['bg'],false).'>
					<label for="placid_bgsett"></label>
				</div>
				'.__('Enable Transparent Background','placid-slider').'
			</div>
			
			<div class="ebs-row">
				<label class="eb-slabel">'.__('Border','placid-slider').'</label>
				<div class="eb-lrightdiv">
					<div>
						<label class="eb-mlabel">'.__('Thickness','placid-slider').'</label>
						<input type="number" name="'.$placid_slider_options.'[border]" id="placid_slider_border" class="small-text" value="'.$placid_slider_curr['border'].'" min="0" />
					</div>
					<div style="margin-top: 5px;">
						<label class="eb-mlabel">'.__('Color','placid-slider').'</label>
						<input type="text" name="'.$placid_slider_options.'[brcolor]" id="placid_slider_brcolor" value="'.$placid_slider_curr['brcolor'].'" class="wp-color-picker-field" data-default-color="#D8E7EE" />
					</div>
				</div>
			</div>';
			
			if($placid_slider_curr['orientation'] != "1") {
			$html.= '<div class="ebs-row show vert">
					<label class="eb-llabel">'.__('Spacing','placid-slider').'</label>
					<input type="number" min="0" name="'.$placid_slider_options.'[space]" id="placid_slider_space" value="'.$placid_slider_curr['space'].'" class="small-text" MIN="0" />&nbsp;'.__('px','placid-slider').'
				</div>';
				
			}
			$html.=	'<div class="ebs-row">
			<label style="width: 38%;">'.__('Slide animation','placid-slider').'</label>'; 
				$tital_tran_name = $placid_slider_options.'[slide_transition]';
				$html .=get_placid_transitions($tital_tran_name,$placid_slider_curr['slide_transition']).'
			</div>

			<div class="ebs-row">
				<label class="eb-llabel">'.__('Duration (seconds)','placid-slider').'</label> 
				<input type="number" min="0.2"  step="0.2" name="'.$placid_slider_options.'[slide_duration]" id="placid_slider_slide_duration" class="eb-gsmalltext" value="'.$placid_slider_curr['slide_duration'].'" />
			</div>

			<div class="ebs-row">
				<label class="eb-llabel">'.__('Delay time (seconds)','placid-slider').'</label> 
				<input type="number" min="0" name="'.$placid_slider_options.'[slide_delay]" id="placid_slider_slide_delay" class="eb-gsmalltext" value="'.$placid_slider_curr['slide_delay'].'" />
			</div>
			<p class="submit">
			<input type="submit" class="button-primary" name="save_eb_settings" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>';
		
	} elseif($tab == 'miscellaneous') {

		$html.= '<div class="ebs-row">
			<label class="eb-llabel">'.__('Pause On Hover','placid-slider').'</label>
			<div class="eb-switch">
			<input type="hidden" name="'.$placid_slider_options.'[pauseonhover]" class="placid_slider_pauseonhover hidden_check" value="'.$placid_slider_curr['pauseonhover'].'">		
			<input id="placid_pauseonhover" class="cmn-toggle eb-toggle-round placid_pauseonhover" type="checkbox" '.checked('1', $placid_slider_curr['pauseonhover'], false).'>
			<label for="placid_pauseonhover"></label>
		</div>
	</div>

		<div class="ebs-row">
		<label class="eb-llabel">'.__('Lightbox Effect','placid-slider').'</label>
		<div class="eb-switch">
			<input type="hidden" name="'.$placid_slider_options.'[pphoto]" class="placid_slider_pphoto hidden_check" value="'.$placid_slider_curr['pphoto'].'">
			<input id="placid_pphoto" class="cmn-toggle eb-toggle-round placid_pphoto" type="checkbox" '.checked('1', $placid_slider_curr['pphoto'],false).'>
			<label for="placid_pphoto"></label>
		</div>
	</div>';
		if($placid_slider_curr['pphoto'] == 1 ) $lbox_style = 'display:block';
		else $lbox_style = 'display:none';
	$html.='<div class="ebs-row placid_slider_lbox_type"  style="'.$lbox_style.'" >
			<label class="eb-llabel">'.__('Select LightBox','placid-slider').'</label>
			<select name="'.$placid_slider_options.'[lbox_type]" >
				<option value="pphoto_box" '.selected("pphoto_box",$placid_slider_curr['lbox_type'],false).' >'.__('PrettyPhoto','placid-slider').'</option>
				<option value="nivo_box" '.selected("nivo_box",$placid_slider_curr['lbox_type'],false).' >'.__('Nivo box','placid-slider').'</option>
				<option value="photo_box" '.selected("photo_box",$placid_slider_curr['lbox_type'],false).' >'.__('Photo box','placid-slider').'</option>
				<option value="smooth_box" '.selected("smooth_box",$placid_slider_curr['lbox_type'],false).' >'.__('Smooth box','placid-slider').'</option>
				<option value="swipe_box" '.selected("swipe_box",$placid_slider_curr['lbox_type'],false).' >'.__('Swipe box','placid-slider').'</option>
			</select>
		</div>
	<div class="ebs-row">
		<label class="eb-llabel">'.__('Read more Text','placid-slider').'</label>
		<input type="text" name="'.$placid_slider_options.'[more]" id="placid_slider_more" class="eb-smalltext" value="'.$placid_slider_curr['more'].'" />
	</div>

	<div class="ebs-row">
			<label class="eb-llabel">'.__('Retain tags','placid-slider').'</label>
			<input type="text" name="'.$placid_slider_options.'[allowable_tags]" id="placid_slider_allowable_tags" class="eb-smalltext" value="'.$placid_slider_curr['allowable_tags'].'" />
	</div>
	
	<div class="ebs-row">
			<label class="eb-llabel">'.__('Link attributes  ','placid-slider').'</label>
			<input type="text" name="'.$placid_slider_options.'[a_attr]" id="placid_slider_a_attr" class="eb-smalltext" value="'.htmlentities( $placid_slider_curr['a_attr'] , ENT_QUOTES).'" />
	</div>
	
	<div class="ebs-row">
		<label>'.__('Disable Slider view','placid-slider').'</label>
		<div class="eb-switch eb-rswitch">
			<input type="hidden" name="'.$placid_slider_options.'[disable_slider]" class="hidden_check" value="'.$placid_slider_curr['disable_slider'].'">
			<input id="placid_disableslider" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['disable_slider'],false).'>
			<label for="placid_disableslider"></label>
		</div>
	</div>
	
	<div class="ebs-row">
		<label class="eb-llabel">'.__('Enable FOUC','placid-slider').'</label>
		<div class="eb-switch">
			<input type="hidden" name="'.$placid_slider_options.'[fouc]" id="placid_slider_fouc" class="hidden_check" value="'.$placid_slider_curr['fouc'].'">
			<input id="placid_fouc" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['fouc'],false).'>
			<label for="placid_fouc"></label>
		</div>
	</div>

		<div class="ebs-row">
			<label class="eb-llabel">'.__('Custom fields','placid-slider').'</label>
			<textarea name="'.$placid_slider_options.'[fields]"  id="placid_slider_fields" rows="2" class="regular-text code">'.$placid_slider_curr['fields'].'</textarea>
		</div>
		
		<div class="ebs-row">
			<label class="eb-llabel">'.__('Append Slides Counter','placid-slider').'</label>
			<select style="width:4em;" name="'.$placid_slider_options.'[repeat]" class="havemoreinfo" id="placid_slider_repeat">
				<option value="0" '.selected("0",$placid_slider_curr['repeat'],false).' >'.__('0','placid-slider').'</option>
				<option value="1" '.selected("1",$placid_slider_curr['repeat'],false).' >'.__('1','placid-slider').'</option>
				<option value="2" '.selected("2",$placid_slider_curr['repeat'],false).' >'.__('2','placid-slider').'</option>
				<option value="3" '.selected("3",$placid_slider_curr['repeat'],false).' >'.__('3','placid-slider').'</option>
			</select>
		</div>
			
		<div class="ebs-row">
			<label class="eb-llabel">'.__('Randomize slides','placid-slider').'</label>
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[rand]" id="placid_slider_rand" class="hidden_check" value="'.$placid_slider_curr['rand'].'">
				<input id="placid_rand" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['rand'],false).' >
				<label for="placid_rand"></label>
			</div>
		</div>
		<div class="ebs-row">
			<label class="eb-llabel">'.__('Do not link slide to any url','placid-slider').'</label>
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[donotlink]" id="placid_slider_donotlink" class="hidden_check" value="'.$placid_slider_curr['donotlink'].'">
				<input id="placid_donotlink" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['donotlink'],false).' >
				<label for="placid_donotlink"></label>
			</div>
		</div>
		<div class="ebs-row">
			<label style="width: 60%;">'.__('Disable Slider on Mobiles and Tablets','placid-slider').'</label>
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[disable_mobile]" id="placid_slider_disable_mobile" class="hidden_check" value="'.$placid_slider_curr['disable_mobile'].'">
				<input id="placid_disable_mobile" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['disable_mobile'],false).'>
				<label for="placid_disable_mobile"></label>
			</div>
	 	</div>
		
		<p class="submit">
			<input type="submit" class="button-primary" name="save_eb_settings" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>';
	
	} elseif($tab == 'image') {
	
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_curr['img_pick'][0]=(isset($placid_slider_curr['img_pick'][0]))?$placid_slider_curr['img_pick'][0]:'';
	$placid_slider_curr['img_pick'][1]=(isset($placid_slider_curr['img_pick'][1]))?$placid_slider_curr['img_pick'][1]:'';
	$placid_slider_curr['img_pick'][2]=(isset($placid_slider_curr['img_pick'][2]))?$placid_slider_curr['img_pick'][2]:'';
	$placid_slider_curr['img_pick'][3]=(isset($placid_slider_curr['img_pick'][3]))?$placid_slider_curr['img_pick'][3]:'';
	$placid_slider_curr['img_pick'][5]=(isset($placid_slider_curr['img_pick'][5]))?$placid_slider_curr['img_pick'][5]:'';
	$imgpick_style = '';
	if(isset($cntr) and $cntr>0) $imgpick_style = 'style="display:none;"';
	$focus_axis="display:none;";
	if($placid_slider_curr['timthumb'] == 2)$focus_axis="display:block;";
 	$html.='<div class="ebs-row">
		<div style="margin-bottom: 10px;">'.__('Image Source','placid-slider').'</div>
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[img_pick][0]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][0].'">
			<input id="placid_customfldchk" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['img_pick'][0],false).'>
			<label for="placid_customfldchk"></label>
		</div>';		
		if(!isset($cntr) or empty($cntr)){ 
				$html .= __('Custom field','placid-slider'); 
		} else { 
			$html .= __('(Set custom field name on Default Settings)','placid-slider'); 
		}
		$html.='<input type="text" name="'.$placid_slider_options.'[img_pick][1]" class="text eb-small-text" value="'.$placid_slider_curr['img_pick'][1].'" '.$imgpick_style.' />
	<div class="ebs-row">
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[img_pick][2]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][2].'">
			<input id="placid_featuredimgchk" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['img_pick'][2],false).'>
			<label for="placid_featuredimgchk"></label>
		</div>
		<label>'.__('Featured Image','placid-slider').'</label>	
	</div>

	<div class="ebs-row">
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[img_pick][3]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][3].'">
			<input id="placid_attachedimgchk" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['img_pick'][3],false).'>
			<label for="placid_attachedimgchk"></label>
		</div>
		<label>'. __('Attached image,order','placid-slider').'</label>
		<input type="text" name="'.$placid_slider_options.'[img_pick][4]" class="small-text" value="'.$placid_slider_curr['img_pick'][4].'" />
	</div>

	<div class="ebs-row">
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[img_pick][5]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][5].'">
			<input id="placid_scanimgchk" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['img_pick'][5],false).'>
			<label for="placid_scanimgchk"></label>
		</div>
		<label>'.__('Scan content','placid-slider').'</label>	
	</div>
	
	<div class="ebs-row">
		<label>'.__('Fetched Image size','placid-slider').'</label>';
			$sizename=$placid_slider_options.'[crop]';
			$html .= placid_get_image_sizes($sizename,$placid_slider_curr['crop']).'
	</div>

	<div class="ebs-row">
		<label class="eb-slabel">'.__('Size','placid-slider').'</label> 
		<div class="eb-lrightdiv">
				<span class="eb-span">W</span>
				<input type="number" name="'.$placid_slider_options.'[img_width]" class="small-text" value="'.$placid_slider_curr['img_width'].'" id="placid_slider_img_width" min="1" />
				<span class="eb-span">H</span>
				<input type="number" name="'.$placid_slider_options.'[img_height]" class="small-text" value="'.$placid_slider_curr['img_height'].'" id="placid_slider_img_height" min="1" />
		</div>
	</div>

	<div class="ebs-row">
		<label class="eb-slabel">'.__('Border','placid-slider').'</label>
		<div class="eb-lrightdiv">
			<div>
				<label class="eb-mlabel">'.__('Thickness','placid-slider').'</label>
				<input type="number" name="'.$placid_slider_options.'[img_border]" id="placid_slider_img_border" class="small-text" value="'.$placid_slider_curr['img_border'].'" min="0" />
			</div>
			<div style="margin-top: 5px;">
				<label class="eb-mlabel">'.__('Color','placid-slider').'</label>
				<input type="text" name="'.$placid_slider_options.'[img_brcolor]" id="placid_slider_img_brcolor" value="'.$placid_slider_curr['img_brcolor'].'" class="wp-color-picker-field" data-default-color="#D8E7EE" />
			</div>
		</div>
	</div>
	
	<div class="ebs-row">
		<label class="eb-slabel">'.__('Cropping','placid-slider').'</label>
		<input type="radio" name="'.$placid_slider_options.'[timthumb]" value="1" '.checked('1', $placid_slider_curr['timthumb'],false).' class="pscrop" > <span>'.__('OFF','placid-slider').'</span> 
		<div class="crop-sub">
		<input type="radio" name="'.$placid_slider_options.'[timthumb]" value="0" '.checked('0', $placid_slider_curr['timthumb'],false).' class="pscrop" > <span>'.__('ON (Hard cropping using php)','placid-slider').'</span> <br/>';
		if($placid_slider_curr['stylesheet'] != "logo") {
			$html.='<input type="radio" name="'.$placid_slider_options.'[timthumb]" value="2" '.checked('2', $placid_slider_curr['timthumb'],false).' class="pscrop" > <span>'.__('ON (Image Positioning using JS)','placid-slider').'</span>';
		}
		$html .='
		</div>
	</div>';
	if($placid_slider_curr['stylesheet'] != "logo") {
		$html.='
		<div class="ebs-row focus_axis" style="'.$focus_axis.'">
			<label class="eb-llabel">'.__('X-axis','placid-slider').'</label> <span class="currx">('. $placid_slider_curr['focusx'] .')</span>
			<input type="range" name="'.$placid_slider_options.'[focusx]" id="placid_slider_focusx" value="'.$placid_slider_curr['focusx'].'" min="-1" max="1" step="0.001" />
		</div>	
		<div class="ebs-row focus_axis" style="'.$focus_axis.'">
			<label class="eb-llabel">'.__('Y-axis','placid-slider').'</label> <span class="curry">('. $placid_slider_curr['focusy'] .')</span>
			<input type="range" name="'.$placid_slider_options.'[focusy]" id="placid_slider_focusy" value="'.$placid_slider_curr['focusy'].'" min="-1" max="1" step="0.001" />
		</div>';
	}	
	$html.='
	<div class="ebs-row">
		<label>'.__('Image title on hover','placid-slider').'</label>
		<div class="eb-switch eb-rswitch">
			<input type="hidden" name="'.$placid_slider_options.'[image_title_text]" class="hidden_check" value="'.$placid_slider_curr['image_title_text'].'">
			<input id="placid_thover" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['image_title_text'],false).'>
			<label for="placid_thover"></label>
		</div>
	</div>


	<div class="ebs-row">
		<label>'.__('Pure image slider','placid-slider').'</label>
		<div class="eb-switch eb-rswitch">
			<input type="hidden" name="'.$placid_slider_options.'[image_only]" id="placid_slider_image_only" class="hidden_check" value="'.$placid_slider_curr['image_only'].'">
			<input id="placid_imageonly" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['image_only'],false).'>
			<label for="placid_imageonly"></label>
		</div>
	</div>

	<div class="ebs-row">
		<label>'.__('Grayscale image','placid-slider').'</label>
		<div class="eb-switch eb-rswitch">
			<input type="hidden" name="'.$placid_slider_options.'[coloronhover]" class="hidden_check" value="'.$placid_slider_curr['coloronhover'].'">
			<input id="placid_clrhover" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['coloronhover'],false).'>
			<label for="placid_clrhover"></label>
		</div>
	</div>
	
	<div class="ebs-row">	
			<label>'.__('Default Image','placid-slider').'</label>
			<img id="default-img" src="'.$placid_slider_curr['default_image'].'" width="80" height="70" />
			<input type="submit" name="default-image-upload" class="placid-upload-default" value="Upload" style="float:left;margin-left: 50%;background: #dddddd;cursor:pointer;" >
			<input type="submit" name="default-image-reset" class="placid-reset-default" value="Reset" style="background: #dddddd;cursor:pointer;" >
			<input type="hidden" id="default-image-url" value="'.$default_placid_slider_settings['default_image'].'">
			<input type="hidden" name="'.$placid_slider_options.'[default_image]" id="placid_slider_default_image" class="regular-text code" value="'.$placid_slider_curr['default_image'].'" />
		</div>
		<p class="submit">
			<input type="submit" class="button-primary" name="save_eb_settings" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>';
	
	} elseif($tab == 'text') {
	
		$html.='<div class="settings-tbl">
		<div class="ebs-row">
				<label>'.__('Default Text','placid-slider').'</label>		
				<input type="text" name="'.$placid_slider_options.'[title_text]" id="placid_slider_title_text" class="eb-smalltext" value="'.htmlentities($placid_slider_curr['title_text'], ENT_QUOTES).'" />
		</div>
		
		<div class="ebs-row">
				<label>'.__('Pick Title From','placid-slider').'</label>
				<select name="'.$placid_slider_options.'[title_from]" >
					<option value="0" '.selected("0",$placid_slider_curr['title_from'],false).' >'.__('Default Title Text','placid-slider').'</option>
					<option value="1" '.selected("1",$placid_slider_curr['title_from'],false).' >'.__('Slider Name','placid-slider').'</option>
				</select>
		</div>
	
		<div class="ebs-row">
			<label>'.__('Font','placid-slider').'</label>			
			<input type="hidden" value="title_font" class="ftype_rname">
			<input type="hidden" value="title_fontg" class="ftype_gname">
			<input type="hidden" value="titlefont_custom" class="ftype_cname">
	
			<select name="'.$placid_slider_options.'[t_font]" id="placid_slider_t_font" class="main-font">
				<option value="regular" '.selected( $placid_slider_curr['t_font'], "regular",false ).' > Regular Fonts </option>
				<option value="google" '.selected( $placid_slider_curr['t_font'], "google",false ).' > Google Fonts </option>
				<option value="custom" '.selected( $placid_slider_curr['t_font'], "custom",false ).' > Custom Fonts </option>
			</select>
			<div class="load-fontdiv" colspan="2">	</div>
		</div>

		<div class="ebs-row">
			<label>'.__('Color','placid-slider').'</label>
			<input type="text" name="'.$placid_slider_options.'[title_fcolor]" id="placid_slider_title_fcolor" value="'.$placid_slider_curr['title_fcolor'].'" class="wp-color-picker-field" data-default-color="#3F4C6B" />
		</div>

		<div class="ebs-row">
			<label>'.__('Size','placid-slider').'</label>
			<input type="number" name="'.$placid_slider_options.'[title_fsize]" id="placid_slider_title_fsize" class="small-text" value="'.$placid_slider_curr['title_fsize'].'" min="1" />
		</div>

		<div class="ebs-row font-style">
			<label>'.__('Style','placid-slider').'</label>
			<select name="'.$placid_slider_options.'[title_fstyle]" id="placid_slider_title_fstyle" >
				<option value="bold" '.selected("bold",$placid_slider_curr['title_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
				<option value="bold italic" '.selected("bold italic",$placid_slider_curr['title_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
				<option value="italic" '.selected("italic",$placid_slider_curr['title_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
				<option value="normal" '.selected("normal",$placid_slider_curr['title_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
		</select>
		</div>
	     </div>
	
		<div class="eb-altcolor">
		<div class="eb-altcolorinner settings-tbl">
		
		
		<div class="ebs-row">
			<label>'. __('Post Title','placid-slider').'</label> 
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[show_ptitle]" id="placid_slider_show_ptitle" class="hidden_check" value="'.$placid_slider_curr['show_ptitle'].'">
				<input id="placid_showptitle" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['show_ptitle'],false).'>
				<label for="placid_showptitle"></label>
			</div>
		</div>
 
		<div class="ebs-row">
			<label class="eb-slabel">'.__('Font','placid-slider').'</label>			
			<!-- code for new fonts - 3.0 -->
			<input type="hidden" value="ptitle_font" class="ftype_rname">
			<input type="hidden" value="ptitle_fontg" class="ftype_gname">
			<input type="hidden" value="ptfont_custom" class="ftype_cname">
			<select name="'.$placid_slider_options.'[pt_font]" id="placid_slider_pt_font" class="main-font">
				<option value="regular" '.selected( $placid_slider_curr['pt_font'], "regular", false ).' > Regular Fonts </option>
				<option value="google" '.selected( $placid_slider_curr['pt_font'], "google", false ).' > Google Fonts </option>
				<option value="custom" '.selected( $placid_slider_curr['pt_font'], "custom", false ).' > Custom Fonts </option>
			</select>	
			<div class="load-fontdiv" colspan="2"></div>	
		</div>

		<div class="ebs-row">
			<label>'.__('Color','placid-slider').'</label>
			<input type="text" name="'.$placid_slider_options.'[ptitle_fcolor]" id="placid_slider_ptitle_fcolor" value="'.$placid_slider_curr['ptitle_fcolor'].'" class="wp-color-picker-field" data-default-color="#ffffff" />
		</div>

		<div class="ebs-row">
			<label>'.__('Size','placid-slider').'</label>
			<input type="number" name="'.$placid_slider_options.'[ptitle_fsize]" id="placid_slider_ptitle_fsize" class="small-text" value="'.$placid_slider_curr['ptitle_fsize'].'" min="1" />
		</div>

		<div class="ebs-row font-style">
		<label>'.__('Style','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[ptitle_fstyle]" id="placid_slider_ptitle_fstyle" >
				<option value="bold" '.selected("bold",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
				<option value="bold italic" '.selected("bold italic",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
				<option value="italic" '.selected("italic",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
				<option value="normal" '.selected("normal",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
		</select>
		</div>
	
		<div class="ebs-row">
			<label>'.__('HTML element','placid-slider').'</label>
			<select name="'.$placid_slider_options.'[title_element]" >
				<option value="1" '.selected("1",$placid_slider_curr['title_element'], false).' >h1</option>
				<option value="2" '.selected("2",$placid_slider_curr['title_element'], false).' >h2</option>
				<option value="3" '.selected("3",$placid_slider_curr['title_element'], false).' >h3</option>
				<option value="4" '.selected("4",$placid_slider_curr['title_element'], false).' >h4</option>
				<option value="5" '.selected("5",$placid_slider_curr['title_element'], false).' >h5</option>
				<option value="6" '.selected("6",$placid_slider_curr['title_element'], false).' >h6</option>
			</select>		
		</div>
	</div><!--eb-altcolorinner-->
	</div><!--eb-altcolor-->
	
	
	<div class="settings-tbl">
		<div class="ebs-row">
			<label>'.__('Content','placid-slider').'</label>
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[show_content]" id="placid_slider_show_content" class="hidden_check" value="'.$placid_slider_curr['show_content'].'">
				<input id="placid_showcontent" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['show_content'],false).'>
				<label for="placid_showcontent"></label>
			</div>
	 	</div>

		<div class="ebs-row">
			<label class="eb-slabel">'.__('Font','placid-slider').'</label>			
							<!-- code for new fonts - 3.0 -->
							<input type="hidden" value="content_font" class="ftype_rname">
							<input type="hidden" value="content_fontg" class="ftype_gname">
							<input type="hidden" value="pcfont_custom" class="ftype_cname">
							<select name="'.$placid_slider_options.'[pc_font]" id="placid_slider_pc_font" class="main-font">
								<option value="regular" '.selected("regular",$placid_slider_curr['pc_font'],false).' > Regular Fonts </option>
								<option value="google" '.selected( "google", $placid_slider_curr['pc_font'], false ).' > Google Fonts </option>
								<option value="custom" '.selected( "custom", $placid_slider_curr['pc_font'], false ).' > Custom Fonts </option>
							</select>		
					<div class="load-fontdiv">	</div>
		</div>

		<div class="ebs-row">
			<label>'.__('Color','placid-slider').'</label>
			<input type="text" name="'.$placid_slider_options.'[content_fcolor]" id="placid_slider_content_fcolor" value="'.$placid_slider_curr['content_fcolor'].'" class="wp-color-picker-field" data-default-color="#ffffff" />
		</div>

		<div class="ebs-row">
			<label>'.__('Size','placid-slider').'</label>
			<input type="number" name="'.$placid_slider_options.'[content_fsize]" id="placid_slider_content_fsize" class="small-text" value="'.$placid_slider_curr['content_fsize'].'" min="1" />
		</div>

		<div class="ebs-row font-style">	
		<label>'.__('Style','placid-slider').'</label>
			<select name="'.$placid_slider_options.'[content_fstyle]" id="placid_slider_content_fstyle" >
					<option value="bold" '.selected("bold",$placid_slider_curr['content_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
					<option value="bold italic" '.selected("bold italic",$placid_slider_curr['content_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
					<option value="italic" '.selected("italic",$placid_slider_curr['content_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
					<option value="normal" '.selected("normal",$placid_slider_curr['content_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
					
			</select>
		</div>

		<div class="ebs-row">
		<label>'.__('source','placid-slider').'</label>
			<select name="'.$placid_slider_options.'[content_from]" id="placid_slider_content_from" >
				<option value="slider_content" '.selected("slider_content",$placid_slider_curr['content_from'],false).' >'.__('Slider Content Custom field','placid-slider').'</option>
				<option value="excerpt" '.selected("excerpt",$placid_slider_curr['content_from'],false).' >'.__('Post Excerpt','placid-slider').'</option>
				<option value="content" '.selected("content",$placid_slider_curr['content_from'],false).' >'.__('From Content','placid-slider').'</option>
			</select>
		</div>

		<div class="ebs-row">
			<label class="eb-slabel">'.__('Length','placid-slider').'</label>
			<div class="eb-lrightdiv">
				<div>
					<input id="placid_slider_climit" name="'.$placid_slider_options.'[climit]" type="radio" value="0" '.checked('0', $placid_slider_curr['climit'],false).'  />
					<label class="eb-mlabel">'.__(' words','placid-slider').'</label>
					<input type="number" name="'.$placid_slider_options.'[content_limit]" id="placid_slider_content_limit" class="small-text" value="'.$placid_slider_curr['content_limit'].'" min="1" />
					</div>
					<div class="eb-margindiv">
					<input id="placid_slider_climit" name="'.$placid_slider_options.'[climit]" type="radio" value="1" '.checked('1', $placid_slider_curr['climit'],false).'  />
					<label class="eb-mlabel">'.__(' Characters','placid-slider').'</label>
					<input type="number" name="'.$placid_slider_options.'[content_chars]" id="placid_slider_content_chars" class="small-text" value="'.$placid_slider_curr['content_chars'].'" min="1"/>
				</div>
			</div>	
		</div>

		<div class="ebs-row">
			<label>'.__('Overlay width','placid-slider').'</label>
		             <input type="number" name="'.$placid_slider_options.'[ptext_width]" id="placid_slider_ptext_width" class="small-text havemoreinfo" value="'.$placid_slider_curr['ptext_width'].'" />
		</div>
		
	</div>
		<p class="submit">
			<input type="submit" class="button-primary" name="save_eb_settings" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />		
		</p>';
	
	} elseif($tab == 'nav') {
	
		$html='<div class="ebs-row">
			<label>'.__('Arrows','placid-slider').'</label>
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[enable_arrow]" id="placid_slider_enable_arrow" class="hidden_check" value="'.$placid_slider_curr['enable_arrow'].'">
				<input id="placid_disablearrow" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_arrow'],false).'>
				<label for="placid_disablearrow"></label>
			</div>
		</div>
		<div class="ebs-row">
			<label>'.__('Choose Arrow','placid-slider').'</label>
			<div style="background: #ccc;">';
			$directory = PLACID_SLIDER_CSS_OUTER.'/images/buttons/';
			if ($handle = opendir($directory)) {
			    while (false !== ($file = readdir($handle))) { 
			     if($file != '.' and $file != '..') { 
			     $nexturl='css/images/buttons/'.$file.'/next.png';
			$html.='<div class="arrows"><img src="'.placid_slider_plugin_url($nexturl).'" width="32" height="32"/>
			<input name="'.$placid_slider_options.'[buttons]" type="radio" id="placid_slider_buttons" class="arrows_input" value="'.$file.'" '.checked($file,$placid_slider_curr['buttons'],false).' /></div>';
			 } }
			    closedir($handle);
			}
			$html .= '</div>
		</div>
		
		<div class="ebs-row">
			<label class="eb-slabelnav">'.__('Size','placid-slider').'</label> 
			<span class="eb-span">W</span>
			<input type="number" name="'.$placid_slider_options.'[nav_w]" id="placid_slider_nav_w" class="small-text" value="'.$placid_slider_curr['nav_w'].'" min="1" />
			<span class="eb-span">H</span>
			<input type="number" name="'.$placid_slider_options.'[nav_h]" id="placid_slider_nav_h" class="small-text" value="'.$placid_slider_curr['nav_h'].'" min="1" />
		</div>
		<p class="submit">
			<input type="submit" class="button-primary" name="save_eb_settings" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />		
		</p>';

	} elseif($tab == 'events') {
	
		$html.='<div class="settings-tbl">
		<div class="ebs-row">
			<label>'.__('Event date-time','placid-slider').'</label>
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[enable_eventdt]" id="placid_slider_enable_eventdt" class="hidden_check" value="'.$placid_slider_curr['enable_eventdt'].'">
				<input id="placid_enableeventdt" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventdt'],false).'>
				<label for="placid_enableeventdt"></label>
			</div> 
		</div>
		<div class="ebs-row">
	
			<label class="eb-slabel">'.__('Font','placid-slider').'</label>			
							<!-- code for new fonts - 3.0 -->
							<input type="hidden" value="slide_eventm_font" class="ftype_rname">
							<input type="hidden" value="slide_eventm_fontg" class="ftype_gname">
							<input type="hidden" value="slide_eventm_custom" class="ftype_cname">
							<select name="'.$placid_slider_options.'[eventmd_font]" id="placid_slider_eventmd_font" class="main-font">
								<option value="regular" '.selected( $placid_slider_curr['eventmd_font'], "regular",false ).' > Regular Fonts </option>
								<option value="google" '.selected( $placid_slider_curr['eventmd_font'], "google",false ).' > Google Fonts </option>
								<option value="custom" '.selected( $placid_slider_curr['eventmd_font'], "custom",false ).' > Custom Fonts </option>
							</select>	
					<div class="load-fontdiv"></div>
		</div>
	
	<div class="ebs-row">
	<label>'.__('Font Color','placid-slider').'</label>
		<input type="text" name="'.$placid_slider_options.'[slide_eventm_fcolor]" id="placid_slide_woocat_fcolor" value="'.$placid_slider_curr['slide_eventm_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" />
	</div>

	<div class="ebs-row">
	<label>'.__('Font Size','placid-slider').'</label>
	<input type="number" name="'.$placid_slider_options.'[slide_eventm_fsize]" id="placid_slide_woocat_fsize" class="small-text" value="'.$placid_slider_curr['slide_eventm_fsize'].'" min="1" />
	</div>

	<div class="ebs-row font-style">
	<label>'.__('Font Style','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[slide_eventm_fstyle]" id="placid_slide_woocat_fstyle" >
			<option value="bold" '.selected("bold",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Bold','placid-slider').'</option>
			<option value="bold italic" '.selected("bold italic",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Bold Italic','placid-slider').'</option>
			<option value="italic" '.selected("italic",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Italic','placid-slider').'</option>
			<option value="normal" '.selected("normal",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Normal','placid-slider').'</option>
		</select>
	</div>
	</div>


	<div class="eb-altcolor">
		<div class="eb-altcolorinner settings-tbl">
		<div class="ebs-row">
			<label>'.__('Event address','placid-slider').'</label>
			<div class="eb-switch">
				<input type="hidden" name="'.$placid_slider_options.'[enable_eventadd]" id="placid_slider_enable_eventadd" class="hidden_check" value="'.$placid_slider_curr['enable_eventadd'].'">
				<input id="placid_enableeventadd" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventadd'],false).'>
				<label for="placid_enableeventadd"></label>
			</div> 
		</div>
		<div class="ebs-row">
			<label class="eb-slabel">'.__('Font','placid-slider').'</label>			
			<!-- code for new fonts - 3.0 -->
			<input type="hidden" value="eventm_addr_font" class="ftype_rname">
			<input type="hidden" value="eventm_addr_fontg" class="ftype_gname">
			<input type="hidden" value="eventm_addr_custom" class="ftype_cname">
			<select name="'.$placid_slider_options.'[event_addr_font]" id="placid_slider_event_addr_font" class="main-font">
				<option value="regular" '.selected( $placid_slider_curr['event_addr_font'], "regular", false ).' > Regular Fonts </option>
				<option value="google" '.selected( $placid_slider_curr['event_addr_font'], "google", false ).' > Google Fonts </option>
				<option value="custom" '.selected( $placid_slider_curr['event_addr_font'], "custom", false ).' > Custom Fonts </option>
			</select>	
			<div class="load-fontdiv"></div>
		</div>
		<div class="ebs-row">
			<label>'.__('Font Color','placid-slider').'</label>
				<input type="text" name="'.$placid_slider_options.'[eventm_addr_fcolor]" id="placid_slide_woocat_fcolor" value="'.$placid_slider_curr['eventm_addr_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" />
		</div>
		<div class="ebs-row">
			<label>'.__('Font Size','placid-slider').'</label>
				<input type="number" name="'.$placid_slider_options.'[eventm_addr_fsize]" id="placid_slide_woocat_fsize" class="small-text" value="'.$placid_slider_curr['eventm_addr_fsize'].'" min="1" />
		</div>
		<div class="ebs-row font-style">
			<label>'.__('Font Style','placid-slider').'</label>
			<select name="'.$placid_slider_options.'[eventm_addr_fstyle]" id="placid_slide_woocat_fstyle" >
				<option value="bold" '.selected("bold",$placid_slider_curr['eventm_addr_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
				<option value="bold italic" '.selected("bold italic",$placid_slider_curr['eventm_addr_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
				<option value="italic" '.selected("italic",$placid_slider_curr['eventm_addr_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
				<option value="normal" '.selected("normal",$placid_slider_curr['eventm_addr_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
			</select>
		</div>
	</div><!--eb-altcolorinner-->
	</div><!--eb-altcolor-->
	<div class="settings-tbl">
			<div class="ebs-row">
				<label>'.__('Event category','placid-slider').'</label>
				<div class="eb-switch">
					<input type="hidden" name="'.$placid_slider_options.'[enable_eventcat]" id="placid_slider_enable_eventcat" class="hidden_check" value="'.$placid_slider_curr['enable_eventcat'].'">
					<input id="placid_enableeventcat" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventcat'],false).'>
					<label for="placid_enableeventcat"></label>
				</div> 
			</div>
			<div class="ebs-row">	
				<label class="eb-slabel">'.__('Font','placid-slider').'</label>			
				<!-- code for new fonts - 3.0 -->
				<input type="hidden" value="eventm_cat_font" class="ftype_rname">
				<input type="hidden" value="eventm_cat_fontg" class="ftype_gname">
				<input type="hidden" value="eventm_cat_custom" class="ftype_cname">
				<select name="'.$placid_slider_options.'[event_cat_font]" id="placid_slider_event_cat_font" class="main-font">
					<option value="regular" '.selected( $placid_slider_curr['event_cat_font'], "regular", false ).' > Regular Fonts </option>
					<option value="google" '.selected( $placid_slider_curr['event_cat_font'], "google", false ).' > Google Fonts </option>
					<option value="custom" '.selected( $placid_slider_curr['event_cat_font'], "custom", false ).' > Custom Fonts </option>
				</select>	
				<div class="load-fontdiv"></div>
			</div>
			<div class="ebs-row">
				<label>'.__('Font Color','placid-slider').'</label>
				<input type="text" name="'.$placid_slider_options.'[eventm_cat_fcolor]" id="placid_slide_woocat_fcolor" value="'.$placid_slider_curr['eventm_cat_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" />
			</div>
			<div class="ebs-row">
				<label>'.__('Font Size','placid-slider').'</label>
				<input type="number" name="'.$placid_slider_options.'[eventm_cat_fsize]" id="placid_slide_woocat_fsize" class="small-text" value="'.$placid_slider_curr['eventm_cat_fsize'].'" min="1" />
			</div>
			<div class="ebs-row font-style">
				<label>'.__('Font Style','placid-slider').'</label>
				<select name="'.$placid_slider_options.'[eventm_cat_fstyle]" id="placid_slide_woocat_fstyle" >
				<option value="bold" '.selected("bold",$placid_slider_curr['slide_woo_cat_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
				<option value="bold italic" '.selected("bold italic",$placid_slider_curr['slide_woo_cat_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
				<option value="italic" '.selected("italic",$placid_slider_curr['slide_woo_cat_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
				<option value="normal" '.selected("normal",$placid_slider_curr['slide_woo_cat_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
				</select>
			</div>
		</div>

	<div class="eb-altcolor">
		<div class="eb-altcolorinner settings-tbl">
			<div class="ebs-row">
				<label>'.__('Event Description','placid-slider').'</label>
				<div class="eb-switch">
					<input type="hidden" name="'.$placid_slider_options.'[enable_eventdecr]" id="placid_slider_enable_eventdecr" class="hidden_check" value="'.$placid_slider_curr['enable_eventcat'].'">
					<input id="placid_enableeventdecr" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventdecr'],false).'>
					<label for="placid_enableeventdecr"></label>
				</div> 
			</div>
		</div><!--eb-altcolorinner-->
	</div><!--eb-altcolor-->		
		
	<p class="submit">
		<input type="submit" class="button-primary" name="save_eb_settings" value="'.__('Save Changes','placid-slider').'" />
		<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
	</p>';






	
	} elseif($tab == 'eshop') {
	
		$html='<div class="ebs-row">
	<label>'.__('Slide Sale strip ','placid-slider').'</label>
	<div class="eb-switch eb-switchnone">
		<input type="hidden" name="'.$placid_slider_options.'[enable_woosalestrip]" id="placid_slider_enable_woosalestrip" class="hidden_check" value="'.$placid_slider_curr['enable_woosalestrip'].'">
		<input id="placid_enablewoosalestripsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_woosalestrip'],false).'>
		<label for="placid_enablewoosalestripsett"></label>
	</div>
</div>
<div class="ebs-row">
<label>'.__('Strip Text','placid-slider').'</label>
<input type="text" name="'.$placid_slider_options.'[woo_sale_text]" id="placid_woo_saletext" class="eb-smalltext" value="'.$placid_slider_curr['woo_sale_text'].'" /></div>

<div class="ebs-row">
<label>'.__('Strip Color','placid-slider').'</label>
	<input type="text" name="'.$placid_slider_options.'[woo_sale_color]" id="placid_woo_salecolor" value="'.$placid_slider_curr['woo_sale_color'].'" class="wp-color-picker-field" data-default-color="#D8E7EE" /></div>

<div class="ebs-row">
<label>'.__('Text Color','placid-slider').'</label>
	<input type="text" name="'.$placid_slider_options.'[woo_sale_tcolor]" id="placid_woo_saletcolor" value="'.$placid_slider_curr['woo_sale_tcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></div>

</div><!--eb-altcolorinner-->
</div><!--eb-altcolor-->
<div class="settings-tbl">
<div class="ebs-row">
	<label>'.__('Slide Regular price ','placid-slider').'</label>
	<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[enable_wooregprice]" id="placid_slider_enable_wooregprice" class="hidden_check" value="'.$placid_slider_curr['enable_wooregprice'].'">
			<input id="placid_enablewooregpricesett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_wooregprice'],false).'>
			<label for="placid_enablewooregpricesett"></label>
	</div> 
</div>
<div class="ebs-row">
		<label class="eb-slabel">'.__('Font','placid-slider').'</label>			
						<!-- code for new fonts - 3.0 -->
						<input type="hidden" value="slide_woo_price_font" class="ftype_rname">
						<input type="hidden" value="slide_woo_price_fontg" class="ftype_gname">
						<input type="hidden" value="slide_woo_price_custom" class="ftype_cname">
						<select name="'.$placid_slider_options.'[woo_font]" id="placid_slider_woo_font" class="main-font">
							<option value="regular" '.selected( $placid_slider_curr['woo_font'], "regular", false ).' > Regular Fonts </option>
							<option value="google" '.selected( $placid_slider_curr['woo_font'], "google", false ).' > Google Fonts </option>
							<option value="custom" '.selected( $placid_slider_curr['woo_font'], "custom", false ).' > Custom Fonts </option>
				</select>
				<div class="load-fontdiv"></div>
</div>

<div class="ebs-row">
<label>'.__('Font Color','placid-slider').'</label>
	<input type="text" name="'.$placid_slider_options.'[slide_woo_price_fcolor]" id="placid_slide_wooprice_fcolor" value="'.$placid_slider_curr['slide_woo_price_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></div>

<div class="ebs-row">
<label>'.__('Font Size','placid-slider').'</label>
	<input type="number" name="'.$placid_slider_options.'[slide_woo_price_fsize]" id="placid_slide_wooprice_fsize" class="small-text" value="'.$placid_slider_curr['slide_woo_price_fsize'].'" min="1" />
</div>

<div class="ebs-row font-style">
<label>'.__('Font Style','placid-slider').'</label>
				<select name="'.$placid_slider_options.'[slide_woo_price_fstyle]" id="placid_slide_wooprice_fstyle" >
					<option value="bold" '.selected("bold",$placid_slider_curr['slide_woo_price_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
					<option value="bold italic" '.selected("bold italic",$placid_slider_curr['slide_woo_price_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
					<option value="italic" '.selected("italic",$placid_slider_curr['slide_woo_price_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
					<option value="normal" '.selected("normal",$placid_slider_curr['slide_woo_price_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
				</select>
</div>
</div>

<div class="eb-altcolor">
<div class="eb-altcolorinner settings-tbl">
<div class="ebs-row">
	<label>'.__('Slide Sale price','placid-slider').'</label>
	<div class="eb-switch eb-switchnone">
		<input type="hidden" name="'.$placid_slider_options.'[enable_woosprice]" id="placid_slider_enable_woosprice" class="hidden_check" value="'.$placid_slider_curr['enable_woosprice'].'">
		<input id="placid_enablewoospricesett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_woosprice'],false).'>
		<label for="placid_enablewoospricesett"></label>
	</div> 
</div>
<div class="ebs-row"> 
<label class="eb-slabel">'.__('Font','placid-slider').'</label>			
		<!-- code for new fonts - 3.0 -->
		<input type="hidden" value="slide_woo_saleprice_font" class="ftype_rname">
		<input type="hidden" value="slide_woo_saleprice_fontg" class="ftype_gname">
		<input type="hidden" value="slide_woo_saleprice_custom" class="ftype_cname">
		<select name="'.$placid_slider_options.'[woosale_font]" id="placid_slider_woosale_font" class="main-font">
			<option value="regular" '.selected( $placid_slider_curr['woosale_font'], "regular", false ).' > Regular Fonts </option>
			<option value="google" '.selected( $placid_slider_curr['woosale_font'], "google", false ).' > Google Fonts </option>
			<option value="custom" '.selected( $placid_slider_curr['woosale_font'], "custom", false ).' > Custom Fonts </option>
		</select>	
<div class="load-fontdiv"></div>

</div>

<div class="ebs-row">
<label>'.__('Font Color','placid-slider').'</label>
	<input type="text" name="'.$placid_slider_options.'[slide_woo_saleprice_fcolor]" id="placid_slide_woosaleprice_fcolor" value="'.$placid_slider_curr['slide_woo_saleprice_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></div>

<div class="ebs-row">
<label>'.__('Font Size','placid-slider').'</label>
	<input type="number" name="'.$placid_slider_options.'[slide_woo_saleprice_fsize]" id="placid_slide_woosaleprice_fsize" class="small-text" value="'.$placid_slider_curr['slide_woo_saleprice_fsize'].'" min="1" />
</div>

<div class="ebs-row font-style">
<label>'.__('Font Style','placid-slider').'</label>
	<select name="'.$placid_slider_options.'[slide_woo_saleprice_fstyle]" id="placid_slide_woosaleprice_fstyle" >
		<option value="bold" '.selected("bold",$placid_slider_curr['slide_woo_saleprice_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
		<option value="bold italic" '.selected("bold italic",$placid_slider_curr['slide_woo_saleprice_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
		<option value="italic" '.selected("italic",$placid_slider_curr['slide_woo_saleprice_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
		<option value="normal" '.selected("normal",$placid_slider_curr['slide_woo_saleprice_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
	</select>
</div>


<div class="ebs-row">
	<label>'.__('Stars','placid-slider').'</label>
	<div class="eb-switch eb-switchnone">
		<input type="hidden" name="'.$placid_slider_options.'[enable_woostar]" id="placid_slider_enable_woostar" class="hidden_check" value="'.$placid_slider_curr['enable_woostar'].'">
		<input id="placid_enablewoostarsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_woostar'],false).'>
		<label for="placid_enablewoostarsett"></label>
	</div> 
</div>
<div class="ebs-row">
	<div style="display: flex;">';
				$url='images/star/gold.png';
				$url1='images/star/black.png';
				$url2='images/star/red.png'; 
				$url3='images/star/green.png';
				$url4='images/star/grogreen.png';
				$url5='images/star/yellow.png';
				$url6='images/star/grored.png';
				$url7='images/star/groyellow.png';
	$html .= '</div>
			<div class="arrows"><img src="'.placid_slider_plugin_url($url).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star1" class="woo_star" value="gold" '.checked('gold',$placid_slider_curr['nav_woo_star'],false).' /> </div>

			<div class="arrows"><img src="'.placid_slider_plugin_url($url1).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star2" class="woo_star" value="black" '.checked('black',$placid_slider_curr['nav_woo_star'],false).' /> </div>

			<div class="arrows"><img src="'.placid_slider_plugin_url($url2).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star3" class="woo_star" value="red" '.checked('red',$placid_slider_curr['nav_woo_star'],false).' /> </div>

			<div class="arrows"><img src="'.placid_slider_plugin_url($url3).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star4" class="woo_star" value="green" '.checked('green',$placid_slider_curr['nav_woo_star'],false).' /> </div>

			<div class="arrows"><img src="'.placid_slider_plugin_url($url4).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star5" class="woo_star" value="grogreen" '.checked('grogreen',$placid_slider_curr['nav_woo_star'],false).' /> </div>

			<div class="arrows"><img src="'.placid_slider_plugin_url($url5).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star6" class="woo_star" value="yellow" '.checked('yellow',$placid_slider_curr['nav_woo_star'],false).' /> </div>

			<div class="arrows"><img src="'.placid_slider_plugin_url($url6).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star7" class="woo_star" value="grored" '.checked('grored',$placid_slider_curr['nav_woo_star'],false).' /> </div>

			<div class="arrows"><img src="'.placid_slider_plugin_url($url7).'" width="16" height="16"/>
			<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star8" class="woo_star" value="groyellow" '.checked('groyellow',$placid_slider_curr['nav_woo_star'],false).' /> </div>
			<p class="submit">
				<input type="submit" class="button-primary" name="save_eb_settings" value="'.__('Save Changes','placid-slider').'" />
				<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
			</p>
		</div>';
	}
	echo $html;
	die();
}

/*
	Delete Slide from custom Slider
*/

function placid_delete_slide() {
	check_ajax_referer( 'placid-preview-nonce', 'preview_html' );
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$current_slider = isset($_POST['slider_id'])?$_POST['slider_id']:'0'; 
	$post_id = isset($_POST['post_id'])?$_POST['post_id']:'0'; 
	$sql = "DELETE FROM $table_name WHERE post_id = '$post_id' AND slider_id = '$current_slider' LIMIT 1";
	$wpdb->query($sql);
	$current_url = admin_url('admin.php?page=placid-slider-easy-builder');
	$urlarg = array();
	$urlarg['id'] = $current_slider;
	$query_arg = add_query_arg( $urlarg ,$current_url);
	echo $current_url = $query_arg;
	//echo "Deleated Successfully!";
	die();
}
/*
* -----------------------------------------------------------------
*	Create new slider and QuickTag Functions 
* -----------------------------------------------------------------
*/
function placid_woo_product() {
	check_ajax_referer( 'placid-slider-nonce', 'placid_slider_pg' );
	$type = $_POST['type'];
	$param   = $_POST['term'];
	$options = array();
	global $wpdb,$table_prefix;
	$tbl = $table_prefix.'posts';
	if($type == 'grouped') {
		$args = array(
			'post_type'	=> 'product',
			'tax_query'	=> array( array('taxonomy' => 'product_type','field' => 'slug','terms' => 'grouped') )
		);
		$grouped = get_posts($args);
		foreach($grouped as $group) {
			if (preg_match('#^'.$param.'#i', $group->post_title) === 1) {
				$options['product'][] = array(
					'ID' => $group->ID,
					'title' => $group->post_title
				);
			}
		}
	} else {
		$sql = "SELECT * FROM $tbl WHERE post_type = 'product' and post_title LIKE '".$param."%'";
		$results = $wpdb->get_results($sql);
		foreach($results as $row ) {
		   // more structure in data allows an easier processing
		   $options['product'][] = array(
			'ID' => $row->ID,
			'title' => $row->post_title
		   );
		}
	}
	echo json_encode($options);
	die();
}                                  
function placid_show_taxonomy() {
	check_ajax_referer( 'placid-slider-nonce', 'placid_slider_pg' );
	$html = '';
	$post_type = isset($_POST['post_type'])?$_POST['post_type']:'';
	$update = isset($_POST['update'])?$_POST['update']:'';
	$quicktag = isset($_POST['quicktag'])?$_POST['quicktag']:'';
	$option = isset($_POST['option'])?$_POST['option']:'';
	$taxonomy_names = get_object_taxonomies( $post_type );
	if($update != '') $html .= '<th  scope="row">'. __('Taxonomy','placid-slider').'</th>';
	elseif($quicktag != '') $html .= '<td  scope="row">'. __('Taxonomy','svslider').'</td>';
	else $html .= '<label>'.__('Taxonomy','placid-slider').'</label>';
	if($update != '') $html .= '<td><select name="taxonomy_name" id="placid_taxonomy" class="taxo-update" >';
	elseif($quicktag != '') $html .= '<td><div class="styled-select"><select name="taxonomy" id="placid_taxonomy"  >';
	elseif($option != '') $html .= '<select name="'.$option.'[taxonomy]" id="placid_taxonomy" >';
	else $html .= '<select name="taxonomy_name" id="placid_taxonomy" class="ps-form-input" >';
	$html .= '<option value="" >Select Taxonomy </option>';
	foreach ( $taxonomy_names as $taxonomy_name ) { 
		$html .= '<option value="'.$taxonomy_name.'" >' . $taxonomy_name . '</option>';
	}
	$html .= '</select>';
	if($update != '') $html .= '</td>';
	elseif($quicktag != '') $html .= '</div></td>';
	echo $html;
	die();
}
function placid_show_term() {
	check_ajax_referer( 'placid-slider-nonce', 'placid_slider_pg' );
	$html = '';
	$taxo = isset($_POST['taxo'])?$_POST['taxo']:'';
	$update = isset($_POST['update'])?$_POST['update']:'';
	$quicktag = isset($_POST['quicktag'])?$_POST['quicktag']:'';
	$preview = isset($_POST['preview'])?$_POST['preview']:'';
	$option = isset($_POST['option'])?$_POST['option']:'';
	$terms = get_terms( $taxo );
	if($update != '') $html .= '<th  scope="row">'. __('Term','placid-slider').'</th>';
	elseif($quicktag != '') $html .= '<td  scope="row">'. __('Term','svslider').'</td>';
	else $html .= '<label>'.__('Term','placid-slider').'</label>';
	if($update != '') $html .= '<td><select name="taxonomy_term[]" id="placid_taxonomy_term" class="ps-form-input" multiple >';
	elseif($quicktag != '') $html .= '<td><select class="placid-multiselect" multiple >';
	elseif($preview != '') $html .= '<select class="placid-multiselect" id="placid_taxonomy_term" multiple >';
	else $html .= '<select name="taxonomy_term[]" id="placid_taxonomy_term" class="ps-form-input" multiple >';
	foreach ( $terms as $term ) { 
		if(isset($term->slug)) {
			$html .= '<option value="'.$term->slug.'" >' . $term->name . '</option>';
		}
	} 
	$html .= '</select>';
	if($update != '') $html .= '</td>';
	elseif($quicktag != '') $html .= '<input type="hidden" name="term" value="" /></td>'; 
	elseif($preview != '') { 
		if($option != 'undefined' && $option != '') $html .= '<input type="hidden" name="'.$option.'[taxonomy_term]" value="" />';
		else $html .= '<input type="hidden" name="taxonomy_term" value="" />';
	}
	echo $html;
	die();
}
/*
* -----------------------------------------------------------------
*	Google fonts Functions 
* -----------------------------------------------------------------
*/
function placid_google_font_weight() {
	//  added review
	check_ajax_referer( 'placid-google-nonce', 'google_fonts' );
	$arrg=array();
	$html = get_placid_google_font_weight( $currfont = $_POST['font'], $name = $_POST['fname'], $id = $_POST['fid'], $current_value ='' );
	$html_fsubset = get_placid_google_font_subset_html( $currfont = $_POST['font'], $subsetname = $_POST['fsubsetnm'], $subsetid = $_POST['fsubsetid'], $current_value ='' );
	array_push($arrg, $html, $html_fsubset);
	echo json_encode($arrg);
	die();
}
function placid_load_fontsdiv_callback() {
	check_ajax_referer( 'placid-google-nonce', 'google_fonts' );
	$html ='';
	$placid_slider_options = 'placid_slider_options'.$_POST['currcounter'];
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
	$currpage = $_POST['currpage'];
	$nm = isset($_POST['nm'])?$_POST['nm']:'';
	$type = isset($_POST['font_type'])?$_POST['font_type']:'';
	if( $currpage == 'placid-slider-settings' ) {
		if( $type == 'regular' ) {
			$html.='<table><tr valign="top">
			<th scope="row">'. __('Font','placid-slider') .'</th>
			<td>';
			$dfonts=get_placid_default_fonts($name= $placid_slider_options."[$nm]", $id = "placid_slider_$nm", $class = "havemoreinfo", $current_value=$placid_slider_curr["$nm"] );
			$html.=$dfonts;
			$html.='<span class="moreInfo">
				<div class="tooltip1">'. __('This value will be fallback font if Google web font value is specified below','placid-slider').'
				</div>
			</span>
			</td>
			</tr></table>';
		} else if( $type == 'google' ) {
			$html='';
			$nmgw = $nm.'w';
			$nmgsubset = $nm.'subset';
			$html.='<table><tr valign="top">
			<th scope="row">'. __('Google Web Font','placid-slider').'</th>
			<td>';
				$google_fonts  = get_placid_google_fonts_html( $name = $placid_slider_options."[$nm]", $gid = "placid_slider_$nm", $current_value = $placid_slider_curr["$nm"]);
				$html.=$google_fonts; 
			$html.='</td>	
			</tr>

			<tr valign="top">
			<th scope="row">'. __('Google Font Weight','placid-slider').'</th>
			<td class="google-fontsweight">';
				$google_fw=get_placid_google_font_weight( $currfont = $placid_slider_curr[$nm], $name = $placid_slider_options."[$nmgw]", $id = "placid_slider_$nmgw", $current_value = $placid_slider_curr["$nmgw"] );
				$html.=$google_fw;
			$html.='</td>
			</tr>

			<tr valign="top">
			<th scope="row">'. __('Google Font Subset','placid-slider').'</th>
			<td class="google-fontsubset">';
				$google_fsubset=get_placid_google_font_subset_html($currfont = $placid_slider_curr[$nm], $name = $placid_slider_options."[$nmgsubset][]", $id = "placid_slider_$nmgsubset", $current_value = $placid_slider_curr["$nmgsubset"]);
				$html.=$google_fsubset;
			$html.='</td>
			</tr></table>';
		} else if( $type == 'custom' ) {
			$html.='<table><tr valign="top">
			<th scope="row">'. __('Custom Font','placid-slider').'</th>
			<td>';
				$custom_font=get_placid_custom_font_html($name = $placid_slider_options."[$nm]", $id = "placid_slider_$nm", $current_value = $placid_slider_curr["$nm"]);
				$html.=$custom_font;
			$html.='</td>
			</tr></table>';
		}
	} else { //Easy builder page fonts
			if( $type == 'regular' ) {
			$html.='<div class="ebs-row">
			<label>'. __('Font','placid-slider') .'</label>';
			$dfonts=get_placid_default_fonts($name= $placid_slider_options."[$nm]", $id = "placid_slider_$nm", $class = "havemoreinfo", $current_value=$placid_slider_curr["$nm"] );
			$html.=$dfonts;
			$html.='<span class="moreInfo">
				<div class="tooltip1">'. __('This value will be fallback font if Google web font value is specified below','placid-slider').'
				</div>
			</span>
			</div>';
		} else if( $type == 'google' ) {
			$html='';
			$nmgw = $nm.'w';
			$nmgsubset = $nm.'subset';
			$html.='<div class="ebs-row">
			<label>'. __('Google Web Font','placid-slider').'</label>';
				$google_fonts  = get_placid_google_fonts_html( $name = $placid_slider_options."[$nm]", $gid = "placid_slider_$nm", $current_value = $placid_slider_curr["$nm"]);
				$html.=$google_fonts; 
			$html.='</div>	

			<div class="ebs-row">	
			<label>'. __('Google Font Weight','placid-slider').'</label>
			<div class="google-fontsweight">';
				$google_fw=get_placid_google_font_weight( $currfont = $placid_slider_curr[$nm], $name = $placid_slider_options."[$nmgw]", $id = "placid_slider_$nmgw", $current_value = $placid_slider_curr["$nmgw"] );
				$html.=$google_fw;
			$html.='</div><div>

			<div class="ebs-row">
			<label>'. __('Google Font Subset','placid-slider').'</label>
			<div class="google-fontsubset">';
				$google_fsubset=get_placid_google_font_subset_html($currfont = $placid_slider_curr[$nm], $name = $placid_slider_options."[$nmgsubset][]", $id = "placid_slider_$nmgsubset", $current_value = $placid_slider_curr["$nmgsubset"]);
				$html.=$google_fsubset;
			$html.='</div></div>';
		} else if( $type == 'custom' ) {
			$html.='<div class="ebs-row">
			<label>'. __('Custom Font','placid-slider').'</label>';
				$custom_font=get_placid_custom_font_html($name = $placid_slider_options."[$nm]", $id = "placid_slider_$nm", $current_value = $placid_slider_curr["$nm"]);
				$html.=$custom_font;
			$html.='</div>';
		}
	}
	echo $html;
	die();	
}
/*
* -----------------------------------------------------------------
*	Settings Set Preview Param Function
* -----------------------------------------------------------------
*/
function placid_preview_params() {
	check_ajax_referer( 'placid-settings-nonce', 'settings_nonce' );
	$slider_type = isset($_POST['slider_type'])?$_POST['slider_type']:'';
	$cntr = isset($_POST['cntr'])?$_POST['cntr']:'';
	$placid_slider_options='placid_slider_options'.$cntr;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$html = '<th scope="row">'. __('Choose Sub Type','placid-slider').'</th> 
		<td>
			<fieldset>
				<legend class="screen-reader-text"><span>'.__('Preview Slider Params','placid-slider').'</span></legend>';
	$html .= '<label for="'.$placid_slider_options.'[offset]" >'.__('Offset','placid-slider').'</label><input type="number" name="'.$placid_slider_options.'[offset]" value="'.$placid_slider_curr['offset'].'" id="placid_slider_offset" class="small-text code" >';
	if($slider_type == 0 ) {
		//slider names for Custom Slider
		$slider_id = $placid_slider_curr['slider_id'];	
		$sliders = placid_ss_get_sliders();
		$sname_html='<option value="0" selected >Select the Slider</option>';
 		
	  	foreach ($sliders as $slider) { 
		 if($slider['slider_id']==$slider_id ){$selected = 'selected';} else{$selected='';}
			 if($slider['slider_id']!='0') {
			 	$sname_html =$sname_html.'<option value="'.$slider['slider_id'].'" '.$selected.'>'.$slider['slider_name'].'</option>';		 
			}
	  	} 
		
		$html .= '<label for="'.$placid_slider_options.'[slider_id]" class="placid_sid">'.__('Select Slider Name','placid-slider').'</label><select id="placid_slider_id" name="'.$placid_slider_options.'[slider_id]" class="placid_sid">'.$sname_html.'</select>';
	} elseif($slider_type == 1 ) {
		// Categories For Category Slider
		$categories = get_categories();
		$scat_html='<option value="" selected >Select the Category</option>';
		foreach ($categories as $category) { 
			 if($category->slug==$placid_slider_curr['catg_slug']){$selected = 'selected';} else{$selected='';}
			 $scat_html =$scat_html.'<option value="'.$category->slug.'" '.$selected.'>'. $category->name .'</option>';
		} 
		$html .= '<label for="'.$placid_slider_options.'[catg_slug]" class="placid_catslug">'. __('Select Category','placid-slider').'</label><select id="placid_slider_catslug" name="'.$placid_slider_options.'[catg_slug]" class="placid_catslug">'.$scat_html.'</select>';
	} elseif( $slider_type == 3 ) {
		// WooCommerce Slider	
		$pstyle = "display:none;";
		if($placid_slider_curr['woo_type'] == 'recent') { $woor = 'selected'; } else $woor = '';
		if($placid_slider_curr['woo_type'] == 'upsells') { $woou = 'selected'; $pstyle = "display:block;";} else $woou = '';
		if($placid_slider_curr['woo_type'] == 'crosssells') { $wooc = 'selected'; $pstyle = "display:block;"; } else $wooc = '';
		if($placid_slider_curr['woo_type'] == 'external') { $wooe = 'selected'; $pstyle = "display:block;"; } else $wooe = '';
		if($placid_slider_curr['woo_type'] == 'grouped') { $woog = 'selected'; $pstyle = "display:block;"; } else $woog = '';
		// WooCommerce Categories
		if( is_plugin_active('woocommerce/woocommerce.php') ) {
			$wooterms = get_terms('product_cat');
			$catgs = isset($placid_slider_curr['product_woocatg_slug'])?$placid_slider_curr['product_woocatg_slug']:'';
			$catgs_a = explode(",",$catgs);
			if($catgs == '' ) $selc = 'selected'; else $selc = '';
			$woocat_html='<option value="" '.$selc.' >All Category</option>';
			foreach( $wooterms as $woocategory) {
				if($catgs != '' && in_array($woocategory->slug, $catgs_a)){
					$selected = 'selected';
				} else{ $selected=''; }
				$woocat_html =$woocat_html.'<option value="'.$woocategory->slug.'" '.$selected.'>'. $woocategory->name .'</option>';
			}
		}
		$product_id = isset($placid_slider_curr['product_id'])?$placid_slider_curr['product_id']:''; 
		if($product_id != '') $product = get_the_title($product_id);
		$html .= '<label for="'.$placid_slider_options.'[woo_type]" class="placid_woo_type">'.__('Select Slider Type','placid-slider').'</label>
<select name="'.$placid_slider_options.'[woo_type]" class="placid_woo_type" id="woo_slider_preview" >
	<option value="recent" '.$woor.'>'. __('Recent Product Slider','placid-slider').'</option>
	<option value="upsells"'.$woou.'>'. __('Upsells Product Slider','placid-slider').'</option>
	<option value="crosssells"'.$wooc.'>'. __('Crosssells Product Slider','placid-slider').'</option>
	<option value="external"'.$wooe.'>'. __('External Product Slider','placid-slider').'</option>
	<option value="grouped"'.$woog.'>'. __('Grouped Product Slider','placid-slider').'</option>
</select>';
		$html .= '<label for="'.$placid_slider_options.'[product_id]" class="woo-product"  style="'.$pstyle.'" >'.__('Product','placid-slider').'</label><input id="products" value="'.$product.'" class="woo-product" style="'.$pstyle.'" >
		<input id="product_id" name="'.$placid_slider_options.'[product_id]" value="'.$product_id.'" type="hidden" >';
		$html .= '<label for="'.$placid_slider_options.'[product_woocatg_slug]" class="placid_woo_catg">'.__('Select Category','placid-slider').'</label><select id="placid_slider_woo_catslug" class="placid-multiselect" multiple > '.$woocat_html.'</select><input type="hidden" name="'.$placid_slider_options.'[product_woocatg_slug]" value="'.$placid_slider_curr['product_woocatg_slug'].'" />';
	} elseif( $slider_type == 4 ) {
		$ecstyle="display:none;";
		if ($placid_slider_curr['ecom_type'] == "0"){ $rsel = "selected";} else { $rsel = ''; }
		if ($placid_slider_curr['ecom_type'] == "1"){ $csel = "selected"; $ecstyle="display:table-row;"; } else { $csel =''; }
		$ecomcat_html='<option value="" selected >Select the Category</option>';
		if( is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) {
			$ecomterms = get_terms('wpsc_product_category');
			$ecomcat_html='<option value="" selected >Select the Category</option>';
			foreach( $ecomterms as $ecomcategory) {
				if($ecomcategory->slug==$placid_slider_curr['product_ecomcatg_slug']){$selected = 'selected';} else{$selected='';}
				$ecomcat_html =$ecomcat_html.'<option value="'.$ecomcategory->slug.'" '.$selected.'>'.$ecomcategory->name.'</option>';
			}
		}
		$html .= '<label for="'.$placid_slider_options.'[ecom_type]" class="placid_ecom_type">'.__('Select Slider Type','placid-slider').'</label>
<select name="'.$placid_slider_options.'[ecom_type]" class="placid_ecom_type" id="ecom_slider_preview" onchange="ecomtype(this.value);" >
<option value="0" '.$rsel.' >'. __('eCom Recent Product Slider','placid-slider').'</option>
<option value="1" '.$csel.' >'. __('eCom Product Category Slider','placid-slider').'</option>
</select><label for="'.$placid_slider_options.'[product_ecomcatg_slug]" class="placid_ecom_catg" style="'.$ecstyle.'">'.__('Select Category','placid-slider').'</label>
<select id="placid_slider_ecom_catslug" name="'.$placid_slider_options.'[product_ecomcatg_slug]" class="placid_ecom_catg"  style="'.$ecstyle.'">'.$ecomcat_html.'</select>';
	} elseif( $slider_type == 5 ) {
		// Event Manager Slider
		if($placid_slider_curr['event_type'] == 'future') { $eventmf = 'selected'; } else $eventmf = '';
		if($placid_slider_curr['event_type'] == 'past') { $eventmp = 'selected'; } else $eventmp = '';
		if($placid_slider_curr['event_type'] == 'all') { $eventmr = 'selected'; } else $eventmr = '';	
		// Event Categories
		$eventcat_html='<option value="" selected >Select the Category</option>';
		if( is_plugin_active('events-manager/events-manager.php') ) { 
			$eventterms = get_terms('event-categories');
			$catgs = isset($placid_slider_curr['events_mancatg_slug'])?$placid_slider_curr['events_mancatg_slug']:'';
			$catgs_a = explode(",",$catgs);
			if($catgs == '' ) $selc = 'selected'; else '';
			$eventcat_html='<option value="" '.$selc.' >All Categories</option>';
			foreach( $eventterms as $eventcategory) {
				if($catgs != '' && in_array($eventcategory->slug, $catgs_a)){$selected = 'selected';} else{$selected='';}
				$eventcat_html =$eventcat_html.'<option value="'.$eventcategory->slug.'" '.$selected.'>'.$eventcategory->name.'</option>';
			} 
			// Event Tags
			$evtags = get_terms("event-tags");
			$tags = isset($placid_slider_curr['events_mantag_slug'])?$placid_slider_curr['events_mantag_slug']:'';
			$tags_a = explode(",",$tags);
			if($tags == '') $sel = 'selected'; else $sel = '';
			$evtag_html='<option value="" '.$sel.' >All Tags</option>';
			foreach( $evtags as $tags) {
				if($tags != '' && in_array($tags->slug, $tags_a)){$selected = 'selected';} else {$selected='';}
				$evtag_html = $evtag_html.'<option value="'.$tags->slug.'" '.$selected.'>'.$tags->name.'</option>';
			}
		}
		$html .= '<label for="'.$placid_slider_options.'[event_type]" class="placid_eventman_type">'.__('Select Slider Scope','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[event_type]" class="placid_eventman_type" id="eventm_slider_preview" >
			<option value="future" '.$eventmf.'>'.__('Future Events','placid-slider').'</option>
			<option value="past" '.$eventmp.'>'.__('Past Events','placid-slider').'</option>
			<option value="all" '.$eventmr.'>'.__('Recent Events','placid-slider').'</option>
		</select>';
		$html .= '<label for="'.$placid_slider_options.'[events_mancatg_slug]" class="placid_eventman_catg">'.__('Select Category','placid-slider').'</label>
<select id="placid_slider_event_catslug" class="placid-multiselect" multiple>'.$eventcat_html.'</select><input type="hidden" name="'.$placid_slider_options.'[events_mancatg_slug]" value="'.$placid_slider_curr['events_mancatg_slug'].'" />';
		$html .= '<label for="'.$placid_slider_options.'[events_mantag_slug]" class="placid_eventman_catg">'.__('Select Tag','placid-slider').'</label>
<select class="placid-multiselect" multiple >'.$evtag_html.'</select><input type="hidden" name="'.$placid_slider_options.'[events_mantag_slug]" value="'.$placid_slider_curr['events_mantag_slug'].'" />';
	} elseif( $slider_type == 6 ) {
		// Event Calendar Slider
		if($placid_slider_curr['eventcal_type'] == 'list') { $ecalu = 'selected'; } else $ecalu = '';	
		if($placid_slider_curr['eventcal_type'] == 'past') { $ecalp = 'selected'; } else $ecalp = '';
		if($placid_slider_curr['eventcal_type'] == 'all') { $ecala = 'selected'; } else $ecala = '';
		$eventcal_html='<option value="" selected >Select the Category</option>';
		if( is_plugin_active('the-events-calendar/the-events-calendar.php') ) { 
			$eventcalterms = get_terms('tribe_events_cat');
			$catgs = isset($placid_slider_curr['events_calcatg_slug'])?$placid_slider_curr['events_calcatg_slug']:'';
			$catgs_a = explode(",",$catgs);
			if($catgs == '') $csel = 'selected'; else $csel = '';
			$eventcal_html='<option value="" '.$csel.' >All Category</option>';
			foreach( $eventcalterms as $eventcalcat) {
				if($catgs != '' && in_array($eventcalcat->slug, $catgs_a)){$selected = 'selected';} else{$selected='';}
				$eventcal_html =$eventcal_html.'<option value="'.$eventcalcat->slug.'" '.$selected.'>'.$eventcalcat->name.'</option>';
			}
			$evcaltags = get_terms("post_tag");
			$tags = isset($placid_slider_curr['events_caltag_slug'])?$placid_slider_curr['events_caltag_slug']:'';
			$tags_a = explode(",",$tags);
			if($tags == '') $sel = 'selected'; else $sel = '';
			$evcaltag_html='<option value="" '.$sel.' >All Tags</option>';
			foreach( $evcaltags as $tags) {
				if($tags != '' && in_array($tags->slug, $tags_a)){ $selected = 'selected';} else {$selected='';}
				$evcaltag_html = $evcaltag_html.'<option value="'.$tags->slug.'" '.$selected.'>'.$tags->name.'</option>';
			}
		}
		$html .= '<label for="'.$placid_slider_options.'[eventcal_type]" class="placid_eventcal_type">'.__('Select Slider Type','placid-slider').'</label>
<select name="'.$placid_slider_options.'[eventcal_type]" id="eventcal_slider_preview" >
	<option value="list" '.$ecalu.' >'.__('Future Events','placid-slider').'</option>
	<option value="past"'.$ecalp.' >'.__('Past Events','placid-slider').'</option>
	<option value="all" '.$ecala.' >'. __('Recent Events','placid-slider').'</option>
</select>';
		$html .= '<label for="'.$placid_slider_options.'[events_calcatg_slug]" >'.__('Select Category','placid-slider').'</label>
<select id="placid_slider_eventcal_catslug" class="placid-multiselect" multiple>'.$eventcal_html.'</select><input type="hidden" name="'.$placid_slider_options.'[events_calcatg_slug]" value="'.$placid_slider_curr['events_calcatg_slug'].'" />';
		$html .= '<label for="'.$placid_slider_options.'[events_caltag_slug]" >'.__('Select Tag','placid-slider').'</label>
<select id="placid_slider_eventcal_catslug" class="placid-multiselect" multiple>'.$evcaltag_html.'</select><input type="hidden"  name="'.$placid_slider_options.'[events_caltag_slug]" value="'.$placid_slider_curr['events_caltag_slug'].'" />';
	} elseif( $slider_type == 7 ) {
		// Taxonomy Slider
		$post_types = get_post_types(); 
		$post_type = isset($placid_slider_curr['taxonomy_posttype'])?$placid_slider_curr['taxonomy_posttype']:'post';
		if($post_type == '') $post_type = 'post';
		$taxonomy_names = get_object_taxonomies( $post_type );
		$html .='<label for="'.$placid_slider_options.'[taxonomy_posttype]" >'.__('Post Type','placid-slider').'</label><select name="'.$placid_slider_options.'[taxonomy_posttype]" id="placid_taxonomy_posttype" >';
		foreach ( $post_types as $cpost_type ) {
			$ptselected =''; 
			if($post_type == $cpost_type) $ptselected="selected";
			$html .='<option value="'.$cpost_type.'" '.$ptselected.' >' . $cpost_type . '</option>';
		}
		$html .='</select>';
		$html .='<div class="sh-taxo"><label for="'.$placid_slider_options.'[taxonomy]" >'.__('Taxonomy','placid-slider').'</label>
	<select name="'.$placid_slider_options.'[taxonomy]" id="placid_taxonomy" class="taxo-update" >
	<option value="" >Select Taxonomy </option>';
	$taxo = isset($placid_slider_curr['taxonomy'])?$placid_slider_curr['taxonomy']:'';
	foreach ( $taxonomy_names as $taxonomy_name ) { 
		$taxoselected = '';
		if( $taxo == $taxonomy_name ) $taxoselected = 'selected';
		$html .='<option value="'.$taxonomy_name.'" '.$taxoselected.' >' . $taxonomy_name . '</option>';
	} 
	$html .='</select></div>';
	if($taxo != '') $term_style = 'display:block'; else $term_style = 'display:none';
	$html .='<div class="sh-term" style="'.$term_style.'" ><label for="'.$placid_slider_options.'[taxonomy_term]" >'.__('Term','placid-slider').'</label>
	<select id="placid_taxonomy_term" class="placid-multiselect" multiple >';
	$terms = get_terms( $taxo );
	$taxoterm = isset($placid_slider_curr['taxonomy_term'])?$placid_slider_curr['taxonomy_term']:'';
	$taxoterm = explode(",",$taxoterm);
	foreach ( $terms as $term ) { 
		$termselected = '';
		if(in_array($term->slug, $taxoterm)) $termselected = 'selected';
		$html .= '<option value="'.$term->slug.'" '.$termselected.' >' . $term->name . '</option>';
	}
	$html .='</select><input type="hidden" name="'.$placid_slider_options.'[taxonomy_term]" id="placid_taxonomy" value="'.$placid_slider_curr['taxonomy_term'].'"></div><input type="hidden" id="placid-option" value="'.$placid_slider_options.'">';
	$show = isset($placid_slider_curr['taxonomy_show'])?$placid_slider_curr['taxonomy_show']:'';
	if($show == '') $dsel = 'selected'; else $dsel = '';
	if($show == 'per_tax') $psel = 'selected'; else $psel = '';
	$html .='<label for="'.$placid_slider_options.'[taxonomy_show]" >'.__('Show','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[taxonomy_show]" id="placid_taxonomy_show" class="ps-form-input" >
			<option value="" '.$dsel.' >'.__('Default','placid-slider').'</option>
			<option value="per_tax" '.$psel.' >'. __('One Per Tax','placid-slider').'</option>
		</select>';
	$operator = isset($placid_slider_curr['taxonomy_operator'])?$placid_slider_curr['taxonomy_operator']:'';
	if($operator == 'IN' || $operator == '') $isel = 'selected'; else $isel = '';
	if($operator == 'NOT IN') $nsel = 'selected'; else $nsel = '';
	if($operator == 'AND') $asel = 'selected'; else $asel = '';
	$html .='<label for="'.$placid_slider_options.'[taxonomy_operator]" >'.__('Operator','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[taxonomy_operator]" id="placid_taxonomy_operator" >
			<option value="IN" '.$isel.' >'.__('IN','placid-slider').'</option>
			<option value="NOT IN" '.$nsel.' >'. __('NOT IN','placid-slider').'</option>
			<option value="AND" '.$asel.' >'. __('AND','placid-slider').'</option>
		</select>';
	$html .='<label for="'.$placid_slider_options.'[taxonomy_author]" >'.__('Author','placid-slider').'</label><select class="placid-multiselect" multiple >
	<option value="" >Select Author </option>';
	$auth = isset($placid_slider_curr['taxonomy_author'])?$placid_slider_curr['taxonomy_author']:'';			
	$auth = explode(",",$auth);		
	$blogusers = get_users();	
	// Array of WP_User objects.
	foreach ( $blogusers as $user ) {
		 $aselected = '';
		if(in_array($user->ID, $auth)) $aselected = 'selected';
		$html .='<option value="'.$user->ID.'" '.$aselected.' >' . $user->user_nicename . '</option>';
	}
	$html .='</select><input type="hidden" name="'.$placid_slider_options.'[taxonomy_author]" value="'.$placid_slider_curr['taxonomy_author'].'" />';
} elseif( $slider_type == 8 ) {
				// RSS feed Slider
		$html .='<label for="'.$placid_slider_options.'[rssfeed_feedurl]" >'.__('Feed Url','placid-slider').'</label><input type="text" name="'.$placid_slider_options.'[rssfeed_feedurl]" id="placid_rssfeed_feedurl" class="regular-text code" value="'.htmlentities( $placid_slider_curr['rssfeed_feedurl'] , ENT_QUOTES).'" placeholder="http://mashable.com/feed/" />';
		$html .='<label for="'.$placid_slider_options.'[rssfeed_id]" >'.__('RSS Slider Id','placid-slider').'</label><input type="number" name="'.$placid_slider_options.'[rssfeed_id]" id="placid_rssfeed_id" class="small-text code" value="'.htmlentities( $placid_slider_curr['rssfeed_id'] , ENT_QUOTES).'"/>';
		$html .='<label for="'.$placid_slider_options.'[rssfeed_default_image]" >'.__('Default Image','placid-slider').'</label><input type="text" name="'.$placid_slider_options.'[rssfeed_default_image]" id="placid_rssfeed_defimage" class="regular-text code" value="'.htmlentities( $placid_slider_curr['rssfeed_default_image'] , ENT_QUOTES).'" />';
		$html .='<label for="'.$placid_slider_options.'[rssfeed_image_class]" >'.__('Image Class','placid-slider').'</label><input type="text" name="'.$placid_slider_options.'[rssfeed_image_class]" id="placid_rssfeed_image_class" class="regular-text code" value="'. htmlentities( $placid_slider_curr['rssfeed_image_class'] , ENT_QUOTES).'" />';
		$source = $placid_slider_curr['rssfeed_src'];
		$html .='<label for="'.$placid_slider_options.'[rssfeed_src]" >'.__('Source','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[rssfeed_src]" id="placid_rssfeed_src" class="rss-source">
			<option value="" '.selected($source,"").'>'. __('Other','placid-slider').'</option>
			<option value="smugmug" '.selected($source,"smugmug").'>'. __('Smugmug','placid-slider').'</option>
		</select>
		';
		$size_style=$feed_style="style='display:none;'";
		if($source == "smugmug" ) $size_style="style='table-cell;'";
		else  $feed_style="style='display:table-cell;'";
		$feed = $placid_slider_curr['rssfeed_feed'];
		$html .='<label for="'.$placid_slider_options.'[rssfeed_feed]" class="rss-feed" '.$feed_style.' >'.__('Feed','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[rssfeed_feed]" id="placid_rssfeed_feed" class="rss-feed" '.$feed_style.'>
			<option value="" '.selected($feed,"").'>'.__('Other','placid-slider').'</option>
			<option value="atom" '. selected($feed,"atom").'>'.__('Atom','placid-slider').'</option>
		</select>
		';
		$size = $placid_slider_curr['rssfeed_size'];
		$html .='<label for="'.$placid_slider_options.'[rssfeed_size]" class="rss-size" '.$size_style.' >'.__('Size','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[rssfeed_size]" id="placid_rssfeed_size" class="rss-size" '.$size_style.'>
			<option value="Ti" '.selected($size, "Ti").'>'.__('Tiny thumbnails','placid-slider').'</option>
			<option value="Th" '. selected($size, "Ti").'>'.__('Large thumbnails','placid-slider').'</option>
			<option value="S" '. selected($size, "S").'>'.__('Small','placid-slider').'</option>
			<option value="M" '. selected($size, "M").'>'.__('Medium','placid-slider').'</option>
			<option value="L" '. selected($size, "L").'>'.__('Other','placid-slider').'</option>
			<option value="XL" '. selected($size, "XL").'>'.__('Large','placid-slider').'</option>
			<option value="X2" '. selected($size, "X2").'>'.__('X2Large','placid-slider').'</option>
			<option value="X3" '. selected($size, "X3").'>'.__('X3Large','placid-slider').'</option>
			<option value="O" '. selected($size, "O").'>'.__('Original','placid-slider').'</option>
		</select>
		';
		$rsscontent = $placid_slider_curr['rssfeed_content'];
		$html .='<label for="'.$placid_slider_options.'[rssfeed_content]" >'.__('Scan child node content for images','placid-slider').'</label>
		<input type="checkbox" name="'.$placid_slider_options.'[rssfeed_content]" id="placid_rssfeed_content" value="1" '.checked("1",$rsscontent,false).'/>';
	} elseif( $slider_type == 9 ) {
		$html .='<label for="'.$placid_slider_options.'[postattch_id]" >'.__('Post Id','placid-slider').'</label><input type="text" name="'.$placid_slider_options.'[postattch_id]" id="placid_postattch_id" class="regular-text code" value="'.htmlentities( $placid_slider_curr['postattch_id'] , ENT_QUOTES).'" />';
	}  elseif( $slider_type == 10 ) {
		$gid = $placid_slider_curr['nextgen_gallery_id'];
		$galleriesOptions = get_placid_nextgen_galleries($gid); 
		$html .='<label for="'.$placid_slider_options.'[nextgen_gallery_id]" >'.__('Select Gallery','placid-slider').'</label>
		<select name="'.$placid_slider_options.'[nextgen_gallery_id]" id="placid_nextgen_galleryid" class="regular-text code havemoreinfo">
			'.$galleriesOptions.'
		</select>';
		$html .='<label for="'.$placid_slider_options.'[nextgen_anchor]" >'.__('Link','placid-slider').'</label>&nbsp;<input type="checkbox" name="'.$placid_slider_options.'[nextgen_anchor]" value="1" id="placid_nextgen_galleryid" '.checked('1', $placid_slider_curr['nextgen_anchor'],false).' />';
	}
	$html .= '</fieldset></td>';
	echo $html;
	die();
}
function placid_tab_contents() {
	check_ajax_referer( 'placid-settings-nonce', 'settings_nonce' );
	$tab = isset($_POST['tab'])?$_POST['tab']:'';	
	$cntr = isset($_POST['cntr'])?$_POST['cntr']:'';
	$placid_slider_options='placid_slider_options'.$cntr;
	$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($cntr) or empty($cntr)){$curr = 'Default';}
	else{$curr = $cntr;}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$html = '';
	if(get_transient( 'placid_undo_set' ) != false) { 
		$undo_style="display:inline-block;";	
	} else $undo_style="display:none;";
	/***************************
	** Start content tab
	****************************/
	if($tab == 'content') {	
	
		$curr_preview = $placid_slider_curr['preview'];
		$html .='<div id="previewslider" class="sub_settings toggle_settings">
		<h2 class="sub-heading">'.__('Slider Live Preview and Source Panel','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" id="minmax_img" class="toggle_img"></h2> 

		<table class="form-table">

		<tr valign="top"> 
		<th scope="row"><label for="placid_slider_disable_preview">'.__('Disable Live Preview','placid-slider').'</label></th> 
		<td> 

		<div class="eb-switch eb-switchnone">
			<input type="hidden" id="placid_slider_disable_preview" name="'.$placid_slider_options.'[disable_preview]" class="hidden_check" value="'.$placid_slider_curr['disable_preview'].'">
			<input id="placid_disablepreview" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['disable_preview'],false).' >
			<label for="placid_disablepreview"></label>
		</div>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Slider Type','placid-slider').'</th>
		<td>
		<select name="'.$placid_slider_options.'[preview]" id="placid_slider_preview">
			<option value="2" '.selected( 2, $curr_preview, false).' >'.__('Recent Posts Slider','placid-slider').'</option>
			<option value="1"'.selected( 1, $curr_preview, false).' >'.__('Category Slider','placid-slider').'</option>
			<option value="0" '.selected( 0, $curr_preview, false).' >'.__('Custom Slider','placid-slider').'</option>';
			if( is_plugin_active('woocommerce/woocommerce.php') ) { 
				$html .= '<option value="3" '.selected( 3, $curr_preview, false).' >'.__('WooCommerce Slider','placid-slider').'</option>';
			}
			if( is_plugin_active('wp-e-commerce/wp-shopping-cart.php') ) {
				$html .= '<option value="4" '.selected( 4, $curr_preview, false).' >'.__('eCommerce Slider','placid-slider').'</option>';
			}
			if( is_plugin_active('events-manager/events-manager.php') ) {
				$html .= '<option value="5" '.selected( 5, $curr_preview, false).' >'.__('Events Manager Slider','placid-slider').'</option>';
			}
			if( is_plugin_active('the-events-calendar/the-events-calendar.php') ) { 
				$html .= '<option value="6" '.selected( 6, $curr_preview, false).' >'.__('Events Calendar Slider','placid-slider').'</option>';
			}
			$html .= '<option value="7" '.selected( 7, $curr_preview, false).' >'.__('Taxonomy Slider','placid-slider').'</option>

			<option value="8" '.selected( 8, $curr_preview, false).' >'.__('RSS feed Slider','placid-slider').'</option>

			<option value="9" '.selected( 9, $curr_preview, false).' >'.__('Post Attachments Slider','placid-slider').'</option>';

			if( is_plugin_active('nextgen-gallery/nggallery.php') ) {
				$html .= '<option value="10" '.selected( 10, $curr_preview, false).' >'.__('NextGenGallery Slider','placid-slider').'</option>';
									}
			$html .= '</select>
		</td>
		</tr>


		<tr valign="top" class="placid_slider_params"> 

		</tr>	

		<tr valign="top">
		<th scope="row">'.__('Skin','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[stylesheet]" id="placid_slider_stylesheet" class="placid-skin">';
		$directory = PLACID_SLIDER_CSS_DIR;
		if ($handle = opendir($directory)) {
		    while (false !== ($file = readdir($handle))) { 
		     if($file != '.' and $file != '..') {  
			$sel_file =''; 
			if ($placid_slider_curr['stylesheet'] == $file) $sel_file = 'selected';
			$html .= '<option value="'.$file.'" '.$sel_file.' >'.$file.'</option>'; 
			} }
		    closedir($handle);
		}
		$html .= '</select>
		</td>
		</tr>

		</table>
		<p class="submit">
			<input type="submit" name="save_settings" class="button-primary" value="'.__('Save and Preview Slider','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>

		<div class="settingsdiv">'.__('Shortcode','placid-slider').'</div>
		<div class="yellowdiv">';
		if($cntr=='') $set=' set="1"'; else $set=' set="'.$cntr.'"';
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
		$html .= $preview;

		$html .= '</div>

		<div class="settingsdiv">'.__('Template Tag','placid-slider').'</div>
		<div class="yellowdiv yellowdiv_txtleft">';

		 if($cntr=='') $tset=' $set="1"'; else $tset=' $set="'.$cntr.'"';
		$toffset = '';
		if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
			$toffset = ',$offset="'.$placid_slider_curr['offset'].'"';
		if ($placid_slider_curr['preview'] == "0")
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider")){get_placid_slider($slider_id="'.$placid_slider_curr['slider_id'].'",'.$tset.$toffset.');}?&gt;</code>';
		elseif($placid_slider_curr['preview'] == "1")
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_category")){get_placid_slider_category($catg_slug="'.$placid_slider_curr['catg_slug'].'",'.$tset.$toffset.');}?&gt;</code>';
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
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_woocommerce")){get_placid_slider_woocommerce( "'.$args.'" );}?&gt;</code>';
		}
		elseif($placid_slider_curr['preview'] == "4" && $placid_slider_curr['ecom_type'] == "0") {
			$args = '';
			if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
			if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
			$args .= '&offset='.$placid_slider_curr['offset'];
			$args .= '&post_type=wpsc-product';	
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_taxonomy")){get_placid_slider_taxonomy( "'.$args.'" );}?&gt;</code>';
		}
		elseif($placid_slider_curr['preview'] == "4" && $placid_slider_curr['ecom_type'] == "1") {
			$args = '';
			if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
			if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
			$args .= '&offset='.$placid_slider_curr['offset'];
			$args .= '&post_type=wpsc-product&taxonomy=wpsc_product_category';	
			if(isset($placid_slider_curr['product_ecomcatg_slug']) && $placid_slider_curr['product_ecomcatg_slug'] != '' ) {
				$args .= '&term='.$placid_slider_curr['product_ecomcatg_slug'];
			}
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_taxonomy")){get_placid_slider_taxonomy( "'.$args.'" );}?&gt;</code>';
		}
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
	
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_event")){get_placid_slider_event( "'.$args.'" );}?&gt;</code>';
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
	
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_event_calendar")){get_placid_slider_event_calendar( "'.$args.'" );}?&gt;</code>';
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
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_taxonomy")){get_placid_slider_taxonomy( "'.$args.'" );}?&gt;</code>';
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
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_feed")){get_placid_slider_feed( "'.$args.'" );}?&gt;</code>';
	
		}
		elseif($placid_slider_curr['preview'] == "9") {
			$args = '';
			if($cntr=='') $args .= 'set=1'; else $args .= 'set='.$cntr;
			if (isset($placid_slider_curr['offset']) && $placid_slider_curr['offset'] != "0" && !empty($placid_slider_curr['offset']) )
			$args .= '&offset='.$placid_slider_curr['offset'];
			if(isset($placid_slider_curr['postattch_id'])  && $placid_slider_curr['postattch_id'] != '' ) {
				$args .= '&id='.$placid_slider_curr['postattch_id'];
			}
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_attachments")){get_placid_slider_attachments( "'.$args.'" );}?&gt;</code>';
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
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_ngg")){get_placid_slider_ngg( "'.$args.'" );}?&gt;</code>';	
		} else
			$template_tag = '<code>&lt;?php if(function_exists("get_placid_slider_recent")){get_placid_slider_recent('.$tset.$toffset.');}?&gt;</code>';
		$html .= $template_tag;
		$html .= '</div>
		</div>';
	} elseif($tab == 'basic') {
	
		$orientation = $placid_slider_curr['orientation'];
		$html .='<div class="sub_settings toggle_settings">
		<h2 class="sub-heading">'.__('Basic Settings','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" id="minmax_img" class="toggle_img"></h2> 

		<table class="form-table">

		<tr valign="top">
		<th scope="row">'.__('Speed','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[speed]" id="placid_slider_speed" class="small-text havemoreinfo" value="'.$placid_slider_curr['speed'].'" min="1" />
		<span class="moreInfo">
			<div class="tooltip1">
				'.__('Speed of the slide animation, Higher value indicates faster. Enter value like 1 or 2 or 3 etc. Caution: Do not enter decimal values','placid-slider').'
			</div>
		</span>
		</td>
		</tr>

		<! -- Added for frame rate 3.0 -->

		<tr valign="top">
		<th scope="row">'.__('Frame Rate','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[frate]" id="placid_slider_frate" class="small-text havemoreinfo" value="'.$placid_slider_curr['frate'].'" min="1" />
		<span class="moreInfo">
			<div class="tooltip1">
				'.__('Frame rate for the slide animation, Lower value indicates slower speed','placid-slider').'
			</div>
		</span>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('No. of Posts','placid-slider').'</th>
		<td><input type="number" min="1" name="'.$placid_slider_options.'[no_posts]" id="placid_slider_no_posts" class="small-text" value="'.$placid_slider_curr['no_posts'].'" /></td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Orientation','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[orientation]" id="placid_slider_orientation">
			<option value="0" '.selected("0",$orientation,false).' >'.__('Horizontal','placid-slider').'</option>
			<option value="1" '.selected("1",$orientation,false).' >'.__('Vertical','placid-slider').'</option>
		</select>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Reverse Direction','placid-slider').'</th>
		<td>

			<div class="eb-switch eb-switchnone">
				<input type="hidden" id="placid_slider_direction" name="'.$placid_slider_options.'[direction]" class="hidden_check" value="'.$placid_slider_curr['direction'].'">
				<input id="placid_directionsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['direction'],false).' >
				<label for="placid_directionsett"></label>
			</div>
		</td>
		</tr>';

		if($placid_slider_curr['orientation']!='1'){
		$html.='<tr valign="top" class="show horz">
		<th scope="row">'.__('Width','placid-slider').'</th>
		<td>	
			<input type="number" min="0" name="'.$placid_slider_options.'[width]" id="placid_slider_width" class="small-text havemoreinfo" value="'.$placid_slider_curr['width'].'" />&nbsp;'.__('px','placid-slider').'
			<span class="moreInfo">
				<div class="tooltip1">
					'.__('If set to 0, will take the container\'s width','placid-slider').'
				</div>
			</span>
		</td>
		</tr>

		<tr valign="top" class="hide vert">
		<th scope="row">'.__('Height','placid-slider').'</th>
		<td><input type="number" min="0" name="'.$placid_slider_options.'[tot_height]" id="placid_slider_tot_height" class="small-text havemoreinfo" value="'.$placid_slider_curr['tot_height'].'" />&nbsp;'.__('px','placid-slider').'
		<span class="moreInfo">
			<div class="tooltip1">
				'.__('Visible height of the slider whent vertical orientation is selected. This height is excluding Slider title height','placid-slider').'
			</div>
		</span>
		</td>
		</tr>
		<tr valign="top">
			<th scope="row">'.__('Slide animation','placid-slider').'</th>
			<td>';
				$slide_tran_name = $placid_slider_options.'[slide_transition]';
				$html .= get_placid_transitions($slide_tran_name,$placid_slider_curr['slide_transition']).'
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">'.__('Duration (seconds)','placid-slider').'</th>
			<td>
				<input type="number" min="0.2" step="0.2" name="'.$placid_slider_options.'[slide_duration]" id="placid_slider_slide_duration" class="small-text" value="'.$placid_slider_curr['slide_duration'].'" />
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">'.__('Delay time (seconds)','placid-slider').'</th>
			<td>
				<input type="number" min="0" name="'.$placid_slider_options.'[slide_delay]" id="placid_slider_slide_delay" class="small-text" value="'.$placid_slider_curr['slide_delay'].'" />
			</td>
		</tr>';
		} else {
		$html.='<tr valign="top" class="hide horz">
		<th scope="row">'.__('Complete Slider Width','placid-slider').'</th>
		<td><input type="number" min="0" name="'.$placid_slider_options.'[width]" id="placid_slider_width" class="small-text havemoreinfo" value="'.$placid_slider_curr['width'].'" />&nbsp;'.__('px','placid-slider').'
		<span class="moreInfo">
			<div class="tooltip1">
				'.__('If set to 0, will take the container\'s width','placid-slider').'
			</div>
		</span>
		</td>
		</tr>

		<tr valign="top" class="show vert">
		<th scope="row">'.__('Complete Slider Height','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[tot_height]" id="placid_slider_tot_height" class="small-text havemoreinfo" value="'.$placid_slider_curr['tot_height'].'" />&nbsp;'.__('px','placid-slider').'
		<span class="moreInfo">
			&nbsp; <span class="trigger"> ? </span>
			<div class="tooltip">
			'.__('Visible height of the slider whent vertical orientation is selected. This height is excluding Slider title height','placid-slider').'
			</div>
		</span>
		</td>
		</tr>';
		}

		$html.= '<tr valign="top">
		<th scope="row">'.__('Slide Width','placid-slider').'</th>
		<td><input type="number" min="0" name="'.$placid_slider_options.'[iwidth]" id="placid_slider_iwidth" class="small-text havemoreinfo" value="'.$placid_slider_curr['iwidth'].'" />&nbsp;'.__('px','placid-slider').'
		<span class="moreInfo">
			<div class="tooltip1">
				'.__('Either keep it blank for variable width items or Enter numeric value > 0','placid-slider').'
			</div>
		</span>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Slide Height','placid-slider').'</th>
		<td><input type="number" min="1" name="'.$placid_slider_options.'[height]" id="placid_slider_height" class="small-text" value="'.$placid_slider_curr['height'].'" />&nbsp;'.__('px','placid-slider').'</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Background','placid-slider').'</th>
		<td><input type="text" name="'.$placid_slider_options.'[bg_color]" id="placid_slider_bg_color" value="'.$placid_slider_curr['bg_color'].'" class="wp-color-picker-field" data-default-color="#ffffff" />
		<br /> 
				<div class="eb-switch eb-switchnone">
					<input type="hidden" name="'.$placid_slider_options.'[bg]" id="placid_slider_bg" class="hidden_check" value="'.$placid_slider_curr['bg'].'">
					<input id="placid_bgsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['bg'],false).'>
					<label for="placid_bgsett"></label>
				</div>'.__(' Use Transparent Background','placid-slider').'
		</td>
		</tr>
		 
		<tr valign="top">
		<th scope="row">'.__('Slide Border Thickness','placid-slider').'</th>
		<td><input type="number" min="0" name="'.$placid_slider_options.'[border]" id="placid_slider_border" class="small-text havemoreinfo" value="'.$placid_slider_curr['border'].'" />&nbsp;'.__('px','placid-slider').'
		<span class="moreInfo">
			<div class="tooltip1">
				'.__('Put 0 if no border is required','placid-slider').'
			</div>
		</span>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Slide Border Color','placid-slider').'</th>
		<td><input type="text" name="'.$placid_slider_options.'[brcolor]" id="placid_slider_brcolor" value="'.$placid_slider_curr['brcolor'].'" class="wp-color-picker-field" data-default-color="#ffffff" />
		</td>
		</tr>';
		if($placid_slider_curr['orientation'] != "1") {
		$html.= '<tr valign="top">
		<th scope="row">'.__('Space between slide','placid-slider').'</th>
		<td><input type="number" min="0" name="'.$placid_slider_options.'[space]" id="placid_slider_space" value="'.$placid_slider_curr['space'].'" class="small-text" MIN="0" />&nbsp;'.__('px','placid-slider').'
		</td>
		</tr>';
		 }
		$html.= '</table>
		<p class="submit">
			<input type="submit" name="save_settings" class="button-primary" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>
		</div>'.do_action('placid_addon_settings',$cntr,$placid_slider_options,$placid_slider_curr);
	
	} elseif($tab == 'slides') {
		$default_placid_slider_settings=get_placid_slider_default_settings();
		$placid_slider_curr['img_pick'][0]=(isset($placid_slider_curr['img_pick'][0]))?$placid_slider_curr['img_pick'][0]:'';
		$placid_slider_curr['img_pick'][2]=(isset($placid_slider_curr['img_pick'][2]))?$placid_slider_curr['img_pick'][2]:'';
		$placid_slider_curr['img_pick'][3]=(isset($placid_slider_curr['img_pick'][3]))?$placid_slider_curr['img_pick'][3]:'';
		$placid_slider_curr['img_pick'][5]=(isset($placid_slider_curr['img_pick'][5]))?$placid_slider_curr['img_pick'][5]:'';
		$curr_tele = $placid_slider_curr['title_element'];
		$curr_crop = $placid_slider_curr['crop'];
		$img_style = '';
		if(isset($cntr) and $cntr>0) $img_style = 'style="display:none;"';
		$focus_axis="display:none;";
		if($placid_slider_curr['timthumb'] == 2)$focus_axis="display:table-row;";
		$html .= '<div class="sub_settings toggle_settings">
		<h2 class="sub-heading">'.__('Slider Title','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 
		<table class="form-table settings-tbl">

		<tr valign="top">
		<th scope="row">'.__('Default Title Text','placid-slider').'</th>
		<td><input type="text" name="'.$placid_slider_options.'[title_text]" id="placid_slider_title_text" value="'.htmlentities($placid_slider_curr['title_text'], ENT_QUOTES).'" /></td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Pick Slider Title From','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[title_from]" >
			<option value="0" '.selected("0",$placid_slider_curr['title_from'],false).' >'.__('Default Title Text','placid-slider').'</option>
			<option value="1" '.selected("1",$placid_slider_curr['title_from'],false).' >'.__('Slider Name','placid-slider').'</option>
		</select>
		</td>
		</tr>
		<!-- code for new fonts -->
		<tr valign="top">
		<th scope="row">'.__('Font Type','placid-slider').'</th>
			<td>
			<input type="hidden" value="title_font" class="ftype_rname">
			<input type="hidden" value="title_fontg" class="ftype_gname">
			<input type="hidden" value="titlefont_custom" class="ftype_cname">
	
			<select name="'.$placid_slider_options.'[t_font]" id="placid_slider_t_font" class="main-font">
				<option value="regular" '.selected( $placid_slider_curr['t_font'], "regular",false ).' > Regular Fonts </option>
				<option value="google" '.selected( $placid_slider_curr['t_font'], "google",false ).' > Google Fonts </option>
				<option value="custom" '.selected( $placid_slider_curr['t_font'], "custom",false ).' > Custom Fonts </option>
			</select>
			</td>
		</tr>

		<tr><td class="load-fontdiv" colspan="2"></td></tr>
		<!-- code for new fonts -->

		<tr valign="top">
		<th scope="row">'.__('Font Color','placid-slider').'</th>
		<td><input type="text" name="'.$placid_slider_options.'[title_fcolor]" id="placid_slider_title_fcolor" value="'.$placid_slider_curr['title_fcolor'].'" class="wp-color-picker-field" data-default-color="#3F4C6B" /></td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Font Size','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[title_fsize]" id="placid_slider_title_fsize" class="small-text" value="'.$placid_slider_curr['title_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
		</tr>

		<tr valign="top" class="font-style">
		<th scope="row">'.__('Font Style','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[title_fstyle]" id="placid_slider_title_fstyle" >
			<option value="bold" '.selected("bold",$placid_slider_curr['title_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
			<option value="bold italic" '.selected("bold italic",$placid_slider_curr['title_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
			<option value="italic" '.selected("italic",$placid_slider_curr['title_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
			<option value="normal" '.selected("normal",$placid_slider_curr['title_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
		</select>
		</td>
		</tr>

		</table>
			<p class="submit">
				<input type="submit" name="save_settings" class="button-primary" value="'.__('Save Changes','placid-slider') .'" />
				<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
			</p>
		</div>

		<div class="sub_settings_m toggle_settings">
		<h2 class="sub-heading">'.__('Post Title','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" id="minmax_img" class="toggle_img"></h2> 
		<table class="form-table settings-tbl">
		
		<tr valign="top"> 
		<th scope="row">'.__('Post Title','placid-slider').'</th> 
		<td>
			<div class="eb-switchnone">
				<input type="hidden" name="'.$placid_slider_options.'[show_ptitle]" id="placid_slider_show_ptitle" class="hidden_check" value="'.$placid_slider_curr['show_ptitle'].'">
				<input id="placid_showptitlesett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['show_ptitle'],false).'>
				<label for="placid_showptitlesett"></label>
			</div>
		</td>
		</tr>
 
		<!-- code for new fonts -->
		<tr valign="top">
		<th scope="row">'.__('Font Type','placid-slider').'</th>
		<td>
		<input type="hidden" value="ptitle_font" class="ftype_rname">
			<input type="hidden" value="ptitle_fontg" class="ftype_gname">
			<input type="hidden" value="ptfont_custom" class="ftype_cname">
			<select name="'.$placid_slider_options.'[pt_font]" id="placid_slider_pt_font" class="main-font">
				<option value="regular" '.selected( $placid_slider_curr['pt_font'], "regular",false ).' > Regular Fonts </option>
				<option value="google" '.selected( $placid_slider_curr['pt_font'], "google",false ).' > Google Fonts </option>
				<option value="custom" '.selected( $placid_slider_curr['pt_font'], "custom",false ).' > Custom Fonts </option>
			</select>
		</td>
		</tr>

		<tr><td class="load-fontdiv" colspan="2"></td></tr>
		<!-- code for new fonts -->
		<tr valign="top">
		<th scope="row">'.__('Font Color','placid-slider').'</th>
		<td><input type="text" name="'.$placid_slider_options.'[ptitle_fcolor]" id="placid_slider_ptitle_fcolor" value="'.$placid_slider_curr['ptitle_fcolor'].'" class="wp-color-picker-field" data-default-color="#ffffff" /></td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Font Size','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[ptitle_fsize]" id="placid_slider_ptitle_fsize" class="small-text" value="'.$placid_slider_curr['ptitle_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
		</tr>

		<tr valign="top" class="font-style">
		<th scope="row">'.__('Font Style','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[ptitle_fstyle]" id="placid_slider_ptitle_fstyle" >
			<option value="bold" '.selected("bold",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
			<option value="bold italic" '.selected("bold italic",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
			<option value="italic" '.selected("italic",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
			<option value="normal" '.selected("normal",$placid_slider_curr['ptitle_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
		</select>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('HTML element','placid-slider').'
		</th>
		<td><select name="'.$placid_slider_options.'[title_element]" >
			<option value="1" '.selected("1",$curr_tele,false).' >h1</option>
			<option value="2" '.selected("2",$curr_tele,false).' >h2</option>
			<option value="3" '.selected("3",$curr_tele,false).' >h3</option>
			<option value="4" '.selected("4",$curr_tele,false).' >h4</option>
			<option value="5" '.selected("5",$curr_tele,false).' >h5</option>
			<option value="6" '.selected("6",$curr_tele,false).' >h6</option>
		</select>
		</td>
		</tr>

		</table>
			<p class="submit">
				<input type="submit" name="save_settings" class="button-primary" value="'.__('Save Changes','placid-slider') .'" />
				<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
			</p>
		</div>

		<div class="sub_settings_m toggle_settings">
		<h2 class="sub-heading">'.__('Slide Image','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" id="minmax_img" class="toggle_img"></h2>
		<table class="form-table">

		<tr valign="top"> 
		<th scope="row"><span class="havemoreinfo">'.__('Image Source','placid-slider').'</span> 
			<span class="moreInfo">
				<div class="tooltip1" style="display: none;">
					'.__('The first one is having priority over second, the second having priority on third and so on','placid-slider').'
				</div>
			</span>
		</th> 
		<td>
		<fieldset>
			<div class="mdivsett">
				<div class="eb-switch eb-switchnone">
					<input type="hidden" name="'.$placid_slider_options.'[img_pick][0]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][0].'">
					<input id="placid_customfldchksett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['img_pick'][0],false).'>
					<label for="placid_customfldchksett"></label>
				</div>';		
				if(!isset($cntr) or empty($cntr)){ 
					$html .= __('Custom field','placid-slider'); 
				} else { 
					$html .= __('(Set custom field name on Default Settings)','placid-slider'); }
				$html.= '<input type="text" name="'.$placid_slider_options.'[img_pick][1]" class="settingsminput" value="'.$placid_slider_curr['img_pick'][1].'" '.$img_style.' />
			</div>

			<div class="mdivsett">
				<div class="eb-switch eb-switchnone">
					<input type="hidden" name="'.$placid_slider_options.'[img_pick][2]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][2].'">
					<input id="placid_featuredimgchksett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['img_pick'][2],false).'>
					<label for="placid_featuredimgchksett"></label>
				</div>
				<label>'.__('Featured Image','placid-slider').'</label>	
			</div>

			<div class="mdivsett">
				<div class="eb-switch eb-switchnone">
					<input type="hidden" name="'.$placid_slider_options.'[img_pick][3]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][3].'">
					<input id="placid_attachedimgchksett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['img_pick'][3],false).'>
					<label for="placid_attachedimgchksett"></label>
				</div>
				<label>'. __('Attached image,order','placid-slider') .'</label>
				<input type="text" name="'.$placid_slider_options.'[img_pick][4]" class="small-text" value="'.$placid_slider_curr['img_pick'][4].'" />	
			</div>

			<div class="mdivsett">
				<div class="eb-switch eb-switchnone">
					<input type="hidden" name="'.$placid_slider_options.'[img_pick][5]" class="hidden_check" value="'.$placid_slider_curr['img_pick'][5].'">
					<input id="placid_scanimgchksett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['img_pick'][5],false).'>
					<label for="placid_scanimgchksett"></label>
				</div>
				<label>'.__('Scan content','placid-slider').'</label>
			</div>
		</fieldset>
		</td> 
		</tr>'; 

		if($placid_slider_curr['stylesheet']!='logo') {
		$html.='<tr valign="top">
		<th scope="row">'.__('Align to','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[img_align]" id="placid_slider_img_align" >
			<option value="left" '.selected('left',$placid_slider_curr['img_align'],false).'>'.__('Left','placid-slider').'</option>
			<option value="right" '.selected('right',$placid_slider_curr['img_align'],false).'>'.__('Right','placid-slider').'</option>
			<option value="none" '.selected('none',$placid_slider_curr['img_align'],false).'>'.__('Center','placid-slider').'</option>
		</select>
		</td>
		</tr>';
		 }
		$html.='<tr valign="top">
		<th scope="row">'.__('Fetched Image size','placid-slider').'
		</th>
		<td>';
			$sizename=$placid_slider_options.'[crop]';
			$html .= placid_get_image_sizes($sizename,$curr_crop).'
		<span class="moreInfo">
			<div class="tooltip1">
			'.__('This is for fast page load, in case you choose \'Custom Size\' setting from below, you would not like to extract \'full\' size image from the media library. In this case you can use, \'medium\' or \'thumbnail\' image. This is because, for every image upload to the media gallery WordPress creates four sizes of the same image. So you can choose which to load in the slider and then specify the actual size.','placid-slider').'
			</div>
		</span>
		</td>
		</tr>

		<tr valign="top"> 
		<th scope="row">'.__('Image Size','placid-slider').'</th> 
		<td> 
				<input type="number" min="1" name="'.$placid_slider_options.'[img_width]" id="placid_slider_img_width" class="small-text" value="'.$placid_slider_curr['img_width'].'" />&nbsp;<strong>x</strong>&nbsp;<input type="number" min="1" name="'.$placid_slider_options.'[img_height]" id="placid_slider_img_height" class="small-text" value="'.$placid_slider_curr['img_height'].'" />&nbsp;'.__('px','placid-slider').' 
		</td> 
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Border Thickness','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[img_border]" min="0" id="placid_slider_img_border" class="small-text havemoreinfo" value="'.$placid_slider_curr['img_border'].'" />
			<span class="moreInfo">
				<div class="tooltip1">
				'.__('put 0 if no border is required','placid-slider').'
				</div>
			</span>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Border Color','placid-slider').'</th>
		<td><input type="text" name="'.$placid_slider_options.'[img_brcolor]" id="placid_slider_img_brcolor" value="'.$placid_slider_curr['img_brcolor'].'" class="wp-color-picker-field" data-default-color="#000000" />
		</td>
		</tr>

		<tr valign="top"> 
			<th scope="row">'.__( 'Cropping','placid-slider' ).'</th> 
			<td>
				<input type="radio" name="'.$placid_slider_options.'[timthumb]" value="1" '.checked('1', $placid_slider_curr['timthumb'],false).' class="pscrop" > '.__('OFF','placid-slider').'
			</td>
		</tr>
		
		<tr valign="top"> 
			<th scope="row"></th> 
			<td>
				<input type="radio" name="'.$placid_slider_options.'[timthumb]" value="0" '.checked('0', $placid_slider_curr['timthumb'],false).' class="pscrop" >
				'.__('ON (Hard cropping using php)','placid-slider').'
			</td>
		</tr>';
		if($placid_slider_curr['stylesheet'] != "logo") {
			$html.='<tr valign="top"> 
				<th scope="row"></th> 
				<td>
					<input type="radio" name="'.$placid_slider_options.'[timthumb]" value="2" '.checked('2', $placid_slider_curr['timthumb'],false).' class="pscrop" >
					'.__('ON (Image Positioning using JS)','placid-slider').'
				</td>
			</tr>
		
			<tr valign="top" class="focus_axis" style="'.$focus_axis.'">
				<th scope="row">'.__('Focus X','placid-slider').'
					<span class="currx"> ( '. $placid_slider_curr['focusx'] .' ) </span>
				</th>
				<td>
					<input type="range" name="'.$placid_slider_options.'[focusx]" id="placid_slider_focusx" value="'.$placid_slider_curr['focusx'].'" min="-1" max="1" step="0.001" />
				</td>
			</tr>
		
			<tr valign="top" class="focus_axis" style="'.$focus_axis.'">
				<th scope="row">'.__('Focus Y','placid-slider').'
				<span class="curry"> ( '. $placid_slider_curr['focusx'] .' ) </span>
				</th>
				<td>
					<input type="range" name="'.$placid_slider_options.'[focusy]" id="placid_slider_focusy" value="'.$placid_slider_curr['focusy'].'" min="-1" max="1" step="0.001" />
				</td>
			</tr>';
		}
		$html.='
		<tr valign="top">
		<th scope="row">'.__('Pure Image Slider','placid-slider').'</th>
		<td>
		<div class="eb-switch eb-switchnone havemoreinfo">
			<input type="hidden" name="'.$placid_slider_options.'[image_only]" id="placid_slider_image_only" class="hidden_check" value="'.$placid_slider_curr['image_only'].'">
			<input id="placid_imageonlysett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['image_only'],false).'>
			<label for="placid_imageonlysett"></label>
		</div>

		<span class="moreInfo">
				<div class="tooltip1">
				'.__('check this to convert placid Slider to Image Slider with no content','placid-slider').'
				</div>
		</span>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Image Title on Hover','placid-slider').'</th>
		<td>
		<div class="eb-switch eb-switchnone havemoreinfo">
			<input type="hidden" name="'.$placid_slider_options.'[image_title_text]" class="hidden_check" value="'.$placid_slider_curr['image_title_text'].'">
			<input id="placid_thoversett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['image_title_text'],false).'>
			<label for="placid_thoversett"></label>
		</div>
			<span class="moreInfo">
				<div class="tooltip1">
				'.__('If you do not want to completely convert to Image Slider, using this option you can display the content over image only on hover','placid-slider').'
				</div>
			</span>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Grayscale image, show original image on hover','placid-slider').'</th>
		<td>
		<div class="eb-switch eb-switchnone havemoreinfo">
	
			<input type="hidden" name="'.$placid_slider_options.'[coloronhover]" class="hidden_check" value="'.$placid_slider_curr['coloronhover'].'">
			<input id="placid_clrhover" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['coloronhover'],false).'>
			<label for="placid_clrhover"></label>

		</div>
			<span class="moreInfo">
				<div class="tooltip1">
				'.__('check this to show original colored image when user hovers on the image. Effect visible on Chrome 19+, IE 6-9, Firefox 10+, Safari 6+ . Not applicable to IE10','placid-slider').'
				</div>
			</span>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Default Image','placid-slider').'</th>
		<td>	
			<img id="default-img" src="'.$placid_slider_curr['default_image'].'" width="80" height="70" style="float: left;" />
				<input type="submit" name="default-image-upload" class="placid-upload-default" value="Upload" style="float: left;margin-left: -90px;margin-top: 75px;background: #dddddd;cursor:pointer;" >
				<input type="submit" name="default-image-reset" class="placid-reset-default" value="Reset" style="background: #dddddd;float: left;margin-top: 75px;margin-left: -30px;cursor:pointer;" >
				<input type="hidden" id="default-image-url" value="'.$default_placid_slider_settings['default_image'].'">
				<input type="hidden" name="'.$placid_slider_options.'[default_image]" id="placid_slider_default_image" class="regular-text code havemoreinfo" value="'.$placid_slider_curr['default_image'].'" />

		<span class="moreInfo">
			<div class="tooltip1">
			'.__('Enter the url of the default image i.e. the image to be displayed if there is no image available for the slide. By default, the url is <br />','placid-slider').'<span style="color:#0000ff;">'.$placid_slider_curr['default_image'].'</span>'.'
			</div>
		</span>
		</td>
		</tr>

		</table>
		<p class="submit">
			<input type="submit" name="save_settings" class="button-primary" value="'.__('Save Changes','placid-slider') .'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>
		</div>';
		if($placid_slider_curr['stylesheet']=='logo') {	
			$content_style = "display:none;";
		} 
		else { $content_style = "display:block;"; }
		
 		$html.='<div class="sub_settings_m toggle_settings  slide_content" style="<?php echo $content_style;?>" >
		<h2 class="sub-heading">'.__('Slide Content','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" id="minmax_img" class="toggle_img"></h2> 
		<table class="form-table settings-tbl">

		<tr valign="top"> 
		<th scope="row">'.__('Content','placid-slider').'</th> 
		<td>
			<div class="eb-switchnone">
				<input type="hidden" name="'.$placid_slider_options.'[show_content]" id="placid_slider_show_content" class="hidden_check" value="'.$placid_slider_curr['show_content'].'">
				<input id="placid_showcontentsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['show_content'],false).'>
				<label for="placid_showcontentsett"></label>
			</div>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Font Type','placid-slider').'</th>
		<td>
		<input type="hidden" value="content_font" class="ftype_rname">
		<input type="hidden" value="content_fontg" class="ftype_gname">
		<input type="hidden" value="pcfont_custom" class="ftype_cname">
				<select name="'.$placid_slider_options.'[pc_font]" id="placid_slider_pc_font" class="main-font">
					<option value="regular" '.selected( $placid_slider_curr['pc_font'], "regular",false ).' > Regular Fonts </option>
					<option value="google" '.selected( $placid_slider_curr['pc_font'], "google",false ).' > Google Fonts </option>
					<option value="custom" '.selected( $placid_slider_curr['pc_font'], "custom",false ).' > Custom Fonts </option>
				</select>
		</td>
		</tr>

		<tr><td class="load-fontdiv" colspan="2"></td></tr>

		<tr valign="top">
		<th scope="row">'.__('Font Color','placid-slider').'</th>
		<td><input type="text" name="'.$placid_slider_options.'[content_fcolor]" id="placid_slider_content_fcolor" value="'.$placid_slider_curr['content_fcolor'].'" class="wp-color-picker-field" data-default-color="#ffffff" /></td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Font Size','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[content_fsize]" id="placid_slider_content_fsize" class="small-text" value="'.$placid_slider_curr['content_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
		</tr>

		<tr valign="top" class="font-style">
		<th scope="row">'.__('Font Style','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[content_fstyle]" id="placid_slider_content_fstyle" >
				<option value="bold" '.selected("bold",$placid_slider_curr['content_fstyle'],false).' >'.__('Bold','placid-slider').'</option>
				<option value="bold italic" '.selected("bold",$placid_slider_curr['content_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
				<option value="italic" '.selected("bold",$placid_slider_curr['content_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
				<option value="normal" '.selected("bold",$placid_slider_curr['content_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
			</select>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Source','placid-slider').'</th>
		<td>
				<select name="'.$placid_slider_options.'[content_from]" id="placid_slider_content_from" >
					<option value="slider_content" '.selected("slider_content",$placid_slider_curr['content_from'],false).' >'.__('Slider Content Custom field','placid-slider').'</option>
					<option value="excerpt" '.selected("excerpt",$placid_slider_curr['content_from'],false).' >'.__('Post Excerpt','placid-slider').'</option>
					<option value="content" '.selected("content",$placid_slider_curr['content_from'],false).' >'.__('From Content','placid-slider').'</option>
				</select>
		</td>
		</tr>


		<tr valign="top">
				<th scope="row">'.__('Length','placid-slider').'</th>
				<td>
					<div>
						<input id="placid_slider_climit" name="'.$placid_slider_options.'[climit]" type="radio" value="0" '.checked('0', $placid_slider_curr['climit'],false).'  />
						<label class="eb-mlabel">'.__(' words','placid-slider').'</label>
						<input type="number" name="'.$placid_slider_options.'[content_limit]" id="placid_slider_content_limit" class="small-text" value="'.$placid_slider_curr['content_limit'].'" min="1" />
						</div>
						<div class="eb-margindiv">
						<input id="placid_slider_climit" name="'.$placid_slider_options.'[climit]" type="radio" value="1" '.checked('1', $placid_slider_curr['climit'],false).'  />
						<label class="eb-mlabel">'.__(' Characters','placid-slider').'</label>
						<input type="number" name="'.$placid_slider_options.'[content_chars]" id="placid_slider_content_chars" class="small-text" value="'.$placid_slider_curr['content_chars'].'" min="1"/>
					</div>
				</td>	
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Max width of the overlay text area','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[ptext_width]" id="placid_slider_ptext_width" class="small-text havemoreinfo" value="'.$placid_slider_curr['ptext_width'].'" />&nbsp;'.__('px','placid-slider').'
		<span class="moreInfo">
				<div class="tooltip1">
				'.__('You need to enter this value if you have variable width images and have kept the \'Thumbnail Image Width\' field empty.','placid-slider').'
				</div>
		</span>
		</td>
		</tr>

		</table>
		<p class="submit">
			<input type="submit" name="save_settings" class="button-primary" value="'.__('Save Changes','placid-slider') .'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>
		</div>';
	
	} elseif($tab == 'navarrow') {
	
		$html.= '<div class="sub_settings toggle_settings">
		<h2 class="sub-heading">'.__('Navigational Arrows','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" id="minmax_img" class="toggle_img"></h2> 
		<table class="form-table">

		<tr valign="top">
		<th scope="row">'.__('Arrows','placid-slider').'</th>
		<td>
			<div class="eb-switchnone">
				<input type="hidden" name="'.$placid_slider_options.'[enable_arrow]" id="placid_slider_enable_arrow" class="hidden_check" value="'.$placid_slider_curr['enable_arrow'].'">
				<input id="placid_disablearrow" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_arrow'],false).'>
				<label for="placid_disablearrow"></label>
			</div>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Select Navigation Arrow','placid-slider').'</th>
		<td style="background: #ccc;">';
		$directory = PLACID_SLIDER_CSS_OUTER.'/images/buttons/';
		if ($handle = opendir($directory)) {
		    while (false !== ($file = readdir($handle))) { 
		     if($file != '.' and $file != '..') { 
		     $nexturl='css/images/buttons/'.$file.'/next.png';
			$html .= '<div class="arrows"><img src="'.placid_slider_plugin_url($nexturl).'" width="32" height="32"/>
			<input name="'. $placid_slider_options.'[buttons]" type="radio" id="placid_slider_buttons" class="arrows_input" value="'. $file.'" '.checked($file,$placid_slider_curr['buttons'],false).' /></div>';
		 } }
			    closedir($handle);
			}
			$html .= '<div class="svilla_cl"></div>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Size' ,'placid-slider').'</th>
		<td><input type="number" name="'. $placid_slider_options.'[nav_w]" id="placid_slider_nav_w" class="small-text" value="'. $placid_slider_curr['nav_w'].'" min="1" />&nbsp;<strong> x </strong>&nbsp; <input type="number" name="'. $placid_slider_options.'[nav_h]" id="placid_slider_nav_h" class="small-text" value="'. $placid_slider_curr['nav_h'].'" min="1" />&nbsp;px</td>
		</tr>

		</table>
		<p class="submit">
			<input type="submit" name="save_settings" class="button-primary" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>
		</div>';
	
	} elseif($tab == 'miscellaneous') {
	
		$html .= '<div class="sub_settings_m toggle_settings">

	<div class="sub_settings toggle_settings">
	<h2 class="sub-heading">'.__('Miscellaneous','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 

	<table class="form-table">

	<tr valign="top">
	<th scope="row">'.__('Retain these html tags','placid-slider').'</th>
	<td><input type="text" name="'.$placid_slider_options.'[allowable_tags]" class="regular-text code" value="'.$placid_slider_curr['allowable_tags'].'" /></td>
	</tr>
	<tr valign="top">
	<th scope="row">'.__('Continue Reading Text','placid-slider').'</th>
	<td><input type="text" name="'.$placid_slider_options.'[more]" class="regular-text code" value="'.$placid_slider_curr['more'].'" /></td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Randomize Slides in Slider','placid-slider').'</th>
	<td>
	<div class="eb-switch eb-switchnone havemoreinfo">
		<input type="hidden" name="'.$placid_slider_options.'[rand]" id="placid_slider_rand" class="hidden_check" value="'.$placid_slider_curr['rand'].'">
		<input id="placid_randsett" class="cmn-toggle eb-toggle-round" type="checkbox" '. checked('1', $placid_slider_curr['rand'],false).'>
		<label for="placid_randsett"></label>
	</div>
	<span class="moreInfo">
			<div class="tooltip1">
			'.__('Check this if you want the slides added to appear in random order','placid-slider').'
			</div>
	</span>
	</td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Slide Link (\'a\' element) attributes  ','placid-slider').'</th>
	<td><input type="text" name="'.$placid_slider_options.'[a_attr]" class="regular-text code havemoreinfo" value="'.htmlentities( $placid_slider_curr['a_attr'] , ENT_QUOTES).'" />
	<span class="moreInfo">
			<div class="tooltip1">
			'.__('eg. target="_blank" rel="external nofollow"','placid-slider').'
			</div>
	</span>
	</td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Pause On Hover','placid-slider').'</th>
	<td>
	<div class="eb-switch eb-switchnone havemoreinfo">
		<input type="hidden" name="'.$placid_slider_options.'[pauseonhover]" class="placid_slider_pphoto hidden_check" value="'.$placid_slider_curr['pauseonhover'].'">
		<input id="placid_pauseonhover" class="cmn-toggle eb-toggle-round placid_pauseonhover" type="checkbox" '.checked('1', $placid_slider_curr['pauseonhover'],false).'>
		<label for="placid_pauseonhover"></label>
	</div>
	<span class="moreInfo">
		<div class="tooltip1">
		'.__('Pause the slider when user hovers over the slide','placid-slider').'
		</div>
	</span>
	</td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Lightbox Effect','placid-slider').'</th>
	<td>
	<div class="eb-switch eb-switchnone havemoreinfo">
		<input type="hidden" name="'.$placid_slider_options.'[pphoto]" class="placid_slider_pphoto hidden_check" value="'.$placid_slider_curr['pphoto'].'">
		<input id="placid_pphoto" class="cmn-toggle eb-toggle-round placid_pphoto" type="checkbox" '.checked('1', $placid_slider_curr['pphoto'],false).'>
		<label for="placid_pphoto"></label>
	</div>
	<span class="moreInfo">
		<div class="tooltip1">
		'.__('If checked, when user clicks the slide image, it will appear in a modal lightbox','placid-slider').'
		</div>
	</span>
	</td>
	</tr>';
		if($placid_slider_curr['pphoto'] == 1 ) $lbox_style = 'display:table-row';
		else $lbox_style = 'display:none';
	
	$html .= '<tr valign="top" class="placid_slider_lbox_type" style="'.$lbox_style.'" >
	<th scope="row"  >'.__('Select LightBox','placid-slider').'</th>
	<td>

	<select name="'.$placid_slider_options.'[lbox_type]" >
		<option value="pphoto_box" '.selected("pphoto_box",$placid_slider_curr['lbox_type'],false).' >'.__('PrettyPhoto','placid-slider').'</option>
		<option value="nivo_box" '.selected("nivo_box",$placid_slider_curr['lbox_type'],false).' >'.__('Nivo box','placid-slider').'</option>
		<option value="photo_box" '.selected("photo_box",$placid_slider_curr['lbox_type'],false).' >'.__('Photo box','placid-slider').'</option>
		<option value="smooth_box" '.selected("smooth_box",$placid_slider_curr['lbox_type'],false).' >'.__('Smooth box','placid-slider').'</option>
		<option value="swipe_box" '.selected("swipe_box",$placid_slider_curr['lbox_type'],false).' >'.__('Swipe box','placid-slider').'</option>
	</select>
	</td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Custom fields to display for post/pages','placid-slider').'</th>
	<td><textarea name="'.$placid_slider_options.'[fields]"  rows="5" cols="30" class="regular-text code havemoreinfo">'.$placid_slider_curr['fields'].'</textarea>
	<span class="moreInfo">
			<div class="tooltip1">
			'.__('Separate different fields using commas eg. description,customfield2','placid-slider').'
			</div>
	</span>
	</td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Append Slides Counter','placid-slider').'</th>
	<td><select style="width:4em;" name="'.$placid_slider_options.'[repeat]" class="havemoreinfo" id="placid_slider_repeat">

	<option value="0" '.selected("0",$placid_slider_curr['repeat'],false).' >'.__('0','placid-slider').'</option>
	<option value="1" '.selected("1",$placid_slider_curr['repeat'],false).' >'.__('1','placid-slider').'</option>
	<option value="2" '.selected("2",$placid_slider_curr['repeat'],false).' >'.__('2','placid-slider').'</option>
	<option value="3" '.selected("3",$placid_slider_curr['repeat'],false).' >'.__('3','placid-slider').'</option>

	</select>
	<span class="moreInfo">
		<div class="tooltip1">
		'.__('Append Slides to the Slider in case the number of slides is less compared to width of the slider.','placid-slider').'
		</div>
	</span>
	</td>
	</tr>
	
	<tr valign="top">
		<th scope="row">'.__('Disable Slider view','placid-slider').'</th>
		<td>
		<div class="eb-switch eb-switchnone havemoreinfo">
			<input type="hidden" name="'.$placid_slider_options.'[disable_slider]" class="hidden_check" value="'.$placid_slider_curr['disable_slider'].'">
			<input id="placid_disableslider" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['disable_slider'],false).'>
			<label for="placid_disableslider"></label>
		</div>
			<span class="moreInfo">
				<div class="tooltip1">
				'.__('Disable Sliding will show static images rather than sliding.','placid-slider').'
				</div>
			</span>
		</td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Enable FOUC','placid-slider').'</th>
	<td>
	<div class="eb-switch eb-switchnone havemoreinfo">
		<input type="hidden" name="'.$placid_slider_options.'[fouc]" id="placid_slider_fouc" class="hidden_check" value="'.$placid_slider_curr['fouc'].'">
		<input id="placid_foucsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['fouc'],false).'>
		<label for="placid_foucsett"></label>
	</div>
		<span class="moreInfo">
			<div class="tooltip1">
			'.__('If checked the Slider will show Flash of Unstyled Content when the page is loaded, i.e. the slider content will appear before the javascripts are loaded.','placid-slider').'
			</div>
		</span>
	</td>
	
	</tr>
	<tr valign="top">
		<th scope="row">'.__('Do not link slide to any url','placid-slider').'</th>
		<td>
			<div class="eb-switch eb-switchnone">
				<input type="hidden" name="'.$placid_slider_options.'[donotlink]" id="placid_slider_donotlink" class="hidden_check" value="'.$placid_slider_curr['donotlink'].'">
				<input id="placid_donotlinksett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['donotlink'],false).' >
				<label for="placid_donotlinksett"></label>
			</div>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row">'.__('Disable Slider on Mobiles and Tablets','placid-slider').'</th> 
		<td>
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[disable_mobile]" id="placid_slider_disable_mobile" class="hidden_check" value="'.$placid_slider_curr['disable_mobile'].'">
			<input id="placid_disable_mobile" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['disable_mobile'],false).'>
			<label for="placid_disable_mobile"></label>
		</div>
		</td>
 	</tr>

	<tr valign="top">
	<th scope="row">'.__('Enable Generated CSS','placid-slider').'</th>
	<td>
	<div class="eb-switch eb-switchnone havemoreinfo">
			<input type="hidden" name="'.$placid_slider_options.'[gencss]" id="placid_slider_gencsscode" class="hidden_check" value="'.$placid_slider_curr['gencss'].'">
			<input id="placid_gencss" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['gencss'],false).'>
			<label for="placid_gencss"></label>
	</div>
	</td>
	</tr>

	</table>
	<div id="placid_slider_gencss" >
		<p>'.__('Save Changes for the settings first and then view this data. You can use this CSS in your \'custom\' stylesheets if you use other than \'default\' value for the Stylesheet folder.','placid-slider').'</p>';
		$placid_slider_css = placid_get_inline_css($cntr,$echo='1');
		$html .= '<div class="placid_generated_css">
		.placid_slider_set'.$cntr.' .placid_slider{ '.$placid_slider_css['placid_slider'].'} <br />
		.placid_slider_set'.$cntr.' .placid_slider_handle{ '.$placid_slider_css['placid_slider_handle'].'} <br />
		.placid_slider_set'.$cntr.' .sldr_title{ '.$placid_slider_css['sldr_title'].'} <br />
		.placid_slider_set'.$cntr.' .placid_slideri{ '.$placid_slider_css['placid_slideri'].'} <br />
		.placid_slider_set'.$cntr.' .placid_slider_thumbnail{ '.$placid_slider_css['placid_slider_thumbnail'].'} <br />';
	
		$html .= '.placid_slider_set'.$cntr.' .placid_slideri h'.$placid_slider_curr['title_element'].' { '.$placid_slider_css['placid_slider_h2'].' } <br />
		.placid_slider_set'.$cntr.' .placid_slideri h'.$placid_slider_curr['title_element'].' a{'.$placid_slider_css['placid_slider_h2_a'].' } <br />';
	
		$html.='.placid_slider_set'.$cntr.' .placid_slideri span{ '.$placid_slider_css['placid_slider_span'].' } <br />
		.placid_slider_set'.$cntr.' .placid_slideri p.more{ '.$placid_slider_css['placid_slider_p_more'].'} <br />
		.placid_slider_set'.$cntr.' .placid_text{ '.$placid_slider_css['placid_text'].'} 
		.placid_slider_set'.$cntr.' .placid_eshortcode{ '.$placid_slider_css['placid_slider_thumbnail'].' }'; 

		if( isset($placid_slider_curr['preview']) && ($placid_slider_curr['preview'] == '5' || $placid_slider_curr['preview'] == '6' ) ) {
		$html.= '.placid_slider_set'.$cntr.' .placid_slides .event_addr { '.$placid_slider_css['eventm_addr'].'}
		.placid_slider_set'.$cntr.' .placid_slides .slidedatetime { '.$placid_slider_css['slide_eventm_datetime'].'}
		.placid_slider_set'.$cntr.' .placid_slides .placid_eventcat a { '.$placid_slider_css['eventm_cat'].'}';
		} // END -  for event Calendar Generated CSS
		 // Styles for eShop 
		if( isset($placid_slider_curr['preview']) && ($placid_slider_curr['preview'] == '3' || $placid_slider_curr['preview'] == '4' ) ) {
		$html.= '.placid_slider_set'.$cntr.' .placid_slides .woo_sale { '.$placid_slider_css['placid_woo_sale_strip'].'}
		.placid_slider_set'.$cntr.' .placid_slides .regular { '.$placid_slider_css['placid_slide_wooprice'].'}
		.placid_slider_set'.$cntr.' .placid_slides .sale-price { '.$placid_slider_css['placid_slide_woosaleprice'].'}
		.placid_slider_set'.$cntr.' .placid_slides .placid_woocat a{ '.$placid_slider_css['placid_slide_cat'].'}';
		} // END - Woo Generated CSS>

	$html.='</div>
	</div>

	</div>

	</div>';

	} elseif($tab == 'woo') {
	
		$html .= '<!-- Sale Strip -->
	<div class="sub_settings toggle_settings">
	<h2 class="sub-heading">'.__('Slide Sale strip','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 

	<table class="form-table">

	<tr valign="top">
	<th scope="row">'.__('Sale Strip','placid-slider').'</th>
	<td>
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[enable_woosalestrip]" id="placid_slider_enable_woosalestrip" class="hidden_check" value="'.$placid_slider_curr['enable_woosalestrip'].'">
			<input id="placid_enablewoosalestripsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_woosalestrip'],false).'>
			<label for="placid_enablewoosalestripsett"></label>
		</div> 
	</td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Strip Text','placid-slider').'</th>
	<td><input type="text" name="'.$placid_slider_options.'[woo_sale_text]" id="placid_woo_saletext" class="regular-text" value="'.$placid_slider_curr['woo_sale_text'].'" /></td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Strip Color','placid-slider').'</th>
	<td><input type="text" name="'.$placid_slider_options.'[woo_sale_color]" id="placid_woo_salecolor" value="'.$placid_slider_curr['woo_sale_color'].'" class="wp-color-picker-field" data-default-color="#D8E7EE" /></td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Text Color','placid-slider').'</th>
	<td><input type="text" name="'.$placid_slider_options.'[woo_sale_tcolor]" id="placid_woo_saletcolor" value="'.$placid_slider_curr['woo_sale_tcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></td>
	</tr>
	</table>
	<p class="submit">
		<input type="submit" class="button-primary" name="save_settings" value="'.__('Save Changes','placid-slider').'" />
	</p>
	</div>
	<!-- Sale Strip ends -->

	<!-- slide price -->
	<div class="sub_settings toggle_settings">
	<h2 class="sub-heading">'.__('Slide Regular price','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 

	<table class="form-table settings-tbl">

	<tr valign="top">
	<th scope="row">'.__('Regular Price','placid-slider').'</th>
	<td>
		<div class="eb-switch eb-switchnone">
				<input type="hidden" name="'.$placid_slider_options.'[enable_wooregprice]" id="placid_slider_enable_wooregprice" class="hidden_check" value="'.$placid_slider_curr['enable_wooregprice'].'">
				<input id="placid_enablewooregpricesett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_wooregprice'],false).'>
				<label for="placid_enablewooregpricesett"></label>
		</div> 
	</td>
	</tr>

	<!-- code for new fonts -->
	<tr valign="top">
	<th scope="row">'.__('Font Type','placid-slider').'</th>
	<td>
	<input type="hidden" value="slide_woo_price_font" class="ftype_rname">
		<input type="hidden" value="slide_woo_price_fontg" class="ftype_gname">
		<input type="hidden" value="slide_woo_price_custom" class="ftype_cname">
		<select name="'.$placid_slider_options.'[woo_font]" id="placid_slider_woo_font" class="main-font">
			<option value="regular" '.selected( $placid_slider_curr['woo_font'], "regular", false ).' > Regular Fonts </option>
			<option value="google" '.selected( $placid_slider_curr['woo_font'], "google", false ).' > Google Fonts </option>
			<option value="custom" '.selected( $placid_slider_curr['woo_font'], "custom", false ).' > Custom Fonts </option>
		</select>
	</td>
	</tr>

	<tr><td class="load-fontdiv" colspan="2"></td></tr>
	<!-- code for new fonts -->

	<tr valign="top">
	<th scope="row">'.__('Font Color','placid-slider').'</th>
	<td><input type="text"  name="'.$placid_slider_options.'[slide_woo_price_fcolor]" id="placid_slide_wooprice_fcolor" value="'.$placid_slider_curr['slide_woo_price_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Font Size','placid-slider').'</th>
	<td><input type="number"  name="'.$placid_slider_options.'[slide_woo_price_fsize]" id="placid_slide_wooprice_fsize" class="small-text" value="'.$placid_slider_curr['slide_woo_price_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
	</tr>

	<tr valign="top" class="font-style">
	<th scope="row">'.__('Font Style','placid-slider').'</th>
	<td><select  name="'.$placid_slider_options.'[slide_woo_price_fstyle]" id="placid_slide_wooprice_fstyle" >
		<option value="bold" '.selected("bold",$placid_slider_curr['slide_woo_price_fstyle'], false).' >'.__('Bold','placid-slider').'</option>
		<option value="bold italic" '.selected("bold italic",$placid_slider_curr['slide_woo_price_fstyle'], false).' >'.__('Bold Italic','placid-slider').'</option>
		<option value="italic" '.selected("italic",$placid_slider_curr['slide_woo_price_fstyle'], false).' >'.__('Italic','placid-slider').'</option>
		<option value="normal" '.selected("normal",$placid_slider_curr['slide_woo_price_fstyle'], false).' >'.__('Normal','placid-slider').'</option>
	</select>
	</td>
	</tr>
	</table>
	<p class="submit">
		<input type="submit" class="button-primary" name="save_settings" value="'.__('Save Changes','placid-slider').'" />
		<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
	</p>
	</div>
	<!-- slide price ends-->

	<!-- slide sale price -->
	<div class="sub_settings toggle_settings">
	<h2 class="sub-heading">'.__('Sale price','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 

	<table class="form-table settings-tbl">

	<tr valign="top"> 
	<th scope="row">'.__('Sale Price','placid-slider').'</th>
	<td>
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[enable_woosprice]" id="placid_slider_enable_woosprice" class="hidden_check" value="'.$placid_slider_curr['enable_woosprice'].'">
			<input id="placid_enablewoospricesett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_woosprice'],false).'>
			<label for="placid_enablewoospricesett"></label>
		</div> 
	</td>
	</tr>

	<!-- code for new fonts -->
	<tr valign="top">
	<th scope="row">'.__('Font Type','placid-slider').'</th>
	<td>
	<input type="hidden" value="slide_woo_saleprice_font" class="ftype_rname">
	<input type="hidden" value="slide_woo_saleprice_fontg" class="ftype_gname">
	<input type="hidden" value="slide_woo_saleprice_custom" class="ftype_cname">
	<select  name="'.$placid_slider_options.'[woosale_font]" id="placid_slider_woosale_font" class="main-font">
		<option value="regular" '.selected( $placid_slider_curr['woosale_font'], "regular", false ).' > Regular Fonts </option>
		<option value="google" '.selected( $placid_slider_curr['woosale_font'], "google", false ).' > Google Fonts </option>
		<option value="custom" '.selected( $placid_slider_curr['woosale_font'], "custom", false ).' > Custom Fonts </option>
	</select>
	</td>
	</tr>

	<tr><td class="load-fontdiv" colspan="2"></td></tr>
	<!-- code for new fonts -->

	<tr valign="top">
	<th scope="row">'.__('Font Color','placid-slider').'</th>
	<td><input type="text"  name="'.$placid_slider_options.'[slide_woo_saleprice_fcolor]" id="placid_slide_woosaleprice_fcolor" value="'.$placid_slider_curr['slide_woo_saleprice_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></td>
	</tr>

	<tr valign="top">
	<th scope="row">'.__('Font Size','placid-slider').'</th>
	<td><input type="number"  name="'.$placid_slider_options.'[slide_woo_saleprice_fsize]" id="placid_slide_woosaleprice_fsize" class="small-text" value="'.$placid_slider_curr['slide_woo_saleprice_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
	</tr>

	<tr valign="top" class="font-style">
	<th scope="row">'.__('Font Style','placid-slider').'</th>
	<td><select  name="'.$placid_slider_options.'[slide_woo_saleprice_fstyle]" id="placid_slide_woosaleprice_fstyle" >
		<option value="bold" '.selected( "bold",$placid_slider_curr['slide_woo_saleprice_fstyle'], false).' >'.__('Bold','placid-slider').'</option>
		<option value="bold italic" '.selected( "bold italic",$placid_slider_curr['slide_woo_saleprice_fstyle'], false).' >'.__('Bold Italic','placid-slider').'</option>
		<option value="italic" '.selected( "italic",$placid_slider_curr['slide_woo_saleprice_fstyle'], false).' >'.__('Italic','placid-slider').'</option>
		<option value="normal" '.selected( "normal",$placid_slider_curr['slide_woo_saleprice_fstyle'], false).' >'.__('Normal','placid-slider').'</option>
	</select>
	</td>
	</tr>
	</table>
<p class="submit">
		<input type="submit" class="button-primary" name="save_settings" value="'.__('Save Changes','placid-slider').'" />
		<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
</p>
</div>
<!-- slide sale price ends -->

<div class="sub_settings toggle_settings">
<h2 class="sub-heading">'.__('Stars','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 

<table class="form-table">

	<tr valign="top">
	<th scope="row">'.__('Stars','placid-slider').'</th>
	<td>
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[enable_woostar]" id="placid_slider_enable_woostar" class="hidden_check" value="'.$placid_slider_curr['enable_woostar'].'">
			<input id="placid_enablewoostarsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_woostar'],false).'>
			<label for="placid_enablewoostarsett"></label>
		</div> 
	</td>
	</td>

	<tr valign="top">
	<th scope="row">'.__('Select Star','placid-slider').'</th>
	<td style="display: flex;">';
	$url='images/star/gold.png';
	$url1='images/star/black.png';
	$url2='images/star/red.png'; 
	$url3='images/star/green.png';
	$url4='images/star/grogreen.png';
	$url5='images/star/yellow.png';
	$url6='images/star/grored.png';
	$url7='images/star/groyellow.png';

	$html .='<div class="arrows"><img src="'.placid_slider_plugin_url($url).'" width="16" height="16" />
	<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star1" class="woo_star" value="gold" '.checked('gold',$placid_slider_curr['nav_woo_star'],false).'/> </div>

		<div class="arrows"><img src="'.placid_slider_plugin_url($url1).'" width="16" height="16" />
		<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star2" class="woo_star" value="black" '.checked('black',$placid_slider_curr['nav_woo_star'],false).' /> </div>

		<div class="arrows"><img src="'.placid_slider_plugin_url($url2).'" width="16" height="16" />
		<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star3" class="woo_star" value="red" '.checked('red',$placid_slider_curr['nav_woo_star'],false).' /> </div>

		<div class="arrows"><img src="'.placid_slider_plugin_url($url3).'" width="16" height="16" />
		<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star4" class="woo_star" value="green" '.checked('green',$placid_slider_curr['nav_woo_star'],false).' /> </div>

		<div class="arrows"><img src="'.placid_slider_plugin_url($url4).'" width="16" height="16" />
		<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star5" class="woo_star" value="grogreen" '.checked('grogreen',$placid_slider_curr['nav_woo_star'],false).' /> </div>

		<div class="arrows"><img src="'.placid_slider_plugin_url($url5).'" width="16" height="16"/>
		<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star6" class="woo_star" value="yellow" '.checked('yellow',$placid_slider_curr['nav_woo_star'],false).' /> </div>

		<div class="arrows"><img src="'.placid_slider_plugin_url($url6).'" width="16" height="16"/>
		<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star7" class="woo_star" value="grored" '.checked('grored',$placid_slider_curr['nav_woo_star'],false).' /> </div>

		<div class="arrows"><img src="'.placid_slider_plugin_url($url7).'" width="16" height="16"/>
		<input name="'.$placid_slider_options.'[nav_woo_star]" type="radio" id="placid_nav_woo_star8" class="woo_star" value="groyellow" '.checked('groyellow',$placid_slider_curr['nav_woo_star'],false).' /> </div>
		</div>
	</td>
	</tr>
	</table>
	<p class="submit">
		<input type="submit" class="button-primary" name="save_settings" value="'.__('Save Changes','placid-slider').'" />
		<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
	</p>
	</div>';
	
	} elseif($tab == 'events') {
		$html .= '<div class="sub_settings toggle_settings">
		<h2 class="sub-heading">'.__('Slide date-time','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 

		<table class="form-table settings-tbl">

		<tr valign="top">
		<th scope="row">'.__('Event date-time','placid-slider').'</th>
		<td>
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[enable_eventdt]" id="placid_slider_enable_eventdt" class="hidden_check" value="'.$placid_slider_curr['enable_eventdt'].'">
			<input id="placid_enableeventdtsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventdt'],false).'>
			<label for="placid_enableeventdtsett"></label>
		</div> 
		</td>
		</tr>

		<!-- code for new fonts -->
		<tr valign="top">
		<th scope="row">'.__('Font Type','placid-slider').'</th>
		<td>
			<input type="hidden" value="slide_eventm_font" class="ftype_rname">
			<input type="hidden" value="slide_eventm_fontg" class="ftype_gname">
			<input type="hidden" value="slide_eventm_custom" class="ftype_cname">
			<select name="'.$placid_slider_options.'[eventmd_font]" id="placid_slider_eventmd_font" class="main-font">
				<option value="regular" '.selected( $placid_slider_curr['eventmd_font'], "regular", false ).' > Regular Fonts </option>
				<option value="google" '.selected( $placid_slider_curr['eventmd_font'], "google", false ).' > Google Fonts </option>
				<option value="custom" '.selected( $placid_slider_curr['eventmd_font'], "custom", false ).' > Custom Fonts </option>
			</select>
		</td>
		</tr>

		<tr><td class="load-fontdiv" colspan="2"></td></tr>
		<!-- code for new fonts -->

		<tr valign="top">
			<th scope="row">'.__('Font Color','placid-slider').'</th>
			<td><input type="text" name="'.$placid_slider_options.'[slide_eventm_fcolor]" id="placid_slide_woocat_fcolor" value="'.$placid_slider_curr['slide_eventm_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Font Size','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[slide_eventm_fsize]" id="placid_slide_woocat_fsize" class="small-text" value="'.$placid_slider_curr['slide_eventm_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
		</tr>

		<tr valign="top" class="font-style">
		<th scope="row">'.__('Font Style','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[slide_eventm_fstyle]" id="placid_slide_eventm_fstyle" >
			<option value="bold" '.selected("bold",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Bold','placid-slider').'</option>
			<option value="bold italic" '.selected("bold italic",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Bold Italic','placid-slider').'</option>
			<option value="italic" '.selected("italic",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Italic','placid-slider').'</option>
			<option value="normal" '.selected("normal",$placid_slider_curr['slide_eventm_fstyle'], false).' >'.__('Normal','placid-slider').'</option>
		</select>
		</td>
		</tr>
		</table>
		<p class="submit">
			<input type="submit" class="button-primary" name="save_settings" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>
		</div>
		<!-- slide date-time end>

		<!-- event address-->
		<div class="sub_settings toggle_settings">
		<h2 class="sub-heading">'.__('Event address','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 

		<table class="form-table settings-tbl">
		<tr valign="top"> 
		<th scope="row">'.__('Event Address','placid-slider').'</th>
		<td>
		<div class="eb-switch eb-switchnone">
			<input type="hidden" name="'.$placid_slider_options.'[enable_eventadd]" id="placid_slider_enable_eventadd" class="hidden_check" value="'.$placid_slider_curr['enable_eventadd'].'">
			<input id="placid_enableeventaddsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventadd'],false).'>
			<label for="placid_enableeventaddsett"></label>
		</div> 
		</td>
		</tr>
		<!-- code for new fonts -->
		<tr valign="top">
		<th scope="row">'.__('Font Type','placid-slider').'</th>
		<td>
		<input type="hidden" value="eventm_addr_font" class="ftype_rname">
		<input type="hidden" value="eventm_addr_fontg" class="ftype_gname">
		<input type="hidden" value="eventm_addr_custom" class="ftype_cname">
		<select name="'.$placid_slider_options.'[event_addr_font]" id="placid_slider_event_addr_font" class="main-font">
			<option value="regular" '.selected( $placid_slider_curr['event_addr_font'], "regular", false ).' > Regular Fonts </option>
			<option value="google" '.selected( $placid_slider_curr['event_addr_font'], "google", false ).' > Google Fonts </option>
			<option value="custom" '.selected( $placid_slider_curr['event_addr_font'], "custom", false ).' > Custom Fonts </option>
		</select>
		</td>
		</tr>

		<tr><td class="load-fontdiv" colspan="2"></td></tr>
		<!-- code for new fonts -->
		<tr valign="top">
		<th scope="row">'.__('Font Color','placid-slider').'</th>
			<td><input type="text" name="'.$placid_slider_options.'[eventm_addr_fcolor]" id="placid_slide_naveventm_fcolor" value="'.$placid_slider_curr['eventm_addr_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></td>
		</tr>

		<tr valign="top">
		<th scope="row">'.__('Font Size','placid-slider').'</th>
		<td><input type="number" name="'.$placid_slider_options.'[eventm_addr_fsize]" id="placid_slide_naveventm_fsize" class="small-text" value="'.$placid_slider_curr['eventm_addr_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
		</tr>

		<tr valign="top" class="font-style">
		<th scope="row">'.__('Font Style','placid-slider').'</th>
		<td><select name="'.$placid_slider_options.'[eventm_addr_fstyle]" id="placid_slide_eventm_fstyle" >
			<option value="bold" '.selected("bold",$placid_slider_curr['eventm_addr_fstyle'],false).'>'.__('Bold','placid-slider').'</option>
			<option value="bold italic" '.selected("bold italic",$placid_slider_curr['eventm_addr_fstyle'],false).' >'.__('Bold Italic','placid-slider').'</option>
			<option value="italic" '.selected("italic",$placid_slider_curr['eventm_addr_fstyle'],false).' >'.__('Italic','placid-slider').'</option>
			<option value="normal" '.selected("normal",$placid_slider_curr['eventm_addr_fstyle'],false).' >'.__('Normal','placid-slider').'</option>
		</select>
		</td>
		</tr>
		</table>
		<p class="submit">
			<input type="submit" class="button-primary" name="save_settings" value="'.__('Save Changes','placid-slider').'" />
			<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
		</p>
		</div> 
		<!-- event category-->
			<div class="sub_settings toggle_settings">
				<h2 class="sub-heading">'.__('Event Category','placid-slider').'<img src="'.placid_slider_plugin_url( 'images/close.png' ).'" class="toggle_img"></h2> 
				<table class="form-table settings-tbl">
				<tr valign="top"> 
					<th scope="row">'.__('Event Category','placid-slider').'</th>
					<td>
					<div class="eb-switch eb-switchnone">
						<input type="hidden" name="'.$placid_slider_options.'[enable_eventcat]" id="placid_slider_enable_eventcat" class="hidden_check" value="'.$placid_slider_curr['enable_eventcat'].'">
						<input id="placid_enableeventcatsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventcat'],false).'>
						<label for="placid_enableeventcatsett"></label>
					</div> 
					</td>
				</tr>
				<!-- code for new fonts -->
				<tr valign="top">
					<th scope="row">'.__('Font Type','placid-slider').'</th>
					<td>
					<input type="hidden" value="eventm_cat_font" class="ftype_rname">
					<input type="hidden" value="eventm_cat_fontg" class="ftype_gname">
					<input type="hidden" value="eventm_cat_custom" class="ftype_cname">
					<select name="'.$placid_slider_options.'[event_cat_font]" id="placid_slider_event_cat_font" class="main-font">
						<option value="regular" '.selected( $placid_slider_curr['event_cat_font'], "regular", false ).' > Regular Fonts </option>
						<option value="google" '.selected( $placid_slider_curr['event_cat_font'], "google", false ).' > Google Fonts </option>
						<option value="custom" '.selected( $placid_slider_curr['event_cat_font'], "custom", false ).' > Custom Fonts </option>
					</select>
					</td>
				</tr>
				<tr><td class="load-fontdiv" colspan="2"></td></tr>
				<!-- code for new fonts -->
				<tr valign="top">
					<th scope="row">'.__('Font Color','placid-slider').'</th>
					<td><input type="text" name="'.$placid_slider_options.'[eventm_cat_fcolor]" id="placid_slide_eventm_fcolor" value="'.$placid_slider_curr['eventm_cat_fcolor'].'" class="wp-color-picker-field" data-default-color="#a6a6a6" /></td>
				</tr>
				<tr valign="top">
					<th scope="row">'.__('Font Size','placid-slider').'</th>
					<td><input type="number" name="'.$placid_slider_options.'[eventm_cat_fsize]" id="placid_slide_eventm_fsize" class="small-text" value="'.$placid_slider_curr['eventm_cat_fsize'].'" min="1" />&nbsp;'.__('px','placid-slider').'</td>
				</tr>
				<tr valign="top"  class="font-style">
					<th scope="row">'.__('Font Style','placid-slider').'</th>
					<td><select name="'.$placid_slider_options.'[eventm_cat_fstyle]" id="placid_slide_eventm_fstyle" >
					<option value="bold" '.selected("bold",$placid_slider_curr['eventm_cat_fstyle'], false).' >'.__('Bold','placid-slider').'</option>
					<option value="bold italic" '.selected("bold italic",$placid_slider_curr['eventm_cat_fstyle'], false).' >'.__('Bold Italic','placid-slider').'</option>
					<option value="italic" '.selected("italic",$placid_slider_curr['eventm_cat_fstyle'], false).' >'.__('Italic','placid-slider').'</option>
					<option value="normal" '.selected("normal",$placid_slider_curr['eventm_cat_fstyle'], false).' >'.__('Normal','placid-slider').'</option>
					</select>
					</td>
				</tr>
				
				<tr valign="top"> 
					<th scope="row">'.__('Event Description','placid-slider').'</th>
					<td>
					<div class="eb-switch eb-switchnone">
						<input type="hidden" name="'.$placid_slider_options.'[enable_eventdecr]" id="placid_slider_enable_eventdecr" class="hidden_check" value="'.$placid_slider_curr['enable_eventdecr'].'">
						<input id="placid_enableeventdecrsett" class="cmn-toggle eb-toggle-round" type="checkbox" '.checked('1', $placid_slider_curr['enable_eventdecr'],false).'>
						<label for="placid_enableeventdecrsett"></label>
					</div> 
					</td>
				</tr>
				
				
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" name="save_settings" value="'.__('Save Changes','placid-slider').'" />
				<input type="submit" name="undo_settings" class="placid-undo" style="'.$undo_style.'" value="'.__('Undo','placid-slider').'" />
			</p>
		</div>
		<!-- event category ends-->';
	}
	echo $html;
	die();
}
?>
