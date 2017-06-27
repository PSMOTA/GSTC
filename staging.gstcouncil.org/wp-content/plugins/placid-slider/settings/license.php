<?php
function placid_slider_license(){
$placid_license_key=get_option('placid_license_key');
?>
<div class="wrap" style="clear:both;">
<h2><?php _e('License','placid-slider'); ?> </h2>
<form method="post" action="options.php" id="placid_slider_form"> <?php settings_fields('placid-slider-license-info'); ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row"><?php _e('License Key','placid-slider'); ?></th>
			<td><input type="text" name="placid_license_key" id="placid_license_key" class="regular-text code" value="<?php echo $placid_license_key; ?>" />
				<div>
					<?php _e('Enter the License Key which you would have received on ','placid-slider');
					echo '<a href="http://support.slidervilla.com/my-downloads/" target="_blank">';_e('My Downloads Area','placid-slider');echo '</a>';?>
				</div>
			</td>
		</tr>
	</table>
	<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
</form>	
</div>
<?php
}
function placid_license_notice() {  
$placid_license_key=get_option('placid_license_key');
	if ( isset($_GET['page']) && ('placid-slider-admin' == $_GET['page'] or 'placid-slider-settings' == $_GET['page']) && empty($placid_license_key) ){
	?>
		<div class="error">
			<p><?php _e( 'Enter the License Key for Placid Slider on ', 'placid-slider' ); echo '<a href="'.placid_sslider_admin_url( array( 'page' => 'placid-slider-license-key' ) ).'">';_e('this page','placid-slider');echo '</a>';?></p>
		</div>
	<?php
	}
}
add_action( 'admin_notices', 'placid_license_notice' );
if ( is_admin() ){ // admin actions
	add_action( 'admin_init', 'register_placid_license_settings' ); 
}
function register_placid_license_settings() { // whitelist options
	register_setting( 'placid-slider-license-info', 'placid_license_key' );
}
?>
