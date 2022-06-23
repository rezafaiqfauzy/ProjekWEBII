<?php

class Model_anggota extends CI_model {
    public function getAllAnggota()
    {
      
       return $this->db->get('anggota')->result_array() ;

    }

    public function tambahData(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "email" => $this->input->post('email',true),
            "nohp" => $this->input->post('nohp',true),
            "jadwal" => $this->input->post('jadwal',true),
            "alamat" => $this->input->post('alamat',true)
        ];
        $this->db->insert('anggota',$data);
    }

}