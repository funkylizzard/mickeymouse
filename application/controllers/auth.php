<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
          $this->load->model("employee_model");
    }
 
     
public function index()
{
     $this->load->view('empLogin_view');
} 
    
    public function login()
{
        $this->load->view('empLogin_view');
}
 
public function authenticate() 
{
    $username = $this->input->post('uname');
    $password = $this->input->post('pword');
    
    $user = $this->authlib->login($username,$password);
    if ($user !== false) {
        $this->load->view('homepage',array('name' => $user['name']));
    }
    else {
        $data['errmsg'] = 'Unable to login - please try again';
        $this->load->view('login_view',$data);
    }
 }
 
 public function logout(){
    
    $this->session->sess_destroy();
    
        redirect('/auth/login');
 }
  
 
}