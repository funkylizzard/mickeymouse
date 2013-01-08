<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
        
        
        $this->load->library('authlib');
    $loggedin = $this->authlib->is_loggedin();
 
    if ($loggedin === false) {
        $this->load->helper('url');
         //redirect('/auth/home');
         
         $this->load->view('home_view');
 
    }
    
    else {
            $this->load->view('user_logged_view',array('emp_no' => $loggedin));}
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */