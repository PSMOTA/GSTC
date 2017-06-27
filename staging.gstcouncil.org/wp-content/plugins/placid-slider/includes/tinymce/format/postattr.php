<?php
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
$html='
<!-- post attachement-->
<tr valign="top" class="postattch">
	<td scope="row">
		<label for="id" >'.__('Post ID','placid-slider').'<div><small><i>('.__('Keep empty to pull current post\'s attachments','placid-slider').')</i></small></div></label></td> 
	<td>
		<input type="text" name="id" />
	</td>
</tr>
';
print($html);
?>
