<?php
// look up for the path
require_once( dirname( dirname(__FILE__) ) . '/placid-config.php');
// check for rights
if ( !current_user_can('edit_pages') && !current_user_can('edit_posts') ) 
	wp_die(__("You are not allowed to be here"));
global $wpdb,$wpts;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php _e('Embed Slider','placid-slider'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
	<?php wp_print_scripts('jquery');?>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/mctabs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
	<link rel="stylesheet" type="text/css" href="sv-style.css" />
	<?php do_action( 'svquicktag_js' ); ?>
	<base target="_self" />
	<?php
//	wp_enqueue_style( 'sv-quicktag', placid_slider_plugin_url('includes/tinymce/sv-style.css'),false,PLACID_SLIDER_VER, 'all');
	?>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("#slider").change(function() {
				var sliderval=jQuery("#slider").val();
				var sliderName = sliderval.replace(/\s+/g, '-').toLowerCase();
				if( sliderval ){
					var atts_file='../../../'+sliderName+'/includes/tinymce/format/default.php';
					jQuery("#content").load(atts_file);		
				}
			});
		});
	</script>
</head>
<body id="link" onLoad="tinyMCEPopup.executeOnLoad('placidSliderInit();');document.body.style.display='';document.getElementById('slider').focus();" style="display: none;margin:0;">
<?php global $slidervillaSliders;
if( count($slidervillaSliders) > 1) {
	$showSelect = 'style="display:block;"';
}
else {
	$showSelect = 'style="display:none;"';
?>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			var atts_file='format/default.php';
			jQuery("#content").load(atts_file);		
		});
	</script>
<?php
} 
?>
	<div class="sv-qt-body">
		<div class="sv-qt-content">
			<form name="svslider" id="svslider" action="#" style="font-family:'Century Gothic', 'Avant Garde', 'Trebuchet MS', sans-serif;font-size:10px;">
			<table class="form-table" id="sliders" <?php echo $showSelect;?>>
				<tr valign="top">
				<td scope="row"><label for="slider"><?php _e('Select Slider','placid-slider'); ?></label></td> 
				<td>
				<div class="styled-select">
					<select name="slider" id="slider" class="select_slider">
						<option value=""><?php _e('Select Slider','placid-slider'); ?></option>
						<?php 
						do_action( 'svquicktag_select' );
						?>
					</select>
				</div>
				</td>
				</tr>
			</table>
			<div id="content">
				
			</div>
		</form>
	</div>
	</div>
	
	
</body>
</html>
