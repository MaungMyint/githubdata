<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_ctrl extends CI_Controller {
	public function create()
	{				// view >> welcome.php

 		
		$data['innerdata']="shop/create";
		$this->load->view('maintemplate',$data);
	}

	public function read(){	
 		$data['categorylist'] = $this->Shop_mdl->read();
		$data['innerdata']="shop/read";
		$this->load->view('maintemplate',$data);
	
	}	
}