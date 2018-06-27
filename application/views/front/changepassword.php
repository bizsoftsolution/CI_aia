<div class="wrapper">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<li class="breadcrumb-item active">Change Password</li>
						</ol>
					</div>
					<h4 class="page-title">Change Password</h4>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-md-12">
              <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> New Data Created successfully
               </div>
               <?php } ?>
		</div>

				<div class="col-md-12">
		<form name="add" method="POST" action="<?php echo  base_url();?>MemberChangePassword/pwd_update/<?php echo $this->session->userdata('user_id'); ?>" class="form-horizontal form-validate-jquery">
				<div class="card m-b-30">
                            <div class="card-body">
							<!--legend class="text-bold"></legend-->
							<div class="form-group row">
								<label class="control-label col-md-3"><b>New Password</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="new_password" placeholder="New Password" id="password" class="form-control" type="password">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-3"><b>Confirm Password</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="confirm_password" placeholder="Confirm Password" id="confirm_password" class="form-control" type="password">
								  <span id='message'></span>
								</div>
							 </div>

							<div class="text-right">
								<input type="submit" name="submit_change_password" value="Save" class="btn btn-success">
								<input type="reset" value="Reset" class="btn btn-danger">
							</div>
						
						</div>
						
					</div>
				</form>	
			</div>
        </div> <!-- end row -->
	
	</div>
</div>		
			<script>
				var password = document.getElementById("password")
				  , confirm_password = document.getElementById("confirm_password");

				function validatePassword(){
				  if(password.value != confirm_password.value) {
					 confirm_password.setCustomValidity("Passwords Don't Match");
					 $('#message').html('Not Matching').css('color', 'red');
				  } else {
					  confirm_password.setCustomValidity('');
					   $('#message').html('Matching').css('color', 'green');
					
				  }
				}

				password.onchange = validatePassword;
				confirm_password.onkeyup = validatePassword;
				</script>	