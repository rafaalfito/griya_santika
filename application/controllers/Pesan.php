<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
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
            'admin' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(),
            'pesan' => $this->ModelUser->getContactWhere()->result_array()
        );

        $this->load->view('template/Admin_header', $data);
        $this->load->view('template/Admin_sidebar', $data);
        $this->load->view('template/Admin_topbar', $data);
        $this->load->view('pemesanan/pesan', $data);
        $this->load->view('template/Admin_footer');
    }


    public function small()
    {
        $data = array(
            'title' => 'Home',
            'css'   => array(),
            'js'    => array(),
            'result'   => ''
        );

        $this->load->view('template/header', $data);
        $this->load->view('Ukuran/small_view');
        $this->load->view('template/footer');
    }

    public function medium()
    {
        $data = array(
            'title' => 'Home',
            'css'   => array(),
            'js'    => array(),
            'result'   => ''
        );

        $this->load->view('template/header', $data);
        $this->load->view('Ukuran/medium_view');
        $this->load->view('template/footer');
    }

    public function big()
    {
        $data = array(
            'title' => 'Home',
            'css'   => array(),
            'js'    => array(),
            'result'   => ''
        );

        $this->load->view('template/header', $data);
        $this->load->view('Ukuran/big_view');
        $this->load->view('template/footer');
    }
}
