<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class phonecontroller extends CI_Controller {

	public function index()
	{
		// $this->load->view('showphone');


		$query=$this->phonemodel->lodedata();





	}



}
