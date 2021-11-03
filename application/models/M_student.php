<?php
class M_teacher extends CI_Model
{
    private $table = "siswa";

    public function jadwal_siswa()
    {
        $this->db->select('*');
        return $this->db->get($this->table)->result();
    }
    public function jadwal_siswa_individu($id_siswa)
    {
        $this->db->select('*');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get($this->table)->result();
    }
}
