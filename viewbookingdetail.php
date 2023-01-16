<!-- Mirrored from jobie.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Slot-Add Slot</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/images/favicon.png">
    <!-- Custom Stylesheet -->
    	<link href="<?php echo base_url(); ?>public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">

</head>

<body>
<?php $this->load->view('admin/header'); ?>
   
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        
        <div class="row">
                    	<div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Booking Detail</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                     <div class="col-6 form-group">
                      <b> User Name: </b>
                    </div>
                    <div class="col-6 form-group">
                      <?php echo $singlebooking[0]->name; ?>
                    </div>
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
		</div>
				
		</div>

        <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>public/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url(); ?>public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/custom.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/deznav-init.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/additional-methods.min.js"></script>
   

</body>


<!-- Mirrored from jobie.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:01 GMT -->
</html>