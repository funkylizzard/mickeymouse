<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_con  extends CI_Controller {

public function __construct()
        {
                parent::__construct();
              $this->load->model('test_model');
        }

	
	public function index()
	{
		$this->load->view('test_view');
	}

      public function find()

{

$p_type = $this->input->post('name');

$products = $this->test_model->lookup($p_type);

$data['name'] = $products;
               
$this->load->view('test_view2',$data );

}


}
