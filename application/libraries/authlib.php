<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Authlib {
 
    function __construct()
    {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();
 
        $this->ci->load->model('employee_model');
 
    }
  
  public function login($user,$pwd)
{
    if ($user == '' || $pwd == '') {
        return false;
    }
    return $this->ci->employee_model->login($user,$pwd);
}
    
    public function is_loggedin()
    {
        return $this->ci->employee_model->is_loggedin();
        
    }
    
    
}