<?php

class Beli extends CI_Controller
{

    public function tambah_beli($id)
    {
        $data['detail'] = $this->Dealer_model->ambil_id_motor($id);

        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_beli', $data);
        $this->load->view('templates_customer/footer');
    }

    public function tambah_beli_aksi()
    {
        $id_customer                 = $this->session->userdata('id_customer');
        $id_motor                    = $this->input->post('id_motor');
        $tanggal_pembelian           = $this->input->post('tgl_pembelian');
        $harga                       = $this->input->post('harga');

        $data = array(
            'id_customer' => $id_customer,
            'id_motor' => $id_motor,
            'tgl_pembelian' => $tanggal_pembelian,
            'harga' => $harga
        );

        $this->Dealer_model->insert_data($data, 'transaksi');
        $status = array(
            'status' => '0'
        );

        $id = array(
            'id_motor' => $id_motor
        );

        $this->Dealer_model->update_data('motor', $status, $id);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Transaksi Berhasil, SIlahkan Checkout!.
      </div>');
        redirect('customer/dashboard');
    }
}
