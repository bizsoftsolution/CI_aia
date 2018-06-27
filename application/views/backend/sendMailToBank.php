
<!-- /dashboard content -->
<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Members</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
	<form action="<?php echo base_url(); ?>Members/sendMailToBank" method="POST">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h3 class="panel-title">Mail Content</h3>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="subject"><b>Subject</b></label>  
					<div class="col-md-9">
						<input id="subject" name="subject" type="text" placeholder="Enter the Subject" class="form-control input-md" required="">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label" for="bodyContent"><b>Body of the Mail</b></label>
					<div class="col-md-9">                     
						<textarea class="form-control" id="bodyContent" name="bodyContent"></textarea>
					</div>
				</div>
			</div>
		</div>
		
		<div class="panel panel-flat">
			<div class="panel-heading">
				<div class="col-md-3">
					<h3 class="panel-title">Members List</h3>
				</div>
				<div class="col-md-6">
					
				</div>
				<div class="col-md-3">
					<!--div style="text-align:right;">
						<a class="btn bg-purple" href="<?php echo  base_url();?>Members/Add"><i class="glyphicon glyphicon-plus"></i> Add </a>
				   </div-->
				</div>
			</div>
			
			 <table class="table datatable-button-print-columns">
				<thead>
				   <tr>
					 <th>Action</th>
					 <th>Sno</th>
					 <th>Name</th>
					 <th>NRIC NO</th>
					 <th>Bank Name</th>
				   </tr>
				</thead>
				<tbody>
				<?php
				$i=1;
				$mList = $this->db->get_where('tbl_aia_details',array('status'=>'APPROVED'))->result();
				  foreach($mList as $row)
				  {
				?>
					<tr>
						<td><input type="checkbox" class="styled" name="selectArray[]" value="<?php echo $row->id; ?>"></td>
						<td><?php echo $i; ?></td>
						<td><?php echo $row->name;?></td>
						<td><?php echo $row->nricnew;?></td>
						<?php
						$bname = $this->db->get_where('tbl_bank',array('id'=>$row->bank_name))->row();
						?>
						<td><?php echo $bname->bank_short_name.' - '.$bname->branch_name; ?></td>
					</tr>
				  <?php $i++;
				  }
				  ?>


				</tbody>
			 </table>
			 <div class="row">
				 <div class="col-md-4"></div>
				 <div class="col-md-4">
					<input type="submit" name="update_status" class="btn btn-success" value="Send Mail to Bank"/>
				</div>
				<div class="col-md-4"></div>
			</div>
			
		</div>
		  <!-- /traffic sources -->
   
   </form>
   
   </div>
</div>
<!-- /dashboard content -->
