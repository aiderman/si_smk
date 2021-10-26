<?php
class M_teacher extends CI_Model
{
    private $table = "siswa";

    public function show_nilai_siswa()
    {
        $this->db->select('*');
        $this->db->join('jadwal_siswa as js', 'siswa.id_siswa=js.idp_siswa');
        $this->db->join('jadwal_pelajaran as jp', 'js.id_siswa=js.idp_siswa');
        // $this->db->join('program','program.id_skpd = bidang.id_skpd');
        // $this->db->where('id_bid>0');
        // $this->db->where('id_level>0');

        return $this->db->get($this->table)->result();
    }
}
