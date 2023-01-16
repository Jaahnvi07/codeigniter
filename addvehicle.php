<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobie.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vehicle-Add Vehicle</title>
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
                                <h4 class="card-title">Add Vehicle</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                	
                                    <form method="post" action="<?php echo base_url(); ?>vehicle/insert" id="form1" enctype="multipart/form-data">
                                        <div class="form-group">
                                        Vehicle name :
                                           <input type="text" id="txtname" name="txtname" class="form-control input-rounded" onBlur='checkcatname()'>
                                           <span class="error" id="lblcname"></span>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-primary">Submit</button>
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
                categoryimg:
                {
                    required:true,
                    accept:"image/*"
                },
                txtaddress:
                {
                    required:true
                }
            },
            messages:
            {
                txtname:
                {
                    required:"Please enter category name"
                },
                categoryimg:
                {
                    required:"Please enter image",
                    accept:"Please select valid file"
                },
                txtaddress:
                {
                    required:"Please enter category address"
                }
            }
        });
    </script>
    <script>
    function checkcatname()
    {
      var cname=$("#txtname").val();
      $.ajax({
        url:'checkcatname.php',
        type:'post',
        data:{cname:cname},
        datatype:"JSON",
        success: function(res)
        {
          if(res.trim()=="true")
          {
            $("#lblcname").html("This category already exist");
            $('#btnsubmit').attr("disabled",true);
          }else
          {
            $("#lblcname").html("");
            $('#btnsubmit').attr("disabled",false);
          }
        }
      });
    }
  </script>


</body>


<!-- Mirrored from jobie.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:01 GMT -->
</html>