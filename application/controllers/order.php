<?php defined('BASEPATH') or exit('No direct script access allowed');

class order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_order');
    }


    public function index()
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
        $this->model_order->order($data);
        if ($this->db->affected_rows() > 0) {
            //echo '<pre>', print_r($this->db->affected_rows()), '</pre>';
            //echo "<script>alert('Sukses Mengirim Pesan');</script>";
            $data = $this->session->set_flashdata('success', "Sukses Mengirim Pesan");
            $this->load->view('template/header', $data);
            $this->load->view('home_view');
            $this->load->view('template/footer');
            //redirect(base_url());
        }
    }
}
