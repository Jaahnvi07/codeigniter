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
                            <div class="col-xl-12 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Monthly Booking Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart_1"></canvas>
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
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
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
	
	var barChart1 = function(){
		if(jQuery('#barChart_1').length > 0 ){
			const barChart_1 = document.getElementById("barChart_1").getContext('2d');
			
			barChart_1.height = 100;

			new Chart(barChart_1, {
				type: 'bar',
				data: {
					defaultFontFamily: 'Poppins',
					labels: [
					<?php
					$start = $month = strtotime('2021-09-01');
			        $current=date('Y-m-d');
			        $end = strtotime($current);
			        while($month < $end)
			        {
			        	$mn = date('F Y',$month);
					?>
					"<?php echo $mn; ?>",

					<?php
					 $month = strtotime("+1 month", $month);  
        			}
        			?>
					],
					datasets: [
						{
							label: "Total Bookings ",
							data: [
							<?php
					$start = $month = strtotime('2021-09-01');
			        $current=date('Y-m-d');
			        $end = strtotime($current);
			        while($month < $end)
			        {
			        	$mn = date('Ym',$month);
			        	$result = $this->db->query("select * from booking where DATE_FORMAT(booking_date,'%Y%m')='$mn'");
					?>
							<?php echo $result->num_rows(); ?>,

							<?php
					 $month = strtotime("+1 month", $month);  
        			}
        			?>
							],
							borderColor: 'rgba(64, 24, 157, 1)',
							borderWidth: "0",
							backgroundColor: 'rgba(64, 24, 157, 1)'
						}
					]
				},
				options: {
					legend: false, 
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}],
						xAxes: [{
							// Change here
							barPercentage: 0.5
						}]
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
				barChart1();
			},
			
			resize:function(){
				barChart1();
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