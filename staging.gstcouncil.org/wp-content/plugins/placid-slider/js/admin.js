jQuery(function () {
  jQuery('.moreInfo').each(function () {
    // options
    var distance = 10;
    var time = 250;
    var hideDelay = 200;

    var hideDelayTimer = null;

    // tracker
    var beingShown = false;
    var shown = false;
    
    var trigger = jQuery('.trigger', this);
    var tooltip = jQuery('.tooltip', this).css('opacity', 0);
	
    // set the mouseover and mouseout on both element
    jQuery([trigger.get(0), tooltip.get(0)]).mouseover(function () {
      // stops the hide event if we move from the trigger to the tooltip element
      if (hideDelayTimer) clearTimeout(hideDelayTimer);

      // don't trigger the animation again if we're being shown, or already visible
      if (beingShown || shown) {
        return;
      } else {
        beingShown = true;

        // reset position of tooltip box
        tooltip.css({
          display: 'block' // brings the tooltip back in to view
        })

        // (we're using chaining on the tooltip) now animate it's opacity and position
        .animate({
          /*top: '-=' + distance + 'px',*/
          opacity: 1
        }, time, 'swing', function() {
          // once the animation is complete, set the tracker variables
          beingShown = false;
          shown = true;
        });
      }
    }).mouseout(function () {
      // reset the timer if we get fired again - avoids double animations
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      
      // store the timer so that it can be cleared in the mouseover if required
      hideDelayTimer = setTimeout(function () {
        hideDelayTimer = null;
        tooltip.animate({
          /*top: '-=' + distance + 'px',*/
          opacity: 0
        }, time, 'swing', function () {
          // once the animate is complete, set the tracker variables
          shown = false;
          // hide the tooltip entirely after the effect (opacity alone doesn't do the job)
          tooltip.css('display', 'none');
        });
      }, hideDelay);
    });
  });
	
/* Added for validations - Start */	
jQuery('#placid_slider_form').submit(function(event) { 
			/* Added for validations - Start */	
			var sliderType = jQuery("#placid_slider_preview").val();
			if( sliderType == 0 ) { 
				var sid=jQuery("#placid_slider_id").val();
				if(( sid == "" || sid == 0 ) && sid != undefined) {
					alert("Please Select The Slider");
					jQuery("#placid_slider_id").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_slider_id").offset().top-50}, 600);
					return false;
				}
			} if( sliderType == 1 ) { 
				var catg_slug=jQuery("#placid_slider_catslug").val();
				if( catg_slug == "" && catg_slug != undefined ) {
					alert("Select the category whose posts you want to show!"); 
					jQuery("#placid_slider_catslug").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_slider_catslug").offset().top-50}, 600);
					return false;
				}
			} if( sliderType == 3 ) { 
				var wootype = jQuery("#woo_slider_preview").val();
				if(( wootype == "upsells" || wootype == "crosssells" || wootype == "grouped") && wootype != undefined ) {
					var product_id = jQuery("#product_id").val();
					if(product_id == '') {
						alert("Please Enter the Product");
						jQuery("#products").addClass('ps-create-error');
						jQuery("html,body").animate({scrollTop:jQuery("#products").offset().top-50}, 600);
						return false;
					}
				}
			} if( sliderType == 4 ) { 
				var ecomType =jQuery("#ecom_slider_preview").val();
				if(ecomType == 1 && ecomType != undefined) {
					var catg_slug=jQuery("#placid_slider_ecom_catslug").val();
					if( catg_slug == "" ) {
						alert("Please Select The Category"); 
						jQuery("#placid_slider_ecom_catslug").addClass('ps-create-error');
						jQuery("html,body").animate({scrollTop:jQuery("#placid_slider_ecom_catslug").offset().top-50}, 600);
						return false;
					}	
				}
			} if( sliderType == 7 ) { 
				var postType =jQuery("#placid_taxonomy_posttype").val();
				if(postType == "" && postType != undefined) {
					alert("Please Select The Post Type"); 
					jQuery("#placid_taxonomy_posttype").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_taxonomy_posttype").offset().top-50}, 600);
					return false;
				}
				var taxo =jQuery("#placid_taxonomy").val();
				if(taxo == "" && taxo != undefined) {
					alert("Please Select The Taxonomy"); 
					jQuery("#placid_taxonomy").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_taxonomy").offset().top-50}, 600);
					return false;
				}
				var term =jQuery("#placid_taxonomy_term option:selected").length;
				if(term < 1) {
					alert("Please Select The Term");
					jQuery("#placid_taxonomy_term").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_taxonomy_term").offset().top-50}, 600);
					return false;
				}
			} if( sliderType == 8 ) { 
				var rssfeedurl =jQuery("#placid_rssfeed_feedurl").val();
				if( rssfeedurl == "" && rssfeedurl != undefined ) {
					alert("Please Enter the Feed Url"); 
					jQuery("#placid_rssfeed_feedurl").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_rssfeed_feedurl").offset().top-50}, 600);
					return false;
				}
			} if( sliderType == 9 ) { 
				var attachId =jQuery("#placid_postattch_id").val();
				if(( attachId == "" || attachId < 0 || isNaN(attachId) && attachId != undefined)) {
					alert("Please Enter the Post Id "); 
					jQuery("#placid_postattch_id").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_postattch_id").offset().top-50}, 600);
					return false;
				}
			} if( sliderType == 10 ) { 
				var nggId =jQuery("#placid_nextgen_galleryid").val();
				if(( nggId == "" || nggId < 0 || isNaN(nggId)) && nggId != undefined) {
					alert("Please Enter the NextGen Gallery ID"); 
					jQuery("#placid_nextgen_galleryid").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#placid_nextgen_galleryid").offset().top-50}, 600);
					return false;
				}
			}

			var speed=jQuery("#placid_slider_speed").val();
			if((speed=='' || speed <= 0 || isNaN(speed)) && speed != undefined) {
					alert("Slide Transition Speed should be a number greater than 0!"); 
					jQuery("#placid_slider_speed").addClass('error');
					jQuery("html,body").animate({scrollTop:jQuery('#placid_slider_speed').offset().top-50}, 600);
					return false;
				}
			var posts=jQuery("#placid_slider_no_posts").val();
			if((posts=='' || posts <= 0 || isNaN(posts) && posts != undefined)) {
					alert("Number of Posts in the Placid Slider should be a number greater than 0!"); 
					jQuery("#placid_slider_no_posts").addClass('error');
					jQuery("html,body").animate({scrollTop:jQuery('#placid_slider_no_posts').offset().top-50}, 600);
					return false;
				}
			var width=jQuery("#placid_slider_width").val();
			if((width=='' || width < 0 || isNaN(width)) && width != undefined) {
					alert("Maximum Slider Width should be a number greater than or equal to 0!"); 
					jQuery("#placid_slider_width").addClass('error');
					jQuery("html,body").animate({scrollTop:jQuery('#placid_slider_width').offset().top-50}, 600);
					return false;
				}
			var tot_height=jQuery("#placid_slider_tot_height").val();
			if((tot_height=='' || tot_height <= 0 || isNaN(tot_height)) && tot_height != undefined) {
					alert("Maximum Slider Height should be a number greater than 0!"); 
					jQuery("#placid_slider_tot_height").addClass('error');
					jQuery("html,body").animate({scrollTop:jQuery('#placid_slider_tot_height').offset().top-50}, 600);
					return false;
				}
			/*var iwidth=jQuery("#placid_slider_iwidth").val(); //iwidth=='' || 
			if((iwidth=='' || iwidth <= 0 || isNaN(iwidth)) && iwidth != undefined) {
					alert("Slider item Width should be a number greater than 0!"); 
					jQuery("#placid_slider_iwidth").addClass('error');
					jQuery("html,body").animate({scrollTop:jQuery('#placid_slider_iwidth').offset().top-50}, 600);
					return false;
			}*/
			var height=jQuery("#placid_slider_height").val();
			if(height != "") {
				if((height=='' || height <= 0 || isNaN(height)) && height != undefined) {
						alert("Slider Item Height should be a number greater than 0!"); 
						jQuery("#placid_slider_height").addClass('error');
						jQuery("html,body").animate({scrollTop:jQuery('#placid_slider_height').offset().top-50}, 600);
						return false;
					}
			}
			//for Quick embed shortcode popup
			var slider_id = jQuery("#placid_slider_id").val(),	
			    hiddensliderid=jQuery("#hidden_sliderid").val(),		
			    slider_catslug=jQuery("#placid_slider_catslug").val(),
			    hiddencatslug=jQuery("#hidden_category").val(),
			    prev=jQuery("#placid_slider_preview").val(),
			    hiddenpreview=jQuery("#hidden_preview").val(),
			    new_save=jQuery("#oldnew").val();
		 
			if(hiddenpreview != prev || new_save=='1' || slider_id != hiddensliderid || slider_catslug != hiddencatslug ) jQuery('#placidpopup').val("1");					
			else jQuery('#placidpopup').val("0");	
		});
		/* Added for validations - end */

		
		
// Placid 3.0
		// DataTables Call on manage Sliders page
		if(jQuery("#placid_sliders_create").hasClass("wrap")) {
			jQuery("#placid-manage-slider").DataTable({
				responsive: true
			});
		} 

// Added 3.0
jQuery(document).ready(function(){
		/* START - JQuery for AJAX Settings tab */
	// For on ready
	var pageCheck = jQuery("input[name='hidden_urlpage']").val();
	if(pageCheck != undefined) {
		var flag = '0';
		var activeIdx = jQuery( "#placid_activetab, .placid_activetab" ).val();
		jQuery(".settings-tab").removeClass("tab-active");
		jQuery(".settings-tab:eq("+activeIdx+")").addClass("tab-active");
		var cntr = jQuery("input[name='placid-hiddencntr']").val();
		var tab = jQuery(".tab-active a").attr("id");
		var settings_nonce = jQuery("#placid-settings-nonce").val();
		var data = {
			'action': 'placid_tab_contents',
			'cntr':cntr,
			'tab':tab,
			'settings_nonce':settings_nonce
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".placid-tabs-content").html(response);
		}).always( function() { 
			var cnxt=jQuery(".placid-tabs-content");
		   	bindSettingsBehaviour(cnxt);
		});
	}
	jQuery(".settings-tab a").click(function() {
		var proceed = true;
		if(flag == 1) {
			 var agree=confirm("The changes you made will be lost if you navigate away from this tab. Please Save the Settings and move on");
			if (agree)
				proceed = true ;
			else
				proceed = false ;
		}
		if(proceed == true) {
			flag = 0;
			var activeIdx = jQuery(".settings-tab a").index(this);
			jQuery( "#placid_activetab, .placid_activetab" ).val(activeIdx);
			jQuery(".settings-tab").removeClass("tab-active");
			jQuery(this).parent(".settings-tab").addClass("tab-active");
			var cntr = jQuery("input[name='placid-hiddencntr']").val();
			var tab = jQuery(this).attr("id");
			var settings_nonce = jQuery("#placid-settings-nonce").val();
			var data = {
				'action': 'placid_tab_contents',
				'cntr':cntr,
				'tab':tab,
				'settings_nonce':settings_nonce
			};
			jQuery.post(ajaxurl, data, function(response) {
				jQuery(".placid-tabs-content").html(response);
			}).always( function() { 
				var cnxt=jQuery(".placid-tabs-content");
			   	bindSettingsBehaviour(cnxt);
			});
		}
		return false;
	});
	/* Easy Bulder AJAX Settings Load */
	if(pageCheck != undefined && pageCheck == 'placid-slider-easy-builder') {
		var skin = jQuery("#placidskin").val();
		var cntr = jQuery("input[name='placid-hiddencntr']").val();
		var tab = jQuery("#placid_active_accordion").val();
		var eb_settings_nonce = jQuery("#placid-eb-settings-nonce").val();
		var data = {
			'action': 'placid_eb_settings',
			'cntr':cntr,
			'tab':tab,
			'eb_settings_nonce':eb_settings_nonce
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".placid-eb-"+tab).html(response);
		}).always( function() { 
			var cnxt=jQuery(".placid-eb-"+tab);
		   	bindSettingsBehaviour(cnxt);
		});
	}
	jQuery('.ps-right-accordion').click(function() {
		var currAccordion = jQuery(this);
		setTimeout(function() {
			if(currAccordion.hasClass("ps-right-open")) {
				var id = currAccordion.attr('id');
				jQuery("#placid_active_accordion").val(id);
			}
		}, 2000);
		var cntr = jQuery("input[name='placid-hiddencntr']").val();
		var tab = jQuery(this).attr("id");
		var eb_settings_nonce = jQuery("#placid-eb-settings-nonce").val();
		var data = {
			'action': 'placid_eb_settings',
			'cntr':cntr,
			'tab':tab,
			'eb_settings_nonce':eb_settings_nonce
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".placid-eb-"+tab).html(response);
		}).always( function() { 
			var cnxt=jQuery(".placid-eb-"+tab);
		   	bindSettingsBehaviour(cnxt);
		});
	});
	var bindSettingsBehaviour = function(scope){
	
		jQuery('#placid_slider_orientation').change(function(){
		if(jQuery(this).val() == "1"){
			jQuery("form#placid_slider_form .horz").css("display","none");
			jQuery("form#placid_slider_form .vert").fadeIn("fast");
		}
		else{
			jQuery("form#placid_slider_form .vert").css("display","none");
			jQuery("form#placid_slider_form .horz").fadeIn("fast");
		}
		});
		
	
		/* Checke fields are changed on content tab or not */
		jQuery(".placid-settings-form *").change(function() {
			flag = '1';
		});
		/* active sections - start */
		var closed_sections = jQuery("#placid_closedsections").val();
		var pluginUrl = jQuery("#placid_pluginurl").val()+'/';
		if(closed_sections != undefined) {
			var closedsecarr = closed_sections.split(",");
			 jQuery(".sub-heading").each(function () {
				if( jQuery.inArray(jQuery(this).text(),closedsecarr) != -1 ) {
					jQuery(this).addClass("closed");
					var wrap=jQuery(this).parent('.toggle_settings');
					var imgclass=wrap.find(".toggle_img");
					imgclass.attr("src", imgclass.attr("src").replace(pluginUrl+"images/close.png", pluginUrl+"images/info.png"));
				}
			});
			/* active sections - end */
			var wrap=jQuery(".closed").parent('.toggle_settings'),
			tabcontent=wrap.find("p, table.form-table, code, div.placid_generated_css, div.settingsdiv, div.yellowdiv");
			tabcontent.toggle();
		}
		/* Addede for settings tab collapse and expand - start */
		jQuery(".sub-heading", scope).on("click", function(){
			var wrap=jQuery(this).parent('.toggle_settings'),
			tabcontent=wrap.find("p, table.form-table, code, div.placid_generated_css, div.settingsdiv, div.yellowdiv");
			/* active sections - start */
			jQuery(this).toggleClass("closed");
			var sectionstr = jQuery("#placid_closedsections");
			if(jQuery(this).hasClass("closed")) {
				if(sectionstr.val() !='' ) {
					sectionstr.val(sectionstr.val()+','+jQuery(this).text());	
				} else {
					sectionstr.val(jQuery(this).text());
				}
			} else {
				var res;
				res = sectionstr.val().replace(jQuery(this).text()+",", "");
				res = res.replace(","+jQuery(this).text(), "");
				res = res.replace(jQuery(this).text(), "");
				sectionstr.val(res);
			}
			/* active sections - end */
			tabcontent.toggle();
			//jQuery(".tooltip1").css('display','none');
			var imgclass=wrap.find(".toggle_img");
			if (tabcontent.css('display') == 'none') {
				imgclass.attr("src", imgclass.attr("src").replace(pluginUrl+"images/close.png", pluginUrl+"images/info.png"));
			} else {
				imgclass.attr("src", imgclass.attr("src").replace(pluginUrl+"images/info.png", pluginUrl+"images/close.png"));
			}
		});
		/* Addede for settings tab collapse and expand - end */
		
			/**
		* -------------------------------------------------------------------------------------
		* JS for Settings Panel Preview Params AJAX Load
		* -------------------------------------------------------------------------------------
		**/
		var placid_preview = jQuery("#placid_slider_preview").val();
		if(placid_preview != undefined) {
			var placid_data = {};
			var settings_nonce = jQuery("#placid-settings-nonce").val();
			placid_data['action'] = 'placid_preview_params';
			placid_data['slider_type'] = placid_preview;
			placid_data['cntr'] = jQuery(".placid-hiddencntr").val();
			placid_data['settings_nonce'] = settings_nonce;
			jQuery.post(ajaxurl, placid_data, function(response) {
				jQuery(".placid_slider_params").html(response);
			}).always(function() {
				var cnxt=jQuery(".placid_slider_params");
				bindPreviewParams(cnxt);
			});
		} 
		jQuery("#placid_slider_preview", scope).change(function() {
			jQuery(".placid_slider_params").empty();
			jQuery(".placid_slider_params").append('<td class="ps-loader" colspan="2" style="background: url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 100px;height: 20px;margin: 15px auto;"></td>');
			var settings_nonce = jQuery("#placid-settings-nonce").val();
			var data = {};
			data['action'] = 'placid_preview_params';
			data['slider_type'] = jQuery(this).val();
			data['cntr'] = jQuery(".placid-hiddencntr").val();
			data['settings_nonce'] = settings_nonce;
			jQuery.post(ajaxurl, data, function(response) {
				jQuery(".placid_slider_params").find("ps-loader").remove();
				jQuery(".placid_slider_params").html(response);
			}).always(function() {
				var cnxt=jQuery(".placid_slider_params");
				bindPreviewParams(cnxt);
			});
			return false;
		});
		/* This function loads second level of fonts on load depending on first level of fonts - start */
		jQuery( ".main-font" ).each(function() {
			var font_type = jQuery(this).val();
			var currpage = jQuery(".placid_urlpage").val();
			var currcounter = jQuery(".placid-hiddencntr").val();
			var nm;
			if(font_type == 'regular') nm = jQuery(this).siblings(".ftype_rname").val();
			if(font_type == 'google') nm = jQuery(this).siblings(".ftype_gname").val();
			if(font_type == 'custom') nm = jQuery(this).siblings(".ftype_cname").val();
			var parentid = jQuery(this).attr('id');
			var google_fonts = jQuery("#placid-google-nonce").val();
			var data = {
				'action': 'placid_load_fontsdiv',
				'font_type': font_type,
				'parentid': parentid,
				'nm':nm,
				'currpage' : currpage,
				'currcounter' : currcounter,
				'google_fonts':google_fonts
			};
			jQuery.post(ajaxurl, data, function(response) {
				jQuery("#"+data['parentid']).parents(".settings-tbl").find(".load-fontdiv").html(response);
				if( data['font_type'] == 'google' ) {
					jQuery("#"+data['parentid']).parents(".settings-tbl").find(".font-style").css('display','none');
				}
				else {
					var fontStyle = jQuery("#"+data['parentid']).parents(".settings-tbl").find(".font-style");
					if(fontStyle.hasClass("ebs-row")) fontStyle.css('display','block');
					else fontStyle.css('display','table-row');
				}
			}).always( function() { 
				var cnxt=jQuery("#"+data['parentid']).parents(".settings-tbl").find(".load-fontdiv");
			   	bindgoogleBehaviour(cnxt);
			});
		});
		/* This function loads second level of fonts on load depending on first level of fonts - end */

		/* This function loads second level of fonts on change of first level of fonts - start */
		jQuery(".main-font").change(function(){
			var font_type = jQuery(this).val();
			var currpage = jQuery(".placid_urlpage").val();
			var currcounter = jQuery(".placid-hiddencntr").val();
			var nm;
			if(font_type == 'regular') nm = jQuery(this).siblings(".ftype_rname").val();
			if(font_type == 'google') nm = jQuery(this).siblings(".ftype_gname").val();
			if(font_type == 'custom') nm = jQuery(this).siblings(".ftype_cname").val();
			var parentid = jQuery(this).attr('id');
			var google_fonts = jQuery("#placid-google-nonce").val();
			var data = {
				'action': 'placid_load_fontsdiv',
				'font_type': font_type,
				'parentid': parentid,
				'nm':nm,
				'currpage' : currpage,
				'currcounter' : currcounter,
				'google_fonts':google_fonts
			};
			jQuery.post(ajaxurl, data, function(response) {
				jQuery("#"+data['parentid']).parents(".settings-tbl").find(".load-fontdiv").html(response);
				if( data['font_type'] == 'google' ) {
					jQuery("#"+data['parentid']).parents(".settings-tbl").find(".font-style").css('display','none');
				}
				else {
					var fontStyle = jQuery("#"+data['parentid']).parents(".settings-tbl").find(".font-style");
					if(fontStyle.hasClass("ebs-row")) fontStyle.css('display','block');
					else fontStyle.css('display','table-row');
				}
			}).always( function() { 
				var cnxt=jQuery("#"+data['parentid']).parents(".settings-tbl").find(".load-fontdiv");
			   	bindgoogleBehaviour(cnxt);
			
			});
		});
		/* This function loads second level of fonts on change of first level of fonts - end */
	
		/* Default Image Setting - Upload */
		jQuery('.placid-upload-default', scope).on("click",function(event) {
			var frame;
			event.preventDefault();
			// If the media frame already exists, reopen it.
			if ( frame ) {
				frame.open();
				return;
			}
			// Create the media frame.
			frame = wp.media({
				title: 'Upload/Select Images',
				multiple: false,
				button: {
					text: 'Set Default Image',
					close: false
				}
			});
			frame.on( 'select', function() {
				// Grab the selected attachment.
				var attachments = frame.state().get('selection').toArray();
				frame.close();
				if(attachments.length>0){
					var imgurl = attachments[0].attributes.url;
					jQuery("#default-img").attr("src",imgurl);
					jQuery("#placid_slider_default_image").val(imgurl);
				}
			});
			// Finally, open the modal.
			frame.open();
			return false;
		});
		jQuery('.placid-reset-default', scope).on("click",function() {
			var imgurl = jQuery("#default-image-url").val();
			jQuery("#default-img").attr("src",imgurl);
			jQuery("#placid_slider_default_image").val(imgurl);
			return false;
		});
		/* Show/Hide Generated CSS */
		jQuery( "#placid_gencss", scope ).change(function(){
			if(jQuery(this).prop('checked') == true ) {
		    		jQuery( "#placid_slider_gencss" ).slideDown( "slow" );
		    	}
		    	else jQuery( "#placid_slider_gencss" ).slideUp( "slow" );
		});
		// Added for gen-css settings
		var gencsscode = jQuery("#placid_slider_gencsscode").val();
		if(gencsscode == "1") {
			 jQuery( "#placid_slider_gencss" ).show();
		}
		else {
			 jQuery( "#placid_slider_gencss" ).hide();
		}
		jQuery(".eb-toggle-round").click(function() {
			if(jQuery(this).prop("checked")==true) {
				jQuery(this).prev('.hidden_check').val(1);
			} else {
				jQuery(this).prev('.hidden_check').val(0);
			}
		});		
		jQuery( ".placid_pphoto" ).change( function() {
			if(jQuery(this).prop('checked') == true ) {
		    		 jQuery( ".placid_slider_lbox_type" ).slideDown( "slow" );
		    	}
		    	else  jQuery( ".placid_slider_lbox_type" ).slideUp( "slow" );
	       });
		// Tooltip
		jQuery('.havemoreinfo', scope).hover(
			function(e) {
				jQuery(this).next('.moreInfo').find('.tooltip1').fadeIn(400);
		
			},
			function(e) {
				jQuery(this).next('.moreInfo').find('.tooltip1').fadeOut( "fast" );
		});
		/* Added for slider sub type preview on ready */
		var ecompreview=jQuery("#ecom_slider_preview").val();
		if(ecompreview=='0') {
			jQuery("#placid_slider_form .form-table .placid_ecom_catg").hide();
		}	
		else if(ecompreview=='1'){
			jQuery("#placid_slider_form .form-table .placid_ecom_catg").css("display","block");
		}

		/* Show or hide settings field as slider type changes */
		var placid_preview = jQuery("#placid_slider_preview").val();
		if(placid_preview=='3' || placid_preview=='4') {
			jQuery( "#postcontent" ).hide();
			jQuery( "#event_manager" ).hide();
			jQuery( "#placidwoo" ).show();
		}
		else if(placid_preview=='5' || placid_preview=='6') {
			jQuery( "#placidwoo" ).hide();
			jQuery( "#event_manager" ).show();
		} else {
			jQuery( "#placidwoo" ).hide();
			jQuery( "#event_manager" ).hide();
			jQuery( "#postcontent" ).show();
		}
		// for color picker
		jQuery('.wp-color-picker-field').wpColorPicker();
		jQuery(".pscrop",scope).change(function() {
			if(jQuery(".pscrop:eq(2)").prop("checked")==true) {
				jQuery('.focus_axis').show();
			} else {
				jQuery('.focus_axis').hide();
			}
		});
		jQuery("#placid_slider_focusx",scope).change(function() {
			jQuery(".currx").text("( "+jQuery(this).val()+" )");
		});
		jQuery("#placid_slider_focusy",scope).change(function() {
			jQuery(".curry").text("( "+jQuery(this).val()+" )");
		});
	};
	/* Code for Global Settings */
	jQuery(".eb-toggle-round").click(function() {
		if(jQuery(this).prop("checked")==true) {
			jQuery(this).prev('.hidden_check').val(1);
		} else {
			jQuery(this).prev('.hidden_check').val(0);
		}
	});
	/* ---------------------------------------------------------------------------
	* END - JQuery for AJAX Settings tab 
	-----------------------------------------------------------------------------*/
		/* This function loads second level of google fonts on change of first level of google fonts - start */
		var bindgoogleBehaviour = function(scope) {
			jQuery(".google-fonts", scope).change(function(){
				var font = jQuery(this).val();
				var parentid = jQuery(this).attr('id');
				var fname = jQuery(this).parents(".settings-tbl").find(".google-fw").attr('name');
				var fid = jQuery(this).parents(".settings-tbl").find(".google-fw").attr('id');
				var fsubsetnm = jQuery(this).parents(".settings-tbl").find(".google-fsubset").attr('name');
				var fsubsetid = jQuery(this).parents(".settings-tbl").find(".google-fsubset").attr('id');
				var google_fonts = jQuery("#placid-google-nonce").val();
				var data = {
					'action': 'placid_disp_gfweight',
					'font': font,
					'fname': fname,
					'fid': fid,
					'parentid': parentid,
					'fsubsetnm': fsubsetnm,
					'fsubsetid': fsubsetid,
					'google_fonts':google_fonts
				};
				jQuery.post(ajaxurl, data, function(response) {
					var res = JSON.parse(response);
					jQuery("#"+data['parentid']).parents(".settings-tbl").find(".google-fontsweight").html(res[0]);
					jQuery("#"+data['parentid']).parents(".settings-tbl").find(".google-fontsubset").html(res[1]);
				});
			});
		}
		/* This function loads second level of google fonts on change of first level of google fonts - end */
       		
       			/* Vimeo Slider */
	jQuery(".vimeo-type").change(function() {
		var val = jQuery(this).val();
		if(val == "channel") {
			jQuery("#vimeo-lb").text("Channel Name");
		} else if(val == "album") {
			jQuery("#vimeo-lb").text("ID");
		} 
	});
	var val = jQuery(".vimeo-type").val();
	if(val == "channel") {
		jQuery("#vimeo-lb").text("Channel Name");
	} else if(val == "album") {
		jQuery("#vimeo-lb").text("Album ID");
	}
	/* Flicker Slider */
	jQuery(".flickr-type").change(function() {
		var val = jQuery(this).val();
		if(val == "user") {
			jQuery("#flickr-lb").text("User ID");
		} else if(val == "album") {
			jQuery("#flickr-lb").text("Album ID");
		} 
	});
	var val = jQuery(".flickr-type").val();
	if(val == "user") {
		jQuery("#flickr-lb").text("User ID");
	} else if(val == "album") {
		jQuery("#flickr-lb").text("Album ID");
	} 
	/* Form Validations */
	jQuery('.ps-validate').submit(function(event) { 
		if(jQuery("#new_slider_name").val() == "" ) {
			alert("Please Enter the Slider Name");
			jQuery("#new_slider_name").addClass('ps-create-error');
			jQuery("html,body").animate({scrollTop:jQuery('#new_slider_name').offset().top-50}, 600);
			return false;
		}
		var offset=jQuery("input[name='offset']").val();
		if(offset < 0 || isNaN(offset)) {
			alert("Offset should be a number greater than 0!"); 
			jQuery("input[name='offset']").addClass('ps-create-error');
			jQuery("html,body").animate({scrollTop:jQuery("input[name='offset']").offset().top-50}, 600);
			return false;
		}
		var sliderType = jQuery("input[name='slider-type']").val();
		if( sliderType == 1 ) { 
			var catg_slug=jQuery("select[name='catg_slug']").val();
			if( catg_slug == "" ) {
				alert("Please Select The Category");
				jQuery("select[name='catg_slug']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("select[name='catg_slug']").offset().top-50}, 600);
				return false;
			}
		}  else if( sliderType == 3 ) { 
			var wootype = jQuery("#woo-slider-type").val();
			if( wootype == "upsells" || wootype == "crosssells" || wootype == "grouped" ) {
				var product_id = jQuery("#product_id").val();
				if(product_id == '') {
					alert("Please Enter the Product");
					jQuery("#products").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("#products").offset().top-50}, 600);
					return false;
				}
			}
		} else if( sliderType == 4 ) { 
			var ecomType =jQuery("select[name='ecom_slider_type']").val();
			if(ecomType == 1) {
				var catg_slug=jQuery("select[name='ecom-catg']").val();
				if( catg_slug == "" ) {
					alert("Please Select The Category"); 
					jQuery("select[name='ecom-catg']").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("select[name='ecom-catg']").offset().top-50}, 600);
					return false;
				}	
			}
		} else if( sliderType == 7 ) { 
			var postType =jQuery("select[name='taxo_posttype']").val();
			if(postType == "") {
				alert("Please Select The Post Type"); 
				jQuery("select[name='taxo_posttype']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("select[name='taxo_posttype']").offset().top-50}, 600);
				return false;
			}
			var taxo =jQuery("select[name='taxonomy_name']").val();
			if(taxo == "") {
				alert("Please Select The Taxonomy"); 
				jQuery("select[name='taxonomy_name']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("select[name='taxonomy_name']").offset().top-50}, 600);
				return false;
			}
			var term =jQuery("#placid_taxonomy_term option:selected").length;
			if(term < 1) {
				alert("Please Select The Term");
				jQuery("#placid_taxonomy_term").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("#placid_taxonomy_term").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 8 ) { 
			var rssfeedurl =jQuery("input[name='rssfeedurl']").val();
			if( rssfeedurl == "" ) {
				alert("Please Enter the Feed Url"); 
				jQuery("input[name='rssfeedurl']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='rssfeedurl']").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 9 ) { 
			var attachId =jQuery("input[name='postattch-id']").val();
			if( attachId == "" || attachId < 0 || isNaN(attachId)) {
				alert("Please Enter the Post Id "); 
				jQuery("input[name='postattch-id']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='postattch-id']").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 10 ) { 
			var nggId =jQuery("select[name='nextgen-id']").val();
			if( nggId == "" || nggId < 0 || isNaN(nggId)) {
				alert("Please Enter the NextGen Gallery ID"); 
				jQuery("select[name='nextgen-id']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("select[name='nextgen-id']").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 11 ) { 
			var ytID =jQuery("input[name='yt-playlist-id']").val();
			if( ytID == "" ) {
				alert("Please Enter the Playlist ID");
				jQuery("input[name='yt-playlist-id']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='yt-playlist-id']").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 12 ) { 
			var ytTerm =jQuery("input[name='yt-search-term']").val();
			if( ytTerm == "" ) {
				alert("Please Enter the Search Term");
				jQuery("input[name='yt-search-term']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='yt-search-term']").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 13 ) { 
			var vimeoVal =jQuery("input[name='vimeo-val']").val();
			var vimeoType =jQuery("select[name='vimeo-type']").val();
			if( vimeoVal == "" ) {
				if(vimeoType == "channel" ) var msg = "Please Enter the Channel Name";
				else  var msg = "Please Enter the Album ID";
				alert(msg); 
				jQuery("input[name='vimeo-val']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='vimeo-val']").offset().top-50}, 600);
				return false;
			}
		}  else if( sliderType == 14 ) { 
			var fbUrl =jQuery("input[name='fb-pg-url']").val();
			var fbAlbum =jQuery("select[name='fb-album']").val();
			if( fbUrl == "" ) {
				alert("Please Enter the Page Url and Click on Connect Button"); 
				jQuery("input[name='fb-pg-url']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='fb-pg-url']").offset().top-50}, 600);
				return false;
			} 
			else if( fbAlbum == undefined ) {
				alert("Please Click on Connect Button and Select Album");
				return false; 
			}
		} else if( sliderType == 15 ) { 
			var userName =jQuery("input[name='user-name']").val();
			if( userName == "" ) {
				alert("Please Enter the User Name"); 
				jQuery("input[name='user-name']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='user-name']").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 16 ) { 
			var flId =jQuery("input[name='fl-id']").val();
			var flType =jQuery("select[name='flickr-type']").val();
			if( flId == "" ) {
				if(flType =="album") var msg = "Please Enter the Album ID";
				else  var msg = "Please Enter the User ID";
				alert(msg); 
				jQuery("input[name='fl-id']").addClass('ps-create-error');
				jQuery("html,body").animate({scrollTop:jQuery("input[name='fl-id']").offset().top-50}, 600);
				return false;
			}
		} else if( sliderType == 18 ) { 
			var feature =jQuery("select[name='feature']").val();
			if( feature == "user" || feature == "user_favorites" ) {
				var pxuser =jQuery("input[name='pxuser']").val();
				if(feature == "user" ) var msg = "Please Enter the User Name";
				else  var msg = "Please Enter the User Favorites Name";
				if(pxuser == "") {
					alert(msg); 
					jQuery("input[name='pxuser']").addClass('ps-create-error');
					jQuery("html,body").animate({scrollTop:jQuery("input[name='pxuser']").offset().top-50}, 600);
					return false;
				}
			}
		}
	
	});
	/* END - Form Validation */	
		 
	/* Taxonomyy Addon */
	var bindTaxBehaviors = function(scope) {
		jQuery("#placid_taxonomy",scope).change(function() { 
			var placid_slider_pg = jQuery("#placid-slider-nonce").val();
			var data = {};
			if(jQuery(this).hasClass("taxo-update") == true)
			data['update'] = 'true';
			data['preview'] = '';
			data['taxo'] = jQuery(this).val();
			data['action'] = 'placid_show_term';
			data['placid_slider_pg'] = placid_slider_pg;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".sh-term").fadeIn("slow");
				jQuery(".sh-term").html(response);
			});
			return false;
		});
	} 
	jQuery("#placid_taxonomy_posttype").change(function() {
		var placid_slider_pg = jQuery("#placid-slider-nonce").val();
		var data = {};
		if(jQuery(this).hasClass("taxo-update") == true)
		data['update'] = 'true';
		data['post_type'] = jQuery(this).val();
		data['action'] = 'placid_show_taxonomy';
		data['placid_slider_pg']=placid_slider_pg;
		jQuery.post(ajaxurl, data, function(response) { 
			jQuery(".sh-taxo").html(response);
		}).always(function() {
			var cnxt=jQuery(".sh-taxo");
		   	bindTaxBehaviors(cnxt);
		});
		return false;
	});
	jQuery("#placid_taxonomy").change(function() {
		var placid_slider_pg = jQuery("#placid-slider-nonce").val();
		var data = {};
		if(jQuery(this).hasClass("taxo-update") == true)
		data['update'] = 'true';
		data['preview'] = '';
		data['taxo'] = jQuery(this).val();
		data['action'] = 'placid_show_term';
		data['placid_slider_pg'] = placid_slider_pg;
		jQuery.post(ajaxurl, data, function(response) { 
			jQuery(".sh-term").fadeIn("slow");
			jQuery(".sh-term").html(response);
		});
		return false;
	});
	/* Autocomplete JS for WooCommerce Slider */
	if(jQuery(".ps-validate input[name='slider-type']").val() == '3') {
		jQuery("#products").autocomplete({
			source: function( request, response ) {
			var placid_slider_pg = jQuery("#placid-slider-nonce").val();
			var data = {};
			data['type'] = jQuery("select[name='woo_slider_type']").val();
			data['term']=request.term;
			data['action']='placid_woo_product';
			data['placid_slider_pg'] = placid_slider_pg;
				jQuery.ajax({
					url: ajaxurl,
					data: data,
					method: "post",
					dataType: "json",
					success: function( data ) {
						if(data.length != 0 ) {
							response( jQuery.map( data.product, function( item ) {
								return {
								label: item.title,
								value: item.title,
								ID: item.ID
								}
							}));
						}
					}
				});
			},
			minLength:1,
			select: function(event,ui) {
				jQuery("#product_id").val(ui.item.ID);
			} 
		});
	}
	/* WooCommerece Show Product Id  Field on basis of slider type */
	jQuery("select[name='woo_slider_type']").change(function() {
		var sliderType = jQuery(this).val();
		if( sliderType != "recent" && sliderType != "external" ) {
			if(jQuery(".woo-product").hasClass("ps-row") ) jQuery(".woo-product").css("display","table-row");
			else jQuery(".woo-product").css("display","block");
		} else {
			jQuery(".woo-product").css("display","none");
		}
	});
		/**
		
		* -------------------------------------------------------------------------------------
		* JS for Ajax and custom slider
		* -------------------------------------------------------------------------------------
		**/
		var placidLoader = jQuery("input[name='placid-loader']").val(); //<?php echo admin_url('images/loading.gif');?>;
		var placidSliderId = parseInt(jQuery("input[name='placid-sliderid']").val());
		/* Hide Footer Upgrade Notice */
		jQuery("#footer-upgrade").hide();
		
		jQuery(".eb-templ").click(function(){
			jQuery("#ps_flip_container #ps_flip_div").css({"-webkit-transform": "rotateX(180deg)","-moz-transform": "rotateX(180deg)","-o-transform":"rotateX(180deg)","transform":"rotateX(180deg)" });
		});
		jQuery(".eb-shortcode").click(function(){
			jQuery("#ps_flip_container #ps_flip_div").css({"-webkit-transform": "rotateX(0deg)","-moz-transform": "rotateX(0deg)","-o-transform":"rotateX(0deg)","transform":"rotateX(0deg)" });
		});
		
		jQuery(".eb-embed-tabs").click(function() {
			jQuery(".eb-embed-tabs").removeClass("active");
			jQuery(this).addClass("active");
		});
		
		
		/* Rename Slider */
		jQuery(".edit-slider-name").hover(function() {
			
			if(jQuery(this).find("#new_slider_name").prop("readonly") == true)
			jQuery(this).find(".fa-edit").stop( true, true ).fadeIn("slow");
		},function(){ 
			jQuery(this).find(".fa-edit").fadeOut("slow"); 
		});
		jQuery(".fa-edit").click(function() {
			jQuery(this).fadeOut("fast"); 
			jQuery(this).prev("#new_slider_name").removeAttr("readonly");
		});
//Added 1/19


		/* Rename Setting Set */
		jQuery(".rename_set").click(function() {
			jQuery(".rename_set_wrap").fadeIn("slow");
			return false;
		});
		jQuery("#placid_setting_id").change( function() {
			jQuery("#change_setting").submit();
		});
	jQuery(".cfb_connect").click(function() {
		var url = jQuery("#fb-pg-url").val();
		if (/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(url) == false) {
			alert("Please Enter correct  facebook page URL and Click on Connect Button"); 
			jQuery("input[name='fb-pg-url']").addClass('ps-create-error');
			jQuery("html,body").animate({scrollTop:jQuery("input[name='fb-pg-url']").offset().top-50}, 600);
			return false;
		}
		jQuery(".fb-albums").empty();
		jQuery(".fb-albums").append('<div class="ps-loader" style="background: url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 100px;height: 20px;margin: 15px auto;"></div>');
		var placid_slider_pg = jQuery("#placid-slider-nonce").val();
		var data = {};
		if(jQuery(this).hasClass("eb") == false) data['page'] = 'create_new';
		data['page_url'] = jQuery("#fb-pg-url").val();
		data['action'] = 'placid_shfb_album';
		data['placid_slider_pg'] = placid_slider_pg;
		jQuery.post(ajaxurl, data, function(response) { 
			jQuery(".fb-albums").find(".ps-loader").remove();
			jQuery(".fb-albums").html(response);
		});
		return false;
	});
	/* Custom Slider Popup Script */
	var bindPreviewThumbs = function(scope) {
		var placidSlides = jQuery(".ps-reorder").length;
		if( parseInt(placidSlides) <= 0 ) 
			jQuery(".btn-remove").hide();
		else jQuery(".btn-remove").show();
		jQuery(".editSlide",scope).click(function(){
			jQuery(this).parents(".ps-reorder").addClass("ps-open");
			jQuery(this).parents(".ps-reorder").find(".editSlide,.delSlide").css({"left":"6%"});
			jQuery(this).parents(".ps-reorder").animate({"width":"96%"},"slow");
			jQuery(this).siblings(".placid_slideDetails").show();
		
		});
		jQuery(".ps-reorder",scope).hover(function(){ 
			jQuery(this).find('img').css('opacity','0.6');jQuery(this).find('.editSlide,.delSlide,.editcore').fadeIn(500);},
			function(){jQuery(this).find('img').css('opacity','1');jQuery(this).find('.editSlide,.delSlide,.editcore').fadeOut('fast');}
		);
		jQuery(".delSlide").click(function() {
			var agree=confirm("This will remove selected slide from Slider.");
			if (agree) {
				var preview_html = jQuery("#placid-preview-nonce").val();
				var data = {};
				data['slider_id'] = placidSliderId;
				data['post_id'] = parseInt(jQuery(this).attr('id'));
				data['action'] = 'placid_delete_slide';
				data['preview_html'] = preview_html;
				jQuery.post(ajaxurl, data, function(response) { 
					var data = {
						'action': 'placid_slider_preview',
						'slider_id': placidSliderId,
						'preview_html':preview_html
					};
					jQuery.post(ajaxurl, data, function(response) {
						var result = response.split("placidSplit");
						if(skin == 'logo') {
							window.location.href=window.location.href;
						} else {
							jQuery(".ps_preview").html(result[0]);
							jQuery(".placid-thumbs").html(result[1]);
							jQuery(".placid_slider").css("display","block");
						}
					}).always(function() {
					   	if(skin != 'logo') {
					   		var cnxt=jQuery(".placid-thumbs");
				   			bindPreviewThumbs(cnxt);
			   			}
					});
				});
			} 
			return false;
		});
		var postArr = Array();
		jQuery(".ps-reorder",scope).click(function(){
			jQuery(this).toggleClass("ps-slide-selected");
			if(jQuery(this).hasClass("ps-slide-selected")) {
				var id = jQuery(this).attr("ID"); 
				postArr.push(id);
				jQuery("input[name='slider_posts']").val(postArr);
			}
			else {
				var id = jQuery(this).attr("ID"); 
				var index = postArr.indexOf(id);
				postArr.splice(index, 1);
				//postArr.push(id);
				jQuery("input[name='slider_posts']").val(postArr);
			
			}
		});
		return false;
	};
	/* Easy BUilder - Call AJAX on Load */
	if(placidSliderId != undefined ) {
		var sliderType = jQuery("input[name='slider-type']").val();
		// For Custom Slider only
		if(parseInt(sliderType) == 0) {
			var preview_html = jQuery("#placid-preview-nonce").val();
			var data = {
				'action': 'placid_slider_preview',
				'slider_id': placidSliderId,
				'preview_html':preview_html
			};
			jQuery.post(ajaxurl, data, function(response) {
				var result = response.split("placidSplit");
				jQuery(".placid-thumbs").html(result[1]);
			}).always(function() {
					var cnxt=jQuery(".placid-thumbs");
					bindPreviewThumbs(cnxt);
			}); 
		}
	}
	
	
	jQuery(".add-slides").click(function() {
		jQuery(".eb-cs-blank").click();
	});
	jQuery(".eb-cs-blank").click(function(){
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		var data = {
			'action': 'placid_add_form',
			'slider_id': placidSliderId,
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
			var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".show-all-types").click(function(){
		var eb_settings_nonce = jQuery("#placid-eb-settings-nonce").val();
		var sname = jQuery("#new_slider_name").val();
		var data = {
			'action': 'placid_change_type',
			'slider_id': placidSliderId,
			'cntr':cntr,
			'sname' : sname,
			'eb_settings_nonce':eb_settings_nonce
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".placid-change-type").html(response);
			/* Disable Current slider type Start */
			var currSliderType = jQuery("input[name='slider-type']").val();
			jQuery(".updt-sldr-type").each(function() {
				if(jQuery(this).val() == currSliderType ){
					jQuery(this).prop('disabled', true);
				}
			});
			/* Disable Current slider type END */
		}).always(function() {
			var cnxt=jQuery(".placid-change-type");
		   	bindChangeSliderBehaviors(cnxt);
		});
	});
	/* Bind behaviors for change slider type */

	var bindChangeSliderBehaviors = function(scope) {
		jQuery(".updt-sldr-type").click(function(){
			if(jQuery(this).hasClass("no_key") == false) { 
				var eb_settings_nonce = jQuery("#placid-eb-settings-nonce").val();
				var data = {
					'action': 'placid_show_params',
					'eb_settings_nonce':eb_settings_nonce
				};
				jQuery('#placid-update-type').serializeArray().map(function(item) {
					data[item.name] = item.value;
				});
				jQuery.post(ajaxurl, data, function(response) {
					jQuery(".placid-change-type").html(response);
				}).always(function() {
					var cnxt=jQuery(".placid-change-type");
				   	bindChangeSliderBehaviors(cnxt);
					bindPreviewParams(cnxt);
				});
				return false;
			} else {
				var slider = parseInt(jQuery(this).val());
				var plugins = Array(3,4,5,6,10);
				if(plugins.indexOf(slider) != -1 ) {
					var plugin = jQuery(this).parent(".ps-col-row").find(".ps-icon-title").text();
					pluginName = plugin.replace("Slider","");
					var msg = "Please Activate the "+pluginName+" Plugin to use it";
				} else {
					var sliderTxt = jQuery(this).parent(".ps-col-row").find(".ps-icon-title").text();
					sliderName = sliderTxt.split(' ')[ 0 ];
					var msg = "Please Add API Key for "+sliderName+" on Global Settings";
				}
			
				if(jQuery(this).parent(".ps-col-row").find(".ps-help").length == 0 ) {
					jQuery(this).parent(".ps-col-row").append("<div class='ps-help'>"+msg+"</div>").delay(3000).queue(function() { jQuery(this).find(".ps-help").fadeOut("slow", function() { jQuery(this).remove(); }); });
				}
				//jQuery(".update-type").hide();
			}
		});
		jQuery(".ps-updt-btn-back").click(function(){
			jQuery(".show-all-types").click();
			return false;
		});
		jQuery(".cfb_connect").click(function() {
			var url = jQuery("#fb-pg-url").val();
			if (/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(url) == false) {
				alert("Please Enter correct  facebook page URL and Click on Connect Button"); 
				jQuery("input[name='fb-pg-url']").addClass('ps-create-error');
				return false;
			}
			jQuery(".fb-albums").empty();
			jQuery(".fb-albums").append('<div class="ps-loader" style="background: url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 100px;height: 20px;margin: 15px auto;"></div>');
			var placid_slider_pg = jQuery("#placid-slider-nonce").val();
			var data = {};
			if(jQuery(this).hasClass("eb") == false) data['page'] = 'create_new';
			data['page_url'] = jQuery("#fb-pg-url").val();
			data['action'] = 'placid_shfb_album';
			data['placid_slider_pg'] = placid_slider_pg;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".fb-albums").find(".ps-loader").remove();
				jQuery(".fb-albums").html(response);
			});
			return false;
		});
		jQuery(".feature", scope).change(function() {
			if(jQuery(this).val() == 'user' || jQuery(this).val() == 'user_favorites' ) {
				jQuery(".pxuser").slideDown();
			} else {
				jQuery(".pxuser").slideUp( "slow" );
			}
		});
		
		/* Vimeo Slider */
		jQuery(".vimeo-type").change(function() {
			var val = jQuery(this).val();
			if(val == "channel") {
				jQuery("#vimeo-lb").text("Channel Name");
			} else if(val == "album") {
				jQuery("#vimeo-lb").text("ID");
			} 
		});
		/* Flicker Slider */
		jQuery(".flickr-type").change(function() {
			var val = jQuery(this).val();
			if(val == "user") {
				jQuery("#flickr-lb").text("User ID");
			} else if(val == "album") {
				jQuery("#flickr-lb").text("Album ID");
			} 
		});
		/* Change Slider Types */
		jQuery(".update-type").click(function() {
			/* Validate Before Update */
			if(jQuery("#update_slider_name").val() == "" ) {
				alert("Please Enter the Slider Name");
				jQuery("#new_slider_name").addClass('ps-create-error');
				return false;
			}
			var offset=jQuery("input[name='offset']").val();
			if(offset < 0 || isNaN(offset)) {
				alert("Offset should be a number greater than 0!"); 
				jQuery("input[name='offset']").addClass('ps-create-error');
				return false;
			}
			var sliderType = jQuery("input[name='update-slider-type']").val();
			if( sliderType == 1 ) { 
				var catg_slug=jQuery("select[name='catg_slug']").val();
				if( catg_slug == "" ) {
					alert("Please Select The Category");
					jQuery("select[name='catg_slug']").addClass('ps-create-error');
					return false;
				}
			}  else if( sliderType == 3 ) { 
				var wootype = jQuery("#woo-slider-type").val();
				if( wootype == "upsells" || wootype == "crosssells" || wootype == "grouped" ) {
					var product_id = jQuery("#product_id").val();
					if(product_id == '') {
						alert("Please Enter the Product");
						jQuery("#products").addClass('ps-create-error');
						return false;
					}
				}
			} else if( sliderType == 4 ) { 
				var ecomType =jQuery("select[name='ecom_slider_type']").val();
				if(ecomType == 1) {
					var catg_slug=jQuery("select[name='ecom-catg']").val();
					if( catg_slug == "" ) {
						alert("Please Select The Category"); 
						jQuery("select[name='ecom-catg']").addClass('ps-create-error');
						return false;
					}	
				}
			} else if( sliderType == 7 ) { 
				var postType =jQuery("select[name='taxo_posttype']").val();
				if(postType == "") {
					alert("Please Select The Post Type"); 
					jQuery("select[name='taxo_posttype']").addClass('ps-create-error');
					return false;
				}
				var taxo =jQuery("select[name='taxonomy_name']").val();
				if(taxo == "") {
					alert("Please Select The Taxonomy"); 
					jQuery("select[name='taxonomy_name']").addClass('ps-create-error');
					return false;
				}
				var term =jQuery("#placid_taxonomy_term option:selected").length;
				if(term < 1) {
					alert("Please Select The Term");
					jQuery("#placid_taxonomy_term").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 8 ) { 
				var rssfeedurl =jQuery("input[name='rssfeedurl']").val();
				if( rssfeedurl == "" ) {
					alert("Please Enter the Feed Url"); 
					jQuery("input[name='rssfeedurl']").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 9 ) { 
				var attachId =jQuery("input[name='postattch-id']").val();
				if( attachId == "" || attachId < 0 || isNaN(attachId)) {
					alert("Please Enter the Post Id "); 
					jQuery("input[name='postattch-id']").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 10 ) { 
				var nggId =jQuery("select[name='nextgen-id']").val();
				if( nggId == "" || nggId < 0 || isNaN(nggId)) {
					alert("Please Enter the NextGen Gallery ID"); 
					jQuery("select[name='nextgen-id']").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 11 ) { 
				var ytID =jQuery("input[name='yt-playlist-id']").val();
				if( ytID == "" ) {
					alert("Please Enter the Playlist ID");
					jQuery("input[name='yt-playlist-id']").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 12 ) { 
				var ytTerm =jQuery("input[name='yt-search-term']").val();
				if( ytTerm == "" ) {
					alert("Please Enter the Search Term");
					jQuery("input[name='yt-search-term']").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 13 ) { 
				var vimeoVal =jQuery("input[name='vimeo-val']").val();
				var vimeoType =jQuery("select[name='vimeo-type']").val();
				if( vimeoVal == "" ) {
					if(vimeoType == "channel" ) var msg = "Please Enter the Channel Name";
					else  var msg = "Please Enter the Album ID";
					alert(msg); 
					jQuery("input[name='vimeo-val']").addClass('ps-create-error');
					return false;
				}
			}  else if( sliderType == 14 ) { 
				var fbUrl =jQuery("input[name='fb-pg-url']").val();
				var fbAlbum =jQuery("select[name='fb-album']").val();
				if( fbUrl == "" ) {
					alert("Please Enter the Page Url and Click on Connect Button"); 
					jQuery("input[name='fb-pg-url']").addClass('ps-create-error');
					return false;
				} 
				else if( fbAlbum == undefined ) {
					alert("Please Click on Connect Button and Select Album");
					return false; 
				}
			} else if( sliderType == 15 ) { 
				var userName =jQuery("input[name='user-name']").val();
				if( userName == "" ) {
					alert("Please Enter the User Name"); 
					jQuery("input[name='user-name']").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 16 ) { 
				var flId =jQuery("input[name='fl-id']").val();
				var flType =jQuery("select[name='flickr-type']").val();
				if( flId == "" ) {
					if(flType =="album") var msg = "Please Enter the Album ID";
					else  var msg = "Please Enter the User ID";
					alert(msg); 
					jQuery("input[name='fl-id']").addClass('ps-create-error');
					return false;
				}
			} else if( sliderType == 18 ) { 
				var feature =jQuery("select[name='feature']").val();
				if( feature == "user" || feature == "user_favorites" ) {
					var pxuser =jQuery("input[name='pxuser']").val();
					if(feature == "user" ) var msg = "Please Enter the User Name";
					else  var msg = "Please Enter the User Favorites Name";
					if(pxuser == "") {
						alert(msg); 
						jQuery("input[name='pxuser']").addClass('ps-create-error');
						return false;
					}
				}
			}
			/* validation End */
			var eb_settings_nonce = jQuery("#placid-eb-settings-nonce").val();
			var data = {};
			jQuery('form#ps-update-step2').serializeArray().map(function(item) {
			    data[item.name] = item.value;
			});
			data['action'] = 'placid_update_slider_type';
			data['eb_settings_nonce'] = eb_settings_nonce;
			jQuery.post(ajaxurl, data, function(response) { 
				tb_remove();
				window.location.href = response;
			});
			return false;
		});
	};
	/* End - Bind behaviors for change slider type */

	/* Start Bind Behaviors */
	var bindBehaviors = function(scope) { 
		jQuery(".pageclk", scope).click(function() {
			paged = jQuery(this).attr("id");	
			type = jQuery(".eb-cs-right").find(".post_type").val();
			var custom = jQuery("select").hasClass("sel_post_type");
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var data = {
				'action': 'placid_show_posts',
				'post_type': type,
				'sliderid': placidSliderId,
				'paged': paged,
				'add_slides':add_slides
			};
			if(custom == true) data['custom'] = true;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".eb-cs-right").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);
			});
			return false;
		});
		jQuery(".sel_post_type", scope).change(function() {
			var type = jQuery(this).val();
			if(type == "0"){
				return false;
			}
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var data = {
				'action': 'placid_show_posts',
				'post_type': type,
				'sliderid': placidSliderId,
				'custom': true,
				'add_slides':add_slides
			};
			jQuery.post(ajaxurl, data, function(response) {
				jQuery(".eb-cs-right").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);
			});
			return false;
		});
		jQuery(".add_posts", scope).click(function(){
			var data = {};
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var posts = new Array();
			jQuery('#eb-wp-posts').serializeArray().map(function(item) {
				if(item.name == "post_id[]")
					posts.push(item.value);
				else  data[item.name] = item.value;
			});
			data['post_id[]'] = posts;
			data['action'] = 'placid_insert_posts';
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) {
				tb_remove();
				jQuery("html,body").animate({scrollTop:jQuery('.ps_preview').offset().top-50}, 600);
				jQuery(".ps_preview").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 72%;height: 350px;top: 0%;margin: 55px auto;position: absolute;z-index: 99;"></div>');
				var preview_html = jQuery("#placid-preview-nonce").val();
				var data = {
					'action': 'placid_slider_preview',
					'slider_id': placidSliderId,
					'preview_html':preview_html
				};
				jQuery.post(ajaxurl, data, function(response) {
					jQuery(".ps_preview").find(".ps-loader").fadeOut("fast", function(){ jQuery(this).remove();});
					var result = response.split("placidSplit");
					if(skin == 'logo') {
						window.location.href=window.location.href;
					} else {
						jQuery(".ps_preview").html(result[0]);
						jQuery(".placid-thumbs").html(result[1]);
						jQuery(".placid_slider").css("display","block");
					}
				}).always(function() {
				   	if(skin != 'logo') {
				   		var cnxt=jQuery(".placid-thumbs");
			   			bindPreviewThumbs(cnxt);
			   		}
				});
			});
			return false;
		});
		jQuery(".fb_connect", scope).click(function() {
			jQuery(".eb-cs-right").append('<div class="ps-loader" style="background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 100px;height: 20px;margin: 15px auto;"></div>');
			var data = {};
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			jQuery('#fb_connect').serializeArray().map(function(item) {
				if( item.name != 'fb_album' )
					data[item.name] = item.value;
			});
			data['action'] = 'placid_show_fb';
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".eb-cs-right").find(".ps-loader").remove();
				jQuery(".eb-cs-right").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);
			});
			return false;
		});
		jQuery(".px_connect", scope).click(function() {
			jQuery(".eb-cs-right").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 76%;height: 84%;margin: 55px auto;position: absolute;"></div>');
			var data = {};
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			jQuery('#px_connect').serializeArray().map(function(item) {
				data[item.name] = item.value;
			});
			data['action'] = 'placid_show_px';
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".eb-cs-right").find(".ps-loader").remove();
				jQuery(".eb-cs-right").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);	
			});
			return false;
		});
		jQuery(".it_connect", scope).click(function() {
			jQuery(".eb-cs-right").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 76%;height: 84%;margin: 55px auto;position: absolute;"></div>');
			var data = {};
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			jQuery('#it_connect').serializeArray().map(function(item) {
				data[item.name] = item.value;
			});
			data['action'] = 'placid_show_it';	
			data['add_slides'] = add_slides	;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".eb-cs-right").find(".ps-loader").remove();
				jQuery(".eb-cs-right").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);
			});
			return false;
		});
		jQuery(".flickr_connect", scope).click(function() {
				jQuery(".eb-cs-right").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 76%;height: 84%;margin: 55px auto;position: absolute;"></div>');
			var data = {};
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			jQuery('#flickr_connect').serializeArray().map(function(item) {
				data[item.name] = item.value;
			});
			data['action'] = 'placid_show_flickr';
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".eb-cs-right").find(".ps-loader").remove();
				jQuery(".eb-cs-right").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);
			});
			return false;
		});
		jQuery(".feature", scope).change(function() {
			if(jQuery(this).val() == 'user' || jQuery(this).val() == 'user_favorites' ) {
				jQuery(".pxuser").slideDown();
			} else {
				jQuery(".pxuser").slideUp( "slow" );
			}
		});
		jQuery(".ps-img-box", scope).click(function() {
			jQuery(this).toggleClass("ps-img-box-selected");
			if(jQuery(this).hasClass("ps-img-box-selected")) {
				var src = jQuery(this).find("img").attr("src");
				var navSrc = jQuery(this).find(".nav_thumb").attr("id");
				jQuery(this).append("<input type='hidden' name='img_url' value="+src+" / >");
				jQuery(this).append("<input type='hidden' name='thumb_url' value="+navSrc+" / >");
			} else {
				jQuery(this).find("input[type='hidden']").remove();
			}
		});
		jQuery(".fb_albums", scope).change(function() {
			jQuery(".fb-img-wrap").empty();
				jQuery(".eb-cs-right").append('<div class="ps-loader" style="background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 100px;height: 20px;margin: 15px auto;"></div>');
			var data = {};
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var img_url = new Array();
			jQuery('#fb_connect').serializeArray().map(function(item) {
				if(item.name == 'img_url' )
					img_url.push(item.value);
				else data[item.name] = item.value;
			});
			data['img_url'] = img_url;
			data['action'] = 'placid_show_fb';
			data['add_slides'] = add_slides;						
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".eb-cs-right").find(".ps-loader").remove();
				jQuery(".eb-cs-right").html(response);
			}).always(function() {
			   	var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);
			});
			return false;
			
		});
		jQuery(".placid_fip_insert", scope).click(function() {
			var customPost = jQuery("input[name='custom_post']").val();
			if(customPost != '1') {
				jQuery("#ps-error-msg").html("<span>To insert social slide, select 'Yes' for 'Create \"SliderVilla Slides\" Custom Post Type' on Global Settings</span>").fadeIn( "slow" );
				return false;
			}
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var data = {};
			var img_url = new Array();
			var thumb_url = new Array();
			var frmId = jQuery(this).parents("form").attr("id");
			jQuery('#'+frmId).serializeArray().map(function(item) {
				if(item.name == 'img_url' )
					img_url.push(item.value);
				else if(item.name == 'thumb_url' )
					thumb_url.push(item.value);
				else data[item.name] = item.value;
			});
			data['img_url'] = img_url;
			data['thumb_url'] = thumb_url;
			data['action'] = 'placid_fip_insert';
			data['type'] = frmId;
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) { 
				//console.log(response);
				tb_remove();
				jQuery("html,body").animate({scrollTop:jQuery('.ps_preview').offset().top-50}, 600);
				jQuery(".ps_preview").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 72%;height: 350px;top: 0%;margin: 55px auto;position: absolute;z-index: 99;"></div>');
				var preview_html = jQuery("#placid-preview-nonce").val();
				var data = {
					'action': 'placid_slider_preview',
					'slider_id': placidSliderId,
					'preview_html':preview_html
				};
				jQuery.post(ajaxurl, data, function(response) {
					jQuery(".ps_preview").find(".ps-loader").fadeOut("fast", function(){ jQuery(this).remove();});
					var result = response.split("placidSplit");
					if(skin == 'logo') {
						window.location.href=window.location.href;
					} else {
						jQuery(".ps_preview").html(result[0]);
						jQuery(".placid-thumbs").html(result[1]);
						jQuery(".placid_slider").css("display","block");
					}
				}).always(function() {
				   	if(skin != 'logo') {
				   		var cnxt=jQuery(".placid-thumbs");
			   			bindPreviewThumbs(cnxt);
			   		}
				});
			});
			return false;
		});
		jQuery(".placid_insert_video", scope).click(function() {
			var customPost = jQuery("input[name='custom_post']").val();
			if(customPost != '1') {
				jQuery("#ps-error-msg").html("<span>To insert Video, select 'Yes' for 'Create \"SliderVilla Slides\" Custom Post Type' on Global Settings</span>").fadeIn( "slow" );
				return false;
			}
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var data = {};
			var video_url = new Array();
			var video_title = new Array();
			jQuery('#placid_insert_video').serializeArray().map(function(item) { 
				if(item.name == "video_title") {
					video_title.push(item.value);
				}
				else if(item.name == "video_url")
					video_url.push(item.value);
				else data[item.name] = item.value;
			});
			data['video_title'] = video_title;
			data['video_url'] = video_url;
			data['action'] = 'placid_insert_video';
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) {
				tb_remove();
				window.location.href=window.location.href;
			});
			return false;
		});
		jQuery(".add_video", scope).click(function(){
			var formData = jQuery("#placid_insert_video .ps-video-slide").last().html();	
			jQuery(".ps-video-wrap").append("<div class='ps-video-slide'>"+formData+"</div>");
		});
		jQuery('.placid_upload_button', scope).on("click",function(event) {
			var currUpload = jQuery(this).prev('.slide_image');
			var frame;
			event.preventDefault();
			// If the media frame already exists, reopen it.
			if ( frame ) {
				frame.open();
				return;
			}
			// Create the media frame.
			frame = wp.media({
				title: 'Upload/Select Images',
				multiple: false,
				button: {
					text: 'Add to Slider',
					close: false
				}
			});
			frame.on( 'select', function() {
				// Grab the selected attachment.
				var attachments = frame.state().get('selection').toArray();
				frame.close();
				if(attachments.length>0){
					var imgurl = attachments[0].attributes.url;
					currUpload.val(imgurl);
				}
			});
			// Finally, open the modal.
			frame.open();
			return false;
		});
		jQuery(".btn-insert", scope).click(function(){
			var customPost = jQuery("input[name='custom_post']").val();
			if(customPost != '1') {
				jQuery("#ps-error-msg").html("<span>To insert blank slide, select 'Yes' for 'Create \"SliderVilla Slides\" Custom Post Type' on Global Settings</span>").fadeIn( "slow" );
				return false;
			}
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var data = {};
			var slide_title = new Array();
			var slide_desc = new Array();
			var slide_url = new Array();
			var slide_image = new Array();
			jQuery('form.add-new-slide').serializeArray().map(function(item) {
				if(item.name == "slide_title") {
					slide_title.push(item.value);
				}
				else if(item.name == "slide_desc")
					slide_desc.push(item.value);
				else if(item.name == "slide_url")
					slide_url.push(item.value);
				else if(item.name == "slide_image")
					slide_image.push(item.value);
				else data[item.name] = item.value;
			});
			data['slide_title'] = slide_title;
			data['slide_desc'] = slide_desc;
			data['slide_url'] = slide_url;
			data['slide_image'] = slide_image;
			data['action'] = 'placid_insert_slide';
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) {
				tb_remove();
				jQuery("html,body").animate({scrollTop:jQuery('.ps_preview').offset().top-50}, 600);
				jQuery(".ps_preview").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 72%;height: 350px;top: 0%;margin: 55px auto;position: absolute;z-index: 99;"></div>');
				var preview_html = jQuery("#placid-preview-nonce").val();
				var data = {
					'action': 'placid_slider_preview',
					'slider_id': placidSliderId,
					'preview_html':preview_html
				};
				jQuery.post(ajaxurl, data, function(response) {
					jQuery(".ps_preview").find(".ps-loader").fadeOut("fast", function(){ jQuery(this).remove();});
					var result = response.split("placidSplit");
					if(skin == 'logo') {
						window.location.href=window.location.href;
					} else {
						jQuery(".ps_preview").html(result[0]);
						jQuery(".placid-thumbs").html(result[1]);
						jQuery(".placid_slider").css("display","block");
					}
				}).always(function() {
				   	if(skin != 'logo') {
				   		var cnxt=jQuery(".placid-thumbs");
			   			bindPreviewThumbs(cnxt);
			   		}
				});
			});
		
			return false;
		});
		jQuery(".add_more", scope).on("click",function() {
			var formData = jQuery(".ps-slide-content").last().html();
			var cnt = jQuery(".ps-slide-content").length;
			if(cnt%2 == '1' ) var cls = ' odd'; 
			else var cls = '';
			var cnxt=jQuery("<div class='ps-slide-content"+cls+"'>"+formData+"</div>").appendTo(".ps-slide");
			bindBehaviors(cnxt);
		});
		/* Add Media to custom slider */
		// Show Edit and delete slides on hover 
		jQuery('.addedImg').hover(function(){ 
			jQuery(this).find('img').css('opacity','0.6');
			jQuery(this).find('.addedImgEdit,.addedImgDel').fadeIn(500);
		}, function(){
			jQuery(this).find('img').css('opacity','1');
			jQuery(this).find('.addedImgEdit,.addedImgDel').fadeOut('fast');}
		);
		jQuery('.addedImgEdit').click(function(){
			var imgDetails=jQuery(this).parent('.imgCont').parent('.addedImg').find('.ImgDetails');
			var imgWrapper=jQuery(this).parents('.uploaded-images');
			imgDetails.width((imgWrapper.width() - 220));
			imgDetails.fadeToggle("slow");
		});	
		jQuery('.addedImgDel').click(function(){
			jQuery(this).parent('.imgCont').parent('.addedImg').fadeOut(400,function(){jQuery(this).remove();});
		});
		jQuery(".media-insert", scope).click(function(){
			var add_slides = jQuery("#placid-add-slides-nonce").val();
			var data = {};
			var imgID = new Array();
			jQuery('form.addImgForm').serializeArray().map(function(item) {
				if(item.name == "imgID[]") {
					imgID.push(item.value);
				}
				else data[item.name] = item.value;
			});
			data['imgID'] = imgID;
			data['action'] = 'placid_insert_media';
			data['add_slides'] = add_slides;
			jQuery.post(ajaxurl, data, function(response) {
				tb_remove();
				jQuery("html,body").animate({scrollTop:jQuery('.ps_preview').offset().top-50}, 600);
				jQuery(".ps_preview").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 72%;height: 350px;top: 0%;margin: 55px auto;position: absolute;z-index: 99;"></div>');
				var preview_html = jQuery("#placid-preview-nonce").val();
				var data = {
					'action': 'placid_slider_preview',
					'slider_id': placidSliderId,
					'preview_html':preview_html
				};
				jQuery.post(ajaxurl, data, function(response) {
					jQuery(".ps_preview").find(".ps-loader").fadeOut("fast", function(){ jQuery(this).remove();});
					var result = response.split("placidSplit");
					if(skin == 'logo' && result[0].length > 0 ) {
						window.location.href=window.location.href;
					} else {
						jQuery(".ps_preview").html(result[0]);
						jQuery(".placid-thumbs").html(result[1]);
						jQuery(".placid_slider").css("display","block");
					}
				}).always(function() {
					if(skin != 'logo') {
				   		var cnxt=jQuery(".placid-thumbs");
			   			bindPreviewThumbs(cnxt);
			   		}
				});
				
			});
			 
			return false;
		});
		/* END - Add Media to custom slider */
	};
	/* End Bind Behaviors */
	jQuery(".feature").change(function() {
		if(jQuery(this).val() == 'user' || jQuery(this).val() == 'user_favorites' ) {
			jQuery(".pxuser").slideDown();
		} else {
			jQuery(".pxuser").slideUp( "slow" );
		}
	});
	jQuery(".eb-cs-post").click(function(){
		var type = jQuery(this).attr("id");
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		var data = {
			'post_type': type,
			'sliderid': placidSliderId,
			'action': 'placid_show_posts',
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
			var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".eb-cs-video").click(function() {
		var type = jQuery(this).attr("id");
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		
		var data = {
			'sliderid': placidSliderId,
			'action': 'placid_add_video',
			'cntr':cntr,
			'type':type,
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
			var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".eb-cs-px").click(function() {
		jQuery(".eb-cs-right").empty();
		jQuery(".eb-cs-right").prepend('<div class="ps-loader" style="opacity: 0.8; background: #ffffff url('+placidLoader+') 50% 50% ;background-repeat: no-repeat;width: 76%;height: 84%;margin: 55px auto;position: absolute;"></div>');
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		var data = {
			'sliderid': placidSliderId,
			'action': 'placid_show_px',
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").find(".ps-loader").remove();
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
		   	var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".eb-cs-fb").click(function() {
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		var data = {
			'sliderid': placidSliderId,
			'action': 'placid_show_fb',
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
		   	var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".eb-cs-fl").click(function() {
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		var data = {
			'sliderid': placidSliderId,
			'action': 'placid_show_flickr',
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
		   	var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".eb-cs-it").click(function() {
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		var data = {
			'sliderid': placidSliderId,
			'action': 'placid_show_it',
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
		   	var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".eb-cs-pt").click(function(){
		var add_slides = jQuery("#placid-add-slides-nonce").val();
		var data = {
			'sliderid': placidSliderId,
			'action': 'placid_show_post_type',
			'add_slides':add_slides
		};
		jQuery.post(ajaxurl, data, function(response) {
			jQuery(".eb-cs-right").html(response);
		}).always(function() {
		   	var cnxt=jQuery(".eb-cs-right");
		   	bindBehaviors(cnxt);
		});
	});
	jQuery(".eb-cs-media").click(function(event) {
		var frame;
		event.preventDefault();
		// If the media frame already exists, reopen it.
		if ( frame ) {
			frame.open();
			return;
		}
		// Create the media frame.
		frame = wp.media({
			// Set the title of the modal.
			title: 'Upload/Select Images',
			multiple: true,
			// Customize the submit button.
			button: {
				// Set the text of the button.
				text: 'Add to Slider',
				// Tell the button not to close the modal, since we're
				// going to refresh the page when the image is selected.
				close: false
			}
		});
		frame.on( 'select', function() {
			// Grab the selected attachment.
			var attachments = frame.state().get('selection').toArray();
			frame.close();
			if(attachments.length>0){
				var imgdiv='', html='';
				for(i=0;i<attachments.length;i++){
					var imgId=parseInt(attachments[i].id);
					imgdiv+='<div class="addedImg"><input type="hidden" name="imgID[]" value="'+imgId+'" /\><div class="imgCont"><img title="'+attachments[i].attributes.title+'" src="'+attachments[i].attributes.url+'" width="200"  /\><span class="addedImgEdit"></span><span class="addedImgDel"></span></div><div class="ImgDetails" style="display:none;"><div class="fL"><span class="imgTitle"><input placeholder="Title" title="Enter Image Title" type="text" name="title['+imgId+']" value="'+attachments[i].attributes.title+'" /\></span><span class="imgDesc"><textarea placeholder="Description" title="Enter Image Description" rows=3 name="desc['+imgId+']">'+attachments[i].attributes.description+'</textarea></span></div><div class="fR"><span class="imgLink"><input type="text" placeholder="Link To" value="" name="link['+imgId+']" /\></span><span class="imgNoLink"><strong>Do not link to any url: &nbsp; </strong><input type="checkbox" value="1" name="nolink['+imgId+']" /\></span></div></div></div>';
				};
				html = '<div class="uploaded-images">';
				html += '<form method="post" class="addImgForm">';
				html += imgdiv;
				html += '<div style="clear:left;margin-top:10px;" class="image-uploader">';
				html += '<input type="submit" class="btn_save media-insert" name="insert" value="Insert" /\>';
				html += '</div>';
				html += '<input type="hidden" name="current_slider_id" value="'+placidSliderId+'" /\>';
				html += '</form>';
				html += '</div>';
				jQuery(".eb-cs-right").html(html);
				var cnxt=jQuery(".eb-cs-right");
		   		bindBehaviors(cnxt);
			}
		});
		// Finally, open the modal.
		frame.open();
	});
	jQuery(".eb-cs-tab").click(function() {
		jQuery(".eb-cs-tab").removeClass("ps-active");
		jQuery(this).addClass("ps-active");
	});
	/* Custom Slider END */
	
	/* END JS for Ajax and custom slider */

//Added 1/19 ends
	
		
		/**
	* -------------------------------------------------------------------------------------
	* JS for Settings Panel Preview Params AJAX Load
	* -------------------------------------------------------------------------------------
	**/
	var bindPreviewParams = function(scope) { 
		// WooCommerce Slider show/hide product autocomplete field
		jQuery(".placid_woo_type", scope).change(function() {
			var sliderType = jQuery(this).val();
			if( sliderType != "recent" && sliderType != "external" ) {
				jQuery(".woo-product").css("display","block");
			} else {
				jQuery(".woo-product").css("display","none");
			}
		});
		jQuery("#products", scope).autocomplete({ 
			source: function( request, response ) {
			var placid_slider_pg = jQuery("#placid-slider-nonce").val();
			var data = {};
			data['type'] = jQuery(".placid_woo_type").val();
			data['term']=request.term;
			data['action']='placid_woo_product';
			data['placid_slider_pg']=placid_slider_pg;
				jQuery.ajax({
					url: ajaxurl,
					data: data,
					method: "post",
					dataType: "json",
					success: function( data ) {
						if(data.length != 0 ) {
							response( jQuery.map( data.product, function( item ) {
								
								return {
								label: item.title,
								value: item.title,
								ID: item.ID
								}
							}));
						}
					}
				});
			},
			minLength:1,
			select: function(event,ui) { 
				jQuery("#product_id").val(ui.item.ID);
			} 
		});
		jQuery(".placid-multiselect", scope).focusout(function() {
			var sel = jQuery(this)[0]; 
			var terms = [],opt;
			// loop through options in select list
			for (var i=0, len=sel.options.length; i<len; i++) {
				opt = sel.options[i];
				// check if selected
				if ( opt.selected ) {
					terms.push(opt.value);
				}
			}
			terms = terms.join();
			jQuery(this).next("input[type='hidden']").val(terms);
		});
		jQuery("#placid_taxonomy_posttype", scope).change(function() {
			var placid_slider_pg = jQuery("#placid-slider-nonce").val();
			var data = {};
			data['post_type'] = jQuery(this).val();
			data['option'] = jQuery("#placid-option").val();
			data['action'] = 'placid_show_taxonomy';
			data['placid_slider_pg'] = placid_slider_pg;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".sh-taxo").html(response);
			}).always(function() {
				var cnxt=jQuery(".sh-taxo");
			   	bindPreviewParams(cnxt);
			});
			return false;
		});
		jQuery("#placid_taxonomy", scope).change(function() { 
			var placid_slider_pg = jQuery("#placid-slider-nonce").val();
			var data = {};
			data['preview'] = 'true';
			data['option'] = jQuery("#placid-option").val();
			data['taxo'] = jQuery(this).val();
			data['action'] = 'placid_show_term';
			data['placid_slider_pg'] = placid_slider_pg;
			jQuery.post(ajaxurl, data, function(response) { 
				jQuery(".sh-term").fadeIn("slow");
				jQuery(".sh-term").html(response);
			}).always(function() {
				var cnxt=jQuery(".sh-term");
			   	bindPreviewParams(cnxt);
			});
			return false;
		});
		jQuery(".rss-source").change(function() {
			if(jQuery(this).val() == 'smugmug') {
				jQuery(".rss-size").show();
				jQuery(".rss-feed").hide();
			} else {
				jQuery(".rss-size").hide();
				jQuery(".rss-feed").show();
			}
		});
	};
	/* END - Preview params */
	/* Lock and Activation message for create new slider and update slider */
	jQuery("input[name='slider_type']").click(function() {
		if(jQuery(this).hasClass("no_key") == false) { 
			jQuery("#ps-create-new").submit();
			jQuery(".update-type").show();
		} else {
			var slider = parseInt(jQuery(this).val());
			var plugins = Array(3,4,5,6,10);
			if(plugins.indexOf(slider) != -1 ) {
				var plugin = jQuery(this).parent(".ps-col-row").find(".ps-icon-title").text();
				pluginName = plugin.replace("Slider","");
				var msg = "Please Activate the "+pluginName+" Plugin to use it";
			} else {
				var sliderTxt = jQuery(this).parent(".ps-col-row").find(".ps-icon-title").text();
				sliderName = sliderTxt.split(' ')[ 0 ];
				var msg = "Please Add API Key for "+sliderName+" on Global Settings";
			}
			
			if(jQuery(this).parent(".ps-col-row").find(".ps-help").length == 0 ) {
				jQuery(this).parent(".ps-col-row").append("<div class='ps-help'>"+msg+"</div>").delay(3000).queue(function() { jQuery(this).find(".ps-help").fadeOut("slow", function() { jQuery(this).remove(); }); });
			}
			jQuery(".update-type").hide();
		}
	});
	jQuery(".rss-source").change(function() {
		if(jQuery(this).val() == 'smugmug') {
			jQuery(".rss-size").show();
			jQuery(".rss-feed").hide();
		} else {
			jQuery(".rss-size").hide();
			jQuery(".rss-feed").show();
		}
	});
	var old_tb_remove = window.tb_remove;

	tb_remove = function() {
		jQuery("#TB_imageOff").unbind("click");
		jQuery("#TB_closeWindowButton").unbind("click");
		jQuery("#TB_window").css({'-webkit-animation-name': 'svzoomOut','animation-name': 'svzoomOut'}).fadeOut("slow",function(){jQuery('#TB_window,#TB_overlay,#TB_HideSelect').trigger("tb_unload").unbind().remove();});
		jQuery( 'body' ).removeClass( 'modal-open' );
		jQuery("#TB_load").remove();
		if (typeof document.body.style.maxHeight == "undefined") {//if IE 6
			jQuery("body","html").css({height: "auto", width: "auto"});
			jQuery("html").css("overflow","");
		}
		jQuery(document).unbind('.thickbox');
		return false;
	};
	
});

});
/* Added for slider sub type preview */
function catgtype(catg_type){
	if(catg_type=='0') {
		jQuery(".placid_catg").hide();
	}	
	else if(catg_type=='1') { 
		if(jQuery(".placid_catg").hasClass("ps-row") == true ) jQuery(".placid_catg").css("display","table-row");
		else jQuery(".placid_catg").css("display","block");
	}
}
function ecomtype(ecom_type) {
	if(ecom_type=='0') {
		jQuery(".placid_ecom_catg").hide();
	}	
	else if(ecom_type=='1') {
		jQuery(".placid_ecom_catg").css("display","block");
	}
}
