<?php

class control_upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('model_home');
        }

        public function index()
        {       
                $data['judul']="Upload File";
                $this->load->view('templates/header',$data);
                $this->load->view('view_upload', array('error' => ' ' ));
                $this->load->view('templates/footer',);
        }

        public function do_upload()
        {
                $lokasi=$this->session->userdata('userID');
                $config['upload_path']          = './uploads/'.$lokasi.'/';
                // $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|mp4|mkv|mp3|rar|zip';
                $config['max_size']             = 0;
                $config['overwrite']            = FALSE;
		$config['remove_spaces']        = TRUE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());


                         $data['judul']="Error";
                         $this->load->view('templates/header',$data);
                         $this->load->view('view_upload', $error);
                         $this->load->view('templates/footer');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $upload_data = $this->upload->data();
                        
                        $data['file'] =$upload_data['file_name'];

                        //menyimpan data ke db
                        $this->model_home->store_pic_data($data);
                        
                        $data['judul']="Sukses";
                        $this->load->view('templates/header',$data);

                        $this->load->view('view_upload_sukses', $data);
                        $this->load->view('templates/footer');
                }
        }
}
?>