<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
	}

	public function index()
	{
		$this->load->view('sidebaradmin');
		$this->load->model('m_member');
		$data['result'] = $this->m_member->get_all_member();
		$this->load->view('member', $data);
		$this->load->view('footer');
	}

	public function addMember()
	{
		$this->load->view('sidebaradmin');
		$this->load->view('addMember');
		$this->load->view('footer');
	}

	public function do_insert(){
	    $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required');
	    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
	     $this->form_validation->set_rules('telp', 'Telpon', 'required');

		if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('sidebaradmin');
			$this->load->view('addMember');
			$this->load->view('footer');
	    } else {

	    	$this->load->model('m_member');
			$this->m_member->create_member();
			redirect('member');
		}
	}

	public function edit($id_member='')
	{	
		$this->load->model('m_member');

		$kategori = $this->m_member->GetPreview($id_member);
		$data = array(
			'id_member'	=> $kategori[0]['id_member'],
			'nama' 	=> $kategori[0]['nama'],
			'alamat' 		=> $kategori[0]['alamat'],
			'telp'		=> $kategori[0]['telp']
		);
		
	    $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required');
	    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
	     $this->form_validation->set_rules('telp', 'Telpon', 'required');
	    
        
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('sidebaradmin');
			$this->load->view('editMember', $data);
			$this->load->view('footer');

	    } else {

	    	$data_update 	= array(
				'nama'  	=> $this->input->post('nama'),
				'alamat'	=> $this->input->post('alamat'),
				'telp'  	=> $this->input->post('telp')
			);


    		$this->load->model('m_member');
			$where = array('id_member' => $id_member);
			print_r($data_update);
			$res = $this->m_member->UpdateData('member',$data_update,$where);
			if($res>=1){
				redirect('member');
			}
	    }
	}


	public function do_delete($id_member){
		$this->load->model('m_member');
		$where 	= array('id_member' => $id_member);
		$res 	= $this->m_member->delete_member('member',$where);
		if($res>=1){
			redirect('member');
			}
		}
}
