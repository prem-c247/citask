<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function get_active_product()
	{
		$this->db->select('id');
		$this->db->where(['status'=>1]);
		$query = $this->db->get('products');
		return $query->num_rows();
	}
    public function get_product_without_user(){
		$this->db->select('id');
		$this->db->where(['status'=>1]);
		$this->db->where('user_id is NULL', null,FALSE);
		$query = $this->db->get('products');
		return $query->num_rows();
	}
    public function amount_of_all_active_attached_products(){
		$this->db->select('id');
		$this->db->where(['status'=>1]);
		$this->db->where('user_id is NOT NULL', null,FALSE);
		$query = $this->db->get('products');
		return $query->num_rows();
	}
    public function summarized_prices_active_attached_product(){
		$this->db->select_sum('price');
		$this->db->where(['status'=>1]);
		$this->db->where('user_id is NOT NULL', null,FALSE);
		$query = $this->db->get('products');
		return $query->result_array();
	}
    public function summarized_prices_for_active_product_per_user(){
		$this->db->select("CONCAT( (first_name),(' '),(last_name)) AS user_name");
        $this->db->select_sum('price');
		$this->db->where(['p.status'=>1]);
		$this->db->where('p.user_id is NOT NULL', null);
        $this->db->join('users as u', 'u.id = p.user_id', 'left');
        $this->db->group_by('p.user_id');
		$query = $this->db->get('products as p');
		return $query->result_array();
	}
    
}


?>