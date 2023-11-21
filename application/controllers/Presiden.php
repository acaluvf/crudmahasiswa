<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presiden extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Presiden_model');
    }

    public function index()
    {
        $data['judul'] = "Calon Presiden";
        $data['presiden'] = $this->Presiden_model->get();
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_presiden", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Calon Presiden";
        $data['presiden'] = $this->Presiden_model->get();
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_tambah_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id)
    {
        $this->Presiden_model->delete($id);
        redirect('presiden');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Presiden";
        $data['presiden'] = $this->Presiden_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_ubah_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function upload()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwayat_kerja' => $this->input->post('riwayat_kerja'),
            'umur' => $this->input->post('umur'),

        ];
        $this->Presiden_model->insert($data);
        redirect('presiden');
    }

    public function update()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwayat_kerja' => $this->input->post('riwayat_kerja'),
            'umur' => $this->input->post('umur'),

        ];
        $id = $this->input->post('id');
        $this->Presiden_model->update(['id' => $id], $data);
        redirect('presiden');
    }
}
