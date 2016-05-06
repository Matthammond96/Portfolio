$(document).ready(function() {
    
    $("#navContainer").addClass("fixedNav");
    $("#navContainer").css("background-color", "")
    
    $(window).scroll(function() {
        
        if ($(window).scrollTop() > 50 ) {
            $("#navContainer").css("background-color", "black");
            $("#navContainer").css("transition", "all 1s");
        } else {
            $("#navContainer").css("background-color", "");   
        }
        
    });
})