<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function index()
    {  
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/index', $data);
        $this->load->view('layout/footer');

    }


} 