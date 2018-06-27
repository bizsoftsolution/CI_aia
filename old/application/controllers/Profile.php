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
  
  //*****************************************************************************************************************************//*****************************************************************************************************************************													           ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	
  function index()
  {
	  $data = array('message'=>'');
	  $data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('profile/profile', $data);
      $this->load->view('template/footer'); 
  }
  function spouse()
  {
	  $data = array('message'=>'');
	  $data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('profile/spouse', $data);
      $this->load->view('template/footer'); 
  }
  function children()
  {
	  $data = array('message'=>'');
	  $data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('profile/children', $data);
      $this->load->view('template/footer'); 
  } 
  function declaration()
  {
	  $data = array('message'=>'');
	  $data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('profile/declaration', $data);
      $this->load->view('template/footer'); 
  }
   function spouseEdit($id)
  {
	$data = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$dnricname = $this->input->post('snricname');
		$dnricno = $this->input->post('snricno');
		$ddob = $this->input->post('sdob');
		
  		$data = array(
			'spouse_name' => $dnricname,						
			'spouse_nricno' => $dnricno,						
			'spouse_dob' => $ddob
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
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('profile/spouseEdit',$data);
      $this->load->view('template/footer'); 
  }
  function childrenEdit($id)
  {
	$data = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$dnricname = $this->input->post('cnricname');
		$dnricno = $this->input->post('cnricno');
		$ddob = $this->input->post('cdob');
		
  		$data = array(
			'children_name' => $dnricname,						
			'children_nricno' => $dnricno,						
			'children_dob' => $ddob
  		);
			$result['message'] = $this->ProfileModel->childrenEdit($data,$id);
		  if($result['message'] == 'SUCCESS')
		  {
			$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Profile");
		  }
    }
	  //$data['getdata']=$this->ProfileModel->ProfileList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('profile/childrenEdit',$data);
      $this->load->view('template/footer'); 
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
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('profile/declarationEdit',$data);
      $this->load->view('template/footer'); 
  }

  public function profileEdit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$data = array(
              'name' => $this->input->post('memname'),						
              'dob' => $this->input->post('dob'),						
              'nricnew' => $this->input->post('nricnew'),
              'nricold' => $this->input->post('nricold'),
              'gender' => $this->input->post('gender'),
              'bank_name' => $this->input->post('bankname'),
              'bank_address' => $this->input->post('baddress'),
              'occupation' => $this->input->post('occupation'),
			  'house_address' => $this->input->post('haddress'),
			  'house_no' => $this->input->post('houseno'),
			  'office_pno' => $this->input->post('hofficeno'),
			  'house_pno' => $this->input->post('housephone'),
			  'hemailid' => $this->input->post('hemailaddress'),
			  'bank_acc_no' => $this->input->post('bankaccountno'),
			  'hbank_name' => $this->input->post('bankaccountname')
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
