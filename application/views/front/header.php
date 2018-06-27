<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesdesign.in/upcube/layouts/horizontal/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 18:51:44 GMT -->
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
		
		 <!-- Table css -->
        <link href="<?php echo base_url(); ?>assets/frontend/member/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
		
        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/frontend/member/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/frontend/member/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/frontend/member/css/style.css" rel="stylesheet" type="text/css" />

		
		<!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/jquery.scrollTo.min.js"></script>
		
		<!--Morris Chart-->
        
        <script src="<?php echo base_url(); ?>assets/frontend/member/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url(); ?>assets/frontend/member/pages/dashborad.js"></script>
		
		 <!-- Responsive-table-->
        <script src="<?php echo base_url(); ?>assets/frontend/member/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js" type="text/javascript"></script>

        <script>
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
        </script>
        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/frontend/member/js/app.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">

                        <a href="" class="logo">
						<?php echo $this->session->userdata('name'); ?>
                            <!--img src="<?php echo base_url(); ?>assets/frontend/member/images/AIA_Logo.png" alt="" height="30" class="logo-small">
                            <img src="<?php echo base_url(); ?>assets/frontend/member/images/AIA_Logo.png" alt="" height="50" class="logo-large"-->
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <!-- Search input -->
                        <!--div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div-->

                        <ul class="list-inline float-right mb-0">
                           
                           
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url(); ?>assets/frontend/member/images/AIA_Logo.png" alt="user" class="rounded-circle" style="    background: #fff;height: 50px;
    width: 50px;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>Profile"><i class="dripicons-user text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>MemberChangePassword"><i class="dripicons-wallet text-muted"></i>Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>NubeMember/logout"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?php echo base_url(); ?>MemberDashboard"><i class="ti-home"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="<?php echo base_url(); ?>Profile"><i class="dripicons-user text-muted"></i>Profile</a>
                            </li>
							<li class="has-submenu">
                                <a href="<?php echo base_url(); ?>Profile/spouse"><i class="ti-light-bulb"></i>Spouse</a>
                            </li>
							<li class="has-submenu">
                                <a href="<?php echo base_url(); ?>Profile/children"><i class="ti-light-bulb"></i>Children</a>
                            </li>
							<li class="has-submenu">
                                <a href="<?php echo base_url(); ?>Profile/declaration"><i class="ti-light-bulb"></i>Declaration</a>
                            </li>


                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->