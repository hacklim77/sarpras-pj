-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 05:32 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL DEFAULT 'Baik',
  `jumlah` int(11) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `id_kategori`, `merk`, `kondisi`, `jumlah`, `tgl_pembelian`, `status`) VALUES
(1, 'MO1', 'Meja Front Office', 2, '', 'Baik', 2, '2011-01-04', 1),
(2, 'TFO1', 'Telepon Front Office ', 1, 'Favorite                                          ', 'Baik', 1, '2016-02-03', 1),
(3, 'TFO2', 'Telepon Front Office ', 1, 'Panasonic', 'Baik', 1, '2011-07-07', 1),
(4, 'ZENA600', 'Meja TV Front Office', 2, 'ZENA', 'Baik', 1, '2015-07-10', 1),
(5, 'KO1', 'Kursi Front Office', 2, 'Chitose', 'Baik', 2, '2015-07-17', 1),
(6, 'KO2', 'Kursi Front Office Hijau', 2, 'Chitose', 'Baik', 1, '2015-03-04', 1),
(7, 'TVLG1', 'TV LG Front Office', 4, 'LG', 'Baik', 1, '2012-06-05', 1),
(8, 'TVBOX1', 'TV Box IP Streaming Telkom', 4, 'Huawei', 'Baik', 1, '2012-02-07', 1),
(9, 'KOT1', 'Kursi Tinggi Pink', 2, '', 'Baik', 2, '2013-06-08', 0),
(10, 'HG8245A', 'Modem Huawei Telkom', 4, 'Huawei', 'Baik', 1, '2014-06-07', 1),
(11, 'SFO1', 'Sofa Front Office', 2, '', 'Baik', 2, '2014-02-05', 1),
(12, 'ST-BENDERASTIKES', 'Bendera Stikes', 5, '', 'Baik', 1, '2016-03-06', 1),
(13, 'FC-27', 'HT Firstcom', 1, 'Firstcom', 'Baik', 6, '2014-09-30', 1),
(14, 'TOA', 'Speaker TOA Jinjing', 1, 'TOA', 'Baik', 1, '2015-11-26', 1),
(15, 'LCD - P', 'LCD Proyektor', 4, 'Acer', 'Baik', 1, '2017-08-10', 1),
(16, 'LCD-P2', 'LCD Proyektor', 4, 'Hitachi', 'Baik', 1, '2014-11-21', 1),
(17, 'SC-P', 'Screen Proyektor', 5, 'Brite', 'Baik', 1, '2016-10-18', 1),
(18, 'DRM', 'Drum Set', 6, 'Pearl Jam', 'Baik', 1, '2018-02-24', 1),
(19, 'Bass', 'Gitar Bass', 6, 'Katana', 'Baik', 1, '2018-02-24', 1),
(20, 'Gtr', 'Gitar ', 6, 'Ibanez', 'Baik', 1, '2018-02-24', 1),
(21, 'CORT', 'CORT GB 14 PJ', 6, 'CORT', 'Baik', 1, '2018-02-24', 1),
(22, 'MIC', 'Mic Huzalone ', 6, 'Huzalone', 'Baik', 1, '2018-02-24', 1),
(23, 'HRT', 'Speaker Bass', 6, 'Hartkey', 'Baik', 1, '2018-02-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `no_keluar` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` text NOT NULL,
  `status_kembali` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `no_keluar`, `nama_peminjam`, `nohp`, `tgl_keluar`, `tgl_kembali`, `keterangan`, `status_kembali`) VALUES
