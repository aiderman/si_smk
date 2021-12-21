<?php
class M_siswa extends CI_Model
{
    private $table = "siswa";

    public function main_siswa($id)
    {
        $this->db->select('*');
        // $this->db->join('jurusan as j', 'j.id_jurusan=siswa.idp_jurusan');
        $this->db->where('siswa.nis_siswa', $id);
        return $this->db->get($this->table)->result();
    }


    
    public function cek_siswa($nis, $pass)
    {
        $this->db->select('*');
        // $this->db->join('jurusan as j', 'j.id_jurusan=siswa.idp_jurusan');
        $this->db->where('siswa.nis_siswa', $nis);
        $this->db->where('siswa.password_siswa', $pass);
        return $this->db->get($this->table)->result();
    }


    public function siswa_login($data)
    {
        $user = $data['user'];
        $pass = $data['pass'];
        $this->db->select('*');
        $this->db->where(['siswa.nis_siswa', $user], ['password_siswa', $pass]);
        return $this->db->get($this->table)->result();
    }


    public function jadwal_siswa_individu($id_siswa)
    {
        $this->db->select('*');
        $this->db->where('siswa.nis_siswa', $id_siswa);
        return $this->db->get($this->table)->result();
    }
   
}
