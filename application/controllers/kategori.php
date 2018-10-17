<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	
	public function index(){
		$this->load->view('sidebaradmin');
		$this->load->model('category_model');
		$data['result'] = $this->category_model->get_all_categories();
		$this->load->view('kategori', $data);
		$this->load->view('footer');
	} 
	public function addKategori()
	{
		$this->load->view('sidebaradmin');
		$this->load->view('addKategori');
		$this->load->view('footer');
	}

	public function do_insert(){
	    $this->form_validation->set_rules('namakat', 'Nama', 'required');

		if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('sidebaradmin');
			$this->load->view('addKategori');
			$this->load->view('footer');
	    } else {

	    	$this->load->model('category_model');
			$this->category_model->create_category();
			redirect('kategori');
		}
	}

	public function edit($id_kategori='')
	{	
		$this->load->model('category_model');
		$kategori = $this->category_model->GetPreview($id_kategori);
		$data = array(
			'id_kategori'	=> $kategori[0]['id_kategori'],
			'namakat'  	=> $kategori[0]['namakat']
		);
		
		$this->form_validation->set_rules('namakat', 'Nama', 'required');
	    
        
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('sidebaradmin');
			$this->load->view('editKategori', $data);
			$this->load->view('footer');

	    } else {

	    	$data_update 	= array(
				'namakat'  	=> $this->input->post('namakat')
			);


    		$this->load->model('category_model');
			$where = array('id_kategori' => $id_kategori);
			print_r($data_update);
			$res = $this->category_model->UpdateData('kategori',$data_update,$where);
			if($res>=1){
				redirect('kategori');
			}
	    }
	}

	public function do_delete($kd_barang){
		$this->load->model('category_model');
		$where 	= array('id_kategori' => $id_kategori);
		$res 	= $this->category_model->delete_barang('barang',$where);
		if($res>=1){
			redirect('kategori');
			}
		}
	
}
