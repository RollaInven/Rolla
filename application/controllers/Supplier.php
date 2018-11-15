<?php
	class Supplier extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('ModelSupplier');
		}

		public function list_supplier(){
		$data = array(
			'body'           => 'Supplier/List', 
			'daftarsupplier'   => $this->ModelSupplier->list_supplier()->result()
            
		);

			$this->load->view('Index', $data);

		}

		public function input(){
	        $data = array(
	            'body'      => 'Supplier/Input',
	            'form'      => 'Supplier/Form'
	        );

	        $this->load->view('Index', $data);
	    }

	    public function insert(){
	        $data = array(
	            'id_supplier'     	=> $this->input->post('idsupplier'),
	            'nama_supplier' 	=> $this->input->post('namasupplier'),
	            'alamat_supplier' => $this->input->post('alamatsupplier'),
	            'notelp_supplier' => $this->input->post('notelp')
	        );
	        $this->db->insert('supplier',$data);
	        redirect('Supplier/list_supplier');
	    }

	    public function delete(){
	    	$id_supplier = $this->uri->segment(3);
			$this->db->where('id_supplier',$id_supplier);
			$this->db->delete('supplier');
		 	redirect('Supplier/list_supplier');
	    }

	    public function edit(){
	    	$id_supplier = $this->uri->segment(3);
			$data = array(
		 	'body'      => 'Supplier/Update',
	        'form'      => 'Supplier/FormEdit',
	        'supplier'  => $this->ModelSupplier->update($id_supplier)->row_array()
		 	);

		 	$this->load->view('Index', $data);
	    }

	    public function update(){
		 	$id_supplier = $this->input->post('id_supplier');
		 	$data = array(
				'id_supplier'     	=> $this->input->post('idsupplier'),
	            'nama_supplier' 	=> $this->input->post('namasupplier'),
	            'alamat_supplier' => $this->input->post('alamatsupplier'),
	            'notelp_supplier' => $this->input->post('notelp')
			);
		 	$this->db->where('id_supplier',$id_supplier);
	        $this->db->update('supplier',$data);
	        redirect('Supplier/list_supplier');
		}
	}
?>