jQuery(document).ready(function(){





    // ANIMATE.CSS EVENT HANDLING



	var rubberBand   = jQuery('.btn-send'); 

	var heartBeat    = jQuery('.icon-link'); 

    var bounceInImg1 = jQuery('.article__1'); 

    var bounceInImg2 = jQuery('.article__2');

    var bounceInImg3 = jQuery('.article__3');  

    var bounceInimg  = jQuery('.up-link'); 



    	jQuery(rubberBand).click(function(){

            jQuery(this).addClass('animated rubberBand');

            setTimeout(function() {

                (rubberBand).removeClass('animated rubberBand');

            }, 1000);

        });



        jQuery(heartBeat).hover(function(){

            jQuery(this).toggleClass('animated heartBeat');

        });



        jQuery(bounceInImg1).hover(function(){

            jQuery('.img__1').toggleClass('animated bounceIn');

        });



         jQuery(bounceInImg2).hover(function(){

            jQuery('.img__2').toggleClass('animated bounceIn');

        });



        jQuery(bounceInImg3).hover(function(){

            jQuery('.img__3').toggleClass('animated bounceIn');

        }); 



        jQuery(bounceInimg).hover(function(){

            jQuery('.up-img').toggleClass('animated bounceIn');

        });





    // DISPLACEMENT ANIMATIONS



    var root = jQuery('html, body');

    var menu = jQuery('.thumbnail-link, .link__scroll');

    var up   = jQuery('.up');  



        menu.click(function(){

            root.animate({scrollTop:jQuery( jQuery.attr(this, 'href') ).offset().top - 75}, 800);

            return false;

        });



      

        up.click(function(event){

            event.preventDefault();

            jQuery('html, body').animate({scrollTop:0}, 800);

            return false;

        }); 





    // TOGGLE NAV-SCROLL UP AND DOWN ON SCROLL



    var didScroll;

    var lastScrollTop = 0;

    var delta = 5;

    var navScroll = jQuery('#nav-scroll');

    var navHeight = 200;



    jQuery(window).scroll(function(event) {

        didScroll = true;

    });



    setInterval(function() {

        if (didScroll) {

            hasScrolled();

            didScroll = false;

        }

    }, 250);



    function hasScrolled() {

        var st = jQuery(this).scrollTop();

        

        // Make sure they scroll more than delta

        if(Math.abs(lastScrollTop - st) <= delta)

            return;

        

        // If they scrolled down and are past the navbar, add a class.

        if (st > lastScrollTop && st > navHeight) {

            // Scroll Down

            navScroll.addClass('nav-down');

        } else {

            // Scroll Up

            if(st + jQuery(window).height() < jQuery(document).height()) {

                navScroll.removeClass('nav-down');

            }

        }

        

        lastScrollTop = st;

    }





    // TOOLTIP INIT



    jQuery(function () {

        jQuery('[data-toggle="tooltip"]').tooltip()

    });



    // PAGE PRELOADER


    
    document.getElementById("preloader").style.display = "none";
    
    // window.onload = function(){ document.getElementById("preloader").style.display = "none"};





}); /*JQuery*/