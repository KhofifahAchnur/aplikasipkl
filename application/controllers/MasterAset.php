<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterAset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_masteraset');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Barang';
        // $data['aset'] = $this->M_masteraset->tampillokasi();
        $data['aset'] = $this->M_masteraset->lihat();
        
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('masteraset/index', $data);
        $this->load->view('layout/footer');
    }

    public function gantikondisi($id)
    {
        $status = $this->M_masteraset->getKondisiById($id);
        $data['status'] = $status;

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->M_masteraset->edit_kondisi($id);
        $this->session->set_flashdata('flash', 'Berhasil');
        redirect('masteraset');
    }
}
