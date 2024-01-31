-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 11:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `Id_peserta` int(11) NOT NULL,
  `Kd_skema` varchar(7) NOT NULL,
  `Nm_peserta` varchar(50) NOT NULL,
  `Jekel` varchar(25) NOT NULL,
  `Alamat` text NOT NULL,
  `No_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`Id_peserta`, `Kd_skema`, `Nm_peserta`, `Jekel`, `Alamat`, `No_hp`) VALUES
(1, 'SKM-001', 'Rintan Febrianti', 'Perempuan', 'Garut', '081122333444'),
(2, 'SKM-003', 'Sani Abdurahman', 'Laki-laki', 'Garut', '089909090900');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE `skema` (
  `Kd_skema` varchar(7) NOT NULL,
  `Nm_skema` varchar(50) NOT NULL,
  `Jenis` varchar(20) NOT NULL,
  `Jml_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`Kd_skema`, `Nm_skema`, `Jenis`, `Jml_unit`) VALUES
('SKM-001', 'Junior Web Depeloper', 'KKNI', 6),
('SKM-002', 'Digital Marketing', 'Klaster', 10),
('SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10),
('SKM-004', 'Network Administrator Muda', 'KKNI', 5),
('SKM-005', 'Business Analyst', 'Klaster', 10),
('SKM-006', 'System Analist', 'KKNI', 10),
('SKM-007', 'Edit berhasil', 'KKNI', 10),
('SKM-008', 'Edit Lagi sukses', 'Klaster', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`Id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `Id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
