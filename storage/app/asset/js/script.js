console.log("Custom Script")

function resizeWrapper(){
    console.log("Resizing")
    // Achieveing Dynamic Side Navigation Height
    var window_height = $(this).height()
    var navbar_height = $('nav').outerHeight();
    console.log(window_height)
    console.log(navbar_height)
    $(".wrapper").height(window_height-navbar_height)
}


$(window).resize(resizeWrapper)
resizeWrapper()
