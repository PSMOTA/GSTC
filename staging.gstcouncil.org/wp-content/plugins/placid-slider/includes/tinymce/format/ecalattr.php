<?php 
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
	$eventcalterms = get_terms('tribe_events_cat');
	$eventcal_html='<option value="" selected >Select the Category</option>';
	foreach( $eventcalterms as $eventcalcat) {
		$eventcal_html =$eventcal_html.'<option value="'.$eventcalcat->slug.'" >'.$eventcalcat->name.'</option>';
	}
	$evcaltags = get_terms("post_tag");
	$evcaltag_html='<option value="" selected >All Tags</option>';
	foreach( $evcaltags as $tags) {
		$evcaltag_html = $evcaltag_html.'<option value="'.$tags->slug.'">'.$tags->name.'</option>';
	} 

$html='
<tr valign="top" id="ecal-slider-type" onchange="ecalcheck();" >
<td scope="row">
	<label for="type">'.__('Slide type','placid-slider').'</label>
</td> 
<td>
	<div class="styled-select">
		<select name="type" >
			<option value="upcoming" >'. __('Future Events','placid-slider').'</option>
			<option value="past" >'. __('Past Events','placid-slider').'</option>
			<option value="all" >'. __('Recent Events','placid-slider').'</option>
		</select>
	</div>
</td>
</tr>
<tr valign="top">
	<td scope="row">
		<label for="term">'.__('category','placid-slider').'</label></td> 
	<td>
		<select id="placid_slider_ecalcatslug" class="placid-multiselect" multiple>'.$eventcal_html.'</select>
		<input type="hidden" name="term" value="" />
		
	</td>
</tr>
<tr valign="top">
	<td scope="row">
		<label for="tags">'.__('category','placid-slider').'</label></td> 
	<td>
		<select class="placid-multiselect" multiple >'.$evcaltag_html.'</select>
		<input type="hidden" name="tags" value="" />
	</td>
</tr>
<tr valign="top">
	<td scope="row">
		<label for="slider">'.__('Taxonomy(Read only)','placid-slider').'</label></td> 
	<td>
		<input type="text" name="taxonomy" value="tribe_events_cat" readonly/>
	</td>
</tr>
';
print($html);
?>