<?php

class Jadwal extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('jadwal/index');
        $this->load->view('templates/footer');
        
    }
}