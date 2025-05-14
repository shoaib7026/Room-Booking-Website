;(function($){
    "use strict"
    var nav_offset_top = $('.header_area').height()+50; 
 

	
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
    
 

    function mailChimp(){
        $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();
    
 
	
	function parallaxEffect() {
    	$('.bg-parallax').parallax();
	}
	parallaxEffect();
    
    
    
    
     
    function galleryMasonry(){
        if ( $('#gallery').length ){
            $('#gallery').imagesLoaded( function() {
            
                $("#gallery").isotope({
                    itemSelector: ".gallery_item",
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
            })
        }
    }
    galleryMasonry();
	
	/*----------------------------------------------------*/
    /*  Simple LightBox js
    /*----------------------------------------------------*/
    $('.imageGallery1 .light').simpleLightbox();
    
    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
    
    if ( $('#mapBox').length ){
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
        el: '#mapBox',
        lat: $lat,
        lng: $lon,
        scrollwheel: false,
        scaleControl: true,
        streetViewControl: false,
        panControl: true,
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        zoom: $zoom,
            styles: [
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#dcdfe6"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "stylers": [
                        {
                            "color": "#808080"
                        },
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#dcdfe6"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "weight": 1.8
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#d7d7d7"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ebebeb"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#a7a7a7"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#efefef"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#696969"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#737373"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#d6d6d6"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {},
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#dadada"
                        }
                    ]
                }
            ]
        });
    }

})(jQuery)


// yaha se calculation start he jisme hm room price ko multiply kr rahy he total days k sath or pickup cost ko bhi add krna he total me 

function updatePickupCost(select) {
    const pickupCost = parseFloat(select.options[select.selectedIndex].getAttribute('data-cost')) || 0;
    document.getElementById('pickup_cost').value = pickupCost;

    const roomPrice = parseFloat(document.querySelector('[name="room_price"]').value) || 0;

    const checkin = document.getElementById('checkin').value;
    const checkout = document.getElementById('checkout').value;

    // Date parts from yyyy-mm-dd
    const checkinParts = checkin.split("-");
    const checkoutParts = checkout.split("-");

    if (checkinParts.length !== 3 || checkoutParts.length !== 3) {
        // fallback calculation
        document.getElementById('total_price').value = roomPrice + pickupCost;
        return;
    }

    const checkinDate = new Date(checkinParts[0], checkinParts[1] - 1, checkinParts[2]);
    const checkoutDate = new Date(checkoutParts[0], checkoutParts[1] - 1, checkoutParts[2]);

    const timeDiff = checkoutDate.getTime() - checkinDate.getTime();
    let days = Math.ceil(timeDiff / (1000 * 3600 * 24));

    if (days < 1) days = 1;

    const totalPrice = (roomPrice * days) + pickupCost;

    document.getElementById('total_price').value = totalPrice;
}


document.addEventListener("DOMContentLoaded", function () {
    const select = document.getElementById('pickup_location');
    if (select.value !== "") {
        updatePickupCost(select);
    }
});



// yaha se booking invoice print ho rahi he 

function printInvoice() {
    const invoiceElement = document.getElementById('invoice');
    const printWindow = window.open('', '', 'height=600,width=800');
    
    printWindow.document.write('<html><head><title>Invoice</title>');
    printWindow.document.write('<style>body{font-family: Arial, sans-serif;} .container {max-width: 100%;}</style>'); // Custom styles if needed
    printWindow.document.write('</head><body>');
    printWindow.document.write(invoiceElement.innerHTML); 
    printWindow.document.write('</body></html>');
    printWindow.document.close(); 
    printWindow.print(); 
}









  

