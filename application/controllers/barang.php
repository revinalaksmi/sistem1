<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->view('sidebaradmin');
	}

	public function index()
	{
		$this->load->view('sidebaradmin');
		$this->load->model('m_barang');
		$data['result'] = $this->m_barang->get_all_barang();
		$this->load->view('barang', $data);
		$this->load->view('footer');
	}

	public function addBarang()
	{
		$this->load->model('category_model');
		$data['result'] = $this->category_model->get_all_categories();
		$this->load->view('addbarang',$data);
		$this->load->view('footer');
	}
	public function add_data(){
		$this->load->model('category_model');
		$data['result'] = $this->category_model->get_all_categories();
		$this->load->view('form_add');
	}

	public function do_insert(){
	    $this->form_validation->set_rules('nama', 'Nama barang', 'required');
	    $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
	    $this->form_validation->set_rules('stok', 'Stok', 'required');
	     $this->form_validation->set_rules('harga', 'Harga', 'required');

		if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('sidebaradmin');
			$this->load->view('addbarang');
			$this->load->view('footer');
	    } else {

	    	$this->load->model('m_barang');
			$this->m_barang->create_barang();
			redirect('barang');
		}
	}

	public function edit($id='')
	{	
		$this->load->model('m_barang');

		$kategori = $this->m_barang->GetPreview($id);
		$data = array(
			'id'			=> $kategori[0]['id'],
			'id_kategori'	=> $kategori[0]['id_kategori'],
			'nama' 			=> $kategori[0]['nama'],
			'stok' 			=> $kategori[0]['stok'],
			'harga'			=> $kategori[0]['harga']
		);
	    $this->form_validation->set_rules('nama', 'Nama barang', 'required');
	    $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
	    $this->form_validation->set_rules('stok', 'Stok', 'required');
	    $this->form_validation->set_rules('harga', 'Harga', 'required');
	    
        
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('sidebaradmin');
			$this->load->view('editbarang', $data);
			$this->load->view('footer');

	    } else {

	    	$data_update 	= array(
				'nama'  	=> $this->input->post('nama'),
				'id_kategori'  	=> $this->input->post('id_kategori'),
				'stok'	=> $this->input->post('stok'),
				'harga'  	=> $this->input->post('harga'));


    		$this->load->model('m_barang');
			$where = array('id' => $id);
			print_r($data_update);
			$res = $this->m_barang->UpdateData('barang',$data_update,$where);
			if($res>=1){
							redirect('barang');
			}
	    }
	}

	public function do_delete($id){
		$this->load->model('m_barang');
		$where 	= array('id' => $id);
		$res 	= $this->m_barang->delete_barang('barang',$where);
		if($res>=1){
			redirect('barang/');
			}
		}
}
