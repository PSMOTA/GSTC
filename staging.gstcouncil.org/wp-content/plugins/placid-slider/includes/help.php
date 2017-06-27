<?php
//Placid Slider - Contexual Help for Placid Slider Admin Pages
add_filter('contextual_help', 'placidslider_help', 10, 3);
function placidslider_help($contextual_help, $screen_id, $screen) {
	$pages = array(
		array('title' => 'Overview'),
		array('title' => 'Documentation'),
		array('title' => 'Support')
	);
	 // Sliders & Settings page only
       if ( isset($_GET['page']) && ('placid-slider-admin' == $_GET['page'] or 'placid-slider-setings' == $_GET['page']  or 'placid-slider-easy-builder' == $_GET['page']  or 'manage-placid-slider' == $_GET['page'] ) ) { 
	// Add pages
	if(!empty($pages) && is_array($pages)){
		$root_path = WP_PLUGIN_DIR.'/placid-slider/';
		foreach($pages as $item) {
			$screen->add_help_tab(array(
				'id' => sanitize_title($item['title']).'_placid',
				'title' => $item['title'],
				//'content' => file_get_contents($root_path.$item['file']),
				'callback' => 'prepare_placid_help_'.sanitize_title($item['title'])
			));
			}
		}
	}
}
/* Functions for Language Translation and show contents as per current page */
function prepare_placid_help_overview() {
	$screen = get_current_screen();
	// License
	if(strpos($screen->base, 'placid-slider-license-key') !== false) {
		echo '<p>'.__('Paste your License key in this input box to receive future updates for Placid Slider.','placid-slider').'</p>';
	} 
	// Manage Editor
	elseif(strpos($screen->base, 'manage-placid-slider') !== false) {
		echo '<p>'.__('You can perform following actions on already created sliders using this screen:','placid-slider').'</p>
		<ul>
			<li>'.__('Delete Slider','placid-slider').'</li>
			<li>'.__('Rename Slider','placid-slider').'</li>
			<li>'.__('Get Slider Embed Code','placid-slider').'</li>
			<li>'.__('Live Preview the Slider (Click on "Edit" Slider)','placid-slider').'</li>
			<li>'.__('Add Slides (Click on "Edit" Slider)','placid-slider').'</li>
			<li>'.__('Remove Slides (Click on "Edit" Slider)','placid-slider').'</li>
			<li>'.__('Reorder Slides (Click on "Edit" Slider)','placid-slider').'</li>
			<li>'.__('Change Slider Settings (Click on "Edit" Slider)','placid-slider').'</li>
			<li>'.__('Change Slider Type (Click on "Edit" Slider)','placid-slider').'</li>
		</ul>';
	}
	// Create slider
	elseif(strpos($screen->base, 'placid-slider-admin') !== false) {
		echo '<p>'.__('You can create a slider using this panel. Select one of','placid-slider').'<strong>'.__('19 Slider Types','placid-slider').'</strong>'.__(' Placid offers and follow the step by step procedure to create your slider. You can select the layout, name the slider and specify different slider parameters depending upon the type of slider you wish to create.','placid-slider').'</p>
		<p>'.__('For example, if you want to create Custom Slider, just follow the steps and finally you will be directed to a panel where you can add different type of slides (i.e. Posts/Pages/Media Images/Blank Slides etc) to your custom slider.','placid-slider').'</p>';
	} 
	// Settings page
	elseif(strpos($screen->base, 'placid-slider-settings') !== false) {
		echo '<p>'.__('You can edit each Setting Set create individually thru this panel. You can select to preview any type of slider using the selected setting set. This panel will generate type specific shortcode which will not be dependent on whether that slider is being created or not using \'Create New\' panel.','placid-slider').'</p>
<p>'.__('This is an advanced panel for those who wish to use one settings set for multiple type of sliders or show one type of slider content using different settings sets.','placid-slider').'</p>';
	}
	//Global settings
	elseif(strpos($screen->base, 'placid-slider-global-settings') !== false) {
		echo '<p>'.__('These Settings will be applied to all the Sliders Created. You can set who can add slides to the slider, you can disable Placid Slider metabox on Edit Posts or Pages etc. Also, if you wish to embed social slider or fetch social slides in Custom Slider, you will have to enter the repective API keys on this panel.','placid-slider').'</p>';
	}
	//Easy builder
	elseif(strpos($screen->base, 'placid-slider-easy-builder') !== false) {
		echo '<p>'.__('This panel is a all-in-one super panel to manage your created Slider. You can','placid-slider').'</p>
		<ul>
			<li>'.__('Live Preview the Slider','placid-slider').'</li>
			<li>'.__('Get Slider Embed Code','placid-slider').'</li>
			<li>'.__('Change Slider Settings like auto sliding, transitions, fonts, colors etc.','placid-slider').'</li>
			<li>'.__('Change Slider Type','placid-slider').'</li>
			<li>'.__('Change Slider Parameters','placid-slider').'</li>
			<li>'.__('Add Slides (for Custom/Image Slider)','placid-slider').'</li>
			<li>'.__('Remove Slides (for Custom/Image Slider)','placid-slider').'</li>
			<li>'.__('Reorder Slides (for Custom/Image Slider)','placid-slider').'</li>
		</ul>';
	}
}
function prepare_placid_help_Documentation() {
	echo '<p>'.__('Thank you for using SliderVilla Slider. Please find the detailed and updated documentation for this section and overall Placid Slider on the below guide page:','placid-slider').'</p>
<p><a href="http://guides.slidervilla.com/placid-slider/" class="button button-primary" target="_blank">'.__('Placid Slider Documentation','placid-slider').'</a></p>';
}
function prepare_placid_help_Support() {
	echo '<p>'.__('In case of any issues, you can post your support query on SliderVilla\'s dedicated support forum:','placid-slider').'</p>
<p><a href="http://support.slidervilla.com/" class="button" target="_blank">'.__('SliderVilla Support Forum','placid-slider').'</a></p>';
}
/* END - for Language Translation and show contents as per current page */

