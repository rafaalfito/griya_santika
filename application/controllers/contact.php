<?php defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Contact Page',
            'css'   => array('style'),
            'js'    => array(),
            'result'   => ''
        );

        $this->load->view('template/header', $data);
        $this->load->view('contact_view');
        $this->load->view('template/footer');
    }

    public function message()
    {
        //$data = array(
        //	'title' => 'Contact Page',
        //	'css'   => array(),
        //	'js'    => array(),
        //	'result'   => ''
        //);
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';

        $model_name = $this->contact_model;
        $this->contact_model->insert();
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
