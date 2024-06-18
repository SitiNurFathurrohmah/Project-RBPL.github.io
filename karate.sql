-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 17, 2024 at 02:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1234, 'sarjana', 's123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subjek` varchar(100) NOT NULL,
  `Pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `Nama`, `Email`, `Subjek`, `Pesan`) VALUES
(1, 'sifa', 'sif@gmail.com', 'latihan', 'apakah ada latihan di hari rabu?'),
(2, 'Yayank', 'yayank@gmail.com', 'pendaftaran peserta', 'Apakah pendaftaran masih dibuka?');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_karate`
--

CREATE TABLE `daftar_karate` (
  `id_daftar` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telepon` varchar(20) NOT NULL,
  `Tgl_lahir` text NOT NULL,
  `Umur` int(2) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_karate`
--

INSERT INTO `daftar_karate` (`id_daftar`, `Nama`, `Email`, `Telepon`, `Tgl_lahir`, `Umur`, `Alamat`) VALUES
(6, 'Siti Nur Fathurrohmah', '', '08983675458', '28-11-2003', 20, 'Pulokadang, Canden, Jetis, Bantul'),
(7, 'M. Nur Fauzan', '', '089856854375', '29-01-1998', 26, 'Imogiri, Bantul'),
(8, 'Cintya Dewi', '', '089856854375', '01-10-2000', 24, 'Imogiri, Bantul'),
(9, 'Efrida', 'efrida@gmail.com', '098765434567', '21-09-2005', 18, 'Bangeran'),
(10, 'siti', 'Fauzan@gmail.com', '089856854375', '29-01-1998', 17, 'Imogiri, Bantul');

-- --------------------------------------------------------

--
-- Table structure for table `latihan`
--

CREATE TABLE `latihan` (
  `id_latihan` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `id_pelatih` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latihan`
--

INSERT INTO `latihan` (`id_latihan`, `hari`, `jam`, `tempat`, `id_pelatih`) VALUES
(1, 'Jumat', '10.00', 'Lapangan sumberagung', 0),
(2, 'Minggu', '14.00 - 17.00 WIB', 'GOR Pendowoharjo Sewon', 0),
(3, 'Kamis', '14.00 - 17.00 WIB', 'GOR Pendowoharjo Sewon', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelatih`
--

CREATE TABLE `pelatih` (
  `id_pelatih` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `id_pertandingan` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tanggal` varchar(50) NOT NULL,
  `Tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertandingan`
--

INSERT INTO `pertandingan` (`id_pertandingan`, `Nama`, `Tanggal`, `Tempat`) VALUES
(1, 'Yogyakarta Open Championship', '23 - 25 Agustus 2024', 'GOR Amograga '),
(2, 'Karate National Championship', '7 - 9 Juni 2024', 'GOR Jatidiri Semarang'),
(3, 'DIY Open Championship 2024', '22 - 23 Juni 2024', 'GOR Amongraga Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `daftar_karate`
--
ALTER TABLE `daftar_karate`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `latihan`
--
ALTER TABLE `latihan`
  ADD PRIMARY KEY (`id_latihan`);

--
-- Indexes for table `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`id_pelatih`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`id_pertandingan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftar_karate`
--
ALTER TABLE `daftar_karate`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `latihan`
--
ALTER TABLE `latihan`
  MODIFY `id_latihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `id_pertandingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
