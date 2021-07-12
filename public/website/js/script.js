$(document).ready(function(){
    const swiper_titles = new Swiper('#titles_swiper', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 3000,
          },
          speed: 1000,




      });
})



//*hamburger-menu part


$(document).on("click", ".hamburger-menu", function(){

    $('.mobile_version').show();



});
$(".chat_messages_item").parent().css('width','100%')
$(document).on("click", ".mobile-close", function(){
    $('.mobile_version').hide();
});



//user_select
$(document).on("click", ".header_user_img_title_svg_wrapper",function(){
    $(".header_user_info_wrapper").toggleClass("open");
    $(this).toggleClass("active");
})

$(document).on("click", ".header_user_info",function(){
    $(".header_user_info").removeClass("active");
    $(this).addClass("active");
})


$(document).on("click", ".completed_projects_search_box_title_icons_wrapper",function(){
    $(".completed_projects_names_main_wrapper").toggleClass("open");
    $(this).toggleClass("active");
})

//completed_projects
// $(document).on("click", ".completed_projects_title_svg_wrapper",function(){
//     $(".completed_projects_info_wrapper").toggleClass("open");
//
// })


//input
$(document).on("input", ".top_search_box_input", function(){
      var value =  $(this).val();

      if(value.length > 2){
          $(".top_hidden_search_info_wrapper").addClass("open");
          $(".top_hidden_search_box_btn_wrapper").addClass("open");
      } else{
        $(".top_hidden_search_info_wrapper").removeClass("open");
        $(".top_hidden_search_box_btn_wrapper").removeClass("open");
      }

      $(this).closest(".top_search_box_wrapper").addClass("active");
})

$(document).on("click",".top_hidden_search_box_svg_wrapper", function(){
    $(".top_hidden_search_info_wrapper").removeClass("open");
    $(".top_search_box_input").val("");
     $(this).parent().removeClass("open");


})
$(document).on("change", ".area_check_input", function(){
    if($(this).parent().hasClass("active")){
        $(this).parent().removeClass("active");
    }else{
        $(this).parent().addClass("active");

    }
})


$(document).on("change", ".filter_input", function(){
    if($(this).parent().hasClass("active")){
            $(this).parent().removeClass("active");
    }else{
            $(this).parent().addClass("active");

    }
})


$(document).on("click", ".filter_btn1", function(){
    $(".filter_input").prop( "checked", false );
    $(".filter_input").parent().removeClass("active");

})

// header's  search button
$(document).on("click", ".mobile_header_search_box_btn", function(){
    $(".mobile_header_search_box_wrapper").fadeToggle();
 })





  $(document).on("click",".read_more_btn", function(){
    if($(this).parent().hasClass('open') ) {
        $(this).prev().removeClass("open");
        $(this).html('Читать полностью')
        $(this).parent().removeClass('open')
    } else {
        $(this).prev().addClass("open");
        $(this).html('Свернуть')
        $(this).parent().addClass('open');

    }


})



$(document).on("change", ".sign_up_check_input", function(){
    $(".sign_up_check_input_wrapper").toggleClass("active");
})

$(document).on("input", ".log_in_input", function(){
   $(this).parent().removeClass('error_text_input')
    $(this).parent().prev('.error_text').remove()
})



