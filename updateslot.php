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
                                <h4 class="card-title">Add Slot</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                	
                                    <form method="post" action="<?php echo base_url(); ?>slot/save/<?php echo $singleslot[0]->sid; ?>" id="form1" enctype="multipart/form-data">
                                        <div class="form-group">
                                        Place name :
                                           <select id="txtpname" name="txtpname" class="form-control input-rounded" value="<?php echo $singleslot[0]->pname; ?>">
                                                 <option value="">Please Select Place</option>
                                                <?php
                                            $count=1;
                                            foreach($allplace as $row) { ?>
                                            <option <?php if($singleslot[0]->pid==$row->pid) { ?> selected <?php } ?> value="<?php echo $row->pid; ?>"><?php echo $row->pname; ?></option>
                                        <?php } ?>
                                           </select>
                                           <span class="error" id="lblcname"></span>
                                        </div>
                                        <div class="form-group">
                                            Vehicle Name:<select id="txtvname" name="txtvname" class="form-control input-rounded"value="<?php echo $singleslot[0]->vname; ?>" >
                                                <option value="">Please Select Vehicle</option>
                                                <?php
                                            $count=1;
                                            foreach($allvehicle as $row) { ?>
                                            <option <?php if($singleslot[0]->vid==$row->vid) { ?> selected <?php } ?> value="<?php echo $row->vid; ?>"><?php echo $row->vname; ?></option>
                                        <?php } ?>
                                            </select>
                                           <span class="error" id="lblcname"></span>
                                        </div>
                                         <div class="form-group">
                                            Slot Name:<input type="text" id="txtsname" name="txtsname" class="form-control input-rounded" value="<?php echo $singleslot[0]->sname; ?>">
                                           <span class="error" id="lblcname"></span>
                                        </div>
                                         <div class="form-group">
                                            Price:<input type="text" id="txtprice" name="txtprice" class="form-control input-rounded" value="<?php echo $singleslot[0]->price; ?>">
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
                txtpname:
                {
                    required:true
                },
                 txtvname:
                {
                    required:true
                },
                txtprice:
                {
                    required:true
                },
                txtsname:
                {
                    required:true
                }
            },
            messages:
            {
                txtpname:
                {
                    required:"Please enter place name"
                },
                txtvname:
                {
                    required:"Please enter vehicle name"
                },
                txtsname:
                {
                    required:"Please enter slot name"
                },
                txtprice:
                {
                    required:"Please enter price"
                }
            }
        });
    </script>
    

</body>


<!-- Mirrored from jobie.dexignzone.com/xhtml/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:01 GMT -->
</html>