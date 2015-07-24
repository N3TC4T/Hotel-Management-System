<?php
class Checkin_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_checkin_by_id($id)
    {
		$this->db->select('*');
	        $this->db->select('tbl_customer.Family as Family');
		$this->db->select('tbl_customer.Passport as Passport');
		$this->db->select('tbl_customer.Gender as Gender');
		$this->db->select('tbl_room.room_no as room_number');
		$this->db->select('tbl_RoomType.price as price');
		
		$this->db->from('tbl_Checkin');
		
		$this->db->join('tbl_customer', 'tbl_Checkin.customer_id = tbl_customer.id ', 'left');
		$this->db->join('tbl_room', 'tbl_Checkin.room_no = tbl_room.id ', 'left');
		$this->db->join('tbl_RoomType', 'tbl_room.type_id = tbl_RoomType.id ', 'left');
		
		$this->db->where('tbl_Checkin.id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }    

    /**
    * Fetch checkin data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_checkin($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->select('tbl_Checkin.id as checkin_id');
		$this->db->select('tbl_room.room_no as room_number');
		
		$this->db->from('tbl_Checkin');
		
		$this->db->join('tbl_room', 'tbl_Checkin.room_no = tbl_room.id ', 'left');
		
		if($search_string){
			$this->db->like('Family', $search_string);
		}
		
		$this->db->where('checkouted',0);
		$this->db->group_by('tbl_Checkin.id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('tbl_Checkin.id', $order_type);
		}

        if($limit_start && $limit_end){
          $this->db->limit($limit_start, $limit_end);	
        }

        if($limit_start != null){
          $this->db->limit($limit_start, $limit_end);    
        }
        
		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_checkin($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('tbl_Checkin');
		if($search_string){
			$this->db->like('Family', $search_string);
		}
		$this->db->where('checkouted',0);
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }
    
    
    

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_checkin($data)
    {
   
	    
	    $insert = $this->db->insert('tbl_Checkin', $data);
	    return $insert;
    }
    
    function set_bussy($room_no)
    {
	   $busy_room = array(
           'status' => '1'
           );
            
           $this->db->where('room_no = ' . $room_no);
           $this->db->update('tbl_room', $busy_room);

    }
    
    
    
    /**
    * Update checkin
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_checkin($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('tbl_Checkin', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	
    public function get_fields()
    
    {
    
    $fields = $this->db->list_fields('tbl_Checkin');
    return $fields ; 
    }


    /**
    * Delete checkinr
    * @param int $id - checkin id
    * @return boolean
    */
    function delete_checkin($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_Checkin'); 
	}


    function today_checkin()
    {
    
		$today = date('m/d/Y',time()) ;  
		
		$this->db->select('*');
		$this->db->select('tbl_room.room_no as room_number');
		
		$this->db->from('tbl_Checkin');
		
		$this->db->join('tbl_room', 'tbl_Checkin.room_no = tbl_room.id ', 'left');
		
		$this->db->where('date_in' , $today );
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
    
    function last_week_checkin()
    {
    
		$today = date('m/d/Y',time()) ;  
		$last_week = date('m/d/Y',time()-(7*86400)) ;  
		
		$this->db->select('*');
		$this->db->select('tbl_room.room_no as room_number');
		
		$this->db->from('tbl_Checkin');
		
		$this->db->join('tbl_room', 'tbl_Checkin.room_no = tbl_room.id ', 'left');
		
		$this->db->where('date_in >= ' ,  $last_week );
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
 
}
?>	
