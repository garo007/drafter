//*hamburger-menu part



$(document).on("click", ".hamburger-menu", function(){

    $('.mobile_version').fadeToggle();



});

$(document).on("click", ".mobile-close", function(){

    $('.mobile_version').fadeToggle();


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
$(document).on("click", ".completed_projects_title_svg_wrapper",function(){
    $(".completed_projects_info_wrapper").toggleClass("open");

})


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




//read_more_btn
$(document).on("click",".read_more_btn", function(){

    if($(this).parent().hasClass('open') ) {
        $(this).parent().find(".dots").show();
        $(this).parent().find('p').removeClass('wrap_text')
        $(this).html('Читать полностью')
        $(this).parent().removeClass('open')
        $(this).parent().find(".find_remote_freelance_jobs_description1").find(".find_remote_freelance_jobs_description2").removeClass("open");

    } else {
        $(this).parent().find(".dots").hide();
        $(this).html('Свернуть')
        $(this).parent().addClass('open');
        $(this).parent().find('p').addClass('wrap_text')

        $(this).parent().find(".find_remote_freelance_jobs_description1").find(".find_remote_freelance_jobs_description2").addClass("open");

    }


})



$(document).on("click", ".read_more_btn2", function(){
    $(this).parent().find(".customer_reviews_text1").find(".customer_reviews_text2").toggleClass("open");

})



// header's  search button
$(document).on("click", ".mobile_header_search_box_btn", function(){
    $(".mobile_header_search_box_wrapper").fadeToggle();
 })


$(document).on("click", ".open_app_modal", function(){
    $(".app_modal").addClass('open');
 })

$(document).on("click", ".app_modal", function(e){
    if ($(e.target).hasClass('app_modal')) {
        $(".app_modal").removeClass('open');
    }
    console.log(e.target)
 })


