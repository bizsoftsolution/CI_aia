<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>.: AIA :.</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/member/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/frontend/member/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/frontend/member/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/frontend/member/css/style.css" rel="stylesheet" type="text/css" />

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets/frontend/member/images/image001.gif" height="70" alt="logo"></a>
                    </h3>

                    <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="<?php echo base_url();?>NubeMember/varifyUser" method="POST">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Username" name="email">
									<span class="help-block" style="color: #958ea3;font-size: 13px;">Enter the User name without blank space</span>  
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
									<span class="help-block" style="color: #958ea3;font-size: 13px;">Enter your Date of Birth as MM/dd/YYY eg:12/23/1993</span>  
                                </div>
                            </div>

                            <!--div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div-->

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit" style="background-color: #d4003b;    border: 1px solid #d4003b">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <!--div class="col-sm-7 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock    "></i> Forgot your password?</a>
                                </div-->
                                <div class="col-sm-12 m-t-20" style="    text-align: center;">
                                    <a href="<?php echo base_url(); ?>Register" class="text-muted" style="text-align:center"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/app.js"></script>

    </body>
</html>