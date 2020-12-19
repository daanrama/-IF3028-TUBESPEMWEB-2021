<?php
 
class Home_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
    public function Laporan()
    {
        return $this->db->get('laporan')->result_array();
    }
    public function cariJudul($special = false)
	{
		$judul = $this->input->get('judul', TRUE);
		$data = $this->db->query("SELECT * from laporan where judul like '%$judul%' ");
		if($special)
		{
			return $data;
		}
    return $data->result();
	}

	public function Tampilan($id)
	{
		return $this->db->get_where('laporan', array('id'=>$id))->row_array();
	}
	
	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('laporan');
	}
}
?>
