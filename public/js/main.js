// Enable Strict Mode for All code for future errors in Pragma

"use strict";

    //Initiate Polyfill For Internet Explorer 11 object-fit:cover replacement

$(function(){
    if (document.documentMode || /Edge/.test(navigator.userAgent)){
        $(function () { objectFitImages() });
    }
  });

//Make Navbar change color 
$(window).scroll(function() {
    /* affix after scrolling 100px */
    if ($(document).scrollTop() > 100) {
        $('.navbar').addClass('affix');
    } else {
        $('.navbar').removeClass('affix');
    }
    });

      
// Smooth scroll speed configuration

var scroll = new SmoothScroll('a.smooth-scroll', {
    // Selectors
    ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
    header: null, // Selector for fixed headers (must be a valid CSS selector)

    // Speed & Easing
    speed: 700, // Integer. How fast to complete the scroll in milliseconds
    offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
    easing: 'easeInOutCubic', // Easing pattern to use
    customEasing: function (time) {

    // Function. Custom easing pattern
    // If this is set to anything other than null, will override the easing option above

    // return <your formulate with time as a multiplier>

    // Example: easeInOut Quad
    return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

},

// Callback API
before: function (anchor, toggle) {}, // Callback to run before scroll
after: function (anchor, toggle) {} // Callback to run after scroll
});

//Delete hashes in the url caused by smoothscoll
$(window).on('hashchange', function(e){history.replaceState ("", document.title, e.originalEvent.oldURL);});




//Slide navbar toggle
$(function(){
    // mobile menu slide from the left
    $('[data-toggle="collapse"]').on('click', function() {
        var $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({'width':'toggle'}, 280);
    });
})


//Blur the navbar background when navbar is opened
//Cancelled because of performance issues. Feel free to activate it at your own risk

/*$(function() {
    $('#navbarSupportedContent').on("show.bs.collapse", function() {
    $("body").addClass("blur-body")
    }).on("hide.bs.collapse", function() {
    $("body").removeClass("blur-body");
    });
})   */ 


//Sidebar Menu only on large devices and Up

$(function(){
      //effect to close submenu
    $('#slide-submenu').on('click',function() {			        
          $(this).closest('.list-group').animate({'width':'toggle',}),function(){
            $('.list-group').animate({'width':'toggle'});	
          };
          
        });
   //effect to open submenu
    $('.mini-submenu').on('click',function(){		
          $(this).next('.list-group').animate({'width':'toggle'});
    })
})


  //Initiate Pop Up

$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
});

//  Pop up Gallery initiate
$(document).ready(function() {

	$('a.btn-gallery').on('click', function(event) {
		event.preventDefault();
		
		var gallery = $(this).attr('href');
    
		$(gallery).magnificPopup({
      delegate: 'a',
            type:'image',
            mainClass: 'mfp-with-zoom mfp-img-mobile', 
        
			gallery: {
				enabled: true
            }
           
		}).magnificPopup('open');
	});
	
});

//Open inline element in pop up
$(document).ready(function() {
    $('.open-popup-link').magnificPopup({
      type: 'inline',
      midClick: true 
    });
});

//Open inline element in pop up
$(document).ready(function() {
    $('.open-popup-link2').magnificPopup({
      type: 'inline',
      midClick: true 
    });
});
  
//Open a pop up with a  single Image

$(document).ready(function() {
    $('div.album').magnificPopup({delegate: 'a', type: 'image' });
});

//Bootstrap Carousel
$(document).ready(function () {
    var carouselContainer = $('.carousel');
    var slideInterval = 4000;

    function toggleH() {
        $('.toggleCaption').hide()
        var caption = carouselContainer.find('.active').find('.toggleCaption').addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',

        function () {
            $(this).removeClass('animated fadeInRight')
        });
        caption.slideToggle();
    }

    function toggleC() {
        $('.toggleButton').hide()
        var button = carouselContainer.find('.active').find('.toggleButton').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',

        function () {
            $(this).removeClass('animated fadeInUp')
        });
        button.slideToggle();
    }
    carouselContainer.carousel({
        interval: slideInterval,
        cycle: true,
        pause: "hover"
    })
        .on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel')
        .on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');
});

