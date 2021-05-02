<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_daftar extends CI_Controller {

		function __construct()
			{
				parent::__construct();
				$this->load->model('model_daftar');
				$this->load->library('form_validation');
				$this->load->model('model_login');
			}
	
        public function index()
        {

        	$this->load->view('view_daftar');
        }
		
		
		public function tambah()
		{

			$this->form_validation->set_rules('namaUser','Nama User','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('password1','Password','required|matches[password2]');
			$this->form_validation->set_rules('password2','Password','required');

			if($this->form_validation->run()==FALSE)
			{
				$this->load->view('view_daftar');		
			
			}else{

				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$where = array(
				'username' => $username,
				'password' => $password
			);
				$cek = $this->model_login->login($where)->num_rows();
				$test = $this->model_login->login($where)->row();	

				$this->model_daftar->tambahUser();


				
				

				$this->load->view('login');
			}


		}
}
