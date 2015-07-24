<?php


class Admin_report extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->model('checkin_model');
        $this->load->model('checkout_model');
        $this->load->model('room_model');
        
        //Load language Content 
        $this->load->helper('language');
        $this->lang->load("content", $this->session->userdata('language'));
        

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
    
    
	function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('admin/dashboard/');
        }else{
        	$this->load->view('admin/login');	
        }
	}

	
	
	function customer_report()
	{
	
	
	$data['fields'] = $this->customer_model->get_fields();
	$data['data']  = $this->customer_model->get_customer();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	
        function  checkin_report()
	{
	
	
	$data['fields'] = $this->checkin_model->get_fields();
	$data['data']  = $this->checkin_model->get_checkin();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	
	function  checkout_report()
	{
	
	
	$data['fields'] = $this->checkout_model->get_fields();
	$data['data']  = $this->checkout_model->get_checkout();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	function  today_checkin()
	{
	
	
	$data['fields'] = $this->checkin_model->get_fields();
	$data['data']  = $this->checkin_model->today_checkin();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	function  last_week_checkin()
	{
	
	
	$data['fields'] = $this->checkin_model->get_fields();
	$data['data']  = $this->checkin_model->last_week_checkin();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	function  today_checkout()
	{
	
	
	$data['fields'] = $this->checkout_model->get_fields();
	$data['data']  = $this->checkout_model->today_checkout();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	function  last_week_checkout()
	{
	
	
	$data['fields'] = $this->checkout_model->get_fields();
	$data['data']  = $this->checkout_model->last_week_checkout();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	
	function  room_report()
	{
	
	
	$data['fields'] = $this->room_model->get_fields();
	$data['data']  = $this->room_model->get_room();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	function  free_room()
	{
	
	
	$data['fields'] = $this->room_model->get_fields();
	$data['data']  = $this->room_model->get_free_room();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	function  busy_room()
	{
	
	
	$data['fields'] = $this->room_model->get_fields();
	$data['data']  = $this->room_model->get_busy_room();
	
	
	$data['main_content'] = 'admin/report';
        $this->load->view('includes/template', $data); 
	
	}
	
	
	
	
	
	

}