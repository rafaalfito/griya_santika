<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->session->keep_flashdata('success');
	}

	public function index()
	{
		$data = array(
			'title' => 'Home',
			'css'   => array(),
			'js'    => array(),
			'result'   => ''
		);

		$this->load->view('template/header', $data);
		$this->load->view('home_view');
		$this->load->view('template/footer');
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

	public function order()
	{
		$data = array(
			//'title' => 'Contact Page',
			'css'   => array('style'),
			'js'    => array(),
			'result'   => ''
		);
		$this->load->view('user/form_Beli');
	}
}
