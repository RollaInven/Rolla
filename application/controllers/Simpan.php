<?php
	class Simpan extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelSimpan');
		}

		public function list_simpan(){
		$data = array(
			'body'           => 'Simpan/List', 
			'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
            
		);

			$this->load->view('Index', $data);

		}

		public function input(){
	        $data = array(
	            'body'      => 'Simpan/Input',
	            'form'      => 'Simpan/Form',
	        );

	        $this->load->view('Index', $data);
	    }

	    public function insert(){
	        $data = array(
	            'id_simpan' => $this->input->post('id_simpan'),
	            'nama_tmpsimpan' => $this->input->post('nama_tmpsimpan')
	        );
	        $this->db->insert('simpan',$data);
        	redirect('Simpan/list_simpan');
	    }

	    public function delete(){
	    	$id_simpan = $this->uri->segment(3);
			$this->db->where('id_simpan',$id_simpan);
			$this->db->delete('simpan');
			redirect('Simpan/list_simpan');
	    }

	    public function edit(){
	    	$id_simpan = $this->uri->segment(3);
			$data = array(
		 	'body'      => 'Simpan/Update',
	        'form'      => 'Simpan/FormEdit',
	        'simpan'  	=> $this->ModelSimpan->update($id_simpan)->row_array()
	        );

		 	$this->load->view('Index', $data);
	    }

	    public function update(){
		 	$id_simpan = $this->input->post('id_simpan');
		 	$data = array(
				'id_simpan' 		=> $this->input->post('idsimpan'),
	            'nama_tmpsimpan' 	=> $this->input->post('namatmpsimpan')
			);
		 	$this->db->where('id_simpan',$id_simpan);
	        $this->db->update('simpan',$data);
	        redirect('Simpan/list_simpan');
		}
	}
?>