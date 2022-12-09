<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('ModelAdmin');
        $this->load->model('ModelPemesanan');
        $this->session->keep_flashdata('success');
        if (!$this->session->userdata('email'))
            redirect('Autentifikasi');
    }

    public function index()
    {
        $data = array(
            'judul' => 'Pesan',
            'css'   => array(),
            'js'    => array(),
            'admin' => $this->ModelAdmin->cekData(['email' => $this->session->userdata('email')]),
            'pesan' => $this->ModelAdmin->getContactWhere()->result_array()
        );

        $this->load->view('template/Admin_header', $data);
        $this->load->view('template/Admin_sidebar', $data);
        $this->load->view('template/Admin_topbar', $data);
        $this->load->view('pemesanan/pesan', $data);
        $this->load->view('template/Admin_footer');
    }
    public function Pemesanan()
    {
        $data = array(
            'judul' => 'Pemesanan',
            'css'   => array(),
            'js'    => array(),
            'admin' => $this->ModelAdmin->cekData(['email' => $this->session->userdata('email')]),
            'contact' => $this->ModelAdmin->getContactWhere()->result_array(),
            'pesan' => $this->ModelAdmin->getBuku()->result_array()

        );


        $this->load->view('template/Admin_header', $data);
        $this->load->view('template/Admin_sidebar', $data);
        $this->load->view('template/Admin_topbar', $data);
        $this->load->view('pemesanan/pemesanan', $data);
        $this->load->view('template/Admin_footer');
    }
    public function hapuskategori($id)
    {
        // $where = array('id' => $id);
        $this->ModelPemesanan->hapusKategori($id);
        redirect('pesan/pemesanan');
    }
    public function hapuscontact($id)
    {
        // $where = array('id' => $id);
        $this->contact_model->hapuscontact($id);
        redirect('pesan/index');
    }
}
