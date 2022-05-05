<?php

class Transaksi extends CI_Controller
{

    public function index()
    {
        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * FROM 
            transaksi tr, motor mt, customer cs 
            WHERE tr.id_motor=mt.id_motor AND tr.id_customer=cs.id_customer 
            AND cs.id_customer='$customer' ORDER BY id_dealer DESC
            ")->result();

        $this->load->view('templates_customer/header');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('templates_customer/footer');
    }
}
