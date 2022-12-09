<?php defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function index()
    {

        $session = array(
            'email'     => '',
            'role_id'   => ''
        );
        $this->session->set_userdata($session);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('autentifikasi');
    }
}
