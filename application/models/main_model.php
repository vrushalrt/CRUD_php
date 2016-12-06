<?php

	Class Main_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		function insert_record()
		{
			$this->load->helper('form');

			$first_name = $this->input->post('firstname');
			$middle_name = $this->input->post('middlename');
			$last_name = $this->input->post('lastname');
			$phone_no = $this->input->post('contact');
			$email = $this->input->post('email');
			$address = $this->input->post('address');

			$data = array(
							'first_name' => $first_name,
							'middle_name'	=>$middle_name,
							'last_name'	=>	$last_name,
							'phone_no'	=>	$phone_no,
							'email'		=>	$email,
							'address'	=>	$address
				);
			$this->db->insert('contact' , $data);
		}

		public function select()
		{
			//Data retrive from query
			$query = $this->db->get('contact');
			return $query->result();
		}
	}