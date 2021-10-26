<?php
class M_teacher extends CI_Model
{
    private $table = "guru";

    public function main_guru($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        return $this->db->get($this->table)->result();
    }
    	public function show_nilai_siswa(){
		$this->db->select('*');
		$this->db->join('skpd','skpd.id_skpd = bidang.id_skpd');
		// $this->db->join('program','program.id_skpd = bidang.id_skpd');
		// $this->db->where('id_bid>0');
			$this->db->where('id_level>0');

		return $this->db->get($this->table)->result();
        }

}
