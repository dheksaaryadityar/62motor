<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {

        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/filter_laporan');
        } else {

            $data['laporan'] = $this->db->query(" SELECT * FROM transaksi tr, motor mt, customer cs WHERE tr.id_motor=mt.id_motor AND tr.id_customer=cs.id_customer AND date (tgl_pengantaran)  >= '$dari' AND date (tgl_pengantaran)  <= '$sampai' ")->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/tampilkan_laporan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
