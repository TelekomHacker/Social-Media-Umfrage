-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Jan 2020 um 11:31
-- Server-Version: 10.4.8-MariaDB
-- PHP-Version: 7.3.10

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
-- Tabellenstruktur für Tabelle `messengerdienste`
--

CREATE TABLE `messengerdienste` (
  `MD_ID` int(11) NOT NULL,
  `Whatsapp` tinyint(1) NOT NULL,
  `Snapchat` tinyint(1) NOT NULL,
  `Telegram` tinyint(1) NOT NULL,
  `Threema` tinyint(1) NOT NULL,
  `Fbmessenger` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE `person` (
  `P_ID` int(11) NOT NULL,
  `Altersgruppe` smallint(6) NOT NULL,
  `Geschlecht` tinytext COLLATE latin1_german1_ci NOT NULL,
  `Beruf` tinytext COLLATE latin1_german1_ci NOT NULL,
  `Lieblingsfach` tinytext COLLATE latin1_german1_ci NOT NULL,
  `SocialMediaApp` int(11) NOT NULL,
  `MessengerDienste` int(11) NOT NULL,
  `Nutzungsdauer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `socialmediaapps`
--

CREATE TABLE `socialmediaapps` (
  `SM_ID` int(11) NOT NULL,
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
-- Indizes für die Tabelle `messengerdienste`
--
ALTER TABLE `messengerdienste`
  ADD PRIMARY KEY (`MD_ID`);

--
-- Indizes für die Tabelle `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indizes für die Tabelle `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  ADD PRIMARY KEY (`SM_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `messengerdienste`
--
ALTER TABLE `messengerdienste`
  MODIFY `MD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `person`
--
ALTER TABLE `person`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  MODIFY `SM_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
