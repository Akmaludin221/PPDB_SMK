<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_adminModel');
        $this->load->model('admin_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login_admin"));
        }
    }

    public function index()
    {
        $admin = new admin_model;
        $data['data'] =  $admin->get_data();
        $data['title'] = 'Halaman Admin';
        $this->load->view('includes/header', $data);
        $this->load->view('admin/halaman_admin.php');
    }

    public function detail_data($id=null){
        $admin = new admin_model;
        $data['title'] = 'Detail data';
        $data['data']= $admin->get_detail($id);
        $this->load->view('includes/header',$data);
        $this->load->view('admin/detail_data',$data);
        $this->load->view('includes/footer');
    }
    
    public function edit_data($id=null)
    {
        $this->form_validation->set_rules(
            'nisn',
            'NISN',
            'required|trim|numeric|max_length[12]|min_length[12]',
            array(
                'required' => '%s harus di isi',
                'numeric' => '%s harus mengunakan angka',
                'max_length' => '%s harus 12 karakter',
                'min_length' => '%s harus 12 karakter',
            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'provinsi',
            'Provinsi',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'kotaKabupaten',
            'Kabupaten atau Kota',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'kodePos',
            'Kode Pos',
            'trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'TTG',
            'Tanggal Lahir',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'jenisKelamin',
            'Jenis kelamin',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'wargaNegara',
            'Kewarganegaraan',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
            array(
                'required' => '%s harus di isi',
                'valid_email' => '%s tidak valid'
            )
        );

        $this->form_validation->set_rules(
            'statusTerima',
            'Email',
            'required|trim',
            array(
                'required' => '%s harus di isi',
            )
        );

        $this->form_validation->set_rules(
            'statusTerima',
            'Status',
            'required|trim',
            array(
                'required' => '%s harus di isi',
            )
        );
        $this->form_validation->set_rules(
            'tgl_ijazah',
            'tanggal_ijazah',
            'required',
            array(
                'required' => '%s harus di isi',
            )
        );
        $this->form_validation->set_rules(
            'asal_sekolah',
            'Asal Sekolah',
            'required|trim',
            array(
                'required' => '%s harus di isi',
            )
        );
        $this->form_validation->set_rules(
            'alamat_sekolah',
            'Alamat Sekolah',
            'required|trim',
            array(
                'required' => '%s harus di isi',
            )
        );
        $this->form_validation->set_rules(
            'nomor_ijazah',
            'Nomor Ijazah',
            'required|trim',
            array(
                'required' => '%s harus di isi',

            )
        );
        $this->form_validation->set_rules(
            'nama_ayah',
            'Nama',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'pekerjaan_ayah',
            'Pekerjaan',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'pekerjaan_ayah',
            'Pekerjaan',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'pendidikan_ayah',
            'Pendidikan',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'nama_ibu',
            'Nama',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'pekerjaan_ibu',
            'Pekerjaan',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'pekerjaan_ibu',
            'Pekerjaan',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'pendidikan_ibu',
            'Pendidikan',
            'required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );
        $this->form_validation->set_rules(
            'nomor_hp_ayah',
            'Nomor HandPhone',
            'numeric',
            array(
                'numeric' => '%s harus menggunakan angka'
            )
        );
        $this->form_validation->set_rules(
            'nomor_hp_ibu',
            'Nomor HandPhone',
            'numeric',
            array(
                'numeric' => '%s harus menggunakan angka'
            )
        );
        $this->form_validation->set_rules(
            'nomor_hp_wali',
            'Nomor HandPhone',
            'numeric',
            array(
                'numeric' => '%s harus menggunakan angka'
            )
        );
        $this->form_validation->set_rules(
            'alamat_keluarga',
            'Alamat',
            'required|trim',
            array(
                'required' => '%s harus menggunakan angka'
            )
        );
        $this->load->helper('form');
        $this->form_validation->set_rules('noTelepon', 'Nomor telepon', 'trim|numeric');
        $this->form_validation->set_rules('noHandPhone', 'Nomor Handphone', 'trim|numeric');
        $this->load->library('session');
        $admin = new admin_model;
        if($this->form_validation->run()==false){
            $data['title'] = 'Edit data';
            $data['data'] = $admin->get_detail($id);
            $this->load->view('includes/header',$data);
            $this->load->view('admin/edit', $data);
            $this->load->view('includes/footer');
        }else{
            $this->admin_model->update($id);
            redirect(base_url('admin'));
        }
    } 
    public function delete_data($id){
        $this->admin_model->delete($id);
        redirect(base_url('admin'));
    }

}