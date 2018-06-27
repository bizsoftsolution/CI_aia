<!DOCTYPE html> 
<html>
<head>
		<title>Nube Register Form</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/demo.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/sky-forms.css">
		
		<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.validate.min.js"></script>
		
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body class="bg-red">
		<div class="body body-s">
			<div class="panel panel-default" style="    background: rgba(248,248,248,.9);">
				<div class="panel-heading" style="padding: 18px 15px;
    font-size: 25px;
    color: #d4003b;
    font-weight: 700;    font-family: serif;">Registration Form AIA <span style="float:right;    font-size: 19px;
        font-family: serif;"><a href="<?php echo base_url(); ?>Login" style="    text-decoration: none;">LOGIN</a></span></div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo base_url(); ?>Register/Add" id="sky-form" enctype="multipart/form-data" method="POST">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Name</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="memname" placeholder="Enter Name" name="memname">
							<em for="memname" class="invalid"></em>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Date of Birth</label>
						  <div class="col-sm-10">
							<div class="row">
								<div class="col-md-3">
									<input type="date" class="form-control" id="dob"  name="dob">
								</div>
								<label class="col-sm-1" style="font-size: 13px;padding: 8px 0px 0px 8px;">NRIC New</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="nricnew"  name="nricnew">
									<em for="nricnew" class="invalid"></em>
								</div>
								<label class="col-sm-1" style="font-size: 13px;padding: 8px 0px 0px 8px;">NRIC Old</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="nricold"  name="nricold">
								</div>
								<label class="col-sm-1" style="font-size: 13px;padding: 8px 0px 0px 8px;">Gender</label>
								<div class="col-md-2">
									<select class="form-control" name="gender" id="gender">
										<option value="0">Select</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="bankname">Bank Name</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="bankname" placeholder="Enter Bank Name" name="bankname">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="address">Bank Address</label>
						  <div class="col-sm-10">
							<textarea class="form-control" cols="5" rows="5" name="baddress" id="baddress"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="occupation">Occupation</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="occupation" placeholder="Enter Occupation" name="occupation">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="address">House Address</label>
						  <div class="col-sm-10">
							<textarea class="form-control" cols="5" rows="5" name="haddress" id="haddress"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">House No</label>
						  <div class="col-sm-10">
							<div class="row">
								<div class="col-md-3">
									<input type="number" class="form-control" id="houseno"  name="houseno">
								</div>
								<label class="col-sm-1" style="font-size: 13px;padding: 8px 0px 0px 8px;">Office No</label>
								<div class="col-md-3">
									<input type="number" class="form-control" id="hofficeno"  name="hofficeno">
								</div>
								<label class="col-sm-2" style="font-size: 13px;padding: 8px 0px 0px 8px;">House Phone</label>
								<div class="col-md-3">
									<input type="number" class="form-control" id="housephone"  name="housephone">
								</div>
							</div>
							
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Email Address</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="hemailaddress" placeholder="Enter email" name="hemailaddress">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Bank Account No</label>
						  <div class="col-sm-10">
							<div class="row">
								<div class="col-md-4">
									<input type="text" class="form-control" id="bankaccountno"  name="bankaccountno">
								</div>
								<label class="col-sm-2" style="font-size: 13px;padding: 8px 0px 0px 8px;">Bank Name</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="bankaccountname"  name="bankaccountname">
								</div>
							</div>
							
						  </div>
						</div>
						<br>
		<div class="panel-heading" style="padding: 15px 15px;
    background: #d4003b;color:#fff">Dependent List</div>
						<br>
						<h4 style="font-size: 15px;
    color: #d4003b;
    ">Spouse Name ( Terms Spouse Should Not Exceed 65 Years Old )</h4>

						<div class="field_wrapper">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label" for="pwd" style="    margin: 10px 0;">Name as per NRIC</label>
								  <input name="snricname[]" type="text" class="form-control" placeholder="Name as per NRIC">
								</div>
								<div class="col-sm-4">
								<label class="control-label" for="pwd" style="    margin: 10px 0;">NRIC NO</label>
								  <input name="snricno[]" type="text" class="form-control" placeholder="NRIC NO">
								  
								</div>
								<div class="col-sm-4">
								<label class="control-label" for="pwd" style="    margin: 10px 0;">Date of Birth</label>
								  <input name="sdob[]" type="date" class="form-control" placeholder="Date Of Birth">
								</div>
								<a href="javascript:void(0);" class="add_button" title="Add field" style="float:right;    margin: 9px 30px;
    border: 1px solid #c5c5c5;
    padding: 5px;
    background: #f1f1f1;
    border-radius: 4px;
    box-shadow: 1px 1px 3px;">
									Addmore <i class="fa fa-plus" style="color:green;font-size:20px;"></i>
								</a>
							</div>
						</div>
						<br>
						<h4 style="font-size: 15px;
    color: #d4003b;
    ">Childrens ( Terms Children > 15 day - 19 years old )</h4>
						<div class="field_wrapper1">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label" for="pwd" style="    margin: 10px 0;">Name as per NRIC</label>
								  <input name="cnricname[]" type="text" class="form-control" placeholder="Name as per NRIC">
								</div>
								<div class="col-sm-4">
								<label class="control-label" for="pwd" style="    margin: 10px 0;">NRIC NO</label>
								  <input name="cnricno[]" type="text" class="form-control" placeholder="NRIC NO">
								  
								</div>
								<div class="col-sm-4">
								<label class="control-label" for="pwd" style="    margin: 10px 0;">Date of Birth</label>
								  <input name="cdob[]" type="date" class="form-control" placeholder="Date Of Birth">
								</div>
								<a href="javascript:void(0);" class="add_button1" title="Add field" style="float:right;    margin: 9px 30px;
    border: 1px solid #c5c5c5;
    padding: 5px;
    background: #f1f1f1;
    border-radius: 4px;
    box-shadow: 1px 1px 3px;">
									Addmore <i class="fa fa-plus" style="color:green;font-size:20px;"></i>
								</a>
							</div>
						</div>
						<br>
						<div class="panel-heading" style="padding: 15px 15px;
    background: #d4003b;color:#fff">Declaration List</div>
						<br>
						<div class="field_wrapper2">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label" for="pwd" style="    margin: 10px 0;">Name as per NRIC</label>
								  <input name="dnricname[]" type="text" class="form-control" placeholder="Name as per NRIC">
								</div>
								<div class="col-sm-4">
								<label class="control-label" for="pwd" style="    margin: 10px 0;">Local Treatment / Doctor's Name</label>
								  <input name="dnricno[]" type="text" class="form-control" placeholder="Local Treatment / Doctor's Name">
								  
								</div>
								<div class="col-sm-4">
								<label class="control-label" for="pwd" style="    margin: 10px 0;">Date of Treatment Decision</label>
								  <input name="ddob[]" type="date" class="form-control" placeholder="Date Of Birth">
								</div>
								<a href="javascript:void(0);" class="add_button2" title="Add field" style="float:right;    margin: 9px 30px;
    border: 1px solid #c5c5c5;
    padding: 5px;
    background: #f1f1f1;
    border-radius: 4px;
    box-shadow: 1px 1px 3px;">
									Addmore <i class="fa fa-plus" style="color:green;font-size:20px;"></i>
								</a>
							</div>
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email"></label>
						  <div class="col-sm-10">
							<input type="submit" value="Save" class="btn btn-success" name="save_register_data" style="float:right;    margin: 20px 0 0 0;">
						  </div>
						</div>
					</form>
				</div>

			</div>
					
		</div>
		
		<script type="text/javascript">
			$(function()
			{
				// Validation		
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						nricnew:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						password:
						{
							required: true,
							minlength: 3,
							maxlength: 20
						},
						passwordConfirm:
						{
							required: true,
							minlength: 3,
							maxlength: 20,
							equalTo: '#password'
						},
						memname:
						{
							required: true
						},
						lastname:
						{
							required: true
						},
						gender:
						{
							required: true
						},
						terms:
						{
							required: true
						}
					},
					
					// Messages for form validation
					messages:
					{
						login:
						{
							required: 'Please enter your login'
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						password:
						{
							required: 'Please enter your password'
						},
						passwordConfirm:
						{
							required: 'Please enter your password one more time',
							equalTo: 'Please enter the same password as above'
						},
						memname:
						{
							required: 'Name required'
						},
						nricnew:
						{
							required: 'NRIC No required'
						},
						gender:
						{
							required: 'Please select your gender'
						},
						terms:
						{
							required: 'You must agree with Terms and Conditions'
						}
					},					
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
		</script>
		<script>
		
		$(document).ready(function() {
			var maxField = 5; //Input fields increment limitation
			var addButton = $('.add_button1'); //Add button selector
			var wrapper = $('.field_wrapper1'); //Input field wrapper
			var fieldHTML = '<div class="row"><div class="col-sm-4"><input name="cnricname[]" type="text" class="form-control" placeholder="Name as per NRIC"></div><div class="col-sm-4"><input name="cnricno[]" type="text" class="form-control" placeholder="NRIC NO"></div><div class="col-sm-4"><input name="cdob[]" type="date" class="form-control" placeholder="Date Of Birth"></div><a href="javascript:void(0);" class="remove_button1" title="Remove field" style="float:right;margin: 9px 29px;border: 1px solid #c5c5c5;padding: 5px;background: #f1f1f1;border-radius: 4px;box-shadow: 1px 1px 3px;">Remove<i class="fa fa-remove" style="color:red;font-size:20px;"></i></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function() { //Once add button is clicked
				if (x < maxField) { //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button1', function(e) { //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
		$(document).ready(function() {
			var maxField = 3; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<div class="row"><div class="col-sm-4"><input name="snricname[]" type="text" class="form-control" placeholder="Name as per NRIC"></div><div class="col-sm-4"><input name="snricno[]" type="text" class="form-control" placeholder="NRIC NO"></div><div class="col-sm-4"><input name="sdob[]" type="date" class="form-control" placeholder="Date Of Birth"></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="float:right;margin: 9px 29px;border: 1px solid #c5c5c5;padding: 5px;background: #f1f1f1;border-radius: 4px;box-shadow: 1px 1px 3px;">Remove<i class="fa fa-remove" style="color:red;font-size:20px;"></i></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function() { //Once add button is clicked
				if (x < maxField) { //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button', function(e) { //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});	
			
			
		$(document).ready(function() {	
			
			var maxField = 5; //Input fields increment limitation
			var addButton = $('.add_button2'); //Add button selector
			var wrapper = $('.field_wrapper2'); //Input field wrapper
			var fieldHTML = '<div class="row"><div class="col-sm-4"><input name="dnricname[]" type="text" class="form-control" placeholder="Name as per NRIC"></div><div class="col-sm-4"><input name="dnricno[]" type="text" class="form-control" placeholder="Local Treatment / Doctors Name"></div><div class="col-sm-4"><input name="ddob[]" type="date" class="form-control" placeholder="Date of Treatment Decision"></div><a href="javascript:void(0);" class="remove_button2" title="Remove field" style="float:right;margin: 9px 29px;border: 1px solid #c5c5c5;padding: 5px;background: #f1f1f1;border-radius: 4px;box-shadow: 1px 1px 3px;">Remove<i class="fa fa-remove" style="color:red;font-size:20px;"></i></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function() { //Once add button is clicked
				if (x < maxField) { //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button2', function(e) { //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
	</script>
	</body>
</html>