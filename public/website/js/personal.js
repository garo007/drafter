
$(document).on("click", ".mobile_personal_area_box", function(){

    $('.personal_mobile_nav_list_wrapper').fadeToggle();

    $("body").toggleClass("active_body");

});


$(document).on("click", ".hamburger-menu", function(){

    $('.mobile_version').fadeToggle();



});

$(document).on("click", ".mobile-close", function(){

    $('.mobile_version').fadeToggle();


});

//input type file

$(document).on('change','#fileinput',function () {



    var value = $(this).val();

    var arr = value.split('\\');

    $(this).parent().find(".file_span").html(arr[arr.length - 1]);

    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];

    var span = $(this).parent().find(".file_span");



    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) === -1) {

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


$(document).on('change','#second_fileinput',function () {

    var value = $(this).val();

    var arr = value.split('\\');

    $(this).parent().find(".file_span_second").html(arr[arr.length - 1]);

    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];

    var span = $(this).parent().find(".file_span_second");



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

$(document).on('change','#third_fileinput',function () {

    var value = $(this).val();

    var arr = value.split('\\');

    $(this).parent().find(".file_span_second").html(arr[arr.length - 1]);

    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];

    var span = $(this).parent().find(".file_span_second");



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


$(document).on('change','#four_fileinput',function () {

    var value = $(this).val();

    var arr = value.split('\\');

    $(this).parent().find(".file_span_second").html(arr[arr.length - 1]);

    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];

    var span = $(this).parent().find(".file_span_second");



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


$('.close').click(function () {
   $('#myModal').css('display','none');
})






