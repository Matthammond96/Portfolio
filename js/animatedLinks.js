$(document).ready(function() {
    
    $("a").click(function(e) {
        
        if ($(this).attr("href").indexOf("#") === 0 || $(this).attr("href").indexOf(".") === 0) {
            var scrollTo = $($(this).attr("href")).position().top;
            var speed = ;
            e.preventDefault(); 
            
            if ($(this).attr("data-scroll-speed")) {
                speed = 500 * $(this).attr("data-scroll-speed");
            } else {
                speed = 500;
            }
            
            $("html, body").animate({
                scrollTop: scrollTo
            }, speed);
        }
        
    });
    
});