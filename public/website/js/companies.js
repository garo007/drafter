$(document).on('change','#fileinput3',function () {

    var value = $(this).val();

    var arr = value.split('\\');

    $(this).parent().find(".file_span").html(arr[arr.length - 1]);

    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];

    var span = $(this).parent().find(".file_span");



    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

        span.html("Невозможно загрузить формат");

        span.css({
            'color': '#F60000'
        });

        $('.hide-title').css({
            "display": "block"
        })



    } else {

        span.css({

            'color': "#9c9c9c"

        });


        //  var parent =$(this).closest(".projects-form-input-wrapper");

        //  parent.append("<img class='close-js' src='wp-content/themes/build/images/file-.svg' alt=''>");

        //  parent.append("<p class='hide-title'>Файл</p>");

        //   parent.css({

        //      "position": 'relative',

        //      "justify-content": 'space-between'

        //  });



    }

});



$(document).on("click", ".companies_item_svg_img_wrapper", function(){
    $(this).parent().find(".companies_hidden_wrapper").toggleClass("open");
})





$(document).on("click", ".personal_area_list", function(){
    if( $(".personal_are_title").html() !== "Личный кабинет"){
        $(".personal_are_title").html("Личный кабинет")
    }
    var data_id = $(this).data("id");
    $(".personal_area_list").removeClass("active")
    $(this).addClass("active");

    $(".hidden_companies_div").removeClass("open");
    $("#" + data_id).addClass("open");


})





$(document).on("click", ".about_project_progress_item_main_title", function(){

    var data_id = $(this).data("id");
    $(".about_project_progress_item_main_title").removeClass("active")
    $(this).addClass("active");

    $(".about_project_progress_item").removeClass("open");
    $("#" + data_id).addClass("open");


})



$(document).on("click", "#special_title2", function(){

    var data_id = $(this).data("id");
    $(".about_project_progress_item_main_title").removeClass("active")
    $(this).addClass("active");

    $(".about_project_progress_item").removeClass("open");
    $("#" + data_id).addClass("open");


    const swiper_second = new Swiper('#second_swiper_container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 2,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper_button_next_second',
            prevEl: '.swiper_button_prev_second',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            324: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            330: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            340: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            350: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            360: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            370: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            371: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            372: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            373: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            374: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            375: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            376: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            378: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            379: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            380: {
                slidesPerView:1,
                spaceBetween: 10
            },
            400: {
                slidesPerView:1,
                spaceBetween: 10
            },
            420: {
                slidesPerView:1,
                spaceBetween: 10
            },
            425: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            426: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            427: {
                slidesPerView: 2,
                spaceBetween: 10
            },

            430: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            440: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            450: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            460: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            464: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            465: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            470: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            500: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            599: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            601: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            627: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            628: {
                slidesPerView: 2,
                spaceBetween: 10
            },

            634: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            635: {
                slidesPerView: 3,
                spaceBetween: 10
            },


            699: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            700: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            770: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            771: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            780: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            790: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            801: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            800: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            802: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            805: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            810: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            820: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            840: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            860: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            880: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            943: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            944: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            900: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1000: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1100: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1120: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1130: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1140: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1150: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1152: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1155: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1157: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1158: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1160: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1190: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1200: {
                slidesPerView:3,
                spaceBetween: 20
            },
            1216: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1218: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1220: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1230: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1240: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1250: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1260: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1270: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1299: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1300: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1500: {
                slidesPerView: 3,
                spaceBetween: 14
            },
            1600: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1700: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1800: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1920: {
                slidesPerView: 3,
                spaceBetween: 10
            }
        }

    });

    const swiper_third = new Swiper('#third_swiper_container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper_button_next_third',
            prevEl: '.swiper_button_prev_third',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            324: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            330: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            340: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            350: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            360: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            370: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            371: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            372: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            373: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            374: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            375: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            376: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            378: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            379: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            380: {
                slidesPerView:1,
                spaceBetween: 10
            },
            400: {
                slidesPerView:1,
                spaceBetween: 10
            },
            420: {
                slidesPerView:1,
                spaceBetween: 10
            },
            425: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            426: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            427: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            430: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            440: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            450: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            460: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            464: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            465: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            470: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            500: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            599: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            601: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            627: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            628: {
                slidesPerView: 2,
                spaceBetween: 10
            },

            634: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            635: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            700: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            699: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            700: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            770: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            771: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            780: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            790: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            801: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            800: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            802: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            805: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            810: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            820: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            840: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            860: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            880: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            943: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            944: {
                slidesPerView: 3,
                spaceBetween: 10
            },

            900: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1000: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1100: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1120: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1130: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1140: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1150: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1152: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1155: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1157: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1158: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1160: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1170: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1180: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1190: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1200: {
                slidesPerView:3,
                spaceBetween: 20
            },
            1216: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1218: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1220: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1230: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1240: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1250: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1260: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1270: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1299: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1300: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1500: {
                slidesPerView: 3,
                spaceBetween: 14
            },
            1600: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1700: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1800: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1920: {
                slidesPerView: 3,
                spaceBetween: 10
            }
        }
    });

})


