 <?php
class Member_dashboard extends CI_Controller {

    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'member/dashboard';
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        
        
        $this->load->model('member_model');

        if(!$this->session->userdata('logged_in')){
            redirect('/');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
        $user_name = $this->session->userdata('user_name') ;
        $data['profile']= $this->member_model->get_profile($user_name);
        $data['bookings'] = $this->member_model->get_reservations($user_name); 
        $data['main_content'] = 'member/dashboard/index';
        $this->load->view('member/template', $data);  

    }//index
    
     public function search_rooms()
    {
    
        $checkin =  $this->input->get_post('date_in');
        $checkout =  $this->input->get_post('date_out');
        $adult =  $this->input->get_post('adult');
        $child =  $this->input->get_post('child');
        $result=$this->member_model->Search_room($checkin , $checkout , $adult , $child);
        echo json_encode (array($result));
        
    }//search
    
    
    public function add_reserve()
    {

          $data_to_store = array(
                    'Customer_id' => $this->input->post('Customer_id'),
                    'room_id' => $this->input->post('room_id'),
                    'checkin_data' => $this->input->post('date_in'),
                    'checkout_data' => $this->input->post('date_out'),
                    'reservation_date' => date("m/d/Y")                         
                );
                //if the insert has returned true then we show the flash message
                
                $this->member_model->add_reserve($data_to_store) ; 
    }
    
    
    
    
	public function update_profile()
    {
        //customer id 
        $id = $this->input->post('id');
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
    
                $data_to_store = array(
                    'Name' => $this->input->post('Name'),
                    'Family' => $this->input->post('Family'),
                    'Age' => $this->input->post('Age'),
                    'Passport' => $this->input->post('Passport'),
                    'Mobile' => $this->input->post('Mobile'),
                    'Country' => $this->input->post('Country'),
                    'Nationality' => $this->input->post('Nationality'),
                    'City' => $this->input->post('City'),
                    'credit_card' => $this->input->post('credit_card'),
                    'Company' => $this->input->post('Company'),
                    'Adress' => $this->input->post('Adress'),
                    'Note' => $this->input->post('Note'),                                    
                );
                //if the insert has returned true then we show the flash message
                if($this->member_model->update_profile($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('member/dashboard/');


        }          

    }//update    
    
    
    public function cancel_reserve()
    {
        $id = $this->uri->segment(4);
        $this->member_model->cancel_reserve($id);
        redirect('member/dashboard');
    }//Delete    
    
    



}
