<?php
class Admin_dashboard extends CI_Controller {

    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'customer/dashboard';
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        
        //Load language Content 
        $this->load->helper('language');
        $this->lang->load("content", $this->session->userdata('language'));
        
        $this->load->model('dashboard_model');

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

         
 	$data['customer_count'] = $this->dashboard_model->count_customer();
 	$data['today_reserv'] = $this->dashboard_model->count_today_reserv();
 	$data['today_checkout'] = $this->dashboard_model->count_today_checkout();
 	$data['not_verifued'] = $this->dashboard_model->count_not_verifyed();
        //load the view
        $data['main_content'] = 'admin/dashboard/index';
        $this->load->view('includes/template', $data);  

    }//index



}
