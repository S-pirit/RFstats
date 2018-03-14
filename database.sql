-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 06:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rf`
--

-- --------------------------------------------------------

--
-- Table structure for table `ccel`
--

CREATE TABLE `ccel` (
  `id_ccel` int(11) NOT NULL,
  `ccel_rnc` varchar(12) DEFAULT NULL,
  `ccel_sector` varchar(50) DEFAULT NULL,
  `ccel_date` date DEFAULT NULL,
  `avail` decimal(6,3) DEFAULT NULL,
  `rrcSuccess` decimal(6,2) DEFAULT NULL,
  `rabSuccess` decimal(6,2) DEFAULT NULL,
  `deniedCall` decimal(6,2) DEFAULT NULL,
  `dropCall` decimal(6,2) DEFAULT NULL,
  `traffic` decimal(6,2) DEFAULT NULL,
  `noise` decimal(6,2) DEFAULT NULL,
  `maxPower` decimal(6,2) DEFAULT NULL,
  `avgPower` decimal(6,2) DEFAULT NULL,
  `codeSuccess` decimal(6,2) DEFAULT NULL,
  `rtwp` decimal(6,2) DEFAULT NULL,
  `usuariosDl` decimal(6,2) DEFAULT NULL,
  `usuariosUl` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hsdpa`
--

CREATE TABLE `hsdpa` (
  `id_hsdpa` int(11) NOT NULL,
  `hsdpa_rnc` varchar(12) DEFAULT NULL,
  `hsdpa_sector` varchar(50) DEFAULT NULL,
  `hsdpa_date` date DEFAULT NULL,
  `deniedHSDPA` decimal(5,2) DEFAULT NULL,
  `dropHSDPA` decimal(5,2) DEFAULT NULL,
  `thput` decimal(8,2) DEFAULT NULL,
  `avgHSUPA` decimal(5,2) DEFAULT NULL,
  `avgHSDPA` decimal(5,2) DEFAULT NULL,
  `maxHSUPA` int(11) DEFAULT NULL,
  `maxHSDPA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rnc`
--

CREATE TABLE `rnc` (
  `id_rnc` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id_sector` varchar(50) NOT NULL,
  `id_rnc` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ccel`
--
ALTER TABLE `ccel`
  ADD PRIMARY KEY (`id_ccel`);

--
-- Indexes for table `hsdpa`
--
ALTER TABLE `hsdpa`
  ADD PRIMARY KEY (`id_hsdpa`);

--
-- Indexes for table `rnc`
--
ALTER TABLE `rnc`
  ADD PRIMARY KEY (`id_rnc`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id_sector`),
  ADD KEY `id_rnc` (`id_rnc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccel`
--
ALTER TABLE `ccel`
  MODIFY `id_ccel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hsdpa`
--
ALTER TABLE `hsdpa`
  MODIFY `id_hsdpa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `sector_ibfk_1` FOREIGN KEY (`id_rnc`) REFERENCES `rnc` (`id_rnc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
