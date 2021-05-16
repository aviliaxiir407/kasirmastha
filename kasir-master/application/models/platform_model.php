<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platform_model extends CI_Model {

	private $table = 'master.platform';

	public function create($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function read()
	{
		return $this->db->get($this->table)->result_array();
	}

	/*public function delete($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->delete($this->table);
	}*/

	public function delete($id_platform)
    {
        $this->db->where('id_platform', $id_platform);
        $this->db->delete($this->table);
    }

	public function getKategori($id)
	{
		$this->db->where('id_platform', $id);
		return $this->db->get($this->table);
	}

	public function search($search="")
	{
		$this->db->like('id_platform', $search);
		return $this->db->get($this->table)->result();
	}

}

/* End of file Kategori_produk_model.php */
/* Location: ./application/models/Kategori_produk_model.php */