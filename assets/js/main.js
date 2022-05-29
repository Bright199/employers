$(document).ready(function () {
    $('.small-screen-nav').click(function(){
        $('.left-nav').css({'width':'100%'})
    });
    $('.close-left-nav').click(function(){
        $('.left-nav').css({'width':'0'})
    })

    $(window).scroll(function(){
        var screenHeight = pageYOffset();
        alert(screenHeight)
    })
})