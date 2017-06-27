<?php /* Custom Taxonomy Template tag and Shortcode */
//For displaying taxonomy specific posts in chronologically reverse order
function placid_carousel_posts_on_slider_event_calendar($max_posts='5', $post_type='tribe_events', $taxonomy='tribe_events_cat', $term='', $offset=0, $out_echo = '1', $set='', $tags='',$type='', $operator='',$data=array() ) {
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
		$orderby = 'date';
	}
	if(isset($data['author']) and $data['author'] !='' )$author=$data['author'];
	else $author='0';
	$args=array(
		'eventDisplay'	  => $type,
		'posts_per_page'  => $max_posts,
		'offset'          => $offset,
		'orderby'	  => $orderby,
		'post_type'       => $post_type,
		'post_status'     => 'publish',
		'author'	  => $author
	);
	if( !empty($tags) && !empty($term) && count($tags) > 0) {
		$tax_query_tags=array('taxonomy' => 'post_tag','field' => 'slug','terms' => $tags) ;
		$tax_query_term=array('taxonomy' => $taxonomy,'field' => 'slug','terms' => $term);
		$args['tax_query']= array( 'relation' => 'AND',$tax_query_tags,$tax_query_term );
	}
	elseif( (!is_array($tags) and !empty($tags)) or (is_array($tags) and count($tags) > 0) ) {
		$tax_query_array=array('taxonomy' => 'post_tag','field' => 'slug','terms' => $tags);
		if( !empty($operator) ){
			$tax_query_array['operator']=$operator;
		}
		$args['tax_query']= array( $tax_query_array );
	} elseif( (!is_array($term) and !empty($term)) or (is_array($term) and count($term) > 0) ) {
		$tax_query_array=array('taxonomy' => $taxonomy,'field' => 'slug','terms' => $term);
		if( !empty($operator) ){
			$tax_query_array['operator']=$operator;
		}
		$args['tax_query']= array( $tax_query_array );
	}
	//filter hook
	$args=apply_filters('placid_svtaxonomy_args',$args);
	if (function_exists('tribe_get_events')) {
		$data['type']='ecal';
		$posts = tribe_get_events( $args );
		$r_array=placid_global_posts_processor( $posts, $placid_slider_curr, $out_echo,$set,$data );
		return $r_array;
	} else echo "Please activate event calendar plugin!";
	
}

function get_placid_slider_event_calendar($args='') {
    $defaults=array('post_type'=>'tribe_events', 'taxonomy'=>'tribe_events_cat','term'=>'', 'set'=>'', 'offset'=>0, 'tags'=>'','type'=>'', 'operator'=>'','data'=>array() );
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
	$default_placid_slider_settings=get_placid_slider_default_settings(); 
	// If setting set is 1 then set to blank	
	if($set == '1') $set = '';
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$handle_string='_ecal';
	if(!empty($term))$handle_string='_t'.str_replace(',','_',$term);
	if(isset($data['author']) and $data['author'] != '' )$author=$data['author'];
	else $author='0';
	$handle_string.=(($author!='0')?('_a'.str_replace(',','_',$author)):'');
	if(!empty($term))$term=explode(',',$term);
	if(!empty($tags))$tags=explode(',',$tags);
	$slider_handle='placid_slider'.$handle_string;
	$r_array = placid_carousel_posts_on_slider_event_calendar($placid_slider_curr['no_posts'], $post_type, $taxonomy, $term, $offset, '0', $set, $tags,$type, $operator,$data); 
	get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,'1',$data);
} 

function return_placid_slider_event_calendar($post_type='tribe_events', $taxonomy='tribe_events_cat', $term='', $set='', $offset=0,$tags='',$type='', $operator='',$data=array()) {
	$slider_html='';
	$default_placid_slider_settings=get_placid_slider_default_settings();
	// If setting set is 1 then set to blank	
	if($set == '1') $set = '';
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	$handle_string='_ecal';
	if(!empty($term))$handle_string='_t'.str_replace(',','_',$term);
	if(isset($data['author']) and $data['author'] != '' )$author=$data['author'];
	else $author='0';
	$handle_string.=(($author!='0')?('_a'.str_replace(',','_',$author)):'');
	if(!empty($term))$term=explode(',',$term);
	if(!empty($tags))$tags=explode(',',$tags);
	$slider_handle='placid_slider'.$handle_string;
	$data['slider_handle']=$slider_handle;
	$r_array = placid_carousel_posts_on_slider_event_calendar($placid_slider_curr['no_posts'], $post_type, $taxonomy, $term, $offset, '0', $set, $tags,$type,$operator,$data); 
	//get slider 
	$output_function='return_global_placid_slider';
	$slider_html=$output_function($slider_handle,$r_array,$placid_slider_curr,$set,$data);

	return $slider_html;
}

function placid_slider_event_calendar_shortcode($atts) {
	extract(shortcode_atts(array(
		'post_type'=>'tribe_events', 
		'taxonomy'=>'tribe_events_cat',
		'term' => '',
		'set' => '',
		'offset'=>'0',
		'tags'=>'',
		'type'=>'',
		'operator'=>'',
		'author'=>'',
	), $atts));
	$data=array();
	$data['author']=$author;
	return return_placid_slider_event_calendar($post_type,$taxonomy,$term,$set,$offset,$tags,$type,$operator,$data);
}
add_shortcode('placidcalendar', 'placid_slider_event_calendar_shortcode');
?>
