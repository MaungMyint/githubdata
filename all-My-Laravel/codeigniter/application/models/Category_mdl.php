<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_mdl extends CI_Model {
 

 	public function read()
 	{
 		$this->db->select('*');
 			$this->db->from('cagtagories');
 			$this->db->order_by('catagories_name','ASC');
 			 $sql=$this->db->get();
 			 return $sql->result();
 	}
 	public function save()
 	{
 		 $name=$this->input->post('categoryname');
 		 $image=$this->Category_mdl->upload_img('photo');
 		 $categorydata= array('catagories_name' => $name,'catagories_logo' =>$image)
		;
			$result=$this->db->insert('cagtagories',$categorydata);
				return $result;


 	}
 	public function upload_img($image)
 	{
 		$file= $_FILES[$image]['name'];//jpg file	 name
 		$filepath='image/category/'.$file; //save to folder
 		$config['upload_path'] = 'image/category/'; 	
 		$config['allowed_types']='gif|jpg|jpeg|png';
 		$this->load->library('upload' ,$config);
 		if($this->upload->do_upload($image))
 		{
 			$imagefile=$filepath;
 		}
 		else
 		{
 				$imagefile=$this->upload->display_errors();
 		}
 				return $imagefile;

 	}


 		public function delete($id)
 		{
 			$sql= "DELETE FROM cagtagories WHERE catagories_id=".$id;
 			return $this->db->query($sql);

 		}


 		public function edit($id)
 		{
 			$this->db->select('*');
 			$this->db->from('cagtagories');
 			$this->db->where('catagories_id',$id);
 			 $sql=$this->db->get();
 			 return $sql->row_array();// for edit value result

 
 		}



 		public function update()
 	{
 		if ($_FILES['newphoto']['name'] === NULL) {
 			$image=$this->input->post('oldphoto');
 		}else
 		{
 			$image=$this->Category_mdl->upload_img('newphoto');
 		}
 		$id=$this->input->post('id');
 		$name=$this->input->post('categoryname');
 		$categorydata=array('catagories_name' =>$name,'catagories_logo'=>$image);
 		$this->db->where("catagories_id",$id);
 		$result=$this->db->update("cagtagories",$categorydata);
 		return $result;
 	}
	







	
}
