<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lokasi');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Barang';
        $data['barang'] = $this->M_lokasi->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/menu', $data);
        $this->load->view('layout/footer');
    }

    public function tampilkanlokasi()
    {
        $data['judul'] = 'Halaman Data Barang';
        $data['barang'] = $this->M_lokasi->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('lokasi/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('lokasi', 'Lokasi barang', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('lokasi/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->M_lokasi->proses_tambah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('lokasi/tampilkanlokasi');
        }

}

}
