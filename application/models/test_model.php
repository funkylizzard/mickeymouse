<?php 

class Test_model extends CI_Model {

 function __construct()
    {
       parent::__construct();
   $this->load->database();

          }

    function lookup($name)
    {

$id =10001;

     //$this->db->where('emp_no',$id);
    // $this->db->select('first_name');
       //$res = $this->db->get('employees');
      // $res =  $this->db->get('employees', 10, 20);
       $query = $this->db->get('employees', 10, 20);
        $data = $query->result();  
         return $data;

}       
      
    }
