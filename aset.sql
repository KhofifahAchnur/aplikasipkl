-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2022 pada 18.36
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

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
-- Struktur dari tabel `aset_baru`
--

CREATE TABLE `aset_baru` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `register` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `tahun_peroleh` varchar(128) NOT NULL,
  `kondisi` varchar(128) NOT NULL,
  `asal_usul` varchar(128) NOT NULL,
  `harga_brg` varchar(25) NOT NULL,
  `ket_brg` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aset_baru`
--

INSERT INTO `aset_baru` (`id`, `nama_barang`, `kode_barang`, `register`, `merk`, `ukuran`, `bahan`, `tahun_peroleh`, `kondisi`, `asal_usul`, `harga_brg`, `ket_brg`) VALUES
(1, 'Kipas Angin', '2.6.2.4.9', '3', 'Sharp', '-', 'elekronik', '2017', 'Baik', 'Hibah', '3,950,000.00', '-'),
(3, '', '', '56789567', 'Maspion', '-', 'Electronik', '', 'Baik', 'Hibah', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aset`
--

CREATE TABLE `tbl_aset` (
  `id _aset` int(100) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `register` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `tahun_peroleh` varchar(128) NOT NULL,
  `kondisi` varchar(128) NOT NULL,
  `asal_usul` varchar(128) NOT NULL,
  `harga_brg` varchar(25) NOT NULL,
  `ket_brg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_aset`
--

INSERT INTO `tbl_aset` (`id _aset`, `nama_barang`, `kode_barang`, `register`, `merk`, `ukuran`, `bahan`, `tahun_peroleh`, `kondisi`, `asal_usul`, `harga_brg`, `ket_brg`) VALUES
(1, 'AC Split', '2.6.2.4.4', '1', 'Sharp', '-', 'elekronik', '2012', 'Baik', 'Pembelian', '3,950,000.00', '-'),
(2, 'AC Split', '2.6.2.4.4', '1', 'Sharp', '-', 'elekronik', '2012', 'Baik', 'Pembelian', '3,950,000.00', '-'),
(3, 'AC Unit', '2.6.2.4.3', '4', 'Sharp', '-', 'Besi', '2013', 'Baik', 'Hibah', '4,5000,000.00', 'BOS APBN'),
(4, 'AC Unit', '2.6.2.4.3', '4', 'Sharp', '-', 'Besi', '2013', 'Baik', 'Hibah', '4,5000,000.00', 'BOS APBN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aset_baru`
--
ALTER TABLE `aset_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_aset`
--
ALTER TABLE `tbl_aset`
  ADD PRIMARY KEY (`id _aset`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aset_baru`
--
ALTER TABLE `aset_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_aset`
--
ALTER TABLE `tbl_aset`
  MODIFY `id _aset` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
