<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo13/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:15:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Parking - Login</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>user/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>user/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>user/assets/css/forms/switches.css">
</head>
<body class="form">
    

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Log In to <a href="index-2.html"><span class="brand-name">Parkzee</span></a></h1>
                        <p class="signup-link">New Here? <a href="<?php echo base_url(); ?>userregister">Create an account</a></p>
                         <?php if($this->session->flashdata('message')!= "")
                                    {
                                        echo $this->session->flashdata('message');
                                        $this->session->unset_userdata('message');
                                    } ?>
                        <form class="text-left" action="<?php echo base_url(); ?>checkuserlogin" method="post" id="form1">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>
                                    
                                </div>

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <a href="<?php echo base_url(); ?>forgotpassword" class="forgot-pass-link">Forgot Password?</a>
                                </div>

                            </div>
                        </form>                        
                        
                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
                <img class="d-block w-100" height="800" src="<?php echo base_url(); ?>public/images/parking.jpg" >
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>user/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>user/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/assets/js/authentication/form-1.js"></script>
    <script>
        $('#form1').validate({
            rules:
            {
                username:
                {
                    required:true
                }, 
                password:
                {
                    required:true,
                } 
            },
            messages:
            {
                username:
                {
                    required:"Please enter user name"
                }, 
                password:
                {
                    required:"Please enter Password",
                }   
            }
        });
    </script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo13/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:15:01 GMT -->
</html>