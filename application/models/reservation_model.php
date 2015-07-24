<?php
class Reservation_model extends CI_Model {
 
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
    public function get_reservation_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('tbl_Reservation');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }  
    
    
    public function get_fields()
    
    {
    
    $fields = $this->db->list_fields('tbl_Reservation');
    return $fields ; 
    }

    /**
    * Fetch reservation data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_reservation($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->select('tbl_customer.Family as Family');
		$this->db->select('tbl_room.room_no as room_no');
		$this->db->from('tbl_Reservation');
		$this->db->join('tbl_customer', 'tbl_Reservation.customer_id = tbl_customer.id ', 'left');
		$this->db->join('tbl_room', 'tbl_Reservation.room_id = tbl_room.id ', 'left');

		if($search_string){
			$this->db->like('Family', $search_string);
		}
		$this->db->group_by('tbl_Reservation.id');

		if($order){
			$this->db->order_by('tbl_Reservation.' . $order, $order_type);
		}else{
		    $this->db->order_by('tbl_Reservation.id', $order_type);
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
    function count_reservation($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->select('tbl_customer.Family as Family');
		$this->db->from('tbl_Reservation');
		$this->db->join('tbl_customer', 'tbl_Reservation.customer_id = tbl_customer.id ', 'left');
		
		if($search_string){
			$this->db->like('Family', $search_string);
		}
		if($order){
			$this->db->order_by('tbl_Reservation.' . $order, 'Asc');
		}else{
		    $this->db->order_by('tbl_Reservation.id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_reservation($data)
    {
	    $insert = $this->db->insert('tbl_Reservation', $data);
	    return $insert;
	}

    /**
    * Update reservation
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_reservation($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('tbl_Reservation', $data);
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
    * Delete reservation
    * @param int $id - reservation id
    * @return boolean
    */
	function delete_reservation($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_Reservation'); 
	}
	
	
	
	function verify($id){
	   
	   $data = array(
	    'confirmed' => '1'
	   );
		
	   $this->db->where('id = ' . $id);
	   $this->db->update('tbl_Reservation', $data);
	}
	

 
}
?>	
