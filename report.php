<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo13/charts_apex.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:16:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Apex Charts</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>user/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>user/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo base_url(); ?>user/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>

</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">
    
     <?php $this->load->view('user/userheader'); ?>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">


                    
                       

                        <div id="chartBar" class="col-xl-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Bar</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="s-bar" class=""></div>

                                    <div class="code-section-container">
                                                
                                       

                                        <div class="code-section text-left">
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


   
                       

                    </div>

                </div>

                </div>
      
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    
    <!--  END FOOTER  -->

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
    <script src="<?php echo base_url(); ?>user/plugins/highlight/highlight.pack.js"></script>
    <script src="<?php echo base_url(); ?>user/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/assets/js/scrollspyNav.js"></script>
    <script src="<?php echo base_url(); ?>user/plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>user/plugins/apex/custom-apexcharts.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo13/charts_apex.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:16:43 GMT -->
</html>