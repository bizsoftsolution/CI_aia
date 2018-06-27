
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
		 <?php 
				$uriseg = $this->uri->segment(3);
				$spouserow = $this->db->get_where("tbl_aia_reg_form", array("id"=>$uriseg))->result();
			   foreach($spouserow as $row){?>
				<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>Profile/spouseEdit/<?php echo $row->id;?>" method="POST" enctype="multipart/form-data">
				<div class="card m-b-30">
                            <div class="card-body">
							<!--legend class="text-bold"></legend-->
							<div class="form-group row">
								<label class="control-label col-md-3"><b>Name as per NRIC</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="snricname" placeholder="" class="form-control required" type="text" required="required" value="<?php echo $row->membername;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-3"><b>NRIC NO</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="snricno" placeholder="" class="form-control required" type="text" required="required" value="<?php echo $row->ic;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
									<?php
									
									$date3 = str_replace('/', '-', $row->dob);
									$start_range1= date('m/d/Y', strtotime($date3));
									?>
                                        <input type="text" value="<?php echo $start_range1 ;?>" name="dob" class="form-control" id="datepicker">
                                    </div>
                              </div>
							   <div class="form-group row">
								<label class="control-label col-md-3"><b>Plan</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="" readonly="" placeholder="" class="form-control required" type="text"  value="<?php echo $row->plan;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-3"><b>Plan description</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="" readonly="" placeholder="" class="form-control required" type="text"  value="<?php echo $row->plandesc;?>">
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
			</div>
			<?php } ?>
        </div> <!-- end row -->
	
	</div>
</div>			