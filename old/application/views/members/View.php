<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Member</li>
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
				<h3 class="panel-title">Member
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>Achivement" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
			</div>
         </div>
		 <br>
		 <br>
         <div class="container-fluid">
            <!-- content Starts Here-->
			<div class="col-md-12">
			<?php 
				foreach($View as $row)
				{
			?>
			<form action="<?php echo base_url(); ?>Members/update/<?php echo $row->id; ?>" method="POST">
				<div class="table-responsive">
							<table class="table">
								
								<tbody>
									<tr>
										<td>Name</td>
										<td><?php echo $row->name; ?></td>
									</tr>
									<tr>
										<td>Date of Birth</td>
										<td><?php echo date("d/m/Y", strtotime($row->dob)); ?></td>
									</tr>
									<tr>
										<td>NRIC New </td>
										<td><?php echo $row->nricnew; ?></td>
									</tr>
									<tr>
										<td>NRIC Old </td>
										<td><?php echo $row->nricold; ?></td>
									</tr>
									<tr>
										<td>Gender</td>
										<td><?php echo $row->gender; ?></td>
									</tr>
									<tr>
										<td>Bank Name</td>
										<td><?php echo $row->bank_name; ?></td>
									</tr>
									<tr>
										<td>Bank Address</td>
										<td><?php echo $row->bank_address; ?></td>
									</tr>
									<tr>
										<td>Occupation</td>
										<td><?php echo $row->occupation; ?></td>
									</tr>
									<tr>
										<td>House Address</td>
										<td><?php echo $row->house_address; ?></td>
									</tr>
									<tr>
										<td>House NO</td>
										<td><?php echo $row->house_no; ?></td>
									</tr>
									<tr>
										<td>Office Phone Number</td>
										<td><?php echo $row->office_pno; ?></td>
									</tr>
									<tr>
										<td>House Phone Number</td>
										<td><?php echo $row->house_pno; ?></td>
									</tr>
									<tr>
										<td>House Email ID </td>
										<td><?php echo $row->hemailid; ?></td>
									</tr>
									<tr>
										<td>Bank Account No</td>
										<td><?php echo $row->bank_acc_no; ?></td>
									</tr>
									<tr>
										<td>Bank Name </td>
										<td><?php echo $row->hbank_name; ?></td>
									</tr>
									<tr>
										<td>Status</td>
										<td><select class="form-control" name="status">
											<option label="select status"></option>
											<option value="APPROVED">Approved</option>
											<option value="PENDING">Pending</option>
										</select></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" value="UPDATE" class="btn btn-success" name="update_status"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>

			<?php 
				}
			?>
			</div>
			</div>

         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
