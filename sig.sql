-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16 Jul 2016 pada 05.29
-- Versi Server: 5.5.49-0+deb8u1
-- PHP Version: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `merapi`
--

CREATE TABLE IF NOT EXISTS `merapi` (
`id` int(11) NOT NULL,
  `lintang` float NOT NULL DEFAULT '0',
  `bujur` float NOT NULL DEFAULT '0',
  `nama` varchar(30) NOT NULL,
  `alamat` longtext NOT NULL,
  `dayatampung` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merapi`
--

INSERT INTO `merapi` (`id`, `lintang`, `bujur`, `nama`, `alamat`, `dayatampung`) VALUES
(1, -7.59032, 110.301, 'Kantorpos Kaliurang', 'Jalan Kaliurang KM 2,7, Hargobinangun, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 150),
(3, -7.62844, 110.382, 'Kantor Kelurahan Umbulharjo', 'Cangkringan, Umbulharjo, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 250),
(4, -7.60793, 110.42, 'Kantor Kecamatan Cangkringan', 'Jl. Pakem cangkringan, Argo Mulyo, Cangkringan, Argomulyo, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 170),
(5, -7.602, 110.467, 'SMP N 2 KEMALANG', 'JL. Kemalang Km 20, Rt 16/Rw 5, Bumiharjo, Kemalang, Klaten Jawa Tengah', 380),
(6, -7.54616, 110.609, 'Alun Alun Boyolali', 'Kemiri, Mojosongo, Kabupaten Boyolali, Jawa Tengah', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merapi`
--
ALTER TABLE `merapi`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merapi`
--
ALTER TABLE `merapi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
