<?php

class M_perbaikan extends CI_model
{
    public function lihat()
    {
        $this->db->select('perbaikan.id, aset.nama_barang, aset.kode_barang, perbaikan.kerusakan, perbaikan.jenis_service, perbaikan.jenis_service, perbaikan.biaya, perbaikan.tanggal_masuk');
        $this->db->from('perbaikan');
        $this->db->join('aset', 'aset.id = perbaikan.aset_id ');
        $this->db->order_by('perbaikan.id', 'DESC');
        return $this->db->get()->result_array();
    }

    public function proses_tambah()
    {
        $data = [
            "aset_id" => $this->input->post('nama_barang', true),
            "aset_id" => $this->input->post('kode_barang', true),
            "kerusakan" => $this->input->post('kerusakan', true),
            "jenis_service" => $this->input->post('jenis_service', true),
            "biaya" => $this->input->post('biaya', true),
            "tanggal_masuk" => $this->input->post('tanggal_masuk', true),
        ];

        $this->db->insert('perbaikan', $data);
    }
}
