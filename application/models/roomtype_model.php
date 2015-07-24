<?php
class RoomType_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get roomtype by his is
    * @param int $roomtype_id 
    * @return array
    */
    public function get_roomtype_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('tbl_RoomType');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    
    
    /**
    * Get free roomtype 
    * @return array
    */
    public function get_roomtype_all()
    {
		$this->db->select('*');
		$this->db->from('tbl_RoomType');
		$query = $this->db->get();
		return $query->result_array(); 
    }      

    /**
    * Fetch roomtype data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_roomtype($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
	
		
		$this->db->from('tbl_RoomType');
		

		if($search_string){
			$this->db->like('type', $search_string);
		}
		$this->db->group_by('tbl_RoomType.id');

		    $this->db->order_by('tbl_RoomType.id', $order_type);


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
    function count_roomtype($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('tbl_RoomType');
		if($search_string){
			$this->db->like('type', $search_string);
		}

		    $this->db->order_by('tbl_RoomType.id', 'Asc');

		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_roomtype($data)
    {
            $insert = $this->db->insert('tbl_RoomType', $data);
	    return $insert;
	}

    /**
    * Update roomtype
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_roomtype($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('tbl_RoomType', $data);
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
    * Delete roomtyper
    * @param int $id - roomtype id
    * @return boolean
    */
	function delete_roomtype($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_RoomType'); 
	}
 
}
?>	
