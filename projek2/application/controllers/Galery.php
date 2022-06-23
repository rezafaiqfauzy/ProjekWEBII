<?php

class Galery extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('galery/index');
        $this->load->view('templates/footer');
        
    }
}