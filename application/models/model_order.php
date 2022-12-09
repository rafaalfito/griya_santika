<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_order extends CI_Model
{
    function order($data)
    {
        $this->db->insert('buku', $data);
    }
}
