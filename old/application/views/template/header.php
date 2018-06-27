<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AIA</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/icons/icomoon/styles.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/core.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/components.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/colors.css');?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
       
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/pace.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/blockui.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js');?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
         <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/notifications/jgrowl.min.js');?>"></script>
         <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ui/moment/moment.min.js');?>"></script>
         
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/validation/validate.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/inputs/touchspin.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/styling/switch.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/styling/switchery.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/styling/uniform.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/selects/bootstrap_multiselect.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/selects/select2.min.js');?>"></script>

        
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/buttons.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/select.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/buttons.min.js');?>"></script>
	

    	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/daterangepicker.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/anytime.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/picker.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/picker.date.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/picker.time.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/legacy.js');?>"></script>


        <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/visualization/d3/d3.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/visualization/d3/d3_tooltip.js');?>"></script>
        
        <!-- Customised js -->
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/app.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/pages/datatables_extension_buttons_html5.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/pages/form_validation.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/pages/datatables_extension_buttons_print.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/pages/picker_date.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ui/ripple.min.js');?>"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<h1 style="color: #fff;text-align:center;">AIA</h1>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			<div class="navbar-right">
				<p class="navbar-text">welcome! <?php echo $this->session->userdata('first_name');?></p>
				<p class="navbar-text"><span class="label bg-success">Online</span></p>

				<ul class="nav navbar-nav">
					

					
						
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
