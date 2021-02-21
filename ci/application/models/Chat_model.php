<?php
/**
 * Created by PhpStorm.
 * User: a.kader
 * Date: 01-Aug-19
 * Time: 10:03 AM
 */

class Chat_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getconversation($data)
    {
        $q = $this->db->get_where("conversations",$data);
        return $q;
        
    }
    
    
    public function insert_conversation($data)
    {
		$insert = $this->db->insert('conversations',$data);
		return $this->db->insert_id();
	}
	
	
	 public function add_notification($data) 
	 {
		 $insert = $this->db->insert('tbl_notification',$data);
		return $this->db->insert_id();
	 }
	 
	 
	 public function add_conversation_message($data)
	 {
	 	$insert = $this->db->insert('conversations_message',$data);
		return $this->db->insert_id();
	 }
	 
	 
	 public function get_conversation_message($data)
	 {
	 	$q = $this->db->get_where("conversations_message",$data);
        return $q;
	 }
	 
	 
	 public function update_conversation($data,$id)
	 {
	 	$update = $this->db->update('conversations',$data,$id);
	 	return $update ;
	 }
	 
	 
	 public function getmessageuserjoin($conversation_id)
	 {
	 	$this->db->select('conversations_message.*,users.email as email,users.avatar as profile_pic');
	 	$this->db->from('conversations_message');
	 	$this->db->join('users','users.id = conversations_message.sender_id','left');
	 	$this->db->where('conversation_id',$conversation_id);
	 	$query = $this->db->get();
	 	return $query;
	 }
	 
   



}