	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		if($this->input->post('save_register_data'))
		{
			$upload_data = "";
		$upload_data1 = "";
		$upload_data2 = "";
		$upload_data3 = "";
		if($_FILES['photo']['name'])
		{
			$upload = $this->_do_upload($this->input->post('nricnew'),'photo');
			$upload_data = $upload;
		}
		if($_FILES['photo1']['name'])
		{
			$upload = $this->_do_upload($this->input->post('nricnew'),'photo1');
			$upload_data1 = $upload;
		}
		if($_FILES['photo2']['name'])
		{
			$upload = $this->_do_upload($this->input->post('nricnew'),'photo2');
			$upload_data2 = $upload;
		}
		if($_FILES['photo3']['name'])
		{
			$upload = $this->_do_upload($this->input->post('nricnew'),'photo3');
			$upload_data3 = $upload;
		}
		$result = array('message'=>'');
		
		
			$data = array(
						'name' => $this->input->post('memname'),						
						'dob' => $this->input->post('dob'),						
						'nricnew' => $this->input->post('nricnew'),
						'nricold' => $this->input->post('nricold'),
						'gender' => $this->input->post('gender'),
						'bank_name' => $this->input->post('bankname'),
						'occupation' => $this->input->post('occupation'),
						'house_address' => $this->input->post('haddress'),
						'house_no' => $this->input->post('houseno'),
						'office_pno' => $this->input->post('hofficeno'),
						'house_pno' => $this->input->post('housephone'),
						'hemailid' => $this->input->post('hemailaddress'),
						'bank_acc_no' => $this->input->post('bankaccountno'),
						'hbank_name' => $this->input->post('bankaccountname'),
						'file1' => $upload_data,
						'file2' => $upload_data1,
						'file3' => $upload_data2,
						'file4' => $upload_data3,
						'created_date' => date("Y-m-d h:i:s")
						);
			if($this->db->insert("tbl_aia_details", $data))
			{
				$aia_id = $this->db->insert_id();
				$spousnme = $this->input->post('snricname'); 
				$spouseno = $this->input->post('snricno');
				$spousedob = $this->input->post('sdob');
				//$sdob = implode(",", $spousedob);
				for($i=0;$i<count($spousnme);$i++) 
				{
					$data1 = array(
								'spouse_name' => $spousnme[$i],
								'spouse_nricno' => $spouseno[$i],
								'spouse_dob' => $spousedob[$i],
								'aia_id'=> $aia_id
								);
					$this->db->insert("tbl_spouse_details", $data1);
				}
				$childrennme = $this->input->post('cnricname');
				$childrenno = $this->input->post('cnricno');
				$childrendob = $this->input->post('cdob');
				for($j=0;$j<count($childrennme);$j++) 
				{
					$data2 = array(
								'children_name' => $childrennme[$j],
								'children_nricno' => $childrenno[$j],
								'children_dob' => $childrendob[$j],
								'aia_id'=> $aia_id
								);
					$this->db->insert("tbl_children_details", $data2);
				}
				$dnnme = $this->input->post('dnricname');
				$dnno = $this->input->post('dnricno');
				$dndob = $this->input->post('ddob');
				for($k=0;$k<count($dnnme);$k++) 
				{
					$data3 = array(
								'name' => $dnnme[$k],
								'localtreatment_doctorname' => $dnno[$k],
								'dateoftreatment_decision' => $dndob[$k],
								'aia_id'=> $aia_id
								);
					$this->db->insert("tbl_declaration_details", $data3);
				}
				$this->session->set_flashdata('register', 'Thank You Registered Successfully');
				echo "<script>
					alert('Thank you for Registered Us ... !!!');
					</script>";
			}
		
		}
		$this->load->helper('url');
		$this->load->view('register');
		$this->load->library('session');
		$this->load->database();
	}
	
	public function Add()
	{
		
	}
	public function get_branch($country)
	{
		
		$this->db->select('id, branch_name');
		if($country != NULL)
		{
			$this->db->where('bank_short_name', $country);
		}
		$query = $this->db->get('tbl_bank');
		$cities = array();

		if($query->result())
		{
			foreach ($query->result() as $city)
			{
				$cities[0]="Select Branch";
				$cities[$city->id] = $city->branch_name;
			}
			echo(json_encode($cities));
			//return $cities;
		}
		else
		{
			return FALSE;
		}
			//echo(json_encode($this->front_model->get_island($country)));
	}
  
  
  private function _do_upload($ic,$photo)
  {

      $config['upload_path']          = 'upload/';
      $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|ppt|pps|txt';
      $config['max_size']             = '200000'; //set max size allowed in Kilobyte
     
      $config['file_name']            = $ic.'-'.round(microtime(true) * 1000); //just milisecond timestamp fot unique name

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload($photo)) //upload and validate
      {
          $data['inputerror'][] = 'photo';
          $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
          $data['status'] = FALSE;
          echo json_encode($data);
          exit();
      }
      return $this->upload->data('file_name');
  }
}
