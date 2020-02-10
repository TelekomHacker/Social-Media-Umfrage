-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 11:21 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umfrage`
--

-- --------------------------------------------------------

--
-- Table structure for table `fragen`
--

CREATE TABLE `fragen` (
  `id` int(20) NOT NULL,
  `index1` varchar(20) NOT NULL,
  `index2` varchar(20) NOT NULL,
  `index3` text NOT NULL,
  `index4` text NOT NULL,
  `index5` int(11) NOT NULL COMMENT 'Fremdschlüssel',
  `index6` int(11) NOT NULL COMMENT 'Fremdschlüssel',
  `index7` int(11) NOT NULL COMMENT 'Fremdschlüssel',
  `index8` varchar(20) NOT NULL,
  `index9` int(1) NOT NULL,
  `index10` int(1) NOT NULL,
  `index11` int(1) NOT NULL,
  `index12` int(1) NOT NULL,
  `index13` int(1) NOT NULL,
  `index14` int(1) NOT NULL,
  `index15` int(1) NOT NULL,
  `index16` int(1) NOT NULL,
  `index17` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messengerdienste`
--

CREATE TABLE `messengerdienste` (
  `m_ip` text COLLATE latin1_german1_ci NOT NULL,
  `MD_ID` int(11) NOT NULL,
  `Whatsapp` tinyint(1) NOT NULL,
  `Snapchat` tinyint(1) NOT NULL,
  `Telegram` tinyint(1) NOT NULL,
  `Threema` tinyint(1) NOT NULL,
  `Fbmessenger` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `messengerdienste`
--

INSERT INTO `messengerdienste` (`m_ip`, `MD_ID`, `Whatsapp`, `Snapchat`, `Telegram`, `Threema`, `Fbmessenger`) VALUES
('::1', 7, 1, 1, 0, 0, 0),
('::1', 8, 0, 0, 0, 0, 0),
('::1', 9, 0, 0, 0, 0, 0),
('::1', 10, 1, 1, 0, 0, 0),
('::1', 11, 0, 0, 0, 0, 0),
('::1', 12, 1, 1, 0, 0, 0),
('::1', 13, 1, 1, 0, 0, 0),
('::1', 14, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nutzungsdauer`
--

CREATE TABLE `nutzungsdauer` (
  `n_ip` int(11) NOT NULL,
  `ND_ID` int(11) NOT NULL,
  `Instagram` smallint(6) DEFAULT NULL,
  `YouTube` smallint(6) DEFAULT NULL,
  `Twitter` smallint(6) DEFAULT NULL,
  `Facebook` smallint(6) DEFAULT NULL,
  `TikTok` smallint(6) DEFAULT NULL,
  `Pinterest` smallint(6) DEFAULT NULL,
  `WhatsApp` smallint(6) DEFAULT NULL,
  `Snapchat` smallint(6) DEFAULT NULL,
  `Telegram` smallint(6) DEFAULT NULL,
  `Threema` smallint(6) DEFAULT NULL,
  `FB_Messenger` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutzungsdauer`
--

INSERT INTO `nutzungsdauer` (`n_ip`, `ND_ID`, `Instagram`, `YouTube`, `Twitter`, `Facebook`, `TikTok`, `Pinterest`, `WhatsApp`, `Snapchat`, `Telegram`, `Threema`, `FB_Messenger`) VALUES
(0, 1, 111, 222, 333, 0, 0, 0, 187, 187, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaapps`
--

CREATE TABLE `socialmediaapps` (
  `s_ip` text COLLATE latin1_german1_ci NOT NULL,
  `SM_ID` int(11) NOT NULL,
  `Instagram` tinyint(1) NOT NULL,
  `Youtube` tinyint(1) NOT NULL,
  `Twitter` tinyint(1) NOT NULL,
  `Facebook` tinyint(1) NOT NULL,
  `Tiktok` tinyint(1) NOT NULL,
  `Pinterest` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `socialmediaapps`
--

INSERT INTO `socialmediaapps` (`s_ip`, `SM_ID`, `Instagram`, `Youtube`, `Twitter`, `Facebook`, `Tiktok`, `Pinterest`) VALUES
('::1', 7, 1, 1, 1, 0, 0, 0),
('::1', 8, 1, 1, 1, 0, 0, 0),
('::1', 9, 1, 1, 1, 0, 0, 0),
('::1', 10, 1, 1, 1, 0, 0, 0),
('::1', 11, 1, 1, 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messengerdienste`
--
ALTER TABLE `messengerdienste`
  ADD PRIMARY KEY (`MD_ID`);

--
-- Indexes for table `nutzungsdauer`
--
ALTER TABLE `nutzungsdauer`
  ADD PRIMARY KEY (`ND_ID`);

--
-- Indexes for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  ADD PRIMARY KEY (`SM_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fragen`
--
ALTER TABLE `fragen`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messengerdienste`
--
ALTER TABLE `messengerdienste`
  MODIFY `MD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nutzungsdauer`
--
ALTER TABLE `nutzungsdauer`
  MODIFY `ND_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  MODIFY `SM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
