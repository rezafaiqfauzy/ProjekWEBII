<?php 

class Prau extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/prau');
        $this->load->view('templates/footer');


    }
}