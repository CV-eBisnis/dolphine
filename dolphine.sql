-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:27 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dolphine`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `id_produk`, `jumlah_pembelian`, `id_transaksi`) VALUES
(1, 1, 6, 1),
(2, 1, 1, 8),
(3, 2, 1, 8),
(4, 3, 1, 8),
(5, 1, 2, 9),
(6, 2, 2, 9),
(7, 1, 1, 10),
(8, 4, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `status_pengiriman` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_transaksi`, `status_pengiriman`) VALUES
(1, 1, 'Diterima'),
(2, 8, 'Dikemas'),
(3, 9, 'Dikemas'),
(4, 11, 'Dikemas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `foto_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `varian_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `foto_produk`, `nama_produk`, `varian_produk`, `harga_produk`) VALUES
(1, 'gambar_1.png', 'Dholpine Wangi Jeruk', 'Jeruk', 5000),
(2, 'gambar_2.png', 'Dholpine Wangi Apel', 'Apel', 4500),
(3, 'gambar_3.png', 'Dholpine Wangi Lavender', 'Lavender', 4500),
(4, 'food.png', 'qwerty', 'logo', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `kode_unik` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tanggal`, `biaya`, `kode_unik`, `total_bayar`, `status_bayar`) VALUES
(1, 2, '2019-12-05', 30000, 75, 30075, 1),
(8, 3, '2019-12-09', 14000, 44, 14044, 1),
(9, 3, '2019-12-09', 19000, 94, 19094, 1),
(10, 3, '2019-12-16', 5000, 66, 5066, 0),
(11, 4, '2019-12-16', 12345, 81, 12426, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`, `no_hp`, `level`) VALUES
(2, 'admin@admin.com', '9c1cf42e6154478e093247e84cffe0f385bba074ce88309cc59237c1f600f7d7f1f77c96c02859d77a1b3b91fd92c5fe1894aefcf6660d1e4cf226da0b367f937qtCiC8Kw72VUOf0S0d4keITc9sLMNQz3QCFIj5pXA4=', 'Administrator', '', '', 'admin'),
(3, 'awang@baqy.com', '9c7aa5d7ceeda48d57bfd1121ddab898712082862088e81bc73857b4c103462e0d2bc12953891505bd80b7c6e8fdd9d91dfaff43c28717cecd3000090d82e4dd5QgH0SJpITAUCPs7YO0RDZ0tafRK1zPL+0MfP4LGavI=', 'Awang Baqy', 'Malang', '08123456789', 'user'),
(4, 'riza@baqy.com', '6152cffc34f60796afeeb2a0bc789430fe87fe2c2d2c51d4a7d277c3b0ee7bef6184fdc32bde1ef2a10cd6cd55acbecc0e741919da57888de6554422696690f3BUt1sZ6SMpeII6Q1/0URyHFWMDeTHxU3p0chRQFk6pE=', 'Riza Baqy', 'Sidoarjo', '0987654321', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
