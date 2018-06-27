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
		 <?php foreach($getdata as $row){?>
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<div class="table-rep-plugin">
							<div class="table-responsive b-0" data-pattern="priority-columns">
								<table id="tech-companies-1" class="table  table-striped">
									<thead>
									<tr>
										<th>#</th>
										<th data-priority="1">Name</th>
										<th data-priority="3">Local Treatment / Doctor's Name</th>
										<th data-priority="6">Date of Treatment Decision</th>
										<th data-priority="1">Action</th>
										
									</tr>
									</thead>
									<tbody>
									<?php 
									$declaration_get = $this->db->get_where("tbl_declaration_details", array("aia_id"=>$row->id))->result();
									$d=1;
									foreach($declaration_get as $res_declaration)
									{
								?>
										<tr>
											<th><?php echo $d; ?></th>
											<td><?php echo $res_declaration->name;?></td>
											<td><?php echo $res_declaration->localtreatment_doctorname;?></td>
											<td><?php echo $res_declaration->dateoftreatment_decision;?></td>
											<td><a href="<?php echo base_url(); ?>Profile/declarationEdit/<?php echo $res_declaration->id;?>" title="View" class="btn bg-primary"><i class="ti-eye" style="color:#fff"></i></a></td>
											
										</tr>
									<?php 
									$d++;
									}
								?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
			   }
			?>
        </div> <!-- end row -->
	
	</div>
</div>			