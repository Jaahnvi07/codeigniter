
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from jobie.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/images/1.png">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
									<img class="logo-compact" src="<?php echo base_url(); ?>public/images/1.png"  alt="" width="200">
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    
                                    <?php if($this->session->flashdata('message')!= "")
                                    {
                                        echo $this->session->flashdata('message');
                                        $this->session->unset_userdata('message');
                                    } ?>

                                    <form action="<?php echo base_url(); ?>checklogin" method="post" id="form1">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" name="txtusername" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="txtpassword" class="form-control">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1 text-white">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember Me</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white" href="<?php echo base_url(); ?>forgotpass">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="btnlogin" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/additional-methods.min.js"></script>
    <script>
        $('#form1').validate({
            rules:
            {
                txtusername:
                {
                    required:true
                }, 
                txtpassword:
                {
                    required:true,
                } 
            },
            messages:
            {
                txtusername:
                {
                    required:"Please enter user name"
                }, 
                txtpassword:
                {
                    required:"Please enter Password",
                }   
            }
        });
    </script>

</body>


<!-- Mirrored from jobie.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Dec 2020 10:50:38 GMT -->
</html>