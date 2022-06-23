<?php 

class Rinjani extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/rinjani');
        $this->load->view('templates/footer');


    }
}