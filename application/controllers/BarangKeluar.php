<?php

class BarangKeluar extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('ModelBarangKeluar');
        $this->load->model('ModelKategori');
        $this->load->model('ModelSimpan');
    }

    public function list_keluar(){
        $data = array(
            'body'           => 'BarangKeluar/Form', 
            'daftarbarang'   => $this->ModelBarangKeluar->list_keluar(),
            
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
        'body'      => 'BarangKeluar/Input',
        'form'      => 'BarangKeluar/Form'
        //'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
        //'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
        );
        if($this->ion_auth->is_admin()){
                $this->load->view('Index', $data);
        }else{
                $this->load->view('PetugasView/Index', $data);
        }
    }

    public function insert(){
        $dir = 'assets/image_upload/';
        $config['upload_path']      = 'assets/image_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
                'body'      => 'BarangKeluar/Input',
                'form'      => 'BarangKeluar/Form',
                'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
                'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
            );
            $this->load->view('Index', $error);
        }else{
        $data = array(
            
            'kategori_id_kategori' => $this->input->post('kat'),
            
        );
        $this->db->insert('keluar',$data);
        redirect('BarangKeluar/list_keluar');
        }   
    }

    public function delete(){
        $id_masuk = $this->uri->segment(3);
        $this->ModelBarangKeluar->delete($id_keluar);
        redirect('BarangKeluar/list_keluar');
    }

    public function edit(){
            $id_barang = $this->uri->segment(3);
            $data = array(
            'body'      => 'BarangKeluar/Update',
            'form'      => 'BarangKeluar/FormEdit',
            //'keluar'  => $this->ModelBarangKeluar->update($id_keluar)->row_array(),
            //'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
            //'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
            );

            $this->load->view('Index', $data);
        }

        public function update(){
            $id_masuk = $this->input->post('id_keluar');
            $dir = 'assets/image_upload/';
            $config['upload_path']      = 'assets/image_upload/';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';
                $this->load->library('upload', $config);
                $this->upload->initialize($config); 
            if (!$this->upload->do_upload('gambar')) {
                $error = array(
                    'error'     => $this->upload->display_errors(),
                    'body'      => 'BarangKeluar/Update',
                    'form'      => 'BarangMasuk/FormEdit',
                    //'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
                    //'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
                );
                $this->load->view('Index', $error);
            }else{
            $data = array(
                
                'kategori_id_kategori' => $this->input->post('kat')
            );
            $this->db->where('id_barang',$id_barang);
            $this->db->update('barang',$data);
            redirect('Barang/list_barang');
        	}
		}
		
		public function insertKeluar(){
            $pegawai = $this->ion_auth->user()->row();
            var_dump($pegawai);
			$id = $this->input->post('kode');
			$stok = $this->input->post('stok');
			$tanggal = date('Y-m-d');
			
			$data = array(
							'iddetail_keluar'=>'',
							'tanggal'=>$tanggal,
							'barang_id_barang'=>$id,
							'stok_keluar'=>$stok,
                            'user_id_keluar'=>$pegawai->id);
			
			$query = $this->ModelBarangKeluar->insertData($data);
			if($query){
				echo "<script>
						alert('Insert Berhasil');
						location.href = '".base_url('BarangKeluar/input')."';
					  </script>";
			
			}else{
				$error = $this->dberror();
				echo "<script>
						alert('Insert Gagal<br>$error');
						window.history.back()
					  </script>";
			}
		}
}
?>