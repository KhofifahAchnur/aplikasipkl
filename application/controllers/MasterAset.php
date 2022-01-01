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
        $data['aset'] = $this->M_masteraset->lihat();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('masteraset/index', $data);
        $this->load->view('layout/footer');
    }
}
