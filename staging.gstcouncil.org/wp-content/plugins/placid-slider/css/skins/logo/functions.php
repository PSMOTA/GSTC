<?php 
function placid_post_processor_logo($posts, $placid_slider_curr,$out_echo,$set,$data=array()){
	$skin='logo';
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_css = placid_get_inline_css($set);
	$html = '';
	$placid_sldr_j = $i = 0;
	$type = isset($data['type'])?$data['type']:'';
	$types = array("woo", "ecom", "eman", "ecal");
	
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
	//Image Cropping
	$timthumb='1';
	if($placid_slider_curr['timthumb']=='1'){
		$timthumb='0';
	}
	else {
		require_once(PLACID_SLIDER_INC_DIR.'BFI_Thumb.php');
	}
	
	$slider_handle='';
	if ( is_array($data) and isset($data['slider_handle']) ) {
		$slider_handle=$data['slider_handle'];
	}
	
	$coloronhover_class='';
	if($placid_slider_curr['coloronhover'] == '1') {
		$coloronhover_class=' placid_img_gray';
	}
	foreach($posts as $post) {
		$id = $post_id = $post->ID;
		$post_title = get_post_meta($id, 'SlideTitle', true);

		if(empty($post_title)) {
			if(function_exists('qtrans_useCurrentLanguageIfNotFoundShowAvailable')) {
				$post_title = qtrans_useCurrentLanguageIfNotFoundShowAvailable( $post->post_title );
				$post_title = stripslashes( $post_title );
				$slider_content=qtrans_useCurrentLanguageIfNotFoundShowAvailable( $post->post_content );
			}
			else {
				$post_title = stripslashes($post->post_title);
				$slider_content = $post->post_content;			
			}
				$post_title = str_replace('"', '', $post_title);
		}
		$placid_sldr_j++;
		//filter hook
		if (isset($post_id)) $post_title=apply_filters('placid_post_title',$post_title,$post_id,$placid_slider_curr,$placid_slider_css);
		$slider_content = $post->post_content;
		
		$placid_slide_redirect_url = get_post_meta($post_id, '_placid_slide_redirect_url', true);
		if(empty($placid_slide_redirect_url)) $placid_slide_redirect_url = get_post_meta($post_id, 'placid_slide_redirect_url', true);
		
		$placid_sslider_nolink = get_post_meta($post_id,'_placid_sslider_nolink',true);
		if(empty($placid_sslider_nolink)) $placid_sslider_nolink = get_post_meta($post_id,'placid_sslider_nolink',true);
		
		trim($placid_slide_redirect_url);
		if(!empty($placid_slide_redirect_url) and isset($placid_slide_redirect_url)) {
		   $permalink = $placid_slide_redirect_url;
		}
		else{
		   $permalink = get_permalink($post_id);
		}
		if($placid_sslider_nolink=='1'){
		  $permalink='';
		}
		/* do not link from settings panel - 3.0 */
		$dolink = get_post_meta($post_id,'placid_dolink',true);
		$img_permalink = $permalink;
		if( empty( $dolink ) && $placid_slider_curr['donotlink'] == '1' ) {
			$permalink='';
			if($placid_slider_curr['pphoto'] != "1"){
				$img_permalink ="";
			}
		}	
		/* Slide Transition */
		$placid_slide_transition=get_post_meta($post_id, '_placid_slide_transition', true);
		$tran_class = $itranstyle ='';
		$slide_style = $placid_slider_css['placid_slideri'];
		
		if($placid_slide_transition != '') {
			/* Per Slide : Slide Transition */
			$tran_class = "placid-animated placid-".$placid_slide_transition;
			if($placid_slider_curr['stylesheet'] != 'sample') {
				$slide_delay=get_post_meta($post_id, '_placid_slide_delay', true);
				$slide_duration=get_post_meta($post_id, '_placid_slide_duration', true);
				if($slide_duration != "") $itranstyle .= '-webkit-animation-duration: '.$slide_duration.'s;-moz-animation-duration: '.$slide_duration.'s;animation-duration: '.$slide_duration.'s;';
				if($slide_delay != "") $itranstyle .= '-webkit-animation-delay: '.$slide_delay.'s;-moz-animation-delay: '.$slide_delay.'s;animation-delay: '.$slide_delay.'s;';
				if($slide_duration != "" || $slide_delay != "")
					$slide_style = substr_replace($placid_slider_css['placid_slideri'], $itranstyle.'"', -1);
			}
		} elseif( isset($placid_slider_curr['slide_transition']) && $placid_slider_curr['slide_transition'] != '' ) {
			/* Slider : Slide Transition */
			$tran_class = "placid-animated placid-".$placid_slider_curr['slide_transition'];
			if($placid_slider_curr['stylesheet'] != 'sample') {
				$slide_duration = $placid_slider_curr['slide_duration'];
				$slide_delay = $placid_slider_curr['slide_delay'];
				if($slide_duration != "") $itranstyle .= '-webkit-animation-duration: '.$slide_duration.'s;-moz-animation-duration: '.$slide_duration.'s;animation-duration: '.$slide_duration.'s;';
				if($slide_delay != "") $itranstyle .= '-webkit-animation-delay: '.$slide_delay.'s;-moz-animation-delay: '.$slide_delay.'s;animation-delay: '.$slide_delay.'s;';
				if($slide_duration != "" || $slide_delay != "")
					$slide_style = substr_replace($placid_slider_css['placid_slideri'], $itranstyle.'"', -1);
			}
		}
		$html .= '<div class="placid_slideri '.$tran_class.'"  '.$slide_style.' >
			<!-- placid_slideri -->';
			
		if($placid_slider_curr['show_content']=='1'){
			if ($placid_slider_curr['content_from'] == "slider_content") {
				$slider_content = get_post_meta($post_id, 'slider_content', true);
			}
			if ($placid_slider_curr['content_from'] == "excerpt") {
				if(function_exists('qtrans_useCurrentLanguageIfNotFoundShowAvailable')) {
					$slider_content = qtrans_useCurrentLanguageIfNotFoundShowAvailable( $post->post_excerpt );
				}
				else {
					$slider_content = $post->post_excerpt;
				}
			}

			$slider_content = strip_shortcodes( $slider_content );

			$slider_content = stripslashes($slider_content);
			$slider_content = str_replace(']]>', ']]&gt;', $slider_content);
	
			$slider_content = str_replace("\n","<br />",$slider_content);
			$slider_content = strip_tags($slider_content, $placid_slider_curr['allowable_tags']);
			$content_limit=$placid_slider_curr['content_limit'];
			$content_chars=$placid_slider_curr['content_chars'];
			if( $placid_slider_curr['climit'] == 1 && !empty($content_chars)){ 
				$slider_excerpt = substr($slider_content,0,$content_chars);
			}
			elseif( $placid_slider_curr['climit'] == 0 && !empty($content_limit)){ 
				$slider_excerpt = placid_slider_word_limiter( $slider_content, $limit = $content_limit, $dots = '...' );
			}
			if(!isset($slider_excerpt))$slider_excerpt='';
		
			//filter hook
			$slider_excerpt=apply_filters('placid_slide_excerpt',$slider_excerpt,$post_id,$placid_slider_curr,$placid_slider_css);
			$slider_excerpt='<span '.$placid_slider_css['placid_slider_span'].' > '.$slider_excerpt.'</span>';
		}
		else{
		    $slider_excerpt='';
		}
		//filter hook
			$slider_excerpt=apply_filters('placid_slide_excerpt_html',$slider_excerpt,$post_id,$placid_slider_curr,$placid_slider_css,$data);
		
		$placid_fields=$placid_slider_curr['fields'];		
		$fields_html='';
		if($placid_fields and !empty($placid_fields) ){
			$fields=explode( ',', $placid_fields );
			if($fields){
				foreach($fields as $field) {
					$field_val = get_post_meta($post_id, $field, true);
					if( $field_val and !empty($field_val) )
						$fields_html .='<div class="placid_'.$field.' placid_fields">'.$field_val.'</div>';
				}
			}
		}
//All images
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
		
		$gti_width = $placid_slider_curr['img_width'];
	    $gti_height = $placid_slider_curr['img_height'];
		
		if(placid_get_image_sizes( '','', $placid_slider_curr['crop'] ) )
			$extract_size = $placid_slider_curr['crop'];
		else $extract_size = 'full';
		//Slide link anchor attributes
		$a_attr='';$imglink='';
		$a_attr=get_post_meta($post_id,'_placid_link_attr',true);
		if(empty($a_attr)) $a_attr=get_post_meta($post_id,'placid_link_attr',true);	
		if( empty($a_attr) and isset( $placid_slider_curr['a_attr'] ) ) $a_attr=$placid_slider_curr['a_attr'];
		$a_attr_orig = $a_attr;			
		if( isset($placid_slider_curr['pphoto'])  and $placid_slider_curr['pphoto'] == '1'  ){
				if($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'pphoto_box') {
	 					$a_attr.='rel="prettyPhoto"';
						$a_attr_lbox='pphoto-box';
					}
				elseif($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'swipe_box') {
						$a_attr_lbox='swipe-box';
					}
				elseif($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'smooth_box') {
						$a_attr_lbox='smooth-box';
					}
				elseif($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'nivo_box') {
	 					$a_attr.='data-lightbox-gallery="placid_gallery"';
						$a_attr_lbox ='';
				}	
				else {
						$a_attr_lbox ='';
				}
	
			if(!empty($placid_slide_redirect_url) and isset($placid_slide_redirect_url))
				$imglink=$placid_slide_redirect_url;
			else $imglink='1';
		}
		else {
			$a_attr_lbox ='';
		}

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
			'image_class' => 'placid_slider_thumbnail'.$coloronhover_class,
			'image_scan' => $image_scan,
			'width' => $gti_width,
			'height' => $gti_height,
			'echo' => false,
			'permalink' => $img_permalink,
			'timthumb'=>$timthumb,
			'style'=> $placid_slider_css['placid_slider_thumbnail'],
			'a_attr'=> $a_attr,
			'a_attr_lbox'=>$a_attr_lbox,
			'imglink'=>$imglink,
			'image_title_text'=>$image_title_text
		);
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
		if( empty($placid_media) or $placid_media=='' or !($placid_media) ) {  
			$placid_large_image=placid_sslider_get_the_image($img_args);
		}
		else{
			$placid_large_image=$placid_media;
		}
		//filter hook
		$placid_large_image=apply_filters('placid_large_image',$placid_large_image,$post_id,$placid_slider_curr,$placid_slider_css);
		$thumbnail_image=get_post_meta($post_id, '_placid_disable_image', true);
		
		if($thumbnail_image!='1')
			$html .= $placid_large_image;
		/*Added for embeding any shortcode on slide - start */
		$placid_eshortcode=get_post_meta($post_id, '_placid_embed_shortcode', true);
		
		if(!empty($placid_eshortcode)){
			$shortcode_html=do_shortcode($placid_eshortcode);
			$html.='<div class="placid_eshortcode" '.$placid_slider_css['placid_slider_thumbnail'].'>'.$shortcode_html.'</div>';
		}	
		/* Added for embeding any shortcode on slide - end */	
		
		if ($placid_slider_curr['image_only'] == '1') { 
			$html .= '<!-- /placid_slideri -->
			</div>';
		}
		else {
			$title_style = $placid_slider_css['placid_slider_h2'];
			if($placid_slider_curr['title_element']=='1') {
				$starth = '<h1 class="slider_htitle" '.$title_style.'>';	
				$endh = '</h1>'; 	
			}
			elseif($placid_slider_curr['title_element']=='2') {
				$starth = '<h2 class="slider_htitle" '.$title_style.'>';			
				$endh = '</h2>';
			}
			elseif($placid_slider_curr['title_element']=='3') {
				$starth = '<h3 class="slider_htitle" '.$title_style.'>';
				$endh = '</h3>';
			}
			elseif($placid_slider_curr['title_element']=='4') {
				$starth = '<h4 class="slider_htitle" '.$title_style.'>';
				$endh = '</h4>';
			}
			elseif($placid_slider_curr['title_element']=='5') {
				$starth = '<h5 class="slider_htitle" '.$title_style.'>';
				$endh = '</h5>';
			}
			elseif($placid_slider_curr['title_element']=='6') {
				$starth = '<h6 class="slider_htitle" '.$title_style.'>';
				$endh = '</h6>';
			}
			else {
				$starth = '<h2 class="slider_htitle" '.$title_style.'>';			
				$endh = '</h2>';
			}
		
		   if($permalink!='') {
			if($placid_slider_curr['show_ptitle']=='1') {
				$slide_title = $starth.'<a href="'.$permalink.'" '.$placid_slider_css['placid_slider_h2_a'].' '.$a_attr_orig.'>'.$post_title.'</a>'.$endh;
			}else{
				$slide_title = "";
			}
			//filter hook
		   $slide_title=apply_filters('placid_slide_title_html',$slide_title,$post_id,$placid_slider_curr,$placid_slider_css,$set,$data);
			$html .= '<div class="placid_text" '.$placid_slider_css['placid_text'].'>'.$slide_title.$slider_excerpt.$fields_html;
			if($placid_slider_curr['show_content']=='1'){
			  $placid_more=$placid_slider_curr['more'];
			  if($placid_more and !empty($placid_more) ){
			      $html .= '<p class="more"><a href="'.$permalink.'" '.$placid_slider_css['placid_slider_p_more'].' '.$a_attr_orig.'>'.$placid_slider_curr['more'].'</a></p>';
			  }
			}
			 $html .= '	<!-- /placid_slideri -->
			</div></div>'; }
		   else{
		  	if($placid_slider_curr['show_ptitle']=='1') {
			  	 $slide_title = $starth.$post_title.$endh;
		   	}
		   	else{
					$slide_title = "";
			}
		   //filter hook
		  $slide_title=apply_filters('placid_slide_title_html',$slide_title,$post_id,$placid_slider_curr,$placid_slider_css,$set,$data);
		   $html .= '<div class="placid_text" '.$placid_slider_css['placid_text'].'>'.$slide_title.$slider_excerpt.$fields_html.'
				<!-- /placid_slideri -->
			</div></div>';    }
		}
	}
	//filter hook
	$html=apply_filters('placid_extract_html',$html,$placid_sldr_j,$posts,$placid_slider_curr);
	if($out_echo == '1') {
	   echo $html;
	}
	$r_array = array( $placid_sldr_j, $html);
	$r_array=apply_filters('placid_r_array',$r_array,$posts, $placid_slider_curr,$set);
	return $r_array;
}
/*** ---------------------------Data Processor Function For Add-on----------------------------- ***/

function placid_data_processor_logo($slides, $placid_slider_curr,$out_echo,$set,$data=array()){
	$skin='logo'; 
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_css = placid_get_inline_css($set);
	$html = '';
	$placid_sldr_j = $i = 0;

	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	// V 3.0 Added for accessing data 
	if(is_array($data)) extract($data,EXTR_PREFIX_ALL,'data');
	
	$coloronhover_class='';
	if($placid_slider_curr['coloronhover'] == '1') {
		$coloronhover_class=' placid_img_gray';
	}

	$slider_handle='';
	if ( !empty($data_slider_handle) ) {
		$slider_handle=$data_slider_handle;
	}
	foreach($slides as $slide) {
		$id = $post_id = '';
		if (isset ($slide->ID)) {$id = $post_id = $slide->ID;}
		$post_title = stripslashes($slide->post_title);
		$post_title = str_replace('"', '', $post_title);
		//filter hook
		if (isset ($id))
		$post_title=apply_filters('placid_post_title',$post_title,$id,$placid_slider_curr,$placid_slider_css);
		$slider_content = $slide->post_content;
		$placid_sldr_j++;
		$placid_slide_redirect_url = $slide->redirect_url;
		$placid_sslider_nolink = $slide->nolink;
		trim($placid_slide_redirect_url);
		if(!empty($placid_slide_redirect_url) and isset($placid_slide_redirect_url)) {
		   $permalink = $placid_slide_redirect_url;
		}
		else{
		   $permalink = $slide->url;
		}
		if($placid_sslider_nolink=='1'){
		  $permalink='';
		}
		/* do not link from settings panel - 3.0 */
		$img_permalink = $permalink;
		if( $placid_slider_curr['donotlink'] == '1' ) {
			$permalink='';
			if($placid_slider_curr['pphoto'] != "1"){
				$img_permalink ="";
			}
		}
	/* Slide Transition */
		$slide_style = $placid_slider_css['placid_slideri'];
		$tran_class = $itranstyle = '';
		if( isset($placid_slider_curr['slide_transition']) && $placid_slider_curr['slide_transition'] != '' ) {
			/* Slider : Slide Transition */
			$tran_class = "placid-animated placid-".$placid_slider_curr['slide_transition'];
			if($placid_slider_curr['stylesheet'] != 'sample') {
				$slide_duration = $placid_slider_curr['slide_duration'];
				$slide_delay = $placid_slider_curr['slide_delay'];
				if($slide_duration != "") $itranstyle .= '-webkit-animation-duration: '.$slide_duration.'s;-moz-animation-duration: '.$slide_duration.'s;animation-duration: '.$slide_duration.'s;';
				if($slide_delay != "") $itranstyle .= '-webkit-animation-delay: '.$slide_delay.'s;-moz-animation-delay: '.$slide_delay.'s;animation-delay: '.$slide_delay.'s;';
				if($slide_duration != "" || $slide_delay != "")
					$slide_style = substr_replace($placid_slider_css['placid_slideri'], $itranstyle.'"', -1);
			}
		}	
			
		$html.= '<div class="placid_slideri '.$tran_class.'" '.$slide_style.' >
			<!-- placid_slideri -->';
			
		if($placid_slider_curr['show_content']=='1'){
			if ($placid_slider_curr['content_from'] == "slider_content") {
				$slider_content = $slide->post_content;
			}
			if ($placid_slider_curr['content_from'] == "excerpt") {
				$slider_content = $slide->post_excerpt;
			}

			$slider_content = strip_shortcodes( $slider_content );

			$slider_content = stripslashes($slider_content);
			$slider_content = str_replace(']]>', ']]&gt;', $slider_content);
	
			$slider_content = str_replace("\n","<br />",$slider_content);
			$slider_content = strip_tags($slider_content, $placid_slider_curr['allowable_tags']);
		
			$content_limit=$placid_slider_curr['content_limit'];
			$content_chars=$placid_slider_curr['content_chars'];
			if( $placid_slider_curr['climit'] == 1 && !empty($content_chars)){ 
				$slider_excerpt = substr($slider_content,0,$content_chars);
			}
			elseif( $placid_slider_curr['climit'] == 0 && !empty($content_limit)){ 
				$slider_excerpt = placid_slider_word_limiter( $slider_content, $limit = $content_limit, $dots = '...' );
			}
			if(!isset($slider_excerpt))$slider_excerpt='';
			
			//filter hook
			$slider_excerpt=apply_filters('placid_slide_excerpt',$slider_excerpt,$post_id,$placid_slider_curr,$placid_slider_css);
			$slider_excerpt='<span '.$placid_slider_css['placid_slider_span'].'> '.$slider_excerpt.'</span>';
		}
		else{
		    $slider_excerpt='';
		}
		//filter hook
			$slider_excerpt=apply_filters('placid_slide_excerpt_html',$slider_excerpt,$post_id,$placid_slider_curr,$placid_slider_css,$data);
		
		$placid_fields=$placid_slider_curr['fields'];		
		$fields_html='';
		if($placid_fields and !empty($placid_fields) ){
			$fields=explode( ',', $placid_fields );
			if($fields){
				foreach($fields as $field) {
					if (isset ($field))	$field_val = ( isset($slide->$field) ) ? ( $slide->$field ) : '' ;
					if( $field_val and !empty($field_val) )
						$fields_html .='<div class="placid_'.$field.' placid_fields">'.$field_val.'</div>';
				}
			}
		}

		//Slide link anchor attributes
		$a_attr='';$imglink='';
		if (isset ($slide->placid_link_attr))
		$a_attr=$slide->placid_link_attr;
		if( empty($a_attr) and isset( $placid_slider_curr['a_attr'] ) ) $a_attr=$placid_slider_curr['a_attr'];
		$a_attr_orig = $a_attr;	
		if( isset($placid_slider_curr['pphoto']) and $placid_slider_curr['pphoto'] == '1' ) {
			if($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'pphoto_box') {
 					$a_attr.='rel="prettyPhoto"';
					$a_attr_lbox='pphoto-box';
				}
			elseif($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'swipe_box') {
					$a_attr_lbox='swipe-box';
				}
			elseif($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'smooth_box') {
					$a_attr_lbox='smooth-box';
				}
			elseif($placid_slider_curr['pphoto'] == '1' and $placid_slider_curr['lbox_type'] == 'nivo_box') {
 					$a_attr.='data-lightbox-gallery="placid_gallery" data-lightbox-type="iframe"';
					$a_attr_lbox ='';
			}	
			else {
					$a_attr_lbox ='';
			}
		if( empty($a_attr) and isset( $placid_slider_curr['a_attr'] ) ) $a_attr=$placid_slider_curr['a_attr'];
		$a_attr_orig=$a_attr;
			if(!empty($placid_slide_redirect_url) and isset($placid_slide_redirect_url))
				$imglink=$placid_slide_redirect_url;
			else $imglink='1';
		}
		else {
			$a_attr_lbox ='';
		}
		
		//Image title text
		$image_title_text=(isset($placid_slider_curr['image_title_text']))?($placid_slider_curr['image_title_text']):('0');
		
		//For media images
		if (isset ($slide->media)) $placid_media = $slide->media;
		if (isset ($slide->media_image)) $placid_media_image = $slide->media_image;
		(isset ($slide->eshortcode)) ? $placid_eshortcode = $slide->eshortcode : $placid_eshortcode = '';
		if( ((empty($placid_media) or $placid_media=='' or !($placid_media)) and (empty($placid_media_image) or $placid_media_image=='' or !($placid_media_image)) ) or $data_media!='1' ) {
			$width = $placid_slider_curr['img_width'];
			$height = $placid_slider_curr['img_height'];
			
			if(placid_get_image_sizes( '','', $placid_slider_curr['crop'] ) )
				$extract_size = $placid_slider_curr['crop'];
			else $extract_size = 'full';
			
			$classes[] = $extract_size;
			$classes[] = 'placid_slider_thumbnail'.$coloronhover_class;
			$classes[] = (!empty($data_image_class)?$data_image_class:'');
			$class = join( ' ', array_unique( $classes ) );
	
			preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $slide->content_for_image, $matches );

			if(isset($data_default_image))$img_url=$data_default_image;
			/* If there is a match for the image, return its URL. */
			$order_of_image='';
			if(isset($data_order)) $order_of_image=$data_order;
			
			if($order_of_image > 0) $order_of_image=$order_of_image; 
			else $order_of_image = 0;
			
			if ( isset( $matches ) && count($matches[1])<=$order_of_image) $order_of_image=count($matches[1]);
			
			if ( isset( $matches ) && isset( $matches[1][$order_of_image] ) )
				$img_url = $matches[1][$order_of_image];
			
			$width = ( ( $width ) ? ' width="' . esc_attr( $width ) . '"' : '' );
			$height = ( ( $height ) ? ' height="' . esc_attr( $height ) . '"' : '' );
			
			$img_html = '<img src="' . $img_url . '" class="' . esc_attr( $class ) . '"' . $width . $height . $placid_slider_css['placid_slider_thumbnail'] .' />';
			
			//Prettyphoto Integration	
			$ipermalink=$img_permalink;
			if($imglink=='1' and $img_permalink!='') $ipermalink=$img_url;
			elseif($imglink=='') $ipermalink=$img_permalink;
			else {
				if($img_permalink!='')$ipermalink=$imglink;
			}
			if($a_attr_lbox=='swipe-box') {
				 $photobox='swipebox placid_thumb_anchor';
				}
				elseif($a_attr_lbox=='smooth-box') {
					 $photobox='sb placid_thumb_anchor';
				}
				else {
					 $photobox='placid_thumb_anchor';			
				}

			$image_title=($image_title_text=='1')?('title="'.$post_title.'"'):'';
			if($img_permalink!='') {
			  $img_html = '<a class="'.$photobox.'" href="' . $ipermalink . '" '.$image_title.' '.$a_attr_orig.'>' . $img_html . '</a>';
			}
				
			$placid_large_image=$img_html;
		}
		else{
			if(!empty($placid_media)){
				$placid_large_image=$placid_media;
			}
			else{
				$width = $placid_slider_curr['img_width'];
				$height = $placid_slider_curr['img_height'];
				$width = ( ( $width ) ? ' width="' . esc_attr( $width ) . '"' : '' );
				$height = ( ( $height ) ? ' height="' . esc_attr( $height ) . '"' : '' );
				
				if(placid_get_image_sizes( '','', $placid_slider_curr['crop'] ) )
					$extract_size = $placid_slider_curr['crop'];
				else $extract_size = 'full';
				
				$classes[] = $extract_size;
				$classes[] = 'placid_slider_thumbnail'.$coloronhover_class;
				$classes[] = isset($data_image_class)?$data_image_class:'';
				$class = join( ' ', array_unique( $classes ) );
				
				if(!empty($placid_media_image)) {
					$placid_large_image='<img src="'.$placid_media_image.'" class="' . esc_attr( $class ) . '"' . $width . $height . '/>';
					$img_url=$placid_media_image;
				}
				else {
					$placid_large_image='<img src="'.$data_default_image.'" class="' . esc_attr( $class ) . '"' . $width . $height . '/>';
					$img_url=$data_default_image;
				}
				
				//Prettyphoto Integration	
				$ipermalink=$img_permalink;
				if($imglink=='1' and $img_permalink!='') $ipermalink=$img_url;
				elseif($imglink=='') $ipermalink=$img_permalink;
				else {
					if($img_permalink!='')$ipermalink=$imglink;
				}
				if($a_attr_lbox=='swipe-box') {
					$photobox='swipebox placid_thumb_anchor';
				}
				elseif($a_attr_lbox=='smooth-box') {
					 $photobox='sb placid_thumb_anchor';
				}
				else {
					 $photobox='placid_thumb_anchor';			
				}
				$image_title=($image_title_text=='1')?('title="'.$post_title.'"'):'';
				if($img_permalink!='') {
				  $placid_large_image = '<a class="'.$photobox.'" href="' . $ipermalink . '" '.$image_title.' '.$a_attr_orig.'>' . $placid_large_image . '</a>';
				}
			}
		}
		
		//filter hook
		$placid_large_image=apply_filters('placid_large_image',$placid_large_image,$post_id,$placid_slider_curr,$placid_slider_css);
		$html .= $placid_large_image;
		  		
		if ($placid_slider_curr['image_only'] == '1') { 
			$html .= '<!-- /placid_slideri -->
			</div>';
		}
		else {
		 
			$title_style = $placid_slider_css['placid_slider_h2'];
			if($placid_slider_curr['title_element']=='1') {
				$starth = '<h1 class="slider_htitle" '.$title_style.'>';	
				$endh = '</h1>'; 	
			}
			elseif($placid_slider_curr['title_element']=='2') {
				$starth = '<h2 class="slider_htitle" '.$title_style.'>';			
				$endh = '</h2>';
			}
			elseif($placid_slider_curr['title_element']=='3') {
				$starth = '<h3 class="slider_htitle" '.$title_style.'>';
				$endh = '</h3>';
			}
			elseif($placid_slider_curr['title_element']=='4') {
				$starth = '<h4 class="slider_htitle" '.$title_style.'>';
				$endh = '</h4>';
			}
			elseif($placid_slider_curr['title_element']=='5') {
				$starth = '<h5 class="slider_htitle" '.$title_style.'>';
				$endh = '</h5>';
			}
			elseif($placid_slider_curr['title_element']=='6') {
				$starth = '<h6 class="slider_htitle" '.$title_style.'>';
				$endh = '</h6>';
			}
			else {
				$starth = '<h2 class="slider_htitle" '.$title_style.'>';			
				$endh = '</h2>';
			}
		
		   if($permalink!='') {
			if($placid_slider_curr['show_ptitle']=='1') {
				$slide_title = $starth.'<a href="'.$permalink.'" '.$placid_slider_css['placid_slider_h2_a'].' '.$a_attr_orig.'>'.$post_title.'</a>'.$endh; 
			}
			else{
				$slide_title = "";
			}
			//filter hook
		  $slide_title=apply_filters('placid_slide_title_html',$slide_title,$post_id,$placid_slider_curr,$placid_slider_css,$set,$data);
			$html.= '<div class="placid_text" '.$placid_slider_css['placid_text'].'>'.$slide_title.$slider_excerpt.$fields_html;
			if($placid_slider_curr['show_content']=='1'){
			  $placid_more=$placid_slider_curr['more'];
			  if($placid_more and !empty($placid_more) ){
			      $html .= '<p class="more"><a href="'.$permalink.'" '.$placid_slider_css['placid_slider_p_more'].' '.$a_attr_orig.'>'.$placid_slider_curr['more'].'</a></p>';
			  }
			}
			 $html .= '	<!-- /placid_slideri -->
			</div></div>'; }
		   else{
		   	if($placid_slider_curr['show_ptitle']=='1') {
	 	   			$slide_title = $starth.$post_title.$endh;
		   	}
			else{
				$slide_title = "";
			}
		   //filter hook
		   $slide_title=apply_filters('placid_slide_title_html',$slide_title,$post_id,$placid_slider_curr,$placid_slider_css,$set,$data);
		   $html .= '<div class="placid_text" '.$placid_slider_css['placid_text'].'>'.$slide_title.$slider_excerpt.$fields_html.'
				<!-- /placid_slideri -->
			</div></div>';    }
		}
	}
	//filter hook
	$html=apply_filters('placid_extract_html',$html,$placid_sldr_j,$slides,$placid_slider_curr);
	if($out_echo == '1') {
	   echo $html;
	}
	$r_array = array( $placid_sldr_j, $html);
	$r_array=apply_filters('placid_r_array',$r_array,$slides, $placid_slider_curr,$set);
	return $r_array;
}
/***--------------------------------------------------------------------------------------***/
function placid_slider_get_logo($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data=array()){
	$skin='logo';
	$gplacid_slider = get_option('placid_slider_global_options');
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_sldr_j = $r_array[0];
	$placid_slider_css = placid_get_inline_css($set);
	$html='';
	if(isset($r_array) && $r_array[0] >= 1) : //is slider empty?
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
	$slider_id='';
	if (isset ($data['slider_id'])) {
		if( is_array($data)) $slider_id=$data['slider_id'];
	}
	if ( is_array($data) && isset($data['title'])){
		if($data['title']!='' )$sldr_title=$data['title'];
		else {
			if($placid_slider_curr['title_from']=='1' && !empty($slider_id) ) $sldr_title = get_placid_slider_name($slider_id);
			else $sldr_title = $placid_slider_curr['title_text'];
		}
	}
	else{
		if( $placid_slider_curr['title_from']=='1' && !empty($slider_id) ) $sldr_title = get_placid_slider_name($slider_id);
		else $sldr_title = $placid_slider_curr['title_text']; 
	}
	// WooCommerce Integration
	wp_enqueue_script( 'placid_rateit_js', placid_slider_plugin_url( 'js/jquery.rateit.js' ),array('jquery'), PLACID_SLIDER_VER, false);
	wp_enqueue_style( 'placid_rateit_css', placid_slider_plugin_url( 'css/css/rateit.css' ),false, PLACID_SLIDER_VER, 'all');
	// added for disable slider preview
	if($placid_slider_curr['disable_slider']!='1') {
		wp_enqueue_script( 'placid-slider', placid_slider_plugin_url( 'js/placid.js' ),array('jquery'), PLACID_SLIDER_VER, false);
	}
	//WPML integration
	if( function_exists('icl_plugin_action_links') && function_exists('icl_t') ) {
		$placid_option = '[placid_slider_options'.$set.']title_text';
		$sldr_title = icl_t('placid-slider-settings', $placid_option, $placid_slider_curr['title_text']);
	}
	//filter hook
	$sldr_title=apply_filters('placid_slider_title',$sldr_title,$slider_handle,$placid_slider_curr,$set);
	
	$slider_height=$placid_slider_curr['height'];
   	
	$iwidth=$placid_slider_curr['iwidth'];
	$height=$placid_slider_curr['height'];
	if( (empty($iwidth) or $iwidth='') and $placid_slider_curr['orientation']!="1" ) {
		$variable_slideri_js='jQuery("#'.$slider_handle.' .placid_slideri").each(function(){
					var img=jQuery(this).find(".placid_slider_thumbnail");
					if(img.length > 0 ) {
						img.load(function() {
							var imgwidth = img.width();
							var attr=jQuery(this).attr("style");
							jQuery(this).attr("style",attr+"width:"+imgwidth+"px !important;");
						});
					}
				});';
		$startonload='startOnLoad: true,';
	}
	elseif( (empty($height) or $height='') and $placid_slider_curr['orientation']=="1" ){
		$variable_slideri_js='jQuery("#'.$slider_handle.' .placid_slideri").each(function(){
					var img=jQuery(this).find(".placid_slider_thumbnail");
					if(img.length > 0 ) {
						img.load(function() {
							var imgheight = img.height();
							jQuery(this).attr("style","height:"+imgheight+"px !important;");
						});
					}
				});';
		$startonload='startOnLoad: true,';
	}
	else {
		$variable_slideri_js='';
		$startonload='';
	}
	$orientation='';$customClass='placid_slider_instance';
	if($placid_slider_curr['orientation']=="1")	{
	$orientation='orientation: "vertical",';
	$customClass='placid_slider_instance_vert';
	}
	if($placid_slider_curr['direction'] == 1)
		$direction = 'direction: "backwards",';
	else $direction = '';
	if(!isset($placid_slider_curr['fouc']) or $placid_slider_curr['fouc']=='' or $placid_slider_curr['fouc']=='0' ){
		$fouc_dom='jQuery("html").addClass("placid_slider_fouc");jQuery(".placid_slider_fouc .placid_slider_set'.$set.'").hide();';
		$fouc_ready='jQuery(document).ready(function() {
		   jQuery(".placid_slider_fouc .placid_slider_set'.$set.'").show();
		});';
	}	
	else{
		$fouc_dom='';$fouc_ready='';
	}
	// Added for slider disable
	if($placid_slider_curr['disable_slider']=='1') {
		$slider_script="";
	}
	else {
		$framerate = $placid_slider_curr['frate'];
		$pauseonhover = $placid_slider_curr['pauseonhover'];
		if($pauseonhover=='1') {
			$pauseonhover='true';
		}
		else {
			$pauseonhover='false';
		}
	$slider_script ='jQuery(document).ready(function() {
		'.$variable_slideri_js.'
			jQuery("#'.$slider_handle.'").simplyScroll({
				customClass: "'.$customClass.'",
				frameRate: "'.$framerate.'",
				pauseOnHover: '.$pauseonhover.',
				'.$direction.'
				'.$orientation.'
				'.$startonload.'
				'.( ( $placid_slider_curr['enable_arrow'] == 1 ) ? 'auto: false,' : 'autoMode: "loop",' ).'
				speed:'.$placid_slider_curr['speed'].'
		    });
		});';
		
		if($placid_slider_curr['orientation']== '0' ) {
			$slider_script.='jQuery("body").append("<style> .simply-scroll-back.simply-scroll-btn-left {  '.$placid_slider_css['placid_nav_prev'].' } </style>");';
		$slider_script.='jQuery("body").append("<style> .simply-scroll-forward.simply-scroll-btn-right {  '.$placid_slider_css['placid_nav_next'].' } </style>");';
		}
		else {
			$slider_script.='jQuery("body").append("<style> .simply-scroll-back.simply-scroll-btn-up {  '.$placid_slider_css['placid_nav_prev'].' } </style>");';
		$slider_script.='jQuery("body").append("<style> .simply-scroll-forward.simply-scroll-btn-down {  '.$placid_slider_css['placid_nav_next'].' } </style>");';
		}
	}
	$slider_script=apply_filters('placid_global_script',$slider_script,$slider_handle,$placid_slider_curr,$skin);
	$html=$html.'<script type="text/javascript"> '.$fouc_ready;
	if($placid_slider_curr['pphoto'] == '1') {
		wp_enqueue_script( 'jquery.prettyPhoto', placid_slider_plugin_url( 'js/jquery.prettyPhoto.js' ),
							array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_style( 'prettyPhoto_css', placid_slider_plugin_url( 'css/css/prettyPhoto.css' ),
				false, PLACID_SLIDER_VER, 'all');
		$lightbox_script='jQuery(document).ready(function(){
			jQuery("a[rel^=\'prettyPhoto\']").prettyPhoto({deeplinking: false,social_tools:false});
		});';
		//filter hook
		   $lightbox_script=apply_filters('placid_lightbox_inline',$lightbox_script);
		$html.=$lightbox_script;
	}
	
	if($placid_slider_curr['pphoto'] == '1') {
		$lightbox_script='';
		if($placid_slider_curr['lbox_type'] == 'pphoto_box') {
			wp_enqueue_script( 'jquery.prettyPhoto', placid_slider_plugin_url( 'js/jquery.prettyPhoto.js' ), array('jquery'), PLACID_SLIDER_VER, false);
			wp_enqueue_style( 'prettyPhoto_css', placid_slider_plugin_url( 'css/css/prettyPhoto.css' ), false, PLACID_SLIDER_VER, 'all');
			$lightbox_script='jQuery(document).ready(function(){
				jQuery("a[rel^=\'prettyPhoto\']").prettyPhoto({deeplinking: false,social_tools:false});
			});';	
		}
		if($placid_slider_curr['lbox_type'] == 'swipe_box') {
			wp_enqueue_script( 'jquery.swipebox', placid_slider_plugin_url( 'js/jquery.swipebox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
			wp_enqueue_style( 'swipebox_css', placid_slider_plugin_url( 'css/css/swipebox.css' ), false, PLACID_SLIDER_VER, 'all');
			$lightbox_script='jQuery(document).ready(function(){
				jQuery("a[class^=\'swipebox\']").swipebox();
			});';
		}
		if($placid_slider_curr['lbox_type'] == 'nivo_box') {
			wp_enqueue_script( 'jquery.nivobox', placid_slider_plugin_url( 'js/nivo-lightbox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
			wp_enqueue_style( 'nivobox_css', placid_slider_plugin_url( 'css/css/nivobox.css' ), false, PLACID_SLIDER_VER, 'all');
			$lightbox_script='jQuery(document).ready(function(){
				jQuery("a[class^=\'placid_thumb_anchor\']").nivoLightbox();
			});';
		}
