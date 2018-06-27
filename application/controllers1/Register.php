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
             /*  $youtubeurl = $this->input->post('youtubeurl');
              $youtubeurl1 ="";
              if(isset($youtubeurl) && is_array($youtubeurl)){
                  $youtubeurl1 = implode(",", $youtubeurl); 
              } */
			
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
			  $j=1;
			 // var_dump($spousename);
				 // exit();
				$insert_batch = array();
			  foreach($spousnme as $spousenamelist)
			  {
				  for($i=0; $i<$spousenamelist; $i++)
				  {
					 $data1 = array(
					'spouse_name' => $spousenamelist,
					'spouse_nricno' => $spouseno[$i],
					'spouse_dob' => $spousedob,
					'aia_id'=> $aia_id
					);
					$insert_batch[] = $data1;	
					//$this->db->insert("tbl_spouse_details", $data1);
					$j++; 
					}
				//$checkbox_roomno1[$j];
				
			  }
			  $this->db->insert('tbl_spouse_details', $insert_batch);
			  
			  /* $childrennme = $this->input->post('cnricname');
			  $cnricname = implode(",", $childrennme); 
			  $childrenno = $this->input->post('cnricno');
			  $cnricno = implode(",", $childrenno);
			  $childrendob = $this->input->post('childrendob');
			  $cdob = implode(",", $spousedob);
			  $k=0;
			  foreach($childrennme as $childrennmelist)
			  {
				//$checkbox_roomno1[$j];
				$data2 = array(
					'children_name' => $childrennmelist,
					'children_nricno' => $cnricno[$k],
					'children_dob' => $cdob[$k],
					'aia_id'=> $aia_id
				);
				$k++;
				$this->db->insert("tbl_children_details", $data2);
			  }
			  
			  $dnnme = $this->input->post('dnricname');
			  $dnricname = implode(",", $dnnme); 
			  $dnno = $this->input->post('dnricno');
			  $dnricno = implode(",", $dnno);
			  $dndob = $this->input->post('ddob');
			  $ddob = implode(",", $dndob);
			  $l=0;
			  foreach($childrennme as $childrennmelist)
			  {
				//$checkbox_roomno1[$j];
				$data3 = array(
					'name' => $childrennmelist,
					'localtreatment_doctorname' => $cnricno[$l],
					'dateoftreatment_decision' => $cdob[$l],
					'aia_id'=> $aia_id
				);
				$l++;
				$this->db->insert("tbl_declaration_details", $data3);
			  } */
			  
			   /* echo "<script>
                alert('AIA Form Register Successfully !!!');
                window.location.href='';
                </script>"; */
		  }
		 
         //redirect("Register");
      }
    }
    public function productEdit($id)
    {
      $result = array('message'=>'');
      if($this->input->post('Update_data'))
      {
          
		   $result['message'] = $this->ProductModel->productAdd($data);
          if($result['message'] == "SUCCESS")
          {
            $this->load->library('email');
            $subject = 'AIA Register';
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
                    <h1>AIA Register Form</h1>
                     <p>Thank you for your Register! </p>
                    <p>We will contact you soon.</p>
                    </body>
                    </html>';
    
                
                $result = $this->email
                        ->from('info@aia.com')
                        ->reply_to('info@aia.com')    // Optional, an account where a human being reads.
                        //->to('rajkumar.bizsoft@gmail.com')
                        ->to('rajkumar.bizsoft@gmail.com')
                        ->subject($subject)
                        ->message($body)
                        ->send();
            if($result)
            {
                /* $messge = array('message' => 'Message successfully sent','class' => 'alert alert-success fade in');
                $this->session->set_flashdata('item', $messge);
                $base_url=base_url();
                redirect("$base_url"."Front/enquiry/1"); */
                
                echo "<script>
                alert('Register successfully !!!');
                window.location.href='Register';
                </script>";
            }
            else
            {
                echo $this->email->print_debugger();
            }
          }
          $base_url=base_url();
          redirect("$base_url"."Product");
        }
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $result['post']=$this->ProductModel->productGet($id);
      $this->load->view('backend/product/productEdit',$result);
      $this->load->view('template/footer');
    }
      public function productDelete($id)
    {
      $result = $this->ProductModel->productDelete($id);
      if($result == 'SUCCESS')
        {
          $messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
          $this->session->set_flashdata('notification', $messge);
          $base_url=base_url();
          redirect("$base_url"."Product");
        }
    }
}
