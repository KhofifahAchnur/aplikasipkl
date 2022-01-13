<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_aset');
    }

    public function index($id)
    {
        $data['judul'] = 'Halaman Data History';
        $data['barang'] = $this->M_aset->getBrgById($id);

        

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('history/index', $data);
        $this->load->view('layout/footer');
    }
}
