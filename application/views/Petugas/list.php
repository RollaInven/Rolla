<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Petugas</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Petugas/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th >No</th>
              <th >Username</th>
              <th>Kode Pegawai</th>
              <th>Nama Pegawai</th>
              <th>Alamat Pegawai</th>
              <th>No Telp</th>
              <th>Level</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarpetugas as $petugas) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $petugas->username ?></td>
              <td><?php echo $petugas->kode_pegawai ?></td>
              <td><?php echo $petugas->nama_pegawai ?></td>
              <td><?php echo $petugas->alamat_pegawai ?></td>
              <td><?php echo $petugas->notelp_pegawai ?></td>
              <td><?php echo $petugas->level_id_level ?></td>
              <td>
                <a href="<?php echo base_url().'Petugas/edit/'.$petugas->username?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a> 
                <a href="<?php echo base_url().'Petugas/delete/'.$petugas->username?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
              </td> 
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>
