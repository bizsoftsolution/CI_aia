<div class="wrapper">
	<div class="container-fluid">
	 
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group pull-right">
					<a href="<?php echo base_url().'Profile/addChildren/'.$id;?>" class="btn btn-danger"><b><i class="ti-plus"></i>&nbsp;&nbsp; Add Children</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<li class="breadcrumb-item active">Children</li>
						</ol>
					</div>
					<h4 class="page-title">Children Details</h4>
				</div>
			</div>
		</div>
		<div class="row">
		
		
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<div class="table-rep-plugin">
							<div class="table-responsive b-0" data-pattern="priority-columns">
								<table id="tech-companies-1" class="table  table-striped">
									<thead>
									<tr>
										<th data-priority="1">Name</th>
										<th data-priority="3">NRIC NO</th>
										<th data-priority="6">Date of Birth</th>
										<th data-priority="1">Action</th>
										
									</tr>
									</thead>
									<tbody>
									<?php
									$fetch_master = $this->db->get_where('tbl_aia_reg_form', array("id"=>$this->session->userdata('user_id')))->row();
			
									$fetch_spouse = $this->db->get_where('tbl_aia_reg_form', array('masteric'=>$fetch_master->ic,'rel'=>'C'))->result();
									
									foreach($fetch_spouse as $row)
									{
									?>
									<tr>
										<td><?php echo $row->membername;?></td>
										<td><?php echo $row->ic;?></td>
										<td><?php echo $row->dob;?></td>
										<td><a href="<?php echo base_url(); ?>Profile/childrenEdit/<?php echo $row->id;?>" title="View" class="btn bg-primary"><i class="ti-pencil" style="color:#fff"></i></a></td>
											
										</tr>
									<?php
									}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div> <!-- end row -->
	</div>
	
</div>			