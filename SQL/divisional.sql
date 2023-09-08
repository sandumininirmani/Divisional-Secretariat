-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 11:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divisional`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(8) NOT NULL,
  `lno` varchar(255) NOT NULL,
  `doi` date DEFAULT NULL,
  `leno` varchar(255) DEFAULT NULL,
  `esno` varchar(255) DEFAULT NULL,
  `noc` varchar(255) NOT NULL,
  `hli` varchar(255) DEFAULT NULL,
  `vod` varchar(255) DEFAULT NULL,
  `mea` varchar(255) DEFAULT NULL,
  `pno` varchar(255) DEFAULT NULL,
  `lotno` varchar(255) DEFAULT NULL,
  `siz` varchar(255) DEFAULT NULL,
  `suc` varchar(255) DEFAULT NULL,
  `allo` varchar(255) DEFAULT NULL,
  `ono` varchar(255) DEFAULT NULL,
  `doio` date DEFAULT NULL,
  `odet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `lno`, `doi`, `leno`, `esno`, `noc`, `hli`, `vod`, `mea`, `pno`, `lotno`, `siz`, `suc`, `allo`, `ono`, `doio`, `odet`) VALUES
(1, 'DS-WD/LND/192/LL 593', '0000-00-00', '10000001', '987396', 'කලුපගේ සිරිල් රණවීර', 'ගැණුම්_මිල', '192 අම්පෙගම', 'නැත', 'මු.පි.ගා. 3976', '10', 'හෙක්. 0.2025', 'සුදුවැලි 0001111', 'නැත', 'GR/31/30/9138', '2027-03-22', 'blaa blaaaa'),
(2, 'GS-LND/192/LL 593', '2025-03-22', '400', '984527396', 'පගේ සිරිල් රණවීර', 'ගැණුම්_මිල', '192 අම්පෙගම', 'නැත', 'මු.පි.ගා. 3976', '10', 'හෙක්. 0.2025', 'සුදුවැලි කන්ද3', 'නැත', 'GR/31/30/9138', '2027-03-22', 'blaa blaaaa'),
(3, 'HS-/LND/192/LL 593', '2026-03-22', '3', '987254396', 'කලුපගේ සිරි', 'ගැණුම්_මිල', '192 අම්පෙගම', 'නැත', 'මු.පි.ගා. 3976', '10', 'හෙක්. 0.2025', 'සුදුවැලි කන්ද3', 'නැත', 'GR/31/30/9138', '2027-03-22', 'blaa blaaaa'),
(4, 'JS-WD/LN/192/LL 593', '2027-03-22', '4', '924587396', 'කගේ සිරිල් රණවීර', 'ගැණුම්_මිල', '192 අම්පෙගම', 'නැත', 'මු.පි.ගා. 3976', '10', 'හෙක්. 0.2025', 'සුදුවැලි කන්ද3', 'නැත', 'GR/31/30/9138', '2027-03-22', 'blaa blaaaa'),
(5, 'CS-/LND/192/LL 593', '2030-03-22', '3', '987254396', 'ලුගේ සිරිල් රණවීර', 'ගැණුම්_මිල', '192 අම්පෙගම', 'නැත', 'මු.පි.ගා. 3976', '10', 'හෙක්. 0.2025', 'සුදුවැලි කන්ද3', 'නැත', 'GR/31/30/9138', '2027-03-22', 'blaa blaaaa'),
(7, 'LS-WD/LND/1L 593', '2099-03-22', '99', '999999', '9ක 9සිරිල් රණවීර', '9ගැණුම්_මිල', '9999 අම්පෙගම', 'නැත9', 'මු.පි.ගා. 9999', '99', 'හෙක්. 0.9999', 'සුදු99වැලි ', 'නැත99', 'GR/99/30/9999', '2999-03-22', 'blaa 9999999999999999'),
(8, 'QS-/LND/192/LL 593', '2040-03-22', '20', '202020', 'ලු සිරිල් රණවීර', 'ගැණුම්_මිල', '192 අම්පෙගම', 'නැත', 'මු.පි.ගා. 3976', '10', 'හෙක්. 0.2025', 'සුදුවැලි කන්ද3', 'නැත', '20', '0000-00-00', '20baaaaaaaaaa'),
(9, 'isis949652', '2023-03-07', 'isis546546', '6+5496465isis', 'isis ---********', 'isis', 'isis', 'isis', 'isis', 'isis', 'isis', 'isis', 'isis', 'isis', '2023-03-20', 'yyyyyyyyyyyyyyyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
