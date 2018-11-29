<?php

class barangmember extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('ModelBarang');
        $this->load->model('ModelKategori');
        $this->load->model('ModelSimpan');
	}

	public function list_barang(){
		$data = array(
			'body'           => 'PetugasView/Barang/List', 
			'daftarbarang'   => $this->ModelBarang->list_barang(),
            
		);

        if($this->ion_auth->is_admin()){
                $this->load->view('Index', $data);
        }else{
                $this->load->view('PetugasView/Index', $data);
        }

		
	}

	public function input(){
        //$a = $this->ModelKategori->list_kategori()->result();
        $data = array(
        'body'      => 'Barang/Input',
        'form'      => 'Barang/Form',
        'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
        'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
        );
        $this->load->view('Index', $data);
    }

    public function insert(){
        $dir = 'assets/image_upload/';
        $config['upload_path']      = 'assets/image_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
        // $config['max_width']        = '400';
        // $config['max_height']       = '200';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
                'body'      => 'Barang/Input',
                'form'      => 'Barang/Form',
                'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
                'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
            );
            $this->load->view('Index', $error);
        }else{
        $data = array(
            'id_barang'     => $this->input->post('kode'),
            'nama_barang' => $this->input->post('nama'),
            'harga_barang' => $this->input->post('harga'),
            'stok_barang' => $this->input->post('stok'),
            'simpan_id_simpan' => $this->input->post('simpan'),
            'gambar_barang' => $dir.$this->upload->data('file_name'),
            'kategori_id_kategori' => $this->input->post('kat'),
            
        );
        $this->db->insert('barang',$data);
        redirect('Barang/list_barang');
        }   
    }

    public function delete(){
        $id_barang = $this->uri->segment(3);
        $this->ModelBarang->delete($id_barang);
        redirect('Barang/list_barang');
    }

    public function edit(){
            $id_barang = $this->uri->segment(3);
            $data = array(
            'body'      => 'Barang/Update',
            'form'      => 'Barang/FormEdit',
            'barang'  => $this->ModelBarang->update($id_barang)->row_array(),
            'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
            'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
            );

            $this->load->view('Index', $data);
        }

        public function update(){
            $id_barang = $this->input->post('id_barang');
            $dir = 'assets/image_upload/';
            $config['upload_path']      = 'assets/image_upload/';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';
            // $config['max_width']            = '400';
            // $config['max_height']           = '200';
                $this->load->library('upload', $config);
                $this->upload->initialize($config); 
            if (!$this->upload->do_upload('gambar')) {
                $error = array(
                    'error'     => $this->upload->display_errors(),
                    'body'      => 'Barang/Update',
                    'form'      => 'Barang/FormEdit',
                    'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
                    'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
                );
                $this->load->view('Index', $error);
            }else{
            $data = array(
                'id_barang'     => $this->input->post('kode'),
                'nama_barang' => $this->input->post('nama'),
                'harga_barang' => $this->input->post('harga'),
                'stok_barang' => $this->input->post('stok'),
                'simpan_id_simpan' => $this->input->post('simpan'),
                'gambar_barang' => $dir.$this->upload->data('file_name'),
                'kategori_id_kategori' => $this->input->post('kat')
            );
            $this->db->where('id_barang',$id_barang);
            $this->db->update('barang',$data);
            redirect('Barang/list_barang');
        }
}
}
?>