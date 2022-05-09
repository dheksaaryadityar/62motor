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

    public function pembayaran($id)
    {
        $where = array('id_dealer' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_dealer='$id' ")->result();

        $this->load->view('templates_admin/header',);
        $this->load->view('templates_admin/sidebar',);
        $this->load->view('admin/konfirmasi_pembayaran', $data);
    }

    public function cek_pembayaran()
    {
        $id         = $this->input->post('id_dealer');
        $status_pembayaran = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran' => $status_pembayaran,

        );

        $where = array(
            'id_dealer' => $id,
        );

        $this->Dealer_model->update_data('transaksi', $data, $where);
        redirect('admin/transaksi');
    }

    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $filePembayaran = $this->Dealer_model->downloadPembayaran($id);
        $file = 'assets/upload/' . $filePembayaran['bukti_pembayaran'];
        force_download($file, NULL);
    }
}
