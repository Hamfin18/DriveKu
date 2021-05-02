<?php if(! defined('BASEPATH'))exit('No Direct Script Access Alowed');
	class model_home extends CI_Model{
	
	
	public function getAllFile()
	{
		// return $this->db->query("SELECT file from file_user WHERE uID=('".$this->session->userdata('userID')."')")->result_array();
		return $this->db->get_where('file_user',['uID' =>$this->session->userdata('userID')])->result_array();
	}

	public function store_pic_data($data){

		$insert_data['uID'] = $this->session->userdata('userID');
		$insert_data['file'] = $data['file'];

		$query = $this->db->insert('file_user', $insert_data);
	}

	public function delData($file)
	{
		

	     $this->db->where('file',$file);
		 $this->db->delete('file_user');

		  
	}

	public function delFile($file)

	{
		// return $this->db->select('file')->from('file_user')->where('fileID',$fileID)->result_array();
        
     	return $this->db->get_where('file_user',['fileID' =>$fileID])->result_array();  
			
	}
	
	public function cariFile()
	{
		$key=$this->input->post('key',true);

		$this->db->like('file',$key);

		// return $this->db->get('file_user')->result_array();

		return $this->db->get_where('file_user',['uID' =>$this->session->userdata('userID')])->result_array();
	}
	

	}
?>