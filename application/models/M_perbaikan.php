<?php

class M_perbaikan extends CI_model
{
    public function lihat()
    {
        return $this->db->get('perbaikan')->result_array();
    }

    public function proses_tambah()
    {
        $data = [
            "tanggal_masuk" => $this->input->post('tanggal_masuk', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "kode_barang" => $this->input->post('kode_barang', true),
            "penanggung" => $this->input->post('penanggung', true),
            "kerusakan" => $this->input->post('kerusakan', true),
            "jenis_service" => $this->input->post('jenis_service', true),
            "biaya" => $this->input->post('biaya', true),
        ];

        $this->db->insert('perbaikan', $data);
    }

    public function join()
    {
        $this->db->select('perbaikan.id, asetbaru.nama_barang, asetbaru.kode_barang, lokasi.penanggung, ');
    }
    
}
