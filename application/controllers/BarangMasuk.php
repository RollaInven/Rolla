<?php

class BarangMasuk extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('ModelBarangMasuk');
        $this->load->model('ModelBarang');
        $this->load->model('ModelKategori');
        $this->load->model('ModelSimpan');
    }

    public function getBarang(){

        if (isset($_GET['term'])) {
            $result = $this->ModelBarang->getData($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'=>$row->id_barang,
                        'nama'=> $row->nama_barang,
                        'kategori'=>$row->nama_kategori,
                        'gambar'=>$row->gambar_barang,
                        'stok'=>$row->stok_barang,
                        'simpan'=> $row->nama_tmpsimpan)
                    ;
                echo json_encode($arr_result);

                }
            }
    }

    public function list_masuk(){
        $data = array(
            'body'           => 'BarangMasuk/List', 
            'daftarbarang'   => $this->ModelBarangMasuk->list_masuk(),
            
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
        'body'      => 'BarangMasuk/Input',
        'form'      => 'BarangMasuk/Form'
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
                'body'      => 'BarangMasuk/Input',
                'form'      => 'BarangMasuk/Form',
                'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
                'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
            );
            if($this->ion_auth->is_admin()){
                $this->load->view('Index', $error);
        }else{
                $this->load->view('PetugasView/Index', $error);
        }
        }else{
        $data = array(
            
            'kategori_id_kategori' => $this->input->post('kat'),
            
        );
        $this->db->insert('masuk',$data);
        redirect('BarangMasuk/list_masuk');
        }   
    }

    public function delete(){
        $id_masuk = $this->uri->segment(3);
        $this->ModelBarangMasuk->delete($id_masuk);
        redirect('BarangMasuk/list_masuk');
    }

    public function edit(){
            $id_barang = $this->uri->segment(3);
            $data = array(
            'body'      => 'BarangMasuk/Update',
            'form'      => 'BarangMasuk/FormEdit',
            //'masuk'  => $this->ModelBarangMasuk->update($id_masuk)->row_array(),
            //'daftarkategori' => $this->ModelKategori->list_kategori()->result(),
            //'daftarsimpan'   => $this->ModelSimpan->list_simpan()->result()
            );

            $this->load->view('Index', $data);
    }

        public function update(){
            $id_masuk = $this->input->post('id_masuk');
            $dir = 'assets/image_upload/';
            $config['upload_path']      = 'assets/image_upload/';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';
                $this->load->library('upload', $config);
                $this->upload->initialize($config); 
            if (!$this->upload->do_upload('gambar')) {
                $error = array(
                    'error'     => $this->upload->display_errors(),
                    'body'      => 'BarangMasuk/Update',
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
        public function insertMasuk(){
            $pegawai = $this->ion_auth->user()->row();
            $id = $this->input->post('kode');
            $stok = $this->input->post('stok');
            $tanggal = date('Y-m-d');
            
            $data = array(
                            'iddetail_masuk'=>'',
                            'tanggal'=>$tanggal,
                            'barang_id_barang'=>$id,
                            'stok_masuk'=>$stok,
                            'user_id'=>$pegawai->id);
            
            $query = $this->ModelBarangMasuk->insertData($data);
            if($query){
                echo "<script>
                        alert('Insert Berhasil');
                        location.href = '".base_url('BarangMasuk/input')."';
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