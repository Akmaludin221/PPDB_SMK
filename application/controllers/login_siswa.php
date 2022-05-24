<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  login_siswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_siswaModel');
    }

    public function index()
    {
        $data['title'] = 'Login siswa';
        $this->load->view('includes/header', $data);
        $this->load->view('ppdb/login_user');
        $this->load->view('includes/footer');
    }
    public function aksi_login()
    {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $where = array(
            'nisn' => $id,
            'password' => $password
        );
        $cek = $this->login_siswaModel->cek_login("siswa", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nisn' => $id,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("siswa/index"));
        }else{
            redirect(base_url('login_siswa'));
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('pendaftaran'));
    }
}
