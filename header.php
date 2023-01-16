	 <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="logo1.png" alt="">
                <img class="logo-compact" src="<?php echo base_url(); ?>public/images/1.png" alt="">
                <img class="brand-title" src="<?php echo base_url(); ?>public/images/1.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-lg-inline-flex d-none">
									
								</div>
							</li>
							
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">

                                    <img  src="<?php echo base_url(); ?>public/images/1.jpg">
                                
									<div class="header-info">
										<span></span><span class="text-black">Admin</span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
         <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">

					<li><a  href="<?php echo base_url(); ?>dashboard" aria-expanded="false">
							<!--<i class="flaticon-381-television"></i>-->
							<span class="nav-text">Dashboard</span>
						</a>
						
                    </li>
                    <li><a href="<?php echo base_url(); ?>users/view" aria-expanded="false">
							<!--<i class="flaticon-381-television"></i>-->
							<span class="nav-text" >Users</span>
						</a>
						
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<!--<i class="flaticon-381-television"></i>-->
							<span class="nav-text">Places</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url(); ?>vehicle/view">Vehicles</a></li>
                            <li><a href="<?php echo base_url(); ?>place/view">All Places</a></li>
							<li><a href="<?php echo base_url(); ?>slot/view">Slots</a></li>
						</ul>
                    </li>
                   <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<!--<i class="flaticon-381-television"></i>-->
							<span class="nav-text">Bookings</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url(); ?>booking/view">All Bookings</a></li> 
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <!--<i class="flaticon-381-television"></i>-->
                            <span class="nav-text">Booking Calender</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>bookingcalender">Calender</a></li> 
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <!--<i class="flaticon-381-television"></i>-->
                            <span class="nav-text">Reports</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>reports">Monthly Booking</a></li>
                            <li><a href="<?php echo base_url(); ?>reports2">Monthly user</a></li>
                            <li><a href="<?php echo base_url(); ?>reports1">Slot Wise Booking</a></li>
                          
                        </ul>
                    </li>
                   
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->