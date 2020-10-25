-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 05:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `email`, `password`) VALUES
('20201018093116', 'user20201018093116', 'guru', 'guru123');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id_room` varchar(20) NOT NULL,
  `id_judul` varchar(20) NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id_room`, `id_judul`, `judul`) VALUES
('4854', 'test list', 'Test Development'),
('4854', 'test list', 'Proccess');

-- --------------------------------------------------------

--
-- Table structure for table `listed`
--

CREATE TABLE `listed` (
  `id_room` varchar(20) NOT NULL,
  `id_akun` varchar(20) NOT NULL,
  `id_judul` varchar(20) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listed`
--

INSERT INTO `listed` (`id_room`, `id_akun`, `id_judul`, `judul`, `isi`) VALUES
('9442', '20201018093116', 'judul-percobaan', 'percobaan', 'muantap jiwaaaa'),
('9442', '20201018093116', 'judul-mantappu jiwa', 'mantappu jiwa', 'opening started');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_akun` varchar(20) NOT NULL,
  `id_room` varchar(20) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_akun`, `id_room`, `time`) VALUES
('20201018093116', '9442', '00:00:00'),
('20201018093801', '4854', '00:00:00'),
('20201025093431', '9417', '00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
