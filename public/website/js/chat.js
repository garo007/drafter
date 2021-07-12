$(document).on('change','#fileinput2',function () {

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





$(document).on("click", ".filter_message", function(){

    var data_id = $(this).data("id");


    // $(this).closest().find(".messages_wrapper").removeClass("open");

    $(".messages_wrapper").removeClass("open");
    $("#" + data_id).addClass("open");
    $(".chat_filter_item").hide();
})

$(document).on("click", ".arrow", function(){
    $(".chat_filter_item").show();
    $(".messages_wrapper").removeClass("open");
})



$(document).on("click", ".back_btn", function(){
    $(".chat_filter_item").show();
    $(".messages_wrapper").removeClass("open");
    // $(".chat_hidden_message_container").removeClass("open");
    // $(".chat_black_div").hide();
        $(".chat_hidden_message_container").toggleClass("open");
    $("body").toggleClass("active_body");
    $(".chat").toggleClass("active");
})



$(document).on("click", ".chat_messages_points_wrapper", function(){
    $(".chat_hidden_message_container").toggleClass("open");
    $("body").toggleClass("active_body");
    $(".chat").toggleClass("active");
})

// $(document).on("click", ".filter_message_second", function(){

//     var data_id = $(this).data("id");


//     // $(this).closest().find(".messages_wrapper").removeClass("open");

//     $(".messages_wrapper").removeClass("open");
//     $("#" + data_id).addClass("open");
//     $(".chat_filter_item").hide();
// })


// $(document).on("click", ".arrow", function(){
//     $(".chat_filter_item").show();
//     $(".messages_wrapper").removeClass("open");
// })
