-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2015 at 05:31 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `magangdimana`
--
CREATE DATABASE IF NOT EXISTS `magangdimana` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `magangdimana`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `persyaratan` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `tgl_berkas` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_perusahaan` (`id_perusahaan`),
  KEY `kategori` (`kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `id_perusahaan`, `kategori`, `posisi`, `persyaratan`, `tgl_upload`, `tgl_berkas`, `tgl_mulai`, `tgl_selesai`) VALUES
(1, 1, 1, 'Web Designer', 'ipk minimal 4.5\r\nharus bisa baca tulis\r\ntidak mudah sedih\r\ndan semangat terus', '2014-12-01', '2014-12-02', '2014-12-03', '2015-01-01'),
(2, 1, 1, 'Web Programmer', 'ipk minimal 4.5\r\nharus bisa baca tulis\r\ntidak mudah sedih\r\ndan semangat terus', '2014-12-01', '2014-12-02', '2014-12-03', '2015-01-01'),
(4, 2, 1, 'Software Analyst', 'Syarat minimal IPK 3.0, Pekerja keras, Tidak mudah menyerah, bejerja senin sampai sabtu', '2015-01-01', '2015-01-01', '2015-01-01', '2015-01-01'),
(5, 3, 1, 'Project Manager', 'Berpengalaman menjadi PM selama minimal 2 tahun. IPK minimal 3.5. ', '2015-01-01', '2015-01-01', '2015-01-01', '2015-01-01'),
(6, 4, 1, 'Programmer', 'Rajin bekerja\r\nipk minimal 3,4\r\nmenguasai bahasa pemrograman PHP', '2014-12-27', '2015-01-12', '2015-02-01', '2015-03-31'),
(8, 5, 3, 'pemasaran/marketing', 'sehat jasmani dan rohani', '2014-12-29', '2015-01-14', '2015-02-01', '2015-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Informatika'),
(2, 'Pertanian'),
(3, 'Komunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  `koordinat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `alamat`, `email`, `telepon`, `deskripsi`, `logo`, `koordinat`) VALUES
(1, 'Ngarsapura Creative Media', 'Jalan Sultan Agung no 7', 'ngarsapuracreative@gmail.com', '0812345678', 'Ngarsapura adalah salah satu perusahaan yang bergerak di bidang software', 'ngarsapura.png', '-7.56855, 110.82970'),
(2, 'Creativindo', 'Laweyan, Surakarta', 'creativindo@mgil.com', '0812345678', 'creativindo adalah salah satu perusahaan yang bergerak di bidang software', 'creativindo.png', '-7.57331, 110.78404'),
(3, 'Technophoria', 'Jl. Perumnas 98 Seturan, Yogyakarta', 'admin@technophoria.com', '0274736912', 'Technoporia adalah salah satu perusahaan yang bergerak di bidang software', 'technophoria.png', '-7.774822,110.40447');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
