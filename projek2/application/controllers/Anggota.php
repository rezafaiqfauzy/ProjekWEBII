<?php

class Anggota extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_anggota');
        $this->load->library('form_validation');
        
    }
    public function index()
    {
        
        $data['anggota'] = $this->Model_anggota->getAllAnggota();
        $this->load->view('templates/header');
        $this->load->view('anggota/index',$data);
        $this->load->view('templates/footer');
        
    }
    public function pendaftaran()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if( $this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('jadwal/pendaftaran');
            $this->load->view('templates/footer');
        }
        else{
            $this->Model_anggota->tambahData();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('anggota');
        }
        
    }
}