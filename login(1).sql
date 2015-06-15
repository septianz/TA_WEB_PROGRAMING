-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2015 pada 11.24
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acc`
--

CREATE TABLE IF NOT EXISTS `acc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `namakaos` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nope` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `acc`
--

INSERT INTO `acc` (`ID`, `namakaos`, `nama`, `alamat`, `ukuran`, `jumlah`, `nope`) VALUES
(1, 'Kaos Onodera', 'a', 'a', 'XL', 2, '0978670862313');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`ID`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaos`
--

CREATE TABLE IF NOT EXISTS `kaos` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `bahan` varchar(15) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kaos`
--

INSERT INTO `kaos` (`no`, `nama`, `bahan`, `ukuran`, `harga`, `foto`, `status`) VALUES
(1, 'Kaos Onodera', 'combed 30s', 'M,L,XL', 105000, 'onodera.jpg', 'Available'),
(2, 'kaos one ok rock', 'combed 30s', 'M,L,XL', 105000, 'oor.jpg', 'available'),
(4, 'Rikudo long tees', 'combed 24s', 'M,L,XL', 100000, 'rikudo.jpg', 'available'),
(5, 'Hoddie Kaneki', 'Combed 24s', 'M,L,XL', 100000, 'kaneki.jpg', 'available');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `namakaos` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nope` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`ID`, `namakaos`, `nama`, `alamat`, `ukuran`, `jumlah`, `nope`) VALUES
(9, 'Kaos Onodera', 'a', 'a', 'XL', 2, '0978670862313'),
(10, 'Rikudo long tees', 'Septianto EN', 'Darakan timur KG.II/997 prenggan kotagede yogyakarta', 'XL', 1, '0978670862313');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
