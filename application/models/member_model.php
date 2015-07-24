<?php
class Member_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

  
	function signup($new_member_insert_data,$email)
	{

		$this->db->where('email', $email);
		$query = $this->db->get('tbl_customer');

            if($query->num_rows > 0){
        	echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Username already taken";	
			echo '</strong></div>';
		}else{
			$insert = $this->db->insert('tbl_customer', $new_member_insert_data);
		    return $insert;
		}
	      
	}//create_member
	
	function validate($user_name, $password)
	{
		$this->db->where('email', $user_name);
		$this->db->where('password', $password);
		$this->db->where('verifyed',1);
		$query = $this->db->get('tbl_customer');
		
		if($query->num_rows == 1)
		{
			return true;
		}		
	}
	
	
	function Search_room($checkin,$checkout,$adult,$child)
	{

	  $sql =  "SELECT * FROM tbl_RoomType WHERE adult = '" . $adult  . "' AND child = '" . $child . "'" ;
	  $query = $this->db->query($sql);
	  $type = $query->result_array() ;
	  foreach ($query->result_array() as $row)
	  {
	    $sql ="SELECT 
	     tbl_room.room_no, 
	     tbl_room.type_id, 
	     tbl_RoomType.type ,
	     tbl_RoomType.price,
	     tbl_RoomType.note,
	     tbl_room.id,

	     tr.id as reserv_status

	     FROM tbl_room

             LEFT JOIN tbl_Reservation tr ON tbl_room.id = tr.room_id AND 
             (
             (tr.checkin_data <= '" . $checkin . "' AND tr.checkout_data >= '" . $checkin . "')
             OR
             (tr.checkin_data <= '" . $checkout . "' AND tr.checkout_data >= '" . $checkout . "')
             )
             LEFT JOIN tbl_RoomType ON tbl_room.type_id = tbl_RoomType.id
             WHERE tbl_room.type_id = '" . $row['id'] . "' AND tr.id IS NULL" ;
	     $room_query = $this->db->query($sql);
	  }
	  
	   return $room_query->result_array(); 	
	}
	
	
        function get_profile($email)
	{
		$this->db->select('*');
		$this->db->where('email', $email);
		$query = $this->db->get('tbl_customer');
			  
	        return $query->result_array(); 	
	}
	
	function get_reservations($email)
	{

	        $this->db->select('id');
		$this->db->where('email', $email);
		$query = $this->db->get('tbl_customer');
			  
	        $customer = $query->result_array(); 	
	        
	        
	    $this->db->select('*');
		$this->db->where('Customer_id', $customer[0]['id']);
		$query = $this->db->get('tbl_Reservation');
		
		return $query->result_array(); 	
	  
	
	}
	
	function add_reserve($data)
	
	{
	
		$insert = $this->db->insert('tbl_Reservation', $data);
		return $insert;
	
	}
	
	function cancel_reserve($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_Reservation'); 
	}	
	
	function update_profile ($id , $data)
	{
		
		$this->db->where('id', $id);
		$this->db->update('tbl_customer', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
		
		
	}
    
 
}
?>	
