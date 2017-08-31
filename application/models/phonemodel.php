<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  phonemodel  extends CI_Model {


	public function lodedata()
	{

		$a=$this->db
    //->join('tb_type','tb_phone.type_id =  tb_type.type_id','left')
		->get('product')
		->result_array();
    return $a;
	}
  // public function read_type(){
  //   $db=$this->db
  // ->get('tb_type')
  // ->result_array();
  // return $db;
  // }

  public function insert($insert)
  {
    //print_r($adddata);
    $this->db->insert('product',$insert);
  }

  public function deletedata($deletedata)
  {
    //print_r($adddata);
  $this->db->where('Pro_id',$deletedata)
  ->delete('product');
  }
  public function update($editdata)
  {
  $this->db
  ->where('Pro_id',$editdata['Pro_id'])
  ->update('product',$editdata);

  }
  public function lodedatabyid($id)
  {

  $a=$this->db
  ->where('Pro_id',$id)
  ->get('Pro_id')
  ->result_array();
  return $a;
  }
}
