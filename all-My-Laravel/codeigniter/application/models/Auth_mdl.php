<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_mdl extends CI_Model 
{
public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$this->db->where('password', SHA1($password));
		$this->db->limit(1);
		$query = $this->db->get()->row_array();
		// var_dump($query);die();
		return $query;
		
	
	
}

}


