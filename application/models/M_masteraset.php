<?php

class M_masteraset extends CI_model
{
    public function lihat()
    {
        return $this->db->get('asetbaru')->result_array();
    }

}
