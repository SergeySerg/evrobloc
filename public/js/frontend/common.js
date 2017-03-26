$(function(){


    /* слайдер на главной*/
    $("#webstudio-slider").unitegallery({
        gallery_theme: "slider",
        gallery_width:"100%",              //gallery width
        gallery_height:750,
        slider_enable_text_panel: true,       //true,false - enable the text panel
        slider_textpanel_always_on: true,      //true,false - text panel are always on, false - show only on mouseover
        slider_textpanel_text_valign:"middle",
        slider_textpanel_height: 750,
        slider_textpanel_title_text_align:"center",
        slider_textpanel_title_color:"#fffafa",        //textpanel title color. if null - take from css
        slider_textpanel_title_font_family:"Poppins",    //textpanel title font family. if null - take from css
        slider_textpanel_title_font_size: 22,
        slider_textpanel_desc_text_align:"center",
        slider_textpanel_desc_color:"#fffafa",        //textpanel title color. if null - take from css
        slider_textpanel_desc_font_family:"Poppins",    //textpanel title font family. if null - take from css
        slider_textpanel_desc_font_size: 44,
        slider_enable_bullets: false,
        slider_enable_progress_indicator: false,
        slider_control_zoom: false,
        slider_arrow_left_offset_hor:60,
        slider_arrow_right_offset_hor:60,
    });
    /* END слайдер на главной*/
    /* фото отеля в футере */
    $("#webstudio-bottom-gallery").unitegallery({
        gallery_theme: "tilesgrid",
        gallery_width:"100%",              //gallery width   
        grid_space_between_cols:10,
        grid_space_between_rows:10,
        grid_space_between_mobile:10,
        tile_enable_border:false,
        tile_enable_shadow:false,
        grid_padding:0,
        tile_width: 112,
        tile_height: 112,
        grid_num_rows:2,
    });
    /* END фото отеля в футере */
    
});