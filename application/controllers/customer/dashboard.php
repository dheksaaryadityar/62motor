<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['motor'] = $this->Dealer_model->get_data('motor')->result();
        $this->load->view('templates_customer/header',);
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer',);
    }

    public function detail_motor($id)
    {
        $data['detail'] = $this->Dealer_model->ambil_id_motor($id);
        $this->load->view('templates_customer/header',);
        $this->load->view('customer/detail_motor', $data);
        $this->load->view('templates_customer/footer',);
    }
}
