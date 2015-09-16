<html>
    <head>
        
	<title>Get Happy Austin! | Find the best Happy Hours in Austin,Texas</title>

        <meta name="description" content="Find the best Happy Hours in Austin!  Search for the nearest Happy Hours or by area">

	<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css"></link>
        
        <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
        <script type="text/javascript">
            
            var h2 = document.getElementById("map");
            
	    var x = document.getElementById("errors");

            if (!document.location.search.length) {
                if (navigator.geolocation) {

		    var options = {timeout: 60000};

		    function showError(error) {

			alert("Sorry, unable to determine location! Please make sure Geolocation is turned on in your Browser.");
			window.location = "/";

		    }

                    navigator.geolocation.getCurrentPosition(function(position) {
                    
                    var current_lat = position.coords.latitude;
                    
                    var current_lng = position.coords.longitude;
                    
                    var myUrl = document.location;
                    
                    document.location = myUrl + "?lat=" + current_lat + "&lng=" + current_lng;
                    
                    }, showError, options );
                    
                }else {
                    h2.innerHTML = "Geolocation is not supported by this browser";
                }
                      
            }
            
        </script>
        
    </head>
    
<body>
