<?php defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
	var $cont = 'contact';
	public function insert()
	{

		$data = array(
			'firstname'  => $this->input->post('firstname'),
			'lastname'   => $this->input->post('lastname'),
			'email' 	  => $this->input->post('email'),
			'subject'	  => $this->input->post('subject'),
			'message'     => $this->input->post('message'),
			'flag'	      => 0
		);

		$this->db->insert('contact', $data);
	}
	public function hapuscontact($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('contact');
	}
}
