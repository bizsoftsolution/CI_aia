<?php
class Profile extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('ProfileModel');
    $this->load->helper('url');
	$this->load->library('session');
	/* if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	} */
  }
 //*****************************************************************************************************************************													           ADD POST *****************************************************************************************************************************//
	
  function index()
  {
	  $data = array('message'=>'');
	  $data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('front/header');
      $this->load->view('front/profile', $data);
      $this->load->view('front/footer'); 
  }
  function spouse()
  {
	  $data = array('message'=>'');
	  //$data['getdata']=$this->ProfileModel->spouseList();
	  $data['id'] = $this->session->userdata('user_id');
      $this->load->view('front/header');
      $this->load->view('front/spouse', $data);
      $this->load->view('front/footer'); 
  }
  function children()
  {
	  $data = array('message'=>'');
	   $data['id'] = $this->session->userdata('user_id');
      $this->load->view('front/header');
      $this->load->view('front/children', $data);
      $this->load->view('front/footer'); 
  } 
  function declaration()
  {
	  $data = array('message'=>'');
	  $data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('front/header');
      $this->load->view('front/declaration', $data);
      $this->load->view('front/footer'); 
  }
	function addSpouce()
	{
		if($this->input->post('add_data'))
		{
			$master_id = $this->input->post('id');
			
			$fetch_master = $this->db->get_where('tbl_aia_reg_form', array("id"=>$master_id))->row();
			$dnricname = $this->input->post('snricname');
			$dnricno = $this->input->post('snricno');
			$ddob = $this->input->post('sdob');
			$dob = date('d/m/Y',strtotime($this->input->post('dob'))); 
			$data = array(
				'policyno' => $fetch_master->policyno,
				'mbrno' => $fetch_master->mbrno,
				'membername' => $dnricname,		
				'ic' => $dnricno,
				'rel' => 'S',
				'sex' => $this->input->post('gender'),
				'companycode' => $fetch_master->companycode,
				'companyname' => $fetch_master->companyname,
				'costcenter' => $fetch_master->costcenter,
				'dob' => $dob,
				'staffid' => $fetch_master->staffid,
				'mastermember' => $fetch_master->mastermember,
				'mastername' => $fetch_master->mastername,
				'masteric' => $fetch_master->masteric,
				'Start_Date' =>$fetch_master->Start_Date,
				'End_Date' => $fetch_master->End_Date,
				'coverage' => $fetch_master->coverage,
				'status' => 'NEW'
			);
			 if($this->db->insert('tbl_aia_reg_form',$data))
			 {
				
				redirect('Profile/spouse');
				
			 }
		
		}		  
			$this->load->view('front/header');
			$this->load->view('front/spouseAdd');
			$this->load->view('front/footer'); 
		
	}
   function spouseEdit($id)
  {
	$data = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$dnricname = $this->input->post('snricname');
		$dnricno = $this->input->post('snricno');
		$ddob = $this->input->post('sdob');
		$dob = date('d/m/Y',strtotime($this->input->post('dob'))); 
		
  		$data = array(
			'membername' => $dnricname,						
			'ic' => $dnricno,						
			'dob' => $dob
  		);
			$result['message'] = $this->ProfileModel->spouseEdit($data,$id);
		  if($result['message'] == 'SUCCESS')
		  {
			$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Profile");
		  }
    }
	  //$data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('front/header');
      $this->load->view('front/spouseEdit',$data);
      $this->load->view('front/footer'); 
  }
	function addChildren()
	{
		if($this->input->post('add_data'))
		{
			$master_id = $this->input->post('id');
			
			$fetch_master = $this->db->get_where('tbl_aia_reg_form', array("id"=>$master_id))->row();
			$dnricname = $this->input->post('snricname');
			$dnricno = $this->input->post('snricno');
			$ddob = $this->input->post('sdob');
			$dob = date('d/m/Y',strtotime($this->input->post('dob'))); 
			$data = array(
				'policyno' => $fetch_master->policyno,
				'mbrno' => $fetch_master->mbrno,
				'membername' => $dnricname,		
				'ic' => $dnricno,
				'rel' => 'C',
				'sex' => $this->input->post('gender'),
				'companycode' => $fetch_master->companycode,
				'companyname' => $fetch_master->companyname,
				'costcenter' => $fetch_master->costcenter,
				'dob' => $dob,
				'staffid' => $fetch_master->staffid,
				'mastermember' => $fetch_master->mastermember,
				'mastername' => $fetch_master->mastername,
				'masteric' => $fetch_master->masteric,
				'Start_Date' =>$fetch_master->Start_Date,
				'End_Date' => $fetch_master->End_Date,
				'coverage' => $fetch_master->coverage,
				'status' => 'NEW'
			);
			 if($this->db->insert('tbl_aia_reg_form',$data))
			 {
				
				redirect('Profile/children');
				
			 }
		
		}		  
			$this->load->view('front/header');
			$this->load->view('front/childrenAdd');
			$this->load->view('front/footer'); 
	}
  function childrenEdit($id)
  {
	$data = array('message'=>'');
     if($this->input->post('Update_data'))
    {
		$dnricname = $this->input->post('snricname');
		$dnricno = $this->input->post('snricno');
		$ddob = $this->input->post('sdob');
		$dob = date('d/m/Y',strtotime($this->input->post('dob'))); 
		
  		$data = array(
			'membername' => $dnricname,						
			'ic' => $dnricno,						
			'dob' => $dob
  		);
			$result['message'] = $this->ProfileModel->spouseEdit($data,$id);
		  if($result['message'] == 'SUCCESS')
		  {
			$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Profile/children");
		  }
    }
	  //$data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('front/header');
      $this->load->view('front/childrenEdit',$data);
      $this->load->view('front/footer'); 
  }
  function declarationEdit($id)
  {
	$data = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$dnricname = $this->input->post('dnricname');
		$dnricno = $this->input->post('dnricno');
		$ddob = $this->input->post('ddob');
		
  		$data = array(
			'name' => $dnricname,						
			'localtreatment_doctorname' => $dnricno,						
			'dateoftreatment_decision' => $ddob
  		);
			$result['message'] = $this->ProfileModel->declarationEdit($data,$id);
		  if($result['message'] == 'SUCCESS')
		  {
			$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Profile");
		  }
    }
	  //$data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('front/header');
      $this->load->view('front/declarationEdit',$data);
      $this->load->view('front/footer'); 
  }

  public function profileEdit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$dob = date('d/m/Y',strtotime($this->input->post('dob'))); 
		$data = array(
              'membername' => $this->input->post('memname'),						
              'dob' => $dob,						
              'ic' => $this->input->post('nricnew'),
              'ic_old' => $this->input->post('nricold'),
              'sex' => $this->input->post('gender'),
              'bank_name' => $this->input->post('bankname'),
              'bank_address' => $this->input->post('baddress'),
              'occupation' => $this->input->post('occupation'),
			  'house_address' => $this->input->post('haddress'),
			  'house_no' => $this->input->post('houseno'),
			  'office_no' => $this->input->post('hofficeno'),
			  'house_phone' => $this->input->post('housephone'),
			  'companycode' => $this->input->post('companycode'),
			  'companyname' => $this->input->post('companyname'),
			  'email' => $this->input->post('hemailaddress'),
			  'bank_account_no' => $this->input->post('bankaccountno'),
			  'employdate' => $this->input->post('employdate'),
			  
          );

  		$result['message'] = $this->ProfileModel->profileEdit($data,$id);
		  if($result['message'] == 'SUCCESS')
		  {
			$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Profile");
		  }
    }
  }
	
  
}
?>
