//*hamburger-menu part



// $(document).on("click", ".hamburger-menu", function(){

//     $('.mobile_version').fadeToggle();



// });

// $(document).on("click", ".mobile-close", function(){

//     $('.mobile_version').fadeToggle();


// });



$(document).on("click", ".confirm_btn", function(){
    var inputs = $(".confirm_code_input");
    inputs.each(function(){
        var val = $(this).val();
        if(val.length < 1){
            $(this).addClass("error");
        } else{
            $(this).removeClass("error");
        }
    })
})


$(document).on("focus", ".confirm_code_input", function(){
    $(this).removeClass("error");
})



$(document).on("click", ".terms_of_use_title", function(){
    var data_id = $(this).data("id");
    $(".terms_of_use_item ").removeClass("open");
    $("#"+ data_id).addClass("open");
    $(".terms_of_use_title").removeClass("active_title");
    $(this).addClass("active_title");
})

$('.confirm_code_input').keyup(function(){
    var val = $(this).val();
    var next_input = $(this).parent().next('.confirmation_code_input').find('input');
    var prev_input = $(this).parent().prev('.confirmation_code_input').find('input');

    if(val.length > 0){
        next_input.focus();
    }else{
        prev_input.focus();
    }


});
