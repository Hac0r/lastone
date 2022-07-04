-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2022 at 11:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieTime`
--

-- --------------------------------------------------------

--
-- Table structure for table `acteur`
--

CREATE TABLE `acteur` (
  `idAct` int(11) NOT NULL,
  `ActName` varchar(20) NOT NULL,
  `ActMovies` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `castList`
--

CREATE TABLE `castList` (
  `idMovies` int(11) NOT NULL,
  `idAct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `idDiscussion` int(11) NOT NULL,
  `discussion` varchar(350) NOT NULL,
  `userId` int(11) NOT NULL,
  `idMovies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `filmList`
--

CREATE TABLE `filmList` (
  `idMovies` int(11) NOT NULL,
  `idPlayL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `filmPlayer`
--

CREATE TABLE `filmPlayer` (
  `idMovies` int(11) NOT NULL,
  `idPlayer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `idGenre` int(11) NOT NULL,
  `nomG` varchar(30) NOT NULL,
  `idMovies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies_tv`
--

CREATE TABLE `movies_tv` (
  `idMovies` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `time` time NOT NULL,
  `date` varchar(10) NOT NULL,
  `describe` varchar(400) NOT NULL,
  `director` varchar(20) NOT NULL,
  `vote` int(11) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `MorS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies_tv`
--

INSERT INTO `movies_tv` (`idMovies`, `title`, `image`, `time`, `date`, `describe`, `director`, `vote`, `country`, `type`, `MorS`) VALUES
(2, 'The Adam Project', 'pickey.jpg', '01:45:00', '2022', 'After accidentally crash-landing in 2022, time-traveling fighter pilot\r\nAdam Reed teams up with his 12-year-old self on a mission to save the future.', '', NULL, 'usa', 'Comedy, Adventure, Action', 'MOVIE'),
(3, 'Venom', 'venom.jpg', '01:45:00', '2022', 'rdfgxdfcvfxvc', 'mohamed', NULL, 'USA', 'action,drama,fantasy', 'MOVIE');

-- --------------------------------------------------------

--
-- Table structure for table `notation`
--

CREATE TABLE `notation` (
  `idNot` int(11) NOT NULL,
  `notAvg` float NOT NULL,
  `idMovies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `idPlayer` int(11) NOT NULL,
  `nomPlayer` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `playList`
--

CREATE TABLE `playList` (
  `idPlayL` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `time` varchar(10) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playList`
--

INSERT INTO `playList` (`idPlayL`, `title`, `image`, `type`, `time`, `idUser`) VALUES
(1, 'Venom', 'venom.jpg', 'action,drama,fantasy', '01:45:00', 0),
(2, 'Venom', 'venom.jpg', 'action,drama,fantasy', '01:45:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `type`) VALUES
(1, 'rida', 'rida', 'admin'),
(2, 'test1', '1234', 'user'),
(3, 'test1qqq', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_ord`
--

CREATE TABLE `user_ord` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `idDiscussion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`idAct`);

--
-- Indexes for table `castList`
--
ALTER TABLE `castList`
  ADD UNIQUE KEY `idMovies` (`idMovies`,`idAct`),
  ADD KEY `idAct` (`idAct`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`idDiscussion`),
  ADD UNIQUE KEY `userId` (`userId`,`idMovies`),
  ADD KEY `idMovies` (`idMovies`);

--
-- Indexes for table `filmList`
--
ALTER TABLE `filmList`
  ADD UNIQUE KEY `idMovies` (`idMovies`,`idPlayL`),
  ADD KEY `idPlayL` (`idPlayL`);

--
-- Indexes for table `filmPlayer`
--
ALTER TABLE `filmPlayer`
  ADD UNIQUE KEY `idMovies` (`idMovies`,`idPlayer`),
  ADD KEY `idPlayer` (`idPlayer`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idGenre`),
  ADD UNIQUE KEY `idMovies` (`idMovies`);

--
-- Indexes for table `movies_tv`
--
ALTER TABLE `movies_tv`
  ADD PRIMARY KEY (`idMovies`),
  ADD UNIQUE KEY `idMovies` (`idMovies`),
  ADD UNIQUE KEY `vote` (`vote`);

--
-- Indexes for table `notation`
--
ALTER TABLE `notation`
  ADD PRIMARY KEY (`idNot`),
  ADD UNIQUE KEY `idFilm` (`idMovies`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`idPlayer`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `playList`
--
ALTER TABLE `playList`
  ADD PRIMARY KEY (`idPlayL`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `user_ord`
--
ALTER TABLE `user_ord`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD KEY `email` (`email`,`pwd`),
  ADD KEY `pwd` (`pwd`),
  ADD KEY `idDiscussion` (`idDiscussion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `idAct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `idDiscussion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies_tv`
--
ALTER TABLE `movies_tv`
  MODIFY `idMovies` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notation`
--
ALTER TABLE `notation`
  MODIFY `idNot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `idPlayer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playList`
--
ALTER TABLE `playList`
  MODIFY `idPlayL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_ord`
--
ALTER TABLE `user_ord`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `castList`
--
ALTER TABLE `castList`
  ADD CONSTRAINT `castList_ibfk_1` FOREIGN KEY (`idAct`) REFERENCES `acteur` (`idAct`);

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `discussion_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user_ord` (`userId`);

--
-- Constraints for table `filmList`
--
ALTER TABLE `filmList`
  ADD CONSTRAINT `filmList_ibfk_2` FOREIGN KEY (`idPlayL`) REFERENCES `playList` (`idPlayL`);

--
-- Constraints for table `filmPlayer`
--
ALTER TABLE `filmPlayer`
  ADD CONSTRAINT `filmPlayer_ibfk_2` FOREIGN KEY (`idPlayer`) REFERENCES `player` (`idPlayer`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user_ord` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
