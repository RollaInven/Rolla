<?php

	class LaporanKeluar extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelLaporanKeluar');
		}

		public function list_keluar(){
		$data = array(
			'body'           => 'LaporanKeluar/List', 
			'daftarkeluar'   => $this->ModelLaporanKeluar->list_keluar()
            
		);

			$this->load->view('Index', $data);
		}
	}

?>