<html>
    <head>
        <title>Happy Hours Map!</title>
        <!--
        <style rel="stylesheet" type="text/css">
            #map-canvas {
                width: 40%;
                height: 100%;
                float: right;
            }
        </style>
        -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css"></link>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

        <script type="text/javascript">
            var jArray = <?php echo json_encode($venue_area); ?>;
            
            console.log(jArray);
                
            google.maps.event.addDomListener(window, "load", (function(){
                
                var map;
                    
                var mapOptions = {
                  zoom: 11,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                
                var geolocate = new google.maps.LatLng(30.280, -97.750);
                
                map.setCenter(geolocate);
                
                for (var i = 0; i < jArray.length; i++){
                        
                    var arrayLat = jArray[i].venue_lat;
                    
                    var arrayLng = jArray[i].venue_lng;
                    
                    var myLatLng = {lat: Number(arrayLat), lng: Number(arrayLng)};
                    
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map
                    });
                    
                    var content = "<p class='maptext'>" + jArray[i].venue_name + "</p>"
                                    + "<p class='maptext'>" + jArray[i].address + "</p>";
                    
                    var infowindow = new google.maps.InfoWindow()

                    google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
                        return function() {
                        infowindow.setContent(content);
                        infowindow.open(map,marker);
                        };
                    })(marker,content,infowindow)); 
                }
                                
            }));
                            
        </script>
    </head>
    
<body>
    
    