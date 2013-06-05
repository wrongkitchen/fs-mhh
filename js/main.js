require.config({
    baseUrl : "",
    paths: {
        jquery         : 'components/jquery/jquery.min',
        fancybox       : 'components/fancybox/source/jquery.fancybox',
        divSlider      : 'components/div-slider/div-slider-1.0.3',
        bootstrap      : 'components/bootstrap/js/bootstrap.min',
        shrinkBorder   : 'components/shrink-border/shrink-border.0.0.1' 
    },
    shim: {
        "fancybox"      : ['jquery'],
        "divSlider"     : ['jquery'],
        "bootstrap"     : ['jquery'],
        "shrinkBorder"  : ['jquery']
    }
});

require(["jquery", "fancybox", "divSlider", "bootstrap", "shrinkBorder"], function($, config){
    if(config && config.popup){
        $("#"+config.popup).modal();
    }
    $(".shrink").shrinkBorder();
    $(".listBtn").on("click", function(){
        $(".listBtn").removeClass("active");
        $(this).addClass("active");
    });
    
    $(".fancybox").fancybox();

    $(".galleryContainer>.thumbContainer>.thumb").live("click", function(){
        var largeHref = $(this).children("img").attr("src");
            largeHref = largeHref.split(".jpg")[0];
            largeHref += "-large.jpg";
        $(this).parent().parent().children(".image").html('<img src="'+largeHref+'" alt="" />');            
    });

    $(".popupContent>.close").on("click", function(){
        $(".popupContent").modal("hide");
    });
    $(".slideshow").DivSlider({ 
        next:".testing-next",  // define next button
        prev:".testing-prev",  // define prev button
        nav:".slideshow>.slideNav",    // define navigator
        circular:true,         // infiniti loop image
        overPause:true,        // pause while hover div
        auto:true,             // auto play
        speed:500,             // slide speed
        time: 4000,            // slide every 2000ms
        beforeSlide:function(currentSlide){  
            // before slide callback
            // currentSlide= current slide index
        },
        afterSlide:function(currentSlide){   
            // after slide callback
            // currentSlide= current slide index
        }
    });

   window.showShoppingProduct = function(pID){
        $("#"+pID).modal();
   };

   window.swapView = function(pClass, pID){
        $("."+pClass).hide();
        $("#"+pID).show();
   };
});