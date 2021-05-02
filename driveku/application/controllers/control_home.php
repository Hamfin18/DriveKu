<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_home extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('model_home');
        $this->load->helper(array('url','download'));
        $this->load->helper("file");
   
    }


    public function index()
    {
    	$data['judul']="HOME";
    	$x=$this->session->userdata('userID');
    	$data['file_user']=$this->model_home->getallfile();

        if($this->input->post('key')){
            $data['file_user']=$this->model_home->cariFile();
        }
    	$this->load->view('templates/header',$data);
    	$this->load->view('view_home',$data);
    	$this->load->view('templates/footer');
         
    }

    public function endSession()
    {

    	$this->session->sess_destroy();
    	$this->load->view('login');
    }

    public function deleteData($file)
    {   

        $this->model_home->delData($file);
        $this->session->set_flashdata('flash','dihapus');


        // $data['x']= $this->model_home->delFile($fileID);

         $lokasi=$this->session->userdata('userID');

         unlink('./uploads/'.$lokasi.'/'.$file.''); //untuk hapus file di direktori yang punya

         redirect('control_home');
         // $this->load->view('mantap',$data);


         
    }

    public function downloadFile($file)
    {
        force_download('./uploads/'.$this->session->userdata('userID').'/'.$file.'', NULL);    
        // force_download('./uploads/'.$file.'', NULL);    
          
        
    }

    

}
