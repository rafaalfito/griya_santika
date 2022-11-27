<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //cek_login();
        $this->load->model('ModelUser');
        $this->load->model('ModelBuku');
    }
    public function index()
    {

        $data['judul'] = 'Admin';
        $data['admin'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        // echo "<pre>";
        // print_r($data['buku']);
        // die();
        $this->load->view('template/Admin_header', $data);
        $this->load->view('template/Admin_sidebar', $data);
        $this->load->view('template/Admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/Admin_footer');
    }
}
