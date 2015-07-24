<?php
class Dashboard_model extends CI_Model {
 
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
    public function count_customer()
    {
		$this->db->select('*');
		$this->db->from('tbl_customer');
		$query = $this->db->get();
		return $query->num_rows();  
    }    

    public function count_today_reserv()
    {
		$this->db->select('*');
		$this->db->from('tbl_Reservation');
		$this->db->where('checkin_data',date("m/d/Y"));
		$query = $this->db->get();
		return $query->num_rows();  
    }
    
    public function count_today_checkout()
    {
		$this->db->select('*');
		$this->db->from('tbl_Checkin');
		$this->db->where('date_out <= "' . date("m/d/Y") . '" OR date_out = "' . date("m/d/Y") . '"' );
		$query = $this->db->get();
		return $query->num_rows();  
    }
	
	
	public function count_not_verifyed()
    {
		$this->db->select('*');
		$this->db->from('tbl_customer');
		$this->db->where('verifyed',0);
		$query = $this->db->get();
		return $query->num_rows();  
    }    
    
    
 
}
?>	
