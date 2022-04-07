<?php

class Data_motor extends CI_Controller
{
    public function index()
    {
        $data['motor'] = $this->Dealer_model->get_data('motor')->result();
        $data['type'] = $this->Dealer_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_motor', $data);
    }

    public function tambah_motor()
    {
        $data['type'] = $this->Dealer_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_motor', $data);
    }
}
