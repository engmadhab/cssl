$(document).ready(function() {
	"use strict";     
	//Clients
	$('.clients_slider').owlCarousel({
        items: 4,
        loop:true,
        margin:36,
        mouseDrag:true,
        dots:false,
        nav: true,
        navText:["<<",">>"],
		dots: false,
        smartSpeed: 800,
        autoplay: true,
        responsive:{
        		0:{
        			items:1
        		},
        		600:{
        			items:2
        		},
        		800:{
        			items:2
        		},
        		1024:{
        			items:4
        		}
				,
        		1920:{
        			items:6
        		}

        	}
        });
    
});


	
