<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_ctrl extends CI_Controller {
 var $name;  //declare here  child class
 var $country;
 var  $color;
 function __construct(){
 	parent::__construct();
 	$this->name=" Mg mg";
 	$this->country="YGN";
 	$this->color="red";

 }

 	function index() //parent call here 
 	{
 		$data['name']= $this->name;
 		$data['country']= $this->country;
 		$data['color']= $this->color;
 		$this->load->view('hello_view',$data); //file name by data 
 	}
 	function test()
 	{
 		echo"TESTING";
 	}
	
}
