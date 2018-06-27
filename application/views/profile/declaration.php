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
					<li ><a href="<?php echo base_url(); ?>Profile" >Personnal Details</a></li>
					<li ><a href="<?php echo base_url(); ?>Profile/spouse" >Spouse Details</a></li>
					<li ><a href="<?php echo base_url(); ?>Profile/children" >Children Details</a></li>
					<li class="active"><a href="<?php echo base_url(); ?>Profile/declaration" >Declaration Details</a></li>
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
				<div class="panel panel-flat">
					<div class="panel-heading" style="    background-color: #d4003b;
    color: #fff;    padding: 10px;
    font-size: 16px;"><b>Declaration Details</b></div>  
					<div class="panel-body">
						<fieldset class="content-group">
							<legend class="text-bold"></legend>
						</fieldset>
						<div class="table-responsive">
							<table class="table table-borded">
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Local Treatment / Doctor's Name</th>
									<th>Date of Treatment Decision</th>
									<th>Action</th>
								</tr>
								<?php 
									$declaration_get = $this->db->get_where("tbl_declaration_details", array("aia_id"=>$row->id))->result();
									$d=1;
									foreach($declaration_get as $res_declaration)
									{
								?>
									<tr>
										<td><?php echo $d; ?></td>
										<td><?php echo $res_declaration->name;?></td>
										<td><?php echo $res_declaration->localtreatment_doctorname;?></td>
										<td><?php echo $res_declaration->dateoftreatment_decision;?></td>
										<td>
										<a href="<?php echo base_url(); ?>Profile/declarationEdit/<?php echo $res_declaration->id;?>" title="View" class="btn bg-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
										</td>
									</tr>
								<?php 
									$d++;
									}
								?>
							</table>
						</div>

						
					</div>
				</div>
			</div>
			<?php 
			   }
			?>
					
				</div>
			</div>
		</div>

      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   