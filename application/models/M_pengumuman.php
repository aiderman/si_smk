<?php
class M_pengumuman extends CI_Model
{
    private $table = "pengumuman";


    public function pengumuman()
    {
        $this->db->select('*');



        return $this->db->get($this->table)->result();
    }
}
