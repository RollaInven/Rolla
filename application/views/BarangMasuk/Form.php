<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Barang Masuk</h3>

    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Kode Barang</label>
                    <form id="id_search" action="<?php echo site_url('BarangMasuk/getBarang');?>" method="GET">
                    <input type="number" name="title" placeholder="kodebarang" id="title" style="color: #000;">
                </form>
         		</td>
         	</tr>
         	<tr>
         		<td>
              <input type="hidden" name="kode" value=""/>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Barang</label>
                    <input type="text" name="nama" placeholder="namabarang" style="color: #000;"readonly>
                    <!-- auto -->
         		</td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Stok Barang</label>
                    <input type="number" name="stok" placeholder="stokbarang" style="color: #000;">
                </td>
         	</tr>
            <tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Kategori</label>
                    <input type="text" name="kategori" placeholder="kategori" style="color: #000;"readonly>
                    <!-- auto -->
                </td>
            </tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Tempat Menyimpan</label>
                    <input type="text" name="simpan" placeholder="simpan" style="color: #000;"readonly>
                </td>
         	</tr>
          <style>
            #gambarBarang{
              max-width: 100%; max-height: 100%; height: auto;width: auto;
            }
          </style>
            <tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Gambar</label>
                    <div style="float;left width: 200px; height: 200px">
                      <img src="" id="gambarBarang" />
                    </div>
                    
                    <!-- <input id="gambar" name="gambar" type="file" class="validate"> -->
                    <!-- auto --> 
                </td>
            </tr>
        </table>
       <div class="form-group">
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Simpan </button>
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
                        </div> --><!-- /.modal-content -->
                    <!-- </div> --><!-- /.modal-dialog -->
                <!-- </div> -->
              <!-- <a href="<?php echo base_url()?>BarangMasuk/input" class="btn btn-md btn-danger"> Kembali </a> -->
              <button type="submit" class="btn btn-primary"> Simpan Data </button>
        </div>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>


<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>

<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
 <script type="text/javascript">
    $(document).ready(function(){
        $('#title').autocomplete({
            source: "<?php echo site_url('BarangMasuk/getBarang'); ?>",
            select: function(event, ui){
                $(this).val(ui.item.label);
                $('[name="nama"]').val(ui.item.nama);
                $('[name="kategori"]').val(ui.item.kategori);
                $('[name="simpan"]').val(ui.item.simpan);
                $('[name="kode"]').val($('#title').val());
                $('[id="gambarBarang"]').attr("src","<?php echo site_url(); ?>"+ui.item.gambar);
            }
        })
    })
</script>
