<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobie.dexignzone.com/xhtml/chart-chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reports</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <link href="<?php echo base_url(); ?>public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
    <style>
        #pie_chart
        {
            height:500px !important;
        }
    </style>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Reports</a></li>
                    </ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                           
                            
                        
                            
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Slot Wise Booking</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pie_chart"></canvas>
                                    </div>
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
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
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

    <!-- Chart ChartJS plugin files -->
    <script src="<?php echo base_url(); ?>public/vendor/chart.js/Chart.bundle.min.js"></script>
    <script>
        (function($) {
    /* "use strict" */

    
    /* function draw() {
        
    } */

 var dzSparkLine = function(){
    let draw = Chart.controllers.line.__super__.draw; //draw shadow
    
    var screenWidth = $(window).width();
   
    var pieChart = function(){
        //pie chart
        if(jQuery('#pie_chart').length > 0 ){
            //pie chart
            const pie_chart = document.getElementById("pie_chart").getContext('2d');
             pie_chart.height = 800;
            new Chart(pie_chart, {
                type: 'pie',
                data: {
                    defaultFontFamily: 'Poppins',
                    datasets: [{
                        data: [
                         <?php
                            $result = $this->db->query("select *,(select count(*) from booking where sid=slot.sid) as totalbooking from slot");
                            foreach($result->result() as $row)
                            {
                            ?>
                        <?php echo $row->totalbooking; ?>,
                     <?php } ?>],
                        borderWidth: 0, 
                        backgroundColor: [
                            "rgba(255, 99, 71, 1)",
                            "rgb(238, 130, 238)",
                            "rgb(0, 0, 255)",
                            "rgb(60, 179, 113)",
                            "rgb(106, 90, 205)",
                            "rgba(245, 40, 145, 0.8)",
                            "rgba(245, 80, 25, 0.8)",
                            "rgb(0,0,0)",
                            "rgb(0,0,128)",
                            "rgb(0,0,255)",
                            "rgb(0,128,0)",
                            "rgb(0,128,128)",
                            "rgb(0,255,0)",
                            "rgb(0,255,255)",
                            "rgb(128,0,0)",
                            "rgb(128,0,128)",
                            "rgb(128,128,0)",
                            "rgb(128,128,128)",
                            "rgb(192,192,192)",
                            "rgb(255,0,0)",
                            "rgb(255,0,255)",
                            "rgb(255,255,0)",
                            "rgb(199,21,133)",
                            "rgb(128,0,0)",
                            "rgb(255,228,225)",
                            "rgb(188,143,143)",
                            "rgb(210,180,140)",
                            "rgb(221,160,221)",
                            "rgb(238,130,238)",
                            "rgb(199,21,133)",
                            "rgb(216,191,216)",
                            "rgb(250,235,215)",
                            "rgb(245,245,220)",
                            "rgb(255,228,196)",
                            "rgb(255,235,205)",
                            "rgb(245,222,179)",
                            "rgb(255,248,220)",
                            "rgb(255,250,205)",
                            "rgb(160,82,45)",
                            "rgb(210,105,30)",
                            "rgb(205,133,63)",
                            "rgb(244,164,96)",
                            "rgb(222,184,135)",
                            "rgb(210,180,140)",
                            "rgb(188,143,143)",
                            "rgb(255,228,181)",
                            "rgb(176,196,222)",
                            "rgb(0,191,255)",
                            "rgb(30,144,255)",
                            "rgb(0,0,128)"

                        ],
                    }],
                    labels: [
                    <?php
                    $result = $this->db->query("select * from slot");
                    foreach($result->result() as $row)
                    {
                    ?>
                        "<?php echo $row->sname; ?>",
                     <?php } ?>
                    ]
                },
                options: {
                    responsive: true, 
                    legend: false, 
                    maintainAspectRatio: false,
                     legend: {
            position: 'top',
        },
        title: {
            display: true,
            text: ''
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
                }
            });
        }
    }
   



    /* Function ============ */
        return {
            init:function(){
            },
            
            
            load:function(){
                
                pieChart();
            },
            
            resize:function(){
              
                pieChart();
            }
        }
    
    }();

    jQuery(document).ready(function(){
    });
        
    jQuery(window).on('load',function(){
        dzSparkLine.load();
    });

    jQuery(window).on('resize',function(){
        //dzSparkLine.resize();
        setTimeout(function(){ dzSparkLine.resize(); }, 1000);
    });     

})(jQuery);
    </script>



</body>


<!-- Mirrored from jobie.dexignzone.com/xhtml/chart-chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:49 GMT -->
</html>