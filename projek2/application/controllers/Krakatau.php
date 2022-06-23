<?php 

class Krakatau extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/krakatau');
        $this->load->view('templates/footer');


    }
}