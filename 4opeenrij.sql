-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jan 2019 om 00:42
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

--
-- Gegevens worden geëxporteerd voor tabel `endgame`
--

INSERT INTO `endgame` (`endgameid`, `user1`, `user2`, `gamearray`, `turns`, `name1`, `name2`, `gamesize`, `winner`) VALUES
(0, 3, 1, '[[\"q\",\"q\",\"q\",\"q\",\"q\",\"w\",\"w\",\"w\",\"w\",\"q\"],[\"w\",\"w\",\"q\",\"q\",\"w\",\"q\",\"w\",\"w\",\"w\",\"q\"],[\"w\",\"w\",\"q\",\"q\",\"w\",\"q\",\"w\",\"w\",\"w\",\"q\"],[\"w\",\"w\",\"q\",\"q\",\"w\",\"q\",\"w\",\"w\",\"w\",\"q\"],[\"w\",\"w\",\"q\",\"q\",\"q\",\"q\",\"q\",\"w\",\"w\",\"q\"],[\"q\",\"w\",\"q\",\"q\",\"q\",\"q\",\"w\",\"w\",\"w\",\"q\"],[\"q\",\"w\",\"q\",\"w\",\"w\",\"q\",\"w\",\"w\",\"w\",\"q\"],[\"q\",\"w\",\"q\",\"w\",\"w\",\"q\",\"q\",\"w\",\"w\",\"q\"],[\"q\",\"w\",\"q\",\"q\",\"q\",\"q\",\"w\",\"w\",\"w\",\"q\"],[\"w\",\"q\",\"q\",\"q\",\"q\",\"w\",\"w\",\"w\",\"w\",\"q\"]]', 101, 'tim', 'erwin', 10, 'none'),
(15, 1, 3, '[[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"q\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"q\",\"q\",\"w\",\"q\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"w\",\"q\",\"w\",\"w\",\"w\",\"w\",\"o\",\"o\",\"o\",\"o\"]]', 2, 'erwin', 'tim', 10, 'tim'),
(18, 1, 3, '[[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"]]', 0, 'erwin', 'tim', 10, 'erwin'),
(19, 1, 3, '[[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"q\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"q\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"w\",\"q\",\"q\",\"q\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"w\",\"w\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"]]', 0, 'erwin', 'tim', 10, 'erwin'),
(20, 3, 1, '[[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"q\",\"w\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"]]', 0, 'tim', 'erwin', 10, 'tim');

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

--
-- Gegevens worden geëxporteerd voor tabel `friendrequests`
--

INSERT INTO `friendrequests` (`requestid`, `touser`, `fromuser`, `friendname`, `currentname`) VALUES
(3, 5, 1, 'timve', 'erwin');

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

--
-- Gegevens worden geëxporteerd voor tabel `friends`
--

INSERT INTO `friends` (`friendid`, `user1`, `user2`, `user1name`, `user2name`) VALUES
(2, '3', '1', 'tim', 'erwin'),
(3, '1', '6', 'erwin', 'jan'),
(4, '6', '3', 'jan', 'tim'),
(5, '3', '4', 'tim', 'test'),
(6, '1', '4', 'erwin', 'test');

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

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameid`, `user1`, `user2`, `gamearray`, `turns`, `name1`, `name2`, `turn`, `gamesize`) VALUES
(7, 3, 1, '[[\"o\",\"q\",\"q\",\"q\",\"q\",\"o\",\"o\",\"o\",\"w\",\"q\"],[\"o\",\"q\",\"q\",\"w\",\"w\",\"w\",\"w\",\"o\",\"q\",\"w\"],[\"o\",\"q\",\"q\",\"q\",\"w\",\"w\",\"w\",\"o\",\"w\",\"w\"],[\"w\",\"q\",\"w\",\"q\",\"w\",\"q\",\"w\",\"w\",\"q\",\"q\"],[\"q\",\"q\",\"q\",\"q\",\"w\",\"w\",\"w\",\"q\",\"w\",\"w\"],[\"q\",\"w\",\"w\",\"q\",\"q\",\"q\",\"w\",\"w\",\"q\",\"q\"],[\"q\",\"w\",\"q\",\"w\",\"q\",\"q\",\"q\",\"q\",\"w\",\"w\"],[\"w\",\"q\",\"q\",\"w\",\"q\",\"w\",\"w\",\"w\",\"q\",\"q\"],[\"q\",\"w\",\"w\",\"w\",\"q\",\"w\",\"w\",\"w\",\"w\",\"w\"],[\"q\",\"q\",\"w\",\"q\",\"q\",\"w\",\"w\",\"q\",\"q\",\"w\"]]', 103, 'tim', 'erwin', 2, 10),
(16, 3, 1, '[[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"w\",\"q\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"]]', 2, 'tim', 'erwin', 1, 10),
(17, 1, 3, '[[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"],[\"w\",\"q\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\",\"o\"]]', 2, 'erwin', 'tim', 1, 10);

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
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`ID`, `uname`, `email`, `pw`, `wongames`, `lostgames`, `tie`) VALUES
(1, 'erwin', 'erwinvenneker13@gmail.com', '$2y$10$hDHOjsro0QaptQLIOF0FFO.TDS2YsW.UBXvaOs67YbxAEMBj569.W', 14, 23, 5),
(3, 'tim', 'timvenneker@live.nl', '$2y$10$C6U1WKJm34zoKprRrAypNOqWpqqGWUaKDm2hffe6WvfuFZhy4Hvui', 23, 14, 5),
(4, 'test', 'test@test.com', '$2y$10$Zlbzd6mx7Tv8xMZwSfIkruj1yefZY8au6SUH4XhfbGgPEX8Uy6M3q', 0, 0, 0),
(5, 'timve', 'timve@localhost.com', '$2y$10$burVI3Wi22jDd8U5EoD9xOV3Cm12PvW1C4poSEj1FevTTgjGZQeWq', 0, 0, 0),
(6, 'jan', 'jan@jan.com', '$2y$10$iWgPjNhlYZ3/dSAcwdGYdOHvRRa9pViBGG8E0or0QBMOHIGjd8Dhq', 0, 0, 0);

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
  MODIFY `friendid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `gamerequest`
--
ALTER TABLE `gamerequest`
  MODIFY `gamerequestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `gameid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
