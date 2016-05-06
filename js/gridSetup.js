$(window).resize(function() {
    $(".boxes").css("height", $(".boxes").width());  
    
    var XPosition = 0;
    var YPosition = 0;
    
    $(".boxes").each(function() {
        $(this).css("left", XPosition);
        $(this).css("top", YPosition);
        $(this).css("height", $(".boxes").width());
        
         if (((XPosition +100) + $(this).width()) < $(window).width()) {
             XPosition += $(this).width();
         } else {
            XPosition = 0;
            YPosition += $(".boxes").height();
        }
    });
    
    //Grid Container Height
    var boxesCount = $(".boxes").length -1;
    var boxesHeight = $(".boxes").height();
    var lastBox = $(".boxes:eq( "+boxesCount+" )");
    var lastBoxPos = lastBox.position().top;
    $("#gridCon").css("height", (lastBoxPos+boxesHeight));
})