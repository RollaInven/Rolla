<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Edit Kategori</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <td>
              <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Id Kategori</label>
                  <input type="text" name="idkategori" placeholder="idkategori" style="color: #000;" value="<?php echo @$kategori['id_kategori']?>">
            </td>
          </tr>
          <tr>
            <td>
              <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Kategori</label>
                  <input type="text" name="namakategori" placeholder="namakategori" style="color: #000;" value="<?php echo @$kategori['nama_kategori']?>">
            </td>
          </tr>
        </table>
        <div class="form-group">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Simpan </button>
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <h2>Yakin Ingin Menyimpan Data?</h2>
                            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Tidak </button>
                <button type="submit" class="btn btn-primary"> Simpan Data </button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
              <a href="<?php echo base_url()?>Kategori/list_kategori" class="btn btn-md btn-danger"> Kembali </a>
            </div>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>
