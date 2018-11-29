<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Kategori</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Kategori/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Kategori</th>
              <th>Nama Kategori</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarkategori as $kategori) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $kategori->id_kategori ?></td>
              <td><?php echo $kategori->nama_kategori ?></td>
              <td>
                <a href="<?php echo base_url().'Kategori/edit/'.$kategori->id_kategori?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a> 
                <!-- <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> Hapus </a> -->
               <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal<?php echo $kategori->id_kategori ?>"><span class="glyphicon glyphicon-trash"></span>Hapus</button>

                <div class="modal fade" id="myModal<?php echo $kategori->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>
                      <div class="modal-body">
                        <h2>Yakin Ingin Menghapus Data?</h2>
                        <h5 style="color: #000">Jika Tidak Bisa Menghapus, Silahkan Hapus Data Barang yang Memiliki Kategori yang Sama</h6>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                        <a href="<?php echo base_url().'Kategori/delete/'.$kategori->id_kategori?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
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