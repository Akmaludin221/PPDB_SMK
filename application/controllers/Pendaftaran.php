<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Pendaftaran extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('daftarModel');
    }

    public function index(){
        
        $data['title']= 'PPDB SMK Citra Bangsa';
        $this->load->view('includes/header',$data);
        $this->load->view('ppdb/lamanUtama');
        $this->load->view('includes/footer');
    }
    public function daftar(){
        $this->form_validation->set_rules('nisn','NISN','required|trim|numeric|max_length[12]|min_length[12]|is_unique[biodata_siswa.NISN]',
        array( 
            'required'=>'%s harus di isi',
            'numeric'=>'%s harus mengunakan angka',
            'max_length'=>'%s harus 12 karakter',
            'min_length'=>'%s harus 12 karakter',
            'is_unique'=> '%s sudah Terdaftar'
        ));

        $this->form_validation->set_rules('nama','Nama','required|trim',
        array(
            'required'=>'%s harus di isi'
        ));

        $this->form_validation->set_rules('alamat','Alamat','required|trim',
        array(
            'required' => '%s harus di isi'
        ));
        
        $this->form_validation->set_rules('provinsi','Provinsi','required|trim',
        array(
            'required' => '%s harus di isi'
        ));

        $this->form_validation->set_rules('kotaKabupaten','Kabupaten atau Kota','required|trim',
        array(
            'required' => '%s harus di isi'
        ));

        $this->form_validation->set_rules('kodePos','Kode Pos','trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules('TTG','Tanggal Lahir','required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules('jenisKelamin','Jenis kelamin','required|trim',
            array(
                'required' => '%s harus di isi'
            )
        );

        $this->form_validation->set_rules('wargaNegara','Kewarganegaraan','required|trim',
            array(
                'required' => '%s harus di isi'
            ));
        
        $this->form_validation->set_rules('email','Email','required|trim|valid_email',
            array(
                'required' => '%s harus di isi',
                'valid_email'=>'%s tidak valid'
            ));

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
                'required' => '%s harus diisi'
            )
        );

        $this->form_validation->set_rules('noTelepon','Nomor telepon','trim|numeric');
        $this->form_validation->set_rules('noHandPhone','Nomor Handphone','trim|numeric');

        $this->load->library('session');

        if($this->form_validation->run()==false){
            $data['title']='Formulir Registrasi';
            $this->load->view('includes/header',$data);
            $this->load->view('ppdb/registrasi');
            $this->load->view('includes/footer');
            
        }else{
            $this->daftarModel->insert_data();
            $this->daftarModel->insert_siswa();
            $this->load->library('session');
            $this->session->set_flashdata('item',$this->input->post('nisn'));
            redirect('pendaftaran/lihatdata');
        }
    }

    public function lihatData(){
        $nisn=$this->session->flashdata('item');
        $data['data']= $this->daftarModel->get_data($nisn);
        $data['title'] = 'Biodata yang sudah terinput';
        $this->load->view('includes/header', $data);
        $this->load->view('ppdb/lihatData');
        $this->load->view('includes/footer');
    }
    public function edit_data($id){
        $data['title'] = 'PPDB SMK Citra Bangsa';
        $this->load->view('includes/header',$data);
        $this->load->view('ppdb/edit',$id);
        $this->load->view('includes/footer');
    }
    public function login_user(){
        $data['tittle']="Login siswa";
        $this->load->view('includes/header',$data);
        $this->load->view('ppdb/login_user');
        $this->load->view('includes/footer');
    }
    public function help(){
        $data['title'] = 'PPDB SMK Citra Bangsa';
        $this->load->view('includes/header',$data);
        $this->load->view('ppdb/help');
        $this->load->view('includes/footer');
    }
}