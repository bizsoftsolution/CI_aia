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
	<div class="panel panel-flat">
        <div class="panel-heading">
			<div class="col-md-3">
				<h3 class="panel-title">Members List</h3>
			</div>
			<div class="col-md-6">
				<?php
				if($this->session->flashdata('notification')) 
				{
				$message = $this->session->flashdata('notification');
				?>
				<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

				</div>
				<?php
				}
				?>
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
                 <th>Name</th>
                 <th>NRIC NO</th>
                 <th>Bank Name</th>
                 <th style="width:180px;text-align:center">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($membersList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->name;?></td>
              <td><?php echo $row->nricnew;?></td>
			  <?php
				$bname = $this->db->get_where('tbl_bank',array('id'=>$row->bank_name))->row();
			  ?>
              <td><?php echo $bname->bank_short_name.' - '.$bname->branch_name; ?></td>
              <td style="text-align:center">
              <a href="<?php echo base_url(); ?>Members/View/<?php echo $row->id;?>" title="View" class="btn bg-primary" ><i class="glyphicon glyphicon-eye-open"></i>
              </a>
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