// Photo box
		if($placid_slider_curr['lbox_type'] == 'photo_box') {
			wp_enqueue_script( 'jquery.photobox', placid_slider_plugin_url( 'js/jquery.photobox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
			wp_enqueue_style( 'photobox_css', placid_slider_plugin_url( 'css/css/photobox.css' ), false, PLACID_SLIDER_VER, 'all');
			$lightbox_script='jQuery(document).ready(function(){
				jQuery(".simply-scroll-clip").photobox(\'a.placid_thumb_anchor\');
			});';
		}
// smooth box
		if($placid_slider_curr['lbox_type'] == 'smooth_box') {
			wp_enqueue_script( 'jquery.smoothbox', placid_slider_plugin_url( 'js/smoothbox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
			wp_enqueue_style( 'smoothbox_css', placid_slider_plugin_url( 'css/css/smoothbox.css' ), false, PLACID_SLIDER_VER, 'all');
		}		

		//filter hook
		$lightbox_script=apply_filters('placid_lightbox_inline',$lightbox_script);
		$slider_script.=$lightbox_script;
	}	
	
	//action hook
	do_action('placid_global_script',$slider_handle,$placid_slider_curr);
	$repeat_slides='';
	if(isset($placid_slider['repeat'])){
		for($i=0;$i<$placid_slider['repeat'];$i++){	
			$repeat_slides.=$r_array[1];
		}
	}
	$handleclass = isset( $data['vtype'] ) ? $data['vtype'] : '';
	$html.='</script> <noscript><p><strong>'. $gplacid_slider['noscript'] .'</strong></p> Slider Powered by <a href="http://slidervilla.com/placid/" title="Placid WordPress Slider Plugin" target="_blank">Placid WordPress Slider Plugin.</a></noscript><div class="placid_slider placid_slider_set'. $set .' '.$handleclass.'" '.$placid_slider_css['placid_slider'].'>'.
		( (!empty($sldr_title)) ? '<div class="sldr_title" '.$placid_slider_css['sldr_title'].'>'.$sldr_title.'</div>':'' ).'<div class="placid_slider_handle" '.$placid_slider_css['placid_slider_handle'].' >
	   <div id="'.$slider_handle.'" >
				'.$r_array[1].$repeat_slides.'
		</div>
	</div>
	</div>';
	$html.='<script type="text/javascript"> '.$fouc_dom.$slider_script.'</script>';
	$html=apply_filters('placid_slider_html',$html,$r_array,$placid_slider_curr,$set);
	if($echo == '1')  {echo $html; }
	else { return $html; }
	endif; //is slider empty?
}
?>
