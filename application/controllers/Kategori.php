<?php
	class Kategori extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelKategori');
		}

		public function list_kategori(){
		$data = array(
			'body'           => 'Kategori/List', 
			'daftarkategori'   => $this->ModelKategori->list_kategori()->result()
            
		);

			$this->load->view('Index', $data);

		}

		public function input(){
	        $data = array(
	            'body'      => 'Kategori/Input',
	            'form'      => 'Kategori/Form',
	        );

	        $this->load->view('Index', $data);
	    }

	    public function insert(){
	        $data = array(
	            'id_kategori' => $this->input->post('id_kategori'),
	            'nama_kategori' => $this->input->post('nama_kategori')
	        );
	        $this->db->insert('kategori',$data);
        	redirect('Kategori/list_kategori');
	    }

	    public function delete(){
	    	$id_kategori = $this->uri->segment(3);
			$this->db->where('id_kategori',$id_kategori);
			$this->db->delete('kategori');
			redirect('Kategori/list_kategori');
	    }

	    public function edit(){
	    	$id_kategori = $this->uri->segment(3);
			$data = array(
		 	'body'      => 'Kategori/Update',
	        'form'      => 'Kategori/FormEdit',
	        'kategori'  => $this->ModelKategori->update($id_kategori)->row_array()
	        );

		 	$this->load->view('Index', $data);
	    }

	    public function update(){
		 	$id_kategori = $this->input->post('id_kategori');
		 	$data = array(
				'id_kategori'     	=> $this->input->post('idkategori'),
	            'nama_kategori' 	=> $this->input->post('namakategori')
			);
		 	$this->db->where('id_kategori',$id_kategori);
	        $this->db->update('kategori',$data);
	        redirect('Kategori/list_kategori');
		}
	}
?>