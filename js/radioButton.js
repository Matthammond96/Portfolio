$(document).ready(function () {
    function checkDisabled(evt) {
        var val = $("input[name=mediaType]:checked").val();
        
        if (val == val) {
            $('#txt').attr('disabled', true);
            $("#gridCon").html("");
            $("#gridCon").load("/grid.php?TAG="+val, function() {        
                //Positioning 
                var XPosition = 0;
                var YPosition = 0;
                
                //Grid Boxes Positioning
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
                
                //Text Boxing Positioning
                $(".content").each(function() {
                    var conH = $(this).height();
                    var textH = $(this).children(".title").height();
                    
                    $(this).children(".title").css("margin-top", (conH*0.5)-(textH*0.5));
                });
                
                //Grid Container Height
                var boxesCount = $(".boxes").length -1;
                var boxesHeight = $(".boxes").height();
                var lastBox = $(".boxes:eq( "+boxesCount+" )");
                var lastBoxPos = lastBox.position().top;
                $("#gridCon").css("height", (lastBoxPos+boxesHeight));
            });
            
        } else {
            $('#txt').removeAttr('disabled');
        }  
    }
        
    $('input[name=mediaType]:radio').change(checkDisabled);
    checkDisabled();     
 });