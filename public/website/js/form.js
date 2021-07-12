$(document).on('change','#fileinput_form',function () {

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


  $(document).on('change','#fileinput_form2',function () {

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



//   $(document).on("click", ".aplication_form_items_title", function(){
//       var data_id = $(this).data("id");
//       var inputs = $("#" + data_id).find('input.aplication_form_input')
//         if (inputs.val() != ''){
//             console.log(inputs)
//         }
//     $(".aplication_form_items_title").removeClass("active");
//     $(this).addClass("active");
//
//     $(".aplication_form_item").removeClass("open");
//     $("#" + data_id).addClass("open");
// })

$(document).on("click", ".afit", function(){
    var data_id = $(this).data("id");
    var inputs = $("#" + data_id).find('input.aplication_form_input')
    if (inputs.val() != ''){
        console.log(inputs)
    }
    $(".aplication_form_items_title").removeClass("active");
    $(this).addClass("active");

    $(".aplication_form_item").removeClass("open");
    $("#" + data_id).addClass("open");
})
