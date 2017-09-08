<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function insert()
	{
		$name = $this->input->post('name');
		$contact = $this->input->post('contact');
		$gender	=	$this->input->post('gender');
		$skills = $this->input->post('skills');

		$data = array(
						'name'		=> $name,
						'contact'	=> $contact,
						'gender'	=> $gender,
						'skills'	=> implode(" ",$skills),	
					);
		//print_r($data);
		$this->db->insert('users',$data);
	}

	public function get_data()
	{
		$query = $this->db->get("users");
		return $query->result();
	}

	public function getbyuid($uid)
	{
		$query = $this->db->get_where('users',array('uid'=>$uid));
		$row = $query->row();
		return $row;
	}

	public function delete()
	{
		$uid = $this->input->post('uid');
		$query = $this->db->delete('users',array('uid'=>$uid));
	}

	public function update()
	{
		$name = $this->input->post('name');
		$contact = $this->input->post('contact');
		$gender	=	$this->input->post('gender');
		$skills = $this->input->post('skills');
		$uid	= $this->input->post('uid');

		$data = array(
						'name'		=> $name,
						'contact'	=> $contact,
						'gender'	=> $gender,
						'skills'	=> implode(" ",$skills),	
					);
		$this->db->where('uid',$uid);
		$this->db->update('users',$data);
	}

	public function search()
	{
		$string = $this->input->post('query');
		$this->db->like('name',$string);
		$this->db->or_like('gender',$string,'after');
		$this->db->or_like('contact',$string);
		$this->db->or_like('skills',$string);
		$result = $this->db->get('users');
		return $result->result_object();
		// print_r($result);exit();
		//$this->db->from('users');
	}

}