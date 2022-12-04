<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAdmin');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $get = $this->db->get_where('admin', array('email' => $this->session->userdata('email'), 'is_active' => 1))->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');

        if ($this->input->post('email') != $get['email']) {
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', array(
                'is_unique' => 'This email has already registered!'
            ));
        }
        //$this->form_validation->set_rules('phone', 'Phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            // Menampilkan halaman profile
            $data = array(
                // 'title' => 'My Profile',
                // 'css'   => array('custom'),
                // 'js'    => array('js/sweetalert.min', 'js/profile'),
                //'notif' => notification('S', false),
                'user'  => $this->db->get_where('admin', array('email' => $this->session->userdata('email'), 'is_active' => 1))->row_array()
            );
            //action_log($this->session->userdata('username'), 'user', 'View Profile', 'View Profile Successfully');
            //pre($data['user']);
            $this->load->view('template/Admin_header', $data);
            $this->load->view('template/Admin_sidebar', $data);
            $this->load->view('template/profile');
            $this->load->view('template/Admin_footer');
        } else {
            // Ketika klik save profile button
            // Cek jika foto sudah ada maka save profile seperti biasa
            if ($get['image'] != '' && $_FILES['image']['name'] == '') {
                $data = array(
                    'nama'  => htmlspecialchars($this->input->post('nama', true)),
                    'email'  => $this->input->post('email', true),
                    //'lastname'   => $this->input->post('lastname'),
                    //'phone'      => $this->input->post('phone'),
                    //'updateby'   => htmlspecialchars($this->input->post('email', true)),
                    //'updatedate' => date('Y-m-d H:i:s')
                );

                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('admin', $data);

                $session = [
                    'email' => $this->input->post('email')
                ];
                $this->session->set_userdata($session);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile updated successfully!</div>');
                //action_log($this->session->userdata('username'), 'user', 'Update Account', 'Successfully update account without changing photo');

                redirect(base_url('profile'));
            } else {
                // Cek jika file upload tidak kosong
                // Simpan foto ke folder
                $allowedExts = array('jpeg', 'jpg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG');
                $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $ex_name = explode(".", $_FILES['image']['name']);
                $ext = end($ex_name);
                $new_name = $this->session->userdata('username') . date('Ymdhis') . '.' . $ext;
                $config = array(
                    'upload_path'   => './images/profile',
                    'allowed_types' => 'jpg|jpeg|gif|png',
                    'file_name'     => $new_name
                );

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image') && in_array($extension, $allowedExts)) {
                    if ($_FILES['image']['size'] >= 2097152) {
                        // Cek jika file lebih besar dari 2MB, balik ke halaman profile
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to upload profile picture, file should not be more than 2MB</div>');
                        //action_log($this->session->userdata('username'), 'user', 'Upload Profile Picture', 'Error upload photo, maximum capacity 2MB');

                        redirect(base_url('profile'));
                    } else if (in_array($extension, $allowedExts)) {
                        // Cek jika file kalau file extension belum sesuai, balik ke halaman profile

                        // Simpan data profile ke database
                        $data = array(
                            'nama'  => htmlspecialchars($this->input->post('nama', true)),
                            'email'  => htmlspecialchars($this->input->post('email', true)),
                            //'lastname'   => $this->input->post('lastname'),
                            //'phone'      => $this->input->post('phone'),
                            'image'      => $new_name,
                            //'updateby'   => htmlspecialchars($this->input->post('username', true)),
                            //'updatedate' => date('Y-m-d H:i:s')
                        );


                        $this->db->where('email', $this->session->userdata('email'));
                        $this->db->update('admin', $data);

                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile updated successfully!</div>');
                        //action_log($this->session->userdata('username'), 'user', 'Update Account', 'Successfully Update Account');

                        redirect(base_url('profile'));
                    } else {
                        // Cek jika file upload kosong
                        $data = array(
                            'title' => 'My Profile',
                            'css'   => array('custom.css'),
                            'js'    => array(),
                            'user'  => $this->db->get_where('admin', array('email' => $this->session->userdata('email'), 'flag' => 1))->row_array()
                        );
                        $error = array('error' => $this->upload->display_errors('<small class="text-danger">', '</small>'));

                        $this->load->view('template/Admin_header', $data);
                        $this->load->view('template/Admin_sidebar');
                        $this->load->view('template/profile');
                        $this->load->view('template/Admin_footer');
                    }
                } else {
                    // Menampilkan error tipe extension
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to upload profile picture, only "jpg/gif/png" file type allowed!</div>');
                    //action_log($this->session->userdata('username'), 'user', 'Upload Profile Picture', 'Error upload photo, wrong file extension');

                    redirect(base_url('profile'));
                }
            }
        }
    }
}
