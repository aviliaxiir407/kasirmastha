<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	private $table = 'master.produk';

	public function view()
	{
		$this->db->order_by('id_produk', 'ASC');
        return $this->db->from('master.produk')
          ->join('master.kategori_produk', 'master.produk.id_kategori=master.kategori_produk.id_kategori')
          ->get()
		  ->result_array();

		  
	}

	public function get_kategori(){
		$query = $this->db->get('master.kategori_produk')->result();
		return $query;
	}

	public function tambah()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama', true),
            'id_kategori' => $this->input->post('kategori', true),
            'harga_beli' => $this->input->post('beli', true),
			'harga_jual' => $this->input->post('jual', true),
			'harga_reseller' => $this->input->post('resell', true)
        );
          $this->db->insert($this->table, $data);
    }

	function edit_data($where,$table){  
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

	/*public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}

	public function getProduk($id)
	{
		$this->db->select('produk.id, produk.barcode, produk.nama_produk, produk.harga, produk.stok, kategori_produk.id as kategori_id, kategori_produk.kategori, satuan_produk.id as satuan_id, satuan_produk.satuan');
		$this->db->from($this->table);
		$this->db->join('kategori_produk', 'produk.kategori = kategori_produk.id');
		$this->db->join('satuan_produk', 'produk.satuan = satuan_produk.id');
		$this->db->where('produk.id', $id);
		return $this->db->get();
	}

	public function getBarcode($search='')
	{
		$this->db->select('produk.id, produk.barcode, produk.nama_produk');
		$this->db->like('barcode', $search);
		return $this->db->get($this->table)->result();
	}

	public function getNama($id)
	{
		$this->db->select('nama_produk, stok');
		$this->db->where('id', $id);
		return $this->db->get($this->table)->row();
	}

	public function getStok($id)
	{
		$this->db->select('stok, nama_produk, harga, barcode');
		$this->db->where('id', $id);
		return $this->db->get($this->table)->row();
	}

	public function produkTerlaris()
	{
		return $this->db->query('SELECT produk.nama_produk, produk.terjual FROM `produk` 
		ORDER BY CONVERT(terjual,decimal)  DESC LIMIT 5')->result();
	}

	public function dataStok()
	{
		return $this->db->query('SELECT produk.nama_produk, produk.stok FROM `produk` ORDER BY CONVERT(stok, decimal) DESC LIMIT 50')->result();
	}
	*/

}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */