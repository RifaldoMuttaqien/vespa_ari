<?php

class M_data extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    // fungsi untuk mengupdate atau mengubah data di databse

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // fungsi untuk mengambil data dari databse
    function get_data($table)
    {
        return $this->db->get($table);
    }
    // fungsi untuk menginput data ke database
    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // fungsi untuk megedit data
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    // untuk menghapus data dari database
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }
}
