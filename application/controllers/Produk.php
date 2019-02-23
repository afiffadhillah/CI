<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller 
{


	public function index(){
        // echo "tes aja ini";
        $data['page']="produk/form";
        $this-> load ->view('main',$data);
		}

			public function submit()

		{
			$this->load->model('produk_model');

			$produk = $this->input->post();
			// $pelanggan['pelangganId'] = "P002";

			$this->produk_model->add($produk);
		}

		public function show_list_produk()
		{

			$data['page'] = "produk/list_produk";
			$this->load->model('produk_model');
			$data["produk"] = $this->produk_model->get_produk();
			// $this->load->view('pelanggan/list_pelanggan',$data);
			$this->load->view('main',$data);
		}
		public function hapus_produk() 

		{	
			$this->load->model('produk_model');
			$namaproduk = $this->uri->segment(3);
			// echo $pelengganId;
			$this->produk_model->hapus_produk($namaproduk);

		}

}
