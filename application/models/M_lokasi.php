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
            "penanggung_jawab_id" => $this->input->post('penanggung_jawab_id', true),
        ];

        $this->db->insert('lokasi', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lokasi');
    
}
}

