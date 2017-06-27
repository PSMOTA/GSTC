<?php
function placid_carousel_data_on_slider_facebook($max='3', $offset=0, $out_echo = '1', $set='',$type='',$album='',$key, $data=array() ) {
    	$r_array=array();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$slides = array();
	if($album != '') {
		$fb_url = "https://graph.facebook.com/v2.4/?id=".$album."&fields=id,name,photos.offset(".$offset.").limit(".$max."){images,created_time,from{name,id,category},name,id,picture,link}&access_token=$key";
		$json_source = @file_get_contents($fb_url);
		$fb = json_decode($json_source);
		$count = isset($fb->photos->data)?count($fb->photos->data):0;
		if($count > $max) $count = $max;
		for($i=$offset;$i<$count;$i++) {
			$imgurl =  isset($fb->photos->data[$i]->images[1]) ? $fb->photos->data[$i]->images[1]->source : $fb->photos->data[$i]->images[0]->source;
			$pubDate = isset($fb->photos->data[$i]->created_time)?$fb->photos->data[$i]->created_time:'';
			$catg = isset($fb->photos->data[$i]->from->category)?$fb->photos->data[$i]->from->category:'';
			$auth = isset($fb->photos->data[$i]->from->name)?$fb->photos->data[$i]->from->name:'';
			$title = isset($fb->photos->data[$i]->name)?$fb->photos->data[$i]->name:'';
			$url = isset($fb->photos->data[$i]->link)?$fb->photos->data[$i]->link:'';
			$nav_img_src = isset($fb->photos->data[$i]->picture)?$fb->photos->data[$i]->picture:'';
			$slide=array();
			$slide['post_title'] = $title;
			$slide['ID'] = 0;
			$slide['post_excerpt'] = '';
			$slide['post_content'] = '';
			$slide['content_for_image'] = '';
			$slide['redirect_url'] = $url;
			$slide['nolink'] = '';
			$slide['pubDate'] = $pubDate;
			$slide['author'] = $auth;
			$slide['category'] = $catg;
			$slide['media_image']= $imgurl;
			$slide=(object) $slide;
			$slides[]=$slide;
		}
		$r_array=placid_global_data_processor( $slides, $placid_slider_curr, $out_echo, $set, $data );
		return $r_array;
	}
}
function get_placid_facebook_slider( $args = '' ) {
	$defaults=array('page'=>'','album'=>'', 'set'=>'', 'type'=>'', 'offset'=>'0');
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
	$secret = isset($gplacid_slider['fb_secret'])?$gplacid_slider['fb_secret']:'';
	if( !empty( $secret ) ) {
		$key.='|'.$secret;
	}
	if( !empty( $key ) ) {
		$r_array=array();
		$default_placid_slider_settings=get_placid_slider_default_settings();
		// If setting set is 1 then set to blank	
		if($set == '1') $set = '';
		$placid_slider_css = placid_get_inline_css($set);
		$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
		$placid_slider = get_option('placid_slider_options');
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
		$slider_handle='placid_slider_'.$album;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_facebook($placid_slider_curr['no_posts'], $offset, '0', $set, $type,$album,$key,$data); 
		get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
	}  else {
		_e("Please Eneter the Facebook API Key on Global Settings!","placid-slider");
	}
}
function return_placid_slider_facebook($type='',$album='',$set='',$offset='0') {
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
	$secret = isset($gplacid_slider['fb_secret'])?$gplacid_slider['fb_secret']:'';
	if( !empty( $secret ) ) {
		$key.='|'.$secret;
	}
	if( !empty( $key ) ) {
		$slider_html='';
		$default_placid_slider_settings=get_placid_slider_default_settings();
		// If setting set is 1 then set to blank	
		if($set == '1') $set = ''; 
		$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
		$placid_slider = get_option('placid_slider_options');
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
		$slider_handle='placid_slider_'.$album;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_facebook($placid_slider_curr['no_posts'], $offset, '0', $set,$type,$album,$key,$data); 
		//get slider 
		$output_function='return_global_placid_slider';
		$slider_html=$output_function($slider_handle,$r_array,$placid_slider_curr,$set,$echo='0',$data);
		return $slider_html;
	}  else {
		_e("Please Eneter the Facebook API Key on Global Settings!","placid-slider");
	}
}

function placid_slider_facebook_shortcode($atts) {
	extract(shortcode_atts(array(
		'type'=>'page',
		'album'=>'',
		'set'=>'',
		'offset'=>'0'
	), $atts));
	return return_placid_slider_facebook($type,$album,$set,$offset);
}
add_shortcode('placidfacebook', 'placid_slider_facebook_shortcode');
?>
