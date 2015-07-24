<?php

class Member extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        
        $this->load->library('form_validation');
        
        //Load language Content 
        $this->load->helper('language');
        $this->lang->load("content", $this->session->userdata('language'));

        
    }
    
    
	function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('admin/dashboard/');
        }else{
        	$this->load->view('admin/login');	
        }
	}

    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{	

		$user_name = $this->input->post('user_name');
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->member_model->validate($user_name, $password);
		
		if($is_valid)
		{
			$data = array(
				'user_name' => $user_name,
				'is_member' => true,
				'logged_in' => true,
				
			);
			$this->session->set_userdata($data);
			redirect('member/dashboard/');
		}
		else // incorrect username or password
		{
			$data['login'] = TRUE;
			$this->load->view('home', $data);	
		}
	}	

    /**
    * The method just loads the signup view
    * @return void
    */
    
    public function signup()
    {
    
               
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('Name', 'Name', 'trim|required');
		$this->form_validation->set_rules('Family', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
		
		if($this->form_validation->run() == TRUE)
		{
          
		$email =  $this->input->post('email') ;
                $data_to_store = array(
                    'Name' => $this->input->post('Name'),
                    'Family' => $this->input->post('Family'),
                    'credit_card' => $this->input->post('credit_card'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                );
                //if the insert has returned true then we show the flash message
                if($this->member_model->signup($data_to_store , $email)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }
                 $this->load->view('home',$data);
                
                }else{
                 
                  $data['flash_message'] = FALSE; 
                  $this->load->view('home',$data);			
                  
                }

         
       
    
    }
	

	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}
