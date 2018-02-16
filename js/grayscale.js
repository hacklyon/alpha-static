(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

})(jQuery); // End of use strict


function rgb(r, g, b){
  return "rgb("+r+","+g+","+b+")";
}

var colors = ["#7b3878",
              "#885f9a",
              "#356091",
              "#5e9db0",
              "#e0bc57",
              "#e89262",
              "#d7817f",
              "#913e4a"];
var rgbColors = [
              [123, 56, 120],
              [136, 95, 154],
              [53, 96, 145],
              [94, 157, 176],
              [224, 188, 87],
              [232, 146, 98],
              [215, 129, 127],
              [145, 62, 74]];

var bg = ["bg1-1.jpg",
          "bg1-2.jpg",
          "bg2-1.jpg",
          "bg2-2.jpg",
          "bg3-1.jpg",
          "bg3-2.jpg",
          "bg4-1.jpg",
          "bg4-2.jpg",
          "bg5-1.jpg",
          "bg5-2.jpg",
          "bg6-1.jpg",
          "bg6-2.jpg"];
/**
https://unsplash.com/photos/_QoAuZGAoPY
https://unsplash.com/photos/7nrsVjvALnA
https://unsplash.com/photos/45FJgZMXCK8
https://unsplash.com/photos/GeOws83toxc
https://unsplash.com/photos/Pihl8kTtX-s
https://unsplash.com/photos/tKQ9NhQVCjM
*/

var logo = document.getElementById("alpha-logo");
var bg1 = document.getElementsByClassName("masthead")[0];
//logo.style.color = "#ff0000";

var goToColor = function(inter){
    var index = inter % colors.length;

    var previous = (index>0)?rgbColors[index-1]:rgbColors[colors.length-1];
    var next = colors[index];
    logo.style.color = next;
    setTimeout(goToColor, 1000, ++index);
    var map = function (x,  in_min,  in_max,  out_min,  out_max){
      return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
    }
    for (var i = 0; i < 10; i++) {
      var out_r = map(i, 0, 20, previous[0], next[0]);
      var out_g = map(i, 0, 20, previous[1], next[1]);
      var out_b = map(i, 0, 20, previous[2], next[2]);
      logo.style.color = rgb(out_r, out_g, out_b);
    }
};

//goToColor(0);

$("#newsletter").submit(()=>{
  var email = $("#email-newsletter").val();
  
  $.post( window.location.href + "newsletter/new.php", { mail: email } )
    .done((data) => {
      console.log(data);
      data = JSON.parse(data);
      if (data.status === 'ok') {
        $(".newsletter").notify(data.message, "success");
      } else {
        for (var i = data.error.length - 1; i >= 0; i--) {
          $.notify(data.error[i]);
        }
      }
    })
    .fail(()=>{
      $.notify("Something went wrong :/");
    });

  return false;
})

// Google Maps Scripts
var map = null;
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);
google.maps.event.addDomListener(window, 'resize', function() {
  map.setCenter(new google.maps.LatLng(45.7833627,4.8743435));
});

function init() {
  // Basic options for a simple Google Map
  // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
  var mapOptions = {
    // How zoomed in you want the map to start at (always required)
    zoom: 15,

    // The latitude and longitude to center the map (always required)
    center: new google.maps.LatLng(45.7833627,4.8743435), // New York

    // Disables the default Google Maps UI components
    disableDefaultUI: true,
    scrollwheel: false,
    draggable: false,

    // How you would like to style the map.
    // This is where you would paste any style found on Snazzy Maps.
    styles: [{
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 17
      }]
    }, {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 20
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 17
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 29
      }, {
        "weight": 0.2
      }]
    }, {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 18
      }]
    }, {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 16
      }]
    }, {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 21
      }]
    }, {
      "elementType": "labels.text.stroke",
      "stylers": [{
        "visibility": "off"
      }, {
        "color": "#000000"
      }, {
        "lightness": 16
      }]
    }, {
      "elementType": "labels.text.fill",
      "stylers": [{
        "saturation": 36
      }, {
        "color": "#000000"
      }, {
        "lightness": 40
      }]
    }, {
      "elementType": "labels.icon",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 19
      }]
    }, {
      "featureType": "administrative",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 20
      }]
    }, {
      "featureType": "administrative",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 17
      }, {
        "weight": 1.2
      }]
    }]
  };

  // Get the HTML DOM element that will contain your map
  // We are using a div with id="map" seen below in the <body>
  var mapElement = document.getElementById('map');

  // Create the Google Map using out element and options defined above
  map = new google.maps.Map(mapElement, mapOptions);

  // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
  var image = 'img/map-marker.svg';
  var myLatLng = new google.maps.LatLng(45.7833627,4.8743435);
  var beachMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image
  });
}
