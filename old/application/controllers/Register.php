<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('register');
		$this->load->library('session');
		$this->load->database();
	}
	
    public function Add()
    {
      $result = array('message'=>'');
      if($this->input->post('save_register_data'))
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
			  'hbank_name' => $this->input->post('bankaccountname'),
              'created_date' => date("Y-m-d h:i:s")
          );
		  if($this->db->insert("tbl_aia_details", $data))
		  {
			$aia_id = $this->db->insert_id();
			 $spousnme = $this->input->post('snricname'); 
			//$spousename = implode(",", $spousnme); 
			 $spouseno = $this->input->post('snricno');
			// $snricno = implode(",", $spouseno);
			$spousedob = $this->input->post('sdob');
			//$sdob = implode(",", $spousedob);
			for($i=0;$i<count($spousnme);$i++) {
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
			for($j=0;$j<count($childrennme);$j++) {
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
			for($k=0;$k<count($dnnme);$k++) {
				$data3 = array(
					'name' => $dnnme[$k],
					'localtreatment_doctorname' => $dnno[$k],
					'dateoftreatment_decision' => $dndob[$k],
					'aia_id'=> $aia_id
					);
				$this->db->insert("tbl_declaration_details", $data3);
			}

			   echo "<script>
                alert('AIA Form Register Successfully !!!');
                </script>";
				redirect("Login");
		  }
		 
         //
      }
    }

}
