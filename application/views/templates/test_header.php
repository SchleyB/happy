<html>
    <head>
        <title>Test_header</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css"></link>
        
        <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
        <script type="text/javascript">
            
            var h2 = document.getElementById("map");
            
            if (!document.location.search.length) {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                    
                    var current_lat = position.coords.latitude;
                    
                    var current_lng = position.coords.longitude;
                    
                    var myUrl = document.location;
                    
                    document.location = myUrl + "?lat=" + current_lat + "&lng=" + current_lng;
                    
                    });
                    
                }else {
                    h2.innerHTML = "Geolocation is not supported by this browser";
                }
                      
            }
            
            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        x.innerHTML = "User denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        x.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        x.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        x.innerHTML = "An unknown error occurred."
                        break;
                }
            }
            
        </script>
        
    </head>
    
<body>