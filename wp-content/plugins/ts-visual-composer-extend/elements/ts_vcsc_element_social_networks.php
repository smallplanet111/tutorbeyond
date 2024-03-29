<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
    if (function_exists('vc_map')) {
		$social_values 					= get_option('ts_vcsc_extend_settings_socialDefaults', '');
		if (($social_values == false) || (empty($social_values)) || ($social_values == "") || (!is_array($social_values))) {
			$social_values				= array();
		}
		vc_map(array(
			"name"						=> __( "TS Social Networks", "ts_visual_composer_extend" ),
			"base"						=> "TS-VCSC-Social-Icons",
			"icon"						=> "icon-wpb-ts_vcsc_icon_social",
			"class"						=> "",
			"category"					=> __("VC Extensions", "ts_visual_composer_extend"),
			"description" 		    	=> __("Place social network links", "ts_visual_composer_extend"),
			"admin_enqueue_js"			=> "",
			"admin_enqueue_css"			=> "",
			"params"					=> array(
				// Main Social Network Settings
				array(
					"type"              => "seperator",
					"heading"           => __( "", "ts_visual_composer_extend" ),
					"param_name"        => "seperator_1",
					"value"				=> "",
					"seperator"         => "Icon Settings",
					"description"       => __( "", "ts_visual_composer_extend" )
				),
				array(
					"type"              => "dropdown",
					"heading"           => __( "Style", "ts_visual_composer_extend" ),
					"param_name"        => "icon_style",
					"admin_label"       => true,
					"value"             => array(
						"Simple"        		=> "simple",
						"Square"        		=> "square",
						"Rounded"       		=> "rounded",
						"Circle"        		=> "circle",
					),
				),
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Icon Background Color", "ts_visual_composer_extend" ),
					"param_name"        => "icon_background",
					"value"             => "#f5f5f5",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "icon_style", 'value' => array('square', 'rounded', 'circle') )
				),
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Icon Border Color", "ts_visual_composer_extend" ),
					"param_name"        => "icon_frame_color",
					"value"             => "#f5f5f5",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "icon_style", 'value' => array('square', 'rounded', 'circle') )
				),
				array(
					"type"              => "nouislider",
					"heading"           => __( "Icon Frame Border Thickness", "ts_visual_composer_extend" ),
					"param_name"        => "icon_frame_thick",
					"value"             => "1",
					"min"               => "1",
					"max"               => "10",
					"step"              => "1",
					"unit"              => 'px',
					"description"       => __( "", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "icon_style", 'value' => array('square', 'rounded', 'circle') )
				),
				array(
					"type"              => "nouislider",
					"heading"           => __( "Icon Size", "ts_visual_composer_extend" ),
					"param_name"        => "icon_size",
					"value"             => "20",
					"min"               => "0",
					"max"               => "50",
					"step"              => "1",
					"unit"              => 'px',
					"description"       => __( "", "ts_visual_composer_extend" )
				),
				array(
					"type"              => "nouislider",
					"heading"           => __( "Icon Margin", "ts_visual_composer_extend" ),
					"param_name"        => "icon_margin",
					"value"             => "5",
					"min"               => "0",
					"max"               => "50",
					"step"              => "1",
					"unit"              => 'px',
					"description"       => __( "", "ts_visual_composer_extend" )
				),
				array(
					"type"              => "nouislider",
					"heading"           => __( "Icon Padding", "ts_visual_composer_extend" ),
					"param_name"        => "icon_padding",
					"value"             => "10",
					"min"               => "0",
					"max"               => "50",
					"step"              => "1",
					"unit"              => 'px',
					"description"       => __( "", "ts_visual_composer_extend" )
				),
				array(
					"type"              => "dropdown",
					"heading"           => __( "Icons Align", "ts_visual_composer_extend" ),
					"param_name"        => "icon_align",
					"width"             => 150,
					"value"             => array(
					__( 'Left', "ts_visual_composer_extend" )     => "left",
					__( 'Right', "ts_visual_composer_extend" )    => "right",
					__( 'Center', "ts_visual_composer_extend" )   => "center" ),
					"admin_label"       => true,
					"description"       => __( "", "ts_visual_composer_extend" )
				),
				array(
					"type"				=> "css3animations",
					"class"				=> "",
					"heading"			=> __("Icons Hover Animation", "ts_visual_composer_extend"),
					"param_name"		=> "icon_hover",
					"standard"			=> "false",
					"prefix"			=> "ts-hover-css-",
					"connector"			=> "css3animations_in",
					"noneselect"		=> "true",
					"default"			=> "",
					"value"				=> "",
					"admin_label"		=> false,
					"description"		=> __("Select the hover animation for the social icons.", "ts_visual_composer_extend"),
				),
				array(
					"type"				=> "hidden_input",
					"heading"			=> __( "Icons Hover Animation", "ts_visual_composer_extend" ),
					"param_name"		=> "css3animations_in",
					"value"				=> "",
					"admin_label"		=> true,
					"description"		=> __( "", "ts_visual_composer_extend" ),
				),
				// Tooltip Settings
				array(
					"type"				=> "seperator",
					"heading"			=> __( "", "ts_visual_composer_extend" ),
					"param_name"		=> "seperator_2",
					"value"				=> "",
					"seperator"			=> "Tooltips",
					"description"		=> __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Tooltips",
				),
				array(
					"type"              => "switch_button",
					"heading"           => __( "Show Tooltip Title", "ts_visual_composer_extend" ),
					"param_name"        => "tooltip_show",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle if you want to show a tooltip with the social link information.", "ts_visual_composer_extend" ),
					"dependency"        => "",
					"group" 			=> "Tooltips",
				),
				array(
					"type"              => "textfield",
					"heading"           => __( "Title Pre Text", "ts_visual_composer_extend" ),
					"param_name"        => "tooltip_text",
					"value"             => "Click here to view our profile on ",
					"description"       => __( "The name of the social network will be added to the end of your text string automatically.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "tooltip_show", 'value' => 'true' ),
					"group" 			=> "Tooltips",
				),
				array(
					"type"              => "switch_button",
					"heading"			=> __( "Use Advanced Tooltip", "ts_visual_composer_extend" ),
					"param_name"		=> "tooltip_css",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"		=> __( "Switch the toggle if you want to apply am advanced tooltip to the image.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "tooltip_show", 'value' => 'true' ),
					"group" 			=> "Tooltips",
				),
				array(
					"type"				=> "dropdown",
					"class"				=> "",
					"heading"			=> __( "Tooltip Position", "ts_visual_composer_extend" ),
					"param_name"		=> "tooltip_position",
					"value"				=> array(
						__( "Top", "ts_visual_composer_extend" )                            => "ts-simptip-position-top",
						__( "Right", "ts_visual_composer_extend" )                          => "ts-simptip-position-right",
						__( "Bottom", "ts_visual_composer_extend" )                         => "ts-simptip-position-bottom",
						__( "Left", "ts_visual_composer_extend" )                           => "ts-simptip-position-left",
					),
					"description"		=> __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
					"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
					"group" 			=> "Tooltips",
				),
				array(
					"type"				=> "dropdown",
					"class"				=> "",
					"heading"			=> __( "Tooltip Style", "ts_visual_composer_extend" ),
					"param_name"		=> "tooltip_style",
					"value"             => array(
						__( "Black", "ts_visual_composer_extend" )                          => "ts-simptip-style-black",
						__( "Gray", "ts_visual_composer_extend" )                           => "ts-simptip-style-gray",
						__( "Green", "ts_visual_composer_extend" )                          => "ts-simptip-style-green",
						__( "Blue", "ts_visual_composer_extend" )                           => "ts-simptip-style-blue",
						__( "Red", "ts_visual_composer_extend" )                            => "ts-simptip-style-red",
						__( "Orange", "ts_visual_composer_extend" )                         => "ts-simptip-style-orange",
						__( "Yellow", "ts_visual_composer_extend" )                         => "ts-simptip-style-yellow",
						__( "Purple", "ts_visual_composer_extend" )                         => "ts-simptip-style-purple",
						__( "Pink", "ts_visual_composer_extend" )                           => "ts-simptip-style-pink",
						__( "White", "ts_visual_composer_extend" )                          => "ts-simptip-style-white",
					),
					"description"		=> __( "Select the tooltip style.", "ts_visual_composer_extend" ),
					"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
					"group" 			=> "Tooltips",
				),
				array(
					"type"				=> "nouislider",
					"heading"			=> __( "Tooltip X-Offset", "ts_visual_composer_extend" ),
					"param_name"		=> "tooltipster_offsetx",
					"value"				=> "0",
					"min"				=> "-100",
					"max"				=> "100",
					"step"				=> "1",
					"unit"				=> 'px',
					"description"		=> __( "Define an optional X-Offset for the tooltip position.", "ts_visual_composer_extend" ),
					"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
					"group" 			=> "Tooltips",
				),
				array(
					"type"				=> "nouislider",
					"heading"			=> __( "Tooltip Y-Offset", "ts_visual_composer_extend" ),
					"param_name"		=> "tooltipster_offsety",
					"value"				=> "0",
					"min"				=> "-100",
					"max"				=> "100",
					"step"				=> "1",
					"unit"				=> 'px',
					"description"		=> __( "Define an optional Y-Offset for the tooltip position.", "ts_visual_composer_extend" ),
					"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
					"group" 			=> "Tooltips",
				),		
				// Link Settings
				array(
					"type"              => "seperator",
					"heading"           => __( "", "ts_visual_composer_extend" ),
					"param_name"        => "seperator_3",
					"value"				=> "",
					"seperator"			=> "Link Settings",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),				
				array(
					"type"              => "messenger",
					"heading"           => __( "", "ts_visual_composer_extend" ),
					"param_name"        => "messenger",
					"color"				=> "#BA0000",
					"weight"			=> "normal",
					"size"				=> "14",
					"value"				=> "",
					"border_top"		=> "false",
					"margin_top"		=> "0",
					"padding_top"		=> "0",
					"message"           => __( "In order to permanently remove a default network value from this element, you MUST enter a single 'space' sign, using the space button on your keyboard.", "ts_visual_composer_extend" ),
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),				
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Email']['icon'] . "'></i> " . __( "Email Address", "ts_visual_composer_extend" ),
					"param_name"        => "email",
					"default"           => (isset($social_values['Email']['link']) ? $social_values['Email']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Phone']['icon'] . "'></i> " . __( "Phone Number", "ts_visual_composer_extend" ),
					"param_name"        => "phone",
					"default"			=> (isset($social_values['Phone']['link']) ? $social_values['Phone']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Cell']['icon'] . "'></i> " . __( "Cell Number", "ts_visual_composer_extend" ),
					"param_name"        => "cell",
					"default"             => (isset($social_values['Cell']['link']) ? $social_values['Cell']['link'] : ""),
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Portfolio']['icon'] . "'></i> " . __( "Portfolio URL", "ts_visual_composer_extend" ),
					"param_name"        => "portfolio",
					"default"			=> (isset($social_values['Portfolio']['link']) ? $social_values['Portfolio']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Link']['icon'] . "'></i> " . __( "Other Link URL", "ts_visual_composer_extend" ),
					"param_name"        => "link",
					"default"			=> (isset($social_values['Link']['link']) ? $social_values['Link']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Behance']['icon'] . "'></i> " . __( "Behance URL", "ts_visual_composer_extend" ),
					"param_name"        => "behance",
					"default"			=> (isset($social_values['Behance']['link']) ? $social_values['Behance']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Digg']['icon'] . "'></i> " . __( "Digg URL", "ts_visual_composer_extend" ),
					"param_name"        => "digg",
					"default"			=> (isset($social_values['Digg']['link']) ? $social_values['Digg']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Dribbble']['icon'] . "'></i> " . __( "Dribbble URL", "ts_visual_composer_extend" ),
					"param_name"        => "dribbble",
					"default"			=> (isset($social_values['Dribbble']['link']) ? $social_values['Dribbble']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Dropbox']['icon'] . "'></i> " . __( "Dropbox URL", "ts_visual_composer_extend" ),
					"param_name"        => "dropbox",
					"default"			=> (isset($social_values['Dropbox']['link']) ? $social_values['Dropbox']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Envato']['icon'] . "'></i> " . __( "Envato URL", "ts_visual_composer_extend" ),
					"param_name"        => "envato",
					"default"			=> (isset($social_values['Envato']['link']) ? $social_values['Envato']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['EverNote']['icon'] . "'></i> " . __( "Evernote URL", "ts_visual_composer_extend" ),
					"param_name"        => "evernote",
					"default"			=> (isset($social_values['EverNote']['link']) ? $social_values['EverNote']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Facebook']['icon'] . "'></i> " . __( "Facebook URL", "ts_visual_composer_extend" ),
					"param_name"        => "facebook",
					"default"			=> (isset($social_values['Facebook']['link']) ? $social_values['Facebook']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Flickr']['icon'] . "'></i> " . __( "Flickr URL", "ts_visual_composer_extend" ),
					"param_name"        => "flickr",
					"default"			=> (isset($social_values['Flickr']['link']) ? $social_values['Flickr']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Github']['icon'] . "'></i> " . __( "GitHub URL", "ts_visual_composer_extend" ),
					"param_name"        => "github",
					"default"			=> (isset($social_values['Github']['link']) ? $social_values['Github']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Google']['icon'] . "'></i> " . __( "Google Plus URL", "ts_visual_composer_extend" ),
					"param_name"        => "gplus",
					"default"			=> (isset($social_values['Google']['link']) ? $social_values['Google']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Instagram']['icon'] . "'></i> " . __( "Instagram URL", "ts_visual_composer_extend" ),
					"param_name"        => "instagram",
					"default"			=> (isset($social_values['Instagram']['link']) ? $social_values['Instagram']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['LastFM']['icon'] . "'></i> " . __( "Last-FM URL", "ts_visual_composer_extend" ),
					"param_name"        => "lastfm",
					"default"			=> (isset($social_values['LastFM']['link']) ? $social_values['LastFM']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['LinkedIn']['icon'] . "'></i> " . __( "Linkedin URL", "ts_visual_composer_extend" ),
					"param_name"        => "linkedin",
					"default"			=> (isset($social_values['LinkedIn']['link']) ? $social_values['LinkedIn']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Paypal']['icon'] . "'></i> " . __( "Paypal URL", "ts_visual_composer_extend" ),
					"param_name"        => "paypal",
					"default"			=> (isset($social_values['Paypal']['link']) ? $social_values['Paypal']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Picasa']['icon'] . "'></i> " . __( "Picasa URL", "ts_visual_composer_extend" ),
					"param_name"        => "picasa",
					"default"			=> (isset($social_values['Picasa']['link']) ? $social_values['Picasa']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Pinterest']['icon'] . "'></i> " . __( "Pinterest URL", "ts_visual_composer_extend" ),
					"param_name"        => "pinterest",
					"default"			=> (isset($social_values['Pinterest']['link']) ? $social_values['Pinterest']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['RSS']['icon'] . "'></i> " . __( "RSS URL", "ts_visual_composer_extend" ),
					"param_name"        => "rss",
					"default"			=> (isset($social_values['RSS']['link']) ? $social_values['RSS']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Skype']['icon'] . "'></i> " . __( "Skype URL", "ts_visual_composer_extend" ),
					"param_name"        => "skype",
					"default"			=> (isset($social_values['Skype']['link']) ? $social_values['Skype']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Soundcloud']['icon'] . "'></i> " . __( "Soundcloud URL", "ts_visual_composer_extend" ),
					"param_name"        => "soundcloud",
					"default"			=> (isset($social_values['Soundcloud']['link']) ? $social_values['Soundcloud']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Spotify']['icon'] . "'></i> " . __( "Spotify URL", "ts_visual_composer_extend" ),
					"param_name"        => "spotify",
					"default"             => (isset($social_values['Spotify']['link']) ? $social_values['Spotify']['link'] : ""),
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['StumbleUpon']['icon'] . "'></i> " . __( "StumbleUpon URL", "ts_visual_composer_extend" ),
					"param_name"        => "stumbleupon",
					"default"			=> (isset($social_values['StumbleUpon']['link']) ? $social_values['StumbleUpon']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Tumblr']['icon'] . "'></i> " . __( "Tumblr URL", "ts_visual_composer_extend" ),
					"param_name"        => "tumblr",
					"default"			=> (isset($social_values['Tumblr']['link']) ? $social_values['Tumblr']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Twitter']['icon'] . "'></i> " . __( "Twitter URL", "ts_visual_composer_extend" ),
					"param_name"        => "twitter",
					"default"			=> (isset($social_values['Twitter']['link']) ? $social_values['Twitter']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Vimeo']['icon'] . "'></i> " . __( "Vimeo URL", "ts_visual_composer_extend" ),
					"param_name"        => "vimeo",
					"default"			=> (isset($social_values['Vimeo']['link']) ? $social_values['Vimeo']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Xing']['icon'] . "'></i> " . __( "Xing URL", "ts_visual_composer_extend" ),
					"param_name"        => "xing",
					"default"			=> (isset($social_values['Xing']['link']) ? $social_values['Xing']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				array(
					"type"              => "social_networks",
					"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['YouTube']['icon'] . "'></i> " . __( "Youtube URL", "ts_visual_composer_extend" ),
					"param_name"        => "youtube",
					"default"			=> (isset($social_values['YouTube']['link']) ? $social_values['YouTube']['link'] : ""),
					"value"				=> "",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Social Networks",
				),
				// Other Icon Settings
				array(
					"type"              => "seperator",
					"heading"           => __( "", "ts_visual_composer_extend" ),
					"param_name"        => "seperator_4",
					"value"				=> "",
					"seperator"			=> "Other Settings",
					"description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Other Settings",
				),
				array(
					"type"              => "textfield",
					"heading"           => __( "Define ID Name", "ts_visual_composer_extend" ),
					"param_name"        => "el_id",
					"value"             => "",
					"description"       => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
					"group" 			=> "Other Settings",
				),
				array(
					"type"              => "textfield",
					"heading"           => __( "Extra Class Name", "ts_visual_composer_extend" ),
					"param_name"        => "el_class",
					"value"             => "",
					"description"       => __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
					"group" 			=> "Other Settings",
				),
				// Load Custom CSS/JS File
				array(
					"type"				=> "load_file",
					"heading"			=> __( "", "ts_visual_composer_extend" ),
					"value"				=> "",
					"param_name"		=> "el_file1",
					"file_type"			=> "js",
					"file_path"			=> "js/ts-visual-composer-extend-element.min.js",
					"description"		=> __( "", "ts_visual_composer_extend" )
				),
				array(
					"type"				=> "load_file",
					"heading"			=> __( "", "ts_visual_composer_extend" ),
					"value"				=> "",
					"param_name"		=> "el_file2",
					"file_type"			=> "css",
					"file_id"			=> "ts-extend-animations",
					"file_path"			=> "css/ts-visual-composer-extend-animations.min.css",
					"description"		=> __( "", "ts_visual_composer_extend" )
				),
			))
		);
    }
?>