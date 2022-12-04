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

    public function order()
    {
        $data = array(
            'nama_user' => $this->input->post('nama'),
            'no_telp' => $this->input->post('notelp'),
            'email' => $this->input->post('email'),
            'type' => $this->input->post('pilih'),
            'date' => $this->input->post('janjian'),
            'status' => $this->input->post('status'),
            'Jumlah_Di_Pesan' => $this->input->post('dibeli')
        );
        $this->ModelPemesanan->order($data);
        //pre($this->db->affected_rows());
        if ($this->db->affected_rows() > 0) {
            //echo '<pre>', print_r($this->db->affected_rows()), '</pre>';
            //echo "<script>alert('Sukses Mengirim Pesan');</script>";
            $data = $this->session->set_flashdata('success', "Sukses Mengirim Pesan");
            $this->load->view('template/header', $data);
            $this->load->view('home_view');
            $this->load->view('template/footer');
        }
    }
}
