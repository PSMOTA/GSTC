<?php // This function displays the page content for the Placid Slider Options submenu
function placid_slider_create_multiple_sliders() {
global $placid_slider;
?>
<div class="wrap" id="placid_sliders_create" style="clear:both;">
<div>
<h2 class="top_heading_eb"><i class="fa fa-th-list" title="Go to Manage Slider"></i> <?php _e('Manage Sliders','placid-slider'); ?>
<div class="placid_menu wrap">
	<a class="add-new-h2" href="<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-admin' ) ).'&act=create';?>" ><?php _e('Create New Slider','placid-slider'); ?></a>
	<a class="add-new-h2" href="<?php echo placid_sslider_admin_url( array( 'page' => 'placid-slider-settings' ) );?>"><?php _e('Settings','placid-slider'); ?></a>
	<a class="add-new-h2" href="http://support.slidervilla.com/" target="_blank" ><?php _e('Forum','placid-slider'); ?></a>
	<a class="add-new-h2" href="http://guides.slidervilla.com/placid-slider/" target="_blank" ><?php _e('Docs','placid-slider'); ?></a>
</div></h2>
</div>
<?php 
if ( isset($_GET['delid'] ) ) {
global $wpdb, $table_prefix;
$slider_meta = $table_prefix.PLACID_SLIDER_META;
	if(isset($_GET['delid'])) {	
		$where = "slider_id =".$_GET['delid'];	
		$sql = "DELETE FROM $slider_meta WHERE $where";
		$wpdb->query($sql);
	}
}

//Fetch All Created Slider
global $wpdb,$table_prefix;
$slider_meta = $table_prefix.PLACID_SLIDER_META;
$sql = "SELECT * FROM $slider_meta ORDER BY slider_id DESC"; 
$result = $wpdb->get_results($sql);
?>
<div class='placid_sliders'>
<table id="placid-manage-slider" class="widefat display no-wrap dataTable" >
	<thead>
	<tr class="even">
		<th class="sliderid-column"><?php _e('ID','placid-slider'); ?></th>
		<th class="slidername-column" ><?php _e('Name','placid-slider'); ?></th>
		<th><?php _e('Slider Type','placid-slider'); ?></th>
		<th><?php _e('Shortcode','placid-slider'); ?></th>
		<th><?php _e('Template Tag','placid-slider'); ?></th>
	</tr>
	</thead>
	<tfoot>
	<tr class="even">
		<th class="sliderid-column"><?php _e('ID','placid-slider'); ?></th>
		<th class="slidername-column"><?php _e('Name','placid-slider'); ?></th>
		<th><?php _e('Slider Type','placid-slider'); ?></th>
		<th><?php _e('Shortcode','placid-slider'); ?></th>
		<th><?php _e('Template Tag','placid-slider'); ?></th>
	</tr>
	</tfoot>
	<?php $class = '';
	foreach($result as $res) {  ?> 
	<?php $class = ('alternate' != $class) ? 'alternate' : ''; ?>
		<tr>
			<td><?php echo $res->slider_id;?></td>
			<td>
				<?php 
				echo $res->slider_name;
				$url = placid_sslider_admin_url( array( 'page' => 'placid-slider-easy-builder' ) ).'&id='.$res->slider_id;
				$adminurl = placid_sslider_admin_url( array( 'page' => 'manage-placid-slider' ) ).'&delid='.$res->slider_id;
				?>

				<div class="slider_action plugins"><a href="<?php echo $url;?>"><?php _e('Edit','placid-slider'); ?></a> | <a class="delete" href="<?php echo $adminurl;?>" onclick="return confirmSliderDelete()" name="<?php _e('delete_slider','placid-slider'); ?>" >Delete</a>
				</div>

			</td>
			<?php
			if( $res->type == 0 ) $type = "Custom";
			if( $res->type == 1 ) $type = "Category";
			if( $res->type == 2 ) $type = "Recent Posts";
			if( $res->type == 3 ) $type = "WooCommerce";
			if( $res->type == 4 ) $type = "eCommerce";
			if( $res->type == 5 ) $type = "Event Manager";
			if( $res->type == 6 ) $type = "Event Calendar";
			if( $res->type == 7 ) $type = "Taxonomy";
			if( $res->type == 8 ) $type = "RSS Feed";
			if( $res->type == 9 ) $type = "Post Attachment";
			if( $res->type == 10 ) $type = "NextGen Gallery";
			if( $res->type == 11 ) $type = "YouTube Playlist";
			if( $res->type == 12 ) $type = "YouTube Search";
			if( $res->type == 13 ) $type = "Vimeo";
			if( $res->type == 14 ) $type = "Facebook";
			if( $res->type == 15 ) $type = "Instagram";
			if( $res->type == 16 ) $type = "Flickr";
			if( $res->type == 17 ) $type = "Image";
			if( $res->type == 18 ) $type = "500PX";
			?>
			<td><?php echo $type;?></td>
			<td> <?php echo "[placidslider id='".$res->slider_id."']";?></td>
			<td><?php echo '&lt;?php if ( function_exists( "get_placid_slider" ) ) { get_placid_slider($slider_id="'.$res->slider_id.'"); } ?&gt;'; ?></td>
		</tr> 
	<?php } ?>
</table>
</div>

</div> <!--end of float wrap -->
<?php	
}
?>
