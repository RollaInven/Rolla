<?php
	class Petugas extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelPetugas');
        	$this->load->model('ModelLevel');
		}

		public function list_petugas(){
		$data = array(
			'body'           => 'Petugas/List', 
			'daftarpetugas'   => $this->ModelPetugas->list_petugas()->result()
            
		);

			$this->load->view('Index', $data);

		}

		public function input(){
	        $data = array(
	            'body'      => 'Petugas/Input',
	            'form'      => 'Petugas/Form',
	            'daftarlevel' => $this->ModelLevel->list_level()->result()
	        );

	        $this->load->view('Index', $data);
	    }

	    public function insert(){
	        $data = array(
	            'username'     	=> $this->input->post('username'),
	            // 'password' 		=> $this->input->post('password'),
	            'kode_pegawai' 	=> $this->input->post('kodepegawai'),
	            'nama_pegawai' 	=> $this->input->post('namapegawai'),
	            'alamat_pegawai' => $this->input->post('alamatpegawai'),
	            'notelp_pegawai' => $this->input->post('notelp'),
	            'level_id_level' => $this->input->post('level')
	        );
	        $this->db->insert('login',$data);
	        redirect('Petugas/list_petugas');
	    }

	    public function delete(){
	    	$username = $this->uri->segment(3);
			$this->db->where('username',$username);
			$this->db->delete('login');
		 	redirect('Petugas/list_petugas');
	    }

	    public function edit(){
	    	$username = $this->uri->segment(3);
			$data = array(
		 	'body'      => 'Petugas/Update',
	        'form'      => 'Petugas/FormEdit',
	        'petugas'  => $this->ModelPetugas->update($username)->row_array(),
	        'daftarlevel' => $this->ModelLevel->list_level()->result()
		 	);

		 	$this->load->view('Index', $data);
	    }

	    public function update(){
		 	$username = $this->input->post('username');
		 	$data = array(
				'username'     	=> $this->input->post('username'),
	            // 'password' 		=> $this->input->post('password'),
	            'kode_pegawai' 	=> $this->input->post('kodepegawai'),
	            'nama_pegawai' 	=> $this->input->post('namapegawai'),
	            'alamat_pegawai' => $this->input->post('alamatpegawai'),
	            'notelp_pegawai' => $this->input->post('notelp'),
	            'level_id_level' => $this->input->post('level')
			);
		 	$this->db->where('username',$username);
	        $this->db->update('login',$data);
	        redirect('Petugas/list_petugas');
		}
	}
?>