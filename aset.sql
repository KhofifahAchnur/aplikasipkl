-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 09:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id` int(11) NOT NULL,
  `perpindahan_id` int(11) DEFAULT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `register` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `asal_usul` varchar(255) NOT NULL,
  `harga_brg` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id`, `perpindahan_id`, `nama_barang`, `kode_barang`, `register`, `merk`, `ukuran`, `bahan`, `tahun`, `kondisi`, `asal_usul`, `harga_brg`, `tanggal_masuk`) VALUES
(3, 19, 'AC Split', '2.6.2.4.4', '1', 'Sharp/-', '-', 'Electronik', '2012', 'Baik', 'Pembelian', '3,950,000,00', '2022-01-27'),
(4, 19, 'AC Unit', '2.6.2.4.3', '1', 'Sharp', '-', 'Plastik', '2008', 'Kurang Baik', 'Pembelian', '3,500,000,00', '2022-01-27'),
(5, 18, 'AC ', '2.6.2.4.3', '2', 'Sharp', '-', 'Plastik', '2011', 'Baik', 'Pembelian', '3,500,000,00', '2022-01-27'),
(6, 13, 'Printer', '2.6.3.4.8', '1', 'Canon', '-', 'Plastik', '2011', 'Baik', 'Pembelian', '500.000', '2022-01-27'),
(7, 20, 'Microphone', '2.7.2.1.5', '1', 'Sharp', '-', 'Besi & Plastik', '2016', 'Baik', 'Hibah', '250.000', '2022-01-27'),
(8, 13, 'Proyektor + Attachment', '2.7.1.1.3', '1', 'Tripot', '-', 'Besi Stainless', '2017', 'Rusak Berat', 'Pembelian', '550.000', '2022-01-27'),
(9, 19, 'Lemari Kaca', '2.6.1.4.12', '1', 'Maspion', '-', 'Kaca', '2009', 'Baik', 'Pembelian', '950.000', '2022-01-27'),
(10, 16, 'Bangku Sekolah', '2.6.2.4.6', '3', 'Lokal', '-', 'Kayu', '2011', 'Baik', 'Pembelian', '70.000', '2022-01-27'),
(11, 19, 'Kipas Angin ', '2.6.2.4.6', '4', 'Sanyo', '-', 'Plastik', '2011', 'Baik', 'Pembelian', '400.000', '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(3, 'admin', 1),
(4, 'member', 2);

-- --------------------------------------------------------

--
-- Table structure for table `history_kondisi`
--

CREATE TABLE `history_kondisi` (
  `id` int(11) NOT NULL,
  `aset_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kondisi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_kondisi`
--

INSERT INTO `history_kondisi` (`id`, `aset_id`, `tanggal`, `kondisi`) VALUES
(41, 11, '2022-01-30', 'Kurang Baik'),
(42, 11, '2022-01-30', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `history_perpindahan`
--

CREATE TABLE `history_perpindahan` (
  `id` int(11) NOT NULL,
  `aset_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_perpindahan`
--

INSERT INTO `history_perpindahan` (`id`, `aset_id`, `lokasi_id`, `tanggal`) VALUES
(52, 29, 8, '2022-01-18'),
(53, 29, 8, '2022-01-18'),
(54, 29, 10, '2022-01-18'),
(55, 29, 10, '2022-01-18'),
(56, 29, 10, '2022-01-18'),
(57, 29, 11, '2022-01-19'),
(58, 29, 11, '2022-01-19'),
(59, 29, 11, '2022-01-19'),
(60, 29, 10, '2022-01-19'),
(61, 29, 8, '2022-01-19'),
(62, 29, 10, '2022-01-19'),
(63, 29, 11, '2022-01-20'),
(64, 26, 10, '2022-01-20'),
(65, 29, 12, '2022-01-20'),
(66, 26, 11, '2022-01-20'),
(67, 26, 12, '2022-01-20'),
(68, 29, 11, '2022-01-20'),
(69, 0, 11, '2022-01-20'),
(70, 0, 11, '2022-01-20'),
(71, 0, 8, '2022-01-20'),
(72, 34, 12, '2022-01-20'),
(73, 33, 10, '2022-01-20'),
(74, 34, 11, '2022-01-20'),
(75, 34, 12, '2022-01-20'),
(76, 33, 12, '2022-01-20'),
(77, 35, 10, '2022-01-21'),
(78, 36, 10, '2022-01-21'),
(79, 36, 12, '2022-01-22'),
(80, 33, 10, '2022-01-22'),
(81, 41, 15, '2022-01-26'),
(82, 42, 17, '2022-01-26'),
(83, 43, 15, '2022-01-26'),
(84, 1, 19, '2022-01-27'),
(85, 3, 18, '2022-01-27'),
(86, 4, 19, '2022-01-27'),
(87, 5, 18, '2022-01-27'),
(88, 6, 20, '2022-01-27'),
(89, 7, 20, '2022-01-27'),
(90, 8, 13, '2022-01-27'),
(91, 9, 19, '2022-01-27'),
(92, 10, 16, '2022-01-27'),
(93, 11, 19, '2022-01-27'),
(94, 11, 19, '2022-01-28'),
(95, 3, 16, '2022-01-28'),
(96, 3, 19, '2022-01-29'),
(97, 6, 13, '2022-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `penanggung_jawab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `lokasi`, `penanggung_jawab_id`) VALUES
(8, 'Ruang Kepala ', 1),
(11, 'Gudang', 3),
(13, 'Ruang OSIS', 4),
(14, 'Ruang Lab IPA', 9),
(16, 'Ruang BK', 5),
(17, 'Lab BAHASA', 10),
(18, 'Ruang Lab Komputer', 6),
(19, 'Ruang Lab Bahasa', 7),
(20, 'Ruang Lab IPA', 8);

-- --------------------------------------------------------

--
-- Table structure for table `penanggung_jawab`
--

CREATE TABLE `penanggung_jawab` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penanggung_jawab`
--

INSERT INTO `penanggung_jawab` (`id`, `nama`, `nip`, `username`, `password`, `hak_akses`) VALUES
(3, 'Hj Netta Herawati', '-', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(4, 'Iwan Adi Pratama, S.Pd', '198002202009031000', 'IwanAPratama', '674f3c2c1a8a6f90461e8a66fb5550ba', 2),
(5, 'Dra. Hj. Rasuna', '196605311995122000', 'Rasuna', '674f3c2c1a8a6f90461e8a66fb5550ba', 2),
(6, 'Sudiatmoko, S.Pd', '197008271994031000', 'Sudiatmoko', '674f3c2c1a8a6f90461e8a66fb5550ba', 2),
(7, 'Norhadiyah, S.Pd', '-', 'Norhadiyah', '674f3c2c1a8a6f90461e8a66fb5550ba', 2),
(8, 'Hj. Risnawati', '196802151995122000', 'Risnawati', '674f3c2c1a8a6f90461e8a66fb5550ba', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Admin', 'nettaherawati.ac@gmail.com', 'default.jpg', '$2y$10$an1wkcbT1W6hf/dFTVC5G.ZQOeYnCbKVzQfzFaHmp76IFKMx.akFm', 1, 1, 1641350622),
(7, 'IwanA.Pratama', 'Iwanpratama@gmail.com', 'default.jpg', '$2y$10$KMlaZUw6dzY5k4otjkgsXuvZoNuifMZu48siXb1T/SqraUmZTL36W', 2, 1, 1643195282),
(8, 'Risnawati', 'risnawati@gmail.com', 'default.jpg', '$2y$10$atZvR97pF5H5QcqoxrS7j.XW/ndCnyYWC6sVVuh70zpnOkP7fXaQ.', 2, 1, 1643195388),
(9, 'Sudiatmoko', 'sudiatmoko@gmail.com', 'default.jpg', '$2y$10$Q1KLtL7WVMiNMjIowxlaN.P9NSOkWkdvyiWfv.xkLyOpyLfJTF5Fi', 2, 1, 1643195447),
(10, 'Rasuna', 'rasuna@gmail.com', 'default.jpg', '$2y$10$J/SVvthC1dx0evko5XW/mu/9N3EsQyT2Mh0rZQP8W/0albzGp3uHa', 2, 1, 1643195474);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_kondisi`
--
ALTER TABLE `history_kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_perpindahan`
--
ALTER TABLE `history_perpindahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanggung_jawab`
--
ALTER TABLE `penanggung_jawab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history_kondisi`
--
ALTER TABLE `history_kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `history_perpindahan`
--
ALTER TABLE `history_perpindahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penanggung_jawab`
--
ALTER TABLE `penanggung_jawab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
