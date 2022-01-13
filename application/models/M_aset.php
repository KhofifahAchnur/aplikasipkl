<?php

class M_aset extends CI_model
{
    public function lihat()
    {
        return $this->db->get('aset')->result_array();
    }
    
    public function tampilkondisibaik()
    {
        return $this
            ->db
            ->select('*')
            ->order_by('id', 'DESC')
            ->where('kondisi', 'Baik')
            ->get('aset')
            ->result_array();
    }


    public function proses_tambah()
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang', true),
            "kode_barang" => $this->input->post('kode_barang', true),
            "register" => $this->input->post('register', true),
            "merk" => $this->input->post('merk', true),
            "ukuran" => $this->input->post('ukuran', true),
            "bahan" => $this->input->post('bahan', true),
            "tahun" => $this->input->post('tahun', true),
            "kondisi" => $this->input->post('kondisi', true),
            "asal_usul" => $this->input->post('asal_usul', true),
            "harga_brg" => $this->input->post('harga_brg', true),
            "lokasi_id" => null,
            "tanggal_masuk" => date('Y-m-d')
           
        ];

        $this->db->insert('aset', $data);
    }

    public function getBrgById($id)
    {
        return $this->db->get_where('aset', ['id' => $id])->row_array();
    }

    public function edit_barang($id)
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang', true),
            "kode_barang" => $this->input->post('kode_barang', true),
            "register" => $this->input->post('register', true),
            "merk" => $this->input->post('merk', true),
            "ukuran" => $this->input->post('ukuran', true),
            "bahan" => $this->input->post('bahan', true),
            "tahun" => $this->input->post('tahun', true),
            "kondisi" => $this->input->post('kondisi', true),
            "asal_usul" => $this->input->post('asal_usul', true),
            "harga_brg" => $this->input->post('harga_brg', true),
           
        ];

        $this->db->where('id', $id);
        $this->db->update('aset', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('aset');
    }
}
