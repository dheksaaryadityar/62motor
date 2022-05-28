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
        $tanggal_pengantaran           = $this->input->post('tgl_pengantaran');
        $harga                       = $this->input->post('harga');
        $alamat_antar                       = $this->input->post('alamat_antar');
        $nama_penerima                       = $this->input->post('nama_penerima');
        $no_penerima                       = $this->input->post('no_penerima');

        $data = array(
            'id_customer' => $id_customer,
            'id_motor' => $id_motor,
            'tgl_pengantaran' => $tanggal_pengantaran,
            'harga' => $harga,
            'alamat_antar' => $alamat_antar,
            'nama_penerima' => $nama_penerima,
            'no_penerima' => $no_penerima,
            'status_admin' => '-',
            'status_dealer' => 'Belum Selesai'

        );

        $this->Dealer_model->insert_data('transaksi', $data);
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
