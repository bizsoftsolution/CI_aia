
  <script>
$( function() {
    $( "#datepicker" ).datepicker();
  } );
	</script>
<div class="wrapper">
	<div class="container-fluid">
		<!-- Page-Title -->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<li class="breadcrumb-item active">Profile</li>
						</ol>
					</div>
					<h4 class="page-title">Profile</h4>
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
						  <strong>Success !!! </strong> Data Updated Successfully
					   </div>
					   <?php } ?>
					</div>
                    <div class="col-12">
					<?php foreach($getdata as $row){?>
						<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>Profile/profileEdit/<?php echo $row->id;?>" method="POST" enctype="multipart/form-data">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title" style="color:#d4003b">Personnal Details</h4>
                                <!--p class="text-muted m-b-30 font-14">Here are examples of <code
                                        class="highlighter-rouge">.form-control</code> applied to each
                                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                            class="highlighter-rouge">type</code>.</p-->
								<p class="text-muted m-b-30 font-14"></p>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="memname" placeholder="Name" class="form-control required" type="text" required="required" value="<?php echo $row->membername;?>" id="example-text-input">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Date of Birth</label>
                                    <div class="col-sm-10">
									<?php
									
									$date3 = str_replace('/', '-', $row->dob);
									$start_range1= date('m/d/Y', strtotime($date3));
									?>
                                        <input type="text" value="<?php echo $start_range1 ;?>" name="dob" class="form-control" id="datepicker">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">NRIC New No</label>
                                    <div class="col-sm-10">
                                        <input name="nricnew" placeholder="NRIC New No" class="form-control required" type="text" required="required" value="<?php echo $row->ic;?>" id="example-text-input">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">NRIC Old No</label>
                                    <div class="col-sm-10">
                                        <input name="nricold" placeholder="NRIC Old No" class="form-control required" type="text"  value="<?php echo $row->ic_old;?>" id="example-text-input">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                       <select class="form-control" name="gender" id="gender">
											<option value="0">Select</option>
											<option value="M" <?php if($row->sex == "M"){ echo "selected"; } ?>>Male</option>
											<option value="F" <?php if($row->sex == "F"){ echo "selected"; } ?>>Female</option>
										</select>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Bank Name</label>
                                    <div class="col-sm-10">
                                        <input name="bankname" placeholder="Enter Bank Name" class="form-control required" type="text"  value="<?php echo $row->bank_name;?>" >
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Bank Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" cols="5" rows="3" name="baddress" id="baddress"><?php echo $row->bank_address;?></textarea>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Occupation</label>
                                    <div class="col-sm-10">
                                        <input name="occupation" placeholder="Enter Occupation" class="form-control required" type="text"  value="<?php echo $row->occupation;?>">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">House Address</label>
                                    <div class="col-sm-10">
                                         <textarea class="form-control" cols="5" rows="3" name="haddress" id="haddress"><?php echo $row->house_address;?></textarea>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">House No</label>
                                    <div class="col-sm-10">
                                        <input name="houseno" placeholder="Enter House No" class="form-control required" type="text"  value="<?php echo $row->house_no;?>">
                                    </div>
                                </div>
							<div class="form-group row">
								<label class="control-label col-md-2"><b>Office No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="hofficeno" placeholder="Enter Office No" class="form-control required" type="text"  value="<?php echo $row->office_no;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>House Phone No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="housephone" placeholder="Enter Phone No" class="form-control required" type="text"  value="<?php echo $row->house_phone;?>">
								   <span class="help-block"></span>
								</div>
							 </div>	
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Company Code</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="companycode" placeholder="Enter Phone No" class="form-control required" type="text"  value="<?php echo $row->companycode;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Company Name</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="companyname" placeholder="Enter Phone No" class="form-control required" type="text"  value="<?php echo $row->companyname;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Email Address</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="hemailaddress" placeholder="Email" class="form-control required" type="email" required="required" value="<?php echo $row->email;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Bank Account No</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="bankaccountno" placeholder="Bank Account No" class="form-control required" type="text" value="<?php echo $row->bank_account_no;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Employee Date</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="employdate" placeholder="Bank Name" class="form-control required" type="text"  value="<?php echo $row->employdate;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
	<!--   ************************ Display all non Editable Column ************************************** -->
							 <h4 class="mt-0 header-title" style="color:#d4003b">Official Details</h4>
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Policy Number</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->policyno;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Member Id</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->mbrno;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Cost Center</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->costcenter;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Staff Id</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->staffid;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>start date</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->Start_Date;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>End Date</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->End_Date;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Coverage</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->coverage;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 
							 <div class="form-group row">
								<label class="control-label col-md-2"><b>Plan Description</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-10">
								   <input name="" placeholder="" class="form-control required" type="text" readonly required="required" value="<?php echo $row->plandesc;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 
							 
							<div class="text-right">
								<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
								<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Update" name="Update_data"> 
							</div>							
                               
								
                            </div>
                        </div>
						</form>
						<?php } ?>
                    </div> <!-- end col -->
                </div> <!-- end row -->
	
	</div>
</div>			