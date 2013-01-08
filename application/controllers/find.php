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
 
    public function findemp1()
{            
    
       // $this->load->view('empLogin_view');
       $name1 =$this->input->get('firstname');
       $lastname1 =$this->input->get('lastname');
       $department1 =$this->input->get('dept');
       $jobtitle1 =$this->input->get('jobtitle');
       
       $name = $this->employee_model->getsearch1($name1,$lastname1,$department1,$jobtitle1);
       echo json_encode($name);
} 
 
 public function findemp_admin()
{            
    
       // $this->load->view('empLogin_view');
       $name1 =$this->input->get('firstname');
       $lastname1 =$this->input->get('lastname');
       $department1 =$this->input->get('dept');
       $jobtitle1 =$this->input->get('jobtitle');
       
       $name = $this->employee_model->getsearch_admin($name1,$lastname1,$department1,$jobtitle1);
       echo json_encode($name);
} 

 public function findemp_user()
{            
    
       // $this->load->view('empLogin_view');
       $name1 =$this->input->get('firstname');
       $lastname1 =$this->input->get('lastname');
       $department1 =$this->input->get('dept');
       $jobtitle1 =$this->input->get('jobtitle');
       
       $name = $this->employee_model->getsearch_user($name1,$lastname1,$department1,$jobtitle1);
       echo json_encode($name);
} 
 
 public function load_emp(){
    
    $empno = $this->input->get('emp_no');
    $first_name = $this->input->get('fname');
     $last_name = $this->input->get('lname');
     $dept_name = $this->input->get('dept_name');
      $title = $this->input->get('title');
       $birth_date = $this->input->get('birth_date');
        $hire_date = $this->input->get('hire_date');
         $gender = $this->input->get('gender');
          $salary = $this->input->get('salary');
           
   $data['name']= array ($empno,$first_name,$last_name,$dept_name,$title,$birth_date, $hire_date,$gender,$salary   );
    //
     $this->load->view('emp_details_view',$data);
    
 }
 
  public function load_emp1(){
    
    $empno = $this->input->get('emp_no');
    $first_name = $this->input->get('fname');
     $last_name = $this->input->get('lname');
     $dept_name = $this->input->get('dept_name');
      $title = $this->input->get('title');
       $birth_date = $this->input->get('birth_date');
        $hire_date = $this->input->get('hire_date');
         $gender = $this->input->get('gender');
      
           
   $data['name']= array ($empno,$first_name,$last_name,$dept_name,$title,$birth_date, $hire_date,$gender   );
    //
     $this->load->view('emp_details_user',$data);
    
 }
 
}