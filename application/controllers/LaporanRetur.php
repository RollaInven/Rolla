<?php
	class LaporanRetur extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelLaporanRetur');
		}

		public function list_retur(){
		$data = array(
			'body'           => 'LaporanRetur/List', 
			'daftarretur'   => $this->ModelLaporanRetur->list_retur()
            
		);

			$this->load->view('Index', $data);
		}



	}
?>