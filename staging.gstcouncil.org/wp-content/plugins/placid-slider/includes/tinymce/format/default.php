<?php
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
$html = '<div class="sv-qt-title">
	'.__('Embed Already Built Slider','placid-slider').'
</div>';

//Fetch All Created Slider
global $wpdb,$table_prefix;
$slider_meta = $table_prefix.PLACID_SLIDER_META;
$sql = "SELECT * FROM $slider_meta ORDER BY slider_id DESC";
$result = $wpdb->get_results($sql);	
foreach($result as $res) {
	$html .= '<div class="sv-created-slider">';
	$shortcode = "[placidslider id='$res->slider_id']";
	$html .= '<input type="submit" value="'.$shortcode.'" class="sv-created-slideri" onClick="insertPlacidShortcode({createdSlider:1,shortCode:this.value});" / >';
	$html .= '<span class="sv-slideri-title">'.$res->slider_name.'</span>';
	$html .= '</div>';
}
// Setting Set Select Option
$scounter=get_option('placid_slider_scounter');
for($i=1;$i<=$scounter;$i++) {
	if ($i==1){
		$setting_html='<option value="'.$i.'" selected >'.__('Default Settings Set','placid-slider').'</option>';
	}
	else {
		if($settings_set=get_option('placid_slider_options'.$i)){
			$setting_html=$setting_html.'<option value="'.$i.'">'.$settings_set['setname'].' (ID '.$i.')</option>';
		}
	}
}
//category slug Select Option
$categories = get_categories();
$scat_html='<option value="" selected >Select the Category</option>';
foreach ($categories as $category) { 
	$scat_html =$scat_html.'<option value="'.$category->slug.'" >'. $category->name .'</option>';
} 

// Slider Name Select Option
$gplacid_slider = get_option('placid_slider_global_options');

$sliders = placid_ss_get_sliders();
$sname_html='<option value="" selected >Select the Slider</option>';
	
  foreach ($sliders as $slider) {
	if($slider['slider_id'] != 0 ) {
		$sname_html =$sname_html.'<option value="'.$slider['slider_id'].'" >'.$slider['slider_name'].'</option>';
	}
  } 

// YouTube Slider Key Check
$youtube_key = isset($gplacid_slider['youtube_app_id'])?$gplacid_slider['youtube_app_id']:'';
// Facebook Slider Key Check
$fbkey = isset($gplacid_slider['fb_app_key'])?$gplacid_slider['fb_app_key']:'';
// Instagram Slider Key Check
$igkey = isset($gplacid_slider['insta_client_id'])?$gplacid_slider['insta_client_id']:'';
// Flickr Slider Key Check
$flkey = isset($gplacid_slider['flickr_app_key'])?$gplacid_slider['flickr_app_key']:'';
// 500px Slider Key Check
$pxkey = isset($gplacid_slider['px_ckey'])?$gplacid_slider['px_ckey']:'';

$html .= '<div style="clear:left;"></div>

<div class="sv-qt-title">
	'.__('Build and Embed the Slider','placid-slider').'
</div>
<table class="form-table sv-build-slider" >
<tr valign="top" > <!--  -->
<td scope="row">
	<label for="slider-type">'.__('Slider Type','placid-slider').'</label>
<td>
	<div class="styled-select">
		<select name="slider_type" id="slider-type">
			<option value="placidrecent" >'.__('Recent Placid Slider','placid-slider').'</option>
			<option value="placidcategory" >'.__('Category Placid Slider','placid-slider').'</option>
			<option value="placidslider" >'.__('Custom Slider with Slider ID','placid-slider').'</option>
			<option value="placidwoocommerce" >'.__('Woo Commerce Slider','placid-slider').'</option>
			<option value="placidtaxonomy" >'.__('eCommerce Slider','placid-slider').'</option>
			<option value="placidevent" >'.__('Event Manager','placid-slider').'</option>
			<option value="placidcalendar" >'.__('Event Calendar','placid-slider').'</option>
			<option value="placidtaxonomy" >'.__('Taxonomy Slider','placid-slider').'</option>
			<option value="placidfeed" >'.__('RSS feed Slider','placid-slider').'</option>
			<option value="placidattachments" >'.__('Post Attachments Slider','placid-slider').'</option>
			<option value="placidngg" >'.__('NextGenGallery Slider','placid-slider').'</option>
			<option value="placidfacebook" >'.__('Facebook Album Slider','placid-slider').'</option>
			<option value="placidflickr" >'.__('Flickr Album Slider','placid-slider').'</option>
			<option value="placidinstagram" >'.__('Instagram Slider','placid-slider').'</option>
			<option value="placid500px" >'.__('500PX Slider','placid-slider').'</option>
			<option value="placidyoutube" >'.__('Youtube Slider','placid-slider').'</option>
			<option value="placidvimeo" >'.__('Vimeo Slider','placid-slider').'</option>
		</select>
	</div>
