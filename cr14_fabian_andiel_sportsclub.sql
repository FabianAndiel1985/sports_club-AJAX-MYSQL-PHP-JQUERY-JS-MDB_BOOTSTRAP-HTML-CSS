-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Aug 2019 um 19:25
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_fabian_andiel_sportsclub`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Admin1', 'admin@admin.com', '12345678');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin_messages`
--

CREATE TABLE `admin_messages` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `admin_messages`
--

INSERT INTO `admin_messages` (`id`, `firstname`, `lastname`, `message`, `email`) VALUES
(37, 'Fantastic', 'coder', 'Hi, this is my first message', 'fantastic@coding.com'),
(41, 'Cool', 'Man', 'the second message', 'cool@man.at'),
(42, 'Member1', 'M', '3rd message', 'm@m.com'),
(43, 'trainer1', 't', '4th message', 't@t.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

CREATE TABLE `courses` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` enum('Fitness','Martial Art','Chill Out') DEFAULT NULL,
  `course_hours` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`id`, `name`, `category`, `course_hours`, `description`, `img`) VALUES
(14, 'Yoga', 'Chill Out', 'Mo 19:00-20:00', 'Traditional indian way of relaxation', 'images/course1.jpg'),
(15, 'Zen meditation', 'Chill Out', 'Di 17:00-18:00', 'really relaxing', 'images/course2.jpg'),
(16, 'Running ', 'Fitness', 'Wed 17:00-18:00', 'Going running together is more fun!', 'images/course3.jpg'),
(17, 'Le Parkour', 'Fitness', 'Tue 18:00-!9:00', 'spectecular free running', 'images/course4.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(6) UNSIGNED NOT NULL,
  `course_ID_FK` int(6) UNSIGNED DEFAULT NULL,
  `students_ID_FK` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `enrollment`
--

INSERT INTO `enrollment` (`id`, `course_ID_FK`, `students_ID_FK`) VALUES
(15, 14, 1),
(16, 15, 1),
(17, 17, 2),
(18, 15, 2),
(19, 17, 3),
(20, 17, 4),
(21, 16, 4),
(22, 15, 4),
(23, 14, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `zip` mediumint(8) UNSIGNED NOT NULL,
  `city` varchar(20) NOT NULL,
  `telephone` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `valid_membership` enum('true','false') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `adress`, `zip`, `city`, `telephone`, `email`, `pass`, `valid_membership`) VALUES
(1, 'Johannes', 'Musclebro', 'pump street 8', 1050, 'vienna', 123456, 'test@test.com', '1', 'true'),
(2, 'Markus', 'Roehrich', 'Stuwer Avenue', 1020, 'vienna', 1234567, 'm.r@testmail.com', '1234567', 'true'),
(3, 'Sepp', 'Ladstaetter', 'Ladenstaette 1', 1060, 'Wien', 12334566, 's.l@sl.com', '6789', 'true'),
(4, 'Max', 'Musertester', 'Road', 1010, 'vienna', 1234567, 'test1@test.com', '1234567', 'true');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rooms`
--

CREATE TABLE `rooms` (
  `id` int(6) UNSIGNED NOT NULL,
  `availability` enum('available','not available') DEFAULT NULL,
  `rent_hour` tinyint(4) DEFAULT NULL,
  `size_sqm` tinyint(4) DEFAULT NULL,
  `mats` enum('available','not available') DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rooms`
--

INSERT INTO `rooms` (`id`, `availability`, `rent_hour`, `size_sqm`, `mats`, `img`) VALUES
(1, 'available', 40, 15, 'not available', 'images/room1.jpg'),
(2, 'available', 70, 25, 'available', 'images/room2.jpg'),
(3, 'not available', 80, 30, 'available', 'images/room3.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `trainers`
--

CREATE TABLE `trainers` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `disciplines` varchar(60) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `zip` mediumint(8) UNSIGNED DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `telephone` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `trainers`
--

INSERT INTO `trainers` (`id`, `firstname`, `lastname`, `disciplines`, `adress`, `zip`, `city`, `telephone`, `email`, `password`) VALUES
(1, 'Max', 'Muscleman', 'olympic weightlifting, bodybuilding', 'test avenue 4', 1050, 'vienna', 4596161, 'max@muscleman.at', '1234');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `admin_messages`
--
ALTER TABLE `admin_messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `admin_messages`
--
ALTER TABLE `admin_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT für Tabelle `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT für Tabelle `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT für Tabelle `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
