<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_login extends CI_Controller {

	
        function __construct()
		{
			parent::__construct();
			$this->load->model('model_login');
		}

		public function index()
		{
			$this->load->view('login');

		}
    	

		function aksi_login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
			);
			$cek = $this->model_login->login($where)->num_rows();
			$test = $this->model_login->login($where)->row();
			
			if($cek == 1){
				$session = array(
					'username' => $username,
					'userID' => $test->userID,
					'namaUser'=>$test->namaUser
				);
				$this->session->set_userdata($session);

				mkdir('./uploads/'.$this->session->userdata('userID').'', FALSE);
				redirect(base_url('control_home/index'));
			}else{
				$this->load->view('login');
			}
		}
}
