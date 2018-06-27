<div class="wrapper">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<li class="breadcrumb-item active">Declaration</li>
						</ol>
					</div>
					<h4 class="page-title">Declaration Details</h4>
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
				$declarationrow = $this->db->get_where("tbl_declaration_details", array("id"=>$uriseg))->result();
			   foreach($declarationrow as $row){?>
				<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>Profile/declarationEdit/<?php echo $row->id;?>" method="POST" enctype="multipart/form-data">
				<div class="card m-b-30">
                            <div class="card-body">
							<!--legend class="text-bold"></legend-->
							<div class="form-group row">
								<label class="control-label col-md-3"><b>Name as per NRIC</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="dnricname" placeholder="" class="form-control required" type="text" required="required" value="<?php echo $row->name;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-3"><b>Local Treatment / Doctor's Name</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="dnricno" placeholder="" class="form-control required" type="text" required="required" value="<?php echo $row->localtreatment_doctorname;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group row">
								<label class="control-label col-md-3"><b>Date of Treatment Decision</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="ddob" placeholder="" class="form-control required" type="date" required="required" value="<?php echo $row->dateoftreatment_decision;?>">
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