
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobie.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vehicle-View Vehicle</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/images/favicon.png">
    <!-- Datatable -->
    <link href="<?php echo base_url(); ?>public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Database</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Vehicle</a></li>
					</ol>
                </div>
                <!-- row --> 
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">

                                <h4 class="card-title">Vehicle Detail</h4>
                                <button name="btnadd" type="button" onclick="window.location='<?php echo base_url(); ?>vehicle/add';" class="btn btn-rounded btn-primary"><span
                                        class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i></span>Add
                                    </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                   
                                    <table id="example3" class="display table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Vehicle Name</th>
                                                
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                            foreach($allvehicle as $row) { ?>
                                            <tr>
                                                <td><?php echo $count; $count++; ?></td>
                                                <td><?php echo $row->vname; ?></td>
                                                
                                                <td>
<a data-id="<?php echo $row->vid; ?>" data-toggle="modal" data-target="#basicModal" class="btn  open-dialog">Delete</a>
                                                 | <a href="<?php echo base_url(); ?>vehicle/update/<?php echo $row->vid; ?>" class="btn">Edit</a></td></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
       
        <!--**********************************
            Content body end
        ***********************************-->
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
     <div class="modal fade" id="basicModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure ?</div>
                <div class="modal-footer">
                    <form method="post" action="<?php echo base_url(); ?>vehicle/delete">
                    <input type="hidden" id="deleteid" name="deleteid"/>
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">No</button>
                    <button type="submit" name="btndelete" class="btn btn-primary">Yes</button>
                </form>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>public/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url(); ?>public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/custom.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/deznav-init.js"></script>
	
    <!-- Datatable -->
    <script src="<?php echo base_url(); ?>public/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins-init/datatables.init.js"></script>
    <script>
        $(document).ready(function(){
            $('.open-dialog').click(function(){
                var id = $(this).attr("data-id");
                $('#deleteid').val(id);
            });
        });
    </script>

</body>

<!-- Mirrored from jobie.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:51:10 GMT -->
</html>