<?php /* Post Attachments Template tag and Shortcode */
//For displaying all the attachments of a particular post in Placid Slider
function placid_carousel_posts_on_slider_attachments($max_posts='5', $offset=0, $out_echo = '1', $set='',$id,$data=array() ) {
	$r_array=array();
	$default_placid_slider_settings=get_placid_slider_default_settings();
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr = populate_placid_current($placid_slider_curr);
		
	global $wpdb, $table_prefix;
	
	$rand = $placid_slider_curr['rand'];
	if(isset($rand) and $rand=='1'){
	  $orderby = '&orderby=rand';
	}
	else {
	  $orderby = 'menu_order ID';
	}
	$args=array(
		'post_type'	=> 'attachment',
		'numberposts'	=> $max_posts,
		'offset'    	=> $offset,
		'orderby'	=> $orderby,
		'post_status'	=> null,
		'post_parent'	=> $id
		) ;
	//filter hook
	$args=apply_filters('placid_svattachments_args',$args);
	$attachments = get_posts( $args	);
	foreach($attachments as $attachment){
		$attachment->slide_url=wp_get_attachment_url( $attachment->ID );
		//filter hook
		$attachment->slide_url=apply_filters('placid_svattachments_slide_url',$attachment->slide_url);
	}
	$r_array=placid_global_posts_processor( $attachments, $placid_slider_curr, $out_echo,$set,$data );
	return $r_array;
}

function get_placid_slider_attachments($args='') {
    $defaults=array('set'=>'', 'offset'=>0, 'id'=>'','data'=>array() );
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
	global $post;
	$id=(int) $id;
	if( empty($id) or $id==0 or !$id) $id=$post->ID;
	$slider_handle='placid_slider_'.$id;
	$data['slider_handle']=$slider_handle;
	$r_array = placid_carousel_posts_on_slider_attachments($placid_slider_curr['no_posts'], $offset, '0', $set, $id,$data); 
	get_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='1',$data);

} 

function return_placid_slider_attachments($set='', $offset=0, $id,$data=array()) {
	$slider_html='';
	$default_placid_slider_settings=get_placid_slider_default_settings();
	// If setting set is 1 then set to blank	
	if($set == '1') $set = ''; 
	$placid_slider_options='placid_slider_options'.$set;
	$placid_slider_curr=get_option($placid_slider_options);
	$placid_slider = get_option('placid_slider_options');
	if(!isset($placid_slider_curr) or !is_array($placid_slider_curr) or empty($placid_slider_curr)){$placid_slider_curr=$placid_slider;$set='';}
	$placid_slider_curr= populate_placid_current($placid_slider_curr);
	global $post;
	$id=(int) $id;
	if( empty($id) or $id==0 or !$id) $id=$post->ID;
	$slider_handle='placid_slider_'.$id;
	$data['slider_handle']=$slider_handle;
	$r_array = placid_carousel_posts_on_slider_attachments($placid_slider_curr['no_posts'], $offset, '0', $set,$id,$data); 
	//get slider 
	$slider_html=return_global_placid_slider($slider_handle,$r_array,$placid_slider_curr,$set,$echo='0',$data);
	return $slider_html;
}

function placid_slider_attachments_shortcode($atts) {
	extract(shortcode_atts(array(
		'set' => '',
		'offset'=>'0',
		'id'=>'',
	), $atts));

	return return_placid_slider_attachments($set,$offset,$id);
}
add_shortcode('placidattachments', 'placid_slider_attachments_shortcode');
?>
