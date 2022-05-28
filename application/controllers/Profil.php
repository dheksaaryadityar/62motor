<?php
class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('profil');
        $this->load->view('templates_customer/footer');
    }
}
