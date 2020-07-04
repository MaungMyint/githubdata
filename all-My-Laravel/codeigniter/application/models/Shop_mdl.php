<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_mdl extends CI_Model {


 		public function read()
 	{
 		$this->db->select('*');
 			$this->db->from('shop');
 			$this->db->order_by('shop_name','ASC');
 			 $sql=$this->db->get();
 			 return $sql->result();
 	}
}
