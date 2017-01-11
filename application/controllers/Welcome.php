<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __Construct(){
  		parent::__Construct ();
   		$this->load->database(); // load database
   		 // 
   		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('main');
	}

	public function insert()
	{
		$this->load->helper('url');
		$this->load->model('main_model');
		$this->main_model->insert_record();
		$this->load->view('main');
	}

	public function contact_list()
	{
		$this->load->model('main_model');
		$data = array(
						'h' => $this->main_model->select()
					);
		$this->load->view('contact_list',$data);
	}

	public function edit()
	{

	}

	public function delete()
	{
		$this->load->helper('url');
		$this->load->model('main_model');
		$this->main_model->delete();
		$this->load->view('main');
	}
}
