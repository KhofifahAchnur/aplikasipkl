<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpindahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_perpindahan');
        $this->load->model('M_aset');
        $this->load->model('M_lokasi');
        $this->load->model('M_penanggung_jawab');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Barang';
        $data['barang'] = $this->M_perpindahan->lihat();
        $data['history'] = $this->M_aset->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('perpindahan/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah($id)
    {
        $data['judul'] = 'Halaman Tambah Data';
        $data['barang'] = $this->M_aset->lihat();
        $data['aset'] = $this->M_aset->tampilaset();
        $data['lokasi'] = $this->M_lokasi->lihat();
        $data['penanggung_jawab'] = $this->M_penanggung_jawab->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('perpindahan/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->M_perpindahan->proses_tambah();
            $this->M_perpindahan->tambahlokasi($id);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('aset');
        }
    }

    
}