<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ShowProducts extends CI_Controller {

    
    public function __construct() {        
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
        $this->load->model('product_model');
    }
	public function index()
	{
        $result['active_and_verified_user'] = $this->user_model->get_verified_active();
        $result['active_user_with_products'] = $this->user_model->get_attached_active_users();
        $result['active_product'] = $this->product_model->get_active_product();
        $result['product_without_user'] = $this->product_model->get_product_without_user();
        $result['amount_of_all_active_attached_products'] = $this->product_model->amount_of_all_active_attached_products();
        $result['summarized_prices_active_attached_product'] = $this->product_model->summarized_prices_active_attached_product();
        $result['summarized_prices_for_active_product_per_user'] = $this->product_model->summarized_prices_for_active_product_per_user();
    
		$this->load->view('show_product_count',$result);
	}
}

?>