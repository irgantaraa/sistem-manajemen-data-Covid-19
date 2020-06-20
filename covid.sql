-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 11:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `username`, `password`, `nama`) VALUES
(1, 'irgantara', '40d5559175ce33acb695ef805366841c', 'Irgantara Arda Pratama'),
(2, 'arda', 'fdd6e0e1461590d5d12cee056fcde3c9', 'arda pratama');

-- --------------------------------------------------------

--
-- Table structure for table `indonesia`
--

CREATE TABLE `indonesia` (
  `id_covid` int(10) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `confirmed` varchar(255) NOT NULL,
  `recovery` varchar(255) NOT NULL,
  `death` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indonesia`
--

INSERT INTO `indonesia` (`id_covid`, `lokasi`, `confirmed`, `recovery`, `death`) VALUES
(1, 'DKI Jakarta', '9222', '4329', '557'),
(2, 'Jawa Timur', '8308', '2325', '637'),
(3, 'Sulawesi Selatan', '3116', '1088', '123'),
(4, 'Jawa Barat', '2662', '1151', '162'),
(5, 'Jawa Tengah', '2231', '795', '121'),
(6, 'Kalimantan Selatan', '2122', '253', '135'),
(7, 'Sumatera Selatan', '1498', '670', '57'),
(8, 'Papua', '1281', '294', '7'),
(9, 'Banten', '1277', '485', '79'),
(10, 'Sumatera Utara', '957', '222', '66'),
(11, 'Nusa Tenggara Barat', '957', '623', '35'),
(12, 'Bali', '782', '510', '6'),
(13, 'Sulawesi Utara', '701', '115', '59'),
(14, 'Sumatera Barat', '687', '459', '30'),
(15, 'Kalimantan Tengah', '657', '243', '37'),
(16, 'Maluku', '496', '111', '13'),
(17, 'Kalimantan Timur', '392', '275', '4'),
(18, 'Maluku Utara', '315', '48', '22'),
(19, 'Sulawesi Tenggara', '291', '203', '5'),
(20, 'DI Yogyakarta', '273', '213', '8'),
(21, 'Kalimantan Barat', '270', '167', '4'),
(22, 'Kepulauan Riau', '254', '149', '16'),
(23, 'Gorontalo', '214', '90', '8'),
(24, 'Papua Barat', '212', '94', '3'),
(25, 'Sulawesi Tengah', '172', '125', '4'),
(26, 'Kalimantan Utara', '171', '137', '2'),
(27, 'Lampung', '166', '116', '12'),
(28, 'Kepulauan Bangka Belitung', '145', '63', '3'),
(29, 'Riau', '126', '111', '6'),
(30, 'Nusa Tenggara Timur', '108', '40', '1'),
(31, 'Bengkulu', '104', '63', '6'),
(32, 'Sulawesi Barat', '98', '71', '2'),
(33, 'Aceh', '27', '20', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `indonesia`
--
ALTER TABLE `indonesia`
  ADD PRIMARY KEY (`id_covid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `indonesia`
--
ALTER TABLE `indonesia`
  MODIFY `id_covid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
