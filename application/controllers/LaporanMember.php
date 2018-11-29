<?php
	class LaporanMember extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelLaporanMember');
		}

		public function list_masuk(){
		$data = array(
			'body'           => 'PetugasView/LaporanMasuk/List', 
			'daftarmasuk'   => $this->ModelLaporanMember->list_masuk()
            
		);

			//var_dump($data);
			if($this->ion_auth->is_admin()){
                $this->load->view('Index', $data);
        }else{
                $this->load->view('PetugasView/Index', $data);
        }
		}
        
        
        public function list_retur(){
		$data = array(
			'body'           => 'PetugasView/LaporanRetur/List', 
			'daftarretur'   => $this->ModelLaporanMember->list_retur()
            
		);

			if($this->ion_auth->is_admin()){
                $this->load->view('Index', $data);
        }else{
                $this->load->view('PetugasView/Index', $data);
        }
		}

        	public function list_keluar(){
		$data = array(
			'body'           => 'PetugasView/LaporanKeluar/List', 
			'daftarkeluar'   => $this->ModelLaporanMember->list_keluar()
            
		);

			if($this->ion_auth->is_admin()){
                $this->load->view('Index', $data);
        }else{
                $this->load->view('PetugasView/Index', $data);
        }
		}
	}
?>