<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo13/apps_notes.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:15:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Forget Password</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>user/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>user/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo base_url(); ?>user/assets/css/apps/notes.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>user/jquery-ui.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
</head>
<body class="alt-menu sidebar-noneoverflow">
    
    <?php $this->load->view('user/userheader'); ?>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row app-notes layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        </div>

                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                          <?php if($this->session->flashdata('message')!= "")
                                            {
                                                echo $this->session->flashdata('message');
                                                $this->session->unset_userdata('message');
                                            } ?>

                                        <form method="post" action="<?php echo base_url(); ?>changepassword" id="form">
                                                    <div class="form-group">
                                        Old Password :
                                           <input type="text" id="txtopass" name="txtopass" class="form-control input-rounded" >
                                            
                                           <span class="error" id="lblcname"></span>
                                        </div>
                                        <div class="form-group">
                                        New Password :
                                           <input type="text" autocomplete="off" id="txtnpass" name="txtnpass" class="form-control input-rounded" >

                                           <span class="error" id="lblcname"></span>
                                        </div>
                                         <div class="form-group">
                                           Confirm Password :
                                           <input type="text" autocomplete="off" id="txtcpass" name="txtcpass" class="form-control input-rounded" >

                                           <span class="error" id="lblcname"></span>  
                                        </div>
                                        
                                         <center><button type="submit" class="btn btn-primary mt-3">Save</button>
                                          <button type="submit" class="btn btn-primary mt-3">Cancel</button></center>
                                     </form>
                                    </div>

                                </div>
                             </div>
                            
                            
                            
                            
                            

                        <!-- Modal -->
                                            <div class="modal fade" id="notesMailModal" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                            <div class="notes-box">
                                                                <div class="notes-content">                                                                        
                                                                    <form action="javascript:void(0);" id="notesMailModalTitle">
                                                                        <div class="row">
                                                                            

                                                                            <div class="col-md-12">
                                                                                <div class="d-flex note-description">
                                                                                   
                                                                                </div>
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button id="btn-n-save" class="float-left btn">Save</button>
                                                            <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Discard</button>
                                                            <button id="btn-n-add" class="btn">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                    </div>
                </div>

                </div>
        <div class="footer-wrapper">
                
               
            </div>
        </div>
        <!--  END CONTENT AREA  -->

        
    </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>user/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>user/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>user/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>user/assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo base_url(); ?>user/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url(); ?>user/assets/js/ie11fix/fn.fix-padStart.js"></script>
    <script src="<?php echo base_url(); ?>user/assets/js/apps/notes.js"></script>
    <script src="<?php echo base_url(); ?>user/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/additional-methods.min.js"></script>
    <script>
        $('#form').validate({
            rules:
            {
                txtopass:
                {
                    required:true
                },
                
                txtnpass:
                {
                    required:true
                },
                 txtcpass:
                {
                    required:true
                }
                 
                
            },
            messages:
            {
                txtopass:
                {
                    required:"Please enter old password"
                },
                txtnpass:
                {
                    required:"Please enter new password"
                },
                
                txtcpass:
                {
                    required:"Please enter confirm password"
                }
            
            }
        });
    </script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo13/apps_notes.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 06:15:10 GMT -->
</html>