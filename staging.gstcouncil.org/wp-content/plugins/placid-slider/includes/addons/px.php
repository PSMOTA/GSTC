<?php
function placid_carousel_data_on_slider_500px($max='3', $offset=0, $out_echo = '1', $set='',$feature='',$username,$key, $data=array() ) {
    	$r_array=array();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$slides = array();
	if($feature == "user" || $feature == "user_favorites") {
		$pxurl = "https://api.500px.com/v1/photos?feature=".$feature."&username=".$username."&consumer_key=$key&image_size=4";
	} else {
		$pxurl = "https://api.500px.com/v1/photos?feature=".$feature."&consumer_key=$key&image_size=4";
	}
	$pxjson = @file_get_contents($pxurl);
	if($pxjson == true) {
		$px = json_decode($pxjson);

		$count = count($px->photos);
		//print_r($px->photos); die();
		if($count > $max) $count = $max;
		for($i = $offset; $i < $count; $i++) {
			$limg = isset($px->photos[$i]->image_url)?$px->photos[$i]->image_url:'';
			$title = isset($px->photos[$i]->name)?$px->photos[$i]->name:'';
			$description = isset($px->photos[$i]->description)?$px->photos[$i]->description:'';
			$pubDate = isset($px->photos[$i]->created_at)?$px->photos[$i]->created_at:'';
			$author = isset($px->photos[$i]->user->firstname)?$px->photos[$i]->user->firstname:'';
			$link = isset($px->photos[$i]->url)?$px->photos[$i]->url:'';
			$url = "https://500px.com$link";
			$slide=array();
			$slide['post_title'] = $title;
			$slide['ID'] = 0;
			$slide['post_excerpt'] = '';
			$slide['post_content'] = $description;
			$slide['content_for_image'] = '';
			$slide['redirect_url'] = $url;
			$slide['nolink'] = '';
			$slide['pubDate'] = $pubDate;
			$slide['author'] = $author;
			$slide['category'] = '';
			$slide['media_image']= $limg;
			$slide=(object) $slide;
			$slides[]=$slide;
		}
		$r_array=placid_global_data_processor( $slides, $placid_slider_curr, $out_echo, $set, $data );
		return $r_array;
	} else {
		_e('Please enter the correct information','placid-slider');
	}
}
function get_placid_500px_slider( $args = '' ) {
	$defaults=array('feature'=>'','username'=>'', 'set'=>'', 'offset'=>'0', 'max'=>'10');
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['px_ckey'])?$gplacid_slider['px_ckey']:'';
	if($key != "") {
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
		$featurehandle = str_replace(array("-","@"),'_',$feature);
		$slider_handle='placid_slider_'.$featurehandle;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_500px($placid_slider_curr['no_posts'], $offset, '0', $set, $feature,$username,$key,$data); 
		get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
	} else {
		_e("Please Eneter the 500px Consumer Key on Global Settings!","placid-slider");
	}
}
function return_placid_slider_500px($feature='',$username='',$set='',$offset='0') {
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['px_ckey'])?$gplacid_slider['px_ckey']:'';
	if($key != "") {
		$slider_html='';
		$default_placid_slider_settings=get_placid_slider_default_settings();
		// If setting set is 1 then set to blank	
		if($set == '1') $set = '';
		$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
		$placid_slider = get_option('placid_slider_options');
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
		$featurehandle = str_replace(array("-","@"),'_',$feature);
		$slider_handle='placid_slider_'.$featurehandle;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_500px($placid_slider_curr['no_posts'], $offset, '0', $set,$feature,$username,$key,$data); 
		//get slider 
		$output_function='return_global_placid_slider';
		$slider_html=$output_function($slider_handle,$r_array,$placid_slider_curr,$set,$echo='0',$data);
		return $slider_html;
	} else {
		_e("Please Eneter the 500px Consumer Key on Global Settings!","placid-slider");
	}
}

function placid_slider_500px_shortcode($atts) {
	extract(shortcode_atts(array(
		'feature'=>'',
		'username'=>'',
		'set'=>'',
		'offset'=>'0',
	), $atts));
	return return_placid_slider_500px($feature,$username,$set,$offset);
}
add_shortcode('placid500px', 'placid_slider_500px_shortcode');
?>
