<?php

class M_lokasi extends CI_model
{
    public function lihat()
    {
        return $this->db->get('lokasi')->result_array();
    }

    public function proses_tambah()
    {
        $data = [
            "lokasi" => $this->input->post('lokasi', true),
        ];

        $this->db->insert('lokasi', $data);
    }
    
}
