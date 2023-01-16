<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo13/apps_notes.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:15:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>user/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>user/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo base_url(); ?>user/assets/css/apps/notes.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/voice.css" rel="stylesheet" type="text/css" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW943quFZKbh832zpD6d0atmE6ZgHLNGw"></script>
    <script>
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
    map.setTilt(50);
        
    // Multiple markers location, latitude, and longitude
    var markers = [
    <?php foreach($allplace as $row) { ?>
        ['<?php echo $row->pname; ?>', <?php echo $row->latitude; ?>, <?php echo $row->longitude; ?>],
        <?php } ?>
    ];
                        
    // Info window content
    var infoWindowContent = [
    <?php foreach($allplace as $row) { ?>
        ['<div class="info_content">' +
        '<h3><?php echo $row->pname; ?></h3>' +
        '<p><?php echo $row->address; ?><?php echo $row->landmark; ?><?php echo $row->pincode; ?></p>' +'<a class="btn btn-danger" href="<?php echo base_url(); ?>uservehiclelist/<?php echo $row->pid; ?>">Book Now</a>' +'</div>'],
<?php } ?>    ];
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
    
}
// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
</script>
    <!-- END PAGE LEVEL STYLES -->
    <style>
        #mapCanvas {
    width: 100%;
    height: 500px;
}
    </style>
</head>
<body class="alt-menu sidebar-noneoverflow">
    
    <?php $this->load->view('user/userheader'); ?>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row app-notes layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                            <form  method="post" action="<?php echo base_url(); ?>searchplace" id="search-form">
                                    <input name="q" type="text" placeholder="Search Google..." autocomplete="off" autofocus>
                                   
                                   <p class="text-center">
                                       <button type="submit" class="btn btn-primary mt-3">Search</button>
                            <button type="button" onclick="window.location='<?php echo base_url(); ?>map';" class="btn btn-primary mt-3">Reset</button>
                        
                                   </p>
</form>
                        
                            <p class="info1"></p>
                            
                       <div id="mapCanvas"></div>

                        
                             </div>
                            
                            
                            
                            
                            

                        <!-- Modal -->
                        
                        
                    </div>
                </div>

                </div>
        <div class="footer-wrapper">
                
               
            </div>
        </div>
        <!--  END CONTENT AREA  -->

        
    </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>user/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>user/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>user/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>user/assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo base_url(); ?>user/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/assets/js/ie11fix/fn.fix-padStart.js"></script>
    <script src="<?php echo base_url(); ?>user/assets/js/apps/notes.js"></script>
    <script src="<?php echo base_url(); ?>user/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>user/voicenote.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/additional-methods.min.js"></script>
   
   
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo13/apps_notes.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:15:10 GMT -->
</html>