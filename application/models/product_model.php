<?php 

class Product_model extends CI_Model {

 function __construct()
    {
       parent::__construct();
   $this->load->database();

          }

    function lookup($p_type)
    {





        if ($p_type == null || $p_type  == '') {
                return false;
        }
//$this->db->select('category', 'product_name');
$this->db->where('first_name',$p_type);

// get the table
$res = $this->db->get('employees');



$data = $res->result_array();     


//$data = $res->row_array(); 
/*

       $data =$res-> array();
        foreach($input AS $i)
        {
            $data[$i[$key]] = $i;
        }
        return $data;*/

        $res->free_result();
       return $data;
//return array('mode' => 'UG');


}       
      
    }
