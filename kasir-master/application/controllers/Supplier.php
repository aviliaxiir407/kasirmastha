<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') !== 'login' ) {
			redirect('/');
		}
		$this->load->model('supplier_model');
	}

	public function index()
	{
		$data['supplier'] = $this->supplier_model->viewsupplier();
        $this->load->view('supplier', $data);
	}

	public function add()
	{
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('alamat', 'Alamat', 'required');
        $validation->set_rules('telp', 'Telepon', 'required');
        $validation->set_rules('ket', 'Keterangan', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('tambah_supplier');
        } else {
          $this->supplier_model->tambah();
          redirect('supplier');
        }
	}

	public function delete($id_supplier)
	{
		$this->supplier_model->delete($id_supplier);
		echo '<script>
                alert("Sukses Menghapus Data ");
                window.location="'.base_url('supplier').'"
            </script>';
	}

	function edit($id_supplier){
		$where = array('id_supplier' => $id_supplier);
		$data['supplier'] = $this->supplier_model->edit_data($where,'supplier')->result();
		$this->load->view('edit_supplier',$data);
		}
	
	function update(){
			$id_supplier = $this->input->post('id_supplier');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$telp = $this->input->post('telp');
			$keterangan = $this->input->post('ket');
	
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'telepon' => $telp,
				'keterangan' => $keterangan
			);
		 
			$where = array(
				'id_supplier' => $id_supplier
			);
		 
			$this->supplier_model->update_data($where,$data,'supplier');
			redirect('supplier');
		}

	/*public function get_supplier()
	{
		$id = $this->input->post('id');
		$supplier = $this->supplier_model->getSupplier($id);
		if ($supplier->row()) {
			echo json_encode($supplier->row());
		}
	}

	public function search()
	{
		header('Content-type: application/json');
		$supplier = $this->input->post('supplier');
		$search = $this->supplier_model->search($supplier);
		foreach ($search as $supplier) {
			$data[] = array(
				'id' => $supplier->id,
				'text' => $supplier->nama
			);
		}
		echo json_encode($data);
	}*/

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */