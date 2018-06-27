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
      <li class="active">Children</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
	<div class="panel panel-flat">
        <div class="panel-heading">
			<div class="col-md-3">
				<h3 class="panel-title">Children List</h3>
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

                 <th>Sno</th>
                 <th>Master IC</th>
                 <th>Master Name</th>
                 <th>Name</th>
                 <th>NRIC NO</th>
                
                 <th style="width:180px;text-align:center">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
			
			$fetch_spouse = $this->db->get_where('tbl_aia_reg_form', array('status'=>'NEW','rel'=>'C'))->result();
            $i=1;
              foreach($fetch_spouse as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->masteric;?></td>
              <td><?php echo $row->mastername;?></td>
              <td><?php echo $row->membername;?></td>
              <td><?php echo $row->ic;?></td>
              
              <td style="text-align:center">
               <a href="<?php echo base_url(); ?>Members/approveChildren/<?php echo $row->id;?>"  title="Disable" class="btn bg-danger remove" onclick="return confirm('Are You Sure want to Approve');"><!--i class="glyphicon glyphicon-remove "></i-->Approve</a>
              
              </td>
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
    </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
