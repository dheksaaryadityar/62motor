<?php

class Faq extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_customer/header');
        $this->load->view('faq');
        $this->load->view('templates_customer/footer');
    }
}
