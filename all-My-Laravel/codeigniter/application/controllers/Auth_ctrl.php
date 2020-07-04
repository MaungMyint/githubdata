<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_ctrl extends CI_Controller {
 

 	public function index() //parent call here 
 	{

 		$this->load->view('login');
 	}


 	public function authentication() //parent call here 
 	{

	
		$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean');
		
		if ($this->form_validation->run() ==FALSE) 
		{
			$this->load->view('login');
		}
		else
		{
			$result = $this->Auth_mdl->login();
			// var_dump($result);
			if ($result) 
			{
				 
				
					$sess_data = array(
                        'id' 	=> $row['id'],
                        'email' => $row['email']
                    );
				
				
				$this->session->set_userdata('logged_in', $sess_data);
                
                redirect('category');
			}
			else
			{
				$data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('login', $data);
			}	
		}
	}


 	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		
		$this->load->view('login');
	}
}