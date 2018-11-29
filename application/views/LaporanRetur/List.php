<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Laporan Pereturan Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Detail</th>
              <th>Jumlah Barang</th>
              <th>Keterangan Retur</th>
              <th>Kode Barang Retur</th>
              <th>Nama Barang</th>
              <th>Tempat Simpan</th>
              <th>Gambar</th>
              <th>Kategori</th>
              <th>Tanggal Retur</th>
              <!-- <th>Nama Supplier</th> -->
              <th>Nama Pegawai</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarretur as $Laporan) { ?>
              <div style="background-color: #0B2161; color: #000000">
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $Laporan->iddetail_retur ?></td>
                  <td><?php echo $Laporan->stok_retur ?></td>
                  <td><?php echo $Laporan->keterangan_barangretur ?></td>
                  <td><?php echo $Laporan->kode_retur ?></td>
                  <td><?php echo $Laporan->nama_barang ?></td>
                  <td><?php echo $Laporan->nama_tmpsimpan ?></td>
                  <td>
                    <img class="img-thumbnail" width="350px" height="197px" src="<?php echo base_url().$Laporan->gambar_barang?>"/>
                  </td>
                  <td><?php echo $Laporan->nama_kategori ?></td>
                  <td><?php echo $Laporan->tgl_retur ?></td>
                  <!-- <td><?php echo $Laporan->nama_supplier ?></td> -->
                  <td><?php echo $Laporan->username ?></td>
                </tr>
              </div>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>