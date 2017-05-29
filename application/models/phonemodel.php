<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  phonemodel  extends CI_Model {


	public function lodedata()
	{

		$a=$this->db
		->get('tb_phone')
		->result_array();
    return $a;
	}
