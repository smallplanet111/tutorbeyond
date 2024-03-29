<?php
if (!class_exists('VC_Extensions_CQCarousel')) {

    class VC_Extensions_CQCarousel {
        function VC_Extensions_CQCarousel() {
          wpb_map(array(
            "name" => __("Carousel & Gallery", 'vc_cqcarousel_cq'),
            "base" => "cq_vc_cqcarousel",
            "class" => "wpb_cq_vc_extension_carouselgallery",
            "controls" => "full",
            "icon" => "cq_allinone_carouselgallery",
            "category" => __('Sike Extensions', 'js_composer'),
            'description' => __('with slideshow', 'js_composer'),
            "params" => array(
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Display the image as", "vc_cqcarousel_cq"),
                "param_name" => "displaystyle",
                "value" => array(__("Carousel (you can choose lightbox below)", "vc_cqcarousel_cq") => "carousel", __("Gallery (large image on the top, small thumbnail on the bottom)", "vc_cqcarousel_cq") => "gallery"),
                "description" => __("You can how to display the images.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "attach_images",
                "heading" => __("Images:", "vc_cqcarousel_cq"),
                "param_name" => "images",
                "value" => "",
                "description" => __("Select images from media library.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Display how many thumbnails in the row:", "vc_cqcarousel_cq"),
                "param_name" => "slidestoshow",
                "value" => "5",
                "dependency" => Array('element' => "displaystyle", 'value' => array('carousel')),
                "description" => __("", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Display how many thumbnails in the row:", "vc_cqcarousel_cq"),
                "param_name" => "thumbstoshow",
                "value" => "7",
                "dependency" => Array('element' => "displaystyle", 'value' => array('gallery')),
                "description" => __("", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Resize image to this width in thumbnail", "vc_cqcarousel_cq"),
                "param_name" => "thumbwidth1",
                "value" => "320",
                "dependency" => Array('element' => "displaystyle", 'value' => array('carousel')),
                "description" => __("The thumbnail size depends on how many thumbnails will be display in above setting, you can specify the size with larger value to get retina thumbnail.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Resize image to this height in thumbnail", "vc_cqcarousel_cq"),
                "param_name" => "thumbheight1",
                "value" => "200",
                "dependency" => Array('element' => "displaystyle", 'value' => array('carousel')),
                "description" => __("The thumbnail size depends on how many thumbnails will be display in above setting, you can specify the size with larger value to get retina thumbnail.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Resize image to this width in thumbnail", "vc_cqcarousel_cq"),
                "param_name" => "thumbwidth2",
                "value" => "120",
                "dependency" => Array('element' => "displaystyle", 'value' => array('gallery')),
                "description" => __("The thumbnail size depends on how many thumbnails will be display in above setting, you can specify the size with larger value to get retina thumbnail.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Resize image to this height in thumbnail", "vc_cqcarousel_cq"),
                "param_name" => "thumbheight2",
                "value" => "80",
                "dependency" => Array('element' => "displaystyle", 'value' => array('gallery')),
                "description" => __("The thumbnail size depends on how many thumbnails will be display in above setting, you can specify the size with larger value to get retina thumbnail.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "exploded_textarea",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Optional tooltip for each thumbnail", 'vc_cqcarousel_cq'),
                "param_name" => "tooltips",
                "value" => __("Optional tooltip 1,Hello tooltip 2,I'm image 3,I'm image 4", 'vc_cqcarousel_cq'),
                "description" => __("Optional tooltip for each thumbnail, leave it to be blank if you do not want it.", 'vc_cqcarousel_cq')
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Thumbnail on click", "vc_cqcarousel_cq"),
                "param_name" => "onclick",
                "value" => array(__("Open lightbox", "vc_cqcarousel_cq") => "lightbox", __("Do nothing", "vc_cqcarousel_cq") => "", __("Open custom link", "vc_cqcarousel_cq") => "customlink"),
                "dependency" => Array('element' => "displaystyle", 'value' => array('carousel')),
                "description" => __("", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "exploded_textarea",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Custom link for each thumbnail", 'vc_cqcarousel_cq'),
                "param_name" => "customlinks",
                "value" => __("", 'vc_cqcarousel_cq'),
                // "dependency" => Array('element' => "onclick", 'value' => array('customlink')),
                "dependency" => Array('element' => "displaystyle", 'value' => array('carousel')),
                "description" => __("Divide with linebreak (Enter), available with open custom link option.", 'vc_cqcarousel_cq')
              ),
              array(
                "type" => "dropdown",
                "heading" => __("Custom link target", "vc_cqcarousel_cq"),
                "param_name" => "customlinktarget",
                "description" => __('Select how to open custom link.', 'vc_cqcarousel_cq'),
                "dependency" => Array('element' => "displaystyle", 'value' => array('carousel')),
                'value' => array(__("Same window", "vc_cqcarousel_cq") => "_self", __("New window", "vc_cqcarousel_cq") => "_blank")
              ),

             // array(
             //    "type" => "textfield",
             //    "heading" => __("Large image width", "vc_cqcarousel_cq"),
             //    "param_name" => "imagewidth",
             //    "value" => "640",
             //    "dependency" => Array('element' => "displaystyle", 'value' => array('gallery')),
             //    "description" => __("The thumbnail size depends on how many thumbnails will be display in above setting, you can specify the size with larger value to get retina thumbnail.", "vc_cqcarousel_cq")
             // ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Display dot navigation under thumbnails?", "vc_cqcarousel_cq"),
                "param_name" => "dots",
                "value" => array(__("yes", "vc_cqcarousel_cq") => "yes", __("no", "vc_cqcarousel_cq") => "no"),
                "description" => __("", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Display arrow navigation for the thumbnails?", "vc_cqcarousel_cq"),
                "param_name" => "arrows",
                "value" => array(__("yes", "vc_cqcarousel_cq") => "yes", __("no", "vc_cqcarousel_cq") => "no"),
                "description" => __("", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Display arrow navigation for the large image in gallery mode?", "vc_cqcarousel_cq"),
                "param_name" => "largeimagearrows",
                "value" => array(__("yes", "vc_cqcarousel_cq") => "yes", __("no", "vc_cqcarousel_cq") => "no"),
                "dependency" => Array('element' => "displaystyle", 'value' => array('gallery')),
                "description" => __("", "vc_cqcarousel_cq")
              ),
              // array(
              //   "type" => "textfield",
              //   "heading" => __("centerPadding of the thumbnails", "vc_cqcarousel_cq"),
              //   "param_name" => "centerpadding",
              //   "value" => "",
              //   "description" => __("The centerPadding of the thumbnails. The thumbnails will be smaller if it's larger. Default is 50px.", "vc_cqcarousel_cq")
              // ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_cqcarousel_cq",
                "heading" => __("Auto delay slideshow?", "vc_cqcarousel_cq"),
                "param_name" => "autoplay",
                "value" => array(__("no", "vc_cqcarousel_cq") => "no", __("yes", "vc_cqcarousel_cq") => "yes"),
                "description" => __("", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Autoplay speed in milliseconds", "vc_cqcarousel_cq"),
                "param_name" => "autoplayspeed",
                "value" => "4000",
                "dependency" => Array('element' => "autoplay", 'value' => array('yes')),
                "description" => __("The speed of the auto delay slideshow, default is 4000, which stand for 4 seconds.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Width of the container:", "vc_cqcarousel_cq"),
                "param_name" => "containerwidth",
                "value" => "",
                "description" => __("The width of the whole container, defautl is 100%. You can specify a smaller value like 80%. It will be align center automatically.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("max-width of the container:", "vc_cqcarousel_cq"),
                "param_name" => "containermaxwidth",
                "value" => "",
                "description" => __("The max-width of the whole container, defautl is 960px.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("CSS bottom of the dot navigation", "vc_cqcarousel_cq"),
                "param_name" => "dotbottom",
                "value" => "",
                "description" => __("The CSS bottom value of the dot navigation, default is a value like -48px in VC4.3+, you can specify a different value to control it's position in some themes, otherwise leave it to be blank.", "vc_cqcarousel_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Extra class name for the container", "vc_cqcarousel_cq"),
                "param_name" => "extra_class",
                "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "vc_cqcarousel_cq")
             )

           )
       ));

        function cq_vc_cqcarousel_func($atts, $content=null) {
          extract(shortcode_atts(array(
            'images' => '',
            'displaystyle' => 'carousel',
            'thumbwidth1' => '',
            'thumbheight1' => '',
            'thumbwidth2' => '',
            'thumbheight2' => '',
            'onclick' => '',
            'imagewidth' => '',
            'slidestoshow' => '',
            'thumbstoshow' => '5',
            'dots' => '',
            'arrows' => 'no',
            'largeimagearrows' => 'no',
            // 'centerpadding' => '',
            'customlinks' => '',
            'customlinktarget' => '',
            'autoplay' => '',
            'autoplayspeed' => '',
            'containerwidth' => '',
            'containermaxwidth' => '',
            'tooltips' => '',
            'dotbottom' => '',
            'extra_class' => ''
          ), $atts));

          $bottom_byversion = '';
          if (version_compare(WPB_VC_VERSION,  "4.3") == -1) {
              $bottom_byversion = "-24px";
          }



          wp_register_style('slick', plugins_url('../testimonialcarousel/slick/slick.css', __FILE__));
          wp_enqueue_style('slick');

          wp_register_script('slick', plugins_url('../testimonialcarousel/slick/slick.min.js', __FILE__), array("jquery"));
          wp_enqueue_script('slick');
          wp_register_style('vc-extensions-cqcarousel-style', plugins_url('css/style.css', __FILE__), array("slick"));
          wp_enqueue_style('vc-extensions-cqcarousel-style');

          wp_register_style('tooltipster', plugins_url('../profilecard/css/tooltipster.css', __FILE__));
          wp_enqueue_style('tooltipster');


          wp_register_script('tooltipster', plugins_url('../profilecard/js/jquery.tooltipster.min.js', __FILE__), array('jquery'));
          wp_enqueue_script('tooltipster');

          wp_register_script('vc-extensions-cqcarousel-init', plugins_url('js/init.min.js', __FILE__), array("jquery", "slick"));
          wp_enqueue_script('vc-extensions-cqcarousel-init');


          // if($onclick=='lightbox'){
          wp_register_script('fs.boxer', plugins_url('../depthmodal/js/jquery.fs.boxer.min.js', __FILE__), array('jquery'));
          wp_enqueue_script('fs.boxer');
          wp_register_style('fs.boxer', plugins_url('../depthmodal/css/jquery.fs.boxer.css', __FILE__));
          wp_enqueue_style('fs.boxer');
          // }else if($onclick=="customlink"){
          // }

          $customlinks = explode( ',', $customlinks);


          $i = -1;
          $content = wpb_js_remove_wpautop($content); // fix unclosed/unwanted paragraph tags in $content
          $imagesarr = explode(',', $images);
          $tooltips = explode(',', $tooltips);
          // $retina = 'on';
          $thumbwidth = '';
          $thumbheight = '';
          if($displaystyle=="carousel"){
              $thumbwidth = $thumbwidth1;
              $thumbheight = $thumbheight1;
          }else{
              $thumbwidth = $thumbwidth2;
              $thumbheight = $thumbheight2;
          }

          $is_gallery = $displaystyle == "gallery" ? "is-gallery" : "";
          $output = '';

          $output .= '<div class="cqcarousel-container '.$extra_class.'" data-slidestoshow="'.$slidestoshow.'" data-thumbstoshow="'.$thumbstoshow.'" data-dots="'.$dots.'" data-arrows="'.$arrows.'" data-isgallery="'.$is_gallery.'" data-largeimagearrows="'.$largeimagearrows.'" data-autoplay="'.$autoplay.'" data-autoplayspeed="'.$autoplayspeed.'" data-containerwidth="'.$containerwidth.'" data-containermaxwidth="'.$containermaxwidth.'" data-imgnum="'.count($imagesarr).'" data-bottomversion="'.$bottom_byversion.'" data-dotbottom="'.$dotbottom.'">';
          if($displaystyle=="gallery"){
            $output .= '<div class="carousel-gallery">';
            foreach ($imagesarr as $key => $image) {
                $return_img_arr = wp_get_attachment_image_src(trim($image), 'full');
                if($return_img_arr[0]){
                      $output .= '<div>';
                      // $output .= '<img src="'.aq_resize($return_img_arr[0], $retina=="on"?$imagewidth*2:$imagewidth, null, true, true, true).'" />';
                      $output .= '<img src="'.$return_img_arr[0].'" />';
                      $output .= '</div>';
                }
            }

            $output .= '</div>';
          }
          $output .= '<div class="carousel-thumb '.$is_gallery.'">';
          $thumbtext = '';
          $temp_page_index = uniqid();
          foreach ($imagesarr as $key => $image) {
              $i++;
              if(!isset($customlinks[$i])) $customlinks[$i] = '';
              if(!isset($tooltips[$i])) $tooltips[$i] = '';
              $return_img_arr = wp_get_attachment_image_src(trim($image), 'full');
              if($return_img_arr[0]){
                    if($onclick=="lightbox"){
                        if($displaystyle=="carousel"){
                            $thumbtext .= '<div title="'.$tooltips[$i].'">';
                            $thumbtext .= '<a href="'.$return_img_arr[0].'" class="cqcarousel-item">';
                            $thumbtext .= '<img src="'.aq_resize($return_img_arr[0], $thumbwidth, $thumbheight, true, true, true).'" />';
                            $thumbtext .= '</a>';
                            $thumbtext .= '</div>';
                        }else{
                            $thumbtext .= '<div title="'.$tooltips[$i].'">';
                            $thumbtext .= '<img src="'.aq_resize($return_img_arr[0], $thumbwidth, $thumbheight, true, true, true).'" />';
                            $thumbtext .= '</div>';
                        }
                    }else if($onclick=="customlink"){
                        $thumbtext .= '<div title="'.$tooltips[$i].'">';
                        if($customlinks[$i]!="") $thumbtext .= '<a href="'.$customlinks[$i].'" target="'.$customlinktarget.'">';
                        $thumbtext .= '<img src="'.aq_resize($return_img_arr[0], $thumbwidth, $thumbheight, true, true, true).'" />';
                        if($customlinks[$i]!="") $thumbtext .= '</a>';
                        $thumbtext .= '</div>';

                    }else{
                        $thumbtext .= '<div title="'.$tooltips[$i].'">';
                        $thumbtext .= '<img src="'.aq_resize($return_img_arr[0], $thumbwidth, $thumbheight, true, true, true).'" />';
                        $thumbtext .= '</div>';
                    }

              }
          }
          $output .= $thumbtext;
          $output .= '</div>';
          $output .= '</div>';
          return $output;

        }

        add_shortcode('cq_vc_cqcarousel', 'cq_vc_cqcarousel_func');

      }
  }


}

?>
