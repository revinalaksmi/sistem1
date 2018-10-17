<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_barang()
    {
        $this->db->join('kategori', 'barang.id_kategori =kategori.id_kategori');
       $data = $this->db->get('barang');
        return $data->result_array();
    }

    public function create_barang()
    {
        $data = array(
            'id'          => $this->input->post('id'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'nama'        => $this->input->post('nama'),
            'stok'   => $this->input->post('stok'),
            'harga'        => $this->input->post('harga')
        );
        return $this->db->insert('barang', $data);
    }
    public function GetPreview($id='')
    {
        $isi = $this->db->get_where('barang', array('id' => $id));
        return $isi->result_array();
    }
public function UpdateData($tabelNama,$data,$where){
        $res = $this->db->update($tabelNama,$data,$where);
        return $res;
        }
    public function delete_barang($tabelNama,$where)
    {
        $res = $this->db->delete($tabelNama,$where);
        return $res;
    }
}
