-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 feb 2019 om 14:04
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4opeenrij`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `endgame`
--

CREATE TABLE `endgame` (
  `endgameid` int(11) NOT NULL,
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL,
  `gamearray` text NOT NULL,
  `turns` int(11) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `gamesize` int(11) NOT NULL,
  `winner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `friendrequests`
--

CREATE TABLE `friendrequests` (
  `requestid` int(11) NOT NULL,
  `touser` int(11) NOT NULL,
  `fromuser` int(11) NOT NULL,
  `friendname` varchar(255) NOT NULL,
  `currentname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `friends`
--

CREATE TABLE `friends` (
  `friendid` int(11) NOT NULL,
  `user1` varchar(255) NOT NULL,
  `user2` varchar(255) NOT NULL,
  `user1name` varchar(255) NOT NULL,
  `user2name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gamerequest`
--

CREATE TABLE `gamerequest` (
  `gamerequestid` int(11) NOT NULL,
  `requestfrom` int(11) NOT NULL,
  `requestto` int(11) NOT NULL,
  `fromname` varchar(255) NOT NULL,
  `toname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `gameid` int(11) NOT NULL,
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL,
  `gamearray` text NOT NULL,
  `turns` int(11) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `turn` int(11) NOT NULL,
  `gamesize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pw` varchar(250) NOT NULL,
  `wongames` int(11) NOT NULL,
  `lostgames` int(11) NOT NULL,
  `tie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `endgame`
--
ALTER TABLE `endgame`
  ADD PRIMARY KEY (`endgameid`);

--
-- Indexen voor tabel `friendrequests`
--
ALTER TABLE `friendrequests`
  ADD PRIMARY KEY (`requestid`);

--
-- Indexen voor tabel `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friendid`);

--
-- Indexen voor tabel `gamerequest`
--
ALTER TABLE `gamerequest`
  ADD PRIMARY KEY (`gamerequestid`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameid`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `friendrequests`
--
ALTER TABLE `friendrequests`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `friends`
--
ALTER TABLE `friends`
  MODIFY `friendid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `gamerequest`
--
ALTER TABLE `gamerequest`
  MODIFY `gamerequestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `gameid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
