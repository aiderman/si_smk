<?php
class M_jadwal_siswa extends CI_Model
{
    private $table = "jadwal_siswa";


    public function tampil_nilai_siswa()
    {
        $this->db->select('*');

        $this->db->join('siswa', 'siswa.id_siswa=jadwal_siswa.idp_siswa');
        $this->db->join('jadwal_pelajaran as jp', 'jp.id_jadwal=jadwal_siswa.idp_jadwal');
        $this->db->join('mata_pelajaran as mp', 'mp.id_matapelajaran=jadwal_siswa.idp_matapelajaran');
        $this->db->join('kelas as k', 'k.id_kls=jadwal_siswa.idp_kls');
        $this->db->join('jurusan as j', 'j.id_jurusan=jadwal_siswa.idp_jurusan');


        return $this->db->get($this->table)->result();
    }

    public function tampil_nilai_per_siswa($id)
    {
        $this->db->select('*');

        $this->db->join('siswa', 'siswa.id_siswa=jadwal_siswa.idp_siswa');
        $this->db->join('jadwal_pelajaran as jp', 'jp.id_jadwal=jadwal_siswa.idp_jadwal');
        $this->db->join('mata_pelajaran as mp', 'mp.id_matapelajaran=jadwal_siswa.idp_matapelajaran');
        $this->db->join('kelas as k', 'k.id_kls=jadwal_siswa.idp_kls');
        $this->db->join('jurusan as j', 'j.id_jurusan=jadwal_siswa.idp_jurusan');
        $this->db->where('jadwal_siswa.idp_siswa', $id);
        $this->db->order_by('nama_matapelajaran ASC');


        return $this->db->get($this->table)->result();
    }

    public function show_jadwal_pelajaran_per_siswa($id)
    {
        $this->db->select('*');

        $this->db->join('jurusan as j', 'j.id_jurusan=jadwal_siswa.idp_jurusan');
        $this->db->join('siswa as g', 'g.id_siswa=jadwal_siswa.idp_siswa');
        $this->db->join('jadwal_pelajaran as jp', 'jp.id_jadwal=jadwal_siswa.idp_jadwal');
        // $this->db->join('tahun_akademik as ta', 'ta.id_ta=jadwal_siswa.idp_ta');
        $this->db->join('mata_pelajaran as m', 'm.id_matapelajaran=jadwal_siswa.idp_matapelajaran');
        $this->db->join('kelas as k', 'k.id_kls=jadwal_siswa.idp_kls');
        $this->db->where('jadwal_siswa.idp_siswa', $id);

        $this->db->order_by('hari_jadwal ASC');


        return $this->db->get($this->table)->result();
    }
}
