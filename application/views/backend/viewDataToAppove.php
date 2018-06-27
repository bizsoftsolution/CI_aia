			<div class="content-wrapper">
			<?php 
			//echo $id;
			$View = $this->db->get_where('tbl_aia_details',array('id'=>$id))->result();
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
					<form action="<?php echo base_url(); ?>Members/approvedFromBank/<?php echo $row->id; ?>" method="POST">

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
										<table class="table">
											<tbody>
												
												<tr>
													<td>Policy No</td>
													<td><input type="text" class="form-control" name="policyno"/></td>
												</tr>
												<tr>
													<td>Member</td>
													<td><input type="number" class="form-control" name="member"/></td>
												</tr>
												<tr>
													<td>Mbr No</td>
													<td><input type="text" class="form-control" name="mbrno"/></td>
												</tr>
												<tr>
													<td>Company Code</td>
													<td><input type="text" class="form-control" name="companycode"/></td>
												</tr>
												<tr>
													<td>Company Name</td>
													<td><input type="text" class="form-control" name="companyname"/></td>
												</tr>
												<tr>
													<td>Cost Center</td>
													<td><input type="text" class="form-control" name="costcenter"/></td>
												</tr>
												<tr>
													<td>Staff Id</td>
													<td><input type="test" class="form-control" name="staffid"/></td>
												</tr>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
												<script>
												$(document).ready(function(){
													$("#date1").blur(function(){
														//var d = $('#date1').val();
														var d = new Date(Date.parse($(this).val()));
													 //var d = new Date(date),
														month = '' + (d.getMonth() + 1),
														day = '' + (d.getDate() - 1),
														year = (d.getFullYear() + 1);

													if (month.length < 2) month = '0' + month;
													if (day.length < 2) day = '0' + day;

													var d  = [month,day,year].join('/');
														$('#date2').val(d);
													});
												});
												</script>
												<tr>
													<td>Start Date</td>
													<td><input type="date" class="form-control" name="Start_Date" id="date1"/></td>
												</tr>
												<tr>
													<td>End Date</td>
													<td><input type="text" class="form-control"  name="End_Date" id="date2"  readonly=""/></td>
												</tr>
												<tr>
													<td>Coverage</td>
													<td><input type="text" class="form-control" name="coverage"/></td>
												</tr>
												<tr>
													<td>Plan</td>
													<td><input type="text" class="form-control" name="plan"/></td>
												</tr>
												<tr>
													<td>Plan Description</td>
													<td><input type="text" class="form-control" name="plandesc"/></td>
												</tr>
												
											
												<tr>
													<td>Status</td>
													<td><select class="form-control" name="status">
														<option label="select status"></option>
														<option value="APPROVED">Approved</option>
														
													</select></td>
												</tr>
												<tr>
													<td></td>
													<td><input type="submit" value="SEND MAIL TO BANK" class="btn btn-success" name="update_status"></td>
												</tr>
											</tbody>
										</table>
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
													<td><?php echo $spouse->spouse_name; ?></td>
												</tr>
												<tr>
													<td><b>Ic</b></td>
													<td><?php echo $spouse->spouse_nricno; ?></td>
												</tr>
												<tr>
													<td><b>Dob</b></td>
													<td><?php echo $spouse->spouse_dob; ?></td>
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
													<td><?php echo $child->children_name; ?></td>
												</tr>
												<tr>
													<td><b>Ic</b></td>
													<td><?php echo $child->children_nricno; ?></td>
												</tr>
												<tr>
													<td><b>Dob</b></td>
													<td><?php echo $child->children_dob; ?></td>
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