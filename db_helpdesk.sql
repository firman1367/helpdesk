-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jul 2017 pada 09.04
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(34) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `registered` datetime NOT NULL,
  `status` varchar(15) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`, `fullname`, `username`, `registered`, `status`, `level`) VALUES
(1, 'muhammad.firman@muktiabadisadaya.co.id', '4649caea9d26077e9b99adcdff514664', 'Muhammad Firman', 'Firman', '2017-07-12 09:19:00', 'opened', 'super_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `id_cty` int(11) NOT NULL,
  `name_cty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`id_cty`, `name_cty`) VALUES
(1, 'PRINTER'),
(2, 'MICROSOFT OFFICE'),
(3, 'PHOTOCOPY'),
(4, 'VOIP PHONE'),
(5, 'EMAIL'),
(6, 'CONNECTION'),
(7, 'ACCOUNT SETTING'),
(8, 'HARDWARE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_department`
--

CREATE TABLE `tb_department` (
  `id_dpt` int(11) NOT NULL,
  `name_dpt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_department`
--

INSERT INTO `tb_department` (`id_dpt`, `name_dpt`) VALUES
(4, 'BUSINESS UNIT'),
(5, 'BIRO JASA'),
(6, 'ACCOUNTING & FINANCE'),
(7, 'HUMAN RESOURCE'),
(8, 'OFFICE MANAGEMENT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_employe`
--

CREATE TABLE `tb_employe` (
  `id_employe` int(11) NOT NULL,
  `username_employe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_employe`
--

INSERT INTO `tb_employe` (`id_employe`, `username_employe`) VALUES
(1, 'SULISTIYO'),
(2, 'SILVIA J HITIJAHUBESSY'),
(3, 'RIO IROTH'),
(4, 'AHMAD GANDI'),
(5, 'ERWIN'),
(6, 'HERLINA'),
(7, 'HENRY ROMASI'),
(8, 'PAIMAN'),
(9, 'ZED ACHMAD'),
(10, 'HARYADI'),
(11, 'SARYANTA'),
(12, 'BAMBANG WIGUTOMO'),
(13, 'TAUFIK HIDAYAT'),
(14, 'TRANSIMA K'),
(15, 'M DANIL'),
(16, 'RICKI APRIYANTO'),
(17, 'SEMERU'),
(18, 'SAPTO WIBOWO'),
(19, 'SUBAGIO'),
(20, 'RIRI MEILINDA SUMARI'),
(21, 'BRAMANTO'),
(22, 'SANDI KURNIAWAN'),
(23, 'MALIK HANAPI'),
(24, 'DEDY TJAHYADI'),
(25, 'NINA FEBRINA'),
(26, 'ARY MARYONO'),
(27, 'ALDRIANA EKA SOHANA'),
(28, 'MUHAMMAD FIRMAN'),
(29, 'ABDUL RIFAI'),
(30, 'MUHAMMAD MAHFUDIN'),
(31, 'ASEP SUSANTO'),
(32, 'IBRAHIM'),
(33, 'RIESA NORSEPTIA'),
(34, 'RULLIYANDI'),
(35, 'DARMA PUTRA'),
(36, 'SUPARDIYANTO'),
(37, 'DIANISA BUNGASURI'),
(38, 'IMAM SANDJAYA'),
(39, 'AHMAD DHUHRI NUR SHIDIQ'),
(40, 'ARI ABDILLAH'),
(41, 'MUHAMMAD CALA'),
(42, 'JIHAN NABILAH'),
(43, 'FAHMI SYAMSYUL'),
(44, 'CLARA CELIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ticket`
--

CREATE TABLE `tb_ticket` (
  `id` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `id_dpt` int(11) NOT NULL,
  `id_cty` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `date_requested` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `action` varchar(30) NOT NULL,
  `status` varchar(25) NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ticket`
--

INSERT INTO `tb_ticket` (`id`, `id_employe`, `id_dpt`, `id_cty`, `title`, `date_requested`, `date_updated`, `action`, `status`, `problem`) VALUES
(18, 38, 6, 2, 'excel', '2017-07-24 16:21:37', '2017-07-24 16:22:18', 'solved', 'closed', 'Not Respon Berulang ualang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_cty`);

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`id_dpt`);

--
-- Indexes for table `tb_employe`
--
ALTER TABLE `tb_employe`
  ADD PRIMARY KEY (`id_employe`);

--
-- Indexes for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `id_dpt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_employe`
--
ALTER TABLE `tb_employe`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
