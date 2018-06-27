<?php

class NubeMembermodel extends CI_Model{

public function login($email,$password)
{
	$this->db->select('*');
	$this->db->from('tbl_aia_reg_form');
	$this->db->where('ic',$email);
	$this->db->where('dob',$password);
	$this->db->where('rel','E');
	$query=$this->db->get();
	$row_count=$query->num_rows();
	//var_dump($email.'-'.$password.'-'.$row_count);exit();
		if($row_count>0){
			$userdata=$query->row();
			$newdata = array(
				'user_id'  => $userdata->id,
				'name' => $userdata->membername,
				'ic'     => $userdata->ic,
				'username'     => $userdata->membername,
				'logged_in' => "TRUE"
				);
			$this->session->set_userdata($newdata);
			//$this->setLoginTime($userdata->user_id);
			return true;
            //return $newdata;
		}
	return false;
}

public function logout($user_id){
$data['logged_in']="FALSE";
$this->db->where('id',$user_id);
$this->db->update('tbl_aia_details',$data);
$newdata = array(
'user_id'   => '',
'name'     => '',
'user_type' => '',
'nricnew' => '',
'nricold' => '',
'username' => '',
'password'     => '',
'logged_in' => "FALSE"
);
$this->session->set_userdata($newdata);

}

public function setLoginTime($user_id){
$data['last_login']=date("Y-m-d H:i:s");
$data['logged_in']="TRUE";
$this->db->where('id',$user_id);
$this->db->update('tbl_aia_details',$data);
}

}
