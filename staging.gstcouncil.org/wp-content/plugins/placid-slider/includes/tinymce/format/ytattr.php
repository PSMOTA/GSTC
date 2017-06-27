<?php 
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');

$html='
<tr valign="top" >
	<td scope="row">
		<label for="type">'.__('Select type','placid-slider').'</label>
	</td> 
	<td>
		<div class="styled-select">
			<select name="type" class="youtube-type ps-form-input" >
				<option value="playlist">Playlist</option>
				<option value="search">Search</option>
			</select>
		</div>
	</td>
</tr>

<tr valign="top">
	<td scope="row">
		<label for="val" id="youtube-lb">'.__('Playlist ID','placid-slider').'</label></td> 
	<td>
		<input type="text" name="val" class="ps-form-input" />
	</td>
</tr>
';
print($html);
?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery(".youtube-type").change(function() {
		var val = jQuery(this).val();
		if(val == "playlist") {
			jQuery("#youtube-lb").text("Playlist ID");
		} else if(val == "search") {
			jQuery("#youtube-lb").text("Search Term");
		} 
	});
});
</script>
