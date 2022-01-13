<?php

class M_masteraset extends CI_model
{
    public function lihat()
    {
        return $this->db->get('aset')->result_array();
    }
 
    public function getKondisiById($id)
    {
        return $this->db->get_where('aset', ['id' => $id])->row_array();
    }

    public function edit_kondisi($id)
    {
        $data = [
           
            "kondisi" => "Rusak"
           
        ];

        $this->db->where('id', $id);
        $this->db->update('aset', $data);
    }
}

