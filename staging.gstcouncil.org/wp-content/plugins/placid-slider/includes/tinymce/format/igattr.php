<?php 
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
$html='
<tr valign="top" >
	<td scope="row">
		<label for="username">'.__('User Name','placid-slider').'</label>
	</td> 
	<td>
		<input type="text" name="username" id="user-name" class="ps-form-input" />
	</td>
</tr>
';
print($html);
?>
