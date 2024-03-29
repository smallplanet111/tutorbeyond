<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
    if (function_exists('vc_map')) {
        vc_map( array(
            "name"                      	=> __( "TS Title Textillate", "ts_visual_composer_extend" ),
            "base"                      	=> "TS-VCSC-Textillate",
            "icon" 	                    	=> "icon-wpb-ts_vcsc_textillate",
            "class"                     	=> "",
            "category"                  	=> __( "VC Extensions", "ts_visual_composer_extend" ),
            "description"               	=> __("Place a title with Textillate effect", "ts_visual_composer_extend"),
            "admin_enqueue_js"        		=> "",
            "admin_enqueue_css"       		=> "",
            "params"                    	=> array(
                // Content Settings
                array(
                    "type"              	=> "seperator",
                    "heading"           	=> __( "", "ts_visual_composer_extend" ),
                    "param_name"        	=> "seperator_1",
					"value"					=> "",
                    "seperator"				=> "Content Settings",
                    "description"       	=> __( "", "ts_visual_composer_extend" )
                ),
                array(
                    "type"              	=> "textfield",
                    "heading"           	=> __( "Text", "ts_visual_composer_extend" ),
                    "param_name"        	=> "textillate",
                    "value"             	=> "",
					"admin_label"       	=> true,
                    "description"       	=> __( "Enter the text to be animated on viewport entry.", "ts_visual_composer_extend" ),
                    "dependency"        	=> ""
                ),
                array(
                    "type"              	=> "nouislider",
                    "heading"           	=> __( "Font Size", "ts_visual_composer_extend" ),
                    "param_name"        	=> "font_size",
                    "value"             	=> "36",
                    "min"               	=> "16",
                    "max"               	=> "512",
                    "step"              	=> "1",
                    "unit"              	=> 'px',
					"admin_label"			=> true,
                    "description"       	=> __( "Select the font size for the animated text.", "ts_visual_composer_extend" ),
                    "dependency"        	=> ""
                ),
                array(
                    "type"              	=> "colorpicker",
                    "heading"           	=> __( "Font Color", "ts_visual_composer_extend" ),
                    "param_name"        	=> "font_color",
                    "value"             	=> "#000000",
                    "description"      	 	=> __( "Define the font color for the animated text.", "ts_visual_composer_extend" ),
                    "dependency"        	=> ""
                ),
                array(
                    "type"              	=> "dropdown",
                    "heading"           	=> __( "Font Weight", "ts_visual_composer_extend" ),
                    "param_name"        	=> "font_weight",
                    "width"             	=> 150,
                    "value"             	=> array(
                        __( 'Default', "ts_visual_composer_extend" )  => "inherit",
                        __( 'Bold', "ts_visual_composer_extend" )     => "bold",
                        __( 'Bolder', "ts_visual_composer_extend" )   => "bolder",
                        __( 'Normal', "ts_visual_composer_extend" )   => "normal",
                        __( 'Light', "ts_visual_composer_extend" )    => "300",
                    ),
                    "description"       	=> __( "Select the font weight for the animated text.", "ts_visual_composer_extend" )
                ),
				array(
					"type"              	=> "dropdown",
					"heading"           	=> __( "Text Align", "ts_visual_composer_extend" ),
					"param_name"        	=> "font_align",
					"width"             	=> 150,
                    "value"             	=> array(
                        __( 'Left', "ts_visual_composer_extend" )  		=> "left",
                        __( 'Right', "ts_visual_composer_extend" )     	=> "right",
                        __( 'Center', "ts_visual_composer_extend" )   	=> "center",
                        __( 'Justify', "ts_visual_composer_extend" )   	=> "justify",
                    ),
					"description"       	=> __( "Select the alignment for the animated text.", "ts_visual_composer_extend" ),
					"dependency"        	=> ""
				),
                array(
                    "type"              	=> "fontsmanager",
                    "heading"           	=> __( "Font Family", "ts_visual_composer_extend" ),
                    "param_name"        	=> "font_family",
                    "value"             	=> "",
					"default"				=> "true",
					"connector"				=> "font_type",
                    "description"       	=> __( "Select the font to be used for the icon title text.", "ts_visual_composer_extend" ),
                ),
                array(
                    "type"              	=> "hidden_input",
                    "param_name"        	=> "font_type",
                    "value"             	=> "",
                    "description"       	=> __( "", "ts_visual_composer_extend" )
                ),				
                // Content Settings
                array(
                    "type"              	=> "seperator",
                    "heading"           	=> __( "", "ts_visual_composer_extend" ),
                    "param_name"        	=> "seperator_2",
					"value"					=> "",
                    "seperator"				=> "Animation Settings",
                    "description"       	=> __( "", "ts_visual_composer_extend" )
                ),
                array(
                    "type"              	=> "nouislider",
                    "heading"           	=> __( "Animation Delay", "ts_visual_composer_extend" ),
                    "param_name"        	=> "animation_delay",
                    "value"             	=> "100",
                    "min"               	=> "100",
                    "max"               	=> "20000",
                    "step"              	=> "100",
                    "unit"              	=> 'ms',
                    "description"       	=> __( "Select the initial delay until the animation should be started once triggered.", "ts_visual_composer_extend" ),
                ),
                array(
                    "type"                  => "dropdown",
                    "heading"               => __( "In-Animation Type", "ts_visual_composer_extend" ),
                    "param_name"            => "animation_in",
                    "value"                 => array(
						__( 'Bounce', "ts_visual_composer_extend" )						=> "bounce",
						__( 'Bounce In', "ts_visual_composer_extend" )					=> "bounceIn",
						__( 'Bounce In Down', "ts_visual_composer_extend" )				=> "bounceInDown",
						__( 'Bounce In Up', "ts_visual_composer_extend" )				=> "bounceInUp",
						__( 'Bounce In Left', "ts_visual_composer_extend" )				=> "bounceInLeft",
						__( 'Bounce In Right', "ts_visual_composer_extend" )			=> "bounceInRight",
						__( 'Bounce Out', "ts_visual_composer_extend" )					=> "bounceOut",
						__( 'Bounce Out Down', "ts_visual_composer_extend" )			=> "bounceOutDown",
						__( 'Bounce Out Up', "ts_visual_composer_extend" )				=> "bounceOutUp",
						__( 'Bounce Out Left', "ts_visual_composer_extend" )			=> "bounceOutLeft",
						__( 'Bounce Out Right', "ts_visual_composer_extend" )			=> "bounceOutRight",
						__( 'Fade In', "ts_visual_composer_extend" )					=> "fadeIn",
						__( 'Fade In Up', "ts_visual_composer_extend" )					=> "fadeInUp",
						__( 'Fade In Down', "ts_visual_composer_extend" )				=> "fadeInDown",
						__( 'Fade In Left', "ts_visual_composer_extend" )				=> "fadeInLeft",
						__( 'Fade In Right', "ts_visual_composer_extend" )				=> "fadeInRight",
						__( 'Fade In Up Big', "ts_visual_composer_extend" )				=> "fadeInUpBig",
						__( 'Fade In Down Big', "ts_visual_composer_extend" )			=> "fadeInDownBig",
						__( 'Fade In Left Big', "ts_visual_composer_extend" )			=> "fadeInLeftBig",
						__( 'Fade In Right Big', "ts_visual_composer_extend" )			=> "fadeInRightBig",
						__( 'Fade Out', "ts_visual_composer_extend" )					=> "fadeOut",
						__( 'Fade Out Up', "ts_visual_composer_extend" )				=> "fadeOutUp",
						__( 'Fade Out Down', "ts_visual_composer_extend" )				=> "fadeOutDown",
						__( 'Fade Out Left', "ts_visual_composer_extend" )				=> "fadeOutLeft",
						__( 'Fade Out Right', "ts_visual_composer_extend" )				=> "fadeOutRight",
						__( 'Fade Out Up Big', "ts_visual_composer_extend" )			=> "fadeOutUpBig",
						__( 'Fade Out Down Big', "ts_visual_composer_extend" )			=> "fadeOutDownBig",
						__( 'Fade Out Left Big', "ts_visual_composer_extend" )			=> "fadeOutLeftBig",
						__( 'Fade Out Right Big', "ts_visual_composer_extend" )			=> "fadeOutRightBig",
						__( 'Flash', "ts_visual_composer_extend" )						=> "flash",
						__( 'Flip', "ts_visual_composer_extend" )						=> "flip",
						__( 'Flip In X', "ts_visual_composer_extend" )					=> "flipInX",
						__( 'Flip Out X', "ts_visual_composer_extend" )					=> "flipOutX",
						__( 'Flip In Y', "ts_visual_composer_extend" )					=> "flipInY",
						__( 'Flip Out Y', "ts_visual_composer_extend" )					=> "flipOutY",
						__( 'Hinge', "ts_visual_composer_extend" )						=> "hinge",
						__( 'Pulse', "ts_visual_composer_extend" )						=> "pulse",
						__( 'Roll In', "ts_visual_composer_extend" )					=> "rollIn",
						__( 'Roll Out', "ts_visual_composer_extend" )					=> "rollOut",
						__( 'Rotate Full', "ts_visual_composer_extend" )				=> "rotateFull",
						__( 'Rotate In', "ts_visual_composer_extend" )					=> "rotateIn",
						__( 'Rotate In Down Left', "ts_visual_composer_extend" )		=> "rotateInDownLeft",
						__( 'Rotate In Down Right', "ts_visual_composer_extend" )		=> "rotateInDownRight",
						__( 'Rotate In Up Left', "ts_visual_composer_extend" )			=> "rotateInUpLeft",
						__( 'Rotate In Up Right', "ts_visual_composer_extend" )			=> "rotateInUpRight",
						__( 'Rotate Out', "ts_visual_composer_extend" )					=> "rotateOut",
						__( 'Rotate Out Down Left', "ts_visual_composer_extend" )		=> "rotateOutDownLeft",
						__( 'Rotate Out Down Right', "ts_visual_composer_extend" )		=> "rotateOutDownRight",
						__( 'Rotate Out Up Left', "ts_visual_composer_extend" )			=> "rotateOutUpLeft",
						__( 'Rotate Out Up Right', "ts_visual_composer_extend" )		=> "rotateOutUpRight",
						__( 'Shake', "ts_visual_composer_extend" )						=> "shake",
						__( 'Swing', "ts_visual_composer_extend" )						=> "swing",
						__( 'Tada', "ts_visual_composer_extend" )						=> "tada",
						__( 'Wobble', "ts_visual_composer_extend" )						=> "wobble",
					),
                    "description"           => __( "Select the in-animation type for the text string.", "ts_visual_composer_extend" ),
					"admin_label"       	=> true,
                    "dependency"            => ""
                ),
                array(
                    "type"              	=> "dropdown",
                    "heading"           	=> __( "In-Animation Order", "ts_visual_composer_extend" ),
                    "param_name"        	=> "text_order_in",
                    "width"             	=> 150,
                    "value"             	=> array(
						__( 'Sequence', "ts_visual_composer_extend" )					=> "sequence",
                        __( 'Reverse', "ts_visual_composer_extend" )					=> "reverse",
                        __( 'Sync', "ts_visual_composer_extend" )        				=> "sync",
						__( 'Shuffle', "ts_visual_composer_extend" )        			=> "shuffle",
                    ),
                    "description"       	=> __( "Select how the in-animation should animate the individual characters.", "ts_visual_composer_extend" )
                ),
				array(
					"type"					=> "switch_button",
					"heading"           	=> __( "Loop Animation", "ts_visual_composer_extend" ),
					"param_name"        	=> "animation_loop",
					"value"             	=> "false",
					"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
					"off"					=> __( 'No', "ts_visual_composer_extend" ),
					"style"					=> "select",
					"design"				=> "toggle-light",
					"admin_label"       	=> true,
					"description"       	=> __( "Switch the toggle if you want to loop (repeat) the text animation.", "ts_visual_composer_extend" ),
                    "dependency"        	=> ""
				),
                array(
                    "type"              	=> "nouislider",
                    "heading"           	=> __( "Animation Pause", "ts_visual_composer_extend" ),
                    "param_name"        	=> "animation_pause",
                    "value"             	=> "4000",
                    "min"               	=> "1000",
                    "max"               	=> "20000",
                    "step"              	=> "100",
                    "unit"              	=> 'ms',
                    "description"       	=> __( "Select for how long the text should be shown until loop starts over.", "ts_visual_composer_extend" ),
					"dependency"        	=> array( 'element' => "animation_loop", 'value' => 'true' )
                ),
                array(
                    "type"                  => "dropdown",
                    "heading"               => __( "Out-Animation Type", "ts_visual_composer_extend" ),
                    "param_name"            => "animation_out",
                    "value"                 => array(
						__( 'Bounce', "ts_visual_composer_extend" )						=> "bounce",
						__( 'Bounce In', "ts_visual_composer_extend" )					=> "bounceIn",
						__( 'Bounce In Down', "ts_visual_composer_extend" )				=> "bounceInDown",
						__( 'Bounce In Up', "ts_visual_composer_extend" )				=> "bounceInUp",
						__( 'Bounce In Left', "ts_visual_composer_extend" )				=> "bounceInLeft",
						__( 'Bounce In Right', "ts_visual_composer_extend" )			=> "bounceInRight",
						__( 'Bounce Out', "ts_visual_composer_extend" )					=> "bounceOut",
						__( 'Bounce Out Down', "ts_visual_composer_extend" )			=> "bounceOutDown",
						__( 'Bounce Out Up', "ts_visual_composer_extend" )				=> "bounceOutUp",
						__( 'Bounce Out Left', "ts_visual_composer_extend" )			=> "bounceOutLeft",
						__( 'Bounce Out Right', "ts_visual_composer_extend" )			=> "bounceOutRight",
						__( 'Fade In', "ts_visual_composer_extend" )					=> "fadeIn",
						__( 'Fade In Up', "ts_visual_composer_extend" )					=> "fadeInUp",
						__( 'Fade In Down', "ts_visual_composer_extend" )				=> "fadeInDown",
						__( 'Fade In Left', "ts_visual_composer_extend" )				=> "fadeInLeft",
						__( 'Fade In Right', "ts_visual_composer_extend" )				=> "fadeInRight",
						__( 'Fade In Up Big', "ts_visual_composer_extend" )				=> "fadeInUpBig",
						__( 'Fade In Down Big', "ts_visual_composer_extend" )			=> "fadeInDownBig",
						__( 'Fade In Left Big', "ts_visual_composer_extend" )			=> "fadeInLeftBig",
						__( 'Fade In Right Big', "ts_visual_composer_extend" )			=> "fadeInRightBig",
						__( 'Fade Out', "ts_visual_composer_extend" )					=> "fadeOut",
						__( 'Fade Out Up', "ts_visual_composer_extend" )				=> "fadeOutUp",
						__( 'Fade Out Down', "ts_visual_composer_extend" )				=> "fadeOutDown",
						__( 'Fade Out Left', "ts_visual_composer_extend" )				=> "fadeOutLeft",
						__( 'Fade Out Right', "ts_visual_composer_extend" )				=> "fadeOutRight",
						__( 'Fade Out Up Big', "ts_visual_composer_extend" )			=> "fadeOutUpBig",
						__( 'Fade Out Down Big', "ts_visual_composer_extend" )			=> "fadeOutDownBig",
						__( 'Fade Out Left Big', "ts_visual_composer_extend" )			=> "fadeOutLeftBig",
						__( 'Fade Out Right Big', "ts_visual_composer_extend" )			=> "fadeOutRightBig",
						__( 'Flash', "ts_visual_composer_extend" )						=> "flash",
						__( 'Flip', "ts_visual_composer_extend" )						=> "flip",
						__( 'Flip In X', "ts_visual_composer_extend" )					=> "flipInX",
						__( 'Flip Out X', "ts_visual_composer_extend" )					=> "flipOutX",
						__( 'Flip In Y', "ts_visual_composer_extend" )					=> "flipInY",
						__( 'Flip Out Y', "ts_visual_composer_extend" )					=> "flipOutY",
						__( 'Hinge', "ts_visual_composer_extend" )						=> "hinge",
						__( 'Pulse', "ts_visual_composer_extend" )						=> "pulse",
						__( 'Roll In', "ts_visual_composer_extend" )					=> "rollIn",
						__( 'Roll Out', "ts_visual_composer_extend" )					=> "rollOut",
						__( 'Rotate Full', "ts_visual_composer_extend" )				=> "rotateFull",
						__( 'Rotate In', "ts_visual_composer_extend" )					=> "rotateIn",
						__( 'Rotate In Down Left', "ts_visual_composer_extend" )		=> "rotateInDownLeft",
						__( 'Rotate In Down Right', "ts_visual_composer_extend" )		=> "rotateInDownRight",
						__( 'Rotate In Up Left', "ts_visual_composer_extend" )			=> "rotateInUpLeft",
						__( 'Rotate In Up Right', "ts_visual_composer_extend" )			=> "rotateInUpRight",
						__( 'Rotate Out', "ts_visual_composer_extend" )					=> "rotateOut",
						__( 'Rotate Out Down Left', "ts_visual_composer_extend" )		=> "rotateOutDownLeft",
						__( 'Rotate Out Down Right', "ts_visual_composer_extend" )		=> "rotateOutDownRight",
						__( 'Rotate Out Up Left', "ts_visual_composer_extend" )			=> "rotateOutUpLeft",
						__( 'Rotate Out Up Right', "ts_visual_composer_extend" )		=> "rotateOutUpRight",
						__( 'Shake', "ts_visual_composer_extend" )						=> "shake",
						__( 'Swing', "ts_visual_composer_extend" )						=> "swing",
						__( 'Tada', "ts_visual_composer_extend" )						=> "tada",
						__( 'Wobble', "ts_visual_composer_extend" )						=> "wobble",
					),
                    "description"           => __( "Select the out-animation type for the text string.", "ts_visual_composer_extend" ),
					"dependency"        	=> array( 'element' => "animation_loop", 'value' => 'true' )
                ),
                array(
                    "type"              	=> "dropdown",
                    "heading"           	=> __( "Out-Animation Order", "ts_visual_composer_extend" ),
                    "param_name"        	=> "text_order_out",
                    "width"             	=> 150,
                    "value"             	=> array(
						__( 'Sequence', "ts_visual_composer_extend" )			=> "sequence",
                        __( 'Reverse', "ts_visual_composer_extend" )			=> "reverse",
                        __( 'Sync', "ts_visual_composer_extend" )        		=> "sync",
						__( 'Shuffle', "ts_visual_composer_extend" )        	=> "shuffle",
                    ),
                    "description"       	=> __( "Select how the out-animation should animate the individual characters.", "ts_visual_composer_extend" ),
					"dependency"        	=> array( 'element' => "animation_loop", 'value' => 'true' )
                ),
                // Other Settings
                array(
                    "type"              	=> "seperator",
                    "heading"           	=> __( "", "ts_visual_composer_extend" ),
                    "param_name"        	=> "seperator_3",
					"value"					=> "",
                    "seperator"				=> "Other Settings",
                    "description"       	=> __( "", "ts_visual_composer_extend" ),
					"group"					=> "Other Settings",
                ),
                array(
                    "type"              	=> "nouislider",
                    "heading"           	=> __( "Margin: Top", "ts_visual_composer_extend" ),
                    "param_name"        	=> "margin_top",
                    "value"             	=> "0",
                    "min"               	=> "-50",
                    "max"               	=> "500",
                    "step"              	=> "1",
                    "unit"              	=> 'px',
                    "description"       	=> __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
					"group"					=> "Other Settings",
                ),
                array(
                    "type"              	=> "nouislider",
                    "heading"           	=> __( "Margin: Bottom", "ts_visual_composer_extend" ),
                    "param_name"        	=> "margin_bottom",
                    "value"             	=> "0",
                    "min"               	=> "-50",
                    "max"               	=> "500",
                    "step"              	=> "1",
                    "unit"              	=> 'px',
                    "description"       	=> __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
					"group"					=> "Other Settings",
                ),
                array(
                    "type"              	=> "textfield",
                    "heading"           	=> __( "Define ID Name", "ts_visual_composer_extend" ),
                    "param_name"        	=> "el_id",
                    "value"             	=> "",
                    "description"       	=> __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
					"group"					=> "Other Settings",
                ),
                array(
                    "type"              	=> "textfield",
                    "heading"           	=> __( "Extra Class Name", "ts_visual_composer_extend" ),
                    "param_name"        	=> "el_class",
                    "value"             	=> "",
                    "description"       	=> __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
					"group"					=> "Other Settings",
                ),
				// Load Custom CSS/JS File
				array(
					"type"              	=> "load_file",
					"heading"           	=> __( "", "ts_visual_composer_extend" ),
                    "param_name"        	=> "el_file",
					"value"             	=> "",
					"file_type"         	=> "js",
					"file_path"         	=> "js/ts-visual-composer-extend-element.min.js",
					"description"       	=> __( "", "ts_visual_composer_extend" )
				),
            ))
        );
    }
?>