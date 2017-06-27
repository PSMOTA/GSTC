<?php
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
$html='
<!-- rssfeed -->
<tr valign="top" class="rssfeed">
	<td scope="row">
		<label for="feedurl">'.__('Feedurl','placid-slider').'</label></td> 
	<td>
		<input type="text" name="feedurl" />
	</td>
</tr>
';
print($html);
?>