</td>
</tr>
<tr valign="top">
	<td scope="row">
		<label for="set">'.__('Setting Set','placid-slider').'</label>
	</td> 
	<td>
		<div class="styled-select">
			<select name="set" class="placid_set">'.$setting_html.'</select>
		</div>
	</td>
</tr>
<tr valign="top">
	<td scope="row">
		<label for="offset">'.__('Offset','placid-slider').'</label></td> 
	<td>
		<input type="number" name="offset" style="max-width:60px;" />
	</td>
</tr>
<tr valign="top" id="slider_name" style="display:none;">
	<td scope="row">
		<label for="id">'.__('Slider','placid-slider').'</label>
	</td> 
	<td>
		<div class="styled-select">
			<select id="placid_slider_id" name="id" class="placid_sid">'.$sname_html.'</select>
		</div>
	</td>
</tr>
<tr valign="top" id="cat_slug" style="display:none;">
	<td scope="row">
		<label for="catg_slug">'.__('Category','placid-slider').'</label></td> 
	<td>
		<div class="styled-select">
			<select name="catg_slug" id="placid_slider_catslug" class="placid-catslug" ><'.$scat_html .'</select>
		</div>
	</td>
</tr>
</table>
<div class="sv-slider-error"> </div>
<table class="form-table sv-build-slider" id="slider-atts">
</table>
<div class="mceActionPanel">
	<div>
		<input type="submit" class="button-primary" id="insert" name="insert" value="'.__('Insert','placid-slider').'" onClick="insertPlacidShortcode();" />
	</div>
