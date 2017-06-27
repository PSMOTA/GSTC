<?php 
//ob_start();
function placid_global_data_processor( $slides, $placid_slider_curr,$out_echo,$set,$data=array() ){
	if( $placid_slider_curr['disable_mobile'] != 1 or !wp_is_mobile() ) {
		//If no Skin specified, consider Default
		$skin='default';
		if(isset($placid_slider_curr['stylesheet'])) $skin=$placid_slider_curr['stylesheet'];
		if(empty($skin))$skin='default';
	
		//Always include Default Skin
		if($skin=='sample' or !file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php'))
			require_once ( dirname( dirname(__FILE__) ) . '/css/skins/default/functions.php');
		//Include Skin function file
		if(file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php'))
			require_once ( dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php');
	
		//Skin specific data processor and html generation
		$data_processor_fn='placid_data_processor_'.$skin;
		if(!function_exists($data_processor_fn))$data_processor_fn='placid_data_processor_default';
		$r_array=$data_processor_fn($slides, $placid_slider_curr,$out_echo,$set,$data);
		return $r_array;
	}	
}
function placid_global_posts_processor( $posts, $placid_slider_curr,$out_echo,$set,$data=array() ){
	if( $placid_slider_curr['disable_mobile'] != 1 or !wp_is_mobile() ) {
		//If no Skin specified, consider Default
		$skin='default';
		if(isset($placid_slider_curr['stylesheet'])) $skin=$placid_slider_curr['stylesheet'];
		if(empty($skin))$skin='default';
	
		//Always include Default Skin
		if($skin=='sample' or !file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php'))
			require_once ( dirname( dirname(__FILE__) ) . '/css/skins/default/functions.php');
		//Include Skin function file
		if(file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php')) require_once ( dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php');
	
		//Skin specific post processor and html generation
		$post_processor_fn='placid_post_processor_'.$skin;
		if(!function_exists($post_processor_fn))$post_processor_fn='placid_post_processor_default';
		$r_array=$post_processor_fn($posts, $placid_slider_curr,$out_echo,$set,$data);
		return $r_array;
	}	
}
function get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data=array() ){
	if( $placid_slider_curr['disable_mobile'] != 1 or !wp_is_mobile() ) {
		//If no Skin specified, consider Default
		$skin='default';
		if(isset($placid_slider_curr['stylesheet'])) $skin=$placid_slider_curr['stylesheet'];
		if(empty($skin))$skin='default';
	
		//Include CSS
		wp_enqueue_style( 'placid_'.$skin, placid_slider_plugin_url( 'css/skins/'.$skin.'/style.css' ),	false, PLACID_SLIDER_VER, 'all');
		//Always include Default Skin
		if($skin=='sample' or !file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php'))
			require_once ( dirname( dirname(__FILE__) ) . '/css/skins/default/functions.php');
		//Include Skin function file
		if(file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php'))
		require_once ( dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php');
	
		//Skin specific post processor and html generation
		$get_processor_fn='placid_slider_get_'.$skin;
		if(!function_exists($get_processor_fn))$get_processor_fn='placid_slider_get_default';
		$r_array=$get_processor_fn($slider_handle,$r_array,$placid_slider_curr,$set,$echo,$data);
		return $r_array;
	}
}
function placid_carousel_posts_on_slider($max_posts, $offset=0, $slider_id = '1',$out_echo = '1',$set='', $data=array() ) {
  	$placid_slider = get_option('placid_slider_options');
  	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
		$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$post_table = $table_prefix."posts";
	$rand = $placid_slider_curr['rand'];
	if(isset($rand) and $rand=='1'){
	  $orderby = 'RAND()';
	}
	else {
	  $orderby = 'a.slide_order ASC, a.date DESC';
	}
	
	//WPML
	if( function_exists('icl_plugin_action_links') ) {
		$tr_table = $table_prefix."icl_translations";
		$posts = $wpdb->get_results("SELECT b.* FROM 
                     $table_name a 
		 LEFT OUTER JOIN $post_table b 
			ON a.post_id = b.ID 
		 LEFT OUTER JOIN $tr_table t 
			ON a.post_id = t.element_id 
		 WHERE ((b.post_status = 'publish' AND t.language_code = '".ICL_LANGUAGE_CODE."') OR (b.post_type='attachment' AND b.post_status = 'inherit'))
		 AND a.slider_id = '$slider_id' AND (a.expiry IS NULL OR DATE(a.expiry) >= DATE(NOW()))         
		 ORDER BY ".$orderby." LIMIT $offset, $max_posts", OBJECT);
	}
	else {
		$posts = $wpdb->get_results("SELECT b.* FROM 
             	 $table_name a 
		 LEFT OUTER JOIN $post_table b 
			ON a.post_id = b.ID 
		 WHERE (b.post_status = 'publish' OR (b.post_type='attachment' AND b.post_status = 'inherit')) 
		 AND a.slider_id = '$slider_id' AND (a.expiry IS NULL OR DATE(a.expiry) >= DATE(NOW()))         
		 ORDER BY ".$orderby." LIMIT $offset, $max_posts", OBJECT);
	}
	$r_array=placid_global_posts_processor( $posts, $placid_slider_curr, $out_echo, $set, $data );
	return $r_array;
}

function get_placid_slider($slider_id='',$set='',$offset=0, $title='', $data=array() ) {
	global $wpdb,$table_prefix; 
	$gplacid_slider = get_option('placid_slider_global_options');
	$slider_meta = $table_prefix.PLACID_SLIDER_META;
	$sql = "SELECT * FROM $slider_meta WHERE slider_id = $slider_id"; 
	$result = $wpdb->get_row($sql);
	$type = isset($result->type)?$result->type:'';
	$scounter = isset($result->setid)?$result->setid :'';
	if($scounter == 1 ) $scounter = '';
	if(count($result) > 0) $param_array = unserialize($result->param);
	$data['title']=$title;
	$data['slider_id']=$slider_id;
	//Select Settings Set from Meta Box
	if(is_singular()) {
		global $post;
		$sel_set = get_post_meta($post->ID,'_placid_select_set',true);
		if(!empty($sel_set) and $sel_set!='1') {
			$set=$sel_set;
			$scounter = $sel_set;
		}
	}
	if( $type == 0 || $type == 17 ) { 
		$placid_slider = get_option('placid_slider_options');
		$default_placid_slider_settings=get_placid_slider_default_settings();
		// If template Tag is not having set or offset then pick it from DataBase
		if($set == '' ) $set = $scounter; 
		if($offset == 0) $offset = isset($param_array['offset'])?$param_array['offset']:'0';
		//Select Settings Set from Meta Box
		if(is_singular() and empty($set)) {
			global $post;
			$sel_set = get_post_meta($post->ID,'_placid_select_set',true);
			if(!empty($sel_set) and $sel_set!='1') $set=$sel_set;
		} 
 		$placid_slider_options='placid_slider_options'.$set;
   			$placid_slider_curr=get_option($placid_slider_options);
		if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
		$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
		if(is_singular()){
			global $post;
			$post_id = $post->ID;
			if(placid_ss_slider_on_this_post($post_id))
				$slider_id = get_placid_slider_for_the_post($post_id);
		}
		if(empty($slider_id) or !isset($slider_id)) {
			 $slider_id = '1';
		}
		if( !$offset or empty($offset) or !is_numeric($offset)  ) $offset=0;
			if(!empty($slider_id)){
				$data['slider_id']=$slider_id;
				$slider_handle='placid_slider_'.$slider_id;
				$data['slider_handle']=$slider_handle;
				$r_array = placid_carousel_posts_on_slider($placid_slider_curr['no_posts'], $offset, $slider_id, '0', $set, $data); 
				get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
			} //end of not empty slider_id condition
	}
	elseif( $type == 1 ) {
		$offset = isset($param_array['offset'])?$param_array['offset']:'0';
		$catg_slug=isset($param_array['catg_slug'])?$param_array['catg_slug']:'';
		get_placid_slider_category($catg_slug=$catg_slug,$set=$scounter,$offset=$offset,$title);
		
	} elseif( $type == 2 ) {
		$offset = isset($param_array['offset'])?$param_array['offset']:'0';
		get_placid_slider_recent($set=$scounter,$offset=$offset,$title,$data);
	} elseif( $type == 3 ) {
		$args['offset'] = isset($param_array['offset'])?$param_array['offset']:'0';
		if(isset($param_array['woo-catg'])) {
			$args['term'] = isset($param_array['woo-catg'])?$param_array['woo-catg']:'';
			$args['taxonomy'] = 'product_cat';
		}
		$args['type'] = isset($param_array['woo_slider_type'])?$param_array['woo_slider_type']:'';
		$args['post_type']='product';
		$args['product_id']= isset($param_array['product_id'])?$param_array['product_id']:''; ;
		$args['set']=$scounter;
		$args['data']=$data;
		get_placid_slider_woocommerce($args);
	} elseif( $type == 4 ) {
		$args['offset'] = isset($param_array['offset'])?$param_array['offset']:'0';
		if(isset($param_array['ecom_slider_type']) && $param_array['ecom_slider_type'] == '1' && isset($param_array['ecom-catg']) ){
				$args['term'] = isset($param_array['ecom-catg'])?$param_array['ecom-catg']:'';
				$args['taxonomy'] = 'wpsc_product_category';
		}
		$args['post_type']='wpsc-product';
		$args['set']=$scounter;
		$data['type'] = 'ecom';
		$args['data']=$data;
		get_placid_slider_taxonomy($args);
	} elseif( $type == 5 ) {
		$args['offset'] = isset($param_array['offset'])?$param_array['offset']:'0';
		if(isset($param_array['eman-catg']) && $param_array['eman-catg'] != '' )
			$args['term'] = isset($param_array['eman-catg'])?$param_array['eman-catg']:'';
		if(isset($param_array['eman-tags']) && $param_array['eman-tags'] != '' ) 
			$args['tags'] = isset($param_array['eman-tags'])?$param_array['eman-tags']:'';
		$args['scope'] = isset($param_array['eventm_slider_scope'])?$param_array['eventm_slider_scope']:'';
		$args['post_type']='event';
		$args['set']=$scounter;
		$args['data']=$data;
		get_placid_slider_event($args);
	} elseif( $type == 6 ) {
		$args['offset'] = isset($param_array['offset'])?$param_array['offset']:'0';
		if(isset($param_array['ecal-catg']) && $param_array['ecal-catg'] != '' ) {
			$args['term'] = isset($param_array['ecal-catg'])?$param_array['ecal-catg']:'';
			$args['taxonomy'] = 'tribe_events_cat';
		}
		if(isset($param_array['ecal-tags']) && $param_array['ecal-tags'] != '' ) 
			$args['tags'] = isset($param_array['ecal-tags'])?$param_array['ecal-tags']:'';
		$args['type'] = isset($param_array['eventcal_slider_type'])?$param_array['eventcal_slider_type']:'';
		$args['post_type']='tribe_events';
		$args['set']=$scounter;
		$args['data']=$data;
		get_placid_slider_event_calendar($args);
	} elseif( $type == 7 ) {
		$data['author']=isset($param_array['taxonomy_author'])?$param_array['taxonomy_author']:'';
		$args=array(		
			'post_type'=>isset($param_array['post_type'])?$param_array['post_type']:'',
			'taxonomy'=>isset($param_array['taxonomy_name'])?$param_array['taxonomy_name']:'',
			'term'=>isset($param_array['taxonomy_term'])?$param_array['taxonomy_term']:'',
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'show'=>isset($param_array['taxonomy_show'])?$param_array['taxonomy_show']:'',
			'operator'=>isset($param_array['taxonomy_operator'])?$param_array['taxonomy_operator']:'',
			'data'=>$data
		);
		get_placid_slider_taxonomy($args);
	} elseif( $type == 8 ) {
		$args=array(
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'feedurl'=>isset($param_array['feed_url'])?$param_array['feed_url']:'', 
			'default_image'=>isset($param_array['feed_img'])?$param_array['feed_img']:'',
			'title'=>'',
			'id'=>isset($param_array['feed_id'])?$param_array['feed_id']:'',
			'feed'=>isset($param_array['feed'])?$param_array['feed']:'',
			'order'=>isset($param_array['feed_order'])?$param_array['feed_order']:'',
			'content'=>isset($param_array['feed_content'])?$param_array['feed_content']:'', 
			'media'=>isset($param_array['feed_media'])?$param_array['feed_media']:'1',
			'src'=>isset($param_array['feed_src'])?$param_array['feed_src']:'',
			'size'=>isset($param_array['feed_size'])?$param_array['feed_size']:'',
			'image_class'=>isset($param_array['feed_imgclass'])?$param_array['feed_imgclass']:'',
			'data'=>$data
		);
		get_placid_slider_feed($args);
	} elseif( $type == 9 ) {
		$args=array(
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'id'=>isset($param_array['postattch-id'])?$param_array['postattch-id']:'',
			'data'=>$data
		);
		get_placid_slider_attachments($args);
	} elseif( $type == 10 ) {
		$args=array(
			'gallery_id'=>$param_array['nextgen-id'],
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'anchor'=>isset($param_array['nextgen-anchor'])?$param_array['nextgen-anchor']:'',
			'data'=>$data
		);
		get_placid_slider_ngg($args);
	} elseif( $type == 11 ) {
		$args=array(
			'type'=>'playlist',
			'val'=>isset($param_array['yt-playlist-id'])?$param_array['yt-playlist-id']:'',
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'data'=>$data
		);
		get_placid_youtube_slider($args);
	} elseif( $type == 12 ) {
		$args = array(
			'type'=>'search',
			'val'=>isset($param_array['yt-search-term'])?$param_array['yt-search-term']:'',
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'data'=>$data
		);
		get_placid_youtube_slider($args);
	} elseif( $type == 13 ) {
		$vimeotype = isset($param_array['vimeo-type'])?$param_array['vimeo-type']:'';
		$args = array(
			'type'=>$vimeotype,
			'val'=>$param_array['vimeo-val'],
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'data'=>$data
		);
		get_placid_vimeo_slider($args);
	} elseif( $type == 14 ) {
		$pageurl = isset($param_array['fb-pg-url'])?$param_array['fb-pg-url']:'';
		$fbalbum = isset($param_array['fb-album'])?$param_array['fb-album']:'';
		$args = array(
			'page'=>$pageurl,
			'album'=>$fbalbum,
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'data'=>$data
		);
		get_placid_facebook_slider($args);
	} elseif( $type == 15 ) {
		$args = array(
			'username'=>isset($param_array['user-name'])?$param_array['user-name']:'',
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'data'=>$data
		);
		get_placid_instagram_slider($args);
	} elseif( $type == 16 ) {
		$flickrtype = isset($param_array['flickr-type'])?$param_array['flickr-type']:'';
		$args = array(
			'type'=>$flickrtype,
			'id'=>isset($param_array['fl-id'])?$param_array['fl-id']:'',
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'data'=>$data
		);
		get_placid_flickr_slider($args);
	} elseif( $type == 18 ) {
		$feature = isset($param_array['feature'])?$param_array['feature']:'';
		$args = array(
			'feature'=>$feature,
			'username'=>isset($param_array['pxuser'])?$param_array['pxuser']:'',
			'set'=>$scounter,
			'offset'=>isset($param_array['offset'])?$param_array['offset']:'0',
			'data'=>$data
		);
		get_placid_500px_slider($args);
	}
	
	/* Add Edit Slider Link on front end */

	$gplacid_slider = get_option('placid_slider_global_options');
		$editurlhtml='';
		if(isset($gplacid_slider['editlink']) && $gplacid_slider['editlink'] == "1"){	
			if ( !is_admin() && is_user_logged_in() && count($result) > 0 ) {
				if ( current_user_can('manage_options') ) {
					$editurl = placid_sslider_admin_url( array( 'page' => 'placid-slider-easy-builder' ) ).'&id='.$slider_id;
					$editurlhtml='<a class="placid-edit" href="'.$editurl.'">'.__('Edit Slider','placid-slider').'</a>';
				}
			}
		}
	echo $editurlhtml;
}

//For displaying category specific posts in chronologically reverse order
function placid_carousel_posts_on_slider_category($max_posts='5', $catg_slug='', $offset=0, $out_echo = '1', $set='', $data=array() ) {
	$placid_slider = get_option('placid_slider_options');
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
        $placid_slider_curr=get_option($placid_slider_options);
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
	global $wpdb, $table_prefix;
	
	if (!empty($catg_slug)) {
		$category = get_category_by_slug($catg_slug); 
		$slider_cat = $category->term_id;
	}
	else {
		$category = get_the_category();
		$slider_cat = $category[0]->cat_ID;
	}
	//WPML
	if( function_exists('icl_plugin_action_links') ) {
		$tr_table = $table_prefix."icl_translations";
		$slider_cat = $wpdb->get_var("
						SELECT element_id 
						FROM $tr_table 
						WHERE element_type = 'tax_category' 
						AND language_code = '".ICL_LANGUAGE_CODE."' 
						AND trid = ( 	SELECT trid 
								FROM $tr_table 
								WHERE element_type = 'tax_category' 
								AND element_id = $slider_cat
							)
					");
	}	
	//WPML END 
	$rand = $placid_slider_curr['rand'];
	if(isset($rand) and $rand=='1') $orderby = '&orderby=rand';
	else $orderby = '';
	
	//extract the posts
	$posts = get_posts('numberposts='.$max_posts.'&offset='.$offset.'&category='.$slider_cat.$orderby);
	
	$r_array=placid_global_posts_processor( $posts, $placid_slider_curr, $out_echo,$set,$data );
	return $r_array;
}

function get_placid_slider_category($catg_slug='', $set='', $offset=0,$title='', $data=array()) {
    	$placid_slider = get_option('placid_slider_options');
	$default_placid_slider_settings=get_placid_slider_default_settings();
	//Select Settings Set from Meta Box
	if(is_singular() and empty($set)) {
		global $post;
		$sel_set = get_post_meta($post->ID,'_placid_select_set',true);
		if(!empty($sel_set) and $sel_set!='1') $set=$sel_set;
	}	
 	$placid_slider_options='placid_slider_options'.$set;
    	$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
	$data['title']=$title;
	if( !$offset or empty($offset) or !is_numeric($offset)  ) $offset=0;
   	$slider_handle='placid_slider_'.$catg_slug;
	$data['slider_handle']=$slider_handle;
	$r_array = placid_carousel_posts_on_slider_category($placid_slider_curr['no_posts'], $catg_slug, $offset, '0', $set, $data); 
	get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
} 

//For displaying recent posts in chronologically reverse order
function placid_carousel_posts_on_slider_recent($max_posts='5', $offset=0, $out_echo = '1', $set='', $data=array()) {
	$placid_slider = get_option('placid_slider_options');
    	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
    	$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	
	//WPML
	if( function_exists('icl_plugin_action_links') ) {
		global $wpdb, $table_prefix;
		$post_table = $table_prefix."posts";
		$tr_table = $table_prefix."icl_translations";
		$posts=$wpdb->get_results("SELECT *
			FROM $post_table AS p
			LEFT OUTER JOIN $tr_table AS t 
			ON p.ID = t.element_id 
			WHERE t.element_type = 'post_post' 
			  AND t.language_code = '".ICL_LANGUAGE_CODE."' 
			  AND p.post_status = 'publish' 
			ORDER BY p.post_date DESC 
			LIMIT $offset, $max_posts
		");
	}
	else {
		$posts = get_posts('numberposts='.$max_posts.'&offset='.$offset);
	}
	$rand = $placid_slider_curr['rand'];
	if(isset($rand) and $rand=='1'){
	  shuffle($posts);
	}
	
	$r_array=placid_global_posts_processor( $posts, $placid_slider_curr, $out_echo,$set,$data );
	return $r_array;
}
function get_placid_slider_recent($set='',$offset=0,$title='',$data=array()) {
	$placid_slider = get_option('placid_slider_options');
	$default_placid_slider_settings=get_placid_slider_default_settings();
	//Select Settings Set from Meta Box
	if(is_singular() and empty($set)) {
		global $post;
		$sel_set = get_post_meta($post->ID,'_placid_select_set',true);
		if(!empty($sel_set) and $sel_set!='1') $set=$sel_set;
	}
	
 	$placid_slider_options='placid_slider_options'.$set;
    	$placid_slider_curr=get_option($placid_slider_options);
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);	
	$data['title']=$title;
	if( !$offset or empty($offset) or !is_numeric($offset)  ) $offset=0;
	$slider_handle='placid_slider_recent';
	$data['slider_handle']=$slider_handle;
	$r_array = placid_carousel_posts_on_slider_recent($placid_slider_curr['no_posts'], $offset, '0', $set, $data);
	get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);
}
require_once (dirname (__FILE__) . '/shortcodes_1.php');
require_once (dirname (__FILE__) . '/widgets_1.php');


// Add-on Inclusions
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/rssfeed.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/attachments.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/taxonomy.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/woocom.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/events.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/event_cal.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/nggallery.php');
// For social and videos
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/px.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/flickr.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/instagram.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/youtube.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/vimeo.php');
include_once (dirname( dirname (__FILE__) ) . '/includes/addons/fb.php');

function placid_slider_enqueue_scripts() {
	$gplacid_slider = get_option('placid_slider_global_options'); 
	wp_enqueue_script( 'jquery');
	//  enque script in header
	if( isset($gplacid_slider['enque_scripts']) and $gplacid_slider['enque_scripts']=='1' ) { 
		if((is_admin() && isset($_GET['page']) && ( ('placid-slider-settings' == $_GET['page'] or 'placid-slider-easy-builder' == $_GET['page']) ) ) || !is_admin() ) {
			wp_enqueue_script( 'placid-slider', placid_slider_plugin_url( 'js/placid.js' ),array('jquery'), PLACID_SLIDER_VER, false);
		}
     	}
}
add_action( 'init', 'placid_slider_enqueue_scripts' );

//admin settings
function placid_slider_admin_scripts() {
$placid_slider = get_option('placid_slider_options');
  if ( is_admin() ){ // admin actions
  // Settings page only
  
	if ( isset($_GET['page']) && ('placid-slider-admin' == $_GET['page'] or 'placid-slider-settings' == $_GET['page'] or 'placid-slider-easy-builder' == $_GET['page'] or 'manage-placid-slider' == $_GET['page'] || 'placid-slider-global-settings' == $_GET['page']) ) {
	wp_register_script('jquery', false, false, false, false);
	wp_enqueue_script( 'jquery-ui-core' );
  	wp_enqueue_script( 'jquery-ui-sortable' );
	if ( ! did_action( 'wp_enqueue_media' ) ) wp_enqueue_media();
	wp_enqueue_script('jquery-ui-autocomplete');
	// added for disable slider preview
		wp_enqueue_script( 'placid-slider', placid_slider_plugin_url( 'js/placid.js' ),array('jquery'), PLACID_SLIDER_VER, false);
	wp_enqueue_script( 'placid_slider_admin_js', placid_slider_plugin_url( 'js/admin.js' ),
		array('jquery'), PLACID_SLIDER_VER, false);
	wp_enqueue_style( 'placid_fontawesome_css', placid_slider_plugin_url( 'includes/font-awesome/css/font-awesome.min.css' ), false, PLACID_SLIDER_VER, 'all');
	}
	// 3.0
	// JS/CSS for Easy Builder Page
	if( isset($_GET['page']) && 'placid-slider-easy-builder' == $_GET['page'] ) {
		// added for disable slider preview
		wp_enqueue_script( 'accordition', placid_slider_plugin_url( 'js/jquery.accordion.js' ),
			array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_script( 'jquery.prettyPhoto', placid_slider_plugin_url( 'js/jquery.prettyPhoto.js' ), array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_style( 'prettyPhoto_css', placid_slider_plugin_url( 'css/css/prettyPhoto.css' ), false, PLACID_SLIDER_VER, 'all');
		wp_enqueue_script( 'jquery.swipebox', placid_slider_plugin_url( 'js/jquery.swipebox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_style( 'swipebox_css', placid_slider_plugin_url( 'css/css/swipebox.css' ), false, PLACID_SLIDER_VER, 'all');
		wp_enqueue_script( 'jquery.nivobox', placid_slider_plugin_url( 'js/nivo-lightbox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_style( 'nivobox_css', placid_slider_plugin_url( 'css/css/nivobox.css' ), false, PLACID_SLIDER_VER, 'all');

		wp_enqueue_script( 'jquery.photobox', placid_slider_plugin_url( 'js/jquery.photobox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_style( 'photobox_css', placid_slider_plugin_url( 'css/css/photobox.css' ), false, PLACID_SLIDER_VER, 'all');
		wp_enqueue_script( 'jquery.smoothbox', placid_slider_plugin_url( 'js/smoothbox.js' ), array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_style( 'smoothbox_css', placid_slider_plugin_url( 'css/css/smoothbox.css' ), false, PLACID_SLIDER_VER, 'all');
	}
	// JS/CSS for Manage Sliders Page
	if( isset($_GET['page']) && 'manage-placid-slider' == $_GET['page'] ) {
		/* Data Tables JS/CSS */
		wp_enqueue_script( 'placid_datatable_admin_js', placid_slider_plugin_url( 'js/jquery.dataTables.min.js' ), array('jquery'), PLACID_SLIDER_VER, false);
		wp_enqueue_style( 'placid_datatable_admin_css', placid_slider_plugin_url( 'css/css/jquery.dataTables.min.css' ), false, PLACID_SLIDER_VER, 'all');
		/* END Data Tables JS/CSS  */
	}
  }
}
add_action( 'admin_init', 'placid_slider_admin_scripts' );

function placid_slider_admin_head() {
if ( is_admin() ){ // admin actions
	if ( isset($_GET['page']) && ('placid-slider-admin' == $_GET['page'] or 'placid-slider-settings' == $_GET['page'] or 'placid-slider-easy-builder' == $_GET['page'] or 'manage-placid-slider' == $_GET['page'] || 'placid-slider-global-settings' == $_GET['page'])  ) {
		wp_enqueue_style( 'placid_slider_admin_css', placid_slider_plugin_url( 'css/css/admin.css' ), false, PLACID_SLIDER_VER, 'all');
	}
// Sliders & Settings page only
  if ( isset($_GET['page']) && ('placid-slider-admin' == $_GET['page'] or 'placid-slider-settings' == $_GET['page']  or 'placid-slider-easy-builder' == $_GET['page']  or 'manage-placid-slider' == $_GET['page'] ) ) {
		$flag = 0;
		$slider = isset($_GET['id'])?$_GET['id']:'0';			
		$sliders = placid_ss_get_sliders(); 
		foreach($sliders as $key=>$val) {
			if(is_array($val)) {
				if($val['slider_id'] == $slider)
					$flag = 1;
			}
		}
	?>
	<script type="text/javascript">
            // <![CDATA[
        jQuery(document).ready(function() {
                jQuery(function() {
			<?php 	
			if ( 'placid-slider-easy-builder' == $_GET['page'] && $flag == 1 ) { ?>
                    		jQuery("#sslider_sortable_<?php echo $slider;?>").sortable({ items: ".ps-reorder" });
                   		jQuery("#sslider_sortable_<?php echo $slider;?>").disableSelection();
			       jQuery( ".uploaded-images" ).sortable({ items: ".addedImg" });
			<?php } ?>
                });
        });

        function confirmRemove()
        {
            var agree=confirm("This will remove selected Posts/Pages from Slider.");
            if (agree)
            return true ;
            else
            return false ;
        }
        function confirmRemoveAll()
        {
            var agree=confirm("Remove all Posts/Pages from Placid Slider??");
            if (agree)
            return true ;
            else
            return false ;
        }
        function confirmSliderDelete()
        {
            var agree=confirm("Delete this Slider??");
            if (agree)
            return true ;
            else
            return false ;
        }
        function slider_checkform ( form )
        {
          if (form.new_slider_name.value == "") {
            alert( "Please enter the New Slider name." );
            form.new_slider_name.focus();
            return false ;
          }
          return true ;
        }
        </script> 
<?php }
//Sliders page only
   if (isset($_GET['page']) && ( 'placid-slider-settings' == $_GET['page'] || 'placid-slider-easy-builder' == $_GET['page'] )) {
		wp_enqueue_style( 'wp-color-picker' );
   		wp_enqueue_script( 'wp-color-picker' );
?>
<script type="text/javascript">
	// <![CDATA[
function confirmSettingsCreate()
        {
		var agree=confirms("Create New Settings Set??");
		if (agree)
		return true ;
		else
		return false ;
	}
	function confirmSettingsDelete()
		{
			var agree=confirm("Delete this Settings Set??");
			if (agree)
			return true ;
			else
			return false ;
	}
</script>
	<style type="text/css">.color-picker-wrap {position: absolute;	display: none; background: #fff;border: 3px solid #ccc;	padding: 3px;z-index: 1000;}</style>
	<?php
   } //for placid slider option page  
 }//only for admin
//Below css will add the menu icon for Placid Slider admin menu
?>
<style type="text/css">#adminmenu #toplevel_page_placid-slider-admin div.wp-menu-image:before { content: "\f233"; }</style>
<?php
}
add_action('admin_head', 'placid_slider_admin_head');

function placid_get_inline_css($set='',$echo='0'){
    	$placid_slider = get_option('placid_slider_options');
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
    $placid_slider_curr=get_option($placid_slider_options);
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	//If no Skin specified, consider Default
	$skin='default';
	if(isset($placid_slider_curr['stylesheet'])) $skin=$placid_slider_curr['stylesheet'];
	if(empty($skin))$skin='default';
	
	//Always include Default Skin
	if($skin=='sample' or !file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php'))
		require_once ( dirname( dirname(__FILE__) ) . '/css/skins/default/functions.php');
	//Include Skin function file
	if(file_exists(dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php'))
	require_once ( dirname( dirname(__FILE__) ) . '/css/skins/'.$skin.'/functions.php');
	
	//Skin specific data processor and html generation
	$data_processor_fn='placid_data_processor_'.$skin;
	if(function_exists($data_processor_fn))$default=true;
	else $default=false;
	
	$placid_slider_css=array('placid_slider'=>'',
				 'title_fstyle'=>'',
				'sldr_title'=>'',
				'placid_slider_instance'=>'',
				'placid_slide'=>'',
				'placid_slideri_br'=>'',
				'placid_slideri'=>'',
				'placid_slider_h2'=>'',
				'placid_slider_h2_a'=>'',
				'placid_slider_span'=>'',
				'placid_slider_thumbnail'=>'',
				'placid_slider_eshortcode'=>'',
				'placid_slider_p_more'=>'',
				'placid_meta'=>'',
				'placid_next'=>'',
				'placid_prev'=>'',
				'placid_nav_next'=>'',
				'placid_nav_prev'=>'',
				'placid_nav'=>'',
				'placid_text'=>'',
				'placid_slider_handle' => '',
				//woo
				'placid_woo_sale_strip'=>'',
				'placid_woo_strip_tcolor'=>'',
				'placid_slide_wooprice'=>'',
				'placid_slide_woosaleprice'=>'',
				'placid_slide_cat'=>'',
				//events
				'slide_eventm_datetime'=>'',
				'eventm_addr'=>'',
				'eventm_cat'=>'',
				'placid_nav_a'=>'');
	if($default){
		$style_start= ($echo=='0') ? 'style="':'';
		$style_end= ($echo=='0') ? '"':'';
	    //placid_slider
		$placid_slider_css['placid_slider']='';
		if(isset($placid_slider_curr['width']) and $placid_slider_curr['width']!=0 and $placid_slider_curr['orientation']!="1") {
			$placid_slider_css['placid_slider']=$style_start.'max-width:'. $placid_slider_curr['width'].'px;'.$style_end;
		}
		else {
			if(isset($placid_slider_curr['tot_height']) and $placid_slider_curr['tot_height']!=0 and $placid_slider_curr['orientation']=="1") {
				if($placid_slider_curr['width'] != 0) $width = 'max-width:'. $placid_slider_curr['width'].'px;';
				else $width = '';
				$placid_slider_css['placid_slider']=$style_start.'height:auto;'.$width.$style_end;
			}
		}
		
		//placid_next	
		if($placid_slider_curr['enable_arrow']=='1') {$display='display:block;';}else {$display='';}
		
		if($placid_slider_curr['orientation']== '0') {
			$nextarrow = 'next.png';
			$prevarrow = 'prev.png'; 
		} else {
			$nextarrow = 'down.png';
			$prevarrow = 'up.png'; 
		}
			$nexttemp='css/images/buttons/'.$placid_slider_curr['buttons'].'/'.$nextarrow;
			$nexturl = placid_slider_plugin_url( $nexttemp );
			$placid_slider_css['placid_nav_next']=' background-image:url('.$nexturl.') !important; width:'.$placid_slider_curr['nav_w'].'px  !important; height:'.$placid_slider_curr['nav_h'].'px;'.$display;
		//placid_prev
			$prevtemp='css/images/buttons/'.$placid_slider_curr['buttons'].'/'.$prevarrow;
			$prevurl = placid_slider_plugin_url( $prevtemp );
			$placid_slider_css['placid_nav_prev']=' background-image:url('.$prevurl.') !important; width:'.$placid_slider_curr['nav_w'].'px  !important; height:'.$placid_slider_curr['nav_h'].'px;'.$display;
		
		
		
		
		//placid_slider_handle
		if(isset($placid_slider_curr['width']) and $placid_slider_curr['width']!=0 and $placid_slider_curr['orientation']!="1") {
			$placid_slider_css['placid_slider_handle']=$style_start.'width:'. $placid_slider_curr['width'].'px;height:'. $placid_slider_curr['height'].'px;'.$style_end;
		}
		elseif(isset($placid_slider_curr['tot_height']) and $placid_slider_curr['tot_height']!=0 and $placid_slider_curr['orientation']=="1") {
			if(isset($placid_slider_curr['width']) and $placid_slider_curr['width']!=0)
				$placid_slider_css['placid_slider_handle']=$style_start.'width:'. max($placid_slider_curr['width'],$placid_slider_curr['iwidth']) .'px;height:'. $placid_slider_curr['tot_height'].'px;'.$style_end;
			else
				$placid_slider_css['placid_slider_handle']=$style_start.'width:100%;height:'. $placid_slider_curr['tot_height'].'px;'.$style_end;
		}
		else{
		    $placid_slider_css['placid_slider_handle']=$style_start.'width:100%;height:'. $placid_slider_curr['height'].'px;'.$style_end;
		}
		//sldr_title
		$sldr_title = $placid_slider_curr['title_text']; if(!empty($sldr_title)) { $slider_title_margin = "5px 0 10px 4px"; } else {$slider_title_margin = "0";} 	
		if ($placid_slider_curr['title_fstyle'] == "bold" or $placid_slider_curr['title_fstyle'] == "bold italic" ){$slider_title_fontw = "bold";} else { $slider_title_fontw = "normal"; }
		if ($placid_slider_curr['title_fstyle'] == "italic" or $placid_slider_curr['title_fstyle'] == "bold italic" ){$slider_title_style = "italic";} else {$slider_title_style = "normal";}
		/* New fonts application - start -*/
		$t_font = $t_fontw =$t_fontst ="";
		if( $placid_slider_curr['t_font'] == 'regular' ) {
			$t_font = $placid_slider_curr['title_font'].', Arial, Helvetica, sans-serif';
			$t_fontw = $slider_title_fontw;
			$t_fontst = $slider_title_style;
		} else if( $placid_slider_curr['t_font'] == 'google' ) {
			$ttle_fontg=isset($placid_slider_curr['title_fontg'])?trim($placid_slider_curr['title_fontg']):'';
			$pgfont= get_placid_google_font($placid_slider_curr['title_fontg']);
			(isset($pgfont['category']))? $tfamily = $pgfont['category']:'';
			(isset($placid_slider_curr['title_fontgw']))?$tfontw = $placid_slider_curr['title_fontgw']:''; 
			if (strpos($tfontw,'italic') !== false) {
				$t_fontst = 'italic';
			} else {
				$t_fontst = 'normal';
			}
			if( strpos($tfontw,'italic') > 0 ) { 
				$len = strpos($tfontw,'italic');
				$tfontw = substr( $tfontw, 0, $len );
			}
			if( strpos($tfontw,'regular') !== false ) { 
				$tfontw = 'normal';
			}
			if(isset($placid_slider_curr['title_fontgw']) && !empty($placid_slider_curr['title_fontgw']) ){
				$currfontw=$placid_slider_curr['title_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			} 
			else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['title_fontg'];
			}
			if(isset($placid_slider_curr['title_fontgsubset']) && !empty($placid_slider_curr['title_fontgsubset']) ){
				$strsubset = implode(",",$placid_slider_curr['title_fontgsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			} 
			if(!empty($ttle_fontg)) {
				wp_enqueue_style( 'placid_title'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$ttle_fontg=$pgfont['name'];
				$t_font = $ttle_fontg.','.$tfamily;
				$t_fontw = $tfontw;	
			}
			else { //if not set google font fall back to default font
				$t_font = 'Arial, Helvetica, sans-serif';
				$t_fontw = 'normal';
				$t_fontst = 'normal';
			}
		} else if( $placid_slider_curr['t_font'] == 'custom' ) {
			$t_font = $placid_slider_curr['titlefont_custom'];
			$t_fontw = $slider_title_fontw;
			$t_fontst = $slider_title_style;
		}
		/* New fonts application - end -*/
		if(empty($t_fontw))$t_fontw="normal";
		if(empty($t_fontst))$t_fontst="normal";		
		
		$placid_slider_css['sldr_title']=$style_start.'font-family:'. $t_font . ' '.$placid_slider_curr['title_font'].', Arial, Helvetica, sans-serif;font-size:'.$placid_slider_curr['title_fsize'].'px;font-weight:'.$t_fontw.';font-style:'.$t_fontst.';color:'.$placid_slider_curr['title_fcolor'].';margin:'.$slider_title_margin.''.$style_end;

	//placid_slideri
		if ($placid_slider_curr['bg'] == '1') { $placid_slideri_bg = "transparent";} else { $placid_slideri_bg =$placid_slider_curr['bg_color']; }
		$placid_slideri_width_css='';
		$placid_slideri_width=$placid_slider_curr['iwidth'];
		
		if(!empty($placid_slideri_width) and $placid_slideri_width > 0 ) $placid_slideri_width_css='width:'. $placid_slider_curr['iwidth'].'px;';

		if($placid_slider_curr['disable_slider']=='1') {
			$slide_img_width = $placid_slider_curr['img_width'];
			if(!empty($slide_img_width) and $slide_img_width > 0 ) $placid_slideri_width_css='width:'. $slide_img_width.'px;';
		}
			
		if($placid_slider_curr['orientation'] == "0")
		{
			if($placid_slider_curr['space'] != "") { 
				if($placid_slider_curr['disable_slider']=='1') 
					$space = 'margin: 0 '.$placid_slider_curr['space'].'px '.$placid_slider_curr['space'].'px 0;';
				else
					$space = 'margin: 0 '.$placid_slider_curr['space'].'px;';
			} 
			else {
				$space = '';
			}
		}
		if($placid_slider_curr['orientation'] == "1")
		{
			$space = '';
		}
		if($placid_slider_curr['height'] == "") $slideri_height = 'height:auto;';
		else $slideri_height = 'height:'. $placid_slider_curr['height'].'px;';
		
		// disableslide
		$floating='';
		if($placid_slider_curr['disable_slider']=='1') {
			$floating="float:left;position:relative;";
		}
		
		if($placid_slider_curr['stylesheet']=='logo') {	
			//if($placid_slider_curr['height'] != "")	$line_height = 'line-height:'. $placid_slider_curr['height'].'px;';
			//else 
			$line_height = '';
		$placid_slider_css['placid_slideri']=$style_start.'background-color:'.$placid_slideri_bg.';border:'.$placid_slider_curr['border'].'px solid '.$placid_slider_curr['brcolor'].';'.$placid_slideri_width_css.$slideri_height.$line_height.$space.$floating.$style_end;
		} else {
		$placid_slider_css['placid_slideri']=$style_start.'background-color:'.$placid_slideri_bg.';border:'.$placid_slider_curr['border'].'px solid '.$placid_slider_curr['brcolor'].';'.$placid_slideri_width_css.$slideri_height.$space.$floating.$style_end;
		}
		//placid_slider_h2
		if ($placid_slider_curr['ptitle_fstyle'] == "bold" or $placid_slider_curr['ptitle_fstyle'] == "bold italic" ){$ptitle_fweight = "bold";} else {$ptitle_fweight = "normal";}
		if ($placid_slider_curr['ptitle_fstyle'] == "italic" or $placid_slider_curr['ptitle_fstyle'] == "bold italic"){$ptitle_fstyle = "italic";} else {$ptitle_fstyle = "normal";}
		/* New fonts application - start -*/
		$pt_font = $pt_fontw =$pt_fontst ="";
		if( $placid_slider_curr['pt_font'] == 'regular' ) {
			$pt_font = $placid_slider_curr['ptitle_font'].', Arial, Helvetica, sans-serif';
			$pt_fontw = $ptitle_fweight;
			$pt_fontst = $ptitle_fstyle;
		} else if( $placid_slider_curr['pt_font'] == 'google' ) {
			$ptitle_fontg=isset($placid_slider_curr['ptitle_fontg'])?trim($placid_slider_curr['ptitle_fontg']):'';
			$pgfont=get_placid_google_font($placid_slider_curr['ptitle_fontg']);
			(isset($pgfont['category']))?$ptfamily = $pgfont['category']:'';
			(isset($placid_slider_curr['ptitle_fontgw']))?$ptfontw = $placid_slider_curr['ptitle_fontgw']:''; 
			if (strpos($ptfontw,'italic') !== false) {
				$pt_fontst = 'italic';
			} else {
				$pt_fontst = 'normal';
			}
			if( strpos($ptfontw,'italic') > 0 ) { 
				$len = strpos($ptfontw,'italic');
				$ptfontw = substr( $ptfontw, 0, $len );
			}
			if( strpos($ptfontw,'regular') !== false ) { 
				$ptfontw = 'normal';
			}
			if(isset($placid_slider_curr['ptitle_fontgw']) && !empty($placid_slider_curr['ptitle_fontgw']) ){
				$currfontw=$placid_slider_curr['ptitle_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			
			}  else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['ptitle_fontg'];
			}
			if(isset($placid_slider_curr['ptitle_fontgsubset']) && !empty($placid_slider_curr['ptitle_fontgsubset']) ){
				$strsubset = implode(",",$placid_slider_curr['ptitle_fontgsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			} 
			if(!empty($ptitle_fontg)) 	{
				wp_enqueue_style( 'placid_ptitle'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$ptitle_fontg=$pgfont['name'];
				$pt_font = $ptitle_fontg.','.$ptfamily;
				$pt_fontw = $ptfontw;	
			}
			else { //if not set google font fall back to default font
				
				$pt_font = 'Arial, Helvetica, sans-serif';
				$pt_fontw = 'normal';
				$pt_fontst = 'normal';
			}
		} else if( $placid_slider_curr['pt_font'] == 'custom' ) {
			$pt_font = $placid_slider_curr['ptfont_custom'];
			$pt_fontw = $ptitle_fweight;
			$pt_fontst = $ptitle_fstyle;
		}
		/* New fonts application - end -*/
		if(empty($pt_fontw))$pt_fontw="normal";
		if(empty($pt_fontst))$pt_fontst="normal";	
		$placid_slider_css['placid_slider_h2']=$style_start.'clear:none;line-height:'. ($placid_slider_curr['ptitle_fsize'] + 5) .'px;font-family:'. $pt_font . ' ' . $placid_slider_curr['ptitle_font'].', Arial, Helvetica, sans-serif;font-size:'.$placid_slider_curr['ptitle_fsize'].'px;font-weight:'.$pt_fontw.';font-style:'.$pt_fontst.';color:'.$placid_slider_curr['ptitle_fcolor'].';margin:0 30px 5px 0;'.$style_end;
		
	//placid_slider_h2 a
		$placid_slider_css['placid_slider_h2_a']=$style_start.'font-family:'. $pt_font . ' ' . $placid_slider_curr['ptitle_font'].';font-size:'.$placid_slider_curr['ptitle_fsize'].'px;font-weight:'.$pt_fontw.';font-style:'.$pt_fontst.';color:'.$placid_slider_curr['ptitle_fcolor'].';'.$style_end;
		
	//placid_slider_span	
		if ($placid_slider_curr['content_fstyle'] == "bold" or $placid_slider_curr['content_fstyle'] == "bold italic" ){$content_fweight= "bold";} else {$content_fweight= "normal";}
		if ($placid_slider_curr['content_fstyle']=="italic" or $placid_slider_curr['content_fstyle'] == "bold italic"){$content_fstyle= "italic";} else {$content_fstyle= "normal";}
		
		$pc_font = $pc_fontw =$pc_fontst ="";
		if( $placid_slider_curr['pc_font'] == 'regular' ) {
			$pc_font = $placid_slider_curr['content_font'].', Arial, Helvetica, sans-serif';
			$pc_fontw = $content_fweight;
			$pc_fontst = $content_fstyle;
		} else if( $placid_slider_curr['pc_font'] == 'google' ) {
			$content_fontg=isset($placid_slider_curr['content_fontg'])?trim($placid_slider_curr['content_fontg']):'';
			$pgfont=get_placid_google_font($placid_slider_curr['content_fontg']);
			(isset($pgfont['category']))?$pcfamily = $pgfont['category']:'';
			(isset($placid_slider_curr['content_fontgw']))?$pcfontw = $placid_slider_curr['content_fontgw']:''; 
			if (strpos($pcfontw,'italic') !== false) {
				$pc_fontst = 'italic';
			} else {
				$pc_fontst = 'normal';
			}
			if( strpos($pcfontw,'italic') > 0 ) { 
				$len = strpos($pcfontw,'italic');
				$pcfontw = substr( $pcfontw, 0, $len );
			}
			if( strpos($pcfontw,'regular') !== false ) { 
				$pcfontw = 'normal';
			}
			if(isset($placid_slider_curr['content_fontgw']) && !empty($placid_slider_curr['content_fontgw']) ){
				$currfontw=$placid_slider_curr['content_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			} else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['content_fontg'];
			}
			if(isset($placid_slider_curr['content_fontgsubset']) && !empty($placid_slider_curr['content_fontgsubset']) )			{
				$strsubset = implode(",",$placid_slider_curr['content_fontgsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			}
			if(!empty($content_fontg)) 	{
				wp_enqueue_style( 'placid_content'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$content_fontg=$pgfont['name'];
				$pc_font = $content_fontg.','.$pcfamily;
				$pc_fontw = $pcfontw;	
			}
			else { //if not set google font fall back to default font
				
				$pc_font = 'Arial, Helvetica, sans-serif';
				$pc_fontw = 'normal';
				$pc_fontst = 'normal';
			}
		} else if( $placid_slider_curr['pc_font'] == 'custom' ) {
			$pc_font = $placid_slider_curr['pcfont_custom'];
			$pc_fontw = $content_fweight;
			$pc_fontst = $content_fstyle;
		}
		if(empty($pc_fontw))$pc_fontw="normal";
		if(empty($pc_fontst))$pc_fontst="normal";	
		$placid_slider_css['placid_slider_span']=$style_start.'font-family:'.$pc_font.' '.$placid_slider_curr['content_font'].', Arial, Helvetica, sans-serif;font-size:'.$placid_slider_curr['content_fsize'].'px;font-weight:'.$pc_fontw.';font-style:'.$pc_fontst.';color:'. $placid_slider_curr['content_fcolor'].';'.$style_end;
		
	//placid_slider_thumbnail
		if($placid_slider_curr['img_align'] == "left") {$thumb_margin_right= "10";} else {$thumb_margin_right= "0";}
		if($placid_slider_curr['img_align'] == "right") {$thumb_margin_left = "10";} else {$thumb_margin_left = "0";}
		if($placid_slider_curr['img_align'] == 'none') { $center = "display: block;margin: 0 auto;";}
		else $center = "";
		$thumb_width= 'width:'. $placid_slider_curr['img_width'].'px;';
		if($placid_slider_curr['stylesheet']=='logo') {	
			//if($placid_slider_curr['image_only'] == '1' ) 
			$height = 'max-height:'. $placid_slider_curr['height'].'px;height:auto;';
			//else $height = 'height:'.$placid_slider_curr['img_height'].'px;';	
		$placid_slider_css['placid_slider_thumbnail']=$style_start.'float:none;padding:0;margin:0 '.$thumb_margin_right.'px 0 '.$thumb_margin_left.'px;'.$height.'border:'.$placid_slider_curr['img_border'].'px solid '.$placid_slider_curr['img_brcolor'].';vertical-align:middle;'.$thumb_width.''.$style_end;
		} else {
		$placid_slider_css['placid_slider_thumbnail']=$style_start.'float:'.$placid_slider_curr['img_align'].';padding:0;margin:0 '.$thumb_margin_right.'px 0 '.$thumb_margin_left.'px;height:'.$placid_slider_curr['img_height'].'px;border:'.$placid_slider_curr['img_border'].'px solid '.$placid_slider_curr['img_brcolor'].';'.$center.$thumb_width.''.$style_end;
		}
	//event
	
		// events manager slide date-time
		if ($placid_slider_curr['slide_eventm_fstyle'] == "bold" or $placid_slider_curr['slide_eventm_fstyle'] == "bold italic" ){$sevent_fweight = "bold";} else {$sevent_fweight = "normal";}
		if ($placid_slider_curr['slide_eventm_fstyle'] == "italic" or $placid_slider_curr['slide_eventm_fstyle'] == "bold italic"){$sevent_fstyle = "italic";} else {$sevent_fstyle = "normal";}
		/* New fonts application - start -*/
		$eventmd_font = $eventmd_fontw = $eventmd_fontst = '';
		if( $placid_slider_curr['eventmd_font'] == 'regular' ) {
			$eventmd_font = $placid_slider_curr['slide_eventm_font'].', Arial, Helvetica, sans-serif';
			$eventmd_fontw = $sevent_fweight;
			$eventmd_fontst = $sevent_fstyle;
		} else if( $placid_slider_curr['eventmd_font'] == 'google' ) {
			$slide_eventm_fontg=isset($placid_slider_curr['slide_eventm_fontg'])?trim($placid_slider_curr['slide_eventm_fontg']):'';
			$pgfont=get_placid_google_font($placid_slider_curr['slide_eventm_fontg']);
			(isset($pgfont['category']))?$eventmdfamily = $pgfont['category']:'';
			(isset($placid_slider_curr['slide_eventm_fontgw']))?$eventmdfontw = $placid_slider_curr['slide_eventm_fontgw']:''; 
			if (strpos($eventmdfontw,'italic') !== false) {
				$eventmd_fontst = 'italic';
			} else {
				$eventmd_fontst = 'normal';
			}
			if( strpos($eventmdfontw,'italic') > 0 ) { 
				$len = strpos($eventmdfontw,'italic');
				$eventmdfontw = substr( $eventmdfontw, 0, $len );
			}
			if( strpos($eventmdfontw,'regular') !== false ) { 
				$eventmdfontw = 'normal';
			}
			if(isset($placid_slider_curr['slide_eventm_fontgw']) && !empty($placid_slider_curr['slide_eventm_fontgw']) ){
				$currfontw=$placid_slider_curr['slide_eventm_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			
			}  else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['slide_eventm_fontg'];
			}
			if(isset($placid_slider_curr['slide_eventm_fontgsubset']) && !empty($placid_slider_curr['slide_eventm_fontgsubset']) ){
				$strsubset = implode(",",$placid_slider_curr['slide_eventm_fontgsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			} 
			if(!empty($slide_eventm_fontg)) 	{
				wp_enqueue_style( 'placid_slide_eventm_fontg'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$slide_eventm_fontg=$pgfont['name'];
				$eventmd_font = $slide_eventm_fontg.','.$eventmdfamily;
				$eventmd_fontw = $eventmdfontw;	
			}
			else { //if not set google font fall back to default font
				
				$eventmd_font = 'Arial, Helvetica, sans-serif';
				$eventmd_fontw = 'normal';
				$eventmd_fontst = 'normal';
			}
		} else if( $placid_slider_curr['eventmd_font'] == 'custom' ) {
			$eventmd_font = $placid_slider_curr['slide_eventm_custom'];
			$eventmd_fontw = $sevent_fweight;
			$eventmd_fontst = $sevent_fstyle;
		}
		if(empty($eventmd_fontw))$eventmd_fontw="normal";
		if(empty($eventmd_fontst))$eventmd_fontst="normal";
		/* New fonts application - end -*/	
	$placid_slider_css['slide_eventm_datetime'] = $style_start.'font-family:'.$eventmd_font.'; color:'.$placid_slider_curr['slide_eventm_fcolor'].';font-weight:'.$eventmd_fontw.';font-style:'.$eventmd_fontst.';font-size:'.$placid_slider_curr['slide_eventm_fsize'].'px;'.$style_end;
	
	// wooprice 
	// woo slide price
		if ($placid_slider_curr['slide_woo_price_fstyle'] == "bold" or $placid_slider_curr['slide_woo_price_fstyle'] == "bold italic" ){$wprice_fweight = "bold";} else {$wprice_fweight = "normal";}
		if ($placid_slider_curr['slide_woo_price_fstyle'] == "italic" or $placid_slider_curr['slide_woo_price_fstyle'] == "bold italic"){$wprice_fstyle = "italic";} else {$wprice_fstyle = "normal";}
		/* New fonts application - start -*/
		$woo_font = $woo_fontw = $woo_fontst = '';
		if( $placid_slider_curr['woo_font'] == 'regular' ) {
			$woo_font = $placid_slider_curr['slide_woo_price_font'].', Arial, Helvetica, sans-serif';
			$woo_fontw = $wprice_fweight;
			$woo_fontst = $wprice_fstyle;
		} else if( $placid_slider_curr['woo_font'] == 'google' ) {
			$slide_woo_price_fontg=isset($placid_slider_curr['slide_woo_price_fontg'])?trim($placid_slider_curr['slide_woo_price_fontg']):'';
			$pgfont=get_placid_google_font($placid_slider_curr['slide_woo_price_fontg']);
			(isset($pgfont['category']))?$woofamily = $pgfont['category']:'';
			(isset($placid_slider_curr['slide_woo_price_fontgw']))?$woofontw = $placid_slider_curr['slide_woo_price_fontgw']:''; 
			if (strpos($woofontw,'italic') !== false) {
				$woo_fontst = 'italic';
			} else {
				$woo_fontst = 'normal';
			}
			if( strpos($woofontw,'italic') > 0 ) { 
				$len = strpos($woofontw,'italic');
				$woofontw = substr( $woofontw, 0, $len );
			}
			if( strpos($woofontw,'regular') !== false ) { 
				$woofontw = 'normal';
			}
			if(isset($placid_slider_curr['slide_woo_price_fontgw']) && !empty($placid_slider_curr['slide_woo_price_fontgw']) ){
				$currfontw=$placid_slider_curr['slide_woo_price_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			
			}  else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['slide_woo_price_fontg'];
			}
			if(isset($placid_slider_curr['slide_woo_price_fontgsubset']) && !empty($placid_slider_curr['slide_woo_price_fontgsubset']) ){
				$strsubset = implode(",",$placid_slider_curr['slide_woo_price_fontgsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			} 
			if(!empty($slide_woo_price_fontg)) {
				wp_enqueue_style( 'placid_slide_woo_price'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$slide_woo_price_fontg=$pgfont['name'];
				$woo_font = $slide_woo_price_fontg.','.$woofamily;
				$woo_fontw = $woofontw;	
			}
			else { //if not set google font fall back to default font
				
				$woo_font = 'Arial, Helvetica, sans-serif';
				$woo_fontw = 'normal';
				$woo_fontst = 'normal';
			}
		} else if( $placid_slider_curr['woo_font'] == 'custom' ) {
			$woo_font = $placid_slider_curr['slide_woo_price_custom'];
			$woo_fontw =  $wprice_fweight;
			$woo_fontst = $wprice_fstyle;
		}
		/* New fonts application - end -*/	
		if(empty($woo_fontw))$woo_fontw="normal";
		if(empty($woo_fontst))$woo_fontst="normal";
		//if(!isset($placid_slider_css['placid_slide_wooprice'])) {
		$placid_slider_css['placid_slide_wooprice'] = $style_start.'font-family:'.$woo_font.';color:'.$placid_slider_curr['slide_woo_price_fcolor'].';font-weight:'.$woo_fontw.';font-style:'.$woo_fontst.';font-size:'.$placid_slider_curr['slide_woo_price_fsize'].'px; padding-right: 10px;'.$style_end;
		//}
	// event address

		if ($placid_slider_curr['eventm_addr_fstyle'] == "bold" or $placid_slider_curr['eventm_addr_fstyle'] == "bold italic" ){$eventaddr_fweight = "bold";} else {$eventaddr_fweight = "normal";}
		if ($placid_slider_curr['eventm_addr_fstyle'] == "italic" or $placid_slider_curr['eventm_addr_fstyle'] == "bold italic"){$eventaddr_fstyle = "italic";} else {$eventaddr_fstyle = "normal";}
		/* New fonts application - start -*/ 
		$event_addr_font = $event_addr_fontw = $event_addr_fontst = '';
		if( $placid_slider_curr['event_addr_font'] == 'regular' ) {
			$event_addr_font = $placid_slider_curr['eventm_addr_font'].', Arial, Helvetica, sans-serif';
			$event_addr_fontw = $eventaddr_fweight;
			$event_addr_fontst = $eventaddr_fstyle;
		} else if( $placid_slider_curr['event_addr_font'] == 'google' ) {
			$eventm_addr_fontg=isset($placid_slider_curr['eventm_addr_fontg'])?trim($placid_slider_curr['eventm_addr_fontg']):'';
			$pgfont=get_placid_google_font($placid_slider_curr['eventm_addr_fontg']);
			(isset($pgfont['category']))?$event_addr_family = $pgfont['category']:'';
			(isset($placid_slider_curr['eventm_addr_fontgw']))?$event_addrs_fontw = $placid_slider_curr['eventm_addr_fontgw']:''; 
			if (strpos($event_addrs_fontw,'italic') !== false) {
				$event_addr_fontst = 'italic';
			} else {
				$event_addr_fontst = 'normal';
			}
			if( strpos($event_addrs_fontw,'italic') > 0 ) { 
				$len = strpos($event_addrs_fontw,'italic');
				$event_addrs_fontw = substr( $event_addrs_fontw, 0, $len );
			}
			if( strpos($event_addrs_fontw,'regular') !== false ) { 
				$event_addrs_fontw = 'normal';
			}
			if(isset($placid_slider_curr['eventm_addr_fontgw']) && !empty($placid_slider_curr['eventm_addr_fontgw']) ){
				$currfontw=$placid_slider_curr['eventm_addr_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			
			}  else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['eventm_addr_fontg'];
			}
			if(isset($placid_slider_curr['eventm_addr_fontgsubset']) && !empty($placid_slider_curr['eventm_addr_fontgsubset']) ){
				$strsubset = implode(",",$placid_slider_curr['eventm_addr_fontgsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			} 
			if(!empty($eventm_addr_fontg)) 	{
				wp_enqueue_style( 'placid_eventm_address_fontg'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$eventm_addr_fontg=$pgfont['name'];
				$event_addr_font = $eventm_addr_fontg.','.$event_addr_family;
				$event_addr_fontw = $event_addrs_fontw;	
			}
			else { //if not set google font fall back to default font
				
				$event_addr_font = 'Arial, Helvetica, sans-serif';
				$event_addr_fontw = 'normal';
				$event_addr_fontst = 'normal';
			}
		} else if( $placid_slider_curr['event_addr_font'] == 'custom' ) {
			$event_addr_font = $placid_slider_curr['nav_eventm_custom'];
			$event_addr_fontw = $eventaddr_fweight;
			$event_addr_fontst = $eventaddr_fstyle;
		}
		if(empty($event_addr_fontw))$event_addr_fontw="normal";
		if(empty($event_addr_fontst))$event_addr_fontst="normal";
		/* New fonts application - end -*/ 		
		$placid_slider_css['eventm_addr'] = $style_start.'font-family:'.$event_addr_font.'; color:'.$placid_slider_curr['eventm_addr_fcolor'].';font-weight:'.$event_addr_fontw.';font-style:'.$event_addr_fontst.';font-size:'.$placid_slider_curr['eventm_addr_fsize'].'px;'.$style_end;

		// event category
		if ($placid_slider_curr['eventm_cat_fstyle'] == "bold" or $placid_slider_curr['eventm_cat_fstyle'] == "bold italic" ){$eventcat_fweight = "bold";} else {$eventcat_fweight = "normal";}
		if ($placid_slider_curr['eventm_cat_fstyle'] == "italic" or $placid_slider_curr['eventm_cat_fstyle'] == "bold italic"){$eventcat_fstyle = "italic";} else {$eventcat_fstyle = "normal";}
		/* New fonts application - start -*/
		$event_cat_font = $event_cat_fontw = $event_cat_fontst = '';
		if( $placid_slider_curr['event_cat_font'] == 'regular' ) {
			$event_cat_font = $placid_slider_curr['eventm_cat_font'].', Arial, Helvetica, sans-serif';
			$event_cat_fontw = $eventcat_fweight;
			$event_cat_fontst = $eventcat_fstyle;
		} else if( $placid_slider_curr['event_cat_font'] == 'google' ) {
			$eventm_cat_fontg=isset($placid_slider_curr['eventm_cat_fontg'])?trim($placid_slider_curr['eventm_cat_fontg']):'';
			$pgfont=get_placid_google_font($placid_slider_curr['eventm_cat_fontg']);
			(isset($pgfont['category']))?$event_cat_family = $pgfont['category']:'';
			(isset($placid_slider_curr['eventm_cat_fontgw']))?$event_cat_fontw = $placid_slider_curr['eventm_cat_fontgw']:''; 
			if (strpos($event_cat_fontw,'italic') !== false) {
				$event_cat_fontst = 'italic';
			} else {
				$event_cat_fontst = 'normal';
			}
			if( strpos($event_cat_fontw,'italic') > 0 ) { 
				$len = strpos($event_cat_fontw,'italic');
				$event_cat_fontw = substr( $event_cat_fontw, 0, $len );
			}
			if( strpos($event_cat_fontw,'regular') !== false ) { 
				$event_cat_fontw = 'normal';
			}
			if(isset($placid_slider_curr['eventm_cat_fontgw']) && !empty($placid_slider_curr['eventm_cat_fontgw']) ){
				$currfontw=$placid_slider_curr['eventm_cat_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			
			}  else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['eventm_cat_fontg'];
			}
			if(isset($placid_slider_curr['eventm_cat_fontsubset']) && !empty($placid_slider_curr['eventm_cat_fontsubset']) ){
				$strsubset = implode(",",$placid_slider_curr['eventm_cat_fontsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			} 
			if(!empty($eventm_cat_fontg)) 	{
				wp_enqueue_style( 'placid_eventm_cat_fontg'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$eventm_cat_fontg=$pgfont['name'];
				$event_cat_font = $eventm_cat_fontg.','.$event_cat_family;
				$event_cat_fontw = $event_cat_fontw;	
			}
			else { //if not set google font fall back to default font
				
				$event_cat_font = 'Arial, Helvetica, sans-serif';
				$event_cat_fontw = 'normal';
				$event_cat_fontst = 'normal';
			}
		} else if( $placid_slider_curr['event_cat_font'] == 'custom' ) {
			$event_cat_font = $placid_slider_curr['nav_eventm_custom'];
			$event_cat_fontw = $eventcat_fweight;
			$event_cat_fontst = $eventcat_fstyle;
		}
		
		if(empty($event_cat_fontw))$event_cat_fontw="normal";
		if(empty($event_cat_fontst))$event_cat_fontst="normal";
		/* New fonts application - end -*/		
		$placid_slider_css['eventm_cat'] = $style_start.'font-family:'.$event_cat_font.'; color:'.$placid_slider_curr['eventm_cat_fcolor'].';font-weight:'.$event_cat_fontw.';font-style:'.$event_cat_fontst.';font-size:'.$placid_slider_curr['eventm_cat_fsize'].'px;'.$style_end;


	
		// woo sale slide price
		if ($placid_slider_curr['slide_woo_saleprice_fstyle'] == "bold" or $placid_slider_curr['slide_woo_saleprice_fstyle'] == "bold italic" ){$saleprice_fweight = "bold";} else {$saleprice_fweight = "normal";}
		if ($placid_slider_curr['slide_woo_saleprice_fstyle'] == "italic" or $placid_slider_curr['slide_woo_saleprice_fstyle'] == "bold italic"){$saleprice_fstyle = "italic";} else {$saleprice_fstyle = "normal";}
		/* New fonts application - start -*/
		$woosale_font = $woosale_fontw = $woosale_fontst = '';
		if( $placid_slider_curr['woosale_font'] == 'regular' ) {
			$woosale_font = $placid_slider_curr['slide_woo_saleprice_font'].', Arial, Helvetica, sans-serif';
			$woosale_fontw = $saleprice_fweight;
			$woosale_fontst = $saleprice_fstyle;
		} else if( $placid_slider_curr['woosale_font'] == 'google' ) {
			$slide_woo_saleprice_fontg=isset($placid_slider_curr['slide_woo_saleprice_fontg'])?trim($placid_slider_curr['slide_woo_saleprice_fontg']):'';
			$pgfont=get_placid_google_font($placid_slider_curr['slide_woo_saleprice_fontg']);
			(isset($pgfont['category']))?$woosalefamily = $pgfont['category']:'';
			(isset($placid_slider_curr['slide_woo_saleprice_fontgw']))?$woosalefontw = $placid_slider_curr['slide_woo_saleprice_fontgw']:''; 
			if (strpos($woosalefontw,'italic') !== false) {
				$woosale_fontst = 'italic';
			} else {
				$woosale_fontst = 'normal';
			}
			if( strpos($woosalefontw,'italic') > 0 ) { 
				$len = strpos($woosalefontw,'italic');
				$woosalefontw = substr( $woosalefontw, 0, $len );
			}
			if( strpos($woosalefontw,'regular') !== false ) { 
				$woosalefontw = 'normal';
			}
			if(isset($placid_slider_curr['slide_woo_saleprice_fontgw']) && !empty($placid_slider_curr['slide_woo_saleprice_fontgw']) ){
				$currfontw=$placid_slider_curr['slide_woo_saleprice_fontgw'];
				$gfonturl = $pgfont['urls'][$currfontw];
			
			}  else {
				$gfonturl = 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['slide_woo_saleprice_fontg'];
			}
			if(isset($placid_slider_curr['slide_woo_saleprice_fontgsubset']) && !empty($placid_slider_curr['slide_woo_saleprice_fontgsubset']) ){
				$strsubset = implode(",",$placid_slider_curr['slide_woo_saleprice_fontgsubset']);
				$gfonturl = $gfonturl.'&subset='.$strsubset;
			} 
			if(!empty($slide_woo_saleprice_fontg)) 	{
				wp_enqueue_style( 'placid_slide_woo_saleprice'.$set, $gfonturl,array(),PLACID_SLIDER_VER);
				$slide_woo_saleprice_fontg=$pgfont['name'];
				$woosale_font = $slide_woo_saleprice_fontg.','.$woosalefamily;
				$woosale_fontw = $woosalefontw;	
			}
			else { //if not set google font fall back to default font
				$woosale_font = 'Arial, Helvetica, sans-serif';
				$woosale_fontw = 'normal';
				$woosale_fontst = 'normal';
			}
		} else if( $placid_slider_curr['woosale_font'] == 'custom' ) {
			$woosale_font = $placid_slider_curr['slide_woo_saleprice_custom'];
			$woosale_fontw =  $saleprice_fweight;
			$woosale_fontst = $saleprice_fstyle;
		}
		/* New fonts application - end -*/
		if(empty($woosale_fontw))$woosale_fontw="normal";
		if(empty($woosale_fontst))$woosale_fontst="normal";
	$placid_slider_css['placid_slide_woosaleprice'] = $style_start.'font-family:'.$woosale_font.';color:'.$placid_slider_curr['slide_woo_saleprice_fcolor'].';font-weight:'.$woosale_fontw.';font-style:'.$woosale_fontst.';font-size:'.$placid_slider_curr['slide_woo_saleprice_fsize'].'px; padding-right: 8px;'.$style_end;	
		
	// woo sale strip
		$placid_slider_css['placid_woo_sale_strip'] = $style_start.'background-color:'.$placid_slider_curr['woo_sale_color'].';'.$style_end;	
	// woo sale strip text
		$placid_slider_css['placid_woo_strip_tcolor'] = $style_start.'color:'.$placid_slider_curr['woo_sale_tcolor'].';'.$style_end;
	// video shortcode
		$placid_slider_css['placid_slider_video']=$style_start.'position:absolute;top:0;bottom:0;height:'.$placid_slider_curr['img_height'].'px;'.$thumb_width.''.$style_end;
	//placid_slider_p_more
		$placid_slider_css['placid_slider_p_more']=$style_start.'color:'.$placid_slider_curr['ptitle_fcolor'].';font-family:'.$placid_slider_curr['content_font'].', Arial, Helvetica, sans-serif;font-size:'.$placid_slider_curr['content_fsize'].'px;'.$style_end;
	//placid_slider_text
	    $ptext_width = ( isset($placid_slider_curr['ptext_width']) && $placid_slider_curr['ptext_width'] != "" ) ? ( 'max-width:'. $placid_slider_curr['ptext_width'] .'px;')  : ( isset($placid_slider_curr['iwidth']) ? ( 'max-width:'.( $placid_slider_curr['iwidth']).'px;') : ''  ).'width:100%;';
		$placid_slider_css['placid_text']=$style_start.$ptext_width.$style_end;
	} else {
		// Load Google fonts for Sample Skin
		if( $placid_slider_curr['woo_font'] == 'google' ) {
			wp_enqueue_style( 'placid_slide_woo_price'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['slide_woo_price_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['woosale_font'] == 'google' ) {
			wp_enqueue_style( 'placid_slide_woo_saleprice'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['slide_woo_saleprice_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['woocat_font'] == 'google' ) {
			wp_enqueue_style( 'placid_slide_woo_cat'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['slide_woo_cat_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['event_addr_font'] == 'google' ) {
			wp_enqueue_style( 'placid_eventm_address_fontg'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['eventm_addr_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['eventmd_font'] == 'google' ) {
			wp_enqueue_style( 'placid_slide_eventm_fontg'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['slide_eventm_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['event_cat_font'] == 'google' ) {
			wp_enqueue_style( 'placid_eventm_cat_fontg'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['eventm_cat_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['t_font'] == 'google' ) {
			wp_enqueue_style( 'placid_titlet'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['title_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['pt_font'] == 'google' ) {
			wp_enqueue_style( 'placid_ptitlet'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['ptitle_fontg'],array(),PLACID_SLIDER_VER);
		}
		if( $placid_slider_curr['pc_font'] == 'google' ) {
			wp_enqueue_style( 'placid_content'.$set, 'http://fonts.googleapis.com/css?family='.$placid_slider_curr['content_fontg'],array(),PLACID_SLIDER_VER);
		}
	}
	return $placid_slider_css;
}

//Image Cropping
if(!defined('BFITHUMB_UPLOAD_DIR'))define( 'BFITHUMB_UPLOAD_DIR', 'sliderImages' );

function placid_slider_css() {
$gplacid_slider = get_option('placid_slider_global_options');
$css=$gplacid_slider['css'];
if($css and !empty($css)){?>
 <style type="text/css"><?php echo $css;?></style>
<?php }
}
add_action('wp_head', 'placid_slider_css');
add_action('admin_head', 'placid_slider_css');
function placid_custom_css_js() {
	//Image Cropping
if(!defined('BFITHUMB_UPLOAD_DIR'))define( 'BFITHUMB_UPLOAD_DIR', 'sliderImages' );
	$css=(isset($placid_slider['css_js']) ? $placid_slider['css_js'] : '');
	$line_breaks = array("\r\n", "\n", "\r");
	$css = str_replace($line_breaks, "", $css);
	if($css and !empty($css)){
		if( ( is_admin() and isset($_GET['page']) and 'placid-slider-settings' == $_GET['page']) or !is_admin() ){	?>
			<script type="text/javascript">jQuery(document).ready(function() { jQuery("head").append("<style type=\"text/css\"><?php echo $css;?></style>"); }) </script>
<?php 	}
	}
}
add_action('wp_footer', 'placid_custom_css_js');
add_action('admin_footer', 'placid_custom_css_js');
?>
