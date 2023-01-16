<!-- Mirrored from jobie.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Place-Update place</title>
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
                                <h4 class="card-title">Update Place</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                	
                                    <form method="post" action="<?php echo base_url(); ?>place/save/<?php echo $singleplace[0]->pid; ?>" id="form1" enctype="multipart/form-data">
                                        <div class="form-group">
                                        Place name :
                                           <input type="text" id="txtname" name="txtname" class="form-control input-rounded" value="<?php echo $singleplace[0]->pname; ?>">
                                           <span class="error" id="lblcname"></span>
                                        </div>
                                        <div class="form-group">
                                            Address:<textarea class="form-control"  rows="4" id="comment" name="txtaddress"><?php echo $singleplace[0]->address; ?></textarea>
                                        </div>
                                         <div class="form-group">
                                            Landmark:<textarea class="form-control"  rows="4" id="comment" name="txtlandmark"><?php echo $singleplace[0]->landmark; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                        Pincode :
                                           <input type="text" id="txtpincode" name="txtpincode" class="form-control input-rounded" value="<?php echo $singleplace[0]->pincode; ?>">
                                           <span class="error" id="lblcname"></span>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-primary">Update</button>
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
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
    <script>
        $('#form1').validate({
            rules:
            {
                txtname:
                {
                    required:true
                },
                
                txtaddress:
                {
                    required:true
                },
                 txtlandmark:
                {
                    required:true
                },
                 txtpincode:
                {
                    required:true
                }
            },
            messages:
            {
                txtname:
                {
                    required:"Please enter place name"
                },
                txtlandmark:
                {
                    required:"Please enter landmark"
                },
                txtpincode:
                {
                    required:"Please enter pincode"
                },
                txtaddress:
                {
                    required:"Please enter place address"
                }
            }
        });
    </script>
    


</body>


<!-- Mirrored from jobie.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:01 GMT -->
</html>