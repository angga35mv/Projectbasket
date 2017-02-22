-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 04:34 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `basket_kharisma`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nm_anggota` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` char(60) NOT NULL,
  `tmp_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tgg_bdn` int(3) NOT NULL,
  `almt_anggota` varchar(50) NOT NULL,
  `jk_anggota` char(1) NOT NULL,
  `jrs_anggota` varchar(3) NOT NULL,
  `pos_bskt` varchar(2) NOT NULL,
  `foto_anggota` text NOT NULL,
  `tipe_anggota` int(1) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_anggota`, `nm_anggota`, `email`, `username`, `password`, `tmp_lhr`, `tgl_lhr`, `tgg_bdn`, `almt_anggota`, `jk_anggota`, `jrs_anggota`, `pos_bskt`, `foto_anggota`, `tipe_anggota`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '$2y$10$wi7oni4ASviNxCULaV1l6uYou2XNaIqGWkgnaerao1Bg7r0fQpHOy', 'admin', '2017-01-19', 112, ' ad ', 'P', 'TI', 'C', 'assets/uploads/file_1485176791.png', 1),
(2, 'admin1', 'admin@admin.com1', 'admin1', '$2y$10$L6gVS8kUfrKlskKcqLzMr.qvrdptqZj24a1yNRsDZeVYF7tcfemUW', 'admin', '2017-01-20', 1, 'ad', 'P', 'SI', 'PG', 'assets/uploads/file_1484923738.png', 0),
(3, 'adi', 'admin@admin.com11', 'adi', '$2y$10$hoqAjnw2Z59RL83BjH/cdumVfM66dg6OnDnRJaDEE.rjENP0VIabq', 'rumah', '2017-01-21', 1, ' ad ', 'P', 'SI', 'PG', 'assets/uploads/file_1485095195.png', 0),
(4, 'saya', 'saya@sya.com', 'saya', '$2y$10$os0eGaeDWPmfknM0o2GjKuXdnrMd85wH49prc49MasI8nZk835usm', 'rumah', '2009-06-10', 111, 'as', 'P', 'SI', 'PG', 'assets/uploads/file_1485103880.ico', 0),
(5, 'aaaaa', 'admin@admin.com1a', 'aaaaa', '$2y$10$7ymZaisba4c6TDWPIgki1OQDw0TvgQ65RTPd09aS.bJAf2XsTZuaC', 'aaaa', '2017-01-26', 1, 'aaaa', 'P', 'SI', 'PG', 'assets/uploads/file_1485360425.png', 0),
(6, 'aaaa', 'admin@admin.com1a', 'aaaa', '$2y$10$0FFSFFMJZfZ6SVdblKrPjulpTJ7ixKY2EhnajFSPwvfJXUQL.UoNC', 'aaaa', '2017-01-20', 1, 'aa', 'P', 'SI', 'PG', 'assets/uploads/file_1485360503.ico', 0),
(7, 'iswandy', 'iswandy@aa.com', 'iswandy', '$2y$10$.dcpzBSX7YG/oKU0VKZUte9sMonGSBlMjOGeUm.Y2XnETah9BVT8i', 'rumah', '2017-01-19', 1, 'aaa', 'P', 'SI', 'PG', 'assets/uploads/file_1485443952.ico', 0),
(8, 'tes', 'tes@tes.com', 'tes', '$2y$10$nurypQTy6MEVB7kGUiKGaesyzhCTPA2MJXEY1Vgm6cC2Fo4XgxCMa', 'tes', '2017-01-28', 1, 'tes', 'P', 'SI', 'PG', 'assets/uploads/file_1485533451.png', 0),
(9, 'aku', 'aku@aku.com', 'aku', '$2y$10$n6gvvXU6TztT5vs0L4oYLOzd4dtyUVIrt5X0xhQuHgDE.YSK72ujC', 'aku', '2017-01-29', 1, 'aku', 'P', 'SI', 'PG', 'assets/uploads/file_1485701203.png', 0),
(10, 'aaaaaaaaaa', 'aa@a.cimaaa', 'admina', '$2y$10$goojWnqnJEtdztAdNMR1QexEZBhhA0SAZA/21.RkU//Z0cJQywwlK', 'aaaa', '2017-01-17', 1, 'aa', 'P', 'SI', 'PG', 'assets/uploads/file_1485701385.png', 0),
(11, 'tes1', 'tes@tes.com1', 'tes1', '$2y$10$TtUN57TiVgX4ISpaLNjhQ.5Ye974TQse6ll7u6YQQvdgnuOMv6GDC', 'tes', '2017-01-13', 1, 'tes', 'P', 'SI', 'PG', 'assets/uploads/file_1485702068.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `judul_notif` varchar(30) NOT NULL,
  `isi_notif` text NOT NULL,
  `tipe_notif` char(1) NOT NULL,
  `tgl_notif` datetime NOT NULL,
  PRIMARY KEY (`id_notif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notif`, `judul_notif`, `isi_notif`, `tipe_notif`, `tgl_notif`) VALUES
(2, 'Registrasi Anggota', 'iswandy telah mendaftar sebagai anggota', 'r', '2017-01-28 00:06:06'),
(3, 'Registrasi Anggota', 'tes telah mendaftar sebagai anggota', 'r', '2017-01-27 05:10:51'),
(4, 'Registrasi Anggota', 'aku telah mendaftar sebagai anggota', 'r', '2017-01-29 03:46:43'),
(5, 'Registrasi Anggota', 'aaaaaaaaaa telah mendaftar sebagai anggota', 'r', '2017-01-29 10:49:45'),
(6, 'Registrasi Anggota', 'tes1 telah mendaftar sebagai anggota', 'r', '2017-01-29 23:01:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
