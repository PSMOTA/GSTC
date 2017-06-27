<?php
function placid_carousel_data_on_slider_instagram($max='3', $offset=0, $out_echo = '1', $set='',$type='',$username,$cid, $data=array() ) {
    	$r_array=array();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$slides = array();
	$insta_id_url = "https://api.instagram.com/v1/users/search?q=".$username."&access_token=$cid";
	$json_source_id = @file_get_contents($insta_id_url);
	$insta_id_data = json_decode($json_source_id);
	if(isset($insta_id_data->data[0])) {
		$insta_id = $insta_id_data->data[0]->id;
		$insta_media_url="https://api.instagram.com/v1/users/".$insta_id."/media/recent/?access_token=$cid";
		$json_source = @file_get_contents($insta_media_url);
		$insta_media_data = json_decode($json_source);
		if(isset($insta_media_data->data)) {
			$count = count($insta_media_data->data);
			if($count > $max) $count = $max;
			for($i=$offset;$i<$count;$i++) {
				$imgurl = isset($insta_media_data->data[$i]->images->standard_resolution->url)?$insta_media_data->data[$i]->images->standard_resolution->url:'';
				$url = isset($insta_media_data->data[$i]->link)?$insta_media_data->data[$i]->link:'';
				$title = isset($insta_media_data->data[$i]->caption->text)?$insta_media_data->data[$i]->caption->text:'';
				$time = isset($insta_media_data->data[$i]->caption->created_time)?$insta_media_data->data[$i]->caption->created_time:'';
				if($time!='') $pubDate = date("Y-m-d H:i:s",$time);else $pubDate = '';
				$author = isset($insta_media_data->data[$i]->caption->from->username)?$insta_media_data->data[$i]->caption->from->username:'';
				$thumb_src = isset($insta_media_data->data[$i]->images->thumbnail->url)?$insta_media_data->data[$i]->images->thumbnail->url:'';
				$slide=array();
					$slide['post_title'] = $title;
					$slide['ID'] = 0;
					$slide['post_excerpt'] = '';
					$slide['post_content'] = '';
					$slide['content_for_image'] = '';
					$slide['redirect_url'] = $url;
					$slide['nolink'] = '';
					$slide['pubDate'] = $pubDate;
					$slide['author'] = $author;
					$slide['category'] = '';
					$slide['media_image']= $imgurl;
					$slide=(object) $slide;
					$slides[]=$slide;
			}
			$r_array=placid_global_data_processor( $slides, $placid_slider_curr, $out_echo, $set, $data );
			return $r_array;
		} else {
			_e('Please enter the correct information','placid-slider');
		}
	} else {
		_e('Please enter the correct information','placid-slider');
	}
}
function get_placid_instagram_slider( $args = '' ) {
	$defaults=array('type'=>'','username'=>'', 'set'=>'', 'offset'=>'0', 'max'=>'10');
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
	$gplacid_slider = get_option('placid_slider_global_options');
	$cid = isset($gplacid_slider['insta_client_id'])?$gplacid_slider['insta_client_id']:'';
	if($cid != "") {
		$r_array=array();
		$default_placid_slider_settings=get_placid_slider_default_settings();
		$placid_slider_css = placid_get_inline_css($set);
		$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
		$placid_slider = get_option('placid_slider_options');
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
		$userhandle = str_replace(array("-","@"),'_',$username);
		$slider_handle='placid_slider_'.$userhandle;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_instagram($placid_slider_curr['no_posts'], $offset, '0', $set, $type,$username,$cid,$data); 
		get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
	} else {
		_e("Please Eneter the Instagram Access Token on Global Settings!","placid-slider");
	}
}
function return_placid_slider_instagram($type='',$username='',$set='',$offset='0') {
	$gplacid_slider = get_option('placid_slider_global_options');
	$cid = isset($gplacid_slider['insta_client_id'])?$gplacid_slider['insta_client_id']:'';
	if($cid != "") {
		$slider_html='';
		$default_placid_slider_settings=get_placid_slider_default_settings();
		$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
		$placid_slider = get_option('placid_slider_options');
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
		$userhandle = str_replace(array("-","@"),'_',$username);
		$slider_handle='placid_slider_'.$userhandle;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_instagram($placid_slider_curr['no_posts'], $offset, '0', $set,$type,$username,$cid,$data); 
		//get slider 
		$output_function='return_global_placid_slider';
		$slider_html=$output_function($slider_handle,$r_array,$placid_slider_curr,$set,$echo='0',$data);
		return $slider_html;
	} else {
		_e("Please Eneter the Instagram Access Token on Global Settings!","placid-slider");
	}
}

function placid_slider_instagram_shortcode($atts) {
	extract(shortcode_atts(array(
		'type'=>'',
		'username'=>'',
		'set'=>'',
		'offset'=>'0'
	), $atts));
	return return_placid_slider_instagram($type,$username,$set,$offset);
}
add_shortcode('placidinstagram', 'placid_slider_instagram_shortcode');
?>
