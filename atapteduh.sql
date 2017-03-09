-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 09:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atapteduh`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(250) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tgl_mulai`, `tgl_selesai`, `Keterangan`) VALUES
(1, 'Pameran JCC', '2017-03-01', '2017-03-31', 'Jakarta Convention Centre'),
(3, 'Garut Expo', '2017-03-01', '2017-03-10', 'Lokasi Di Garut');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `nama_perusahaan` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `datetime` datetime NOT NULL,
  `nama_sales` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `event_id`, `nama`, `no_telepon`, `nama_perusahaan`, `jabatan`, `email`, `datetime`, `nama_sales`) VALUES
(1, 1, 'dimas', '085793664802', 'Atap Teduh Lestari', 'IT', 'mahendradimas21@gmail.com', '0000-00-00 00:00:00', ''),
(2, 1, 'Ayu', '089637214524', 'Atap Teduh Lestari', 'IT', 'ayu@gmail.com', '0000-00-00 00:00:00', ''),
(3, 1, 'Udin', '08562078910', 'ABC', 'Sales', 'udin@gmail.com', '0000-00-00 00:00:00', ''),
(4, 1, 'Dimas', '085793664802', 'Atap Teduh', 'IT', 'mahendradimas21@gmail.com', '2017-03-03 15:00:00', ''),
(5, 1, 'Bobo', '085793664802', 'Gramedia', 'Sales', 'bobo@gramedia.com', '0000-00-00 00:00:00', ''),
(6, 3, 'Fikri', '085793664802', 'WGS', 'Sales', 'Fikri@gmail.com', '2017-03-29 00:00:00', ''),
(7, 2, 'Muhammad', '085793664802', 'ABC', 'IT', 'muhammad@gmail.com', '2017-03-01 00:00:00', ''),
(8, 2, 'Iko', '08562078910', 'PT.Indofood', 'Sales', 'iko@indofood.com', '2017-03-03 11:01:13', ''),
(9, 1, 'Gilang', '085793664802', 'Telkom', 'Sales', 'gilang@gmail.com', '2017-03-06 04:23:12', ''),
(10, 1, 'sarah', '08562078910', 'Jafra', 'Sales', 'sarah@gmail.com', '2017-03-06 11:42:38', ''),
(11, 1, 'Boni', '08562078910', 'Boni Corp', 'sales', 'boni@gmail.com', '2017-03-06 11:44:13', ''),
(12, 3, 'Dino', '08562078910', 'ABC', 'Sales', 'dino@gmail.com', '2017-03-06 12:12:10', 'Dimas Eka Mahendra'),
(13, 3, 'Timo', '08', '', '', '', '2017-03-06 13:54:10', 'admin'),
(14, 1, 'Popi', '08562078910', 'ABC', 'Sales', 'popi@gmail.com', '2017-03-06 13:56:22', 'admin'),
(15, 1, 'Popi', '08562078910', 'ABC', 'Sales', 'popi@gmail.com', '2017-03-06 13:59:37', 'admin'),
(16, 1, 'po', '08', 'abc', 'Sales', 'popi@gmail.com', '2017-03-06 14:00:12', 'admin'),
(17, 1, 'po', '08562078910', 'ABC', 'Sales', 'popi@gmail.com', '2017-03-06 14:01:36', 'admin'),
(18, 1, 'Muhammad', '08562078910', 'ABC', 'Sales', 'muhammad@gmail.com', '2017-03-06 14:02:34', 'admin'),
(19, 1, 'Paijo', 'asasas', 'PT. ABC', 'Admin', 'adminabc@yahoo.com', '2017-03-06 15:09:49', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(250) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', 'admin', '1', 'admin'),
(2, 'demo', 'demo', '1', 'demo'),
(3, 'dimas', 'dimas', '2', 'Dimas Eka Mahendra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
