<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Profile</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            
			<div class="col-md-6">
				<h3 class="panel-title">Profile Details
			</h3>
			</div>
			<div class="col-md-6">
				<!--div style="text-align:right;">
				   <a href="<?php echo  base_url();?>Product" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
				</div-->
			</div>
         </div>
		 <br>
		<div class="panel-body">
			<div class="tabbable">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="active"><a href="<?php echo base_url(); ?>Profile" >Personnal Details</a></li>
					<li><a href="<?php echo base_url(); ?>Profile/spouse" >Spouse Details</a></li>
					<li ><a href="<?php echo base_url(); ?>Profile/children" >Children Details</a></li>
					<li ><a href="<?php echo base_url(); ?>Profile/declaration" >Declaration Details</a></li>
				</ul>
				<div class="tab-content">
					<div class="active">
						<div class="col-md-12">
               <br>
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> Profile Updated Successfully
               </div>
               <?php } ?>
			   </div>
               <?php foreach($getdata as $row){?>
				<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>Profile/profileEdit/<?php echo $row->id;?>" method="POST" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="panel panel-flat">
					<div class="panel-heading" style="    background-color: #d4003b;
    color: #fff;    padding: 10px;
    font-size: 16px;"><b>Personnal Details</b></div>
					<div class="panel-body">
						<fieldset class="content-group">
							<legend class="text-bold"></legend>
							<div class="form-group">
								<label class="control-label col-md-3"><b>Name</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="memname" placeholder="Name" class="form-control required" type="text" required="required" value="<?php echo $row->name;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Date of Birth</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
									<input type="dob" value="<?php echo $row->dob;?>" name="dob" class="form-control">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>NRIC New No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="nricnew" placeholder="NRIC New No" class="form-control required" type="text" required="required" value="<?php echo $row->nricnew;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>NRIC Old No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="nricold" placeholder="NRIC Old No" class="form-control required" type="text" required="required" value="<?php echo $row->nricold;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Gender</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
									<select class="form-control" name="gender" id="gender">
										<option value="0">Select</option>
										<option value="Male" <?php if($row->gender == "Male"){ echo "selected"; } ?>>Male</option>
										<option value="Female" <?php if($row->gender == "Female"){ echo "selected"; } ?>>Female</option>
									</select>
								   <span class="help-block"></span>
								</div>
							 </div>
							<div class="form-group">
								<label class="control-label col-md-3"><b>Bank Name</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="bankname" placeholder="Enter Bank Name" class="form-control required" type="text" required="required" value="<?php echo $row->bank_name;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Bank Address</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								  <textarea class="form-control" cols="5" rows="5" name="baddress" id="baddress"><?php echo $row->bank_address;?></textarea>
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Occupation</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="occupation" placeholder="Enter Occupation" class="form-control required" type="text" required="required" value="<?php echo $row->occupation;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>House Address</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								  <textarea class="form-control" cols="5" rows="5" name="haddress" id="haddress"><?php echo $row->house_address;?></textarea>
								   <span class="help-block"></span>
								</div>
							 </div>
							  <div class="form-group">
								<label class="control-label col-md-3"><b>House No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="houseno" placeholder="Enter House No" class="form-control required" type="text" required="required" value="<?php echo $row->house_no;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Office No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="hofficeno" placeholder="Enter Office No" class="form-control required" type="text" required="required" value="<?php echo $row->office_pno;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>House Phone No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="housephone" placeholder="Enter Phone No" class="form-control required" type="text" required="required" value="<?php echo $row->house_pno;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Email Address</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="hemailaddress" placeholder="Email" class="form-control required" type="email" required="required" value="<?php echo $row->hemailid;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Bank Account No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="bankaccountno" placeholder="Bank Account No" class="form-control required" type="text" required="required" value="<?php echo $row->bank_acc_no;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Bank Name</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="bankaccountname" placeholder="Bank Name" class="form-control required" type="text" required="required" value="<?php echo $row->hbank_name;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <style>
								.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline
								{
									padding-top: 0px;
								}
								#cke_1_contents
								{
									    height: 100%!important;
								}
							 </style>
							
							<div class="text-right">
								<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
								<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Update" name="Update_data"> 
							</div>
			
						</fieldset>
					</div>
				</div>
			</div>
		</form>		
		</div>
		
			 <?php } ?>		
				</div>
			</div>
		</div>

      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   