<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kondisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kondisi');
        $this->load->model('M_aset');
        
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Barang';
        $data['kondisi'] = $this->M_kondisi->lihat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('kondisi/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Data';
        $data['barang'] = $this->M_aset->lihat();
        $data['aset'] = $this->M_aset->tampilaset();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('kondisi_barang', 'Kondisi Barang', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('kondisi/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->M_kondisi->proses_tambah();
            // $this->M_kondisi->updatekondisi($id);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kondisi/index');
        }
    }

    

    public function hapus($id)
    {
        $this->M_lokasi->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('lokasi');
    }
}