$(".glaz").on('click', function () {
  let input = $(this).parents('.log_in_input_wrapper').find('input.log_in_input');
  $(input).attr('type') == 'password' ? $(input).attr('type','text') : $(input).attr('type','password')
  if($(this).hasClass('show')){
    $(this).attr('src','../images/oko (2).svg');
    $(this).removeClass('show')
  }else{
     $(this).attr('src','../images/glaz.png');
     $(this).addClass('show');
  }


})
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.personal_area_img2 img').attr('src', e.target.result);
                $('.personal_area_img img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

$(".change_role").on('click',function(){
  $("#role_modal").removeClass('hide_modal');
})
$(".close").on('click',function(){
  $(this).parent().parent().addClass('hide_modal')
})


$(".not_verify_email").on('click',function(){
  $("#not_verify_email_modal").removeClass('hide_modal');
})
$(".close_not_verify_email_modal").on('click',function(){
  $(this).parent().parent().addClass('hide_modal')
})


$(".recover_pass").on('click',function(){
    $("#recover_pass_modal").removeClass('hide_modal');
})
// $(".close_recover_pass").on('click',function(){
//     $(this).parent().parent().addClass('hide_modal')
// })



$(".calc_btn").on("click",function (e){
    e.preventDefault()
    if( $(".calc_cont").hasClass("calc_hidden")){
        $(".calc_cont").removeClass("calc_hidden")
    }else{
        $(".calc_cont").addClass("calc_hidden")
    }
});

$(".calc_cont_item").on('click',function (){
    $(".calc_cont_item").removeClass('active_cont_item');
    $(this).addClass("active_cont_item");
    var target = $(this).data('id');
    $('.calc_input_group').addClass('calc_hidden')
    $("#"+target).removeClass('calc_hidden');
})
$(".add_to_bookmarks").on("click",function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    var data_id   = $(this).data('id');
    var data_type = $(this).data('type')
    var this_item = $(this)
    $.ajax({
        type: 'POST',
        url: '/ajax/add-to-bookmarks',
        data: {'add':true ,'id':data_id,'type':data_type},
        dataType: 'json',
        success: function (data) {
            this_item.removeClass('showBookmark');
            this_item.parent().find('div.added_to_bookmark').addClass('showBookmark')
        },
        error: function (data) {
            // $(location).attr('href','/login');
        }
    });
})
$(".added_to_bookmark").on("click",function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    var data_id   = $(this).data('id');
    var data_type = $(this).data('type');
    var this_item = $(this)
    $.ajax({
        type: 'POST',
        url: '/ajax/remove_bookmarks',
        data: {'remove':true ,'id':data_id,'type':data_type},
        dataType: 'json',
        success: function (data) {
            this_item.removeClass('showBookmark');
            this_item.parent().find('div.add_to_bookmarks').addClass('showBookmark')
        },
        error: function (data) {
            // $(location).attr('href','/login');
        }
    });
})
$(document).ready(function (e) {

    $('#fileinput').change(function(){

        let reader = new FileReader();

        reader.onload = (e) => {

            $('.personal_area_img2 img').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

});

$(document).ready(function (e) {

    $('#fileinputsecond').change(function(){

        let reader = new FileReader();

        reader.onload = (e) => {

            $('.personal_area_img2 img').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

});
$(document).ready(function (e) {

    $('#fileinput4').change(function(){

        let reader = new FileReader();

        reader.onload = (e) => {

            $('.companies_personal_item_second_img img').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

});
// $('.personal_area_arrow').hover( function(){
//     $(".personal_area__mobile_list_wrapper").addClass("open");
//     $(".area_svg").addClass("active");
//
// })
// $('.personal_area__mobile_list_wrapper').mouseout(function () {
//     console.log('out')
//     $(".personal_area__mobile_list_wrapper").removeClass("open");
//     $(".area_svg").removeClass("active");
// })
//




$(".send_guest_post").on('click',function (){
    $("form#login_as_guest").submit()
})
$(".removeBookmark").on('click',function (){
    var data_id = $(this).data('id')
    $("#"+data_id).hide('800')
})
$(".open_terms_of_use").on("click",function (){
    window.open('/terms-of-use');
    setTimeout(function (){
        $(".sign_up_check_input_wrapper").addClass('active')
    },500)
})
$(".close_terms_of_use").on("click",function (){
    window.close();

})
$(".companies_details_svg label input").on("change",function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    var company_id = $(this).data('id');
    var doc_type = $(this).data('type');
    var this_item = $(this);
    var postData = new FormData();
    postData.append('file', this.files[0]);
    postData.append('comp_id', company_id);
    postData.append('doc_type', doc_type);
    var url = "/ajax/upload_comp_docs";

    $.ajax({
        headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
        async: true,
        type: "post",
        contentType: false,
        url: url,
        data: postData,
        processData: false,
        success: function () {
            $(this_item).parent().hide()
            $(this_item).parent().parent().find("svg.hidden_verified_svg").removeClass("hidden_verified_svg")
        }
    })
})

$(".open_filter_block").on("click",function(){


        if($(".completed_project_first_item").hasClass("open_filter")){
            $(".completed_project_first_item").removeClass("open_filter")
        }else{
            $(".completed_project_first_item").addClass("open_filter")
        }

})
$(".open_invest_modal").on("click",function (){
    $("#invest").removeClass("hide_modal")
})

$("#cat_form").on('submit',function (e){

    e.preventDefault();
    var chech = $(this).find('input[type=checkbox]:checked')
    var arr = [];

    $.each(chech, function( index, value ) {
        arr.push($(this).data('id'))
    });
    $.ajax({
        headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
        async: true,
        type: "post",
        contentType: 'application/json; charset=utf-8',
        datatype: 'json',
        url: '/ajax/projects/filter',
        data: JSON.stringify(arr),
        processData: false,
        success: function (response) {
            console.log(response)
        }
    })

})



$(document).on("click", ".completed_project_item_title_svg_wrapper", function(){
     $(".completed_project_filter_inputs_btns_wrapper").slideToggle();
     $(".completed_project_first_item_child").toggleClass("open");
     $(".first_banner_add").slideToggle();
});

// $(document).on("click", ".banner_add_div_info_btn", function(){
//     $(this).closest(".banner_add_div").toggleClass('open');
// })

$(document).on("click", ".add_child_image", function(){
    var imageSource = $(this).attr("src");
    $("#adds_parent_image").attr('src',imageSource);

  })



