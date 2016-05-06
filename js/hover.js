$(document).ready(function() {
    
    $(".boxes").mouseover(function() {
        $(this).children(".featureImage").animate({
            top: -15
        }, 200); 
    });
    
    $(".boxes").mouseover(function() {
        $(this).children(".hoverCon").children(".content").animate({
            bottom: 0
        }, 200);
    });
    
    $(".boxes").mouseleave(function() {
        $(this).children(".featureImage").animate({
            top: 0
        }, 200); 
    });
    
     
    $(".boxes").mouseleave(function() {
        $(this).children(".hoverCon").children(".content").animate({
            bottom: -50
        }, 200);
    });
    
    
})