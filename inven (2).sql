-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 11:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inven`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(25) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `gambar_barang` tinytext,
  `kategori_id_kategori` varchar(8) NOT NULL,
  `simpan_id_simpan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `gambar_barang`, `kategori_id_kategori`, `simpan_id_simpan`) VALUES
('45', 'Pisau ', 34000, 1000106, 'assets/image_upload/pisau4.jpg', '01', '001');

-- --------------------------------------------------------

--
-- Stand-in structure for view `barangmasuk`
-- (See below for the actual view)
--
CREATE TABLE `barangmasuk` (
`kode_masuk` varchar(8)
,`tgl_masuk` datetime
,`keterangan_masuk` tinytext
,`supplier_id_supplier` varchar(8)
,`users_id` int(11) unsigned
,`id` int(11) unsigned
,`ip_address` varchar(45)
,`username` varchar(100)
,`password` varchar(255)
,`salt` varchar(255)
,`email` varchar(254)
,`activation_code` varchar(40)
,`forgotten_password_code` varchar(40)
,`forgotten_password_time` int(11) unsigned
,`remember_code` varchar(40)
,`created_on` int(11) unsigned
,`last_login` int(11) unsigned
,`active` tinyint(1) unsigned
,`first_name` varchar(50)
,`last_name` varchar(50)
,`company` varchar(100)
,`phone` varchar(20)
,`id_supplier` varchar(8)
,`nama_supplier` varchar(25)
,`notelp_supplier` varchar(13)
,`alamat_supplier` tinytext
);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `kode_keluar` varchar(8) NOT NULL,
  `tgl_keluar` datetime DEFAULT NULL,
  `keterangan_keluar` tinytext,
  `users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`kode_keluar`, `tgl_keluar`, `keterangan_keluar`, `users_id`) VALUES
('MSK001', '2018-06-28 14:54:26', NULL, 1),
('MSK002', '2018-06-29 05:29:55', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `kode_masuk` varchar(8) NOT NULL,
  `tgl_masuk` datetime DEFAULT NULL,
  `keterangan_masuk` tinytext,
  `supplier_id_supplier` varchar(8) NOT NULL,
  `users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`kode_masuk`, `tgl_masuk`, `keterangan_masuk`, `supplier_id_supplier`, `users_id`) VALUES
