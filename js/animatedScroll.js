$(document).ready(function() {
    $(".animatedScroll").click(function(){
       var linkattr = $(this).attr("data-link");
        
        $("html, body").animate({
            scrollTop: ($(linkattr).position().top) - 65
        }, 500);
        
    })
})             