<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product  extends CI_Controller {

public function __construct()
        {
                parent::__construct();
              $this->load->model('product_model');
        }

	
	public function index()
	{
		$this->load->view('product_lookup');
	}

      public function find()

{

$p_type = $this->input->post('product_type');

$products = $this->product_model->lookup($p_type);

$data['name'] = $products;
               
$this->load->view('product_display',$data );

}


}
