-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 08:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaes`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `id_consultant` int(20) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`id_consultant`, `code`, `name`) VALUES
(0, 'jsjdhjshdja', 'ksjdkadjk');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(20) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oncall`
--

CREATE TABLE `oncall` (
  `id_oncall` int(11) NOT NULL,
  `anaethethist` varchar(20) NOT NULL,
  `cardiac` varchar(20) NOT NULL,
  `cardiologist` varchar(20) NOT NULL,
  `earnose` varchar(20) NOT NULL,
  `gsurgeon` varchar(20) NOT NULL,
  `gphysician` varchar(20) NOT NULL,
  `nephrologist` varchar(20) NOT NULL,
  `gastroentologist` varchar(20) NOT NULL,
  `neurosurgeon` varchar(20) NOT NULL,
  `obstretrician` varchar(20) NOT NULL,
  `ophtalmologist` varchar(20) NOT NULL,
  `orthopaedic` varchar(20) NOT NULL,
  `paediatrician` varchar(20) NOT NULL,
  `plasticsurgeon` varchar(20) NOT NULL,
  `urologist` varchar(20) NOT NULL,
  `psychiatrist` varchar(20) NOT NULL,
  `md` varchar(20) NOT NULL,
  `hod` varchar(20) NOT NULL,
  `moic` varchar(20) NOT NULL,
  `um_am` varchar(20) NOT NULL,
  `um_pm` varchar(20) NOT NULL,
  `um_night` varchar(20) NOT NULL,
  `mo_am` varchar(20) NOT NULL,
  `mo_pm` varchar(20) NOT NULL,
  `mo_night` varchar(20) NOT NULL,
  `lab1` varchar(20) NOT NULL,
  `lab2` varchar(20) NOT NULL,
  `radiograph` varchar(20) NOT NULL,
  `radiologist` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `onleave`
--

CREATE TABLE `onleave` (
  `id_onleave` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`id_consultant`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`);

--
-- Indexes for table `oncall`
--
ALTER TABLE `oncall`
  ADD PRIMARY KEY (`id_oncall`);

--
-- Indexes for table `onleave`
--
ALTER TABLE `onleave`
  ADD PRIMARY KEY (`id_onleave`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oncall`
--
ALTER TABLE `oncall`
  ADD CONSTRAINT `oncall_ibfk_1` FOREIGN KEY (`id_oncall`) REFERENCES `onleave` (`id_onleave`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
aaesmanageroncallonleaveoncallmanager