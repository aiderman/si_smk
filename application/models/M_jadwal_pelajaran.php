<?php
class M_jadwal_pelajaran extends CI_Model
{
    private $table = "jadwal_pelajaran";


    public function show_jadwal_pelajaran()
    {
        $this->db->select('*');


        $this->db->join('jurusan as j', 'j.id_jurusan=jadwal_pelajaran.idp_jurusan');

        $this->db->join('tahun_akademik as ta', 'ta.id_ta=jadwal_pelajaran.idp_ta');
        $this->db->join('guru as g', 'g.id_guru=jadwal_pelajaran.idp_guru');
        $this->db->join('kelas as k', 'k.id_kls=jadwal_pelajaran.idp_kls');


        return $this->db->get($this->table)->result();
    }
    public function show_jadwal_pelajaran_per_guru($id)
    {
        $this->db->select('*');

        $this->db->join('jurusan as j', 'j.id_jurusan=jadwal_pelajaran.idp_jurusan');
        $this->db->join('guru as g', 'g.id_guru=jadwal_pelajaran.idp_guru');
        $this->db->join('tahun_akademik as ta', 'ta.id_ta=jadwal_pelajaran.idp_ta');
        $this->db->join('mata_pelajaran as m', 'm.id_matapelajaran=jadwal_pelajaran.idp_matapelajaran');
        $this->db->join('kelas as k', 'k.id_kls=jadwal_pelajaran.idp_kls');
        $this->db->where('jadwal_pelajaran.idp_guru', $id);
        // $this->db->select('jadwal_pelajaran.hari_jadwal ORDER BY jadwal_pelajaran.hari_jadwal ASC');
        $this->db->order_by('jadwal_pelajaran.hari_jadwal ASC');


        return $this->db->get($this->table)->result();
    }
   
}
