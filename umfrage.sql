-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Feb 2020 um 13:02
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `umfrage`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragen`
--

CREATE TABLE `fragen` (
  `id` int(20) NOT NULL,
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
-- Tabellenstruktur für Tabelle `messengerdienste`
--

CREATE TABLE `messengerdienste` (
  `m_ip` int(20) NOT NULL,
  `Whatsapp` tinyint(1) NOT NULL,
  `Snapchat` tinyint(1) NOT NULL,
  `Telegram` tinyint(1) NOT NULL,
  `Threema` tinyint(1) NOT NULL,
  `Fbmessenger` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nutzungsdauer`
--

CREATE TABLE `nutzungsdauer` (
  `n_ip` int(20) NOT NULL,
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
-- Tabellenstruktur für Tabelle `nutzungsgruende`
--

CREATE TABLE `nutzungsgruende` (
  `nt_ip` int(20) NOT NULL,
  `Memes` int(1) NOT NULL,
  `Beruflich` int(1) NOT NULL,
  `Prominente` int(1) NOT NULL,
  `Freunde` int(1) NOT NULL,
  `Hochladen` int(1) NOT NULL,
  `Lifestyles` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `socialmediaapps`
--

CREATE TABLE `socialmediaapps` (
  `s_ip` int(20) NOT NULL,
  `Instagram` tinyint(1) NOT NULL,
  `Youtube` tinyint(1) NOT NULL,
  `Twitter` tinyint(1) NOT NULL,
  `Facebook` tinyint(1) NOT NULL,
  `Tiktok` tinyint(1) NOT NULL,
  `Pinterest` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `messengerdienste`
--
ALTER TABLE `messengerdienste`
  ADD PRIMARY KEY (`m_ip`);

--
-- Indizes für die Tabelle `nutzungsdauer`
--
ALTER TABLE `nutzungsdauer`
  ADD PRIMARY KEY (`n_ip`);

--
-- Indizes für die Tabelle `nutzungsgruende`
--
ALTER TABLE `nutzungsgruende`
  ADD PRIMARY KEY (`nt_ip`);

--
-- Indizes für die Tabelle `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  ADD PRIMARY KEY (`s_ip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
