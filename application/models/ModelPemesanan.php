<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelPemesanan extends CI_Model
{
    var $table = 'buku';
    //manajemen buku
    public function getBuku()
    {
        return $this->db->get($this->table);
    }
    public function bukuWhere($where)
    {
        return $this->db->get_where('user', $where);
    }
    public function simpanBuku($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function updateBuku($data = null, $where = null)
    {
        $this->db->update('user', $data, $where);
    }
    public function hapusBuku($where = null)
    {
        $this->db->delete('user', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from($this->table);
        return $this->db->get()->row($field);
    }

    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }
    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }
    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }
    public function hapusKategori($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('buku');
    }
    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }
    //join
    public function joinKategoriBuku($where)
    {
        $this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = 
buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}
