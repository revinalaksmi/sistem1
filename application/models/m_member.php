<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_member()
    {
       $data = $this->db->get('member');
        return $data->result_array();
    }

    public function create_member()
    {
        $data = array(
            'nama'   => $this->input->post('nama'),
            'alamat'        => $this->input->post('alamat'),
            'telp'   => $this->input->post('telp')
        );
        return $this->db->insert('member', $data);
    }

   public function GetPreview($id_member='')
    {
        $isi = $this->db->get_where('member', array('id_member' => $id_member));
        return $isi->result_array();
    }
public function UpdateData($tabelNama,$data,$where){
        $res = $this->db->update($tabelNama,$data,$where);
        return $res;
        }
    public function delete_member($tabelNama,$where)
    {
        $res = $this->db->delete($tabelNama,$where);
        return $res;
    }
}
