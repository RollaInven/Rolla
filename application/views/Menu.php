<ul class="nav" id="side-menu">
    <li class="treeview">
        <a href="<?php echo base_url()?>"><i class="glyphicon glyphicon-home"></i>      Home</a>
    </li>
    <li>
        <a href="#"><i class="glyphicon glyphicon-th-list"></i> Barang<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url()?>Barang/list_barang">   List Barang</a>
                </li>
            </ul>
    </li>
    <li>
        <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> Kategori<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li class="treeview">
                    <a href="<?php echo base_url()?>Kategori/list_kategori">   Kategori Barang</a>
                </li>
            </ul>
    </li>
    <li>
        <a href="#"><i class="glyphicon glyphicon-briefcase"></i> Tempat Simpan<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li class="treeview">
                    <a href="<?php echo base_url()?>Simpan/list_simpan"> List Tempat Simpan</a>
                </li>
            </ul>
    </li>
    <li>
        <a href="#"><i class="glyphicon glyphicon-user"></i>    Pegawai<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url()?>auth/index"> List Pegawai</a>
                </li>
            </ul>
    </li>
    <!-- <li>
        <a href="#"><i class="glyphicon glyphicon-map-marker"></i>    Supplier<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url()?>Supplier/list_supplier">List Supplier</a>
                </li>
            </ul>
    </li> -->
    <li>
        <a href="#"><i class="glyphicon glyphicon-file"></i>    Laporan<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url()?>Laporan/list_masuk">Masuk</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Laporan/list_keluar">Keluar</a>
                </li>
                <!-- <li>
                    <a href="<?php echo base_url()?>Laporan/list_retur">Retur</a>
                </li> -->
            </ul>
    </li>    
</ul>