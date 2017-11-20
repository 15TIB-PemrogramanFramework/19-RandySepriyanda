-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2017 at 03:25 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsport23`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(30) NOT NULL,
  `password_admin` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`, `nama_admin`) VALUES
('Dena', '123456', 'Dena Natriya A'),
('Hazard', '12345', 'Hazard Eden'),
('randy123', 'randy', 'randy sepriyanda');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stock_barang` varchar(30) NOT NULL,
  `harga_barang` varchar(30) NOT NULL,
  `ukuran_barang` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stock_barang`, `harga_barang`, `ukuran_barang`, `gambar`) VALUES
(1, 'Jersey Chelsea Home', '100', '100000', 'S M L XL', '1509536976.jpg'),
(2, 'Jersey MU Home', '100', '95000', 'S M L ', '1509536985.jpg'),
(3, 'Jersey Arsenal Home', '30', '90000', 'S M L ', '1509536992.jpg'),
(4, 'Jersey Real Madrid Home', '1000', '110000', 'S M L XL', '1509537020.jpg'),
(5, 'Jersey Barcelona', '100', '110000', 'S M L XL', '1509537026.jpg'),
(6, 'Jersey AC Milan Home', '19', '105000', '100', '1509537034.jpg'),
(7, 'Jersey Bayern Munchen', '20', '95000', 'S M L ', '1509537042.jpg'),
(9, 'Jersey Inter Home', '100', '105000', 'S M XL', '1509537048.jpg'),
(10, 'Jersey Inter Away', '10', '105000', 'S M L', '1509537055.jpg'),
(11, 'Jersey PSG Home', '100', '105000', 'S M L XL', '1509537061.jpg'),
(12, 'Jersey Barcelona Away', '10000', '50000', 'S', '1509537073.jpg'),
(13, 'Jersey Real Madrid away', '100', '100000', 'S M L XL', '1509537082.jpg'),
(14, 'Jersey Juventus Home', '100', '100000', 'S M L XL', '1509537095.jpg'),
(15, 'Jersey Chelsea Away', '100', '100000', 'S M L XL', '1509537107.jpg'),
(16, 'Jersey Liverpool Home', '100', '100000', 'S M L XL', '1509537115.jpeg'),
(17, 'Jersey Liverpool Away', '100', '100000', 'S M L XL', '1509537135.jpg'),
(18, 'Jersey AC Milan 3rd', '100', '100000', 'S M L XL', '1509537153.jpg'),
(19, 'Jersey AC Milan Away', '100', '100000', 'S M L XL', '1509537161.jpg'),
(20, 'Jersey Arsenal Away', '100', '100000', 'S M L XL', '1509537170.jpg'),
(21, 'g', 'ddd', 'a', '11', '1510114111.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(30) NOT NULL,
  `username_member` varchar(30) NOT NULL,
  `password_member` varchar(30) NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `jk_member` varchar(10) NOT NULL,
  `hp_member` varchar(20) NOT NULL,
  `alamat_member` varchar(100) NOT NULL,
  `email_member` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username_member`, `password_member`, `nama_member`, `jk_member`, `hp_member`, `alamat_member`, `email_member`) VALUES
(3, 'randy', 'randy', 'Randy Serpiyandaa', 'Laki', '08123', 'Pandau Permai Blok C.19 No.16, Aceh', 'randy15ti@mahasiswa.pcr.ac.id'),
(4, 'sepriyanda', 'sepriyanda', 'Sepriyanda', 'Pria', '08123', 'Perum Mutiara Permai D.12 No.1, Jakarta Selatan', 'sepriyanda@yahoo.com'),
(5, 'vita', 'vita', 'Vita Riyanti', 'Wanita', '08127516339', 'Perum Setia Budi no.12, Bandung, Jawa Barat', 'vita@yahoo.com'),
(6, 'hazard', '12345', 'Eden Hazard', 'Laki', '08127516339', 'Perum Makmur Indah No.12 C , Padang, Sumatera Barat', 'hazard@yahoo.com'),
(7, 'adithyany', 'baruak1', 'Adithya', 'Wanita', '085274553248', 'jln.hangtuah', 'adithya.bayu2013@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(30) NOT NULL,
  `id_pesanan` int(30) NOT NULL,
  `bank_pengirim` varchar(30) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `jumlah_pengirim` varchar(30) NOT NULL,
  `keterangan_pengirim` varchar(100) NOT NULL,
  `status_pembayaran` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_member` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pesanan`, `bank_pengirim`, `nama_pengirim`, `jumlah_pengirim`, `keterangan_pengirim`, `status_pembayaran`, `gambar`, `id_member`) VALUES
(8, 16, 'BNI', 'Eden Hazard', '100000', 'Sudah tf lewat e banking', 'Sudah Melakukan Pembayaran ', '1509756369.jpg', '6'),
(9, 17, 'BCA', 'Eden Lade', '110.000', 'Sudah transfer lewat atm', 'Sudah Melakukan Pembayaran ', '1509756389.jpg', '6'),
(10, 18, 'BCA', 'Randy', '100000', 'Sudah tf lewat e banking', 'Sudah Melakukan Pembayaran ', '1509835602.jpg', '3'),
(11, 19, 'BRI', 'Randy', '100000', 'Sudah transfer lewat atm', 'Sudah Melakukan Pembayaran ', '1509835628.jpg', '3'),
(12, 21, 'Mandiri', 'Adit', '100000', 'asiiikk', 'Sudah Melakukan Pembayaran ', '1510109221.png', '7'),
(13, 22, '', '', '', '', 'Belum Melakukan Pembayaran', '', '7'),
(14, 23, '', '', '', '', 'Belum Melakukan Pembayaran', '', '7'),
(15, 27, '', '', '', '', 'Belum Melakukan Pembayaran', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(30) NOT NULL,
  `id_member` int(30) NOT NULL,
  `id_barang` int(30) NOT NULL,
  `tanggal_pesanan` varchar(30) NOT NULL,
  `status_pesanan` varchar(30) NOT NULL,
  `jumlah_barang_pesanan` varchar(30) NOT NULL,
  `total_bayar_pesanan` varchar(30) NOT NULL,
  `barang_pesanan` varchar(30) NOT NULL,
  `jasa_pesanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_member`, `id_barang`, `tanggal_pesanan`, `status_pesanan`, `jumlah_barang_pesanan`, `total_bayar_pesanan`, `barang_pesanan`, `jasa_pesanan`) VALUES
(11, 5, 2, '2017-11-04', 'Sedang di Proses', '1', '95000', 'mu home S1', 'jne'),
(16, 6, 1, '2017-11-04', 'Sedang di Proses', '1', '100000', 'chelsea home size S1', 'jne'),
(17, 6, 4, '2017-11-04', 'Sudah di Kirim ', '1', '110000', 'madrid home S1', 'RESI POS : 1555301012'),
(18, 3, 9, '2017-11-05', 'Sudah di Kirim ', '1', '105000', 'inter home size S1', 'JNE : PKUAA12121212 '),
(19, 3, 1, '2017-11-05', 'Konfirmasi Transfer', '1', '100000', 'chelsea home size S1', 'tiki'),
(21, 7, 1, '2017-11-08', 'Sudah di Kirim ', '', '100000', 'Ori bro ukuran S', 'jne : 1323222134'),
(22, 7, 2, '2017-11-08', 'Konfirmasi Transfer', '1', '95000', '1', 'pos'),
(23, 7, 2, '2017-11-08', 'Konfirmasi Transfer', '1', '95000', 'mu home S1', 'jne'),
(26, 3, 2, '2017-11-17', 'Konfirmasi Transfer', '1', '95000', 'mu home s1', 'pos'),
(27, 3, 2, '2017-11-17', 'Konfirmasi Transfer', '1', '95000', 'mu home S1', 'pos');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` varchar(30) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `deskripsi_toko` varchar(100) NOT NULL,
  `alamat_toko` varchar(100) NOT NULL,
  `bank_rekening_toko` varchar(30) NOT NULL,
  `nama_rekening_toko` varchar(30) NOT NULL,
  `nomor_rekening_toko` varchar(30) NOT NULL,
  `hp_toko` varchar(30) NOT NULL,
  `line_toko` varchar(30) NOT NULL,
  `instagram_toko` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `deskripsi_toko`, `alamat_toko`, `bank_rekening_toko`, `nama_rekening_toko`, `nomor_rekening_toko`, `hp_toko`, `line_toko`, `instagram_toko`) VALUES
('12345678', 'RSPORT23', 'KUALITAS TERBAIK & PELAYAN TERBAIK!', 'Perum Pandau Blok C19 No.16, (Depan Kiblat Masjid Raya)KOTA PEKANBARU - BUKIT RAYA RIAU', 'BCA', 'Randy', '059-04-02-788', '081261969964', '@zcy8035m', 'RSPORT23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `id_pesanan_cs` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `id_barang_cs` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `id_member_cs` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
