<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_verified_active()
	{
		$this->db->select('id');
		$this->db->where(['status'=>1,'is_user_verified'=>1]);
		$query = $this->db->get('users');
		return $query->num_rows();
	}
	public function get_attached_active_users(){
		
		$this->db->select('u.id');
		$this->db->from('users as u');
		$this->db->where(['u.status'=> 1,'u.is_user_verified'=>1]);
		$this->db->join('products as p', 'p.user_id = u.id', 'left');
		$this->db->where('p.status', 1);
		$query = $this->db->get(); 
		return $query->num_rows();
	}
}


?>