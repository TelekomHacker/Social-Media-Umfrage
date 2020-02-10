-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 02:02 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

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
  `F_ID` int(11) NOT NULL,
  `index1` int(1) NOT NULL,
  `index2` int(1) NOT NULL,
  `index3` int(1) NOT NULL,
  `index4` int(1) NOT NULL,
  `index5` int(20) NOT NULL COMMENT 'Fremdschlüssel',
  `index6` int(20) NOT NULL COMMENT 'Fremdschlüssel',
  `index7` int(20) NOT NULL COMMENT 'Fremdschlüssel',
  `index8` int(20) NOT NULL COMMENT 'Fremdschlüssel',
  `index9` int(1) NOT NULL COMMENT 'Fremdschlüssel',
  `index10` int(1) NOT NULL,
  `index11` int(1) NOT NULL,
  `index12` int(1) NOT NULL,
  `index13` int(1) NOT NULL,
  `index14` int(1) NOT NULL,
  `index15` int(1) NOT NULL,
  `index16` int(1) NOT NULL,
  `index17` int(1) NOT NULL,
  `index18` int(1) NOT NULL,
  `index19` int(1) NOT NULL,
  `index20` int(1) NOT NULL,
  `index21` int(1) NOT NULL,
  `index22` int(1) NOT NULL,
  `index23` int(1) NOT NULL,
  `index24` int(1) NOT NULL,
  `index25` int(1) NOT NULL,
  `index26` int(1) NOT NULL,
  `index27` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messengerdienste`
--

CREATE TABLE `messengerdienste` (
  `m_ip` int(20) NOT NULL,
  `M_ID` int(11) NOT NULL,
  `Whatsapp` tinyint(1) NOT NULL,
  `Snapchat` tinyint(1) NOT NULL,
  `Telegram` tinyint(1) NOT NULL,
  `Threema` tinyint(1) NOT NULL,
  `Fbmessenger` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nutzungsdauer`
--

CREATE TABLE `nutzungsdauer` (
  `n_ip` int(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `nutzungsgruende`
--

CREATE TABLE `nutzungsgruende` (
  `nt_ip` int(20) NOT NULL,
  `NG_ID` int(11) NOT NULL,
  `Memes` int(1) NOT NULL,
  `Beruflich` int(1) NOT NULL,
  `Prominente` int(1) NOT NULL,
  `Freunde` int(1) NOT NULL,
  `Hochladen` int(1) NOT NULL,
  `Lifestyles` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaapps`
--

CREATE TABLE `socialmediaapps` (
  `s_ip` int(20) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `Instagram` tinyint(1) NOT NULL,
  `Youtube` tinyint(1) NOT NULL,
  `Twitter` tinyint(1) NOT NULL,
  `Facebook` tinyint(1) NOT NULL,
  `Tiktok` tinyint(1) NOT NULL,
  `Pinterest` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `messengerdienste`
--
ALTER TABLE `messengerdienste`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `nutzungsdauer`
--
ALTER TABLE `nutzungsdauer`
  ADD PRIMARY KEY (`ND_ID`);

--
-- Indexes for table `nutzungsgruende`
--
ALTER TABLE `nutzungsgruende`
  ADD PRIMARY KEY (`NG_ID`);

--
-- Indexes for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fragen`
--
ALTER TABLE `fragen`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messengerdienste`
--
ALTER TABLE `messengerdienste`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutzungsdauer`
--
ALTER TABLE `nutzungsdauer`
  MODIFY `ND_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutzungsgruende`
--
ALTER TABLE `nutzungsgruende`
  MODIFY `NG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
