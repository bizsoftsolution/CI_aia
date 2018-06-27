			<div class="content-wrapper">
			<?php 
				foreach($View as $row)
				{
			?>
				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">AIA</span> - <?php echo $row->name; ?> Details</h4>
						<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

					</div>

					<div class="breadcrumb-line"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
						<ul class="breadcrumb">
							<li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Member Details</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<form action="<?php echo base_url(); ?>Members/update_existing/<?php echo $row->id; ?>" method="POST">

					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8 col-md-8">

							<!-- Marketing campaigns -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title"><b>Member Details</b><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
								
								</div>
								<div class="panel-body">
									<table class="table table-xlg">
										<tbody>
											<tr>
												<td><b>Name :</b></td>
												<td><?php echo $row->name; ?></td>
												<td><b>Date of Birth :</b></td>
												<td><?php echo date("d/m/Y", strtotime($row->dob)); ?></td>
											</tr>
											<tr>
												<td><b>NRIC New :</b></td>
												<td><?php echo $row->nricnew; ?></td>
												<td><b>NRIC Old :</b></td>
												<td><?php echo $row->nricold; ?></td>
											</tr>
											<tr>
												<td><b>Gender :</b></td>
												<td><?php echo $row->gender; ?></td>
												<td><b>Occupation :</b></td>
												<td><?php echo $row->occupation; ?></td>
											</tr>
											<tr>
											<?php 
												$bank_name = $this->db->get_where('tbl_bank',array('id'=>$row->bank_name))->row();
											?>
												<td><b>Bank Name :</b></td>
												<td colspan="3"><?php echo $bank_name->bank_short_name." - ".$bank_name->branch_name; ?></td>
												
											</tr>
											<tr>
												<td><b>House Address :</b></td>
												<td><?php echo $row->house_address; ?></td>
												<td><b>House No :</b></td>
												<td><?php echo $row->house_no; ?></td>
											</tr>
											<tr>
												<td><b>Office Phone  :</b></td>
												<td><?php echo $row->office_pno; ?></td>
												<td><b>House Phone :</b></td>
												<td><?php echo $row->house_pno; ?></td>
											</tr>
											<tr>
												<td><b> Email ID :</b></td>
												<td><?php echo $row->hemailid; ?></td>
												<td><b> Account No :</b></td>
												<td><?php echo $row->bank_acc_no; ?> - (<?php echo $row->hbank_name; ?>)</td>
												
											</tr>
										</tbody>
									</table>
								</div>							
							</div>
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Mail Details<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									
								</div>


								<div class="table-responsive">
									<div class="panel-body">
									<?php
										if($row->file1 != "")
										{
									?>
										<iframe src="http://docs.google.com/gview?url=<?php echo base_url(); ?>upload/<?php echo $row->file1;?>&amp;embedded=true" style="width:100%;height:250px;"></iframe>
										<?php
										}
										?>
										<?php
										if($row->file2 != "")
										{
									?>
										<iframe src="http://docs.google.com/gview?url=<?php echo base_url(); ?>upload/<?php echo $row->file2;?>&amp;embedded=true" style="width:100%;height:250px;"></iframe>
										<?php
										}
										?>
										<?php
										if($row->file3 != "")
										{
									?>
										<iframe src="http://docs.google.com/gview?url=<?php echo base_url(); ?>upload/<?php echo $row->file3;?>&amp;embedded=true" style="width:100%;height:250px;"></iframe>
										<?php
										}
										?>
										<?php
										if($row->file4 != "")
										{
									?>
										<iframe src="http://docs.google.com/gview?url=<?php echo base_url(); ?>upload/<?php echo $row->file4;?>&amp;embedded=true" style="width:100%;height:250px;"></iframe>
										<?php
										}
										?>
										<br>
										<br>
										<br>
										<div class="form-group">
											<label class="control-label col-lg-4"><b>Amount to be Paid</b></label>
											<div class="col-lg-8">
												<input type="number" required class="form-control" name="amount_paid" Placeholder="0.00">
											</div>
										</div>
										<br>
										<br>
										<input type="submit" value="Approve" class="btn btn-success col-md-12" name="update_status">
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-4">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Spouse Details<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									
								</div>


								<div class="table-responsive">
									<div class="panel-body">
									<?php
										$spouse = $this->db->get_where('tbl_spouse_details',array('aia_id'=>$row->id))->row();
									?>
										<table class="table table-xlg">
											<tbody>
												<tr>
													<td><b>Name</b></td>
													<td><?php if($spouse->spouse_name != "") { echo $spouse->spouse_name; } else{ echo "-"; }?></td>
												</tr>
												<tr>
													<td><b>Ic</b></td>
													<td><?php if($spouse->spouse_nricno != ""){ echo $spouse->spouse_nricno; }else{ echo "-"; } ?></td>
												</tr>
												<tr>
													<td><b>Dob</b></td>
													<td><?php if($spouse->spouse_dob != "0000-00-00") { echo $spouse->spouse_dob; }else { echo "-"; } ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Children Details<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									
								</div>


								<div class="table-responsive">
									<div class="panel-body">
										<?php
										$children = $this->db->get_where('tbl_children_details',array('aia_id'=>$row->id))->result();
										$i = 1;
										foreach($children as $child)
										{
										?>
										<table class="table table-xlg">
											<tbody>
												<tr>
													<td><b>Child <?php echo $i; ?></b></td>
													<td><?php if($child->children_name != ""){ echo $child->children_name; }else{ echo "-"; }?></td>
												</tr>
												<tr>
													<td><b>Ic</b></td>
													<td><?php if($child->children_nricno != "") { echo $child->children_nricno; } else { echo "-"; } ?></td>
												</tr>
												<tr>
													<td><b>Dob</b></td>
													<td><?php  if($child->children_dob != "0000-00-00") { echo $child->children_dob; }else { echo "-"; }  ?></td>
												</tr>
											</tbody>
										</table>
										<?php
										$i++;
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</form>
				</div>
			<?php
				}
				?>
			</div>