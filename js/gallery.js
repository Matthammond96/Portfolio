$(document).ready(function() {  
    
    $(".thumbnails").css("width", $(".thumbnails").height() * 1.5);
    
    $(".thumbnails:first").addClass("featured");
    
    $(".thumbnails").mouseover(function() {
        console.log("Hover");
        $(this).css("height", "75");
        $(this).css("width", 75 * 1.5);
        $(this).css("transition", "all, 0.3s");
    });
    
    $(".thumbnails").mouseleave(function() {
        $(this).css("height", "65");
        $(this).css("width", $(".thumbnails").height() * 1.5);
    });
    
    $(".featured").each(function() { 
        
        if ($(this).attr("data-media-type") == "image") { 
            var src = $(this).attr("src");   
            $(this).addClass("active");
            $("#imageViewer").html('<img class="artwork" src="'+ src +'">');
        } else if ($(this).attr("data-media-type") == "video") {
            var src = $(this).attr("data-media-url");  
            
            $(this).addClass("active"); 
            $("#imageViewer").html(' <iframe class="artwork" src="https://www.youtube.com/embed/'+ src +'" frameborder="0" allowfullscreen></iframe>');  
        }
        
    }); 
    
    $(".thumbnails").click(function() {  
        
        if ($(this).attr("data-media-type") == "image") {
            var src = $(this).attr("src");  
            $(".thumbnails").removeClass("active");   
            $(this).addClass("active");
            $("#imageViewer").html('<img class="artwork" src="'+ src +'">');
        } else if ($(this).attr("data-media-type") == "video") {
            var src = $(this).attr("data-media-url");   
            $(".thumbnails").removeClass("active");
            $(this).addClass("active"); 
            $("#imageViewer").html(' <iframe class="artwork" src="https://www.youtube.com/embed/'+ src +'" frameborder="0" allowfullscreen></iframe>');  
        } 
        
    }); 
    
})