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
  public function insert($insert)
  {
    //print_r($adddata);
    $this->db->insert('tb_phone',$insert);
  }

  public function deletedata($deletedata)
  {
    //print_r($adddata);
  $this->db->where('id_phone',$deletedata)
  ->delete('tb_phone');
  }
  public function update($editdata)
  {
  $this->db
  ->where('id_phone',$editdata['id_phone'])
  ->update('tb_phone',$editdata);

  }
  public function lodedatabyid($id)
  {

  $a=$this->db
  ->where('id_phone',$id)
  ->get('tb_phone')
  ->result_array();
  return $a;
  }
}
