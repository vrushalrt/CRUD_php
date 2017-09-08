<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url');
		//$this->load->database(); //load db
		$this->load->model('main_model');
		//$this->load->validation('form_validation');
		//$this->load->helper('form');
		
	
	}

	public function index()
	{
		$this->home();	
	}

	public function home()
	{
		$this->add_form();
	}
	public function _display($viewname,$data)
	{
		$this->load->view($viewname,$data);
		$this->load->model('main_model');
		$data = array(
						'row' => $this->main_model->get_data()
					);
	}

	public function add_form()
	{
		$data = array(
					'form_name'	=>	'Add',
					'submit_name'	=> 'Submit'
					);
		$this->_display('form',$data);
		$this->data_list();
	}

	public function update($uid)
	{
		$data = array(
					'row'		=>	$this->main_model->getbyuid($uid),
					'form_name'	=>	'Update',
					'submit_name'	=> 'Update',
					);
		
		$this->_display('form',$data);
		$this->data_list();
		
	}

	public function data_list()
	{

		$data = array(
						'search' => $this->main_model->search(),
						'row'	=> $this->main_model->get_data()
					);
		$this->load->view('list',$data);
			
	}
	public function add()
	{
		$this->main_model->insert();
	}

	public function delete()
	{
		$this->main_model->delete();
	}

	public function update_data()
	{
		
		$this->main_model->update();
	}
	public function search()
	{
		$data = array('row' => $this->main_model->search());
		$this->load->view('search_box',$data);
		//print_r($data);
	}
}
