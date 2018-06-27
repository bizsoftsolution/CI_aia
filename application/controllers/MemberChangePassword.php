<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MemberChangePassword extends CI_Controller

{
  public function __construct()
    {
    parent::__construct();
    $this->load->model('MemberChangePasswordModel');
	$this->load->library('session');
    $this->load->helper('url');
    }

  public function index()
    {
	$result = array('message'=>'');
	$this->load->view('front/header');
	$this->load->view('front/changepassword', $result);
	$this->load->view('front/footer');
    }
    public function pwd_update($id)
  	 {
       $new = array(
		   'password' => $this->input->post('new_password')
		   );
		$result['message'] = $this->MemberChangePasswordModel->pwd_update($id, $new);
		if($result['message'] == 'SUCCESS')
		{
			redirect('NubeMember/logout');
		}
		$this->load->view('front/header');
		$this->load->view('front/changepassword', $result);
		$this->load->view('front/footer');
  	 }
}
