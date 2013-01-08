<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {
    
    function __construct()
    {
       parent::__construct();
   $this->load->database();

          }

public function getsearch_user($name,$lastname,$department,$jobtitle)
    
    {
        if ($lastname!=''){  $this->db->where('last_name',$lastname);}
         if ($department!=''){  $this->db->where('dept_name',$department);}
          if ($jobtitle!=''){  $this->db->where('title',$jobtitle);}
      $this->db->where('first_name',$name);
      $this->db->from('employees', 10, 20);
      $this->db->join('titles', 'titles.emp_no = employees.emp_no');
      $this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
      $this->db->join('departments', 'departments.dept_no = dept_emp.dept_no');
      //  $this->db->select('product_title');
       // $res = $this->db->get('employees');
        $query = $this->db->get();
       // $rowcount = $query->num_rows();
        $data = $query->result_array();  
     
       return $data;
         
         
    }

public function getsearch_admin($name,$lastname,$department,$jobtitle)
    
    {
        if ($lastname!=''){  $this->db->where('last_name',$lastname);}
         if ($department!=''){  $this->db->where('dept_name',$department);}
          if ($jobtitle!=''){  $this->db->where('title',$jobtitle);}
      $this->db->where('first_name',$name);
      $this->db->from('employees', 10, 20);
      $this->db->join('titles', 'titles.emp_no = employees.emp_no');
      $this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
      $this->db->join('departments', 'departments.dept_no = dept_emp.dept_no');
      $this->db->join('salaries', 'salaries.emp_no = employees.emp_no');
      //  $this->db->select('product_title');
       // $res = $this->db->get('employees');
        $query = $this->db->get();
       // $rowcount = $query->num_rows();
        $data = $query->result_array();  

       return $data;
         
         
    }

 public function getsearch1($name,$lastname,$department,$jobtitle)
    
    {
        if ($lastname!=''){  $this->db->where('last_name',$lastname);}
         if ($department!=''){  $this->db->where('dept_name',$department);}
          if ($jobtitle!=''){  $this->db->where('title',$jobtitle);}
      $this->db->where('first_name',$name);
      $this->db->from('employees', 10, 20);
      $this->db->join('titles', 'titles.emp_no = employees.emp_no');
      $this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
      $this->db->join('departments', 'departments.dept_no = dept_emp.dept_no');
      //  $this->db->select('product_title');
       // $res = $this->db->get('employees');
        $query = $this->db->get();
       // $rowcount = $query->num_rows();
        $data = $query->result_array();  
       
       return $data;
         
         
    }
    
    
    public function getsearch($name,$lastname,$department,$jobtitle)
    
    {
        if ($lastname!=''){  $this->db->where('last_name',$lastname);}
         if ($department!=''){  $this->db->where('dept_name',$department);}
          if ($jobtitle!=''){  $this->db->where('title',$jobtitle);}
      $this->db->where('first_name',$name);
      $this->db->from('employees', 10, 20);
      $this->db->join('titles', 'titles.emp_no = employees.emp_no');
      $this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
      $this->db->join('departments', 'departments.dept_no = dept_emp.dept_no');
      //  $this->db->select('product_title');
       // $res = $this->db->get('employees');
        $query = $this->db->get();
       // $rowcount = $query->num_rows();
        $data = $query->result_array();  
       $data1['count'] = count($data);
        $data1['results'] = $data;
        
       
       return $data1;
         
         
    }
    
    function login($username,$pwd)
{
    $this->db->where(array('username' => $username,'password' => sha1($pwd)));
    $res = $this->db->get('users',array('emp_no'));
    if ($res->num_rows() != 1) { // should be only ONE matching row!!
        return false;
            }
            
            // remember login
    $session_id = $this->session->userdata('session_id');
    // remember current login
    $row = $res->row_array();
    $this->db->insert('logins',array('emp_no' => $row['emp_no'],'session_id' => $session_id));
    return $res->row_array();
   
}

function is_loggedin()
{
    $session_id = $this->session->userdata('session_id');
    $res = $this->db->get_where('logins',array('session_id' => $session_id));
    if ($res->num_rows() == 1) {
        $row = $res->row_array();
        return $row['emp_no'];
    }
    else {
        return false;
    }
}

public function is_manager(){
    
    $session_id = $this->session->userdata('session_id');
   $res1 = $this->db->get_where('logins',array('session_id' => $session_id)); 
    $row1 = $res1->row_array();
       $empno1=  $row1['emp_no'];
       
    $this->db->where('emp_no',$empno1);
     $this->db->from('dept_manager');
      $res = $this->db->get();
      
      if ($res->num_rows() == 1) {
        $row = $res->row_array();
        return $row['emp_no'];
    }
    else {
        return false;
    }
}

 
}