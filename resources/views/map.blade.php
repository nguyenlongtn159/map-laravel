@extends('layouts.default')
@section('title', 'Map')

@section('sidebar')
    @parent
    <p>{!! Tran('') !!} {!! Tran('') !!}</p>
@endsection

@section('content')
    <p>{!! Tran('content') !!} {!! Tran('map') !!}</p>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7mIeAhiynB4nSAZEeP1069A_0HaCcnPg" type="text/javascript"></script>
  <!--  <script scr="{{asset('public/js/my.js')}}" type="text/javascript"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        //<![CDATA[

        var customIcons = {
            restaurant: {
                icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
            },
            bar: {
                icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
            }
        };

        function load() {
            var map = new google.maps.Map(document.getElementById("map"), {
              /*  center: new google.maps.LatLng(18.022773, 51.801944),
                zoom: 5,
                mapTypeId: 'roadmap' */
               
               	center: new google.maps.LatLng(21.022773,105.801944),
				zoom: 5,
				mapTypeId: 'roadmap'
            });
            var infoWindow = new google.maps.InfoWindow;
          url = "{!! url('/storage/app/file.xml')!!}";
            // Change this depending on the name of your PHP file
            downloadUrl(url, function(data) {
                var xml = data.responseXML;
                var markers = xml.getElementsByTagName("marker");
               var latlngbounds = new google.maps.LatLngBounds();
                 
                for (var i = 0; i < markers.length; i++) {
                    var name = markers[i].getAttribute("name");
                    var address = markers[i].getAttribute("address");
                    var type = markers[i].getAttribute("type");
                    var point = new google.maps.LatLng(
                            parseFloat(markers[i].getAttribute("lat")),
                            parseFloat(markers[i].getAttribute("lng")));
                    var html = "<b>" + name + "</b> <br/>" + address;
                    var icon = customIcons[type] || {};
                    
                	
					latlngbounds.extend(point);
					map.fitBounds(latlngbounds); 
                    
                   var marker = new google.maps.Marker({
                    	bounds: latlngbounds, 
                        map: map,
                        position: point,
                        icon: icon.icon
                   }); 
                    bindInfoWindow(marker, map, infoWindow, html);
                } 

		});

            }
        

        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = 200;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function doNothing() {

        }

        //]]>

    </script>

    <body onload="load()">
    <div class="" id="map" style="width: 500px; height: 300px"></div>
    </body>


@endsection