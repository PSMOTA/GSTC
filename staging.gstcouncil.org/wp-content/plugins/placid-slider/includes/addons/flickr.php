<?php
function placid_carousel_data_on_slider_flickr($max='3', $offset=0, $out_echo = '1', $set='',$type='',$id,$key, $data=array() ) {
    	$r_array=array();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$slides = array();
	if($type == "user") {
		// Public Photos
		$flicker_url = "https://api.flickr.com/services/rest/?&method=flickr.people.getPublicPhotos&api_key=".$key."&user_id=".$id."&extras=description,date_taken,owner_name&format=json&nojsoncallback=1";
		$json_source = @file_get_contents($flicker_url);
		$fx = json_decode($json_source);
		if(isset($fx->photos)) {
			$count = count($fx->photos->photo);
			if($count > $max) $count = $max;
			for($i=$offset;$i<$count;$i++) {
				$id = isset($fx->photos->photo[$i]->id)?$fx->photos->photo[$i]->id:'';
				$owner = isset($fx->photos->photo[$i]->owner)?$fx->photos->photo[$i]->owner:'';
				$secret = isset($fx->photos->photo[$i]->secret)?$fx->photos->photo[$i]->secret:'';
				$server = isset($fx->photos->photo[$i]->server)?$fx->photos->photo[$i]->server:'';
				$farm = isset($fx->photos->photo[$i]->farm)?$fx->photos->photo[$i]->farm:'';
				$title = isset($fx->photos->photo[$i]->title)?$fx->photos->photo[$i]->title:'';
				$description = isset($fx->photos->photo[$i]->description->_content)?$fx->photos->photo[$i]->description->_content:'';
				$pubDate = isset($fx->photos->photo[$i]->datetaken)?$fx->photos->photo[$i]->datetaken:'';
				$author = isset($fx->photos->photo[$i]->ownername)?$fx->photos->photo[$i]->ownername:'';
				$url = "https://www.flickr.com/photos/$owner/$id/";
				$imgurl = 'https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$id.'_'.$secret.'_z.jpg';
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
				$slide['media_image']= $imgurl;
				$slide=(object) $slide;
				$slides[]=$slide;

			}
		} else {
			_e('Please enter the correct user','placid-slider');
		}
	} elseif($type == "album") {
		// Album Set
		$flicker_seturl = "https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=".$key."&photoset_id=".$id."&extras=description,date_taken,owner_name&format=json&nojsoncallback=1";
		$json_setsource = @file_get_contents($flicker_seturl);
		$setfx = json_decode($json_setsource);
		if(isset($setfx->photoset)) {
			$count = count($setfx->photoset->photo);
			if($count > $max) $count = $max;
			for($i=$offset;$i<$count;$i++) {
				$photoid = isset($setfx->photoset->photo[$i]->id)?$setfx->photoset->photo[$i]->id:'';
				$owner = isset($setfx->photoset->owner)?$setfx->photoset->owner:'';
				$secret = isset($setfx->photoset->photo[$i]->secret)?$setfx->photoset->photo[$i]->secret:'';
				$server = isset($setfx->photoset->photo[$i]->server)?$setfx->photoset->photo[$i]->server:'';
				$farm = isset($setfx->photoset->photo[$i]->farm)?$setfx->photoset->photo[$i]->farm:'';
				$title = isset($setfx->photoset->photo[$i]->title)?$setfx->photoset->photo[$i]->title:'';
				$description = isset($setfx->photoset->photo[$i]->description->_content)?$setfx->photoset->photo[$i]->description->_content:'';
				$pubDate = isset($setfx->photoset->photo[$i]->datetaken)?$setfx->photoset->photo[$i]->datetaken:'';
				$author = isset($setfx->photoset->photo[$i]->ownername)?$setfx->photoset->photo[$i]->ownername:'';
				$url = "https://www.flickr.com/photos/$owner/$photoid/in/set-$id";
				$imgurl = 'https://farm'.$farm.'.staticflickr.com/'.$server.'/'.$photoid.'_'.$secret.'_z.jpg';
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
				$slide['media_image']= $imgurl;
				$slide=(object) $slide;
				$slides[]=$slide;
			}
		} else {
			_e('Please enter the correct album','placid-slider');
		}
	}
	$r_array=placid_global_data_processor( $slides, $placid_slider_curr, $out_echo, $set, $data );
	return $r_array;
}
function get_placid_flickr_slider( $args = '' ) {
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['flickr_app_key'])?$gplacid_slider['flickr_app_key']:'';
	$defaults=array('type'=>'','id'=>'', 'set'=>'', 'offset'=>'0', 'max'=>'3');
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
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
		$handleid = str_replace(array("-","@"),'_',$id);
		$slider_handle='placid_slider_'.$handleid;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_flickr($placid_slider_curr['no_posts'], $offset, '0', $set, $type,$id,$key,$data); 
		get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
	} else {
		_e("Please Eneter the flickr Customer Key on Global Settings!","placid-slider");
	}
}
function return_placid_slider_flickr($type='',$id='',$set='',$offset='0') {
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['flickr_app_key'])?$gplacid_slider['flickr_app_key']:'';
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
		$handleid = str_replace(array("-","@"),'_',$id);
		$slider_handle='placid_slider_'.$handleid;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$r_array=placid_carousel_data_on_slider_flickr($placid_slider_curr['no_posts'], $offset, '0', $set,$type,$id,$key,$data); 
		//get slider 
		$output_function='return_global_placid_slider';
		$slider_html=$output_function($slider_handle,$r_array,$placid_slider_curr,$set,$echo='0',$data);
		return $slider_html;
	} else {
		_e("Please Eneter the flickr Customer Key on Global Settings!","placid-slider");
	}
}

function placid_slider_flickr_shortcode($atts) {
	extract(shortcode_atts(array(
		'type'=>'',
		'id'=>'',
		'set'=>'',
		'offset'=>'0'
	), $atts));
	return return_placid_slider_flickr($type,$id,$set,$offset);
}
add_shortcode('placidflickr', 'placid_slider_flickr_shortcode');
?>
