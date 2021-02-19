-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 08:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_bayar`
--

CREATE TABLE `detail_bayar` (
  `id_detail_bayar` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `unique_number` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(13) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `jenkel` varchar(2) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `kelas`, `jurusan`, `tgl_lahir`, `tempat_lahir`, `jenkel`, `no_telp`, `agama`, `alamat`) VALUES
(1, '1920103332', 'Budi Karyoo', '10R1', 'R', '2000-02-19', 'Tangerang', '', '', 'Islam', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nip` varchar(13) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nip`, `nama`, `password`, `status`) VALUES
(1, '99200111', 'Aldian Syahputra', '202cb962ac59075b964b07152d234b70', 1),
(2, '9920223', 'Budi Aman', '00dfc53ee86af02e742515cdcf075ed3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembayaran`
--

CREATE TABLE `transaksi_pembayaran` (
  `id_transaksi` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `unique_number` varchar(20) NOT NULL,
  `nip` varchar(13) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_bayar`
--
ALTER TABLE `detail_bayar`
  ADD PRIMARY KEY (`id_detail_bayar`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `transaksi_pembayaran`
--
ALTER TABLE `transaksi_pembayaran`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_bayar`
--
ALTER TABLE `detail_bayar`
  MODIFY `id_detail_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_pembayaran`
--
ALTER TABLE `transaksi_pembayaran`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
