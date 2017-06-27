<?php /* Custom Event Template tag and Shortcode */
//For displaying Event specific posts in chronologically reverse order
function placid_carousel_posts_on_slider_event($max_posts='5', $post_type='event', $term='',$tags='', $offset=0, $out_echo = '1', $set='', $scope='all', $data=array() ) {
    	$r_array=array();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	global $wpdb, $table_prefix;
	$rand = $placid_slider_curr['rand'];
	if(isset($rand) and $rand=='1'){
		$orderby = 'rand';
	}
	else {
		if($scope == 'all') $orderby = 'event_date_created';
		else $orderby = 'event_start_date';
	}
	if(isset($data['owner']) and $data['owner'] !='' )$author=$data['owner'];
	else $author='0';
	$args=array(
		'scope'		  => $scope,
		'offset'          => $offset,
		'orderby' 	  => $orderby,
		'post_type'       => $post_type,
		'post_status'     => 'publish'
	);
	$recurring_args=array(
		'scope'		  => $scope,
		'offset'          => $offset,
		'orderby' 	  => $orderby,
		'post_type'       => $post_type,
		'recurring'   	  => 1,
		'post_status'     => 'publish'
	);
	//'limit'     	  => $max_posts,
	// filter out the events that are instances of recurring events
        
        
	if( !empty($term)) {
		$args['category']= $term;
		$recurring_args['category']= $term;
	}
	if( !empty($tags)) {
		$args['tag'] = $tags;
		$recurring_args['tag'] = $tags;
	}
	if($scope == 'all') {
		$args['order'] = 'DESC';
		$recurring_args['order'] = 'DESC';
	}
	if($author != 0 ) {
		$args['owner'] = $author;
		$recurring_args['owner'] = $author;
	}
	//filter hook
	$args=apply_filters('placid_svtaxonomy_args',$args);
	if(class_exists('EM_Events')) {
		$events = EM_Events::get( $args );
		$non_recurrence_evts = array_filter($events,'placid_is_no_recurrence');
		
		$evts_recurring = EM_Events::get( $recurring_args );
		
		//print_r($events);
		$posts = array_merge($non_recurrence_evts,$evts_recurring);
		// sort them by start==start date+time
        	usort($posts,'placid_evt_start_sort');
        	$posts=array_slice($posts, 0, $max_posts);
        	
		$data['type']='eman';
		$r_array=placid_global_posts_processor( $posts, $placid_slider_curr, $out_echo,$set,$data );
		return $r_array;
	} else _e("Please activate event manager plugin","placid-slider");
}
function placid_is_no_recurrence($evt) {
	return $evt->recurrence_id == null;
}
function placid_evt_start_sort($evt1, $evt2) {
    return $evt1->start > $evt2->start;
}
function get_placid_slider_event($args='') {
    	$defaults=array('post_type'=>'event', 'term'=>'','tags'=>'', 'set'=>'','offset'=>0,'scope,'=>'all','data'=>array() );
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
	// If setting set is 1 then set to blank	
	if($set == '1') $set = '';
	$default_placid_slider_settings=get_placid_slider_default_settings(); 
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$handle_string='_evnt';
	if(!empty($term))$handle_string='_t'.str_replace(',','_',$term);
	if(isset($data['owner']) and $data['owner'] != '' )$author=$data['owner'];
	else $author='0';
	$handle_string.=(($author!='0')?('_a'.str_replace(',','_',$author)):'');
	//if(!empty($term))$term=explode(',',$term);
	$slider_handle='placid_slider'.$handle_string;
	$r_array = placid_carousel_posts_on_slider_event($placid_slider_curr['no_posts'], $post_type, $term,$tags, $offset, '0', $set,$scope,$data); 
	get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,'1',$data);
} 

function return_placid_slider_event($post_type='event', $term='',$tags='', $set='', $offset=0,$scope='',$data=array()) {
	$slider_html='';
	$default_placid_slider_settings=get_placid_slider_default_settings(); 
	// If setting set is 1 then set to blank	
	if($set == '1') $set = '';
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$handle_string='_evnt';
	if(!empty($term))$handle_string='_t'.str_replace(',','_',$term);
	if(isset($data['owner']) and $data['owner'] != '' )$author=$data['owner'];
	else $author='0';
	$handle_string.=(($author!='0')?('_a'.str_replace(',','_',$author)):'');
	//if(!empty($term))$term=explode(',',$term);
	$slider_handle='placid_slider'.$handle_string;
	$data['slider_handle']=$slider_handle;
	$r_array = placid_carousel_posts_on_slider_event($placid_slider_curr['no_posts'], $post_type, $term,$tags, $offset, '0', $set,$scope,$data); 
	//get slider 
	$output_function='return_global_placid_slider';
	$slider_html=$output_function($slider_handle,$r_array,$placid_slider_curr,$set,$data);

	return $slider_html;
}

function placid_slider_event_shortcode($atts) {
	extract(shortcode_atts(array(
		'post_type'=>'event', 
		'term' => '',
		'tags' =>'',
		'set' => '',
		'offset'=>'0',
		'scope'=>'all',
		'author'=>'',
	), $atts));
	$data=array();
	$data['owner']=$author;
	return return_placid_slider_event($post_type,$term,$tags,$set,$offset,$scope,$data);
}
add_shortcode('placidevent', 'placid_slider_event_shortcode');
?>
