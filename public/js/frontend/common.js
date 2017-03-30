$(function(){


    /* слайдер на главной*/
    var sliderHeight = ($(document).width() > 700) ? 650 : 400;
    $("#webstudio-slider").unitegallery({
        gallery_theme: "slider",
        gallery_width:"100%",              //gallery width
        gallery_height:sliderHeight,
        slider_enable_text_panel: true,       //true,false - enable the text panel
        slider_textpanel_always_on: true,      //true,false - text panel are always on, false - show only on mouseover
        slider_textpanel_text_valign:"middle",
        slider_textpanel_height: sliderHeight,
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
    $('.menu_item:nth-child(2) > a').on('click', function (e) {
        if ($(document).width() <= 480) {
            $('.menu_item:nth-child(2) .sub-menu').toggleClass('active');
            $('.menu_item:nth-child(2) a i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
        }
        e.preventDefault();
    });
    $('.menu_item:nth-child(2)').hover(
        function () {
            if ($(document).width() > 480){
                setTimeout(function () {
                    $('.menu_item > .sub-menu').slideDown();
                    $('.menu_item:nth-child(2) a i').removeClass('fa-angle-down').addClass('fa-angle-up');
                },200);
            }
        },
        function () {
            if ($(document).width() > 480) {
                setTimeout(function () {
                    $('.menu_item > .sub-menu').slideUp();
                    $('.menu_item:nth-child(2) a i').removeClass('fa-angle-up').addClass('fa-angle-down');
                },600);
            }
        }
    );
    //отправка формы обратной связи

        $('#submit-send').on('click', function(event){
            $('#submit-send').attr('disabled', true);
            var data = $('form#callback').serialize();
            $.ajax({
                url: 'contact',
                method: "POST",
                data: data,
                dataType : "json",
                success: function(data){
                    //console.info('Server response: ', data);
                    if(data.success){
                        swal(trans['base.success'], "", "success");
                        jQuery("#popup").trigger("reset");
                        $('.popup-callback, #overlay').hide();
                        $("#submit-send").attr('disabled', false);
                    }
                    else{
                        swal(trans['base.error'], data.message, "error");
                        $("#submit-send").attr('disabled', false);
                    }
                },
                error:function(data){
                    swal(trans['base.error']);
                    $("#submit-send").attr('disabled', false);
                    //  jQuery("#resume-form").trigger("reset");
                }

            },"json");
            event.preventDefault();
        });
    
    
});