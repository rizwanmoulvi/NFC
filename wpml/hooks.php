<?php


add_filter( 'wpml_elementor_widgets_to_translate', 'wpml_widgets_to_translate_filter' );

function wpml_widgets_to_translate_filter( $widgets ) {

  
  

  $define_widgets = array(

    // ovacrs_heading1
    'ovacrs_heading1' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'AREA'
      ),
      array(
        'field' => 'style',
        'type' =>  __( 'style', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'align',
        'type' =>  __( 'align', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'show_border',
        'type' =>  __( 'show_border', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),


    // ovacrs_heading2
    'ovacrs_heading2' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'AREA'
      ),
      array(
        'field' => 'highlight_title',
        'type' =>  __( 'highlight title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'highlight_icon',
        'type' =>  __( 'highlight_icon', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),


    // ovacrs_heading3
    'ovacrs_heading3' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'AREA'
      ),
      array(
        'field' => 'align',
        'type' =>  __( 'align', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'highlight_icon',
        'type' =>  __( 'highlight_icon', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'show_border',
        'type' =>  __( 'show border', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),

    // ovacrs_heading4
    'ovacrs_heading4' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'AREA'
      ),
      array(
        'field' => 'highlight_title',
        'type' =>  __( 'highlight title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     
      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),

    // ovacrs_about_info
    'ovacrs_about_info' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'number',
        'type' =>  __( 'number', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'align',
        'type' =>  __( 'align', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     
      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),


     // ovacrs_about_info
    'ovacrs_blog' => array(

      array(
        'field' => 'category',
        'type' =>  __( 'category', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'total_count',
        'type' =>  __( 'total count', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'show_thumb',
        'type' =>  __( 'show thumb', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     
      array(
        'field' => 'show_title',
        'type' =>  __( 'show title', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_desc',
        'type' =>  __( 'show description', 'ireca' ),
        'editor_type' => 'LINE'
      ),


      array(
        'field' => 'show_date',
        'type' =>  __( 'show date', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_cat',
        'type' =>  __( 'show category', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_comment',
        'type' =>  __( 'show comment', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'read_more_text',
        'type' =>  __( 'read more text', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'view_all_text',
        'type' =>  __( 'view all text', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'view_all_link',
        'type' =>  __( 'view all link', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'style',
        'type' =>  __( 'style', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),


    // ovacrs_booking_form
    'ovacrs_booking_form' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'category',
        'type' =>  __( 'category', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'total_count',
        'type' =>  __( 'total count', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     
      array(
        'field' => 'order_by',
        'type' =>  __( 'order by', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'order',
        'type' =>  __( 'order', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_extra_resource',
        'type' =>  __( 'show extra resource', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'text_submit',
        'type' =>  __( 'Text Submit', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),



    // ovacrs_booking_form_request
    'ovacrs_booking_form_request' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'category',
        'type' =>  __( 'category', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'total_count',
        'type' =>  __( 'total count', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     
      array(
        'field' => 'order_by',
        'type' =>  __( 'order by', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'order',
        'type' =>  __( 'order', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_extra_resource',
        'type' =>  __( 'show extra resource', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'text_submit',
        'type' =>  __( 'Text Submit', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),


    // ovacrs_btn_action
    'ovacrs_btn_action' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'AREA'
      ),
      array(
        'field' => 'btn_text',
        'type' =>  __( 'button text', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     
      array(
        'field' => 'btn_link',
        'type' =>  __( 'Button link', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'btn_target',
        'type' =>  __( 'button target', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'text_color',
        'type' =>  __( 'Text Color', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'border_left',
        'type' =>  __( 'Border Left', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'class',
        'type' =>  __( 'Class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),


     // ovacrs_contact_box
    'ovacrs_contact_box' => array(

      array(
        'field' => 'icon',
        'type' =>  __( 'icon', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'items',
        'type' =>  __( 'items', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     
      array(
        'field' => 'show_line',
        'type' =>  __( 'show line', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'class',
        'type' =>  __( 'Class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),

     // ovacrs_divide
    'ovacrs_divide' => array(

      array(
        'field' => 'image',
        'type' =>  __( 'image', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'class',
        'type' =>  __( 'Class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      

    ),


    // ovacrs_img_skew
    'ovacrs_img_skew' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'img',
        'type' =>  __( 'img', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'align',
        'type' =>  __( 'align', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'desc',
        'type' =>  __( 'Description', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'phone',
        'type' =>  __( 'phone', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'email',
        'type' =>  __( 'email', 'ireca' ),
        'editor_type' => 'LINE'
      ),
        array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      


    ),



    // ovacrs_info
    'ovacrs_info' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'show_line',
        'type' =>  __( 'show line', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'color',
        'type' =>  __( 'color', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'desc',
        'type' =>  __( 'Description', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'link',
        'type' =>  __( 'link', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'target',
        'type' =>  __( 'target', 'ireca' ),
        'editor_type' => 'LINE'
      ),
        array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      


    ),


    // ovacrs_map
    'ovacrs_map' => array(

      array(
        'field' => 'cat_map',
        'type' =>  __( 'Category', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'height_map',
        'type' =>  __( 'height map', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'zoom_map',
        'type' =>  __( 'zoom map', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'readmore_text',
        'type' =>  __( 'Readmore text', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      


    ),



    // ovacrs_product_filter
    'ovacrs_product_filter' => array(

      array(
        'field' => 'array_slug',
        'type' =>  __( 'array slug', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'tab_active',
        'type' =>  __( 'tab active', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'filters',
        'type' =>  __( 'filters', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'orderby',
        'type' =>  __( 'orderby', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'order',
        'type' =>  __( 'order', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'total_items_cat',
        'type' =>  __( 'total_items_cat', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'auto_slide',
        'type' =>  __( 'auto_slide', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


      array(
        'field' => 'product_style',
        'type' =>  __( 'product style', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'total_columns_slide',
        'type' =>  __( 'total columns slide', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'total_items_column',
        'type' =>  __( 'total items column', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'total_feature_dis',
        'type' =>  __( 'total feature display', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'butotn_text',
        'type' =>  __( 'butotn text', 'ireca' ),
        'editor_type' => 'LINE'
      ),


      array(
        'field' => 'show_tab',
        'type' =>  __( 'show tab', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'align_tab',
        'type' =>  __( 'align tab', 'ireca' ),
        'editor_type' => 'LINE'
      ),


      array(
        'field' => 'style_tab',
        'type' =>  __( 'Style tab', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_nav',
        'type' =>  __( 'Show Navigation', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'icon_nav',
        'type' =>  __( 'Icon Navigation', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'show_available',
        'type' =>  __( 'show available', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'section_dots',
        'type' =>  __( 'show dot', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_thumbnail',
        'type' =>  __( 'show thumbnail', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_price',
        'type' =>  __( 'show Price', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'show_time_rental',
        'type' =>  __( 'show Time rental', 'ireca' ),
        'editor_type' => 'LINE'
      ),


        array(
        'field' => 'show_title',
        'type' =>  __( 'show Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),

           array(
        'field' => 'show_rating_star',
        'type' =>  __( 'show rating star', 'ireca' ),
        'editor_type' => 'LINE'
      ),

            array(
        'field' => 'show_rating_text',
        'type' =>  __( 'show rating text', 'ireca' ),
        'editor_type' => 'LINE'
      ),

             array(
        'field' => 'show_attribute',
        'type' =>  __( 'show attribute', 'ireca' ),
        'editor_type' => 'LINE'
      ),

                  array(
        'field' => 'show_feature',
        'type' =>  __( 'show feature', 'ireca' ),
        'editor_type' => 'LINE'
      ),


    ),


     // ovacrs_product_filter_slide
    'ovacrs_product_filter_slide' => array(

      array(
        'field' => 'category',
        'type' =>  __( 'Category', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'total_count',
        'type' =>  __( 'total count', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'number_product_display',
        'type' =>  __( 'number product display', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'order_by',
        'type' =>  __( 'Order By', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'order',
        'type' =>  __( 'Order', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'height_image',
        'type' =>  __( 'height image', 'ireca' ),
        'editor_type' => 'LINE'
      ),

         array(
        'field' => 'text_submit',
        'type' =>  __( 'text submit', 'ireca' ),
        'editor_type' => 'LINE'
      ),


         array(
        'field' => 'scroll_to',
        'type' =>  __( 'scroll to', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      


    ),


     // ovacrs_product_slider
    'ovacrs_product_slider' => array(

      array(
        'field' => 'search_by',
        'type' =>  __( 'search by', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'array_slug',
        'type' =>  __( 'array slug', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'tab_active',
        'type' =>  __( 'tab active', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'filters',
        'type' =>  __( 'Filters', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'orderby',
        'type' =>  __( 'order by', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'order',
        'type' =>  __( 'order', 'ireca' ),
        'editor_type' => 'LINE'
      ),

         array(
        'field' => 'total_items_cat',
        'type' =>  __( 'total items cat', 'ireca' ),
        'editor_type' => 'LINE'
      ),


      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


      array(
        'field' => 'always_show_info',
        'type' =>  __( 'always show info', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'show_price',
        'type' =>  __( 'show price', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'show_time_rental',
        'type' =>  __( 'show time rental', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'show_title',
        'type' =>  __( 'show Title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'slidestoshow',
        'type' =>  __( 'slides to show', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'centermode',
        'type' =>  __( 'centermode', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'show_tab',
        'type' =>  __( 'show tab', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'align_tab',
        'type' =>  __( 'Align tab', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'tab_show_image',
        'type' =>  __( 'tab show image', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'tab_show_title',
        'type' =>  __( 'tab show title', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'show_nav',
        'type' =>  __( 'show Navigation', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'show_dots',
        'type' =>  __( 'show dots', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'autoplay',
        'type' =>  __( 'autoplay', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'autoplayspeed',
        'type' =>  __( 'auto play speed', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      


    ),

     // ovacrs_service
    'ovacrs_service' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'title_link',
        'type' =>  __( 'title link', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'target',
        'type' =>  __( 'target', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'icon',
        'type' =>  __( 'icon', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'show_line',
        'type' =>  __( 'show line', 'ireca' ),
        'editor_type' => 'LINE'
      ),

         array(
        'field' => 'style',
        'type' =>  __( 'style', 'ireca' ),
        'editor_type' => 'LINE'
      ),

           array(
        'field' => 'show_border',
        'type' =>  __( 'show border', 'ireca' ),
        'editor_type' => 'LINE'
      ),

             array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      


    ),

      // ovacrs_service_card
    'ovacrs_service_card' => array(

      array(
        'field' => 'img',
        'type' =>  __( 'img', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'skew_img',
        'type' =>  __( 'skew img', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'desc',
        'type' =>  __( 'desc', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'btn_text',
        'type' =>  __( 'btn text', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'btn_link',
        'type' =>  __( 'btn_link', 'ireca' ),
        'editor_type' => 'LINE'
      ),

         array(
        'field' => 'btn_target',
        'type' =>  __( 'btn target', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      


    ),


      // ovacrs_service_full
    'ovacrs_service_full' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'sub_title',
        'type' =>  __( 'sub_title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'image',
        'type' =>  __( 'image', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'service',
        'type' =>  __( 'service', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),

    ),


      // ovacrs_service_item
    'ovacrs_service_item' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'title_link',
        'type' =>  __( 'title_link', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'target',
        'type' =>  __( 'target', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'icon',
        'type' =>  __( 'icon', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'bg_color',
        'type' =>  __( 'bg_color', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),

    ),


      // ovacrs_service_repair
    'ovacrs_service_repair' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'title_link',
        'type' =>  __( 'title_link', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'target',
        'type' =>  __( 'target', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'icon',
        'type' =>  __( 'icon', 'ireca' ),
        'editor_type' => 'LINE'
      ),

      array(
        'field' => 'desc',
        'type' =>  __( 'desc', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),

    ),

      // ovacrs_skill
    'ovacrs_skill' => array(

      array(
        'field' => 'number',
        'type' =>  __( 'number', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'desc',
        'type' =>  __( 'desc', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'speedtime',
        'type' =>  __( 'speedtime', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'style',
        'type' =>  __( 'style', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),

    ),


     // ovacrs_team
    'ovacrs_team' => array(

      array(
        'field' => 'team',
        'type' =>  __( 'team', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'count',
        'type' =>  __( 'count', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'count_ipad',
        'type' =>  __( 'count_ipad', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'count_mobile',
        'type' =>  __( 'count_mobile', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'auto_slider',
        'type' =>  __( 'auto_slider', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'duration',
        'type' =>  __( 'duration', 'ireca' ),
        'editor_type' => 'LINE'
      ),

         array(
        'field' => 'pagination',
        'type' =>  __( 'pagination', 'ireca' ),
        'editor_type' => 'LINE'
      ),

          array(
        'field' => 'loop',
        'type' =>  __( 'loop', 'ireca' ),
        'editor_type' => 'LINE'
      ),

            array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


    ),


    // ovacrs_testimonial
    'ovacrs_testimonial' => array(

      array(
        'field' => 'testimonials',
        'type' =>  __( 'testimonials', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'count',
        'type' =>  __( 'count', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'count_ipad',
        'type' =>  __( 'count_ipad', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'count_mobile',
        'type' =>  __( 'count_mobile', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'auto_slider',
        'type' =>  __( 'auto_slider', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'duration',
        'type' =>  __( 'duration', 'ireca' ),
        'editor_type' => 'LINE'
      ),

         array(
        'field' => 'pagination',
        'type' =>  __( 'pagination', 'ireca' ),
        'editor_type' => 'LINE'
      ),

          array(
        'field' => 'loop',
        'type' =>  __( 'loop', 'ireca' ),
        'editor_type' => 'LINE'
      ),

            array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


    ),


    // ovacrs_text_support
    'ovacrs_text_support' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'show_line',
        'type' =>  __( 'show_line', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'text_color',
        'type' =>  __( 'text_color', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


    ),


    // ovacrs_thumbnail_info
    'ovacrs_thumbnail_info' => array(

      array(
        'field' => 'image',
        'type' =>  __( 'image', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'title_padding',
        'type' =>  __( 'title_padding', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'icon',
        'type' =>  __( 'icon', 'ireca' ),
        'editor_type' => 'LINE'
      ),

       array(
        'field' => 'link',
        'type' =>  __( 'link', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'target',
        'type' =>  __( 'target', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


    ),

     // ovacrs_video_popup
    'ovacrs_video_popup' => array(

      array(
        'field' => 'link',
        'type' =>  __( 'link', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'image',
        'type' =>  __( 'image', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'alt',
        'type' =>  __( 'alt', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'dis_popup',
        'type' =>  __( 'dis_popup', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     

        array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


    ),


      // ovacrs_why
    'ovacrs_why' => array(

      array(
        'field' => 'title',
        'type' =>  __( 'title', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      
      array(
        'field' => 'number',
        'type' =>  __( 'number', 'ireca' ),
        'editor_type' => 'LINE'
      ),
      array(
        'field' => 'content',
        'type' =>  __( 'content', 'ireca' ),
        'editor_type' => 'LINE'
      ),
       array(
        'field' => 'link',
        'type' =>  __( 'link', 'ireca' ),
        'editor_type' => 'LINE'
      ),
     

        array(
        'field' => 'target',
        'type' =>  __( 'target', 'ireca' ),
        'editor_type' => 'LINE'
      ),

        array(
        'field' => 'show_border',
        'type' =>  __( 'show_border', 'ireca' ),
        'editor_type' => 'LINE'
      ),


         array(
        'field' => 'class',
        'type' =>  __( 'class', 'ireca' ),
        'editor_type' => 'LINE'
      ),


    ),


  );

  $count = 0;
  foreach ($define_widgets as $widgetType => $fields) {

    $count++;
    $all_fields = array();

    foreach ($fields as $v) {
      $field = array(
          'field'       => $v['field'],
           'field_id'   => $v['field'].'_'.$count,
           'type'        => $v['type'],
           'editor_type' => isset( $v['editor_type'] ) ? $v['editor_type'] : 'LINE',
      );
      // $all_fields[] = $field;
      array_push( $all_fields, $field );
    }

    
    /* Heading 1 */  
    $widgets[ $widgetType ] = [
       'conditions' => [ 'widgetType' => $widgetType ],
       'fields'     => $all_fields
    ];

  }



  


 

 
  return $widgets;
}