<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  siswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_siswaModel');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login_siswa"));
        }
        $this->load->model('daftarModel');
    }
    function index(){
        $nisn=$this->session->userdata('nisn');
        $data['data'] = $this->daftarModel->get_data($nisn);
        $data['title'] = 'Biodata yang sudah terinput';
        $this->load->view('includes/header', $data);
        $this->load->view('ppdb/lihatData',$data);
        $this->load->view('includes/footer');
    }

}