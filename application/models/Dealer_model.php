<?php

class Dealer_model extends CI_Model
{
    public function get_data($tabel)
    {
        return $this->db->get($tabel);
    }
}
