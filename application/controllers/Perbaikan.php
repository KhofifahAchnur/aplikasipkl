<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perbaikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_perbaikan');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Perbaikan Barang';
        $data['barang'] = $this->M_perbaikan->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('perbaikan/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required');
        $this->form_validation->set_rules('penanggung', 'Penanggung Jawab', 'required');
        $this->form_validation->set_rules('kerusakan', 'Kerusakan', 'required');
        $this->form_validation->set_rules('jenis_service', 'Jenis Service', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('perbaikan/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->M_perbaikan->proses_tambah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('perbaikan');
        }
    }


}