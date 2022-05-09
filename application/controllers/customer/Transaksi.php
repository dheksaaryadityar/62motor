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

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM 
        transaksi tr, motor mt, customer cs 
        WHERE tr.id_motor=mt.id_motor AND tr.id_customer=cs.id_customer 
        AND tr.id_dealer='$id' ORDER BY id_dealer DESC
        ")->result();

        $this->load->view('templates_customer/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }

    public function pembayaran_aksi()
    {
        $id                 = $this->input->post('id_dealer');
        $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];

        if ($bukti_pembayaran) {
            $config['upload_path'] = './assets/upload';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff|pdf';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti_pembayaran')) {
                $bukti_pembayaran = $this->upload->data('file_name');
                $this->db->set('bukti_pembayaran', $bukti_pembayaran);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = array(
            'bukti_pembayaran' => $bukti_pembayaran,
        );

        $where = array(
            'id_dealer' => $id,
        );

        $this->Dealer_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Bukti Pembayaran Anda Berhasil Di Upload!!
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
              </div>');
        redirect('customer/transaksi');
    }

    public function cetak_invoice($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM 
        transaksi tr, motor mt, customer cs 
        WHERE tr.id_motor=mt.id_motor AND tr.id_customer=cs.id_customer 
        AND tr.id_dealer='$id' ")->result();

        $this->load->view('customer/cetak_invoice', $data);
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

        redirect('customer/transaksi');
    }
}
