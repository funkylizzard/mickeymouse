<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
         // $this->load->model("employee_model");
          $this->load->library('authlib');
    }
 
     
public function index()
{
      redirect('/auth/login');
} 
    
    public function login()
{
          $data['errmsg'] = '';
       $this->load->view('empLogin_view',$data);
       
}
 
public function authenticate() 
{
         
    $username = $this->input->post('uname');
    $password = $this->input->post('pword');
    
        
    $user = $this->authlib->login($username,$password);
    if ($user !== false) {
        $ismanager = $this->authlib->is_manager();
        if ($ismanager === false){
          $this->load->view('user_logged_view',array('emp_no' => $user['emp_no']));
            }
            
        else  {
            
            $this->load->view('admin_logged_view');
        } 
        
       
    }
    else {
        $data['errmsg'] = 'Unable to login - please try again';
        $this->load->view('empLogin_view',$data);
    }
    
 }
 
  public function home(){
    
        
        $this->load->view('home_view');
 }
 
 
 
 public function logout(){
    
    $this->session->sess_destroy();
    
        redirect('/auth/login');
 }
  
 
}