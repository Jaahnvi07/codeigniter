<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo13/table_dt_alternative_pagination.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:16:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Booking Form</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>user/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>user/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->    
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
    
   <?php $this->load->view('user/userheader'); ?>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        

        <!--  BEGIN CONTENT AREA  -->

        <div id="content" class="main-content">
            
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                 <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            
                                
                    <div class="col-6 form-group">
                      <b> Vehicle No. </b>
                    </div>
                    <div class="col-6 form-group">
                      <?php echo $singlebooking[0]->vnumber; ?>
                    </div>

                     <div class="col-6 form-group">
                      <b> Slot Name </b></div>
                      <div class="col-6 form-group">
                       <?php echo $singlebooking[0]->sname; ?>
                    </div>

                    <div class="col-6 form-group">
                      <b> Time </b></div>
                      <div class="col-6 form-group">
                       <?php echo $singlebooking[0]->time; ?>
                    </div>
                    <div class="col-6 form-group">
                      <b> Status </b></div>
                      <div class="col-6 form-group">
                       <?php echo $singlebooking[0]->status; ?>
                    </div>
                     <div class="col-6 form-group">
                      <b> Booking Date </b></div>
                      <div class="col-6 form-group">
                       <?php echo $singlebooking[0]->booking_date; ?>
                    </div>
                    <div class="col-6 form-group">
                      <b> Remark </b></div>
                      <div class="col-6 form-group">
                      <?php echo $singlebooking[0]->remark; ?>
                    </div>
                    <div class="col-6 form-group">
                      <b> RC Book </b></div>
                      <div class="col-6 form-group">
                       <img src="<?php echo base_url(); ?>uploads/<?php echo $singlebooking[0]->rcbook; ?>" width="100" height="100"/>
                    </div>
                    
                                        
                        </div>
                    </div>
                </div>

                </div>
        <div class="footer-wrapper">
               
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
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
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
   
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo13/table_dt_alternative_pagination.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:16:00 GMT -->
</html>