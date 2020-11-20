console.log("Custom Script")

function resizeWrapper(){
    console.log("Resizing")
    // 693.091
    var window_height = $(this).height()
    var navbar_height = $('nav').outerHeight();
    console.log(window_height)
    console.log(navbar_height)
    $(".wrapper").height(window_height-navbar_height)
}


$(window).resize(resizeWrapper)
resizeWrapper()