$(document).on("click", ".file_input_wrapper", function(){
    $("#open_hidden_div2").addClass("open");
    $("#open_hidden_div1").removeClass("open");
})



$(document).on("click", ".mobile_personal_area_box", function(){

    $('.personal_mobile_nav_list_wrapper').Toggle();

    $("body").toggleClass("active_body");

});

$(".open_companies").on("click",function (){
    $(".personal_are_title").html("Мои компании");
    var data_id = $(this).data("id");
    $(".personal_area_list").removeClass("active")
    $(".hidden_div").removeClass("open");
    var block = $("#" + data_id)
    block.addClass("open");
    block.find("#open_hidden_div1").addClass("open")
    $(".personal_mobile_nav_list_wrapper").hide();

})
//
// $(document).on("click",".read_more_btn", function(){
//     if($(this).prev().hasClass("show_text")){
//         $(this).html('Свернуть')
//         $(this).prev().removeClass("show_text")
//     }else{
//         $(this).html("Читать полностью")
//         $(this).prev().addClass("show_text");
//     }
//     if($(this).parent().hasClass('open') ) {
//         $(this).parent().find(".dots").show();
//         $(this).html('Читать полностью')
//         $(this).parent().removeClass('open')
//         $(this).parent().find(".small_item_show_more_text").find(".small_item_show_more_text2").removeClass("open");
//
//     } else {
//         $(this).parent().find(".dots").hide();
//         $(this).html('Свернуть')
//         $(this).parent().addClass('open');
//         $(this).parent().find(".small_item_show_more_text").find(".small_item_show_more_text2").addClass("open");
//
//     }
//
//
// })
const swiper = new Swiper('#first_swiper_container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    spaceBetween: 10,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        324: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        330: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        340: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        350: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        360: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        370: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        371: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        372: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        373: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        374: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        375: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        376: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        378: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        379: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        380: {
            slidesPerView:1,
            spaceBetween: 10
        },
        400: {
            slidesPerView:1,
            spaceBetween: 10
        },
        420: {
            slidesPerView:1,
            spaceBetween: 10
        },
        425: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        426: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        427: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        430: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        440: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        450: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        460: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        470: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        500: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        599: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        600: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        601: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        627: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        628: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        700: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        699: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        700: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        770: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        771: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        780: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        790: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        801: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        800: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        802: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        805: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        810: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        820: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        840: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        860: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        880: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        943: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        944: {
            slidesPerView: 2,
            spaceBetween: 10
        },

        900: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1000: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1100: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1120: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1130: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1140: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1150: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1152: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1155: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1157: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1158: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1160: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1170: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1180: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1170: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1180: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1190: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1200: {
            slidesPerView:2,
            spaceBetween: 20
        },
        1216: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        1218: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        1220: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        1230: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1240: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1250: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1260: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1270: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1280: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1299: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1300: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1400: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1500: {
            slidesPerView: 2,
            spaceBetween: 14
        },
        1600: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1700: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1800: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1920: {
            slidesPerView: 2,
            spaceBetween: 10
        }
    }

})
