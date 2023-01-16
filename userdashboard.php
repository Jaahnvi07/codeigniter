<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo13/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:14:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>User -  Dashboard </title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>user/assets/img/favicon.ico"/>
    <link href="<?php echo base_url(); ?>user/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>user/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>user/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo base_url(); ?>user/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>user/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <?php $this->load->view('user/userheader'); ?>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="<?php echo base_url(); ?>user/spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

   

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        
        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                

                <div class="row layout-top-spacing" >
 <div class="col-3 text-center"></div>
                    <div class="col-6 text-center">
                  <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 text" src="<?php echo base_url(); ?>public/images/parking1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-sm-block">
                <h3>First slide</h3>
                
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>public/images/parking.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-sm-block">
                <h3>Second slide</h3>
                
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>public/images/parking3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-sm-block">
                <h3>Third slide</h3>
             
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
               </div>

                   

                </div>
                <form method="post" action="<?php echo base_url(); ?>userplacelist">
                <div class="row layout-top-spacing text-center" >
                    <div class="col-12 text-center">
                     <button type="submit" class="btn btn-primary mt-3" >Booking </button>
                 </div>
                </div>
                </form>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                       
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

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

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>user/assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo13/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:14:50 GMT -->
</html>