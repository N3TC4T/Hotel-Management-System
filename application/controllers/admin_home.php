<?php
class Admin_home extends CI_Controller {

 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        
        //Load language Content 
        $this->load->helper('language');
        

    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

        $this->load->view('home');  

    }//index



}