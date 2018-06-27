<!-- Main sidebar -->
<div class="sidebar sidebar-main">
   <div class="sidebar-content">
      <!-- User menu -->
	  <?php 
		if($this->session->userdata('user_type') == 'ADMIN')
		{
	?>
      <div class="sidebar-user-material">
         <div class="category-content">
            <div class="sidebar-user-material-content">
               <?php if($this->session->userdata('photo')!=null)
                  {?>
               <a href="#"><img src="<?php echo base_url('upload/'.$this->session->userdata('photo'));?>" class="img-circle img-responsive" alt=""></a>
               <?php    }
                  else {?>
               <a href="#"><img src="<?php echo base_url('assets/image001.gif');?>" class="img-circle img-responsive" alt="" style="width:50px;height:50px;"></a>
               <?php        }
                  ?>
               <!--h6><?php echo $this->session->userdata('first_name');?></h6-->
            </div>
            <div class="sidebar-user-material-menu">
               <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
            </div>
         </div>
         <div class="navigation-wrapper collapse" id="user-nav">
            <ul class="navigation">
               
               <li><a href="<?php echo base_url('changePassword');?>"><i class="icon-lock"></i> <span>Change Password</span></a></li>
               
               <li><a href="<?php echo base_url(); ?>/User/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
            </ul>
         </div>
      </div>
      <!-- /user menu -->
      <!-- Main navigation -->
      <div class="sidebar-category sidebar-category-visible">
         <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">
               <!-- Main -->
               <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
               <li class="active"><a href="<?php echo base_url('Dashboard');?>"><i class="icon-home7"></i> <span>Dashboard</span></a></li>
               <!-- /page kits -->
               <?php //if($this->session->userdata('user_type')=='SUPERADMIN')
                  //  {
                  ?>
				  <?php
					$this->db->select('*');
					$this->db->from('tbl_aia_details');
					$this->db->where('status','PENDING');
					$query = $this->db->get();
					$assignJob= $query->num_rows();
			  ?>
				<li >
					<a href="<?php echo base_url('Members');?>">
						<i class="icon-users4"></i> 
						<span>New Members</span><?php 	if($assignJob != 0) 
					{
					?>
						<span class="badge badge-danger">
							<?php echo $assignJob;?>
						</span><?php 
					} 
					?>
					</a>
			
				</li>
				<?php
					$this->db->select('*');
					$this->db->from('tbl_aia_reg_form');
					$this->db->where('status','NEW');
					$this->db->where('rel','S');
					$query1 = $this->db->get();
					$assignJob1= $query1->num_rows();
			  ?>
               <li ><a href="<?php echo base_url('Members/spouse');?>"><i class="icon-people"></i> <span>Spouse List</span><?php 	if($assignJob1 != 0) 
					{
					?>
						<span class="badge badge-danger">
							<?php echo $assignJob1;?>
						</span><?php 
					} 
					?></a>
			   
			   </li>
			   <?php
					$this->db->select('*');
					$this->db->from('tbl_aia_reg_form');
					$this->db->where('status','NEW');
					$this->db->where('rel','C');
					$query2 = $this->db->get();
					$assignJob2= $query2->num_rows();
			  ?>
               <li ><a href="<?php echo base_url('Members/children');?>"><i class="icon-collaboration"></i> <span>Children List</span><?php 	if($assignJob2 != 0) 
					{
					?>
						<span class="badge badge-danger">
							<?php echo $assignJob2;?>
						</span><?php 
					} 
					?></a>
			   
			   </li>
			   <?php
					$this->db->select('*');
					$this->db->from('tbl_aia_details');
					$this->db->where('status','APPROVED');
					$query3 = $this->db->get();
					$assignJob3= $query3->num_rows();
			  ?>
               <li > <a href="<?php echo base_url('Members/sendMailToBank');?>"><i class="icon-mailbox"></i> <span>Send to Bank</span> <?php 	if($assignJob3 != 0) 
					{
					?>
						<span class="badge badge-danger">
							<?php echo $assignJob3;?>
						</span><?php 
					} 
					?></a>
			 
			   </li>
			   <?php
					$this->db->select('*');
					$this->db->from('tbl_aia_details');
					$this->db->where('status','MAILED');
					$query4 = $this->db->get();
					$assignJob4= $query4->num_rows();
			  ?>
               <li > <a href="<?php echo base_url('Members/sendToBank');?>"><i class="icon-clipboard5"></i> <span>Approve</span><?php 	if($assignJob4 != 0) 
					{
					?>
						<span class="badge badge-danger">
							<?php echo $assignJob4;?>
						</span><?php 
					} 
					?></a>
			  
			   </li>
               <!--li>
                  <a href="#" class="has-ul legitRipple"><i class="icon-stack2"></i> <span>Master </span></a>
                  <ul class="hidden-ul">
                     <li><a href="<?php echo base_url('country/countryList');?>" class="legitRipple">test2</a></li>
                     <li><a href="<?php echo base_url('island/islandList');?>" class="legitRipple">test3</a></li>
                  </ul>
               </li-->
               <?php
                  //  }
                  ?>
            </ul>
         </div>
      </div>
	  <?php 
		}
		elseif($this->session->userdata('user_type') == 'MEMBER')
		{
	?>
		<div class="sidebar-user-material">
			 <div class="category-content">
				<div class="sidebar-user-material-content">
				   <?php if($this->session->userdata('photo')!=null)
					  {?>
				   <a href="#"><img src="<?php echo base_url('upload/'.$this->session->userdata('photo'));?>" class="img-circle img-responsive" alt=""></a>
				   <?php    }
					  else {?>
				   <a href="#"><img src="<?php echo base_url('assets/image001.gif');?>" class="img-circle img-responsive" alt="" style="width:50px;height:50px;"></a>
				   <?php        }
					  ?>
				   <!--h6><?php echo $this->session->userdata('first_name');?></h6-->
				</div>
				<div class="sidebar-user-material-menu">
				   <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
				</div>
			 </div>
			 <div class="navigation-wrapper collapse" id="user-nav">
				<ul class="navigation">
				   
				   <li><a href="<?php echo base_url('changePassword');?>"><i class="icon-lock"></i> <span>Change Password</span></a></li>
				   
				   <li><a href="<?php echo base_url(); ?>/User/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
				</ul>
			 </div>
		</div>
      <!-- /user menu -->
      <!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			 <div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">
				   <!-- Main -->
				   <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
				   <li class="active"><a href="<?php echo base_url('Dashboard');?>"><i class="icon-home7"></i> <span>Dashboard</span></a></li>
				   <!-- /page kits -->
				   <li ><a href="<?php echo base_url('Profile');?>"><i class="icon-people"></i> <span>Profile</span></a></li>
				</ul>
			 </div>
		</div>
	<?php
		}
	  ?>
	  
	  
      <!-- /main navigation -->
   </div>
</div>
<!-- /main sidebar -->