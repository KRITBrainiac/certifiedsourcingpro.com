$(document).ready(function() {
	// slider
		
	$('.menu a').hover(function(){$(this).stop().animate({backgroundPosition:'50% -30px'},600,'easeOutElastic')}, function(){$(this).stop().animate({backgroundPosition:'50% -100px'},400)});
	$('#rss').hover(function(){$(this).stop().animate({paddingTop:'10'}, 600, 'easeOutElastic')}, function(){$(this).stop().animate({paddingTop:'0'}, 200)});
});

$(window).load(function() {
   $('#slider').nivoSlider({
        effect:'fold', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft' 
        slices:17,
        animSpeed:500,
        pauseTime:6000,
        startSlide:0, //Set starting Slide (0 index)
        directionNav:false, //Next & Prev
        directionNavHide:false, //Only show on hover
        controlNav:true, //1,2,3...
        controlNavThumbs:false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav:true, //Use left & right arrows
        pauseOnHover:true, //Stop animation while hovering
        manualAdvance:false, //Force manual transitions
        captionOpacity:1, //Universal caption opacity
        beforeChange: function(){},
        afterChange: function(){Cufon.refresh();},
        slideshowEnd: function(){} //Triggers after all slides have been shown
    });
   Cufon.refresh();
});