//Placid Slider - Contexual Help on WordPress core admin pages (Add/Edit Posts/Pages/Media)
add_action( 'admin_head-post-new.php', 'placid_help_post' );
add_action( 'admin_head-media-new.php', 'placid_help_post' );
add_action( 'admin_head-post.php', 'placid_help_post' );
function placid_help_post() {
	$gplacid_slider = get_option('placid_slider_global_options');
	$root_path = WP_PLUGIN_DIR.'/placid-slider/';
	if( function_exists( 'add_meta_box' ) ) {
	    $post_types=get_post_types(); 
		$remove_post_type_arr=( isset($gplacid_slider['remove_metabox']) ? $gplacid_slider['remove_metabox'] : '' );
		if(!isset($remove_post_type_arr) or !is_array($remove_post_type_arr) ) $remove_post_type_arr=array();
		foreach($post_types as $post_type) {
			if(!function_exists('file_get_contents')) {
				$screen = get_current_screen();
				$screen->add_help_tab(array(
					'id' => 'error',
					'title' => 'Error',
					'content' => 'This help section couldn\'t show you the documentation because your server don\'t support the "file_get_contents" function'
				));
			} else {
				$screen = get_current_screen();
				$screen->add_help_tab( array(
				'id'      => 'placid-edtposthelp',
				'title'   => __('Placid Slider', 'sfc'),
				'callback' => 'prepare_placid_help_Post'
				));
			}
		}
	}
}
/* Function for Language Translation and show contents on admin pages (Add/Edit Posts/Pages/Media) */
function prepare_placid_help_Post() {
	echo '<p><strong>'.__('Overview:','placid-slider').' </strong>'.__('You can add the current post/page/media image etc to the Slider using Placid Slider metabox. You can customize each slide properties using this metabox like should this slide link to permalink or custom url or should not link to any page, what should be transitions for wach of the slide elements and set different navigation title, navigation thumb etc.','placid-slider').'</p>
<p>'.__('Thank you for using SliderVilla Slider. Please find the detailed and updated documentation for Placid Slider on the below guide page:','placid-slider').'</p>
<p><a href="http://guides.slidervilla.com/placid-slider/" class="button button-primary" target="_blank">'.__('Placid Slider Documentation','placid-slider').'</a></p>
<p>'.__('In case of any issues, you can post your support query on the forum:','placid-slider').'</p>
<p><a href="http://support.slidervilla.com/" class="button" target="_blank">'.__('SliderVilla Support Forum','placid-slider').'</a></p>';
}
?>
