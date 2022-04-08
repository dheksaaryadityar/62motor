<?php

class Dealer_model extends CI_Model
{
    public function get_data($tabel)
    {
        return $this->db->get($tabel);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
