<?php 
function placid_ss_get_sliders(){
	global $wpdb,$table_prefix;
	$slider_meta = $table_prefix.PLACID_SLIDER_META; 
	$sql = "SELECT * FROM $slider_meta WHERE type=0 || type=17";
 	$sliders = $wpdb->get_results($sql, ARRAY_A);
	return $sliders;
}

function placid_ss_get_expiry($post_id){
	global $wpdb,$table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$sql = "SELECT expiry FROM $table_name WHERE post_id = '$post_id'";
 	$sliders = $wpdb->get_results($sql, OBJECT);
	return $sliders;
}

/*
 * Matches each symbol of PHP date format standard
 * with jQuery equivalent codeword
 * @author Tristan Jahier
 */
function placid_dateformat_PHP_to_jQueryUI($php_format)
{
    $SYMBOLS_MATCHING = array(
        // Day
        'd' => 'dd',
        'D' => 'D',
        'j' => 'd',
        'l' => 'DD',
        'N' => '',
        'S' => '',
        'w' => '',
        'z' => 'o',
        // Week
        'W' => '',
        // Month
        'F' => 'MM',
        'm' => 'mm',
        'M' => 'M',
        'n' => 'm',
        't' => '',
        // Year
        'L' => '',
        'o' => '',
        'Y' => 'yy',
        'y' => 'y',
        // Time
        'a' => '',
        'A' => '',
        'B' => '',
        'g' => '',
        'G' => '',
        'h' => '',
        'H' => '',
        'i' => '',
        's' => '',
        'u' => ''
    );
    $jqueryui_format = "";
    $escaping = false;
    for($i = 0; $i < strlen($php_format); $i++)
    {
        $char = $php_format[$i];
        if($char === '\\') // PHP date format escaping character
        {
            $i++;
            if($escaping) $jqueryui_format .= $php_format[$i];
            else $jqueryui_format .= '\'' . $php_format[$i];
            $escaping = true;
        }
        else
        {
            if($escaping) { $jqueryui_format .= "'"; $escaping = false; }
            if(isset($SYMBOLS_MATCHING[$char]))
                $jqueryui_format .= $SYMBOLS_MATCHING[$char];
            else
                $jqueryui_format .= $char;
        }
    }
    return $jqueryui_format;
}

