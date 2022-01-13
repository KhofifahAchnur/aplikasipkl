<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penanggung_jawab extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_penanggung_jawab');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Penanggung Jawab';
        $data['barang'] = $this->M_penanggung_jawab->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('penanggung_jawab/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Data Penanggung Jawab';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('penanggung_jawab/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->M_penanggung_jawab->proses_tambah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('penanggung_jawab');
        }
    }


    public function edit($id)
    {
        $data['judul'] = 'Halaman Edit Data Penanggung Jawab';
        $data['barang'] = $this->M_penanggung_jawab->getBrgById($id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('penanggung_jawab/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->M_penanggung_jawab->edit_barang($id);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('penanggung_jawab');
        }
    }

    public function hapus($id)
    {
        $this->M_penanggung_jawab->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('penanggung_jawab');
    }
}
