<?php
class Room_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get room by his is
    * @param int $room_id 
    * @return array
    */
    public function get_room_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('tbl_room');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
    
    /**
    * Get free room 
    * @return array
    */
    public function get_free_room()
    {
		$this->db->select('*');
		$this->db->from('tbl_room');
		$this->db->where('status = 0 ');
		$query = $this->db->get();
		return $query->result_array(); 
    }   
    
    public function get_busy_room()
    {
		$this->db->select('*');
		$this->db->from('tbl_room');
		$this->db->where('status = 1 ');
		$query = $this->db->get();
		return $query->result_array(); 
    }   

    public function get_room($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->select('tbl_RoomType.type as type');
		$this->db->select('tbl_room.id as id');
		
		$this->db->from('tbl_room');
		
		$this->db->join('tbl_RoomType', 'tbl_room.type_id = tbl_RoomType.id ', 'left');

		if($search_string){
			$this->db->like('name', $search_string);
		}
		$this->db->group_by('tbl_room.id');

		if($order){
			$this->db->order_by('tbl_room.' + $order, $order_type);
		}else{
		    $this->db->order_by('tbl_room.id', $order_type);
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
    function count_room($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('tbl_room');
		if($search_string){
			$this->db->like('room_no', $search_string);
		}
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
    function store_room($data)
    {
            $insert = $this->db->insert('tbl_room', $data);
	    return $insert;
	}

    /**
    * Update room
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_room($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('tbl_room', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}

    /**
    * Delete roomr
    * @param int $id - room id
    * @return boolean
    */
	function delete_room($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_room'); 
	}
	
	
        function get_by_type($type){
		
		$this->db->select('tbl_room.id');
		$this->db->select('room_no');
		
		$this->db->select('tbl_RoomType.price as price');
		
		$this->db->from('tbl_room');
		
		$this->db->join('tbl_RoomType', 'tbl_room.type_id = tbl_RoomType.id ', 'left');
		
		$this->db->where('type_id', $type);
		$this->db->where('status = 0 ');
		$query = $this->db->get();
		return $query->result_array(); 	
	}
	
	
	
    public function get_fields()
    
    {
    
    $fields = $this->db->list_fields('tbl_room');
    return $fields ; 
    }
 
}
?>	
