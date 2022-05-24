<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftarModel extends CI_Model{
    
    public function insert_data(){

        $data = [
            'NISN' => htmlspecialchars($this->input->post('nisn')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'provinsi' => htmlspecialchars($this->input->post('provinsi')),
            'kotaKabupaten' => htmlspecialchars($this->input->post('kotaKabupaten')),
            'kodePos' => htmlspecialchars($this->input->post('kodePos')),
            'TTG' => htmlspecialchars($this->input->post('TTG')),
            'jenisKelamin' => $this->input->post('jenisKelamin'),
            'agama' => $this->input->post('agama'),
            'wargaNegara' => $this->input->post('wargaNegara'),
            'email' => htmlspecialchars($this->input->post('email')),
            'noTelepon' => htmlspecialchars($this->input->post('noTelepon')),
            'noHandPhone' => htmlspecialchars($this->input->post('noHandPhone')),
            'status' => $this->input->post('statusTerima'),
            'tgl_ijazah' => htmlspecialchars($this->input->post('tgl_ijazah')),
            'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah')),
            'alamat_sekolah' => htmlspecialchars($this->input->post('alamat_sekolah')),
            'nomor_ijazah' => htmlspecialchars($this->input->post('nomor_ijazah')),
            'jurusan' => $this->input->post('jurusan'),
            'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah')),
            'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah')),
            'pendidikan_ayah' => htmlspecialchars($this->input->post('pendidikan_ayah')),
            'nomor_hp_ayah' => htmlspecialchars($this->input->post('nomor_hp_ayah')),
            'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu')),
            'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu')),
            'pendidikan_ibu' => htmlspecialchars($this->input->post('pendidikan_ibu')),
            'nomor_hp_ibu' => htmlspecialchars($this->input->post('nomor_hp_ibu')),
            'alamat_keluarga' => htmlspecialchars($this->input->post('alamat_keluarga')),
            'nama_wali' => htmlspecialchars($this->input->post('nama_wali')),
            'pekerjaan_wali' => htmlspecialchars($this->input->post('pekerjaan_wali')),
            'pendidikan_wali' => htmlspecialchars($this->input->post('pendidikan_wali')),
            'nomor_hp_wali' => htmlspecialchars($this->input->post('nomor_hp_wali')),
            'alamat_wali' => htmlspecialchars($this->input->post('alamat_wali'))
        ];
        return $this->db->insert('biodata_siswa', $data);
    }
    public function insert_siswa(){
        function clean($string)
        {
            $string = str_replace('/', '', $string);
            return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        }
        $data =[
            'NISN' => htmlspecialchars($this->input->post('nisn')),
            'nama_siswa' => htmlspecialchars($this->input->post('nama')),
            'password' => clean($this->input->post('TTG'))
        ];
        return $this->db->insert('siswa', $data);
    }
    public function get_data($item){
        $query = $this->db->get_where("biodata_siswa",['NISN'=>$item]);
        return $query->result();
    }

}