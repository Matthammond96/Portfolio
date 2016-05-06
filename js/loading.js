$(document).ready(function() {
                $("#circle").css("top", ($(window).height() * 0.35) - $("#circle").height() * 0.5);  
                $("#circle").css("left", ($(window).width() * 0.5) - ($("#circle").width() * 0.5));  
                $("#loading").css("top", ($(window).height() * 0.35) - $("#loading").height() * 0.5);  
            })
            
            $(window).resize(function() {
                $("#circle").css("top", ($(window).height() * 0.35) - $("#circle").height() * 0.5);  
                $("#circle").css("left", ($(window).width() * 0.5) - ($("#circle").width() * 0.5));  
                $("#loading").css("top", ($(window).height() * 0.35) - $("#loading").height() * 0.5);  
            })

$(window).load(function() {
    $("#loadingWrapper").html("");            
});