(57, 90922161, 'Rudi Widodo', '089888999555', '2022-09-15', '2022-09-16', 'acara', 0),
(58, 90922110, 'Candra', '087222333444', '2022-09-17', '2022-09-18', 'acara', 0),
(59, 90922239, 'tbang', '085666888666', '2022-09-21', '2022-09-22', 'sceq', 0),
(60, 90922101, 'Edi', '089888999000', '2022-09-23', '2022-09-23', 'eru', 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang_pinjam`
--

CREATE TABLE `barang_pinjam` (
  `id_barang_pinjam` int(11) NOT NULL,
  `id_barang_keluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_penomoran` text NOT NULL COMMENT 'penomoran1, penomoran2 (explode)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_pinjam`
--

INSERT INTO `barang_pinjam` (`id_barang_pinjam`, `id_barang_keluar`, `id_barang`, `jumlah`, `id_penomoran`) VALUES
(59, 57, 0, 1, ''),
(60, 58, 0, 1, ''),
(61, 59, 12, 0, ''),
(62, 59, 13, 0, ''),
(63, 60, 12, 0, ''),
(64, 60, 13, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `status`) VALUES
(1, 'Alat Komunikasi', 1),
(2, 'Mebel', 1),
(4, 'Alat Elektronik', 1),
(5, 'Non-Elektronik', 1),
(6, 'Alat Band', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_peminjaman`
--

CREATE TABLE `kategori_peminjaman` (
  `id_kategori_peminjaman` int(11) NOT NULL,
  `nama_kategori_peminjaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `status`) VALUES
(1, 'stock', 1),
(2, 'Lab 1', 1),
(3, 'Front Office', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `id_penomoran` int(11) NOT NULL,
  `tgl_mutasi` date NOT NULL,
  `id_lokasi_awal` int(11) NOT NULL,
  `id_lokasi_akhir` int(11) NOT NULL,
  `keterangan_mutasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `id_penomoran`, `tgl_mutasi`, `id_lokasi_awal`, `id_lokasi_akhir`, `keterangan_mutasi`) VALUES
(1, 14, '2018-03-16', 3, 2, 'dicoba'),
(2, 7, '2018-03-15', 3, 2, 'pengen tak pindah la kenopo to'),
(3, 7, '2018-03-19', 2, 3, 'keterangan 1'),
(4, 7, '2018-03-19', 3, 2, 'pindah'),
(5, 10, '2018-04-04', 3, 1, ''),
(6, 10, '2018-05-02', 1, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `opname`
--

CREATE TABLE `opname` (
  `id_opname` int(11) NOT NULL,
  `id_penomoran` int(11) NOT NULL,
  `tanggal_opname` date NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE `penempatan` (
  `id_penempatan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penomoran`
--

CREATE TABLE `penomoran` (
  `id_penomoran` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `penomoran` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `auto` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penomoran`
--

INSERT INTO `penomoran` (`id_penomoran`, `id_barang`, `id_lokasi`, `no_urut`, `penomoran`, `status`, `auto`) VALUES
(1, 1, 3, 0, '001/2011/stikesnas', 1, 0),
(2, 1, 3, 0, '002/2011/stikesnas', 1, 0),
(3, 2, 3, 0, '003/2016/stikesnas', 1, 0),
(4, 3, 3, 0, '004/2011/stikesnas', 1, 0),
(5, 4, 3, 0, '006/2015/stikesnas', 1, 0),
(6, 5, 3, 0, '007/2015/stikesnas', 1, 0),
(7, 5, 2, 0, '008/2015/stikesnas', 1, 2),
(8, 6, 3, 0, '009/2015/stikesnas', 1, 0),
(9, 6, 3, 0, '010/2017/stikesnas', 1, 0),
(10, 7, 3, 0, '011/2012/stikesnas', 1, 2),
(11, 8, 3, 0, '011/2017/stikesnas', 1, 0),
(12, 9, 3, 0, '013/2013/stikesnas', 1, 0),
(13, 9, 3, 0, '014/2013/stikesnas', 1, 0),
(14, 10, 2, 0, '015/2014/stikesnas', 1, 2),
(15, 11, 3, 0, '016/2014/stikesnas', 1, 0),
(16, 11, 3, 0, '017/2014/stikesnas', 1, 0),
(17, 12, 1, 1, '001/ST-BENDERASTIKES/2016/STIKESNAS/stock', 1, 1),
(18, 13, 1, 1, '001/FC-27/2014/STIKESNAS/stock', 1, 1),
(19, 13, 1, 2, '002/FC-27/2014/STIKESNAS/stock', 1, 1),
(20, 13, 1, 3, '003/FC-27/2014/STIKESNAS/stock', 1, 1),
(21, 13, 1, 4, '004/FC-27/2014/STIKESNAS/stock', 1, 1),
(22, 13, 1, 5, '005/FC-27/2014/STIKESNAS/stock', 1, 1),
(23, 13, 1, 6, '006/FC-27/2014/STIKESNAS/stock', 1, 1),
(24, 14, 1, 1, '001/TOA/2015/STIKESNAS/stock', 1, 1),
(25, 15, 1, 1, '001/LCD/2017/STIKESNAS/stock', 1, 1),
(26, 16, 1, 1, '001/LCD-P2/2014/STIKESNAS/stock', 1, 1),
(27, 17, 1, 1, '001/SC-P/2016/STIKESNAS/stock', 1, 1),
(28, 18, 1, 1, '001/DRM/2018/STIKESNAS/stock', 1, 1),
(29, 19, 1, 1, '001/Bass/2018/STIKESNAS/stock', 1, 1),
(30, 20, 1, 1, '001/Gtr/2018/STIKESNAS/stock', 1, 1),
(31, 21, 1, 1, '001/CORT/2018/STIKESNAS/stock', 1, 1),
(32, 22, 1, 1, '001/MIC/2018/STIKESNAS/stock', 1, 1),
(33, 23, 1, 1, '001/HRT/2018/STIKESNAS/stock', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `barang_pinjam`
--
ALTER TABLE `barang_pinjam`
  ADD PRIMARY KEY (`id_barang_pinjam`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `kategori_peminjaman`
--
ALTER TABLE `kategori_peminjaman`
  ADD PRIMARY KEY (`id_kategori_peminjaman`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD UNIQUE KEY `nama_lokasi` (`nama_lokasi`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `opname`
--
ALTER TABLE `opname`
  ADD PRIMARY KEY (`id_opname`);

--
-- Indexes for table `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`id_penempatan`);

--
-- Indexes for table `penomoran`
--
ALTER TABLE `penomoran`
  ADD PRIMARY KEY (`id_penomoran`),
  ADD UNIQUE KEY `penomoran` (`penomoran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `barang_pinjam`
--
ALTER TABLE `barang_pinjam`
  MODIFY `id_barang_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_peminjaman`
--
ALTER TABLE `kategori_peminjaman`
  MODIFY `id_kategori_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opname`
--
ALTER TABLE `opname`
  MODIFY `id_opname` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penempatan`
--
ALTER TABLE `penempatan`
  MODIFY `id_penempatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penomoran`
--
ALTER TABLE `penomoran`
  MODIFY `id_penomoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
