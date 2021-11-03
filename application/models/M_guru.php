<?php
class M_guru extends CI_Model
{
    private $table = "guru";

    public function main_guru($id)
    {
        $this->db->where('id_guru', $id);

        return $this->db->get($this->table)->result();
    }
    public function jadwal_guru($id)
    {
        $this->db->select('*');


        $this->db->join('jadwal_pelajaran as jp', 'jp.id_jadwal=guru.id_guru');
        $this->db->where('guru.id_guru', $id);


        return $this->db->get($this->table)->result();
    }
}
