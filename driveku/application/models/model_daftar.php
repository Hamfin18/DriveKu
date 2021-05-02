<?php 

class model_daftar extends CI_Model{
	
	public function tambahUser()
	{
		$pass=$this->input->post('password1');

		$data=[
			"namaUser" => $this->input->post('namaUser'),
			"jkUser" => $this->input->post('jkUser'),
			"username" => $this->input->post('username'),
			"password" => md5($pass),
			"email" => $this->input->post('email')
		];



		$this->db->insert('user',$data);

		

		
	}
	
	
}