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

    public function tambah_motor_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_motor();
        } else {
            $kode_type = $this->input->post('kode_type');
            $merk = $this->input->post('merk');
            $no_plat = $this->input->post('no_plat');
            $warna = $this->input->post('warna');
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    echo "Gambar Motor Gagal di Upload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }

                $data = array(
                    'kode_type' => $kode_type,
                    'merk' => $merk,
                    'no_plat' => $no_plat,
                    'tahun' => $tahun,
                    'warna' => $warna,
                    'status' => $status,
                    'gambar' => $gambar
                );

                $this->Dealer_model->insert_data($data, 'motor');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Data Mobil Berhasil Ditambahkan
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
              </div>');
                redirect('admin/data_motor');
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode_type', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('no_plat', 'No plat', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }
}
