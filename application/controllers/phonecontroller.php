<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class phonecontroller extends CI_Controller {

	public function loadpage($value){
		 $this->load->view('template/front/header');
		 $this->load->view('template/front/sidebar');
		$this->load->view($value['view'],$value['result']);
		 $this->load->view('template/front/footer');
	}

	public function index()
	{
		$query=$this->phonemodel->lodedata();
		$value = array(
			'result' => array(
				'data' => $query
			),
			'view'=>'showphone'
		);
		$this->loadpage($value);
	}


		public function test()
		{

			$data=$this->phonemodel->lodedata();
			$value=array(
				'data'=>$data
			);
			$this->load->view('showphone',$value);
		}


		public function insert()
		{
			$adddata=$this->input->post();
			$pathinfo = pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;

			move_uploaded_file($_FILES['img']['tmp_name'],"image/".$new_file);

			$adddata['img']=$new_file;
	    $this->phonemodel->insert($adddata);
	    redirect('phonecontroller');
		}


	public function  addphone()
	{

		$type=$this->pmodel->read_province();
		$value = array(
		'result' => array(
				'type'=>$type
		),
		'view'=>'insert'

	);
	$this->loadpage($value);
	}



	public function  update()
	{
	$id=$this->uri->segment(3);
	$query=$this->phonemodel->lodedatabyid($id);
	$value=array(
		'result'=>array(
			'data'=>$query
		),
		'view'=>'update'
	);
	$this->loadpage($value);
	}
	 public function  edit()
 {
	  	$editdata=$this->input->post();
	 	if (!empty($_FILES['s_image']['name'])) {
	 		$pathinfo = pathinfo($_FILES['s_image']['name'],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;

	 		move_uploaded_file($_FILES['s_image']['tmp_name'],"image/".$new_file);
			$editdata['s_image']=$new_file;
		}
 		$this->showtest->update($editdata);
 			redirect('phonecontroller');


 }

	public function  deletedata()
	{

	$drop=$this->uri->segment(3);
	$this->phonemodel->deletedata($drop);
	//print_r($drop);

	redirect('phonecontroller');
	}





}
