<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Edit Petugas</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Username</label>
                    <input type="text" name="username" placeholder="username" style="color: #000;" value="<?php echo @$petugas['username']?>">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Kode Pegawai</label>
                    <input type="text" name="kodepegawai" placeholder="kode pegawai" style="color: #000;" value="<?php echo @$petugas['kode_pegawai']?>">
         		</td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Pegawai</label>
                    <input type="text" name="namapegawai" placeholder="nama pegawai" style="color: #000;" value="<?php echo @$petugas['nama_pegawai']?>">
                </td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Alamat Pegawai</label>
                    <input type="text" name="alamatpegawai" placeholder="alamat pegawai" style="color: #000;" value="<?php echo @$petugas['alamat_pegawai']?>">
                </td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">No Telp Pegawai</label>
                    <input type="number" name="notelp" placeholder="no telp" style="color: #000;" value="<?php echo @$petugas['notelp_pegawai']?>">
                </td>
         	</tr>
         	<tr>
         		<td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Level Pegawai</label>
         			<select name="level" style="color: #000;">
					  <?php foreach ($daftarlevel as $lvl) { ?>
					    <option value="<?php echo @$lvl->id_level;?>"><?php echo $lvl->nama_level;?></option>
					  <?php } ?>
					</select>
         		</td>
         	</tr>
        </table>
        <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Kembali</button>
            </div>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>
