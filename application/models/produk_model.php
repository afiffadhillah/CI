<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_model extends CI_Model {

	var $table = "produk";

	function add($data){
		$this->db->insert($this->table,$data);

		if ($this->db->affected_rows()>0){

			#code...
			redirect('produk/index');
		}
	}

	public function get_produk()
	{
		$this->db->select('*')
				->from('produk');
		$res = $this->db->get();

		return $res->result();
	}

	public function hapus_produk($namaproduk)
	{
		$this->db->where('namaproduk',$namaproduk);
		$this->db->delete('produk');

		if ($this->db->affected_rows()>0)
		{
			redirect('produk/show_list_produk');
		}
	}
}
