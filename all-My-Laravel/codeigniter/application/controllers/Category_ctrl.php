<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_ctrl extends CI_Controller {
 

 	function index() //parent call here 
 	{
 		$data['categorylist'] = $this->Category_mdl->read();
 		 $data['innerdata'] = "category/read";
 		$this->load->view('maintemplate',$data); //file name by data 
 	}
 	public function create()

 	{
 		$data['innerdata'] = "category/create";
 		$this->load->view('maintemplate',$data);	
 	}
 	public function save()
 	{
 		//validation here
 		$this->form_validation->set_rules('categoryname','Category Name','trim|required|xss_clean|is_unique[cagtagories.catagories_name]|min_length[2]');
 				if ($this->form_validation->run() === FALSE) {
 					$data['innerdata'] = "category/create";
 					$this->load->view('maintemplate',$data);

 				}else
 				{
 						$this->Category_mdl->save();
 						$this->session->set_flashdata('success','New Category is added in yuor database');
			
 						redirect('category');
 				}




 	}
 	public function delete()
 	{
 		$id=$this->uri->segment(3);
 		$this->session->set_flashdata('success','You have delete the database');
 		$this->Category_mdl->delete($id);
 		redirect('category');
 	}
 	

 	public function edit()
 	{
 		$id=$this->uri->segment(3);

 		$data['categorylist'] = $this->Category_mdl->edit($id);
 		$data['innerdata'] = "category/edit";
 		$this->load->view('maintemplate',$data);	
 	

 	}

 			public function update(){
 				$result=$this->Category_mdl->update();
 				if($result){
 					$this->session->set_flashdata('success',"Edit ok");
 					redirect('category');
 				}
 			}
 	}		