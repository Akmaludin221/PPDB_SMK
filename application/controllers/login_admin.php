<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  login_admin extends CI_Controller
{

   function __construct(){
		parent::__construct();
        $this->load->model('login_adminModel');
	}

    public function index()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('includes/header', $data);
        $this->load->view('admin/login_admin');
        $this->load->view('includes/footer');
    }
    public function aksi_login()
    {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $where = array(
            'id' => $id,
            'password' => $password
        );
        $cek = $this->login_adminModel->cek_login("admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $id,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("admin"));
        }else{
            redirect(base_url('login_admin')); 
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('pendaftaran'));
    }
}
