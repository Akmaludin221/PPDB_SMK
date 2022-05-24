<?php

class admin_model extends CI_Model
{
    function get_data()
    {
        $query = $this->db->get("biodata_siswa");
        return $query->result();
    }
    function get_detail($item){
        $query = $this->db->get_where('biodata_siswa',['id'=>$item]);
        return $query->result();
    }
    function update($id){
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
        $this->db->where('id',$id);
        return $this->db->update('biodata_siswa',$data);
    }
    function delete($id){
        return $this->db->delete('biodata_siswa',['id'=>$id]);
    }
    
}