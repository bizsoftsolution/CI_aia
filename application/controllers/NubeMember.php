<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NubeMember extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->database();
        $this->load->model('NubeMembermodel');
		/*cash control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }
		//Method for view login page
	public function index(){
		$this->load->library('session');
		$this->load->helper('url');
	    if($this->session->userdata('logged_in')==TRUE){
			redirect('MemberDashboard');
        }
        $data=array();
		$this->load->view('Front');
	   }

	   //Method for varify login information
	   public function varifyUser(){
			$this->load->library('session');
	   		$this->load->helper('url');
			$email=$this->input->post('email',true);
			$password = $this->input->post('password',true);
			 //$password1 = date("d/m/Y", strtotime($password1));
			 echo $this->NubeMembermodel->login($email,$password);
		 	if($this->NubeMembermodel->login($email,$password))
			{
				redirect('MemberDashboard');
				echo "ggggggggggg";
			}
			else
			{
				$this->session->set_flashdata('login_msg', 'Invalid User Name or Password');
				redirect('Front');
			}
	   }

	   //Method for logout
	   public function logout(){
	   $this->load->library('session');

	   	$this->NubeMembermodel->logout($this->session->userdata('user_id'));
		redirect('Front');
	   }


}
