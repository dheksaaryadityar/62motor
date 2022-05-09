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

    public function transaksi_selesai($id)
    {
        $where = array('id_dealer' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_dealer='$id' ")->result();

        $this->load->view('templates_admin/header',);
        $this->load->view('templates_admin/sidebar',);
        $this->load->view('admin/transaksi_selesai', $data);
    }

    public function transaksi_selesai_aksi()
    {
        $id                     = $this->input->post('id_dealer');
        $status_admin                  = $this->input->post('status_admin');
        $status_dealer         = $this->input->post('status_dealer');

        $data = array(
            'status_admin' => $status_admin,
            'status_dealer' => $status_dealer
        );
        $where = array(
            'id_dealer' => $id
        );

        $this->Dealer_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Transaksi Berhasil Di Update!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
</div>');
        redirect('admin/transaksi');
    }

    public function batal_transaksi($id)
    {
        $where = array('id_dealer' => $id);
        $data = $this->Dealer_model->get_where($where, 'transaksi')->row();

        $where2 = array('id_motor' => $data->id_motor);


        $data2 = array('status' => '1');

        $this->Dealer_model->update_data('motor', $data2, $where2);
        $this->Dealer_model->delete_data($where, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Transaksi Berhasil dibatalkan!
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
              </div>');

        redirect('admin/transaksi');
    }
}