</div>';
print($html);
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#slider-type").change(function() { 
		jQuery("#slider-atts").empty();
		jQuery(".sv-slider-error").text('');
		jQuery("input[name='insert']").show();
		var sliderindex = jQuery("#slider-type option:selected").index();
		if( sliderindex == "1" ) { 
			jQuery("#cat_slug").css({"display":"table-row"});
			jQuery("#slider_name").css({"display":"none"});
		}
		else if( sliderindex == "2" ) {
			jQuery("#slider_name").css({"display":"table-row"});
			jQuery("#cat_slug").css({"display":"none"});
		}
		else if( sliderindex == "3" ) {
			var shop_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/wooattr.php"); ?>';
			<?php if(is_plugin_active('woocommerce/woocommerce.php')) { ?>
				var cntx = jQuery(".sv-build-slider"); 
				jQuery("#slider-atts").load(shop_attr, function() { bindMultiBehaviors(cntx); });
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				jQuery(".sv-slider-error").text("Install and activate the WooCommerce Plugin to use this shortcode").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "4" ) {
			var ecom_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/ecomattr.php"); ?>';
			<?php if(is_plugin_active('wp-e-commerce/wp-shopping-cart.php')) { ?>
				jQuery("#slider-atts").load(ecom_attr);	
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				jQuery(".sv-slider-error").text("Install and activate the WP e-Commerce Plugin to use this shortcode").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "5" ) {
			var eman_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/emanattr.php"); ?>';
			<?php if(is_plugin_active('events-manager/events-manager.php')) { ?>
				var cntx = jQuery(".sv-build-slider"); 
				jQuery("#slider-atts").load(eman_attr, function() { bindMultiBehaviors(cntx); });	
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				jQuery(".sv-slider-error").text("Install and activate the Event Manager Plugin to use this shortcode").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "6" ) {
			var ecal_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/ecalattr.php"); ?>';
			<?php if(is_plugin_active('the-events-calendar/the-events-calendar.php')) { ?>
				var cntx = jQuery(".sv-build-slider"); 
				jQuery("#slider-atts").load(ecal_attr, function() { bindMultiBehaviors(cntx); });	
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				jQuery(".sv-slider-error").text("Install and activate the Event Calendar Plugin to use this shortcode").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "7" ) {
			var cntx = jQuery(".sv-build-slider"); 
			var tax_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/taxattr.php"); ?>';
			jQuery("#slider-atts").load(tax_attr, function() { bindMultiBehaviors(cntx); });
			jQuery("#slider_name").css({"display":"none"});
			jQuery("#cat_slug").css({"display":"none"});
		}
		else if( sliderindex == "8" ) {
			var rss_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/rssattr.php"); ?>';
			jQuery("#slider-atts").load(rss_attr);
			jQuery("#slider_name").css({"display":"none"});
			jQuery("#cat_slug").css({"display":"none"});
		}
		else if( sliderindex == "9" ) {
			var post_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/postattr.php"); ?>';
			jQuery("#slider-atts").load(post_attr);
			jQuery("#slider_name").css({"display":"none"});
			jQuery("#cat_slug").css({"display":"none"});
		}
		else if( sliderindex == "10" ) {
			var ngg_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/nggattr.php"); ?>';
			<?php if(is_plugin_active('nextgen-gallery/nggallery.php')) { ?>
				jQuery("#slider-atts").load(ngg_attr);
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				jQuery(".sv-slider-error").text("Install and activate the NextGen Gallery Plugin to use this shortcode!").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "11" ) {
			var fb_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/fbattr.php"); ?>';
			<?php if($fbkey != '') { ?>
				jQuery("#slider-atts").load(fb_attr);
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				var url = "<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-global-settings' ) );?>";
				jQuery(".sv-slider-error").html("<p>Add FaceBook App Key on <a href='"+url+"api-keys' class='sv-redirect' target='_blank'>Placid Slider Global Settings!</a></p>").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "12" ) {
			var flickr_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/flickrattr.php"); ?>';
			<?php if($flkey != '') { ?>
				jQuery("#slider-atts").load(flickr_attr);
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				var url = "<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-global-settings' ) );?>";
				jQuery(".sv-slider-error").html("<p>Add Flickr API Key on <a href='"+url+"api-keys' class='sv-redirect' target='_blank'>Placid Slider Global Settings!</a></p>").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "13" ) {
			var ig_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/igattr.php"); ?>';
			<?php if($igkey != '') { ?>
				jQuery("#slider-atts").load(ig_attr);
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				var url = "<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-global-settings' ) );?>";
				jQuery(".sv-slider-error").html("<p>Add Instagram Access Token on <a href='"+url+"api-keys' class='sv-redirect' target='_blank'>Placid Slider Global Settings!</a></p>").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "14" ) {
			var px_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/500pxattr.php"); ?>';
			<?php if($pxkey != '') { ?>
				jQuery("#slider-atts").load(px_attr);
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				var url = "<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-global-settings' ) );?>";
				jQuery(".sv-slider-error").html("<p>Add 500PX Consumer Key on <a href='"+url+"#api-keys' class='sv-redirect' target='_blank'>Placid Slider Global Settings!</a></p>").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "15" ) {
			var yt_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/ytattr.php"); ?>';
			
			<?php if($youtube_key != '') { ?>
				jQuery("#slider-atts").load(yt_attr);
				jQuery("#slider_name").css({"display":"none"});
				jQuery("#cat_slug").css({"display":"none"});
			<?php } else { ?>
				var url = "<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-global-settings' ) );?>";
				jQuery(".sv-slider-error").html("<p>Add YouTube API Key on <a href='"+url+"#api-keys' class='sv-redirect' target='_blank'>Placid Slider Global Settings!</a></p>").fadeIn( "slow" );
				jQuery("input[name='insert']").hide();
			<?php } ?>
		}
		else if( sliderindex == "16" ) {
			var vimeo_attr='<?php echo placid_slider_plugin_url("includes/tinymce/format/vimeoattr.php"); ?>';
			jQuery("#slider-atts").load(vimeo_attr);
			jQuery("#slider_name").css({"display":"none"});
			jQuery("#cat_slug").css({"display":"none"});
		}
		else {
			jQuery(".nextgen").css({"display":"none"});	
			jQuery("#cat_slug").css({"display":"none"});
			jQuery("#slider_name").css({"display":"none"});
		}
		jQuery(".sv-redirect").click(function(event) {
				setTimeout(function() {	
					tinyMCEPopup.close();
				}, 200);
		});
	});
	var bindMultiBehaviors = function(scope) {
		jQuery(".placid-multiselect", scope).focusout(function() { 
			var sel = jQuery(this)[0]; 
			var terms = [],opt;
			// loop through options in select list
			for (var i=0, len=sel.options.length; i<len; i++) {
				opt = sel.options[i];
				// check if selected
				if ( opt.selected ) {
					terms.push(opt.value);
				}
			}
			terms = terms.join();
			jQuery(this).next("input[type='hidden']").val(terms);
		});
		jQuery("#placid_taxonomy_posttype", scope).change(function() {
			var data = {};
			data['quicktag'] = 'true';
			data['post_type'] = jQuery(this).val();
			data['action'] = 'placid_show_taxonomy';
			data['placid_slider_pg'] = '<?php echo wp_create_nonce( "placid-slider-nonce" ); ?>';
			var ajaxurl = '<?php echo admin_url("admin-ajax.php");?>';
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".sh-taxo").html(response);
			}).always(function() {
				var cnxt=jQuery(".sh-taxo");
	   			bindMultiBehaviors(cnxt);
			});
			return false;
		});
		jQuery("#placid_taxonomy", scope).change(function() {
			var data = {};
			data['quicktag'] = 'true';
			data['taxo'] = jQuery(this).val();
			data['action'] = 'placid_show_term';
			data['placid_slider_pg'] = '<?php echo wp_create_nonce( "placid-slider-nonce" ); ?>';
			var ajaxurl = '<?php echo admin_url("admin-ajax.php");?>';
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".sh-term").fadeIn("slow");
				jQuery(".sh-term").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".sh-term");
	   			bindMultiBehaviors(cnxt);
			});
			return false;
		});
	};
});
</script>
