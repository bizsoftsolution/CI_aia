<?php
class Members extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('MembersModel');
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
	  $data['membersList']=$this->MembersModel->membersList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('members/List', $data);
      $this->load->view('template/footer'); 
  }
  function View($view_id)
  {
	  $data = array('message'=>'');
	  $data['View']=$this->MembersModel->View($view_id);
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('members/View', $data);
      $this->load->view('template/footer'); 
  }
  public function update($id)
  {
    $result = array('message'=>'');
      if($this->input->post('update_status'))
      {
			$status1 = $this->input->post('status');
		  //$result['message'] = $this->MembersModel->update($status, $id);
			$this->db->where('id',$id);      //var_dump($id);exit();
			$status = array("status"=>$status1);
			if($this->db->update('tbl_aia_details',$status))
			{
				$update_id_aia = $this->db->get_where("tbl_aia_details", array("id"=>$id))->row();
				$dob = date("d/m/Y", strtotime($update_id_aia->dob));
				$data = array(
					"password"=>$dob,
					"user_type"=>"MEMBER",
					"email"=>$update_id_aia->nricnew,
					"logged_in"=>"FALSE",
					"first_name"=>$update_id_aia->name,
					"aia_id"=>$update_id_aia->id
				);
				if($this->db->insert("user", $data))
				{
					$this->load->library('email');
						$subject = 'AIA Confirmation Mail';
						//$message = '<p>Hi.</p>';
			
						// Get full html:
							$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html xmlns="http://www.w3.org/1999/xhtml">
							<head>
								<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
								<title>' . html_escape($subject) . '</title>
								<style type="text/css">
									body {
										font-family: Arial, Verdana, Helvetica, sans-serif;
										font-size: 16px;
									}
								</style>
							</head>
							<body>
								<h1>AIA Confirmation Form</h1>
								<p>Thank you for Register! </p>
								<table border="1">
									<tr>
										<td>Username </td>
										<td>'.$update_id_aia->nricnew.'</td>
									</tr>
									<tr>
										<td>Password </td>
										<td>'.$dob.'</td>
									</tr>
								</table>
							</body>
							</html>';
			
						
						$result = $this->email
								->from('info@aia.com')
								->reply_to('info@aia.com')    // Optional, an account where a human being reads.
								//->to('rajkumar.bizsoft@gmail.com')
								->to($update_id_aia->hemailid)
								->subject($subject)
								->message($body)
								->send();
						if($result)
						{	
							echo "<script>
							alert('Updated successfully !!!');
							</script>";
							$base_url=base_url();
							redirect("$base_url"."Members");
						}
						else
						{
							echo $this->email->print_debugger();
						}
				}	
          }
          
        }
  }

  
}
?>