function placid_get_slider_posts_in_order($slider_id) {
    global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$slider_posts = $wpdb->get_results("SELECT * FROM $table_name WHERE slider_id = '$slider_id' ORDER BY slide_order ASC, date DESC", OBJECT);
	return $slider_posts;
}
function get_placid_slider_name($slider_id) {
    global $wpdb, $table_prefix;
	$slider_name = '';
	$table_name = $table_prefix.PLACID_SLIDER_META;
	$slider_obj = $wpdb->get_results("SELECT * FROM $table_name WHERE slider_id = '$slider_id'", OBJECT);
	if (isset ($slider_obj[0]))$slider_name = $slider_obj[0]->slider_name;
	return $slider_name;
}
function placid_ss_get_post_sliders($post_id){
    global $wpdb,$table_prefix;
	$slider_table = $table_prefix.PLACID_SLIDER_TABLE; 
	$sql = "SELECT * FROM $slider_table 
	        WHERE post_id = '$post_id';";
	$post_sliders = $wpdb->get_results($sql, ARRAY_A);
	return $post_sliders;
}
function placid_ss_post_on_slider($post_id,$slider_id){
    global $wpdb,$table_prefix;
	$slider_postmeta = $table_prefix.PLACID_SLIDER_POST_META;
    $sql = "SELECT * FROM $slider_postmeta  
	        WHERE post_id = '$post_id' 
			AND slider_id = '$slider_id';";
	$result = $wpdb->query($sql);
	if($result == 1) { return TRUE; }
	else { return FALSE; }
}
function placid_ss_slider_on_this_post($post_id){
    global $wpdb,$table_prefix;
	$slider_postmeta = $table_prefix.PLACID_SLIDER_POST_META;
    $sql = "SELECT * FROM $slider_postmeta  
	        WHERE post_id = '$post_id';";
	$result = $wpdb->query($sql);
	if($result == 1) { return TRUE; }
	else { return FALSE; }
}
//Checks if the post is already added to slider
function placid_slider($post_id,$slider_id = '1') {
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$check = "SELECT id FROM $table_name WHERE post_id = '$post_id' AND slider_id = '$slider_id';";
	$result = $wpdb->query($check);
	if($result == 1) { return TRUE; }
	else { return FALSE; }
}
function is_post_on_any_placid_slider($post_id) {
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$check = "SELECT post_id FROM $table_name WHERE post_id = '$post_id' LIMIT 1;";
	$result = $wpdb->query($check);
	if($result == 1) { return TRUE; }
	else { return FALSE; }
}
function is_placid_slider_on_slider_table($slider_id) {
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_TABLE;
	$check = "SELECT * FROM $table_name WHERE slider_id = '$slider_id' LIMIT 1;";
	$result = $wpdb->query($check);
	if($result == 1) { return TRUE; }
	else { return FALSE; }
}
function is_placid_slider_on_meta_table($slider_id) {
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_META;
	$check = "SELECT * FROM $table_name WHERE slider_id = '$slider_id' LIMIT 1;";
	$result = $wpdb->query($check);
	if($result == 1) { return TRUE; }
	else { return FALSE; }
}
function is_placid_slider_on_postmeta_table($slider_id) {
	global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_POST_META;
	$check = "SELECT * FROM $table_name WHERE slider_id = '$slider_id' LIMIT 1;";
	$result = $wpdb->query($check);
	if($result == 1) { return TRUE; }
	else { return FALSE; }
}
function get_placid_slider_for_the_post($post_id) {
    global $wpdb, $table_prefix;
	$table_name = $table_prefix.PLACID_SLIDER_POST_META;
	$sql = "SELECT slider_id FROM $table_name WHERE post_id = '$post_id' LIMIT 1;";
	$slider_postmeta = $wpdb->get_row($sql, ARRAY_A);
	$slider_id = $slider_postmeta['slider_id'];
	return $slider_id;
}
function placid_slider_word_limiter( $text, $limit = 50 ) {
    $text = str_replace(']]>', ']]&gt;', $text);
	//Not using strip_tags as to accomodate the 'retain html tags' feature
	//$text = strip_tags($text);
	
    $explode = explode(' ',$text);
    $string  = '';

    $dots = '...';
    if(count($explode) <= $limit){
        $dots = '';
    }
    for($i=0;$i<$limit;$i++){
        if (isset ($explode[$i]))  $string .= $explode[$i]." ";
    }
    if ($dots) {
        $string = substr($string, 0, strlen($string));
    }
    return $string.$dots;
}
function placid_sslider_admin_url( $query = array() ) {
	global $plugin_page;

	if ( ! isset( $query['page'] ) )
		$query['page'] = $plugin_page;

	$path = 'admin.php';

	if ( $query = build_query( $query ) )
		$path .= '?' . $query;

	$url = admin_url( $path );

	return esc_url_raw( $url );
}
function placid_slider_table_exists($table, $db) { 
	$tables = mysql_list_tables ($db); 
	while (list ($temp) = mysql_fetch_array ($tables)) {
		if ($temp == $table) {
			return TRUE;
		}
	}
	return FALSE;
}
function get_placid_nextgen_galleries($id = '1') {
	global $wpdb, $table_prefix;
	$options ='';
	$table_name = $table_prefix."ngg_gallery";
	if($wpdb->get_var("show tables like '$table_name'") == $table_name) {
		$galleries = "SELECT * FROM $table_name";
		$result = $wpdb->get_results($galleries);
		foreach($result as $res) {
			$gid = isset($res->gid)?$res->gid:'1';
			$name = isset($res->name)?$res->name:'';
			$options .= "<option value='".$gid."' ".selected($id,$gid, false).">".$name."</option>";
		}
		return $options;
	} else return '';
}
// Transition 
function get_placid_transitions($name,$transtion) {
	$transition = '<select name="'.$name.'" class="placid_transitions" >
	 <option value="">'.__('Choose Transition','placid-slider').'</option>
	<optgroup label="'.__('Attention Seekers','placid-slider').'">
          <option value="bounce" '. selected( $transtion, "bounce", false ) .'>'.__('bounce','placid-slider').'</option>
          <option value="flash" '. selected( $transtion, "flash", false ) .'>'.__('flash','placid-slider').'</option>
          <option value="pulse" '. selected( $transtion, "pulse", false ) .'>'.__('pulse','placid-slider').'</option>
          <option value="rubberBand" '. selected( $transtion, "rubberBand", false ) .'>'.__('rubberBand','placid-slider').'</option>
          <option value="shake" '. selected( $transtion, "shake", false ) .'>'.__('shake','placid-slider').'</option>
          <option value="swing" '. selected( $transtion, "swing", false ) .'>'.__('swing','placid-slider').'</option>
          <option value="tada" '. selected( $transtion, "tada", false ) .'>'.__('tada','placid-slider').'</option>
          <option value="wobble" '. selected( $transtion, "wobble", false ) .'>'.__('wobble','placid-slider').'</option>
        </optgroup>
	<optgroup label="'.__('Bouncing Entrances','placid-slider').'">
          <option value="bounceIn" '. selected( $transtion, "bounceIn", false ) .'>'.__('bounceIn','placid-slider').'</option>
          <option value="bounceInDown" '. selected( $transtion, "bounceInDown", false ) .'>'.__('bounceInDown','placid-slider').'</option>
          <option value="bounceInLeft" '. selected( $transtion, "bounceInLeft", false ) .'>'.__('bounceInLeft','placid-slider').'</option>
          <option value="bounceInRight" '. selected( $transtion, "bounceInRight", false ) .'>'.__('bounceInRight','placid-slider').'</option>
          <option value="bounceInUp" '. selected( $transtion, "bounceInUp", false ) .'>'.__('bounceInUp','placid-slider').'</option>
        </optgroup>

       <optgroup label="'.__('Fading Entrances','placid-slider').'">
          <option value="fadeIn" '. selected( $transtion, "fadeIn", false ) .'>'.__('fadeIn','placid-slider').'</option>
          <option value="fadeInDown" '. selected( $transtion, "fadeInDown", false ) .'>'.__('fadeInDown','placid-slider').'</option>
          <option value="fadeInDownBig"'. selected( $transtion, "fadeInDownBig", false ) .'>'.__('fadeInDownBig','placid-slider').'</option>
          <option value="fadeInLeft" '. selected( $transtion, "fadeInLeft", false ) .'>'.__('fadeInLeft','placid-slider').'</option>
          <option value="fadeInLeftBig" '. selected( $transtion, "fadeInLeftBig", false ) .'>'.__('fadeInLeftBig','placid-slider').'</option>
          <option value="fadeInRight" '. selected( $transtion, "fadeInRight", false ) .'>'.__('fadeInRight','placid-slider').'</option>
          <option value="fadeInRightBig" '. selected( $transtion, "fadeInRightBig", false ) .'>'.__('fadeInRightBig','placid-slider').'</option>
          <option value="fadeInUp" '. selected( $transtion, "fadeInUp", false ) .'>'.__('fadeInUp','placid-slider').'</option>
          <option value="fadeInUpBig" '. selected( $transtion, "fadeInUpBig", false ) .'>'.__('fadeInUpBig','placid-slider').'</option>
        </optgroup>

       <optgroup label="'.__('Flippers','placid-slider').'">
          <option value="flip" '. selected( $transtion, "flip", false ) .'>'.__('flip','placid-slider').'</option>
          <option value="flipInX" '. selected( $transtion, "flipInX", false ) .'>'.__('flipInX','placid-slider').'</option>
          <option value="flipInY" '. selected( $transtion, "flipInY", false ) .'>'.__('flipInY','placid-slider').'</option>
       </optgroup>

        <optgroup label="'.__('Lightspeed','placid-slider').'">
          <option value="lightSpeedIn" '. selected( $transtion, "lightSpeedIn", false ) .'>'.__('lightSpeedIn','placid-slider').'</option>
        </optgroup>

        <optgroup label="'.__('Rotating Entrances','placid-slider').'">
          <option value="rotateIn" '. selected( $transtion, "rotateIn", false ) .'>'.__('rotateIn','placid-slider').'</option>
          <option value="rotateInDownLeft" '. selected( $transtion, "rotateInDownLeft", false ) .'>'.__('rotateInDownLeft','placid-slider').'</option>
          <option value="rotateInDownRight" '. selected( $transtion, "rotateInDownRight", false ) .'>'.__('rotateInDownRight','placid-slider').'</option>
          <option value="rotateInUpLeft" '. selected( $transtion, "rotateInUpLeft", false ) .'>'.__('rotateInUpLeft','placid-slider').'</option>
          <option value="rotateInUpRight" '. selected( $transtion, "rotateInUpRight", false ) .'>'.__('rotateInUpRight','placid-slider').'</option>
        </optgroup>

        <optgroup label="'.__('Specials','placid-slider').'">
          <option value="hinge" '. selected( $transtion, "hinge", false ) .'>'.__('hinge','placid-slider').'</option>
          <option value="rollIn" '. selected( $transtion, "rollIn", false ) .'>'.__('rollIn','placid-slider').'</option>
        </optgroup>

        <optgroup label="'.__('Zoom Entrances','placid-slider').'">
          <option value="zoomIn" '. selected( $transtion, "zoomIn", false ) .'>'.__('zoomIn','placid-slider').'</option>
          <option value="zoomInDown" '. selected( $transtion, "zoomInDown", false ) .'>'.__('zoomInDown','placid-slider').'</option>
          <option value="zoomInLeft" '. selected( $transtion, "zoomInLeft", false ) .'>'.__('zoomInLeft','placid-slider').'</option>
          <option value="zoomInRight" '. selected( $transtion, "zoomInRight", false ) .'>'.__('zoomInRight','placid-slider').'</option>
          <option value="zoomInUp" '. selected( $transtion, "zoomInUp", false ) .'>'.__('zoomInUp','placid-slider').'</option>
        </optgroup>
	
	 <optgroup label="'.__('Slide Entrances','placid-slider').'">
          <option value="slideInDown" '. selected( $transtion, "slideInDown", false ) .'>'.__('slideInDown','placid-slider').'</option>
          <option value="slideInLeft" '. selected( $transtion, "slideInLeft", false ) .'>'.__('slideInLef','placid-slider').'t</option>
          <option value="slideInRight" '. selected( $transtion, "slideInRight", false ) .'>'.__('slideInRight','placid-slider').'</option>
          <option value="slideInUp" '. selected( $transtion, "slideInUp", false ) .'>'.__('slideInUp','placid-slider').'</option>
         </optgroup>
      
</select>';
	return $transition;
}
function get_placid_slider_default_settings() {
	$default_placid_slider_settings = array('speed'=>'1', 
	'no_posts'=>'10',
	'bg_color'=>'#222222', 
	'height'=>'180',
	'width'=>'500',
	'iwidth'=>'200',
	'border'=>'0',
	'brcolor'=>'#dddddd',
	'enable_arrow'=>'0',
	'title_text'=>'',
	'title_from'=>'0',
	'pauseonhover'=>'1',
	
	't_font' => 'regular',
	'title_font'=>'Trebuchet MS,sans-serif',
	'title_fontg'=>'',
	'title_fsize'=>'18',
	'title_fstyle'=>'bold',
	'title_fcolor'=>'#3F4C6B',	
	'title_fontgw' => '',
	'title_fontgsubset' => array(),	
	'titlefont_custom' => '',
	
	'show_ptitle'=>'1',
	'pt_font'=>'regular',
	'ptfont_custom'=>'',
	'ptitle_font'=>'Arial,Helvetica,sans-serif',
	'ptitle_fontg'=>'',
	'ptitle_fontgw'=>'',
	'ptitle_fontgsubset'=> array(),
	'ptitle_fsize'=>'12',
	'ptitle_fstyle'=>'bold',
	'ptitle_fcolor'=>'#ffffff',
	
	'slide_transition'=>'',
	'slide_duration'=>'3',
	'slide_delay'=>'',
	
	'img_align'=>'none',
	'img_height'=>'180',
	'img_width'=>'200',
	'img_border'=>'0',
	'img_brcolor'=>'#D8E7EE',
	'show_content'=>'0',

	'pc_font'=>'regular',
	'pcfont_custom'=>'',
	'content_font'=>'Verdana,Geneva,sans-serif',
	'content_fontg'=>'',
	'content_fontgw'=>'',
	'content_fontgsubset'=> array(),
	'content_fsize'=>'11',
	'content_fstyle'=>'normal',
	'content_fcolor'=>'#ffffff',

	'content_from'=>'content',
	'content_chars'=>'',
	'bg'=>'0',
	'image_only'=>'0',
	'allowable_tags'=>'',
	'more'=>'',
	'img_pick'=>array('1','placid_slider_thumbnail','1','1','1','1'), //use custom field/key, name of the key, use post featured image, pick the image attachment, attachment order,scan images
	'custom_nav'=>'',
	'crop'=>'0',
	'content_limit'=>'10',
	'stylesheet'=>'default',
	'rand'=>'0',
	'ver'=>'1',
	'timthumb'=>'0',
	'fouc'=>'0',
	'donotlink'=> '0',
	'disable_mobile'=>'0',
	'preview'=>'0',
	'slider_id'=>'1',
	'catg_slug'=>'',
	'estimatedwidth'=>'200',
	'setname'=>'Set',
	'disable_preview'=>'0',
	'orientation'=>'0',
	'tot_height'=>'540',
	'a_attr'=>'',
	'fields'=>'',
	'pphoto'=>'0',
	// placid 3.0
	'frate' => '72',
	'offset' => '0',
	'lbox_type'=>'pphoto_box',
	'gencss'=>'1',
	'buttons'=>'default',
	'nav_w'=>'20',
	'nav_h'=>'20',
	'title_element'=>'2',
	// Added for Ecom, WooCom
	
	//sale strip	
	'enable_woosalestrip'=>'1',					
	'woo_sale_color'=>'#3DB432',
	'woo_sale_text'=>'Sale',
	'woo_sale_tcolor'=>'#ffffff',
	//regular slide price
	'enable_wooregprice'=>'1',
	'woo_font' => 'regular',
	'slide_woo_price_font' => 'Arial,Helvetica,sans-serif',
	'slide_woo_price_fontg'=> '',
	'slide_woo_price_fontgw'=> '',
	'slide_woo_price_fontgsubset'=> array(),
	'slide_woo_price_custom'=> '',
	'slide_woo_price_fcolor'=>'#ffffff',
	'slide_woo_price_fsize'=>'12',
	'slide_woo_price_fstyle'=> 'normal',
	//sale slide price
	'enable_woosprice'=>'1',
	'woosale_font'=> 'regular',
	'slide_woo_saleprice_font' => 'Arial,Helvetica,sans-serif',
	'slide_woo_saleprice_fontg'=> '',
	'slide_woo_saleprice_fontgw'=> '',
	'slide_woo_saleprice_fontgsubset'=> array(),
	'slide_woo_saleprice_custom'=> '',
	'slide_woo_saleprice_fcolor'=>'#eeee22',
	'slide_woo_saleprice_fsize'=>'16',
	'slide_woo_saleprice_fstyle'=> 'normal',
	//sale slide category
	'enable_woocat'=>'1',
	'woocat_font' => 'regular',
	'slide_woo_cat_font'=> 'Arial,Helvetica,sans-serif',
	'slide_woo_cat_fontg'=> '',
	'slide_woo_cat_fontgw'=> '',
	'slide_woo_cat_fontgsubset'=> array(),
	'slide_woo_cat_custom' => '',
	'slide_woo_cat_fcolor'=>'#ffffff',
	'slide_woo_cat_fsize'=>'14',
	'slide_woo_cat_fstyle'=> 'normal',

	 
	'enable_woostar'=>'1',	
	'nav_woo_star'=> 'yellow',
	'woo_type'=> '0',
	'product_id'=>'',
	'ecom_type'=>'0',
	'event_type'=> '0',
	'eventcal_type'=> '0', 
	'product_woocatg_slug'=>'',
	'product_ecomcatg_slug'=>'',
	'events_mancatg_slug'=>'',
	'events_mantag_slug'=>'',
	'events_calcatg_slug'=>'',
	'events_caltag_slug'=>'',
	// events manager
	'enable_eventdecr'=> '1',
	'enable_eventdt'=>'1',
	'enable_eventadd'=>'1',
	'enable_eventcat'=>'1',
	'eventmd_font' => 'regular', 
	'slide_eventm_font'=> 'Arial,Helvetica,sans-serif',
	'slide_eventm_fontg'=> '',
	'slide_eventm_fontgw'=> '',
	'slide_eventm_fontgsubset'=> array(),
	'slide_eventm_custom'=> '',
	'slide_eventm_fcolor'=>'#ffffff',
	'slide_eventm_fsize'=>'12',
	'slide_eventm_fstyle'=> 'normal',
	'event_addr_font'=> 'regular',
	'eventm_addr_font'=> 'Arial,Helvetica,sans-serif',
	'eventm_addr_fontg'=> '',
	'eventm_addr_fontgw'=> '',
	'eventm_addr_fontgsubset'=> array(),
	'eventm_addr_custom'=> '',
	'eventm_addr_fcolor'=>'#ffffff',
	'eventm_addr_fsize'=>'12',
	'eventm_addr_fstyle'=> 'normal', 
	'event_cat_font'=> 'regular',
	'eventm_cat_font'=> 'Arial,Helvetica,sans-serif',
	'eventm_cat_fontg'=> '',
	'eventm_cat_fontgw'=> '',
	'eventm_cat_fontgsubset'=> array(),
	'eventm_cat_custom'=> '',
	'eventm_cat_fcolor'=>'#ffffff',
	'eventm_cat_fsize'=>'12',
	'eventm_cat_fstyle'=> 'normal',
	'new'=>'1',
	'climit'=>'0',
	'popup'=>'1',
	'direction'=>'0',
	'coloronhover'=>'0',
	'disable_slider'=>'0',
	'ptext_width'=>'',
	'image_title_text'=>'0',
	'active_tab' => array('active_tabidx'=>'0','closed_sections'=>''),
	'active_accordion'=>'basic',
	'repeat'=>'0',
	'space'=>'',
	'default_image'=>placid_slider_plugin_url( 'images/default_image.png' ),
	// Taxonomy
	'taxonomy_posttype'=> 'post',
	'taxonomy'=> 'category',
	'taxonomy_term'=> '',
	'taxonomy_show'=> '',
	'taxonomy_operator'=> '',
	'taxonomy_author'=> '',
	// Rss feed
	'rssfeed_id'=> '1',
	'rssfeed_feedurl'=> 'http://mashable.com/feed/',
	'rssfeed_default_image'=>placid_slider_plugin_url( 'images/default_image.png' ),
	'rssfeed_feed'=> 'rss',
	'rssfeed_order'=> '0',
	'rssfeed_content'=> '',
	'rssfeed_media'=> '1',
	//'rssfeed_title'=> 'RSS',
	'rssfeed_src'=> '',
	'rssfeed_size'=> '',
	'rssfeed_image_class'=>'',
	// post attachment
	'postattch_id'=> '',
	// NextGenGallery  
	'nextgen_gallery_id'=> '1', 
	'nextgen_anchor' => '0',
	'focusx'=>'0.33',
	'focusy'=>'0.249'
	      );
	return $default_placid_slider_settings;	      

}
function get_placid_slider_global_default_settings() {
	$default_placid_slider_global_settings = array(
		'fb_app_key' => '',
		'fb_secret' => '',
		'insta_client_id' => '',
		'flickr_app_key' => '',
		'youtube_app_id' => '',
		'px_ckey' => '',
		/*old settings*/
		'user_level' => 'edit_others_posts',
		'noscript'=> 'This page is having a slideshow that uses Javascript. Your browser either doesn\'t support Javascript or you have it turned off. To see this page as it is meant to appear please use a Javascript enabled browser.',
		'multiple_sliders' => '1',
		'enque_scripts' => '0',
		'custom_post' =>'1', 
		'editlink'=>'0', 
		'cpost_slug' => 'slidervilla',
		'remove_metabox'=>array(),
		'css'=>'',
		'support'=>'1'
	);
	return $default_placid_slider_global_settings;
}
function populate_placid_current( $placid_slider_curr ) {
	$default_placid_slider_settings=get_placid_slider_default_settings();
	foreach($default_placid_slider_settings as $key=>$value){
		if(!isset($placid_slider_curr[$key])) $placid_slider_curr[$key]='';
	}
	return $placid_slider_curr;
}
function placid_get_image_sizes( $name, $crop, $size='' ) {

        global $_wp_additional_image_sizes;

        $sizes = array();
        $get_intermediate_image_sizes = get_intermediate_image_sizes();

        // Create the full array with sizes and crop info
        foreach( $get_intermediate_image_sizes as $_size ) {

                if ( in_array( $_size, array( 'thumbnail', 'medium', 'large' ) ) ) {

                        $sizes[ $_size ]['width'] = get_option( $_size . '_size_w' );
                        $sizes[ $_size ]['height'] = get_option( $_size . '_size_h' );
                        $sizes[ $_size ]['crop'] = (bool) get_option( $_size . '_crop' );

                } elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {

                        $sizes[ $_size ] = array( 
                                'width' => $_wp_additional_image_sizes[ $_size ]['width'],
                                'height' => $_wp_additional_image_sizes[ $_size ]['height'],
                                'crop' =>  $_wp_additional_image_sizes[ $_size ]['crop']
                        );

                }

        }
        
         // Get only 1 size if found
        if ( $size ) {

                if( isset( $sizes[ $size ] ) ) {
                        return $sizes[ $size ];
                } else {
                        return false;
                }

        }
        
        $option_sizes = '<select name="'.$name.'" id="placid_slider_crop" >
       	 	<option value="full" '.selected("full",$crop,false).'>Full</option>';
		foreach( $sizes as $key=>$val) {
			$option_sizes .= '<option value="'.$key.'" '.selected($key,$crop,false).'>'.$key.'('.$val['width'].'x'.$val['height'].')</option>';
		}
	$option_sizes .= '</select>';
        return $option_sizes;
}
?>
