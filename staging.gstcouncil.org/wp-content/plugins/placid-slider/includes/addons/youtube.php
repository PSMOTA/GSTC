<?php
function placid_carousel_videos_on_slider_youtube($max='3', $offset=0, $out_echo = '1', $set='',$type='',$val,$key, $data=array() ) {
    	$r_array=array();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$slides = array();
	if($type == "playlist") {
		$playlist_url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=$val&key=$key&maxResults=$max";
	
		$json_source = @file_get_contents($playlist_url);
		$fx = json_decode($json_source);
		if(isset($fx->items)) {
			$listcnt = count($fx->items);
			if($listcnt > $max) $listcnt = $max;
			if($offset == '') $offset = 0;
			for($i=$offset;$i<$listcnt;$i++) {
				$id = isset($fx->items[$i]->snippet->resourceId->videoId)?$fx->items[$i]->snippet->resourceId->videoId:'';
				$playlistid = isset($fx->items[$i]->snippet->playlistId)?$fx->items[$i]->snippet->playlistId:'';
				$pubDate = isset($fx->items[$i]->snippet->publishedAt)?$fx->items[$i]->snippet->publishedAt:'';
				$title = isset($fx->items[$i]->snippet->title)?$fx->items[$i]->snippet->title:'';
				$content = isset($fx->items[$i]->snippet->description)?$fx->items[$i]->snippet->description:'';
				$author = isset($fx->items[$i]->snippet->channelTitle)?$fx->items[$i]->snippet->channelTitle:'';
				$url = "https://www.youtube.com/watch?v=$id&list=$playlistid";
				$default = 'default';
				$playlistimg = isset($fx->items[$i]->snippet->thumbnails->$default->url)?$fx->items[$i]->snippet->thumbnails->$default->url:'';
				$placid_eshortcode = '[video src="http://youtu.be/'.$id.'?list='.$playlistid.'"]';
				$slide=array();
				$slide['post_title'] = $title;
				$slide['ID'] = 0;
				$slide['post_excerpt'] = '';
				$slide['post_content'] = $content;
				$slide['content_for_image'] = '';
				$slide['redirect_url'] = $url;
				$slide['nolink'] = '1';
				$slide['pubDate'] = $pubDate;
				$slide['author'] = $author;
				$slide['category'] = '';
				$slide['media_image']= $playlistimg;
				$slide['eshortcode'] = $placid_eshortcode;
				$slide=(object) $slide;
				$slides[]=$slide;
			}
		} else {
			_e('Please Enter the correct playlist','placid-slider');
		}
	} elseif($type == "search") {
		$val = str_replace(' ','+',$val);
		$search_url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=".$val."&key=$key&maxResults=$max&type=video";
		$searchjson_source = @file_get_contents($search_url);
		$searchfx = json_decode($searchjson_source);
		if(isset($searchfx->items) && count($searchfx->items) > 0) {
			$listcnt = count($searchfx->items);
			if($listcnt > $max) $listcnt = $max;
			if($offset == '') $offset = 0;
			$slides = array();
			for($i=$offset;$i<$listcnt;$i++) {
				$kind = isset($searchfx->items[$i]->id->kind)?$searchfx->items[$i]->id->kind:'';
				$videoId = isset($searchfx->items[$i]->id->videoId)?$searchfx->items[$i]->id->videoId:'';
				$pubDate = isset($searchfx->items[$i]->snippet->publishedAt)?$searchfx->items[$i]->snippet->publishedAt:'';
				$title = isset($searchfx->items[$i]->snippet->title)?$searchfx->items[$i]->snippet->title:'';
				$content = isset($searchfx->items[$i]->snippet->description)?$searchfx->items[$i]->snippet->description:'';
				$author = isset($searchfx->items[$i]->snippet->channelTitle)?$searchfx->items[$i]->snippet->channelTitle:'';
				$url = "https://www.youtube.com/watch?v=$videoId";
				$placid_eshortcode = '[video src="http://youtu.be/'.$videoId.'"]';
				$default = 'default';
				$playlistimg = $searchfx->items[$i]->snippet->thumbnails->$default->url;
				$slide=array();
				$slide['post_title'] = $title;
				$slide['ID'] = 0;
				$slide['post_excerpt'] = '';
				$slide['post_content'] = $content;
				$slide['content_for_image'] = '';
				$slide['redirect_url'] = $url;
				$slide['nolink'] = '1';
				$slide['pubDate'] = $pubDate;
				$slide['author'] = $author;
				$slide['category'] = '';
				$slide['media_image']= $playlistimg;
				$slide['eshortcode'] = $placid_eshortcode;
				$slide=(object) $slide;
				$slides[]=$slide;
			}
		} else {
			_e('No videos found for this search term','placid-slider');
		}
	}
		$r_array=placid_global_data_processor( $slides, $placid_slider_curr, $out_echo, $set, $data );
		return $r_array;
}
function get_placid_youtube_slider( $args = '' ) { 
	$defaults=array('type'=>'','val'=>'', 'set'=>'', 'offset'=>'0');
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['youtube_app_id'])?$gplacid_slider['youtube_app_id']:'';
	if( $key !='' ) {
		$default_placid_slider_settings=get_placid_slider_default_settings();
		// If setting set is 1 then set to blank	
		if($set == '1') $set = '';
		$placid_slider_css = placid_get_inline_css($set);
		$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
		$placid_slider = get_option('placid_slider_options');
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
		$handleval = str_replace(array("-","@"," ","+"),'_',$val);
		$slider_handle='placid_slider_'.$handleval;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$data['vtype'] = 'youtube';
		$r_array = placid_carousel_videos_on_slider_youtube($placid_slider_curr['no_posts'], $offset, '0', $set, $type,$val,$key,$data); 
		get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
	} else {
		_e("Please Enter The YouTube API Key on Global Settings!","placid-slider");
	}
}
function return_placid_slider_youtube($type='',$val='',$set='',$offset='0') {
	$gplacid_slider = get_option('placid_slider_global_options');
	$key = isset($gplacid_slider['youtube_app_id'])?$gplacid_slider['youtube_app_id']:'';
	if( $key !='' ) {
		$slider_html='';
		$default_placid_slider_settings=get_placid_slider_default_settings();
		// If setting set is 1 then set to blank	
		if($set == '1') $set = '';
		$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
		$placid_slider = get_option('placid_slider_options');
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
		$handleval = str_replace(array("-","@"," ","+"),'_',$val);
		$slider_handle='placid_slider_'.$handleval;
		$data['slider_handle']=$slider_handle;
		$data['media']=1;
		$data['vtype'] = 'youtube';
		$r_array = placid_carousel_videos_on_slider_youtube($placid_slider_curr['no_posts'], $offset, '0', $set, $type,$val,$key,$data); 
		//get slider 
		$output_function='return_global_placid_slider';
		$slider_html=$output_function($slider_handle,$r_array,$placid_slider_curr,$set,$echo='0',$data);
		return $slider_html;
	} else {
		_e("Please Enter The YouTube API Key on Global Settings!","placid-slider");
	}
}

function placid_slider_youtube_shortcode($atts) {
	extract(shortcode_atts(array(
		'type'=>'',
		'val'=>'',
		'set'=>'',
		'offset'=>'0'
	), $atts));

	return return_placid_slider_youtube($type,$val,$set,$offset);
}
add_shortcode('placidyoutube', 'placid_slider_youtube_shortcode');
?>
