-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 10:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblblood`
--

CREATE TABLE `tblblood` (
  `id` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `group` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblblood`
--

INSERT INTO `tblblood` (`id`, `name`, `group`, `height`, `weight`) VALUES
('1', 'sakib', 'A+', '165', '75'),
('2', 'Tuhin', 'A-', '167', '176'),
('3', 'Tangila', 'B+', '165.1', '81'),
('4', 'Parijat', 'B-', '150', '45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblblood`
--
ALTER TABLE `tblblood`
  ADD PRIMARY KEY (`id`,`name`,`group`,`height`,`weight`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
