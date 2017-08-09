-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2017 at 03:58 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kodebarang` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `harga` float(10,0) NOT NULL,
  `persediaan` int(3) DEFAULT NULL,
  `jml_fisik` varchar(50) DEFAULT NULL,
  `dff` varchar(50) DEFAULT NULL,
  `shrnkg` varchar(50) DEFAULT NULL,
  `keterangan` varchar(150) NOT NULL,
  KEY `NewIndex` (`kodebarang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebarang`, `tanggal`, `namabarang`, `harga`, `persediaan`, `jml_fisik`, `dff`, `shrnkg`, `keterangan`) VALUES
('1', '0000-00-00', 'Spicy', 15000, 5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE IF NOT EXISTS `kasir` (
  `id_ksr` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `nm_ksr` varchar(150) NOT NULL,
  PRIMARY KEY (`id_ksr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_ksr`, `nik`, `nm_ksr`) VALUES
(1, '100025194', ''),
(2, '100025194', ''),
(3, '100', 'jun');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
