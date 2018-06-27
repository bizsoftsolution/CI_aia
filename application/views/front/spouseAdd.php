
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
							<li class="breadcrumb-item active">Spouse</li>
						</ol>
					</div>
					<h4 class="page-title">Spouse Details</h4>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-md-12">
               
		</div>
		
		<div class="col-md-12">
			<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>Profile/addSpouce" method="POST" enctype="multipart/form-data">
				<div class="card m-b-30">
                            <div class="card-body">
							<!--legend class="text-bold"></legend-->
							<div class="form-group row">
								<label class="control-label col-md-3"><b>Name as per NRIC</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="snricname" placeholder="" class="form-control required" type="text" required="required" value="">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-3"><b>NRIC NO</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="snricno" placeholder="" class="form-control required" type="text" required="required" value="">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="col-sm-3 col-form-label">Gender</label>
								<div class="col-sm-9">
								   <select class="form-control" name="gender" id="gender">
										<option value="0">Select</option>
										<option value="M" >Male</option>
										<option value="F" >Female</option>
									</select>
								</div>
							</div>
							 <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
									
                                        <input type="text" value="" name="dob" class="form-control" id="datepicker">
                                    </div>
                              </div>
							  <?php
							 $uriseg = $this->uri->segment(3);
							 ?>
							 <input type="hidden" name="id" value="<?php echo $uriseg; ?>"/>
							 
							<div class="text-right">
								<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
								<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Update" name="add_data"> 
							</div>
						
						</div>
						
					</div>
				</form>	
			</div>
			
        </div> <!-- end row -->
	
	</div>
</div>			