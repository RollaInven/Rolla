<div class="col-md-12 graphs">
	<div class="xs">
  	<h3>List Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Barang/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <?=form_open_multipart('Barang/insert')?>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Harga Barang</th>
              <th>Stok Barang</th>
              <th>Tempat Menyimpan</th>
              <th>Kategori</th>
              <th>Gambar</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarbarang as $d) { ?>
                
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $d->id_barang ?></td>
                  <td><?php echo $d->nama_barang ?></td>
                  <td>Rp. <?php echo number_format($d->harga_barang,0,",","."); ?></td>
                  <td><?php echo $d->stok_barang ?></td>
                  <td><?php echo $d->nama_tmpsimpan ?></td>
                  <td><?php echo $d->nama_kategori;?></td>
                  <td>
                    <img class="img-thumbnail" src="<?php echo base_url().$d->gambar_barang?>"/>
                  </td>
                  <td>
                    <a href="<?php echo base_url().'Barang/edit/'.$d->id_barang?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a> 
                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal<?php echo $d->id_barang ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</button>
    
                     <div class="modal fade" id="myModal<?php echo $d->id_barang ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                              <h2>Yakin Ingin Menghapus Data?</h2>
                              <h5 style="color: #000">Jika Tidak Bisa Menghapus, Silahkan Hapus Data Barang yang Memiliki Kode Barang yang Sama</h5>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                              <a href="<?php echo base_url().'Barang/delete/'.$d->id_barang?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
                            </div>
                          </div>
                        </div>
                    </td> 
                </tr>
            
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>