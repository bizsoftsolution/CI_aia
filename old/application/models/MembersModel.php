<?php
class MembersModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function membersList()
    {
		//$query = $this->db->order_by('id','desc')->get('tbl_english_post');
		//return $query->result();
		return $data_tbl_post = $this->db->order_by('id', 'DESC')->get('tbl_aia_details')->result();
		
    }
	function View($view_id)
    {
		$this->db->select('*');
		$this->db->from('tbl_aia_details');
		$this->db->where('id',$view_id);
		$query = $this->db->get();
		return $query->result();
		
    }
	function update($status,$id)
    {

		$this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_aia_details',$status))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	function achivementAdd($data)
	{
      if($this->db->insert('tbl_achivement',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function achivementGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_achivement');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	
    function achivementDelete($id)
    {
       if($this->db->delete('tbl_achivement', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
		

	
}
?>
