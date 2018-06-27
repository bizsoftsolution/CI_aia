<?php
class ProfileModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function ProfileList()
    {
		//$query = $this->db->order_by('id','desc')->get('tbl_english_post');
		//return $query->result();
		return $data_tbl_profile = $this->db->get_where('tbl_aia_details', array("id"=>$this->session->userdata('aia_id')))->result();
		
    }
	function profileEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_aia_details',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	function spouseEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_spouse_details',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	function childrenEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_children_details',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	function declarationEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_declaration_details',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	
	function ProductAdd($data)
	{
      if($this->db->insert('tbl_product',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function productGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	
    function productDelete($id)
    {
       if($this->db->delete('tbl_product', array('id' => $id)))
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
