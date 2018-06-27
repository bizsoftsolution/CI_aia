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
  public function update_existing($id)
  {
		$this->db->where('id',$id);
		if($this->db->update('tbl_aia_details',array('status'=>'APPROVED','amount'=>$this->input->post('amount_paid'))))
		{
			redirect('Members');
		}
  }
	public function update($id)
	{
		$result = array('message'=>'');

		if($this->input->post('update_status'))
		{
			if($this->input->post('status') == 'APPROVED')
			{
				$reg_data = $this->db->get_where('tbl_aia_details',array('id'=>$id))->row();
				//$ddob = $this->input->post('dob');
				$dob = date('d/m/Y',strtotime($reg_data->dob)); 
				$data = array(
							'policyno' => $this->input->post('policyno'), 
							'mbrno' => $this->input->post('mbrno'),
							'membername' =>$reg_data->name,
							'member' =>$this->input->post('member'),
							'ic' => $reg_data->nricnew,
							'ic_old' => $reg_data->nricold,
							'rel' => 'E',
							'sex' => $reg_data->gender,
							'companycode' => $this->input->post('companycode'),
							'companyname' =>$this->input->post('companyname'),
							'costcenter' => $this->input->post('costcenter'),
							'dob' => $dob,
							'staffid' =>$this->input->post('staffid'),
							'mastermember' => $this->input->post('member'),
							'mastername' => $reg_data->name,
							'masteric' => $reg_data->nricnew,
							'Start_Date' => $this->input->post('Start_Date'),
							'End_Date' => $this->input->post('End_Date'),
							'coverage' => $this->input->post('coverage'),
							'plan' => $this->input->post('plan'),
							'plandesc' => $this->input->post('plandesc'),
							'occupation' => $reg_data->occupation,
							'house_address' => $reg_data->house_address,
							'house_no' => $reg_data->house_no,
							'office_no' => $reg_data->office_pno,
							'house_phone' => $reg_data->house_pno,
							'email' => $reg_data->hemailid,
							'bank_account_no' => $reg_data->bank_acc_no,
							'bank_name' => $reg_data->hbank_name,
							'status' => 'WAIT'
							);
				if($this->db->insert('tbl_aia_reg_form' , $data))
				{
					$select_spouse = $this->db->get_where('tbl_spouse_details' ,array('aia_id' => $id))->result();
					$select_spouse_no = $this->db->get_where('tbl_spouse_details' ,array('aia_id' => $id))->num_rows();
					$status_no = 0;
					if($select_spouse_no > 0)
					{
						foreach($select_spouse as $row)
						{
							$dob1 = date('d/m/Y',strtotime($row->spouse_dob)); 
							
							$data1 = array(
								'policyno' => $this->input->post('policyno'), 
								'mbrno' => $this->input->post('mbrno'),
								'membername' =>$row->spouse_name,
								'member' =>$this->input->post('member'),
								'ic' => $row->spouse_nricno,
								'ic_old' => $row->nricold,
								'rel' => 'S',
								'sex' => $row->gender,
								'companycode' => $this->input->post('companycode'),
								'companyname' =>$this->input->post('companyname'),
								'costcenter' => $this->input->post('costcenter'),
								'dob' => $dob1,
								'staffid' =>$this->input->post('staffid'),
								'mastermember' => $this->input->post('member'),
								'mastername' => $reg_data->name,
								'masteric' => $reg_data->nricnew,
								'Start_Date' => $this->input->post('Start_Date'),
								'End_Date' => $this->input->post('End_Date'),
								'coverage' => $this->input->post('coverage'),
								'plan' => $this->input->post('plan'),
								'plandesc' => $this->input->post('plandesc'),
								'occupation' => $reg_data->occupation,
								'house_address' => $reg_data->house_address,
								'house_no' => $reg_data->house_no,
								'office_no' => $reg_data->office_pno,
								'house_phone' => $reg_data->house_pno,
								'email' => $reg_data->hemailid,
								'bank_account_no' => $reg_data->bank_acc_no,
								'bank_name' => $reg_data->hbank_name,
								'status' => 'WAIT'
								);
							if($this->db->insert('tbl_aia_reg_form' , $data1))
							{
								$status_no += 1;
							}
						}
					}
// Children Details -------------------------------------			
					$select_children = $this->db->get_where('tbl_children_details' ,array('aia_id' => $id))->result();
					$select_children_no = $this->db->get_where('tbl_children_details' ,array('aia_id' => $id))->num_rows();
					if($select_children_no > 0)
					{
						foreach($select_children as $row1)
						{
							$dob2 = date('d/m/Y',strtotime($row1->children_dob));
							$data2 = array(
								
								'policyno' => $this->input->post('policyno'), 
								'mbrno' => $this->input->post('mbrno'),
								'membername' =>$row->children_name,
								'member' =>$this->input->post('member'),
								'ic' => $row1->children_nricno,
								'ic_old' => $row1->children_nricno,
								'rel' => 'C',
								'sex' => $row1->gender,
								'companycode' => $this->input->post('companycode'),
								'companyname' =>$this->input->post('companyname'),
								'costcenter' => $this->input->post('costcenter'),
								'dob' => $dob2,
								'staffid' =>$this->input->post('staffid'),
								'mastermember' => $this->input->post('member'),
								'mastername' => $reg_data->name,
								'masteric' => $reg_data->nricnew,
								'Start_Date' => $this->input->post('Start_Date'),
								'End_Date' => $this->input->post('End_Date'),
								'coverage' => $this->input->post('coverage'),
								'plan' => $this->input->post('plan'),
								'plandesc' => $this->input->post('plandesc'),
								'occupation' => $reg_data->occupation,
								'house_address' => $reg_data->house_address,
								'house_no' => $reg_data->house_no,
								'office_no' => $reg_data->office_pno,
								'house_phone' => $reg_data->house_pno,
								'email' => $reg_data->hemailid,
								'bank_account_no' => $reg_data->bank_acc_no,
								'bank_name' => $reg_data->hbank_name,
								'status' => 'WAIT'
								);
							if($this->db->insert('tbl_aia_reg_form' , $data2))
							{
								$status_no += 1;
							}
						}
					}
					if($status_no > 0)
					{
						$this->db->where('id', $id);
						if($this->db->delete('tbl_aia_details'))
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
											<td>Your IC Number</td>
										</tr>
										<tr>
											<td>Password </td>
											<td>Your Date Birth (eg:17/01/1974)</td>
										</tr>
									</table>
								</body>
								</html>';
				
							
							$result = $this->email
									->from('info@aia.com')
									->reply_to('info@aia.com')    // Optional, an account where a human being reads.
									->to('anitha.bizsoft@gmail.com')
									//->to($update_id_aia->hemailid)
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
							//redirect('Members/sendToBank');
						}
					}
				}
			}
		}
	}

	public function spouse()
	{	
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('backend/spouse');
		$this->load->view('template/footer'); 

	}
	public function approvespouse($id)
	{
		
			$this->db->where('id', $id);
			if($this->db->update('tbl_aia_reg_form', array('status' => 'OPEN')))
			{
				redirect('Members/spouse');
			}
		
	}
	public function children()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('backend/children');
		$this->load->view('template/footer');
	}
	public function approveChildren($id)
	{

			$this->db->where('id', $id);
			if($this->db->update('tbl_aia_reg_form', array('status' => 'OPEN')))
			{
				redirect('Members/children');
			}
		
	}
 	public function sendMailToBank()
	{
		if($this->input->post('update_status'))
		{
			$sub = $this->input->post('subject');
			$bodyContent = $this->input->post('bodyContent');
			$selectArray = $this->input->post('selectArray');
			$file1="";
			$file2="";
			$file3="";
			$file4="";
				$this->load->library('email');
				$subject = 'New AIA Members Registration';
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
					<body>'.$bodyContent.'
						<div style="background-color: #03A9F4;width: 100%;color: #fff;padding: 15px;font-size: 20px;text-align: center;font-weight: bold;">
							Member Data Enrollment -  Softcopy submission<br>
							(NATIONAL UNION OF BANK EMPLOYEES)
							</div>
							<table cellpadding="10">
								<thead style="background-color:#c1c1c1;">
									<tr>
										<th>No</th>
										<th>Employee IC</th>
										<th>Member & Dependant Name (As In IC)</th>
										<th>Rel</th>
										<th>DOB [Sample 01012017]</th>
										<th>Sex [M/F]</th>
										<th>[N] New or [AO] Add On</th>
									</tr>
								</thead>
								<tbody style="border:solid #000 1px;">
							';
							$i=1;
							foreach($selectArray as $row)
							{
								$data = $this->db->get_where('tbl_aia_details',array('id'=>$row))->row();
								$this->db->where('id',$row);
								if($this->db->update('tbl_aia_details',array('status'=>'MAILED')))
								{
									$body = $body .'
									
										<tr>
											<td>'.$i.'</td>
											<td>'.$data->nricnew.'</td>
											<td>'.$data->name.'</td>
											<td>E</td>
											<td>'.$data->dob.'</td>
											<td>'.$data->gender.'</td>
											<td>N</td>
										</tr>
									';
								}
								$spouse = $this->db->get_where('tbl_spouse_details',array('aia_id'=>$data->id))->row();
								
								$spouse_num = $this->db->get_where('tbl_spouse_details',array('aia_id'=>$data->id))->num_rows();
								
								if($spouse_num > 0)
								{
									$body = $body.'
									<tr>
											<td>'.$i.'</td>
											<td>'.$spouse->spouse_nricno.'</td>
											<td>'.$spouse->spouse_name.'</td>
											<td>S</td>
											<td>'.$data->spouse_dob.'</td>
											<td></td>
											<td>N</td>
										</tr>
									';
								}
								$children = $this->db->get_where('tbl_children_details',array('aia_id'=>$row->id))->result();
								
								$children_num = $this->db->get_where('tbl_children_details',array('aia_id'=>$row->id))->num_rows();
								if($children_num > 0)
								{
									$body = $body.'dslfmdlfmldsdlfmsldfmlsdsssssssss';
									foreach($children as $child)
									{
										$body = $body.'
											<tr>
												<td>'.$i.'</td>
												<td>'.$children->children_nricno.'</td>
												<td>'.$children->children_name.'</td>
												<td>C</td>
												<td>'.$children->children_dob.'</td>
												<td></td>
												<td>N</td>
											</tr>
											';
									}
								}
								$file1 = base_url().'upload/'.$data->file1;
								$file2 = base_url().'upload/'.$data->file2;
								$file3 = base_url().'upload/'.$data->file3;
								$file4 = base_url().'upload/'.$data->file4;
								$i++;
							}
						$body = $body .'</tbody></table>
					</body>
					</html>';
	
				$letter = base_url()."upload/attach1.pdf";
				$result = $this->email
						->from('info@aia.com')
						->reply_to('info@aia.com')    // Optional, an account where a human being reads.
						->to('anitha.bizsoft@gmail.com')
						//->to($getDet12->email)
						->attach($file1)
						->attach($file2)
						->attach($file3)
						->attach($file4)
						->attach($letter)
						->subject($sub)
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
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('backend/sendMailToBank');
		$this->load->view('template/footer');
	} 
	public function sendToBank()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('backend/sendToBank');
		$this->load->view('template/footer');
	}
		
	public function viewDataToAppove($id)
	{
		$data['id']=$id;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('backend/viewDataToAppove',$data);
		$this->load->view('template/footer');
	}
	
	public function approvedFromBank($id)
	{
		$reg_data = $this->db->get_where('tbl_aia_details',array('id'=>$id))->row();
				//$ddob = $this->input->post('dob');
				$dob = date('d/m/Y',strtotime($reg_data->dob)); 
				$data = array(
							'policyno' => $this->input->post('policyno'), 
							'mbrno' => $this->input->post('mbrno'),
							'membername' =>$reg_data->name,
							'member' =>$this->input->post('member'),
							'ic' => $reg_data->nricnew,
							'ic_old' => $reg_data->nricold,
							'rel' => 'E',
							'sex' => $reg_data->gender,
							'companycode' => $this->input->post('companycode'),
							'companyname' =>$this->input->post('companyname'),
							'costcenter' => $this->input->post('costcenter'),
							'dob' => $dob,
							'staffid' =>$this->input->post('staffid'),
							'mastermember' => $this->input->post('member'),
							'mastername' => $reg_data->name,
							'masteric' => $reg_data->nricnew,
							'Start_Date' => $this->input->post('Start_Date'),
							'End_Date' => $this->input->post('End_Date'),
							'coverage' => $this->input->post('coverage'),
							'plan' => $this->input->post('plan'),
							'plandesc' => $this->input->post('plandesc'),
							'occupation' => $reg_data->occupation,
							'house_address' => $reg_data->house_address,
							'house_no' => $reg_data->house_no,
							'office_no' => $reg_data->office_pno,
							'house_phone' => $reg_data->house_pno,
							'email' => $reg_data->hemailid,
							'bank_account_no' => $reg_data->bank_acc_no,
							'bank_name' => $reg_data->hbank_name,
							'status' => 'OPEN',
							'file1' =>  $reg_data->file1,
							'file2' =>  $reg_data->file2,
							'file3' =>  $reg_data->file3,
							'file4' =>  $reg_data->file4
							);
				if($this->db->insert('tbl_aia_reg_form' , $data))
				{
					$select_spouse = $this->db->get_where('tbl_spouse_details' ,array('aia_id' => $id))->result();
					$select_spouse_no = $this->db->get_where('tbl_spouse_details' ,array('aia_id' => $id))->num_rows();
					$status_no = 0;
					if($select_spouse_no > 0)
					{
						foreach($select_spouse as $row)
						{
							$dob1 = date('d/m/Y',strtotime($row->spouse_dob)); 
							
							$data1 = array(
								'policyno' => $this->input->post('policyno'), 
								'mbrno' => $this->input->post('mbrno'),
								'membername' =>$row->spouse_name,
								'member' =>$this->input->post('member'),
								'ic' => $row->spouse_nricno,
								'ic_old' => $row->nricold,
								'rel' => 'S',
								'sex' => $row->gender,
								'companycode' => $this->input->post('companycode'),
								'companyname' =>$this->input->post('companyname'),
								'costcenter' => $this->input->post('costcenter'),
								'dob' => $dob1,
								'staffid' =>$this->input->post('staffid'),
								'mastermember' => $this->input->post('member'),
								'mastername' => $reg_data->name,
								'masteric' => $reg_data->nricnew,
								'Start_Date' => $this->input->post('Start_Date'),
								'End_Date' => $this->input->post('End_Date'),
								'coverage' => $this->input->post('coverage'),
								'plan' => $this->input->post('plan'),
								'plandesc' => $this->input->post('plandesc'),
								'occupation' => $reg_data->occupation,
								'house_address' => $reg_data->house_address,
								'house_no' => $reg_data->house_no,
								'office_no' => $reg_data->office_pno,
								'house_phone' => $reg_data->house_pno,
								'email' => $reg_data->hemailid,
								'bank_account_no' => $reg_data->bank_acc_no,
								'bank_name' => $reg_data->hbank_name,
								'status' => 'WAIT'
								);
							if($this->db->insert('tbl_aia_reg_form' , $data1))
							{
								$status_no += 1;
							}
						}
					}
// Children Details -------------------------------------			
					$select_children = $this->db->get_where('tbl_children_details' ,array('aia_id' => $id))->result();
					$select_children_no = $this->db->get_where('tbl_children_details' ,array('aia_id' => $id))->num_rows();
					if($select_children_no > 0)
					{
						foreach($select_children as $row1)
						{
							$dob2 = date('d/m/Y',strtotime($row1->children_dob));
							$data2 = array(
								
								'policyno' => $this->input->post('policyno'), 
								'mbrno' => $this->input->post('mbrno'),
								'membername' =>$row->children_name,
								'member' =>$this->input->post('member'),
								'ic' => $row1->children_nricno,
								'ic_old' => $row1->children_nricno,
								'rel' => 'C',
								'sex' => $row1->gender,
								'companycode' => $this->input->post('companycode'),
								'companyname' =>$this->input->post('companyname'),
								'costcenter' => $this->input->post('costcenter'),
								'dob' => $dob2,
								'staffid' =>$this->input->post('staffid'),
								'mastermember' => $this->input->post('member'),
								'mastername' => $reg_data->name,
								'masteric' => $reg_data->nricnew,
								'Start_Date' => $this->input->post('Start_Date'),
								'End_Date' => $this->input->post('End_Date'),
								'coverage' => $this->input->post('coverage'),
								'plan' => $this->input->post('plan'),
								'plandesc' => $this->input->post('plandesc'),
								'occupation' => $reg_data->occupation,
								'house_address' => $reg_data->house_address,
								'house_no' => $reg_data->house_no,
								'office_no' => $reg_data->office_pno,
								'house_phone' => $reg_data->house_pno,
								'email' => $reg_data->hemailid,
								'bank_account_no' => $reg_data->bank_acc_no,
								'bank_name' => $reg_data->hbank_name,
								'status' => 'OPEN'
								
								);
							if($this->db->insert('tbl_aia_reg_form' , $data2))
							{
								$status_no += 1;
							}
						}
					}
					if($status_no > 0)
					{
						$this->db->where('id', $id);
						if($this->db->delete('tbl_aia_details'))
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
											<td>Your IC Number</td>
										</tr>
										<tr>
											<td>Password </td>
											<td>Your Date Birth (eg:17/01/1974)</td>
										</tr>
									</table>
								</body>
								</html>';
				
							
							$result = $this->email
									->from('info@aia.com')
									->reply_to('info@aia.com')    // Optional, an account where a human being reads.
									->to('anitha.bizsoft@gmail.com')
									//->to($update_id_aia->hemailid)
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
							//redirect('Members/sendToBank');
						}
					}
				}
			}

}
?>
