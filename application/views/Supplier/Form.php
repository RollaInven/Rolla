<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Tambah Supplier</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Id Supplier</label>
                    <input type="text" name="idsupplier" placeholder="idsupplier" style="color: #000;">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Supplier</label>
                    <input type="text" name="namasupplier" placeholder="namasupplier" style="color: #000;">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Alamat Supplier</label>
                    <input type="text" name="alamatsupplier" placeholder="alamatsupplier" style="color: #000;">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">No Telp Supplier</label>
                    <input type="number" name="notelp" placeholder="notelp" style="color: #000;">
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
              <a href="<?php echo base_url()?>Supplier/list_supplier" class="btn btn-md btn-danger"> Kembali </a>
        </div>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>