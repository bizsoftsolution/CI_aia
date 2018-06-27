
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MemberChangePasswordModel extends CI_Model

	{

	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		}
	public function pwd_update($id,$new)
	{
	  $this->db->where('id',$id);
	  if($this->db->update('tbl_aia_details',$new))
		{
			return "SUCCESS";
		}
		else 
		{
			return "FAILED";
		}
	}
}
