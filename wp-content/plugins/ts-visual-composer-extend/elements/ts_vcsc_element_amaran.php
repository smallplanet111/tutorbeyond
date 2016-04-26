<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
    if (function_exists('vc_map')) {
        vc_map( array(
            "name"                      => __( "TS Amaran Popup", "ts_visual_composer_extend" ),
            "base"                      => "TS_VCSC_Amaran_Popup",
            "icon" 	                    => "icon-wpb-ts_vcsc_amaran_popup",
            "class"                     => "",
            "category"                  => __( "VC Extensions", "ts_visual_composer_extend" ),
            "description"               => __("Place an Amaran popup element", "ts_visual_composer_extend"),
            "admin_enqueue_js"        	=> "",
            "admin_enqueue_css"       	=> "",
            "params"                    => array(
                // Main Settings
                array(
                    "type"              => "seperator",
                    "heading"           => __( "", "ts_visual_composer_extend" ),
                    "param_name"        => "seperator_1",
					"value"				=> "",
                    "seperator"         => "Main Settings",
                    "description"       => __( "", "ts_visual_composer_extend" )
                ),
				array(
					"type"              => "dropdown",
					"heading"           => __( "Position", "ts_visual_composer_extend" ),
					"param_name"        => "position",
					"value"             => array(
						__( "Top Left", "ts_visual_composer_extend" )					=> "top left",
						__( "Top Right", "ts_visual_composer_extend" )                  => "top right",
						__( "Bottom Left", "ts_visual_composer_extend" )				=> "bottom left",
						__( "Bottom Right", "ts_visual_composer_extend" )				=> "bottom right",
						__( "Center", "ts_visual_composer_extend" )						=> "center center",
					),
					"admin_label"		=> true,
					"description"       => __( "Select where the popup should be positioned.", "ts_visual_composer_extend" ),
				),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Show on Viewport", "ts_visual_composer_extend" ),
					"param_name"        => "viewport_trigger",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"admin_label"		=> true,
					"description"       => __( "Switch the toggle if you want to show the popup only once in viewport; otherwise on page load.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
				),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Trigger Viewport Once", "ts_visual_composer_extend" ),
					"param_name"        => "viewport_once",
					"value"             => "true",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle if the popup should be shown each time it comes into viewport; otherwise just once.", "ts_visual_composer_extend" ),
					"dependency"      	=> array( 'element' => "viewport_trigger", 'value' => 'true' ),
				),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Viewport Wait Time", "ts_visual_composer_extend" ),
                    "param_name"        => "viewport_wait",
                    "value"             => "10000",
                    "min"               => "1000",
                    "max"               => "50000",
                    "step"              => "100",
                    "unit"              => 'ms',
					"description"       => __( "Define how much time needs to pass before the same popup can trigger another viewport event.", "ts_visual_composer_extend" ),
					"dependency"      	=> array( 'element' => "viewport_once", 'value' => 'false' ),
                ),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Show Overlay", "ts_visual_composer_extend" ),
					"param_name"        => "overlay",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle if you want to show the popup on top of a semi-transparent overlay.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
				),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Delay", "ts_visual_composer_extend" ),
                    "param_name"        => "delay",
                    "value"             => "0",
                    "min"               => "0",
                    "max"               => "50000",
                    "step"              => "100",
                    "unit"              => 'ms',
                    "description"       => __( "Define a delay in ms until the popup should be shown, starting from the time it has been triggered.", "ts_visual_composer_extend" )
                ),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Make Sticky", "ts_visual_composer_extend" ),
					"param_name"        => "sticky",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"admin_label"		=> true,
					"description"       => __( "Switch the toggle if you want to make the popup sticky so that is stays on the screen.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
				),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Duration", "ts_visual_composer_extend" ),
                    "param_name"        => "duration",
                    "value"             => "5000",
                    "min"               => "1000",
                    "max"               => "60000",
                    "step"              => "100",
                    "unit"              => 'ms',
					"dependency"      	=> array( 'element' => "sticky", 'value' => 'false' ),
                    "description"       => __( "Select time in ms after which popup should automatically be removed.", "ts_visual_composer_extend" )
                ),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Show Close Button", "ts_visual_composer_extend" ),
					"param_name"        => "button",
					"value"             => "true",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle if you want to show a close button with the popup.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
				),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Close On Click", "ts_visual_composer_extend" ),
					"param_name"        => "close",
					"value"             => "true",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle if you want to close the popup by just clicking on it.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
				),	
				array(
					"type"              => "dropdown",
					"heading"           => __( "Clear Existing", "ts_visual_composer_extend" ),
					"param_name"        => "clear",
					"value"             => array(
						__( "Clear all existing popups.", "ts_visual_composer_extend" )						=> "clearall",
						__( "Clear all existing non-sticky popups.", "ts_visual_composer_extend" )			=> "nonsticky",
						__( "Do not clear existing popups.", "ts_visual_composer_extend" )					=> "clearnone",
					),
					"admin_label"		=> true,
					"description"       => __( "Select if and which existing popups should be cleared before this one is shown.", "ts_visual_composer_extend" ),
				),				
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Show on Mobile", "ts_visual_composer_extend" ),
					"param_name"        => "mobile",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle if you want to show the popup on mobile devices.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
				),
				// Icon / Image Settings
				array(
                    "type"              => "seperator",
                    "heading"           => __( "", "ts_visual_composer_extend" ),
                    "param_name"        => "seperator_2",
					"value"				=> "",
                    "seperator"         => "Icon / Image Settings",
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Icon / Image",
				),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Use Normal Image", "ts_visual_composer_extend" ),
					"param_name"        => "icon_replace",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle to either use and icon or a normal image.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
					"group" 			=> "Icon / Image",
				),
				array(
					'type' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorType,
					'heading' 			=> __( 'Select Icon', 'ts_visual_composer_extend' ),
					'param_name' 		=> 'icon',
					'value'				=> '',
					'source'			=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorValue,
					'settings' 			=> array(
						'emptyIcon' 			=> true,
						'type' 					=> 'extensions',
						'iconsPerPage' 			=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorPager,
						'source' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorSource,
					),
					"description"       => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon for the Amaran popup element.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
					"dependency"        => array( 'element' => "icon_replace", 'value' => 'false' ),
					"group" 			=> "Icon / Image",
				),
				array(
					"type"              => "attach_image",
					"heading"           => __( "Select Image", "ts_visual_composer_extend" ),
					"param_name"        => "icon_image",
					"value"             => "false",
					"description"       => __( "Image must have equal dimensions for scaling purposes (i.e. 100x100).", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "icon_replace", 'value' => 'true' ),
					"group" 			=> "Icon / Image",
				),
				array(
					"type"				=> "switch_button",
					"heading"           => __( "Add Animation", "ts_visual_composer_extend" ),
					"param_name"        => "animations",
					"value"             => "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"       => __( "Switch the toggle if you want to apply an animation to the icon or image.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
					"group" 			=> "Icon / Image",
				),
				array(
					"type"              => "dropdown",
					"heading"           => __( "Icon / Image Animation Style", "ts_visual_composer_extend" ),
					"param_name"        => "animation_effect",
					"width"             => 150,
					"value"             => array(
						__( "One Time Effect while Hover", "ts_visual_composer_extend" )    			=> "ts-hover-css-",
						__( "Infinite (Looping) Effect", "ts_visual_composer_extend" )                	=> "ts-infinite-css-",
					),
					"description"       => __( "Select the animation style for the icon / image.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "animations", 'value' => 'true' ),
					"group" 			=> "Icon / Image",
				),
				array(
					"type"				=> "css3animations",
					"class"				=> "",
					"heading"			=> __("Icon / Image Animation", "ts_visual_composer_extend"),
					"param_name"		=> "animation_class",
					"standard"			=> "false",
					"prefix"			=> "",
					"connector"			=> "css3animations_in",
					"noneselect"		=> "true",
					"default"			=> "",
					"value"				=> "",
					"admin_label"		=> false,
					"description"		=> __("Select the animation for the icon / image.", "ts_visual_composer_extend"),
					"dependency"        => array( 'element' => "animations", 'value' => 'true' ),
					"group" 			=> "Icon / Image",
				),
				array(
					"type"				=> "hidden_input",
					"heading"			=> __( "Icon / Image Animation", "ts_visual_composer_extend" ),
					"param_name"		=> "css3animations_in",
					"value"				=> "",
					"admin_label"		=> true,
					"description"		=> __( "", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "animations", 'value' => 'true' ),
					"group" 			=> "Icon / Image",
				),
				// Content Settings
                array(
                    "type"              => "seperator",
                    "heading"           => __( "", "ts_visual_composer_extend" ),
                    "param_name"        => "seperator_3",
					"value"				=> "",
                    "seperator"         => "Content",
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Content",
                ),
				array(
					"type"              => "textfield",
					"heading"           => __( "Title", "ts_visual_composer_extend" ),
					"param_name"        => "title",
					"value"             => "",
					"admin_label"		=> true,
					"description"       => __( "Enter an optional title for the popup element.", "ts_visual_composer_extend" ),
					"group" 			=> "Content",
				),
                array(
                    "type"				=> "textarea_html",
                    "class"				=> "",
                    "heading"			=> __( "Box Content", "ts_visual_composer_extend" ),
                    "param_name"		=> "content",
                    "value"				=> "",
                    "description"		=> __( "Create the content for the icon box element.", "ts_visual_composer_extend" ),
                    "dependency"		=> "",
					"group" 			=> "Content",
                ),
				array(
					"type"              => "textfield",
					"heading"           => __( "Note", "ts_visual_composer_extend" ),
					"param_name"        => "info",
					"value"             => "",
					"description"       => __( "Enter an optional info or note for the popup element.", "ts_visual_composer_extend" ),
					"group" 			=> "Content",
				),
				// Styling Settings
                array(
                    "type"              => "seperator",
                    "heading"           => __( "", "ts_visual_composer_extend" ),
                    "param_name"        => "seperator_4",
					"value"				=> "",
                    "seperator"         => "Color Settings",
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
                ),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Max. Popup Width", "ts_visual_composer_extend" ),
                    "param_name"        => "width",
                    "value"             => "400",
                    "min"               => "100",
                    "max"               => "2160",
                    "step"              => "1",
                    "unit"              => 'px',
                    "description"       => __( "Define the maximum width for the popup in pixels; will be resized to screen dimensions if necessary.", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
                ),
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Overlay Color", "ts_visual_composer_extend" ),
					"param_name"        => "overlay_color",
					"value"             => "#000000",
					"description"       => __( "Select the title color for the popup.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "overlay", 'value' => 'true' ),
					"group" 			=> "Styling",
				),				
				array(
					"type"				=> "switch_button",
					"heading"			=> __( "Raster Overlay", "ts_visual_composer_extend" ),
					"param_name"		=> "raster_use",
					"value"				=> "false",
					"on"				=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"				=> __( 'No', "ts_visual_composer_extend" ),
					"style"				=> "select",
					"design"			=> "toggle-light",
					"description"		=> __( "Switch the toggle if you want to use a raster with the popup overlay.", "ts_visual_composer_extend" ),
					"dependency"		=> "",
					"dependency"        => array( 'element' => "overlay", 'value' => 'true' ),
					"group" 			=> "Styling",
				),
				array(
					"type"				=> "background",
					"heading"			=> __( "Raster Type", "ts_visual_composer_extend" ),
					"param_name"		=> "raster_type",
					"height"			=> 200,
					"pattern"			=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Rasters_List,
					"value"				=> "",
					"encoding"			=> "false",
					"asimage"			=> "false",
					"thumbsize"			=> 40,
					"description"		=> __( "Select the raster pattern for the popup overlay.", "ts_visual_composer_extend" ),
					"dependency"		=> array( 'element' => "raster_use", 'value' => 'true' ),
					"group" 			=> "Styling",
				),				
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Title Color", "ts_visual_composer_extend" ),
					"param_name"        => "title_color",
					"value"             => "#555555",
					"description"       => __( "Select the title color for the popup.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "title", 'not_empty' => true ),
					"group" 			=> "Styling",
				),
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Title Background", "ts_visual_composer_extend" ),
					"param_name"        => "title_background",
					"value"             => "#ededed",
					"description"       => __( "Select the title background color for the popup.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "title", 'not_empty' => true ),
					"group" 			=> "Styling",
				),
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Close Button Color", "ts_visual_composer_extend" ),
					"param_name"        => "button_color",
					"value"             => "#555555",
					"description"       => __( "Select the close button color for the popup.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "button", 'value' => 'true' ),
					"group" 			=> "Styling",
				),
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Background Color", "ts_visual_composer_extend" ),
					"param_name"        => "background",
					"value"             => "#ffffff",
					"description"       => __( "Select the background color for the popup.", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
				),		
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Icon Color", "ts_visual_composer_extend" ),
					"param_name"        => "icon_color",
					"value"             => "#2980b9",
					"description"       => __( "Select the icon color for the popup.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "icon_replace", 'value' => 'false' ),
					"group" 			=> "Styling",
				),				
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Info Color", "ts_visual_composer_extend" ),
					"param_name"        => "info_color",
					"value"             => "#ededed",
					"description"       => __( "Select the info color for the popup.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "info", 'not_empty' => true ),
					"group" 			=> "Styling",
				),
				array(
					"type"              => "colorpicker",
					"heading"           => __( "Info Background", "ts_visual_composer_extend" ),
					"param_name"        => "info_background",
					"value"             => "#555555",
					"description"       => __( "Select the info background color for the popup.", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "info", 'not_empty' => true ),
					"group" 			=> "Styling",
				),				
                array(
                    "type"              => "seperator",
                    "heading"           => __( "", "ts_visual_composer_extend" ),
                    "param_name"        => "seperator_3",
					"value"				=> "",
                    "seperator"         => "Spacing Settings",
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
                ),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Spacing: Top", "ts_visual_composer_extend" ),
                    "param_name"        => "margin_top",
                    "value"             => "10",
                    "min"               => "0",
                    "max"               => "250",
                    "step"              => "1",
                    "unit"              => 'px',
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
                ),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Spacing: Bottom", "ts_visual_composer_extend" ),
                    "param_name"        => "margin_bottom",
                    "value"             => "10",
                    "min"               => "0",
                    "max"               => "250",
                    "step"              => "1",
                    "unit"              => 'px',
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
                ),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Spacing: Left", "ts_visual_composer_extend" ),
                    "param_name"        => "margin_left",
                    "value"             => "10",
                    "min"               => "0",
                    "max"               => "50",
                    "step"              => "1",
                    "unit"              => 'px',
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
                ),
                array(
                    "type"              => "nouislider",
                    "heading"           => __( "Spacing: Right", "ts_visual_composer_extend" ),
                    "param_name"        => "margin_right",
                    "value"             => "10",
                    "min"               => "0",
                    "max"               => "50",
                    "step"              => "1",
                    "unit"              => 'px',
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Styling",
                ),
				// Animation Settings
                array(
                    "type"              => "seperator",
                    "heading"           => __( "", "ts_visual_composer_extend" ),
                    "param_name"        => "seperator_5",
					"value"				=> "",
                    "seperator"         => "Other Animations",
                    "description"       => __( "", "ts_visual_composer_extend" ),
					"group" 			=> "Other Animations",
                ),
				array(
					"type"              => "dropdown",
					"heading"           => __( "Entry Animation", "ts_visual_composer_extend" ),
					"param_name"        => "entry",
					"value"             => array(
						__( "FadeIn or CSS3 Animation", "ts_visual_composer_extend" )	=> "fadeIn",
						__( "Slide Left", "ts_visual_composer_extend" )					=> "slideLeft",
						__( "Slide Right", "ts_visual_composer_extend" )				=> "slideRight",
						__( "Slide Top", "ts_visual_composer_extend" )					=> "slideTop",
						__( "Slide Bottom", "ts_visual_composer_extend" )				=> "slideBottom",
					),
					"admin_label"		=> true,
					"description"       => __( "Select how the popup should enter the screen.", "ts_visual_composer_extend" ),
					"group" 			=> "Other Animations",
				),
				array(
					"type"				=> "css3animations",
					"class"				=> "",
					"heading"			=> __("CSS3 Animation", "ts_visual_composer_extend"),
					"param_name"		=> "entry_animation_class",
					"standard"			=> "false",
					"prefix"			=> "ts-viewport-css-",
					"connector"			=> "entry_css3animations_in",
					"noneselect"		=> "true",
					"default"			=> "",
					"value"				=> "",
					"admin_label"		=> false,
					"description"		=> __("Select the entry CSS3 animation for the popup.", "ts_visual_composer_extend"),
					"dependency"        => array( 'element' => "entry", 'value' => array('fadeIn') ),
					"group" 			=> "Other Animations",
				),
				array(
					"type"				=> "hidden_input",
					"heading"			=> __( "Entry CSS3 Animation", "ts_visual_composer_extend" ),
					"param_name"		=> "entry_css3animations_in",
					"value"				=> "",
					"description"		=> __( "", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "entry_animations", 'value' => 'true' ),
					"group" 			=> "Other Animations",
				),
				array(
					"type"              => "dropdown",
					"heading"           => __( "Exit Animation", "ts_visual_composer_extend" ),
					"param_name"        => "exit",
					"value"             => array(
						__( "FadeOut or CSS3 Animation", "ts_visual_composer_extend" )	=> "fadeOut",
						__( "Slide Left", "ts_visual_composer_extend" )					=> "slideLeft",
						__( "Slide Right", "ts_visual_composer_extend" )				=> "slideRight",
						__( "Slide Top", "ts_visual_composer_extend" )					=> "slideTop",
						__( "Slide Bottom", "ts_visual_composer_extend" )				=> "slideBottom",
					),
					"admin_label"		=> true,
					"description"       => __( "Select how the popup should leave the screen.", "ts_visual_composer_extend" ),
					"group" 			=> "Other Animations",
				),
				array(
					"type"				=> "css3animations",
					"class"				=> "",
					"heading"			=> __("CSS3 Animation", "ts_visual_composer_extend"),
					"param_name"		=> "exit_animation_class",
					"standard"			=> "false",
					"prefix"			=> "ts-viewport-css-",
					"connector"			=> "exit_css3animations_in",
					"noneselect"		=> "true",
					"default"			=> "",
					"value"				=> "",
					"admin_label"		=> false,
					"description"		=> __("Select the exit CSS3 animation for the popup.", "ts_visual_composer_extend"),
					"dependency"        => array( 'element' => "exit", 'value' => array('fadeOut') ),
					"group" 			=> "Other Animations",
				),
				array(
					"type"				=> "hidden_input",
					"heading"			=> __( "Exit CSS3 Animation", "ts_visual_composer_extend" ),
					"param_name"		=> "exit_css3animations_in",
					"value"				=> "",
					"description"		=> __( "", "ts_visual_composer_extend" ),
					"dependency"        => array( 'element' => "entry_animations", 'value' => 'true' ),
					"group" 			=> "Other Animations",
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