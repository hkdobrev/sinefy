<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if (!isset($_SESSION['position'])): ?>
    <script type="text/javascript">
        $(document).ready(function (){
                
            // IMDb ID to Search
            var imdbLink = "tt1285016";

            $.get("http://www.imdbapi.com/?i=" + imdbLink, { },
            function(data) {
                var imdbData = eval("(" + imdbData + ")");
                // Returns Movie Title
                alert(imdbJSON.Title);
            });
        });
        if (navigator.geolocation) 
        {
            navigator.geolocation.getCurrentPosition(function (position) { 
                alert (position.coords.latitude);
                $.post("foursquare/setPosition/", { 'latitude': position.coords.latitude, 'longitude': position.coords.longitude },
                function(data) {
                });
                                                                                     
            }, 
            function (error)
            {
            }
        );
        }

                                                                                    				
    </script>
<?php endif; ?>
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

<style type="text/css">
    #photo-panel {
        background: #fff;
        padding: 5px;
        overflow-y: auto;
        overflow-x: hidden;
        width: 300px;
        max-height: 300px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: -2px 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
    }
    #map_canvas {
        height: 400px;
        width: 600px;
        margin: 0 auto 0 auto;
        border: 1px solid #333;
        margin-top: 0.6em;
    }

    #text {
        width: 600px;
        overflow: auto;
    }
</style>

<script type="text/javascript">
    
    function initialize() {
        
        var myOptions = {
            zoom: 15,
            center: new google.maps.LatLng(<?php echo $position['latitude']; ?>, <?php echo $position['longitude']; ?>),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById('map_canvas'),
        myOptions);
       

<?php foreach ($data as $place): ?>
            var position = new google.maps.LatLng(
    <?php echo $place->location->lat ?>,
    <?php echo $place->location->lng ?>
            );
                var marker = new google.maps.Marker({
                    position: position,
                    map: map
                });

                marker.setTitle("<?php echo $place->name; ?>");
                attachSecretMessage(marker, "<?php echo $place->name; ?>");
<?php endforeach; ?>
    
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    
    var photoPanel = document.getElementById('photo-panel');
    map.controls[google.maps.ControlPosition.RIGHT_TOP].push(photoPanel);
   
    function attachSecretMessage(marker, message_text) {
        var infowindow = new google.maps.InfoWindow({
            content: message_text
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(marker.get('map'), marker);
        });
    }

</script>
<pre>
<ul id="photo-panel">
      <li><strong>Photos clicked</strong></li>
    </ul>
    <div id="map_canvas"></div>
</pre>

<script type="text/javascript">

</script>