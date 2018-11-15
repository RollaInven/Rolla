<?php
	class Laporan extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelLaporanMasuk');
		}

		public function list_masuk(){
		$data = array(
			'body'           => 'LaporanMasuk/List', 
			'daftarmasuk'   => $this->ModelLaporanMasuk->list_masuk()
            
		);

			//var_dump($data);
			$this->load->view('Index', $data);
		}
        
        
        public function list_retur(){
		$data = array(
			'body'           => 'LaporanRetur/List', 
			'daftarretur'   => $this->ModelLaporanMasuk->list_retur()
            
		);

			$this->load->view('Index', $data);
		}

        	public function list_keluar(){
		$data = array(
			'body'           => 'LaporanKeluar/List', 
			'daftarkeluar'   => $this->ModelLaporanMasuk->list_keluar()
            
		);

			$this->load->view('Index', $data);
		}
	}
?>