//Instagram Feed

var feed = new Instafeed({
    get: 'user',
    userId: '7515908390',
    accessToken: '7515908390.a5a09a4.efeb0f697dff4ccfa6672a9a7dbe533c',
    resolution: 'thumbnail',
    template: '<a class="grid-item" href="{{link}}"><img src="{{image}}" /></a>',
    sortBy: 'most-recent',
    limit: 6,
    links: false
  });
feed.run();


$(function(){
    if($('body').hasClass('runsidebar')){

        var sidebarfeed = new Instafeed({
            get: 'user',
            userId: '7515908390',
            accessToken: '7515908390.a5a09a4.efeb0f697dff4ccfa6672a9a7dbe533c',
            target: 'instasidebar',
            resolution: 'low_resolution',
            template: '<a class="grid-item2" href="{{link}}"><img src="{{image}}" /></a>',
            sortBy: 'most-recent',
            limit: 8,
            links: false
          });
        sidebarfeed.run();
    
    }
  });

$(function(){
if($('body').hasClass('cookies')){
    if (navigator.cookieEnabled === true)
    {
        if (document.cookie.indexOf("visited") == -1){ 
            jQuery('body').prepend('<div id="cookie" style="font-size:60%;line-height:190%"><div id="wrapper"><p>We use cookies to ensure that we give you the best experience on our website.  <a style="color:white;text-decoration: underline;" class="ml-1" href="http://www.aboutcookies.org/Default.aspx?page=1" rel="nofollow">Privacy Policy.</a></p><div id="close"><a href="#" id="closecookie">&#x2716; Close</a></div><div style="clear:both"></div></div></div>');
            jQuery('head').append('<style type="text/css">#cookie {position:fixed;left:0;bottom:0;width:100%;height:100%;background:rgb(0,0,0);background:rgba(155,81,224,0.9);z-index:9999;}#cookie #wrapper {padding:20px;}#cookie h2 {color:#ffffff;padding-top:0;display:block;text-align:center;font-family:Lato,sans-serif;font-size:2em}#cookie p {color:#ffffff;display:block;font-family:Lato,sans-serif;font-size:1.6em}#cookie #close{text-align:center;}#closecookie{color:#ffffff;font-family:ariel,sans-serif;font-size:1.6em;text-decoration:none}@media only screen and (min-width: 480px) {#cookie {height:auto;}#cookie #wrapper{max-width:980px;margin-left:auto;margin-right:auto;}#cookie h2{width:18%;margin-top:0;margin-right:2%;float:left;text-align:right;}#cookie p {width:68%;margin:0 1%;float:left;}#cookie #close{width:9%;float:right;}}</style>');
            jQuery('#cookie').fadeIn("fast");
            jQuery('#closecookie').on('click',function() {jQuery('#cookie').fadeOut("fast");});
            document.cookie="visited=yes; expires=Thu, 31 Dec 2020 23:59:59 UTC; path=/";
        }
    }
}
});


//Run datepicker
$(function(){
    if($('body').hasClass('datepicker')){
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    }
});

// Run Jquery Touch
$(function(){
    if($('body').hasClass('jquerytouch')){

        $('#widget').draggable();
        
    }
});



// Added Google analytics shortcode. Paste your Google Analytics code  only here to make it work in ALL PAGES.

var imported = document.createElement('script');
imported.src = 'https://www.googletagmanager.com/gtag/js?id=UA-12XXXXXXX-1'; //paste only your numbers, if you paste full code from google it will break
document.head.appendChild(imported);


window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-12XXXXXXX-1'); //paste only your numbers here too, if you paste full code from google it will break
