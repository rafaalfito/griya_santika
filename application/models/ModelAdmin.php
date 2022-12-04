<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelAdmin extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('admin', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('admin', $where)->row_array();
        //$this->db->last_query();
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('admin', $where);
    }
    public function getContactWhere()
    {
        return $this->db->get_where('contact');
    }
    public function getBuku()
    {
        return $this->db->get_where('buku');
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->limit(100, 0);
        return $this->db->get();
    }
}
