-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 05:46 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(9, 'Sholdan', 'user', 'Bekasi Selatan', 'Perempuan', '08990978654', '33333333333334444555', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(11, 'admin Sholdan', 'admin', 'Bekasi Barat', 'Laki-laki', '081111111', '123456', '21232f297a57a5a743894a0e4a801fc3', 1),
(16, 'Abdullah Sholdan', 'user2', 'Kayuringin Jaya', 'Laki-laki', '08990978654', '33333333333333333333333333333333333', '202cb962ac59075b964b07152d234b70', 2),
(17, 'PSBO', 'user', 'Kayuringin Jaya', 'Laki-laki', '214124', '33333333333333333333333333333333333', '28c8edde3d61a0411511d3b1866f0636', 2),
(18, 'Abdullah Sholdan', 'user3', 'Kayuringin Jaya', 'Perempuan', '08990978654', '3333333333333444455566', 'c4ca4238a0b923820dcc509a6f75849b', 2),
(19, 'PSBO', 'user3', 'Kayuringin Jaya', 'Laki-laki', '214124', '41241', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id_dealer` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_dealer` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `kode_type` varchar(128) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `kode_type`, `merk`, `harga`, `warna`, `tahun`, `status`, `gambar`) VALUES
(11, ' 002', 'Honda CBR150R', '50.000.000', 'Hitam', '2021', '1', ''),
(14, ' 003', 'Kawasaki', '130.000.000', 'Black', '2017', '1', 'r6.jpg'),
(17, ' 004', 'Vespa Matic', '33.000.000', 'Putih', '2020', '0', 'vesmet.jpg'),
(18, ' 005', 'Hayabusa', '200.000.000', 'Black', '2017', '1', 'hayabusa.jpg'),
(19, ' 001', 'New Vario 160', '33.000.000', 'Putih', '2021', '0', 'vario1601.jpg'),
(20, ' 001', 'New Vario 160', '33.000.000', 'Merah', '2021', '1', 'Performa-Vario-150-2018-1200x6751.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_dealer` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `tgl_pengantaran` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `alamat_antar` varchar(256) NOT NULL,
  `nama_penerima` varchar(128) NOT NULL,
  `no_penerima` varchar(128) NOT NULL,
  `status_admin` varchar(50) NOT NULL,
  `status_dealer` varchar(50) NOT NULL,
  `tgl_antar_kurir` varchar(128) NOT NULL,
  `nama_kurir` varchar(128) NOT NULL,
  `no_kurir` varchar(128) NOT NULL,
  `tracking` varchar(256) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_dealer`, `id_customer`, `id_motor`, `tgl_pengantaran`, `harga`, `alamat_antar`, `nama_penerima`, `no_penerima`, `status_admin`, `status_dealer`, `tgl_antar_kurir`, `nama_kurir`, `no_kurir`, `tracking`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(31, 9, 16, '2022-05-12', 'Rp. 250.000.000', 'Jl Nuri 3 No 999 Bekasi Selatan ', 'Satria', '0899123478', '', 'Proses', '2022-05-20', 'Andri', '08999999', 'Sedang proses administrasi oleh Dealer', 'Detail-Success.png', 1),
(32, 9, 17, '2022-05-30', '33.000.000', 'Jl Nuri 3 No 999 Bekasi Selatan ', 'Satria', '08121221212', '', 'Proses', '', '', '', '', 'Abdullah_Sholdan_Rona.pdf', 1),
(33, 9, 19, '2022-05-30', '33.000.000', 'Kayuringin Jaya', 'Abdul', '124124124', '-', 'Belum Selesai', '', '', '', '', '', 0),
(34, 9, 14, '0000-00-00', '130.000.000', 'Jl Nuri 3 No 999 Bekasi Selatan ', 'Satria', '88686868868', '-', 'Belum Selesai', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(4, '001', 'Motor Matic'),
(5, '002', 'Motor Bebek '),
(6, '003', 'Motor Sport '),
(7, '004', 'Motor Skuter '),
(8, '005', 'Uji coba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id_dealer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_dealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
