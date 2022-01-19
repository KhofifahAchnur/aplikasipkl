<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lokasi');
        $this->load->model('M_penanggung_jawab');
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
        $this->load->view('lokasi/index', $data);
        $this->load->view('layout/footer');
    }


    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Data';
        $data['penanggung_jawab'] = $this->M_penanggung_jawab->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('lokasi', 'Lokasi barang', 'required');
        $this->form_validation->set_rules('nama', 'Penanggung Jawab', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('lokasi/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->M_lokasi->proses_tambah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('lokasi');
        }

}

    
public function edit($id)
{
    $data['judul'] = 'Halaman Edit Data';
    $data['lokasi'] = $this->M_lokasi->getBrgById($id);
    $data['penanggung_jawab'] = $this->M_penanggung_jawab->lihat();
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('lokasi', 'Lokasi Barang', 'required');
    $this->form_validation->set_rules('nama', 'Penanggung Jawab', 'required');
   
    if ($this->form_validation->run() == false) {
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('lokasi/edit', $data);
        $this->load->view('layout/footer');
    } else {
        $this->M_lokasi->edit_barang($id);
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('lokasi');
    }
}

    public function hapus($id)
    {
         $this->M_lokasi->hapusData($id);
         $this->session->set_flashdata('flash', 'Dihapus');
    redirect('lokasi');
}

}
