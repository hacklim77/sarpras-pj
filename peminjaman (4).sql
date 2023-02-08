-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 05:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `id_kategori`, `merk`, `kondisi`, `jumlah`, `tgl_pembelian`, `status`) VALUES
(1, 'MO1', 'Meja Front Office', 2, '', 'Baik', 1, '2011-01-04', 1),
(2, 'TFO1', 'Telepon Front Office ', 1, 'Favorites                                   ', 'Baik', 2, '2016-02-03', 1),
(3, 'TFO2', 'Telepon Front Office ', 1, 'Panasonic', 'Baik', 1, '2011-07-07', 1),
(4, 'ZENA600', 'Meja TV Front Office', 2, 'ZENA', 'Baik', 1, '2015-07-10', 1),
(5, 'KO1', 'Kursi Front Office', 2, 'Chitose', 'Baik', 2, '2015-07-17', 1),
(6, 'KO2', 'Kursi Front Office Hijau', 2, 'Chitose', 'Baik', 1, '2015-03-04', 1),
(7, 'TVLG1', 'TV LG Front Office', 4, 'LG', 'Baik', 1, '2012-06-05', 1),
(8, 'TVBOX1', 'TV Box IP Streaming Telkom', 4, 'Huawei', 'Baik', 1, '2012-02-07', 1),
(9, 'KOT1', 'Kursi Tinggi Pink', 2, '', 'Baik', 2, '2013-06-08', 1),
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
(23, 'HRT', 'Speaker Bass', 6, 'Hartkey', 'Baik', 1, '2018-02-24', 1),
(24, 'HZYio', 'Ubiquito', 4, 'Indi Home', 'Baik', 4, '2022-09-07', 1),
(25, 'A004', 'PC', 4, 'Samsung', 'Baik', 6, '2022-09-23', 1);

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
  `status_kembali` int(1) NOT NULL,
  `surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `no_keluar`, `nama_peminjam`, `nohp`, `tgl_keluar`, `tgl_kembali`, `keterangan`, `status_kembali`, `surat`) VALUES
(61, 200922102, 'Prabu', '085800889448', '2022-09-22', '2022-09-23', 'pinjam acara', 0, ''),
(62, 200922272, 'Doni', '087688999555', '2022-09-29', '2022-09-29', 'pinjam acara', 0, ''),
(63, 101022248, 'Jhon Wick', '085788990998', '2022-10-21', '2022-10-23', 'keperluan acara rapat', 0, ''),
(64, 101022132, 'Dimas', '080979875654', '2022-10-18', '2022-10-20', 'pinjam', 0, ''),
(65, 111022224, 'sherlock', '089776778776', '2022-10-12', '2022-10-14', 'wlqhfiowiovg', 0, ''),
(66, 41122261, 'Toro', '0987809098', '2022-11-18', '2022-11-20', 'acara', 0, ''),
(67, 41122141, 'Toni', '0787887878', '2022-11-23', '2022-11-24', 'acara', 0, ''),
(68, 80223131, 'Yui', '087899009888', '2023-02-23', '2023-02-25', 'acara', 0, ''),
(69, 80223270, 'kykui', '16511468', '2023-02-10', '2023-02-14', 'wwww', 0, 'Lampiran-kykui-2023-02-10.pdf'),
(70, 80223137, 'paidi', '166118646', '2023-02-10', '2023-02-11', 'lompm', 0, 'Lampiran-paidi-2023-02-10.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `barang_pinjam`
--

CREATE TABLE `barang_pinjam` (
  `id_barang_pinjam` int(11) NOT NULL,
  `id_barang_keluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penomoran` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang_pinjam`
--

INSERT INTO `barang_pinjam` (`id_barang_pinjam`, `id_barang_keluar`, `id_barang`, `jumlah`, `penomoran`, `status`) VALUES
(65, 61, 1, 1, '019/2014/stikesnas', 0),
(66, 61, 2, 1, '016/2014/stikesnas', 0),
(67, 62, 13, 1, '', 0),
(68, 62, 14, 1, '', 0),
(69, 63, 1, 1, '', 0),
(70, 63, 2, 2, '017/2001/2019/STIKESNAS/1010\r\n018/2001/2019/STIKESNAS/1010\r\n', 0),
(71, 64, 7, 1, '', 0),
(72, 64, 8, 1, '', 0),
(73, 65, 1, 1, '', 0),
(74, 65, 2, 1, '', 0),
(75, 66, 1, 1, '', 0),
(76, 66, 2, 1, '', 0),
(77, 66, 3, 1, '', 0),
(78, 67, 1, 1, '', 0),
(79, 67, 2, 1, '', 0),
(80, 67, 3, 1, '', 0),
(81, 67, 4, 1, '', 0),
(82, 68, 13, 5, '', 0),
(83, 69, 1, 1, '', 0),
(84, 70, 1, 1, '', 0);

--
-- Triggers `barang_pinjam`
--
DELIMITER $$
CREATE TRIGGER `stok` AFTER UPDATE ON `barang_pinjam` FOR EACH ROW IF new.status = 1
THEN
    UPDATE barang c
    SET c.jumlah=c.jumlah - new.jumlah 
    WHERE c.id_barang=new.id_barang;
ELSEIF new.status = 2
THEN
    UPDATE barang b
    SET b.jumlah=b.jumlah + new.jumlah 
    WHERE b.id_barang=new.id_barang;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE `penempatan` (
  `id_penempatan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `auto` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `status`) VALUES
(1, 'sarpras', 'sarpras', 'Sarpras Stikesnas', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `barang_pinjam`
--
ALTER TABLE `barang_pinjam`
  MODIFY `id_barang_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
