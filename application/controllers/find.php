<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Find extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
         $this->load->model("employee_model");
    }
 
     
public function index()
{
    
} 
    
    public function findemp()
{        
    
    
       // $this->load->view('empLogin_view');
       $name =$this->input->get('firstname');
       $lastname =$this->input->get('lastname');
       $department =$this->input->get('dept');
       $jobtitle =$this->input->get('jobtitle');
       
       $name = $this->employee_model->getsearch($name,$lastname,$department,$jobtitle);
       echo json_encode($name);
} 
 

 
}