-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2019 pada 15.43
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokokoe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelangganId` varchar(10) NOT NULL,
  `namaPelanggan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`pelangganId`, `namaPelanggan`, `email`, `telpon`, `alamat`) VALUES
('PL00000004', 'Marco Simic', 'supersimic@gmail.com', '0219898', 'Apartement Springhill'),
('PL00000005', 'Fatur Rohman', 'fatur@gmail.com', '021', 'sfasfasfasfas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `namaproduk` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `qty` int(11) NOT NULL,
  `img` text NOT NULL,
  `diskipsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`namaproduk`, `harga`, `satuan`, `qty`, `img`, `diskipsi`) VALUES
('MIE Burung Dara', 10, 'Dus', 2, 'http://localhost:82/CIafif/index.php/Produk', 'sold out'),
('SALEP 88', 20, 'PACK', 3, 'http://localhost:82/phpmyadmin/sql.php?server=1&db=tokokoe&table=produk&pos=0', 'sold out'),
('SALEP 88', 20, 'PACK', 3, 'http://localhost:82/phpmyadmin/sql.php?server=1&db=tokokoe&table=produk&pos=0', 'sold out');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelangganId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
