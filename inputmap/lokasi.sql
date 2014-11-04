-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. Maret 2013 jam 16:37
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajarphpdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `idlokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `nama`, `lat`, `lng`) VALUES
(1, 'STMIK AKAKOM', '-7.794847518477426', '110.4063911166993'),
(2, 'Universitas Negeri Yogyakarta', '-7.776393949238045', '110.38742253454598'),
(3, 'Universitas Gajah Mada', '-7.772354465134464', '110.37733742864998'),
(4, 'Universitas Ahmad Dahlan', '-7.810239043860753', '110.38896748693855');
