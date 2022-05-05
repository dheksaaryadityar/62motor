<?php

class Transaksi extends CI_Controller
{

    public function index()
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM 
        transaksi tr, motor mt, customer cs 
        WHERE tr.id_motor=mt.id_motor AND tr.id_customer=cs.id_customer ")->result();



        $this->load->view('templates_admin/header',);
        $this->load->view('templates_admin/sidebar',);
        $this->load->view('admin/data_transaksi', $data);
    }
}
