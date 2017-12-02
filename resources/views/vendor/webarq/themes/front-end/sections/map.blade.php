@foreach ($shareData as $row)
    <div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
        <h4 class="white">{{ $row->title }}</h4>
    </div><!-- section title end -->
    <!--================================MAP SECTION==========================================-->

    <section id="google-map">
        <div class="container-fluid">
            <div id="map"></div>
        </div><!-- container-fluid end -->
    </section>
    <br/><br/><br/>

    @push('view-script')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHLOiCi2oqw1kAKLv9RLlAiIsLRoVmt-Y"></script>
	<script type="text/javascript">
    // When the window has finished loading create our google map below
               google.maps.event.addDomListener(window, 'load', init);

               function init() {
                   "use strict";
                   // Basic options for a simple Google Map
                   // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                   var mapOptions = {
                       scrollwheel: false,
                       // How zoomed in you want the map to start at (always required)
                       zoom: 15,
                       type: 'ROADMAP',
                       // The latitude and longitude to center the map (always required)
                       center: new google.maps.LatLng(Number("{{ $row->latitude }}"), Number("{{ $row->longitude }}")), // New York

                       // How you would like to style the map.
                       // This is where you would paste any style found on Snazzy Maps.
                       styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
                   };

                   // Get the HTML DOM element that will contain your map
                   // We are using a div with id="map" seen below in the <body class="scrollbar-inner">
                   var mapElement = document.getElementById('map');

                   // Create the Google Map using our element and options defined above
                   var map = new google.maps.Map(mapElement, mapOptions);

                   // Let's also add a marker while we're at it
                   var marker = new google.maps.Marker({
                       position: new google.maps.LatLng(Number("{{ $row->latitude }}"), Number("{{ $row->longitude }}")),
                       map: map,
                       icon: 			"{{ asset('frontend/images/pin.png') }}",
                       title: 			'Aisytrans',


                   });

               }
    </script>
    @endpush

@endforeach