('MSK001', '2018-06-25 18:56:00', NULL, '001', 1),
('MSK002', '2018-06-25 18:56:32', NULL, '001', 1),
('MSK003', '2018-06-28 14:53:30', NULL, '001', 1),
('MSK004', '2018-06-29 05:13:42', NULL, '001', 1),
('MSK005', '2018-06-29 05:29:47', NULL, '001', 1),
('MSK006', '2018-07-02 11:16:28', NULL, '001', 1),
('MSK007', '2018-07-02 11:17:05', NULL, '001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_retur`
--

CREATE TABLE `barang_retur` (
  `kode_retur` varchar(8) NOT NULL,
  `tgl_retur` datetime DEFAULT NULL,
  `keterangan_retur` tinytext,
  `supplier_id_supplier` varchar(8) NOT NULL,
  `users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang_retur`
--

INSERT INTO `barang_retur` (`kode_retur`, `tgl_retur`, `keterangan_retur`, `supplier_id_supplier`, `users_id`) VALUES
('MSK001', '2018-06-28 14:53:51', 'pecah', '001', 1),
('MSK002', '2018-06-28 14:53:52', 'pecah', '001', 1),
('MSK003', '2018-06-29 05:30:31', 'udhd', '001', 1),
('MSK004', '2018-07-02 11:14:57', 'barang hilang', '001', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detailmasuk`
-- (See below for the actual view)
--
CREATE TABLE `detailmasuk` (
`iddetail_masuk` varchar(8)
,`stok_masuk` int(11)
,`barang_id_barang` varchar(8)
,`barang_masuk_kode_masuk` varchar(8)
,`id_barang` varchar(8)
,`nama_barang` varchar(25)
,`harga_barang` int(11)
,`stok_barang` int(11)
,`gambar_barang` tinytext
,`kategori_id_kategori` varchar(8)
,`simpan_id_simpan` varchar(8)
,`kode_masuk` varchar(8)
,`tgl_masuk` datetime
,`keterangan_masuk` tinytext
,`supplier_id_supplier` varchar(8)
,`users_id` int(11) unsigned
);

-- --------------------------------------------------------

--
-- Table structure for table `detail_keluar`
--

CREATE TABLE `detail_keluar` (
  `iddetail_keluar` varchar(8) NOT NULL,
  `stok_keluar` int(11) DEFAULT NULL,
  `barang_id_barang` varchar(8) NOT NULL,
  `barang_keluar_kode_keluar` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_keluar`
--

INSERT INTO `detail_keluar` (`iddetail_keluar`, `stok_keluar`, `barang_id_barang`, `barang_keluar_kode_keluar`) VALUES
('BRG001', 1, '45', 'MSK001'),
('BRG002', 2, '45', 'MSK002');

-- --------------------------------------------------------

--
-- Table structure for table `detail_masuk`
--

CREATE TABLE `detail_masuk` (
  `iddetail_masuk` varchar(8) NOT NULL,
  `stok_masuk` int(11) DEFAULT NULL,
  `barang_id_barang` varchar(8) NOT NULL,
  `barang_masuk_kode_masuk` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_masuk`
--

INSERT INTO `detail_masuk` (`iddetail_masuk`, `stok_masuk`, `barang_id_barang`, `barang_masuk_kode_masuk`) VALUES
('BRG001', 7, '45', 'MSK001'),
('BRG002', 7, '45', 'MSK002'),
('BRG003', 12, '45', 'MSK003'),
('BRG004', 1, '45', 'MSK004'),
('BRG005', 5, '45', 'MSK005'),
('BRG006', 100, '45', 'MSK006'),
('BRG007', 1000000, '45', 'MSK007');

-- --------------------------------------------------------

--
-- Table structure for table `detail_retur`
--

CREATE TABLE `detail_retur` (
  `iddetail_retur` varchar(8) NOT NULL,
  `stok_retur` int(11) DEFAULT NULL,
  `keterangan_barangretur` tinytext,
  `barang_id_barang` varchar(8) NOT NULL,
  `barang_retur_kode_retur` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_retur`
--

INSERT INTO `detail_retur` (`iddetail_retur`, `stok_retur`, `keterangan_barangretur`, `barang_id_barang`, `barang_retur_kode_retur`) VALUES
('BRG001', 12, 'pecah', '45', 'MSK001'),
('BRG002', 12, 'pecah', '45', 'MSK002'),
('BRG003', 1, 'udhd', '45', 'MSK003'),
('BRG004', 1, 'barang hilang', '45', 'MSK004');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(8) NOT NULL,
  `nama_kategori` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('01', 'Alat Dapur'),
('02', 'Kamar Mandi'),
('03', 'Kamar Tidur'),
('04', 'Alat Kebersihan');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `namakategori`
-- (See below for the actual view)
--
CREATE TABLE `namakategori` (
`id_barang` varchar(8)
,`nama_barang` varchar(25)
,`harga_barang` int(11)
,`stok_barang` int(11)
,`gambar_barang` tinytext
,`kategori_id_kategori` varchar(8)
,`simpan_id_simpan` varchar(8)
,`id_kategori` varchar(8)
,`nama_kategori` varchar(25)
,`id_simpan` varchar(8)
,`nama_tmpsimpan` varchar(25)
);

-- --------------------------------------------------------

--
-- Table structure for table `simpan`
--

CREATE TABLE `simpan` (
  `id_simpan` varchar(8) NOT NULL,
  `nama_tmpsimpan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simpan`
--

INSERT INTO `simpan` (`id_simpan`, `nama_tmpsimpan`) VALUES
('001', 'A01');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(8) NOT NULL,
  `nama_supplier` varchar(25) DEFAULT NULL,
  `notelp_supplier` varchar(13) DEFAULT NULL,
  `alamat_supplier` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `notelp_supplier`, `alamat_supplier`) VALUES
('001', 'coba', '097868799', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1542247543, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Structure for view `barangmasuk`
--
DROP TABLE IF EXISTS `barangmasuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `barangmasuk`  AS  select `barang_masuk`.`kode_masuk` AS `kode_masuk`,`barang_masuk`.`tgl_masuk` AS `tgl_masuk`,`barang_masuk`.`keterangan_masuk` AS `keterangan_masuk`,`barang_masuk`.`supplier_id_supplier` AS `supplier_id_supplier`,`barang_masuk`.`users_id` AS `users_id`,`users`.`id` AS `id`,`users`.`ip_address` AS `ip_address`,`users`.`username` AS `username`,`users`.`password` AS `password`,`users`.`salt` AS `salt`,`users`.`email` AS `email`,`users`.`activation_code` AS `activation_code`,`users`.`forgotten_password_code` AS `forgotten_password_code`,`users`.`forgotten_password_time` AS `forgotten_password_time`,`users`.`remember_code` AS `remember_code`,`users`.`created_on` AS `created_on`,`users`.`last_login` AS `last_login`,`users`.`active` AS `active`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`company` AS `company`,`users`.`phone` AS `phone`,`supplier`.`id_supplier` AS `id_supplier`,`supplier`.`nama_supplier` AS `nama_supplier`,`supplier`.`notelp_supplier` AS `notelp_supplier`,`supplier`.`alamat_supplier` AS `alamat_supplier` from ((`barang_masuk` join `users`) join `supplier`) where ((`barang_masuk`.`users_id` = `users`.`id`) and (`barang_masuk`.`supplier_id_supplier` = `supplier`.`id_supplier`)) ;

-- --------------------------------------------------------

--
-- Structure for view `detailmasuk`
--
DROP TABLE IF EXISTS `detailmasuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detailmasuk`  AS  select `detail_masuk`.`iddetail_masuk` AS `iddetail_masuk`,`detail_masuk`.`stok_masuk` AS `stok_masuk`,`detail_masuk`.`barang_id_barang` AS `barang_id_barang`,`detail_masuk`.`barang_masuk_kode_masuk` AS `barang_masuk_kode_masuk`,`barang`.`id_barang` AS `id_barang`,`barang`.`nama_barang` AS `nama_barang`,`barang`.`harga_barang` AS `harga_barang`,`barang`.`stok_barang` AS `stok_barang`,`barang`.`gambar_barang` AS `gambar_barang`,`barang`.`kategori_id_kategori` AS `kategori_id_kategori`,`barang`.`simpan_id_simpan` AS `simpan_id_simpan`,`barang_masuk`.`kode_masuk` AS `kode_masuk`,`barang_masuk`.`tgl_masuk` AS `tgl_masuk`,`barang_masuk`.`keterangan_masuk` AS `keterangan_masuk`,`barang_masuk`.`supplier_id_supplier` AS `supplier_id_supplier`,`barang_masuk`.`users_id` AS `users_id` from ((`detail_masuk` join `barang`) join `barang_masuk`) where ((`detail_masuk`.`barang_id_barang` = `barang`.`id_barang`) and (`detail_masuk`.`barang_masuk_kode_masuk` = `barang_masuk`.`kode_masuk`)) ;

-- --------------------------------------------------------

--
-- Structure for view `namakategori`
--
DROP TABLE IF EXISTS `namakategori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `namakategori`  AS  select `barang`.`id_barang` AS `id_barang`,`barang`.`nama_barang` AS `nama_barang`,`barang`.`harga_barang` AS `harga_barang`,`barang`.`stok_barang` AS `stok_barang`,`barang`.`gambar_barang` AS `gambar_barang`,`barang`.`kategori_id_kategori` AS `kategori_id_kategori`,`barang`.`simpan_id_simpan` AS `simpan_id_simpan`,`kategori`.`id_kategori` AS `id_kategori`,`kategori`.`nama_kategori` AS `nama_kategori`,`simpan`.`id_simpan` AS `id_simpan`,`simpan`.`nama_tmpsimpan` AS `nama_tmpsimpan` from ((`barang` join `kategori`) join `simpan`) where ((`barang`.`kategori_id_kategori` = `kategori`.`id_kategori`) and (`barang`.`simpan_id_simpan` = `simpan`.`id_simpan`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_barang_kategori_idx` (`kategori_id_kategori`),
  ADD KEY `fk_barang_simpan1_idx` (`simpan_id_simpan`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`kode_keluar`),
  ADD KEY `fk_barang_keluar_users1_idx` (`users_id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`kode_masuk`),
  ADD KEY `fk_barang_masuk_supplier1_idx` (`supplier_id_supplier`),
  ADD KEY `fk_barang_masuk_users1_idx` (`users_id`);

--
-- Indexes for table `barang_retur`
--
ALTER TABLE `barang_retur`
  ADD PRIMARY KEY (`kode_retur`),
  ADD KEY `fk_barang_retur_supplier1_idx` (`supplier_id_supplier`),
  ADD KEY `fk_barang_retur_users1_idx` (`users_id`);

--
-- Indexes for table `detail_keluar`
--
ALTER TABLE `detail_keluar`
  ADD PRIMARY KEY (`iddetail_keluar`),
  ADD KEY `fk_detail_keluar_barang1_idx` (`barang_id_barang`),
  ADD KEY `fk_detail_keluar_barang_keluar1_idx` (`barang_keluar_kode_keluar`);

--
-- Indexes for table `detail_masuk`
--
ALTER TABLE `detail_masuk`
  ADD PRIMARY KEY (`iddetail_masuk`),
  ADD KEY `fk_detail_masuk_barang1_idx` (`barang_id_barang`),
  ADD KEY `fk_detail_masuk_barang_masuk1_idx` (`barang_masuk_kode_masuk`);

--
-- Indexes for table `detail_retur`
--
ALTER TABLE `detail_retur`
  ADD PRIMARY KEY (`iddetail_retur`),
  ADD KEY `fk_detail_retur_barang1_idx` (`barang_id_barang`),
  ADD KEY `fk_detail_retur_barang_retur1_idx` (`barang_retur_kode_retur`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simpan`
--
ALTER TABLE `simpan`
  ADD PRIMARY KEY (`id_simpan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_kategori` FOREIGN KEY (`kategori_id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_simpan1` FOREIGN KEY (`simpan_id_simpan`) REFERENCES `simpan` (`id_simpan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `fk_barang_keluar_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `fk_barang_masuk_supplier1` FOREIGN KEY (`supplier_id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_masuk_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barang_retur`
--
ALTER TABLE `barang_retur`
  ADD CONSTRAINT `fk_barang_retur_supplier1` FOREIGN KEY (`supplier_id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_retur_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_keluar`
--
ALTER TABLE `detail_keluar`
  ADD CONSTRAINT `fk_detail_keluar_barang1` FOREIGN KEY (`barang_id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_keluar_barang_keluar1` FOREIGN KEY (`barang_keluar_kode_keluar`) REFERENCES `barang_keluar` (`kode_keluar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_masuk`
--
ALTER TABLE `detail_masuk`
  ADD CONSTRAINT `fk_detail_masuk_barang1` FOREIGN KEY (`barang_id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_masuk_barang_masuk1` FOREIGN KEY (`barang_masuk_kode_masuk`) REFERENCES `barang_masuk` (`kode_masuk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_retur`
--
ALTER TABLE `detail_retur`
  ADD CONSTRAINT `fk_detail_retur_barang1` FOREIGN KEY (`barang_id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_retur_barang_retur1` FOREIGN KEY (`barang_retur_kode_retur`) REFERENCES `barang_retur` (`kode_retur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
