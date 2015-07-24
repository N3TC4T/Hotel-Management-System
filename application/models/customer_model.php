<?php
class Customer_model extends CI_Model {
 
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
    public function get_customer_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('tbl_customer');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }  
    
    
    public function get_fields()
    
    {
    
    $fields = $this->db->list_fields('tbl_customer');
    return $fields ; 
    }

    /**
    * Fetch customer data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_customer($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->from('tbl_customer');

		if($search_string){
			$this->db->like('Family', $search_string);
		}
		$this->db->group_by('id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id', $order_type);
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
    function count_customer($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('tbl_customer');
		if($search_string){
			$this->db->like('Family', $search_string);
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
    function store_customer($data)
    {
	    $insert = $this->db->insert('tbl_customer', $data);
	    return $insert;
	}

    /**
    * Update customer
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_customer($id, $data)
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

    /**
    * Delete customerr
    * @param int $id - customer id
    * @return boolean
    */
	function delete_customer($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_customer'); 
	}
	
    /**
    * Delete customerr
    * @param int $id - customer id
    * @return boolean
    */	
    
	function Search_customer($Family){
		
		$this->db->select('*');
		$this->db->from('tbl_customer');
		$this->db->like('Family', $Family);
		$query = $this->db->get();
		return $query->result_array(); 	
	}
	
	
	function verify($id){
	   
	   $data = array(
	    'verifyed' => '1'
	   );
		
	   $this->db->where('id = ' . $id);
	   $this->db->update('tbl_customer', $data);
	}
	

 
}
?>	
