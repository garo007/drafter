$(document).on("click", ".by_relevance_svg_title_wrapper",function(){
    $(".by_relevance_hidden_wrapper").toggleClass("open");
    $(" .by_relevance_svg_wrapper svg").toggleClass("active");
})


$(document).on("change", ".filter_input", function(){
    $(this).parent().addClass("active");
})


$(document).on("click", ".filter_btn1", function(){
    $(".filter_input").prop( "checked", false );
    $(".filter_input").parent().removeClass("active");

})

$(document).on("click", ".projects_ads_title", function(){

    var data_id = $(this).data("id");
    $(".projects_ads_title").removeClass("active");
    $(this).addClass("active");

    $(".completed_project_second_item").removeClass("open");
    $("#" + data_id).addClass("open");
})


$(document).on("click", ".filter_title_svg_wrapper", function(){
    $(".filter_hidden_wrapper").toggleClass("open");
    $(".filter_title_svg_wrapper svg").toggleClass("active");
})
