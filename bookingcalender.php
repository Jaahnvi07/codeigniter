<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobie.dexignzone.com/xhtml/app-calender.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Booking Calender</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

    <link href="<?php echo base_url(); ?>public/vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Calerdar</a></li>
                </ol>
                </div>
                <!-- row -->


                <div class="row">
                    
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    
                    <!-- Modal Add Category -->
                    
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->

        


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>public/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/deznav-init.js"></script>
    
    <!--removeIf(production)-->



    
    <script src="<?php echo base_url(); ?>public/vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>public/vendor/moment/moment.min.js"></script>

    <script src="<?php echo base_url(); ?>public/vendor/fullcalendar/js/fullcalendar.min.js"></script>
     <script>
           $(document).ready(function(){
            var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
            <?php
            foreach($allbooking as $row)
            {
            ?>
                {
                    id: '<?php echo $row->bid; ?>',
                    title: '<?php echo $row->sname; ?> - <?php echo $row->vnumber; ?> - <?php echo $row->time; ?>',
                    start: "<?php echo $row->booking_date; ?>",
                    className: "bg-danger",
                     url: '<?php echo base_url(); ?>/viewbookingdetail/<?php echo $row->bid; ?>'
                },

                <?php } ?>
            ],
          
        });
           });
    </script>
</body>

<!-- Mirrored from jobie.dexignzone.com/xhtml/app-calender.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:43 GMT -->
</html>