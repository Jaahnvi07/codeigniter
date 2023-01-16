<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobie.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard - Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/images/favicon.png">
    <link href="<?php echo base_url(); ?>public/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/chartist/css/chartist.min.css">
	<!-- Vectormap -->
    <link href="<?php echo base_url(); ?>public/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
	<link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

</head>
<body>
	<?php $this->load->view('admin/header'); ?>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-4 col-sm-6 point" onclick="window.location='<?php echo base_url(); ?>place/view';">
						<div class="card bg-primary">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-3 mr-3 border border-white rounded">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M30.25 5.75H28.5V2.25C28.5 1.78587 28.3156 1.34075 27.9874 1.01256C27.6593 0.684374 27.2141 0.5 26.75 0.5C26.2859 0.5 25.8407 0.684374 25.5126 1.01256C25.1844 1.34075 25 1.78587 25 2.25V5.75H11V2.25C11 1.78587 10.8156 1.34075 10.4874 1.01256C10.1592 0.684374 9.71413 0.5 9.25 0.5C8.78587 0.5 8.34075 0.684374 8.01256 1.01256C7.68437 1.34075 7.5 1.78587 7.5 2.25V5.75H5.75C4.35761 5.75 3.02226 6.30312 2.03769 7.28769C1.05312 8.27226 0.5 9.60761 0.5 11V12.75H35.5V11C35.5 9.60761 34.9469 8.27226 33.9623 7.28769C32.9777 6.30312 31.6424 5.75 30.25 5.75Z" fill="white"/>
											<path d="M0.5 30.25C0.5 31.6424 1.05312 32.9777 2.03769 33.9623C3.02226 34.9469 4.35761 35.5 5.75 35.5H30.25C31.6424 35.5 32.9777 34.9469 33.9623 33.9623C34.9469 32.9777 35.5 31.6424 35.5 30.25V16.25H0.5V30.25Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body text-right">
										<p class="fs-18 text-white mb-2">Places</p>
										<span class="fs-48 text-white font-w600">
											<?php echo count($allplace); ?>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6" onclick="window.location='<?php echo base_url(); ?>vehicle/view';">
						<div class="card bg-info">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-3 mr-3 border border-white rounded">
										<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M38.4998 10.4995H35.0002V38.4999H38.4998C40.4245 38.4999 42 36.9238 42 34.9992V13.9992C42 12.075 40.4245 10.4995 38.4998 10.4995Z" fill="white"/>
											<path d="M27.9998 10.4995V6.9998C27.9998 5.07515 26.4243 3.49963 24.5001 3.49963H17.4998C15.5756 3.49963 14.0001 5.07515 14.0001 6.9998V10.4995H10.5V38.4998H31.5V10.4995H27.9998ZM24.5001 10.4995H17.4998V6.99929H24.5001V10.4995Z" fill="white"/>
											<path d="M3.50017 10.4995C1.57551 10.4995 0 12.075 0 13.9997V34.9997C0 36.9243 1.57551 38.5004 3.50017 38.5004H6.99983V10.4995H3.50017Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body text-right">
										<p class="fs-18 text-white mb-2">Vehicle</p>
										<span class="fs-48 text-white font-w600">
											<?php echo count($allvehicle); ?>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6"  onclick="window.location='<?php echo base_url(); ?>slot/view';">
						<div class="card bg-success">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="p-3 mr-3 border border-white rounded">
										<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M15.1811 22.0083C15.065 21.9063 14.7968 21.6695 14.7015 21.5799C12.3755 19.3941 10.8517 15.9712 10.8517 12.1138C10.8517 5.37813 15.4868 0.0410156 21.001 0.0410156C26.5152 0.0410156 31.1503 5.37813 31.1503 12.1138C31.1503 15.9679 29.6292 19.3884 27.3094 21.5778C27.2118 21.6699 26.9384 21.9116 26.8238 22.0125L26.8139 22.1799C26.8789 23.1847 27.554 24.0553 28.5232 24.3626C35.7277 26.641 40.9507 32.0853 41.8276 38.538C41.9483 39.3988 41.6902 40.2696 41.1198 40.9254C40.5495 41.5813 39.723 41.9579 38.8541 41.9579C32.4956 41.9591 9.50672 41.9591 3.14818 41.9591C2.2787 41.9591 1.4518 41.5824 0.881242 40.9263C0.31068 40.2701 0.0523763 39.3989 0.172318 38.5437C1.05145 32.0851 6.27444 26.641 13.4777 24.3628C14.4504 24.0544 15.1263 23.1802 15.1885 22.1722L15.1811 22.0083Z" fill="white"/>
										</svg>

									</span>
									<div class="media-body text-right">
										<p class="fs-18 text-white mb-2">Slots</p>
										<span class="fs-48 text-white font-w600">
											<?php echo count($allslot); ?>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
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
					
        <!--**********************************
            Content body end
        ***********************************-->
   
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>public/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url(); ?>public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url(); ?>public/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/custom.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/deznav-init.js"></script>
	<script src="<?php echo base_url(); ?>public/vendor/owl-carousel/owl.carousel.js"></script>
	<!-- Chart piety plugin files -->
    <script src="<?php echo base_url(); ?>public/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="<?php echo base_url(); ?>public/js/dashboard/dashboard-1.js"></script>
	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: false,
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					800:{
						items:2
					},	
					991:{
						items:2
					},			
					
					1200:{
						items:2
					},
					1600:{
						items:2
					}
				}
			})		
			jQuery('.testimonial-two').owlCarousel({
				loop:true,
				autoplay:true,
				margin:15,
				nav:false,
				dots: true,
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},	
					991:{
						items:3
					},			
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})					
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
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
<!-- Mirrored from jobie.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:30 GMT -->
</html>