<?php
error_reporting(0);
class ModelDataBerita extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('databerita');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}