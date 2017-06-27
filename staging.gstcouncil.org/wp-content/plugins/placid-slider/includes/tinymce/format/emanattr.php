<?php 
require_once( dirname ( dirname( dirname(__FILE__) ) ). '/placid-config.php');
	$eventterms = get_terms('event-categories');
	$eventcat_html='<option value="" selected >Select the Category</option>';
	foreach( $eventterms as $eventcategory) {
		$eventcat_html =$eventcat_html.'<option value="'.$eventcategory->slug.'" >'.$eventcategory->name.'</option>';
	} 
	$evtags = get_terms("event-tags");
	$evtag_html='<option value="" selected >All Tags</option>';
	foreach( $evtags as $tags) {
		$evtag_html = $evtag_html.'<option value="'.$tags->slug.'">'.$tags->name.'</option>';
	} 

$html='
<tr valign="top" id="eman-slider-type" >
<td scope="row">
<label for="scope">'.__('Slider Scope','placid-slider').'</label>
</td> 
<td>
	<div class="styled-select">
		<select name="scope" >
			<option value="future" >'. __('Future Events','placid-slider').'</option>
			<option value="past" >'. __('Past Events','placid-slider').'</option>
			<option value="all" >'. __('Recent Events','placid-slider').'</option>
		</select>
	</div>
</td>
</tr>

<tr valign="top">
	<td scope="row">
		<label for="term">'.__('Category','placid-slider').'</label></td> 
	<td>
		<select class="placid-multiselect" multiple >'.$eventcat_html.'</select>
		<input type="hidden" name="term" value="" />
	</td>
</tr>

<tr valign="top">
	<td scope="row">
		<label for="tags">'.__('Tags','placid-slider').'</label></td> 
	<td>
		<select class="placid-multiselect" multiple >'.$evtag_html.'</select>
		<input type="hidden" name="tags" value="" />
	</td>
</tr>
<tr valign="top" >
	<td scope="row">
		<label for="slider">'.__('Taxonomy(Read only)','placid-slider').'</label></td> 
	<td>
		<input type="text" name="taxonomy" value="event-categories" readonly/>
	</td>
</tr>
';
print($html);
?>
