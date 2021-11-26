<?php
class M_kegiatan extends CI_Model
{
    private $table = "kegiatan";


    public function semua_kegiatan()
    {
        $this->db->select('*');



        return $this->db->get($this->table)->result();
    }
    public function per_kegiatan()
    {
        $this->db->select('*');
        $this->db->where('CAST(hari AS DATE) = CAST( curdate() AS DATE)');



        return $this->db->get($this->table)->result();
    }
}
